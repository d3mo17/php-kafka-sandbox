<?php
require_once '../_theme.php';
require_once '../../vendor/autoload.php';

$parser = new \Erusev\Parsedown\Parsedown();
echo $parser->toHtml(file_get_contents('../../md/examples/file-pulse/index.md'));
