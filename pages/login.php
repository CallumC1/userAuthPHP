<?php include("../comp/header.php") ?>
<?php
session_start();
session_regenerate_id();
?>
<div class="flex flex-col items-center justify-center mt-[7rem]">
    <div class="bg-slate-50 drop-shadow-xl w-[22rem] h-full border-2 border-black p-4">

        <form action="/userauthphp/handlers/login_process.php" method="POST" class="userAuth">

            <p class="text-xl font-bold text-center underline">Login</p>

            <div class="flex flex-col gap-4 mt-3">

                <span class="flex flex-col">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" name="first_name" placeholder="Your first name" required>
                </span>

                <span class="flex flex-col">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" name="last_name" placeholder="Your last name" required>
                </span>

                <span class="flex flex-col">
                    <label for="email">Email </label>
                    <input type="email" id="email" name="email" placeholder="Your email address" required>
                </span>

                <span class="flex flex-col">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Create a password" required>
                    <img src="/userauthphp/src/assets/feather-icons/eye-off.svg" alt="Show Password" class="ml-auto mr-4 w-4 h-full -mt-6" id="togglePassword">
                </span>

            </div>

            <button type="submit"
                class="bg-green-600 hover:bg-green-500 transition-colors duration-200 text-center w-full py-2 mt-8 mb-2 text-white font-semibold">
                Login
            </button>

            <p class="text-xs font-semibold text-center">Don't have an account?<br>
                <a href="./signup.php" class="text-blue-500 underline">Sign up here</a>
            </p>
        </form>

    </div>

    

</div>

<script src="/userauthphp/src/js/main.js"></script>

</body>
</html>