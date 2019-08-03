<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SuiviRepository")
 */
class Suivi
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $suivi;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Pack", cascade={"persist", "remove"})
     */
    private $evenements;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSuivi(): ?string
    {
        return $this->suivi;
    }

    public function setSuivi(?string $suivi): self
    {
        $this->suivi = $suivi;

        return $this;
    }

    public function getEvenements(): ?Pack
    {
        return $this->evenements;
    }

    public function setEvenements(?Pack $evenements): self
    {
        $this->evenements = $evenements;

        return $this;
    }
}
