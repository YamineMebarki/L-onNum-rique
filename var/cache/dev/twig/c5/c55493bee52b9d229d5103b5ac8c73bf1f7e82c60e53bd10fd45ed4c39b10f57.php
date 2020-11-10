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

/* vendor/symfony/yaml/Tests/Fixtures/YtsFlowCollections.yml */
class __TwigTemplate_ff095f6484b551e80fc85495bedeec01dccd6f8fcd9899a9718068fa22a7092b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsFlowCollections.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsFlowCollections.yml"));

        // line 1
        echo "---
test: Simple Inline Array
brief: >
    Sequences can be contained on a
    single line, using the inline syntax.
    Separate each entry with commas and
    enclose in square brackets.
yaml: |
    seq: [ a, b, c ]
php: |
    ['seq' => ['a', 'b', 'c']]
---
test: Simple Inline Hash
brief: >
    Mapping can also be contained on
    a single line, using the inline
    syntax.  Each key-value pair is
    separated by a colon, with a comma
    between each entry in the mapping.
    Enclose with curly braces.
yaml: |
    hash: { name: Steve, foo: bar }
php: |
    ['hash' => ['name' => 'Steve', 'foo' => 'bar']]
---
test: Multi-line Inline Collections
todo: true
brief: >
    Both inline sequences and inline mappings
    can span multiple lines, provided that you
    indent the additional lines.
yaml: |
    languages: [ Ruby,
                 Perl,
                 Python ]
    websites: { YAML: yaml.org,
                Ruby: ruby-lang.org,
                Python: python.org,
                Perl: use.perl.org }
php: |
    [
      'languages' => ['Ruby', 'Perl', 'Python'],
      'websites' => [
        'YAML' => 'yaml.org',
        'Ruby' => 'ruby-lang.org',
        'Python' => 'python.org',
        'Perl' => 'use.perl.org'
      ]
    ]
---
test: Commas in Values (not in the spec!)
todo: true
brief: >
    List items in collections are delimited by commas, but
    there must be a space after each comma.  This allows you
    to add numbers without quoting.
yaml: |
    attendances: [ 45,123, 70,000, 17,222 ]
php: |
    ['attendances' => [45123, 70000, 17222]]
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Fixtures/YtsFlowCollections.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("---
test: Simple Inline Array
brief: >
    Sequences can be contained on a
    single line, using the inline syntax.
    Separate each entry with commas and
    enclose in square brackets.
yaml: |
    seq: [ a, b, c ]
php: |
    ['seq' => ['a', 'b', 'c']]
---
test: Simple Inline Hash
brief: >
    Mapping can also be contained on
    a single line, using the inline
    syntax.  Each key-value pair is
    separated by a colon, with a comma
    between each entry in the mapping.
    Enclose with curly braces.
yaml: |
    hash: { name: Steve, foo: bar }
php: |
    ['hash' => ['name' => 'Steve', 'foo' => 'bar']]
---
test: Multi-line Inline Collections
todo: true
brief: >
    Both inline sequences and inline mappings
    can span multiple lines, provided that you
    indent the additional lines.
yaml: |
    languages: [ Ruby,
                 Perl,
                 Python ]
    websites: { YAML: yaml.org,
                Ruby: ruby-lang.org,
                Python: python.org,
                Perl: use.perl.org }
php: |
    [
      'languages' => ['Ruby', 'Perl', 'Python'],
      'websites' => [
        'YAML' => 'yaml.org',
        'Ruby' => 'ruby-lang.org',
        'Python' => 'python.org',
        'Perl' => 'use.perl.org'
      ]
    ]
---
test: Commas in Values (not in the spec!)
todo: true
brief: >
    List items in collections are delimited by commas, but
    there must be a space after each comma.  This allows you
    to add numbers without quoting.
yaml: |
    attendances: [ 45,123, 70,000, 17,222 ]
php: |
    ['attendances' => [45123, 70000, 17222]]
", "vendor/symfony/yaml/Tests/Fixtures/YtsFlowCollections.yml", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Fixtures/YtsFlowCollections.yml");
    }
}
