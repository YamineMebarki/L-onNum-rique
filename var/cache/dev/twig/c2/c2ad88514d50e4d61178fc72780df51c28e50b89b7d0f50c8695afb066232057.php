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

/* vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher9.php */
class __TwigTemplate_cf6f8fc958047cd0c97a37d924e086a9d040fbe42c16a19c9e370cb12009d064 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher9.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher9.php"));

        // line 1
        echo "<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    true, // \$matchHost
    [ // \$staticRoutes
        '/' => [
            [['_route' => 'a'], '#^(?P<d>[^\\\\.]++)\\\\.e\\\\.c\\\\.b\\\\.a\$#sDi', null, null, false, false, null],
            [['_route' => 'c'], '#^(?P<e>[^\\\\.]++)\\\\.e\\\\.c\\\\.b\\\\.a\$#sDi', null, null, false, false, null],
            [['_route' => 'b'], 'd.c.b.a', null, null, false, false, null],
        ],
    ],
    [ // \$regexpList
    ],
    [ // \$dynamicRoutes
    ],
    null, // \$checkCondition
];
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher9.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    true, // \$matchHost
    [ // \$staticRoutes
        '/' => [
            [['_route' => 'a'], '#^(?P<d>[^\\\\.]++)\\\\.e\\\\.c\\\\.b\\\\.a\$#sDi', null, null, false, false, null],
            [['_route' => 'c'], '#^(?P<e>[^\\\\.]++)\\\\.e\\\\.c\\\\.b\\\\.a\$#sDi', null, null, false, false, null],
            [['_route' => 'b'], 'd.c.b.a', null, null, false, false, null],
        ],
    ],
    [ // \$regexpList
    ],
    [ // \$dynamicRoutes
    ],
    null, // \$checkCondition
];
", "vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher9.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher9.php");
    }
}
