<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users", uniqueConstraints={@ORM\UniqueConstraint(name="u_mail", columns={"u_mail"}), @ORM\UniqueConstraint(name="u_id", columns={"u_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class Users
{
    /**
     * @var int
     *
     * @ORM\Column(name="u_id", type="integer", nullable=false, options={"unsigned"=true,"comment"="id"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uId;

    /**
     * @var string
     *
     * @ORM\Column(name="u_nom", type="string", length=10, nullable=false, options={"comment"="nom"})
     */
    private $uNom;

    /**
     * @var string
     *
     * @ORM\Column(name="u_prenom", type="string", length=10, nullable=false, options={"comment"="prénom"})
     */
    private $uPrenom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="u_adresse", type="string", length=50, nullable=true, options={"comment"="adresse postal"})
     */
    private $uAdresse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="u_cp", type="integer", nullable=true, options={"comment"="code postal"})
     */
    private $uCp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="u_city", type="string", length=10, nullable=true, options={"comment"="ville"})
     */
    private $uCity;

    /**
     * @var int|null
     *
     * @ORM\Column(name="u_tel", type="integer", nullable=true, options={"comment"="téléphone"})
     */
    private $uTel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="u_sexe", type="string", length=0, nullable=true)
     */
    private $uSexe;

    /**
     * @var string
     *
     * @ORM\Column(name="u_mail", type="string", length=254, nullable=false, options={"comment"="email "})
     */
    private $uMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="u_mail_hash", type="string", length=255, nullable=true)
     */
    private $uMailHash;

    /**
     * @var int
     *
     * @ORM\Column(name="u_mail_confirm", type="integer", nullable=false)
     */
    private $uMailConfirm = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="role", type="integer", nullable=false, options={"comment"="role 0 client 1 vendeur"})
     */
    private $role = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="u_password", type="string", length=60, nullable=false, options={"comment"="mot de passe"})
     */
    private $uPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="u_hash", type="string", length=255, nullable=false, options={"comment"="sel"})
     */
    private $uHash;

    /**
     * @var string|null
     *
     * @ORM\Column(name="u_jeton_connect", type="string", length=60, nullable=true, options={"comment"="jeton de connexion"})
     */
    private $uJetonConnect;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="u_d_create", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP","comment"="date de création du compte"})
     */
    private $uDCreate = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="u_d_connect", type="datetime", nullable=true, options={"comment"="date de connection"})
     */
    private $uDConnect;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="u_d_test_connect", type="datetime", nullable=true, options={"comment"="date de teste de connection si échoué"})
     */
    private $uDTestConnect;

    /**
     * @var int
     *
     * @ORM\Column(name="u_essai_connect", type="integer", nullable=false, options={"comment"="nombre essai connexion"})
     */
    private $uEssaiConnect = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="u_d_reset", type="datetime", nullable=true, options={"comment"="date de reste password"})
     */
    private $uDReset;

    /**
     * @var string|null
     *
     * @ORM\Column(name="u_reset_hash", type="string", length=40, nullable=true, options={"fixed"=true,"comment"="hash reset  mot de passe"})
     */
    private $uResetHash;

    public function getUId(): ?int
    {
        return $this->uId;
    }

    public function getUNom(): ?string
    {
        return $this->uNom;
    }

    public function setUNom(string $uNom): self
    {
        $this->uNom = $uNom;

        return $this;
    }

    public function getUPrenom(): ?string
    {
        return $this->uPrenom;
    }

    public function setUPrenom(string $uPrenom): self
    {
        $this->uPrenom = $uPrenom;

        return $this;
    }

    public function getUAdresse(): ?string
    {
        return $this->uAdresse;
    }

    public function setUAdresse(?string $uAdresse): self
    {
        $this->uAdresse = $uAdresse;

        return $this;
    }

    public function getUCp(): ?int
    {
        return $this->uCp;
    }

    public function setUCp(?int $uCp): self
    {
        $this->uCp = $uCp;

        return $this;
    }

    public function getUCity(): ?string
    {
        return $this->uCity;
    }

    public function setUCity(?string $uCity): self
    {
        $this->uCity = $uCity;

        return $this;
    }

    public function getUTel(): ?int
    {
        return $this->uTel;
    }

    public function setUTel(?int $uTel): self
    {
        $this->uTel = $uTel;

        return $this;
    }

    public function getUSexe(): ?string
    {
        return $this->uSexe;
    }

    public function setUSexe(?string $uSexe): self
    {
        $this->uSexe = $uSexe;

        return $this;
    }

    public function getUMail(): ?string
    {
        return $this->uMail;
    }

    public function setUMail(string $uMail): self
    {
        $this->uMail = $uMail;

        return $this;
    }

    public function getUMailHash(): ?string
    {
        return $this->uMailHash;
    }

    public function setUMailHash(?string $uMailHash): self
    {
        $this->uMailHash = $uMailHash;

        return $this;
    }

    public function getUMailConfirm(): ?int
    {
        return $this->uMailConfirm;
    }

    public function setUMailConfirm(int $uMailConfirm): self
    {
        $this->uMailConfirm = $uMailConfirm;

        return $this;
    }

    public function getRole(): ?int
    {
        return $this->role;
    }

    public function setRole(int $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getUPassword(): ?string
    {
        return $this->uPassword;
    }

    public function setUPassword(string $uPassword): self
    {
        $this->uPassword = $uPassword;

        return $this;
    }

    public function getUHash(): ?string
    {
        return $this->uHash;
    }

    public function setUHash(string $uHash): self
    {
        $this->uHash = $uHash;

        return $this;
    }

    public function getUJetonConnect(): ?string
    {
        return $this->uJetonConnect;
    }

    public function setUJetonConnect(?string $uJetonConnect): self
    {
        $this->uJetonConnect = $uJetonConnect;

        return $this;
    }

    public function getUDCreate(): ?\DateTimeInterface
    {
        return $this->uDCreate;
    }

    public function setUDCreate(\DateTimeInterface $uDCreate): self
    {
        $this->uDCreate = $uDCreate;

        return $this;
    }

    public function getUDConnect(): ?\DateTimeInterface
    {
        return $this->uDConnect;
    }

    public function setUDConnect(?\DateTimeInterface $uDConnect): self
    {
        $this->uDConnect = $uDConnect;

        return $this;
    }

    public function getUDTestConnect(): ?\DateTimeInterface
    {
        return $this->uDTestConnect;
    }

    public function setUDTestConnect(?\DateTimeInterface $uDTestConnect): self
    {
        $this->uDTestConnect = $uDTestConnect;

        return $this;
    }

    public function getUEssaiConnect(): ?int
    {
        return $this->uEssaiConnect;
    }

    public function setUEssaiConnect(int $uEssaiConnect): self
    {
        $this->uEssaiConnect = $uEssaiConnect;

        return $this;
    }

    public function getUDReset(): ?\DateTimeInterface
    {
        return $this->uDReset;
    }

    public function setUDReset(?\DateTimeInterface $uDReset): self
    {
        $this->uDReset = $uDReset;

        return $this;
    }

    public function getUResetHash(): ?string
    {
        return $this->uResetHash;
    }

    public function setUResetHash(?string $uResetHash): self
    {
        $this->uResetHash = $uResetHash;

        return $this;
    }


}
