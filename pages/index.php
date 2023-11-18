<?php include("../comp/header.php") ?>
<?php session_start(); ?>
<body>


    <div class="flex flex-col border-2 border-black shadow-lg mx-auto mt-20 w-96 h-56 bg-slate-50 justify-center">
        <p class="font-semibold underline text-center">What is this?</p>
        <p class="mx-3 mt-2">
            This is a template using PHP, MYSQLI and Tailwindcss to create a signup / login example.
            <br>This also uses PHP Sessions to keep track of the authenticated status.
            <br><b>Goal: The goal of this is to make it as secure as possible and as portable as possible.</b>
        </p>
    </div>

    <div>
        <?= isset($_SESSION["user_data"]) ? $_SESSION["user_data"]["user_id"] : "" ?>
        <?= isset($_SESSION["user_data"]) ? $_SESSION["user_data"]["authenticated_on"] : "" ?>
        <?= isset($_SESSION["user_data"]) ? $_SESSION["user_data"]["authenticated"] : "" ?>
    </div>
</body>
</html>