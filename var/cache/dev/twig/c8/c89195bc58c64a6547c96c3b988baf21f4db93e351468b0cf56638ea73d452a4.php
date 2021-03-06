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

/* vendor/symfony/routing/Tests/Fixtures/php_dsl_i18n.php */
class __TwigTemplate_e485a6789d7079ac79a9feff04bf4316075c9b3ee77aa350d23df9e7e1a07103 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/php_dsl_i18n.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/php_dsl_i18n.php"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\Routing\\Loader\\Configurator;

return function (RoutingConfigurator \$routes) {
    \$routes
        ->collection()
        ->prefix(['en' => '/glish'])
        ->add('foo', '/foo')
        ->add('bar', ['en' => '/bar']);

    \$routes
        ->add('baz', ['en' => '/baz']);

    \$routes->import('php_dsl_sub_i18n.php')
        ->prefix(['fr' => '/ench']);
};
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Fixtures/php_dsl_i18n.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\Routing\\Loader\\Configurator;

return function (RoutingConfigurator \$routes) {
    \$routes
        ->collection()
        ->prefix(['en' => '/glish'])
        ->add('foo', '/foo')
        ->add('bar', ['en' => '/bar']);

    \$routes
        ->add('baz', ['en' => '/baz']);

    \$routes->import('php_dsl_sub_i18n.php')
        ->prefix(['fr' => '/ench']);
};
", "vendor/symfony/routing/Tests/Fixtures/php_dsl_i18n.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Fixtures/php_dsl_i18n.php");
    }
}
