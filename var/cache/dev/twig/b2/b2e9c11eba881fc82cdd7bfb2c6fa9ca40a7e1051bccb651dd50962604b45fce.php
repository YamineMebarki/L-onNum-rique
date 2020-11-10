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

/* vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Link.php */
class __TwigTemplate_9fda27b5b378e3fdaf4f0ebc0ff2cb8df423e0b270a0f3610c2fc0e394b3fadd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Link.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Link.php"));

        // line 1
        echo "<?php
/**
 * phpDocumentor
 *
 * PHP Version 5.3
 *
 * @author    Ben Selby <benmatselby@gmail.com>
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
 * Reflection class for a @link tag in a Docblock.
 */
final class Link extends BaseTag implements Factory\\StaticMethod
{
    protected \$name = 'link';

    /** @var string */
    private \$link = '';

    /**
     * Initializes a link to a URL.
     *
     * @param string      \$link
     * @param Description \$description
     */
    public function __construct(\$link, Description \$description = null)
    {
        Assert::string(\$link);

        \$this->link = \$link;
        \$this->description = \$description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(\$body, DescriptionFactory \$descriptionFactory = null, TypeContext \$context = null)
    {
        Assert::string(\$body);
        Assert::notNull(\$descriptionFactory);

        \$parts = preg_split('/\\s+/Su', \$body, 2);
        \$description = isset(\$parts[1]) ? \$descriptionFactory->create(\$parts[1], \$context) : null;

        return new static(\$parts[0], \$description);
    }

    /**
    * Gets the link
    *
    * @return string
    */
    public function getLink()
    {
        return \$this->link;
    }

    /**
     * Returns a string representation for this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return \$this->link . (\$this->description ? ' ' . \$this->description->render() : '');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Link.php";
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
 * @author    Ben Selby <benmatselby@gmail.com>
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
 * Reflection class for a @link tag in a Docblock.
 */
final class Link extends BaseTag implements Factory\\StaticMethod
{
    protected \$name = 'link';

    /** @var string */
    private \$link = '';

    /**
     * Initializes a link to a URL.
     *
     * @param string      \$link
     * @param Description \$description
     */
    public function __construct(\$link, Description \$description = null)
    {
        Assert::string(\$link);

        \$this->link = \$link;
        \$this->description = \$description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(\$body, DescriptionFactory \$descriptionFactory = null, TypeContext \$context = null)
    {
        Assert::string(\$body);
        Assert::notNull(\$descriptionFactory);

        \$parts = preg_split('/\\s+/Su', \$body, 2);
        \$description = isset(\$parts[1]) ? \$descriptionFactory->create(\$parts[1], \$context) : null;

        return new static(\$parts[0], \$description);
    }

    /**
    * Gets the link
    *
    * @return string
    */
    public function getLink()
    {
        return \$this->link;
    }

    /**
     * Returns a string representation for this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return \$this->link . (\$this->description ? ' ' . \$this->description->render() : '');
    }
}
", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Link.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Link.php");
    }
}
