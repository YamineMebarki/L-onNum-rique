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

/* vendor/twig/twig/src/NodeVisitor/SafeAnalysisNodeVisitor.php */
class __TwigTemplate_d488b1cf29045fa0f17d93e432c74c2bc895f9619ac989230f6930cb4f9aeebe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/NodeVisitor/SafeAnalysisNodeVisitor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/NodeVisitor/SafeAnalysisNodeVisitor.php"));

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
use Twig\\Node\\Expression\\BlockReferenceExpression;
use Twig\\Node\\Expression\\ConditionalExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\Expression\\FunctionExpression;
use Twig\\Node\\Expression\\GetAttrExpression;
use Twig\\Node\\Expression\\MethodCallExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Expression\\ParentExpression;
use Twig\\Node\\Node;

final class SafeAnalysisNodeVisitor extends AbstractNodeVisitor
{
    private \$data = [];
    private \$safeVars = [];

    public function setSafeVars(\$safeVars)
    {
        \$this->safeVars = \$safeVars;
    }

    public function getSafe(Node \$node)
    {
        \$hash = spl_object_hash(\$node);
        if (!isset(\$this->data[\$hash])) {
            return;
        }

        foreach (\$this->data[\$hash] as \$bucket) {
            if (\$bucket['key'] !== \$node) {
                continue;
            }

            if (\\in_array('html_attr', \$bucket['value'])) {
                \$bucket['value'][] = 'html';
            }

            return \$bucket['value'];
        }
    }

    private function setSafe(Node \$node, array \$safe)
    {
        \$hash = spl_object_hash(\$node);
        if (isset(\$this->data[\$hash])) {
            foreach (\$this->data[\$hash] as &\$bucket) {
                if (\$bucket['key'] === \$node) {
                    \$bucket['value'] = \$safe;

                    return;
                }
            }
        }
        \$this->data[\$hash][] = [
            'key' => \$node,
            'value' => \$safe,
        ];
    }

    protected function doEnterNode(Node \$node, Environment \$env)
    {
        return \$node;
    }

    protected function doLeaveNode(Node \$node, Environment \$env)
    {
        if (\$node instanceof ConstantExpression) {
            // constants are marked safe for all
            \$this->setSafe(\$node, ['all']);
        } elseif (\$node instanceof BlockReferenceExpression) {
            // blocks are safe by definition
            \$this->setSafe(\$node, ['all']);
        } elseif (\$node instanceof ParentExpression) {
            // parent block is safe by definition
            \$this->setSafe(\$node, ['all']);
        } elseif (\$node instanceof ConditionalExpression) {
            // intersect safeness of both operands
            \$safe = \$this->intersectSafe(\$this->getSafe(\$node->getNode('expr2')), \$this->getSafe(\$node->getNode('expr3')));
            \$this->setSafe(\$node, \$safe);
        } elseif (\$node instanceof FilterExpression) {
            // filter expression is safe when the filter is safe
            \$name = \$node->getNode('filter')->getAttribute('value');
            \$args = \$node->getNode('arguments');
            if (false !== \$filter = \$env->getFilter(\$name)) {
                \$safe = \$filter->getSafe(\$args);
                if (null === \$safe) {
                    \$safe = \$this->intersectSafe(\$this->getSafe(\$node->getNode('node')), \$filter->getPreservesSafety());
                }
                \$this->setSafe(\$node, \$safe);
            } else {
                \$this->setSafe(\$node, []);
            }
        } elseif (\$node instanceof FunctionExpression) {
            // function expression is safe when the function is safe
            \$name = \$node->getAttribute('name');
            \$args = \$node->getNode('arguments');
            \$function = \$env->getFunction(\$name);
            if (false !== \$function) {
                \$this->setSafe(\$node, \$function->getSafe(\$args));
            } else {
                \$this->setSafe(\$node, []);
            }
        } elseif (\$node instanceof MethodCallExpression) {
            if (\$node->getAttribute('safe')) {
                \$this->setSafe(\$node, ['all']);
            } else {
                \$this->setSafe(\$node, []);
            }
        } elseif (\$node instanceof GetAttrExpression && \$node->getNode('node') instanceof NameExpression) {
            \$name = \$node->getNode('node')->getAttribute('name');
            if (\\in_array(\$name, \$this->safeVars)) {
                \$this->setSafe(\$node, ['all']);
            } else {
                \$this->setSafe(\$node, []);
            }
        } else {
            \$this->setSafe(\$node, []);
        }

        return \$node;
    }

    private function intersectSafe(array \$a = null, array \$b = null): array
    {
        if (null === \$a || null === \$b) {
            return [];
        }

        if (\\in_array('all', \$a)) {
            return \$b;
        }

        if (\\in_array('all', \$b)) {
            return \$a;
        }

        return array_intersect(\$a, \$b);
    }

    public function getPriority()
    {
        return 0;
    }
}

