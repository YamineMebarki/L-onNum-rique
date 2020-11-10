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

/* src/Entity/Comment.php */
class __TwigTemplate_42c900426ab4f1da15b208d32e8940706de4968087aaf5b0c1208540665541b0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Entity/Comment.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Entity/Comment.php"));

        // line 1
        echo "<?php

namespace App\\Entity;

use Doctrine\\ORM\\Mapping as ORM;

/**
 * @ORM\\Entity(repositoryClass=\"App\\Repository\\CommentRepository\")
 */
class Comment
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
    private \$author;

    /**
     * @ORM\\Column(type=\"text\")
     */
    private \$content;

    /**
     * @ORM\\Column(type=\"boolean\")
     */
    private \$stats;

    /**
     * @ORM\\Column(type=\"datetime\")
     */
    private \$createdAt;

    /**
     * @ORM\\ManyToOne(targetEntity=\"App\\Entity\\Article\", inversedBy=\"comments\")
     * @ORM\\JoinColumn(nullable=false)
     */
    private \$article;

    public function getId(): ?int
    {
        return \$this->id;
    }

    public function getAuthor(): ?string
    {
        return \$this->author;
    }

    public function setAuthor(string \$author): self
    {
        \$this->author = \$author;

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

    public function getContent(): ?string
    {
        return \$this->content;
    }

    public function setContent(string \$content): self
    {
        \$this->content = \$content;

        return \$this;
    }

    public function getStats(): ?bool
    {
        return \$this->stats;
    }

    public function setStats(bool \$stats): self
    {
        \$this->stats = \$stats;

        return \$this;
    }

    public function getArticle(): ?Article
    {
        return \$this->article;
    }

    public function setArticle(?Article \$article): self
    {
        \$this->article = \$article;

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "src/Entity/Comment.php";
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
 * @ORM\\Entity(repositoryClass=\"App\\Repository\\CommentRepository\")
 */
class Comment
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
    private \$author;

    /**
     * @ORM\\Column(type=\"text\")
     */
    private \$content;

    /**
     * @ORM\\Column(type=\"boolean\")
     */
    private \$stats;

    /**
     * @ORM\\Column(type=\"datetime\")
     */
    private \$createdAt;

    /**
     * @ORM\\ManyToOne(targetEntity=\"App\\Entity\\Article\", inversedBy=\"comments\")
     * @ORM\\JoinColumn(nullable=false)
     */
    private \$article;

    public function getId(): ?int
    {
        return \$this->id;
    }

    public function getAuthor(): ?string
    {
        return \$this->author;
    }

    public function setAuthor(string \$author): self
    {
        \$this->author = \$author;

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

    public function getContent(): ?string
    {
        return \$this->content;
    }

    public function setContent(string \$content): self
    {
        \$this->content = \$content;

        return \$this;
    }

    public function getStats(): ?bool
    {
        return \$this->stats;
    }

    public function setStats(bool \$stats): self
    {
        \$this->stats = \$stats;

        return \$this;
    }

    public function getArticle(): ?Article
    {
        return \$this->article;
    }

    public function setArticle(?Article \$article): self
    {
        \$this->article = \$article;

        return \$this;
    }
}
", "src/Entity/Comment.php", "/var/www/public/DevLaon/templates/src/Entity/Comment.php");
    }
}
