<?php
class Bicycle

{

    /**
     * @var = string
     */
    public $color;

    /**
     * @var = integer
     */
    public $currentSpeed;
    /**
     * @var = integer
     */
    public $nbSeats;
    /**
     * @var = integer
     */
    public $nbWheels;

    //---------Constructeur

    public function __construct(string $color)
    {
        $this->color = $color;
    }


    //------------Méthodes

    public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!! ";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function dump()
    {
        var_dump($this);
    }

    //-------------Getters / Setters

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
}