class_alias('Twig\\NodeVisitor\\SafeAnalysisNodeVisitor', 'Twig_NodeVisitor_SafeAnalysis');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/NodeVisitor/SafeAnalysisNodeVisitor.php";
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
use Twig\\Node\\Expression\\BlockReferenceExpression;
use Twig\\Node\\Expression\\ConditionalExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\FilterExpression;
use Twig\\Node\\Expression\\FunctionExpression;
use Twig\\Node\\Expression\\GetAttrExpression;
use Twig\\Node\\Expression\\MethodCallExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Expression\\ParentExpression;
use Twig\\Node\\Node;

final class SafeAnalysisNodeVisitor extends AbstractNodeVisitor
{
    private \$data = [];
    private \$safeVars = [];

    public function setSafeVars(\$safeVars)
    {
        \$this->safeVars = \$safeVars;
    }

    public function getSafe(Node \$node)
    {
        \$hash = spl_object_hash(\$node);
        if (!isset(\$this->data[\$hash])) {
            return;
        }

        foreach (\$this->data[\$hash] as \$bucket) {
            if (\$bucket['key'] !== \$node) {
                continue;
            }

            if (\\in_array('html_attr', \$bucket['value'])) {
                \$bucket['value'][] = 'html';
            }

            return \$bucket['value'];
        }
    }

    private function setSafe(Node \$node, array \$safe)
    {
        \$hash = spl_object_hash(\$node);
        if (isset(\$this->data[\$hash])) {
            foreach (\$this->data[\$hash] as &\$bucket) {
                if (\$bucket['key'] === \$node) {
                    \$bucket['value'] = \$safe;

                    return;
                }
            }
        }
        \$this->data[\$hash][] = [
            'key' => \$node,
            'value' => \$safe,
        ];
    }

    protected function doEnterNode(Node \$node, Environment \$env)
    {
        return \$node;
    }

    protected function doLeaveNode(Node \$node, Environment \$env)
    {
        if (\$node instanceof ConstantExpression) {
            // constants are marked safe for all
            \$this->setSafe(\$node, ['all']);
        } elseif (\$node instanceof BlockReferenceExpression) {
            // blocks are safe by definition
            \$this->setSafe(\$node, ['all']);
        } elseif (\$node instanceof ParentExpression) {
            // parent block is safe by definition
            \$this->setSafe(\$node, ['all']);
        } elseif (\$node instanceof ConditionalExpression) {
            // intersect safeness of both operands
            \$safe = \$this->intersectSafe(\$this->getSafe(\$node->getNode('expr2')), \$this->getSafe(\$node->getNode('expr3')));
            \$this->setSafe(\$node, \$safe);
        } elseif (\$node instanceof FilterExpression) {
            // filter expression is safe when the filter is safe
            \$name = \$node->getNode('filter')->getAttribute('value');
            \$args = \$node->getNode('arguments');
            if (false !== \$filter = \$env->getFilter(\$name)) {
                \$safe = \$filter->getSafe(\$args);
                if (null === \$safe) {
                    \$safe = \$this->intersectSafe(\$this->getSafe(\$node->getNode('node')), \$filter->getPreservesSafety());
                }
                \$this->setSafe(\$node, \$safe);
            } else {
                \$this->setSafe(\$node, []);
            }
        } elseif (\$node instanceof FunctionExpression) {
            // function expression is safe when the function is safe
            \$name = \$node->getAttribute('name');
            \$args = \$node->getNode('arguments');
            \$function = \$env->getFunction(\$name);
            if (false !== \$function) {
                \$this->setSafe(\$node, \$function->getSafe(\$args));
            } else {
                \$this->setSafe(\$node, []);
            }
        } elseif (\$node instanceof MethodCallExpression) {
            if (\$node->getAttribute('safe')) {
                \$this->setSafe(\$node, ['all']);
            } else {
                \$this->setSafe(\$node, []);
            }
        } elseif (\$node instanceof GetAttrExpression && \$node->getNode('node') instanceof NameExpression) {
            \$name = \$node->getNode('node')->getAttribute('name');
            if (\\in_array(\$name, \$this->safeVars)) {
                \$this->setSafe(\$node, ['all']);
            } else {
                \$this->setSafe(\$node, []);
            }
        } else {
            \$this->setSafe(\$node, []);
        }

        return \$node;
    }

    private function intersectSafe(array \$a = null, array \$b = null): array
    {
        if (null === \$a || null === \$b) {
            return [];
        }

        if (\\in_array('all', \$a)) {
            return \$b;
        }

        if (\\in_array('all', \$b)) {
            return \$a;
        }

        return array_intersect(\$a, \$b);
    }

    public function getPriority()
    {
        return 0;
    }
}

class_alias('Twig\\NodeVisitor\\SafeAnalysisNodeVisitor', 'Twig_NodeVisitor_SafeAnalysis');
", "vendor/twig/twig/src/NodeVisitor/SafeAnalysisNodeVisitor.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/NodeVisitor/SafeAnalysisNodeVisitor.php");
    }
}
