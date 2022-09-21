# PrimeGenerator

The Class generates the prime numbers from 1 to n (variable $limitGeneration in Class)
https://en.wikipedia.org/wiki/Generation_of_primes
I use method the sieve of Eratosthenes algorithm
https://www.topcoder.com/thrive/articles/sieve-of-eratosthenes-algorithm

# Purpose of this class

My goal is to get feedback from more expirienst programmers, whether my code is good enough
or should i fix somehow.
I want to know whether others programmers can call it "good OOP code" or "clean code"
e.g whether code is desriptive enough.


# Installation

Use [composer](https://getcomposer.org) to install PhpSpreadsheet into your project:

```sh
composer require pawelwaw-git/prime-generator:dev-master
```

If you are building your installation on a development machine that is on a different PHP version to the server where it will be deployed, or if your PHP CLI version is not the same as your run-time such as `php-fpm` or Apache's `mod_php`, then you might want to add the following to your `composer.json` before installing:
```json
{
    "require": {
        "pawelwaw-git/prime-generator:dev-master": "^1.0"
    },
    "config": {
        "platform": {
            "php": "^7.4"
        }
    }
}
```
and then run
```sh
composer install
```
# Sample Usage

```php
// sample useage of code
use pawelwawApp\PrimeGenerator;

require_once __DIR__ ."/vendor/autoload.php";

$primeGenerator = new PrimeGenerator($limitNumer);
$primesNumbers = $primeGenerator->generatePrimes();

```