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

/* vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Covers.php */
class __TwigTemplate_c080008613599e431a83a977893097071500cdfbd17b5dcc453ad112aa881cc8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Covers.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Covers.php"));

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
use phpDocumentor\\Reflection\\Fqsen;
use phpDocumentor\\Reflection\\FqsenResolver;
use phpDocumentor\\Reflection\\Types\\Context as TypeContext;
use Webmozart\\Assert\\Assert;

/**
 * Reflection class for a @covers tag in a Docblock.
 */
final class Covers extends BaseTag implements Factory\\StaticMethod
{
    protected \$name = 'covers';

    /** @var Fqsen */
    private \$refers = null;

    /**
     * Initializes this tag.
     *
     * @param Fqsen \$refers
     * @param Description \$description
     */
    public function __construct(Fqsen \$refers, Description \$description = null)
    {
        \$this->refers = \$refers;
        \$this->description = \$description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        \$body,
        DescriptionFactory \$descriptionFactory = null,
        FqsenResolver \$resolver = null,
        TypeContext \$context = null
    ) {
        Assert::string(\$body);
        Assert::notEmpty(\$body);

        \$parts = preg_split('/\\s+/Su', \$body, 2);

        return new static(
            \$resolver->resolve(\$parts[0], \$context),
            \$descriptionFactory->create(isset(\$parts[1]) ? \$parts[1] : '', \$context)
        );
    }

    /**
     * Returns the structural element this tag refers to.
     *
     * @return Fqsen
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
        return "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Covers.php";
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
use phpDocumentor\\Reflection\\Fqsen;
use phpDocumentor\\Reflection\\FqsenResolver;
use phpDocumentor\\Reflection\\Types\\Context as TypeContext;
use Webmozart\\Assert\\Assert;

/**
 * Reflection class for a @covers tag in a Docblock.
 */
final class Covers extends BaseTag implements Factory\\StaticMethod
{
    protected \$name = 'covers';

    /** @var Fqsen */
    private \$refers = null;

    /**
     * Initializes this tag.
     *
     * @param Fqsen \$refers
     * @param Description \$description
     */
    public function __construct(Fqsen \$refers, Description \$description = null)
    {
        \$this->refers = \$refers;
        \$this->description = \$description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        \$body,
        DescriptionFactory \$descriptionFactory = null,
        FqsenResolver \$resolver = null,
        TypeContext \$context = null
    ) {
        Assert::string(\$body);
        Assert::notEmpty(\$body);

        \$parts = preg_split('/\\s+/Su', \$body, 2);

        return new static(
            \$resolver->resolve(\$parts[0], \$context),
            \$descriptionFactory->create(isset(\$parts[1]) ? \$parts[1] : '', \$context)
        );
    }

    /**
     * Returns the structural element this tag refers to.
     *
     * @return Fqsen
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
", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Covers.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Covers.php");
    }
}
