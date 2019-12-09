<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PatientRepository")
 */
class Patient
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $prenom;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Utilisateur", inversedBy="patients")
     */
    private $utilisateurs;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"patient"})
     */
    private $sexe;

    /**
     * @ORM\Column(type="date", nullable=true)
     * @Groups({"patient"})
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Groups({"patient"})
     */
    private $age;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Cardiovasculaire", cascade={"persist", "remove"}, fetch="EAGER")
     * @Groups({"patient"})
     */
    private $cardiovasculaire;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Paraclinique", cascade={"persist", "remove"}, fetch="EAGER")
     * @Groups({"patient"})
     */
    private $paraclinique;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Suivi", cascade={"persist", "remove"}, fetch="EAGER")
     * @Groups({"patient"})
     */
    private $suivi;

    public function __construct()
    {
        $this->utilisateurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * @return Collection|Utilisateur[]
     */
    public function getUtilisateurs(): Collection
    {
        return $this->utilisateurs;
    }

    public function addUtilisateur(Utilisateur $utilisateur): self
    {
        if (!$this->utilisateurs->contains($utilisateur)) {
            $this->utilisateurs[] = $utilisateur;
        }

        return $this;
    }

    public function removeUtilisateur(Utilisateur $utilisateur): self
    {
        if ($this->utilisateurs->contains($utilisateur)) {
            $this->utilisateurs->removeElement($utilisateur);
        }

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(?string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(?\DateTimeInterface $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getCardiovasculaire(): ?Cardiovasculaire
    {
        return $this->cardiovasculaire;
    }

    public function setCardiovasculaire(?Cardiovasculaire $cardiovasculaire): self
    {
        $this->cardiovasculaire = $cardiovasculaire;

        return $this;
    }

    public function getSuivi(): ?Suivi
    {
        return $this->suivi;
    }

    public function setSuivi(?Suivi $suivi): self
    {
        $this->suivi = $suivi;

        return $this;
    }

    public function getParaclinique(): ?Paraclinique
    {
        return $this->paraclinique;
    }

    public function setParaclinique(?Paraclinique $paraclinique): self
    {
        $this->paraclinique = $paraclinique;

        return $this;
    }
}
