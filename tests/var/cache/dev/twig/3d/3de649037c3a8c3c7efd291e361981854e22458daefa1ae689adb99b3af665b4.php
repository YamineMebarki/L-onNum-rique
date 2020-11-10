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

/* vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/route_2.md */
class __TwigTemplate_37e3b7045572a1b364fd453d6a10d39c5acce98d878e9a83e7ae5963641b629b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/route_2.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/route_2.md"));

        // line 1
        echo "- Path: /name/add
- Path Regex: #PATH_REGEX#
- Host: localhost
- Host Regex: #HOST_REGEX#
- Scheme: http|https
- Method: PUT|POST
- Class: Symfony\\Bundle\\FrameworkBundle\\Tests\\Console\\Descriptor\\RouteStub
- Defaults: NONE
- Requirements: NO CUSTOM
- Options: 
    - `compiler_class`: Symfony\\Component\\Routing\\RouteCompiler
    - `opt1`: val1
    - `opt2`: val2
- Condition: context.getMethod() in ['GET', 'HEAD', 'POST']";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/route_2.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("- Path: /name/add
- Path Regex: #PATH_REGEX#
- Host: localhost
- Host Regex: #HOST_REGEX#
- Scheme: http|https
- Method: PUT|POST
- Class: Symfony\\Bundle\\FrameworkBundle\\Tests\\Console\\Descriptor\\RouteStub
- Defaults: NONE
- Requirements: NO CUSTOM
- Options: 
    - `compiler_class`: Symfony\\Component\\Routing\\RouteCompiler
    - `opt1`: val1
    - `opt2`: val2
- Condition: context.getMethod() in ['GET', 'HEAD', 'POST']", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/route_2.md", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/route_2.md");
    }
}
