<?php

namespace Jlam\ChronosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimeEntry
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class TimeEntry
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
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetimetz")
     */
    private $timestamp;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="user", type="object")
     */
    private $user;

    /**
     * @var integer
     *
     * @ORM\Column(name="minutes", type="integer")
     */
    private $minutes;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="unbookedMinutesRemaining", type="integer")
     */
    private $unbookedMinutesRemaining;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mostRecentReset", type="boolean")
     */
    private $mostRecentReset;


    
    
    public static function getLatestZeroUnbookedTimestamp() {
    	
    }
    
    
    public static function getUnbookedMinutes() {
    	
    }
    
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
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return TimeEntry
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    
        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set user
     *
     * @param \stdClass $user
     * @return TimeEntry
     */
    public function setUser($user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \stdClass 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set minutes
     *
     * @param integer $minutes
     * @return TimeEntry
     */
    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;
    
        return $this;
    }

    /**
     * Get minutes
     *
     * @return integer 
     */
    public function getMinutes()
    {
        return $this->minutes;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return TimeEntry
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set unbookedMinutesRemaining
     *
     * @param integer $unbookedMinutesRemaining
     * @return TimeEntry
     */
    public function setUnbookedMinutesRemaining($unbookedMinutesRemaining)
    {
        $this->unbookedMinutesRemaining = $unbookedMinutesRemaining;
    
        return $this;
    }

    /**
     * Get unbookedMinutesRemaining
     *
     * @return integer 
     */
    public function getUnbookedMinutesRemaining()
    {
        return $this->unbookedMinutesRemaining;
    }

    /**
     * Set mostRecentReset
     *
     * @param boolean $mostRecentReset
     * @return TimeEntry
     */
    public function setMostRecentReset($mostRecentReset)
    {
        $this->mostRecentReset = $mostRecentReset;
    
        return $this;
    }

    /**
     * Get mostRecentReset
     *
     * @return boolean 
     */
    public function getMostRecentReset()
    {
        return $this->mostRecentReset;
    }
}
