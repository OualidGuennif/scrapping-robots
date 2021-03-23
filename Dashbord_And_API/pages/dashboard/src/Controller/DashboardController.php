<?php

namespace App\Controller;

use App\Entity\Data;
use App\Entity\Task;
use App\Form\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/", name="dashboard")
     */
    public function index(Request $request): Response
    {
        $task = new Task();

        $formTask = $this->createForm(TaskType::class, $task);

        if('POST' === $request->getMethod()) {
            $formTask -> handleRequest($request);

            if($formTask -> isSubmitted()) {
                $em = $this -> getDoctrine() -> getManager();
                $em -> persist($task);
                $em->flush();
            }
        }
        return $this->render('dashboard/index.html.twig', [
            'formTask' => $formTask ->createView(),
            'datas' => $subjects = $this->getDoctrine()->getRepository(Data::class) -> findAll(),
            'controller_name' => 'DashboardController',
        ]);
    }
}
