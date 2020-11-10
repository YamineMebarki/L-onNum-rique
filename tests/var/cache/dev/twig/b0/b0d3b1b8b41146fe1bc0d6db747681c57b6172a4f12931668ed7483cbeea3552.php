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

/* vendor/doctrine/doctrine-bundle/ConnectionFactory.php */
class __TwigTemplate_3593a3d06e8541c4958e296582bbd92997d869009564c28988fcacbdd6daa0b0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/ConnectionFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/ConnectionFactory.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle;

use Doctrine\\Common\\EventManager;
use Doctrine\\DBAL\\Configuration;
use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\DriverManager;
use Doctrine\\DBAL\\Exception\\DriverException;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Types\\Type;
use const E_USER_DEPRECATED;
use function get_class;
use function trigger_error;

class ConnectionFactory
{
    /** @var mixed[][] */
    private \$typesConfig = [];

    /** @var bool */
    private \$initialized = false;

    /**
     * @param mixed[][] \$typesConfig
     */
    public function __construct(array \$typesConfig)
    {
        \$this->typesConfig = \$typesConfig;
    }

    /**
     * Create a connection by name.
     *
     * @param mixed[]         \$params
     * @param string[]|Type[] \$mappingTypes
     *
     * @return Connection
     */
    public function createConnection(array \$params, Configuration \$config = null, EventManager \$eventManager = null, array \$mappingTypes = [])
    {
        if (! \$this->initialized) {
            \$this->initializeTypes();
        }

        \$connection = DriverManager::getConnection(\$params, \$config, \$eventManager);

        if (! empty(\$mappingTypes)) {
            \$platform = \$this->getDatabasePlatform(\$connection);
            foreach (\$mappingTypes as \$dbType => \$doctrineType) {
                \$platform->registerDoctrineTypeMapping(\$dbType, \$doctrineType);
            }
        }

        if (! empty(\$this->typesConfig)) {
            \$this->markTypesCommented(\$this->getDatabasePlatform(\$connection));
        }

        return \$connection;
    }

    /**
     * Try to get the database platform.
     *
     * This could fail if types should be registered to an predefined/unused connection
     * and the platform version is unknown.
     * For details have a look at DoctrineBundle issue #673.
     *
     * @return AbstractPlatform
     *
     * @throws DBALException
     */
    private function getDatabasePlatform(Connection \$connection)
    {
        try {
            return \$connection->getDatabasePlatform();
        } catch (DriverException \$driverException) {
            throw new DBALException(
                'An exception occured while establishing a connection to figure out your platform version.' . PHP_EOL .
                \"You can circumvent this by setting a 'server_version' configuration value\" . PHP_EOL . PHP_EOL .
                'For further information have a look at:' . PHP_EOL .
                'https://github.com/doctrine/DoctrineBundle/issues/673',
                0,
                \$driverException
            );
        }
    }

    /**
     * initialize the types
     */
    private function initializeTypes()
    {
        foreach (\$this->typesConfig as \$typeName => \$typeConfig) {
            if (Type::hasType(\$typeName)) {
                Type::overrideType(\$typeName, \$typeConfig['class']);
            } else {
                Type::addType(\$typeName, \$typeConfig['class']);
            }
        }

        \$this->initialized = true;
    }

