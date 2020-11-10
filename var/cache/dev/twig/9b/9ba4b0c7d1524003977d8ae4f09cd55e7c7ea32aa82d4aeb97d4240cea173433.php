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

/* vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher1.php */
class __TwigTemplate_2cc34363d1aa712ef5180cf9cf08a181eda1d8d2d75585c4efc509c60c0feadf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher1.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher1.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherTrait;
use Symfony\\Component\\Routing\\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ProjectUrlMatcher extends Symfony\\Component\\Routing\\Matcher\\UrlMatcher
{
    use CompiledUrlMatcherTrait;

    public function __construct(RequestContext \$context)
    {
        \$this->context = \$context;
        \$this->matchHost = true;
        \$this->staticRoutes = [
            '/test/baz' => [[['_route' => 'baz'], null, null, null, false, false, null]],
            '/test/baz.html' => [[['_route' => 'baz2'], null, null, null, false, false, null]],
            '/test/baz3' => [[['_route' => 'baz3'], null, null, null, true, false, null]],
            '/foofoo' => [[['_route' => 'foofoo', 'def' => 'test'], null, null, null, false, false, null]],
            '/spa ce' => [[['_route' => 'space'], null, null, null, false, false, null]],
            '/multi/new' => [[['_route' => 'overridden2'], null, null, null, false, false, null]],
            '/multi/hey' => [[['_route' => 'hey'], null, null, null, true, false, null]],
            '/ababa' => [[['_route' => 'ababa'], null, null, null, false, false, null]],
            '/route1' => [[['_route' => 'route1'], 'a.example.com', null, null, false, false, null]],
            '/c2/route2' => [[['_route' => 'route2'], 'a.example.com', null, null, false, false, null]],
            '/route4' => [[['_route' => 'route4'], 'a.example.com', null, null, false, false, null]],
            '/c2/route3' => [[['_route' => 'route3'], 'b.example.com', null, null, false, false, null]],
            '/route5' => [[['_route' => 'route5'], 'c.example.com', null, null, false, false, null]],
            '/route6' => [[['_route' => 'route6'], null, null, null, false, false, null]],
            '/route11' => [[['_route' => 'route11'], '#^(?P<var1>[^\\\\.]++)\\\\.example\\\\.com\$#sDi', null, null, false, false, null]],
            '/route12' => [[['_route' => 'route12', 'var1' => 'val'], '#^(?P<var1>[^\\\\.]++)\\\\.example\\\\.com\$#sDi', null, null, false, false, null]],
            '/route17' => [[['_route' => 'route17'], null, null, null, false, false, null]],
        ];
        \$this->regexpList = [
            0 => '{^(?'
                .'|(?:(?:[^./]*+\\\\.)++)(?'
                    .'|/foo/(baz|symfony)(*:47)'
                    .'|/bar(?'
                        .'|/([^/]++)(*:70)'
                        .'|head/([^/]++)(*:90)'
                    .')'
                    .'|/test/([^/]++)(?'
                        .'|(*:115)'
                    .')'
                    .'|/([\\']+)(*:131)'
                    .'|/a/(?'
                        .'|b\\'b/([^/]++)(?'
                            .'|(*:160)'
                            .'|(*:168)'
                        .')'
                        .'|(.*)(*:181)'
                        .'|b\\'b/([^/]++)(?'
                            .'|(*:204)'
                            .'|(*:212)'
                        .')'
                    .')'
                    .'|/multi/hello(?:/([^/]++))?(*:248)'
                    .'|/([^/]++)/b/([^/]++)(?'
                        .'|(*:279)'
                        .'|(*:287)'
                    .')'
                    .'|/aba/([^/]++)(*:309)'
                .')|(?i:([^\\\\.]++)\\\\.example\\\\.com)\\\\.(?'
                    .'|/route1(?'
                        .'|3/([^/]++)(*:371)'
                        .'|4/([^/]++)(*:389)'
                    .')'
                .')|(?i:c\\\\.example\\\\.com)\\\\.(?'
                    .'|/route15/([^/]++)(*:441)'
                .')|(?:(?:[^./]*+\\\\.)++)(?'
                    .'|/route16/([^/]++)(*:489)'
                    .'|/a/(?'
                        .'|a\\\\.\\\\.\\\\.(*:510)'
                        .'|b/(?'
                            .'|([^/]++)(*:531)'
                            .'|c/([^/]++)(*:549)'
                        .')'
                    .')'
                .')'
                .')/?\$}sD',
        ];
        \$this->dynamicRoutes = [
            47 => [[['_route' => 'foo', 'def' => 'test'], ['bar'], null, null, false, true, null]],
            70 => [[['_route' => 'bar'], ['foo'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
            90 => [[['_route' => 'barhead'], ['foo'], ['GET' => 0], null, false, true, null]],
            115 => [
                [['_route' => 'baz4'], ['foo'], null, null, true, true, null],
                [['_route' => 'baz5'], ['foo'], ['POST' => 0], null, true, true, null],
                [['_route' => 'baz.baz6'], ['foo'], ['PUT' => 0], null, true, true, null],
            ],
            131 => [[['_route' => 'quoter'], ['quoter'], null, null, false, true, null]],
            160 => [[['_route' => 'foo1'], ['foo'], ['PUT' => 0], null, false, true, null]],
            168 => [[['_route' => 'bar1'], ['bar'], null, null, false, true, null]],
            181 => [[['_route' => 'overridden'], ['var'], null, null, false, true, null]],
            204 => [[['_route' => 'foo2'], ['foo1'], null, null, false, true, null]],
            212 => [[['_route' => 'bar2'], ['bar1'], null, null, false, true, null]],
            248 => [[['_route' => 'helloWorld', 'who' => 'World!'], ['who'], null, null, false, true, null]],
            279 => [[['_route' => 'foo3'], ['_locale', 'foo'], null, null, false, true, null]],
            287 => [[['_route' => 'bar3'], ['_locale', 'bar'], null, null, false, true, null]],
            309 => [[['_route' => 'foo4'], ['foo'], null, null, false, true, null]],
            371 => [[['_route' => 'route13'], ['var1', 'name'], null, null, false, true, null]],
            389 => [[['_route' => 'route14', 'var1' => 'val'], ['var1', 'name'], null, null, false, true, null]],
            441 => [[['_route' => 'route15'], ['name'], null, null, false, true, null]],
            489 => [[['_route' => 'route16', 'var1' => 'val'], ['name'], null, null, false, true, null]],
            510 => [[['_route' => 'a'], [], null, null, false, false, null]],
            531 => [[['_route' => 'b'], ['var'], null, null, false, true, null]],
            549 => [
                [['_route' => 'c'], ['var'], null, null, false, true, null],
                [null, null, null, null, false, false, 0],
            ],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher1.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherTrait;
use Symfony\\Component\\Routing\\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ProjectUrlMatcher extends Symfony\\Component\\Routing\\Matcher\\UrlMatcher
{
    use CompiledUrlMatcherTrait;

    public function __construct(RequestContext \$context)
    {
        \$this->context = \$context;
        \$this->matchHost = true;
        \$this->staticRoutes = [
            '/test/baz' => [[['_route' => 'baz'], null, null, null, false, false, null]],
            '/test/baz.html' => [[['_route' => 'baz2'], null, null, null, false, false, null]],
            '/test/baz3' => [[['_route' => 'baz3'], null, null, null, true, false, null]],
            '/foofoo' => [[['_route' => 'foofoo', 'def' => 'test'], null, null, null, false, false, null]],
            '/spa ce' => [[['_route' => 'space'], null, null, null, false, false, null]],
            '/multi/new' => [[['_route' => 'overridden2'], null, null, null, false, false, null]],
            '/multi/hey' => [[['_route' => 'hey'], null, null, null, true, false, null]],
            '/ababa' => [[['_route' => 'ababa'], null, null, null, false, false, null]],
            '/route1' => [[['_route' => 'route1'], 'a.example.com', null, null, false, false, null]],
            '/c2/route2' => [[['_route' => 'route2'], 'a.example.com', null, null, false, false, null]],
            '/route4' => [[['_route' => 'route4'], 'a.example.com', null, null, false, false, null]],
            '/c2/route3' => [[['_route' => 'route3'], 'b.example.com', null, null, false, false, null]],
            '/route5' => [[['_route' => 'route5'], 'c.example.com', null, null, false, false, null]],
            '/route6' => [[['_route' => 'route6'], null, null, null, false, false, null]],
            '/route11' => [[['_route' => 'route11'], '#^(?P<var1>[^\\\\.]++)\\\\.example\\\\.com\$#sDi', null, null, false, false, null]],
            '/route12' => [[['_route' => 'route12', 'var1' => 'val'], '#^(?P<var1>[^\\\\.]++)\\\\.example\\\\.com\$#sDi', null, null, false, false, null]],
            '/route17' => [[['_route' => 'route17'], null, null, null, false, false, null]],
        ];
        \$this->regexpList = [
            0 => '{^(?'
                .'|(?:(?:[^./]*+\\\\.)++)(?'
                    .'|/foo/(baz|symfony)(*:47)'
                    .'|/bar(?'
                        .'|/([^/]++)(*:70)'
                        .'|head/([^/]++)(*:90)'
                    .')'
                    .'|/test/([^/]++)(?'
                        .'|(*:115)'
                    .')'
                    .'|/([\\']+)(*:131)'
                    .'|/a/(?'
                        .'|b\\'b/([^/]++)(?'
                            .'|(*:160)'
                            .'|(*:168)'
                        .')'
                        .'|(.*)(*:181)'
                        .'|b\\'b/([^/]++)(?'
                            .'|(*:204)'
                            .'|(*:212)'
                        .')'
                    .')'
                    .'|/multi/hello(?:/([^/]++))?(*:248)'
                    .'|/([^/]++)/b/([^/]++)(?'
                        .'|(*:279)'
                        .'|(*:287)'
                    .')'
                    .'|/aba/([^/]++)(*:309)'
                .')|(?i:([^\\\\.]++)\\\\.example\\\\.com)\\\\.(?'
                    .'|/route1(?'
                        .'|3/([^/]++)(*:371)'
                        .'|4/([^/]++)(*:389)'
                    .')'
                .')|(?i:c\\\\.example\\\\.com)\\\\.(?'
                    .'|/route15/([^/]++)(*:441)'
                .')|(?:(?:[^./]*+\\\\.)++)(?'
                    .'|/route16/([^/]++)(*:489)'
                    .'|/a/(?'
                        .'|a\\\\.\\\\.\\\\.(*:510)'
                        .'|b/(?'
                            .'|([^/]++)(*:531)'
                            .'|c/([^/]++)(*:549)'
                        .')'
                    .')'
                .')'
                .')/?\$}sD',
        ];
        \$this->dynamicRoutes = [
            47 => [[['_route' => 'foo', 'def' => 'test'], ['bar'], null, null, false, true, null]],
            70 => [[['_route' => 'bar'], ['foo'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
            90 => [[['_route' => 'barhead'], ['foo'], ['GET' => 0], null, false, true, null]],
            115 => [
                [['_route' => 'baz4'], ['foo'], null, null, true, true, null],
                [['_route' => 'baz5'], ['foo'], ['POST' => 0], null, true, true, null],
                [['_route' => 'baz.baz6'], ['foo'], ['PUT' => 0], null, true, true, null],
            ],
            131 => [[['_route' => 'quoter'], ['quoter'], null, null, false, true, null]],
            160 => [[['_route' => 'foo1'], ['foo'], ['PUT' => 0], null, false, true, null]],
            168 => [[['_route' => 'bar1'], ['bar'], null, null, false, true, null]],
            181 => [[['_route' => 'overridden'], ['var'], null, null, false, true, null]],
            204 => [[['_route' => 'foo2'], ['foo1'], null, null, false, true, null]],
            212 => [[['_route' => 'bar2'], ['bar1'], null, null, false, true, null]],
            248 => [[['_route' => 'helloWorld', 'who' => 'World!'], ['who'], null, null, false, true, null]],
            279 => [[['_route' => 'foo3'], ['_locale', 'foo'], null, null, false, true, null]],
            287 => [[['_route' => 'bar3'], ['_locale', 'bar'], null, null, false, true, null]],
            309 => [[['_route' => 'foo4'], ['foo'], null, null, false, true, null]],
            371 => [[['_route' => 'route13'], ['var1', 'name'], null, null, false, true, null]],
            389 => [[['_route' => 'route14', 'var1' => 'val'], ['var1', 'name'], null, null, false, true, null]],
            441 => [[['_route' => 'route15'], ['name'], null, null, false, true, null]],
            489 => [[['_route' => 'route16', 'var1' => 'val'], ['name'], null, null, false, true, null]],
            510 => [[['_route' => 'a'], [], null, null, false, false, null]],
            531 => [[['_route' => 'b'], ['var'], null, null, false, true, null]],
            549 => [
                [['_route' => 'c'], ['var'], null, null, false, true, null],
                [null, null, null, null, false, false, 0],
            ],
        ];
    }
}
", "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher1.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher1.php");
    }
}
