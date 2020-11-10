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

/* vendor/symfony/dependency-injection/Tests/Fixtures/config/defaults.php */
class __TwigTemplate_9c1e2d16f7c8eb32eb55fcd7a1ca02b7d6fb620bda66a38998f16ac08199a47c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/config/defaults.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/config/defaults.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\Prototype\\Foo;

return function (ContainerConfigurator \$c) {
    \$c->import('basic.php');

    \$s = \$c->services()->defaults()
        ->public()
        ->private()
        ->autoconfigure()
        ->autowire()
        ->tag('t', ['a' => 'b'])
        ->bind(Foo::class, ref('bar'))
        ->private();

    \$s->set(Foo::class)->args([ref('bar')])->public();
    \$s->set('bar', Foo::class)->call('setFoo')->autoconfigure(false);
};
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/config/defaults.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\Prototype\\Foo;

return function (ContainerConfigurator \$c) {
    \$c->import('basic.php');

    \$s = \$c->services()->defaults()
        ->public()
        ->private()
        ->autoconfigure()
        ->autowire()
        ->tag('t', ['a' => 'b'])
        ->bind(Foo::class, ref('bar'))
        ->private();

    \$s->set(Foo::class)->args([ref('bar')])->public();
    \$s->set('bar', Foo::class)->call('setFoo')->autoconfigure(false);
};
", "vendor/symfony/dependency-injection/Tests/Fixtures/config/defaults.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/config/defaults.php");
    }
}
