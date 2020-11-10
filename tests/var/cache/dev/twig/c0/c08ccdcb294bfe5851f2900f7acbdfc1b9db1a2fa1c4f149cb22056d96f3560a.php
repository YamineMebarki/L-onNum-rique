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

/* src/Entity/Category.php */
class __TwigTemplate_9e000086f9ea083635cbdb1ba7a634ea7e5c74a2e214d0694fbdbb3a77ff976d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Entity/Category.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Entity/Category.php"));

        // line 1
        echo "<?php

namespace App\\Entity;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\Common\\Collections\\Collection;
use Doctrine\\ORM\\Mapping as ORM;

/**
 * @ORM\\Entity(repositoryClass=\"App\\Repository\\CategoryRepository\")
 */
class Category
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
    private \$title;

    /**
     * @ORM\\Column(type=\"text\")
     */
    private \$content;

    /**
     * @ORM\\OneToMany(targetEntity=\"App\\Entity\\Article\", mappedBy=\"category\")
     */
    private \$article;

    public function __construct()
    {
        \$this->article = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return \$this->id;
    }

    public function getTitle(): ?string
    {
        return \$this->title;
    }

    public function setTitle(string \$title): self
    {
        \$this->title = \$title;

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

    /**
     * @return Collection|Article[]
     */
    public function getArticle(): Collection
    {
        return \$this->article;
    }

    public function addArticle(Article \$article): self
    {
        if (!\$this->article->contains(\$article)) {
            \$this->article[] = \$article;
            \$article->setCategory(\$this);
        }

        return \$this;
    }

    public function removeArticle(Article \$article): self
    {
        if (\$this->article->contains(\$article)) {
            \$this->article->removeElement(\$article);
            // set the owning side to null (unless already changed)
            if (\$article->getCategory() === \$this) {
                \$article->setCategory(null);
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
        return "src/Entity/Category.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace App\\Entity;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\Common\\Collections\\Collection;
use Doctrine\\ORM\\Mapping as ORM;

/**
 * @ORM\\Entity(repositoryClass=\"App\\Repository\\CategoryRepository\")
 */
class Category
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
    private \$title;

    /**
     * @ORM\\Column(type=\"text\")
     */
    private \$content;

    /**
     * @ORM\\OneToMany(targetEntity=\"App\\Entity\\Article\", mappedBy=\"category\")
     */
    private \$article;

    public function __construct()
    {
        \$this->article = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return \$this->id;
    }

    public function getTitle(): ?string
    {
        return \$this->title;
    }

    public function setTitle(string \$title): self
    {
        \$this->title = \$title;

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

    /**
     * @return Collection|Article[]
     */
    public function getArticle(): Collection
    {
        return \$this->article;
    }

    public function addArticle(Article \$article): self
    {
        if (!\$this->article->contains(\$article)) {
            \$this->article[] = \$article;
            \$article->setCategory(\$this);
        }

        return \$this;
    }

    public function removeArticle(Article \$article): self
    {
        if (\$this->article->contains(\$article)) {
            \$this->article->removeElement(\$article);
            // set the owning side to null (unless already changed)
            if (\$article->getCategory() === \$this) {
                \$article->setCategory(null);
            }
        }

        return \$this;
    }
}
", "src/Entity/Category.php", "/var/www/public/DevLaon/templates/src/Entity/Category.php");
    }
}
