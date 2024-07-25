<?php
include "../connect.php";
$sql = "INSERT INTO tb_user(Username,Password,fullname,Phone,email,lineToken) VALUES('".$_REQUEST["Username"]."','".$_REQUEST["Password"]."','".$_REQUEST["fullname"]."','".$_REQUEST["Phone"]."','".$_REQUEST["email"]."','".$_REQUEST["lineToken"]."')";
$query = $conn->query($sql);
if ($query) {
    echo "<script>
        alert('เพิ่มข้อมูลสำเร็จ')
        window.location.href='../register.php';
    </script>";
}else {
    echo $conn->error;
}

?>
