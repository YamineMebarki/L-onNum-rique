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

/* vendor/symfony/routing/Tests/Fixtures/AnnotationFixtures/DefaultValueController.php */
class __TwigTemplate_22c8336d723f27174310490708e803adb54b433d889459f076dcbbc78eddc716 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/AnnotationFixtures/DefaultValueController.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/AnnotationFixtures/DefaultValueController.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Routing\\Tests\\Fixtures\\AnnotationFixtures;

use Symfony\\Component\\Routing\\Annotation\\Route;

class DefaultValueController
{
    /**
     * @Route(\"/{default}/path\", name=\"action\")
     */
    public function action(\$default = 'value')
    {
    }

    /**
     * @Route(\"/hello/{name<\\w+>}\", name=\"hello_without_default\")
     * @Route(\"/hello/{name<\\w+>?Symfony}\", name=\"hello_with_default\")
     */
    public function hello(string \$name = 'World')
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Fixtures/AnnotationFixtures/DefaultValueController.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Routing\\Tests\\Fixtures\\AnnotationFixtures;

use Symfony\\Component\\Routing\\Annotation\\Route;

class DefaultValueController
{
    /**
     * @Route(\"/{default}/path\", name=\"action\")
     */
    public function action(\$default = 'value')
    {
    }

    /**
     * @Route(\"/hello/{name<\\w+>}\", name=\"hello_without_default\")
     * @Route(\"/hello/{name<\\w+>?Symfony}\", name=\"hello_with_default\")
     */
    public function hello(string \$name = 'World')
    {
    }
}
", "vendor/symfony/routing/Tests/Fixtures/AnnotationFixtures/DefaultValueController.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Fixtures/AnnotationFixtures/DefaultValueController.php");
    }
}
