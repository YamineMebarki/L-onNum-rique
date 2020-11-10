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

/* vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/See.php */
class __TwigTemplate_12f190050261c780796ebe23f58eda2f4bc7b976e1ca22e88e88cf01cd2df3af extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/See.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/See.php"));

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
use phpDocumentor\\Reflection\\DocBlock\\Tags\\Reference\\Fqsen as FqsenRef;
use phpDocumentor\\Reflection\\DocBlock\\Tags\\Reference\\Reference;
use phpDocumentor\\Reflection\\DocBlock\\Tags\\Reference\\Url;
use phpDocumentor\\Reflection\\FqsenResolver;
use phpDocumentor\\Reflection\\Types\\Context as TypeContext;
use Webmozart\\Assert\\Assert;

/**
 * Reflection class for an {@}see tag in a Docblock.
 */
class See extends BaseTag implements Factory\\StaticMethod
{
    protected \$name = 'see';

    /** @var Reference */
    protected \$refers = null;

    /**
     * Initializes this tag.
     *
     * @param Reference \$refers
     * @param Description \$description
     */
    public function __construct(Reference \$refers, Description \$description = null)
    {
        \$this->refers = \$refers;
        \$this->description = \$description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        \$body,
        FqsenResolver \$resolver = null,
        DescriptionFactory \$descriptionFactory = null,
        TypeContext \$context = null
    ) {
        Assert::string(\$body);
        Assert::allNotNull([\$resolver, \$descriptionFactory]);

        \$parts       = preg_split('/\\s+/Su', \$body, 2);
        \$description = isset(\$parts[1]) ? \$descriptionFactory->create(\$parts[1], \$context) : null;

        // https://tools.ietf.org/html/rfc2396#section-3
        if (preg_match('/\\w:\\/\\/\\w/i', \$parts[0])) {
            return new static(new Url(\$parts[0]), \$description);
        }

        return new static(new FqsenRef(\$resolver->resolve(\$parts[0], \$context)), \$description);
    }

    /**
     * Returns the ref of this tag.
     *
     * @return Reference
     */
    public function getReference()
    {
        return \$this->refers;
    }

    /**
     * Returns a string representation of this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return \$this->refers . (\$this->description ? ' ' . \$this->description->render() : '');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/See.php";
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
use phpDocumentor\\Reflection\\DocBlock\\Tags\\Reference\\Fqsen as FqsenRef;
use phpDocumentor\\Reflection\\DocBlock\\Tags\\Reference\\Reference;
use phpDocumentor\\Reflection\\DocBlock\\Tags\\Reference\\Url;
use phpDocumentor\\Reflection\\FqsenResolver;
use phpDocumentor\\Reflection\\Types\\Context as TypeContext;
use Webmozart\\Assert\\Assert;

/**
 * Reflection class for an {@}see tag in a Docblock.
 */
class See extends BaseTag implements Factory\\StaticMethod
{
    protected \$name = 'see';

    /** @var Reference */
    protected \$refers = null;

    /**
     * Initializes this tag.
     *
     * @param Reference \$refers
     * @param Description \$description
     */
    public function __construct(Reference \$refers, Description \$description = null)
    {
        \$this->refers = \$refers;
        \$this->description = \$description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        \$body,
        FqsenResolver \$resolver = null,
        DescriptionFactory \$descriptionFactory = null,
        TypeContext \$context = null
    ) {
        Assert::string(\$body);
        Assert::allNotNull([\$resolver, \$descriptionFactory]);

        \$parts       = preg_split('/\\s+/Su', \$body, 2);
        \$description = isset(\$parts[1]) ? \$descriptionFactory->create(\$parts[1], \$context) : null;

        // https://tools.ietf.org/html/rfc2396#section-3
        if (preg_match('/\\w:\\/\\/\\w/i', \$parts[0])) {
            return new static(new Url(\$parts[0]), \$description);
        }

        return new static(new FqsenRef(\$resolver->resolve(\$parts[0], \$context)), \$description);
    }

    /**
     * Returns the ref of this tag.
     *
     * @return Reference
     */
    public function getReference()
    {
        return \$this->refers;
    }

    /**
     * Returns a string representation of this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return \$this->refers . (\$this->description ? ' ' . \$this->description->render() : '');
    }
}
", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/See.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/See.php");
    }
}
