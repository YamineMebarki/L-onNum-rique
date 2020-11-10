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

/* vendor/twig/twig/src/Node/Expression/NameExpression.php */
class __TwigTemplate_9b7f8c6d73ae7da8719749eae1f3d5ae660baf2246edc5ac5d4f6e97e7c79d97 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/NameExpression.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Node/Expression/NameExpression.php"));

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

class NameExpression extends AbstractExpression
{
    private \$specialVars = [
        '_self' => '\$this->getTemplateName()',
        '_context' => '\$context',
        '_charset' => '\$this->env->getCharset()',
    ];

    public function __construct(string \$name, int \$lineno)
    {
        parent::__construct([], ['name' => \$name, 'is_defined_test' => false, 'ignore_strict_check' => false, 'always_defined' => false], \$lineno);
    }

    public function compile(Compiler \$compiler)
    {
        \$name = \$this->getAttribute('name');

        \$compiler->addDebugInfo(\$this);

        if (\$this->getAttribute('is_defined_test')) {
            if (\$this->isSpecial()) {
                \$compiler->repr(true);
            } elseif (\\PHP_VERSION_ID >= 700400) {
                \$compiler
                    ->raw('array_key_exists(')
                    ->string(\$name)
                    ->raw(', \$context)')
                ;
            } else {
                \$compiler
                    ->raw('(isset(\$context[')
                    ->string(\$name)
                    ->raw(']) || array_key_exists(')
                    ->string(\$name)
                    ->raw(', \$context))')
                ;
            }
        } elseif (\$this->isSpecial()) {
            \$compiler->raw(\$this->specialVars[\$name]);
        } elseif (\$this->getAttribute('always_defined')) {
            \$compiler
                ->raw('\$context[')
                ->string(\$name)
                ->raw(']')
            ;
        } else {
            if (\$this->getAttribute('ignore_strict_check') || !\$compiler->getEnvironment()->isStrictVariables()) {
                \$compiler
                    ->raw('(\$context[')
                    ->string(\$name)
                    ->raw('] ?? null)')
                ;
            } else {
                \$compiler
                    ->raw('(isset(\$context[')
                    ->string(\$name)
                    ->raw(']) || array_key_exists(')
                    ->string(\$name)
                    ->raw(', \$context) ? \$context[')
                    ->string(\$name)
                    ->raw('] : (function () { throw new RuntimeError(\\'Variable ')
                    ->string(\$name)
                    ->raw(' does not exist.\\', ')
                    ->repr(\$this->lineno)
                    ->raw(', \$this->source); })()')
                    ->raw(')')
                ;
            }
        }
    }

    public function isSpecial()
    {
        return isset(\$this->specialVars[\$this->getAttribute('name')]);
    }

    public function isSimple()
    {
        return !\$this->isSpecial() && !\$this->getAttribute('is_defined_test');
    }
}

class_alias('Twig\\Node\\Expression\\NameExpression', 'Twig_Node_Expression_Name');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Node/Expression/NameExpression.php";
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

class NameExpression extends AbstractExpression
{
    private \$specialVars = [
        '_self' => '\$this->getTemplateName()',
        '_context' => '\$context',
        '_charset' => '\$this->env->getCharset()',
    ];

    public function __construct(string \$name, int \$lineno)
    {
        parent::__construct([], ['name' => \$name, 'is_defined_test' => false, 'ignore_strict_check' => false, 'always_defined' => false], \$lineno);
    }

    public function compile(Compiler \$compiler)
    {
        \$name = \$this->getAttribute('name');

        \$compiler->addDebugInfo(\$this);

        if (\$this->getAttribute('is_defined_test')) {
            if (\$this->isSpecial()) {
                \$compiler->repr(true);
            } elseif (\\PHP_VERSION_ID >= 700400) {
                \$compiler
                    ->raw('array_key_exists(')
                    ->string(\$name)
                    ->raw(', \$context)')
                ;
            } else {
                \$compiler
                    ->raw('(isset(\$context[')
                    ->string(\$name)
                    ->raw(']) || array_key_exists(')
                    ->string(\$name)
                    ->raw(', \$context))')
                ;
            }
        } elseif (\$this->isSpecial()) {
            \$compiler->raw(\$this->specialVars[\$name]);
        } elseif (\$this->getAttribute('always_defined')) {
            \$compiler
                ->raw('\$context[')
                ->string(\$name)
                ->raw(']')
            ;
        } else {
            if (\$this->getAttribute('ignore_strict_check') || !\$compiler->getEnvironment()->isStrictVariables()) {
                \$compiler
                    ->raw('(\$context[')
                    ->string(\$name)
                    ->raw('] ?? null)')
                ;
            } else {
                \$compiler
                    ->raw('(isset(\$context[')
                    ->string(\$name)
                    ->raw(']) || array_key_exists(')
                    ->string(\$name)
                    ->raw(', \$context) ? \$context[')
                    ->string(\$name)
                    ->raw('] : (function () { throw new RuntimeError(\\'Variable ')
                    ->string(\$name)
                    ->raw(' does not exist.\\', ')
                    ->repr(\$this->lineno)
                    ->raw(', \$this->source); })()')
                    ->raw(')')
                ;
            }
        }
    }

    public function isSpecial()
    {
        return isset(\$this->specialVars[\$this->getAttribute('name')]);
    }

    public function isSimple()
    {
        return !\$this->isSpecial() && !\$this->getAttribute('is_defined_test');
    }
}

class_alias('Twig\\Node\\Expression\\NameExpression', 'Twig_Node_Expression_Name');
", "vendor/twig/twig/src/Node/Expression/NameExpression.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Node/Expression/NameExpression.php");
    }
}
