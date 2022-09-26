<?php

/**
 * YoungClass est une classe enfant de MaClasse.
 * Elle peut utiliser les propriétés et méthodes de son parent.
 * On parle d'héritage.
 * Pour mettre en place l'héritage, on "extends" la class parent
 */
class YoungClass extends MaClasse {

    // On déclare une constante avec le mot-clé const
    // Une constante a également une visibilité
    public const CONSTANTE = "World!";

    // Une propriété static est une propriété qui appartient à la class
    // On peut l'utiliser sans avoir à créer d'objet.
    public static $property1 = "Static Hello";

    public function __construct(int $int, array $value)
    {
        parent::__construct($value);
    }

    public static function staticHello ():string
    {
        return self::$property1;
    }

    public function sayHelloYou(): string
    {
        return '';
    }

    public function byeWorld(): string
    {
        // J'utilise la constante de la class grâce à
        // self qui fait référence à cette class
        // :: qui est l'opérateur de résolution de portée
        return $this->prop3 . ' ' . self::CONSTANTE;
    }
    /**
     * @return string
     */
    public function sayBye (): string
    {
        return $this->prop3;
    }
}