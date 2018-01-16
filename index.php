<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Administrador de Dominios</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <header class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">wlade</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="#">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Contact</a>
              </nav>
            </div>
          </header>

          <main role="main" class="inner cover">
            <h4>Web site correct language</h4>
            <?php
            require __DIR__ . '/src/idioma.php';
            $lista=array(array('https://systemico.co/es/index.html','es'),
                         array('https://systemico.co/index.html','en'));
            foreach($lista as $item){
                $oidioma=new idioma();
                $io=$oidioma->detect($item[0]);
                echo $item[0]."( ".$item[1]." of ".$io.") =>>> ";
                if($item[1]==$io){
                  echo "<span style='color:green;font-weight:bold;'>CORRECT</span>";
                }
                else{
                  echo "<span style='color:red;font-weight:bold;'>FAIL</span>";
                }
                echo "<br>";
            }
            ?>
          </main>

          <footer class="mastfoot">
            <div class="inner">
              <p>Aplicación desarrollada por <a href="https://systemico.co/">Systemico, agile software factory</a>.</p>
            </div>
          </footer>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>
