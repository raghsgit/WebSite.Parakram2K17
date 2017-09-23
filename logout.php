<?php
session_start();
if(session_destroy()){
    if(isset($_COOKIE['asdfg']) and isset($_COOKIE['asdfp'])){
        setcookie('asdfg',"",time()-1);
        setcookie('asdfp',"",time()-1);
    }
    header("location:index.html");
}
?>