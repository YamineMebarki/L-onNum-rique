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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php */
class __TwigTemplate_a3c93a4734183753ab02d03b4ce1d0f9299844e2a9ab829c81a4dd343ed46131 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\FetchMode;
use Doctrine\\DBAL\\ParameterType;
use PDO;
use const E_USER_DEPRECATED;
use function sprintf;
use function trigger_error;

/**
 * The PDO implementation of the Statement interface.
 * Used by all PDO-based drivers.
 */
class PDOStatement extends \\PDOStatement implements Statement
{
    private const PARAM_TYPE_MAP = [
        ParameterType::NULL         => PDO::PARAM_NULL,
        ParameterType::INTEGER      => PDO::PARAM_INT,
        ParameterType::STRING       => PDO::PARAM_STR,
        ParameterType::BINARY       => PDO::PARAM_LOB,
        ParameterType::LARGE_OBJECT => PDO::PARAM_LOB,
        ParameterType::BOOLEAN      => PDO::PARAM_BOOL,
    ];

    private const FETCH_MODE_MAP = [
        FetchMode::ASSOCIATIVE     => PDO::FETCH_ASSOC,
        FetchMode::NUMERIC         => PDO::FETCH_NUM,
        FetchMode::MIXED           => PDO::FETCH_BOTH,
        FetchMode::STANDARD_OBJECT => PDO::FETCH_OBJ,
        FetchMode::COLUMN          => PDO::FETCH_COLUMN,
        FetchMode::CUSTOM_OBJECT   => PDO::FETCH_CLASS,
    ];

