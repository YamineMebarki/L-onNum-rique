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

/* vendor/symfony/yaml/Tests/Fixtures/YtsDocumentSeparator.yml */
class __TwigTemplate_16409ab4bfd7a05a7ad2fbc13f29fa1808b58402bf33731e478e8851d2eda62f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsDocumentSeparator.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsDocumentSeparator.yml"));

        // line 1
        echo "--- %YAML:1.0
test: Trailing Document Separator
todo: true
brief: >
    You can separate YAML documents
    with a string of three dashes.
yaml: |
    - foo: 1
      bar: 2
    ---
    more: stuff
python: |
    [
        [ { 'foo': 1, 'bar': 2 } ],
        { 'more': 'stuff' }
    ]
ruby: |
    [ { 'foo' => 1, 'bar' => 2 } ]

---
test: Leading Document Separator
todo: true
brief: >
    You can explicitly give an opening
    document separator to your YAML stream.
yaml: |
    ---
    - foo: 1
      bar: 2
    ---
    more: stuff
python: |
    [
        [ {'foo': 1, 'bar': 2}],
        {'more': 'stuff'}
    ]
ruby: |
    [ { 'foo' => 1, 'bar' => 2 } ]

---
test: YAML Header
todo: true
brief: >
    The opening separator can contain directives
    to the YAML parser, such as the version
    number.
yaml: |
    --- %YAML:1.0
    foo: 1
    bar: 2
php: |
    ['foo' => 1, 'bar' => 2]
documents: 1

---
test: Red Herring Document Separator
brief: >
    Separators included in blocks or strings
    are treated as blocks or strings, as the
    document separator should have no indentation
    preceding it.
yaml: |
    foo: |
        ---
php: |
    ['foo' => \"---\\n\"]

---
test: Multiple Document Separators in Block
brief: >
    This technique allows you to embed other YAML
    documents within literal blocks.
yaml: |
    foo: |
        ---
        foo: bar
        ---
        yo: baz
    bar: |
        fooness
php: |
    [
       'foo' => \"---\\nfoo: bar\\n---\\nyo: baz\\n\",
       'bar' => \"fooness\\n\"
    ]
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Fixtures/YtsDocumentSeparator.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("--- %YAML:1.0
test: Trailing Document Separator
todo: true
brief: >
    You can separate YAML documents
    with a string of three dashes.
yaml: |
    - foo: 1
      bar: 2
    ---
    more: stuff
python: |
    [
        [ { 'foo': 1, 'bar': 2 } ],
        { 'more': 'stuff' }
    ]
ruby: |
    [ { 'foo' => 1, 'bar' => 2 } ]

---
test: Leading Document Separator
todo: true
brief: >
    You can explicitly give an opening
    document separator to your YAML stream.
yaml: |
    ---
    - foo: 1
      bar: 2
    ---
    more: stuff
python: |
    [
        [ {'foo': 1, 'bar': 2}],
        {'more': 'stuff'}
    ]
ruby: |
    [ { 'foo' => 1, 'bar' => 2 } ]

---
test: YAML Header
todo: true
brief: >
    The opening separator can contain directives
    to the YAML parser, such as the version
    number.
yaml: |
    --- %YAML:1.0
    foo: 1
    bar: 2
php: |
    ['foo' => 1, 'bar' => 2]
documents: 1

---
test: Red Herring Document Separator
brief: >
    Separators included in blocks or strings
    are treated as blocks or strings, as the
    document separator should have no indentation
    preceding it.
yaml: |
    foo: |
        ---
php: |
    ['foo' => \"---\\n\"]

---
test: Multiple Document Separators in Block
brief: >
    This technique allows you to embed other YAML
    documents within literal blocks.
yaml: |
    foo: |
        ---
        foo: bar
        ---
        yo: baz
    bar: |
        fooness
php: |
    [
       'foo' => \"---\\nfoo: bar\\n---\\nyo: baz\\n\",
       'bar' => \"fooness\\n\"
    ]
", "vendor/symfony/yaml/Tests/Fixtures/YtsDocumentSeparator.yml", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Fixtures/YtsDocumentSeparator.yml");
    }
}
