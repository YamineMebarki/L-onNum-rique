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

/* vendor/symfony/dependency-injection/Tests/Fixtures/php/services_adawson.php */
class __TwigTemplate_ba1af59cc35b2cb7f868b873d26a7279569e1c329ddb6d7d7dfc7fda1fb5da72 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_adawson.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_adawson.php"));

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
        \$this->services = \$this->privates = [];
        \$this->methodMap = [
            'App\\\\Bus' => 'getBusService',
            'App\\\\Db' => 'getDbService',
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
            'App\\\\Handler1' => true,
            'App\\\\Handler2' => true,
            'App\\\\Processor' => true,
            'App\\\\Registry' => true,
            'App\\\\Schema' => true,
            'Psr\\\\Container\\\\ContainerInterface' => true,
            'Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface' => true,
        ];
    }

    /**
     * Gets the public 'App\\Bus' shared service.
     *
     * @return \\App\\Bus
     */
    protected function getBusService()
    {
        \$a = (\$this->services['App\\\\Db'] ?? \$this->getDbService());

        \$this->services['App\\\\Bus'] = \$instance = new \\App\\Bus(\$a);

        \$b = (\$this->privates['App\\\\Schema'] ?? \$this->getSchemaService());
        \$c = new \\App\\Registry();
        \$c->processor = [0 => \$a, 1 => \$instance];

        \$d = new \\App\\Processor(\$c, \$a);

        \$instance->handler1 = new \\App\\Handler1(\$a, \$b, \$d);
        \$instance->handler2 = new \\App\\Handler2(\$a, \$b, \$d);

        return \$instance;
    }

    /**
     * Gets the public 'App\\Db' shared service.
     *
     * @return \\App\\Db
     */
    protected function getDbService()
    {
        \$this->services['App\\\\Db'] = \$instance = new \\App\\Db();

        \$instance->schema = (\$this->privates['App\\\\Schema'] ?? \$this->getSchemaService());

        return \$instance;
    }

    /**
     * Gets the private 'App\\Schema' shared service.
     *
     * @return \\App\\Schema
     */
    protected function getSchemaService()
    {
        \$a = (\$this->services['App\\\\Db'] ?? \$this->getDbService());

        if (isset(\$this->privates['App\\\\Schema'])) {
            return \$this->privates['App\\\\Schema'];
        }

        return \$this->privates['App\\\\Schema'] = new \\App\\Schema(\$a);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_adawson.php";
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
        \$this->services = \$this->privates = [];
        \$this->methodMap = [
            'App\\\\Bus' => 'getBusService',
            'App\\\\Db' => 'getDbService',
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
            'App\\\\Handler1' => true,
            'App\\\\Handler2' => true,
            'App\\\\Processor' => true,
            'App\\\\Registry' => true,
            'App\\\\Schema' => true,
            'Psr\\\\Container\\\\ContainerInterface' => true,
            'Symfony\\\\Component\\\\DependencyInjection\\\\ContainerInterface' => true,
        ];
    }

    /**
     * Gets the public 'App\\Bus' shared service.
     *
     * @return \\App\\Bus
     */
    protected function getBusService()
    {
        \$a = (\$this->services['App\\\\Db'] ?? \$this->getDbService());

        \$this->services['App\\\\Bus'] = \$instance = new \\App\\Bus(\$a);

        \$b = (\$this->privates['App\\\\Schema'] ?? \$this->getSchemaService());
        \$c = new \\App\\Registry();
        \$c->processor = [0 => \$a, 1 => \$instance];

        \$d = new \\App\\Processor(\$c, \$a);

        \$instance->handler1 = new \\App\\Handler1(\$a, \$b, \$d);
        \$instance->handler2 = new \\App\\Handler2(\$a, \$b, \$d);

        return \$instance;
    }

    /**
     * Gets the public 'App\\Db' shared service.
     *
     * @return \\App\\Db
     */
    protected function getDbService()
    {
        \$this->services['App\\\\Db'] = \$instance = new \\App\\Db();

        \$instance->schema = (\$this->privates['App\\\\Schema'] ?? \$this->getSchemaService());

        return \$instance;
    }

    /**
     * Gets the private 'App\\Schema' shared service.
     *
     * @return \\App\\Schema
     */
    protected function getSchemaService()
    {
        \$a = (\$this->services['App\\\\Db'] ?? \$this->getDbService());

        if (isset(\$this->privates['App\\\\Schema'])) {
            return \$this->privates['App\\\\Schema'];
        }

        return \$this->privates['App\\\\Schema'] = new \\App\\Schema(\$a);
    }
}
", "vendor/symfony/dependency-injection/Tests/Fixtures/php/services_adawson.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/php/services_adawson.php");
    }
}
