<?php

namespace App\Controller;

use App\Entity\City;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\RegistrationFormType;
//use App\Form\LoginForm;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @param Request $request
     */
    public function index(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $cities = $em->getRepository('App:City')->findAll();
        $selectedCityId = $request->request->get('city');
        $selectedCity = null;
        if($selectedCityId) {
            $selectedCity = $em->getRepository('App:City')->findOneBy(['id' => $selectedCityId]);
        }
        return $this->render('home/index.html.twig', [
            'cities'       => $cities,
            'selectedCity' => $selectedCity
        ]);
    }
}
