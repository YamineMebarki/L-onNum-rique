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

/* vendor/twig/twig/src/Node/DoNode.php */
class __TwigTemplate_2ba076a47157ae6a626785b9ece8deae0453ce8671b46fe54e70f1999578a565 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/DoNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/DoNode.php"));

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
use Twig\\Node\\Expression\\AbstractExpression;

/**
 * Represents a do node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DoNode extends Node
{
    public function __construct(AbstractExpression \$expr, int \$lineno, string \$tag = null)
    {
        parent::__construct(['expr' => \$expr], [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write('')
            ->subcompile(\$this->getNode('expr'))
            ->raw(\";\\n\")
        ;
    }
}

class_alias('Twig\\Node\\DoNode', 'Twig_Node_Do');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/DoNode.php";
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
use Twig\\Node\\Expression\\AbstractExpression;

/**
 * Represents a do node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DoNode extends Node
{
    public function __construct(AbstractExpression \$expr, int \$lineno, string \$tag = null)
    {
        parent::__construct(['expr' => \$expr], [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->addDebugInfo(\$this)
            ->write('')
            ->subcompile(\$this->getNode('expr'))
            ->raw(\";\\n\")
        ;
    }
}

class_alias('Twig\\Node\\DoNode', 'Twig_Node_Do');
", "vendor/twig/twig/src/Node/DoNode.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/DoNode.php");
    }
}
