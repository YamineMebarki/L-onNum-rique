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

/* vendor/symfony/css-selector/Parser/Tokenizer/TokenizerPatterns.php */
class __TwigTemplate_01c152d55e183b34be1ac3f1030bab52c91a8b17e917b3bdb85a739fbfbcf041 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/Tokenizer/TokenizerPatterns.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/css-selector/Parser/Tokenizer/TokenizerPatterns.php"));

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

namespace Symfony\\Component\\CssSelector\\Parser\\Tokenizer;

/**
 * CSS selector tokenizer patterns builder.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class TokenizerPatterns
{
    private \$unicodeEscapePattern;
    private \$simpleEscapePattern;
    private \$newLineEscapePattern;
    private \$escapePattern;
    private \$stringEscapePattern;
    private \$nonAsciiPattern;
    private \$nmCharPattern;
    private \$nmStartPattern;
    private \$identifierPattern;
    private \$hashPattern;
    private \$numberPattern;
    private \$quotedStringPattern;

    public function __construct()
    {
        \$this->unicodeEscapePattern = '\\\\\\\\([0-9a-f]{1,6})(?:\\r\\n|[ \\n\\r\\t\\f])?';
        \$this->simpleEscapePattern = '\\\\\\\\(.)';
        \$this->newLineEscapePattern = '\\\\\\\\(?:\\n|\\r\\n|\\r|\\f)';
        \$this->escapePattern = \$this->unicodeEscapePattern.'|\\\\\\\\[^\\n\\r\\f0-9a-f]';
        \$this->stringEscapePattern = \$this->newLineEscapePattern.'|'.\$this->escapePattern;
        \$this->nonAsciiPattern = '[^\\x00-\\x7F]';
        \$this->nmCharPattern = '[_a-z0-9-]|'.\$this->escapePattern.'|'.\$this->nonAsciiPattern;
        \$this->nmStartPattern = '[_a-z]|'.\$this->escapePattern.'|'.\$this->nonAsciiPattern;
        \$this->identifierPattern = '-?(?:'.\$this->nmStartPattern.')(?:'.\$this->nmCharPattern.')*';
        \$this->hashPattern = '#((?:'.\$this->nmCharPattern.')+)';
        \$this->numberPattern = '[+-]?(?:[0-9]*\\.[0-9]+|[0-9]+)';
        \$this->quotedStringPattern = '([^\\n\\r\\f%s]|'.\$this->stringEscapePattern.')*';
    }

    public function getNewLineEscapePattern(): string
    {
        return '~^'.\$this->newLineEscapePattern.'~';
    }

    public function getSimpleEscapePattern(): string
    {
        return '~^'.\$this->simpleEscapePattern.'~';
    }

    public function getUnicodeEscapePattern(): string
    {
        return '~^'.\$this->unicodeEscapePattern.'~i';
    }

    public function getIdentifierPattern(): string
    {
        return '~^'.\$this->identifierPattern.'~i';
    }

    public function getHashPattern(): string
    {
        return '~^'.\$this->hashPattern.'~i';
    }

    public function getNumberPattern(): string
    {
        return '~^'.\$this->numberPattern.'~';
    }

    public function getQuotedStringPattern(string \$quote): string
    {
        return '~^'.sprintf(\$this->quotedStringPattern, \$quote).'~i';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/css-selector/Parser/Tokenizer/TokenizerPatterns.php";
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

namespace Symfony\\Component\\CssSelector\\Parser\\Tokenizer;

/**
 * CSS selector tokenizer patterns builder.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class TokenizerPatterns
{
    private \$unicodeEscapePattern;
    private \$simpleEscapePattern;
    private \$newLineEscapePattern;
    private \$escapePattern;
    private \$stringEscapePattern;
    private \$nonAsciiPattern;
    private \$nmCharPattern;
    private \$nmStartPattern;
    private \$identifierPattern;
    private \$hashPattern;
    private \$numberPattern;
    private \$quotedStringPattern;

    public function __construct()
    {
        \$this->unicodeEscapePattern = '\\\\\\\\([0-9a-f]{1,6})(?:\\r\\n|[ \\n\\r\\t\\f])?';
        \$this->simpleEscapePattern = '\\\\\\\\(.)';
        \$this->newLineEscapePattern = '\\\\\\\\(?:\\n|\\r\\n|\\r|\\f)';
        \$this->escapePattern = \$this->unicodeEscapePattern.'|\\\\\\\\[^\\n\\r\\f0-9a-f]';
        \$this->stringEscapePattern = \$this->newLineEscapePattern.'|'.\$this->escapePattern;
        \$this->nonAsciiPattern = '[^\\x00-\\x7F]';
        \$this->nmCharPattern = '[_a-z0-9-]|'.\$this->escapePattern.'|'.\$this->nonAsciiPattern;
        \$this->nmStartPattern = '[_a-z]|'.\$this->escapePattern.'|'.\$this->nonAsciiPattern;
        \$this->identifierPattern = '-?(?:'.\$this->nmStartPattern.')(?:'.\$this->nmCharPattern.')*';
        \$this->hashPattern = '#((?:'.\$this->nmCharPattern.')+)';
        \$this->numberPattern = '[+-]?(?:[0-9]*\\.[0-9]+|[0-9]+)';
        \$this->quotedStringPattern = '([^\\n\\r\\f%s]|'.\$this->stringEscapePattern.')*';
    }

    public function getNewLineEscapePattern(): string
    {
        return '~^'.\$this->newLineEscapePattern.'~';
    }

    public function getSimpleEscapePattern(): string
    {
        return '~^'.\$this->simpleEscapePattern.'~';
    }

    public function getUnicodeEscapePattern(): string
    {
        return '~^'.\$this->unicodeEscapePattern.'~i';
    }

    public function getIdentifierPattern(): string
    {
        return '~^'.\$this->identifierPattern.'~i';
    }

    public function getHashPattern(): string
    {
        return '~^'.\$this->hashPattern.'~i';
    }

    public function getNumberPattern(): string
    {
        return '~^'.\$this->numberPattern.'~';
    }

    public function getQuotedStringPattern(string \$quote): string
    {
        return '~^'.sprintf(\$this->quotedStringPattern, \$quote).'~i';
    }
}
", "vendor/symfony/css-selector/Parser/Tokenizer/TokenizerPatterns.php", "/var/www/public/DevLaon/templates/vendor/symfony/css-selector/Parser/Tokenizer/TokenizerPatterns.php");
    }
}
