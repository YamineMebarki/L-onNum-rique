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

/* vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher9.php */
class __TwigTemplate_b957052417687da8c830416974fadea74656bb1d21900b4c09c08b2677b9e11c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher9.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher9.php"));

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
            '/' => [
                [['_route' => 'a'], '#^(?P<d>[^\\\\.]++)\\\\.e\\\\.c\\\\.b\\\\.a\$#sDi', null, null, false, false, null],
                [['_route' => 'c'], '#^(?P<e>[^\\\\.]++)\\\\.e\\\\.c\\\\.b\\\\.a\$#sDi', null, null, false, false, null],
                [['_route' => 'b'], 'd.c.b.a', null, null, false, false, null],
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
        return "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher9.php";
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
            '/' => [
                [['_route' => 'a'], '#^(?P<d>[^\\\\.]++)\\\\.e\\\\.c\\\\.b\\\\.a\$#sDi', null, null, false, false, null],
                [['_route' => 'c'], '#^(?P<e>[^\\\\.]++)\\\\.e\\\\.c\\\\.b\\\\.a\$#sDi', null, null, false, false, null],
                [['_route' => 'b'], 'd.c.b.a', null, null, false, false, null],
            ],
        ];
    }
}
", "vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher9.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Fixtures/dumper/url_matcher9.php");
    }
}
