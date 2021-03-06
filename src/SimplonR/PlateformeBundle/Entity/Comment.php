<?php

namespace SimplonR\PlateformeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="SimplonR\PlateformeBundle\Repository\CommentRepository")
 */
class Comment
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
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="SimplonR\PlateformeBundle\Entity\Trainer", inversedBy="comments")
     * @ORM\JoinColumn(name="trainer_id", referencedColumnName="id")
     */
    protected $trainer;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="SimplonR\PlateformeBundle\Entity\Applicant", inversedBy="comments")
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
     * Set comment
     *
     * @param string $comment
     *
     * @return Comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set trainer
     *
     * @param \SimplonR\PlateformeBundle\Entity\Trainer $trainer
     *
     * @return Comment
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
     * @return Comment
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
