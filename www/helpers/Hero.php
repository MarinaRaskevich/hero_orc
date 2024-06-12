<?php
require_once 'Character.php';

class Hero extends Character
{
    private string $weapon; //le nom de l'arme équipée
    private int $weaponDamage; //les dégâts basiques de l'arme
    private string $shield; //le nom de l'armure équipée
    private int $shieldValue; //le nombre de dégâts que l'armure encaisse à la place du héros

    //Exercice 6
    public function __construct(int $health, int $rage, string $weapon, int $weaponDamage, string $shield, int $shieldValue)
    {
        parent::__construct($health, $rage);
        $this->weapon = $weapon;
        $this->weaponDamage = $weaponDamage;
        $this->shield = $shield;
        $this->shieldValue = $shieldValue;
    }

    public function __toString()
    {
        return '<p>Niveau de santé: ' . $this->health . '</p><p>Niveau de rage: ' . $this->rage . '</p><p>Le nom de l\'arme équipée: ' . $this->weapon . '</p><p>Les dégâts basiques de l\'arme: ' . $this->weaponDamage . '</p><p>Le nom de l\'armure équipée: ' . $this->shield . '</p><p>Le nombre de dégâts que l\'armure encaisse à la place du héros: ' . $this->shieldValue . '</p>';
    }

    //Exercice 5
    // setters
    public function setWeapon(string $weapon): void
    {
        $this->weapon = $weapon;
    }

    public function setWeaponDamage(int $weaponDamage): void
    {
        $this->weaponDamage = $weaponDamage;
    }

    public function setShield(int $shield): void
    {
        $this->shield = $shield;
    }

    public function setShieldValue(int $shieldValue): void
    {
        $this->shieldValue = $shieldValue;
    }


    // getters
    public function getWeapon(): string
    {
        return $this->weapon;
    }

    public function getWeaponDamage(): int
    {
        return $this->weaponDamage;
    }

    public function getShield(): string
    {
        return $this->shield;
    }

    public function getShieldValue(): int
    {
        return $this->shieldValue;
    }


    // Exercice 7
    public function attacked($damage)
    {
        $trueDamage = $damage - $this->shieldValue;
        $this->health = $this->health - $trueDamage;
        if ($this->health < 0) {
            $this->health = 0;
        }

        // Exercice 8
        $this->rage = $this->rage + 30;
        //Réduction de la capacité de l'armure après chaque attaque (1/10 des dégâts de l'orc).
        $this->shieldValue = $this->shieldValue - round($damage / 10);
    }
}
