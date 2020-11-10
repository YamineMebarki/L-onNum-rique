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

/* vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher4.php */
class __TwigTemplate_d546c5a6bd7b38284a5874672351bf4016ff95bed599f675f70fe232b5ee79b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher4.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher4.php"));

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
        \$this->staticRoutes = [
            '/just_head' => [[['_route' => 'just_head'], null, ['HEAD' => 0], null, false, false, null]],
            '/head_and_get' => [[['_route' => 'head_and_get'], null, ['HEAD' => 0, 'GET' => 1], null, false, false, null]],
            '/get_and_head' => [[['_route' => 'get_and_head'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
            '/post_and_head' => [[['_route' => 'post_and_head'], null, ['POST' => 0, 'HEAD' => 1], null, false, false, null]],
            '/put_and_post' => [
                [['_route' => 'put_and_post'], null, ['PUT' => 0, 'POST' => 1], null, false, false, null],
                [['_route' => 'put_and_get_and_head'], null, ['PUT' => 0, 'GET' => 1, 'HEAD' => 2], null, false, false, null],
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
        return "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher4.php";
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
        \$this->staticRoutes = [
            '/just_head' => [[['_route' => 'just_head'], null, ['HEAD' => 0], null, false, false, null]],
            '/head_and_get' => [[['_route' => 'head_and_get'], null, ['HEAD' => 0, 'GET' => 1], null, false, false, null]],
            '/get_and_head' => [[['_route' => 'get_and_head'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
            '/post_and_head' => [[['_route' => 'post_and_head'], null, ['POST' => 0, 'HEAD' => 1], null, false, false, null]],
            '/put_and_post' => [
                [['_route' => 'put_and_post'], null, ['PUT' => 0, 'POST' => 1], null, false, false, null],
                [['_route' => 'put_and_get_and_head'], null, ['PUT' => 0, 'GET' => 1, 'HEAD' => 2], null, false, false, null],
            ],
        ];
    }
}
", "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher4.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher4.php");
    }
}
