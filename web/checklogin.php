<?php 
    if(!isset($_SESSION['usr'])){
        echo "<script>alert('请先登录');history.go(-2);</script>";
        exit();
    }
?>