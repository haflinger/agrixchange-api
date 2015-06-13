<?php


namespace UserBundle\Controller;

use AppBundle\Api\Filters\FilterMe;
use Dunglas\ApiBundle\Api\Resource;
use Dunglas\ApiBundle\Controller\ResourceController;
use Symfony\Component\HttpFoundation\Request;



class UserController extends ResourceController {

    public function getMeAction(Request $request)
    {

        $resource = $this->getResource($request);

        $id= $this->getUser()->getId();

        $data = $this->findOrThrowNotFound($resource,$id);

        return $this->getSuccessResponse($resource, $data, 200, [], ['request_uri' => $request->getRequestUri()]);
    }

}