<?php

namespace App\FirstBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p FROM AppFirstBundle:Product p ORDER BY p.name ASC'
            )
            ->getResult();
    }
    public function findOneByIdJoinedToCategory($id)
    {
        $query = $this->getEntityManager()
            ->createQuery('
            SELECT p, c FROM AppFirstBundle:Product p
            JOIN p.category c
            WHERE p.id = :id'
            )->setParameter('id', $id);

        try {
            return $query->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
}
