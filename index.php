<?php
class PrimeGenerator
{

    private int $limitGeneration;

    private array $primeList;
    private array $primeEliminationList = array();

    public function __construct(int $limitGeneration)
    {
        $this->limitGeneration = $limitGeneration;
    }
    public function generatePrimes()
    {
        $this->initializePrimelist();
        $this->findMultiplies();
        $this->eliminateMultiplies();
    }
    private function initializePrimelist()
    {
        for ($i = 1; $i <= $this->limitGeneration; $i++) {
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
    public function getPrimesArray(): array
    {
        return $this->primeList;
    }
}

// generate prime number from 1 to 80
$primeGenerator = new PrimeGenerator(80);
$primeGenerator->generatePrimes();
print_r($primeGenerator->getPrimesArray());
