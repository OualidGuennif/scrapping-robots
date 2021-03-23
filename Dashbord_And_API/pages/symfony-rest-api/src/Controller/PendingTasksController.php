<?php

namespace App\Controller;

use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PendingTasksController extends AbstractController
{
    /**
     * @Route("api/pendingtasks", name="pending_tasks", methods={"GET"})
     */
    public function index(NormalizerInterface $normalizer)
    {
        $response = $this -> getDoctrine() -> getRepository(Task::class) -> findAll();
        $response = $normalizer -> normalize($response, null, ['groups' => 'post:read']);

        $response = new Response(json_encode($response), 200, [
            "Content-Type" => "Application/json"
        ]);

        return $response;
    }
}
