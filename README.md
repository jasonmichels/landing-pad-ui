### Shipping Steam Landing Page

### Introduction
This UI microservice is under construction for ShippingSteam.com. Landing page of ShippingSteam.com

### Installation
```sh
$ cp build.properties.dist build.properties
$ // change build.properties file to have correct environment
$ composer install
$ vendor/bin/phing install
$ cp docker-compose.yml.dist docker-compose.yml
$ // edit docker compose file
$ docker-compose up -d
```

### Testing
```sh
$ docker run --volumes-from landingpadui_web_1 --link landingpadui_mysql_1:mysql --rm --name tester jasonmichels/php-apache-tester:7-apache ./vendor/bin/phing test
```
- Be Awesome!

### Language
 - PHP

License
----

Jason Michels private