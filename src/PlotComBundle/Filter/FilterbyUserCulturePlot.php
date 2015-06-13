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

class FilterbyUserCulturePlot implements FilterInterface{

    public function __construct($userId,$plotId){
        $this->userId = $userId;
        $this->plotId= $plotId;
    }
    public function apply(ResourceInterface $resource,QueryBuilder $query, Request $request){


        $query
            ->getEntityManager()->getRepository('PlotComBundle:CulturePlot')
            ->createQueryBuilder('c')
            ->where('c.plotId = :plotId')
            ->where('c.userId = :userId')
            ->setParameter('userId',$this->userId)
            ->setParameter('plotId',$this->plotId);


    }

    public function getDescription(ResourceInterface $resource){
        return array();
    }

}