<?php
session_start();
if (session_id() != $_SESSION["sess_id"]){
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#Home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li style="float:right">
    <?php
    if (isset($_SESSION["session_id"])) {
    ?>
    <a class="active" href="#">Logout</a>
<?php } else { ?>
    <a class="active"href="logout.php">Login</a>
<?php } ?>
</li>
</ul>
</ul>

</body>
</html>
