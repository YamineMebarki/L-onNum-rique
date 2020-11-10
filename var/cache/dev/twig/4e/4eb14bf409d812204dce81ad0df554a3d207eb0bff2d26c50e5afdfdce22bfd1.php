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

/* vendor/symfony/twig-bridge/TokenParser/FormThemeTokenParser.php */
class __TwigTemplate_b97a657b294bdbd2a900bc2f045e93f4674ededf23ba7a59cf8271708bb240fb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/TokenParser/FormThemeTokenParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bridge/TokenParser/FormThemeTokenParser.php"));

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

use Symfony\\Bridge\\Twig\\Node\\FormThemeNode;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Node;
use Twig\\Token;
use Twig\\TokenParser\\AbstractTokenParser;

/**
 * Token Parser for the 'form_theme' tag.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FormThemeTokenParser extends AbstractTokenParser
{
    /**
     * Parses a token and returns a node.
     *
     * @return Node
     */
    public function parse(Token \$token)
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();

        \$form = \$this->parser->getExpressionParser()->parseExpression();
        \$only = false;

        if (\$this->parser->getStream()->test(Token::NAME_TYPE, 'with')) {
            \$this->parser->getStream()->next();
            \$resources = \$this->parser->getExpressionParser()->parseExpression();

            if (\$this->parser->getStream()->nextIf(Token::NAME_TYPE, 'only')) {
                \$only = true;
            }
        } else {
            \$resources = new ArrayExpression([], \$stream->getCurrent()->getLine());
            do {
                \$resources->addElement(\$this->parser->getExpressionParser()->parseExpression());
            } while (!\$stream->test(Token::BLOCK_END_TYPE));
        }

        \$stream->expect(Token::BLOCK_END_TYPE);

        return new FormThemeNode(\$form, \$resources, \$lineno, \$this->getTag(), \$only);
    }

    /**
     * Gets the tag name associated with this token parser.
     *
     * @return string The tag name
     */
    public function getTag()
    {
        return 'form_theme';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bridge/TokenParser/FormThemeTokenParser.php";
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

namespace Symfony\\Bridge\\Twig\\TokenParser;

use Symfony\\Bridge\\Twig\\Node\\FormThemeNode;
use Twig\\Node\\Expression\\ArrayExpression;
use Twig\\Node\\Node;
use Twig\\Token;
use Twig\\TokenParser\\AbstractTokenParser;

/**
 * Token Parser for the 'form_theme' tag.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FormThemeTokenParser extends AbstractTokenParser
{
    /**
     * Parses a token and returns a node.
     *
     * @return Node
     */
    public function parse(Token \$token)
    {
        \$lineno = \$token->getLine();
        \$stream = \$this->parser->getStream();

        \$form = \$this->parser->getExpressionParser()->parseExpression();
        \$only = false;

        if (\$this->parser->getStream()->test(Token::NAME_TYPE, 'with')) {
            \$this->parser->getStream()->next();
            \$resources = \$this->parser->getExpressionParser()->parseExpression();

            if (\$this->parser->getStream()->nextIf(Token::NAME_TYPE, 'only')) {
                \$only = true;
            }
        } else {
            \$resources = new ArrayExpression([], \$stream->getCurrent()->getLine());
            do {
                \$resources->addElement(\$this->parser->getExpressionParser()->parseExpression());
            } while (!\$stream->test(Token::BLOCK_END_TYPE));
        }

        \$stream->expect(Token::BLOCK_END_TYPE);

        return new FormThemeNode(\$form, \$resources, \$lineno, \$this->getTag(), \$only);
    }

    /**
     * Gets the tag name associated with this token parser.
     *
     * @return string The tag name
     */
    public function getTag()
    {
        return 'form_theme';
    }
}
", "vendor/symfony/twig-bridge/TokenParser/FormThemeTokenParser.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bridge/TokenParser/FormThemeTokenParser.php");
    }
}
