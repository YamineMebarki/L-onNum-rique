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

/* vendor/symfony/yaml/Exception/ParseException.php */
class __TwigTemplate_2ef670b54f226b91a7322739d3cc1f54abba46730b6e1996d0a9b2c79bb72826 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Exception/ParseException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Exception/ParseException.php"));

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

namespace Symfony\\Component\\Yaml\\Exception;

/**
 * Exception class thrown when an error occurs during parsing.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ParseException extends RuntimeException
{
    private \$parsedFile;
    private \$parsedLine;
    private \$snippet;
    private \$rawMessage;

    /**
     * @param string          \$message    The error message
     * @param int             \$parsedLine The line where the error occurred
     * @param string|null     \$snippet    The snippet of code near the problem
     * @param string|null     \$parsedFile The file name where the error occurred
     * @param \\Exception|null \$previous   The previous exception
     */
    public function __construct(string \$message, int \$parsedLine = -1, string \$snippet = null, string \$parsedFile = null, \\Exception \$previous = null)
    {
        \$this->parsedFile = \$parsedFile;
        \$this->parsedLine = \$parsedLine;
        \$this->snippet = \$snippet;
        \$this->rawMessage = \$message;

        \$this->updateRepr();

        parent::__construct(\$this->message, 0, \$previous);
    }

    /**
     * Gets the snippet of code near the error.
     *
     * @return string The snippet of code
     */
    public function getSnippet()
    {
        return \$this->snippet;
    }

    /**
     * Sets the snippet of code near the error.
     *
     * @param string \$snippet The code snippet
     */
    public function setSnippet(\$snippet)
    {
        \$this->snippet = \$snippet;

        \$this->updateRepr();
    }

    /**
     * Gets the filename where the error occurred.
     *
     * This method returns null if a string is parsed.
     *
     * @return string The filename
     */
    public function getParsedFile()
    {
        return \$this->parsedFile;
    }

    /**
     * Sets the filename where the error occurred.
     *
     * @param string \$parsedFile The filename
     */
    public function setParsedFile(\$parsedFile)
    {
        \$this->parsedFile = \$parsedFile;

        \$this->updateRepr();
    }

    /**
     * Gets the line where the error occurred.
     *
     * @return int The file line
     */
    public function getParsedLine()
    {
        return \$this->parsedLine;
    }

    /**
     * Sets the line where the error occurred.
     *
     * @param int \$parsedLine The file line
     */
    public function setParsedLine(\$parsedLine)
    {
        \$this->parsedLine = \$parsedLine;

        \$this->updateRepr();
    }

    private function updateRepr()
    {
        \$this->message = \$this->rawMessage;

        \$dot = false;
        if ('.' === substr(\$this->message, -1)) {
            \$this->message = substr(\$this->message, 0, -1);
            \$dot = true;
        }

        if (null !== \$this->parsedFile) {
            \$this->message .= sprintf(' in %s', json_encode(\$this->parsedFile, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
        }

        if (\$this->parsedLine >= 0) {
            \$this->message .= sprintf(' at line %d', \$this->parsedLine);
        }

        if (\$this->snippet) {
            \$this->message .= sprintf(' (near \"%s\")', \$this->snippet);
        }

        if (\$dot) {
            \$this->message .= '.';
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Exception/ParseException.php";
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

namespace Symfony\\Component\\Yaml\\Exception;

/**
 * Exception class thrown when an error occurs during parsing.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ParseException extends RuntimeException
{
    private \$parsedFile;
    private \$parsedLine;
    private \$snippet;
    private \$rawMessage;

    /**
     * @param string          \$message    The error message
     * @param int             \$parsedLine The line where the error occurred
     * @param string|null     \$snippet    The snippet of code near the problem
     * @param string|null     \$parsedFile The file name where the error occurred
     * @param \\Exception|null \$previous   The previous exception
     */
    public function __construct(string \$message, int \$parsedLine = -1, string \$snippet = null, string \$parsedFile = null, \\Exception \$previous = null)
    {
        \$this->parsedFile = \$parsedFile;
        \$this->parsedLine = \$parsedLine;
        \$this->snippet = \$snippet;
        \$this->rawMessage = \$message;

        \$this->updateRepr();

        parent::__construct(\$this->message, 0, \$previous);
    }

    /**
     * Gets the snippet of code near the error.
     *
     * @return string The snippet of code
     */
    public function getSnippet()
    {
        return \$this->snippet;
    }

    /**
     * Sets the snippet of code near the error.
     *
     * @param string \$snippet The code snippet
     */
    public function setSnippet(\$snippet)
    {
        \$this->snippet = \$snippet;

        \$this->updateRepr();
    }

    /**
     * Gets the filename where the error occurred.
     *
     * This method returns null if a string is parsed.
     *
     * @return string The filename
     */
    public function getParsedFile()
    {
        return \$this->parsedFile;
    }

    /**
     * Sets the filename where the error occurred.
     *
     * @param string \$parsedFile The filename
     */
    public function setParsedFile(\$parsedFile)
    {
        \$this->parsedFile = \$parsedFile;

        \$this->updateRepr();
    }

    /**
     * Gets the line where the error occurred.
     *
     * @return int The file line
     */
    public function getParsedLine()
    {
        return \$this->parsedLine;
    }

    /**
     * Sets the line where the error occurred.
     *
     * @param int \$parsedLine The file line
     */
    public function setParsedLine(\$parsedLine)
    {
        \$this->parsedLine = \$parsedLine;

        \$this->updateRepr();
    }

    private function updateRepr()
    {
        \$this->message = \$this->rawMessage;

        \$dot = false;
        if ('.' === substr(\$this->message, -1)) {
            \$this->message = substr(\$this->message, 0, -1);
            \$dot = true;
        }

        if (null !== \$this->parsedFile) {
            \$this->message .= sprintf(' in %s', json_encode(\$this->parsedFile, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
        }

        if (\$this->parsedLine >= 0) {
            \$this->message .= sprintf(' at line %d', \$this->parsedLine);
        }

        if (\$this->snippet) {
            \$this->message .= sprintf(' (near \"%s\")', \$this->snippet);
        }

        if (\$dot) {
            \$this->message .= '.';
        }
    }
}
", "vendor/symfony/yaml/Exception/ParseException.php", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Exception/ParseException.php");
    }
}
