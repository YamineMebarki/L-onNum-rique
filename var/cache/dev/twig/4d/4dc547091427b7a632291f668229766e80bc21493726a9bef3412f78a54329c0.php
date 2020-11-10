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

/* vendor/symfony/dependency-injection/Tests/Fixtures/php/services_uninitialized_ref.php */
class __TwigTemplate_037871ad8f50a7d9567887565be949cff1fda8743b2b85b3bbae3956bcc758fa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_uninitialized_ref.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_uninitialized_ref.php"));

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
class Symfony_DI_PhpDumper_Test_Uninitialized_Reference extends Container
{
    private \$parameters = [];
    private \$targetDirs = [];

    public function __construct()
    {
        \$this->services = \$this->privates = [];
        \$this->methodMap = [
            'bar' => 'getBarService',
            'baz' => 'getBazService',
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
            'Psr\\\\Container\\\\ContainerInterface' => true,
            'Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface' => true,
            'foo2' => true,
            'foo3' => true,
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

        \$instance->foo1 = (\$this->services['foo1'] ?? null);
        \$instance->foo2 = null;
        \$instance->foo3 = (\$this->privates['foo3'] ?? null);
        \$instance->closures = [0 => function () {
            return (\$this->services['foo1'] ?? null);
        }, 1 => function () {
            return null;
        }, 2 => function () {
            return (\$this->privates['foo3'] ?? null);
        }];
        \$instance->iter = new RewindableGenerator(function () {
            if (isset(\$this->services['foo1'])) {
                yield 'foo1' => (\$this->services['foo1'] ?? null);
            }
            if (false) {
                yield 'foo2' => null;
            }
            if (isset(\$this->privates['foo3'])) {
                yield 'foo3' => (\$this->privates['foo3'] ?? null);
            }
        }, function () {
            return 0 + (int) (isset(\$this->services['foo1'])) + (int) (false) + (int) (isset(\$this->privates['foo3']));
        });

        return \$instance;
    }

    /**
     * Gets the public 'baz' shared service.
     *
     * @return \\stdClass
     */
    protected function getBazService()
    {
        \$this->services['baz'] = \$instance = new \\stdClass();

        \$instance->foo3 = (\$this->privates['foo3'] ?? (\$this->privates['foo3'] = new \\stdClass()));

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
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_uninitialized_ref.php";
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
class Symfony_DI_PhpDumper_Test_Uninitialized_Reference extends Container
{
    private \$parameters = [];
    private \$targetDirs = [];

    public function __construct()
    {
        \$this->services = \$this->privates = [];
        \$this->methodMap = [
            'bar' => 'getBarService',
            'baz' => 'getBazService',
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
            'Psr\\\\Container\\\\ContainerInterface' => true,
            'Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface' => true,
            'foo2' => true,
            'foo3' => true,
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

        \$instance->foo1 = (\$this->services['foo1'] ?? null);
        \$instance->foo2 = null;
        \$instance->foo3 = (\$this->privates['foo3'] ?? null);
        \$instance->closures = [0 => function () {
            return (\$this->services['foo1'] ?? null);
        }, 1 => function () {
            return null;
        }, 2 => function () {
            return (\$this->privates['foo3'] ?? null);
        }];
        \$instance->iter = new RewindableGenerator(function () {
            if (isset(\$this->services['foo1'])) {
                yield 'foo1' => (\$this->services['foo1'] ?? null);
            }
            if (false) {
                yield 'foo2' => null;
            }
            if (isset(\$this->privates['foo3'])) {
                yield 'foo3' => (\$this->privates['foo3'] ?? null);
            }
        }, function () {
            return 0 + (int) (isset(\$this->services['foo1'])) + (int) (false) + (int) (isset(\$this->privates['foo3']));
        });

        return \$instance;
    }

    /**
     * Gets the public 'baz' shared service.
     *
     * @return \\stdClass
     */
    protected function getBazService()
    {
        \$this->services['baz'] = \$instance = new \\stdClass();

        \$instance->foo3 = (\$this->privates['foo3'] ?? (\$this->privates['foo3'] = new \\stdClass()));

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
}
", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_uninitialized_ref.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/php/services_uninitialized_ref.php");
    }
}
