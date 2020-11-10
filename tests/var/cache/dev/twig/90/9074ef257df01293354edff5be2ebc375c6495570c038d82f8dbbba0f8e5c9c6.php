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

/* vendor/symfony/yaml/Tests/Fixtures/escapedCharacters.yml */
class __TwigTemplate_e94c25f1e3f337fb2b818cdfbf9c0074e9a315de253d80d8108e93edd603f044 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/escapedCharacters.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/escapedCharacters.yml"));

        // line 1
        echo "test: outside double quotes
yaml: |
    \\0 \\ \\a \\b \\n
php: |
    \"\\\\0 \\\\ \\\\a \\\\b \\\\n\"
---
test: 'null'
yaml: |
    \"\\0\"
php: |
    \"\\x00\"
---
test: bell
yaml: |
    \"\\a\"
php: |
    \"\\x07\"
---
test: backspace
yaml: |
    \"\\b\"
php: |
    \"\\x08\"
---
test: horizontal tab (1)
yaml: |
    \"\\t\"
php: |
    \"\\x09\"
---
test: horizontal tab (2)
yaml: |
    \"\\\t\"
php: |
    \"\\x09\"
---
test: line feed
yaml: |
    \"\\n\"
php: |
    \"\\x0a\"
---
test: vertical tab
yaml: |
    \"\\v\"
php: |
    \"\\x0b\"
---
test: form feed
yaml: |
    \"\\f\"
php: |
    \"\\x0c\"
---
test: carriage return
yaml: |
    \"\\r\"
php: |
    \"\\x0d\"
---
test: escape
yaml: |
    \"\\e\"
php: |
   \"\\x1b\"
---
test: space
yaml: |
    \"\\ \"
php: |
    \"\\x20\"
---
test: slash
yaml: |
    \"\\/\"
php: |
    \"\\x2f\"
---
test: backslash
yaml: |
    \"\\\\\"
php: |
    \"\\\\\"
---
test: Unicode next line
yaml: |
    \"\\N\"
php: |
    \"\\xc2\\x85\"
---
test: Unicode non-breaking space
yaml: |
    \"\\_\"
php: |
    \"\\xc2\\xa0\"
---
test: Unicode line separator
yaml: |
    \"\\L\"
php: |
    \"\\xe2\\x80\\xa8\"
---
test: Unicode paragraph separator
yaml: |
    \"\\P\"
php: |
    \"\\xe2\\x80\\xa9\"
---
test: Escaped 8-bit Unicode
yaml: |
    \"\\x42\"
php: |
    \"B\"
---
test: Escaped 16-bit Unicode
yaml: |
    \"\\u20ac\"
php: |
    \"\\xe2\\x82\\xac\"
---
test: Escaped 32-bit Unicode
yaml: |
    \"\\U00000043\"
php: |
    \"C\"
---
test: Example 5.13 Escaped Characters
note: |
    Currently throws an error parsing first line. Maybe Symfony Yaml doesn't support
    continuation of string across multiple lines? Keeping test here but disabled.
todo: true
yaml: |
    \"Fun with \\\\
    \\\" \\a \\b \\e \\f \\
    \\n \\r \\t \\v \\0 \\
    \\  \\_ \\N \\L \\P \\
    \\x41 \\u0041 \\U00000041\"
php: |
    \"Fun with \\x5C\\n\\x22 \\x07 \\x08 \\x1B \\x0C\\n\\x0A \\x0D \\x09 \\x0B \\x00\\n\\x20 \\xA0 \\x85 \\xe2\\x80\\xa8 \\xe2\\x80\\xa9\\nA A A\"
