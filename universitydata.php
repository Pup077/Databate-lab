<?php
    include "connectdb.php";
    $sql = "SELECT * FROM tbuniversity ORDER BY unid;";
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            table{
                font-size: 10px;
            }
        </style>
    </head>
    <body>
    <?php
        $res = $conn->query($sql);
        if($res !== false && $res->num_rows > 0){
    ?>
        <table border=1 cellspacing=1>
            <tr bgcolor="#CCCCFF">
                <th colwidth="5">รหัส ม.</th>
                <th colwidth="80">ชื่อ ม. (ภาษาไทย)</th>
                <th colwidth="80">ชื่อ ม. (ภาษาอังกฤษ)</th>
                <th colwidth="60" colspan="3">ดำเนินการ</th>
            </tr>
            <?php
                    while($row = $res->fetch_assoc()){
            ?>
            <tr>
                <td colwidth="5" align="center"><?php echo $row['unid']; ?></td>
                <td colwidth="80"><?php echo $row['unthname']; ?></td>
                <td colwidth="80"><?php echo $row['unengname']; ?></td>
                <?php
                    $uniseelink = "<a href=universitysee.php?unid=" . $row['unid'] .">รายละเอียด</a>";
                    $uniuplink = "<a href=universityup.php?unid=" . $row['unid'] .">ปรับปรุง</a>";
                    $unidellink = "<a href=universityed.php?unid=" . $row['unid'] . ">ลบ</a>";
                ?>
                <td colwidth="20"><?php echo $uniseelink; ?></td>                
                <td colwidth="20"><?php echo $uniuplink; ?></td>
                <td colwidth="20"><?php echo $unidellink; ?></td>
            </tr>
            <?php } ?>
        </table>
    <?php
        }else{
            echo "<h3>ไม่มีข้อมูล</h3>";
        }
        $conn->close();
    ?>
    </body>
</html>