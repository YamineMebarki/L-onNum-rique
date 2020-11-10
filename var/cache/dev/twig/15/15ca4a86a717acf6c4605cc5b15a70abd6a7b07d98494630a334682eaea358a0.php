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

/* vendor/nikic/php-parser/grammar/tokens.template */
class __TwigTemplate_42a478ff345009c862cc0bba6f5cb75b231881f88130ee21ecea5aab48e1209a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/grammar/tokens.template"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/nikic/php-parser/grammar/tokens.template"));

        // line 1
        echo "<?php
\$meta #
#semval(\$) \$this->semValue
#semval(\$,%t) \$this->semValue
#semval(%n) \$this->stackPos-(%l-%n)
#semval(%n,%t) \$this->stackPos-(%l-%n)

namespace PhpParser\\Parser;
#include;

/* GENERATED file based on grammar/tokens.y */
final class Tokens
{
#tokenval
    const %s = %n;
#endtokenval
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/nikic/php-parser/grammar/tokens.template";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
\$meta #
#semval(\$) \$this->semValue
#semval(\$,%t) \$this->semValue
#semval(%n) \$this->stackPos-(%l-%n)
#semval(%n,%t) \$this->stackPos-(%l-%n)

namespace PhpParser\\Parser;
#include;

/* GENERATED file based on grammar/tokens.y */
final class Tokens
{
#tokenval
    const %s = %n;
#endtokenval
}
", "vendor/nikic/php-parser/grammar/tokens.template", "/var/www/public/DevLaon/templates/vendor/nikic/php-parser/grammar/tokens.template");
    }
}
