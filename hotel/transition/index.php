<?php
include $_ENV["DIR"] . "/core/inc/fun.php";
if (
  (isset($_GET["type"]) && isset($_GET["to"])) &&
  file_exists($_ENV["DIR"] . "/transitions/" . $_GET["type"] . ".html")
) {
  $transition = file_get_contents($_ENV["DIR"] . "/transitions/" . $_GET["type"] . ".html");
} else {
  die("Error: 404");
} ?>
<html lang="en" dir="ltr">
<head>
<meta name="viewport" content="width=device-width" />
<title>Hotel HTML</title>
<link rel="stylesheet" href="/core/css/style.css" />
<meta http-equiv="refresh" content="3;url='/hotel#<?= urlencode($_GET["to"]) ?>'" />
</head>
<body>
<div id="inner" style="height:100vh;">
<h2 id="header"><a href="/">Hotel HTML</a></h2>
<?php echo $transition;
inc("foot");