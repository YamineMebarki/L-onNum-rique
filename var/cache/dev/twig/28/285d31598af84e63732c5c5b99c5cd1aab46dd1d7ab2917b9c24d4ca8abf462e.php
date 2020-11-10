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

/* vendor/twig/twig/src/Node/Expression/FunctionExpression.php */
class __TwigTemplate_1b3845b76ec2df698b8377096f36239f768f57e611c81b71b803367ae809eefa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/FunctionExpression.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/FunctionExpression.php"));

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

class FunctionExpression extends CallExpression
{
    public function __construct(string \$name, Node \$arguments, int \$lineno)
    {
        parent::__construct(['arguments' => \$arguments], ['name' => \$name, 'is_defined_test' => false], \$lineno);
    }

    public function compile(Compiler \$compiler)
    {
        \$name = \$this->getAttribute('name');
        \$function = \$compiler->getEnvironment()->getFunction(\$name);

        \$this->setAttribute('name', \$name);
        \$this->setAttribute('type', 'function');
        \$this->setAttribute('needs_environment', \$function->needsEnvironment());
        \$this->setAttribute('needs_context', \$function->needsContext());
        \$this->setAttribute('arguments', \$function->getArguments());
        \$callable = \$function->getCallable();
        if ('constant' === \$name && \$this->getAttribute('is_defined_test')) {
            \$callable = 'twig_constant_is_defined';
        }
        \$this->setAttribute('callable', \$callable);
        \$this->setAttribute('is_variadic', \$function->isVariadic());

        \$this->compileCallable(\$compiler);
    }
}

class_alias('Twig\\Node\\Expression\\FunctionExpression', 'Twig_Node_Expression_Function');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/Expression/FunctionExpression.php";
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

class FunctionExpression extends CallExpression
{
    public function __construct(string \$name, Node \$arguments, int \$lineno)
    {
        parent::__construct(['arguments' => \$arguments], ['name' => \$name, 'is_defined_test' => false], \$lineno);
    }

    public function compile(Compiler \$compiler)
    {
        \$name = \$this->getAttribute('name');
        \$function = \$compiler->getEnvironment()->getFunction(\$name);

        \$this->setAttribute('name', \$name);
        \$this->setAttribute('type', 'function');
        \$this->setAttribute('needs_environment', \$function->needsEnvironment());
        \$this->setAttribute('needs_context', \$function->needsContext());
        \$this->setAttribute('arguments', \$function->getArguments());
        \$callable = \$function->getCallable();
        if ('constant' === \$name && \$this->getAttribute('is_defined_test')) {
            \$callable = 'twig_constant_is_defined';
        }
        \$this->setAttribute('callable', \$callable);
        \$this->setAttribute('is_variadic', \$function->isVariadic());

        \$this->compileCallable(\$compiler);
    }
}

class_alias('Twig\\Node\\Expression\\FunctionExpression', 'Twig_Node_Expression_Function');
", "vendor/twig/twig/src/Node/Expression/FunctionExpression.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/Expression/FunctionExpression.php");
    }
}
