<?php

abstract class Mammifere implements AnimalActions, Skills {

    public function __construct(
        protected string $nom,
        protected int $age,
        protected array $couleurPelage,
        protected string $race
    ){}

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getCouleurPelage(): string
    {
        $couleurs = "";
        foreach ($this->couleurPelage as $value) {
            $couleurs .= $value . ", ";
        }
        return substr($couleurs, 0, -2);
    }

    public function getRace(): string
    {
        return $this->race;
    }

    public abstract function getCri(): string;
}