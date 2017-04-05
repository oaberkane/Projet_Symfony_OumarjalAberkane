<?php

// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * A user.
 * 
 * @ApiResource
 * @ORM\Entity
 */
class User
{
    /**
     * @var int The id of this user.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The name  of this user.
     *
     * @ORM\Column(nullable=false)
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @var string The email of this user.
     *
     * @ORM\Column(type="string",nullable=false)
     * @Assert\NotBlank
     */
    private $email;

    /**
     * @var string The password of this user.
     *
     * @ORM\Column(type="text")
     */
    private $password;

    /**
     * 
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Group", mappedBy="admins")
     */
    private $groups;

    /**
     * 
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Event", inversedBy="participants")
     */
    private $events;
	
	/**
	* 
	* @ORM\ManyToMany(targetEntity="AppBundle\Entity\Group",mappedBy="users")
	*/
	private $usersGroup;
   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
        $this->events = new \Doctrine\Common\Collections\ArrayCollection();
        $this->usersGroup = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return User
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
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Add group
     *
     * @param \AppBundle\Entity\Group $group
     *
     * @return User
     */
    public function addGroup(\AppBundle\Entity\Group $group)
    {
        $this->groups[] = $group;

        return $this;
    }

    /**
     * Remove group
     *
     * @param \AppBundle\Entity\Group $group
     */
    public function removeGroup(\AppBundle\Entity\Group $group)
    {
        $this->groups->removeElement($group);
    }

    /**
     * Get groups
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Add event
     *
     * @param \AppBundle\Entity\Event $event
     *
     * @return User
     */
    public function addEvent(\AppBundle\Entity\Event $event)
    {
        $this->events[] = $event;

        return $this;
    }

    /**
     * Remove event
     *
     * @param \AppBundle\Entity\Event $event
     */
    public function removeEvent(\AppBundle\Entity\Event $event)
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

    /**
     * Add usersGroup
     *
     * @param \AppBundle\Entity\Group $usersGroup
     *
     * @return User
     */
    public function addUsersGroup(\AppBundle\Entity\Group $usersGroup)
    {
        $this->usersGroup[] = $usersGroup;

        return $this;
    }

    /**
     * Remove usersGroup
     *
     * @param \AppBundle\Entity\Group $usersGroup
     */
    public function removeUsersGroup(\AppBundle\Entity\Group $usersGroup)
    {
        $this->usersGroup->removeElement($usersGroup);
    }

    /**
     * Get usersGroup
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsersGroup()
    {
        return $this->usersGroup;
    }
}
