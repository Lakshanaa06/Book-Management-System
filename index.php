<?php    
    session_start();
    if (isset($_GET['logout']))
    {
        session_destroy();
        unset($_SESSION['name']);
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en" class="js csstransitions">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAIRO EVENTS</title>
    <link rel="stylesheet" href="body.css">
    <p><h1><em><center>CAIRO EVENTS</center></em></h1></p>
</head>
<body>
<div id="header">
<div id="mainmenu">
<header>
<nav>
<ul><b>
<?php if (!isset($_SESSION['name'])){?>
    <li><center><a href="login.php">LOGIN</a></li></center>
    <li><center><a href="register.php">SIGN IN</a></li></center>
<?php }?>
<?php if (isset($_SESSION['name']))
{?>
<li><a href="bookyourself.php">BOOK YOURSELF</a></li>
<li><a href="Gallery.html">GALLERY</a></li>
<li><a href="View_Dreams.php">VIEW DREAMS</a></li>
<li><a href="Contact.html">CONTACT</a></li>

<?php }?>
</ul></b>
</nav>
</header>
</div>
</div>
<div id="pagewrapper">
<div id="topbg"></div>
<div id="systemName">
<h1><b><center>Be A GuesT At YouR OwN EvenT</b></h1></center>
<h1><b><center>WELCOME TO YOURS EVENT</b></h1></center>
<p><h2><center>To achieve great things two things are needed: a plan and not quite enough time</p></h2></center>
</div>
<div class="content">
<!-- notification message -->
<?php if (isset($_SESSION['success'])) {?>
<div class="error success" >
<h3 style="color: green;">
<?php
echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3></div>
<?php } ?>
</div>
</div>
</body>
</html>