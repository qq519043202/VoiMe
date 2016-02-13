<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">


    <title>VoiMe &ndash; Pure</title>
    <link rel="stylesheet" href="public/css/pure-min.css">
    
<!--[if lte IE 8]>
  <link rel="stylesheet" href="http://yui.yahooapis.com/combo?pure/0.6.0/base-min.css&pure/0.6.0/grids-min.css&pure/0.6.0/grids-responsive-old-ie-min.css">
<![endif]-->
<!--[if gt IE 8]><!-->
  <link rel="stylesheet" href="public/css/base-min.css">
  <link rel="stylesheet" type="text/css" href="public/css/grids-min.css">
  <link rel="stylesheet" type="text/css" href="public/css/grids-responsive-min.css">
<!--<![endif]-->



<!-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"> -->

  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/side-menu-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="public/css/layouts/side-menu.css">
    <!--<![endif]-->
  <link rel="stylesheet" type="text/css" href="public/css/my.css">
    <script type="text/javascript" src="public/js/jquery-1.12.0.min.js"></script>


    

    

</head>
<body>

<? if(isset($_SESSION['user_id']))
    {
 ?>
<div id="div_img"> 
    <div class="pure-menu pure-menu-horizontal">
    <ul class="pure-menu-list">
        <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
            <a href="javascript:void(0)" id="menuLink1" class="pure-menu-link">
                <img class="yuan_img" alt="pic" src="public/img/11.png">
            </a>
            <ul class="pure-menu-children">
                <li class="pure-menu-item"><a href="?/usr/self" class="pure-menu-link">Mine</a></li>
                <li class="pure-menu-item"><a href="?/usr/setting" class="pure-menu-link">Setting</a></li>
                <li class="pure-menu-item"><a href="?/usr/logout" class="pure-menu-link">Log out</a></li>
                <li class="pure-menu-item" id = "hid"><a  href="javascript:void(0)" class="pure-menu-link">Hidden</a></li>
            </ul>
        </li>
    </ul>
    </div>
</div>

<?}?>

<div id="layout">
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="./">VoiMe</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item">
                    <a href="?/home/index" class="pure-menu-link">Home</a>
                </li>

                <li class="pure-menu-item">
                    <a href="?/home/start" class="pure-menu-link">Start</a>
                </li>

                <li class="pure-menu-item">
                    <a href="?/usr/record" class="pure-menu-link">Record</a>
                </li>

                <li class="pure-menu-item">
                    <a href="?/home/services" class="pure-menu-link">Services</a>
                </li>

                <li class="pure-menu-item" id ="ceshisub"><a href="#" class="pure-menu-link">Contact</a></li>

                <li class="pure-menu-item" id="show"><a href="#" class="pure-menu-link">Show</a></li>
            </ul>
        </div>
    </div>

    <?=$al_content?>

</div>

<script src="public/js/ui.js"></script>

<script type="text/javascript" src="public/js/my.js"></script>


</body>
</html>
