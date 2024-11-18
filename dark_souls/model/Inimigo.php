<?php

class Inimigo{
    private $for;
    private $dex;
    private $con;
    private $sab;
    private $int;
    private $car;
    private $vida_max;
    private $vida;
    private $CA;


    public function __construct(
        $for = 10,
        $dex = 10,
        $con = 10,
        $sab = 10,
        $int = 10,
        $car = 10,
        $vida_max = 20,
        $CA = 15
    ) {
        $this->for = $for;
        $this->dex = $dex;
        $this->con = $con;
        $this->sab = $sab;
        $this->int = $int;
        $this->car = $car;

        $this->vida_max = $vida_max;
        $this->vida = $vida_max; // Vida inicial é igual à vida máxima.
        $this->CA = $CA;
    }


    

    /**
     * Get the value of for
     */
    public function getFor()
    {
        return $this->for;
    }

    /**
     * Set the value of for
     */
    public function setFor($for): self
    {
        $this->for = $for;

        return $this;
    }

    /**
     * Get the value of dex
     */
    public function getDex()
    {
        return $this->dex;
    }

    /**
     * Set the value of dex
     */
    public function setDex($dex): self
    {
        $this->dex = $dex;

        return $this;
    }

    /**
     * Get the value of con
     */
    public function getCon()
    {
        return $this->con;
    }

    /**
     * Set the value of con
     */
    public function setCon($con): self
    {
        $this->con = $con;

        return $this;
    }

    /**
     * Get the value of sab
     */
    public function getSab()
    {
        return $this->sab;
    }

    /**
     * Set the value of sab
     */
    public function setSab($sab): self
    {
        $this->sab = $sab;

        return $this;
    }

    /**
     * Get the value of int
     */
    public function getInt()
    {
        return $this->int;
    }

    /**
     * Set the value of int
     */
    public function setInt($int): self
    {
        $this->int = $int;

        return $this;
    }

    /**
     * Get the value of car
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Set the value of car
     */
    public function setCar($car): self
    {
        $this->car = $car;

        return $this;
    }

    /**
     * Get the value of vida_max
     */
    public function getVidaMax()
    {
        return $this->vida_max;
    }

    /**
     * Set the value of vida_max
     */
    public function setVidaMax($vida_max): self
    {
        $this->vida_max = $vida_max;

        return $this;
    }

    /**
     * Get the value of vida
     */
    public function getVida()
    {
        return $this->vida;
    }

    /**
     * Set the value of vida
     */
    public function setVida($vida): self
    {
        $this->vida = $vida;

        return $this;
    }

    /**
     * Get the value of CA
     */
    public function getCA()
    {
        return $this->CA;
    }

    /**
     * Set the value of CA
     */
    public function setCA($CA): self
    {
        $this->CA = $CA;

        return $this;
    }
}