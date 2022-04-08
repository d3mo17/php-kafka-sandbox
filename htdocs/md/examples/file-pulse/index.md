## Produce messages from XML with FilePulse

> Note, that directory "connect-data" (in root of this project) is mounted to
> directory "/tmp/kafka-connect" of container where kafka connect is running.

Use [Kafka UI](http://localhost:8080/ui/clusters/local/connectors) to create new connectors.

### Example configuration

```json
{
	"connector.class": "io.streamthoughts.kafka.connect.filepulse.source.FilePulseSourceConnector",
	"fs.listing.filters": "io.streamthoughts.kafka.connect.filepulse.fs.filter.RegexFileListFilter",
	"fs.listing.class": "io.streamthoughts.kafka.connect.filepulse.fs.LocalFSDirectoryListing",
	"tasks.max": "1",
	"tasks.file.status.storage.topic": "connect-file-pulse-status",
	"tasks.reader.class": "io.streamthoughts.kafka.connect.filepulse.fs.reader.LocalXMLFileInputReader",
	"fs.listing.directory.path": "/tmp/kafka-connect/file-pulse-xml-example/",
	"reader.xml.parser.namespace.aware.enabled": "false",
	"tasks.file.status.storage.bootstrap.servers": "broker:29092",
	"tasks.file.status.storage.topic.partitions": "10",
	"fs.cleanup.policy.class": "io.streamthoughts.kafka.connect.filepulse.fs.clean.DeleteCleanupPolicy",
	"tasks.file.status.storage.topic.replication.factor": "1",
	"reader.xpath.expression": "/bookstore/book",
	"topic": "connect-file-pulse-books-xml",
	"fs.listing.interval.ms": "5000",
	"file.filter.regex.pattern": ".*\\.(xml|XML)",
	"tasks.file.status.storage.class": "io.streamthoughts.kafka.connect.filepulse.state.KafkaFileObjectStateBackingStore"
}
```

> You can find some data example-files in directory "example-data".

If you use the example configuration above, you can also use file "bookstore.xml"
from the example data in relation and move it to directory "connect-data/file-pulse-xml-example".

After a few seconds you should find a new topic "connect-file-pulse-books-xml" with book-messages
in it (Inspect with [Kafka UI](http://localhost:8080/ui/clusters/local/topics)).

The messages be there in format Avro. The schema was written to the
[registry](http://localhost:8080/ui/clusters/local/schemas/connect-file-pulse-books-xml-value)