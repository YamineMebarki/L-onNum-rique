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

/* vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher3.php */
class __TwigTemplate_a5a592998444a607cfa18e8242964f3aa04147f611472ec450462c6a28887ec0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher3.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher3.php"));

        // line 1
        echo "<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // \$matchHost
    [ // \$staticRoutes
        '/rootprefix/test' => [[['_route' => 'static'], null, null, null, false, false, null]],
        '/with-condition' => [[['_route' => 'with-condition'], null, null, null, false, false, -1]],
    ],
    [ // \$regexpList
        0 => '{^(?'
                .'|/rootprefix/([^/]++)(*:27)'
            .')/?\$}sD',
    ],
    [ // \$dynamicRoutes
        27 => [
            [['_route' => 'dynamic'], ['var'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    static function (\$condition, \$context, \$request) { // \$checkCondition
        switch (\$condition) {
            case -1: return (\$context->getMethod() == \"GET\");
        }
    },
];
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher3.php";
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
    false, // \$matchHost
    [ // \$staticRoutes
        '/rootprefix/test' => [[['_route' => 'static'], null, null, null, false, false, null]],
        '/with-condition' => [[['_route' => 'with-condition'], null, null, null, false, false, -1]],
    ],
    [ // \$regexpList
        0 => '{^(?'
                .'|/rootprefix/([^/]++)(*:27)'
            .')/?\$}sD',
    ],
    [ // \$dynamicRoutes
        27 => [
            [['_route' => 'dynamic'], ['var'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    static function (\$condition, \$context, \$request) { // \$checkCondition
        switch (\$condition) {
            case -1: return (\$context->getMethod() == \"GET\");
        }
    },
];
", "vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher3.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher3.php");
    }
}
