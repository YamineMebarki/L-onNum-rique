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

/* vendor/symfony/yaml/Tests/Fixtures/sfQuotes.yml */
class __TwigTemplate_016a12226b8ee12a8e44e22bd22778d52ab096d6e2bdcf549d58b5092fff4cc5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/sfQuotes.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/sfQuotes.yml"));

        // line 1
        echo "--- %YAML:1.0
test: Some characters at the beginning of a string must be escaped
brief: >
    Some characters at the beginning of a string must be escaped
yaml: |
    foo: '| bar'
php: |
    ['foo' => '| bar']
---
test: A key can be a quoted string
brief: >
  A key can be a quoted string
yaml: |
    \"foo1\": bar
    'foo2': bar
    \"foo \\\" bar\": bar
    'foo '' bar': bar
    'foo3: ': bar
    \"foo4: \": bar
    foo5: { \"foo \\\" bar: \": bar, 'foo '' bar: ': bar }
php: |
    [
      'foo1' => 'bar',
      'foo2' => 'bar',
      'foo \" bar' => 'bar',
      'foo \\' bar' => 'bar',
      'foo3: ' => 'bar',
      'foo4: ' => 'bar',
      'foo5' => [
        'foo \" bar: ' => 'bar',
        'foo \\' bar: ' => 'bar',
      ],
    ]
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Fixtures/sfQuotes.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("--- %YAML:1.0
test: Some characters at the beginning of a string must be escaped
brief: >
    Some characters at the beginning of a string must be escaped
yaml: |
    foo: '| bar'
php: |
    ['foo' => '| bar']
---
test: A key can be a quoted string
brief: >
  A key can be a quoted string
yaml: |
    \"foo1\": bar
    'foo2': bar
    \"foo \\\" bar\": bar
    'foo '' bar': bar
    'foo3: ': bar
    \"foo4: \": bar
    foo5: { \"foo \\\" bar: \": bar, 'foo '' bar: ': bar }
php: |
    [
      'foo1' => 'bar',
      'foo2' => 'bar',
      'foo \" bar' => 'bar',
      'foo \\' bar' => 'bar',
      'foo3: ' => 'bar',
      'foo4: ' => 'bar',
      'foo5' => [
        'foo \" bar: ' => 'bar',
        'foo \\' bar: ' => 'bar',
      ],
    ]
", "vendor/symfony/yaml/Tests/Fixtures/sfQuotes.yml", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Fixtures/sfQuotes.yml");
    }
}
