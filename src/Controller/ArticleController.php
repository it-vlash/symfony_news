<?php


namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 */
class ArticleController extends AbstractController
{
    public function homepage()
    {
        return new Response('Hello from ' . __CLASS__);
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        $comments = [
            'First comment',
            'Second comment',
            'Third comment',
        ];

        return $this->render('article/show.html.twig', [
                'title'     => ucwords(str_replace('-', ' ', $slug)),
                'comments'   => $comments,

            ]);
    }
}