<?php

// src/UserBundle/Entity/User.php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use JMS\Serializer\Annotation as JMS;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 * @ORM\Table(name="nl_user")
 * @ORM\DiscriminatorColumn(name="disc",type="string")
 * @ORM\DiscriminatorMap({ "user" = "User"})
 * @ORM\HasLifecycleCallbacks
 * @ORM\MappedSuperclass
 * @JMS\ExclusionPolicy("all")
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
     /**
     * Many Users have Many events.
     * @ORM\ManyToMany(targetEntity="Events", inversedBy="users")
     * @ORM\JoinTable(name="users_events")
     */
    private $events;

    public function __construct() {
        parent::__construct();
        $this->roles = array('ROLE_USER');
        $this->events = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * exposed
     * firstname
     * @Assert\NotBlank(message = "Le champs prénom doit être fourni.")
     * @ORM\Column(name="firstname",type="string",nullable = true)
     * @JMS\Accessor(getter="getFirstname")
     * @JMS\Expose
     *
     */
    protected $firstname;

    /**
     * exposed
     * @Assert\NotBlank(message = "Le champs nom doit être fourni.")
     * @ORM\Column(name="lastname",type="string",nullable = true)
     * @JMS\Accessor(getter="getLastname")
     * @JMS\Expose
     */
    protected $lastname;

    /**
     * exposed
     * email
     * @var string
     * @JMS\Accessor(getter="getEmail")
     * @JMS\Expose
     */
    protected $email;
    

    /**
     * exposed
     *
     * @ORM\Column(name="phone",type="string" ,nullable=true)
     * @JMS\Accessor(getter="getPhone")
     * @JMS\Expose
     */
    protected $phone;
     /**
     * exposed
     *
     * @ORM\Column(name="status",type="string" ,nullable=true)
     * @JMS\Accessor(getter="getStatus")
     * @JMS\Expose
     */
    protected $status;
    
     /**
     * exposed
     *
     * @ORM\Column(name="role",type="string" ,nullable=false)
     * @JMS\Accessor(getter="getROLE")
     * @JMS\Expose
     */
    protected $role;

    /**
     * @var string
     */
    protected $usernameCanonical;

    /**
     * @var string
     */
    protected $emailCanonical;

    

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return User
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname() {
        return $this->lastname;
    }


    /**
     * Set phone
     *
     * @param string $phone
     * $profession
     * @return User
     */
    public function setPhone($phone) {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone() {
        return $this->phone;
    }

    


    /**
     * Set status
     *
     * @param string $status
     *
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Add event
     *
     * @param \UserBundle\Entity\Events $event
     *
     * @return User
     */
    public function addEvent(\UserBundle\Entity\Events $event)
    {
        $this->events[] = $event;

        return $this;
    }

    /**
     * Remove event
     *
     * @param \UserBundle\Entity\Events $event
     */
    public function removeEvent(\UserBundle\Entity\Events $event)
    {
        $this->events->removeElement($event);
    }

    /**
     * Get events
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEvents()
    {
        return $this->events;
    }
}