    private function markTypesCommented(AbstractPlatform \$platform) : void
    {
        foreach (\$this->typesConfig as \$typeName => \$typeConfig) {
            \$type                   = Type::getType(\$typeName);
            \$requiresSQLCommentHint = \$type->requiresSQLCommentHint(\$platform);

            // Attribute is missing, make sure a type that doesn't require a comment is marked as commented
            // This is deprecated behaviour that will be dropped in 2.0.
            if (\$typeConfig['commented'] === null) {
                if (! \$requiresSQLCommentHint) {
                    @trigger_error(
                        sprintf(
                            'The type \"%s\" was implicitly marked as commented due to the configuration. This is deprecated and will be removed in DoctrineBundle 2.0. Either set the \"commented\" attribute in the configuration to \"false\" or mark the type as commented in \"%s::requiresSQLCommentHint().\"',
                            \$typeName,
                            get_class(\$type)
                        ),
                        E_USER_DEPRECATED
                    );

                    \$platform->markDoctrineTypeCommented(\$type);
                }

                continue;
            }

            // The following logic generates appropriate deprecation notices telling the user how to update their type configuration.
            if (\$typeConfig['commented']) {
                if (! \$requiresSQLCommentHint) {
                    @trigger_error(
                        sprintf(
                            'The type \"%s\" was marked as commented in its configuration but not in the type itself. This is deprecated and will be removed in DoctrineBundle 2.0. Please update the return value of \"%s::requiresSQLCommentHint().\"',
                            \$typeName,
                            get_class(\$type)
                        ),
                        E_USER_DEPRECATED
                    );

                    \$platform->markDoctrineTypeCommented(\$type);

                    continue;
                }

                @trigger_error(
                    sprintf(
                        'The type \"%s\" was explicitly marked as commented in its configuration. This is no longer necessary and will be removed in DoctrineBundle 2.0. Please remove the \"commented\" attribute from the type configuration.',
                        \$typeName
                    ),
                    E_USER_DEPRECATED
                );

                continue;
            }

            if (! \$requiresSQLCommentHint) {
                continue;
            }

            @trigger_error(
                sprintf(
                    'The type \"%s\" was marked as uncommented in its configuration but commented in the type itself. This is deprecated and will be removed in DoctrineBundle 2.0. Please update the return value of \"%s::requiresSQLCommentHint()\" or remove the \"commented\" attribute from the type configuration.',
                    \$typeName,
                    get_class(\$type)
                ),
                E_USER_DEPRECATED
            );
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/ConnectionFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle;

use Doctrine\\Common\\EventManager;
use Doctrine\\DBAL\\Configuration;
use Doctrine\\DBAL\\Connection;
use Doctrine\\DBAL\\DBALException;
use Doctrine\\DBAL\\DriverManager;
use Doctrine\\DBAL\\Exception\\DriverException;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Types\\Type;
use const E_USER_DEPRECATED;
use function get_class;
use function trigger_error;

class ConnectionFactory
{
    /** @var mixed[][] */
    private \$typesConfig = [];

    /** @var bool */
    private \$initialized = false;

    /**
     * @param mixed[][] \$typesConfig
     */
    public function __construct(array \$typesConfig)
    {
        \$this->typesConfig = \$typesConfig;
    }

    /**
     * Create a connection by name.
     *
     * @param mixed[]         \$params
     * @param string[]|Type[] \$mappingTypes
     *
     * @return Connection
     */
    public function createConnection(array \$params, Configuration \$config = null, EventManager \$eventManager = null, array \$mappingTypes = [])
    {
        if (! \$this->initialized) {
            \$this->initializeTypes();
        }

        \$connection = DriverManager::getConnection(\$params, \$config, \$eventManager);

        if (! empty(\$mappingTypes)) {
            \$platform = \$this->getDatabasePlatform(\$connection);
            foreach (\$mappingTypes as \$dbType => \$doctrineType) {
                \$platform->registerDoctrineTypeMapping(\$dbType, \$doctrineType);
            }
        }

        if (! empty(\$this->typesConfig)) {
            \$this->markTypesCommented(\$this->getDatabasePlatform(\$connection));
        }

        return \$connection;
    }

    /**
     * Try to get the database platform.
     *
     * This could fail if types should be registered to an predefined/unused connection
     * and the platform version is unknown.
     * For details have a look at DoctrineBundle issue #673.
     *
     * @return AbstractPlatform
     *
     * @throws DBALException
     */
    private function getDatabasePlatform(Connection \$connection)
    {
        try {
            return \$connection->getDatabasePlatform();
        } catch (DriverException \$driverException) {
            throw new DBALException(
                'An exception occured while establishing a connection to figure out your platform version.' . PHP_EOL .
                \"You can circumvent this by setting a 'server_version' configuration value\" . PHP_EOL . PHP_EOL .
                'For further information have a look at:' . PHP_EOL .
                'https://github.com/doctrine/DoctrineBundle/issues/673',
                0,
                \$driverException
            );
        }
    }

    /**
     * initialize the types
     */
    private function initializeTypes()
    {
        foreach (\$this->typesConfig as \$typeName => \$typeConfig) {
            if (Type::hasType(\$typeName)) {
                Type::overrideType(\$typeName, \$typeConfig['class']);
            } else {
                Type::addType(\$typeName, \$typeConfig['class']);
            }
        }

        \$this->initialized = true;
    }

    private function markTypesCommented(AbstractPlatform \$platform) : void
    {
        foreach (\$this->typesConfig as \$typeName => \$typeConfig) {
            \$type                   = Type::getType(\$typeName);
            \$requiresSQLCommentHint = \$type->requiresSQLCommentHint(\$platform);

            // Attribute is missing, make sure a type that doesn't require a comment is marked as commented
            // This is deprecated behaviour that will be dropped in 2.0.
            if (\$typeConfig['commented'] === null) {
                if (! \$requiresSQLCommentHint) {
                    @trigger_error(
                        sprintf(
                            'The type \"%s\" was implicitly marked as commented due to the configuration. This is deprecated and will be removed in DoctrineBundle 2.0. Either set the \"commented\" attribute in the configuration to \"false\" or mark the type as commented in \"%s::requiresSQLCommentHint().\"',
                            \$typeName,
                            get_class(\$type)
                        ),
                        E_USER_DEPRECATED
                    );

                    \$platform->markDoctrineTypeCommented(\$type);
                }

                continue;
            }

            // The following logic generates appropriate deprecation notices telling the user how to update their type configuration.
            if (\$typeConfig['commented']) {
                if (! \$requiresSQLCommentHint) {
                    @trigger_error(
                        sprintf(
                            'The type \"%s\" was marked as commented in its configuration but not in the type itself. This is deprecated and will be removed in DoctrineBundle 2.0. Please update the return value of \"%s::requiresSQLCommentHint().\"',
                            \$typeName,
                            get_class(\$type)
                        ),
                        E_USER_DEPRECATED
                    );

                    \$platform->markDoctrineTypeCommented(\$type);

                    continue;
                }

                @trigger_error(
                    sprintf(
                        'The type \"%s\" was explicitly marked as commented in its configuration. This is no longer necessary and will be removed in DoctrineBundle 2.0. Please remove the \"commented\" attribute from the type configuration.',
                        \$typeName
                    ),
                    E_USER_DEPRECATED
                );

                continue;
            }

            if (! \$requiresSQLCommentHint) {
                continue;
            }

            @trigger_error(
                sprintf(
                    'The type \"%s\" was marked as uncommented in its configuration but commented in the type itself. This is deprecated and will be removed in DoctrineBundle 2.0. Please update the return value of \"%s::requiresSQLCommentHint()\" or remove the \"commented\" attribute from the type configuration.',
                    \$typeName,
                    get_class(\$type)
                ),
                E_USER_DEPRECATED
            );
        }
    }
}
", "vendor/doctrine/doctrine-bundle/ConnectionFactory.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/ConnectionFactory.php");
    }
}
