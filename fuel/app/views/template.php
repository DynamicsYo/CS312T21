<head>
    <title><?php $title; ?></title>
    <meta charset="utf-8"></meta>
    <meta name="author" content="Cayce Kelley"></meta>
    <meta name="decription" content="CS312 Term project">
	<meta name="keywords" content="HTML,CSS,JavaScript,PHP,CS312,Term project,CSU,Colorado State University">
	<meta rel="icon" href="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSIJcIPLUfwthUz2dUZVpXbx-Kd_9tECeCX7Xs-9zX2wsDVGAXu0TObCfJ_P93D5g&usqp=CAc">
    <!--- No need for dynamic CSS pages -->
    <?php echo Asset::css('default.css') ?>
    <!--- <?php echo Asset::css($css) ?> -->
</head>
<body>
    <header>
        Header:
        <?php echo '<a href="https://cs.colostate.edu">Computer Science Dept at Colorado State University!</a>' ?>
        <ul>
            <li><a href="https://cs.colostate.edu:4444/~cayce/cs312/index/pages/">Home</a></li>
            <li><a href="https://cs.colostate.edu:4444/~cayce/cs312/index/pages/about/">About</a></li>
            <li><a href="https://cs.colostate.edu:4444/~cayce/cs312/index/pages/color/">Color</a></li>
        </ul>
    </header>

    <main>
        <h1>Welcome to our site</h1>
        <p>Below is the page content</p>
        ----------------------------------------------------------------------------------------<br>
        <?php echo $content ?>
    </main>

    <footer>
        ----------------------------------------------------------------------------------------<br>
        Term project for learning CSS/HTML/PHP <br>
    </footer>
</body>