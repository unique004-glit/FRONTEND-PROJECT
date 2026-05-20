<?php
include "sch_db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);

    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // PROFILE PICTURE UPLOAD FIX
    $profile_pic_name = null;

    if (!empty($_FILES["profile_pic"]["name"])) {

        $file = $_FILES["profile_pic"];

        $ext = pathinfo($file["name"], PATHINFO_EXTENSION);
        $profile_pic_name = uniqid("IMG_", true) . "." . $ext;

        $uploadPath = "uploads/" . $profile_pic_name;

        move_uploaded_file($file["tmp_name"], $uploadPath);
    }

    try {

        // CHECK EMAIL
        $check = "SELECT * FROM students WHERE email = ?";
        $stmt = $pdo->prepare($check);
        $stmt->execute([$email]);

        // EMAIL EXISTS
        if ($stmt->rowCount() > 0) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Exists</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-2xl rounded-3xl p-10 w-[90%] max-w-md text-center">

        <div class="w-20 h-20 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <span class="text-4xl text-yellow-600">!</span>
        </div>

        <h1 class="text-3xl font-bold text-gray-800 mb-3">
            Email Already Exists
        </h1>

        <p class="text-gray-600 text-lg mb-8">
            Please choose another email address.
        </p>

        <a href="sign-up.php"
           class="bg-purple-900 hover:bg-purple-800 transition text-white px-8 py-3 rounded-xl font-semibold shadow-lg">
           Go Back
        </a>

    </div>

</body>
</html>

<?php
            exit();
        }

        // INSERT USER (FIXED COLUMN WITH IMAGE)
        $sql = "INSERT INTO students (name, email, phone, password, profile_pic)
                VALUES (?, ?, ?, ?, ?)";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            $name,
            $email,
            $phone,
            $password,
            $profile_pic_name
        ]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-2xl rounded-3xl p-10 w-[90%] max-w-md text-center">

        <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <span class="text-4xl text-green-600">✓</span>
        </div>

        <h1 class="text-3xl font-bold text-gray-800 mb-3">
            Registration Successful
        </h1>

        <p class="text-gray-600 text-lg mb-8">
            Your account has been created successfully.
        </p>

        <a href="login.php"
           class="bg-purple-900 hover:bg-purple-800 transition text-white px-8 py-3 rounded-xl font-semibold shadow-lg">
           Go to Login
        </a>

    </div>

</body>
</html>

<?php

    } catch (PDOException $e) {
        echo "Database Error: " . $e->getMessage();
    }

}
?>