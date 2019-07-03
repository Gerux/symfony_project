<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class CityRepository extends EntityRepository
{
//    public function getAllCity()
//    {
//        $qb = $this->createQueryBuilder('d');
//
//        return $qb->select('d, dis, cl')
//            ->leftJoin('d.districts', 'dis')
//            ->innerJoin('dis.cleaners', 'cl')
//            ->groupBy('dis.id')
//            ->getQuery()
//            ->getResult();
//    }
}