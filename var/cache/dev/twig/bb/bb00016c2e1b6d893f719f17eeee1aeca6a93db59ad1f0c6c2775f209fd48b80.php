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

/* vendor/symfony/debug-bundle/Resources/config/schema/debug-1.0.xsd */
class __TwigTemplate_dca2853b76f986b121579355e66ddc513924355b24d9cac5a341a1fe2525d82f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug-bundle/Resources/config/schema/debug-1.0.xsd"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug-bundle/Resources/config/schema/debug-1.0.xsd"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<xsd:schema xmlns=\"http://symfony.com/schema/dic/debug\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://symfony.com/schema/dic/debug\"
    elementFormDefault=\"qualified\">

    <xsd:element name=\"config\" type=\"config\" />

    <xsd:complexType name=\"config\">
        <xsd:attribute name=\"max-items\" type=\"xsd:integer\" />
        <xsd:attribute name=\"min-depth\" type=\"xsd:integer\" />
        <xsd:attribute name=\"max-string-length\" type=\"xsd:integer\" />
        <xsd:attribute name=\"dump-destination\" type=\"xsd:string\" />
    </xsd:complexType>
</xsd:schema>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug-bundle/Resources/config/schema/debug-1.0.xsd";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<xsd:schema xmlns=\"http://symfony.com/schema/dic/debug\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://symfony.com/schema/dic/debug\"
    elementFormDefault=\"qualified\">

    <xsd:element name=\"config\" type=\"config\" />

    <xsd:complexType name=\"config\">
        <xsd:attribute name=\"max-items\" type=\"xsd:integer\" />
        <xsd:attribute name=\"min-depth\" type=\"xsd:integer\" />
        <xsd:attribute name=\"max-string-length\" type=\"xsd:integer\" />
        <xsd:attribute name=\"dump-destination\" type=\"xsd:string\" />
    </xsd:complexType>
</xsd:schema>
", "vendor/symfony/debug-bundle/Resources/config/schema/debug-1.0.xsd", "/var/www/public/DevLaon/templates/vendor/symfony/debug-bundle/Resources/config/schema/debug-1.0.xsd");
    }
}
