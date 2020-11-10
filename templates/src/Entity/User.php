<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\Comment;

/**
 * @UniqueEntity(   fields= {"email"}, message="Désoler un compte existe deja pour cette adresse email" )
 * @UniqueEntity(   fields= {"username"}, message="Désoler un compte existe deja pour ce pseudo" )
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements  UserInterface
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
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @Assert\Length(min="8", minMessage="Votre mot de pass doit contenir minimum 8 caractéres")
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @Assert\EqualTo(propertyPath="password", message="Vos mots de pass ne correspondent pas")
     */
    public $confirm_password;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $role;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ArticleLike", mappedBy="user_id", orphanRemoval=true)
     */
    private $articleLikes;

    public function __construct()
    {
        $this->articleLikes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function eraseCredentials()
    {

    }

    public function getSalt()
    {

    }

    public function  getRoles()
    {
        return ['ROLE_USER'];
    }

    /**
     * @return Collection|ArticleLike[]
     */
    public function getArticleLikes(): Collection
    {
        return $this->articleLikes;
    }

    public function addArticleLike(ArticleLike $articleLike): self
    {
        if (!$this->articleLikes->contains($articleLike)) {
            $this->articleLikes[] = $articleLike;
            $articleLike->setUserId($this);
        }

        return $this;
    }

    public function removeArticleLike(ArticleLike $articleLike): self
    {
        if ($this->articleLikes->contains($articleLike)) {
            $this->articleLikes->removeElement($articleLike);
            // set the owning side to null (unless already changed)
            if ($articleLike->getUserId() === $this) {
                $articleLike->setUserId(null);
            }
        }

        return $this;
    }

}
