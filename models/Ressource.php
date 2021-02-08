<?php

/**
 * Represents an individual ressource
 */ 
class Ressource
{
    /**
     * Hyperlink to the resource
     * @var string
     */
    private string $src;
    /**
     * Description to be displayed as hyperlinks
     * @var string
     */
    private string $description;

    /**
     * Create a new Resource object
     *
     * @param string $src Hyperlink to the resource
     * @param string $description Description to be displayed as hyperlinks
     */
    public function __construct(string $src, string $description)
    {
        $this->src = $src;
        $this->description = $description;
    }


    /**
     * Get hyperlink to the resource
     *
     * @return  string
     */ 
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * Set hyperlink to the resource
     *
     * @param  string  $src  Hyperlink to the resource
     *
     * @return  self
     */ 
    public function setSrc(string $src)
    {
        $this->src = $src;

        return $this;
    }

    /**
     * Get description to be displayed as hyperlinks
     *
     * @return  string
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description to be displayed as hyperlinks
     *
     * @param  string  $description  Description to be displayed as hyperlinks
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }
}
