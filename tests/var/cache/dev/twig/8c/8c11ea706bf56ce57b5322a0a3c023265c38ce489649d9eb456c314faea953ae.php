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

/* vendor/twig/twig/src/Node/Expression/ParentExpression.php */
class __TwigTemplate_c5114f2c576904a12b2bc913ab57c46c7a9eb13db3195d417c5be8c2e438ca8e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/ParentExpression.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/ParentExpression.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node\\Expression;

use Twig\\Compiler;

/**
 * Represents a parent node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ParentExpression extends AbstractExpression
{
    public function __construct(string \$name, int \$lineno, string \$tag = null)
    {
        parent::__construct([], ['output' => false, 'name' => \$name], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        if (\$this->getAttribute('output')) {
            \$compiler
                ->addDebugInfo(\$this)
                ->write('\$this->displayParentBlock(')
                ->string(\$this->getAttribute('name'))
                ->raw(\", \\\$context, \\\$blocks);\\n\")
            ;
        } else {
            \$compiler
                ->raw('\$this->renderParentBlock(')
                ->string(\$this->getAttribute('name'))
                ->raw(', \$context, \$blocks)')
            ;
        }
    }
}

class_alias('Twig\\Node\\Expression\\ParentExpression', 'Twig_Node_Expression_Parent');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/Expression/ParentExpression.php";
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
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Node\\Expression;

use Twig\\Compiler;

/**
 * Represents a parent node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ParentExpression extends AbstractExpression
{
    public function __construct(string \$name, int \$lineno, string \$tag = null)
    {
        parent::__construct([], ['output' => false, 'name' => \$name], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        if (\$this->getAttribute('output')) {
            \$compiler
                ->addDebugInfo(\$this)
                ->write('\$this->displayParentBlock(')
                ->string(\$this->getAttribute('name'))
                ->raw(\", \\\$context, \\\$blocks);\\n\")
            ;
        } else {
            \$compiler
                ->raw('\$this->renderParentBlock(')
                ->string(\$this->getAttribute('name'))
                ->raw(', \$context, \$blocks)')
            ;
        }
    }
}

class_alias('Twig\\Node\\Expression\\ParentExpression', 'Twig_Node_Expression_Parent');
", "vendor/twig/twig/src/Node/Expression/ParentExpression.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/Expression/ParentExpression.php");
    }
}
