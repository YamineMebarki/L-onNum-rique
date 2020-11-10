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

/* vendor/symfony/expression-language/Node/ConditionalNode.php */
class __TwigTemplate_54db6ef3de02c87bca9531e8663de1dc3aed04df4d9885d3a71dd677a852130b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Node/ConditionalNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Node/ConditionalNode.php"));

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
class ConditionalNode extends Node
{
    public function __construct(Node \$expr1, Node \$expr2, Node \$expr3)
    {
        parent::__construct(
            ['expr1' => \$expr1, 'expr2' => \$expr2, 'expr3' => \$expr3]
        );
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->raw('((')
            ->compile(\$this->nodes['expr1'])
            ->raw(') ? (')
            ->compile(\$this->nodes['expr2'])
            ->raw(') : (')
            ->compile(\$this->nodes['expr3'])
            ->raw('))')
        ;
    }

    public function evaluate(\$functions, \$values)
    {
        if (\$this->nodes['expr1']->evaluate(\$functions, \$values)) {
            return \$this->nodes['expr2']->evaluate(\$functions, \$values);
        }

        return \$this->nodes['expr3']->evaluate(\$functions, \$values);
    }

    public function toArray()
    {
        return ['(', \$this->nodes['expr1'], ' ? ', \$this->nodes['expr2'], ' : ', \$this->nodes['expr3'], ')'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/Node/ConditionalNode.php";
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
class ConditionalNode extends Node
{
    public function __construct(Node \$expr1, Node \$expr2, Node \$expr3)
    {
        parent::__construct(
            ['expr1' => \$expr1, 'expr2' => \$expr2, 'expr3' => \$expr3]
        );
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->raw('((')
            ->compile(\$this->nodes['expr1'])
            ->raw(') ? (')
            ->compile(\$this->nodes['expr2'])
            ->raw(') : (')
            ->compile(\$this->nodes['expr3'])
            ->raw('))')
        ;
    }

    public function evaluate(\$functions, \$values)
    {
        if (\$this->nodes['expr1']->evaluate(\$functions, \$values)) {
            return \$this->nodes['expr2']->evaluate(\$functions, \$values);
        }

        return \$this->nodes['expr3']->evaluate(\$functions, \$values);
    }

    public function toArray()
    {
        return ['(', \$this->nodes['expr1'], ' ? ', \$this->nodes['expr2'], ' : ', \$this->nodes['expr3'], ')'];
    }
}
", "vendor/symfony/expression-language/Node/ConditionalNode.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/Node/ConditionalNode.php");
    }
}
