# PHP Kafka Sandbox

Aims to provide a painless starting point and playground to Kafka for php-developers
with help of docker-compose.

Installs following components:

 * Nginx Webserver
 * PHP-FPM
 * Apache Kafka (and Zookeeper)
 * Apache Kafka Web-UI
 * Karapace schema registry
 * Karapace REST-API
 * FilePulse Kafka Connector

\
&nbsp;

## Bring Up

Install all needs to run `docker-compose` ... Then use command
```
docker-compose up -d
```
in directory with file "docker-compose.yml"

## Use It

Proceed to look at http://localhost for your fresh local webserver!

\
&nbsp;

## License

The MIT License (MIT)

Copyright (c) 2022 Daniel Moritz

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.