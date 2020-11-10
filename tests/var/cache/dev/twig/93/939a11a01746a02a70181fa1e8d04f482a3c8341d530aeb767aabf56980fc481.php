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

/* vendor/symfony/dependency-injection/Tests/Fixtures/config/instanceof.php */
class __TwigTemplate_af5c2dea68b50304fe376b82d28dbc43aed80fce736b6d14465695782bc5278d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/config/instanceof.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/config/instanceof.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use App\\FooService;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\Prototype;

return function (ContainerConfigurator \$c) {
    \$s = \$c->services();
    \$s->instanceof(Prototype\\Foo::class)
        ->property('p', 0)
        ->call('setFoo', [ref('foo')])
        ->tag('tag', ['k' => 'v'])
        ->share(false)
        ->lazy()
        ->configurator('c')
        ->property('p', 1);

    \$s->load(Prototype::class.'\\\\', '../Prototype')->exclude('../Prototype/*/*');

    \$s->set('foo', FooService::class);
};
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/config/instanceof.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\DependencyInjection\\Loader\\Configurator;

use App\\FooService;
use Symfony\\Component\\DependencyInjection\\Tests\\Fixtures\\Prototype;

return function (ContainerConfigurator \$c) {
    \$s = \$c->services();
    \$s->instanceof(Prototype\\Foo::class)
        ->property('p', 0)
        ->call('setFoo', [ref('foo')])
        ->tag('tag', ['k' => 'v'])
        ->share(false)
        ->lazy()
        ->configurator('c')
        ->property('p', 1);

    \$s->load(Prototype::class.'\\\\', '../Prototype')->exclude('../Prototype/*/*');

    \$s->set('foo', FooService::class);
};
", "vendor/symfony/dependency-injection/Tests/Fixtures/config/instanceof.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/config/instanceof.php");
    }
}
