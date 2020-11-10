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

/* vendor/symfony/routing/Tests/Fixtures/php_object_dsl.php */
class __TwigTemplate_fb691a2994bfa4e7b878d2e38c7354805a326aba6c11b718d4146e501ce6570f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/php_object_dsl.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/php_object_dsl.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Routing\\Loader\\Configurator;

return new class() {
    public function __invoke(RoutingConfigurator \$routes)
    {
        \$routes
            ->collection()
            ->add('foo', '/foo')
            ->condition('abc')
            ->options(['utf8' => true])
            ->add('buz', 'zub')
            ->controller('foo:act');

        \$routes->import('php_dsl_sub.php')
            ->prefix('/sub')
            ->requirements(['id' => '\\d+']);

        \$routes->import('php_dsl_sub.php')
            ->namePrefix('z_')
            ->prefix('/zub');

        \$routes->import('php_dsl_sub_root.php')
            ->prefix('/bus', false);

        \$routes->add('ouf', '/ouf')
            ->schemes(['https'])
            ->methods(['GET'])
            ->defaults(['id' => 0]);
    }
};
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Fixtures/php_object_dsl.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Routing\\Loader\\Configurator;

return new class() {
    public function __invoke(RoutingConfigurator \$routes)
    {
        \$routes
            ->collection()
            ->add('foo', '/foo')
            ->condition('abc')
            ->options(['utf8' => true])
            ->add('buz', 'zub')
            ->controller('foo:act');

        \$routes->import('php_dsl_sub.php')
            ->prefix('/sub')
            ->requirements(['id' => '\\d+']);

        \$routes->import('php_dsl_sub.php')
            ->namePrefix('z_')
            ->prefix('/zub');

        \$routes->import('php_dsl_sub_root.php')
            ->prefix('/bus', false);

        \$routes->add('ouf', '/ouf')
            ->schemes(['https'])
            ->methods(['GET'])
            ->defaults(['id' => 0]);
    }
};
", "vendor/symfony/routing/Tests/Fixtures/php_object_dsl.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Fixtures/php_object_dsl.php");
    }
}
