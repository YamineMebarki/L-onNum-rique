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

/* vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/route_1.xml */
class __TwigTemplate_f8ea3bf7e2d4149874863173fc8a6aa811129b83bd10ffafefc5017039d2e03b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/route_1.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/route_1.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<route class=\"Symfony\\Bundle\\FrameworkBundle\\Tests\\Console\\Descriptor\\RouteStub\">
  <path regex=\"#PATH_REGEX#\">/hello/{name}</path>
  <host regex=\"#HOST_REGEX#\">localhost</host>
  <scheme>http</scheme>
  <scheme>https</scheme>
  <method>GET</method>
  <method>HEAD</method>
  <defaults>
    <default key=\"name\">Joseph</default>
  </defaults>
  <requirements>
    <requirement key=\"name\">[a-z]+</requirement>
  </requirements>
  <options>
    <option key=\"compiler_class\">Symfony\\Component\\Routing\\RouteCompiler</option>
    <option key=\"opt1\">val1</option>
    <option key=\"opt2\">val2</option>
  </options>
</route>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/route_1.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<route class=\"Symfony\\Bundle\\FrameworkBundle\\Tests\\Console\\Descriptor\\RouteStub\">
  <path regex=\"#PATH_REGEX#\">/hello/{name}</path>
  <host regex=\"#HOST_REGEX#\">localhost</host>
  <scheme>http</scheme>
  <scheme>https</scheme>
  <method>GET</method>
  <method>HEAD</method>
  <defaults>
    <default key=\"name\">Joseph</default>
  </defaults>
  <requirements>
    <requirement key=\"name\">[a-z]+</requirement>
  </requirements>
  <options>
    <option key=\"compiler_class\">Symfony\\Component\\Routing\\RouteCompiler</option>
    <option key=\"opt1\">val1</option>
    <option key=\"opt2\">val2</option>
  </options>
</route>
", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/route_1.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/route_1.xml");
    }
}
