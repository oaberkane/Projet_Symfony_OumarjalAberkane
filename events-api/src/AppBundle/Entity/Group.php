<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * A group.
 *
 * @ORM\Entity
 *
 * @ORM\Table(name="group_appli")
 * @ApiResource
 *
 */

class Group
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
     * @var string name of group
     *
     * @ORM\Column(type="string",nullable=false)
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @var string name of city of group
     *
     * @ORM\Column(type="string",nullable=false)
     */
    private $city;

    /**
     * @var string description of the group
     *
     * @ORM\Column(type="string",nullable=true)
     */
    private $description;

    /**
     * @var string description of the group
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User", inversedBy="usersGroup")
     */
    private $users;


    /**
     * @var string description of the group
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User",inversedBy="groups")
     * @ORM\JoinTable(name="user_admins_groups")
     */
    private $admins;

    public function __construct()
    {
        $this->admins = new ArrayCollection();
        $this->users = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * @param string $users
     */
    public function setUsers($users)
    {
        $this->users = $users;
    }

    public function addUser(User $user){
        $this->users[] = $user;
        $user->addGroup($this);
        return $this;
    }

    /**
     * @return string
     */
    public function getAdmins()
    {
        return $this->admins;
    }

    /**
     * @param string $admins
     */
    public function setAdmins($admins)
    {
        $this->admins = $admins;
    }

    public function addAdmin(User $user){
        $this->admins[] = $user;

    }


    /**
     * Remove user
     *
     * @param \AppBundle\Entity\User $user
     */
    public function removeUser(\AppBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Remove admin
     *
     * @param \AppBundle\Entity\User $admin
     */
    public function removeAdmin(\AppBundle\Entity\User $admin)
    {
        $this->admins->removeElement($admin);
    }
}
