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

/* vendor/twig/twig/src/Node/Expression/Test/OddTest.php */
class __TwigTemplate_9aa128308d9ec830e82a8fdfaf80b9f450c60f76ade36630e626471430798d33 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/Test/OddTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/Test/OddTest.php"));

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

namespace Twig\\Node\\Expression\\Test;

use Twig\\Compiler;
use Twig\\Node\\Expression\\TestExpression;

/**
 * Checks if a number is odd.
 *
 *  ";
        // line 20
        echo twig_escape_filter($this->env, ((isset($context["var"]) || array_key_exists("var", $context) ? $context["var"] : (function () { throw new RuntimeError('Variable "var" does not exist.', 20, $this->source); })()) % 2 == 1), "html", null, true);
        echo "
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class OddTest extends TestExpression
{
    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->raw('(')
            ->subcompile(\$this->getNode('node'))
            ->raw(' % 2 == 1')
            ->raw(')')
        ;
    }
}

class_alias('Twig\\Node\\Expression\\Test\\OddTest', 'Twig_Node_Expression_Test_Odd');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/Expression/Test/OddTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  43 => 1,);
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

namespace Twig\\Node\\Expression\\Test;

use Twig\\Compiler;
use Twig\\Node\\Expression\\TestExpression;

/**
 * Checks if a number is odd.
 *
 *  {{ var is odd }}
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class OddTest extends TestExpression
{
    public function compile(Compiler \$compiler)
    {
        \$compiler
            ->raw('(')
            ->subcompile(\$this->getNode('node'))
            ->raw(' % 2 == 1')
            ->raw(')')
        ;
    }
}

class_alias('Twig\\Node\\Expression\\Test\\OddTest', 'Twig_Node_Expression_Test_Odd');
", "vendor/twig/twig/src/Node/Expression/Test/OddTest.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/Expression/Test/OddTest.php");
    }
}
