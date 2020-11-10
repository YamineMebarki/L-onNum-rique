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

/* vendor/twig/twig/src/NodeVisitor/OptimizerNodeVisitor.php */
class __TwigTemplate_7327d02f9b3447e9540c0441a35b94c75fc1f1c188aa510de70ee370ccd0ab97 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/NodeVisitor/OptimizerNodeVisitor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/NodeVisitor/OptimizerNodeVisitor.php"));

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

namespace Twig\\NodeVisitor;

use Twig\\Environment;
use Twig\\Node\\BlockReferenceNode;
use Twig\\Node\\Expression\\BlockReferenceExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\Expression\\FunctionExpression;
use Twig\\Node\\Expression\\GetAttrExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Expression\\ParentExpression;
use Twig\\Node\\ForNode;
use Twig\\Node\\IncludeNode;
use Twig\\Node\\Node;
use Twig\\Node\\PrintNode;

/**
 * Tries to optimize the AST.
 *
 * This visitor is always the last registered one.
 *
 * You can configure which optimizations you want to activate via the
 * optimizer mode.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class OptimizerNodeVisitor extends AbstractNodeVisitor
{
    const OPTIMIZE_ALL = -1;
    const OPTIMIZE_NONE = 0;
    const OPTIMIZE_FOR = 2;
    const OPTIMIZE_RAW_FILTER = 4;
    // obsolete, does not do anything
    const OPTIMIZE_VAR_ACCESS = 8;

    private \$loops = [];
    private \$loopsTargets = [];
    private \$optimizers;

    /**
     * @param int \$optimizers The optimizer mode
     */
    public function __construct(int \$optimizers = -1)
    {
        if (!\\is_int(\$optimizers) || \$optimizers > (self::OPTIMIZE_FOR | self::OPTIMIZE_RAW_FILTER | self::OPTIMIZE_VAR_ACCESS)) {
            throw new \\InvalidArgumentException(sprintf('Optimizer mode \"%s\" is not valid.', \$optimizers));
        }

        \$this->optimizers = \$optimizers;
    }

    protected function doEnterNode(Node \$node, Environment \$env)
    {
        if (self::OPTIMIZE_FOR === (self::OPTIMIZE_FOR & \$this->optimizers)) {
            \$this->enterOptimizeFor(\$node, \$env);
        }

        return \$node;
    }

    protected function doLeaveNode(Node \$node, Environment \$env)
    {
        if (self::OPTIMIZE_FOR === (self::OPTIMIZE_FOR & \$this->optimizers)) {
            \$this->leaveOptimizeFor(\$node, \$env);
        }

        if (self::OPTIMIZE_RAW_FILTER === (self::OPTIMIZE_RAW_FILTER & \$this->optimizers)) {
            \$node = \$this->optimizeRawFilter(\$node, \$env);
        }

        \$node = \$this->optimizePrintNode(\$node, \$env);

        return \$node;
    }

    /**
     * Optimizes print nodes.
     *
     * It replaces:
     *
     *   * \"echo \$this->render(Parent)Block()\" with \"\$this->display(Parent)Block()\"
     */
    private function optimizePrintNode(Node \$node, Environment \$env): Node
    {
        if (!\$node instanceof PrintNode) {
            return \$node;
        }

        \$exprNode = \$node->getNode('expr');
        if (
            \$exprNode instanceof BlockReferenceExpression ||
            \$exprNode instanceof ParentExpression
        ) {
            \$exprNode->setAttribute('output', true);

            return \$exprNode;
        }

        return \$node;
    }

    /**
     * Removes \"raw\" filters.
     */
    private function optimizeRawFilter(Node \$node, Environment \$env): Node
    {
        if (\$node instanceof FilterExpression && 'raw' == \$node->getNode('filter')->getAttribute('value')) {
            return \$node->getNode('node');
        }

        return \$node;
    }

    /**
     * Optimizes \"for\" tag by removing the \"loop\" variable creation whenever possible.
     */
    private function enterOptimizeFor(Node \$node, Environment \$env)
    {
        if (\$node instanceof ForNode) {
            // disable the loop variable by default
            \$node->setAttribute('with_loop', false);
            array_unshift(\$this->loops, \$node);
            array_unshift(\$this->loopsTargets, \$node->getNode('value_target')->getAttribute('name'));
            array_unshift(\$this->loopsTargets, \$node->getNode('key_target')->getAttribute('name'));
        } elseif (!\$this->loops) {
            // we are outside a loop
            return;
        }

        // when do we need to add the loop variable back?

        // the loop variable is referenced for the current loop
        elseif (\$node instanceof NameExpression && 'loop' === \$node->getAttribute('name')) {
            \$node->setAttribute('always_defined', true);
            \$this->addLoopToCurrent();
        }

        // optimize access to loop targets
        elseif (\$node instanceof NameExpression && \\in_array(\$node->getAttribute('name'), \$this->loopsTargets)) {
            \$node->setAttribute('always_defined', true);
        }

        // block reference
        elseif (\$node instanceof BlockReferenceNode || \$node instanceof BlockReferenceExpression) {
            \$this->addLoopToCurrent();
        }

        // include without the only attribute
        elseif (\$node instanceof IncludeNode && !\$node->getAttribute('only')) {
            \$this->addLoopToAll();
        }

        // include function without the with_context=false parameter
        elseif (\$node instanceof FunctionExpression
            && 'include' === \$node->getAttribute('name')
            && (!\$node->getNode('arguments')->hasNode('with_context')
                 || false !== \$node->getNode('arguments')->getNode('with_context')->getAttribute('value')
               )
        ) {
            \$this->addLoopToAll();
        }

        // the loop variable is referenced via an attribute
        elseif (\$node instanceof GetAttrExpression
            && (!\$node->getNode('attribute') instanceof ConstantExpression
                || 'parent' === \$node->getNode('attribute')->getAttribute('value')
               )
            && (true === \$this->loops[0]->getAttribute('with_loop')
                || (\$node->getNode('node') instanceof NameExpression
                    && 'loop' === \$node->getNode('node')->getAttribute('name')
                   )
               )
        ) {
            \$this->addLoopToAll();
        }
    }

    /**
     * Optimizes \"for\" tag by removing the \"loop\" variable creation whenever possible.
     */
    private function leaveOptimizeFor(Node \$node, Environment \$env)
    {
        if (\$node instanceof ForNode) {
            array_shift(\$this->loops);
            array_shift(\$this->loopsTargets);
            array_shift(\$this->loopsTargets);
        }
    }

    private function addLoopToCurrent()
    {
        \$this->loops[0]->setAttribute('with_loop', true);
    }

    private function addLoopToAll()
    {
        foreach (\$this->loops as \$loop) {
            \$loop->setAttribute('with_loop', true);
        }
    }

    public function getPriority()
    {
        return 255;
    }
}

