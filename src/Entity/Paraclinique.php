<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     */
    private $hba1c;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $ldl;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $hdl;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $triglycerides;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $creatininemie;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $dfg;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $microAlb;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $rapport;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $ipsDroit;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $ipsGauche;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $tbpiDroit;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $tbpiGauche;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $neuroesthesiometrie;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fcRepos;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fcMax;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $taRepos;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $taPic;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $fraction;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $debitReposGlobal;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2, nullable=true)
     */
    private $debitRegadenosonGlobal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $coronaireDroiteStenose;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $coronaireDroiteFFR;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ivaStenose;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ivaFFR;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $circonflexeStenose;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $circonflexeFFR;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $diagonaleStenose;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $diagonaleFFR;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $marginaleStenose;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $marginaleFFR;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pontageStenose;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pontageFFR;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $iec;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $betaBloquant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $antiAgregant;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $antiAldosterone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $antiDiabetique;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $insuline;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $diuretique;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Bullseye", cascade={"persist", "remove"})
     */
    private $debitReposSegment;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Bullseye", cascade={"persist", "remove"})
     */
    private $debitRegadenosonSegment;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Bullseye", cascade={"persist", "remove"})
     */
    private $analyseReposSegment;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Bullseye", cascade={"persist", "remove"})
     */
    private $analyseRegadenosonSegment;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $rythme;

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

    public function getFraction()
    {
        return $this->fraction;
    }

    public function setFraction($fraction): self
    {
        $this->fraction = $fraction;

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

    public function getCoronaireDroiteFFR(): ?string
    {
        return $this->coronaireDroiteFFR;
    }

    public function setCoronaireDroiteFFR(?string $coronaireDroiteFFR): self
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

    public function getIvaFFR(): ?string
    {
        return $this->ivaFFR;
    }

    public function setIvaFFR(?string $ivaFFR): self
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

    public function getCirconflexeFFR(): ?string
    {
        return $this->circonflexeFFR;
    }

    public function setCirconflexeFFR(?string $circonflexeFFR): self
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

    public function getDiagonaleFFR(): ?string
    {
        return $this->diagonaleFFR;
    }

    public function setDiagonaleFFR(?string $diagonaleFFR): self
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

    public function getMarginaleFFR(): ?string
    {
        return $this->marginaleFFR;
    }

    public function setMarginalFFR(?string $marginaleFFR): self
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

    public function getPontageFFR(): ?string
    {
        return $this->pontageFFR;
    }

    public function setPontageFFR(?string $pontageFFR): self
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

    public function setMarginaleFFR(?string $marginaleFFR): self
    {
        $this->marginaleFFR = $marginaleFFR;

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


}
