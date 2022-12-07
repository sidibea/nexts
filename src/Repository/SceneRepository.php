<?php

namespace App\Repository;

use App\Entity\Scene;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Scene>
 *
 * @method Scene|null find($id, $lockMode = null, $lockVersion = null)
 * @method Scene|null findOneBy(array $criteria, array $orderBy = null)
 * @method Scene[]    findAll()
 * @method Scene[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SceneRepository extends ServiceEntityRepository
{
    public function getStoryScene($story)
    {
        return $this->createQueryBuilder('s')
            ->where('s.isEnabled = :true')
            ->andWhere('s.storyline = :story')
            ->orderBy('s.createdAt')
            ->setParameters([
                'story' => $story,
                'true' => true
            ])
            ->setMaxResults(5)
            ->getQuery()->getResult();

    }
    public function getLatestScene($current, $nbre)
    {
        return $this->createQueryBuilder('s')
            ->where('s.isEnabled = :true')
            ->andWhere('s.id != :current')
            ->orderBy('s.createdAt')
            ->setParameter('true', true)
            ->setParameter('current', $current)
            ->setMaxResults($nbre)
            ->getQuery()
            ->getResult();

    }

    public function SceneCount($id)
    {
        $count=  $this->createQueryBuilder('s')
            ->join('s.storyline', 'st')
            ->addSelect('st')
            ->where('s.isEnabled = :true')
            ->andWhere('st.id = :storyline')
            ->orderBy('s.id', 'DESC')
            ->setParameter('true', true)
            ->setParameter('storyline', $id)
            ->setMaxResults(1)
            ->getQuery()
            ->getResult();

        if($count != null)
            return $count[0]->getCount() + 1;
        else
            return 1;



    }

    public function LastScene($id)
    {
        $count=  $this->createQueryBuilder('s')
            ->join('s.storyline', 'st')
            ->addSelect('st')
            ->where('s.isEnabled = :true')
            ->andWhere('st.id = :storyline')
            ->orderBy('s.id', 'DESC')
            ->setParameter('true', true)
            ->setParameter('storyline', $id)
            ->setMaxResults(1)
            ->getQuery()
            ->getResult();

        // dump($count[0]); exit;

        return $count;

    }

    public function NumberOfScenes()
    {
        $qb = $this->createQueryBuilder('u')
            ->select('count(u.id)');

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function getScenesChart()
    {
        $sql = "SELECT count(id) as nbre, DATE(created_at) as date FROM scene GROUP BY created_at";
        $connexion = $this->_em->getConnection();
        $query = $connexion->prepare($sql);

        $result = $query->execute()->fetchAll();

        //dump($result); exit;

        return $result;



    }
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Scene::class);
    }

    public function save(Scene $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Scene $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Scene[] Returns an array of Scene objects
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

//    public function findOneBySomeField($value): ?Scene
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
