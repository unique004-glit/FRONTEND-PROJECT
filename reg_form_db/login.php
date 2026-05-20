<?php
session_start();
include "sch_db.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    $stmt = $pdo->prepare("SELECT * FROM students WHERE email = ?");
    $stmt->execute([$email]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["password"])) {

        $_SESSION["name"] = $user["name"];
        $_SESSION['profile_pic'] = $user['profile_pic'];

        header("Location: dashboard.php");
        exit();

    } else {
        $error = "Invalid email or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-black flex items-center justify-center min-h-screen text-white">

<div class="bg-zinc-900 p-10 rounded-3xl w-[400px] border border-zinc-700">

  <h1 class="text-3xl font-bold mb-6 text-center">Login</h1>

  <?php if($error): ?>
    <div class="bg-red-500/20 border border-red-500 text-red-300 p-3 rounded-xl mb-4">
      <?= $error ?>
    </div>
  <?php endif; ?>

  <form method="POST" class="space-y-4">

    <input type="email" name="email" placeholder="Email"
      class="w-full p-4 rounded-xl bg-zinc-800 outline-none" required>

    <input type="password" name="password" placeholder="Password"
      class="w-full p-4 rounded-xl bg-zinc-800 outline-none" required>

    <button class="w-full bg-yellow-400 text-black font-bold p-4 rounded-xl hover:scale-105 duration-300">
        login
    </button>

    </body>
</html>