<?php

namespace Family\Bundle\TreeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Person
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Family\Bundle\TreeBundle\Entity\PersonRepository")
 */
class Person
{

    const SEX_M = 'M';
    const SEX_F = 'F';

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
     * @ORM\Column(name="firstName", type="string", length=255, nullable=true)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="middleNames", type="string", length=255, nullable=true)
     */
    private $middleNames;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="surName", type="string", length=255, nullable=true)
     */
    private $surName;

    /**
     * @var string
     *
     * @ORM\Column(name="sex", type="string", length=1, nullable=true)
     */
    private $sex;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthDate", type="date", nullable=true)
     */
    private $birthDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deathDate", type="date", nullable=true)
     */
    private $deathDate;

    /**
     * @ORM\OneToMany(targetEntity="Family\Bundle\TreeBundle\Entity\Relation", mappedBy="firstPerson", cascade={"persist", "remove"})
     */
    private $firstPartRelations; 

    /**
     * @ORM\OneToMany(targetEntity="Family\Bundle\TreeBundle\Entity\Relation", mappedBy="secondPerson", cascade={"persist", "remove"})
     */
    private $secondPartRelations; 
    
    /**
     * @ORM\ManyToOne(targetEntity="Family\Bundle\TreeBundle\Entity\Relation", inversedBy="children", cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $parentsRelation;
    
    /**
     * @ORM\ManyToOne(targetEntity="Family\Bundle\TreeBundle\Entity\Family", inversedBy="persons", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $family;

    /**
     * @ORM\OneToMany(targetEntity="Family\Bundle\TreeBundle\Entity\Document", mappedBy="person", cascade={"persist", "remove"})
     */
    private $documents; 

    /**
     * @var text
     *
     * @ORM\Column(name="notes", type="text", nullable=true)
     */
    private $notes;

    /**
     * @ORM\OneToOne(targetEntity="Family\Bundle\UserBundle\Entity\User", mappedBy="person")
     * @ORM\JoinColumn(nullable=true)
     */
    private $user;





    public function __construct()
    {
        $this->birthDate = null;
        $this->deathDate = null;
        $this->firstPartRelations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->secondPartRelations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->parentsRelation = null;
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
     * Set firstName
     *
     * @param string $firstName
     * @return Person
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        if ($this->firstName != null) {
            return $this->firstName;
        } else {
            return "-";
        }
    }

    /**
     * Set middleNames
     *
     * @param string $middleNames
     * @return Person
     */
    public function setMiddleNames($middleNames)
    {
        $this->middleNames = $middleNames;

        return $this;
    }

    /**
     * Get middleNames
     *
     * @return string 
     */
    public function getMiddleNames()
    {
        return $this->middleNames;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Person
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        if ($this->lastName != null) {
            return $this->lastName;
        } else {
            return "-";
        }
    }

    /**
     * Set surName
     *
     * @param string $surName
     * @return Person
     */
    public function setSurName($surName)
    {
        $this->surName = $surName;

        return $this;
    }

    /**
     * Get surName
     *
     * @return string 
     */
    public function getSurName()
    {
        return $this->surName;
    }

    /**
     * Get surName
     *
     * @return string 
     */
    public function getFullName()
    {
        $fullName = $this->getFirstName() . ' ';
        if ($this->surName != null)
            $fullName .= '"' . $this->surName . '" ';
        if ($this->middleNames != null)
            $fullName .= $this->middleNames . ' ';
        $fullName = $fullName . $this->getLastName();

        if ($this->birthDate or $this->deathDate) {
            $birthDate = " -";
            $deathDate = "- ";
            if ($this->birthDate)
                $birthDate = $this->birthDate->format("d/m/Y");
            if ($this->deathDate)
                $deathDate = $this->deathDate->format("d/m/Y");
                $fullName .= " (" . $birthDate . " | " . $deathDate . ")";
        }
        return $fullName;
    }

    /**
     * Set sex
     *
     * @param string $sex
     * @return Person
     */
    public function setSex($sex)
    {
        if (!in_array($sex, array(self::SEX_M, self::SEX_F))) {
            throw new \InvalidArgumentException("Invalid sex parameter.");
        }
        $this->sex = $sex;

        return $this;
    }


    /**
     * Get sex
     *
     * @return string 
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     * @return Person
     */
    public function setBirthDate($birthDate)
    {
        if ( $birthDate >= new \DateTime("now") ) {
            throw new \InvalidArgumentException("BirthDate can't be in the future : " . $this->birthDate->format("d/m/Y"));
        }
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime 
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set deathDate
     *
     * @param \DateTime $deathDate
     * @return Person
     */
    public function setDeathDate($deathDate)
    {
        if ( $deathDate >= new \DateTime("now")) {
            throw new \InvalidArgumentException("Death date can't be in the future.");
        }
        $this->deathDate = $deathDate;

        return $this;
    }

    /**
     * Get deathDate
     *
     * @return \DateTime 
     */
    public function getDeathDate()
    {
        return $this->deathDate;
    }

    public function addRelation(\Family\Bundle\TreeBundle\Entity\Relation $relation)
    {
        return $this;
    }

    public function removeRelation(\Family\Bundle\TreeBundle\Entity\Relation $relation)
    {
        if ($this->firstPartRelations->contains($relation)) {
            $this->removeFirstPartRelation($relation);
        } else if ($this->secondPartRelations->contains($relation)) {
            $this->removeSecondPartRelation($relation);
        }
    }

    public function addFirstPartRelation(\Family\Bundle\TreeBundle\Entity\Relation $firstPartRelation)
    {
        $this->firstPartRelations[] = $firstPartRelation;
        $firstPartRelation->setFirstPerson($this); 
        return $this;
    }

    public function removeFirstPartRelation(\Family\Bundle\TreeBundle\Entity\Relation $firstPartRelation)
    {
        print_r("removeFirstPartRelation");
        $this->firstPartRelations->removeElement($firstPartRelation);
        $firstPartRelation->setFirstPerson(null);
    }

    /**
     * Get firstPartRelations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFirstPartRelations()
    {
        return $this->firstPartRelations;
    }

    public function addSecondPartRelation(\Family\Bundle\TreeBundle\Entity\Relation $secondPartRelation)
    {
        $this->secondPartRelations[] = $secondPartRelation;
        $secondPartRelation->setSecondPerson($this); 
        return $this;
    }

    public function removeSecondPartRelation(\Family\Bundle\TreeBundle\Entity\Relation $secondPartRelation)
    {
        print_r("removeSecondPartRelation");
        $this->secondPartRelations->removeElement($secondPartRelation);
        $secondPartRelation->setSecondPerson(null);
    }

    /**
     * Get secondPartRelations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSecondPartRelations()
    {
        return $this->secondPartRelations;
    }

    /**
     * Set parentsRelation
     *
     * @param \Family\Bundle\TreeBundle\Entity\Relation $parentsRelation
     * @return Person
     */
    public function setParentsRelation(\Family\Bundle\TreeBundle\Entity\Relation $parentsRelation)
    {
        $this->parentsRelation = $parentsRelation;

        return $this;
    }

    /**
     * Get parentsRelation
     *
     * @return \Family\Bundle\TreeBundle\Entity\Relation 
     */
    public function getParentsRelation()
    {
        return $this->parentsRelation;
    }

    /**
     * Set family
     *
     * @param \Family\Bundle\TreeBundle\Entity\Family $family
     * @return Person
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

    public function getRelations()
    {
        return new \Doctrine\Common\Collections\ArrayCollection(array_merge($this->firstPartRelations->toArray(), $this->secondPartRelations->toArray()));
    }

    /**
     * Get freresSoeurs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBrothersSisters()
    {
        return $this->getBrothersSistersBySex(null);
    }


    /**
     * Get freresSoeursBySex
     *
     * @param string $sex
     * @return \Doctrine\Common\Collections\Collection 
     */
    private function getBrothersSistersBySex($sex = null)
    {
        $brothersSisters = new \Doctrine\Common\Collections\ArrayCollection();
        $allChildrenOfParents = array();

        if ($this->getParentsRelation() != null) {
            // On récupère toutes les relations des deux parents
            $frstPers = $this->getParentsRelation()->getFirstPerson();
            $secPers = $this->getParentsRelation()->getSecondPerson();
            if ($frstPers and $secPers) {
                $relations = array_merge($frstPers->getRelations()->toArray(), $secPers->getRelations()->toArray());
            } else if ($frstPers) {
                $relations = $frstPers->getRelations()->toArray();
            } else if ($secPers) {
                $relations = $secPers->getRelations()->toArray();
            } else { // Si aucun des parents n'est défini, on prend juste cette relation
                $relations[] = $this->getParentsRelation();
            }

            // On stocke tous les enfants de ces relations
            foreach ( $relations as $relation ) {
                foreach ($relation->getChildren() as $child) {
                    $allChildrenOfParents[] = $child;
                }
            }
            
            // On ne garde pas les doublons ni la personne concernée
            foreach ($allChildrenOfParents as $child) {
                if (!$brothersSisters->contains($child) and $child != $this) {
                        // Si le paramètre est renseigné, on ne garde pas ceux du sexe opposé
                        if ($sex == null or $sex == $child->getSex()) {
                            $brothersSisters->add($child);
                        }
                }
            }
        }
        return $brothersSisters;
    }

    public function getMates()
    {
        $mates = new \Doctrine\Common\Collections\ArrayCollection();
        $allMates = array();

        // On ne garde pas les doublons ni la personne concernée
        foreach ($this->getRelations() as $relation) {
            $firstP = $relation->getFirstPerson();
            $secP = $relation->getSecondPerson();

            if (!$mates->contains($firstP) and $firstP != $this) {
                    $mates->add($firstP);
            }
            if (!$mates->contains($secP) and $secP != $this) {
                    $mates->add($secP);
            }
        }

        return $mates;
   }

    public function addDocument(\Family\Bundle\TreeBundle\Entity\Document $document)
    {
        $this->documents[] = $document;
        $document->setPerson($this); 
        return $this;
    }

    public function removeDocument(\Family\Bundle\TreeBundle\Entity\Document $document)
    {
        $this->documents->removeElement($document);
    }

    /**
     * Get documents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Person
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set user
     *
     * @param User $user
     * @return Person
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return User 
     */
    public function getUser()
    {
        return $this->user;
    }

    public function isDatesValid()
    {
        if ($this->birthDate != null and $this->deathDate != null) {
            return ( $this->birthDate <= $this->deathDate );
        } else {
            return true;
        }
    }

    public function __toString()
    {
        if ($this->surName != null) {
            return $this->firstName . ' "' . $this->surName . '" '. $this->lastName;
        } else {
            return $this->firstName . ' '. $this->lastName;
        }
    }

}
