<?php
// src/AppBundle/Entity/User.php

namespace SimplonR\PlateformeBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var
     * @ORM\OneToOne(targetEntity="SimplonR\PlateformeBundle\Entity\Administrator", mappedBy="user_id")
     */
    protected $administrator;


    /**
     * @var
     * @ORM\OneToOne(targetEntity="SimplonR\PlateformeBundle\Entity\Trainer", mappedBy="user_id")
     */
    protected $trainer;
    public function __construct()
    {
        parent::__construct();
        // LE VOL
    }

    /**
     * Set administrator
     *
     * @param \SimplonR\PlateformeBundle\Entity\Administrator $administrator
     *
     * @return User
     */
    public function setAdministrator(\SimplonR\PlateformeBundle\Entity\Administrator $administrator = null)
    {
        $this->administrator = $administrator;

        return $this;
    }

    /**
     * Get administrator
     *
     * @return \SimplonR\PlateformeBundle\Entity\Administrator
     */
    public function getAdministrator()
    {
        return $this->administrator;
    }

    /**
     * Set trainer
     *
     * @param \SimplonR\PlateformeBundle\Entity\Trainer $trainer
     *
     * @return User
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
}
