<?php

/**
 * Represents an individual horoscope
 */
class Horoscope
{
    /**
     * @var string
     */
    private string $name;
    /**
     * @var string
     */
    private string $description;
    /**
     * @var string
     */
    private string $image;
    /**
     * @var string
     */
    private string $startDate;
    /**
     * @var string
     */
    private string $endDate;

    /**
     * Create a new Horoscope object
     *
     * @param string $name
     * @param string $description
     * @param string $image
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct(string $name, string $description, string $image, string $startDate, string $endDate) {
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     *
     * @return  string
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param  string  $description
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of image
     *
     * @return  string
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @param  string  $image
     *
     * @return  self
     */ 
    public function setImage(string $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of startDate
     *
     * @return  string
     */ 
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set the value of startDate
     *
     * @param  string  $startDate
     *
     * @return  self
     */ 
    public function setStartDate(string $startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get the value of endDate
     *
     * @return  string
     */ 
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set the value of endDate
     *
     * @param  string  $endDate
     *
     * @return  self
     */ 
    public function setEndDate(string $endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }
}
