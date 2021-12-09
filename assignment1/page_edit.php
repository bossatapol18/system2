<?php 
    $id = $_REQUEST["id"];

    $sql = "SELECT * FROM main_user WHERE user_id = '$id'";

    $row = $conn->query($sql)->fetch();

    $user_id = $row["user_id"];
    $user_fname = $row["user_fname"];
    $user_lname = $row["user_lname"];
    $user_username = $row["user_username"];
    $user_password = $row["user_password"];
    $user_status = $row["user_status"];
    
?>
<form action="process_page.php" method="post">
    <table>
        <tr>
            <td>ชื่อ: <input type="text" name="fname" value="<?php echo $user_fname; ?>"></td>
        </tr>
        <tr>
            <td>นามสกุล: <input type="text" name="lname" value="<?php echo $user_lname; ?>"></td>
        </tr>
        <tr>
            <td>Username: <input type="text" name="username" value="<?php echo $user_username; ?>"></td>
        </tr>
        <tr>
            <td>Password: <input type="text" name="password" value="<?php echo $user_password; ?>"></td>
        </tr>
        <?php if($user_status == 0){?>
            <tr>
            <td>คืนสถานะ: <input type="checkbox" name="status" value="1"></td>
            </tr>
            <?php } else { ?>
                <input type="hidden" name="status" value="<?php echo $user_status; ?>">
            <?php }?>
        <tr>
            <td>
            <input type="hidden" name="mode" value="edit_data">
            <input type="hidden" name="id" value="<?php echo $user_id; ?>">
            <button>บันทึก</button>
            </td>
        </tr>
    </table>
</form>