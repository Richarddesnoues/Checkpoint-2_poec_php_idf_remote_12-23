<?php

namespace App\Model;

class CupcakeModel
{
    private int $id;
    private $name;
    private $color1;
    private $color2;
    private $color3;
    private int $accessoryId;
    private $createdAt;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of color1
     */
    public function getColor1()
    {
        return $this->color1;
    }

    /**
     * Set the value of color1
     *
     * @return  self
     */
    public function setColor1($color1)
    {
        $this->color1 = $color1;

        return $this;
    }

    /**
     * Get the value of color2
     */
    public function getColor2()
    {
        return $this->color2;
    }

    /**
     * Set the value of color2
     *
     * @return  self
     */
    public function setColor2($color2)
    {
        $this->color2 = $color2;

        return $this;
    }

    /**
     * Get the value of color3
     */
    public function getColor3()
    {
        return $this->color3;
    }

    /**
     * Set the value of color3
     *
     * @return  self
     */
    public function setColor3($color3)
    {
        $this->color3 = $color3;

        return $this;
    }

    /**
     * Get the value of accessory_id
     */
    public function getAccessoryId()
    {
        return $this->accessoryId;
    }

    /**
     * Set the value of accessory_id
     *
     * @return  self
     */
    public function setAccessoryId($accessoryId)
    {
        $this->accessoryId = $accessoryId;

        return $this;
    }

    /**
     * Get the value of created_at
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
