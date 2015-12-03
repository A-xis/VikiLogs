<?php
  defined('_VKL_INIT')||(header("HTTP/1.1 403 Forbidden")&die('403.2 - Read access is denied.'));
    header('Content-type: text/html; charset=utf-8');
    // let's check the lang (by default it's en)
    // TODO: get the lang using navigator
    if(isset($_GET['lang'])) {
        if(file_exists('./lang/'.$_GET['lang'].'.php')) {
            $curr_lang = $_GET['lang'];
            require_once('./lang/'.$_GET['lang'].'.php');
        }
    }
    else{
        $curr_lang = 'en';
        require_once('./lang/en.php');
    }
    // don't forget this one
    require_once('./lang/selector.php');

    if(defined('_VKL_DEBUG'))
      echo "<pre>" . print_r($GLOBALS, true) . "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <style>
        /* Move down content because we have a fixed navbar that is 50px tall */
        body {
          padding-top: 50px;
          padding-bottom: 20px;
        }
    </style>
    <title><?php echo $lang['Site name'] . $lang['Title separator'] . $lang['Home'] ?></title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $lang['Site name'] ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./"><?php echo $lang['Home'] ?></a></li>
            <li class="disabled"><a href="./read.php"><?php echo $lang['Log'] ?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $lang['Lang'] ?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li <?php if($curr_lang == 'fr') { ?> class="active" <?php } ?>><a href="?lang=fr"><?php echo $lang_selector['Lang_fr'] ?></a></li>
                <li <?php if($curr_lang == 'en') { ?> class="active" <?php } ?>><a href="?lang=en"><?php echo $lang_selector['Lang_en'] ?></a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="navbar-brand" href="https://github.com/A-xis/VikiLogs"><?php echo $lang['Github'] ?></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav><!--/.navbar -->
