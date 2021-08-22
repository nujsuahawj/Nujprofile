<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Login and signup snippets built with Bootstrap 3">
<meta name="author" content="easytousecode">
<link rel="icon" type="image/png" href="assets/logo.png"/>
<title>My Portlio</title>
<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="assets/css/style.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top ">
        <div class="container">
          <div class="navbar-header">
            <a class="navbar-brand" href="https://nriavtushlubplogteb.000webhostapp.com/">Comments</a>
          </div>
        </div><!--/.container-fluid -->
    </nav>  

    <?php 
    include('db.php');


    $query = " SELECT * from customer";

    $result = mysqli_query($con, $query);
    ?>

  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Mesege</th>
    </tr>
  </thead>
  <tbody>
  <?php while($row = mysqli_fetch_array($result)){ ?>
    <tr>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['subject']; ?></td>
      <td><?php echo $row['text']; ?></td>
    </tr>
    <?php }?>
  </tbody>
</table>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
