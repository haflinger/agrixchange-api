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

class FilterbyUserWork implements FilterInterface{

    public function __construct($id,$cultureplotid){
        $this->id = $id;
        $this->cultureplotId = $cultureplotid;
    }
    public function apply(ResourceInterface $resource,QueryBuilder $query, Request $request){


        $query
            ->getEntityManager()->getRepository('PlotComBundle:Work')
            ->createQueryBuilder('w')
            ->join('w.cultureplot', 'c')
            ->where('w.cultureplotId = :cultureplotId')
            ->where('c.userId = :userId')
            ->setParameter('userId',$this->id)
            ->setParameter('cultureplotId',$this->cultureplotId);

    }

    public function getDescription(ResourceInterface $resource){
        return array();
    }

}