<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\PrimeGenerator;



final class PrimeGeneratorTest extends TestCase
{

    /**
     * @dataProvider getRandomNumbersArray
     */

    public function test30RandomCaseToLimit1000($number): void
    {
        // generate prime number from 1 to 80

        $primeGenerator = new PrimeGenerator($number);
        $expected = $primeGenerator->generatePrimes();
        $actual = $this->getPrimeNumbersToN($number);
        $this->assertSame($expected, $actual);
    }

    private function getPrimeNumbersToN(int $number): array
    {
        if ($number > 1000) throw new ToBigValueToTestException('Cant have prime value greater than 1000');
        $primes = $this->getPrimeNumberTo1000();
        return array_filter($primes, function ($prime) use ($number) {
            return $prime <= $number;
        });
    }

    private function getRandomNumbersArray()
    {
        $randomNumbers = [];
        for ($i = 0; $i < 30; $i++) {
            $randomNumbers[] = array(rand(2, 1000));
        }
        return $randomNumbers;
    }

    private function getPrimeNumberTo1000()
    {
        $primeNumbers = array(
            2 => 2,
            3 => 3,
            5 => 5,
            7 => 7,
            11 => 11,
            13 => 13,
            17 => 17,
            19 => 19,
            23 => 23,
            29 => 29,
            31 => 31,
            37 => 37,
            41 => 41,
            43 => 43,
            47 => 47,
            53 => 53,
            59 => 59,
            61 => 61,
            67 => 67,
            71 => 71,
            73 => 73,
            79 => 79,
            83 => 83,
            89 => 89,
            97 => 97,
            101 => 101,
            103 => 103,
            107 => 107,
            109 => 109,
            113 => 113,
            127 => 127,
            131 => 131,
            137 => 137,
            139 => 139,
            149 => 149,
            151 => 151,
            157 => 157,
            163 => 163,
            167 => 167,
            173 => 173,
            179 => 179,
            181 => 181,
            191 => 191,
            193 => 193,
            197 => 197,
            199 => 199,
            211 => 211,
            223 => 223,
            227 => 227,
            229 => 229,
            233 => 233,
            239 => 239,
            241 => 241,
            251 => 251,
            257 => 257,
            263 => 263,
            269 => 269,
            271 => 271,
            277 => 277,
            281 => 281,
            283 => 283,
            293 => 293,
            307 => 307,
            311 => 311,
            313 => 313,
            317 => 317,
            331 => 331,
            337 => 337,
            347 => 347,
            349 => 349,
            353 => 353,
            359 => 359,
            367 => 367,
            373 => 373,
            379 => 379,
            383 => 383,
            389 => 389,
            397 => 397,
            401 => 401,
            409 => 409,
            419 => 419,
            421 => 421,
            431 => 431,
            433 => 433,
            439 => 439,
            443 => 443,
            449 => 449,
            457 => 457,
            461 => 461,
            463 => 463,
            467 => 467,
            479 => 479,
            487 => 487,
            491 => 491,
            499 => 499,
            503 => 503,
            509 => 509,
            521 => 521,
            523 => 523,
            541 => 541,
            547 => 547,
            557 => 557,
            563 => 563,
            569 => 569,
            571 => 571,
            577 => 577,
            587 => 587,
            593 => 593,
            599 => 599,
            601 => 601,
            607 => 607,
            613 => 613,
            617 => 617,
            619 => 619,
            631 => 631,
            641 => 641,
            643 => 643,
            647 => 647,
            653 => 653,
            659 => 659,
            661 => 661,
            673 => 673,
            677 => 677,
            683 => 683,
            691 => 691,
            701 => 701,
            709 => 709,
            719 => 719,
            727 => 727,
            733 => 733,
            739 => 739,
            743 => 743,
            751 => 751,
            757 => 757,
            761 => 761,
            769 => 769,
            773 => 773,
            787 => 787,
            797 => 797,
            809 => 809,
            811 => 811,
            821 => 821,
            823 => 823,
            827 => 827,
            829 => 829,
            839 => 839,
            853 => 853,
            857 => 857,
            859 => 859,
            863 => 863,
            877 => 877,
            881 => 881,
            883 => 883,
            887 => 887,
            907 => 907,
            911 => 911,
            919 => 919,
            929 => 929,
            937 => 937,
            941 => 941,
            947 => 947,
            953 => 953,
            967 => 967,
            971 => 971,
            977 => 977,
            983 => 983,
            991 => 991,
            997 => 997,
        );
        return $primeNumbers;
    }
}

class ToBigValueToTestException extends Exception
{
}
