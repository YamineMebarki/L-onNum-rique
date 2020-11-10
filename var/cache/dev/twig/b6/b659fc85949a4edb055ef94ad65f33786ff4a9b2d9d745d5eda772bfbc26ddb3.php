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

/* vendor/symfony/yaml/Tests/Fixtures/YtsErrorTests.yml */
class __TwigTemplate_01478b396006a50dacc823a95a515daa6f02144cdd6e46af0eb1f9a7154089cd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsErrorTests.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsErrorTests.yml"));

        // line 1
        echo "---
test: Missing value for hash item
todo: true
brief: |
    Third item in this hash doesn't have a value
yaml: |
    okay: value
    also okay: ~
    causes error because no value specified
    last key: value okay here too
python-error: causes error because no value specified

---
test: Not indenting enough
brief: |
    There was a bug in PyYaml where it was off by one
    in the indentation check.  It was allowing the YAML
    below.
# This is actually valid YAML now. Someone should tell showell.
yaml: |
    foo:
    firstline: 1
    secondline: 2
php: |
  ['foo' => null, 'firstline' => 1, 'secondline' => 2]
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Fixtures/YtsErrorTests.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("---
test: Missing value for hash item
todo: true
brief: |
    Third item in this hash doesn't have a value
yaml: |
    okay: value
    also okay: ~
    causes error because no value specified
    last key: value okay here too
python-error: causes error because no value specified

---
test: Not indenting enough
brief: |
    There was a bug in PyYaml where it was off by one
    in the indentation check.  It was allowing the YAML
    below.
# This is actually valid YAML now. Someone should tell showell.
yaml: |
    foo:
    firstline: 1
    secondline: 2
php: |
  ['foo' => null, 'firstline' => 1, 'secondline' => 2]
", "vendor/symfony/yaml/Tests/Fixtures/YtsErrorTests.yml", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Fixtures/YtsErrorTests.yml");
    }
}
