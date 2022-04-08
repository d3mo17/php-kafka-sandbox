## Use of schema registry

#### getSubjects()
```php
use DMo\Kaftan\SchemaRegistryClient;

$registryClient = new SchemaRegistryClient('http://schema-registry:8081');
print_r($registryClient->getSubjects());
```
-> [Live demo script to get subjects](getSubjects.php)

\
&nbsp;

#### getSchemaByVersion($subjectName, [$version = LATEST])
```php
use DMo\Kaftan\SchemaRegistryClient;

$registryClient = new SchemaRegistryClient('http://schema-registry:8081');
$name = 'connect-file-pulse-books-xml-value';
$schema_json = $registryClient->getSchemaByVersion($name)['schema'];
print_r($schema_json);
```
-> [Live demo script to get schema "connect-file-pulse-books-xml-value"](getSchemaByVersion.php)
