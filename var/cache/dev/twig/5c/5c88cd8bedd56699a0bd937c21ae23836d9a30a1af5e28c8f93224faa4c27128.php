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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/ArrayStatement.php */
class __TwigTemplate_87507c94a889d73abbc2eb50b19b667348140b08d251f9a19fb05fac3e00bef4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/ArrayStatement.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/ArrayStatement.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Cache;

use ArrayIterator;
use Doctrine\\DBAL\\Driver\\ResultStatement;
use Doctrine\\DBAL\\FetchMode;
use InvalidArgumentException;
use IteratorAggregate;
use PDO;
use function array_merge;
use function array_values;
use function count;
use function reset;

class ArrayStatement implements IteratorAggregate, ResultStatement
{
    /** @var mixed[] */
    private \$data;

    /** @var int */
    private \$columnCount = 0;

    /** @var int */
    private \$num = 0;

    /** @var int */
    private \$defaultFetchMode = FetchMode::MIXED;

    /**
     * @param mixed[] \$data
     */
    public function __construct(array \$data)
    {
        \$this->data = \$data;
        if (! count(\$data)) {
            return;
        }

        \$this->columnCount = count(\$data[0]);
    }

    /**
     * {@inheritdoc}
     */
    public function closeCursor()
    {
        unset(\$this->data);
    }

    /**
     * {@inheritdoc}
     */
    public function columnCount()
    {
        return \$this->columnCount;
    }

    /**
     * {@inheritdoc}
     */
    public function setFetchMode(\$fetchMode, \$arg2 = null, \$arg3 = null)
    {
        if (\$arg2 !== null || \$arg3 !== null) {
            throw new InvalidArgumentException('Caching layer does not support 2nd/3rd argument to setFetchMode()');
        }

        \$this->defaultFetchMode = \$fetchMode;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        \$data = \$this->fetchAll();

        return new ArrayIterator(\$data);
    }

    /**
     * {@inheritdoc}
     */
    public function fetch(\$fetchMode = null, \$cursorOrientation = PDO::FETCH_ORI_NEXT, \$cursorOffset = 0)
    {
        if (! isset(\$this->data[\$this->num])) {
            return false;
        }

        \$row       = \$this->data[\$this->num++];
        \$fetchMode = \$fetchMode ?: \$this->defaultFetchMode;

        if (\$fetchMode === FetchMode::ASSOCIATIVE) {
            return \$row;
        }

        if (\$fetchMode === FetchMode::NUMERIC) {
            return array_values(\$row);
        }

        if (\$fetchMode === FetchMode::MIXED) {
            return array_merge(\$row, array_values(\$row));
        }

        if (\$fetchMode === FetchMode::COLUMN) {
            return reset(\$row);
        }

        throw new InvalidArgumentException('Invalid fetch-style given for fetching result.');
    }

    /**
     * {@inheritdoc}
     */
    public function fetchAll(\$fetchMode = null, \$fetchArgument = null, \$ctorArgs = null)
    {
        \$rows = [];
        while (\$row = \$this->fetch(\$fetchMode)) {
            \$rows[] = \$row;
        }

        return \$rows;
    }

    /**
     * {@inheritdoc}
     */
    public function fetchColumn(\$columnIndex = 0)
    {
        \$row = \$this->fetch(FetchMode::NUMERIC);

        // Todo: verify that return false is the correct behavior
        return \$row[\$columnIndex] ?? false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/ArrayStatement.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Cache;

use ArrayIterator;
use Doctrine\\DBAL\\Driver\\ResultStatement;
use Doctrine\\DBAL\\FetchMode;
use InvalidArgumentException;
use IteratorAggregate;
use PDO;
use function array_merge;
use function array_values;
use function count;
use function reset;

class ArrayStatement implements IteratorAggregate, ResultStatement
{
    /** @var mixed[] */
    private \$data;

    /** @var int */
    private \$columnCount = 0;

    /** @var int */
    private \$num = 0;

    /** @var int */
    private \$defaultFetchMode = FetchMode::MIXED;

    /**
     * @param mixed[] \$data
     */
    public function __construct(array \$data)
    {
        \$this->data = \$data;
        if (! count(\$data)) {
            return;
        }

        \$this->columnCount = count(\$data[0]);
    }

    /**
     * {@inheritdoc}
     */
    public function closeCursor()
    {
        unset(\$this->data);
    }

    /**
     * {@inheritdoc}
     */
    public function columnCount()
    {
        return \$this->columnCount;
    }

    /**
     * {@inheritdoc}
     */
    public function setFetchMode(\$fetchMode, \$arg2 = null, \$arg3 = null)
    {
        if (\$arg2 !== null || \$arg3 !== null) {
            throw new InvalidArgumentException('Caching layer does not support 2nd/3rd argument to setFetchMode()');
        }

        \$this->defaultFetchMode = \$fetchMode;

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator()
    {
        \$data = \$this->fetchAll();

        return new ArrayIterator(\$data);
    }

    /**
     * {@inheritdoc}
     */
    public function fetch(\$fetchMode = null, \$cursorOrientation = PDO::FETCH_ORI_NEXT, \$cursorOffset = 0)
    {
        if (! isset(\$this->data[\$this->num])) {
            return false;
        }

        \$row       = \$this->data[\$this->num++];
        \$fetchMode = \$fetchMode ?: \$this->defaultFetchMode;

        if (\$fetchMode === FetchMode::ASSOCIATIVE) {
            return \$row;
        }

        if (\$fetchMode === FetchMode::NUMERIC) {
            return array_values(\$row);
        }

        if (\$fetchMode === FetchMode::MIXED) {
            return array_merge(\$row, array_values(\$row));
        }

        if (\$fetchMode === FetchMode::COLUMN) {
            return reset(\$row);
        }

        throw new InvalidArgumentException('Invalid fetch-style given for fetching result.');
    }

    /**
     * {@inheritdoc}
     */
    public function fetchAll(\$fetchMode = null, \$fetchArgument = null, \$ctorArgs = null)
    {
        \$rows = [];
        while (\$row = \$this->fetch(\$fetchMode)) {
            \$rows[] = \$row;
        }

        return \$rows;
    }

    /**
     * {@inheritdoc}
     */
    public function fetchColumn(\$columnIndex = 0)
    {
        \$row = \$this->fetch(FetchMode::NUMERIC);

        // Todo: verify that return false is the correct behavior
        return \$row[\$columnIndex] ?? false;
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/ArrayStatement.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Cache/ArrayStatement.php");
    }
}
