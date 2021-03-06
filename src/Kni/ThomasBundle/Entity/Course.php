<?php

namespace Kni\ThomasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table(name="courses")
 * @ORM\Entity
 */
class Course
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=150)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date")
     */
    private $endDate;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="courses")
     */
    protected $user;
    
    /**
     * @ORM\OneToMany(targetEntity="Workshop", mappedBy="course")
     */
    protected $workshops;

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
     * Set name
     *
     * @param string $name
     * @return Course
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

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return Course
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    
        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return Course
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Course
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
     * Constructor
     */
    public function __construct()
    {
        $this->workshops = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set user
     *
     * @param \Kni\ThomasBundle\Entity\User $user
     * @return Course
     */
    public function setUser(\Kni\ThomasBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Kni\ThomasBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add workshops
     *
     * @param \Kni\ThomasBundle\Entity\Workshop $workshops
     * @return Course
     */
    public function addWorkshop(\Kni\ThomasBundle\Entity\Workshop $workshops)
    {
        $this->workshops[] = $workshops;
    
        return $this;
    }

    /**
     * Remove workshops
     *
     * @param \Kni\ThomasBundle\Entity\Workshop $workshops
     */
    public function removeWorkshop(\Kni\ThomasBundle\Entity\Workshop $workshops)
    {
        $this->workshops->removeElement($workshops);
    }

    /**
     * Get workshops
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getWorkshops()
    {
        return $this->workshops;
    }
}