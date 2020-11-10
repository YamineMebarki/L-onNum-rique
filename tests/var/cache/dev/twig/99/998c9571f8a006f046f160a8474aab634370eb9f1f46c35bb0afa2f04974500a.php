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

/* vendor/symfony/dependency-injection/Tests/Fixtures/php/services_deep_graph.php */
class __TwigTemplate_9af0b8af5db1b2f18e9c587c2d462b918c3e682355b15f48b706dba6354212c2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_deep_graph.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_deep_graph.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\LogicException;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class Symfony_DI_PhpDumper_Test_Deep_Graph extends Container
{
    private \$parameters = [];
    private \$targetDirs = [];

    public function __construct()
    {
        \$this->services = \$this->privates = [];
        \$this->methodMap = [
            'bar' => 'getBarService',
            'foo' => 'getFooService',
        ];

        \$this->aliases = [];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return [
            'Psr\\\\Container\\\\ContainerInterface' => true,
            'Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface' => true,
        ];
    }

    /**
     * Gets the public 'bar' shared service.
     *
     * @return \\stdClass
     */
    protected function getBarService()
    {
        \$this->services['bar'] = \$instance = new \\stdClass();

        \$instance->p5 = new \\stdClass((\$this->services['foo'] ?? \$this->getFooService()));

        return \$instance;
    }

    /**
     * Gets the public 'foo' shared service.
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Tests\\Dumper\\FooForDeepGraph
     */
    protected function getFooService()
    {
        \$a = (\$this->services['bar'] ?? \$this->getBarService());

        if (isset(\$this->services['foo'])) {
            return \$this->services['foo'];
        }
        \$b = new \\stdClass();

        \$c = new \\stdClass();
        \$c->p3 = new \\stdClass();

        \$b->p2 = \$c;

        return \$this->services['foo'] = new \\Symfony\\Component\\DependencyInjection\\Tests\\Dumper\\FooForDeepGraph(\$a, \$b);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_deep_graph.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\ContainerInterface;
use Symfony\\Component\\DependencyInjection\\Container;
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\Exception\\LogicException;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\ParameterBag\\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class Symfony_DI_PhpDumper_Test_Deep_Graph extends Container
{
    private \$parameters = [];
    private \$targetDirs = [];

    public function __construct()
    {
        \$this->services = \$this->privates = [];
        \$this->methodMap = [
            'bar' => 'getBarService',
            'foo' => 'getFooService',
        ];

        \$this->aliases = [];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function getRemovedIds()
    {
        return [
            'Psr\\\\Container\\\\ContainerInterface' => true,
            'Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface' => true,
        ];
    }

    /**
     * Gets the public 'bar' shared service.
     *
     * @return \\stdClass
     */
    protected function getBarService()
    {
        \$this->services['bar'] = \$instance = new \\stdClass();

        \$instance->p5 = new \\stdClass((\$this->services['foo'] ?? \$this->getFooService()));

        return \$instance;
    }

    /**
     * Gets the public 'foo' shared service.
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Tests\\Dumper\\FooForDeepGraph
     */
    protected function getFooService()
    {
        \$a = (\$this->services['bar'] ?? \$this->getBarService());

        if (isset(\$this->services['foo'])) {
            return \$this->services['foo'];
        }
        \$b = new \\stdClass();

        \$c = new \\stdClass();
        \$c->p3 = new \\stdClass();

        \$b->p2 = \$c;

        return \$this->services['foo'] = new \\Symfony\\Component\\DependencyInjection\\Tests\\Dumper\\FooForDeepGraph(\$a, \$b);
    }
}
", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_deep_graph.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/php/services_deep_graph.php");
    }
}
