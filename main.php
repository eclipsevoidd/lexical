<?php 
    require "assets/session.php";
    require "assets/header.php";
    
    $logged_in = isset($_SESSION['user_id']);
    $username = $logged_in ? $_SESSION['username'] : "";
?>
<main>
    <section class="hero">
        <h1>welcome.</h1>
        <p>:)</p>
    </section>
</main>
</body>
</html>