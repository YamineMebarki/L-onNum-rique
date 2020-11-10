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

/* vendor/symfony/expression-language/TokenStream.php */
class __TwigTemplate_e4034dbe40bc26ab0253dd7418f03205fc9dd5d2c02a58c6aa238526da3210bb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/TokenStream.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/TokenStream.php"));

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

namespace Symfony\\Component\\ExpressionLanguage;

/**
 * Represents a token stream.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TokenStream
{
    public \$current;

    private \$tokens;
    private \$position = 0;
    private \$expression;

    public function __construct(array \$tokens, string \$expression = '')
    {
        \$this->tokens = \$tokens;
        \$this->current = \$tokens[0];
        \$this->expression = \$expression;
    }

    /**
     * Returns a string representation of the token stream.
     *
     * @return string
     */
    public function __toString()
    {
        return implode(\"\\n\", \$this->tokens);
    }

    /**
     * Sets the pointer to the next token and returns the old one.
     */
    public function next()
    {
        ++\$this->position;

        if (!isset(\$this->tokens[\$this->position])) {
            throw new SyntaxError('Unexpected end of expression', \$this->current->cursor, \$this->expression);
        }

        \$this->current = \$this->tokens[\$this->position];
    }

    /**
     * Tests a token.
     *
     * @param array|int   \$type    The type to test
     * @param string|null \$value   The token value
     * @param string|null \$message The syntax error message
     */
    public function expect(\$type, \$value = null, \$message = null)
    {
        \$token = \$this->current;
        if (!\$token->test(\$type, \$value)) {
            throw new SyntaxError(sprintf('%sUnexpected token \"%s\" of value \"%s\" (\"%s\" expected%s)', \$message ? \$message.'. ' : '', \$token->type, \$token->value, \$type, \$value ? sprintf(' with value \"%s\"', \$value) : ''), \$token->cursor, \$this->expression);
        }
        \$this->next();
    }

    /**
     * Checks if end of stream was reached.
     *
     * @return bool
     */
    public function isEOF()
    {
        return Token::EOF_TYPE === \$this->current->type;
    }

    /**
     * @internal
     *
     * @return string
     */
    public function getExpression()
    {
        return \$this->expression;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/TokenStream.php";
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

namespace Symfony\\Component\\ExpressionLanguage;

/**
 * Represents a token stream.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TokenStream
{
    public \$current;

    private \$tokens;
    private \$position = 0;
    private \$expression;

    public function __construct(array \$tokens, string \$expression = '')
    {
        \$this->tokens = \$tokens;
        \$this->current = \$tokens[0];
        \$this->expression = \$expression;
    }

    /**
     * Returns a string representation of the token stream.
     *
     * @return string
     */
    public function __toString()
    {
        return implode(\"\\n\", \$this->tokens);
    }

    /**
     * Sets the pointer to the next token and returns the old one.
     */
    public function next()
    {
        ++\$this->position;

        if (!isset(\$this->tokens[\$this->position])) {
            throw new SyntaxError('Unexpected end of expression', \$this->current->cursor, \$this->expression);
        }

        \$this->current = \$this->tokens[\$this->position];
    }

    /**
     * Tests a token.
     *
     * @param array|int   \$type    The type to test
     * @param string|null \$value   The token value
     * @param string|null \$message The syntax error message
     */
    public function expect(\$type, \$value = null, \$message = null)
    {
        \$token = \$this->current;
        if (!\$token->test(\$type, \$value)) {
            throw new SyntaxError(sprintf('%sUnexpected token \"%s\" of value \"%s\" (\"%s\" expected%s)', \$message ? \$message.'. ' : '', \$token->type, \$token->value, \$type, \$value ? sprintf(' with value \"%s\"', \$value) : ''), \$token->cursor, \$this->expression);
        }
        \$this->next();
    }

    /**
     * Checks if end of stream was reached.
     *
     * @return bool
     */
    public function isEOF()
    {
        return Token::EOF_TYPE === \$this->current->type;
    }

    /**
     * @internal
     *
     * @return string
     */
    public function getExpression()
    {
        return \$this->expression;
    }
}
", "vendor/symfony/expression-language/TokenStream.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/TokenStream.php");
    }
}
