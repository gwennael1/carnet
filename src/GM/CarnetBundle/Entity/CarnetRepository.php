<?php

namespace GM\CarnetBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * ListeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CarnetRepository extends EntityRepository
{
	public function getIdCarnet($username)
	{
		$query = $this->_em->createQuery('SELECT c.id FROM GMCarnetBundle:Carnet c WHERE c.username = :username');
		$query->setParameter('username', $username);
		$results = $query->getOneOrNullResult();
	
		return $results;
	}
}
