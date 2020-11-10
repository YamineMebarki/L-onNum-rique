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

/* vendor/doctrine/common/lib/Doctrine/Common/Lexer.php */
class __TwigTemplate_49e442acb0ef680242a12e73c959cf85eb2a7137e0c90eb51d8b2b4d64edbfb9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/lib/Doctrine/Common/Lexer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/lib/Doctrine/Common/Lexer.php"));

        // line 1
        echo "<?php
namespace Doctrine\\Common;

use Doctrine\\Common\\Lexer\\AbstractLexer;
use function trigger_error;
use const E_USER_DEPRECATED;

@trigger_error(Lexer::class . ' is deprecated.', E_USER_DEPRECATED);

/**
 * Base class for writing simple lexers, i.e. for creating small DSLs.
 *
 * Lexer moved into its own Component Doctrine\\Common\\Lexer. This class
 * only stays for being BC.
 *
 * @since  2.0
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Jonathan Wage <jonwage@gmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 *
 * @deprecated Use Doctrine\\Common\\Lexer\\AbstractLexer from doctrine/lexer package instead.
 */
abstract class Lexer extends AbstractLexer
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/common/lib/Doctrine/Common/Lexer.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Doctrine\\Common;

use Doctrine\\Common\\Lexer\\AbstractLexer;
use function trigger_error;
use const E_USER_DEPRECATED;

@trigger_error(Lexer::class . ' is deprecated.', E_USER_DEPRECATED);

/**
 * Base class for writing simple lexers, i.e. for creating small DSLs.
 *
 * Lexer moved into its own Component Doctrine\\Common\\Lexer. This class
 * only stays for being BC.
 *
 * @since  2.0
 * @author Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author Jonathan Wage <jonwage@gmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 *
 * @deprecated Use Doctrine\\Common\\Lexer\\AbstractLexer from doctrine/lexer package instead.
 */
abstract class Lexer extends AbstractLexer
{
}
", "vendor/doctrine/common/lib/Doctrine/Common/Lexer.php", "/var/www/public/DevLaon/templates/vendor/doctrine/common/lib/Doctrine/Common/Lexer.php");
    }
}
