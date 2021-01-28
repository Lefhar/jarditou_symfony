<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 *
 * @ORM\Table(name="produits", uniqueConstraints={@ORM\UniqueConstraint(name="idx_pro_ref", columns={"pro_ref"})}, indexes={@ORM\Index(name="fk_produits_cat_id", columns={"pro_cat_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProduitsRepository")
 */
class Produits
{
    /**
     * @var int
     *
     * @ORM\Column(name="pro_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="Clé de la table produits"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $proId;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_ref", type="string", length=10, nullable=false, options={"comment"="Référence produit"})
     */
    private $proRef;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_libelle", type="string", length=200, nullable=false, options={"comment"="Nom du produit"})
     */
    private $proLibelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pro_description", type="string", length=1000, nullable=true, options={"comment"="Description du produit"})
     */
    private $proDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="pro_prix", type="decimal", precision=6, scale=2, nullable=false, options={"comment"="Prix "})
     */
    private $proPrix;

    /**
     * @var int
     *
     * @ORM\Column(name="pro_stock", type="integer", nullable=false, options={"comment"="Nombre d'unités en stock"})
     */
    private $proStock = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="pro_couleur", type="string", length=30, nullable=true, options={"comment"="Couleur"})
     */
    private $proCouleur;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pro_photo", type="string", length=4, nullable=true, options={"default"="jpg","comment"="Extension de la photo"})
     */
    private $proPhoto = 'jpg';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pro_d_ajout", type="date", nullable=false, options={"comment"="Date d'ajout"})
     */
    private $proDAjout;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pro_d_modif", type="datetime", nullable=true, options={"comment"="Date de modification"})
     */
    private $proDModif;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="pro_bloque", type="boolean", nullable=true, options={"comment"="Bloquer le produit à la vente"})
     */
    private $proBloque;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pro_cat_id", referencedColumnName="cat_id")
     * })
     */
    private $proCat;

    public function getProId(): ?int
    {
        return $this->proId;
    }

    public function getProRef(): ?string
    {
        return $this->proRef;
    }

    public function setProRef(string $proRef): self
    {
        $this->proRef = $proRef;

        return $this;
    }

    public function getProLibelle(): ?string
    {
        return $this->proLibelle;
    }

    public function setProLibelle(string $proLibelle): self
    {
        $this->proLibelle = $proLibelle;

        return $this;
    }

    public function getProDescription(): ?string
    {
        return $this->proDescription;
    }

    public function setProDescription(?string $proDescription): self
    {
        $this->proDescription = $proDescription;

        return $this;
    }

    public function getProPrix(): ?string
    {
        return $this->proPrix;
    }

    public function setProPrix(string $proPrix): self
    {
        $this->proPrix = $proPrix;

        return $this;
    }

    public function getProStock(): ?int
    {
        return $this->proStock;
    }

    public function setProStock(int $proStock): self
    {
        $this->proStock = $proStock;

        return $this;
    }

    public function getProCouleur(): ?string
    {
        return $this->proCouleur;
    }

    public function setProCouleur(?string $proCouleur): self
    {
        $this->proCouleur = $proCouleur;

        return $this;
    }

    public function getProPhoto(): ?string
    {
        return $this->proPhoto;
    }

    public function setProPhoto(?string $proPhoto): self
    {
        $this->proPhoto = $proPhoto;

        return $this;
    }

    public function getProDAjout(): ?\DateTimeInterface
    {
        return $this->proDAjout;
    }

    public function setProDAjout(\DateTimeInterface $proDAjout): self
    {
        $this->proDAjout = $proDAjout;

        return $this;
    }

    public function getProDModif(): ?\DateTimeInterface
    {
        return $this->proDModif;
    }

    public function setProDModif(?\DateTimeInterface $proDModif): self
    {
        $this->proDModif = $proDModif;

        return $this;
    }

    public function getProBloque(): ?bool
    {
        return $this->proBloque;
    }

    public function setProBloque(?bool $proBloque): self
    {
        $this->proBloque = $proBloque;

        return $this;
    }

    public function getProCat(): ?Categories
    {
        return $this->proCat;
    }

    public function setProCat(?Categories $proCat): self
    {
        $this->proCat = $proCat;

        return $this;
    }


}
