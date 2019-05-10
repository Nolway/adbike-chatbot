<?php


class Bike
{
    private $id;
    private $bike_name;
    private $two_wheels_type;
    private $licence;
    private $cylinder;
    private $bike_type;
    private $biker_height;
    private $brand;
    private $budget;
    private $image_link;

    /**
     * Bike constructor.
     * @param $id
     * @param $bike_name
     * @param $two_wheels_type
     * @param $licence
     * @param $cylinder
     * @param $bike_type
     * @param $biker_height
     * @param $brand
     * @param $budget
     */
    public function __construct($id, $bike_name, $two_wheels_type, $licence, $cylinder, $bike_type, $biker_height, $brand, $budget)
    {
        $this->id = $id;
        $this->bike_name = $bike_name;
        $this->two_wheels_type = $two_wheels_type;
        $this->licence = $licence;
        $this->cylinder = $cylinder;
        $this->bike_type = $bike_type;
        $this->biker_height = $biker_height;
        $this->brand = $brand;
        $this->budget = $budget;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getBikeName()
    {
        return $this->bike_name;
    }

    /**
     * @return mixed
     */
    public function getTwoWheelsType()
    {
        return $this->two_wheels_type;
    }

    /**
     * @return mixed
     */
    public function getLicence()
    {
        return $this->licence;
    }

    /**
     * @return mixed
     */
    public function getCylinder()
    {
        return $this->cylinder;
    }

    /**
     * @return mixed
     */
    public function getBikeType()
    {
        return $this->bike_type;
    }

    /**
     * @return mixed
     */
    public function getBikerHeight()
    {
        return $this->biker_height;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @return mixed
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @return mixed
     */
    public function getImageLink()
    {
        return $this->image_link;
    }

}
