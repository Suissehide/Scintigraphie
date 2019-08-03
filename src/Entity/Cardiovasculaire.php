<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CardiovasculaireRepository")
 */
class Cardiovasculaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateHTA;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $systolique;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $diastolique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tabagisme;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $paquetAnnee;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $alcool;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $poids;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $taille;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $tourDeTaille;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $diabete;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $retinopathie;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateDiabete;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $microalbuminurie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $neuropathie;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Pack", cascade={"persist", "remove"})
     */
    private $antecedents;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Pack", cascade={"persist", "remove"})
     */
    private $precisions;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateHTA(): ?\DateTimeInterface
    {
        return $this->dateHTA;
    }

    public function setDateHTA(?\DateTimeInterface $dateHTA): self
    {
        $this->dateHTA = $dateHTA;

        return $this;
    }

    public function getSystolique(): ?int
    {
        return $this->systolique;
    }

    public function setSystolique(?int $systolique): self
    {
        $this->systolique = $systolique;

        return $this;
    }

    public function getDiastolique(): ?int
    {
        return $this->diastolique;
    }

    public function setDiastolique(?int $diastolique): self
    {
        $this->diastolique = $diastolique;

        return $this;
    }

    public function getTabagisme(): ?string
    {
        return $this->tabagisme;
    }

    public function setTabagisme(?string $tabagisme): self
    {
        $this->tabagisme = $tabagisme;

        return $this;
    }

    public function getPaquetAnnee(): ?int
    {
        return $this->paquetAnnee;
    }

    public function setPaquetAnnee(?int $paquetAnnee): self
    {
        $this->paquetAnnee = $paquetAnnee;

        return $this;
    }

    public function getAlcool(): ?string
    {
        return $this->alcool;
    }

    public function setAlcool(?string $alcool): self
    {
        $this->alcool = $alcool;

        return $this;
    }

    public function getPoids(): ?int
    {
        return $this->poids;
    }

    public function setPoids(?int $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getTaille(): ?int
    {
        return $this->taille;
    }

    public function setTaille(?int $taille): self
    {
        $this->taille = $taille;

        return $this;
    }

    public function getTourDeTaille(): ?int
    {
        return $this->tourDeTaille;
    }

    public function setTourDeTaille(?int $tourDeTaille): self
    {
        $this->tourDeTaille = $tourDeTaille;

        return $this;
    }

    public function getDiabete(): ?string
    {
        return $this->diabete;
    }

    public function setDiabete(?string $diabete): self
    {
        $this->diabete = $diabete;

        return $this;
    }

    public function getRetinopathie(): ?string
    {
        return $this->retinopathie;
    }

    public function setRetinopathie(?string $retinopathie): self
    {
        $this->retinopathie = $retinopathie;

        return $this;
    }

    public function getDateDiabete(): ?\DateTimeInterface
    {
        return $this->dateDiabete;
    }

    public function setDateDiabete(?\DateTimeInterface $dateDiabete): self
    {
        $this->dateDiabete = $dateDiabete;

        return $this;
    }

    public function getMicroalbuminurie(): ?string
    {
        return $this->microalbuminurie;
    }

    public function setMicroalbuminurie(?string $microalbuminurie): self
    {
        $this->microalbuminurie = $microalbuminurie;

        return $this;
    }

    public function getNeuropathie(): ?string
    {
        return $this->neuropathie;
    }

    public function setNeuropathie(?string $neuropathie): self
    {
        $this->neuropathie = $neuropathie;

        return $this;
    }

    public function getAntecedents(): ?Pack
    {
        return $this->antecedents;
    }

    public function setAntecedents(?Pack $antecedents): self
    {
        $this->antecedents = $antecedents;

        return $this;
    }

    public function getPrecisions(): ?Pack
    {
        return $this->precisions;
    }

    public function setPrecisions(?Pack $precisions): self
    {
        $this->precisions = $precisions;

        return $this;
    }
}
