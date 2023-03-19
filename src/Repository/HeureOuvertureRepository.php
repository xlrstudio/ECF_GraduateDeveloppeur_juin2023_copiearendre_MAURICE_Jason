<?php

namespace App\Repository;

use App\Entity\HeureOuverture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HeureOuverture>
 *
 * @method HeureOuverture|null find($id, $lockMode = null, $lockVersion = null)
 * @method HeureOuverture|null findOneBy(array $criteria, array $orderBy = null)
 * @method HeureOuverture[]    findAll()
 * @method HeureOuverture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HeureOuvertureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HeureOuverture::class);
    }

    public function save(HeureOuverture $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(HeureOuverture $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return HeureOuverture[] Returns an array of HeureOuverture objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('h.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?HeureOuverture
//    {
//        return $this->createQueryBuilder('h')
//            ->andWhere('h.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
