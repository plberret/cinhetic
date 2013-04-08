<?php

namespace Hetic\SearchBundle\Repository;

use Doctrine\ORM\EntityRepository;

class FilmRepository extends EntityRepository
{
	public function findFilmByTitle($title)
	{
		$query = $this->getEntityManager()
			->createQuery(
				'SELECT f FROM HeticSearchBundle:Film f
				WHERE f.title like :title'
			)->setParameter('title', '%'.$title.'%');
				
		return $query->getResult();
	}
}