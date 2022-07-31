<?php

namespace App\Repository;

use App\Entity\Real;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Real>
 *
 * @method Real|null find($id, $lockMode = null, $lockVersion = null)
 * @method Real|null findOneBy(array $criteria, array $orderBy = null)
 * @method Real[]    findAll()
 * @method Real[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RealRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Real::class);
    }

    public function add(Real $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Real $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findOnlyThree(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 
            'SELECT * FROM `real` ORDER BY id DESC LIMIT 3;
            ';
        
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery(['id']);

        // returns an array of arrays (i.e. a raw data set)
        return $resultSet->fetchAllAssociative();
    }
//    /**
//     * @return Real[] Returns an array of Real objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Real
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
