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

/* vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher12.php */
class __TwigTemplate_da223981983fb54a71e14477674adb3e9bb6987af12dea5d0a8e9af756e8e231 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher12.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher12.php"));

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
        \$this->regexpList = [
            0 => '{^(?'
                    .'|/abc([^/]++)/(?'
                        .'|1(?'
                            .'|(*:27)'
                            .'|0(?'
                                .'|(*:38)'
                                .'|0(*:46)'
                            .')'
                        .')'
                        .'|2(?'
                            .'|(*:59)'
                            .'|0(?'
                                .'|(*:70)'
                                .'|0(*:78)'
                            .')'
                        .')'
                    .')'
                .')/?\$}sD',
        ];
        \$this->dynamicRoutes = [
            27 => [[['_route' => 'r1'], ['foo'], null, null, false, false, null]],
            38 => [[['_route' => 'r10'], ['foo'], null, null, false, false, null]],
            46 => [[['_route' => 'r100'], ['foo'], null, null, false, false, null]],
            59 => [[['_route' => 'r2'], ['foo'], null, null, false, false, null]],
            70 => [[['_route' => 'r20'], ['foo'], null, null, false, false, null]],
            78 => [
                [['_route' => 'r200'], ['foo'], null, null, false, false, null],
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
        return "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher12.php";
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
        \$this->regexpList = [
            0 => '{^(?'
                    .'|/abc([^/]++)/(?'
                        .'|1(?'
                            .'|(*:27)'
                            .'|0(?'
                                .'|(*:38)'
                                .'|0(*:46)'
                            .')'
                        .')'
                        .'|2(?'
                            .'|(*:59)'
                            .'|0(?'
                                .'|(*:70)'
                                .'|0(*:78)'
                            .')'
                        .')'
                    .')'
                .')/?\$}sD',
        ];
        \$this->dynamicRoutes = [
            27 => [[['_route' => 'r1'], ['foo'], null, null, false, false, null]],
            38 => [[['_route' => 'r10'], ['foo'], null, null, false, false, null]],
            46 => [[['_route' => 'r100'], ['foo'], null, null, false, false, null]],
            59 => [[['_route' => 'r2'], ['foo'], null, null, false, false, null]],
            70 => [[['_route' => 'r20'], ['foo'], null, null, false, false, null]],
            78 => [
                [['_route' => 'r200'], ['foo'], null, null, false, false, null],
                [null, null, null, null, false, false, 0],
            ],
        ];
    }
}
", "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher12.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher12.php");
    }
}
