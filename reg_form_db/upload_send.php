<?php
session_start();
include "sch_db.php";



$id = $_SESSION["student_id"];

/* =========================
   UPDATE NAME
========================= */
if(isset($_POST["name"])) {

    $name = trim($_POST["name"]);

    if(!empty($name)) {
        $sql = "UPDATE students SET name = ? WHERE student_id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name, $id]);

        // optional: update session name
        $_SESSION["name"] = $name;
    }
}

/* =========================
   UPDATE PROFILE PICTURE
========================= */
if(isset($_FILES["profile_pic"]) && $_FILES["profile_pic"]["name"] != "") {

    $file = $_FILES["profile_pic"];

    $fileName = time() . "_" . basename($file["name"]);
    $tmpName = $file["tmp_name"];

    $folder = "uploads/" . $fileName;

    // move file
    if(move_uploaded_file($tmpName, $folder)) {

        // update database
        $sql = "UPDATE students SET profile_pic = ? WHERE student_id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$fileName, $id]);

        // update session
        $_SESSION["profile_pic"] = $fileName;
    }
}

header("Location: dashboard.php");
exit();
?>