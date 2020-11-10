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

/* vendor/symfony/twig-bridge/Node/DumpNode.php */
class __TwigTemplate_1914e96a223361ac396830e378641e224925baa92aa96ac32e69bdb6648bce84 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Node/DumpNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Node/DumpNode.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Twig\\Node;

use Twig\\Compiler;
use Twig\\Node\\Node;

/**
 * @author Julien Galenski <julien.galenski@gmail.com>
 */
class DumpNode extends Node
{
    private \$varPrefix;

    public function __construct(\$varPrefix, Node \$values = null, int \$lineno, string \$tag = null)
    {
        \$nodes = [];
        if (null !== \$values) {
            \$nodes['values'] = \$values;
        }

        parent::__construct(\$nodes, [], \$lineno, \$tag);
        \$this->varPrefix = \$varPrefix;
    }

    /**
     * {@inheritdoc}
     */
    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->write(\"if (\\\$this->env->isDebug()) {\\n\")
            ->indent();

        if (!\$this->hasNode('values')) {
            // remove embedded templates (macros) from the context
            \$compiler
                ->write(sprintf('\$%svars = [];'.\"\\n\", \$this->varPrefix))
                ->write(sprintf('foreach (\$context as \$%1\$skey => \$%1\$sval) {'.\"\\n\", \$this->varPrefix))
                ->indent()
                ->write(sprintf('if (!\$%sval instanceof \\Twig\\Template) {'.\"\\n\", \$this->varPrefix))
                ->indent()
                ->write(sprintf('\$%1\$svars[\$%1\$skey] = \$%1\$sval;'.\"\\n\", \$this->varPrefix))
                ->outdent()
                ->write(\"}\\n\")
                ->outdent()
                ->write(\"}\\n\")
                ->addDebugInfo(\$this)
                ->write(sprintf('\\Symfony\\Component\\VarDumper\\VarDumper::dump(\$%svars);'.\"\\n\", \$this->varPrefix));
        } elseif ((\$values = \$this->getNode('values')) && 1 === \$values->count()) {
            \$compiler
                ->addDebugInfo(\$this)
                ->write('\\Symfony\\Component\\VarDumper\\VarDumper::dump(')
                ->subcompile(\$values->getNode(0))
                ->raw(\");\\n\");
        } else {
            \$compiler
                ->addDebugInfo(\$this)
                ->write('\\Symfony\\Component\\VarDumper\\VarDumper::dump(['.\"\\n\")
                ->indent();
            foreach (\$values as \$node) {
                \$compiler->write('');
                if (\$node->hasAttribute('name')) {
                    \$compiler
                        ->string(\$node->getAttribute('name'))
                        ->raw(' => ');
                }
                \$compiler
                    ->subcompile(\$node)
                    ->raw(\",\\n\");
            }
            \$compiler
                ->outdent()
                ->write(\"]);\\n\");
        }

        \$compiler
            ->outdent()
            ->write(\"}\\n\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Node/DumpNode.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Twig\\Node;

use Twig\\Compiler;
use Twig\\Node\\Node;

/**
 * @author Julien Galenski <julien.galenski@gmail.com>
 */
class DumpNode extends Node
{
    private \$varPrefix;

    public function __construct(\$varPrefix, Node \$values = null, int \$lineno, string \$tag = null)
    {
        \$nodes = [];
        if (null !== \$values) {
            \$nodes['values'] = \$values;
        }

        parent::__construct(\$nodes, [], \$lineno, \$tag);
        \$this->varPrefix = \$varPrefix;
    }

    /**
     * {@inheritdoc}
     */
    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->write(\"if (\\\$this->env->isDebug()) {\\n\")
            ->indent();

        if (!\$this->hasNode('values')) {
            // remove embedded templates (macros) from the context
            \$compiler
                ->write(sprintf('\$%svars = [];'.\"\\n\", \$this->varPrefix))
                ->write(sprintf('foreach (\$context as \$%1\$skey => \$%1\$sval) {'.\"\\n\", \$this->varPrefix))
                ->indent()
                ->write(sprintf('if (!\$%sval instanceof \\Twig\\Template) {'.\"\\n\", \$this->varPrefix))
                ->indent()
                ->write(sprintf('\$%1\$svars[\$%1\$skey] = \$%1\$sval;'.\"\\n\", \$this->varPrefix))
                ->outdent()
                ->write(\"}\\n\")
                ->outdent()
                ->write(\"}\\n\")
                ->addDebugInfo(\$this)
                ->write(sprintf('\\Symfony\\Component\\VarDumper\\VarDumper::dump(\$%svars);'.\"\\n\", \$this->varPrefix));
        } elseif ((\$values = \$this->getNode('values')) && 1 === \$values->count()) {
            \$compiler
                ->addDebugInfo(\$this)
                ->write('\\Symfony\\Component\\VarDumper\\VarDumper::dump(')
                ->subcompile(\$values->getNode(0))
                ->raw(\");\\n\");
        } else {
            \$compiler
                ->addDebugInfo(\$this)
                ->write('\\Symfony\\Component\\VarDumper\\VarDumper::dump(['.\"\\n\")
                ->indent();
            foreach (\$values as \$node) {
                \$compiler->write('');
                if (\$node->hasAttribute('name')) {
                    \$compiler
                        ->string(\$node->getAttribute('name'))
                        ->raw(' => ');
                }
                \$compiler
                    ->subcompile(\$node)
                    ->raw(\",\\n\");
            }
            \$compiler
                ->outdent()
                ->write(\"]);\\n\");
        }

        \$compiler
            ->outdent()
            ->write(\"}\\n\");
    }
}
", "vendor/symfony/twig-bridge/Node/DumpNode.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Node/DumpNode.php");
    }
}
