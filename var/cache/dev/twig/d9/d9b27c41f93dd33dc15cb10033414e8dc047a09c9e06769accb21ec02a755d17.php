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

/* vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Property.php */
class __TwigTemplate_60f47ffa2541dfbe91f397cbd9ac9551bf66087f918300ca2c07367e075c43a6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Property.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Property.php"));

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
 * Reflection class for a {@}property tag in a Docblock.
 */
class Property extends BaseTag implements Factory\\StaticMethod
{
    /** @var string */
    protected \$name = 'property';

    /** @var Type */
    private \$type;

    /** @var string */
    protected \$variableName = '';

    /**
     * @param string      \$variableName
     * @param Type        \$type
     * @param Description \$description
     */
    public function __construct(\$variableName, Type \$type = null, Description \$description = null)
    {
        Assert::string(\$variableName);

        \$this->variableName = \$variableName;
        \$this->type = \$type;
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
        Assert::stringNotEmpty(\$body);
        Assert::allNotNull([\$typeResolver, \$descriptionFactory]);

        \$parts = preg_split('/(\\s+)/Su', \$body, 3, PREG_SPLIT_DELIM_CAPTURE);
        \$type = null;
        \$variableName = '';

        // if the first item that is encountered is not a variable; it is a type
        if (isset(\$parts[0]) && (strlen(\$parts[0]) > 0) && (\$parts[0][0] !== '\$')) {
            \$type = \$typeResolver->resolve(array_shift(\$parts), \$context);
            array_shift(\$parts);
        }

        // if the next item starts with a \$ or ...\$ it must be the variable name
        if (isset(\$parts[0]) && (strlen(\$parts[0]) > 0) && (\$parts[0][0] === '\$')) {
            \$variableName = array_shift(\$parts);
            array_shift(\$parts);

            if (substr(\$variableName, 0, 1) === '\$') {
                \$variableName = substr(\$variableName, 1);
            }
        }

        \$description = \$descriptionFactory->create(implode('', \$parts), \$context);

        return new static(\$variableName, \$type, \$description);
    }

    /**
     * Returns the variable's name.
     *
     * @return string
     */
    public function getVariableName()
    {
        return \$this->variableName;
    }

    /**
     * Returns the variable's type or null if unknown.
     *
     * @return Type|null
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * Returns a string representation for this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return (\$this->type ? \$this->type . ' ' : '')
        . '\$' . \$this->variableName
        . (\$this->description ? ' ' . \$this->description : '');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Property.php";
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
 * Reflection class for a {@}property tag in a Docblock.
 */
class Property extends BaseTag implements Factory\\StaticMethod
{
    /** @var string */
    protected \$name = 'property';

    /** @var Type */
    private \$type;

    /** @var string */
    protected \$variableName = '';

    /**
     * @param string      \$variableName
     * @param Type        \$type
     * @param Description \$description
     */
    public function __construct(\$variableName, Type \$type = null, Description \$description = null)
    {
        Assert::string(\$variableName);

        \$this->variableName = \$variableName;
        \$this->type = \$type;
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
        Assert::stringNotEmpty(\$body);
        Assert::allNotNull([\$typeResolver, \$descriptionFactory]);

        \$parts = preg_split('/(\\s+)/Su', \$body, 3, PREG_SPLIT_DELIM_CAPTURE);
        \$type = null;
        \$variableName = '';

        // if the first item that is encountered is not a variable; it is a type
        if (isset(\$parts[0]) && (strlen(\$parts[0]) > 0) && (\$parts[0][0] !== '\$')) {
            \$type = \$typeResolver->resolve(array_shift(\$parts), \$context);
            array_shift(\$parts);
        }

        // if the next item starts with a \$ or ...\$ it must be the variable name
        if (isset(\$parts[0]) && (strlen(\$parts[0]) > 0) && (\$parts[0][0] === '\$')) {
            \$variableName = array_shift(\$parts);
            array_shift(\$parts);

            if (substr(\$variableName, 0, 1) === '\$') {
                \$variableName = substr(\$variableName, 1);
            }
        }

        \$description = \$descriptionFactory->create(implode('', \$parts), \$context);

        return new static(\$variableName, \$type, \$description);
    }

    /**
     * Returns the variable's name.
     *
     * @return string
     */
    public function getVariableName()
    {
        return \$this->variableName;
    }

    /**
     * Returns the variable's type or null if unknown.
     *
     * @return Type|null
     */
    public function getType()
    {
        return \$this->type;
    }

    /**
     * Returns a string representation for this tag.
     *
     * @return string
     */
    public function __toString()
    {
        return (\$this->type ? \$this->type . ' ' : '')
        . '\$' . \$this->variableName
        . (\$this->description ? ' ' . \$this->description : '');
    }
}
", "vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Property.php", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-docblock/src/DocBlock/Tags/Property.php");
    }
}
