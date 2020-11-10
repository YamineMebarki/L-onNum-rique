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

/* vendor/symfony/yaml/Tests/Fixtures/multiple_lines_as_literal_block.yml */
class __TwigTemplate_0e1893b7f23e4fae88d2c287b6601c83d89d3bd3e07fc720d3768ae7cdfe73f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/multiple_lines_as_literal_block.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/multiple_lines_as_literal_block.yml"));

        // line 1
        echo "data:
    single_line: 'foo bar baz'
    multi_line: |
        foo
        line with trailing spaces:
          
        bar
        integer like line:
        123456789
        empty line:
        
        baz
    multi_line_with_carriage_return: \"foo\\nbar\\r\\nbaz\"
    nested_inlined_multi_line_string: { inlined_multi_line: \"foo\\nbar\\r\\nempty line:\\n\\nbaz\" }
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Fixtures/multiple_lines_as_literal_block.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("data:
    single_line: 'foo bar baz'
    multi_line: |
        foo
        line with trailing spaces:
          
        bar
        integer like line:
        123456789
        empty line:
        
        baz
    multi_line_with_carriage_return: \"foo\\nbar\\r\\nbaz\"
    nested_inlined_multi_line_string: { inlined_multi_line: \"foo\\nbar\\r\\nempty line:\\n\\nbaz\" }
", "vendor/symfony/yaml/Tests/Fixtures/multiple_lines_as_literal_block.yml", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Fixtures/multiple_lines_as_literal_block.yml");
    }
}
