Shipping Steam

### Introduction
This UI microservice is under construction for ShippingSteam.com

### Installation
```sh
$ cp build.properties.dist build.properties
$ // change build.properties file to have correct environment
$ vendor/bin/phing install
```

### Testing
```sh
$ docker run --volumes-from shippingsteamui_web_1 --link shippingsteamui_mysql_1:mysql --rm --name tester jasonmichels/php-apache-tester:7-apache ./vendor/bin/phing test
```
- Be Awesome!

### Language
 - PHP

License
----

Jason Michels private
