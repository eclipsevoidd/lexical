<?php 
    require "assets/session.php";
    require "assets/header.php";
    
    $logged_in = isset($_SESSION['user_id']);
    $username = $logged_in ? $_SESSION['username'] : "";
?>
<main>
    <section class="hero">
        <?php if (!$logged_in): ?>
            <h1>welcome to lexical. </h1>
            <p>log in to get started.</p>
        <?php elseif ($username === "leafy"): ?>
            <h1>sveiks intar.</h1>
            <p>welcome to the final opsec level, brother</p>
        <?php else: ?>
            <h1>hello, <?php echo htmlspecialchars($_SESSION['username']); ?>.</h1>
            <p>you are logged in.</p>
        <?php endif; ?> <!-- endif forma izmantota kad if starpā satur html un php, ērtāk! -->
    </section>
</main>
</body>
</html>