<?php
require_once "Hello.php";
/**
 * On créé une classe.
 * Un classe contient des propriétés et des méthodes
 * Chaque élément d'une class a une visibilité ou une portée
 * public: L'élément est accessible de partout
 * private: L'élément n'est accessible que dans la class où il est déclaré
 * protected: L'élément n'est accessible que dans la class où il est est déclaré et dans les class enfants
 */
abstract class MaClasse implements Hello{

    /**
     * @var array
     */
    public array $prop1;

    /**
     * @var string
     */
    private string $prop2 = "Hello";

    /**
     * @var string
     */
    protected string $prop3 = "Bye";

    public function __construct(array $value)
    {
        $this->prop1 = $value;
    }

    /**
     * Retourne la valeur de prop2
     *
     * @return string
     */
    private function sayHello (): string
    {
        return $this->prop2;
    }

    public abstract function sayHelloYou(): string;

    /**
     * Retourne la phrase Hello World
     *
     * @return string
     */
    public function sayHelloWorld (): string
    {
        return $this->sayHello() . " World!";
    }

    /**
     * Retourne Hello + Nom de la personne
     *
     * @param string $name
     * @return string
     */
    public function sayHelloDude (string $name): string
    {
        return $this->sayHello() . " " . $name;
    }
}