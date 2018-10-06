
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/img/logo.png">

    <title>Administrateur</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/forms.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>

      <?php include('inc/menu.php') ?>

        <main role="main" class="col-md-8 ml-sm-auto col-lg-9 px-4 mt-3">
          <h6 id="titre_page" style="box-shadow: 1px 1px 1px 1px black;padding:5px">
            <?php
              if (ISSET($_GET['section']) && ISSET($_GET['page'])) {
                echo $_GET['section'].' > '.$_GET['page'] 
            ?>
          </h6>
          <div id="contenu">
          <?php
              switch ($_GET['section']) {
                case 'user':
                  include('pages/utilisateur/'. $_GET['page'] .'.php');
                  break;
                
                case 'unite':
                  include('pages/unite/'. $_GET['page'] .'.php');
                  break;

                case 'finJournee':
                  include('pages/journee/'. $_GET['page'] .'.php');
                  break;

                case 'extraction':
                  include('pages/extraction/'. $_GET['page'] .'.php');
                  break;
                
                case 'reporting':
                  include('pages/reporting/'. $_GET['page'] .'.php');
                  break;
              }
            } // fin if
          ?>
          </div>
        </main>
      </div>
    </div>


    <!-- Scripts JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="assets/js/script.js"></script>
    
  </body>
</html>
