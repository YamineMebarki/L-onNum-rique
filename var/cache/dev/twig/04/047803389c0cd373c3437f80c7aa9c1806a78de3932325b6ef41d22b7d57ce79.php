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

/* vendor/symfony/yaml/Tests/Fixtures/numericMappingKeys.yml */
class __TwigTemplate_2a4967990442c128269585eabc1b368a37420057c6df9f09974de13b3ece1666 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/numericMappingKeys.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/numericMappingKeys.yml"));

        // line 1
        echo "--- %YAML:1.0
test: A sequence with an unordered array
brief: >
  A sequence with an unordered array
yaml: |
  1: foo
  0: bar
php: |
  [1 => 'foo', 0 => 'bar']
---
test: Integers as Map Keys
brief: >
    An integer can be used as dictionary key.
yaml: |
    1: one
    2: two
    3: three
php: |
    [
        1 => 'one',
        2 => 'two',
        3 => 'three'
    ]
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Fixtures/numericMappingKeys.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("--- %YAML:1.0
test: A sequence with an unordered array
brief: >
  A sequence with an unordered array
yaml: |
  1: foo
  0: bar
php: |
  [1 => 'foo', 0 => 'bar']
---
test: Integers as Map Keys
brief: >
    An integer can be used as dictionary key.
yaml: |
    1: one
    2: two
    3: three
php: |
    [
        1 => 'one',
        2 => 'two',
        3 => 'three'
    ]
", "vendor/symfony/yaml/Tests/Fixtures/numericMappingKeys.yml", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Fixtures/numericMappingKeys.yml");
    }
}
