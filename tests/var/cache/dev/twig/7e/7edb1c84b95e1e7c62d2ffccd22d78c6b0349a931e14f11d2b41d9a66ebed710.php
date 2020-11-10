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

/* vendor/symfony/yaml/Tests/Fixtures/YtsNullsAndEmpties.yml */
class __TwigTemplate_ac650f2a83e305e0aa44304398518632ede7f25fe70ae1aa9edd7bdb5899dc94 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsNullsAndEmpties.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsNullsAndEmpties.yml"));

        // line 1
        echo "--- %YAML:1.0
test: Empty Sequence
brief: >
    You can represent the empty sequence
    with an empty inline sequence.
yaml: |
    empty: []
php: |
    ['empty' => []]
---
test: Empty Mapping
brief: >
    You can represent the empty mapping
    with an empty inline mapping.
yaml: |
    empty: {}
php: |
    ['empty' => []]
---
test: Empty Sequence as Entire Document
yaml: |
    []
php: |
    []
---
test: Empty Mapping as Entire Document
yaml: |
    {}
php: |
    []
---
test: Null as Document
yaml: |
    ~
php: |
    null
---
test: Empty String
brief: >
    You can represent an empty string
    with a pair of quotes.
yaml: |
    ''
php: |
    ''
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Fixtures/YtsNullsAndEmpties.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("--- %YAML:1.0
test: Empty Sequence
brief: >
    You can represent the empty sequence
    with an empty inline sequence.
yaml: |
    empty: []
php: |
    ['empty' => []]
---
test: Empty Mapping
brief: >
    You can represent the empty mapping
    with an empty inline mapping.
yaml: |
    empty: {}
php: |
    ['empty' => []]
---
test: Empty Sequence as Entire Document
yaml: |
    []
php: |
    []
---
test: Empty Mapping as Entire Document
yaml: |
    {}
php: |
    []
---
test: Null as Document
yaml: |
    ~
php: |
    null
---
test: Empty String
brief: >
    You can represent an empty string
    with a pair of quotes.
yaml: |
    ''
php: |
    ''
", "vendor/symfony/yaml/Tests/Fixtures/YtsNullsAndEmpties.yml", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Fixtures/YtsNullsAndEmpties.yml");
    }
}