---
test: Double quotes with a line feed
yaml: |
   { double: \"some value\\n \\\"some quoted string\\\" and 'some single quotes one'\" }
php: |
    [
        'double' => \"some value\\n \\\"some quoted string\\\" and 'some single quotes one'\"
    ]
---
test: Backslashes
yaml: |
    { single: 'foo\\Var', no-quotes: foo\\Var, double: \"foo\\\\Var\" }
php: |
    [
        'single' => 'foo\\Var', 'no-quotes' => 'foo\\Var', 'double' => 'foo\\Var'
    ]
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Fixtures/escapedCharacters.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("test: outside double quotes
yaml: |
    \\0 \\ \\a \\b \\n
php: |
    \"\\\\0 \\\\ \\\\a \\\\b \\\\n\"
---
test: 'null'
yaml: |
    \"\\0\"
php: |
    \"\\x00\"
---
test: bell
yaml: |
    \"\\a\"
php: |
    \"\\x07\"
---
test: backspace
yaml: |
    \"\\b\"
php: |
    \"\\x08\"
---
test: horizontal tab (1)
yaml: |
    \"\\t\"
php: |
    \"\\x09\"
---
test: horizontal tab (2)
yaml: |
    \"\\\t\"
php: |
    \"\\x09\"
---
test: line feed
yaml: |
    \"\\n\"
php: |
    \"\\x0a\"
---
test: vertical tab
yaml: |
    \"\\v\"
php: |
    \"\\x0b\"
---
test: form feed
yaml: |
    \"\\f\"
php: |
    \"\\x0c\"
---
test: carriage return
yaml: |
    \"\\r\"
php: |
    \"\\x0d\"
---
test: escape
yaml: |
    \"\\e\"
php: |
   \"\\x1b\"
---
test: space
yaml: |
    \"\\ \"
php: |
    \"\\x20\"
---
test: slash
yaml: |
    \"\\/\"
php: |
    \"\\x2f\"
---
test: backslash
yaml: |
    \"\\\\\"
php: |
    \"\\\\\"
---
test: Unicode next line
yaml: |
    \"\\N\"
php: |
    \"\\xc2\\x85\"
---
test: Unicode non-breaking space
yaml: |
    \"\\_\"
php: |
    \"\\xc2\\xa0\"
---
test: Unicode line separator
yaml: |
    \"\\L\"
php: |
    \"\\xe2\\x80\\xa8\"
---
test: Unicode paragraph separator
yaml: |
    \"\\P\"
php: |
    \"\\xe2\\x80\\xa9\"
---
test: Escaped 8-bit Unicode
yaml: |
    \"\\x42\"
php: |
    \"B\"
---
test: Escaped 16-bit Unicode
yaml: |
    \"\\u20ac\"
php: |
    \"\\xe2\\x82\\xac\"
---
test: Escaped 32-bit Unicode
yaml: |
    \"\\U00000043\"
php: |
    \"C\"
---
test: Example 5.13 Escaped Characters
note: |
    Currently throws an error parsing first line. Maybe Symfony Yaml doesn't support
    continuation of string across multiple lines? Keeping test here but disabled.
todo: true
yaml: |
    \"Fun with \\\\
    \\\" \\a \\b \\e \\f \\
    \\n \\r \\t \\v \\0 \\
    \\  \\_ \\N \\L \\P \\
    \\x41 \\u0041 \\U00000041\"
php: |
    \"Fun with \\x5C\\n\\x22 \\x07 \\x08 \\x1B \\x0C\\n\\x0A \\x0D \\x09 \\x0B \\x00\\n\\x20 \\xA0 \\x85 \\xe2\\x80\\xa8 \\xe2\\x80\\xa9\\nA A A\"
---
test: Double quotes with a line feed
yaml: |
   { double: \"some value\\n \\\"some quoted string\\\" and 'some single quotes one'\" }
php: |
    [
        'double' => \"some value\\n \\\"some quoted string\\\" and 'some single quotes one'\"
    ]
---
test: Backslashes
yaml: |
    { single: 'foo\\Var', no-quotes: foo\\Var, double: \"foo\\\\Var\" }
php: |
    [
        'single' => 'foo\\Var', 'no-quotes' => 'foo\\Var', 'double' => 'foo\\Var'
    ]
", "vendor/symfony/yaml/Tests/Fixtures/escapedCharacters.yml", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Fixtures/escapedCharacters.yml");
    }
}
