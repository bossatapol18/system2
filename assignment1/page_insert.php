<form action="process_page.php" method="post">
    <table>
        <tr>
            <td>ชื่อ: <input type="text" name="fname"></td>
        </tr>
        <tr>
            <td>นามสกุล: <input type="text" name="lname"></td>
        </tr>
        <tr>
            <td>Username: <input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password: <input type="text" name="password"></td>
        </tr>
        <tr>
            <td>
            <input type="hidden" name="mode" value="insert_data">
            <button>บันทึก</button>
            </td>
        </tr>
    </table>
</form>