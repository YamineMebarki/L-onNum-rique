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

/* vendor/phpdocumentor/reflection-docblock/src/DocBlock/Serializer.php */
class __TwigTemplate_294becff9ab02898da1d794f293093cfa1092fb7468a7de80b2dc283cac154d7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Serializer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Serializer.php"));

        // line 1
        echo "<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\\Reflection\\DocBlock;

use phpDocumentor\\Reflection\\DocBlock;
use Webmozart\\Assert\\Assert;

/**
 * Converts a DocBlock back from an object to a complete DocComment including Asterisks.
 */
class Serializer
{
    /** @var string The string to indent the comment with. */
    protected \$indentString = ' ';

    /** @var int The number of times the indent string is repeated. */
    protected \$indent = 0;

    /** @var bool Whether to indent the first line with the given indent amount and string. */
    protected \$isFirstLineIndented = true;

    /** @var int|null The max length of a line. */
    protected \$lineLength = null;

    /** @var DocBlock\\Tags\\Formatter A custom tag formatter. */
    protected \$tagFormatter = null;

    /**
     * Create a Serializer instance.
     *
     * @param int \$indent The number of times the indent string is repeated.
     * @param string   \$indentString    The string to indent the comment with.
     * @param bool     \$indentFirstLine Whether to indent the first line.
     * @param int|null \$lineLength The max length of a line or NULL to disable line wrapping.
     * @param DocBlock\\Tags\\Formatter \$tagFormatter A custom tag formatter, defaults to PassthroughFormatter.
     */
    public function __construct(\$indent = 0, \$indentString = ' ', \$indentFirstLine = true, \$lineLength = null, \$tagFormatter = null)
    {
        Assert::integer(\$indent);
        Assert::string(\$indentString);
        Assert::boolean(\$indentFirstLine);
        Assert::nullOrInteger(\$lineLength);
        Assert::nullOrIsInstanceOf(\$tagFormatter, 'phpDocumentor\\Reflection\\DocBlock\\Tags\\Formatter');

        \$this->indent = \$indent;
        \$this->indentString = \$indentString;
        \$this->isFirstLineIndented = \$indentFirstLine;
        \$this->lineLength = \$lineLength;
        \$this->tagFormatter = \$tagFormatter ?: new DocBlock\\Tags\\Formatter\\PassthroughFormatter();
    }

    /**
     * Generate a DocBlock comment.
     *
     * @param DocBlock \$docblock The DocBlock to serialize.
     *
     * @return string The serialized doc block.
     */
    public function getDocComment(DocBlock \$docblock)
    {
        \$indent = str_repeat(\$this->indentString, \$this->indent);
        \$firstIndent = \$this->isFirstLineIndented ? \$indent : '';
        // 3 === strlen(' * ')
        \$wrapLength = \$this->lineLength ? \$this->lineLength - strlen(\$indent) - 3 : null;

        \$text = \$this->removeTrailingSpaces(
            \$indent,
            \$this->addAsterisksForEachLine(
                \$indent,
                \$this->getSummaryAndDescriptionTextBlock(\$docblock, \$wrapLength)
            )
        );

        \$comment = \"{\$firstIndent}/**\\n\";
        if (\$text) {
            \$comment .= \"{\$indent} * {\$text}\\n\";
            \$comment .= \"{\$indent} *\\n\";
        }

        \$comment = \$this->addTagBlock(\$docblock, \$wrapLength, \$indent, \$comment);
        \$comment .= \$indent . ' */';

        return \$comment;
    }

