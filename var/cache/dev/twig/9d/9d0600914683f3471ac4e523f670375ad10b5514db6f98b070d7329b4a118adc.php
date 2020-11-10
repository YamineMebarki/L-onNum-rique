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

/* vendor/symfony/validator/Tests/Mapping/Loader/constraint-mapping.yml */
class __TwigTemplate_a3e7af95e15ffc3346aea7232c64e52d38d8c44311ce8db94e30b882f4980959 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/Loader/constraint-mapping.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/Loader/constraint-mapping.yml"));

        // line 1
        echo "namespaces:
  custom: Symfony\\Component\\Validator\\Tests\\Fixtures\\

Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity:
  group_sequence:
    - Foo
    - Entity

  constraints:
    # Custom constraint
    - Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA: ~
    # Custom constraint with namespaces prefix
    - \"custom:ConstraintB\": ~
    # Callbacks
    - Callback: validateMe
    - Callback: validateMeStatic
    - Callback: [Symfony\\Component\\Validator\\Tests\\Fixtures\\CallbackClass, callback]

  properties:
    firstName:
      # Constraint without value
      - NotNull: ~
      # Constraint with single value
      - Range:
          min: 3
      # Constraint with multiple values
      - Choice: [A, B]
      # Constraint with child constraints
      - All:
          - NotNull: ~
          - Range:
              min: 3
      # Option with child constraints
      - All:
          constraints:
            - NotNull: ~
            - Range:
                min: 3
      # Value with child constraints
      - Collection:
          fields:
            foo:
              - NotNull: ~
              - Range:
                  min: 3
            bar:
              - Range:
                  min: 5
      # Constraint with options
      - Choice: { choices: [A, B], message: Must be one of %choices% }
    dummy:

  getters:
    lastName:
      - NotNull: ~
    valid:
      - \"IsTrue\": ~
    permissions:
      - \"IsTrue\": ~

Symfony\\Component\\Validator\\Tests\\Fixtures\\GroupSequenceProviderEntity:
  group_sequence_provider: true
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Mapping/Loader/constraint-mapping.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("namespaces:
  custom: Symfony\\Component\\Validator\\Tests\\Fixtures\\

Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity:
  group_sequence:
    - Foo
    - Entity

  constraints:
    # Custom constraint
    - Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA: ~
    # Custom constraint with namespaces prefix
    - \"custom:ConstraintB\": ~
    # Callbacks
    - Callback: validateMe
    - Callback: validateMeStatic
    - Callback: [Symfony\\Component\\Validator\\Tests\\Fixtures\\CallbackClass, callback]

  properties:
    firstName:
      # Constraint without value
      - NotNull: ~
      # Constraint with single value
      - Range:
          min: 3
      # Constraint with multiple values
      - Choice: [A, B]
      # Constraint with child constraints
      - All:
          - NotNull: ~
          - Range:
              min: 3
      # Option with child constraints
      - All:
          constraints:
            - NotNull: ~
            - Range:
                min: 3
      # Value with child constraints
      - Collection:
          fields:
            foo:
              - NotNull: ~
              - Range:
                  min: 3
            bar:
              - Range:
                  min: 5
      # Constraint with options
      - Choice: { choices: [A, B], message: Must be one of %choices% }
    dummy:

  getters:
    lastName:
      - NotNull: ~
    valid:
      - \"IsTrue\": ~
    permissions:
      - \"IsTrue\": ~

Symfony\\Component\\Validator\\Tests\\Fixtures\\GroupSequenceProviderEntity:
  group_sequence_provider: true
", "vendor/symfony/validator/Tests/Mapping/Loader/constraint-mapping.yml", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Mapping/Loader/constraint-mapping.yml");
    }
}
