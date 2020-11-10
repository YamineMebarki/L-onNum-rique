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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/ParameterFormatter.php */
class __TwigTemplate_0949fe92b6d08c01827c5642c36d5beeead01fef4e48027197119ae136100ad5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/ParameterFormatter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/ParameterFormatter.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Types\\Type;
use function array_map;
use function implode;
use function is_array;
use function is_bool;
use function is_int;
use function is_string;
use function sprintf;

/**
 * The ParameterFormatter class is responsible for formatting SQL query parameters to a string
 * for display output.
 *
 * @internal
 */
final class ParameterFormatter implements ParameterFormatterInterface
{
    /** @var Connection */
    private \$connection;

    public function __construct(Connection \$connection)
    {
        \$this->connection = \$connection;
    }

    /**
     * @param mixed[] \$params
     * @param mixed[] \$types
     */
    public function formatParameters(array \$params, array \$types) : string
    {
        if (\$params === []) {
            return '';
        }

        \$formattedParameters = [];

        foreach (\$params as \$key => \$value) {
            \$type = \$types[\$key] ?? 'string';

            \$formattedParameter = '[' . \$this->formatParameter(\$value, \$type) . ']';

            \$formattedParameters[] = is_string(\$key)
                ? sprintf(':%s => %s', \$key, \$formattedParameter)
                : \$formattedParameter;
        }

        return sprintf('with parameters (%s)', implode(', ', \$formattedParameters));
    }

    /**
     * @param string|int \$value
     * @param string|int \$type
     *
     * @return string|int
     */
    private function formatParameter(\$value, \$type)
    {
        if (is_string(\$type) && Type::hasType(\$type)) {
            return Type::getType(\$type)->convertToDatabaseValue(
                \$value,
                \$this->connection->getDatabasePlatform()
            );
        }

        return \$this->parameterToString(\$value);
    }

    /**
     * @param int[]|bool[]|string[]|array|int|string|bool \$value
     */
    private function parameterToString(\$value) : string
    {
        if (is_array(\$value)) {
            return implode(', ', array_map(function (\$value) : string {
                return \$this->parameterToString(\$value);
            }, \$value));
        }

        if (is_int(\$value) || is_string(\$value)) {
            return (string) \$value;
        }

        if (is_bool(\$value)) {
            return \$value === true ? 'true' : 'false';
        }

        return '?';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/ParameterFormatter.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations;

use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\Types\\Type;
use function array_map;
use function implode;
use function is_array;
use function is_bool;
use function is_int;
use function is_string;
use function sprintf;

/**
 * The ParameterFormatter class is responsible for formatting SQL query parameters to a string
 * for display output.
 *
 * @internal
 */
final class ParameterFormatter implements ParameterFormatterInterface
{
    /** @var Connection */
    private \$connection;

    public function __construct(Connection \$connection)
    {
        \$this->connection = \$connection;
    }

    /**
     * @param mixed[] \$params
     * @param mixed[] \$types
     */
    public function formatParameters(array \$params, array \$types) : string
    {
        if (\$params === []) {
            return '';
        }

        \$formattedParameters = [];

        foreach (\$params as \$key => \$value) {
            \$type = \$types[\$key] ?? 'string';

            \$formattedParameter = '[' . \$this->formatParameter(\$value, \$type) . ']';

            \$formattedParameters[] = is_string(\$key)
                ? sprintf(':%s => %s', \$key, \$formattedParameter)
                : \$formattedParameter;
        }

        return sprintf('with parameters (%s)', implode(', ', \$formattedParameters));
    }

    /**
     * @param string|int \$value
     * @param string|int \$type
     *
     * @return string|int
     */
    private function formatParameter(\$value, \$type)
    {
        if (is_string(\$type) && Type::hasType(\$type)) {
            return Type::getType(\$type)->convertToDatabaseValue(
                \$value,
                \$this->connection->getDatabasePlatform()
            );
        }

        return \$this->parameterToString(\$value);
    }

    /**
     * @param int[]|bool[]|string[]|array|int|string|bool \$value
     */
    private function parameterToString(\$value) : string
    {
        if (is_array(\$value)) {
            return implode(', ', array_map(function (\$value) : string {
                return \$this->parameterToString(\$value);
            }, \$value));
        }

        if (is_int(\$value) || is_string(\$value)) {
            return (string) \$value;
        }

        if (is_bool(\$value)) {
            return \$value === true ? 'true' : 'false';
        }

        return '?';
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/ParameterFormatter.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/ParameterFormatter.php");
    }
}
