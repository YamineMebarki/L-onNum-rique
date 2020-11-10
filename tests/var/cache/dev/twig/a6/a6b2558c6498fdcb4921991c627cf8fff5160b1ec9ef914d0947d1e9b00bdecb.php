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

/* vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher6.php */
class __TwigTemplate_eef73ab5d7aebeb9a371720505c2e0268e9c07326c9b37c7428c9bbf2c487570 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher6.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher6.php"));

        // line 1
        echo "<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // \$matchHost
    [ // \$staticRoutes
        '/trailing/simple/no-methods' => [[['_route' => 'simple_trailing_slash_no_methods'], null, null, null, true, false, null]],
        '/trailing/simple/get-method' => [[['_route' => 'simple_trailing_slash_GET_method'], null, ['GET' => 0], null, true, false, null]],
        '/trailing/simple/head-method' => [[['_route' => 'simple_trailing_slash_HEAD_method'], null, ['HEAD' => 0], null, true, false, null]],
        '/trailing/simple/post-method' => [[['_route' => 'simple_trailing_slash_POST_method'], null, ['POST' => 0], null, true, false, null]],
        '/not-trailing/simple/no-methods' => [[['_route' => 'simple_not_trailing_slash_no_methods'], null, null, null, false, false, null]],
        '/not-trailing/simple/get-method' => [[['_route' => 'simple_not_trailing_slash_GET_method'], null, ['GET' => 0], null, false, false, null]],
        '/not-trailing/simple/head-method' => [[['_route' => 'simple_not_trailing_slash_HEAD_method'], null, ['HEAD' => 0], null, false, false, null]],
        '/not-trailing/simple/post-method' => [[['_route' => 'simple_not_trailing_slash_POST_method'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // \$regexpList
        0 => '{^(?'
                .'|/trailing/regex/(?'
                    .'|no\\\\-methods/([^/]++)(*:46)'
                    .'|get\\\\-method/([^/]++)(*:73)'
                    .'|head\\\\-method/([^/]++)(*:101)'
                    .'|post\\\\-method/([^/]++)(*:130)'
                .')'
                .'|/not\\\\-trailing/regex/(?'
                    .'|no\\\\-methods/([^/]++)(*:183)'
                    .'|get\\\\-method/([^/]++)(*:211)'
                    .'|head\\\\-method/([^/]++)(*:240)'
                    .'|post\\\\-method/([^/]++)(*:269)'
                .')'
            .')/?\$}sD',
    ],
    [ // \$dynamicRoutes
        46 => [[['_route' => 'regex_trailing_slash_no_methods'], ['param'], null, null, true, true, null]],
        73 => [[['_route' => 'regex_trailing_slash_GET_method'], ['param'], ['GET' => 0], null, true, true, null]],
        101 => [[['_route' => 'regex_trailing_slash_HEAD_method'], ['param'], ['HEAD' => 0], null, true, true, null]],
        130 => [[['_route' => 'regex_trailing_slash_POST_method'], ['param'], ['POST' => 0], null, true, true, null]],
        183 => [[['_route' => 'regex_not_trailing_slash_no_methods'], ['param'], null, null, false, true, null]],
        211 => [[['_route' => 'regex_not_trailing_slash_GET_method'], ['param'], ['GET' => 0], null, false, true, null]],
        240 => [[['_route' => 'regex_not_trailing_slash_HEAD_method'], ['param'], ['HEAD' => 0], null, false, true, null]],
        269 => [
            [['_route' => 'regex_not_trailing_slash_POST_method'], ['param'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // \$checkCondition
];
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher6.php";
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
        '/trailing/simple/no-methods' => [[['_route' => 'simple_trailing_slash_no_methods'], null, null, null, true, false, null]],
        '/trailing/simple/get-method' => [[['_route' => 'simple_trailing_slash_GET_method'], null, ['GET' => 0], null, true, false, null]],
        '/trailing/simple/head-method' => [[['_route' => 'simple_trailing_slash_HEAD_method'], null, ['HEAD' => 0], null, true, false, null]],
        '/trailing/simple/post-method' => [[['_route' => 'simple_trailing_slash_POST_method'], null, ['POST' => 0], null, true, false, null]],
        '/not-trailing/simple/no-methods' => [[['_route' => 'simple_not_trailing_slash_no_methods'], null, null, null, false, false, null]],
        '/not-trailing/simple/get-method' => [[['_route' => 'simple_not_trailing_slash_GET_method'], null, ['GET' => 0], null, false, false, null]],
        '/not-trailing/simple/head-method' => [[['_route' => 'simple_not_trailing_slash_HEAD_method'], null, ['HEAD' => 0], null, false, false, null]],
        '/not-trailing/simple/post-method' => [[['_route' => 'simple_not_trailing_slash_POST_method'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // \$regexpList
        0 => '{^(?'
                .'|/trailing/regex/(?'
                    .'|no\\\\-methods/([^/]++)(*:46)'
                    .'|get\\\\-method/([^/]++)(*:73)'
                    .'|head\\\\-method/([^/]++)(*:101)'
                    .'|post\\\\-method/([^/]++)(*:130)'
                .')'
                .'|/not\\\\-trailing/regex/(?'
                    .'|no\\\\-methods/([^/]++)(*:183)'
                    .'|get\\\\-method/([^/]++)(*:211)'
                    .'|head\\\\-method/([^/]++)(*:240)'
                    .'|post\\\\-method/([^/]++)(*:269)'
                .')'
            .')/?\$}sD',
    ],
    [ // \$dynamicRoutes
        46 => [[['_route' => 'regex_trailing_slash_no_methods'], ['param'], null, null, true, true, null]],
        73 => [[['_route' => 'regex_trailing_slash_GET_method'], ['param'], ['GET' => 0], null, true, true, null]],
        101 => [[['_route' => 'regex_trailing_slash_HEAD_method'], ['param'], ['HEAD' => 0], null, true, true, null]],
        130 => [[['_route' => 'regex_trailing_slash_POST_method'], ['param'], ['POST' => 0], null, true, true, null]],
        183 => [[['_route' => 'regex_not_trailing_slash_no_methods'], ['param'], null, null, false, true, null]],
        211 => [[['_route' => 'regex_not_trailing_slash_GET_method'], ['param'], ['GET' => 0], null, false, true, null]],
        240 => [[['_route' => 'regex_not_trailing_slash_HEAD_method'], ['param'], ['HEAD' => 0], null, false, true, null]],
        269 => [
            [['_route' => 'regex_not_trailing_slash_POST_method'], ['param'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // \$checkCondition
];
", "vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher6.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher6.php");
    }
}
