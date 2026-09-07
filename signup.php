<?php
include("server.php");

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$error_msg = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
    $email = trim($_POST['sign_email']);
    $password = trim($_POST['signpassword']);

    if (empty($email) || empty($password)) {
        $error_msg = "Please fill in all fields.";
    } else {
        $check_stmt = $conn->prepare("SELECT id FROM users WHERE email = ? LIMIT 1");
        $check_stmt->bind_param("s", $email);
        $check_stmt->execute();
        $check_result = $check_stmt->get_result();

        if ($check_result && $check_result->num_rows > 0) {
            $error_msg = "Email already registered!";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insert_stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
            $insert_stmt->bind_param("ss", $email, $hashed_password);

            if ($insert_stmt->execute()) {
                echo "<script>alert('Account created successfully!'); window.location.href='log.php';</script>";
                exit();
            } else {
                $error_msg = "Database Error: " . $insert_stmt->error;
            }
            $insert_stmt->close();
        }
        $check_stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | USKT CollabHub</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Arial', sans-serif; background-color: white; display: flex; height: 100vh; overflow: hidden; }
        .sign_container { width: 50%; height: 100vh; padding: 40px; display: flex; flex-direction: column; justify-content: center; }
        .logo { color: lightskyblue; font-size: 24px; font-weight: bold; margin-bottom: 20px; }
        form { width: 100%; max-width: 400px; }
        h2 { color: black; font-size: 28px; font-weight: bold; margin-bottom: 8px; }
        .text { color: #4D4D4D; margin-bottom: 20px; font-size: 14px; }
        input[type="email"], input[type="password"] { border: 2px solid #F2F2F2; border-radius: 5px; padding: 12px; margin: 8px 0; background-color: #F5F9FD; width: 100%; font-size: 14px; outline: none; }
        input[type="email"]:focus, input[type="password"]:focus { border-color: #02075D; }
        .submitt { padding: 12px; border-radius: 6px; font-size: 1rem; cursor: pointer; width: 100%; margin: 15px 0; background-color: #02075D; color: white; border: none; font-weight: bold; }
        .submitt:hover { background-color: #01043d; }
        .hero { width: 50%; height: 100vh; overflow: hidden; }
        .display { width: 100%; height: 100%; object-fit: cover; }
        .alert-error { color: #d9534f; background-color: #f2dede; border: 1px solid #ebccd1; padding: 10px; border-radius: 5px; margin-bottom: 15px; font-size: 14px; }
        .login-link { margin-top: 15px; font-size: 14px; color: #555; }
        .login-link a { color: #02075D; font-weight: bold; text-decoration: none; }
    </style>
</head>
<body>
    <div class="sign_container">
        <h1 class="logo">USKT</h1>
        <h2>Create Account</h2>
        <p class="text">Welcome! Please fill in your details to register.</p>

        <?php if (!empty($error_msg)): ?>
            <div class="alert-error"><?php echo htmlspecialchars($error_msg); ?></div>
        <?php endif; ?>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="email" name="sign_email" required placeholder="Email Address"><br>
            <input type="password" name="signpassword" required placeholder="Password"><br>
            
            <button type="submit" name="signup" class="submitt">Sign Up</button>
            
            <p class="login-link">Already have an account? <a href="log.php">Log in</a></p>
        </form>
    </div>
    
    <div class="hero">
        <img class="display" src="./images/signup.jpg" alt="Signup background">
    </div>
</body>
</html>