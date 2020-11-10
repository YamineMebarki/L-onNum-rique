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

/* vendor/symfony/form/Tests/Fixtures/Descriptor/required_option_with_allowed_values.txt */
class __TwigTemplate_2d905e5901e81080e786ca459c40c50a034402b36a38730e98b5cde65a46c3bd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Fixtures/Descriptor/required_option_with_allowed_values.txt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Fixtures/Descriptor/required_option_with_allowed_values.txt"));

        // line 1
        echo "
Symfony\\Component\\Form\\Tests\\Console\\Descriptor\\FooType (foo)
=============================================================

 ---------------- -----------%s
  Required         true      %s
 ---------------- -----------%s
  Default          -         %s
 ---------------- -----------%s
  Allowed types    [         %s
                     \"string\"%s
                   ]         %s
 ---------------- -----------%s
  Allowed values   [         %s
                     \"bar\",  %s
                     \"baz\"   %s
                   ]         %s
 ---------------- -----------%s
  Normalizers      [         %s
                     Closure(%s
                       class:%s
                       this: %s
                       file: %s
                       line: %s
                     }       %s
                   ]         %s
 ---------------- -----------%s

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Fixtures/Descriptor/required_option_with_allowed_values.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
Symfony\\Component\\Form\\Tests\\Console\\Descriptor\\FooType (foo)
=============================================================

 ---------------- -----------%s
  Required         true      %s
 ---------------- -----------%s
  Default          -         %s
 ---------------- -----------%s
  Allowed types    [         %s
                     \"string\"%s
                   ]         %s
 ---------------- -----------%s
  Allowed values   [         %s
                     \"bar\",  %s
                     \"baz\"   %s
                   ]         %s
 ---------------- -----------%s
  Normalizers      [         %s
                     Closure(%s
                       class:%s
                       this: %s
                       file: %s
                       line: %s
                     }       %s
                   ]         %s
 ---------------- -----------%s

", "vendor/symfony/form/Tests/Fixtures/Descriptor/required_option_with_allowed_values.txt", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Fixtures/Descriptor/required_option_with_allowed_values.txt");
    }
}
