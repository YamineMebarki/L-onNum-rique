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

/* vendor/twig/twig/src/Node/MacroNode.php */
class __TwigTemplate_38dd80610e65f8ad37d52c6ff3961421ce3a69005c1dfdf6ec2b91629a7b5dbe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/MacroNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/MacroNode.php"));

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
use Twig\\Error\\SyntaxError;

/**
 * Represents a macro node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class MacroNode extends Node
{
    const VARARGS_NAME = 'varargs';

    public function __construct(string \$name, Node \$body, Node \$arguments, int \$lineno, string \$tag = null)
    {
        foreach (\$arguments as \$argumentName => \$argument) {
            if (self::VARARGS_NAME === \$argumentName) {
                throw new SyntaxError(sprintf('The argument \"%s\" in macro \"%s\" cannot be defined because the variable \"%s\" is reserved for arbitrary arguments.', self::VARARGS_NAME, \$name, self::VARARGS_NAME), \$argument->getTemplateLine(), \$argument->getSourceContext());
            }
        }

        parent::__construct(['body' => \$body, 'arguments' => \$arguments], ['name' => \$name], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write(sprintf('public function macro_%s(', \$this->getAttribute('name')))
        ;

        \$count = \\count(\$this->getNode('arguments'));
        \$pos = 0;
        foreach (\$this->getNode('arguments') as \$name => \$default) {
            \$compiler
                ->raw('\$__'.\$name.'__ = ')
                ->subcompile(\$default)
            ;

            if (++\$pos < \$count) {
                \$compiler->raw(', ');
            }
        }

        if (\$count) {
            \$compiler->raw(', ');
        }

        \$compiler
            ->raw('...\$__varargs__')
            ->raw(\")\\n\")
            ->write(\"{\\n\")
            ->indent()
            ->write(\"\\\$macros = \\\$this->macros;\\n\")
            ->write(\"\\\$context = \\\$this->env->mergeGlobals([\\n\")
            ->indent()
        ;

        foreach (\$this->getNode('arguments') as \$name => \$default) {
            \$compiler
                ->write('')
                ->string(\$name)
                ->raw(' => \$__'.\$name.'__')
                ->raw(\",\\n\")
            ;
        }

        \$compiler
            ->write('')
            ->string(self::VARARGS_NAME)
            ->raw(' => ')
        ;

        \$compiler
            ->raw(\"\\\$__varargs__,\\n\")
            ->outdent()
            ->write(\"]);\\n\\n\")
            ->write(\"\\\$blocks = [];\\n\\n\")
        ;
        if (\$compiler->getEnvironment()->isDebug()) {
            \$compiler->write(\"ob_start();\\n\");
        } else {
            \$compiler->write(\"ob_start(function () { return ''; });\\n\");
        }
        \$compiler
            ->write(\"try {\\n\")
            ->indent()
            ->subcompile(\$this->getNode('body'))
            ->raw(\"\\n\")
            ->write(\"return ('' === \\\$tmp = ob_get_contents()) ? '' : new Markup(\\\$tmp, \\\$this->env->getCharset());\\n\")
            ->outdent()
            ->write(\"} finally {\\n\")
            ->indent()
            ->write(\"ob_end_clean();\\n\")
            ->outdent()
            ->write(\"}\\n\")
            ->outdent()
            ->write(\"}\\n\\n\")
        ;
    }
}

class_alias('Twig\\Node\\MacroNode', 'Twig_Node_Macro');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/MacroNode.php";
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
use Twig\\Error\\SyntaxError;

/**
 * Represents a macro node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class MacroNode extends Node
{
    const VARARGS_NAME = 'varargs';

    public function __construct(string \$name, Node \$body, Node \$arguments, int \$lineno, string \$tag = null)
    {
        foreach (\$arguments as \$argumentName => \$argument) {
            if (self::VARARGS_NAME === \$argumentName) {
                throw new SyntaxError(sprintf('The argument \"%s\" in macro \"%s\" cannot be defined because the variable \"%s\" is reserved for arbitrary arguments.', self::VARARGS_NAME, \$name, self::VARARGS_NAME), \$argument->getTemplateLine(), \$argument->getSourceContext());
            }
        }

        parent::__construct(['body' => \$body, 'arguments' => \$arguments], ['name' => \$name], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write(sprintf('public function macro_%s(', \$this->getAttribute('name')))
        ;

        \$count = \\count(\$this->getNode('arguments'));
        \$pos = 0;
        foreach (\$this->getNode('arguments') as \$name => \$default) {
            \$compiler
                ->raw('\$__'.\$name.'__ = ')
                ->subcompile(\$default)
            ;

            if (++\$pos < \$count) {
                \$compiler->raw(', ');
            }
        }

        if (\$count) {
            \$compiler->raw(', ');
        }

        \$compiler
            ->raw('...\$__varargs__')
            ->raw(\")\\n\")
            ->write(\"{\\n\")
            ->indent()
            ->write(\"\\\$macros = \\\$this->macros;\\n\")
            ->write(\"\\\$context = \\\$this->env->mergeGlobals([\\n\")
            ->indent()
        ;

        foreach (\$this->getNode('arguments') as \$name => \$default) {
            \$compiler
                ->write('')
                ->string(\$name)
                ->raw(' => \$__'.\$name.'__')
                ->raw(\",\\n\")
            ;
        }

        \$compiler
            ->write('')
            ->string(self::VARARGS_NAME)
            ->raw(' => ')
        ;

        \$compiler
            ->raw(\"\\\$__varargs__,\\n\")
            ->outdent()
            ->write(\"]);\\n\\n\")
            ->write(\"\\\$blocks = [];\\n\\n\")
        ;
        if (\$compiler->getEnvironment()->isDebug()) {
            \$compiler->write(\"ob_start();\\n\");
        } else {
            \$compiler->write(\"ob_start(function () { return ''; });\\n\");
        }
        \$compiler
            ->write(\"try {\\n\")
            ->indent()
            ->subcompile(\$this->getNode('body'))
            ->raw(\"\\n\")
            ->write(\"return ('' === \\\$tmp = ob_get_contents()) ? '' : new Markup(\\\$tmp, \\\$this->env->getCharset());\\n\")
            ->outdent()
            ->write(\"} finally {\\n\")
            ->indent()
            ->write(\"ob_end_clean();\\n\")
            ->outdent()
            ->write(\"}\\n\")
            ->outdent()
            ->write(\"}\\n\\n\")
        ;
    }
}

class_alias('Twig\\Node\\MacroNode', 'Twig_Node_Macro');
", "vendor/twig/twig/src/Node/MacroNode.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/MacroNode.php");
    }
}
