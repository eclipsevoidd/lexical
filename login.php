<?php 
    require "assets/auth.php";
    require "assets/header.php";
?>

<div class="container">
    <div class="login" id="login">
        <h2>login</h2>
        <div class="info">
            <p id="login-error"><?php echo htmlspecialchars($login_error); ?></p>
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

    <div class="login" id="register" style="display: <?php echo $active_form === 'register' ? 'flex' : 'none'; ?>">
        <h2>register</h2>
        <div class="info">
            <p id="register-error"><?php echo htmlspecialchars($register_error); ?></p>
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
                <button type="submit" name="register" class="btn-active">register</button>
            </div>
            <div class="register-text">
                have an account? <a id="show-login" href="#">login</a>
            </div>
        </form>
    </div>
</div>

</body>
<script src="assets/login.js"></script>
</html>