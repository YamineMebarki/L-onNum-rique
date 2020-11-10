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

/* vendor/symfony/twig-bridge/Node/TransNode.php */
class __TwigTemplate_cdac28c9a3481eb6e434b05222b2c5814dc1c69c00f399d4d30da79872d2a5ba extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Node/TransNode.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/Node/TransNode.php"));

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
use Twig\\Node\\Expression\\AbstractExpression;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Node;
use Twig\\Node\\TextNode;

// BC/FC with namespaced Twig
class_exists('Twig\\Node\\Expression\\ArrayExpression');

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TransNode extends Node
{
    public function __construct(Node \$body, Node \$domain = null, AbstractExpression \$count = null, AbstractExpression \$vars = null, AbstractExpression \$locale = null, int \$lineno = 0, string \$tag = null)
    {
        \$nodes = ['body' => \$body];
        if (null !== \$domain) {
            \$nodes['domain'] = \$domain;
        }
        if (null !== \$count) {
            \$nodes['count'] = \$count;
        }
        if (null !== \$vars) {
            \$nodes['vars'] = \$vars;
        }
        if (null !== \$locale) {
            \$nodes['locale'] = \$locale;
        }

        parent::__construct(\$nodes, [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler->addDebugInfo(\$this);

        \$defaults = new ArrayExpression([], -1);
        if (\$this->hasNode('vars') && (\$vars = \$this->getNode('vars')) instanceof ArrayExpression) {
            \$defaults = \$this->getNode('vars');
            \$vars = null;
        }
        list(\$msg, \$defaults) = \$this->compileString(\$this->getNode('body'), \$defaults, (bool) \$vars);

        \$method = !\$this->hasNode('count') ? 'trans' : 'transChoice';

        \$compiler
            ->write('echo \$this->env->getExtension(\\'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension\\')->trans(')
            ->subcompile(\$msg)
        ;

        \$compiler->raw(', ');

        if (null !== \$vars) {
            \$compiler
                ->raw('array_merge(')
                ->subcompile(\$defaults)
                ->raw(', ')
                ->subcompile(\$this->getNode('vars'))
                ->raw(')')
            ;
        } else {
            \$compiler->subcompile(\$defaults);
        }

        \$compiler->raw(', ');

        if (!\$this->hasNode('domain')) {
            \$compiler->repr('messages');
        } else {
            \$compiler->subcompile(\$this->getNode('domain'));
        }

        if (\$this->hasNode('locale')) {
            \$compiler
                ->raw(', ')
                ->subcompile(\$this->getNode('locale'))
            ;
        } elseif (\$this->hasNode('count')) {
            \$compiler->raw(', null');
        }

        if (\$this->hasNode('count')) {
            \$compiler
                ->raw(', ')
                ->subcompile(\$this->getNode('count'))
            ;
        }

        \$compiler->raw(\");\\n\");
    }

    protected function compileString(Node \$body, ArrayExpression \$vars, \$ignoreStrictCheck = false)
    {
        if (\$body instanceof ConstantExpression) {
            \$msg = \$body->getAttribute('value');
        } elseif (\$body instanceof TextNode) {
            \$msg = \$body->getAttribute('data');
        } else {
            return [\$body, \$vars];
        }

        preg_match_all('/(?<!%)%([^%]+)%/', \$msg, \$matches);

        foreach (\$matches[1] as \$var) {
            \$key = new ConstantExpression('%'.\$var.'%', \$body->getTemplateLine());
            if (!\$vars->hasElement(\$key)) {
                if ('count' === \$var && \$this->hasNode('count')) {
                    \$vars->addElement(\$this->getNode('count'), \$key);
                } else {
                    \$varExpr = new NameExpression(\$var, \$body->getTemplateLine());
                    \$varExpr->setAttribute('ignore_strict_check', \$ignoreStrictCheck);
                    \$vars->addElement(\$varExpr, \$key);
                }
            }
        }

        return [new ConstantExpression(str_replace('%%', '%', trim(\$msg)), \$body->getTemplateLine()), \$vars];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/Node/TransNode.php";
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
use Twig\\Node\\Expression\\AbstractExpression;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Expression\\ConstantExpression;
use Twig\\Node\\Expression\\NameExpression;
use Twig\\Node\\Node;
use Twig\\Node\\TextNode;

// BC/FC with namespaced Twig
class_exists('Twig\\Node\\Expression\\ArrayExpression');

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TransNode extends Node
{
    public function __construct(Node \$body, Node \$domain = null, AbstractExpression \$count = null, AbstractExpression \$vars = null, AbstractExpression \$locale = null, int \$lineno = 0, string \$tag = null)
    {
        \$nodes = ['body' => \$body];
        if (null !== \$domain) {
            \$nodes['domain'] = \$domain;
        }
        if (null !== \$count) {
            \$nodes['count'] = \$count;
        }
        if (null !== \$vars) {
            \$nodes['vars'] = \$vars;
        }
        if (null !== \$locale) {
            \$nodes['locale'] = \$locale;
        }

        parent::__construct(\$nodes, [], \$lineno, \$tag);
    }

    public function compile(Compiler \$compiler)
    {
        \$compiler->addDebugInfo(\$this);

        \$defaults = new ArrayExpression([], -1);
        if (\$this->hasNode('vars') && (\$vars = \$this->getNode('vars')) instanceof ArrayExpression) {
            \$defaults = \$this->getNode('vars');
            \$vars = null;
        }
        list(\$msg, \$defaults) = \$this->compileString(\$this->getNode('body'), \$defaults, (bool) \$vars);

        \$method = !\$this->hasNode('count') ? 'trans' : 'transChoice';

        \$compiler
            ->write('echo \$this->env->getExtension(\\'Symfony\\Bridge\\Twig\\Extension\\TranslationExtension\\')->trans(')
            ->subcompile(\$msg)
        ;

        \$compiler->raw(', ');

        if (null !== \$vars) {
            \$compiler
                ->raw('array_merge(')
                ->subcompile(\$defaults)
                ->raw(', ')
                ->subcompile(\$this->getNode('vars'))
                ->raw(')')
            ;
        } else {
            \$compiler->subcompile(\$defaults);
        }

        \$compiler->raw(', ');

        if (!\$this->hasNode('domain')) {
            \$compiler->repr('messages');
        } else {
            \$compiler->subcompile(\$this->getNode('domain'));
        }

        if (\$this->hasNode('locale')) {
            \$compiler
                ->raw(', ')
                ->subcompile(\$this->getNode('locale'))
            ;
        } elseif (\$this->hasNode('count')) {
            \$compiler->raw(', null');
        }

        if (\$this->hasNode('count')) {
            \$compiler
                ->raw(', ')
                ->subcompile(\$this->getNode('count'))
            ;
        }

        \$compiler->raw(\");\\n\");
    }

    protected function compileString(Node \$body, ArrayExpression \$vars, \$ignoreStrictCheck = false)
    {
        if (\$body instanceof ConstantExpression) {
            \$msg = \$body->getAttribute('value');
        } elseif (\$body instanceof TextNode) {
            \$msg = \$body->getAttribute('data');
        } else {
            return [\$body, \$vars];
        }

        preg_match_all('/(?<!%)%([^%]+)%/', \$msg, \$matches);

        foreach (\$matches[1] as \$var) {
            \$key = new ConstantExpression('%'.\$var.'%', \$body->getTemplateLine());
            if (!\$vars->hasElement(\$key)) {
                if ('count' === \$var && \$this->hasNode('count')) {
                    \$vars->addElement(\$this->getNode('count'), \$key);
                } else {
                    \$varExpr = new NameExpression(\$var, \$body->getTemplateLine());
                    \$varExpr->setAttribute('ignore_strict_check', \$ignoreStrictCheck);
                    \$vars->addElement(\$varExpr, \$key);
                }
            }
        }

        return [new ConstantExpression(str_replace('%%', '%', trim(\$msg)), \$body->getTemplateLine()), \$vars];
    }
}
", "vendor/symfony/twig-bridge/Node/TransNode.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/Node/TransNode.php");
    }
}
