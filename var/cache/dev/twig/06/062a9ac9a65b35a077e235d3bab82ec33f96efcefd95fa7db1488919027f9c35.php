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

/* vendor/symfony/yaml/Tests/Fixtures/sfComments.yml */
class __TwigTemplate_ed903c9873da123ced083030cebf74583099bd6503d8482bb2f224f797893eff extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/sfComments.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/sfComments.yml"));

        // line 1
        echo "--- %YAML:1.0
test: Comments at the end of a line
brief: >
    Comments at the end of a line
yaml: |
    ex1: \"foo # bar\"
    ex2: \"foo # bar\" # comment
    ex3: 'foo # bar' # comment
    ex4: foo # comment
    ex5: foo\t#\tcomment with tab before  
    ex6: foo#foo # comment here
    ex7: foo \t# ignore me # and me
php: |
    ['ex1' => 'foo # bar', 'ex2' => 'foo # bar', 'ex3' => 'foo # bar', 'ex4' => 'foo', 'ex5' => 'foo', 'ex6' => 'foo#foo', 'ex7' => 'foo']
---
test: Comments in the middle
brief: >
  Comments in the middle
yaml: |
    foo:
    # some comment
    # some comment
      bar: foo
    # some comment
    # some comment
php: |
    ['foo' => ['bar' => 'foo']]
---
test: Comments on a hash line
brief: >
  Comments on a hash line
yaml: |
    foo:   # a comment
      foo: bar # a comment
php: |
    ['foo' => ['foo' => 'bar']]
---
test: 'Value starting with a #'
brief: >
  'Value starting with a #'
yaml: |
    foo:   '#bar'
php: |
    ['foo' => '#bar']
---
test: Document starting with a comment and a separator
brief: >
  Commenting before document start is allowed
yaml: |
    # document comment
    ---
    foo: bar # a comment
php: |
    ['foo' => 'bar']
---
test: Comment containing a colon on a hash line
brief: >
    Comment containing a colon on a scalar line
yaml: 'foo # comment: this is also part of the comment'
php: |
    'foo'
---
test: 'Hash key containing a #'
brief: >
    'Hash key containing a #'
yaml: 'foo#bar: baz'
php: |
    ['foo#bar' => 'baz']
---
test: 'Hash key ending with a space and a #'
brief: >
    'Hash key ending with a space and a #'
yaml: |
    'foo #': baz
php: |
    ['foo #' => 'baz']
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Fixtures/sfComments.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("--- %YAML:1.0
test: Comments at the end of a line
brief: >
    Comments at the end of a line
yaml: |
    ex1: \"foo # bar\"
    ex2: \"foo # bar\" # comment
    ex3: 'foo # bar' # comment
    ex4: foo # comment
    ex5: foo\t#\tcomment with tab before  
    ex6: foo#foo # comment here
    ex7: foo \t# ignore me # and me
php: |
    ['ex1' => 'foo # bar', 'ex2' => 'foo # bar', 'ex3' => 'foo # bar', 'ex4' => 'foo', 'ex5' => 'foo', 'ex6' => 'foo#foo', 'ex7' => 'foo']
---
test: Comments in the middle
brief: >
  Comments in the middle
yaml: |
    foo:
    # some comment
    # some comment
      bar: foo
    # some comment
    # some comment
php: |
    ['foo' => ['bar' => 'foo']]
---
test: Comments on a hash line
brief: >
  Comments on a hash line
yaml: |
    foo:   # a comment
      foo: bar # a comment
php: |
    ['foo' => ['foo' => 'bar']]
---
test: 'Value starting with a #'
brief: >
  'Value starting with a #'
yaml: |
    foo:   '#bar'
php: |
    ['foo' => '#bar']
---
test: Document starting with a comment and a separator
brief: >
  Commenting before document start is allowed
yaml: |
    # document comment
    ---
    foo: bar # a comment
php: |
    ['foo' => 'bar']
---
test: Comment containing a colon on a hash line
brief: >
    Comment containing a colon on a scalar line
yaml: 'foo # comment: this is also part of the comment'
php: |
    'foo'
---
test: 'Hash key containing a #'
brief: >
    'Hash key containing a #'
yaml: 'foo#bar: baz'
php: |
    ['foo#bar' => 'baz']
---
test: 'Hash key ending with a space and a #'
brief: >
    'Hash key ending with a space and a #'
yaml: |
    'foo #': baz
php: |
    ['foo #' => 'baz']
", "vendor/symfony/yaml/Tests/Fixtures/sfComments.yml", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Fixtures/sfComments.yml");
    }
}
