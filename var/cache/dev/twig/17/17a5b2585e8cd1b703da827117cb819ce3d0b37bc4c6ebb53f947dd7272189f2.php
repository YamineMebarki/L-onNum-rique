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

/* src/Entity/Article.php */
class __TwigTemplate_24816d59fe56c932c6a484472d93bb6daa968f295b4a1d7223345465aca18e49 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Entity/Article.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Entity/Article.php"));

        // line 1
        echo "<?php

namespace App\\Entity;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\Common\\Collections\\Collection;
use Doctrine\\ORM\\Mapping as ORM;
use App\\Entity\\User;
use Symfony\\Component\\Validator\\Constraints as Assert;
use App\\Entity\\Category;
use App\\Entity\\Comment;
use App\\Entity\\ArticleLike;

/**
 * @ORM\\Entity(repositoryClass=\"App\\Repository\\ArticleRepository\")
 */
class Article
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
     * @ORM\\Column(type=\"string\", length=255)
     */
    private \$image;

    /**
     * @ORM\\Column(type=\"string\", length=255)
     */
    private \$name;

    /**
     * @ORM\\Column(type=\"text\")
     */
    private \$content;

    /**
     * @ORM\\Column(type=\"datetime\")
     */
    private \$createAt;

    /**
     * @ORM\\ManyToOne(targetEntity=\"App\\Entity\\Category\", inversedBy=\"article\")
     * @ORM\\JoinColumn(nullable=false)
     */
    private \$category;

    /**
     * @ORM\\OneToMany(targetEntity=\"App\\Entity\\Comment\", mappedBy=\"article\", orphanRemoval=true)
     */
    private \$comments;

    /**
     * @ORM\\OneToMany(targetEntity=\"App\\Entity\\ArticleLike\", mappedBy=\"article_id\")
     */
    private \$articleLikes;

    public function __construct()
    {
        \$this->comments = new ArrayCollection();
        \$this->articleLikes = new ArrayCollection();
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

    public function getName(): ?string
    {
        return \$this->name;
    }

    public function setName(string \$name): self
    {
        \$this->name = \$name;

        return \$this;
    }

    public function getImage(): ?string
    {
        return \$this->image;
    }

    public function setImage(string \$image): self
    {
        \$this->image = \$image;

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

    public function getCreateAt(): ?\\DateTimeInterface
    {
        return \$this->createAt;
    }

    public function setCreateAt(\\DateTimeInterface \$createAt): self
    {
        \$this->createAt = \$createAt;

        return \$this;
    }

    public function getCategory(): ?Category
    {
        return \$this->category;
    }

    public function setCategory(?Category \$category): self
    {
        \$this->category = \$category;

        return \$this;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return \$this->comments;
    }

    public function addComment(Comment \$comment): self
    {
        if (!\$this->comments->contains(\$comment)) {
            \$this->comments[] = \$comment;
            \$comment->setArticle(\$this);
        }

        return \$this;
    }

    public function removeComment(Comment \$comment): self
    {
        if (\$this->comments->contains(\$comment)) {
            \$this->comments->removeElement(\$comment);
            // set the owning side to null (unless already changed)
            if (\$comment->getArticle() === \$this) {
                \$comment->setArticle(null);
            }
        }

        return \$this;
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
            \$articleLike->setArticleId(\$this);
        }

        return \$this;
    }

    public function removeArticleLike(ArticleLike \$articleLike): self
    {
        if (\$this->articleLikes->contains(\$articleLike)) {
            \$this->articleLikes->removeElement(\$articleLike);
            // set the owning side to null (unless already changed)
            if (\$articleLike->getArticleId() === \$this) {
                \$articleLike->setArticleId(null);
            }
        }

        return \$this;
    }


    /**
     * @param \\App\\Entity\\User \$user
     * @return bool
     * Permet de savoir si cette article a étais liker par un User
     */
    public  function isLikedByUser(User \$user)    :   bool
    {
        foreach (\$this->articleLikes as \$articleLike) {
            if (\$articleLike->getUserId() === \$user)
            {
                return true;
            }
        }
        return false;
    }

}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "src/Entity/Article.php";
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
use App\\Entity\\User;
use Symfony\\Component\\Validator\\Constraints as Assert;
use App\\Entity\\Category;
use App\\Entity\\Comment;
use App\\Entity\\ArticleLike;

/**
 * @ORM\\Entity(repositoryClass=\"App\\Repository\\ArticleRepository\")
 */
class Article
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
     * @ORM\\Column(type=\"string\", length=255)
     */
    private \$image;

    /**
     * @ORM\\Column(type=\"string\", length=255)
     */
    private \$name;

    /**
     * @ORM\\Column(type=\"text\")
     */
    private \$content;

    /**
     * @ORM\\Column(type=\"datetime\")
     */
    private \$createAt;

    /**
     * @ORM\\ManyToOne(targetEntity=\"App\\Entity\\Category\", inversedBy=\"article\")
     * @ORM\\JoinColumn(nullable=false)
     */
    private \$category;

    /**
     * @ORM\\OneToMany(targetEntity=\"App\\Entity\\Comment\", mappedBy=\"article\", orphanRemoval=true)
     */
    private \$comments;

    /**
     * @ORM\\OneToMany(targetEntity=\"App\\Entity\\ArticleLike\", mappedBy=\"article_id\")
     */
    private \$articleLikes;

    public function __construct()
    {
        \$this->comments = new ArrayCollection();
        \$this->articleLikes = new ArrayCollection();
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

    public function getName(): ?string
    {
        return \$this->name;
    }

    public function setName(string \$name): self
    {
        \$this->name = \$name;

        return \$this;
    }

    public function getImage(): ?string
    {
        return \$this->image;
    }

    public function setImage(string \$image): self
    {
        \$this->image = \$image;

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

    public function getCreateAt(): ?\\DateTimeInterface
    {
        return \$this->createAt;
    }

    public function setCreateAt(\\DateTimeInterface \$createAt): self
    {
        \$this->createAt = \$createAt;

        return \$this;
    }

    public function getCategory(): ?Category
    {
        return \$this->category;
    }

    public function setCategory(?Category \$category): self
    {
        \$this->category = \$category;

        return \$this;
    }

    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return \$this->comments;
    }

    public function addComment(Comment \$comment): self
    {
        if (!\$this->comments->contains(\$comment)) {
            \$this->comments[] = \$comment;
            \$comment->setArticle(\$this);
        }

        return \$this;
    }

    public function removeComment(Comment \$comment): self
    {
        if (\$this->comments->contains(\$comment)) {
            \$this->comments->removeElement(\$comment);
            // set the owning side to null (unless already changed)
            if (\$comment->getArticle() === \$this) {
                \$comment->setArticle(null);
            }
        }

        return \$this;
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
            \$articleLike->setArticleId(\$this);
        }

        return \$this;
    }

    public function removeArticleLike(ArticleLike \$articleLike): self
    {
        if (\$this->articleLikes->contains(\$articleLike)) {
            \$this->articleLikes->removeElement(\$articleLike);
            // set the owning side to null (unless already changed)
            if (\$articleLike->getArticleId() === \$this) {
                \$articleLike->setArticleId(null);
            }
        }

        return \$this;
    }


    /**
     * @param \\App\\Entity\\User \$user
     * @return bool
     * Permet de savoir si cette article a étais liker par un User
     */
    public  function isLikedByUser(User \$user)    :   bool
    {
        foreach (\$this->articleLikes as \$articleLike) {
            if (\$articleLike->getUserId() === \$user)
            {
                return true;
            }
        }
        return false;
    }

}
", "src/Entity/Article.php", "/var/www/public/DevLaon/templates/src/Entity/Article.php");
    }
}
