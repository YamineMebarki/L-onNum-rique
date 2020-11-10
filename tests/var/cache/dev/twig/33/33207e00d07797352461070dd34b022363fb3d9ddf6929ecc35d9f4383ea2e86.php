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

/* vendor/symfony/form/Tests/Fixtures/AlternatingRowType.php */
class __TwigTemplate_decf539a076de4f7ec5d51b6dff6ffd625467211697a736a6abcbe27f5dc989d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Fixtures/AlternatingRowType.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Fixtures/AlternatingRowType.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Form\\Tests\\Fixtures;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class AlternatingRowType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) {
            \$form = \$event->getForm();
            \$type = 0 === \$form->getName() % 2
                ? 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType'
                : 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType';
            \$form->add('title', \$type);
        });
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Fixtures/AlternatingRowType.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Form\\Tests\\Fixtures;

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormEvent;
use Symfony\\Component\\Form\\FormEvents;

class AlternatingRowType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent \$event) {
            \$form = \$event->getForm();
            \$type = 0 === \$form->getName() % 2
                ? 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType'
                : 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType';
            \$form->add('title', \$type);
        });
    }
}
", "vendor/symfony/form/Tests/Fixtures/AlternatingRowType.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Fixtures/AlternatingRowType.php");
    }
}
