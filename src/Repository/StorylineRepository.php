<?php

namespace App\Repository;

use App\Entity\Storyline;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Storyline>
 *
 * @method Storyline|null find($id, $lockMode = null, $lockVersion = null)
 * @method Storyline|null findOneBy(array $criteria, array $orderBy = null)
 * @method Storyline[]    findAll()
 * @method Storyline[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StorylineRepository extends ServiceEntityRepository
{
    public function NumberOfStorylines()
    {
        $qb = $this->createQueryBuilder('u')
            ->select('count(u.id)');

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function getStoryChart()
    {
        $sql = "SELECT count(id) as nbre, DATE(created_at) as date FROM storyline GROUP BY created_at";
        $connexion = $this->_em->getConnection();
        $query = $connexion->prepare($sql);

        $result = $query->execute()->fetchAll();

        //dump($result); exit;

        return $result;

    }

    public function getContributors($user)
    {
        return $this->createQueryBuilder('s')
            ->join('')
            ->select('s.contributors', 'c')
            ->where('s.publishedBy = :user')
            ->orderBy('s.createdAt')
            ->setParameter('user', $user)
            ->getQuery()
            ->getResult();

    }
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Storyline::class);
    }

    public function save(Storyline $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Storyline $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Storyline[] Returns an array of Storyline objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Storyline
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
