<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PackRepository")
 */
class Pack
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Qcm", mappedBy="pack", cascade={"persist", "remove"})
     */
    private $qcm;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\QcmDate", mappedBy="pack")
     */
    private $qcmDate;

    public function __construct()
    {
        $this->qcm = new ArrayCollection();
        $this->qcmDate = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Qcm[]
     */
    public function getQcm(): Collection
    {
        return $this->qcm;
    }

    public function addQcm(Qcm $qcm): self
    {
        if (!$this->qcm->contains($qcm)) {
            $this->qcm[] = $qcm;
            $qcm->setPack($this);
        }

        return $this;
    }

    public function removeQcm(Qcm $qcm): self
    {
        if ($this->qcm->contains($qcm)) {
            $this->qcm->removeElement($qcm);
            // set the owning side to null (unless already changed)
            if ($qcm->getPack() === $this) {
                $qcm->setPack(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|QcmDate[]
     */
    public function getQcmDate(): Collection
    {
        return $this->qcmDate;
    }

    public function addQcmDate(QcmDate $qcmDate): self
    {
        if (!$this->qcmDate->contains($qcmDate)) {
            $this->qcmDate[] = $qcmDate;
            $qcmDate->setPack($this);
        }

        return $this;
    }

    public function removeQcmDate(QcmDate $qcmDate): self
    {
        if ($this->qcmDate->contains($qcmDate)) {
            $this->qcmDate->removeElement($qcmDate);
            // set the owning side to null (unless already changed)
            if ($qcmDate->getPack() === $this) {
                $qcmDate->setPack(null);
            }
        }

        return $this;
    }
}
