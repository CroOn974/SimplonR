<?php

namespace SimplonR\PlateformeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trainer
 *
 * @ORM\Table(name="trainer")
 * @ORM\Entity(repositoryClass="SimplonR\PlateformeBundle\Repository\TrainerRepository")
 */
class Trainer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="string", length=255)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="text")
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="skills", type="string", length=255)
     */
    private $skills;

    /**
     * @var
     * @ORM\OneToOne(targetEntity="SimplonR\PlateformeBundle\Entity\User", inversedBy="trainer")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user_id;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="SimplonR\PlateformeBundle\Entity\Mark", mappedBy="trainer")
     */
    protected $notes;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="SimplonR\PlateformeBundle\Entity\Comment", mappedBy="trainer")
     */
    protected $comments;


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
     * Set surname
     *
     * @param string $surname
     *
     * @return Trainer
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Trainer
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

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return Trainer
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Trainer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set skills
     *
     * @param string $skills
     *
     * @return Trainer
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * Get skills
     *
     * @return string
     */
    public function getSkills()
    {
        return $this->skills;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->notes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set userId
     *
     * @param \SimplonR\PlateformeBundle\Entity\User $userId
     *
     * @return Trainer
     */
    public function setUserId(\SimplonR\PlateformeBundle\Entity\User $userId = null)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return \SimplonR\PlateformeBundle\Entity\User
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Add note
     *
     * @param \SimplonR\PlateformeBundle\Entity\Mark $note
     *
     * @return Trainer
     */
    public function addNote(\SimplonR\PlateformeBundle\Entity\Mark $note)
    {
        $this->notes[] = $note;

        return $this;
    }

    /**
     * Remove note
     *
     * @param \SimplonR\PlateformeBundle\Entity\Mark $note
     */
    public function removeNote(\SimplonR\PlateformeBundle\Entity\Mark $note)
    {
        $this->notes->removeElement($note);
    }

    /**
     * Get notes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Add comment
     *
     * @param \SimplonR\PlateformeBundle\Entity\Comment $comment
     *
     * @return Trainer
     */
    public function addComment(\SimplonR\PlateformeBundle\Entity\Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \SimplonR\PlateformeBundle\Entity\Comment $comment
     */
    public function removeComment(\SimplonR\PlateformeBundle\Entity\Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }
}
