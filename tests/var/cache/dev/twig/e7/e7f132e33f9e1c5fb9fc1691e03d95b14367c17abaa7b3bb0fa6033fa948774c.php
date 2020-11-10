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

/* vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Throws.php */
class __TwigTemplate_04ccdeed9d4e1b423bcaeb86d48f5bf6a1a4d8c5aa7c3447765b9314ff730a24 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Throws.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Throws.php"));

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
use phpDocumentor\\Reflection\\Type;
use phpDocumentor\\Reflection\\TypeResolver;
use phpDocumentor\\Reflection\\Types\\Context as TypeContext;
use Webmozart\\Assert\\Assert;

/**
 * Reflection class for a {@}throws tag in a Docblock.
 */
final class Throws extends BaseTag implements Factory\\StaticMethod
{
    protected \$name = 'throws';

    /** @var Type */
    private \$type;

    public function __construct(Type \$type, Description \$description = null)
    {
        \$this->type        = \$type;
        \$this->description = \$description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        \$body,
        TypeResolver \$typeResolver = null,
        DescriptionFactory \$descriptionFactory = null,
        TypeContext \$context = null
    ) {
        Assert::string(\$body);
        Assert::allNotNull([\$typeResolver, \$descriptionFactory]);

        \$parts = preg_split('/\\s+/Su', \$body, 2);

        \$type        = \$typeResolver->resolve(isset(\$parts[0]) ? \$parts[0] : '', \$context);
        \$description = \$descriptionFactory->create(isset(\$parts[1]) ? \$parts[1] : '', \$context);

        return new static(\$type, \$description);
    }

    /**
     * Returns the type section of the variable.
     *
     * @return Type
     */
    public function getType()
    {
        return \$this->type;
    }

    public function __toString()
    {
        return \$this->type . ' ' . \$this->description;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Throws.php";
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
use phpDocumentor\\Reflection\\Type;
use phpDocumentor\\Reflection\\TypeResolver;
use phpDocumentor\\Reflection\\Types\\Context as TypeContext;
use Webmozart\\Assert\\Assert;

/**
 * Reflection class for a {@}throws tag in a Docblock.
 */
final class Throws extends BaseTag implements Factory\\StaticMethod
{
    protected \$name = 'throws';

    /** @var Type */
    private \$type;

    public function __construct(Type \$type, Description \$description = null)
    {
        \$this->type        = \$type;
        \$this->description = \$description;
    }

    /**
     * {@inheritdoc}
     */
    public static function create(
        \$body,
        TypeResolver \$typeResolver = null,
        DescriptionFactory \$descriptionFactory = null,
        TypeContext \$context = null
    ) {
        Assert::string(\$body);
        Assert::allNotNull([\$typeResolver, \$descriptionFactory]);

        \$parts = preg_split('/\\s+/Su', \$body, 2);

        \$type        = \$typeResolver->resolve(isset(\$parts[0]) ? \$parts[0] : '', \$context);
        \$description = \$descriptionFactory->create(isset(\$parts[1]) ? \$parts[1] : '', \$context);

        return new static(\$type, \$description);
    }

    /**
     * Returns the type section of the variable.
     *
     * @return Type
     */
    public function getType()
    {
        return \$this->type;
    }

    public function __toString()
    {
        return \$this->type . ' ' . \$this->description;
    }
}
", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Throws.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Throws.php");
    }
}
