<?php

namespace Jlam\ChronosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PropertyValue
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PropertyValue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="property", type="object")
     */
    private $property;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30)
     */
    private $name;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set property
     *
     * @param \stdClass $property
     * @return PropertyValue
     */
    public function setProperty($property)
    {
        $this->property = $property;
    
        return $this;
    }

    /**
     * Get property
     *
     * @return \stdClass 
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return PropertyValue
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
