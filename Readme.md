The Class generates the prime numbers from 1 to n (variable $limitGeneration in Class)
https://en.wikipedia.org/wiki/Generation_of_primes
I use method the sieve of Eratosthenes algorithm
https://www.topcoder.com/thrive/articles/sieve-of-eratosthenes-algorithm

My goal is to get feedback from more expirienst programmers, whether my code is good enough
or should i fix somehow.
I want to know whether others programmers can call it "good OOP code" or "clean code"
e.g whether code is desriptive enough.

In order to install you use 
composer require pawelwaw-git/prime-generator:dev-master

sample usage 

<?php

use App\PrimeGenerator;

require_once __DIR__ ."/vendor/autoload.php";

$primeGenerator = new PrimeGenerator($limitNumer);
$primesNumbers = $primeGenerator->generatePrimes();

?>
