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

/* vendor/symfony/dependency-injection/Tests/Fixtures/php/services_subscriber.php */
class __TwigTemplate_51f1d68b4cdeda1f29f806412e5e6dc765de8ca544fa001039216fb9b427a76d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_subscriber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_subscriber.php"));

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
class ProjectServiceContainer extends Container
{
    private \$parameters = [];
    private \$targetDirs = [];
    private \$getService;

    public function __construct()
    {
        \$this->getService = \\Closure::fromCallable([\$this, 'getService']);
        \$this->services = \$this->privates = [];
        \$this->methodMap = [
            'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\TestServiceSubscriber' => 'getTestServiceSubscriberService',
            'foo_service' => 'getFooServiceService',
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
            '.service_locator.nZQiwdg' => true,
            '.service_locator.nZQiwdg.foo_service' => true,
            'Psr\\\\Container\\\\ContainerInterface' => true,
            'Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface' => true,
            'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\CustomDefinition' => true,
        ];
    }

    /**
     * Gets the public 'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber' shared service.
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber
     */
    protected function getTestServiceSubscriberService()
    {
        return \$this->services['Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\TestServiceSubscriber'] = new \\Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber();
    }

    /**
     * Gets the public 'foo_service' shared autowired service.
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber
     */
    protected function getFooServiceService()
    {
        return \$this->services['foo_service'] = new \\Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber((new \\Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator(\$this->getService, [
            'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\CustomDefinition' => ['privates', 'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\CustomDefinition', 'getCustomDefinitionService', false],
            'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\TestServiceSubscriber' => ['services', 'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\TestServiceSubscriber', 'getTestServiceSubscriberService', false],
            'bar' => ['services', 'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\TestServiceSubscriber', 'getTestServiceSubscriberService', false],
            'baz' => ['privates', 'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\CustomDefinition', 'getCustomDefinitionService', false],
        ], [
            'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\CustomDefinition' => 'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\CustomDefinition',
            'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\TestServiceSubscriber' => 'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\TestServiceSubscriber',
            'bar' => 'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\CustomDefinition',
            'baz' => 'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\CustomDefinition',
        ]))->withContext('foo_service', \$this));
    }

    /**
     * Gets the private 'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CustomDefinition' shared service.
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CustomDefinition
     */
    protected function getCustomDefinitionService()
    {
        return \$this->privates['Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\CustomDefinition'] = new \\Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CustomDefinition();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_subscriber.php";
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
class ProjectServiceContainer extends Container
{
    private \$parameters = [];
    private \$targetDirs = [];
    private \$getService;

    public function __construct()
    {
        \$this->getService = \\Closure::fromCallable([\$this, 'getService']);
        \$this->services = \$this->privates = [];
        \$this->methodMap = [
            'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\TestServiceSubscriber' => 'getTestServiceSubscriberService',
            'foo_service' => 'getFooServiceService',
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
            '.service_locator.nZQiwdg' => true,
            '.service_locator.nZQiwdg.foo_service' => true,
            'Psr\\\\Container\\\\ContainerInterface' => true,
            'Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface' => true,
            'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\CustomDefinition' => true,
        ];
    }

    /**
     * Gets the public 'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber' shared service.
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber
     */
    protected function getTestServiceSubscriberService()
    {
        return \$this->services['Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\TestServiceSubscriber'] = new \\Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber();
    }

    /**
     * Gets the public 'foo_service' shared autowired service.
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber
     */
    protected function getFooServiceService()
    {
        return \$this->services['foo_service'] = new \\Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\TestServiceSubscriber((new \\Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator(\$this->getService, [
            'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\CustomDefinition' => ['privates', 'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\CustomDefinition', 'getCustomDefinitionService', false],
            'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\TestServiceSubscriber' => ['services', 'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\TestServiceSubscriber', 'getTestServiceSubscriberService', false],
            'bar' => ['services', 'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\TestServiceSubscriber', 'getTestServiceSubscriberService', false],
            'baz' => ['privates', 'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\CustomDefinition', 'getCustomDefinitionService', false],
        ], [
            'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\CustomDefinition' => 'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\CustomDefinition',
            'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\TestServiceSubscriber' => 'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\TestServiceSubscriber',
            'bar' => 'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\CustomDefinition',
            'baz' => 'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\CustomDefinition',
        ]))->withContext('foo_service', \$this));
    }

    /**
     * Gets the private 'Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CustomDefinition' shared service.
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CustomDefinition
     */
    protected function getCustomDefinitionService()
    {
        return \$this->privates['Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Fixtures\\\\CustomDefinition'] = new \\Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\CustomDefinition();
    }
}
", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_subscriber.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/php/services_subscriber.php");
    }
}
