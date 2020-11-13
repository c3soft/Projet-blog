<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <=50; $i++){
            $post = new Post();
            $post->setTitle("Article N°" . $i);
            $post->setContent("Contenu N°" . $i);
            $manager->persist($post);
        }

        $manager->flush();
    }
}
