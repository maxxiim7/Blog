<?php session_start(); ?>
<header class="header">
    <a href="/" class="logo"><?= $heading; ?></a>
        <nav class="navbar">
        <?php if(isset($_SESSION["username"])) {echo "<a>".$_SESSION["username"]."</a>";} else {echo "<a href='/logIn'>Login</a>";} ?> 
        <?php if(isset($_SESSION["username"])) {echo "<a href='../logout.php'>Log out </a>"; } ?>
   <a href="https://github.com/maxxiim7?tab=overview&from=2024-02-01&to=2024-02-29" target="_blank" ><img src="img/gitwhite.svg" alt=""></a>
    <a href="https://www.instagram.com/hofmannvratny/" target="_blank" ><img src="img/instawhite.svg" alt=""></a>
    <a href="https://www.twitter.com" target="_blank"><img src="img/twitterwhite.svg" alt=""></a>
    </nav>
</header>