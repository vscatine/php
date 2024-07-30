<?php
class Human {
    public const EYES = 2;
    public const NOSE = 1;
    public const LEFT_FINGERS = 5;

    function getEyes() {
        return self::EYES;
    }

    function getNose() {
        return self::NOSE;
    }

    function getLeftFingers() {
        return self::LEFT_FINGERS;
    }
}

$vitor = new Human;
echo $vitor::EYES . "<br>";
echo $vitor->getNose() . "<br>";
echo $vitor->getLeftFingers();

