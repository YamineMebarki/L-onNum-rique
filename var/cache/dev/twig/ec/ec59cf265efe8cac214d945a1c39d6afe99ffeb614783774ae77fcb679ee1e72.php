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

/* vendor/symfony/dependency-injection/Tests/Fixtures/php/services_rot13_env.php */
class __TwigTemplate_ce1975730c3e6c8e1658ab57122aa5f08f5d83d4770053420c879e2ce00947ec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_rot13_env.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_rot13_env.php"));

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
class Symfony_DI_PhpDumper_Test_Rot13Parameters extends Container
{
    private \$parameters = [];
    private \$targetDirs = [];
    private \$getService;

    public function __construct()
    {
        \$this->getService = \\Closure::fromCallable([\$this, 'getService']);
        \$this->parameters = \$this->getDefaultParameters();

        \$this->services = \$this->privates = [];
        \$this->methodMap = [
            'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Dumper\\\\Rot13EnvVarProcessor' => 'getRot13EnvVarProcessorService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
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
            '.service_locator.GU08LT9' => true,
            'Psr\\\\Container\\\\ContainerInterface' => true,
            'Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface' => true,
        ];
    }

    /**
     * Gets the public 'Symfony\\Component\\DependencyInjection\\Tests\\Dumper\\Rot13EnvVarProcessor' shared service.
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Tests\\Dumper\\Rot13EnvVarProcessor
     */
    protected function getRot13EnvVarProcessorService()
    {
        return \$this->services['Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Dumper\\\\Rot13EnvVarProcessor'] = new \\Symfony\\Component\\DependencyInjection\\Tests\\Dumper\\Rot13EnvVarProcessor();
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \\Symfony\\Component\\DependencyInjection\\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return \$this->services['container.env_var_processors_locator'] = new \\Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator(\$this->getService, [
            'rot13' => ['services', 'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Dumper\\\\Rot13EnvVarProcessor', 'getRot13EnvVarProcessorService', false],
        ], [
            'rot13' => '?',
        ]);
    }

    public function getParameter(\$name)
    {
        \$name = (string) \$name;

        if (!(isset(\$this->parameters[\$name]) || isset(\$this->loadedDynamicParameters[\$name]) || array_key_exists(\$name, \$this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter \"%s\" must be defined.', \$name));
        }
        if (isset(\$this->loadedDynamicParameters[\$name])) {
            return \$this->loadedDynamicParameters[\$name] ? \$this->dynamicParameters[\$name] : \$this->getDynamicParameter(\$name);
        }

        return \$this->parameters[\$name];
    }

    public function hasParameter(\$name)
    {
        \$name = (string) \$name;

        return isset(\$this->parameters[\$name]) || isset(\$this->loadedDynamicParameters[\$name]) || array_key_exists(\$name, \$this->parameters);
    }

    public function setParameter(\$name, \$value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === \$this->parameterBag) {
            \$parameters = \$this->parameters;
            foreach (\$this->loadedDynamicParameters as \$name => \$loaded) {
                \$parameters[\$name] = \$loaded ? \$this->dynamicParameters[\$name] : \$this->getDynamicParameter(\$name);
            }
            \$this->parameterBag = new FrozenParameterBag(\$parameters);
        }

        return \$this->parameterBag;
    }

    private \$loadedDynamicParameters = [
        'hello' => false,
    ];
    private \$dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string \$name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter(\$name)
    {
        switch (\$name) {
            case 'hello': \$value = \$this->getEnv('rot13:foo'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter \"%s\" must be defined.', \$name));
        }
        \$this->loadedDynamicParameters[\$name] = true;

        return \$this->dynamicParameters[\$name] = \$value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'env(foo)' => 'jbeyq',
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_rot13_env.php";
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
class Symfony_DI_PhpDumper_Test_Rot13Parameters extends Container
{
    private \$parameters = [];
    private \$targetDirs = [];
    private \$getService;

    public function __construct()
    {
        \$this->getService = \\Closure::fromCallable([\$this, 'getService']);
        \$this->parameters = \$this->getDefaultParameters();

        \$this->services = \$this->privates = [];
        \$this->methodMap = [
            'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Dumper\\\\Rot13EnvVarProcessor' => 'getRot13EnvVarProcessorService',
            'container.env_var_processors_locator' => 'getContainer_EnvVarProcessorsLocatorService',
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
            '.service_locator.GU08LT9' => true,
            'Psr\\\\Container\\\\ContainerInterface' => true,
            'Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface' => true,
        ];
    }

    /**
     * Gets the public 'Symfony\\Component\\DependencyInjection\\Tests\\Dumper\\Rot13EnvVarProcessor' shared service.
     *
     * @return \\Symfony\\Component\\DependencyInjection\\Tests\\Dumper\\Rot13EnvVarProcessor
     */
    protected function getRot13EnvVarProcessorService()
    {
        return \$this->services['Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Dumper\\\\Rot13EnvVarProcessor'] = new \\Symfony\\Component\\DependencyInjection\\Tests\\Dumper\\Rot13EnvVarProcessor();
    }

    /**
     * Gets the public 'container.env_var_processors_locator' shared service.
     *
     * @return \\Symfony\\Component\\DependencyInjection\\ServiceLocator
     */
    protected function getContainer_EnvVarProcessorsLocatorService()
    {
        return \$this->services['container.env_var_processors_locator'] = new \\Symfony\\Component\\DependencyInjection\\Argument\\ServiceLocator(\$this->getService, [
            'rot13' => ['services', 'Symfony\\\\Component\\\\DependencyInjection\\\\Tests\\\\Dumper\\\\Rot13EnvVarProcessor', 'getRot13EnvVarProcessorService', false],
        ], [
            'rot13' => '?',
        ]);
    }

    public function getParameter(\$name)
    {
        \$name = (string) \$name;

        if (!(isset(\$this->parameters[\$name]) || isset(\$this->loadedDynamicParameters[\$name]) || array_key_exists(\$name, \$this->parameters))) {
            throw new InvalidArgumentException(sprintf('The parameter \"%s\" must be defined.', \$name));
        }
        if (isset(\$this->loadedDynamicParameters[\$name])) {
            return \$this->loadedDynamicParameters[\$name] ? \$this->dynamicParameters[\$name] : \$this->getDynamicParameter(\$name);
        }

        return \$this->parameters[\$name];
    }

    public function hasParameter(\$name)
    {
        \$name = (string) \$name;

        return isset(\$this->parameters[\$name]) || isset(\$this->loadedDynamicParameters[\$name]) || array_key_exists(\$name, \$this->parameters);
    }

    public function setParameter(\$name, \$value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === \$this->parameterBag) {
            \$parameters = \$this->parameters;
            foreach (\$this->loadedDynamicParameters as \$name => \$loaded) {
                \$parameters[\$name] = \$loaded ? \$this->dynamicParameters[\$name] : \$this->getDynamicParameter(\$name);
            }
            \$this->parameterBag = new FrozenParameterBag(\$parameters);
        }

        return \$this->parameterBag;
    }

    private \$loadedDynamicParameters = [
        'hello' => false,
    ];
    private \$dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string \$name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter(\$name)
    {
        switch (\$name) {
            case 'hello': \$value = \$this->getEnv('rot13:foo'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter \"%s\" must be defined.', \$name));
        }
        \$this->loadedDynamicParameters[\$name] = true;

        return \$this->dynamicParameters[\$name] = \$value;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'env(foo)' => 'jbeyq',
        ];
    }
}
", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_rot13_env.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/php/services_rot13_env.php");
    }
}
