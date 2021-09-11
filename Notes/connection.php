<?php
$link = mysqli_connect("localhost", "sandyhos_sandy17", "#123#online", "sandyhos_onlinenotes");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Hi!')</script>";
}
    ?>