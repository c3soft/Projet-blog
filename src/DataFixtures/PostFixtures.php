<?php

namespace App\DataFixtures;

use App\Entity\Post;
use App\Entity\Comment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 25; $i++){
            $post = new Post();
            $post->setTitle("Article N°" . $i);
            $post->setContent("Contenu N°" . $i);
            $manager->persist($post);

            for ($j = 1; $j <= 15; $j++){
                $comment = new Comment;
                $comment->setAuthor("Auteur N°" . $i);
                $comment->setContent("Contenu-auteur N°" . $i);
                $comment->setPost($post);
                $manager->persist($comment);
                
            }
        }

        $manager->flush();
    }
}
