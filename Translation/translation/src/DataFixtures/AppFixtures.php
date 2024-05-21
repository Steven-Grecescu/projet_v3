<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Langue;
use App\Entity\WebContent;
use App\Entity\AdapterContent;
use App\Entity\Category;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $langueEn = new Langue();
        $langueEn->setName("en");
        $manager->persist($langueEn);

        $webContent = new WebContent();
        $webContent->setLangue($langueEn);
        $webContent->setIdTraduction(2);
        $webContent->setClassNameTraduction("Category");
        $manager->persist($webContent);

        $adapterContent = new AdapterContent();
        $adapterContent->addWebContent($webContent);
        $manager->persist($adapterContent);

        $categoryFR = new Category();
        $categoryFR->setName("Alimentation");
        $categoryFR->setDescription("catégorie Alimentation");
        $categoryFR->setUnicity(1);
        $categoryFR->setAdapterContent($adapterContent);
        $manager->persist($categoryFR);

        $categoryEN = new Category();
        $categoryEN->setName("Eating");
        $categoryEN->setDescription("Eating Category");
        $categoryEN->setUnicity(0);
        $manager->persist($categoryEN);

        $manager->flush();
    }
}
