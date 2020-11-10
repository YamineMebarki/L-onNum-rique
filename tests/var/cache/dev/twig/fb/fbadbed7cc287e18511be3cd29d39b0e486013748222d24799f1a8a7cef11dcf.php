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

/* vendor/phpdocumentor/reflection-docblock/src/DocBlock/Description.php */
class __TwigTemplate_d425306d945e6438490fbb8bf0e2e32377c24f5de6958d3d98f6b0e9ec55b27f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Description.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Description.php"));

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

use phpDocumentor\\Reflection\\DocBlock\\Tags\\Formatter;
use phpDocumentor\\Reflection\\DocBlock\\Tags\\Formatter\\PassthroughFormatter;
use Webmozart\\Assert\\Assert;

/**
 * Object representing to description for a DocBlock.
 *
 * A Description object can consist of plain text but can also include tags. A Description Formatter can then combine
 * a body template with sprintf-style placeholders together with formatted tags in order to reconstitute a complete
 * description text using the format that you would prefer.
 *
 * Because parsing a Description text can be a verbose process this is handled by the {@see DescriptionFactory}. It is
 * thus recommended to use that to create a Description object, like this:
 *
 *     \$description = \$descriptionFactory->create('This is a {@see Description}', \$context);
 *
 * The description factory will interpret the given body and create a body template and list of tags from them, and pass
 * that onto the constructor if this class.
 *
 * > The \$context variable is a class of type {@see \\phpDocumentor\\Reflection\\Types\\Context} and contains the namespace
 * > and the namespace aliases that apply to this DocBlock. These are used by the Factory to resolve and expand partial
 * > type names and FQSENs.
 *
 * If you do not want to use the DescriptionFactory you can pass a body template and tag listing like this:
 *
 *     \$description = new Description(
 *         'This is a %1\$s',
 *         [ new See(new Fqsen('\\phpDocumentor\\Reflection\\DocBlock\\Description')) ]
 *     );
 *
 * It is generally recommended to use the Factory as that will also apply escaping rules, while the Description object
 * is mainly responsible for rendering.
 *
 * @see DescriptionFactory to create a new Description.
 * @see Description\\Formatter for the formatting of the body and tags.
 */
class Description
{
    /** @var string */
    private \$bodyTemplate;

    /** @var Tag[] */
    private \$tags;

    /**
     * Initializes a Description with its body (template) and a listing of the tags used in the body template.
     *
     * @param string \$bodyTemplate
     * @param Tag[] \$tags
     */
    public function __construct(\$bodyTemplate, array \$tags = [])
    {
        Assert::string(\$bodyTemplate);

        \$this->bodyTemplate = \$bodyTemplate;
        \$this->tags = \$tags;
    }

    /**
     * Returns the tags for this DocBlock.
     *
     * @return Tag[]
     */
    public function getTags()
    {
        return \$this->tags;
    }

    /**
     * Renders this description as a string where the provided formatter will format the tags in the expected string
     * format.
     *
     * @param Formatter|null \$formatter
     *
     * @return string
     */
    public function render(Formatter \$formatter = null)
    {
        if (\$formatter === null) {
            \$formatter = new PassthroughFormatter();
        }

        \$tags = [];
        foreach (\$this->tags as \$tag) {
            \$tags[] = '{' . \$formatter->format(\$tag) . '}';
        }

        return vsprintf(\$this->bodyTemplate, \$tags);
    }

    /**
     * Returns a plain string representation of this description.
     *
     * @return string
     */
    public function __toString()
    {
        return \$this->render();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Description.php";
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

use phpDocumentor\\Reflection\\DocBlock\\Tags\\Formatter;
use phpDocumentor\\Reflection\\DocBlock\\Tags\\Formatter\\PassthroughFormatter;
use Webmozart\\Assert\\Assert;

/**
 * Object representing to description for a DocBlock.
 *
 * A Description object can consist of plain text but can also include tags. A Description Formatter can then combine
 * a body template with sprintf-style placeholders together with formatted tags in order to reconstitute a complete
 * description text using the format that you would prefer.
 *
 * Because parsing a Description text can be a verbose process this is handled by the {@see DescriptionFactory}. It is
 * thus recommended to use that to create a Description object, like this:
 *
 *     \$description = \$descriptionFactory->create('This is a {@see Description}', \$context);
 *
 * The description factory will interpret the given body and create a body template and list of tags from them, and pass
 * that onto the constructor if this class.
 *
 * > The \$context variable is a class of type {@see \\phpDocumentor\\Reflection\\Types\\Context} and contains the namespace
 * > and the namespace aliases that apply to this DocBlock. These are used by the Factory to resolve and expand partial
 * > type names and FQSENs.
 *
 * If you do not want to use the DescriptionFactory you can pass a body template and tag listing like this:
 *
 *     \$description = new Description(
 *         'This is a %1\$s',
 *         [ new See(new Fqsen('\\phpDocumentor\\Reflection\\DocBlock\\Description')) ]
 *     );
 *
 * It is generally recommended to use the Factory as that will also apply escaping rules, while the Description object
 * is mainly responsible for rendering.
 *
 * @see DescriptionFactory to create a new Description.
 * @see Description\\Formatter for the formatting of the body and tags.
 */
class Description
{
    /** @var string */
    private \$bodyTemplate;

    /** @var Tag[] */
    private \$tags;

    /**
     * Initializes a Description with its body (template) and a listing of the tags used in the body template.
     *
     * @param string \$bodyTemplate
     * @param Tag[] \$tags
     */
    public function __construct(\$bodyTemplate, array \$tags = [])
    {
        Assert::string(\$bodyTemplate);

        \$this->bodyTemplate = \$bodyTemplate;
        \$this->tags = \$tags;
    }

    /**
     * Returns the tags for this DocBlock.
     *
     * @return Tag[]
     */
    public function getTags()
    {
        return \$this->tags;
    }

    /**
     * Renders this description as a string where the provided formatter will format the tags in the expected string
     * format.
     *
     * @param Formatter|null \$formatter
     *
     * @return string
     */
    public function render(Formatter \$formatter = null)
    {
        if (\$formatter === null) {
            \$formatter = new PassthroughFormatter();
        }

        \$tags = [];
        foreach (\$this->tags as \$tag) {
            \$tags[] = '{' . \$formatter->format(\$tag) . '}';
        }

        return vsprintf(\$this->bodyTemplate, \$tags);
    }

    /**
     * Returns a plain string representation of this description.
     *
     * @return string
     */
    public function __toString()
    {
        return \$this->render();
    }
}
", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Description.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-docblock/src/DocBlock/Description.php");
    }
}
