<?php

namespace SimplonR\PlateformeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Applicant
 *
 * @ORM\Table(name="applicant")
 * @ORM\Entity(repositoryClass="SimplonR\PlateformeBundle\Repository\ApplicantRepository")
 */
class Applicant
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
     * @var \DateTime
     *
     * @ORM\Column(name="creationDate", type="datetime")
     */
    private $creationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthDate", type="date")
     */
    private $birthDate;

    /**
     * @var string
     *
     * @ORM\Column(name="birthPlace", type="string", length=255)
     */
    private $birthPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="birthCountry", type="string", length=255)
     */
    private $birthCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="text", length=255)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="nationality", type="string", length=255)
     */
    private $nationality;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="codecademyProfile", type="string", length=255)
     */
    private $codecademyProfile;

    /**
     * @var string
     *
     * @ORM\Column(name="englishLevel", type="string", length=255)
     */
    private $englishLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="lastDiploma", type="string", length=255)
     */
    private $lastDiploma;

    /**
     * @var string
     *
     * @ORM\Column(name="poleEmploiNumber", type="string", length=255)
     */
    private $poleEmploiNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="SimplonR\PlateformeBundle\Entity\Mark", mappedBy="applicant")
     */
    protected $marks;

    /**
     * @var
     * @ORM\OneToMany(targetEntity="SimplonR\PlateformeBundle\Entity\Comment", mappedBy="applicant")
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
     * @return Applicant
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
     * @return Applicant
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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     *
     * @return Applicant
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return Applicant
     */
    public function setBirthDate($birthDate)
    {
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
     * Set birthPlace
     *
     * @param string $birthPlace
     *
     * @return Applicant
     */
    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;

        return $this;
    }

    /**
     * Get birthPlace
     *
     * @return string
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * Set birthCountry
     *
     * @param string $birthCountry
     *
     * @return Applicant
     */
    public function setBirthCountry($birthCountry)
    {
        $this->birthCountry = $birthCountry;

        return $this;
    }

    /**
     * Get birthCountry
     *
     * @return string
     */
    public function getBirthCountry()
    {
        return $this->birthCountry;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return Applicant
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
     * Set nationality
     *
     * @param string $nationality
     *
     * @return Applicant
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Applicant
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
     * Set phone
     *
     * @param string $phone
     *
     * @return Applicant
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
     * Set codecademyProfile
     *
     * @param string $codecademyProfile
     *
     * @return Applicant
     */
    public function setCodecademyProfile($codecademyProfile)
    {
        $this->codecademyProfile = $codecademyProfile;

        return $this;
    }

    /**
     * Get codecademyProfile
     *
     * @return string
     */
    public function getCodecademyProfile()
    {
        return $this->codecademyProfile;
    }

    /**
     * Set englishLevel
     *
     * @param string $englishLevel
     *
     * @return Applicant
     */
    public function setEnglishLevel($englishLevel)
    {
        $this->englishLevel = $englishLevel;

        return $this;
    }

    /**
     * Get englishLevel
     *
     * @return string
     */
    public function getEnglishLevel()
    {
        return $this->englishLevel;
    }

    /**
     * Set lastDiploma
     *
     * @param string $lastDiploma
     *
     * @return Applicant
     */
    public function setLastDiploma($lastDiploma)
    {
        $this->lastDiploma = $lastDiploma;

        return $this;
    }

    /**
     * Get lastDiploma
     *
     * @return string
     */
    public function getLastDiploma()
    {
        return $this->lastDiploma;
    }

    /**
     * Set poleEmploiNumber
     *
     * @param string $poleEmploiNumber
     *
     * @return Applicant
     */
    public function setPoleEmploiNumber($poleEmploiNumber)
    {
        $this->poleEmploiNumber = $poleEmploiNumber;

        return $this;
    }

    /**
     * Get poleEmploiNumber
     *
     * @return string
     */
    public function getPoleEmploiNumber()
    {
        return $this->poleEmploiNumber;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Applicant
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->marks = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add mark
     *
     * @param \SimplonR\PlateformeBundle\Entity\Mark $mark
     *
     * @return Applicant
     */
    public function addMark(\SimplonR\PlateformeBundle\Entity\Mark $mark)
    {
        $this->marks[] = $mark;

        return $this;
    }

    /**
     * Remove mark
     *
     * @param \SimplonR\PlateformeBundle\Entity\Mark $mark
     */
    public function removeMark(\SimplonR\PlateformeBundle\Entity\Mark $mark)
    {
        $this->marks->removeElement($mark);
    }

    /**
     * Get marks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMarks()
    {
        return $this->marks;
    }

    /**
     * Add comment
     *
     * @param \SimplonR\PlateformeBundle\Entity\Comment $comment
     *
     * @return Applicant
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
