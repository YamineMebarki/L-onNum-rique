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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Column.php */
class __TwigTemplate_409a18ba0bee9c08800c22af159cd83e1a448bb22b408242c1be0ffb110f33a3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Column.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Column.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Schema;

use Doctrine\\DBAL\\Types\\Type;
use const E_USER_DEPRECATED;
use function array_merge;
use function is_numeric;
use function method_exists;
use function sprintf;
use function trigger_error;

/**
 * Object representation of a database column.
 */
class Column extends AbstractAsset
{
    /** @var Type */
    protected \$_type;

    /** @var int|null */
    protected \$_length = null;

    /** @var int */
    protected \$_precision = 10;

    /** @var int */
    protected \$_scale = 0;

    /** @var bool */
    protected \$_unsigned = false;

    /** @var bool */
    protected \$_fixed = false;

    /** @var bool */
    protected \$_notnull = true;

    /** @var string|null */
    protected \$_default = null;

    /** @var bool */
    protected \$_autoincrement = false;

    /** @var mixed[] */
    protected \$_platformOptions = [];

    /** @var string|null */
    protected \$_columnDefinition = null;

    /** @var string|null */
    protected \$_comment = null;

    /** @var mixed[] */
    protected \$_customSchemaOptions = [];

    /**
     * Creates a new Column.
     *
     * @param string  \$columnName
     * @param mixed[] \$options
     */
    public function __construct(\$columnName, Type \$type, array \$options = [])
    {
        \$this->_setName(\$columnName);
        \$this->setType(\$type);
        \$this->setOptions(\$options);
    }

    /**
     * @param mixed[] \$options
     *
     * @return Column
     */
    public function setOptions(array \$options)
    {
        foreach (\$options as \$name => \$value) {
            \$method = 'set' . \$name;
            if (! method_exists(\$this, \$method)) {
                // next major: throw an exception
                @trigger_error(sprintf(
                    'The \"%s\" column option is not supported,' .
                    ' setting it is deprecated and will cause an error in Doctrine 3.0',
                    \$name
                ), E_USER_DEPRECATED);

                continue;
            }
            \$this->\$method(\$value);
        }

        return \$this;
    }

    /**
     * @return Column
     */
    public function setType(Type \$type)
    {
        \$this->_type = \$type;

        return \$this;
    }

    /**
     * @param int|null \$length
     *
     * @return Column
     */
    public function setLength(\$length)
    {
        if (\$length !== null) {
            \$this->_length = (int) \$length;
        } else {
            \$this->_length = null;
        }

        return \$this;
    }

    /**
     * @param int \$precision
     *
     * @return Column
     */
    public function setPrecision(\$precision)
    {
        if (! is_numeric(\$precision)) {
            \$precision = 10; // defaults to 10 when no valid precision is given.
        }

        \$this->_precision = (int) \$precision;

        return \$this;
    }

    /**
     * @param int \$scale
     *
     * @return Column
     */
    public function setScale(\$scale)
    {
        if (! is_numeric(\$scale)) {
            \$scale = 0;
        }

        \$this->_scale = (int) \$scale;

        return \$this;
    }

    /**
     * @param bool \$unsigned
     *
     * @return Column
     */
    public function setUnsigned(\$unsigned)
    {
        \$this->_unsigned = (bool) \$unsigned;

        return \$this;
    }

    /**
     * @param bool \$fixed
     *
     * @return Column
     */
    public function setFixed(\$fixed)
    {
        \$this->_fixed = (bool) \$fixed;

        return \$this;
    }

    /**
     * @param bool \$notnull
     *
     * @return Column
     */
    public function setNotnull(\$notnull)
    {
        \$this->_notnull = (bool) \$notnull;

        return \$this;
    }

    /**
     * @param mixed \$default
     *
     * @return Column
     */
    public function setDefault(\$default)
    {
        \$this->_default = \$default;

        return \$this;
    }

    /**
     * @param mixed[] \$platformOptions
     *
     * @return Column
     */
    public function setPlatformOptions(array \$platformOptions)
    {
        \$this->_platformOptions = \$platformOptions;

        return \$this;
    }

