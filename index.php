<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>HTML, CSS, and JS Fundamentals</title>
    <meta name="author" content="Hemil Patel">
    <meta name="description" content="week7">
    <link rel="shortcut icon" href="/week7/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/week7/css/normalize.css" />
    <link rel="stylesheet" href="/week7/css/styles.css" />
</head>
<body id="section1">
    <!-- Page-level header -->
    <header>
        <img src="/week7/images/html-logo.svg" height="75" width="75" alt="HTML" />
        <h1>HTML, CSS, and JS Fundamentals</h1>
        <h2>Building Blocks for Web Developers</h2>
        <?php include("includes/global-nav.php"); ?>
    </header>
    <!-- Page-level main content -->
    <main>
        <section>
            <h3>Building Blocks I</h3>
            <p>Quis auctor elit sed vulputate mi sit amet mauris. Vitae turpis massa sed elementum tempus egestas sed. Nulla facilisi etiam dignissim diam quis enim lobortis scelerisque. Rhoncus urna neque viverra justo nec ultrices dui sapien eget.</p>
        </section>
        <section>
            <h3>Subscribe</h3>
            <form action="/week7/subscribe.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <button type="submit">Subscribe</button>
            </form>
            <figure>
					<img src="images/mini-figure.png" width="176" height="285" alt="Mini figure">
					<figcaption><a href="https://www.lego.com/" rel="external" title="Visit the offical LEGO® Web site">LEGO®</a> mini figure by Vanja (Public Domain)</figcaption>
					<!-- Mini figure by Vanja (Public Domain) https://openclipart.org/detail/224315/clip-is-a-brick-minifig-4 -->
				</figure>
        </section>
    </main>
    <!-- Page-level footer -->
    <footer>
        <?php include("includes/footer-nav.php"); ?>
        <p><small>© HTML, CSS, and JS Blocks Inc.</small></p>
    </footer>
</body>
</html>
