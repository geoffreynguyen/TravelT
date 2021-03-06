<?php

namespace TT\TravelBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * TrainRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TrainRepository extends EntityRepository
{
    public function getListeTrains($search)
  {
     
    $query = $this->createQueryBuilder('t')
      ->leftJoin('t.villeDepart', 'vd')
        ->addSelect('vd')
      ->leftJoin('t.villeArrivee', 'va')
        ->addSelect('va');
    
     $query->where('t.dateDepart >= :dateDep')
             ->setParameter('dateDep', $search->getDd())
             ->andWhere('vd = :villeD')
                ->setParameter('villeD', $search->getVilleDepart())
                ->andWhere('va = :villeA')
                    ->setParameter('villeA', $search->getVilleArrivee())
                ->orderBy('t.dateDepart', 'ASC');
       return $query->getQuery()->getResult();
   

  }
}