    /**
     * @param string \$name
     * @param mixed  \$value
     *
     * @return Column
     */
    public function setPlatformOption(\$name, \$value)
    {
        \$this->_platformOptions[\$name] = \$value;

        return \$this;
    }

    /**
     * @param string \$value
     *
     * @return Column
     */
    public function setColumnDefinition(\$value)
    {
        \$this->_columnDefinition = \$value;

        return \$this;
    }

    /**
     * @return Type
     */
    public function getType()
    {
        return \$this->_type;
    }

    /**
     * @return int|null
     */
    public function getLength()
    {
        return \$this->_length;
    }

    /**
     * @return int
     */
    public function getPrecision()
    {
        return \$this->_precision;
    }

    /**
     * @return int
     */
    public function getScale()
    {
        return \$this->_scale;
    }

    /**
     * @return bool
     */
    public function getUnsigned()
    {
        return \$this->_unsigned;
    }

    /**
     * @return bool
     */
    public function getFixed()
    {
        return \$this->_fixed;
    }

    /**
     * @return bool
     */
    public function getNotnull()
    {
        return \$this->_notnull;
    }

    /**
     * @return string|null
     */
    public function getDefault()
    {
        return \$this->_default;
    }

    /**
     * @return mixed[]
     */
    public function getPlatformOptions()
    {
        return \$this->_platformOptions;
    }

    /**
     * @param string \$name
     *
     * @return bool
     */
    public function hasPlatformOption(\$name)
    {
        return isset(\$this->_platformOptions[\$name]);
    }

    /**
     * @param string \$name
     *
     * @return mixed
     */
    public function getPlatformOption(\$name)
    {
        return \$this->_platformOptions[\$name];
    }

    /**
     * @return string|null
     */
    public function getColumnDefinition()
    {
        return \$this->_columnDefinition;
    }

    /**
     * @return bool
     */
    public function getAutoincrement()
    {
        return \$this->_autoincrement;
    }

    /**
     * @param bool \$flag
     *
     * @return Column
     */
    public function setAutoincrement(\$flag)
    {
        \$this->_autoincrement = \$flag;

        return \$this;
    }

    /**
     * @param string \$comment
     *
     * @return Column
     */
    public function setComment(\$comment)
    {
        \$this->_comment = \$comment;

        return \$this;
    }

    /**
     * @return string|null
     */
    public function getComment()
    {
        return \$this->_comment;
    }

    /**
     * @param string \$name
     * @param mixed  \$value
     *
     * @return Column
     */
    public function setCustomSchemaOption(\$name, \$value)
    {
        \$this->_customSchemaOptions[\$name] = \$value;

        return \$this;
    }

    /**
     * @param string \$name
     *
     * @return bool
     */
    public function hasCustomSchemaOption(\$name)
    {
        return isset(\$this->_customSchemaOptions[\$name]);
    }

    /**
     * @param string \$name
     *
     * @return mixed
     */
    public function getCustomSchemaOption(\$name)
    {
        return \$this->_customSchemaOptions[\$name];
    }

    /**
     * @param mixed[] \$customSchemaOptions
     *
     * @return Column
     */
    public function setCustomSchemaOptions(array \$customSchemaOptions)
    {
        \$this->_customSchemaOptions = \$customSchemaOptions;

        return \$this;
    }

    /**
     * @return mixed[]
     */
    public function getCustomSchemaOptions()
    {
        return \$this->_customSchemaOptions;
    }

