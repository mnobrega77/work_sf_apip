<?php

namespace App\Entity;

use App\Repository\DiscRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DiscRepository::class)]
class Disc
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column( name: "disc_id")]
    private ?int $id = null;

    #[ORM\Column(name: "disc_title", length: 255, nullable: true)]
    private ?string $title = null;

    #[ORM\Column(name: "disc_year", length: 255, nullable: true)]
    private ?string $picture = null;

    #[ORM\Column(name: "disc_label", length: 255, nullable: true)]
    private ?string $label = null;

    #[ORM\ManyToOne(inversedBy: 'discs')]
    #[ORM\JoinColumn(name: 'artist_id', referencedColumnName: 'artist_id')]
    private ?Artist $artist = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getArtist(): ?Artist
    {
        return $this->artist;
    }

    public function setArtist(?Artist $artist): self
    {
        $this->artist = $artist;

        return $this;
    }
}
