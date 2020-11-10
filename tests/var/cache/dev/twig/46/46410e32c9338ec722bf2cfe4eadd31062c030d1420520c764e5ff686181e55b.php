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

/* vendor/twig/twig/src/TokenParser/WithTokenParser.php */
class __TwigTemplate_6903fda334619e2a0eeb9093eb342ddd436e9f2a459b74954842f0b302354483 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/WithTokenParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/WithTokenParser.php"));

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

namespace Twig\\TokenParser;

use Twig\\Node\\WithNode;
use Twig\\Token;

/**
 * Creates a nested scope.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class WithTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$stream = \$this->parser->getStream();

        \$variables = null;
        \$only = false;
        if (!\$stream->test(/* Token::BLOCK_END_TYPE */ 3)) {
            \$variables = \$this->parser->getExpressionParser()->parseExpression();
            \$only = (bool) \$stream->nextIf(/* Token::NAME_TYPE */ 5, 'only');
        }

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$body = \$this->parser->subparse([\$this, 'decideWithEnd'], true);

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new WithNode(\$body, \$variables, \$only, \$token->getLine(), \$this->getTag());
    }

    public function decideWithEnd(Token \$token)
    {
        return \$token->test('endwith');
    }

    public function getTag()
    {
        return 'with';
    }
}

class_alias('Twig\\TokenParser\\WithTokenParser', 'Twig_TokenParser_With');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/TokenParser/WithTokenParser.php";
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

namespace Twig\\TokenParser;

use Twig\\Node\\WithNode;
use Twig\\Token;

/**
 * Creates a nested scope.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class WithTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$stream = \$this->parser->getStream();

        \$variables = null;
        \$only = false;
        if (!\$stream->test(/* Token::BLOCK_END_TYPE */ 3)) {
            \$variables = \$this->parser->getExpressionParser()->parseExpression();
            \$only = (bool) \$stream->nextIf(/* Token::NAME_TYPE */ 5, 'only');
        }

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        \$body = \$this->parser->subparse([\$this, 'decideWithEnd'], true);

        \$stream->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new WithNode(\$body, \$variables, \$only, \$token->getLine(), \$this->getTag());
    }

    public function decideWithEnd(Token \$token)
    {
        return \$token->test('endwith');
    }

    public function getTag()
    {
        return 'with';
    }
}

class_alias('Twig\\TokenParser\\WithTokenParser', 'Twig_TokenParser_With');
", "vendor/twig/twig/src/TokenParser/WithTokenParser.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/TokenParser/WithTokenParser.php");
    }
}
