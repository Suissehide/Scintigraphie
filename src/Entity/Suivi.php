<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

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
     * @Groups({"patient"})
     */
    private $suivi;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Pack", cascade={"persist", "remove"}, fetch="EAGER")
     * @Groups({"patient"})
     */
    private $evenements;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Groups({"patient"})
     */
    private $dateScintigraphie;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"patient"})
     */
    private $fcRepos;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"patient"})
     */
    private $fcMax;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $taRepos;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $taPic;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $rythme;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $fractionRepos;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $fractionEffort;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $debitReposGlobal;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $debitRegadenosonGlobal;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Bullseye", cascade={"persist", "remove"}, fetch="EAGER")
     * @Groups({"patient"})
     */
    private $debitReposSegment;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Bullseye", cascade={"persist", "remove"}, fetch="EAGER")
     * @Groups({"patient"})
     */
    private $debitRegadenosonSegment;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Bullseye", cascade={"persist", "remove"}, fetch="EAGER")
     * @Groups({"patient"})
     */
    private $analyseReposSegment;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Bullseye", cascade={"persist", "remove"}, fetch="EAGER")
     * @Groups({"patient"})
     */
    private $analyseRegadenosonSegment;

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

    public function getDateScintigraphie(): ?\DateTimeInterface
    {
        return $this->dateScintigraphie;
    }

    public function setDateScintigraphie(?\DateTimeInterface $dateScintigraphie): self
    {
        $this->dateScintigraphie = $dateScintigraphie;

        return $this;
    }

    public function getFcRepos(): ?int
    {
        return $this->fcRepos;
    }

    public function setFcRepos(?int $fcRepos): self
    {
        $this->fcRepos = $fcRepos;

        return $this;
    }

    public function getFcMax(): ?int
    {
        return $this->fcMax;
    }

    public function setFcMax(?int $fcMax): self
    {
        $this->fcMax = $fcMax;

        return $this;
    }

    public function getTaRepos()
    {
        return $this->taRepos;
    }

    public function setTaRepos($taRepos): self
    {
        $this->taRepos = $taRepos;

        return $this;
    }

    public function getTaPic()
    {
        return $this->taPic;
    }

    public function setTaPic($taPic): self
    {
        $this->taPic = $taPic;

        return $this;
    }

    public function getRythme(): ?string
    {
        return $this->rythme;
    }

    public function setRythme(?string $rythme): self
    {
        $this->rythme = $rythme;

        return $this;
    }

    public function getFractionRepos(): ?string
    {
        return $this->fractionRepos;
    }

    public function setFractionRepos(?string $fractionRepos): self
    {
        $this->fractionRepos = $fractionRepos;

        return $this;
    }

    public function getFractionEffort(): ?string
    {
        return $this->fractionEffort;
    }

    public function setFractionEffort(?string $fractionEffort): self
    {
        $this->fractionEffort = $fractionEffort;

        return $this;
    }

    public function getDebitReposGlobal()
    {
        return $this->debitReposGlobal;
    }

    public function setDebitReposGlobal($debitReposGlobal): self
    {
        $this->debitReposGlobal = $debitReposGlobal;

        return $this;
    }

    public function getDebitRegadenosonGlobal()
    {
        return $this->debitRegadenosonGlobal;
    }

    public function setDebitRegadenosonGlobal($debitRegadenosonGlobal): self
    {
        $this->debitRegadenosonGlobal = $debitRegadenosonGlobal;

        return $this;
    }

    public function getDebitReposSegment(): ?Bullseye
    {
        return $this->debitReposSegment;
    }

    public function setDebitReposSegment(?Bullseye $debitReposSegment): self
    {
        $this->debitReposSegment = $debitReposSegment;

        return $this;
    }

    public function getDebitRegadenosonSegment(): ?Bullseye
    {
        return $this->debitRegadenosonSegment;
    }

    public function setDebitRegadenosonSegment(?Bullseye $debitRegadenosonSegment): self
    {
        $this->debitRegadenosonSegment = $debitRegadenosonSegment;

        return $this;
    }

    public function getAnalyseReposSegment(): ?Bullseye
    {
        return $this->analyseReposSegment;
    }

    public function setAnalyseReposSegment(?Bullseye $analyseReposSegment): self
    {
        $this->analyseReposSegment = $analyseReposSegment;

        return $this;
    }

    public function getAnalyseRegadenosonSegment(): ?Bullseye
    {
        return $this->analyseRegadenosonSegment;
    }

    public function setAnalyseRegadenosonSegment(?Bullseye $analyseRegadenosonSegment): self
    {
        $this->analyseRegadenosonSegment = $analyseRegadenosonSegment;

        return $this;
    }
}
