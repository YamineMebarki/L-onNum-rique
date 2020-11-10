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

/* vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/AutowiringTypes/TemplatingServices.php */
class __TwigTemplate_9b275c963fa3a10b271cb6e63898686ab375891ff2ef68b6a7230b897c6b0178 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/AutowiringTypes/TemplatingServices.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/AutowiringTypes/TemplatingServices.php"));

        // line 1
        echo "<?php

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\AutowiringTypes;

use Symfony\\Bundle\\FrameworkBundle\\Templating\\EngineInterface as FrameworkBundleEngineInterface;
use Symfony\\Component\\Templating\\EngineInterface;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class TemplatingServices
{
    private \$frameworkBundleEngine;
    private \$engine;

    public function __construct(FrameworkBundleEngineInterface \$frameworkBundleEngine, EngineInterface \$engine)
    {
        \$this->frameworkBundleEngine = \$frameworkBundleEngine;
        \$this->engine = \$engine;
    }

    public function getFrameworkBundleEngine()
    {
        return \$this->frameworkBundleEngine;
    }

    public function getEngine()
    {
        return \$this->engine;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/AutowiringTypes/TemplatingServices.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional\\Bundle\\TestBundle\\AutowiringTypes;

use Symfony\\Bundle\\FrameworkBundle\\Templating\\EngineInterface as FrameworkBundleEngineInterface;
use Symfony\\Component\\Templating\\EngineInterface;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class TemplatingServices
{
    private \$frameworkBundleEngine;
    private \$engine;

    public function __construct(FrameworkBundleEngineInterface \$frameworkBundleEngine, EngineInterface \$engine)
    {
        \$this->frameworkBundleEngine = \$frameworkBundleEngine;
        \$this->engine = \$engine;
    }

    public function getFrameworkBundleEngine()
    {
        return \$this->frameworkBundleEngine;
    }

    public function getEngine()
    {
        return \$this->engine;
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/AutowiringTypes/TemplatingServices.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/Bundle/TestBundle/AutowiringTypes/TemplatingServices.php");
    }
}
