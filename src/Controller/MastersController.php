<?php

namespace App\Controller;

use App\Entity\Master;
use App\Repository\MasterRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\Routing\Annotation\Route;

class MastersController extends FOSRestController
{
    private $masterRepository;
    private $em;

    public function __construct(MasterRepository $masterRepository, EntityManagerInterface $em)
    {
        $this->masterRepository = $masterRepository;
        $this->em = $em;
    }

    public function getUsersAction()
    {
        $masters = $this->masterRepository->findAll();
        return $this->view($masters);
    }
    public function getUserAction()
    {}
    public function postUsersAction()
    {}
    public  function putUserAction()
    {}
    public function deleteUserAction()
    {}
}
