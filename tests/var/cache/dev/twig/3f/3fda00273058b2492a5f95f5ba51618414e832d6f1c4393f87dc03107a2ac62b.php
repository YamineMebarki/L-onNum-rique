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

/* vendor/symfony/mime/Header/ParameterizedHeader.php */
class __TwigTemplate_02a5575a832a18abc6cf4e3d195a88d74a0f3be9eba82b3262baeb1c43800a42 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Header/ParameterizedHeader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Header/ParameterizedHeader.php"));

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

namespace Symfony\\Component\\Mime\\Header;

use Symfony\\Component\\Mime\\Encoder\\Rfc2231Encoder;

/**
 * @author Chris Corbyn
 *
 * @experimental in 4.3
 */
final class ParameterizedHeader extends UnstructuredHeader
{
    /**
     * RFC 2231's definition of a token.
     *
     * @var string
     */
    const TOKEN_REGEX = '(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2E\\x30-\\x39\\x41-\\x5A\\x5E-\\x7E]+)';

    private \$encoder;
    private \$parameters = [];

    public function __construct(string \$name, string \$value, array \$parameters = [])
    {
        parent::__construct(\$name, \$value);

        foreach (\$parameters as \$k => \$v) {
            \$this->setParameter(\$k, \$v);
        }

        if ('content-type' !== strtolower(\$name)) {
            \$this->encoder = new Rfc2231Encoder();
        }
    }

    public function setParameter(string \$parameter, ?string \$value)
    {
        \$this->setParameters(array_merge(\$this->getParameters(), [\$parameter => \$value]));
    }

    public function getParameter(string \$parameter): string
    {
        return \$this->getParameters()[\$parameter] ?? '';
    }

    /**
     * @param string[] \$parameters
     */
    public function setParameters(array \$parameters)
    {
        \$this->parameters = \$parameters;
    }

    /**
     * @return string[]
     */
    public function getParameters(): array
    {
        return \$this->parameters;
    }

    public function getBodyAsString(): string
    {
        \$body = parent::getBodyAsString();
        foreach (\$this->parameters as \$name => \$value) {
            if (null !== \$value) {
                \$body .= '; '.\$this->createParameter(\$name, \$value);
            }
        }

        return \$body;
    }

    /**
     * Generate a list of all tokens in the final header.
     *
     * This doesn't need to be overridden in theory, but it is for implementation
     * reasons to prevent potential breakage of attributes.
     */
    protected function toTokens(string \$string = null): array
    {
        \$tokens = parent::toTokens(parent::getBodyAsString());

        // Try creating any parameters
        foreach (\$this->parameters as \$name => \$value) {
            if (null !== \$value) {
                // Add the semi-colon separator
                \$tokens[\\count(\$tokens) - 1] .= ';';
                \$tokens = array_merge(\$tokens, \$this->generateTokenLines(' '.\$this->createParameter(\$name, \$value)));
            }
        }

        return \$tokens;
    }

