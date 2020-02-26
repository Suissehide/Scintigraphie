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

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ivaPourcentageRegdn;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ivaPourcentageRepos;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $ivaDebitRegdn;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $ivaDebitRepos;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $ivaReserve;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cxPourcentageRegdn;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cxPourcentageRepos;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $cxDebitRegdn;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $cxDebitRepos;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $cxReserve;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cdtePourcentageRegdn;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $cdtePourcentageRepos;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $cdteDebitRegdn;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $cdteDebitRepos;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $cdteReserve;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $totalPourcentageRegdn;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $totalPourcentageRepos;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $totalDebitRegdn;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $totalDebitRepos;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $totalReserve;

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
    
    public function getIvaPourcentageRegdn(): ?int
    {
        return $this->ivaPourcentageRegdn;
    }

    public function setIvaPourcentageRegdn(?int $ivaPourcentageRegdn): self
    {
        $this->ivaPourcentageRegdn = $ivaPourcentageRegdn;

        return $this;
    }

    public function getIvaPourcentageRepos(): ?int
    {
        return $this->ivaPourcentageRepos;
    }

    public function setIvaPourcentageRepos(?int $ivaPourcentageRepos): self
    {
        $this->ivaPourcentageRepos = $ivaPourcentageRepos;

        return $this;
    }

    public function getIvaDebitRegdn(): ?string
    {
        return $this->ivaDebitRegdn;
    }

    public function setIvaDebitRegdn(string $ivaDebitRegdn): self
    {
        $this->ivaDebitRegdn = $ivaDebitRegdn;

        return $this;
    }

    public function getIvaDebitRepos(): ?string
    {
        return $this->ivaDebitRepos;
    }

    public function setIvaDebitRepos(?string $ivaDebitRepos): self
    {
        $this->ivaDebitRepos = $ivaDebitRepos;

        return $this;
    }

    public function getIvaReserve(): ?string
    {
        return $this->ivaReserve;
    }

    public function setIvaReserve(?string $ivaReserve): self
    {
        $this->ivaReserve = $ivaReserve;

        return $this;
    }

    public function getCxPourcentageRegdn(): ?int
    {
        return $this->cxPourcentageRegdn;
    }

    public function setCxPourcentageRegdn(?int $cxPourcentageRegdn): self
    {
        $this->cxPourcentageRegdn = $cxPourcentageRegdn;

        return $this;
    }

    public function getCxPourcentageRepos(): ?int
    {
        return $this->cxPourcentageRepos;
    }

    public function setCxPourcentageRepos(?int $cxPourcentageRepos): self
    {
        $this->cxPourcentageRepos = $cxPourcentageRepos;

        return $this;
    }

    public function getCxDebitRegdn(): ?string
    {
        return $this->cxDebitRegdn;
    }

    public function setCxDebitRegdn(?string $cxDebitRegdn): self
    {
        $this->cxDebitRegdn = $cxDebitRegdn;

        return $this;
    }

    public function getCxDebitRepos(): ?string
    {
        return $this->cxDebitRepos;
    }

    public function setCxDebitRepos(string $cxDebitRepos): self
    {
        $this->cxDebitRepos = $cxDebitRepos;

        return $this;
    }

    public function getCxReserve(): ?string
    {
        return $this->cxReserve;
    }

    public function setCxReserve(?string $cxReserve): self
    {
        $this->cxReserve = $cxReserve;

        return $this;
    }

    public function getCdtePourcentageRegdn(): ?int
    {
        return $this->cdtePourcentageRegdn;
    }

    public function setCdtePourcentageRegdn(?int $cdtePourcentageRegdn): self
    {
        $this->cdtePourcentageRegdn = $cdtePourcentageRegdn;

        return $this;
    }

    public function getCdtePourcentageRepos(): ?int
    {
        return $this->cdtePourcentageRepos;
    }

    public function setCdtePourcentageRepos(?int $cdtePourcentageRepos): self
    {
        $this->cdtePourcentageRepos = $cdtePourcentageRepos;

        return $this;
    }

    public function getCdteDebitRegdn(): ?string
    {
        return $this->cdteDebitRegdn;
    }

    public function setCdteDebitRegdn(?string $cdteDebitRegdn): self
    {
        $this->cdteDebitRegdn = $cdteDebitRegdn;

        return $this;
    }

    public function getCdteDebitRepos(): ?string
    {
        return $this->cdteDebitRepos;
    }

    public function setCdteDebitRepos(?string $cdteDebitRepos): self
    {
        $this->cdteDebitRepos = $cdteDebitRepos;

        return $this;
    }

    public function getCdteReserve(): ?string
    {
        return $this->cdteReserve;
    }

    public function setCdteReserve(?string $cdteReserve): self
    {
        $this->cdteReserve = $cdteReserve;

        return $this;
    }

    public function getTotalPourcentageRegdn(): ?int
    {
        return $this->totalPourcentageRegdn;
    }

    public function setTotalPourcentageRegdn(?int $totalPourcentageRegdn): self
    {
        $this->totalPourcentageRegdn = $totalPourcentageRegdn;

        return $this;
    }

    public function getTotalPourcentageRepos(): ?int
    {
        return $this->totalPourcentageRepos;
    }

    public function setTotalPourcentageRepos(?int $totalPourcentageRepos): self
    {
        $this->totalPourcentageRepos = $totalPourcentageRepos;

        return $this;
    }

    public function getTotalDebitRegdn(): ?string
    {
        return $this->totalDebitRegdn;
    }

    public function setTotalDebitRegdn(?string $totalDebitRegdn): self
    {
        $this->totalDebitRegdn = $totalDebitRegdn;

        return $this;
    }

    public function getTotalDebitRepos(): ?string
    {
        return $this->totalDebitRepos;
    }

    public function setTotalDebitRepos(?string $totalDebitRepos): self
    {
        $this->totalDebitRepos = $totalDebitRepos;

        return $this;
    }

    public function getTotalReserve(): ?string
    {
        return $this->totalReserve;
    }

    public function setTotalReserve(?string $totalReserve): self
    {
        $this->totalReserve = $totalReserve;

        return $this;
    }
}
