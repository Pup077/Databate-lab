<?php
    include "connectdb.php";
    if($conn->connect_error){
        echo "error";
    }
    echo "<h2>OK</h2><br>";
    $opt = $_POST['optinsert'];
    if($opt=="tbfaculty"){
        $facid = $_POST['facid'];
        $facthname = $_POST['facthname'];
        $facengname = $_POST['facengname'];  
        $unid = $_POST['unid'];
        $chksql = "SELECT facid FROM tbfaculty WHERE (facid=$facid 
        OR facthname = '$facthname' OR facengname = '$facengname')
        AND (unid = $unid) ;";
        $sql = "INSERT INTO tbfaculty(facid,facthname,facengname,unid) 
                VALUES ($facid,'$facthname','$facengname',$unid);";
    }elseif($opt=="tbuniversity"){
        $unid = $_POST['unid'];
        $unthname = $_POST['unthname'];
        $unengname = $_POST['unengname'];
        $chksql = "SELECT unid FROM tbuniversity WHERE unid=$unid 
        OR unthname = '$unthname' OR unengname = '$unengname';";
        $sql = "INSERT INTO tbuniversity(unid,unthname,unengname) 
                VALUES ($unid,'$unthname','$unengname');";        
    }
     $res = $conn->query($chksql);
     if($res!==false && $res->num_rows > 0){
        if($opt=="tbfaculty"){
            echo 'รหัสคณะ : ' . $facid . "<br>";
            echo 'ชื่อคณะ (ภาษาไทย) : ' . $facthname . "<br>";
            echo 'ชื่อคณะ (ภาษาอังกฤษ) : ' . $facengname . "<br>";
        }elseif($opt=="tbuniversity"){
            echo 'รหัส : ' . $unid . "<br>";
            echo 'ชื่อมหาวิทยาลัย (ภาษาไทย) : ' . $unthname . "<br>";
            echo 'ชื่อมหาวิทยาลัย (ภาษาอังกฤษ) : ' . $unengname . "<br>";
        }
        echo "<h2><font color='red'>มีข้อมูลนี้อยู่แล้ว</font></h2>";            
     }else{
        $res = $conn->query($sql);
        if($res){
            echo 'Insert Data Successfully.';
        }else{
            echo 'Error : Can not insert data.';
        }
    }
    $conn->close();
?>
