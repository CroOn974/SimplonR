<?php

namespace SimplonR\PlateformeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mark
 *
 * @ORM\Table(name="mark")
 * @ORM\Entity(repositoryClass="SimplonR\PlateformeBundle\Repository\MarkRepository")
 */
class Mark
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
     * @var int
     *
     * @ORM\Column(name="mark", type="integer")
     */
    private $mark;

    /**
     * @var string
     *
     * @ORM\Column(name="project", type="string", length=255)
     */
    private $project;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="markDate", type="datetime")
     */
    private $markDate;

    /**
     * @var string
     *
     * @ORM\Column(name="valuation", type="text")
     */
    private $valuation;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="SimplonR\PlateformeBundle\Entity\Trainer", inversedBy="notes")
     * @ORM\JoinColumn(name="trainer_id", referencedColumnName="id")
     */
    protected $trainer;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="SimplonR\PlateformeBundle\Entity\Applicant", inversedBy="marks")
     * @ORM\JoinColumn(name="applicant_id", referencedColumnName="id")
     */
    protected $applicant;



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
     * Set mark
     *
     * @param integer $mark
     *
     * @return Mark
     */
    public function setMark($mark)
    {
        $this->mark = $mark;

        return $this;
    }

    /**
     * Get mark
     *
     * @return int
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Set project
     *
     * @param string $project
     *
     * @return Mark
     */
    public function setProject($project)
    {
        $this->project = $project;

        return $this;
    }

    /**
     * Get project
     *
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set markDate
     *
     * @param \DateTime $markDate
     *
     * @return Mark
     */
    public function setMarkDate($markDate)
    {
        $this->markDate = $markDate;

        return $this;
    }

    /**
     * Get markDate
     *
     * @return \DateTime
     */
    public function getMarkDate()
    {
        return $this->markDate;
    }

    /**
     * Set valuation
     *
     * @param string $valuation
     *
     * @return Mark
     */
    public function setValuation($valuation)
    {
        $this->valuation = $valuation;

        return $this;
    }

    /**
     * Get valuation
     *
     * @return string
     */
    public function getValuation()
    {
        return $this->valuation;
    }

    /**
     * Set trainer
     *
     * @param \SimplonR\PlateformeBundle\Entity\Trainer $trainer
     *
     * @return Mark
     */
    public function setTrainer(\SimplonR\PlateformeBundle\Entity\Trainer $trainer = null)
    {
        $this->trainer = $trainer;

        return $this;
    }

    /**
     * Get trainer
     *
     * @return \SimplonR\PlateformeBundle\Entity\Trainer
     */
    public function getTrainer()
    {
        return $this->trainer;
    }

    /**
     * Set applicant
     *
     * @param \SimplonR\PlateformeBundle\Entity\Applicant $applicant
     *
     * @return Mark
     */
    public function setApplicant(\SimplonR\PlateformeBundle\Entity\Applicant $applicant = null)
    {
        $this->applicant = $applicant;

        return $this;
    }

    /**
     * Get applicant
     *
     * @return \SimplonR\PlateformeBundle\Entity\Applicant
     */
    public function getApplicant()
    {
        return $this->applicant;
    }
}
