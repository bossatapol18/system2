
<?php
    include("./connect_db.php");
//      $page = $_REQUEST['PG'];
//     isset( $_POST['PG'] ) ? $PG = $_POST['PG'] : $PG = "";
    $page = (isset($_REQUEST["PG"])) ? $_REQUEST["PG"] :'';

    switch($page){
        case"1": $include_name = "รายการ";
                 $include_file = "page_list.php";
                break;
        case"2": $include_name= "เพิ่มรายการ";
                 $include_file = "page_insert.php";
                break;
        case"3": $include_name = "แก้ไขรายการ";
                 $include_file = "page_edit.php";
                break;
        default: $include_name = "รายการ";
                 $include_file = "page_list.php";
                break;
    }


?>
<table  width="500px">
        <tr align="center">
                <td>
                        <?php  echo $include_name; ?>
                </td>
        </tr>
        <tr >
                <td>
                    <a href="index.php">หน้าแรก</a> <a href="?PG=2">เพิ่มรายการ</a> 
                </td>
        </tr>
        <tr >
                <td>
                        <?php include($include_file);?>
                </td>
        </tr>
</table>

<script src="extend\jquery-3.6.0.min.js"></script>

<script>
        function add_element(mom,baby){
                var cloning = $("#" + baby).clone(true);

                cloning.css("display","");

                $("#" + mom).append(cloning);
        }
</script>