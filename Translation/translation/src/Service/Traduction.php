<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class Traduction
{
    private $em;

    function __construct(EntityManagerInterface $em)
    {
        $this->em=$em;
    }

    public function getTraduction($langue, $instance)
    {
        if($langue !="fr"){
            $webContents = $instance->getAdapterContent()->getWebContents();
            foreach($webContents as $webContent){
                if($webContent->getLangue()->getName() == $langue){
                    $id = $webContent->getIdTraduction();
                    $classNameTrad = $webContent->getClassNameTraduction();
                    $completeClassNameTrad = 'App\Entity\\' . $classNameTrad;
                    return $this->em->find($completeClassNameTrad, $id);
                }
            }
        }
        return $instance;
    }
}