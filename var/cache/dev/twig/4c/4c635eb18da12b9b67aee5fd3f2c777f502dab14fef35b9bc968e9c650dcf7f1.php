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

/* vendor/symfony/expression-language/Token.php */
class __TwigTemplate_afae2fc1cecf272b17b3e2965677f5ad4116352460b96be50c263c33f30001e4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Token.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Token.php"));

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
 * Represents a Token.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Token
{
    public \$value;
    public \$type;
    public \$cursor;

    const EOF_TYPE = 'end of expression';
    const NAME_TYPE = 'name';
    const NUMBER_TYPE = 'number';
    const STRING_TYPE = 'string';
    const OPERATOR_TYPE = 'operator';
    const PUNCTUATION_TYPE = 'punctuation';

    /**
     * @param string                \$type   The type of the token (self::*_TYPE)
     * @param string|int|float|null \$value  The token value
     * @param int                   \$cursor The cursor position in the source
     */
    public function __construct(string \$type, \$value, ?int \$cursor)
    {
        \$this->type = \$type;
        \$this->value = \$value;
        \$this->cursor = \$cursor;
    }

    /**
     * Returns a string representation of the token.
     *
     * @return string A string representation of the token
     */
    public function __toString()
    {
        return sprintf('%3d %-11s %s', \$this->cursor, strtoupper(\$this->type), \$this->value);
    }

    /**
     * Tests the current token for a type and/or a value.
     *
     * @param array|int   \$type  The type to test
     * @param string|null \$value The token value
     *
     * @return bool
     */
    public function test(\$type, \$value = null)
    {
        return \$this->type === \$type && (null === \$value || \$this->value == \$value);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/Token.php";
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
 * Represents a Token.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Token
{
    public \$value;
    public \$type;
    public \$cursor;

    const EOF_TYPE = 'end of expression';
    const NAME_TYPE = 'name';
    const NUMBER_TYPE = 'number';
    const STRING_TYPE = 'string';
    const OPERATOR_TYPE = 'operator';
    const PUNCTUATION_TYPE = 'punctuation';

    /**
     * @param string                \$type   The type of the token (self::*_TYPE)
     * @param string|int|float|null \$value  The token value
     * @param int                   \$cursor The cursor position in the source
     */
    public function __construct(string \$type, \$value, ?int \$cursor)
    {
        \$this->type = \$type;
        \$this->value = \$value;
        \$this->cursor = \$cursor;
    }

    /**
     * Returns a string representation of the token.
     *
     * @return string A string representation of the token
     */
    public function __toString()
    {
        return sprintf('%3d %-11s %s', \$this->cursor, strtoupper(\$this->type), \$this->value);
    }

    /**
     * Tests the current token for a type and/or a value.
     *
     * @param array|int   \$type  The type to test
     * @param string|null \$value The token value
     *
     * @return bool
     */
    public function test(\$type, \$value = null)
    {
        return \$this->type === \$type && (null === \$value || \$this->value == \$value);
    }
}
", "vendor/symfony/expression-language/Token.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/Token.php");
    }
}
