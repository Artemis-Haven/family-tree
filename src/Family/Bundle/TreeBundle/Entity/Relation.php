<?php

namespace Family\Bundle\TreeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Family\Bundle\TreeBundle\Entity\RelationRepository")
 */
class Relation
{

    const TYPE_MARRIAGE = 0;
    const TYPE_FREE = 1;
    const TYPE_PACS = 2;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start", type="date", nullable=true)
     */
    private $start;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end", type="date", nullable=true)
     */
    private $end;
    
    /**
     * @ORM\ManyToOne(targetEntity="Family\Bundle\TreeBundle\Entity\Person", inversedBy="firstPartRelations", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $firstPerson;
    
    /**
     * @ORM\ManyToOne(targetEntity="Family\Bundle\TreeBundle\Entity\Person", inversedBy="secondPartRelations", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $secondPerson;

    /**
     * @ORM\OneToMany(targetEntity="Family\Bundle\TreeBundle\Entity\Person", mappedBy="parentsRelation", cascade={"persist"})
     */
    private $children; 





    public function __construct()
    {
        $this->start = null;
        $this->null = null;
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return "Mariage de " . $this->firstPerson . " et de " . $this->secondPerson;
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
     * Set type
     *
     * @param integer $type
     * @return Relation
     */
    public function setType($type)
    {
        if (!in_array($type, array(self::TYPE_MARRIAGE, self::TYPE_FREE, self::TYPE_PACS))) {
            throw new \InvalidArgumentException("Invalid 'type of union' parameter.");
        }
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set start
     *
     * @param \DateTime $start
     * @return Relation
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return \DateTime 
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set end
     *
     * @param \DateTime $end
     * @return Relation
     */
    public function setEnd($end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Get end
     *
     * @return \DateTime 
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Set firstPerson
     *
     * @param \Family\Bundle\TreeBundle\Entity\Person $firstPerson
     * @return Relation
     */
    public function setFirstPerson(\Family\Bundle\TreeBundle\Entity\Person $firstPerson)
    {
        $this->firstPerson = $firstPerson;

        return $this;
    }

    /**
     * Get firstPerson
     *
     * @return \Family\Bundle\TreeBundle\Entity\Person 
     */
    public function getFirstPerson()
    {
        return $this->firstPerson;
    }

    /**
     * Set secondPerson
     *
     * @param \Family\Bundle\TreeBundle\Entity\Person $secondPerson
     * @return Relation
     */
    public function setSecondPerson(\Family\Bundle\TreeBundle\Entity\Person $secondPerson)
    {
        $this->secondPerson = $secondPerson;

        return $this;
    }

    /**
     * Get secondPerson
     *
     * @return \Family\Bundle\TreeBundle\Entity\Person 
     */
    public function getSecondPerson()
    {
        return $this->secondPerson;
    }

    public function addChild(\Family\Bundle\TreeBundle\Entity\Person $child)
    {
        $this->children[] = $child;
        $child->setParentsRelation($this); 
        return $this;
    }

    public function removeChild(\Family\Bundle\TreeBundle\Entity\Person $child)
    {
        $this->children->removeElement($child);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }
}
