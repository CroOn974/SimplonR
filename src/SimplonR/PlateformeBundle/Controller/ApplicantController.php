<?php
/**
 * Created by PhpStorm.
 * User: Elliot
 * Date: 04/07/16
 * Time: 21:21
 */

namespace SimplonR\PlateformeBundle\Controller;

use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\FOSRestController;
use SimplonR\PlateformeBundle\Entity\Applicant;

/**
 * Class ApplicantController
 * @package SimplonR\PlateformeBundle\Controller
 * @RouteResource("Applicant")
 */

class ApplicantController extends FOSRestController
{

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * /applicants
     */
    public function getApplicantAction()
    {
        $applicant = $this->getDoctrine()->getRepository(Applicant::class)
            ->findAll();
        $view = $this->view($applicant, 200);

        return $this->handleView($view);

    }

}
