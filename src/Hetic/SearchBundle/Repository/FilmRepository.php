<?php

namespace Hetic\SearchBundle\Repository;

use Doctrine\ORM\EntityRepository;

class FilmRepository extends EntityRepository
{
	public function findFilmByCryteria($title)
	{
		$query = $this->getEntityManager()
			->createQuery(
				'SELECT f FROM HeticSearchBundle:Film f
				WHERE f.title like :title'
			)->setParameter('title', '%'.$title.'%');
				
		return $query->getResult();
	}
	
	public function findFilmByTitle($title)
	{
		$query = $this->getEntityManager()
			->createQuery(
				'SELECT f FROM HeticSearchBundle:Film f
				WHERE f.title like :title'
			)->setParameter('title', '%'.$title.'%');
				
		return $query->getResult();
	}
	
	public function findFilmsByCategory($category)
	{
		$query = $this->getEntityManager()
			->createQuery(
				'SELECT f, c FROM HeticSearchBundle:Film f
				JOIN f.category c
				WHERE c.title= :category'
			)->setParameter('category', $category);
				
		return $query->getResult();
	}
	
	public function findOthersFilmsByCategory($category, $idFilm)
	{
		$query = $this->getEntityManager()
			->createQuery(
				'SELECT f, c FROM HeticSearchBundle:Film f
				JOIN f.category c
				WHERE c.title= :category
				AND f.id != :id'
			)->setParameter('category', $category)
			->setParameter('id', $idFilm);
				
		return $query->getResult();
	}
}