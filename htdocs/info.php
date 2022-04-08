<link rel="stylesheet" href="/retro.css">

<style type="text/css">
#phpinfo {}
#phpinfo pre {}
#phpinfo a:link {}
#phpinfo a:hover {}
#phpinfo table {}
#phpinfo .center {}
#phpinfo .center table {}
#phpinfo .center th {}
#phpinfo td, th {
    padding-left: 4px;
    border-bottom: 3px solid gray;
}
#phpinfo h1 {}
#phpinfo h2 {}
#phpinfo .p {}
#phpinfo .e {
    vertical-align: top;
}
#phpinfo .h {}
#phpinfo .v {}
#phpinfo .vr {}
#phpinfo img {}
#phpinfo hr {}
</style>

<div id="phpinfo">
<?php

ob_start();
phpinfo();
$pinfo = ob_get_contents();
ob_end_clean();

// the name attribute "module_Zend Optimizer" of an anker-tag is not xhtml valide, so replace it with "module_Zend_Optimizer"
echo str_replace(
    [', ', ','],
    ", ",
    preg_replace('%^.*<body>(.*)</body>.*$%ms', '$1', $pinfo)
);

?>
</div>
