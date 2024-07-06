<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>About Us | HTML, CSS, and JS Fundamentals</title>
    <meta name="author" content="Hemil Patel">
    <meta name="description" content="week7">
    <link rel="shortcut icon" href="/week7/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/week7/css/normalize.css" />
    <link rel="stylesheet" href="/week7/css/styles.css" />
</head>
<body id="section2">
    <!-- Page-level header -->
    <header>
        <img src="/week7/images/html-logo.svg" height="75" width="75" alt="HTML" />
        <h1>About Us</h1>
        <h2>Learn more about our mission and values</h2>
        <?php include("includes/global-nav.php"); ?>
    </header>
    <!-- Page-level main content -->
    <main>
        <section>
            <h3>Our Mission</h3>
            <p>Our mission is to provide high-quality education and resources for web developers.</p>
        </section>
    </main>
    <!-- Page-level footer -->
    <footer>
        <?php include("includes/footer-nav.php"); ?>
        <p><small>© HTML, CSS, and JS Blocks Inc.</small></p>
    </footer>
</body>
</html>
