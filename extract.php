<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}
tr:nth-child(even) {
    background-color: #dddddd;
}
table.extra {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
td.extra, th.extra {
    border: 1px solid #c2e09f;
    text-align: left;
    padding: 8px;
}
tr.extra:nth-child(even) {
    background-color: #c2e09f;
}
body{
/*    background-image: "1.jpg";
    opacity:0.95;*/
}
.elo{
box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.09);
margin-bottom: 20px;
width: 100%;
}

.image1{
/*width:200px;
height:200px;*/
text-align: center;
display:block;
margin:auto;
padding-top: 5px;
padding-bottom: 3px;
}
.text{
  text-align: center;
}

.nopadding {
   padding: 0 !important;
   margin-left: 0px  !important;
}

.nopadding1 {
 padding: 0 !important;
 margin-left: 0px  !important;
}

</style>
<body>
<div class="container">
<nav class="navbar navbar-toggleable-md navbar-light bg-faded elo">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index2.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="https://github.com/toxwow/Ekipa-z-Trolejbusa">Repozytorium</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post">
      <input type="text" class="form-control mr-sm-1" id="id_product" pattern="\d*" placeholder="Podaj id produktu" name="id_product" required>
      <div class="btn-group" role="group" aria-label="Basic example">
    <button type="submit"  formaction="extract.php" class="btn btn-outline-success">E</button>
    <button type="submit"  formaction="transform.php" class="btn btn-outline-success">T</button>
    <button type="submit" class="btn btn-outline-success">L</button>
</div>
    </form>
  </div>
</nav>




<?php
include "test1.php";
?>
</div>
</body>
</html>