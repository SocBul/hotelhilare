<?php
if (isset($_GET["room"])) {
  header("Location: /hotel#" . urlencode($_GET["room"]));
}
$date = date("Y-m-d H:i:s");
include $_ENV["DIR"] . "/core/inc/fun.php";
inc("head"); ?>

<!--
===> Debug mode activated
> Restricted data mode activated, only your logs are shown
===> Parallel mode activated
 _____         _   _ _   _ ___ 
|  |  |___ ___| |_|_| |_|_|  _|
|   --| .'|_ -|  _| | '_| |  _|
|__|__|__,|___|___|_|_,_|_|_|  
v1.14 (Build 154839)
(C) 1996-2007 9779 Systems, Ltd.
All rights reserved

HTTP server serving at http://localhost:80/
HTTPS server serving at https://localhost:443/

[<?= $date ?>] Initializating virtual reality node... DONE
[<?= $date ?>] Connecting to virtual reality node... DONE
[<?= $date ?>] Initializating virtual control device client... DONE
[<?= $date ?>] Waking up... DONE
[<?= $date ?>] Parsing with HTML mod... DONE
-->


<div id="room"><noscript><div class="media-container"><p>This software requires Javascript to work.<br />Activate it to get inside this <del><i>goverment honeypot</i></del> <b>cOoL WeBsItE!1! :DDD</b></p></div></noscript></div>


<table id="bar"><tr>
<td id="options">
</td>
<td id="controls">
</td>
</tr></table>


<!-- Javascript -->
<script type="text/javascript" src="/core/js/hotel.js"></script>
<script type="text/javascript">
  <?php
$nick = "Alan";
if (isset($_COOKIE["saved_name"])) {
  echo 'const name = "' . htmlentities($_COOKIE["saved_name"]) . '";';
} ?>
  if (getURItag() != "") {
    renderRoom(getURItag());
  } else {
    window.location.href = "/hotel/transition?type=enter&to=hall";
  }
</script>

<div style="font-size:small">
  <a id="save" href=""><button>Save</button></a>
  <a href="/cookie?load"><button>Load</button></a>
</div>
<?php inc("foot");