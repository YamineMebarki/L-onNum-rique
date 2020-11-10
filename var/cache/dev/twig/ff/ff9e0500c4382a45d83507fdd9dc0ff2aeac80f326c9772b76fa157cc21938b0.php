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

/* vendor/symfony/dependency-injection/Tests/Fixtures/php/services12.php */
class __TwigTemplate_925f3784762e33c8cf11921cbb2d5aac134f462746207ed141b8f721d19fffd8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services12.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services12.php"));

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

    public function __construct()
    {
        \$dir = __DIR__;
        for (\$i = 1; \$i <= 5; ++\$i) {
            \$this->targetDirs[\$i] = \$dir = \\dirname(\$dir);
        }
        \$this->parameters = \$this->getDefaultParameters();

        \$this->services = \$this->privates = [];
        \$this->methodMap = [
            'test' => 'getTestService',
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
     * Gets the public 'test' shared service.
     *
     * @return \\stdClass
     */
    protected function getTestService()
    {
        return \$this->services['test'] = new \\stdClass(('wiz'.\$this->targetDirs[1]), [('wiz'.\$this->targetDirs[1]) => (\$this->targetDirs[2].'/')]);
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
        'foo' => false,
        'buz' => false,
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
            case 'foo': \$value = ('wiz'.\$this->targetDirs[1]); break;
            case 'buz': \$value = \$this->targetDirs[2]; break;
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
            'bar' => __DIR__,
            'baz' => (__DIR__.'/PhpDumperTest.php'),
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/php/services12.php";
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

    public function __construct()
    {
        \$dir = __DIR__;
        for (\$i = 1; \$i <= 5; ++\$i) {
            \$this->targetDirs[\$i] = \$dir = \\dirname(\$dir);
        }
        \$this->parameters = \$this->getDefaultParameters();

        \$this->services = \$this->privates = [];
        \$this->methodMap = [
            'test' => 'getTestService',
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
     * Gets the public 'test' shared service.
     *
     * @return \\stdClass
     */
    protected function getTestService()
    {
        return \$this->services['test'] = new \\stdClass(('wiz'.\$this->targetDirs[1]), [('wiz'.\$this->targetDirs[1]) => (\$this->targetDirs[2].'/')]);
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
        'foo' => false,
        'buz' => false,
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
            case 'foo': \$value = ('wiz'.\$this->targetDirs[1]); break;
            case 'buz': \$value = \$this->targetDirs[2]; break;
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
            'bar' => __DIR__,
            'baz' => (__DIR__.'/PhpDumperTest.php'),
        ];
    }
}
", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services12.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/php/services12.php");
    }
}
