<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lexical</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="icon" type="image/png" href="/images/icon.png">
</head>
<body>
    <header>
        <a href="/" class="logo">
            <i class="fa-solid fa-hashtag"></i>lexical
        </a>

        <nav>
            <a href="#" class="btn">about</a><a href="#" class="btn">settings</a>

            <?php if (isset($_SESSION['user_id'])): ?>
                <div class="account-actions">
                    <a href="/assets/account.php" class="btn-active" aria-label="account">
                        <i class="fa-solid fa-circle-user" aria-hidden="true"></i>
                    </a>
                    
                    <form action="/assets/logout.php" method="post">
                        <button type="submit" class="btn-active-red">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                        </button>
                    </form>

                </div>
            <?php else: ?>
                <a href="/login.php" class="btn-active">
                    account
                    <i class="fa-solid fa-circle-user" aria-hidden="true"></i>
                </a>
            <?php endif; ?>
        </nav>
    </header>