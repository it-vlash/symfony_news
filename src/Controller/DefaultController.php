<?php

namespace App\Controller;

use App\Service\Article\ArticlePresentationInterface;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class DefaultController extends AbstractController
{
    public function index(ArticlePresentationInterface $articlePresentation): Response
    {
        $articles = $articlePresentation->getLatest();

        return $this->render('default/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    public function article(ArticlePresentationInterface $articlePresentation)
    {
        $articles = $articlePresentation->getArticle();

        return $this->render('default/article.html.twig', [
            'articles' => $articles,
        ]);
    }

}