<?php
include("server.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$error_msg = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = trim($_POST['e_mail']);
    $password = trim($_POST['passwrd']);

    if (empty($email) || empty($password)) {
        $error_msg = "Please fill in all fields.";
    } else {
        $stmt = $conn->prepare("SELECT id, email, password FROM users WHERE email = ? LIMIT 1");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $result->num_rows === 1) {
            $user = $result->fetch_assoc();
            
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_email'] = $user['email'];
                header("Location: index.php");
                exit();
            } else {
                $error_msg = "Invalid password!";
            }
        } else {
            $error_msg = "Account with this email does not exist.";
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/log.css">
    <title>Login | USKT CollabHub</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: white;
            display: flex;
            justify-content: left;
            align-items: center;
            height: 100vh;
            margin-top: 2px;
            padding-top: 0px;
            overflow: hidden;
        }

        .front {
            width: 160%;
            height: 95vh;
            margin: 15px;
            padding-left: 20px;
        }

        form {
            justify-content: center;
            width: 95%;
            height: 75vh;
            margin: 2px;
            padding-left: 2px;
        }

        h1 {
            color: #02075D;
            margin-bottom: 10px;
        }

        .log {
            color: #4D4D4D;
            margin-bottom: 20px;
        }

        input[type="email"], input[type="password"] {
            border: 2px solid #F2F2F2;
            border-radius: 5px;
            padding: 5px;
            margin: 5px;
            background-color: #F5F9FD;
            width: 90%;
            box-sizing: border-box;
            height: 40px;
        }

        .inputs {
            display: flex;
            align-items: left;
            max-width: 440px;
            font-size: small;
            color: #4D4D4D;
        }

        .forget {
            float: right;
            color: #4D4D4D;
            text-decoration: none;
            font-size: 10px;
            font-weight: bold;
            padding: 0px;
            height: 2px;
        }

        .login {
            background-color: #02075D;
            width: 90%;
            border: none;
            align-items: center;
            color: white;
            border-radius: 3px;
            margin: 5px;
            height: 40px;
            cursor: pointer;
            font-weight: bold;
        }

        .login:hover {
            background-color: #01043d;
        }

        .google_sign, .fb_sign {
            background-color: #F5F9FD;
            width: 90%;
            height: 40px;
            margin: 5px;
            border: 1px solid #ccc;
            border-radius: 2px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .google, .fb {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }

        .d_image {
            float: right;
        }

        .image {
            position: fixed;
            top: 0;
            right: 0;
            width: 55%;
            height: 100%;
            object-fit: cover;
        }

        .alert-error {
            color: #d9534f;
            background-color: #f2dede;
            border: 1px solid #ebccd1;
            padding: 8px;
            border-radius: 4px;
            margin: 5px;
            width: 90%;
            font-size: 13px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="front">
        <h1>WELCOME BACK</h1>
        <p class="log">Please login to your account</p>
        
        <div class="d_image"> 
            <img class="image" src="./images/login_photo.jpg" alt="display_picture"/>
        </div>

        <?php if (!empty($error_msg)): ?>
            <div class="alert-error"><?php echo htmlspecialchars($error_msg); ?></div>
        <?php endif; ?>

        <form action="log.php" method="POST" class="login_page">
            <label>Email</label><br>
            <input type="email" name="e_mail" id="email" required> <br>
            
            <label>Password</label><br>
            <input type="password" name="passwrd" id="password" required><br>
            
            <div class="inputs">
                <input type="checkbox" id="Remember_me"> Remember me
            </div>
            
            <div class="forget">
                <a href="#Forget password">Forget Password</a>
            </div>
            <br>
            
            <button type="submit" name="login" class="login">Login</button>
            <p align="center">or </p>
            
            <div class="social">
                <button type="button" class="google_sign">
                    <img class="google" src="./images/google.png" alt="google"/> Sign in with Google
                </button>
                <button type="button" class="fb_sign"> 
                    <img class="fb" src="./images/facebook.png" alt="facebook"/> Sign in with Facebook
                </button>
            </div>

            <p align="center">Don't have an account? <a href="signup.php">Sign up</a></p>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.querySelector('.login_page');
    
    loginForm.addEventListener('submit', function(e) {
        let email = document.querySelector('input[name="e_mail"]').value;
        let password = document.querySelector('input[name="passwrd"]').value;
        
        if (!email) {
            alert("Please enter your email address");
            e.preventDefault();
            return;
        }
        
        if (!password) {
            alert('Please enter your password');
            e.preventDefault();
            return;
        }
        
        if (!email.includes('@') || !email.includes('.')) {
            alert('Please enter a valid email address');
            e.preventDefault();
            return;
        }
    });

    document.querySelector('.forget').addEventListener('click', function(e) {
        e.preventDefault();
        const email = prompt('Please enter your email to reset password:');
        if (email) {
            alert('Password reset link will be sent to: ' + email);
        }
    });
    
    document.querySelector('.google_sign').addEventListener('click', function() {
        alert('Redirecting to Google login...');
    });
    
    document.querySelector('.fb_sign').addEventListener('click', function() {
        alert('Redirecting to Facebook login...');
    });
});
</script>
</body>
</html>