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

/* vendor/symfony/dependency-injection/Tests/Fixtures/php/services10.php */
class __TwigTemplate_0b1aeac0f4076a00a6e75a57af4c038572a33331bbe088bdf8c9b2ba24702f28 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services10.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services10.php"));

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
        return \$this->services['test'] = new \\stdClass(['only dot' => '.', 'concatenation as value' => '.\\'\\'.', 'concatenation from the start value' => '\\'\\'.', '.' => 'dot as a key', '.\\'\\'.' => 'concatenation as a key', '\\'\\'.' => 'concatenation from the start key', 'optimize concatenation' => 'string1-string2', 'optimize concatenation with empty string' => 'string1string2', 'optimize concatenation from the start' => 'start', 'optimize concatenation at the end' => 'end', 'new line' => 'string with '.\"\\n\".'new line']);
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

    private \$loadedDynamicParameters = [];
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
        throw new InvalidArgumentException(sprintf('The dynamic parameter \"%s\" must be defined.', \$name));
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'empty_value' => '',
            'some_string' => '-',
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/php/services10.php";
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
        return \$this->services['test'] = new \\stdClass(['only dot' => '.', 'concatenation as value' => '.\\'\\'.', 'concatenation from the start value' => '\\'\\'.', '.' => 'dot as a key', '.\\'\\'.' => 'concatenation as a key', '\\'\\'.' => 'concatenation from the start key', 'optimize concatenation' => 'string1-string2', 'optimize concatenation with empty string' => 'string1string2', 'optimize concatenation from the start' => 'start', 'optimize concatenation at the end' => 'end', 'new line' => 'string with '.\"\\n\".'new line']);
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

    private \$loadedDynamicParameters = [];
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
        throw new InvalidArgumentException(sprintf('The dynamic parameter \"%s\" must be defined.', \$name));
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'empty_value' => '',
            'some_string' => '-',
        ];
    }
}
", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services10.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/php/services10.php");
    }
}
