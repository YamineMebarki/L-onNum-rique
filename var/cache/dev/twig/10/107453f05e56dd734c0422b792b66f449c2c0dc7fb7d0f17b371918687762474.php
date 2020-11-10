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

/* vendor/symfony/yaml/Tests/Fixtures/sfTests.yml */
class __TwigTemplate_6feeca966ee7a12f9def0c1a76214fdb0cd983cc11fa164d8c61bc3f3f8a2f24 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/sfTests.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/sfTests.yml"));

        // line 1
        echo "--- %YAML:1.0
test: Multiple quoted string on one line
brief: >
    Multiple quoted string on one line
yaml: |
    stripped_title: { name: \"foo bar\", help: \"bar foo\" }
php: |
    ['stripped_title' => ['name' => 'foo bar', 'help' => 'bar foo']]
---
test: Empty sequence
yaml: |
    foo: [ ]
php: |
    ['foo' => []]
---
test: Empty value
yaml: |
    foo:
php: |
    ['foo' => null]
---
test: Inline string parsing
brief: >
    Inline string parsing
yaml: |
    test: ['complex: string', 'another [string]']
php: |
    ['test' => ['complex: string', 'another [string]']]
---
test: Boolean
brief: >
    Boolean
yaml: |
    - false
    - true
    - null
    - ~
    - 'false'
    - 'true'
    - 'null'
    - '~'
php: |
    [
      false,
      true,
      null,
      null,
      'false',
      'true',
      'null',
      '~',
    ]
---
test: Empty lines in literal blocks
brief: >
  Empty lines in literal blocks
yaml: |
  foo:
    bar: |
      foo


        
      bar
php: |
  ['foo' => ['bar' => \"foo\\n\\n\\n  \\nbar\\n\"]]
---
test: Empty lines in folded blocks
brief: >
  Empty lines in folded blocks
yaml: |
  foo:
    bar: >

      foo

      
      bar
php: |
  ['foo' => ['bar' => \"\\nfoo\\n\\nbar\\n\"]]
---
test: IP addresses
brief: >
  IP addresses
yaml: |
  foo: 10.0.0.2
php: |
  ['foo' => '10.0.0.2']
---
test: A sequence with an embedded mapping
brief: >
  A sequence with an embedded mapping
yaml: |
  - foo
  - bar: { bar: foo }
php: |
  ['foo', ['bar' => ['bar' => 'foo']]]
---
test: Octal
brief: as in spec example 2.19, octal value is converted
yaml: |
  foo: 0123
php: |
  ['foo' => 83]
---
test: Octal strings
brief: Octal notation in a string must remain a string
yaml: |
  foo: \"0123\"
php: |
  ['foo' => '0123']
---
test: Octal strings
brief: Octal notation in a string must remain a string
yaml: |
  foo: '0123'
php: |
  ['foo' => '0123']
---
test: Octal strings
brief: Octal notation in a string must remain a string
yaml: |
  foo: |
    0123
php: |
  ['foo' => \"0123\\n\"]
---
test: Document as a simple hash
brief: Document as a simple hash
yaml: |
  { foo: bar }
php: |
  ['foo' => 'bar']
---
test: Document as a simple array
brief: Document as a simple array
yaml: |
  [ foo, bar ]
php: |
  ['foo', 'bar']
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Fixtures/sfTests.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("--- %YAML:1.0
test: Multiple quoted string on one line
brief: >
    Multiple quoted string on one line
yaml: |
    stripped_title: { name: \"foo bar\", help: \"bar foo\" }
php: |
    ['stripped_title' => ['name' => 'foo bar', 'help' => 'bar foo']]
---
test: Empty sequence
yaml: |
    foo: [ ]
php: |
    ['foo' => []]
---
test: Empty value
yaml: |
    foo:
php: |
    ['foo' => null]
---
test: Inline string parsing
brief: >
    Inline string parsing
yaml: |
    test: ['complex: string', 'another [string]']
php: |
    ['test' => ['complex: string', 'another [string]']]
---
test: Boolean
brief: >
    Boolean
yaml: |
    - false
    - true
    - null
    - ~
    - 'false'
    - 'true'
    - 'null'
    - '~'
php: |
    [
      false,
      true,
      null,
      null,
      'false',
      'true',
      'null',
      '~',
    ]
---
test: Empty lines in literal blocks
brief: >
  Empty lines in literal blocks
yaml: |
  foo:
    bar: |
      foo


        
      bar
php: |
  ['foo' => ['bar' => \"foo\\n\\n\\n  \\nbar\\n\"]]
---
test: Empty lines in folded blocks
brief: >
  Empty lines in folded blocks
yaml: |
  foo:
    bar: >

      foo

      
      bar
php: |
  ['foo' => ['bar' => \"\\nfoo\\n\\nbar\\n\"]]
---
test: IP addresses
brief: >
  IP addresses
yaml: |
  foo: 10.0.0.2
php: |
  ['foo' => '10.0.0.2']
---
test: A sequence with an embedded mapping
brief: >
  A sequence with an embedded mapping
yaml: |
  - foo
  - bar: { bar: foo }
php: |
  ['foo', ['bar' => ['bar' => 'foo']]]
---
test: Octal
brief: as in spec example 2.19, octal value is converted
yaml: |
  foo: 0123
php: |
  ['foo' => 83]
---
test: Octal strings
brief: Octal notation in a string must remain a string
yaml: |
  foo: \"0123\"
php: |
  ['foo' => '0123']
---
test: Octal strings
brief: Octal notation in a string must remain a string
yaml: |
  foo: '0123'
php: |
  ['foo' => '0123']
---
test: Octal strings
brief: Octal notation in a string must remain a string
yaml: |
  foo: |
    0123
php: |
  ['foo' => \"0123\\n\"]
---
test: Document as a simple hash
brief: Document as a simple hash
yaml: |
  { foo: bar }
php: |
  ['foo' => 'bar']
---
test: Document as a simple array
brief: Document as a simple array
yaml: |
  [ foo, bar ]
php: |
  ['foo', 'bar']
", "vendor/symfony/yaml/Tests/Fixtures/sfTests.yml", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Fixtures/sfTests.yml");
    }
}
