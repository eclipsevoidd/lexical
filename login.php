<?php 
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    require __DIR__ . "/assets/auth.php";
    require __DIR__ . "/assets/header.php";
?>

<div class="container">
    <div class="login" id="login" style="display: <?php echo ($active_form === 'login') ? 'flex' : 'none'; ?>;">
        <h2>login</h2>
        <div class="info">
            <p class= "error-msg" id="login-error"><?php echo htmlspecialchars($error_login); ?></p>
        </div>

        <form method="POST">
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="username" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="password" required>
            </div>
            <div class="row">
                <button type="submit" name="log-in" class="btn-active">login</button>
            </div>
            <div class="register-text">
                no account? <a id="show-register" href="#">register</a>
            </div>
        </form>
    </div>

    <div class="login" id="register" style="display: <?php echo ($active_form === 'register') ? 'flex' : 'none'; ?>;">
        <h2>register</h2>
        <div class="info">
            <p class= "error-msg" id="register-error"><?php echo htmlspecialchars($error_register); ?></p> <!-- nodrošinās ka katrai formai savs error msg (otrā nerādīsies tas) -->
        </div>

        <form method="POST">
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="username" required>
            </div>
            <div class="row">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="e-mail" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="password" required>
            </div>
            <div class="row">
                <button type="submit" name="register" class="btn-active">register</button>
            </div>
            <div class="register-text">
                have an account? <a id="show-login" href="#">login</a>
            </div>
        </form>
    </div>
</div>

</body>
<script src="/assets/login.js"></script>
</html>