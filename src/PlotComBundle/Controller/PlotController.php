<?php
/**
 * Created by PhpStorm.
 * User: juliencolinet
 * Date: 13/06/15
 * Time: 08:18
 */

namespace PlotComBundle\Controller;


use Dunglas\ApiBundle\Api\Resource;
use Dunglas\ApiBundle\Controller\ResourceController;
use PlotComBundle\Filter\FilterbyUserPlot;
use Symfony\Component\HttpFoundation\Request;

class PlotController extends ResourceController{

    public function getUserAction(Request $request)
    {

        $resource = $this->getResource($request);

        $class = new FilterbyUserPlot($this->getUser()->getId());
        $resource = new Resource($resource->getEntityClass());
        $resource->initFilters(array($class));

        $data = $this->getCollectionData($resource, $request);

        if (
            $request->get($this->container->getParameter('api.collection.pagination.page_parameter_name')) &&
            0 === count($data)
        ) {
            throw $this->createNotFoundException();
        }


        return $this->getSuccessResponse($resource, $data, 200, [], ['request_uri' => $request->getRequestUri()]);
    }
}