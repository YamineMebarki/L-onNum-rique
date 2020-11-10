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

/* vendor/twig/twig/src/Node/Expression/TestExpression.php */
class __TwigTemplate_64e8bc45d42fa66a6fabf0f57b8b84500a19b01a6305c569c96ea86cf43cc1ff extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/TestExpression.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/TestExpression.php"));

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

namespace Twig\\Node\\Expression;

use Twig\\Compiler;
use Twig\\Node\\Node;

class TestExpression extends CallExpression
{
    public function __construct(Node \$node, string \$name, Node \$arguments = null, int \$lineno)
    {
        \$nodes = ['node' => \$node];
        if (null !== \$arguments) {
            \$nodes['arguments'] = \$arguments;
        }

        parent::__construct(\$nodes, ['name' => \$name], \$lineno);
    }

    public function compile(Compiler \$compiler)
    {
        \$name = \$this->getAttribute('name');
        \$test = \$compiler->getEnvironment()->getTest(\$name);

        \$this->setAttribute('name', \$name);
        \$this->setAttribute('type', 'test');
        \$this->setAttribute('arguments', \$test->getArguments());
        \$this->setAttribute('callable', \$test->getCallable());
        \$this->setAttribute('is_variadic', \$test->isVariadic());

        \$this->compileCallable(\$compiler);
    }
}

class_alias('Twig\\Node\\Expression\\TestExpression', 'Twig_Node_Expression_Test');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/Expression/TestExpression.php";
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

namespace Twig\\Node\\Expression;

use Twig\\Compiler;
use Twig\\Node\\Node;

class TestExpression extends CallExpression
{
    public function __construct(Node \$node, string \$name, Node \$arguments = null, int \$lineno)
    {
        \$nodes = ['node' => \$node];
        if (null !== \$arguments) {
            \$nodes['arguments'] = \$arguments;
        }

        parent::__construct(\$nodes, ['name' => \$name], \$lineno);
    }

    public function compile(Compiler \$compiler)
    {
        \$name = \$this->getAttribute('name');
        \$test = \$compiler->getEnvironment()->getTest(\$name);

        \$this->setAttribute('name', \$name);
        \$this->setAttribute('type', 'test');
        \$this->setAttribute('arguments', \$test->getArguments());
        \$this->setAttribute('callable', \$test->getCallable());
        \$this->setAttribute('is_variadic', \$test->isVariadic());

        \$this->compileCallable(\$compiler);
    }
}

class_alias('Twig\\Node\\Expression\\TestExpression', 'Twig_Node_Expression_Test');
", "vendor/twig/twig/src/Node/Expression/TestExpression.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/Expression/TestExpression.php");
    }
}
