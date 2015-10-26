<?php
    header('Content-type: text/html; charset=utf-8');

// let's check the lang (by default it's en)
// TODO: get the lang using navigator
if (isset($_GET['lang']))
{
    if(trim($_GET['lang']) == 'fr') {
        $curr_lang = 'fr';
        require_once('lang/fr.php');
    }
    else
    if(trim($_GET['lang']) == 'en'){
        $curr_lang = 'en';
        require_once('lang/en.php');
    }
    else{
        $curr_lang = 'en';
        require_once('lang/en.php');
    }
}
else{
    $curr_lang = 'en';
    require_once('lang/en.php');
}
// don't forget this one
require_once('lang/selector.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
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
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
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
            <li class="active"><a href="#"><?php echo $lang['Home'] ?></a></li>
            <li class="disabled"><a href="#"><?php echo $lang['Log'] ?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $lang['Lang'] ?><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li <?php if($curr_lang == 'fr') { ?> class="active" <?php } ?>><a href="./index.php?lang=fr"><?php echo $lang_selector['Lang_fr'] ?></a></li>
                <li <?php if($curr_lang == 'en') { ?> class="active" <?php } ?>><a href="./index.php?lang=en"><?php echo $lang_selector['Lang_en'] ?></a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav><!--/.navbar -->

    <div class="container">

      <div class="starter-template">
        <h1><?php echo $lang['Site name'] . $lang['Title separator'] . $lang['Home'] ?></h1>
        <p class="lead"><a href="//freenode.net/channel_guidelines.shtml">Channel Guidelines</a></p>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
</body>
</html>
