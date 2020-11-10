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

/* src/Form/CommentType.php */
class __TwigTemplate_e821e9b64b46c8543287974c7c0c27b935998ab56b5a5f28fb26c966e3f26422 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Form/CommentType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "src/Form/CommentType.php"));

        // line 1
        echo "<?php

namespace App\\Form;
use App\\Entity\\Article;
use App\\Entity\\Comment;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('content')
            /*->add('article',  EntityType::class, [
            'class' => Article::class,
            'choice_label' => 'id'
        ])*/;
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
/*<form action=\"\" method=\"post\">
    <div class=\"form-group\">
        <label for=\"author\">Auteur :</label>
        <input type=\"text\" name=\"author\" class=\"form-control\" id=\"author\" />
    </div>
    <div class=\"form-group\">
        <label for=\"content\">Commentaire :</label>
        <textarea name=\"content\" class=\"form-control\" id=\"content\" ></textarea>
    </div>
    <div class=\"form-group\">
        <label for=\"article\"></label>
        <input type=\"hidden\" name=\"article\" class=\"form-control\" id=\"article\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "html", null, true);
        echo "\" />
    </div>
    <div class=\"form-group\">
        <label for=\"\"></label>
        <button type=\"submit\" class=\"btn btn-primary\"  >Enregistrer</button>
    </div>
</form>*/";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "src/Form/CommentType.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 41,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace App\\Form;
use App\\Entity\\Article;
use App\\Entity\\Comment;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('content')
            /*->add('article',  EntityType::class, [
            'class' => Article::class,
            'choice_label' => 'id'
        ])*/;
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
/*<form action=\"\" method=\"post\">
    <div class=\"form-group\">
        <label for=\"author\">Auteur :</label>
        <input type=\"text\" name=\"author\" class=\"form-control\" id=\"author\" />
    </div>
    <div class=\"form-group\">
        <label for=\"content\">Commentaire :</label>
        <textarea name=\"content\" class=\"form-control\" id=\"content\" ></textarea>
    </div>
    <div class=\"form-group\">
        <label for=\"article\"></label>
        <input type=\"hidden\" name=\"article\" class=\"form-control\" id=\"article\" value=\"{{ article.id }}\" />
    </div>
    <div class=\"form-group\">
        <label for=\"\"></label>
        <button type=\"submit\" class=\"btn btn-primary\"  >Enregistrer</button>
    </div>
</form>*/", "src/Form/CommentType.php", "/var/www/public/DevLaon/templates/src/Form/CommentType.php");
    }
}
