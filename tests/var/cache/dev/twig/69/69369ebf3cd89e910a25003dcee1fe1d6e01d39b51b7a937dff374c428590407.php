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

/* vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/LazySchemaDiffProvider.php */
class __TwigTemplate_bb7af2289bed48148375be7ce17742e6c9c94ff16b6fd6e98004c9fca9167806 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/LazySchemaDiffProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/LazySchemaDiffProvider.php"));

        // line 1
        echo "<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Provider;

use Doctrine\\DBAL\\Schema\\Schema;
use ProxyManager\\Configuration;
use ProxyManager\\Factory\\LazyLoadingValueHolderFactory;
use ProxyManager\\GeneratorStrategy\\EvaluatingGeneratorStrategy;
use ProxyManager\\Proxy\\LazyLoadingInterface;

/**
 * The LazySchemaDiffProvider is responsible for lazily generating the from schema when diffing two schemas
 * to produce a migration.
 *
 * @internal
 */
class LazySchemaDiffProvider implements SchemaDiffProviderInterface
{
    /** @var LazyLoadingValueHolderFactory */
    private \$proxyFactory;

    /** @var SchemaDiffProviderInterface */
    private \$originalSchemaManipulator;

    public function __construct(
        LazyLoadingValueHolderFactory \$proxyFactory,
        SchemaDiffProviderInterface \$originalSchemaManipulator
    ) {
        \$this->proxyFactory              = \$proxyFactory;
        \$this->originalSchemaManipulator = \$originalSchemaManipulator;
    }

    public static function fromDefaultProxyFactoryConfiguration(
        SchemaDiffProviderInterface \$originalSchemaManipulator
    ) : LazySchemaDiffProvider {
        \$proxyConfig = new Configuration();
        \$proxyConfig->setGeneratorStrategy(new EvaluatingGeneratorStrategy());
        \$proxyFactory = new LazyLoadingValueHolderFactory(\$proxyConfig);

        return new LazySchemaDiffProvider(\$proxyFactory, \$originalSchemaManipulator);
    }

    public function createFromSchema() : Schema
    {
        \$originalSchemaManipulator = \$this->originalSchemaManipulator;

        return \$this->proxyFactory->createProxy(
            Schema::class,
            static function (&\$wrappedObject, \$proxy, \$method, array \$parameters, &\$initializer) use (\$originalSchemaManipulator) {
                \$initializer = null;

                \$wrappedObject = \$originalSchemaManipulator->createFromSchema();

                return true;
            }
        );
    }

    public function createToSchema(Schema \$fromSchema) : Schema
    {
        \$originalSchemaManipulator = \$this->originalSchemaManipulator;

        if (\$fromSchema instanceof LazyLoadingInterface && ! \$fromSchema->isProxyInitialized()) {
            return \$this->proxyFactory->createProxy(
                Schema::class,
                static function (& \$wrappedObject, \$proxy, \$method, array \$parameters, & \$initializer) use (\$originalSchemaManipulator, \$fromSchema) {
                    \$initializer = null;

                    \$wrappedObject = \$originalSchemaManipulator->createToSchema(\$fromSchema);

                    return true;
                }
            );
        }

        return \$this->originalSchemaManipulator->createToSchema(\$fromSchema);
    }

    /** @return string[] */
    public function getSqlDiffToMigrate(Schema \$fromSchema, Schema \$toSchema) : array
    {
        if (\$toSchema instanceof LazyLoadingInterface
            && ! \$toSchema->isProxyInitialized()) {
            return [];
        }

        return \$this->originalSchemaManipulator->getSqlDiffToMigrate(\$fromSchema, \$toSchema);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/LazySchemaDiffProvider.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

declare(strict_types=1);

namespace Doctrine\\Migrations\\Provider;

use Doctrine\\DBAL\\Schema\\Schema;
use ProxyManager\\Configuration;
use ProxyManager\\Factory\\LazyLoadingValueHolderFactory;
use ProxyManager\\GeneratorStrategy\\EvaluatingGeneratorStrategy;
use ProxyManager\\Proxy\\LazyLoadingInterface;

/**
 * The LazySchemaDiffProvider is responsible for lazily generating the from schema when diffing two schemas
 * to produce a migration.
 *
 * @internal
 */
class LazySchemaDiffProvider implements SchemaDiffProviderInterface
{
    /** @var LazyLoadingValueHolderFactory */
    private \$proxyFactory;

    /** @var SchemaDiffProviderInterface */
    private \$originalSchemaManipulator;

    public function __construct(
        LazyLoadingValueHolderFactory \$proxyFactory,
        SchemaDiffProviderInterface \$originalSchemaManipulator
    ) {
        \$this->proxyFactory              = \$proxyFactory;
        \$this->originalSchemaManipulator = \$originalSchemaManipulator;
    }

    public static function fromDefaultProxyFactoryConfiguration(
        SchemaDiffProviderInterface \$originalSchemaManipulator
    ) : LazySchemaDiffProvider {
        \$proxyConfig = new Configuration();
        \$proxyConfig->setGeneratorStrategy(new EvaluatingGeneratorStrategy());
        \$proxyFactory = new LazyLoadingValueHolderFactory(\$proxyConfig);

        return new LazySchemaDiffProvider(\$proxyFactory, \$originalSchemaManipulator);
    }

    public function createFromSchema() : Schema
    {
        \$originalSchemaManipulator = \$this->originalSchemaManipulator;

        return \$this->proxyFactory->createProxy(
            Schema::class,
            static function (&\$wrappedObject, \$proxy, \$method, array \$parameters, &\$initializer) use (\$originalSchemaManipulator) {
                \$initializer = null;

                \$wrappedObject = \$originalSchemaManipulator->createFromSchema();

                return true;
            }
        );
    }

    public function createToSchema(Schema \$fromSchema) : Schema
    {
        \$originalSchemaManipulator = \$this->originalSchemaManipulator;

        if (\$fromSchema instanceof LazyLoadingInterface && ! \$fromSchema->isProxyInitialized()) {
            return \$this->proxyFactory->createProxy(
                Schema::class,
                static function (& \$wrappedObject, \$proxy, \$method, array \$parameters, & \$initializer) use (\$originalSchemaManipulator, \$fromSchema) {
                    \$initializer = null;

                    \$wrappedObject = \$originalSchemaManipulator->createToSchema(\$fromSchema);

                    return true;
                }
            );
        }

        return \$this->originalSchemaManipulator->createToSchema(\$fromSchema);
    }

    /** @return string[] */
    public function getSqlDiffToMigrate(Schema \$fromSchema, Schema \$toSchema) : array
    {
        if (\$toSchema instanceof LazyLoadingInterface
            && ! \$toSchema->isProxyInitialized()) {
            return [];
        }

        return \$this->originalSchemaManipulator->getSqlDiffToMigrate(\$fromSchema, \$toSchema);
    }
}
", "vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/LazySchemaDiffProvider.php", "/var/www/public/DevLaon/templates/vendor/doctrine/migrations/lib/Doctrine/Migrations/Provider/LazySchemaDiffProvider.php");
    }
}
