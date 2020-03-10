<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?= $tittle; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <?= $this->session->flashdata('message'); ?> 

    <div class="container">

      <form class="form-signin" action="" method="POST">
        <h2 class="form-signin-heading text-center">Halaman Login Restoapp</h2>


        <label>Username</label>
        <input type="text" name="name" class="form-control" placeholder="Username" required autofocus>
        
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        
        <label>Level</label>
        <select type="number" name="level" class="form-control" required>
          <option selected disabled>--Select Level</option>
          <option>1</option>
          <option>2</option>
          <option>3</option>
        </select>

        <button class="btn btn-lg btn-success btn-block" type="submit" name="login">Login</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
