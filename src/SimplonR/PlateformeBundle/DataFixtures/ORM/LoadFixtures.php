<?php

namespace SimplonR\PlateformeBundle\DataFixture\ORM;


use SimplonR\PlateformeBundle\Entity\Applicant;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;


class LoadFixtures implements FixtureInterface
{
    /**
     * @param \SimplonR\PlateformeBundle\DataFixture\\ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $object = Fixtures::load(__DIR__ . '/fixtures.yml', $manager);
    }
}