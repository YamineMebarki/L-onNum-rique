<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* src/Entity/User.php */
class __TwigTemplate_bf5209691ed498fb9bb4823b55c9496e9181c2a2b53d9985595236b724158544 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Entity/User.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Entity/User.php"));

        // line 1
        echo "<?php

namespace App\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity;
use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\Common\\Collections\\Collection;
use App\\Entity\\Comment;

/**
 * @UniqueEntity(   fields= {\"email\"}, message=\"Désoler un compte existe deja pour cette adresse email\" )
 * @UniqueEntity(   fields= {\"username\"}, message=\"Désoler un compte existe deja pour ce pseudo\" )
 * @ORM\\Entity(repositoryClass=\"App\\Repository\\UserRepository\")
 */
class User implements  UserInterface
{
    /**
     * @ORM\\Id()
     * @ORM\\GeneratedValue()
     * @ORM\\Column(type=\"integer\")
     */
    private \$id;

    /**
     * @ORM\\Column(type=\"string\", length=255)
     */
    private \$username;

    /**
     * @ORM\\Column(type=\"string\", length=255)
     */
    private \$email;

    /**
     * @Assert\\Length(min=\"8\", minMessage=\"Votre mot de pass doit contenir minimum 8 caractéres\")
     * @ORM\\Column(type=\"string\", length=255)
     */
    private \$password;

    /**
     * @Assert\\EqualTo(propertyPath=\"password\", message=\"Vos mots de pass ne correspondent pas\")
     */
    public \$confirm_password;

    /**
     * @ORM\\Column(type=\"string\", length=255)
     */
    private \$role;

    /**
     * @ORM\\Column(type=\"integer\")
     */
    private \$age;

    /**
     * @ORM\\OneToMany(targetEntity=\"App\\Entity\\ArticleLike\", mappedBy=\"user_id\", orphanRemoval=true)
     */
    private \$articleLikes;

    public function __construct()
    {
        \$this->articleLikes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return \$this->id;
    }

    public function getUsername(): ?string
    {
        return \$this->username;
    }

    public function setUsername(string \$username): self
    {
        \$this->username = \$username;

        return \$this;
    }

    public function getEmail(): ?string
    {
        return \$this->email;
    }

    public function setEmail(string \$email): self
    {
        \$this->email = \$email;

        return \$this;
    }

    public function getPassword(): ?string
    {
        return \$this->password;
    }

    public function setPassword(string \$password): self
    {
        \$this->password = \$password;

        return \$this;
    }

    public function getRole(): ?string
    {
        return \$this->role;
    }

    public function setRole(string \$role): self
    {
        \$this->role = \$role;

        return \$this;
    }

    public function getAge(): ?int
    {
        return \$this->age;
    }

    public function setAge(int \$age): self
    {
        \$this->age = \$age;

        return \$this;
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
        return \$this->articleLikes;
    }

    public function addArticleLike(ArticleLike \$articleLike): self
    {
        if (!\$this->articleLikes->contains(\$articleLike)) {
            \$this->articleLikes[] = \$articleLike;
            \$articleLike->setUserId(\$this);
        }

        return \$this;
    }

    public function removeArticleLike(ArticleLike \$articleLike): self
    {
        if (\$this->articleLikes->contains(\$articleLike)) {
            \$this->articleLikes->removeElement(\$articleLike);
            // set the owning side to null (unless already changed)
            if (\$articleLike->getUserId() === \$this) {
                \$articleLike->setUserId(null);
            }
        }

        return \$this;
    }

}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "src/Entity/User.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace App\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity;
use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\Common\\Collections\\Collection;
use App\\Entity\\Comment;

/**
 * @UniqueEntity(   fields= {\"email\"}, message=\"Désoler un compte existe deja pour cette adresse email\" )
 * @UniqueEntity(   fields= {\"username\"}, message=\"Désoler un compte existe deja pour ce pseudo\" )
 * @ORM\\Entity(repositoryClass=\"App\\Repository\\UserRepository\")
 */
class User implements  UserInterface
{
    /**
     * @ORM\\Id()
     * @ORM\\GeneratedValue()
     * @ORM\\Column(type=\"integer\")
     */
    private \$id;

    /**
     * @ORM\\Column(type=\"string\", length=255)
     */
    private \$username;

    /**
     * @ORM\\Column(type=\"string\", length=255)
     */
    private \$email;

    /**
     * @Assert\\Length(min=\"8\", minMessage=\"Votre mot de pass doit contenir minimum 8 caractéres\")
     * @ORM\\Column(type=\"string\", length=255)
     */
    private \$password;

    /**
     * @Assert\\EqualTo(propertyPath=\"password\", message=\"Vos mots de pass ne correspondent pas\")
     */
    public \$confirm_password;

    /**
     * @ORM\\Column(type=\"string\", length=255)
     */
    private \$role;

    /**
     * @ORM\\Column(type=\"integer\")
     */
    private \$age;

    /**
     * @ORM\\OneToMany(targetEntity=\"App\\Entity\\ArticleLike\", mappedBy=\"user_id\", orphanRemoval=true)
     */
    private \$articleLikes;

    public function __construct()
    {
        \$this->articleLikes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return \$this->id;
    }

    public function getUsername(): ?string
    {
        return \$this->username;
    }

    public function setUsername(string \$username): self
    {
        \$this->username = \$username;

        return \$this;
    }

    public function getEmail(): ?string
    {
        return \$this->email;
    }

    public function setEmail(string \$email): self
    {
        \$this->email = \$email;

        return \$this;
    }

    public function getPassword(): ?string
    {
        return \$this->password;
    }

    public function setPassword(string \$password): self
    {
        \$this->password = \$password;

        return \$this;
    }

    public function getRole(): ?string
    {
        return \$this->role;
    }

    public function setRole(string \$role): self
    {
        \$this->role = \$role;

        return \$this;
    }

    public function getAge(): ?int
    {
        return \$this->age;
    }

    public function setAge(int \$age): self
    {
        \$this->age = \$age;

        return \$this;
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
        return \$this->articleLikes;
    }

    public function addArticleLike(ArticleLike \$articleLike): self
    {
        if (!\$this->articleLikes->contains(\$articleLike)) {
            \$this->articleLikes[] = \$articleLike;
            \$articleLike->setUserId(\$this);
        }

        return \$this;
    }

    public function removeArticleLike(ArticleLike \$articleLike): self
    {
        if (\$this->articleLikes->contains(\$articleLike)) {
            \$this->articleLikes->removeElement(\$articleLike);
            // set the owning side to null (unless already changed)
            if (\$articleLike->getUserId() === \$this) {
                \$articleLike->setUserId(null);
            }
        }

        return \$this;
    }

}
", "src/Entity/User.php", "/var/www/public/DevLaon/templates/src/Entity/User.php");
    }
}
