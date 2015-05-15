<?php

namespace MealSquare\RecetteBundle\Controller;

use MealSquare\RecetteBundle\Entity\Ingredient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class IngredientController extends Controller {

    public function listAction(Request $request) {
        $em = $this->get('doctrine.orm.entity_manager');
        $dql = "SELECT a FROM MealSquareRecetteBundle:Ingredient a";
        $query = $em->createQuery($dql);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->get('page', 1)/* page number */, 12/* limit per page */
        );

        // parameters to template
        return $this->render('MealSquareRecetteBundle:Ingredient:list.html.twig', array('pagination' => $pagination));
    }

    public function showAction($id) {
        $repository = $this->getDoctrine()
                ->getRepository("MealSquareRecetteBundle:Ingredient");
        $ingredient = $repository->findOneById($id);
        
        return $this->render('MealSquareRecetteBundle:Ingredient:show.html.twig', array('ingredient' => $ingredient));
    }

}