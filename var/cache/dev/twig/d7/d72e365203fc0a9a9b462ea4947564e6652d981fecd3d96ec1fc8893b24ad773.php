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

/* vendor/symfony/dependency-injection/Tests/Fixtures/includes/ProjectWithXsdExtensionInPhar.phar */
class __TwigTemplate_8c795bd7081cade0b5f34c10f2ccb9891ff16caec5e999f0dfef9bbee9d03551 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/includes/ProjectWithXsdExtensionInPhar.phar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/includes/ProjectWithXsdExtensionInPhar.phar"));

        // line 1
        echo "<?php Phar::mapPhar(\"ProjectWithXsdExtensionInPhar.phar\"); require_once \"phar://ProjectWithXsdExtensionInPhar.phar/ProjectWithXsdExtensionInPhar.php\"; __HALT_COMPILER(); ?>
£\000\000\000\000\000\000\000\000\000\000\"\000\000\000ProjectWithXsdExtensionInPhar.phar\000\000\000\000!\000\000\000ProjectWithXsdExtensionInPhar.phpl\000\000\000T’Ul\000\000ÆWÑ¶\000\000\000\000\000\000\000\000\000schema/project-1.0.xsd¬\000\000\000T’U¬\000\000rr‰ö¶\000\000\000\000\000\000<?php

class ProjectWithXsdExtensionInPhar extends ProjectExtension
{
    public function getXsdValidationBasePath()
    {
        return __DIR__.'/schema';
    }

    public function getNamespace()
    {
        return 'http://www.example.com/schema/projectwithxsdinphar';
    }

    public function getAlias()
    {
        return 'projectwithxsdinphar';
    }
}<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<xsd:schema xmlns=\"http://www.example.com/schema/projectwithxsdinphar\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://www.example.com/schema/projectwithxsdinphar\"
    elementFormDefault=\"qualified\">

  <xsd:element name=\"bar\" type=\"bar\" />

  <xsd:complexType name=\"bar\">
    <xsd:attribute name=\"foo\" type=\"xsd:string\" />
  </xsd:complexType>
</xsd:schema>ÿ|ÔÓÚM*cý(ã.ˆk&`Œ\000\000\000GBMB";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/includes/ProjectWithXsdExtensionInPhar.phar";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php Phar::mapPhar(\"ProjectWithXsdExtensionInPhar.phar\"); require_once \"phar://ProjectWithXsdExtensionInPhar.phar/ProjectWithXsdExtensionInPhar.php\"; __HALT_COMPILER(); ?>
£\000\000\000\000\000\000\000\000\000\000\"\000\000\000ProjectWithXsdExtensionInPhar.phar\000\000\000\000!\000\000\000ProjectWithXsdExtensionInPhar.phpl\000\000\000T’Ul\000\000ÆWÑ¶\000\000\000\000\000\000\000\000\000schema/project-1.0.xsd¬\000\000\000T’U¬\000\000rr‰ö¶\000\000\000\000\000\000<?php

class ProjectWithXsdExtensionInPhar extends ProjectExtension
{
    public function getXsdValidationBasePath()
    {
        return __DIR__.'/schema';
    }

    public function getNamespace()
    {
        return 'http://www.example.com/schema/projectwithxsdinphar';
    }

    public function getAlias()
    {
        return 'projectwithxsdinphar';
    }
}<?xml version=\"1.0\" encoding=\"UTF-8\" ?>

<xsd:schema xmlns=\"http://www.example.com/schema/projectwithxsdinphar\"
    xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"
    targetNamespace=\"http://www.example.com/schema/projectwithxsdinphar\"
    elementFormDefault=\"qualified\">

  <xsd:element name=\"bar\" type=\"bar\" />

  <xsd:complexType name=\"bar\">
    <xsd:attribute name=\"foo\" type=\"xsd:string\" />
  </xsd:complexType>
</xsd:schema>ÿ|ÔÓÚM*cý(ã.ˆk&`Œ\000\000\000GBMB", "vendor/symfony/dependency-injection/Tests/Fixtures/includes/ProjectWithXsdExtensionInPhar.phar", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/includes/ProjectWithXsdExtensionInPhar.phar");
    }
}
