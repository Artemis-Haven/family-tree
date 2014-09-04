<?php

namespace Family\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FamilyAccessCode
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Family\Bundle\UserBundle\Entity\FamilyAccessCodeRepository")
 */
class FamilyAccessCode
{
    public function __construct($code = null) {
        $this->code = $code;
        $this->spent = false;
    }

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
     * @ORM\Column(name="code", type="string", length=255, unique=true)
     */
    private $code;

    /**
     * @var boolean
     *
     * @ORM\Column(name="spent", type="boolean")
     */
    private $spent;
    
    /**
     * @ORM\ManyToOne(targetEntity="Family\Bundle\TreeBundle\Entity\Family", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $family;


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
     * Set code
     *
     * @param string $code
     * @return FamilyAccessCode
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set spent
     *
     * @param boolean $spent
     * @return FamilyAccessCode
     */
    public function setSpent($spent)
    {
        $this->spent = $spent;

        return $this;
    }

    /**
     * Get spent
     *
     * @return boolean 
     */
    public function isSpent()
    {
        return $this->spent;
    }

    /**
     * Set family
     *
     * @param \Family\Bundle\TreeBundle\Entity\Family $family
     * @return FamilyAccessCode
     */
    public function setFamily(\Family\Bundle\TreeBundle\Entity\Family $family)
    {
        $this->family = $family;

        return $this;
    }

    /**
     * Get family
     *
     * @return \Family\Bundle\TreeBundle\Entity\Family 
     */
    public function getFamily()
    {
        return $this->family;
    }
}
