<!DOCTYPE html>
<?php
    include "connectdb.php";
    $unid = $_GET['unid'];
    $sql = "SELECT * FROM tbuniversity WHERE unid=$unid;";
    $res = $conn->query($sql);
    if($res !== false && $res->num_rows>0){
        $row = $res->fetch_assoc();
        // echo $row['unengname'];
?>
<html>
    <head>
    </head>
    <body>
        <div id="delc" name="delc"><h3><font color="#FF0000">คุณต้องการลบข้อมูลนี้ใช่หรือไม่?</font></h3></div>
        <form method="POST" action="delete.php">
            <input type="hidden" id="optdelete" name="optdelete" value="tbuniversity">
            <input type="hidden" id="unid" name="unid" value=<?php echo $row['unid'];?>>
            <label for="unid">รหัสมหาวิทยาลัย</label>
            <input type="text" id="dunid" name="dunid" value=<?php echo $row['unid'];?> disabled><br>
            <label for="unthname">ชื่อมหาวิทยาลัย (ภาษาไทย)</label>
            <input type="text" size="50" id="unthname" name="unthname" value=<?php echo  '"'.$row["unthname"].'"';?> disabled><br>
            <label for="unengname">ชื่อมหาวิทยาลัย (ภาษาอังกฤษ)</label>
            <input type="text" size="50" id="unengname" name="unengname" value=<?php echo '"'.$row['unengname'].'"';?> disabled><br>
            <input type="submit">
        </form>
        <button onclick="goBack()">Back</button>
    <?php $conn->close();} ?>
    <script>
        function goBack(){
            window.history.back();
        }
    </script>
    </body>
</html>