<?php
/**
 * Created by PhpStorm.
 * User: juliencolinet
 * Date: 13/06/15
 * Time: 08:40
 */

namespace PlotComBundle\Controller;


use Dunglas\ApiBundle\Api\Resource;
use Dunglas\ApiBundle\Controller\ResourceController;
use PlotComBundle\Filter\FilterbyUserCulturePlot;
use Symfony\Component\HttpFoundation\Request;

class CulturePlotController extends ResourceController{

    public function getUserAction(Request $request,$plotid)
    {

        $resource = $this->getResource($request);

        $class = new FilterbyUserCulturePlot($this->getUser()->getId(),$plotid);
        $resource = new Resource($resource->getEntityClass());
        $resource->initFilters(array($class));

        $data = $this->getCollectionData($resource, $request);

        if(
            $request->get($this->container->getParameter('api.collection.pagination.page_parameter_name')) &&
            0 === count($data)
        ) {
            throw $this->createNotFoundException();
        }


        return $this->getSuccessResponse($resource, $data, 200, [], ['request_uri' => $request->getRequestUri()]);
    }
}