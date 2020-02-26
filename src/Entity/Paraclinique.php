<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ParacliniqueRepository")
 */
class Paraclinique
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $hba1c;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $ldl;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $hdl;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $triglycerides;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $creatininemie;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $dfg;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $microAlb;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $rapport;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $ipsDroit;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $ipsGauche;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $tbpiDroit;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $tbpiGauche;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $neuroesthesiometrie;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $coronaireDroiteStenose;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $coronaireDroiteFFR;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $ivaStenose;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $ivaFFR;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $circonflexeStenose;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $circonflexeFFR;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $diagonaleStenose;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $diagonaleFFR;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $marginaleStenose;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $marginaleFFR;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $pontageStenose;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $pontageFFR;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $iec;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $betaBloquant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $antiAgregant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $antiAldosterone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $antiDiabetique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $insuline;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $diuretique;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $rythme;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $coronaireDroiteCMR;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $ivaCMR;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $circonflexeCMR;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $diagonaleCMR;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $marginaleCMR;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     * @Groups({"patient"})
     */
    private $pontageCMR;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"patient"})
     */
    private $coronaireDroiteIMR;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"patient"})
     */
    private $ivaIMR;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"patient"})
     */
    private $circonflexeIMR;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"patient"})
     */
    private $diagonaleIMR;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"patient"})
     */
    private $marginaleIMR;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"patient"})
     */
    private $pontageIMR;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Groups({"patient"})
     */
    private $dateCoronarographie;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Groups({"patient"})
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $fasekas;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $avc;

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

    public function getHba1c()
    {
        return $this->hba1c;
    }

    public function setHba1c($hba1c): self
    {
        $this->hba1c = $hba1c;

        return $this;
    }

    public function getLdl()
    {
        return $this->ldl;
    }

    public function setLdl($ldl): self
    {
        $this->ldl = $ldl;

        return $this;
    }

    public function getHdl()
    {
        return $this->hdl;
    }

    public function setHdl($hdl): self
    {
        $this->hdl = $hdl;

        return $this;
    }

    public function getTriglycerides()
    {
        return $this->triglycerides;
    }

    public function setTriglycerides($triglycerides): self
    {
        $this->triglycerides = $triglycerides;

        return $this;
    }

    public function getCreatininemie()
    {
        return $this->creatininemie;
    }

    public function setCreatininémie($creatininemie): self
    {
        $this->creatininemie = $creatininemie;

        return $this;
    }

    public function getDfg()
    {
        return $this->dfg;
    }

    public function setDfg($dfg): self
    {
        $this->dfg = $dfg;

        return $this;
    }

    public function getMicroAlb(): ?string
    {
        return $this->microAlb;
    }

    public function setMicroAlb(?string $microAlb): self
    {
        $this->microAlb = $microAlb;

        return $this;
    }

    public function getRapport(): ?string
    {
        return $this->rapport;
    }

    public function setRapport(?string $rapport): self
    {
        $this->rapport = $rapport;

        return $this;
    }

    public function getIpsDroit()
    {
        return $this->ipsDroit;
    }

    public function setIpsDroit($ipsDroit): self
    {
        $this->ipsDroit = $ipsDroit;

        return $this;
    }

    public function getIpsGauche()
    {
        return $this->ipsGauche;
    }

    public function setIpsGauche($ipsGauche): self
    {
        $this->ipsGauche = $ipsGauche;

        return $this;
    }

    public function getTbpiDroit()
    {
        return $this->tbpiDroit;
    }

    public function setTbpiDroit($tbpiDroit): self
    {
        $this->tbpiDroit = $tbpiDroit;

        return $this;
    }

    public function getTbpiGauche()
    {
        return $this->tbpiGauche;
    }

    public function setTbpiGauche($tbpiGauche): self
    {
        $this->tbpiGauche = $tbpiGauche;

        return $this;
    }

    public function getNeuroesthesiometrie()
    {
        return $this->neuroesthesiometrie;
    }

    public function setNeuroesthesiometrie($neuroesthesiometrie): self
    {
        $this->neuroesthesiometrie = $neuroesthesiometrie;

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

    public function getCoronaireDroiteStenose(): ?string
    {
        return $this->coronaireDroiteStenose;
    }

    public function setCoronaireDroiteStenose(?string $coronaireDroiteStenose): self
    {
        $this->coronaireDroiteStenose = $coronaireDroiteStenose;

        return $this;
    }

    public function getCoronaireDroiteFFR()
    {
        return $this->coronaireDroiteFFR;
    }

    public function setCoronaireDroiteFFR($coronaireDroiteFFR): self
    {
        $this->coronaireDroiteFFR = $coronaireDroiteFFR;

        return $this;
    }

    public function getIvaStenose(): ?string
    {
        return $this->ivaStenose;
    }

    public function setIvaStenose(?string $ivaStenose): self
    {
        $this->ivaStenose = $ivaStenose;

        return $this;
    }

    public function getIvaFFR()
    {
        return $this->ivaFFR;
    }

    public function setIvaFFR($ivaFFR): self
    {
        $this->ivaFFR = $ivaFFR;

        return $this;
    }

    public function getCirconflexeStenose(): ?string
    {
        return $this->circonflexeStenose;
    }

    public function setCirconflexeStenose(?string $circonflexeStenose): self
    {
        $this->circonflexeStenose = $circonflexeStenose;

        return $this;
    }

    public function getCirconflexeFFR()
    {
        return $this->circonflexeFFR;
    }

    public function setCirconflexeFFR($circonflexeFFR): self
    {
        $this->circonflexeFFR = $circonflexeFFR;

        return $this;
    }

    public function getDiagonaleStenose(): ?string
    {
        return $this->diagonaleStenose;
    }

    public function setDiagonaleStenose(?string $diagonaleStenose): self
    {
        $this->diagonaleStenose = $diagonaleStenose;

        return $this;
    }

    public function getDiagonaleFFR()
    {
        return $this->diagonaleFFR;
    }

    public function setDiagonaleFFR($diagonaleFFR): self
    {
        $this->diagonaleFFR = $diagonaleFFR;

        return $this;
    }

    public function getMarginaleStenose(): ?string
    {
        return $this->marginaleStenose;
    }

    public function setMarginaleStenose(?string $marginaleStenose): self
    {
        $this->marginaleStenose = $marginaleStenose;

        return $this;
    }

    public function getMarginaleFFR()
    {
        return $this->marginaleFFR;
    }

    public function setMarginaleFFR($marginaleFFR): self
    {
        $this->marginaleFFR = $marginaleFFR;

        return $this;
    }

    public function getPontageStenose(): ?string
    {
        return $this->pontageStenose;
    }

    public function setPontageStenose(?string $pontageStenose): self
    {
        $this->pontageStenose = $pontageStenose;

        return $this;
    }

    public function getPontageFFR()
    {
        return $this->pontageFFR;
    }

    public function setPontageFFR($pontageFFR): self
    {
        $this->pontageFFR = $pontageFFR;

        return $this;
    }

    public function getIec(): ?string
    {
        return $this->iec;
    }

    public function setIec(?string $iec): self
    {
        $this->iec = $iec;

        return $this;
    }

    public function getBetaBloquant(): ?string
    {
        return $this->betaBloquant;
    }

    public function setBetaBloquant(?string $betaBloquant): self
    {
        $this->betaBloquant = $betaBloquant;

        return $this;
    }

    public function getAntiAgregant(): ?string
    {
        return $this->antiAgregant;
    }

    public function setAntiAgregant(?string $antiAgregant): self
    {
        $this->antiAgregant = $antiAgregant;

        return $this;
    }

    public function getAntiAldosterone(): ?string
    {
        return $this->antiAldosterone;
    }

    public function setAntiAldosterone(?string $antiAldosterone): self
    {
        $this->antiAldosterone = $antiAldosterone;

        return $this;
    }

    public function getAntiDiabetique(): ?string
    {
        return $this->antiDiabetique;
    }

    public function setAntiDiabetique(?string $antiDiabetique): self
    {
        $this->antiDiabetique = $antiDiabetique;

        return $this;
    }

    public function getInsuline(): ?string
    {
        return $this->insuline;
    }

    public function setInsuline(?string $insuline): self
    {
        $this->insuline = $insuline;

        return $this;
    }

    public function getDiuretique(): ?string
    {
        return $this->diuretique;
    }

    public function setDiuretique(?string $diuretique): self
    {
        $this->diuretique = $diuretique;

        return $this;
    }

    public function setCreatininemie($creatininemie): self
    {
        $this->creatininemie = $creatininemie;

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

    public function getRythme(): ?string
    {
        return $this->rythme;
    }

    public function setRythme(?string $rythme): self
    {
        $this->rythme = $rythme;

        return $this;
    }

    public function getCoronaireDroiteCMR(): ?string
    {
        return $this->coronaireDroiteCMR;
    }

    public function setCoronaireDroiteCMR(?string $coronaireDroiteCMR): self
    {
        $this->coronaireDroiteCMR = $coronaireDroiteCMR;

        return $this;
    }

    public function getIvaCMR(): ?string
    {
        return $this->ivaCMR;
    }

    public function setIvaCMR(?string $ivaCMR): self
    {
        $this->ivaCMR = $ivaCMR;

        return $this;
    }

    public function getCirconflexeCMR(): ?string
    {
        return $this->circonflexeCMR;
    }

    public function setCirconflexeCMR(?string $circonflexeCMR): self
    {
        $this->circonflexeCMR = $circonflexeCMR;

        return $this;
    }

    public function getDiagonaleCMR(): ?string
    {
        return $this->diagonaleCMR;
    }

    public function setDiagonaleCMR(?string $diagonaleCMR): self
    {
        $this->diagonaleCMR = $diagonaleCMR;

        return $this;
    }

    public function getMarginaleCMR(): ?string
    {
        return $this->marginaleCMR;
    }

    public function setMarginaleCMR(?string $marginaleCMR): self
    {
        $this->marginaleCMR = $marginaleCMR;

        return $this;
    }

    public function getPontageCMR(): ?string
    {
        return $this->pontageCMR;
    }

    public function setPontageCMR(?string $pontageCMR): self
    {
        $this->pontageCMR = $pontageCMR;

        return $this;
    }

    public function getCoronaireDroiteIMR(): ?int
    {
        return $this->coronaireDroiteIMR;
    }

    public function setCoronaireDroiteIMR(?int $coronaireDroiteIMR): self
    {
        $this->coronaireDroiteIMR = $coronaireDroiteIMR;

        return $this;
    }

    public function getIvaIMR(): ?int
    {
        return $this->ivaIMR;
    }

    public function setIvaIMR(?int $ivaIMR): self
    {
        $this->ivaIMR = $ivaIMR;

        return $this;
    }

    public function getCirconflexeIMR(): ?int
    {
        return $this->circonflexeIMR;
    }

    public function setCirconflexeIMR(?int $circonflexeIMR): self
    {
        $this->circonflexeIMR = $circonflexeIMR;

        return $this;
    }

    public function getDiagonaleIMR(): ?int
    {
        return $this->diagonaleIMR;
    }

    public function setDiagonaleIMR(?int $diagonaleIMR): self
    {
        $this->diagonaleIMR = $diagonaleIMR;

        return $this;
    }

    public function getMarginaleIMR(): ?int
    {
        return $this->marginaleIMR;
    }

    public function setMarginaleIMR(?int $marginaleIMR): self
    {
        $this->marginaleIMR = $marginaleIMR;

        return $this;
    }

    public function getPontageIMR(): ?int
    {
        return $this->pontageIMR;
    }

    public function setPontageIMR(?int $pontageIMR): self
    {
        $this->pontageIMR = $pontageIMR;

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

    public function getDateCoronarographie(): ?\DateTimeInterface
    {
        return $this->dateCoronarographie;
    }

    public function setDateCoronarographie(?\DateTimeInterface $dateCoronarographie): self
    {
        $this->dateCoronarographie = $dateCoronarographie;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getFasekas(): ?string
    {
        return $this->fasekas;
    }

    public function setFasekas(?string $fasekas): self
    {
        $this->fasekas = $fasekas;

        return $this;
    }

    public function getAvc(): ?string
    {
        return $this->avc;
    }

    public function setAvc(?string $avc): self
    {
        $this->avc = $avc;

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
