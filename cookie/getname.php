<?php header("content-type: application/json");
if (isset($_GET["name"]) && $_GET["name"]) {
  setcookie(
    "saved_name",
    $_GET["name"],
    time() + (10 * 365 * 24 * 60 * 60)
  );
  die('{"name": "' . htmlentities($_GET["name"]) . '"}');
} elseif (isset($_COOKIE["saved_name"])) {
  header("content-type: application/json");
  die('{"name": "' . htmlentities($_COOKIE["saved_name"]) . '"}');
} else {
  die('{"name": "you"}');
}