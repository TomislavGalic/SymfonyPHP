<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('What bit controller');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        $answers = [
            'Make sure your cat is sitting still',
            'Honestly, furry shoes are better',
            'Maybe... try spell backwars',
        ];

        dump($this);


        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace(' ', ' ', $slug)),
            'answers' => $answers,
        ]);
    }
}