<?php foreach (glob("*.php") as $x) {
  if ($_SERVER["REQUEST_URI"] == "/core/inc/$x") {
    http_response_code(403);
    die("Forbidden");
  }
}