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

/* vendor/symfony/validator/Tests/Mapping/Loader/constraint-mapping.xml */
class __TwigTemplate_13ab0de42d68ad056b326d2f8fc134d0a3c99e015d1e2afaf70acd36531f871e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/Loader/constraint-mapping.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/Loader/constraint-mapping.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<constraint-mapping xmlns=\"http://symfony.com/schema/dic/constraint-mapping\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/constraint-mapping https://symfony.com/schema/dic/constraint-mapping/constraint-mapping-1.0.xsd\">

  <namespace prefix=\"custom\">Symfony\\Component\\Validator\\Tests\\Fixtures\\</namespace>

  <class name=\"Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity\">

    <group-sequence>
       <value>Foo</value>
       <value>Entity</value>
    </group-sequence>

    <!-- CLASS CONSTRAINTS -->

    <!-- Custom constraint -->
    <constraint name=\"Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA\" />

    <!-- Custom constraint with namespace abbreviation-->
    <constraint name=\"custom:ConstraintB\" />

    <!-- Callbacks -->
    <constraint name=\"Callback\">validateMe</constraint>

    <constraint name=\"Callback\">validateMeStatic</constraint>

    <constraint name=\"Callback\">
        <value>Symfony\\Component\\Validator\\Tests\\Fixtures\\CallbackClass</value>
        <value>callback</value>
    </constraint>

    <!-- Traverse with boolean default option -->
    <constraint name=\"Traverse\">
        false
    </constraint>

    <!-- PROPERTY CONSTRAINTS -->

    <property name=\"firstName\">

      <!-- Constraint without value -->
      <constraint name=\"NotNull\" />

      <!-- Constraint with single value -->
      <constraint name=\"Range\">
         <option name=\"min\">3</option>
      </constraint>

      <!-- Constraint with multiple values -->
      <constraint name=\"Choice\">
        <value>A</value>
        <value>B</value>
      </constraint>

      <!-- Constraint with child constraints -->
      <constraint name=\"All\">
        <constraint name=\"NotNull\" />
        <constraint name=\"Range\">
           <option name=\"min\">3</option>
        </constraint>

      </constraint>

      <!-- Option with child constraints -->
      <constraint name=\"All\">
        <option name=\"constraints\">
          <constraint name=\"NotNull\" />
          <constraint name=\"Range\">
             <option name=\"min\">3</option>
          </constraint>
        </option>
      </constraint>

      <!-- Value with child constraints -->
      <constraint name=\"Collection\">
        <option name=\"fields\">
          <value key=\"foo\">
            <constraint name=\"NotNull\" />
            <constraint name=\"Range\">
               <option name=\"min\">3</option>
            </constraint>
          </value>
          <value key=\"bar\">
            <constraint name=\"Range\">
               <option name=\"min\">5</option>
            </constraint>
          </value>
        </option>
      </constraint>

      <!-- Constraint with options -->
      <constraint name=\"Choice\">
        <!-- Option with single value -->
        <option name=\"message\"> Must be one of %choices% </option>
        <!-- Option with multiple values -->
        <option name=\"choices\">
          <value>A</value>
          <value>B</value>
        </option>
      </constraint>
    </property>

    <!-- GETTER CONSTRAINTS -->

    <getter property=\"lastName\">
      <constraint name=\"NotNull\" />
    </getter>
    <getter property=\"valid\">
      <constraint name=\"IsTrue\" />
    </getter>
    <getter property=\"permissions\">
      <constraint name=\"IsTrue\" />
    </getter>
  </class>

  <class name=\"Symfony\\Component\\Validator\\Tests\\Fixtures\\GroupSequenceProviderEntity\">

    <!-- GROUP SEQUENCE PROVIDER -->
    <group-sequence-provider />

  </class>
</constraint-mapping>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Mapping/Loader/constraint-mapping.xml";
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

    <group-sequence>
       <value>Foo</value>
       <value>Entity</value>
    </group-sequence>

    <!-- CLASS CONSTRAINTS -->

    <!-- Custom constraint -->
    <constraint name=\"Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA\" />

    <!-- Custom constraint with namespace abbreviation-->
    <constraint name=\"custom:ConstraintB\" />

    <!-- Callbacks -->
    <constraint name=\"Callback\">validateMe</constraint>

    <constraint name=\"Callback\">validateMeStatic</constraint>

    <constraint name=\"Callback\">
        <value>Symfony\\Component\\Validator\\Tests\\Fixtures\\CallbackClass</value>
        <value>callback</value>
    </constraint>

    <!-- Traverse with boolean default option -->
    <constraint name=\"Traverse\">
        false
    </constraint>

    <!-- PROPERTY CONSTRAINTS -->

    <property name=\"firstName\">

      <!-- Constraint without value -->
      <constraint name=\"NotNull\" />

      <!-- Constraint with single value -->
      <constraint name=\"Range\">
         <option name=\"min\">3</option>
      </constraint>

      <!-- Constraint with multiple values -->
      <constraint name=\"Choice\">
        <value>A</value>
        <value>B</value>
      </constraint>

      <!-- Constraint with child constraints -->
      <constraint name=\"All\">
        <constraint name=\"NotNull\" />
        <constraint name=\"Range\">
           <option name=\"min\">3</option>
        </constraint>

      </constraint>

      <!-- Option with child constraints -->
      <constraint name=\"All\">
        <option name=\"constraints\">
          <constraint name=\"NotNull\" />
          <constraint name=\"Range\">
             <option name=\"min\">3</option>
          </constraint>
        </option>
      </constraint>

      <!-- Value with child constraints -->
      <constraint name=\"Collection\">
        <option name=\"fields\">
          <value key=\"foo\">
            <constraint name=\"NotNull\" />
            <constraint name=\"Range\">
               <option name=\"min\">3</option>
            </constraint>
          </value>
          <value key=\"bar\">
            <constraint name=\"Range\">
               <option name=\"min\">5</option>
            </constraint>
          </value>
        </option>
      </constraint>

      <!-- Constraint with options -->
      <constraint name=\"Choice\">
        <!-- Option with single value -->
        <option name=\"message\"> Must be one of %choices% </option>
        <!-- Option with multiple values -->
        <option name=\"choices\">
          <value>A</value>
          <value>B</value>
        </option>
      </constraint>
    </property>

    <!-- GETTER CONSTRAINTS -->

    <getter property=\"lastName\">
      <constraint name=\"NotNull\" />
    </getter>
    <getter property=\"valid\">
      <constraint name=\"IsTrue\" />
    </getter>
    <getter property=\"permissions\">
      <constraint name=\"IsTrue\" />
    </getter>
  </class>

  <class name=\"Symfony\\Component\\Validator\\Tests\\Fixtures\\GroupSequenceProviderEntity\">

    <!-- GROUP SEQUENCE PROVIDER -->
    <group-sequence-provider />

  </class>
</constraint-mapping>
", "vendor/symfony/validator/Tests/Mapping/Loader/constraint-mapping.xml", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Mapping/Loader/constraint-mapping.xml");
    }
}
