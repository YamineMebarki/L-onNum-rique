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

/* vendor/symfony/yaml/Tests/Fixtures/YtsAnchorAlias.yml */
class __TwigTemplate_466e72fa67a5e4c61a3b7e67332cae47982c7633742b0661bfb571e49dcf0b71 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsAnchorAlias.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsAnchorAlias.yml"));

        // line 1
        echo "--- %YAML:1.0
test: Simple Alias Example
brief: >
    If you need to refer to the same item of data twice,
    you can give that item an alias.  The alias is a plain
    string, starting with an ampersand.  The item may then
    be referred to by the alias throughout your document
    by using an asterisk before the name of the alias.
    This is called an anchor.
yaml: |
    - &showell Steve
    - Clark
    - Brian
    - Oren
    - *showell
php: |
    ['Steve', 'Clark', 'Brian', 'Oren', 'Steve']

---
test: Alias of a Mapping
brief: >
    An alias can be used on any item of data, including
    sequences, mappings, and other complex data types.
yaml: |
    - &hello
        Meat: pork
        Starch: potato
    - banana
    - *hello
php: |
    [['Meat'=>'pork', 'Starch'=>'potato'], 'banana', ['Meat'=>'pork', 'Starch'=>'potato']]
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Fixtures/YtsAnchorAlias.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("--- %YAML:1.0
test: Simple Alias Example
brief: >
    If you need to refer to the same item of data twice,
    you can give that item an alias.  The alias is a plain
    string, starting with an ampersand.  The item may then
    be referred to by the alias throughout your document
    by using an asterisk before the name of the alias.
    This is called an anchor.
yaml: |
    - &showell Steve
    - Clark
    - Brian
    - Oren
    - *showell
php: |
    ['Steve', 'Clark', 'Brian', 'Oren', 'Steve']

---
test: Alias of a Mapping
brief: >
    An alias can be used on any item of data, including
    sequences, mappings, and other complex data types.
yaml: |
    - &hello
        Meat: pork
        Starch: potato
    - banana
    - *hello
php: |
    [['Meat'=>'pork', 'Starch'=>'potato'], 'banana', ['Meat'=>'pork', 'Starch'=>'potato']]
", "vendor/symfony/yaml/Tests/Fixtures/YtsAnchorAlias.yml", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Fixtures/YtsAnchorAlias.yml");
    }
}