    /**
     * @return mixed[]
     */
    public function toArray()
    {
        return array_merge([
            'name'          => \$this->_name,
            'type'          => \$this->_type,
            'default'       => \$this->_default,
            'notnull'       => \$this->_notnull,
            'length'        => \$this->_length,
            'precision'     => \$this->_precision,
            'scale'         => \$this->_scale,
            'fixed'         => \$this->_fixed,
            'unsigned'      => \$this->_unsigned,
            'autoincrement' => \$this->_autoincrement,
            'columnDefinition' => \$this->_columnDefinition,
            'comment' => \$this->_comment,
        ], \$this->_platformOptions, \$this->_customSchemaOptions);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Column.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Schema;

use Doctrine\\DBAL\\Types\\Type;
use const E_USER_DEPRECATED;
use function array_merge;
use function is_numeric;
use function method_exists;
use function sprintf;
use function trigger_error;

/**
 * Object representation of a database column.
 */
class Column extends AbstractAsset
{
    /** @var Type */
    protected \$_type;

    /** @var int|null */
    protected \$_length = null;

    /** @var int */
    protected \$_precision = 10;

    /** @var int */
    protected \$_scale = 0;

    /** @var bool */
    protected \$_unsigned = false;

    /** @var bool */
    protected \$_fixed = false;

    /** @var bool */
    protected \$_notnull = true;

    /** @var string|null */
    protected \$_default = null;

    /** @var bool */
    protected \$_autoincrement = false;

    /** @var mixed[] */
    protected \$_platformOptions = [];

    /** @var string|null */
    protected \$_columnDefinition = null;

    /** @var string|null */
    protected \$_comment = null;

    /** @var mixed[] */
    protected \$_customSchemaOptions = [];

    /**
     * Creates a new Column.
     *
     * @param string  \$columnName
     * @param mixed[] \$options
     */
    public function __construct(\$columnName, Type \$type, array \$options = [])
    {
        \$this->_setName(\$columnName);
        \$this->setType(\$type);
        \$this->setOptions(\$options);
    }

    /**
     * @param mixed[] \$options
     *
     * @return Column
     */
    public function setOptions(array \$options)
    {
        foreach (\$options as \$name => \$value) {
            \$method = 'set' . \$name;
            if (! method_exists(\$this, \$method)) {
                // next major: throw an exception
                @trigger_error(sprintf(
                    'The \"%s\" column option is not supported,' .
                    ' setting it is deprecated and will cause an error in Doctrine 3.0',
                    \$name
                ), E_USER_DEPRECATED);

                continue;
            }
            \$this->\$method(\$value);
        }

        return \$this;
    }

    /**
     * @return Column
     */
    public function setType(Type \$type)
    {
        \$this->_type = \$type;

        return \$this;
    }

    /**
     * @param int|null \$length
     *
     * @return Column
     */
    public function setLength(\$length)
    {
        if (\$length !== null) {
            \$this->_length = (int) \$length;
        } else {
            \$this->_length = null;
        }

        return \$this;
    }

    /**
     * @param int \$precision
     *
     * @return Column
     */
    public function setPrecision(\$precision)
    {
        if (! is_numeric(\$precision)) {
            \$precision = 10; // defaults to 10 when no valid precision is given.
        }

        \$this->_precision = (int) \$precision;

        return \$this;
    }

    /**
     * @param int \$scale
     *
     * @return Column
     */
    public function setScale(\$scale)
    {
        if (! is_numeric(\$scale)) {
            \$scale = 0;
        }

        \$this->_scale = (int) \$scale;

        return \$this;
    }

    /**
     * @param bool \$unsigned
     *
     * @return Column
     */
    public function setUnsigned(\$unsigned)
    {
        \$this->_unsigned = (bool) \$unsigned;

        return \$this;
    }

    /**
     * @param bool \$fixed
     *
     * @return Column
     */
    public function setFixed(\$fixed)
    {
        \$this->_fixed = (bool) \$fixed;

        return \$this;
    }

    /**
     * @param bool \$notnull
     *
     * @return Column
     */
    public function setNotnull(\$notnull)
    {
        \$this->_notnull = (bool) \$notnull;

        return \$this;
    }

    /**
     * @param mixed \$default
     *
     * @return Column
     */
    public function setDefault(\$default)
    {
        \$this->_default = \$default;

        return \$this;
    }

    /**
     * @param mixed[] \$platformOptions
     *
     * @return Column
     */
    public function setPlatformOptions(array \$platformOptions)
    {
        \$this->_platformOptions = \$platformOptions;

        return \$this;
    }

    /**
     * @param string \$name
     * @param mixed  \$value
     *
     * @return Column
     */
    public function setPlatformOption(\$name, \$value)
    {
        \$this->_platformOptions[\$name] = \$value;

        return \$this;
    }

    /**
     * @param string \$value
     *
     * @return Column
     */
    public function setColumnDefinition(\$value)
    {
        \$this->_columnDefinition = \$value;

        return \$this;
    }

    /**
     * @return Type
     */
    public function getType()
    {
        return \$this->_type;
    }

    /**
     * @return int|null
     */
    public function getLength()
    {
        return \$this->_length;
    }

    /**
     * @return int
     */
    public function getPrecision()
    {
        return \$this->_precision;
    }

    /**
     * @return int
     */
    public function getScale()
    {
        return \$this->_scale;
    }

    /**
     * @return bool
     */
    public function getUnsigned()
    {
        return \$this->_unsigned;
    }

    /**
     * @return bool
     */
    public function getFixed()
    {
        return \$this->_fixed;
    }

    /**
     * @return bool
     */
    public function getNotnull()
    {
        return \$this->_notnull;
    }

    /**
     * @return string|null
     */
    public function getDefault()
    {
        return \$this->_default;
    }

    /**
     * @return mixed[]
     */
    public function getPlatformOptions()
    {
        return \$this->_platformOptions;
    }

    /**
     * @param string \$name
     *
     * @return bool
     */
    public function hasPlatformOption(\$name)
    {
        return isset(\$this->_platformOptions[\$name]);
    }

    /**
     * @param string \$name
     *
     * @return mixed
     */
    public function getPlatformOption(\$name)
    {
        return \$this->_platformOptions[\$name];
    }

    /**
     * @return string|null
     */
    public function getColumnDefinition()
    {
        return \$this->_columnDefinition;
    }

    /**
     * @return bool
     */
    public function getAutoincrement()
    {
        return \$this->_autoincrement;
    }

    /**
     * @param bool \$flag
     *
     * @return Column
     */
    public function setAutoincrement(\$flag)
    {
        \$this->_autoincrement = \$flag;

        return \$this;
    }

    /**
     * @param string \$comment
     *
     * @return Column
     */
    public function setComment(\$comment)
    {
        \$this->_comment = \$comment;

        return \$this;
    }

    /**
     * @return string|null
     */
    public function getComment()
    {
        return \$this->_comment;
    }

    /**
     * @param string \$name
     * @param mixed  \$value
     *
     * @return Column
     */
    public function setCustomSchemaOption(\$name, \$value)
    {
        \$this->_customSchemaOptions[\$name] = \$value;

        return \$this;
    }

    /**
     * @param string \$name
     *
     * @return bool
     */
    public function hasCustomSchemaOption(\$name)
    {
        return isset(\$this->_customSchemaOptions[\$name]);
    }

    /**
     * @param string \$name
     *
     * @return mixed
     */
    public function getCustomSchemaOption(\$name)
    {
        return \$this->_customSchemaOptions[\$name];
    }

    /**
     * @param mixed[] \$customSchemaOptions
     *
     * @return Column
     */
    public function setCustomSchemaOptions(array \$customSchemaOptions)
    {
        \$this->_customSchemaOptions = \$customSchemaOptions;

        return \$this;
    }

    /**
     * @return mixed[]
     */
    public function getCustomSchemaOptions()
    {
        return \$this->_customSchemaOptions;
    }

    /**
     * @return mixed[]
     */
    public function toArray()
    {
        return array_merge([
            'name'          => \$this->_name,
            'type'          => \$this->_type,
            'default'       => \$this->_default,
            'notnull'       => \$this->_notnull,
            'length'        => \$this->_length,
            'precision'     => \$this->_precision,
            'scale'         => \$this->_scale,
            'fixed'         => \$this->_fixed,
            'unsigned'      => \$this->_unsigned,
            'autoincrement' => \$this->_autoincrement,
            'columnDefinition' => \$this->_columnDefinition,
            'comment' => \$this->_comment,
        ], \$this->_platformOptions, \$this->_customSchemaOptions);
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Column.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Schema/Column.php");
    }
}
