<?php
session_start();
$target_dir = "uploads/";
$target_dir= $target_dir.$_SESSION['name'];
$err="";

if(isset($_POST["submit"])) {
    $target_file = basename($_FILES["file"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    if( $_FILES['file']['size']==0)
        $err="please choose a file";
 else if($imageFileType != "html") {
    $err= "Sorry, only htmlfile is allowed.";
}
else{
    $target_dir=$target_dir.".html";
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir)) {
        $err= "The file ".$target_file. " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

}
}
?>
<html>
<head>
   <title>file upload</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data" action="">
        <input type="file" name="file">
        <input type="submit" name="submit"><br/><br/>
        <span><?php echo $err;?></span>
    </form>
</body>
</html>