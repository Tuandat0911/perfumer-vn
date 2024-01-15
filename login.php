<?php
    $check = 0;
    if(isset($_GET['check'])) {
        $check = $_GET['check'];
        if($check == 1) {
            $message = "Sign Up Success";
        }
        elseif($check == 2) {
            $message = "Sign Up Failed";
        }
        elseif($check == 3) {
            $message = "Sign In Failed";
        }
        elseif($check == 4) {
            $message = "Sign In Success";
        }
        else {
            $message = "";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="login.css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var message = '<?php echo $message; ?>';
            var check = <?php echo $check; ?>; // Lấy giá trị của biến check từ PHP

            if (message === "Sign Up Success" || message === "Sign In Success") {
                Swal.fire({
                    title: 'Notification',
                    text: message,
                    icon: 'info',
                    confirmButtonText: 'OK'
                }).then(function() {
                    if (check === 4) {
                        // Chuyển hướng sau khi nhấn OK trong thông báo
                        window.location.href = 'home.php';
                    }
                });
            } else if (message === "Sign Up Failed" || message === "Sign In Failed") {
                Swal.fire({
                    title: 'Notification',
                    text: message,
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            }
        });
    </script>


</head>
<body>
    <div class="container">
        <div class="login-section">

            <form action="xu_ly_register.php" method="post">
                <div class="form-box Register">
                    <h2>Sign Up</h2>
                    <div class="input-box">
                        <input type="text" required name="username" autocomplete="off">
                        <label for="">Username</label>
                    </div>
                    <div class="input-box">
                        <input type="email" required name="email" autocomplete="off">
                        <label for="">Email</label>
                    </div>
                    <div class="input-box">
                        <input type="password" required name="password" autocomplete="off">
                        <label for="">Password</label>
                    </div>
                    <div class="input-box">
                        <button type="submit" class="btn">Register</button>
                    </div>

                    <div class="term-condition">
                        <label for=""><input type="checkbox" name="" id="">Yes, I agree with the term and condition</label>
                    </div>

                    <div class="account-login">
                        <label for="">Already have an account?<a href="#" class="Login-link">Sign in</a></label>
                    </div>
                </div>
            </form>


            <form action="xu_ly_login.php" method="post">
                <div class="form-box Login">
                    <h2>Sign In</h2>

                    <div class="input-box">
                        <input type="email" required name="email_login" autocomplete="off">
                        <label for="">Email</label>
                    </div>
                    <div class="input-box">
                        <input type="password" required name="password_login" autocomplete="off">
                        <label for="">Password</label>
                    </div>
                    <div class="input-box">
                        <button class="btn" type="submit">Sign In</button>
                    </div>

                    <div class="account-login">
                        <label for="">Create an account?<a href="#" class="Register-link">Sign up</a></label>
                    </div>
                </div>
            </form>

        </div>

        <div class="item">
            <div class="content">
                <!-- swipper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide">
                        <img src="image/login_bg.jpg" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="image/bg_login_2.png" alt="">
                      </div>
                      <div class="swiper-slide">
                        <img src="image/bg_login_3.png" alt="">
                      </div>
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>
            </div>
        </div>
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> 
    <script src="login.js"></script>
</body>
</html>
