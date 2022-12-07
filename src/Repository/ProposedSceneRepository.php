<?php

namespace App\Repository;

use App\Entity\ProposedScene;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProposedScene>
 *
 * @method ProposedScene|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProposedScene|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProposedScene[]    findAll()
 * @method ProposedScene[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProposedSceneRepository extends ServiceEntityRepository
{
    public function getLatestProposedScene($id, $nbre)
    {
        return $this->createQueryBuilder('p')
            ->where('p.isEnabled = :true')
            ->andWhere('p.scene = :id')
            ->orderBy('p.createdAt')
            ->setParameter('true', true)
            ->setParameter('id', $id)
            ->setMaxResults($nbre)
            ->getQuery()
            ->getResult();

    }

    public function LastProposed($id)
    {
        $count=  $this->createQueryBuilder('p')
            ->join('p.scene', 'sc')
            ->addSelect('sc')
            ->where('sc.isEnabled = :true')
            ->andWhere('sc.id = :scene')
            ->orderBy('p.id', 'DESC')
            ->setParameter('true', true)
            ->setParameter('scene', $id)
            ->setMaxResults(1)
            ->getQuery()
            ->getResult();

        //dump($count[0]); exit;

        if($count != null)
            return $count[0]->getCount() + 1;
        else
            return 1;

        return $count;

    }

    public function NumberOfProposedScenes()
    {
        $qb = $this->createQueryBuilder('u')
            ->select('count(u.id)');

        return $qb->getQuery()->getSingleScalarResult();
    }
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProposedScene::class);
    }

    public function save(ProposedScene $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProposedScene $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProposedScene[] Returns an array of ProposedScene objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ProposedScene
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
