<?php 
require_once 'htmlpurifier/library/HTMLPurifier.auto.php';

$config = HTMLPurifier_Config::createDefault();
$config->set('HTML.SafeIframe', true);
$config->set('URI.AllowedSchemes', array('data' => true, 'http' => true));
$config->set('URI.SafeIframeRegexp', '%^(https?:)?(\/\/www\.youtube(?:-nocookie)?\.com\/embed\/|\/\/player\.vimeo\.com\/)%');
$purifier = new HTMLPurifier($config);

include 'connect.php';

$blogposts = $conn->prepare("SELECT `content`, `id` FROM `tblsample`");
$blogposts->execute();
$count=$blogposts->rowCount();

if($count != 0){
  while($r = $blogposts->fetch()){
    $clean_html = $purifier->purify($r['content']);

    echo "<div class='row'>
    <p>".$clean_html."</p>";
    echo "</div>";

    echo "</hr>";
}
}

?>