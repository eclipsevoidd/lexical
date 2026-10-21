<?php 
    require __DIR__ . "/session.php";
    require __DIR__ . "/header.php";
    
    $logged_in = isset($_SESSION['user_id']);
    $username = $logged_in ? $_SESSION['username'] : "";
?>
<main>
    <section class="hero">
        <div class="backdrop">
            <?php if ($logged_in): ?>
                <h1>hello, <?php echo htmlspecialchars($_SESSION['username']); ?>.</h1>
                <p>how are you doing today?</p>
            <?php elseif ($username === "leafy"): ?>
                <h1>sveiks intar.</h1>
                <p>welcome to the final opsec level, brother</p>
            <?php endif; ?> <!-- endif forma izmantota kad if starpā satur html un php, ērtāk! -->
        </div>
    </section>
</main>
</body>
</html>