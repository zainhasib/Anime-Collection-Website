<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="collection.css">
    <link rel="icon" type="image/ico" href="onepiece.jpg">
    <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cuprum|Gloria+Hallelujah" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <title>Anime | <?php echo "" ?></title>
</head>
<body>
    <header>
        <h1>MY ANIME COLLECTION</h1>
    </header>
    <nav style="position: sticky;top: -1px;">
        <ul class="list">
            <li>Home</li>
            <li>All Anime</li>
            <li>Favorites</li>
            <li>Genre</li>
            <li>Dubbed</li>
            <li><input type="text" placeholder="search" name="search-text"></li>
            <li><button value="submit">SEARCH</button></li>
        </ul>
    </nav>
    <section>
        <div class="slide-show"><img src="" alt="" name="slides"><img id="la"><img id="ra"></div>
    </section>
    <!-- <aside>
        <div class="side-bar">
        <ul>
            <li>Ongoing Series: </li>
            <li>Black Clover</li>
            <li>Attack on Titan</li>
        </ul>
        </div>
    </aside> -->
    <section class="container section-two">
        <div class="anime"><a id="1" href=""><img src="pics/1.jpg" alt=""><h5>One Piece</h5></div></a></div>
        <div class="anime"><a id="2" href=""><img src="pics/2.jpg" alt=""><h5>Naruto</h5></a></div>
        <div class="anime"><a id="3" href=""><img src="pics/3.png" alt=""><h5>Black Clover</h5></a></div>
        <div class="anime"><a id="4" href=""><img src="pics/4.png" alt=""><h5>Fullmetal Alchemist</h5></a></div>
        <hr>
        <div class="anime"><a id="5" href=""><img src="pics/5.png" alt=""><h5>Code Geass</h5></a></div>
        <div class="anime"><a id="6" href=""><img src="pics/6.jpg" alt=""><h5>Steins Gate</h5></a></div>
        <div class="anime"><a id="7" href=""><img src="pics/7.jpg" alt=""><h5>Mirai Nikki</h5></a></div>
        <div class="anime"><a id="8" href=""><img src="pics/8.jpg" alt=""><h5>Seven Deadly Sins</h5></a></div>
        <hr>
        <div class="anime"><a id="9" href=""><img src="pics/9.jpg" alt=""><h5>Parasyte The Maxim</h5></a></div>
        <div class="anime"><a id="10" href=""><img src="pics/10.jpg" alt=""><h5>One Punch Man</h5></a></div>
        <div class="anime"><a id="11"href=""><img src="pics/11.jpg" alt=""><h5>Tokyo Ghoul</h5></a></div>
        <div class="anime"><a id="12" href=""><img src="pics/12.jpg" alt=""><h5>Your lie in April</h5></a></div>
        <hr>
        <div class="anime"><a id="13" href=""><img src="pics/13.jpg" alt=""><h5>Yamada kun and seven witches</h5></a></div>
        <div class="anime"><a id="14" href=""><img src="pics/14.jpg" alt=""><h5>World God only knows</h5></a></div>
        <div class="anime"><a id="15" href=""><img src="pics/15.jpg" alt=""><h5>Unbreakable Machine Doll</h5></a></div>
        <div class="anime"><a id="16" href=""><img src="pics/16.jpg" alt=""><h5>This Ugly yet Beautiful World</h5></a></div>
        <hr>
        <div class="anime"><a id="17" href=""><img src="pics/17.jpg" alt=""><h5>The Devil is a Part-Timer</h5></a></div>
        <div class="anime"><a id="18" href=""><img src="pics/18.jpg" alt=""><h5>Sword Art Online</h5></a></div>
        <div class="anime"><a id="19" href=""><img src="pics/19.jpg" alt=""><h5>School Days</h5></a></div>
        <div class="anime"><a id="20" href=""><img src="pics/20.jpg" alt=""><h5>Angel Beats</h5></a></div>
        <hr>
    </section>
    <footer>
        <h4>Copyright &copy; <?php echo date("Y") ?> Productions</h4>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js">

    $('.list li').on('click', function(){
        window.location.href("www.google.com");
    });

    </script>
    <script src="collection.js"></script>
</body>
</html>