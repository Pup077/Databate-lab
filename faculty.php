<?php
    include "connectdb.php";
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
        <form method="POST" action="insert.php">
            <input type="hidden" id="optinsert" name="optinsert" value="tbfaculty">
            <label for="facid">รหัสคณะ</label>
            <input type="text" id="facid" name="facid"><br>
            <label for="facthname">ชื่อคณะ (ภาษาไทย)</label>
            <input type="text" id="facthname" name="facthname"><br>
            <label for="facengname">ชื่อคณะ (ภาษาอังกฤษ)</label>
            <input type="text" id="facengname" name="facengname"><br>
            <label for="unid">มหาวิทยาลัย</label>
            <select id="unid" name="unid">
                <?php
                    $usql = "SELECT unid, unthname FROM tbuniversity 
                    WHERE unthname IS NOT NULL ORDER BY unthname;";
                    $res = $conn->query($usql);
                    if($res->num_rows>0){
                        while($row = $res->fetch_assoc()){
                            echo "<option value=" .'"'. $row['unid'] . '"' . ">"
                             . $row['unthname'] ."</option>";
                        }
                    }
                    $conn->close();
                ?>
            </select><br>
            <input type="submit">
            <input type="reset">
        </form>
    <body bgcolor="#CCCCFF" text="#CC99CC" background="/SWU/img/G5.jpg">
    </body>
</html>
