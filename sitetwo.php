<?php
require('logic.php');
/*foo must be used in the form -->$var = new foo\filename();<--*/
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>LessonTap</title>
    <!--link rel="stylesheet" type="text/css" href="styles.css"-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  </head>

  <body>
    <header class="navbar-inverse" role="banner"> <!--this mod gives you the full dscreen black navbar-->
      <div class="container">
        <nav role="navigation">
          <div class="container-fluid">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">LessonTap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <!--Link and dropdown on right-->
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link Right</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </div>
    </header>

    <div class="container">
      <!--Panel-->
      <div class="panel panel-default">
        <div class="panel-heading">
        <h3 class="panel-title">The Proclaimers Quiz</h3>
        </div>
        <div class="panel-body">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/tbNlMtqrYS0?rel=0;&autoplay=1" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
      <!--Checkboxes-->
      <form action="sitetwo.php">
        <h3>To fall down at your door, The Proclaimers?</h3>
        <input type="checkbox" name="chk" value="0"> Would walk 500 miles<br><!--name needed to send to DB-->
        <input type="checkbox" name="chk" value="1"> In addition to walking 500 miles, would walk 500 more<br>
        <input type="checkbox" name="chk" value="2"> Would quit after 999 miles<br>
        <input type="checkbox" name="chk" value="3"> Would walk more miles than 500 and 500 more<br>
        <input type="submit" value="Submit" name='chksub2'>
      </form>
      <!--Correct Display-->
      <?php if($_GET['chk']==3&&isset($_GET['chksub2'])): ?>
        <?php echo "<h1>$string</h1>" ?>
      <?php endif; ?>
