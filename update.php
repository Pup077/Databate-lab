<?php
    include "connectdb.php";
    if($conn->connect_error){
        echo "error";
    }
    // echo "OK<br>";
    $opt = $_POST['optupdate'];
    if($opt=="tbfaculty"){
        $facid = $_POST['facid'];
        $facthname = $_POST['facthname'];
        $facengname = $_POST['facengname'];  
        $unid = $_POST['unid'];
        $chksql = "SELECT facid FROM tbfaculty WHERE (facid=$facid)  
        OR ((facthname = '$facthname' OR facengname = '$facengname')
        AND (unid = $unid)) ;";
        $sql = "INSERT INTO tbfaculty(facid,facthname,facengname,unid) 
                VALUES ($facid,'$facthname','$facengname',$unid);";
    }elseif($opt=="tbuniversity"){
        $unid = $_POST['unid'];
        $unthname = $_POST['unthname'];
        $unengname = $_POST['unengname'];
    //    $sql = "CALL upUniv($unid,$unthname,$unengname);";
        $sql = "UPDATE tbuniversity SET unthname='$unthname',unengname='$unengname'  
                WHERE unid='$unid';";
    }
    $res = $conn->query($sql);
    if($res){
        echo 'Update Data Successfully.';
    }else{
        echo 'Error : Can not insert data.';
        echo "<br>$sql";
    }
    $conn->close();
?>