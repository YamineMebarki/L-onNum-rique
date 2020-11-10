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

/* vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Version.php */
class __TwigTemplate_58b6154646cc71707fe699521fffa80681f0d6f408128e3ef4e6975cc9dcd7aa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Version.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Version.php"));

        // line 1
        echo "<?php
/**
 * phpDocumentor
 *
 * PHP Version 5.3
 *
 * @author    Vasil Rangelov <boen.robot@gmail.com>
 * @copyright 2010-2011 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\\Reflection\\DocBlock\\Tags;

use phpDocumentor\\Reflection\\DocBlock\\Description;
use phpDocumentor\\Reflection\\DocBlock\\DescriptionFactory;
use phpDocumentor\\Reflection\\Types\\Context as TypeContext;
use Webmozart\\Assert\\Assert;

/**
 * Reflection class for a {@}version tag in a Docblock.
 */
final class Version extends BaseTag implements Factory\\StaticMethod
{
    protected \$name = 'version';

    /**
     * PCRE regular expression matching a version vector.
     * Assumes the \"x\" modifier.
     */
    const REGEX_VECTOR = '(?:
        # Normal release vectors.
        \\d\\S*
        |
        # VCS version vectors. Per PHPCS, they are expected to
        # follow the form of the VCS name, followed by \":\", followed
        # by the version vector itself.
        # By convention, popular VCSes like CVS, SVN and GIT use \"\$\"
        # around the actual version vector.
        [^\\s\\:]+\\:\\s*\\\$[^\\\$]+\\\$
    )';

    /** @var string The version vector. */
    private \$version = '';

    public function __construct(\$version = null, Description \$description = null)
    {
        Assert::nullOrStringNotEmpty(\$version);

        \$this->version = \$version;
        \$this->description = \$description;
    }

    /**
     * @return static
     */
    public static function create(\$body, DescriptionFactory \$descriptionFactory = null, TypeContext \$context = null)
    {
        Assert::nullOrString(\$body);
        if (empty(\$body)) {
            return new static();
        }

        \$matches = [];
        if (!preg_match('/^(' . self::REGEX_VECTOR . ')\\s*(.+)?\$/sux', \$body, \$matches)) {
            return null;
        }

        return new static(
            \$matches[1],
            \$descriptionFactory->create(isset(\$matches[2]) ? \$matches[2] : '', \$context)
        );
    }

    /**
     * Gets the version section of the tag.
     *
     * @return string
     */
    public function getVersion()
    {
        return \$this->version;
    }

    /**
     * Returns a string representation for this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return \$this->version . (\$this->description ? ' ' . \$this->description->render() : '');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Version.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/**
 * phpDocumentor
 *
 * PHP Version 5.3
 *
 * @author    Vasil Rangelov <boen.robot@gmail.com>
 * @copyright 2010-2011 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\\Reflection\\DocBlock\\Tags;

use phpDocumentor\\Reflection\\DocBlock\\Description;
use phpDocumentor\\Reflection\\DocBlock\\DescriptionFactory;
use phpDocumentor\\Reflection\\Types\\Context as TypeContext;
use Webmozart\\Assert\\Assert;

/**
 * Reflection class for a {@}version tag in a Docblock.
 */
final class Version extends BaseTag implements Factory\\StaticMethod
{
    protected \$name = 'version';

    /**
     * PCRE regular expression matching a version vector.
     * Assumes the \"x\" modifier.
     */
    const REGEX_VECTOR = '(?:
        # Normal release vectors.
        \\d\\S*
        |
        # VCS version vectors. Per PHPCS, they are expected to
        # follow the form of the VCS name, followed by \":\", followed
        # by the version vector itself.
        # By convention, popular VCSes like CVS, SVN and GIT use \"\$\"
        # around the actual version vector.
        [^\\s\\:]+\\:\\s*\\\$[^\\\$]+\\\$
    )';

    /** @var string The version vector. */
    private \$version = '';

    public function __construct(\$version = null, Description \$description = null)
    {
        Assert::nullOrStringNotEmpty(\$version);

        \$this->version = \$version;
        \$this->description = \$description;
    }

    /**
     * @return static
     */
    public static function create(\$body, DescriptionFactory \$descriptionFactory = null, TypeContext \$context = null)
    {
        Assert::nullOrString(\$body);
        if (empty(\$body)) {
            return new static();
        }

        \$matches = [];
        if (!preg_match('/^(' . self::REGEX_VECTOR . ')\\s*(.+)?\$/sux', \$body, \$matches)) {
            return null;
        }

        return new static(
            \$matches[1],
            \$descriptionFactory->create(isset(\$matches[2]) ? \$matches[2] : '', \$context)
        );
    }

    /**
     * Gets the version section of the tag.
     *
     * @return string
     */
    public function getVersion()
    {
        return \$this->version;
    }

    /**
     * Returns a string representation for this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return \$this->version . (\$this->description ? ' ' . \$this->description->render() : '');
    }
}
", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Version.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Version.php");
    }
}
