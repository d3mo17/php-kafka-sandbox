<?php
require_once '../_theme.php';
require_once '../../vendor/autoload.php';

use DMo\Kaftan\SchemaRegistryClient;

$registryClient = new SchemaRegistryClient('http://schema-registry:8081');
$name = 'connect-file-pulse-books-xml-value';
$schema_json = $registryClient->getSchemaByVersion($name)['schema'];
echo '<pre><code class="language.json">';
print_r($schema_json);
echo '</code></pre>';
