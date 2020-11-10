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

/* src/Entity/ArticleLike.php */
class __TwigTemplate_cd448e2534c1c4828d3d13342c111c4e83d15e41ddedf85900144ce580c1144f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Entity/ArticleLike.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Entity/ArticleLike.php"));

        // line 1
        echo "<?php

namespace App\\Entity;

use Doctrine\\ORM\\Mapping as ORM;

/**
 * @ORM\\Entity(repositoryClass=\"App\\Repository\\ArticleLikeRepository\")
 */
class ArticleLike
{
    /**
     * @ORM\\Id()
     * @ORM\\GeneratedValue()
     * @ORM\\Column(type=\"integer\")
     */
    private \$id;

    /**
     * @ORM\\ManyToOne(targetEntity=\"App\\Entity\\Article\", inversedBy=\"articleLikes\")
     */
    private \$article_id;

    /**
     * @ORM\\ManyToOne(targetEntity=\"App\\Entity\\User\", inversedBy=\"articleLikes\")
     */
    private \$user_id;

    /**
     * @ORM\\Column(type=\"datetime\")
     */
    private \$createdAt;

    public function getId(): ?int
    {
        return \$this->id;
    }

    public function getArticleId(): ?Article
    {
        return \$this->article_id;
    }

    public function setArticleId(?Article \$article_id): self
    {
        \$this->article_id = \$article_id;

        return \$this;
    }

    public function getUserId(): ?User
    {
        return \$this->user_id;
    }

    public function setUserId(?User \$user_id): self
    {
        \$this->user_id = \$user_id;

        return \$this;
    }

    public function getCreatedAt(): ?\\DateTimeInterface
    {
        return \$this->createdAt;
    }

    public function setCreatedAt(\\DateTimeInterface \$createdAt): self
    {
        \$this->createdAt = \$createdAt;

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "src/Entity/ArticleLike.php";
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

/**
 * @ORM\\Entity(repositoryClass=\"App\\Repository\\ArticleLikeRepository\")
 */
class ArticleLike
{
    /**
     * @ORM\\Id()
     * @ORM\\GeneratedValue()
     * @ORM\\Column(type=\"integer\")
     */
    private \$id;

    /**
     * @ORM\\ManyToOne(targetEntity=\"App\\Entity\\Article\", inversedBy=\"articleLikes\")
     */
    private \$article_id;

    /**
     * @ORM\\ManyToOne(targetEntity=\"App\\Entity\\User\", inversedBy=\"articleLikes\")
     */
    private \$user_id;

    /**
     * @ORM\\Column(type=\"datetime\")
     */
    private \$createdAt;

    public function getId(): ?int
    {
        return \$this->id;
    }

    public function getArticleId(): ?Article
    {
        return \$this->article_id;
    }

    public function setArticleId(?Article \$article_id): self
    {
        \$this->article_id = \$article_id;

        return \$this;
    }

    public function getUserId(): ?User
    {
        return \$this->user_id;
    }

    public function setUserId(?User \$user_id): self
    {
        \$this->user_id = \$user_id;

        return \$this;
    }

    public function getCreatedAt(): ?\\DateTimeInterface
    {
        return \$this->createdAt;
    }

    public function setCreatedAt(\\DateTimeInterface \$createdAt): self
    {
        \$this->createdAt = \$createdAt;

        return \$this;
    }
}
", "src/Entity/ArticleLike.php", "/var/www/public/DevLaon/templates/src/Entity/ArticleLike.php");
    }
}
