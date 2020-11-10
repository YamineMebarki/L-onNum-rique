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

/* vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Source.php */
class __TwigTemplate_858348671b5a88e5e744ea69a01d59bd9961aabfc8a2d6e2eaeb66c3a3dd3a7c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Source.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Source.php"));

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

namespace phpDocumentor\\Reflection\\DocBlock\\Tags;

use phpDocumentor\\Reflection\\DocBlock\\Description;
use phpDocumentor\\Reflection\\DocBlock\\DescriptionFactory;
use phpDocumentor\\Reflection\\Types\\Context as TypeContext;
use Webmozart\\Assert\\Assert;

/**
 * Reflection class for a {@}source tag in a Docblock.
 */
final class Source extends BaseTag implements Factory\\StaticMethod
{
    /** @var string */
    protected \$name = 'source';

    /** @var int The starting line, relative to the structural element's location. */
    private \$startingLine = 1;

    /** @var int|null The number of lines, relative to the starting line. NULL means \"to the end\". */
    private \$lineCount = null;

    public function __construct(\$startingLine, \$lineCount = null, Description \$description = null)
    {
        Assert::integerish(\$startingLine);
        Assert::nullOrIntegerish(\$lineCount);

        \$this->startingLine = (int)\$startingLine;
        \$this->lineCount    = \$lineCount !== null ? (int)\$lineCount : null;
        \$this->description  = \$description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(\$body, DescriptionFactory \$descriptionFactory = null, TypeContext \$context = null)
    {
        Assert::stringNotEmpty(\$body);
        Assert::notNull(\$descriptionFactory);

        \$startingLine = 1;
        \$lineCount    = null;
        \$description  = null;

        // Starting line / Number of lines / Description
        if (preg_match('/^([1-9]\\d*)\\s*(?:((?1))\\s+)?(.*)\$/sux', \$body, \$matches)) {
            \$startingLine = (int)\$matches[1];
            if (isset(\$matches[2]) && \$matches[2] !== '') {
                \$lineCount = (int)\$matches[2];
            }

            \$description = \$matches[3];
        }

        return new static(\$startingLine, \$lineCount, \$descriptionFactory->create(\$description, \$context));
    }

    /**
     * Gets the starting line.
     *
     * @return int The starting line, relative to the structural element's
     *     location.
     */
    public function getStartingLine()
    {
        return \$this->startingLine;
    }

    /**
     * Returns the number of lines.
     *
     * @return int|null The number of lines, relative to the starting line. NULL
     *     means \"to the end\".
     */
    public function getLineCount()
    {
        return \$this->lineCount;
    }

    public function __toString()
    {
        return \$this->startingLine
        . (\$this->lineCount !== null ? ' ' . \$this->lineCount : '')
        . (\$this->description ? ' ' . \$this->description->render() : '');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Source.php";
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

namespace phpDocumentor\\Reflection\\DocBlock\\Tags;

use phpDocumentor\\Reflection\\DocBlock\\Description;
use phpDocumentor\\Reflection\\DocBlock\\DescriptionFactory;
use phpDocumentor\\Reflection\\Types\\Context as TypeContext;
use Webmozart\\Assert\\Assert;

/**
 * Reflection class for a {@}source tag in a Docblock.
 */
final class Source extends BaseTag implements Factory\\StaticMethod
{
    /** @var string */
    protected \$name = 'source';

    /** @var int The starting line, relative to the structural element's location. */
    private \$startingLine = 1;

    /** @var int|null The number of lines, relative to the starting line. NULL means \"to the end\". */
    private \$lineCount = null;

    public function __construct(\$startingLine, \$lineCount = null, Description \$description = null)
    {
        Assert::integerish(\$startingLine);
        Assert::nullOrIntegerish(\$lineCount);

        \$this->startingLine = (int)\$startingLine;
        \$this->lineCount    = \$lineCount !== null ? (int)\$lineCount : null;
        \$this->description  = \$description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(\$body, DescriptionFactory \$descriptionFactory = null, TypeContext \$context = null)
    {
        Assert::stringNotEmpty(\$body);
        Assert::notNull(\$descriptionFactory);

        \$startingLine = 1;
        \$lineCount    = null;
        \$description  = null;

        // Starting line / Number of lines / Description
        if (preg_match('/^([1-9]\\d*)\\s*(?:((?1))\\s+)?(.*)\$/sux', \$body, \$matches)) {
            \$startingLine = (int)\$matches[1];
            if (isset(\$matches[2]) && \$matches[2] !== '') {
                \$lineCount = (int)\$matches[2];
            }

            \$description = \$matches[3];
        }

        return new static(\$startingLine, \$lineCount, \$descriptionFactory->create(\$description, \$context));
    }

    /**
     * Gets the starting line.
     *
     * @return int The starting line, relative to the structural element's
     *     location.
     */
    public function getStartingLine()
    {
        return \$this->startingLine;
    }

    /**
     * Returns the number of lines.
     *
     * @return int|null The number of lines, relative to the starting line. NULL
     *     means \"to the end\".
     */
    public function getLineCount()
    {
        return \$this->lineCount;
    }

    public function __toString()
    {
        return \$this->startingLine
        . (\$this->lineCount !== null ? ' ' . \$this->lineCount : '')
        . (\$this->description ? ' ' . \$this->description->render() : '');
    }
}
", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Source.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Source.php");
    }
}
