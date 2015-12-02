<?php define('_VKL_INIT',microtime());
 require_once('./include/header.php'); 
    include('./include/function.php'); ?>
    <div class="container">

      <div class="starter-template">
        <h1><?php echo $lang['Site name'] . $lang['Title separator'] . $lang['Home'] ?></h1>
        <?php
            ShowDir();
        ?>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
</body>
</html>