    /**
     * Render a RFC 2047 compliant header parameter from the \$name and \$value.
     */
    private function createParameter(string \$name, string \$value): string
    {
        \$origValue = \$value;

        \$encoded = false;
        // Allow room for parameter name, indices, \"=\" and DQUOTEs
        \$maxValueLength = \$this->getMaxLineLength() - \\strlen(\$name.'=*N\"\";') - 1;
        \$firstLineOffset = 0;

        // If it's not already a valid parameter value...
        if (!preg_match('/^'.self::TOKEN_REGEX.'\$/D', \$value)) {
            // Todo: text, or something else??
            // ... and it's not ascii
            if (!preg_match('/^[\\x00-\\x08\\x0B\\x0C\\x0E-\\x7F]*\$/D', \$value)) {
                \$encoded = true;
                // Allow space for the indices, charset and language
                \$maxValueLength = \$this->getMaxLineLength() - \\strlen(\$name.'*N*=\"\";') - 1;
                \$firstLineOffset = \\strlen(\$this->getCharset().\"'\".\$this->getLanguage().\"'\");
            }
        }

        // Encode if we need to
        if (\$encoded || \\strlen(\$value) > \$maxValueLength) {
            if (null !== \$this->encoder) {
                \$value = \$this->encoder->encodeString(\$origValue, \$this->getCharset(), \$firstLineOffset, \$maxValueLength);
            } else {
                // We have to go against RFC 2183/2231 in some areas for interoperability
                \$value = \$this->getTokenAsEncodedWord(\$origValue);
                \$encoded = false;
            }
        }

        \$valueLines = \$this->encoder ? explode(\"\\r\\n\", \$value) : [\$value];

        // Need to add indices
        if (\\count(\$valueLines) > 1) {
            \$paramLines = [];
            foreach (\$valueLines as \$i => \$line) {
                \$paramLines[] = \$name.'*'.\$i.\$this->getEndOfParameterValue(\$line, true, 0 === \$i);
            }

            return implode(\";\\r\\n \", \$paramLines);
        } else {
            return \$name.\$this->getEndOfParameterValue(\$valueLines[0], \$encoded, true);
        }
    }

    /**
     * Returns the parameter value from the \"=\" and beyond.
     *
     * @param string \$value to append
     */
    private function getEndOfParameterValue(string \$value, bool \$encoded = false, bool \$firstLine = false): string
    {
        if (!preg_match('/^'.self::TOKEN_REGEX.'\$/D', \$value)) {
            \$value = '\"'.\$value.'\"';
        }
        \$prepend = '=';
        if (\$encoded) {
            \$prepend = '*=';
            if (\$firstLine) {
                \$prepend = '*='.\$this->getCharset().\"'\".\$this->getLanguage().\"'\";
            }
        }

        return \$prepend.\$value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Header/ParameterizedHeader.php";
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

namespace Symfony\\Component\\Mime\\Header;

use Symfony\\Component\\Mime\\Encoder\\Rfc2231Encoder;

/**
 * @author Chris Corbyn
 *
 * @experimental in 4.3
 */
final class ParameterizedHeader extends UnstructuredHeader
{
    /**
     * RFC 2231's definition of a token.
     *
     * @var string
     */
    const TOKEN_REGEX = '(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2E\\x30-\\x39\\x41-\\x5A\\x5E-\\x7E]+)';

    private \$encoder;
    private \$parameters = [];

    public function __construct(string \$name, string \$value, array \$parameters = [])
    {
        parent::__construct(\$name, \$value);

        foreach (\$parameters as \$k => \$v) {
            \$this->setParameter(\$k, \$v);
        }

        if ('content-type' !== strtolower(\$name)) {
            \$this->encoder = new Rfc2231Encoder();
        }
    }

    public function setParameter(string \$parameter, ?string \$value)
    {
        \$this->setParameters(array_merge(\$this->getParameters(), [\$parameter => \$value]));
    }

    public function getParameter(string \$parameter): string
    {
        return \$this->getParameters()[\$parameter] ?? '';
    }

    /**
     * @param string[] \$parameters
     */
    public function setParameters(array \$parameters)
    {
        \$this->parameters = \$parameters;
    }

    /**
     * @return string[]
     */
    public function getParameters(): array
    {
        return \$this->parameters;
    }

    public function getBodyAsString(): string
    {
        \$body = parent::getBodyAsString();
        foreach (\$this->parameters as \$name => \$value) {
            if (null !== \$value) {
                \$body .= '; '.\$this->createParameter(\$name, \$value);
            }
        }

        return \$body;
    }

    /**
     * Generate a list of all tokens in the final header.
     *
     * This doesn't need to be overridden in theory, but it is for implementation
     * reasons to prevent potential breakage of attributes.
     */
    protected function toTokens(string \$string = null): array
    {
        \$tokens = parent::toTokens(parent::getBodyAsString());

        // Try creating any parameters
        foreach (\$this->parameters as \$name => \$value) {
            if (null !== \$value) {
                // Add the semi-colon separator
                \$tokens[\\count(\$tokens) - 1] .= ';';
                \$tokens = array_merge(\$tokens, \$this->generateTokenLines(' '.\$this->createParameter(\$name, \$value)));
            }
        }

        return \$tokens;
    }

    /**
     * Render a RFC 2047 compliant header parameter from the \$name and \$value.
     */
    private function createParameter(string \$name, string \$value): string
    {
        \$origValue = \$value;

        \$encoded = false;
        // Allow room for parameter name, indices, \"=\" and DQUOTEs
        \$maxValueLength = \$this->getMaxLineLength() - \\strlen(\$name.'=*N\"\";') - 1;
        \$firstLineOffset = 0;

        // If it's not already a valid parameter value...
        if (!preg_match('/^'.self::TOKEN_REGEX.'\$/D', \$value)) {
            // Todo: text, or something else??
            // ... and it's not ascii
            if (!preg_match('/^[\\x00-\\x08\\x0B\\x0C\\x0E-\\x7F]*\$/D', \$value)) {
                \$encoded = true;
                // Allow space for the indices, charset and language
                \$maxValueLength = \$this->getMaxLineLength() - \\strlen(\$name.'*N*=\"\";') - 1;
                \$firstLineOffset = \\strlen(\$this->getCharset().\"'\".\$this->getLanguage().\"'\");
            }
        }

        // Encode if we need to
        if (\$encoded || \\strlen(\$value) > \$maxValueLength) {
            if (null !== \$this->encoder) {
                \$value = \$this->encoder->encodeString(\$origValue, \$this->getCharset(), \$firstLineOffset, \$maxValueLength);
            } else {
                // We have to go against RFC 2183/2231 in some areas for interoperability
                \$value = \$this->getTokenAsEncodedWord(\$origValue);
                \$encoded = false;
            }
        }

        \$valueLines = \$this->encoder ? explode(\"\\r\\n\", \$value) : [\$value];

        // Need to add indices
        if (\\count(\$valueLines) > 1) {
            \$paramLines = [];
            foreach (\$valueLines as \$i => \$line) {
                \$paramLines[] = \$name.'*'.\$i.\$this->getEndOfParameterValue(\$line, true, 0 === \$i);
            }

            return implode(\";\\r\\n \", \$paramLines);
        } else {
            return \$name.\$this->getEndOfParameterValue(\$valueLines[0], \$encoded, true);
        }
    }

    /**
     * Returns the parameter value from the \"=\" and beyond.
     *
     * @param string \$value to append
     */
    private function getEndOfParameterValue(string \$value, bool \$encoded = false, bool \$firstLine = false): string
    {
        if (!preg_match('/^'.self::TOKEN_REGEX.'\$/D', \$value)) {
            \$value = '\"'.\$value.'\"';
        }
        \$prepend = '=';
        if (\$encoded) {
            \$prepend = '*=';
            if (\$firstLine) {
                \$prepend = '*='.\$this->getCharset().\"'\".\$this->getLanguage().\"'\";
            }
        }

        return \$prepend.\$value;
    }
}
", "vendor/symfony/mime/Header/ParameterizedHeader.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Header/ParameterizedHeader.php");
    }
}
