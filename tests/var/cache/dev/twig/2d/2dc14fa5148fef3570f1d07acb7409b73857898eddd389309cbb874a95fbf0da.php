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

/* vendor/twig/twig/src/Node/Expression/Binary/StartsWithBinary.php */
class __TwigTemplate_1e5cdeb8aaa80cd805e8ad4e95c36845f4ac22f5eec842f3bd509257d5e9eab9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/Binary/StartsWithBinary.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/Binary/StartsWithBinary.php"));

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

namespace Twig\\Node\\Expression\\Binary;

use Twig\\Compiler;

class StartsWithBinary extends AbstractBinary
{
    public function compile(Compiler \$compiler)
    {
        \$left = \$compiler->getVarName();
        \$right = \$compiler->getVarName();
        \$compiler
            ->raw(sprintf('(is_string(\$%s = ', \$left))
            ->subcompile(\$this->getNode('left'))
            ->raw(sprintf(') && is_string(\$%s = ', \$right))
            ->subcompile(\$this->getNode('right'))
            ->raw(sprintf(') && (\\'\\' === \$%2\$s || 0 === strpos(\$%1\$s, \$%2\$s)))', \$left, \$right))
        ;
    }

    public function operator(Compiler \$compiler)
    {
        return \$compiler->raw('');
    }
}

class_alias('Twig\\Node\\Expression\\Binary\\StartsWithBinary', 'Twig_Node_Expression_Binary_StartsWith');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/Expression/Binary/StartsWithBinary.php";
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

namespace Twig\\Node\\Expression\\Binary;

use Twig\\Compiler;

class StartsWithBinary extends AbstractBinary
{
    public function compile(Compiler \$compiler)
    {
        \$left = \$compiler->getVarName();
        \$right = \$compiler->getVarName();
        \$compiler
            ->raw(sprintf('(is_string(\$%s = ', \$left))
            ->subcompile(\$this->getNode('left'))
            ->raw(sprintf(') && is_string(\$%s = ', \$right))
            ->subcompile(\$this->getNode('right'))
            ->raw(sprintf(') && (\\'\\' === \$%2\$s || 0 === strpos(\$%1\$s, \$%2\$s)))', \$left, \$right))
        ;
    }

    public function operator(Compiler \$compiler)
    {
        return \$compiler->raw('');
    }
}

class_alias('Twig\\Node\\Expression\\Binary\\StartsWithBinary', 'Twig_Node_Expression_Binary_StartsWith');
", "vendor/twig/twig/src/Node/Expression/Binary/StartsWithBinary.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/Expression/Binary/StartsWithBinary.php");
    }
}
