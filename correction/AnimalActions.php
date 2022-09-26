<?php

interface AnimalActions {
    /**
     * Récupère le nom de l'animal
     *
     * @return string
     */
    public function getNom(): string;

    /**
     * Récupère l'âge de l'animal
     *
     * @return integer
     */
    public function getAge(): int;

    /**
     * Récupère l'ensemble des couleurs de l'animal
     *
     * @return array
     */
    public function getCouleurPelage(): string;

    /**
     * Récupère la race de l'animal
     *
     * @return string
     */
    public function getRace(): string;
}