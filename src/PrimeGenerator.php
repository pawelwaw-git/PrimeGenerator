<?php

namespace App;

class PrimeGenerator
{
    private int $limitGeneration;

    private array $primeList;
    private array $primeEliminationList = array();

    public function __construct(int $limitGeneration)
    {
        $this->limitGeneration = $limitGeneration;
    }
    public function generatePrimes():array
    {
        $this->initializePrimelist();
        $this->findMultiplies();
        $this->eliminateMultiplies();
        return $this->primeList;
    }
    private function initializePrimelist()
    {
        for ($i = 2; $i <= $this->limitGeneration; $i++) {
            $this->primeList[$i] = $i;
        }
    }
    private function findMultiplies()
    {
        for ($i = 2; $i <= round(sqrt($this->limitGeneration),0); $i++) {
            $this->primeEliminationList[$i] = $i;
        }
    }
    private function eliminateMultiplies()
    {
        foreach ($this->primeEliminationList as $number) {
            $primeEliminationCandidate = $number;
            do {
                $primeEliminationCandidate += $number;
                $this->removeFromPrimes($primeEliminationCandidate);
            } while ($primeEliminationCandidate < $this->limitGeneration);
        }
    }

    private function removeFromPrimes(int $primeEliminationCandidate){
        unset($this->primeList[$primeEliminationCandidate]);
    }
}
