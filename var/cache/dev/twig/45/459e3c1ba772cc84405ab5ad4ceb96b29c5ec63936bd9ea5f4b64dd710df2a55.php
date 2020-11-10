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

/* vendor/symfony/expression-language/Node/FunctionNode.php */
class __TwigTemplate_6fea5962390c156e69fac11190b7451987dc7fb081c3714433f86f0a30aeb1f9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Node/FunctionNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Node/FunctionNode.php"));

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
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
class FunctionNode extends Node
{
    public function __construct(string \$name, Node \$arguments)
    {
        parent::__construct(
            ['arguments' => \$arguments],
            ['name' => \$name]
        );
    }

    public function compile(Compiler \$compiler)
    {
        \$arguments = [];
        foreach (\$this->nodes['arguments']->nodes as \$node) {
            \$arguments[] = \$compiler->subcompile(\$node);
        }

        \$function = \$compiler->getFunction(\$this->attributes['name']);

        \$compiler->raw(\$function['compiler'](...\$arguments));
    }

    public function evaluate(\$functions, \$values)
    {
        \$arguments = [\$values];
        foreach (\$this->nodes['arguments']->nodes as \$node) {
            \$arguments[] = \$node->evaluate(\$functions, \$values);
        }

        return \$functions[\$this->attributes['name']]['evaluator'](...\$arguments);
    }

    public function toArray()
    {
        \$array = [];
        \$array[] = \$this->attributes['name'];

        foreach (\$this->nodes['arguments']->nodes as \$node) {
            \$array[] = ', ';
            \$array[] = \$node;
        }
        \$array[1] = '(';
        \$array[] = ')';

        return \$array;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/Node/FunctionNode.php";
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
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
class FunctionNode extends Node
{
    public function __construct(string \$name, Node \$arguments)
    {
        parent::__construct(
            ['arguments' => \$arguments],
            ['name' => \$name]
        );
    }

    public function compile(Compiler \$compiler)
    {
        \$arguments = [];
        foreach (\$this->nodes['arguments']->nodes as \$node) {
            \$arguments[] = \$compiler->subcompile(\$node);
        }

        \$function = \$compiler->getFunction(\$this->attributes['name']);

        \$compiler->raw(\$function['compiler'](...\$arguments));
    }

    public function evaluate(\$functions, \$values)
    {
        \$arguments = [\$values];
        foreach (\$this->nodes['arguments']->nodes as \$node) {
            \$arguments[] = \$node->evaluate(\$functions, \$values);
        }

        return \$functions[\$this->attributes['name']]['evaluator'](...\$arguments);
    }

    public function toArray()
    {
        \$array = [];
        \$array[] = \$this->attributes['name'];

        foreach (\$this->nodes['arguments']->nodes as \$node) {
            \$array[] = ', ';
            \$array[] = \$node;
        }
        \$array[1] = '(';
        \$array[] = ')';

        return \$array;
    }
}
", "vendor/symfony/expression-language/Node/FunctionNode.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/Node/FunctionNode.php");
    }
}
