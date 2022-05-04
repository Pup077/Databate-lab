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
    <body bgcolor="#33CCCC" text="#CC99CC" background="/SWU/img/G5.jpg">
        <form>
            <label for="unid">รหัสมหาวิทยาลัย</label>
            <input type="text" id="unid" name="unid" value=<?php echo $row['unid'];?> disabled><br>
            <label for="unthname">ชื่อมหาวิทยาลัย (ภาษาไทย)</label>
            <input type="text" size="50" id="unthname" name="unthname" value=<?php echo  '"'.$row["unthname"].'"';?> disabled><br>
            <label for="unengname">ชื่อมหาวิทยาลัย (ภาษาอังกฤษ)</label>
            <input type="text" size="50" id="unengname" name="unengname" value=<?php echo '"'.$row['unengname'].'"';?> disabled><br>
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