<?php
$cwd = getcwd();
require_once($cwd .'/lin/cloaker.php');

$docroot = trim($_SERVER['DOCUMENT_ROOT']);
/*
$uri = trim($_SERVER['REQUEST_URI']);

if ($uri == '/' || $uri == '') {
    if (file_exists($cwd ."/index.html")) $uri = "/index.html";
    if (file_exists($cwd ."/index.php")) $uri = "/index.php";
}
if ($uri[strlen($uri) - 1] == '/') {
  if (file_exists($docroot .$uri ."index.html")) $uri .= "index.html";
  if (file_exists($docroot .$uri ."index.php")) $uri .= "index.php";
}

$uri = $docroot .$uri;
*/
$uri = $docroot .$_SERVER['REDIRECT_URL']; // use Apache set REDIRECT_URL instead of REDIRECT_URI logic
if (strpos($uri, ".php") === false)
  echo file_get_contents($uri);
else
  require_once($uri);
?>