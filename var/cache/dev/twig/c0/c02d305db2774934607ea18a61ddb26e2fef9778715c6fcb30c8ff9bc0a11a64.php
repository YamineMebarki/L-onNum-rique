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

/* vendor/symfony/doctrine-bridge/Test/DoctrineTestHelper.php */
class __TwigTemplate_90fcb0ef437f693ec7a51921a3645d7b77d7c2a07a621849eb67efb178abf6e6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Test/DoctrineTestHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Test/DoctrineTestHelper.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Doctrine\\Test;

use Doctrine\\Common\\Annotations\\AnnotationReader;
use Doctrine\\Common\\Cache\\ArrayCache;
use Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain;
use Doctrine\\Common\\Persistence\\Mapping\\Driver\\SymfonyFileLocator;
use Doctrine\\ORM\\Configuration;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver;
use Doctrine\\ORM\\Mapping\\Driver\\XmlDriver;
use PHPUnit\\Framework\\TestCase;

/**
 * Provides utility functions needed in tests.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class DoctrineTestHelper
{
    /**
     * Returns an entity manager for testing.
     *
     * @return EntityManager
     */
    public static function createTestEntityManager(Configuration \$config = null)
    {
        if (!\\extension_loaded('pdo_sqlite')) {
            TestCase::markTestSkipped('Extension pdo_sqlite is required.');
        }

        if (null === \$config) {
            \$config = self::createTestConfiguration();
        }

        \$params = [
            'driver' => 'pdo_sqlite',
            'memory' => true,
        ];

        return EntityManager::create(\$params, \$config);
    }

    /**
     * @return Configuration
     */
    public static function createTestConfiguration()
    {
        \$config = new Configuration();
        \$config->setEntityNamespaces(['SymfonyTestsDoctrine' => 'Symfony\\Bridge\\Doctrine\\Tests\\Fixtures']);
        \$config->setAutoGenerateProxyClasses(true);
        \$config->setProxyDir(sys_get_temp_dir());
        \$config->setProxyNamespace('SymfonyTests\\Doctrine');
        \$config->setMetadataDriverImpl(new AnnotationDriver(new AnnotationReader()));
        \$config->setQueryCacheImpl(new ArrayCache());
        \$config->setMetadataCacheImpl(new ArrayCache());

        return \$config;
    }

    /**
     * @return Configuration
     */
    public static function createTestConfigurationWithXmlLoader()
    {
        \$config = static::createTestConfiguration();

        \$driverChain = new MappingDriverChain();
        \$driverChain->addDriver(
            new XmlDriver(
                new SymfonyFileLocator(
                    [__DIR__.'/../Tests/Resources/orm' => 'Symfony\\\\Bridge\\\\Doctrine\\\\Tests\\\\Fixtures'], '.orm.xml'
                )
            ),
            'Symfony\\\\Bridge\\\\Doctrine\\\\Tests\\\\Fixtures'
        );

        \$config->setMetadataDriverImpl(\$driverChain);

        return \$config;
    }

    /**
     * This class cannot be instantiated.
     */
    private function __construct()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Test/DoctrineTestHelper.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bridge\\Doctrine\\Test;

use Doctrine\\Common\\Annotations\\AnnotationReader;
use Doctrine\\Common\\Cache\\ArrayCache;
use Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain;
use Doctrine\\Common\\Persistence\\Mapping\\Driver\\SymfonyFileLocator;
use Doctrine\\ORM\\Configuration;
use Doctrine\\ORM\\EntityManager;
use Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver;
use Doctrine\\ORM\\Mapping\\Driver\\XmlDriver;
use PHPUnit\\Framework\\TestCase;

/**
 * Provides utility functions needed in tests.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class DoctrineTestHelper
{
    /**
     * Returns an entity manager for testing.
     *
     * @return EntityManager
     */
    public static function createTestEntityManager(Configuration \$config = null)
    {
        if (!\\extension_loaded('pdo_sqlite')) {
            TestCase::markTestSkipped('Extension pdo_sqlite is required.');
        }

        if (null === \$config) {
            \$config = self::createTestConfiguration();
        }

        \$params = [
            'driver' => 'pdo_sqlite',
            'memory' => true,
        ];

        return EntityManager::create(\$params, \$config);
    }

    /**
     * @return Configuration
     */
    public static function createTestConfiguration()
    {
        \$config = new Configuration();
        \$config->setEntityNamespaces(['SymfonyTestsDoctrine' => 'Symfony\\Bridge\\Doctrine\\Tests\\Fixtures']);
        \$config->setAutoGenerateProxyClasses(true);
        \$config->setProxyDir(sys_get_temp_dir());
        \$config->setProxyNamespace('SymfonyTests\\Doctrine');
        \$config->setMetadataDriverImpl(new AnnotationDriver(new AnnotationReader()));
        \$config->setQueryCacheImpl(new ArrayCache());
        \$config->setMetadataCacheImpl(new ArrayCache());

        return \$config;
    }

    /**
     * @return Configuration
     */
    public static function createTestConfigurationWithXmlLoader()
    {
        \$config = static::createTestConfiguration();

        \$driverChain = new MappingDriverChain();
        \$driverChain->addDriver(
            new XmlDriver(
                new SymfonyFileLocator(
                    [__DIR__.'/../Tests/Resources/orm' => 'Symfony\\\\Bridge\\\\Doctrine\\\\Tests\\\\Fixtures'], '.orm.xml'
                )
            ),
            'Symfony\\\\Bridge\\\\Doctrine\\\\Tests\\\\Fixtures'
        );

        \$config->setMetadataDriverImpl(\$driverChain);

        return \$config;
    }

    /**
     * This class cannot be instantiated.
     */
    private function __construct()
    {
    }
}
", "vendor/symfony/doctrine-bridge/Test/DoctrineTestHelper.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Test/DoctrineTestHelper.php");
    }
}
