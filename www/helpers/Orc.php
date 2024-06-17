<?php
// require_once 'Character.php';

class Orc extends Character
{
    private int $damage;

    //Exercice 11
    public function __construct(int $health, int $rage)
    {
        parent::__construct($health, $rage);
    }

    public function __toString()
    {
        return '<p>Niveau de santé: ' . $this->health . '</p></p>Niveau de rage: ' . $this->rage . '</p>';
    }

    //Exercice 10
    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    // Exercice 12
    public function attack(): int
    {
        return $this->damage = rand(600, 800);
    }

    //Exercice 15
    public function attacked($damage): void
    {
        $this->health = $this->health - $damage;
        if ($this->health < 0) {
            $this->health = 0;
        }
        $this->rage = $this->rage + 30;
    }
}
