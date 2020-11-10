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

/* vendor/symfony/yaml/Tests/Fixtures/unindentedCollections.yml */
class __TwigTemplate_6a8aa404d63b08a5c620c5922158b7a60e6c8b72ef3cdce2b9d584fc2c1cbabd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/unindentedCollections.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/unindentedCollections.yml"));

        // line 1
        echo "--- %YAML:1.0
test: Unindented collection
brief: >
    Unindented collection
yaml: |
    collection:
    - item1
    - item2
    - item3
php: |
    ['collection' => ['item1', 'item2', 'item3']]
---
test: Nested unindented collection (two levels)
brief: >
    Nested unindented collection
yaml: |
    collection:
        key:
        - a
        - b
        - c
php: |
    ['collection' => ['key' => ['a', 'b', 'c']]]
---
test: Nested unindented collection (three levels)
brief: >
    Nested unindented collection
yaml: |
    collection:
        key:
            subkey:
            - one
            - two
            - three
php: |
    ['collection' => ['key' => ['subkey' => ['one', 'two', 'three']]]]
---
test: Key/value after unindented collection (1)
brief: >
    Key/value after unindented collection (1)
yaml: |
    collection:
        key:
        - a
        - b
        - c
    foo: bar
php: |
    ['collection' => ['key' => ['a', 'b', 'c']], 'foo' => 'bar']
---
test: Key/value after unindented collection (at the same level)
brief: >
    Key/value after unindented collection
yaml: |
    collection:
        key:
        - a
        - b
        - c
        foo: bar
php: |
    ['collection' => ['key' => ['a', 'b', 'c'], 'foo' => 'bar']]
---
test: Shortcut Key after unindented collection
brief: >
    Key/value after unindented collection
yaml: |
    collection:
    - key: foo
      foo: bar
php: |
    ['collection' => [['key' => 'foo', 'foo' => 'bar']]]
---
test: Shortcut Key after unindented collection with custom spaces
brief: >
    Key/value after unindented collection
yaml: |
    collection:
    -  key: foo
       foo: bar
php: |
    ['collection' => [['key' => 'foo', 'foo' => 'bar']]]
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Fixtures/unindentedCollections.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("--- %YAML:1.0
test: Unindented collection
brief: >
    Unindented collection
yaml: |
    collection:
    - item1
    - item2
    - item3
php: |
    ['collection' => ['item1', 'item2', 'item3']]
---
test: Nested unindented collection (two levels)
brief: >
    Nested unindented collection
yaml: |
    collection:
        key:
        - a
        - b
        - c
php: |
    ['collection' => ['key' => ['a', 'b', 'c']]]
---
test: Nested unindented collection (three levels)
brief: >
    Nested unindented collection
yaml: |
    collection:
        key:
            subkey:
            - one
            - two
            - three
php: |
    ['collection' => ['key' => ['subkey' => ['one', 'two', 'three']]]]
---
test: Key/value after unindented collection (1)
brief: >
    Key/value after unindented collection (1)
yaml: |
    collection:
        key:
        - a
        - b
        - c
    foo: bar
php: |
    ['collection' => ['key' => ['a', 'b', 'c']], 'foo' => 'bar']
---
test: Key/value after unindented collection (at the same level)
brief: >
    Key/value after unindented collection
yaml: |
    collection:
        key:
        - a
        - b
        - c
        foo: bar
php: |
    ['collection' => ['key' => ['a', 'b', 'c'], 'foo' => 'bar']]
---
test: Shortcut Key after unindented collection
brief: >
    Key/value after unindented collection
yaml: |
    collection:
    - key: foo
      foo: bar
php: |
    ['collection' => [['key' => 'foo', 'foo' => 'bar']]]
---
test: Shortcut Key after unindented collection with custom spaces
brief: >
    Key/value after unindented collection
yaml: |
    collection:
    -  key: foo
       foo: bar
php: |
    ['collection' => [['key' => 'foo', 'foo' => 'bar']]]
", "vendor/symfony/yaml/Tests/Fixtures/unindentedCollections.yml", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Fixtures/unindentedCollections.yml");
    }
}
