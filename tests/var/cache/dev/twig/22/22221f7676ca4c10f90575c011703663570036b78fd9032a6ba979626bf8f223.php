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

/* vendor/symfony/dependency-injection/Tests/Fixtures/TestServiceSubscriberChild.php */
class __TwigTemplate_aeb80ccd61628c2b9c67224781e6763c199dcdab1b1e9dd0cff6f094f4966d8d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/TestServiceSubscriberChild.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/TestServiceSubscriberChild.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\DependencyInjection\\Tests\\Fixtures;

use Symfony\\Contracts\\Service\\ServiceSubscriberTrait;

class TestServiceSubscriberChild extends TestServiceSubscriberParent
{
    use ServiceSubscriberTrait, TestServiceSubscriberTrait;

    private function testDefinition2(): TestDefinition2
    {
        return \$this->container->get(__METHOD__);
    }

    private function invalidDefinition(): InvalidDefinition
    {
        return \$this->container->get(__METHOD__);
    }

    private function privateFunction1(): string
    {
    }

    private function privateFunction2(): string
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/TestServiceSubscriberChild.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\DependencyInjection\\Tests\\Fixtures;

use Symfony\\Contracts\\Service\\ServiceSubscriberTrait;

class TestServiceSubscriberChild extends TestServiceSubscriberParent
{
    use ServiceSubscriberTrait, TestServiceSubscriberTrait;

    private function testDefinition2(): TestDefinition2
    {
        return \$this->container->get(__METHOD__);
    }

    private function invalidDefinition(): InvalidDefinition
    {
        return \$this->container->get(__METHOD__);
    }

    private function privateFunction1(): string
    {
    }

    private function privateFunction2(): string
    {
    }
}
", "vendor/symfony/dependency-injection/Tests/Fixtures/TestServiceSubscriberChild.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/TestServiceSubscriberChild.php");
    }
}
