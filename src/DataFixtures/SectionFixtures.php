<?php

namespace App\DataFixtures;

use App\Entity\Section;
use Doctrine\Persistence\ObjectManager;

class SectionFixtures extends AbstractFixture
{
    private static $sectionTitles = [
        ""
    ];
    public function loadData(ObjectManager $manager)
    {
        $this->createMany(Section::class, 5, function (Section $section, $count) {
            $section->setTitle($this->faker->title)
                ->setSubtitle($this->faker->title)
                ->setCategory('banner')
                ->setContent("Agency text content")
                ->setLabel('agency_banner')
                ;
        });


    }
}
