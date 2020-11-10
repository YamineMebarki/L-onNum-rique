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

/* vendor/symfony/twig-bridge/TokenParser/StopwatchTokenParser.php */
class __TwigTemplate_24fe31e1f8263fe4dfb925a6c4b02cc103521a97d515419c4b22affb21d43e42 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/TokenParser/StopwatchTokenParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/TokenParser/StopwatchTokenParser.php"));

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

use Symfony\\Bridge\\Twig\\Node\\StopwatchNode;
use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Token;
use Twig\\TokenParser\\AbstractTokenParser;

/**
 * Token Parser for the stopwatch tag.
 *
 * @author Wouter J <wouter@wouterj.nl>
 */
class StopwatchTokenParser extends AbstractTokenParser
{
    protected \$stopwatchIsAvailable;

    public function __construct(bool \$stopwatchIsAvailable)
    {
        \$this->stopwatchIsAvailable = \$stopwatchIsAvailable;
    }

    public function parse(Token \$token)
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();

        // ";
        // line 38
        $context["__internal_a4c2ed38eeccc9922bede9aec771e09e554ba08488b6e936a138bf84cbd26169"] = "bar"        ;
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\StopwatchExtension')->getStopwatch()->start($context["__internal_a4c2ed38eeccc9922bede9aec771e09e554ba08488b6e936a138bf84cbd26169"], 'template');
        // line 39
        echo "        \$name = \$this->parser->getExpressionParser()->parseExpression();

        \$stream->expect(Token::BLOCK_END_TYPE);

        // ";
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\StopwatchExtension')->getStopwatch()->stop($context["__internal_a4c2ed38eeccc9922bede9aec771e09e554ba08488b6e936a138bf84cbd26169"]);
        // line 44
        echo "        \$body = \$this->parser->subparse([\$this, 'decideStopwatchEnd'], true);
        \$stream->expect(Token::BLOCK_END_TYPE);

        if (\$this->stopwatchIsAvailable) {
            return new StopwatchNode(\$name, \$body, new AssignNameExpression(\$this->parser->getVarName(), \$token->getLine()), \$lineno, \$this->getTag());
        }

        return \$body;
    }

    public function decideStopwatchEnd(Token \$token)
    {
        return \$token->test('endstopwatch');
    }

    public function getTag()
    {
        return 'stopwatch';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/TokenParser/StopwatchTokenParser.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 44,  85 => 39,  82 => 38,  43 => 1,);
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

use Symfony\\Bridge\\Twig\\Node\\StopwatchNode;
use Twig\\Node\\Expression\\AssignNameExpression;
use Twig\\Token;
use Twig\\TokenParser\\AbstractTokenParser;

/**
 * Token Parser for the stopwatch tag.
 *
 * @author Wouter J <wouter@wouterj.nl>
 */
class StopwatchTokenParser extends AbstractTokenParser
{
    protected \$stopwatchIsAvailable;

    public function __construct(bool \$stopwatchIsAvailable)
    {
        \$this->stopwatchIsAvailable = \$stopwatchIsAvailable;
    }

    public function parse(Token \$token)
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();

        // {% stopwatch 'bar' %}
        \$name = \$this->parser->getExpressionParser()->parseExpression();

        \$stream->expect(Token::BLOCK_END_TYPE);

        // {% endstopwatch %}
        \$body = \$this->parser->subparse([\$this, 'decideStopwatchEnd'], true);
        \$stream->expect(Token::BLOCK_END_TYPE);

        if (\$this->stopwatchIsAvailable) {
            return new StopwatchNode(\$name, \$body, new AssignNameExpression(\$this->parser->getVarName(), \$token->getLine()), \$lineno, \$this->getTag());
        }

        return \$body;
    }

    public function decideStopwatchEnd(Token \$token)
    {
        return \$token->test('endstopwatch');
    }

    public function getTag()
    {
        return 'stopwatch';
    }
}
", "vendor/symfony/twig-bridge/TokenParser/StopwatchTokenParser.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/TokenParser/StopwatchTokenParser.php");
    }
}
