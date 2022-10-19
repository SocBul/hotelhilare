<?php include "check_inc.php";
function inc ($file) {
  include $_ENV["DIR"] . "/core/inc/$file.php";
}