<?php

namespace App\Controller;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        $posts = $this->getDoctrine()->getRepository(Post::class)->getAllPosts();
        return $this->render('index.html.twig', [
            "posts" => $posts
        ]);
    }

    /**
     * @Route("/article-{id}", name="blog_read")
     */
    public function read(Post $post): Response
    {
        // $post = $this->getDoctrine()->getRepository(Post::class)->find($id);
        return $this->render('read.html.twig', [
            "post" => $post
        ]);
    }

}
