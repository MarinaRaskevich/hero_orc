<?php

class Character
{
    //Exercice 1
    //Déclarations d'attributs
    protected int $health;
    protected int $rage;

    //Exercice 3
    /**
     *
     * @param integer $health | Répresente la vie du personnage
     * @param integer $rage | Répresente la rage du personnage
     */
    public function __construct(int $health, int $rage)
    {
        $this->health = $health;
        $this->rage = $rage;
    }

    //========== On peut supprimer protected int $health et protected int $rage et faire juste cette ligne:
    // public function __construct(protected int $health, protected int $rage)
    // {
    // }
    // ==========

    //Exercice 2
    //setters
    public function setHealth(int $health = 100): void
    {
        $this->health = $health;
    }

    public function setRage(int $rage = 0): void
    {
        $this->rage = $rage;
    }

    // getters
    public function getHealth(): int
    {
        return $this->health;
    }

    public function getRage(): int
    {
        return $this->rage;
    }
}
