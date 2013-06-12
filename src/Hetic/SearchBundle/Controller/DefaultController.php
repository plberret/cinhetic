<?php

namespace Hetic\SearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Hetic\SearchBundle\Entity\Film;
use Hetic\SearchBundle\Entity\Commentaire;
use Hetic\SearchBundle\Entity\Categorie;
use Hetic\SearchBundle\Entity\Acteur;
use Hetic\SearchBundle\Form\FilmType;
use Hetic\SearchBundle\Form\CommentaireType;

class DefaultController extends Controller
{
    public function indexAction()
    {
		$request = $this->get('request');
		
		$film = new Film;
		$form = $this->createForm(new FilmType, $film);
		
		// last films
		$lastFilms = $this->getDoctrine()->getRepository('HeticSearchBundle:Film')
			->findBy(array(), array('dateCreated' => 'DESC'), 5);
			
		$BestFilms = $this->getDoctrine()->getRepository('HeticSearchBundle:Film')
		 	->findBy(array(), array('vues' => 'DESC'), 5);
		
		return $this->render('HeticSearchBundle:Home:index.html.twig', array(
			'form' => $form->createView(),
			'last_films' => $lastFilms,
			'best_films' => $BestFilms
		));
		
    }

	public function resultAction()
    {
	
		$request = $this->getRequest();
		$session = $this->getRequest()->getSession();
		
		// get ajax request
		if($request->isXmlHttpRequest())
		{
			$title = $request->request->get('query');
			
			$query = $this->getDoctrine()->getRepository('HeticSearchBundle:Film')
				->findFilmByTitle($title);
				
			foreach ($query as $film) {
				$films[] = array( 'id' => $film->getId(), 'title' => $film->getTitle());
			}
			
			$response = new Response(json_encode($films));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
		}
		
		// init form
		$film = new Film;
		$form = $this->createForm(new FilmType, $film);
		$limitPerPage = 4;
		
		// get query
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				$title = $form->getData()->getTitle();
				$query = $this->getDoctrine()->getRepository('HeticSearchBundle:Film')
					->findFilmByCryteria($title);
				$session->set('search', $query);
				
			//	$limitPerPage = $request->request->get('limitPerPage');
			}
		}else{
			$query = $session->get('search');
		}
		
		// set pagination
		$paginator  = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
			$query,
			$this->get('request')->query->get('page', 1), $limitPerPage
		);
		
		return $this->render('HeticSearchBundle:Search:result.html.twig', array(
			'pagination' => $pagination,
			'limitPerPage' => $limitPerPage,
			'form' => $form->createView()
		));
		
    }

	public function seeFilmAction($id)
    {
		// get detailled film
		$film = $this->getDoctrine()->getRepository('HeticSearchBundle:Film')
			->find($id);
			
		// get cross-selling
		$category = $film->getCategory()->getTitle();
		$crossSelling = $this->getDoctrine()->getRepository('HeticSearchBundle:Film')
			->findOthersFilmsByCategory($category, $id);
			
		// commentaire form 
		$comment = new Commentaire;
		$form = $this->createForm(new CommentaireType, $comment);
		$request = $this->get('request');
		
		// post request
		if ($request->getMethod() == 'POST') {
			$form->bind($request);
			if ($form->isValid()) {
				$comment->setFilm($film);
				$em = $this->getDoctrine()->getManager();
				$em->persist($comment);
				$em->flush();
				$session = $this->getRequest()->getSession();
				$session->getFlashBag()->add('info', 'Commentaire envoyé !');
				return $this->redirect($this->generateUrl('hetic_search_view', 
					array('id' => $id)
				));
			}
		}
			
		return $this->render('HeticSearchBundle:Film:film.html.twig', array(
			'result' => $film,
			'crossSelling' => $crossSelling,
			'form' => $form->createView()
		));
    }

	public function seeCategoryAction($id)
    {
		$category = $this->getDoctrine()->getRepository('HeticSearchBundle:Categorie')
			->find($id);
		
		 return $this->render('HeticSearchBundle:Category:category.html.twig', array(
 		'category' => $category
	 	));
	}

	public function seeActorAction($id)
	{
		$actor = $this->getDoctrine()->getRepository('HeticSearchBundle:Acteur')
			->find($id);
			
		return $this->render('HeticSearchBundle:Actor:actor.html.twig', array(
			'actor' => $actor
		));
    }

	public function leftColAction()
    {
		
		$categories = $this->getDoctrine()->getRepository('HeticSearchBundle:Categorie')
			->findAll();
			
		$actors = $this->getDoctrine()->getRepository('HeticSearchBundle:Acteur')
			->findAll();
		
		return $this->render('HeticSearchBundle::leftcol.html.twig', array(
			'categories' => $categories,
			'actors' => $actors
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
