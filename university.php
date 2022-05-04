<?php
    include "connectdb.php";
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
        <form method="POST" action="insert.php">
            <input type="hidden" id="optinsert" name="optinsert" value="tbuniversity">

            <label for="uid">รหัสมหาวิทยาลัย</label>
            <input type="text" id="unid" name="unid"><br>
            <label for="unthname">ชื่อมหาวิทยาลัย (ภาษาไทย)</label>
            <input type="text" id="unthname" name="unthname"><br>
            <label for="unengname">ชื่อมหาวิทยาลัย (ภาษาอังกฤษ)</label>
            <input type="text" id="unengname" name="unengname"><br>
            <input type="submit">
            <input type="reset">

        </form>
    <body bgcolor="#CCCCFF" text="red" background="/SWU/img/G5.jpg">
    </body>
</html>