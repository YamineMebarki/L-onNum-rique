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

/* vendor/symfony/twig-bridge/TokenParser/DumpTokenParser.php */
class __TwigTemplate_9deb0a2d0dec0a5d8041f95a154a7860085e577b793599a75e659602f67a77f1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/TokenParser/DumpTokenParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/TokenParser/DumpTokenParser.php"));

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

namespace Symfony\\Bridge\\Twig\\TokenParser;

use Symfony\\Bridge\\Twig\\Node\\DumpNode;
use Twig\\Token;
use Twig\\TokenParser\\AbstractTokenParser;

/**
 * Token Parser for the 'dump' tag.
 *
 * Dump variables with:
 *
 *     ";
        if ($this->env->isDebug()) {
            $__internal_caa566e6260c5aa21cb7608d7078776ec4642f01ec6d821310afdbe3abb7e163vars = [];
            foreach ($context as $__internal_caa566e6260c5aa21cb7608d7078776ec4642f01ec6d821310afdbe3abb7e163key => $__internal_caa566e6260c5aa21cb7608d7078776ec4642f01ec6d821310afdbe3abb7e163val) {
                if (!$__internal_caa566e6260c5aa21cb7608d7078776ec4642f01ec6d821310afdbe3abb7e163val instanceof \Twig\Template) {
                    $__internal_caa566e6260c5aa21cb7608d7078776ec4642f01ec6d821310afdbe3abb7e163vars[$__internal_caa566e6260c5aa21cb7608d7078776ec4642f01ec6d821310afdbe3abb7e163key] = $__internal_caa566e6260c5aa21cb7608d7078776ec4642f01ec6d821310afdbe3abb7e163val;
                }
            }
            // line 23
            \Symfony\Component\VarDumper\VarDumper::dump($__internal_caa566e6260c5aa21cb7608d7078776ec4642f01ec6d821310afdbe3abb7e163vars);
        }
        // line 24
        echo " *     ";
        if ($this->env->isDebug()) {
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 24, $this->source); })()));
        }
        // line 25
        echo " *     ";
        if ($this->env->isDebug()) {
            \Symfony\Component\VarDumper\VarDumper::dump([
                "foo" => (isset($context["foo"]) || array_key_exists("foo", $context) ? $context["foo"] : (function () { throw new RuntimeError('Variable "foo" does not exist.', 25, $this->source); })()),
                "bar" => (isset($context["bar"]) || array_key_exists("bar", $context) ? $context["bar"] : (function () { throw new RuntimeError('Variable "bar" does not exist.', 25, $this->source); })()),
            ]);
        }
        // line 26
        echo " *
 * @author Julien Galenski <julien.galenski@gmail.com>
 */
class DumpTokenParser extends AbstractTokenParser
{
    /**
     * {@inheritdoc}
     */
    public function parse(Token \$token)
    {
        \$values = null;
        if (!\$this->parser->getStream()->test(Token::BLOCK_END_TYPE)) {
            \$values = \$this->parser->getExpressionParser()->parseMultitargetExpression();
        }
        \$this->parser->getStream()->expect(Token::BLOCK_END_TYPE);

        return new DumpNode(\$this->parser->getVarName(), \$values, \$token->getLine(), \$this->getTag());
    }

    /**
     * {@inheritdoc}
     */
    public function getTag()
    {
        return 'dump';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/TokenParser/DumpTokenParser.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  82 => 25,  77 => 24,  74 => 23,  43 => 1,);
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

namespace Symfony\\Bridge\\Twig\\TokenParser;

use Symfony\\Bridge\\Twig\\Node\\DumpNode;
use Twig\\Token;
use Twig\\TokenParser\\AbstractTokenParser;

/**
 * Token Parser for the 'dump' tag.
 *
 * Dump variables with:
 *
 *     {% dump %}
 *     {% dump foo %}
 *     {% dump foo, bar %}
 *
 * @author Julien Galenski <julien.galenski@gmail.com>
 */
class DumpTokenParser extends AbstractTokenParser
{
    /**
     * {@inheritdoc}
     */
    public function parse(Token \$token)
    {
        \$values = null;
        if (!\$this->parser->getStream()->test(Token::BLOCK_END_TYPE)) {
            \$values = \$this->parser->getExpressionParser()->parseMultitargetExpression();
        }
        \$this->parser->getStream()->expect(Token::BLOCK_END_TYPE);

        return new DumpNode(\$this->parser->getVarName(), \$values, \$token->getLine(), \$this->getTag());
    }

    /**
     * {@inheritdoc}
     */
    public function getTag()
    {
        return 'dump';
    }
}
", "vendor/symfony/twig-bridge/TokenParser/DumpTokenParser.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/TokenParser/DumpTokenParser.php");
    }
}
