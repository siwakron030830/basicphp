<?php
    include '../connect.php';
    $sql = "DELETE FROM tb_user WHERE user_id='".$_REQUEST['user_id']."'";
    $query = $conn->query($sql);
    if ($query) {
        echo "<script>
        alert('ลูบข้อมูลสำเร็จ')ว
        window.location.href='../show_user.php';
        </script>";
    }else{
        echo $conn->error;
    }
?>