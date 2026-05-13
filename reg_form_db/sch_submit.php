<?php
include "sch_db.php";

if($_SERVER["REQUEST_METHOD"]== "POST") {


    $student_id=$_POST["student_id"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];

    $sql="INSERT INTO students
    (studen_id,name,email,phone)
    VALUES
    (:student_id,:name,:email,:phone)";
    
    $stmt=$pdo->prepare($sql);

    $stmt->execute([
    'student_id'=>$student_id,
    'name'=>$name,
    'email'=>$email,
    'phone'=>$phone
    ]);

    echo"Student Added Successfully";


}
?>