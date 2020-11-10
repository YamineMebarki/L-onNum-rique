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

/* vendor/symfony/dependency-injection/Tests/Fixtures/php/services_service_locator_argument.php */
class __TwigTemplate_ac8f8f3792c8765c65b2e9e7f250470992839a70a3f352fde1d619ac4953e0f3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_service_locator_argument.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_service_locator_argument.php"));

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
class Symfony_DI_PhpDumper_Service_Locator_Argument extends Container
{
    private \$parameters = [];
    private \$targetDirs = [];
    private \$getService;

    public function __construct()
    {
        \$this->getService = \\Closure::fromCallable([\$this, 'getService']);
        \$this->services = \$this->privates = [];
        \$this->syntheticIds = [
            'foo5' => true,
        ];
        \$this->methodMap = [
            'bar' => 'getBarService',
            'foo1' => 'getFoo1Service',
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
            '.service_locator.38dy3OH' => true,
            'Psr\\\\Container\\\\ContainerInterface' => true,
            'Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface' => true,
            'foo2' => true,
            'foo3' => true,
            'foo4' => true,
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

        \$instance->locator = new \\Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator(\$this->getService, [
            'foo1' => ['services', 'foo1', 'getFoo1Service', false],
            'foo2' => ['privates', 'foo2', 'getFoo2Service', false],
            'foo3' => [false, 'foo3', 'getFoo3Service', false],
            'foo4' => ['privates', 'foo4', NULL, 'BOOM'],
            'foo5' => ['services', 'foo5', NULL, false],
        ], [
            'foo1' => '?',
            'foo2' => '?',
            'foo3' => '?',
            'foo4' => '?',
            'foo5' => '?',
        ]);

        return \$instance;
    }

    /**
     * Gets the public 'foo1' shared service.
     *
     * @return \\stdClass
     */
    protected function getFoo1Service()
    {
        return \$this->services['foo1'] = new \\stdClass();
    }

    /**
     * Gets the private 'foo2' shared service.
     *
     * @return \\stdClass
     */
    protected function getFoo2Service()
    {
        return \$this->privates['foo2'] = new \\stdClass();
    }

    /**
     * Gets the private 'foo3' service.
     *
     * @return \\stdClass
     */
    protected function getFoo3Service()
    {
        return new \\stdClass();
    }

    /**
     * Gets the private 'foo4' shared service.
     *
     * @return \\stdClass
     */
    protected function getFoo4Service()
    {
        return \$this->privates['foo4'] = new \\stdClass();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_service_locator_argument.php";
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
class Symfony_DI_PhpDumper_Service_Locator_Argument extends Container
{
    private \$parameters = [];
    private \$targetDirs = [];
    private \$getService;

    public function __construct()
    {
        \$this->getService = \\Closure::fromCallable([\$this, 'getService']);
        \$this->services = \$this->privates = [];
        \$this->syntheticIds = [
            'foo5' => true,
        ];
        \$this->methodMap = [
            'bar' => 'getBarService',
            'foo1' => 'getFoo1Service',
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
            '.service_locator.38dy3OH' => true,
            'Psr\\\\Container\\\\ContainerInterface' => true,
            'Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface' => true,
            'foo2' => true,
            'foo3' => true,
            'foo4' => true,
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

        \$instance->locator = new \\Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator(\$this->getService, [
            'foo1' => ['services', 'foo1', 'getFoo1Service', false],
            'foo2' => ['privates', 'foo2', 'getFoo2Service', false],
            'foo3' => [false, 'foo3', 'getFoo3Service', false],
            'foo4' => ['privates', 'foo4', NULL, 'BOOM'],
            'foo5' => ['services', 'foo5', NULL, false],
        ], [
            'foo1' => '?',
            'foo2' => '?',
            'foo3' => '?',
            'foo4' => '?',
            'foo5' => '?',
        ]);

        return \$instance;
    }

    /**
     * Gets the public 'foo1' shared service.
     *
     * @return \\stdClass
     */
    protected function getFoo1Service()
    {
        return \$this->services['foo1'] = new \\stdClass();
    }

    /**
     * Gets the private 'foo2' shared service.
     *
     * @return \\stdClass
     */
    protected function getFoo2Service()
    {
        return \$this->privates['foo2'] = new \\stdClass();
    }

    /**
     * Gets the private 'foo3' service.
     *
     * @return \\stdClass
     */
    protected function getFoo3Service()
    {
        return new \\stdClass();
    }

    /**
     * Gets the private 'foo4' shared service.
     *
     * @return \\stdClass
     */
    protected function getFoo4Service()
    {
        return \$this->privates['foo4'] = new \\stdClass();
    }
}
", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_service_locator_argument.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/php/services_service_locator_argument.php");
    }
}
