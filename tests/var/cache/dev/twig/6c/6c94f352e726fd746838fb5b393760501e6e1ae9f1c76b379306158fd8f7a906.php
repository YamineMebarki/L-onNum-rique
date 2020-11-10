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

/* vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher11.php */
class __TwigTemplate_8c1d73862a30dcbba957a4974f8d9bf4b2ba7cb95384069b86c0f882262a6a9b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher11.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher11.php"));

        // line 1
        echo "<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // \$matchHost
    [ // \$staticRoutes
    ],
    [ // \$regexpList
        0 => '{^(?'
                .'|/(en|fr)/(?'
                    .'|admin/post(?'
                        .'|(*:32)'
                        .'|/(?'
                            .'|new(*:46)'
                            .'|(\\\\d+)(*:58)'
                            .'|(\\\\d+)/edit(*:75)'
                            .'|(\\\\d+)/delete(*:94)'
                        .')'
                    .')'
                    .'|blog(?'
                        .'|(*:110)'
                        .'|/(?'
                            .'|rss\\\\.xml(*:130)'
                            .'|p(?'
                                .'|age/([^/]++)(*:154)'
                                .'|osts/([^/]++)(*:175)'
                            .')'
                            .'|comments/(\\\\d+)/new(*:202)'
                            .'|search(*:216)'
                        .')'
                    .')'
                    .'|log(?'
                        .'|in(*:234)'
                        .'|out(*:245)'
                    .')'
                .')'
                .'|/(en|fr)?(*:264)'
            .')/?\$}sD',
    ],
    [ // \$dynamicRoutes
        32 => [[['_route' => 'a', '_locale' => 'en'], ['_locale'], null, null, true, false, null]],
        46 => [[['_route' => 'b', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        58 => [[['_route' => 'c', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        75 => [[['_route' => 'd', '_locale' => 'en'], ['_locale', 'id'], null, null, false, false, null]],
        94 => [[['_route' => 'e', '_locale' => 'en'], ['_locale', 'id'], null, null, false, false, null]],
        110 => [[['_route' => 'f', '_locale' => 'en'], ['_locale'], null, null, true, false, null]],
        130 => [[['_route' => 'g', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        154 => [[['_route' => 'h', '_locale' => 'en'], ['_locale', 'page'], null, null, false, true, null]],
        175 => [[['_route' => 'i', '_locale' => 'en'], ['_locale', 'page'], null, null, false, true, null]],
        202 => [[['_route' => 'j', '_locale' => 'en'], ['_locale', 'id'], null, null, false, false, null]],
        216 => [[['_route' => 'k', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        234 => [[['_route' => 'l', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        245 => [[['_route' => 'm', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        264 => [
            [['_route' => 'n', '_locale' => 'en'], ['_locale'], null, null, false, true, null],
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
        return "vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher11.php";
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
    ],
    [ // \$regexpList
        0 => '{^(?'
                .'|/(en|fr)/(?'
                    .'|admin/post(?'
                        .'|(*:32)'
                        .'|/(?'
                            .'|new(*:46)'
                            .'|(\\\\d+)(*:58)'
                            .'|(\\\\d+)/edit(*:75)'
                            .'|(\\\\d+)/delete(*:94)'
                        .')'
                    .')'
                    .'|blog(?'
                        .'|(*:110)'
                        .'|/(?'
                            .'|rss\\\\.xml(*:130)'
                            .'|p(?'
                                .'|age/([^/]++)(*:154)'
                                .'|osts/([^/]++)(*:175)'
                            .')'
                            .'|comments/(\\\\d+)/new(*:202)'
                            .'|search(*:216)'
                        .')'
                    .')'
                    .'|log(?'
                        .'|in(*:234)'
                        .'|out(*:245)'
                    .')'
                .')'
                .'|/(en|fr)?(*:264)'
            .')/?\$}sD',
    ],
    [ // \$dynamicRoutes
        32 => [[['_route' => 'a', '_locale' => 'en'], ['_locale'], null, null, true, false, null]],
        46 => [[['_route' => 'b', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        58 => [[['_route' => 'c', '_locale' => 'en'], ['_locale', 'id'], null, null, false, true, null]],
        75 => [[['_route' => 'd', '_locale' => 'en'], ['_locale', 'id'], null, null, false, false, null]],
        94 => [[['_route' => 'e', '_locale' => 'en'], ['_locale', 'id'], null, null, false, false, null]],
        110 => [[['_route' => 'f', '_locale' => 'en'], ['_locale'], null, null, true, false, null]],
        130 => [[['_route' => 'g', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        154 => [[['_route' => 'h', '_locale' => 'en'], ['_locale', 'page'], null, null, false, true, null]],
        175 => [[['_route' => 'i', '_locale' => 'en'], ['_locale', 'page'], null, null, false, true, null]],
        202 => [[['_route' => 'j', '_locale' => 'en'], ['_locale', 'id'], null, null, false, false, null]],
        216 => [[['_route' => 'k', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        234 => [[['_route' => 'l', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        245 => [[['_route' => 'm', '_locale' => 'en'], ['_locale'], null, null, false, false, null]],
        264 => [
            [['_route' => 'n', '_locale' => 'en'], ['_locale'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // \$checkCondition
];
", "vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher11.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Fixtures/dumper/compiled_url_matcher11.php");
    }
}
