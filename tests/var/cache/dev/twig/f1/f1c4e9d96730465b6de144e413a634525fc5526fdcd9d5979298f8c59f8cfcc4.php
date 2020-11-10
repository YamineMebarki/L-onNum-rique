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

/* vendor/twig/twig/src/Node/Expression/GetAttrExpression.php */
class __TwigTemplate_7c65f0942d0eedfafb085bd183e655d8379accf99f75d0a1152007f32ab115b5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/GetAttrExpression.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/GetAttrExpression.php"));

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
use Twig\\Extension\\SandboxExtension;
use Twig\\Template;

class GetAttrExpression extends AbstractExpression
{
    public function __construct(AbstractExpression \$node, AbstractExpression \$attribute, AbstractExpression \$arguments = null, string \$type, int \$lineno)
    {
        \$nodes = ['node' => \$node, 'attribute' => \$attribute];
        if (null !== \$arguments) {
            \$nodes['arguments'] = \$arguments;
        }

        parent::__construct(\$nodes, ['type' => \$type, 'is_defined_test' => false, 'ignore_strict_check' => false, 'optimizable' => true], \$lineno);
    }

    public function compile(Compiler \$compiler)
    {
        \$env = \$compiler->getEnvironment();

        // optimize array calls
        if (
            \$this->getAttribute('optimizable')
            && (!\$env->isStrictVariables() || \$this->getAttribute('ignore_strict_check'))
            && !\$this->getAttribute('is_defined_test')
            && Template::ARRAY_CALL === \$this->getAttribute('type')
        ) {
            \$var = '\$'.\$compiler->getVarName();
            \$compiler
                ->raw('(('.\$var.' = ')
                ->subcompile(\$this->getNode('node'))
                ->raw(') && is_array(')
                ->raw(\$var)
                ->raw(') || ')
                ->raw(\$var)
                ->raw(' instanceof ArrayAccess ? (')
                ->raw(\$var)
                ->raw('[')
                ->subcompile(\$this->getNode('attribute'))
                ->raw('] ?? null) : null)')
            ;

            return;
        }

        \$compiler->raw('twig_get_attribute(\$this->env, \$this->source, ');

        if (\$this->getAttribute('ignore_strict_check')) {
            \$this->getNode('node')->setAttribute('ignore_strict_check', true);
        }

        \$compiler
            ->subcompile(\$this->getNode('node'))
            ->raw(', ')
            ->subcompile(\$this->getNode('attribute'))
        ;

        if (\$this->hasNode('arguments')) {
            \$compiler->raw(', ')->subcompile(\$this->getNode('arguments'));
        } else {
            \$compiler->raw(', []');
        }

        \$compiler->raw(', ')
            ->repr(\$this->getAttribute('type'))
            ->raw(', ')->repr(\$this->getAttribute('is_defined_test'))
            ->raw(', ')->repr(\$this->getAttribute('ignore_strict_check'))
            ->raw(', ')->repr(\$env->hasExtension(SandboxExtension::class))
            ->raw(', ')->repr(\$this->getNode('node')->getTemplateLine())
            ->raw(')')
        ;
    }
}

class_alias('Twig\\Node\\Expression\\GetAttrExpression', 'Twig_Node_Expression_GetAttr');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/Expression/GetAttrExpression.php";
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
use Twig\\Extension\\SandboxExtension;
use Twig\\Template;

class GetAttrExpression extends AbstractExpression
{
    public function __construct(AbstractExpression \$node, AbstractExpression \$attribute, AbstractExpression \$arguments = null, string \$type, int \$lineno)
    {
        \$nodes = ['node' => \$node, 'attribute' => \$attribute];
        if (null !== \$arguments) {
            \$nodes['arguments'] = \$arguments;
        }

        parent::__construct(\$nodes, ['type' => \$type, 'is_defined_test' => false, 'ignore_strict_check' => false, 'optimizable' => true], \$lineno);
    }

    public function compile(Compiler \$compiler)
    {
        \$env = \$compiler->getEnvironment();

        // optimize array calls
        if (
            \$this->getAttribute('optimizable')
            && (!\$env->isStrictVariables() || \$this->getAttribute('ignore_strict_check'))
            && !\$this->getAttribute('is_defined_test')
            && Template::ARRAY_CALL === \$this->getAttribute('type')
        ) {
            \$var = '\$'.\$compiler->getVarName();
            \$compiler
                ->raw('(('.\$var.' = ')
                ->subcompile(\$this->getNode('node'))
                ->raw(') && is_array(')
                ->raw(\$var)
                ->raw(') || ')
                ->raw(\$var)
                ->raw(' instanceof ArrayAccess ? (')
                ->raw(\$var)
                ->raw('[')
                ->subcompile(\$this->getNode('attribute'))
                ->raw('] ?? null) : null)')
            ;

            return;
        }

        \$compiler->raw('twig_get_attribute(\$this->env, \$this->source, ');

        if (\$this->getAttribute('ignore_strict_check')) {
            \$this->getNode('node')->setAttribute('ignore_strict_check', true);
        }

        \$compiler
            ->subcompile(\$this->getNode('node'))
            ->raw(', ')
            ->subcompile(\$this->getNode('attribute'))
        ;

        if (\$this->hasNode('arguments')) {
            \$compiler->raw(', ')->subcompile(\$this->getNode('arguments'));
        } else {
            \$compiler->raw(', []');
        }

        \$compiler->raw(', ')
            ->repr(\$this->getAttribute('type'))
            ->raw(', ')->repr(\$this->getAttribute('is_defined_test'))
            ->raw(', ')->repr(\$this->getAttribute('ignore_strict_check'))
            ->raw(', ')->repr(\$env->hasExtension(SandboxExtension::class))
            ->raw(', ')->repr(\$this->getNode('node')->getTemplateLine())
            ->raw(')')
        ;
    }
}

class_alias('Twig\\Node\\Expression\\GetAttrExpression', 'Twig_Node_Expression_GetAttr');
", "vendor/twig/twig/src/Node/Expression/GetAttrExpression.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/Expression/GetAttrExpression.php");
    }
}
