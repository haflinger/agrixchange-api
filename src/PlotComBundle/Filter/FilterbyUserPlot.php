<?php
/**
 * Created by PhpStorm.
 * User: juliencolinet
 * Date: 11/05/15
 * Time: 16:33
 */

namespace PlotComBundle\Filter;


use Doctrine\ORM\QueryBuilder;
use Dunglas\ApiBundle\Api\ResourceInterface;
use Dunglas\ApiBundle\Doctrine\Orm\Filter\FilterInterface;
use Symfony\Component\HttpFoundation\Request;

class FilterbyUserPlot implements FilterInterface{

    public function __construct($userId){

        $this->userId = $userId;
    }
    public function apply(ResourceInterface $resource,QueryBuilder $query, Request $request){


        $query
            ->getEntityManager()->getRepository('PlotComBundle:Plot')
            ->createQueryBuilder('p')
            ->where('p.userId = :userId')
            ->setParameter('userId',$this->userId);


    }

    public function getDescription(ResourceInterface $resource){
       return array();
    }

}