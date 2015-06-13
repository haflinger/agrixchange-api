<?php

namespace PlotComBundle\Listener;



use Dunglas\ApiBundle\Event\DataEvent;
use PlotComBundle\Entity\CulturePlot;
use PlotComBundle\Entity\Plot;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class ApiListener  {

    protected $token_storage;


    public function __construct(TokenStorageInterface $token)
    {

        $this->token_storage = $token;
        $this->_classnamesUser = Array(

            $plot = new Plot(),
            $cultureplot = new CulturePlot()

        );

    }



    /*Parcourir les entités */

    private function isInstanceOf($object, Array $classNames)
    {
        foreach ($classNames as $className) {
            if ($object instanceof $className) {
                return true;
                break;
            }
        }
        return false;
    }


    public function prePersist(DataEvent $event)
    {

        $entity = $event->getData();
        $user =  $this->token_storage->getToken()->getUser();

        if ($this->isInstanceOf($entity, $this->_classnamesUser)) {
            $entity->setUser($user);
        }

    }


} 