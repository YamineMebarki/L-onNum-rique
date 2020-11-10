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

/* vendor/symfony/dependency-injection/Tests/Fixtures/config/prototype.php */
class __TwigTemplate_599b7b58ae741c64e8741b2ba7eab41da2d141f9b49ba65e27af0111c0e0109d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/config/prototype.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/config/prototype.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\Prototype;

return function (ContainerConfigurator \$c) {
    \$di = \$c->services()->defaults()
        ->tag('baz');
    \$di->load(Prototype::class.'\\\\', '../Prototype')
        ->autoconfigure()
        ->exclude('../Prototype/{OtherDir,BadClasses}')
        ->factory('f')
        ->deprecate('%service_id%')
        ->args([0])
        ->args([1])
        ->autoconfigure(false)
        ->tag('foo')
        ->parent('foo');
    \$di->set('foo')->lazy()->abstract();
    \$di->get(Prototype\\Foo::class)->lazy(false);
};
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/config/prototype.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\Prototype;

return function (ContainerConfigurator \$c) {
    \$di = \$c->services()->defaults()
        ->tag('baz');
    \$di->load(Prototype::class.'\\\\', '../Prototype')
        ->autoconfigure()
        ->exclude('../Prototype/{OtherDir,BadClasses}')
        ->factory('f')
        ->deprecate('%service_id%')
        ->args([0])
        ->args([1])
        ->autoconfigure(false)
        ->tag('foo')
        ->parent('foo');
    \$di->set('foo')->lazy()->abstract();
    \$di->get(Prototype\\Foo::class)->lazy(false);
};
", "vendor/symfony/dependency-injection/Tests/Fixtures/config/prototype.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/config/prototype.php");
    }
}
