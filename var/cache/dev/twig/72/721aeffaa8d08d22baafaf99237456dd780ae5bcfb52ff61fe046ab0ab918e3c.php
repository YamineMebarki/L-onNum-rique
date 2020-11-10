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

/* vendor/symfony/twig-bridge/Node/StopwatchNode.php */
class __TwigTemplate_fc0c613c89430fa3893eb1603a4eea9400a82d7be9ebafdd2547eceab21674bc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Node/StopwatchNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Node/StopwatchNode.php"));

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
use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Node\\Node;

/**
 * Represents a stopwatch node.
 *
 * @author Wouter J <wouter@wouterj.nl>
 */
class StopwatchNode extends Node
{
    public function __construct(Node \$name, Node \$body, AssignNameExpression \$var, int \$lineno = 0, string \$tag = null)
    {
        parent::__construct(['body' => \$body, 'name' => \$name, 'var' => \$var], [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write('')
            ->subcompile(\$this->getNode('var'))
            ->raw(' = ')
            ->subcompile(\$this->getNode('name'))
            ->write(\";\\n\")
            ->write(\"\\\$this->env->getExtension('Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension')->getStopwatch()->start(\")
            ->subcompile(\$this->getNode('var'))
            ->raw(\", 'template');\\n\")
            ->subcompile(\$this->getNode('body'))
            ->write(\"\\\$this->env->getExtension('Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension')->getStopwatch()->stop(\")
            ->subcompile(\$this->getNode('var'))
            ->raw(\");\\n\")
        ;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Node/StopwatchNode.php";
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
use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Node\\Node;

/**
 * Represents a stopwatch node.
 *
 * @author Wouter J <wouter@wouterj.nl>
 */
class StopwatchNode extends Node
{
    public function __construct(Node \$name, Node \$body, AssignNameExpression \$var, int \$lineno = 0, string \$tag = null)
    {
        parent::__construct(['body' => \$body, 'name' => \$name, 'var' => \$var], [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write('')
            ->subcompile(\$this->getNode('var'))
            ->raw(' = ')
            ->subcompile(\$this->getNode('name'))
            ->write(\";\\n\")
            ->write(\"\\\$this->env->getExtension('Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension')->getStopwatch()->start(\")
            ->subcompile(\$this->getNode('var'))
            ->raw(\", 'template');\\n\")
            ->subcompile(\$this->getNode('body'))
            ->write(\"\\\$this->env->getExtension('Symfony\\Bridge\\Twig\\Extension\\StopwatchExtension')->getStopwatch()->stop(\")
            ->subcompile(\$this->getNode('var'))
            ->raw(\");\\n\")
        ;
    }
}
", "vendor/symfony/twig-bridge/Node/StopwatchNode.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Node/StopwatchNode.php");
    }
}
