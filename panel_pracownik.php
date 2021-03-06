<?php

    session_start();
    if($_SESSION['uprawnienia'] != 0 )
    {
        header('Location: index.php');
        exit();/*przekierowanie wstrzymanie dalszych operacji*/
    }
    else if(!isset($_SESSION['zalogowany']))
    {
       header('Location: loginbd.php');
        exit();/*przekierowanie wstrzymanie dalszych operacji*/
    }
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
    <title>Fitness Factory | Zapraszamy!</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/navbar-footer.css" rel="stylesheet">
		<meta name="Description" content="Tu wpisz opis zawartości strony" />
	    <meta name="Keywords" content="Tu wpisz wyrazy kluczowe rozdzielone przecinkami" />
       <link href="https://fonts.googleapis.com/css?family=News+Cycle:400,700" rel="stylesheet">
	
    
        
        
    
		<meta charset="utf-8">
    
    
    
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="main.js"></script>
    
        
</head>
    
<body>
    <nav class="navbar navbar-default navbar-fixed-top navbarsklep">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="logo" href="#"><img src="img/logo.png" style="height: 70px;"></a>
                </div>

            
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="menu_active" style="margin-right: 20px;"><a href="index.php">O FIRMIE <span class="sr-only">(current)</span></a></li>
                     <li class="menu_active_hover" style="margin-right: 20px;"><a href="oferta.php">OFERTA</a></li>
                     <li class="menu_active_hover" style="margin-right: 20px;"><a href="grafikZAL.php">KALENDARZ ZAJĘĆ</a></li>
                    <li class="menu_active_hover" style="margin-right: 20px;"><a href="sklep.php">SKLEP</a></li>
                    <li class="menu_active_hover" style="margin-right: 20px;"><a href="cennik.php">CENNIK</a></li>
                    <li class="menu_active_hover" style="margin-right: 20px;"><a href="kontakt.php">KONTAKT</a></li>
                    <li style="padding-right: 20px;">
                        
                            <a href="#">
                            <div style="float: left; padding-right: 10px;" >
                                <span class="glyphicon glyphicon-user"></span>
                            </div>
                            <div style="float: left;  margin-top: -10px; color: #78b949;">
                            <?php
                                 echo "<p>Zalogowany:<br>".$_SESSION['user']."</p>";
                            ?>  
                               
                            
                            </div>
                            <div style="float: left; padding-left: 10px;" >
                                 <span class='caret'></span>    
                            </div>
                            </a>
                            <ul>
                                <li><a href="wylogowanie.php">Wyloguj się</a></li>
                               
                        <li><a href='panel_pracownik.php'>Panel Pracownika</a></li>
                                
                                
                                
                            </ul>
                         
                    </li>
                   
                    <li style="padding-right: 20px;">
                        <a href="#" id="koszyk_container">
                        <div style="float: left;  padding-right: 10px;">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                        </div>
                        <div style="float: left;">
                            <p style="float: left; padding-right: px;">Koszyk</p><span style="float: left; margin-top: 2px;" class="badge shopping-badge"><?php if(isset($_SESSION["shopping_cart"])) { echo count($_SESSION["shopping_cart"]); } else { echo '0';}?></span>
                        </div>
                        <div style="float: left; padding-left: 10px;" >
                             <span class='caret'></span>    
                        </div>
                        
                        </a>
                          <ul>
                               <li><a href="pokazkoszyk.php">Pokaż koszyk</a></li>
                              <li><a href="zamowienie.php">Zamówienia</a></li>
                          </ul>
                     </li>
                    
                  </ul>
                
                </div><!-- /.navbar-collapse -->
                  
              </div><!-- /.container-fluid -->
            </nav>
            
            <!-- koniec navbar -->
        
            <div class="jumbotron">
                
            </div>
        
            <div class="circles">
                <div class="row">
                    
                  <div class="col-md-4">
                    <div class="thumbnail">
                        
                      <img src="img/people1.png" class="img-circle">
                      <div class="caption">
                        <h3>ZAJĘCIA</h3>
                        <p>...</p>
                        <p><a href="opisyzajec.php" class="btn btn-default button-log" role="button">Dowiedz się więcej</a></p>
                      </div>
                    </div>
                  </div>
                    
                    <div class="col-md-4">
                    <div class="thumbnail">
                      <img src="img/calendar.png" class="img-circle">
                      <div class="caption">
                        <h3>ZAPISY ONLINE</h3>
                        <p>...</p>
                          <p><a href="grafikZAL.php" class="btn btn-default button-log" role="button">Zapisz się</a></p>
                      </div>
                    </div>
                  </div>
                    <div class="col-md-4">
                    <div class="thumbnail">
                      <img src="img/koszyk.png" class="img-circle">
                      <div class="caption">
                        <h3>SKLEP</h3>
                        <p>...</p>
                        <p><a href="sklep.php" class="btn btn-default button-log" role="button">Kup Karnet</a></p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        
                
        
            
           <div style="height: 400px">
        
        
        </div>
        
        
        <nav class="navbar fixed-bottom navbar-light footer">
            <div class="container">
                
            <div class="col-md-4 stopka2">
                    <h4><a href="index.php">O Firmie</a></h4>
                    <h4><a href="oferta.php">Oferta</a></h4>
                    <h4><a href="grafikZAL.php">Kalendarz zajęć</a></h4>
                    <h4><a href="sklep.php">Sklep</a></h4>
                    <h4><a href="cennik.php">Cennik</a></h4>
                    <h4><a href="kontakt.php">Kontakt</a></h4>
            </div>
            <div class="col-md-4 stopka2">
                <h4><a href="index.php">Dostawa i płatności</a></h4>
                <h4><a href="regulamin.html">Regulamin</a></h4>
                <h4><a href="politykapryw.html">Polityka prywatności</a></h4>
                <h4><a href="kontakt.php">Kontakt</a></h4>
            </div>
            <div class="col-md-4 stopka">
                
            </div>
                
            </div>
            <div class="col-md-12 copyright">
                <div class="container">
                    Copyright ©2017 Fitness Factory
                
                </div>
            </div>
        </nav>
</body>

</html>