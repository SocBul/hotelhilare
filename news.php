<?php $title = "News"; include "_inc/head.php"; ?>
<h3>News</h3>
<ul id="news" style="text-align:initial;overflow:hidden scroll;height:70%;">
<?php $news = json_decode(file_get_contents("news.json"));
foreach($news as $info) {
  echo "<li><b>$info[0]</b> - $info[1]</li>";
} ?>
</ul>
<?php include "_inc/foot.html";