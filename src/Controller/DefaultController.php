<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\CategoryRepository;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="landing")
     */
    public function landing(CategoryRepository $categoryRepository)
    {

        return $this->render('default/index.html.twig', [
            'categories' => $categoryRepository->findLastThree()
        ]);
    }
}
