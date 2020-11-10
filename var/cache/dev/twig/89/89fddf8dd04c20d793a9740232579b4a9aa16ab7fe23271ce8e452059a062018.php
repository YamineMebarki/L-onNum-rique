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

/* vendor/twig/twig/src/Node/IncludeNode.php */
class __TwigTemplate_37dddef967df5a8fa126c27cb9b2f562b6c670d2678233718143b9ccbb54faaa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/IncludeNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/IncludeNode.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node;

use Twig\\Compiler;
use Twig\\Node\\Expression\\AbstractExpression;

/**
 * Represents an include node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class IncludeNode extends Node implements NodeOutputInterface
{
    public function __construct(AbstractExpression \$expr, AbstractExpression \$variables = null, bool \$only = false, bool \$ignoreMissing = false, int \$lineno, string \$tag = null)
    {
        \$nodes = ['expr' => \$expr];
        if (null !== \$variables) {
            \$nodes['variables'] = \$variables;
        }

        parent::__construct(\$nodes, ['only' => (bool) \$only, 'ignore_missing' => (bool) \$ignoreMissing], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler->addDebugInfo(\$this);

        if (\$this->getAttribute('ignore_missing')) {
            \$template = \$compiler->getVarName();

            \$compiler
                ->write(sprintf(\"\$%s = null;\\n\", \$template))
                ->write(\"try {\\n\")
                ->indent()
                ->write(sprintf('\$%s = ', \$template))
            ;

            \$this->addGetTemplate(\$compiler);

            \$compiler
                ->raw(\";\\n\")
                ->outdent()
                ->write(\"} catch (LoaderError \\\$e) {\\n\")
                ->indent()
                ->write(\"// ignore missing template\\n\")
                ->outdent()
                ->write(\"}\\n\")
                ->write(sprintf(\"if (\$%s) {\\n\", \$template))
                ->indent()
                ->write(sprintf('\$%s->display(', \$template))
            ;
            \$this->addTemplateArguments(\$compiler);
            \$compiler
                ->raw(\");\\n\")
                ->outdent()
                ->write(\"}\\n\")
            ;
        } else {
            \$this->addGetTemplate(\$compiler);
            \$compiler->raw('->display(');
            \$this->addTemplateArguments(\$compiler);
            \$compiler->raw(\");\\n\");
        }
    }

    protected function addGetTemplate(Compiler \$compiler)
    {
        \$compiler
            ->write('\$this->loadTemplate(')
            ->subcompile(\$this->getNode('expr'))
            ->raw(', ')
            ->repr(\$this->getTemplateName())
            ->raw(', ')
            ->repr(\$this->getTemplateLine())
            ->raw(')')
        ;
    }

    protected function addTemplateArguments(Compiler \$compiler)
    {
        if (!\$this->hasNode('variables')) {
            \$compiler->raw(false === \$this->getAttribute('only') ? '\$context' : '[]');
        } elseif (false === \$this->getAttribute('only')) {
            \$compiler
                ->raw('twig_array_merge(\$context, ')
                ->subcompile(\$this->getNode('variables'))
                ->raw(')')
            ;
        } else {
            \$compiler->raw('twig_to_array(');
            \$compiler->subcompile(\$this->getNode('variables'));
            \$compiler->raw(')');
        }
    }
}

class_alias('Twig\\Node\\IncludeNode', 'Twig_Node_Include');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/IncludeNode.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node;

use Twig\\Compiler;
use Twig\\Node\\Expression\\AbstractExpression;

/**
 * Represents an include node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class IncludeNode extends Node implements NodeOutputInterface
{
    public function __construct(AbstractExpression \$expr, AbstractExpression \$variables = null, bool \$only = false, bool \$ignoreMissing = false, int \$lineno, string \$tag = null)
    {
        \$nodes = ['expr' => \$expr];
        if (null !== \$variables) {
            \$nodes['variables'] = \$variables;
        }

        parent::__construct(\$nodes, ['only' => (bool) \$only, 'ignore_missing' => (bool) \$ignoreMissing], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler->addDebugInfo(\$this);

        if (\$this->getAttribute('ignore_missing')) {
            \$template = \$compiler->getVarName();

            \$compiler
                ->write(sprintf(\"\$%s = null;\\n\", \$template))
                ->write(\"try {\\n\")
                ->indent()
                ->write(sprintf('\$%s = ', \$template))
            ;

            \$this->addGetTemplate(\$compiler);

            \$compiler
                ->raw(\";\\n\")
                ->outdent()
                ->write(\"} catch (LoaderError \\\$e) {\\n\")
                ->indent()
                ->write(\"// ignore missing template\\n\")
                ->outdent()
                ->write(\"}\\n\")
                ->write(sprintf(\"if (\$%s) {\\n\", \$template))
                ->indent()
                ->write(sprintf('\$%s->display(', \$template))
            ;
            \$this->addTemplateArguments(\$compiler);
            \$compiler
                ->raw(\");\\n\")
                ->outdent()
                ->write(\"}\\n\")
            ;
        } else {
            \$this->addGetTemplate(\$compiler);
            \$compiler->raw('->display(');
            \$this->addTemplateArguments(\$compiler);
            \$compiler->raw(\");\\n\");
        }
    }

    protected function addGetTemplate(Compiler \$compiler)
    {
        \$compiler
            ->write('\$this->loadTemplate(')
            ->subcompile(\$this->getNode('expr'))
            ->raw(', ')
            ->repr(\$this->getTemplateName())
            ->raw(', ')
            ->repr(\$this->getTemplateLine())
            ->raw(')')
        ;
    }

    protected function addTemplateArguments(Compiler \$compiler)
    {
        if (!\$this->hasNode('variables')) {
            \$compiler->raw(false === \$this->getAttribute('only') ? '\$context' : '[]');
        } elseif (false === \$this->getAttribute('only')) {
            \$compiler
                ->raw('twig_array_merge(\$context, ')
                ->subcompile(\$this->getNode('variables'))
                ->raw(')')
            ;
        } else {
            \$compiler->raw('twig_to_array(');
            \$compiler->subcompile(\$this->getNode('variables'));
            \$compiler->raw(')');
        }
    }
}

class_alias('Twig\\Node\\IncludeNode', 'Twig_Node_Include');
", "vendor/twig/twig/src/Node/IncludeNode.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/IncludeNode.php");
    }
}
