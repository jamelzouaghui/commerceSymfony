<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use UserBundle\Repository\EventsRepository;
use JMS\Serializer\Annotation as JMS;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * ORM\Entity(repositoryClass="UserBundle\Repository\EventsRepository")
 * @ORM\Table(name="nl_events")
 * @ORM\DiscriminatorColumn(name="disc",type="string")
 * @ORM\DiscriminatorMap({ "events" = "Events"})
 * @ORM\HasLifecycleCallbacks
 * @ORM\MappedSuperclass
 * @JMS\ExclusionPolicy("all")
 */
class Events
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
   public $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
  /**
     * Many events have Many Users.
     * @ORM\ManyToMany(targetEntity="User", mappedBy="events")
     */
    private $users;
     public function __construct() {
        parent::__construct();
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
     /**
     * exposed
     * nom
     * 
     * @ORM\Column(name="nom",type="string",nullable = true)
     * @JMS\Accessor(getter="getNom")
     * @JMS\Expose
     *
     */
    protected $nom;

    /**
     * exposed
     * 
     * @ORM\Column(name="content",type="string",nullable = true)
     * @JMS\Accessor(getter="getContent")
     * @JMS\Expose
     */
    protected $content;
    
    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=true)
     */
    protected $user;

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Events
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Events
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Events
     */
    public function setUser(\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Events
     */
    public function addUser(\UserBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \UserBundle\Entity\User $user
     */
    public function removeUser(\UserBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
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
