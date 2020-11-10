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

/* vendor/symfony/doctrine-bridge/Tests/DependencyInjection/CompilerPass/RegisterMappingsPassTest.php */
class __TwigTemplate_a5020f920fb7ec14021155ce92cfdc64aed35be657981dae2cd1a52540e788c6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/DependencyInjection/CompilerPass/RegisterMappingsPassTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/DependencyInjection/CompilerPass/RegisterMappingsPassTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Bridge\\Doctrine\\Tests\\DependencyInjection\\CompilerPass;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\DependencyInjection\\CompilerPass\\RegisterMappingsPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;

class RegisterMappingsPassTest extends TestCase
{
    public function testNoDriverParmeterException()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Could not find the manager name parameter in the container. Tried the following parameter names: \"manager.param.one\", \"manager.param.two\"');
        \$container = \$this->createBuilder();
        \$this->process(\$container, [
            'manager.param.one',
            'manager.param.two',
        ]);
    }

    private function process(ContainerBuilder \$container, array \$managerParamNames)
    {
        \$pass = new ConcreteMappingsPass(
            new Definition('\\stdClass'),
            [],
            \$managerParamNames,
            'some.%s.metadata_driver'
        );

        \$pass->process(\$container);
    }

    private function createBuilder()
    {
        \$container = new ContainerBuilder();

        return \$container;
    }
}

class ConcreteMappingsPass extends RegisterMappingsPass
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/DependencyInjection/CompilerPass/RegisterMappingsPassTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Bridge\\Doctrine\\Tests\\DependencyInjection\\CompilerPass;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\DependencyInjection\\CompilerPass\\RegisterMappingsPass;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Definition;

class RegisterMappingsPassTest extends TestCase
{
    public function testNoDriverParmeterException()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Could not find the manager name parameter in the container. Tried the following parameter names: \"manager.param.one\", \"manager.param.two\"');
        \$container = \$this->createBuilder();
        \$this->process(\$container, [
            'manager.param.one',
            'manager.param.two',
        ]);
    }

    private function process(ContainerBuilder \$container, array \$managerParamNames)
    {
        \$pass = new ConcreteMappingsPass(
            new Definition('\\stdClass'),
            [],
            \$managerParamNames,
            'some.%s.metadata_driver'
        );

        \$pass->process(\$container);
    }

    private function createBuilder()
    {
        \$container = new ContainerBuilder();

        return \$container;
    }
}

class ConcreteMappingsPass extends RegisterMappingsPass
{
}
", "vendor/symfony/doctrine-bridge/Tests/DependencyInjection/CompilerPass/RegisterMappingsPassTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/DependencyInjection/CompilerPass/RegisterMappingsPassTest.php");
    }
}
