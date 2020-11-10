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

/* vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Generic.php */
class __TwigTemplate_4b1947e6236a9f9b45c3dbee76c81f0dee44db35426e9a51d4bda51a83883e39 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Generic.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Generic.php"));

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
use phpDocumentor\\Reflection\\DocBlock\\StandardTagFactory;
use phpDocumentor\\Reflection\\Types\\Context as TypeContext;
use Webmozart\\Assert\\Assert;

/**
 * Parses a tag definition for a DocBlock.
 */
class Generic extends BaseTag implements Factory\\StaticMethod
{
    /**
     * Parses a tag and populates the member variables.
     *
     * @param string \$name Name of the tag.
     * @param Description \$description The contents of the given tag.
     */
    public function __construct(\$name, Description \$description = null)
    {
        \$this->validateTagName(\$name);

        \$this->name = \$name;
        \$this->description = \$description;
    }

    /**
     * Creates a new tag that represents any unknown tag type.
     *
     * @param string             \$body
     * @param string             \$name
     * @param DescriptionFactory \$descriptionFactory
     * @param TypeContext        \$context
     *
     * @return static
     */
    public static function create(
        \$body,
        \$name = '',
        DescriptionFactory \$descriptionFactory = null,
        TypeContext \$context = null
    ) {
        Assert::string(\$body);
        Assert::stringNotEmpty(\$name);
        Assert::notNull(\$descriptionFactory);

        \$description = \$descriptionFactory && \$body !== \"\" ? \$descriptionFactory->create(\$body, \$context) : null;

        return new static(\$name, \$description);
    }

    /**
     * Returns the tag as a serialized string
     *
     * @return string
     */
    public function __toString()
    {
        return (\$this->description ? \$this->description->render() : '');
    }

    /**
     * Validates if the tag name matches the expected format, otherwise throws an exception.
     *
     * @param string \$name
     *
     * @return void
     */
    private function validateTagName(\$name)
    {
        if (! preg_match('/^' . StandardTagFactory::REGEX_TAGNAME . '\$/u', \$name)) {
            throw new \\InvalidArgumentException(
                'The tag name \"' . \$name . '\" is not wellformed. Tags may only consist of letters, underscores, '
                . 'hyphens and backslashes.'
            );
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Generic.php";
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
use phpDocumentor\\Reflection\\DocBlock\\StandardTagFactory;
use phpDocumentor\\Reflection\\Types\\Context as TypeContext;
use Webmozart\\Assert\\Assert;

/**
 * Parses a tag definition for a DocBlock.
 */
class Generic extends BaseTag implements Factory\\StaticMethod
{
    /**
     * Parses a tag and populates the member variables.
     *
     * @param string \$name Name of the tag.
     * @param Description \$description The contents of the given tag.
     */
    public function __construct(\$name, Description \$description = null)
    {
        \$this->validateTagName(\$name);

        \$this->name = \$name;
        \$this->description = \$description;
    }

    /**
     * Creates a new tag that represents any unknown tag type.
     *
     * @param string             \$body
     * @param string             \$name
     * @param DescriptionFactory \$descriptionFactory
     * @param TypeContext        \$context
     *
     * @return static
     */
    public static function create(
        \$body,
        \$name = '',
        DescriptionFactory \$descriptionFactory = null,
        TypeContext \$context = null
    ) {
        Assert::string(\$body);
        Assert::stringNotEmpty(\$name);
        Assert::notNull(\$descriptionFactory);

        \$description = \$descriptionFactory && \$body !== \"\" ? \$descriptionFactory->create(\$body, \$context) : null;

        return new static(\$name, \$description);
    }

    /**
     * Returns the tag as a serialized string
     *
     * @return string
     */
    public function __toString()
    {
        return (\$this->description ? \$this->description->render() : '');
    }

    /**
     * Validates if the tag name matches the expected format, otherwise throws an exception.
     *
     * @param string \$name
     *
     * @return void
     */
    private function validateTagName(\$name)
    {
        if (! preg_match('/^' . StandardTagFactory::REGEX_TAGNAME . '\$/u', \$name)) {
            throw new \\InvalidArgumentException(
                'The tag name \"' . \$name . '\" is not wellformed. Tags may only consist of letters, underscores, '
                . 'hyphens and backslashes.'
            );
        }
    }
}
", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Generic.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Generic.php");
    }
}
