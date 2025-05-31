<?php

namespace App\Controller;

use App\Entity\Tasks;
use App\Form\TasksForm;
use App\Repository\TasksRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class TaskController extends AbstractController
{
    #[Route('/', name: 'app_task')]
    public function index(TasksRepository $repository): Response
    {
        $tasks = $repository->findAll();
        return $this->render('task/index.html.twig', compact('tasks'));
    }

    #[Route('/add', name: 'app_task_add')]
    public function addTask(Request $request, EntityManagerInterface $entityManager): Response
    {
        $task = new Tasks();
        $form = $this->createForm(TasksForm::class, $task);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($task);
            $entityManager->flush();
            return $this->redirectToRoute('app_task');
        }
        return $this->render('task/add.html.twig', compact('form'));
    }
}
