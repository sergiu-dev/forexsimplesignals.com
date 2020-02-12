<?php

namespace App\Repository;

use App\Entity\Signal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Signal|null find($id, $lockMode = null, $lockVersion = null)
 * @method Signal|null findOneBy(array $criteria, array $orderBy = null)
 * @method Signal[]    findAll()
 * @method Signal[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SignalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Signal::class);
    }

    /**
    * @return Signal[] Returns an array of Signal objects ordered by status and created
    */
    public function findAllSignalsLimited(): array {
        return $this->createQueryBuilder('s')
            ->addOrderBy('s.status', 'DESC')
	        ->addOrderBy('s.created', 'DESC')
            ->setMaxResults(20)
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @return Signal[] Returns an array of Signal objects
     */
    public function findAllClosedSignals(): array {
        return $this->createQueryBuilder('s')
            ->where("s.status = 'closed'")
            ->orderBy('s.created', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

}
