<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Subscribe | HTML, CSS, and JS Fundamentals</title>
    <meta name="author" content="Hemil Patel">
    <meta name="description" content="week7">
    <link rel="shortcut icon" href="/week7/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/week7/css/normalize.css" />
    <link rel="stylesheet" href="/week7/css/styles.css" />
</head>
<body id="section5">
    <!-- Page-level header -->
    <header>
        <img src="/week7/images/html-logo.svg" height="75" width="75" alt="HTML" />
        <h1>Subscribe to Our Newsletter</h1>
        <h2>Stay updated with our latest news and updates</h2>
        <?php include("includes/global-nav.php"); ?>
    </header>
    <!-- Page-level main content -->
    <main>
        <section>
            <h3>Subscribe</h3>
            <form action="/week7/subscribe.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <button type="submit">Subscribe</button>
            </form>
        </section>
    </main>
    <!-- Page-level footer -->
    <footer>
        <?php include("includes/footer-nav.php"); ?>
        <p><small>© HTML, CSS, and JS Blocks Inc.</small></p>
    </footer>
</body>
</html>
