<?php
require_once '../_theme.php';
require_once '../../vendor/autoload.php';

use \DMo\Kaftan\SchemaRegistryClient;

$registryClient = new SchemaRegistryClient('http://schema-registry:8081');

echo '<pre><code class="language.json">';
print_r($registryClient->getSubjects());
echo '</code></pre>';
