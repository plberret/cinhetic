<?php

namespace Hetic\SearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Hetic\SearchBundle\Entity\Film;
use Hetic\SearchBundle\Form\FilmType;

class DefaultController extends Controller
{
    public function indexAction()
    {
		$film = new Film;
		$form = $this->createForm(new FilmType, $film);
		 $request = $this->get('request');
		
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				return $this->redirect($this->generateUrl('hetic_search_result', array('s' => $form->getData()->getTitle())));
			}
		}
		
		return $this->render('HeticSearchBundle:Search:index.html.twig', array(
			'form' => $form->createView(),
		));
		
    }

	public function resultAction()
    {
		$request = $this->getRequest();
		$title = $request->query->get('s');
	
		$result = $this->getDoctrine()->getRepository('HeticSearchBundle:Film')
			->findFilmByTitle($title);
			
		return $this->render('HeticSearchBundle:Search:result.html.twig', array(
			'result' => $result,
		));
    }

	public function seeAction($id)
    {
		$result = $this->getDoctrine()->getRepository('HeticSearchBundle:Film')
			->find($id);
			
		return $this->render('HeticSearchBundle:Search:film.html.twig', array(
			'result' => $result,
		));
    }

	public function aboutAction()
    {
        return $this->render('HeticSearchBundle:About:about.html.twig');
    }

	public function contactAction()
    {
        return $this->render('HeticSearchBundle:Contact:contact.html.twig');
    }

}
