<?php
include "sch_db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student_id = $_POST["student_id"];
    $new_password = password_hash($_POST["new_password"], PASSWORD_DEFAULT);

    $sql = "UPDATE students SET password = ? WHERE student_id = ?";

    $stmt = $pdo->prepare($sql);

    if ($stmt->execute([$new_password, $student_id])) {
        $message = "Password reset successful!";
    } else {
        $message = "Failed to reset password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Password Reset</title>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <form method="POST" class="bg-white p-8 rounded-2xl shadow-lg w-96 space-y-4">

        <h1 class="text-2xl font-bold text-center">Reset Password</h1>

        <?php if($message): ?>
            <p class="text-center text-green-600"><?php echo $message; ?></p>
        <?php endif; ?>

        <input 
            type="text" 
            name="student_id" 
            placeholder="Student ID"
            required
            class="w-full border p-3 rounded-lg"
        >

        <input 
            type="password" 
            name="new_password" 
            placeholder="New Password"
            required
            class="w-full border p-3 rounded-lg"
        >

        <button 
            type="submit"
            class="w-full bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700"
        >
            Reset Password
        </button>

    </form>

</body>
</html>