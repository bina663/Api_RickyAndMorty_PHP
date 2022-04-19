<?php
  $content = json_decode(file_get_contents('https://rickandmortyapi.com/api/character'));
  require_once('./filter.php');
  $filter = "";
  if(isset($_POST) &&  !empty($_POST['filter'])){
    $filter = $_POST['filter'];
  }
  
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS --><!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- css -->
    <style>
        .cardimg{
            width:40px;
        }
    </style>
    <title>Api Rick and Morty</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light p-4">
      <div class="container-fluid">
        <a class="navbar-brand"><h1 class='display-5'>Ricky and Morty</h1></a>
        <form class="d-flex" action="#" method="post">
          <select name="filter" class="form-control me-2">
            <option value="">All characters</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="human">Human</option>
            <option value="alien">Alien</option>
            <option value="alive">Alive</option>
            <option value="dead">Dead</option>
            <option value="unknown">unknown</option>
          </select>

          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </nav>
      <div class="container d-flex flex-wrap justify-content-between mt-4">
        <?php   
          if(empty($filter)){
            $filters = $content->results;
            require_once('./characters.php');
          }
          else{
            if($filter == 'male'){  
            $filters = $male;
              require_once('./characters.php');
            }
            if($filter == 'female'){  
              $filters = $female;
              require_once('./characters.php');
            }
            if($filter == 'human'){  
              $filters = $human;
              require_once('./characters.php');
            }
            if($filter == 'alien'){  
              $filters = $alien;
              require_once('./characters.php');
            }
            if($filter == 'alive'){  
              $filters = $alive;
              require_once('./characters.php');
            }
            if($filter == 'dead'){  
              $filters = $dead;
              require_once('./characters.php');
            }
            if($filter == 'unknown'){  
              $filters = $unknown;
              require_once('./characters.php');
            }
          }
          ?>
      </div><!-- container -->
  </body>
</html>