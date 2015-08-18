<?php

namespace tximista\cliente1\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity
 */
class User extends BaseUser {
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=45)
     */
    protected $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=45)
     */
    protected $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="surname2", type="string", length=45)
     */
    protected $surname2;

 
    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", length=45)
     */
    protected $age;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthdate", type="date")
     */
    protected $birthdate;


    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    protected $isActive;


    public function __construct() {
    	parent::__construct();
    	$this->isActive = true;
    	// may not be needed, see section on salt below
    	// $this->salt = md5(uniqid(null, true));
    }
    
      
    public function getRoles(){
    	return array('ROLE_USER');
    }
    
    public function eraseCredentials() {
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
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    
    public function isEnabled()
    {
    	return $this->isActive;
    }
    
    
    
    /** @see \Serializable::serialize() */
    public function serialize()
    {
    	return serialize(array(
    			$this->id,
    			$this->login,
    			$this->password,
    			$this->isActive
    			// see section on salt below
    			// $this->salt,
    	));
    }
    
    
    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
    	list (
    			$this->id,
    			$this->login,
    			$this->password,
    			$this->isActive
    			// see section on salt below
    			// $this->salt
    			) = unserialize($serialized);
    }
    
    /**
     * Set surname
     *
     * @param string $surname
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set surname2
     *
     * @param string $surname2
     * @return User
     */
    public function setSurname2($surname2)
    {
        $this->surname2 = $surname2;

        return $this;
    }

    /**
     * Get surname2
     *
     * @return string 
     */
    public function getSurname2()
    {
        return $this->surname2;
    }

    /**
     * Set age
     *
     * @param string $age
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     * @return User
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime 
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

}
