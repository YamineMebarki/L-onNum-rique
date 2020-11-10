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

/* vendor/twig/twig/src/Node/SandboxedPrintNode.php */
class __TwigTemplate_51584b9098b9bec0e9e9587aa337b476e51678d97ad4aa9df3f7990c47643d78 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/SandboxedPrintNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/SandboxedPrintNode.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node;

use Twig\\Compiler;
use Twig\\Node\\Expression\\ConstantExpression;

/**
 * Adds a check for the __toString() method when the variable is an object and the sandbox is activated.
 *
 * When there is a simple Print statement, like ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "html", null, true);
        echo ",
 * and if the sandbox is enabled, we need to check that the __toString()
 * method is allowed if 'article' is an object.
 *
 * Not used anymore, to be deprecated in 2.x and removed in 3.0
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SandboxedPrintNode extends PrintNode
{
    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write('echo ')
        ;
        \$expr = \$this->getNode('expr');
        if (\$expr instanceof ConstantExpression) {
            \$compiler
                ->subcompile(\$expr)
                ->raw(\";\\n\")
            ;
        } else {
            \$compiler
                ->write('\$this->extensions[SandboxExtension::class]->ensureToStringAllowed(')
                ->subcompile(\$expr)
                ->raw(', ')
                ->repr(\$expr->getTemplateLine())
                ->raw(\", \\\$this->source);\\n\")
            ;
        }
    }
}

class_alias('Twig\\Node\\SandboxedPrintNode', 'Twig_Node_SandboxedPrint');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/SandboxedPrintNode.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node;

use Twig\\Compiler;
use Twig\\Node\\Expression\\ConstantExpression;

/**
 * Adds a check for the __toString() method when the variable is an object and the sandbox is activated.
 *
 * When there is a simple Print statement, like {{ article }},
 * and if the sandbox is enabled, we need to check that the __toString()
 * method is allowed if 'article' is an object.
 *
 * Not used anymore, to be deprecated in 2.x and removed in 3.0
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SandboxedPrintNode extends PrintNode
{
    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write('echo ')
        ;
        \$expr = \$this->getNode('expr');
        if (\$expr instanceof ConstantExpression) {
            \$compiler
                ->subcompile(\$expr)
                ->raw(\";\\n\")
            ;
        } else {
            \$compiler
                ->write('\$this->extensions[SandboxExtension::class]->ensureToStringAllowed(')
                ->subcompile(\$expr)
                ->raw(', ')
                ->repr(\$expr->getTemplateLine())
                ->raw(\", \\\$this->source);\\n\")
            ;
        }
    }
}

class_alias('Twig\\Node\\SandboxedPrintNode', 'Twig_Node_SandboxedPrint');
", "vendor/twig/twig/src/Node/SandboxedPrintNode.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/SandboxedPrintNode.php");
    }
}
