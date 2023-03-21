<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Cabot Cruises <?php echo $title; ?> </title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" media="screen" href="css/styles.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

<!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spline+Sans:wght@300;500&display=swap" rel="stylesheet">

</head>

<body>
<div id="headerWrapper">
	<header class="clearfix">
        <figure class="logo">
            <img src="images/logo.png" alt="logo" srcset="images/logo1.png 1x, images/logo2.png 2x,
            images/logo3.png 3x">
        </figure>
        
		<h1>Cabot Cruises</h1>
        <div id="hamburger"><a href="#closex">&#9776;</a></div>
        <div id="phone"><a href="tel:18004442343">1-800-444-2343</a></div>
	</header>
</div><!-- end header wrapper -->

    
    
<div id="navWrapper">
    <nav class="clearfix">
        <div class="nav-bar" >
        <div id="closex"><a href="#hamburger">x</a></div>
        <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="cruises.php">Cruises</a></li>
        <li class="parent"><a href="#">Agents</a>
            <ul>
                <li><a href="sally.php">Find an Agent</a></li>
                <li><a href="buddy.php">Message your Agent</a></li>
            </ul>
        </li>
        <li><a href="book.php">Book</a></li>
    </ul>
    <div class="search">
    <input type="search" placeholder="search...">
    <button><i class="fa-solid fa-magnifying-glass"></i></button>
</div>
</div>
    </nav>
</div> <!-- end nav wrapper -->

<div id="mainWrapper">
    
<main class="clearfix">