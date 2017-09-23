<html>
    <head><title>vhd</title></head>
    <body>
<form action="" method="post">
<input type="checkbox" name="check_list[]" value="value 1">
<input type="checkbox" name="check_list[]" value="value 2">
<input type="checkbox" name="check_list[]" value="value 3">
<input type="checkbox" name="check_list[]" value="value 4">
<input type="checkbox" name="check_list[]" value="value 5">
<input type="submit" name="lo"/>
</form>
<?php
if(isset($_POST['lo'])){
    $i=0;
    $x=array(5);
if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $check) {
        if(isset($check))
        {//echoes the value set in the HTML form for each checked checkbox.
             $x[$i]=$check ;    }
        else
            $x[$i]="0";
        $i++;//so, if I were to check 1, 3, and 5 it would echo value 1, value 3, value 5.
          
        echo $i;//in your case, it would echo whatever $row['Report ID'] is equivalent to.
    }
    foreach($x as $check)
        echo $check;

     echo $x[3];
     echo $x[2];
    
}
   
}
?>
</body></html>