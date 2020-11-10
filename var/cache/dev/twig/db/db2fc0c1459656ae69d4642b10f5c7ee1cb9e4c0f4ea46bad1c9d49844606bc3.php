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

/* vendor/symfony/serializer/Tests/Fixtures/serialization.yml */
class __TwigTemplate_c5ee80cdd0437cf25eecabad8b96867ae890ce2f11334038ce61a1c2c2cf1ab7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Fixtures/serialization.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Fixtures/serialization.yml"));

        // line 1
        echo "'Symfony\\Component\\Serializer\\Tests\\Fixtures\\GroupDummy':
  attributes:
    foo:
      groups: ['group1', 'group2']
    bar:
      groups: ['group2']
'Symfony\\Component\\Serializer\\Tests\\Fixtures\\MaxDepthDummy':
  attributes:
    foo:
      max_depth: 2
    bar:
      max_depth: 3
'Symfony\\Component\\Serializer\\Tests\\Fixtures\\SerializedNameDummy':
  attributes:
    foo:
      serialized_name: 'baz'
    bar:
      serialized_name: 'qux'
'Symfony\\Component\\Serializer\\Tests\\Fixtures\\AbstractDummy':
  discriminator_map:
    type_property: type
    mapping:
      first: 'Symfony\\Component\\Serializer\\Tests\\Fixtures\\AbstractDummyFirstChild'
      second: 'Symfony\\Component\\Serializer\\Tests\\Fixtures\\AbstractDummySecondChild'
  attributes:
    foo: ~
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Fixtures/serialization.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("'Symfony\\Component\\Serializer\\Tests\\Fixtures\\GroupDummy':
  attributes:
    foo:
      groups: ['group1', 'group2']
    bar:
      groups: ['group2']
'Symfony\\Component\\Serializer\\Tests\\Fixtures\\MaxDepthDummy':
  attributes:
    foo:
      max_depth: 2
    bar:
      max_depth: 3
'Symfony\\Component\\Serializer\\Tests\\Fixtures\\SerializedNameDummy':
  attributes:
    foo:
      serialized_name: 'baz'
    bar:
      serialized_name: 'qux'
'Symfony\\Component\\Serializer\\Tests\\Fixtures\\AbstractDummy':
  discriminator_map:
    type_property: type
    mapping:
      first: 'Symfony\\Component\\Serializer\\Tests\\Fixtures\\AbstractDummyFirstChild'
      second: 'Symfony\\Component\\Serializer\\Tests\\Fixtures\\AbstractDummySecondChild'
  attributes:
    foo: ~
", "vendor/symfony/serializer/Tests/Fixtures/serialization.yml", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Fixtures/serialization.yml");
    }
}
