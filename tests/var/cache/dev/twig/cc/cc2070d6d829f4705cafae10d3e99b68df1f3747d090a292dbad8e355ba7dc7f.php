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

/* vendor/symfony/expression-language/Node/Node.php */
class __TwigTemplate_e7200959bb3458b13804927f73fb100b06c1be784b5e3b5a85d41f8dec7fde1c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Node/Node.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Node/Node.php"));

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

namespace Symfony\\Component\\ExpressionLanguage\\Node;

use Symfony\\Component\\ExpressionLanguage\\Compiler;

/**
 * Represents a node in the AST.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Node
{
    public \$nodes = [];
    public \$attributes = [];

    /**
     * @param array \$nodes      An array of nodes
     * @param array \$attributes An array of attributes
     */
    public function __construct(array \$nodes = [], array \$attributes = [])
    {
        \$this->nodes = \$nodes;
        \$this->attributes = \$attributes;
    }

    public function __toString()
    {
        \$attributes = [];
        foreach (\$this->attributes as \$name => \$value) {
            \$attributes[] = sprintf('%s: %s', \$name, str_replace(\"\\n\", '', var_export(\$value, true)));
        }

        \$repr = [str_replace('Symfony\\Component\\ExpressionLanguage\\Node\\\\', '', \\get_class(\$this)).'('.implode(', ', \$attributes)];

        if (\\count(\$this->nodes)) {
            foreach (\$this->nodes as \$node) {
                foreach (explode(\"\\n\", (string) \$node) as \$line) {
                    \$repr[] = '    '.\$line;
                }
            }

            \$repr[] = ')';
        } else {
            \$repr[0] .= ')';
        }

        return implode(\"\\n\", \$repr);
    }

    public function compile(Compiler \$compiler)
    {
        foreach (\$this->nodes as \$node) {
            \$node->compile(\$compiler);
        }
    }

    public function evaluate(\$functions, \$values)
    {
        \$results = [];
        foreach (\$this->nodes as \$node) {
            \$results[] = \$node->evaluate(\$functions, \$values);
        }

        return \$results;
    }

    public function toArray()
    {
        throw new \\BadMethodCallException(sprintf('Dumping a \"%s\" instance is not supported yet.', \\get_class(\$this)));
    }

    public function dump()
    {
        \$dump = '';

        foreach (\$this->toArray() as \$v) {
            \$dump .= is_scalar(\$v) ? \$v : \$v->dump();
        }

        return \$dump;
    }

    protected function dumpString(\$value)
    {
        return sprintf('\"%s\"', addcslashes(\$value, \"\\0\\t\\\"\\\\\"));
    }

    protected function isHash(array \$value)
    {
        \$expectedKey = 0;

        foreach (\$value as \$key => \$val) {
            if (\$key !== \$expectedKey++) {
                return true;
            }
        }

        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/Node/Node.php";
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

namespace Symfony\\Component\\ExpressionLanguage\\Node;

use Symfony\\Component\\ExpressionLanguage\\Compiler;

/**
 * Represents a node in the AST.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Node
{
    public \$nodes = [];
    public \$attributes = [];

    /**
     * @param array \$nodes      An array of nodes
     * @param array \$attributes An array of attributes
     */
    public function __construct(array \$nodes = [], array \$attributes = [])
    {
        \$this->nodes = \$nodes;
        \$this->attributes = \$attributes;
    }

    public function __toString()
    {
        \$attributes = [];
        foreach (\$this->attributes as \$name => \$value) {
            \$attributes[] = sprintf('%s: %s', \$name, str_replace(\"\\n\", '', var_export(\$value, true)));
        }

        \$repr = [str_replace('Symfony\\Component\\ExpressionLanguage\\Node\\\\', '', \\get_class(\$this)).'('.implode(', ', \$attributes)];

        if (\\count(\$this->nodes)) {
            foreach (\$this->nodes as \$node) {
                foreach (explode(\"\\n\", (string) \$node) as \$line) {
                    \$repr[] = '    '.\$line;
                }
            }

            \$repr[] = ')';
        } else {
            \$repr[0] .= ')';
        }

        return implode(\"\\n\", \$repr);
    }

    public function compile(Compiler \$compiler)
    {
        foreach (\$this->nodes as \$node) {
            \$node->compile(\$compiler);
        }
    }

    public function evaluate(\$functions, \$values)
    {
        \$results = [];
        foreach (\$this->nodes as \$node) {
            \$results[] = \$node->evaluate(\$functions, \$values);
        }

        return \$results;
    }

    public function toArray()
    {
        throw new \\BadMethodCallException(sprintf('Dumping a \"%s\" instance is not supported yet.', \\get_class(\$this)));
    }

    public function dump()
    {
        \$dump = '';

        foreach (\$this->toArray() as \$v) {
            \$dump .= is_scalar(\$v) ? \$v : \$v->dump();
        }

        return \$dump;
    }

    protected function dumpString(\$value)
    {
        return sprintf('\"%s\"', addcslashes(\$value, \"\\0\\t\\\"\\\\\"));
    }

    protected function isHash(array \$value)
    {
        \$expectedKey = 0;

        foreach (\$value as \$key => \$val) {
            if (\$key !== \$expectedKey++) {
                return true;
            }
        }

        return false;
    }
}
", "vendor/symfony/expression-language/Node/Node.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/Node/Node.php");
    }
}
