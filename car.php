<?php
class Car

{
    /**
     * @var = string
     */
    private string $color;
    /**
     * @var = int
     */
    private int $nbWheels = 4;
    /**
     * @var = int
     */
    private int $nbSeats;
    /**
     * @var = int
     */
    private int $currentSpeed;
    /**
     * @var = string
     */
    private string $energy;
    /**
     * @var = int
     */
    private int $energyLevel;

    //---------Constructeur

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    //---------Méthodes

    public function start(): string
    {
        $this->currentSpeed = 0;
        return "Ready !";
    }

    public function forward(): string
    {
        $this->currentSpeed = 70;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed -= 10;
            $sentence .= "Brake !!! ";
        }
        $sentence .= "I'm stopped !";

        return $sentence;
    }

    //---------Getters / Setters

    /**
     * Get the value of color
     *
     * @return  = string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Get the value of nbWheels
     *
     * @return  = int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * Get the value of nbSeats
     *
     * @return  = int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * Get the value of currentSpeed
     *
     * @return  = int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
}
