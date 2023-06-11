<?php 
require 'function.php';

if (isset($_POST["submit"])) {

    if( registrasi($_POST) > 0){
    }else{"<script>
        alert('Regis Gagal!');
        </script>";
    }
    header("Location:login.php");
}


?>
<link rel="stylesheet" href="style.css">

    <div class="main">
    <form action="" method="post">

        
    <div class="login_form">
            <div class="left">
                <img src="image/logshoes.png">
            </div>

            <div class="right">

                <form action="#" method="post">
                    <h1>Welcome Back!</h1>

                    <p>User Name</p>
                    <div class="user">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="username" placeholder="User Name" class="username">
                    </div>

                    <p class="passworg_tag">Password</p>
                    <div class="password">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="Password">
                    </div>

                    <p class="passworg_tag">Ulangi Password</p>
                    <div class="password">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password2" placeholder="Ulangi Password">
                    </div>
                    
                    <p><a href="login.php" class="forget">Sudah Punya Akun?</a></p>

                    <button name="submit" type="submit">register</button>
                    <div class="loging_icon">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </form>


    </div>

</body>

</html>