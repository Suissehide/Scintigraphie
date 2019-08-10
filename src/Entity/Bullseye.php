<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BullseyeRepository")
 */
class Bullseye
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Segment", mappedBy="bullseye", cascade={"persist", "remove"})
     */
    private $segment;

    public function __construct()
    {
        $this->segment = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Segment[]
     */
    public function getSegment(): Collection
    {
        return $this->segment;
    }

    public function addSegment(Segment $segment): self
    {
        if (!$this->segment->contains($segment)) {
            $this->segment[] = $segment;
            $segment->setBullseye($this);
        }

        return $this;
    }

    public function removeSegment(Segment $segment): self
    {
        if ($this->segment->contains($segment)) {
            $this->segment->removeElement($segment);
            // set the owning side to null (unless already changed)
            if ($segment->getBullseye() === $this) {
                $segment->setBullseye(null);
            }
        }

        return $this;
    }

}
