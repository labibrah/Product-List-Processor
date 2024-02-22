<?php

namespace Labibrahman\ProductsProcessor;

class Product
{
    private $make;
    private $model;
    private $colour;
    private $capacity;
    private $network;
    private $grade;
    private $condition;

    public function __construct($make, $model, $condition, $grade, $capacity, $colour, $network)
    {
        //'make' and 'model' fields are required (throw expception if they are empty)
        $this->make = $make;
        $this->model = $model;
        $this->condition = $condition;
        $this->grade = $grade;
        $this->colour = $colour;
        $this->capacity = $capacity;
        $this->network = $network;
    }

    // Getters and setters for each property

    /**
     * Get the value of make
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * Set the value of make
     *
     * @return  self
     */
    public function setMake($make)
    {
        $this->make = $make;

        return $this;
    }

    /**
     * Get the value of model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get the value of colour
     */
    public function getColour()
    {
        return $this->colour;
    }

    /**
     * Set the value of colour
     *
     * @return  self
     */
    public function setColour($colour)
    {
        $this->colour = $colour;

        return $this;
    }

    /**
     * Get the value of capacity
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set the value of capacity
     *
     * @return  self
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get the value of network
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * Set the value of network
     *
     * @return  self
     */
    public function setNetwork($network)
    {
        $this->network = $network;

        return $this;
    }

    /**
     * Get the value of grade
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set the value of grade
     *
     * @return  self
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get the value of condition
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Set the value of condition
     *
     * @return  self
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;

        return $this;
    }
}

