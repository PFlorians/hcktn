<!DOCTYPE html>
<html class="container-fluid" lang="en">
  <head>
    <!-- meta content -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- JS dependencies like jquery -->
  <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
    <script src="bower_components/moment/moment.js"></script>
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/underscore/underscore.js"></script>
    <link rel="stylesheet/less" type="text/css  " href="bower_components/bootstrap/less/bootstrap.less"/>
    <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script src="bower_components/bootstrap-calendar/js/calendar.js"></script>
    <link rel="stylesheet" href="bower_components/bootstrap-calendar/css/calendar.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
      <!-- axios -->
			<script src="https://github.com/axios/axios/tree/master/dist/axios.js"></script>
    <!-- bootstrap -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    -->
    <!-- custom CSS -->
    <link rel="stylesheet" href="css/custom_override.css"/>
    <link rel="stylesheet" href="css/buttons.css"/>
    <link rel="stylesheet" href="css/general.css"/>
    <!-- follow device width initial zoom level -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>demo interface</title>
    <!-- php autoloader -->
    <?php //attempt autoload check
            /*spl_autoload_register(
                function($clName)
                {
                    //echo 'Autoload HTML: ' . $clName.PHP_EOL;
                    if(file_exists("php/" . $clName . ".php"))
                    {
                    //    echo 'Exists '.PHP_EOL;
                           require_once("php/" . $clName .".php");
                    }
                    else
                    {
                        throw new Exception("Error trying to load file(html): " . $clName . ".php", 1000);
                    }
                }
            );
            try {
                $util=new Util();//this must be global & accessible for every object using dependency injection
            } catch (Exception $e) {
                echo 'Initial HTML error: ' .$e;
            }*/
    ?>
    <!-- calendar loader -->
    <script src="js/spark.js"></script>
    <script src="js/calendar_nav_event_handlers.js"></script>
  </head>
  <body id="telo">
    <nav class="navbar navbar-inverse navbar-static-top bottom-margin" id="hlavicka">
      <div class="container-fluid">
        <div id="nhead" class="navbar-header"><!-- dolezite koli mechanike 3-bar spuste -->
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false"
           aria-controls="navbar" id="bars">
            <span class="sr-only">Toggle navbar</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- logo -->
          <a class="navbar-brand" >
            <img class="img-responsive" src="img/logo.PNG"/><!-- gootta replace by SVG or something -->
          </a>
        </div>
        <div class="collapse navbar-collapse " id="mainNav">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#" id="user" data-toggle="popover" title="Enter Credentials" data-placement="bottom">
                  <span class="glyphicon glyphicon-user"></span>
                  USERNAME
                  <span class="caret"></span>
              </a>
          </li>
        </ul>
      </div>
    </nav><!-- koniec headra -->
    <!-- skupina riadiacich tlacitok -->
    <div class="container">
      <div class="btn-group btn-group-justified" role="group">
        <div role="group" class="btn-group">
          <button class="btn btn-primary">Auto</button>
        </div>
        <div role="group" class="btn-group">
          <button class="btn btn-success">Dalkova doprava</button>
        </div>
        <div role="group" class="btn-group">
          <button class="btn btn-warning">Doprava na letiste</button>
        </div>
        <div role="group" class="btn-group">
          <button class="btn btn-info">Plan</button>
        </div>
      </div>
    </div>
    <!-- kalendar -> plan -->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padd"
        <h3 id="kde"></h3>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padd">
        <div class="btn-group" role="group">
          <button class="btn btn-heidGreen" data-calendar-view="year">Rok</button>
          <button class="btn btn-heidGreen" data-calendar-view="month">Mesiac</button>
          <button class="btn btn-heidGreen" data-calendar-view="week">Tyzden</button>
          <button class="btn btn-heidGreen" data-calendar-view="day">Den</button>
        </div>
      </div>
    </div>
    <div id="calendar"></div>
    <div class="btn-group" role="group">
      <button class="btn btn-success" data-calendar-nav="prev">previous</button>
      <button class="btn btn-success" data-calendar-nav="next" onclick="nxt()">Next</button>
    </div>
    <form method="post" action="php/connect.php">
      <input type="submit" value="submit"/>
    </form>
  </body>
</html>
