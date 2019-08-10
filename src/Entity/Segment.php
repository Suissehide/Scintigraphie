<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SegmentRepository")
 */
class Segment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $seg;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Bullseye", inversedBy="segments")
     */
    private $bullseye;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSeg()
    {
        return $this->seg;
    }

    public function setSeg($seg): self
    {
        $this->seg = $seg;

        return $this;
    }

    public function getBullseye(): ?Bullseye
    {
        return $this->bullseye;
    }

    public function setBullseye(?Bullseye $bullseye): self
    {
        $this->bullseye = $bullseye;

        return $this;
    }
}
