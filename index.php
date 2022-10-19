<?php include $_ENV["DIR"] . "/core/inc/fun.php";
inc("head"); ?>
<p class="media-container"><img src="/rooms/pre3.png" usemap="#picture" width="640px" height="auto" /></p>
<p>Be our guest!</p>
<p>
  <a href="/enter"><button>New visit</button></a>
<?php if (isset($_COOKIE["saved_room"])) { echo '  <a href="/cookie?load"><button>Load saved visit</button></a>'; } ?>
</p>
<p>Wa this? - This is an experimental website with a navigation inspired by <a href="https://homestuck.com" title="Homestuck is a trademark of Andrew Hussie">Homestuck&#8482;</a> and <a href="https://strangereons.com">Stranger Eons</a>.</p>
<p>You are a guy and you enter to this hotel. Explore it!</p>
<h3>WORK IN PROGRESS!!!</h3>
<style>
  #header:before {
    content: "Welcome to the Grand";
    font-weight: normal;
    margin-right: 5px;
  }
</style>
<?php inc("foot");