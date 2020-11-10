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

/* vendor/symfony/yaml/Tests/Fixtures/YtsBlockMapping.yml */
class __TwigTemplate_05feb26565b8ba5978b5f64c2a072fc606bb0fbe666b833789b27e3df52c626c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsBlockMapping.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsBlockMapping.yml"));

        // line 1
        echo "---
test: One Element Mapping
brief: |
    A mapping with one key/value pair
yaml: |
    foo: bar
php: |
    ['foo' => 'bar']
---
test: Multi Element Mapping
brief: |
    More than one key/value pair
yaml: |
    red: baron
    white: walls
    blue: berries
php: |
    [
     'red' => 'baron',
     'white' => 'walls',
     'blue' => 'berries',
    ]
---
test: Values aligned
brief: |
    Often times human editors of documents will align the values even
    though YAML emitters generally don't.
yaml: |
    red:   baron
    white: walls
    blue:  berries
php: |
    [
     'red' => 'baron',
     'white' => 'walls',
     'blue' => 'berries',
    ]
---
test: Colons aligned
brief: |
    Spaces can come before the ': ' key/value separator.
yaml: |
    red   : baron
    white : walls
    blue  : berries
php: |
    [
     'red' => 'baron',
     'white' => 'walls',
     'blue' => 'berries',
    ]
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Fixtures/YtsBlockMapping.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("---
test: One Element Mapping
brief: |
    A mapping with one key/value pair
yaml: |
    foo: bar
php: |
    ['foo' => 'bar']
---
test: Multi Element Mapping
brief: |
    More than one key/value pair
yaml: |
    red: baron
    white: walls
    blue: berries
php: |
    [
     'red' => 'baron',
     'white' => 'walls',
     'blue' => 'berries',
    ]
---
test: Values aligned
brief: |
    Often times human editors of documents will align the values even
    though YAML emitters generally don't.
yaml: |
    red:   baron
    white: walls
    blue:  berries
php: |
    [
     'red' => 'baron',
     'white' => 'walls',
     'blue' => 'berries',
    ]
---
test: Colons aligned
brief: |
    Spaces can come before the ': ' key/value separator.
yaml: |
    red   : baron
    white : walls
    blue  : berries
php: |
    [
     'red' => 'baron',
     'white' => 'walls',
     'blue' => 'berries',
    ]
", "vendor/symfony/yaml/Tests/Fixtures/YtsBlockMapping.yml", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Fixtures/YtsBlockMapping.yml");
    }
}
