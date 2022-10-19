<?php if (isset($_GET["save"]) && $_GET["save"]) {
  setcookie(
    "saved_room",
    $_GET["save"],
    time() + (10 * 365 * 24 * 60 * 60)
  );
  header("location: /hotel#" . urlencode($_GET["save"]));
} elseif (isset($_GET["load"]) && isset($_COOKIE["saved_room"])) {
  header("location: /hotel#" . urlencode($_COOKIE["saved_room"]));
} else {
  die("<script>window.history.back();</script><noscript><meta http-equiv=\"refresh\" content=\"0;url='/'\" /></noscript>");
}