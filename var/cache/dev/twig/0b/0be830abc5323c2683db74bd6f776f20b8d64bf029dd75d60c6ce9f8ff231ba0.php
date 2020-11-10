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

/* vendor/symfony/css-selector/Exception/SyntaxErrorException.php */
class __TwigTemplate_be39bd06b0ce76854a90960a7baf35154b371fc24ecd1b569a36c85cc5d9c2f0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Exception/SyntaxErrorException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Exception/SyntaxErrorException.php"));

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

namespace Symfony\\Component\\CssSelector\\Exception;

use Symfony\\Component\\CssSelector\\Parser\\Token;

/**
 * ParseException is thrown when a CSS selector syntax is not valid.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 */
class SyntaxErrorException extends ParseException
{
    /**
     * @param string \$expectedValue
     *
     * @return self
     */
    public static function unexpectedToken(\$expectedValue, Token \$foundToken)
    {
        return new self(sprintf('Expected %s, but %s found.', \$expectedValue, \$foundToken));
    }

    /**
     * @param string \$pseudoElement
     * @param string \$unexpectedLocation
     *
     * @return self
     */
    public static function pseudoElementFound(\$pseudoElement, \$unexpectedLocation)
    {
        return new self(sprintf('Unexpected pseudo-element \"::%s\" found %s.', \$pseudoElement, \$unexpectedLocation));
    }

    /**
     * @param int \$position
     *
     * @return self
     */
    public static function unclosedString(\$position)
    {
        return new self(sprintf('Unclosed/invalid string at %s.', \$position));
    }

    /**
     * @return self
     */
    public static function nestedNot()
    {
        return new self('Got nested ::not().');
    }

    /**
     * @return self
     */
    public static function stringAsFunctionArgument()
    {
        return new self('String not allowed as function argument.');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Exception/SyntaxErrorException.php";
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

namespace Symfony\\Component\\CssSelector\\Exception;

use Symfony\\Component\\CssSelector\\Parser\\Token;

/**
 * ParseException is thrown when a CSS selector syntax is not valid.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 */
class SyntaxErrorException extends ParseException
{
    /**
     * @param string \$expectedValue
     *
     * @return self
     */
    public static function unexpectedToken(\$expectedValue, Token \$foundToken)
    {
        return new self(sprintf('Expected %s, but %s found.', \$expectedValue, \$foundToken));
    }

    /**
     * @param string \$pseudoElement
     * @param string \$unexpectedLocation
     *
     * @return self
     */
    public static function pseudoElementFound(\$pseudoElement, \$unexpectedLocation)
    {
        return new self(sprintf('Unexpected pseudo-element \"::%s\" found %s.', \$pseudoElement, \$unexpectedLocation));
    }

    /**
     * @param int \$position
     *
     * @return self
     */
    public static function unclosedString(\$position)
    {
        return new self(sprintf('Unclosed/invalid string at %s.', \$position));
    }

    /**
     * @return self
     */
    public static function nestedNot()
    {
        return new self('Got nested ::not().');
    }

    /**
     * @return self
     */
    public static function stringAsFunctionArgument()
    {
        return new self('String not allowed as function argument.');
    }
}
", "vendor/symfony/css-selector/Exception/SyntaxErrorException.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Exception/SyntaxErrorException.php");
    }
}
