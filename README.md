# Ahosti-Whmcs-Api
Fully compliant with Ahosti Domain Register and Transfer standards! 100% IDN Support and valid for all gTLD's, ccTLD's and NEW gTLD's

# Ahosti Whmcs API #

Ahosti is a domain registrar/hosting platform. This API is a wrapper for the [Ahosti web API](http://manage.ahosti.com/kb/answer/744), each command is mapped one-to-one with a Class and Method. For example, [registering a domain](http://manage.ahosti.com/kb/answer/752) requires the domains/register.json API command, which is executed via Ahosti Domains::register().

The Ahosti platform is used by many different resellers, all of which are fully compatible with this integration. These include, but are not limited to:

- [Ahosti](http://manage.ahosti.com/kb/answer/744)


## Requirements ##

* PHP 5.1.3 / 6.X / 7.X or greater

### Using the API ###

```php
<?php
require_once "ahosti_api.php";

$user = "YOUR_USER_ID";
$key = "YOUR_API_KEY";
$sandbox = true; // true for testing, false for live

$api = new AhostiApi($user, $key, $sandbox);

// Create a new instance of the command class we want to use
$api->loadCommand("ahosti_domains");
$domains = new AhostiDomains($api);

$vars = array('domain-name' => array("mydomain"), 'tlds' => array("com"));

print_r($domains->available($vars)->response());
?>
```

- [The official website of the company Ahosti Web Services](http://ahosti.com/)
- [The CEO's website : Lahbabi Zakariae ](http://lahbabiceo.com)