class_alias('Twig\\NodeVisitor\\OptimizerNodeVisitor', 'Twig_NodeVisitor_Optimizer');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/NodeVisitor/OptimizerNodeVisitor.php";
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
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\NodeVisitor;

use Twig\\Environment;
use Twig\\Node\\BlockReferenceNode;
use Twig\\Node\\Expression\\BlockReferenceExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\Expression\\FunctionExpression;
use Twig\\Node\\Expression\\GetAttrExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Expression\\ParentExpression;
use Twig\\Node\\ForNode;
use Twig\\Node\\IncludeNode;
use Twig\\Node\\Node;
use Twig\\Node\\PrintNode;

/**
 * Tries to optimize the AST.
 *
 * This visitor is always the last registered one.
 *
 * You can configure which optimizations you want to activate via the
 * optimizer mode.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class OptimizerNodeVisitor extends AbstractNodeVisitor
{
    const OPTIMIZE_ALL = -1;
    const OPTIMIZE_NONE = 0;
    const OPTIMIZE_FOR = 2;
    const OPTIMIZE_RAW_FILTER = 4;
    // obsolete, does not do anything
    const OPTIMIZE_VAR_ACCESS = 8;

    private \$loops = [];
    private \$loopsTargets = [];
    private \$optimizers;

    /**
     * @param int \$optimizers The optimizer mode
     */
    public function __construct(int \$optimizers = -1)
    {
        if (!\\is_int(\$optimizers) || \$optimizers > (self::OPTIMIZE_FOR | self::OPTIMIZE_RAW_FILTER | self::OPTIMIZE_VAR_ACCESS)) {
            throw new \\InvalidArgumentException(sprintf('Optimizer mode \"%s\" is not valid.', \$optimizers));
        }

        \$this->optimizers = \$optimizers;
    }

    protected function doEnterNode(Node \$node, Environment \$env)
    {
        if (self::OPTIMIZE_FOR === (self::OPTIMIZE_FOR & \$this->optimizers)) {
            \$this->enterOptimizeFor(\$node, \$env);
        }

        return \$node;
    }

    protected function doLeaveNode(Node \$node, Environment \$env)
    {
        if (self::OPTIMIZE_FOR === (self::OPTIMIZE_FOR & \$this->optimizers)) {
            \$this->leaveOptimizeFor(\$node, \$env);
        }

        if (self::OPTIMIZE_RAW_FILTER === (self::OPTIMIZE_RAW_FILTER & \$this->optimizers)) {
            \$node = \$this->optimizeRawFilter(\$node, \$env);
        }

        \$node = \$this->optimizePrintNode(\$node, \$env);

        return \$node;
    }

    /**
     * Optimizes print nodes.
     *
     * It replaces:
     *
     *   * \"echo \$this->render(Parent)Block()\" with \"\$this->display(Parent)Block()\"
     */
    private function optimizePrintNode(Node \$node, Environment \$env): Node
    {
        if (!\$node instanceof PrintNode) {
            return \$node;
        }

        \$exprNode = \$node->getNode('expr');
        if (
            \$exprNode instanceof BlockReferenceExpression ||
            \$exprNode instanceof ParentExpression
        ) {
            \$exprNode->setAttribute('output', true);

            return \$exprNode;
        }

        return \$node;
    }

    /**
     * Removes \"raw\" filters.
     */
    private function optimizeRawFilter(Node \$node, Environment \$env): Node
    {
        if (\$node instanceof FilterExpression && 'raw' == \$node->getNode('filter')->getAttribute('value')) {
            return \$node->getNode('node');
        }

        return \$node;
    }

    /**
     * Optimizes \"for\" tag by removing the \"loop\" variable creation whenever possible.
     */
    private function enterOptimizeFor(Node \$node, Environment \$env)
    {
        if (\$node instanceof ForNode) {
            // disable the loop variable by default
            \$node->setAttribute('with_loop', false);
            array_unshift(\$this->loops, \$node);
            array_unshift(\$this->loopsTargets, \$node->getNode('value_target')->getAttribute('name'));
            array_unshift(\$this->loopsTargets, \$node->getNode('key_target')->getAttribute('name'));
        } elseif (!\$this->loops) {
            // we are outside a loop
            return;
        }

        // when do we need to add the loop variable back?

        // the loop variable is referenced for the current loop
        elseif (\$node instanceof NameExpression && 'loop' === \$node->getAttribute('name')) {
            \$node->setAttribute('always_defined', true);
            \$this->addLoopToCurrent();
        }

        // optimize access to loop targets
        elseif (\$node instanceof NameExpression && \\in_array(\$node->getAttribute('name'), \$this->loopsTargets)) {
            \$node->setAttribute('always_defined', true);
        }

        // block reference
        elseif (\$node instanceof BlockReferenceNode || \$node instanceof BlockReferenceExpression) {
            \$this->addLoopToCurrent();
        }

        // include without the only attribute
        elseif (\$node instanceof IncludeNode && !\$node->getAttribute('only')) {
            \$this->addLoopToAll();
        }

        // include function without the with_context=false parameter
        elseif (\$node instanceof FunctionExpression
            && 'include' === \$node->getAttribute('name')
            && (!\$node->getNode('arguments')->hasNode('with_context')
                 || false !== \$node->getNode('arguments')->getNode('with_context')->getAttribute('value')
               )
        ) {
            \$this->addLoopToAll();
        }

        // the loop variable is referenced via an attribute
        elseif (\$node instanceof GetAttrExpression
            && (!\$node->getNode('attribute') instanceof ConstantExpression
                || 'parent' === \$node->getNode('attribute')->getAttribute('value')
               )
            && (true === \$this->loops[0]->getAttribute('with_loop')
                || (\$node->getNode('node') instanceof NameExpression
                    && 'loop' === \$node->getNode('node')->getAttribute('name')
                   )
               )
        ) {
            \$this->addLoopToAll();
        }
    }

    /**
     * Optimizes \"for\" tag by removing the \"loop\" variable creation whenever possible.
     */
    private function leaveOptimizeFor(Node \$node, Environment \$env)
    {
        if (\$node instanceof ForNode) {
            array_shift(\$this->loops);
            array_shift(\$this->loopsTargets);
            array_shift(\$this->loopsTargets);
        }
    }

    private function addLoopToCurrent()
    {
        \$this->loops[0]->setAttribute('with_loop', true);
    }

    private function addLoopToAll()
    {
        foreach (\$this->loops as \$loop) {
            \$loop->setAttribute('with_loop', true);
        }
    }

    public function getPriority()
    {
        return 255;
    }
}

class_alias('Twig\\NodeVisitor\\OptimizerNodeVisitor', 'Twig_NodeVisitor_Optimizer');
", "vendor/twig/twig/src/NodeVisitor/OptimizerNodeVisitor.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/NodeVisitor/OptimizerNodeVisitor.php");
    }
}
