<?php

namespace Kni\ThomasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Workshop
 *
 * @ORM\Table(name="workshops")
 * @ORM\Entity
 */
class Workshop
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
     * @ORM\Column(name="name", type="string", length=45)
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
     * @ORM\ManyToOne(targetEntity="Course", inversedBy="workshops")
     */
    protected $course;
    
    /**
     * @ORM\OneToMany(targetEntity="Step", mappedBy="workshop");
     */
    protected $steps;
    
    /**
     * @ORM\OneToOne(targetEntity="Blackboard", mappedBy="workshop")
     */
    private $blackboard;
    
    /**
     * @ORM\ManyToMany(targetEntity="User", inversedBy="workshops")
     */
    private $users;

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
     * @return Workshop
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
     * @return Workshop
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
     * @return Workshop
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
     * @return Workshop
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
        $this->steps = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set course
     *
     * @param \Kni\ThomasBundle\Entity\Course $course
     * @return Workshop
     */
    public function setCourse(\Kni\ThomasBundle\Entity\Course $course = null)
    {
        $this->course = $course;
    
        return $this;
    }

    /**
     * Get course
     *
     * @return \Kni\ThomasBundle\Entity\Course 
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Add steps
     *
     * @param \Kni\ThomasBundle\Entity\Step $steps
     * @return Workshop
     */
    public function addStep(\Kni\ThomasBundle\Entity\Step $steps)
    {
        $this->steps[] = $steps;
    
        return $this;
    }

    /**
     * Remove steps
     *
     * @param \Kni\ThomasBundle\Entity\Step $steps
     */
    public function removeStep(\Kni\ThomasBundle\Entity\Step $steps)
    {
        $this->steps->removeElement($steps);
    }

    /**
     * Get steps
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSteps()
    {
        return $this->steps;
    }

    /**
     * Set blackboard
     *
     * @param \Kni\ThomasBundle\Entity\Blackboard $blackboard
     * @return Workshop
     */
    public function setBlackboard(\Kni\ThomasBundle\Entity\Blackboard $blackboard = null)
    {
        $this->blackboard = $blackboard;
    
        return $this;
    }

    /**
     * Get blackboard
     *
     * @return \Kni\ThomasBundle\Entity\Blackboard 
     */
    public function getBlackboard()
    {
        return $this->blackboard;
    }

    /**
     * Add users
     *
     * @param \Kni\ThomasBundle\Entity\User $users
     * @return Workshop
     */
    public function addUser(\Kni\ThomasBundle\Entity\User $users)
    {
        $this->users[] = $users;
    
        return $this;
    }

    /**
     * Remove users
     *
     * @param \Kni\ThomasBundle\Entity\User $users
     */
    public function removeUser(\Kni\ThomasBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}