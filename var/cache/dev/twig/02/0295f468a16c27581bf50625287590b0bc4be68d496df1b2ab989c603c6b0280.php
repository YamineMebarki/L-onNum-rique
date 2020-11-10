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

/* vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher5.php */
class __TwigTemplate_2ec57a811a686c7ac0ffd069f9a86670a7af242a946bef829b5dc71c95d552c1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher5.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher5.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\Routing\\Matcher\\Dumper\\CompiledUrlMatcherTrait;
use Symfony\\Component\\Routing\\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class ProjectUrlMatcher extends Symfony\\Component\\Routing\\Tests\\Fixtures\\RedirectableUrlMatcher
{
    use CompiledUrlMatcherTrait;

    public function __construct(RequestContext \$context)
    {
        \$this->context = \$context;
        \$this->staticRoutes = [
            '/a/11' => [[['_route' => 'a_first'], null, null, null, false, false, null]],
            '/a/22' => [[['_route' => 'a_second'], null, null, null, false, false, null]],
            '/a/333' => [[['_route' => 'a_third'], null, null, null, false, false, null]],
            '/a/44' => [[['_route' => 'a_fourth'], null, null, null, true, false, null]],
            '/a/55' => [[['_route' => 'a_fifth'], null, null, null, true, false, null]],
            '/a/66' => [[['_route' => 'a_sixth'], null, null, null, true, false, null]],
            '/nested/group/a' => [[['_route' => 'nested_a'], null, null, null, true, false, null]],
            '/nested/group/b' => [[['_route' => 'nested_b'], null, null, null, true, false, null]],
            '/nested/group/c' => [[['_route' => 'nested_c'], null, null, null, true, false, null]],
            '/slashed/group' => [[['_route' => 'slashed_a'], null, null, null, true, false, null]],
            '/slashed/group/b' => [[['_route' => 'slashed_b'], null, null, null, true, false, null]],
            '/slashed/group/c' => [[['_route' => 'slashed_c'], null, null, null, true, false, null]],
        ];
        \$this->regexpList = [
            0 => '{^(?'
                    .'|/([^/]++)(*:16)'
                    .'|/nested/([^/]++)(*:39)'
                .')/?\$}sD',
        ];
        \$this->dynamicRoutes = [
            16 => [[['_route' => 'a_wildcard'], ['param'], null, null, false, true, null]],
            39 => [
                [['_route' => 'nested_wildcard'], ['param'], null, null, false, true, null],
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
        return "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher5.php";
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
class ProjectUrlMatcher extends Symfony\\Component\\Routing\\Tests\\Fixtures\\RedirectableUrlMatcher
{
    use CompiledUrlMatcherTrait;

    public function __construct(RequestContext \$context)
    {
        \$this->context = \$context;
        \$this->staticRoutes = [
            '/a/11' => [[['_route' => 'a_first'], null, null, null, false, false, null]],
            '/a/22' => [[['_route' => 'a_second'], null, null, null, false, false, null]],
            '/a/333' => [[['_route' => 'a_third'], null, null, null, false, false, null]],
            '/a/44' => [[['_route' => 'a_fourth'], null, null, null, true, false, null]],
            '/a/55' => [[['_route' => 'a_fifth'], null, null, null, true, false, null]],
            '/a/66' => [[['_route' => 'a_sixth'], null, null, null, true, false, null]],
            '/nested/group/a' => [[['_route' => 'nested_a'], null, null, null, true, false, null]],
            '/nested/group/b' => [[['_route' => 'nested_b'], null, null, null, true, false, null]],
            '/nested/group/c' => [[['_route' => 'nested_c'], null, null, null, true, false, null]],
            '/slashed/group' => [[['_route' => 'slashed_a'], null, null, null, true, false, null]],
            '/slashed/group/b' => [[['_route' => 'slashed_b'], null, null, null, true, false, null]],
            '/slashed/group/c' => [[['_route' => 'slashed_c'], null, null, null, true, false, null]],
        ];
        \$this->regexpList = [
            0 => '{^(?'
                    .'|/([^/]++)(*:16)'
                    .'|/nested/([^/]++)(*:39)'
                .')/?\$}sD',
        ];
        \$this->dynamicRoutes = [
            16 => [[['_route' => 'a_wildcard'], ['param'], null, null, false, true, null]],
            39 => [
                [['_route' => 'nested_wildcard'], ['param'], null, null, false, true, null],
                [null, null, null, null, false, false, 0],
            ],
        ];
    }
}
", "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher5.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher5.php");
    }
}
