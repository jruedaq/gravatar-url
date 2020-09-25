# GravatarUrl
This is a method for the get gravatar image most easily and, this library have a
feature, if in gravatar no exists an image for user email returns default image with 
username initials.

You can test example in this link (https://gravatar-url.herokuapp.com/examples/LibraryUse.php).

## Preview
![Preview](https://i.ibb.co/QQHFVpw/2020-09-25-14-54.png)

## Installation
```shell script
$ composer require jruedaq/gravatr-url
```

## Basic use
In your php file call `autoload.php`
```php
require 'vendor/autoload.php';
```

getting a url image
```php
$imageUrl = GetGravatar::getUrl(SessionData::get()->getFirstName(), SessionData::get()->getEmail(), 230);
```

Complete example
```php
<?php
require 'vendor/autoload.php';

use jruedaq\GravatarUrl\GetGravatar;

$imageUrl = GetGravatar::getUrl("Juan David Rueda Quiroga", "jrueda@oneago.com", 230);
?>
<img src="<?php echo $imageUrl; ?>" alt="profile image">
```
