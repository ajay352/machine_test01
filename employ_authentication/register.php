<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        input:valid {
            border-color: green;
        }
        input:invalid {
            border-color: red;
        }
    </style>
</head>
<body>
    <div class="cotainer w-8/12 mx-auto">
        <div>
            <div class="text-center mx-auto font-bold">
                Registration
            </div>
            <div class="w-4/12 mx-auto ">
                <form action="../app.php" method="post" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label for="username" class="font-bold text-gray-700 text-sm">Username:</label>
                        <input type="text" name="username" class="border border-black rounded-md w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="font-bold text-gray-700 text-sm">Email:</label>
                        <input type="email" name="email" class="border border-black rounded-md w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="font-bold text-gray-700 text-sm">Password:</label>
                        <input type="password" name="password" class="border border-black rounded-md w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="font-bold text-gray-700 text-sm">Date:</label>
                        <input type="date" name="date" class="border border-black rounded-md w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="" class="font-bold text-gray-700 text-sm">please select file</label>
                        <input type="file" name="file" class="border border-black rounded-md w-full" required>
                    </div>
                    <div class="flex items-center justify-between">
                        <button type="submit" class="rounded-md bg-blue-500 text-white px-2 py-2">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>