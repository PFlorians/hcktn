<!DOCTYPE html>
<html class="container-fluid" lang="en">
  <head>
    <!-- meta content -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- JS dependencies like jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <!-- axios -->
			<script src="https://github.com/axios/axios/tree/master/dist/axios.js"></script>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- follow device width initial zoom level -->
		<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>demo interface</title>
    <!-- php autoloader -->
    <?php //attempt autoload check
            spl_autoload_register(
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
            }
    ?>
  </head>
  <body id="telo">
      <header class="page-header" id="headr"> <!-- komplet cely header moze byt dynamicky linkovany -->
      <nav class="navbar navbar-inverse navbar-fixed-top bottom-margin" id="hlavicka">
          <div id="nhead" class="navbar-header"><!-- dolezite koli mechanike 3-bar spuste -->
            <button class="navbar-toggle pull-left aux-navbar-left" onclick="temporaryEraseConditions()"  data-toggle="collapse" data-target="#mainNav" id="bars">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button><!-- logo -->
            <a class="navbar-left" >
              <object type="image/svg+xml" data="'. $this->util->getSelfRoot().$this->util::img . $this->util->getRelativeAddressingChar() .'floppy.svg" id="logo">
                Objects not supported in your browser
              </object>
            </a>
          </div>
          <div class="collapse navbar-collapse " id="mainNav">
          <ul class="nav navbar-nav arcade-font">
            <li class="vertical-separator-left"><a href="'.$this->util->getSelfRoot().'index.php">Home</a></li>
            <li ><a href="'. $this->util->getSelfRoot() . $this->util::html. $this->util->getRelativeAddressingChar() .'about.php">About</a></li>
            <li ><a href="'. $this->util->getSelfRoot() . $this->util::html. $this->util->getRelativeAddressingChar() .'software.php">Software</a></li><!-- nic moc, ale bude vle JS -->
              <!--<li ><a href="#">Music</a></li>--> <!-- pride neskor -->
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  Miscellanous
                  <span class="caret">
                  </span>
                </a>
                <ul class="dropdown-menu"><!-- to be done -->
                  <li><span><img id="refe" src="'. $this->util->getSelfRoot() . $this->util::img. $this->util->getRelativeAddressingChar() .'references.png" alt="references"/><a href="'.
                                   $this->util->getSelfRoot().$this->util::html. $this->util->getRelativeAddressingChar() .'90swebsites.php">90\'s websites</a></span></li>
                  <li><span><img id="ninety" src="'.$this->util->getSelfRoot().$this->util::img. $this->util->getRelativeAddressingChar() .'90s.png" alt="gallery"/><a href="'.
                                   $this->util->getSelfRoot().$this->util::html. $this->util->getRelativeAddressingChar() .'music-gal.php">Music</a></span></li>
                  <li><span><img id="gms" src="'.$this->util->getSelfRoot().$this->util::img. $this->util->getRelativeAddressingChar() .'cd.png" alt="games"/><a href="'.
                                   $this->util->getSelfRoot().$this->util::html.$this->util->getRelativeAddressingChar() .'games-gal.php">Games</a></span></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right arcade-font">
              <!-- popovers -->'.$this->detectSession().'
            </ul>
            <div id="login-form" class="hide">
              <form class="navbar-form navbar-left" method="post" action="'.$this->util->getSelfRoot().$this->util::php.$this->util->getRelativeAddressingChar().'login.php">
                <div class="form-group">
                <input type="text" class="form-control" maxlength ="4" name="uname" placeholder="username"/>
                <input type="password" class="form-control" maxlength="4" name="pwd" placeholder="password"/><br/>
                <input type="submit" class="btn btn-primary"/>
                </div>
              </form>
            </div>
          </div>
          <div class="progress thin-progressbar" id="progress"><!-- need to overload in .css file -->
            <span class="progress-bar pb-details" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" role="progressbar">
            </span>
          </div>
        </nav>
    </header>
  </body>
</html>
