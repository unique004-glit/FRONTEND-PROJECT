

<!DOCTYPE html>
<html>
<head>
    <title>Upload Profile Picture</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white p-8 rounded-xl shadow-lg w-96 text-center">

    <h2 class="text-2xl font-bold mb-6">Update Profile </h2>

    <form action="upload_send.php" method="POST" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input type="text" name="name" class="mb-4 w-full border p-2 rounded">

        <input type="file"
               name="profile_pic"
               required
               class="mb-4 w-full border p-2 rounded">

        <button type="submit"
                class="bg-purple-900 text-white px-6 py-2 rounded hover:bg-purple-700">
            Upload
        </button>

    </form>

</div>

</body>
</html>