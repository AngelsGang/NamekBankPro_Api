<?php

namespace App\Controller;

use App\Entity\Master;
use App\Repository\MasterRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\FOSRestController;

class MastersController extends FOSRestController
{
    private $masterRepository;
    private $em;

    /**
     * MastersController constructor.
     * @param MasterRepository $masterRepository
     * @param EntityManagerInterface $em
     */
    public function __construct(MasterRepository $masterRepository, EntityManagerInterface $em)
    {
        $this->masterRepository = $masterRepository;
        $this->em = $em;
    }

    /**
     * @return \FOS\RestBundle\View\View
     */
    public function getMastersAction()
    {
        $masters = $this->masterRepository->findAll();
        return $this->view($masters);
    }
    public function getMasterAction(Master $master)
    {
        return $this->view($master);
    }
    public function postMastersAction()
    {}
    public  function putMasterAction()
    {}
    public function deleteMasterAction()
    {}
}
