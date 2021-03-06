<!DOCTYPE html>
<html>
<head>
  <title>FBI</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="fav icon" href="images/FBIicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" src="fonts//home/rohitramesh/version-control/lamp-project/project-files/fonts/TypoWriter Light Demo.otf">
  <style type="text/css">
    body{
      color: white;
    }
    .header{
      font-size: 50px;
    }
    .navbar-inverse {
      background: black;
      color: white;
    }
    .navbar-inverse .navbar-brand, .navbar-inverse a{
      color:white;
    }
    .navbar-inverse .navbar-nav>li>a {
      color: white;
    }
    .input.transparent-input{
       background-color:transparent !important;
       border:none !important;
    }
    .sizer{
      font-size: 18px;
      font-weight: lighter;
    }

  </style>

</head>
<body>
  <?php
  session_start();
  if(!isset($_SESSION['user'])){
    $_SESSION["msg"]="Your session has expired";
    header("location:login.php");
  }
  ?>

  <div class="container">
    <div class="container-fluid content">
  <div class="image"></div>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.php" class="navbar-brand"><span class="glyphicon glyphicon-picture"></span>Guiness</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-nav-demo">
        <ul class="nav navbar-nav">
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
  <div class="header">
    <h1>Admin Client</h1>
  </div>

  <div class="body">
    <h1>Add Record:</h1>
    <form action="new_record.php">
      <button type="submit" value="Add" style="color: black;">Add</button>
    </form>

    <br>
    <h1>Delete Record:</h1>
    <form action="action_delete.php">
      <button type="submit" value="Del" style="color: black;">Delete</button>
    </form>

    <br>
    <h1>Display:</h1>
    <form action="display_search.php" method="POST">
          <button type="submit" value="Add" style="color: black;">Display All</button>
    </form>

    <br>
    <br>
    <br>
    <br>



    <div class="col-md-4" style="text-align: center; color: green">
    <?php
    session_start();
    if(isset($_SESSION['msg']))
    {
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
    ?>
    </div>
  </div>
  </div>


  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
