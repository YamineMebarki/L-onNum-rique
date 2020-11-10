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

/* vendor/symfony/dependency-injection/Tests/Fixtures/includes/classes.php */
class __TwigTemplate_b7495b9a61d01feb8faa294f4904ddedb05165baf498d2338cfc4e8dab8c1dea extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/includes/classes.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/includes/classes.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\LazyProxy\\PhpDumper\\DumperInterface as ProxyDumper;
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;

function sc_configure(\$instance)
{
    \$instance->configure();
}

class BarClass extends BazClass
{
    protected \$baz;
    public \$foo = 'foo';

    public function setBaz(BazClass \$baz)
    {
        \$this->baz = \$baz;
    }

    public function getBaz()
    {
        return \$this->baz;
    }
}

class BazClass
{
    protected \$foo;

    public function setFoo(Foo \$foo)
    {
        \$this->foo = \$foo;
    }

    public function configure(\$instance)
    {
        \$instance->configure();
    }

    public static function getInstance()
    {
        return new self();
    }

    public static function configureStatic(\$instance)
    {
        \$instance->configure();
    }

    public static function configureStatic1()
    {
    }
}

class BarUserClass
{
    public \$bar;

    public function __construct(BarClass \$bar)
    {
        \$this->bar = \$bar;
    }
}

class MethodCallClass
{
    public \$simple;
    public \$complex;
    private \$callPassed = false;

    public function callMe()
    {
        \$this->callPassed = is_scalar(\$this->simple) && is_object(\$this->complex);
    }

    public function callPassed()
    {
        return \$this->callPassed;
    }
}

class DummyProxyDumper implements ProxyDumper
{
    public function isProxyCandidate(Definition \$definition)
    {
        return \$definition->isLazy();
    }

    public function getProxyFactoryCode(Definition \$definition, \$id, \$factoryCall = null)
    {
        return \"        // lazy factory for {\$definition->getClass()}\\n\\n\";
    }

    public function getProxyCode(Definition \$definition)
    {
        return \"// proxy code for {\$definition->getClass()}\\n\";
    }
}

class LazyContext
{
    public \$lazyValues;
    public \$lazyEmptyValues;

    public function __construct(\$lazyValues, \$lazyEmptyValues)
    {
        \$this->lazyValues = \$lazyValues;
        \$this->lazyEmptyValues = \$lazyEmptyValues;
    }
}

class FoobarCircular
{
    public function __construct(FooCircular \$foo)
    {
        \$this->foo = \$foo;
    }
}

class FooCircular
{
    public function __construct(BarCircular \$bar)
    {
        \$this->bar = \$bar;
    }
}

class BarCircular
{
    public function addFoobar(FoobarCircular \$foobar)
    {
        \$this->foobar = \$foobar;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/includes/classes.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\LazyProxy\\PhpDumper\\DumperInterface as ProxyDumper;
use Symfony\\Contracts\\Service\\ServiceSubscriberInterface;

function sc_configure(\$instance)
{
    \$instance->configure();
}

class BarClass extends BazClass
{
    protected \$baz;
    public \$foo = 'foo';

    public function setBaz(BazClass \$baz)
    {
        \$this->baz = \$baz;
    }

    public function getBaz()
    {
        return \$this->baz;
    }
}

class BazClass
{
    protected \$foo;

    public function setFoo(Foo \$foo)
    {
        \$this->foo = \$foo;
    }

    public function configure(\$instance)
    {
        \$instance->configure();
    }

    public static function getInstance()
    {
        return new self();
    }

    public static function configureStatic(\$instance)
    {
        \$instance->configure();
    }

    public static function configureStatic1()
    {
    }
}

class BarUserClass
{
    public \$bar;

    public function __construct(BarClass \$bar)
    {
        \$this->bar = \$bar;
    }
}

class MethodCallClass
{
    public \$simple;
    public \$complex;
    private \$callPassed = false;

    public function callMe()
    {
        \$this->callPassed = is_scalar(\$this->simple) && is_object(\$this->complex);
    }

    public function callPassed()
    {
        return \$this->callPassed;
    }
}

class DummyProxyDumper implements ProxyDumper
{
    public function isProxyCandidate(Definition \$definition)
    {
        return \$definition->isLazy();
    }

    public function getProxyFactoryCode(Definition \$definition, \$id, \$factoryCall = null)
    {
        return \"        // lazy factory for {\$definition->getClass()}\\n\\n\";
    }

    public function getProxyCode(Definition \$definition)
    {
        return \"// proxy code for {\$definition->getClass()}\\n\";
    }
}

class LazyContext
{
    public \$lazyValues;
    public \$lazyEmptyValues;

    public function __construct(\$lazyValues, \$lazyEmptyValues)
    {
        \$this->lazyValues = \$lazyValues;
        \$this->lazyEmptyValues = \$lazyEmptyValues;
    }
}

class FoobarCircular
{
    public function __construct(FooCircular \$foo)
    {
        \$this->foo = \$foo;
    }
}

class FooCircular
{
    public function __construct(BarCircular \$bar)
    {
        \$this->bar = \$bar;
    }
}

class BarCircular
{
    public function addFoobar(FoobarCircular \$foobar)
    {
        \$this->foobar = \$foobar;
    }
}
", "vendor/symfony/dependency-injection/Tests/Fixtures/includes/classes.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/includes/classes.php");
    }
}