    /**
     * Protected constructor.
     */
    protected function __construct()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function setFetchMode(\$fetchMode, \$arg2 = null, \$arg3 = null)
    {
        \$fetchMode = \$this->convertFetchMode(\$fetchMode);

        // This thin wrapper is necessary to shield against the weird signature
        // of PDOStatement::setFetchMode(): even if the second and third
        // parameters are optional, PHP will not let us remove it from this
        // declaration.
        try {
            if (\$arg2 === null && \$arg3 === null) {
                return parent::setFetchMode(\$fetchMode);
            }

            if (\$arg3 === null) {
                return parent::setFetchMode(\$fetchMode, \$arg2);
            }

            return parent::setFetchMode(\$fetchMode, \$arg2, \$arg3);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function bindValue(\$param, \$value, \$type = ParameterType::STRING)
    {
        \$type = \$this->convertParamType(\$type);

        try {
            return parent::bindValue(\$param, \$value, \$type);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function bindParam(\$column, &\$variable, \$type = ParameterType::STRING, \$length = null, \$driverOptions = null)
    {
        \$type = \$this->convertParamType(\$type);

        try {
            return parent::bindParam(\$column, \$variable, \$type, \$length, \$driverOptions);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function closeCursor()
    {
        try {
            return parent::closeCursor();
        } catch (\\PDOException \$exception) {
            // Exceptions not allowed by the interface.
            // In case driver implementations do not adhere to the interface, silence exceptions here.
            return true;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\$params = null)
    {
        try {
            return parent::execute(\$params);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetch(\$fetchMode = null, \$cursorOrientation = PDO::FETCH_ORI_NEXT, \$cursorOffset = 0)
    {
        \$fetchMode = \$this->convertFetchMode(\$fetchMode);

        try {
            if (\$fetchMode === null && \$cursorOrientation === PDO::FETCH_ORI_NEXT && \$cursorOffset === 0) {
                return parent::fetch();
            }

            if (\$cursorOrientation === PDO::FETCH_ORI_NEXT && \$cursorOffset === 0) {
                return parent::fetch(\$fetchMode);
            }

            if (\$cursorOffset === 0) {
                return parent::fetch(\$fetchMode, \$cursorOrientation);
            }

            return parent::fetch(\$fetchMode, \$cursorOrientation, \$cursorOffset);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetchAll(\$fetchMode = null, \$fetchArgument = null, \$ctorArgs = null)
    {
        \$fetchMode = \$this->convertFetchMode(\$fetchMode);

        try {
            if (\$fetchMode === null && \$fetchArgument === null && \$ctorArgs === null) {
                return parent::fetchAll();
            }

            if (\$fetchArgument === null && \$ctorArgs === null) {
                return parent::fetchAll(\$fetchMode);
            }

            if (\$ctorArgs === null) {
                return parent::fetchAll(\$fetchMode, \$fetchArgument);
            }

            return parent::fetchAll(\$fetchMode, \$fetchArgument, \$ctorArgs);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetchColumn(\$columnIndex = 0)
    {
        try {
            return parent::fetchColumn(\$columnIndex);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * Converts DBAL parameter type to PDO parameter type
     *
     * @param int \$type Parameter type
     */
    private function convertParamType(int \$type) : int
    {
        if (! isset(self::PARAM_TYPE_MAP[\$type])) {
            // Todo: next major: throw an exception
            @trigger_error(sprintf(
                'Using a PDO parameter type (%d given) is deprecated and will cause an error in Doctrine 3.0',
                \$type
            ), E_USER_DEPRECATED);

            return \$type;
        }

        return self::PARAM_TYPE_MAP[\$type];
    }

    /**
     * Converts DBAL fetch mode to PDO fetch mode
     *
     * @param int|null \$fetchMode Fetch mode
     */
    private function convertFetchMode(?int \$fetchMode) : ?int
    {
        if (\$fetchMode === null) {
            return null;
        }

        if (! isset(self::FETCH_MODE_MAP[\$fetchMode])) {
            // Todo: next major: throw an exception
            @trigger_error(sprintf(
                'Using a PDO fetch mode or their combination (%d given)' .
                ' is deprecated and will cause an error in Doctrine 3.0',
                \$fetchMode
            ), E_USER_DEPRECATED);

            return \$fetchMode;
        }

        return self::FETCH_MODE_MAP[\$fetchMode];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Driver;

use Doctrine\\DBAL\\FetchMode;
use Doctrine\\DBAL\\ParameterType;
use PDO;
use const E_USER_DEPRECATED;
use function sprintf;
use function trigger_error;

/**
 * The PDO implementation of the Statement interface.
 * Used by all PDO-based drivers.
 */
class PDOStatement extends \\PDOStatement implements Statement
{
    private const PARAM_TYPE_MAP = [
        ParameterType::NULL         => PDO::PARAM_NULL,
        ParameterType::INTEGER      => PDO::PARAM_INT,
        ParameterType::STRING       => PDO::PARAM_STR,
        ParameterType::BINARY       => PDO::PARAM_LOB,
        ParameterType::LARGE_OBJECT => PDO::PARAM_LOB,
        ParameterType::BOOLEAN      => PDO::PARAM_BOOL,
    ];

    private const FETCH_MODE_MAP = [
        FetchMode::ASSOCIATIVE     => PDO::FETCH_ASSOC,
        FetchMode::NUMERIC         => PDO::FETCH_NUM,
        FetchMode::MIXED           => PDO::FETCH_BOTH,
        FetchMode::STANDARD_OBJECT => PDO::FETCH_OBJ,
        FetchMode::COLUMN          => PDO::FETCH_COLUMN,
        FetchMode::CUSTOM_OBJECT   => PDO::FETCH_CLASS,
    ];

    /**
     * Protected constructor.
     */
    protected function __construct()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function setFetchMode(\$fetchMode, \$arg2 = null, \$arg3 = null)
    {
        \$fetchMode = \$this->convertFetchMode(\$fetchMode);

        // This thin wrapper is necessary to shield against the weird signature
        // of PDOStatement::setFetchMode(): even if the second and third
        // parameters are optional, PHP will not let us remove it from this
        // declaration.
        try {
            if (\$arg2 === null && \$arg3 === null) {
                return parent::setFetchMode(\$fetchMode);
            }

            if (\$arg3 === null) {
                return parent::setFetchMode(\$fetchMode, \$arg2);
            }

            return parent::setFetchMode(\$fetchMode, \$arg2, \$arg3);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function bindValue(\$param, \$value, \$type = ParameterType::STRING)
    {
        \$type = \$this->convertParamType(\$type);

        try {
            return parent::bindValue(\$param, \$value, \$type);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function bindParam(\$column, &\$variable, \$type = ParameterType::STRING, \$length = null, \$driverOptions = null)
    {
        \$type = \$this->convertParamType(\$type);

        try {
            return parent::bindParam(\$column, \$variable, \$type, \$length, \$driverOptions);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function closeCursor()
    {
        try {
            return parent::closeCursor();
        } catch (\\PDOException \$exception) {
            // Exceptions not allowed by the interface.
            // In case driver implementations do not adhere to the interface, silence exceptions here.
            return true;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\$params = null)
    {
        try {
            return parent::execute(\$params);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetch(\$fetchMode = null, \$cursorOrientation = PDO::FETCH_ORI_NEXT, \$cursorOffset = 0)
    {
        \$fetchMode = \$this->convertFetchMode(\$fetchMode);

        try {
            if (\$fetchMode === null && \$cursorOrientation === PDO::FETCH_ORI_NEXT && \$cursorOffset === 0) {
                return parent::fetch();
            }

            if (\$cursorOrientation === PDO::FETCH_ORI_NEXT && \$cursorOffset === 0) {
                return parent::fetch(\$fetchMode);
            }

            if (\$cursorOffset === 0) {
                return parent::fetch(\$fetchMode, \$cursorOrientation);
            }

            return parent::fetch(\$fetchMode, \$cursorOrientation, \$cursorOffset);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetchAll(\$fetchMode = null, \$fetchArgument = null, \$ctorArgs = null)
    {
        \$fetchMode = \$this->convertFetchMode(\$fetchMode);

        try {
            if (\$fetchMode === null && \$fetchArgument === null && \$ctorArgs === null) {
                return parent::fetchAll();
            }

            if (\$fetchArgument === null && \$ctorArgs === null) {
                return parent::fetchAll(\$fetchMode);
            }

            if (\$ctorArgs === null) {
                return parent::fetchAll(\$fetchMode, \$fetchArgument);
            }

            return parent::fetchAll(\$fetchMode, \$fetchArgument, \$ctorArgs);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function fetchColumn(\$columnIndex = 0)
    {
        try {
            return parent::fetchColumn(\$columnIndex);
        } catch (\\PDOException \$exception) {
            throw new PDOException(\$exception);
        }
    }

    /**
     * Converts DBAL parameter type to PDO parameter type
     *
     * @param int \$type Parameter type
     */
    private function convertParamType(int \$type) : int
    {
        if (! isset(self::PARAM_TYPE_MAP[\$type])) {
            // Todo: next major: throw an exception
            @trigger_error(sprintf(
                'Using a PDO parameter type (%d given) is deprecated and will cause an error in Doctrine 3.0',
                \$type
            ), E_USER_DEPRECATED);

            return \$type;
        }

        return self::PARAM_TYPE_MAP[\$type];
    }

    /**
     * Converts DBAL fetch mode to PDO fetch mode
     *
     * @param int|null \$fetchMode Fetch mode
     */
    private function convertFetchMode(?int \$fetchMode) : ?int
    {
        if (\$fetchMode === null) {
            return null;
        }

        if (! isset(self::FETCH_MODE_MAP[\$fetchMode])) {
            // Todo: next major: throw an exception
            @trigger_error(sprintf(
                'Using a PDO fetch mode or their combination (%d given)' .
                ' is deprecated and will cause an error in Doctrine 3.0',
                \$fetchMode
            ), E_USER_DEPRECATED);

            return \$fetchMode;
        }

        return self::FETCH_MODE_MAP[\$fetchMode];
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php");
    }
}
