<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentRepository::class)
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\column(type="string")
     */
    private $author;

    /**
     * @ORM\column(type="text")
     */
    private $content;

    /**
     * @ORM\column(type="datetime_immutable")
     */
    private $posteddAt;



    public function getId(): ?int
    {
        return $this->id;
    }
}
