<link rel="stylesheet" href="/retro.css">
<?php

require_once('../vendor/autoload.php');

$parser = new \Erusev\Parsedown\Parsedown();
echo $parser->toHtml(file_get_contents('../md/examples/index.md'));