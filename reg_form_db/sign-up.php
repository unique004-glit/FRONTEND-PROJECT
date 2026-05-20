<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-black flex items-center justify-center min-h-screen text-white">

<div class="bg-zinc-900 p-10 rounded-3xl w-[400px] border border-zinc-700">

  <h1 class="text-3xl font-bold mb-6 text-center">Create Account</h1>

  <form method="POST" action="sign_up_submit.php" enctype="multipart/form-data" class="space-y-4">

    <input type="text" name="fullname" placeholder="Full Name"
      class="w-full p-4 rounded-xl bg-zinc-800 outline-none" required>

    <input type="email" name="email" placeholder="Email"
      class="w-full p-4 rounded-xl bg-zinc-800 outline-none" required>

    <input type="password" name="password" placeholder="Password"
      class="w-full p-4 rounded-xl bg-zinc-800 outline-none" required>

    <input type="file" name="profile_pic"
      class="w-full p-4 rounded-xl bg-zinc-800 outline-none" required>

    <div class="grid grid-cols-2 gap-3">

      <button type="submit"
        class="bg-yellow-400 text-black font-bold p-4 rounded-xl hover:scale-105 duration-300">
        Sign Up
      </button>

      <a href="login.php"
        class="bg-yellow-400 text-black font-bold p-4 rounded-xl hover:scale-105 duration-300 text-center">
        Login
      </a>

    </div>

  </form>

</div>

</body>
</html>