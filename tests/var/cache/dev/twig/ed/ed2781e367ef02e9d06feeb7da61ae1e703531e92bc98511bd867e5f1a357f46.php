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

/* vendor/twig/twig/src/TokenParser/DoTokenParser.php */
class __TwigTemplate_8d460ec9bd3e3156e2c44f3c959f0dcbedcd6e39b23ac3c0dee4a2a296e773b5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/DoTokenParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/TokenParser/DoTokenParser.php"));

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

use Twig\\Node\\DoNode;
use Twig\\Token;

/**
 * Evaluates an expression, discarding the returned value.
 */
final class DoTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$expr = \$this->parser->getExpressionParser()->parseExpression();

        \$this->parser->getStream()->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new DoNode(\$expr, \$token->getLine(), \$this->getTag());
    }

    public function getTag()
    {
        return 'do';
    }
}

class_alias('Twig\\TokenParser\\DoTokenParser', 'Twig_TokenParser_Do');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/TokenParser/DoTokenParser.php";
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

use Twig\\Node\\DoNode;
use Twig\\Token;

/**
 * Evaluates an expression, discarding the returned value.
 */
final class DoTokenParser extends AbstractTokenParser
{
    public function parse(Token \$token)
    {
        \$expr = \$this->parser->getExpressionParser()->parseExpression();

        \$this->parser->getStream()->expect(/* Token::BLOCK_END_TYPE */ 3);

        return new DoNode(\$expr, \$token->getLine(), \$this->getTag());
    }

    public function getTag()
    {
        return 'do';
    }
}

class_alias('Twig\\TokenParser\\DoTokenParser', 'Twig_TokenParser_Do');
", "vendor/twig/twig/src/TokenParser/DoTokenParser.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/TokenParser/DoTokenParser.php");
    }
}
