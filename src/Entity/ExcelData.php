<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExcelDataRepository")
 */
class ExcelData
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $compteAffaire;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $compteEvenement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $compteDernierEvenement;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numeroFiche;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelleCivilite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $proprietaireVehicule;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroNomVoie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $complementAdresse1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $codePostal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephoneDomicile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephonePortable;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephoneJob;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateMiseCirculation;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateAchat;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateDernierEvenement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelleMarque;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelleModele;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $version;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $immatriculation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typeProspect;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $kilometrage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelleEnergie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vendeurVN;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vendeurVO;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentaireFacturation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typeVNVO;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numeroDossierVNVO;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $intermediaireVenteVN;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateEvenement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $origineEvenement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompteAffaire(): ?string
    {
        return $this->compteAffaire;
    }

    public function setCompteAffaire(?string $compteAffaire): self
    {
        $this->compteAffaire = $compteAffaire;

        return $this;
    }

    public function getCompteEvenement(): ?string
    {
        return $this->compteEvenement;
    }

    public function setCompteEvenement(?string $compteEvenement): self
    {
        $this->compteEvenement = $compteEvenement;

        return $this;
    }

    public function getCompteDernierEvenement(): ?string
    {
        return $this->compteDernierEvenement;
    }

    public function setCompteDernierEvenement(?string $compteDernierEvenement): self
    {
        $this->compteDernierEvenement = $compteDernierEvenement;

        return $this;
    }

    public function getNumeroFiche(): ?int
    {
        return $this->numeroFiche;
    }

    public function setNumeroFiche(?int $numeroFiche): self
    {
        $this->numeroFiche = $numeroFiche;

        return $this;
    }

    public function getLibelleCivilite(): ?string
    {
        return $this->libelleCivilite;
    }

    public function setLibelleCivilite(?string $libelleCivilite): self
    {
        $this->libelleCivilite = $libelleCivilite;

        return $this;
    }

    public function getProprietaireVehicule(): ?string
    {
        return $this->proprietaireVehicule;
    }

    public function setProprietaireVehicule(?string $proprietaireVehicule): self
    {
        $this->proprietaireVehicule = $proprietaireVehicule;

        return $this;
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

    public function getNumeroNomVoie(): ?string
    {
        return $this->numeroNomVoie;
    }

    public function setNumeroNomVoie(?string $numeroNomVoie): self
    {
        $this->numeroNomVoie = $numeroNomVoie;

        return $this;
    }

    public function getComplementAdresse1(): ?string
    {
        return $this->complementAdresse1;
    }

    public function setComplementAdresse1(?string $complementAdresse1): self
    {
        $this->complementAdresse1 = $complementAdresse1;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(?int $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelephoneDomicile(): ?string
    {
        return $this->telephoneDomicile;
    }

    public function setTelephoneDomicile(?string $telephoneDomicile): self
    {
        $this->telephoneDomicile = $telephoneDomicile;

        return $this;
    }

    public function getTelephonePortable(): ?string
    {
        return $this->telephonePortable;
    }

    public function setTelephonePortable(?string $telephonePortable): self
    {
        $this->telephonePortable = $telephonePortable;

        return $this;
    }

    public function getTelephoneJob(): ?string
    {
        return $this->telephoneJob;
    }

    public function setTelephoneJob(?string $telephoneJob): self
    {
        $this->telephoneJob = $telephoneJob;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateMiseCirculation(): ?\DateTimeInterface
    {
        return $this->dateMiseCirculation;
    }

    public function setDateMiseCirculation(?\DateTimeInterface $dateMiseCirculation): self
    {
        $this->dateMiseCirculation = $dateMiseCirculation;

        return $this;
    }

    public function getDateAchat(): ?\DateTimeInterface
    {
        return $this->dateAchat;
    }

    public function setDateAchat(?\DateTimeInterface $dateAchat): self
    {
        $this->dateAchat = $dateAchat;

        return $this;
    }

    public function getDateDernierEvenement(): ?\DateTimeInterface
    {
        return $this->dateDernierEvenement;
    }

    public function setDateDernierEvenement(?\DateTimeInterface $dateDernierEvenement): self
    {
        $this->dateDernierEvenement = $dateDernierEvenement;

        return $this;
    }

    public function getLibelleMarque(): ?string
    {
        return $this->libelleMarque;
    }

    public function setLibelleMarque(?string $libelleMarque): self
    {
        $this->libelleMarque = $libelleMarque;

        return $this;
    }

    public function getLibelleModele(): ?string
    {
        return $this->libelleModele;
    }

    public function setLibelleModele(?string $libelleModele): self
    {
        $this->libelleModele = $libelleModele;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin(?string $vin): self
    {
        $this->vin = $vin;

        return $this;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(?string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getTypeProspect(): ?string
    {
        return $this->typeProspect;
    }

    public function setTypeProspect(?string $typeProspect): self
    {
        $this->typeProspect = $typeProspect;

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->kilometrage;
    }

    public function setKilometrage(?int $kilometrage): self
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getLibelleEnergie(): ?string
    {
        return $this->libelleEnergie;
    }

    public function setLibelleEnergie(?string $libelleEnergie): self
    {
        $this->libelleEnergie = $libelleEnergie;

        return $this;
    }

    public function getVendeurVN(): ?string
    {
        return $this->vendeurVN;
    }

    public function setVendeurVN(?string $vendeurVN): self
    {
        $this->vendeurVN = $vendeurVN;

        return $this;
    }

    public function getVendeurVO(): ?string
    {
        return $this->vendeurVO;
    }

    public function setVendeurVO(?string $vendeurVO): self
    {
        $this->vendeurVO = $vendeurVO;

        return $this;
    }

    public function getCommentaireFacturation(): ?string
    {
        return $this->commentaireFacturation;
    }

    public function setCommentaireFacturation(?string $commentaireFacturation): self
    {
        $this->commentaireFacturation = $commentaireFacturation;

        return $this;
    }

    public function getTypeVNVO(): ?string
    {
        return $this->typeVNVO;
    }

    public function setTypeVNVO(?string $typeVNVO): self
    {
        $this->typeVNVO = $typeVNVO;

        return $this;
    }

    public function getNumeroDossierVNVO(): ?string
    {
        return $this->numeroDossierVNVO;
    }

    public function setNumeroDossierVNVO(?string $numeroDossierVNVO): self
    {
        $this->numeroDossierVNVO = $numeroDossierVNVO;

        return $this;
    }

    public function getIntermediaireVenteVN(): ?string
    {
        return $this->intermediaireVenteVN;
    }

    public function setIntermediaireVenteVN(?string $intermediaireVenteVN): self
    {
        $this->intermediaireVenteVN = $intermediaireVenteVN;

        return $this;
    }

    public function getDateEvenement(): ?\DateTimeInterface
    {
        return $this->dateEvenement;
    }

    public function setDateEvenement(?\DateTimeInterface $dateEvenement): self
    {
        $this->dateEvenement = $dateEvenement;

        return $this;
    }

    public function getOrigineEvenement(): ?string
    {
        return $this->origineEvenement;
    }

    public function setOrigineEvenement(?string $origineEvenement): self
    {
        $this->origineEvenement = $origineEvenement;

        return $this;
    }
}
