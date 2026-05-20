<?php
session_start();
include "sch_db.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM students WHERE email = ?";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);

    $student = $stmt->fetch(PDO::FETCH_ASSOC);

    if($student && password_verify($password, $student["password"])) {

        $_SESSION["student_id"] = $student["student_id"];
        $_SESSION["name"] = $student["name"];
        header("Location: dashboard.php");
        exit();

    } else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Failed</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-2xl rounded-3xl p-10 w-[90%] max-w-md text-center">

        <!-- Icon -->
        <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <span class="text-4xl text-red-600">✕</span>
        </div>

        <!-- Message -->
        <h1 class="text-3xl font-bold text-gray-800 mb-3">
            Login Failed
        </h1>

        <p class="text-red-500 text-lg mb-8">
            Invalid email or password
        </p>

        <!-- Button -->
        <a href="login.php"
           class="bg-purple-900 hover:bg-purple-800 transition text-white px-8 py-3 rounded-xl font-semibold shadow-lg">
           Back to Login
        </a>

    </div>

</body>
</html>

<?php
    }
}
?>