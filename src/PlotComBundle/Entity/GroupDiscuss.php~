<?php

namespace PlotComBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupDiscuss
 *
 * @ORM\Table()
 * @ORM\Entity
* @ORM\HasLifecycleCallbacks()
 */
class GroupDiscuss
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="private", type="string", length=255)
     */
    private $private;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="usersmax", type="string", length=255)
     */
    private $usersmax;

    /**
     * @var string
     *
     * @ORM\Column(name="infos", type="string", length=255)
     */
    private $infos;

    /**
     * @var \Datetime
     *
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $dateAdd;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="integer", nullable = true)
     */
    private $userId;

    /**
     * @var \UserBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id",referencedColumnName="id")
     *
     */
    private $user;



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
     * Set title
     *
     * @param string $title
     * @return GroupDiscuss
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set private
     *
     * @param string $private
     * @return GroupDiscuss
     */
    public function setPrivate($private)
    {
        $this->private = $private;

        return $this;
    }

    /**
     * Get private
     *
     * @return string 
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return GroupDiscuss
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
     * Set usersmax
     *
     * @param string $usersmax
     * @return GroupDiscuss
     */
    public function setUsersmax($usersmax)
    {
        $this->usersmax = $usersmax;

        return $this;
    }

    /**
     * Get usersmax
     *
     * @return string 
     */
    public function getUsersmax()
    {
        return $this->usersmax;
    }

    /**
     * Set infos
     *
     * @param string $infos
     * @return GroupDiscuss
     */
    public function setInfos($infos)
    {
        $this->infos = $infos;

        return $this;
    }

    /**
     * Get infos
     *
     * @return string 
     */
    public function getInfos()
    {
        return $this->infos;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime  $dateAdd
     * @return GroupDiscuss
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return GroupDiscuss
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     * @return GroupDiscuss
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
     * @ORM\PrePersist
     */
    public function updateDate(){

        $this->setDateAdd(new \DateTime('now'));
    }

}
