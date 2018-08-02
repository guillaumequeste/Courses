<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HippodromeRepository")
 */
class Hippodrome
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $piste;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $corde;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $circonference;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $region;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $departement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $surnom;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;


    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $iframe_map;


    public function getId()
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPiste(): ?string
    {
        return $this->piste;
    }

    public function setPiste(string $piste): self
    {
        $this->piste = $piste;

        return $this;
    }

    public function getCorde(): ?string
    {
        return $this->corde;
    }

    public function setCorde(string $corde): self
    {
        $this->corde = $corde;

        return $this;
    }

    public function getCirconference(): ?string
    {
        return $this->circonference;
    }

    public function setCirconference(string $circonference): self
    {
        $this->circonference = $circonference;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(string $departement): self
    {
        $this->departement = $departement;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getSurnom(): ?string
    {
        return $this->surnom;
    }

    public function setSurnom(string $surnom): self
    {
        $this->surnom = $surnom;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getIframeMap(): ?string
    {
        return $this->iframe_map;
    }

    public function setIframeMap(?string $iframe_map): self
    {
        $this->iframe_map = $iframe_map;

        return $this;
    }

}
