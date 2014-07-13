<?php

namespace Family\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Family\Bundle\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


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
    * @ORM\OneToOne(targetEntity="Family\Bundle\TreeBundle\Entity\Person")
    * @ORM\JoinColumn(name="person_id", referencedColumnName="id", nullable=true)
    */
    private $person;

    /**
     * Set person
     *
     * @param Person $person
     * @return User
     */
    public function setPerson($person)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return User 
     */
    public function getPerson()
    {
        return $this->person;
    }

}
