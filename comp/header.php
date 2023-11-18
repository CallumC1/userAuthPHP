<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/userauthphp/dist/output.css" rel="stylesheet">
    <title>User Auth</title>
</head>
<nav class="bg-black w-full h-16 text-white">
    <ul class="flex h-full justify-center items-center gap-2 font-semibold">
        <li><a href="/userauthphp/pages/index.php" class="py-5 px-4 hover:bg-slate-800">Home</a></li>
        <li><a href="/userauthphp/pages/login.php" class="py-5 px-4 hover:bg-slate-800">Login</a></li>
        <li><a href="/userauthphp/pages/signup.php" class="py-5 px-4 hover:bg-slate-800">Sign-up</a></li>
        <li><a href="/userauthphp/pages/dashboard.php" class="py-5 px-4 hover:bg-slate-800">Dashboard</a></li>
        <li><a href="/userauthphp/handlers/destroy.php" class="py-5 px-4 hover:bg-slate-800">Destroy Session</a></li>
    </ul>
</nav>

<!-- Could be used to start a session if imported on every page. -->