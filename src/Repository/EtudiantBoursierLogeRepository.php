<?php

namespace App\Repository;

use App\Entity\EtudiantBoursierLoge;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EtudiantBoursierLoge|null find($id, $lockMode = null, $lockVersion = null)
 * @method EtudiantBoursierLoge|null findOneBy(array $criteria, array $orderBy = null)
 * @method EtudiantBoursierLoge[]    findAll()
 * @method EtudiantBoursierLoge[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtudiantBoursierLogeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EtudiantBoursierLoge::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(EtudiantBoursierLoge $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(EtudiantBoursierLoge $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return EtudiantBoursierLoge[] Returns an array of EtudiantBoursierLoge objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EtudiantBoursierLoge
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