    /**
     * @param \$indent
     * @param \$text
     * @return mixed
     */
    private function removeTrailingSpaces(\$indent, \$text)
    {
        return str_replace(\"\\n{\$indent} * \\n\", \"\\n{\$indent} *\\n\", \$text);
    }

    /**
     * @param \$indent
     * @param \$text
     * @return mixed
     */
    private function addAsterisksForEachLine(\$indent, \$text)
    {
        return str_replace(\"\\n\", \"\\n{\$indent} * \", \$text);
    }

    /**
     * @param DocBlock \$docblock
     * @param \$wrapLength
     * @return string
     */
    private function getSummaryAndDescriptionTextBlock(DocBlock \$docblock, \$wrapLength)
    {
        \$text = \$docblock->getSummary() . ((string)\$docblock->getDescription() ? \"\\n\\n\" . \$docblock->getDescription()
                : '');
        if (\$wrapLength !== null) {
            \$text = wordwrap(\$text, \$wrapLength);
            return \$text;
        }

        return \$text;
    }

    /**
     * @param DocBlock \$docblock
     * @param \$wrapLength
     * @param \$indent
     * @param \$comment
     * @return string
     */
    private function addTagBlock(DocBlock \$docblock, \$wrapLength, \$indent, \$comment)
    {
        foreach (\$docblock->getTags() as \$tag) {
            \$tagText = \$this->tagFormatter->format(\$tag);
            if (\$wrapLength !== null) {
                \$tagText = wordwrap(\$tagText, \$wrapLength);
            }

            \$tagText = str_replace(\"\\n\", \"\\n{\$indent} * \", \$tagText);

            \$comment .= \"{\$indent} * {\$tagText}\\n\";
        }

        return \$comment;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Serializer.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\\Reflection\\DocBlock;

use phpDocumentor\\Reflection\\DocBlock;
use Webmozart\\Assert\\Assert;

/**
 * Converts a DocBlock back from an object to a complete DocComment including Asterisks.
 */
class Serializer
{
    /** @var string The string to indent the comment with. */
    protected \$indentString = ' ';

    /** @var int The number of times the indent string is repeated. */
    protected \$indent = 0;

    /** @var bool Whether to indent the first line with the given indent amount and string. */
    protected \$isFirstLineIndented = true;

    /** @var int|null The max length of a line. */
    protected \$lineLength = null;

    /** @var DocBlock\\Tags\\Formatter A custom tag formatter. */
    protected \$tagFormatter = null;

    /**
     * Create a Serializer instance.
     *
     * @param int \$indent The number of times the indent string is repeated.
     * @param string   \$indentString    The string to indent the comment with.
     * @param bool     \$indentFirstLine Whether to indent the first line.
     * @param int|null \$lineLength The max length of a line or NULL to disable line wrapping.
     * @param DocBlock\\Tags\\Formatter \$tagFormatter A custom tag formatter, defaults to PassthroughFormatter.
     */
    public function __construct(\$indent = 0, \$indentString = ' ', \$indentFirstLine = true, \$lineLength = null, \$tagFormatter = null)
    {
        Assert::integer(\$indent);
        Assert::string(\$indentString);
        Assert::boolean(\$indentFirstLine);
        Assert::nullOrInteger(\$lineLength);
        Assert::nullOrIsInstanceOf(\$tagFormatter, 'phpDocumentor\\Reflection\\DocBlock\\Tags\\Formatter');

        \$this->indent = \$indent;
        \$this->indentString = \$indentString;
        \$this->isFirstLineIndented = \$indentFirstLine;
        \$this->lineLength = \$lineLength;
        \$this->tagFormatter = \$tagFormatter ?: new DocBlock\\Tags\\Formatter\\PassthroughFormatter();
    }

    /**
     * Generate a DocBlock comment.
     *
     * @param DocBlock \$docblock The DocBlock to serialize.
     *
     * @return string The serialized doc block.
     */
    public function getDocComment(DocBlock \$docblock)
    {
        \$indent = str_repeat(\$this->indentString, \$this->indent);
        \$firstIndent = \$this->isFirstLineIndented ? \$indent : '';
        // 3 === strlen(' * ')
        \$wrapLength = \$this->lineLength ? \$this->lineLength - strlen(\$indent) - 3 : null;

        \$text = \$this->removeTrailingSpaces(
            \$indent,
            \$this->addAsterisksForEachLine(
                \$indent,
                \$this->getSummaryAndDescriptionTextBlock(\$docblock, \$wrapLength)
            )
        );

        \$comment = \"{\$firstIndent}/**\\n\";
        if (\$text) {
            \$comment .= \"{\$indent} * {\$text}\\n\";
            \$comment .= \"{\$indent} *\\n\";
        }

        \$comment = \$this->addTagBlock(\$docblock, \$wrapLength, \$indent, \$comment);
        \$comment .= \$indent . ' */';

        return \$comment;
    }

    /**
     * @param \$indent
     * @param \$text
     * @return mixed
     */
    private function removeTrailingSpaces(\$indent, \$text)
    {
        return str_replace(\"\\n{\$indent} * \\n\", \"\\n{\$indent} *\\n\", \$text);
    }

    /**
     * @param \$indent
     * @param \$text
     * @return mixed
     */
    private function addAsterisksForEachLine(\$indent, \$text)
    {
        return str_replace(\"\\n\", \"\\n{\$indent} * \", \$text);
    }

    /**
     * @param DocBlock \$docblock
     * @param \$wrapLength
     * @return string
     */
    private function getSummaryAndDescriptionTextBlock(DocBlock \$docblock, \$wrapLength)
    {
        \$text = \$docblock->getSummary() . ((string)\$docblock->getDescription() ? \"\\n\\n\" . \$docblock->getDescription()
                : '');
        if (\$wrapLength !== null) {
            \$text = wordwrap(\$text, \$wrapLength);
            return \$text;
        }

        return \$text;
    }

    /**
     * @param DocBlock \$docblock
     * @param \$wrapLength
     * @param \$indent
     * @param \$comment
     * @return string
     */
    private function addTagBlock(DocBlock \$docblock, \$wrapLength, \$indent, \$comment)
    {
        foreach (\$docblock->getTags() as \$tag) {
            \$tagText = \$this->tagFormatter->format(\$tag);
            if (\$wrapLength !== null) {
                \$tagText = wordwrap(\$tagText, \$wrapLength);
            }

            \$tagText = str_replace(\"\\n\", \"\\n{\$indent} * \", \$tagText);

            \$comment .= \"{\$indent} * {\$tagText}\\n\";
        }

        return \$comment;
    }
}
", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Serializer.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-docblock/src/DocBlock/Serializer.php");
    }
}
