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

/* vendor/twig/twig/src/Node/WithNode.php */
class __TwigTemplate_778443d83cf5ec003952be6659e27e98cf7a25f0b61dd391d974060786d1ae86 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/WithNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/WithNode.php"));

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

/**
 * Represents a nested \"with\" scope.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class WithNode extends Node
{
    public function __construct(Node \$body, Node \$variables = null, bool \$only = false, int \$lineno, string \$tag = null)
    {
        \$nodes = ['body' => \$body];
        if (null !== \$variables) {
            \$nodes['variables'] = \$variables;
        }

        parent::__construct(\$nodes, ['only' => \$only], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler->addDebugInfo(\$this);

        if (\$this->hasNode('variables')) {
            \$node = \$this->getNode('variables');
            \$varsName = \$compiler->getVarName();
            \$compiler
                ->write(sprintf('\$%s = ', \$varsName))
                ->subcompile(\$node)
                ->raw(\";\\n\")
                ->write(sprintf(\"if (!twig_test_iterable(\\\$%s)) {\\n\", \$varsName))
                ->indent()
                ->write(\"throw new RuntimeError('Variables passed to the \\\"with\\\" tag must be a hash.', \")
                ->repr(\$node->getTemplateLine())
                ->raw(\", \\\$this->getSourceContext());\\n\")
                ->outdent()
                ->write(\"}\\n\")
                ->write(sprintf(\"\\\$%s = twig_to_array(\\\$%s);\\n\", \$varsName, \$varsName))
            ;

            if (\$this->getAttribute('only')) {
                \$compiler->write(\"\\\$context = ['_parent' => \\\$context];\\n\");
            } else {
                \$compiler->write(\"\\\$context['_parent'] = \\\$context;\\n\");
            }

            \$compiler->write(sprintf(\"\\\$context = \\\$this->env->mergeGlobals(array_merge(\\\$context, \\\$%s));\\n\", \$varsName));
        } else {
            \$compiler->write(\"\\\$context['_parent'] = \\\$context;\\n\");
        }

        \$compiler
            ->subcompile(\$this->getNode('body'))
            ->write(\"\\\$context = \\\$context['_parent'];\\n\")
        ;
    }
}

class_alias('Twig\\Node\\WithNode', 'Twig_Node_With');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/WithNode.php";
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

namespace Twig\\Node;

use Twig\\Compiler;

/**
 * Represents a nested \"with\" scope.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class WithNode extends Node
{
    public function __construct(Node \$body, Node \$variables = null, bool \$only = false, int \$lineno, string \$tag = null)
    {
        \$nodes = ['body' => \$body];
        if (null !== \$variables) {
            \$nodes['variables'] = \$variables;
        }

        parent::__construct(\$nodes, ['only' => \$only], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler->addDebugInfo(\$this);

        if (\$this->hasNode('variables')) {
            \$node = \$this->getNode('variables');
            \$varsName = \$compiler->getVarName();
            \$compiler
                ->write(sprintf('\$%s = ', \$varsName))
                ->subcompile(\$node)
                ->raw(\";\\n\")
                ->write(sprintf(\"if (!twig_test_iterable(\\\$%s)) {\\n\", \$varsName))
                ->indent()
                ->write(\"throw new RuntimeError('Variables passed to the \\\"with\\\" tag must be a hash.', \")
                ->repr(\$node->getTemplateLine())
                ->raw(\", \\\$this->getSourceContext());\\n\")
                ->outdent()
                ->write(\"}\\n\")
                ->write(sprintf(\"\\\$%s = twig_to_array(\\\$%s);\\n\", \$varsName, \$varsName))
            ;

            if (\$this->getAttribute('only')) {
                \$compiler->write(\"\\\$context = ['_parent' => \\\$context];\\n\");
            } else {
                \$compiler->write(\"\\\$context['_parent'] = \\\$context;\\n\");
            }

            \$compiler->write(sprintf(\"\\\$context = \\\$this->env->mergeGlobals(array_merge(\\\$context, \\\$%s));\\n\", \$varsName));
        } else {
            \$compiler->write(\"\\\$context['_parent'] = \\\$context;\\n\");
        }

        \$compiler
            ->subcompile(\$this->getNode('body'))
            ->write(\"\\\$context = \\\$context['_parent'];\\n\")
        ;
    }
}

class_alias('Twig\\Node\\WithNode', 'Twig_Node_With');
", "vendor/twig/twig/src/Node/WithNode.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/WithNode.php");
    }
}
