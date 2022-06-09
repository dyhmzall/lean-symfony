<?php

namespace App\Controller;

use App\Repository\TaskRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class TaskController extends AbstractController
{
    private Environment $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    #[Route('/task', name: 'task')]
    public function index(TaskRepository $taskRepository): Response
    {
        return new Response($this->twig->render('task/index.html.twig', [
            'tasks' => $taskRepository->findAll(),
        ]));
    }
}
