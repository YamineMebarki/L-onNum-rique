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

/* vendor/twig/twig/src/Node/Expression/BlockReferenceExpression.php */
class __TwigTemplate_4ac4ed5aca9720512c8497b91dfe7085b75c8399fd0e59e6ce163c5b7c807cdd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/BlockReferenceExpression.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/BlockReferenceExpression.php"));

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

namespace Twig\\Node\\Expression;

use Twig\\Compiler;
use Twig\\Node\\Node;

/**
 * Represents a block call node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class BlockReferenceExpression extends AbstractExpression
{
    public function __construct(Node \$name, Node \$template = null, int \$lineno, string \$tag = null)
    {
        \$nodes = ['name' => \$name];
        if (null !== \$template) {
            \$nodes['template'] = \$template;
        }

        parent::__construct(\$nodes, ['is_defined_test' => false, 'output' => false], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        if (\$this->getAttribute('is_defined_test')) {
            \$this->compileTemplateCall(\$compiler, 'hasBlock');
        } else {
            if (\$this->getAttribute('output')) {
                \$compiler->addDebugInfo(\$this);

                \$this
                    ->compileTemplateCall(\$compiler, 'displayBlock')
                    ->raw(\";\\n\");
            } else {
                \$this->compileTemplateCall(\$compiler, 'renderBlock');
            }
        }
    }

    private function compileTemplateCall(Compiler \$compiler, string \$method): Compiler
    {
        if (!\$this->hasNode('template')) {
            \$compiler->write('\$this');
        } else {
            \$compiler
                ->write('\$this->loadTemplate(')
                ->subcompile(\$this->getNode('template'))
                ->raw(', ')
                ->repr(\$this->getTemplateName())
                ->raw(', ')
                ->repr(\$this->getTemplateLine())
                ->raw(')')
            ;
        }

        \$compiler->raw(sprintf('->%s', \$method));

        return \$this->compileBlockArguments(\$compiler);
    }

    private function compileBlockArguments(Compiler \$compiler): Compiler
    {
        \$compiler
            ->raw('(')
            ->subcompile(\$this->getNode('name'))
            ->raw(', \$context');

        if (!\$this->hasNode('template')) {
            \$compiler->raw(', \$blocks');
        }

        return \$compiler->raw(')');
    }
}

class_alias('Twig\\Node\\Expression\\BlockReferenceExpression', 'Twig_Node_Expression_BlockReference');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/Expression/BlockReferenceExpression.php";
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

namespace Twig\\Node\\Expression;

use Twig\\Compiler;
use Twig\\Node\\Node;

/**
 * Represents a block call node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class BlockReferenceExpression extends AbstractExpression
{
    public function __construct(Node \$name, Node \$template = null, int \$lineno, string \$tag = null)
    {
        \$nodes = ['name' => \$name];
        if (null !== \$template) {
            \$nodes['template'] = \$template;
        }

        parent::__construct(\$nodes, ['is_defined_test' => false, 'output' => false], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        if (\$this->getAttribute('is_defined_test')) {
            \$this->compileTemplateCall(\$compiler, 'hasBlock');
        } else {
            if (\$this->getAttribute('output')) {
                \$compiler->addDebugInfo(\$this);

                \$this
                    ->compileTemplateCall(\$compiler, 'displayBlock')
                    ->raw(\";\\n\");
            } else {
                \$this->compileTemplateCall(\$compiler, 'renderBlock');
            }
        }
    }

    private function compileTemplateCall(Compiler \$compiler, string \$method): Compiler
    {
        if (!\$this->hasNode('template')) {
            \$compiler->write('\$this');
        } else {
            \$compiler
                ->write('\$this->loadTemplate(')
                ->subcompile(\$this->getNode('template'))
                ->raw(', ')
                ->repr(\$this->getTemplateName())
                ->raw(', ')
                ->repr(\$this->getTemplateLine())
                ->raw(')')
            ;
        }

        \$compiler->raw(sprintf('->%s', \$method));

        return \$this->compileBlockArguments(\$compiler);
    }

    private function compileBlockArguments(Compiler \$compiler): Compiler
    {
        \$compiler
            ->raw('(')
            ->subcompile(\$this->getNode('name'))
            ->raw(', \$context');

        if (!\$this->hasNode('template')) {
            \$compiler->raw(', \$blocks');
        }

        return \$compiler->raw(')');
    }
}

class_alias('Twig\\Node\\Expression\\BlockReferenceExpression', 'Twig_Node_Expression_BlockReference');
", "vendor/twig/twig/src/Node/Expression/BlockReferenceExpression.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/Expression/BlockReferenceExpression.php");
    }
}
