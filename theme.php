<?php global $Wcms ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title><?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?></title>
<meta name="title" content="<?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?>" />
<meta name="description" content="<?= $Wcms->page('description') ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="/themes/imp/assets/css/main.css?v<?php echo(rand(1,10));?><?php echo(rand(1,10));?>" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="shortcut icon" href="/data/files/favicon.png">
<?= $Wcms->css() ?>
</head>
<body class="single is-preload">
<?= $Wcms->settings() ?>
<?= $Wcms->alerts() ?>
<div id="wrapper">
<header id="header">
<h1><a href="/"><?= $Wcms->get('config', 'siteTitle') ?></a></h1>
<nav class="links">
<ul>
<li><a href="/">Home</a></li>
<li><a href="/about">About</a></li>
<li><a href="/faq">FAQ</a></li>
<li><a href="/contact">Contact</a></li>
</ul>
</nav>
<nav class="main">
<ul>
<li class="menu">
<a class="fa-bars" href="#menu">Menu</a>
</li>
</ul>
</nav>
</header>
<section id="menu">
<section>
<ul class="links">
<h3>
<?= $Wcms->menu() ?>
</h3>
</ul>
</section>
<section>
<ul class="actions stacked">
<li><a href="/sign-up" class="button large fit">Sign Up</a></li>
</ul>
</section>
</section>
<div id="main">
<article class="post">
<header>
<div class="title">
<h2><?= $Wcms->page('keywords') ?></h2>
<p><?= $Wcms->page('description') ?></p>
</div>
</header>
<?= $Wcms->page('content') ?>
<hr />
<footer>
<?= $Wcms->block('subside') ?>
</footer>
</article>
</div>
<section id="footer">
<ul class="icons">
<?= $Wcms->footer() ?>
</section>
</div>
<script src="/themes/imp/assets/js/jquery.min.js"></script>
<script src="/themes/imp/assets/js/browser.min.js"></script>
<script src="/themes/imp/assets/js/breakpoints.min.js"></script>
<script src="/themes/imp/assets/js/util.js"></script>
<script src="/themes/imp/assets/js/main.js"></script>
<?= $Wcms->js() ?>
</body>
</html>