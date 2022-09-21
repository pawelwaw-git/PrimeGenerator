# PrimeGenerator

The Class generates the prime numbers from 1 to n (variable $limitGeneration in Class)
https://en.wikipedia.org/wiki/Generation_of_primes
I use method the sieve of Eratosthenes algorithm
https://www.topcoder.com/thrive/articles/sieve-of-eratosthenes-algorithm

# Purpose of this class

My goal is to get feedback from more expirienst programmers, whether my code is good enough
or should i fix somehow.
I want to know whether others programmers can call it "good OOP code" or "clean code"
e.g whether code is descriptive enough.


# Installation

Use [composer](https://getcomposer.org) to install PrimeGenerator into your project:

```sh
composer require pawelwaw-git/primegenerator:dev-master
```

# Sample Usage

```php
// sample useage of code
use pawelwawApp\PrimeGenerator;

require_once __DIR__ ."/vendor/autoload.php";

//set max Prime Number
$limitNumber = 50;
$primeGenerator = new PrimeGenerator($limitNumber);
// print result on screen
print_r($primeGenerator->generatePrimes());

```