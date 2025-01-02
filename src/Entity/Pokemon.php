<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PokemonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PokemonRepository::class)]
#[ApiResource]
class Pokemon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(nullable: true)]
    private ?int $weight = null;

    #[ORM\Column(nullable: true)]
    private ?int $height = null;

    #[ORM\Column]
    private ?int $pokeId = null;

    #[ORM\Column(nullable: true)]
    private ?int $hp = null;

    #[ORM\Column(nullable: true)]
    private ?int $attack = null;

    #[ORM\Column(nullable: true)]
    private ?int $defence = null;

    #[ORM\Column(nullable: true)]
    private ?int $specialAttack = null;

    #[ORM\Column(nullable: true)]
    private ?int $specialDefence = null;

    #[ORM\Column(nullable: true)]
    private ?int $speed = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }

    public function setWeight(?int $weight): static
    {
        $this->weight = $weight;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(?int $height): static
    {
        $this->height = $height;

        return $this;
    }

    public function getPokeId(): ?int
    {
        return $this->pokeId;
    }

    public function setPokeId(int $pokeId): static
    {
        $this->pokeId = $pokeId;

        return $this;
    }

    public function getHp(): ?int
    {
        return $this->hp;
    }

    public function setHp(?int $hp): static
    {
        $this->hp = $hp;

        return $this;
    }

    public function getAttack(): ?int
    {
        return $this->attack;
    }

    public function setAttack(?int $attack): static
    {
        $this->attack = $attack;

        return $this;
    }

    public function getDefence(): ?int
    {
        return $this->defence;
    }

    public function setDefence(?int $defence): static
    {
        $this->defence = $defence;

        return $this;
    }

    public function getSpecialAttack(): ?int
    {
        return $this->specialAttack;
    }

    public function setSpecialAttack(?int $specialAttack): static
    {
        $this->specialAttack = $specialAttack;

        return $this;
    }

    public function getSpecialDefence(): ?int
    {
        return $this->specialDefence;
    }

    public function setSpecialDefence(?int $specialDefence): static
    {
        $this->specialDefence = $specialDefence;

        return $this;
    }

    public function getSpeed(): ?int
    {
        return $this->speed;
    }

    public function setSpeed(?int $speed): static
    {
        $this->speed = $speed;

        return $this;
    }
}
