<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/userauthphp/dist/output.css" rel="stylesheet">
    <title>User Auth</title>
</head>
<body>
    <nav class="bg-black w-full h-16 text-white">
        <ul class="flex h-full justify-center items-center gap-2 font-semibold">
            <li><a href="/userauthphp/pages/index.php" class="py-5 px-4 hover:bg-slate-800">Home</a></li>
            <li><a href="/userauthphp/pages/login.php" class="py-5 px-4 hover:bg-slate-800">Login</a></li>
            <li><a href="/userauthphp/pages/signup.php" class="py-5 px-4 hover:bg-slate-800">Sign-up</a></li>
            <li><a href="/userauthphp/pages/dashboard.php" class="py-5 px-4 hover:bg-slate-800">Dashboard</a></li>
            <li><a href="/userauthphp/handlers/destroy.php" class="py-5 px-4 hover:bg-slate-800">Destroy Session</a></li>
        </ul>
    </nav>

    <div class="flex flex-col border-2 border-black shadow-lg mx-auto mt-20 w-96 h-56 bg-slate-50 justify-center">
        <p class="font-semibold underline text-center">What is this?</p>
        <p class="mx-3 mt-2">
            This is a template using PHP, MYSQLI and Tailwindcss to create a signup / login example.
            <br>This also uses PHP Sessions to keep track of the authenticated status.
            <br><b>Goal: The goal of this is to make it as secure as possible and as portable as possible.</b>
        </p>
    </div>
</body>
</html>