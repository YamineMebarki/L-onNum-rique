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

/* vendor/symfony/validator/Tests/Mapping/Loader/constraint-mapping-non-strings.xml */
class __TwigTemplate_785c7a43fb1b6b9a4ed414dda47faa835f594d3fc14a3c68aee5603a39aa61bd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/Loader/constraint-mapping-non-strings.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/Loader/constraint-mapping-non-strings.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<constraint-mapping xmlns=\"http://symfony.com/schema/dic/constraint-mapping\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/constraint-mapping https://symfony.com/schema/dic/constraint-mapping/constraint-mapping-1.0.xsd\">

  <namespace prefix=\"custom\">Symfony\\Component\\Validator\\Tests\\Fixtures\\</namespace>

  <class name=\"Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity\">
    <property name=\"firstName\">
      <!-- Constraint with a Boolean -->
      <constraint name=\"Regex\">
          <option name=\"pattern\">/^1/</option>
          <option name=\"match\">false</option>
      </constraint>
    </property>
  </class>

</constraint-mapping>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Mapping/Loader/constraint-mapping-non-strings.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" ?>

<constraint-mapping xmlns=\"http://symfony.com/schema/dic/constraint-mapping\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/constraint-mapping https://symfony.com/schema/dic/constraint-mapping/constraint-mapping-1.0.xsd\">

  <namespace prefix=\"custom\">Symfony\\Component\\Validator\\Tests\\Fixtures\\</namespace>

  <class name=\"Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity\">
    <property name=\"firstName\">
      <!-- Constraint with a Boolean -->
      <constraint name=\"Regex\">
          <option name=\"pattern\">/^1/</option>
          <option name=\"match\">false</option>
      </constraint>
    </property>
  </class>

</constraint-mapping>
", "vendor/symfony/validator/Tests/Mapping/Loader/constraint-mapping-non-strings.xml", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Mapping/Loader/constraint-mapping-non-strings.xml");
    }
}
