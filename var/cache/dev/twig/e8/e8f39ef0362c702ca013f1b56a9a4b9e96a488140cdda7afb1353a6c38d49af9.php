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

/* vendor/symfony/framework-bundle/Tests/CacheWarmer/SerializerCacheWarmerTest.php */
class __TwigTemplate_11668ba5e61ae7bc69a484f96955dbacaf0282a68b12be5c68185c6ccbf92983 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/CacheWarmer/SerializerCacheWarmerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/CacheWarmer/SerializerCacheWarmerTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\CacheWarmer;

use Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\SerializerCacheWarmer;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\Cache\\Adapter\\NullAdapter;
use Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\CacheClassMetadataFactory;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\XmlFileLoader;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\YamlFileLoader;

class SerializerCacheWarmerTest extends TestCase
{
    public function testWarmUp()
    {
        if (!class_exists(CacheClassMetadataFactory::class) || !method_exists(XmlFileLoader::class, 'getMappedClasses') || !method_exists(YamlFileLoader::class, 'getMappedClasses')) {
            \$this->markTestSkipped('The Serializer default cache warmer has been introduced in the Serializer Component version 3.2.');
        }

        \$loaders = [
            new XmlFileLoader(__DIR__.'/../Fixtures/Serialization/Resources/person.xml'),
            new YamlFileLoader(__DIR__.'/../Fixtures/Serialization/Resources/author.yml'),
        ];

        \$file = sys_get_temp_dir().'/cache-serializer.php';
        @unlink(\$file);

        \$warmer = new SerializerCacheWarmer(\$loaders, \$file);
        \$warmer->warmUp(\\dirname(\$file));

        \$this->assertFileExists(\$file);

        \$arrayPool = new PhpArrayAdapter(\$file, new NullAdapter());

        \$this->assertTrue(\$arrayPool->getItem('Symfony_Bundle_FrameworkBundle_Tests_Fixtures_Serialization_Person')->isHit());
        \$this->assertTrue(\$arrayPool->getItem('Symfony_Bundle_FrameworkBundle_Tests_Fixtures_Serialization_Author')->isHit());
    }

    public function testWarmUpWithoutLoader()
    {
        if (!class_exists(CacheClassMetadataFactory::class) || !method_exists(XmlFileLoader::class, 'getMappedClasses') || !method_exists(YamlFileLoader::class, 'getMappedClasses')) {
            \$this->markTestSkipped('The Serializer default cache warmer has been introduced in the Serializer Component version 3.2.');
        }

        \$file = sys_get_temp_dir().'/cache-serializer-without-loader.php';
        @unlink(\$file);

        \$warmer = new SerializerCacheWarmer([], \$file);
        \$warmer->warmUp(\\dirname(\$file));

        \$this->assertFileExists(\$file);
    }

    /**
     * DevLaon that the cache warming process is not broken if a class loader
     * throws an exception (on class / file not found for example).
     */
    public function testClassAutoloadException()
    {
        if (!class_exists(CacheClassMetadataFactory::class) || !method_exists(XmlFileLoader::class, 'getMappedClasses') || !method_exists(YamlFileLoader::class, 'getMappedClasses')) {
            \$this->markTestSkipped('The Serializer default cache warmer has been introduced in the Serializer Component version 3.2.');
        }

        \$this->assertFalse(class_exists(\$mappedClass = 'AClassThatDoesNotExist_FWB_CacheWarmer_SerializerCacheWarmerTest', false));

        \$warmer = new SerializerCacheWarmer([new YamlFileLoader(__DIR__.'/../Fixtures/Serialization/Resources/does_not_exist.yaml')], tempnam(sys_get_temp_dir(), __FUNCTION__));

        spl_autoload_register(\$classLoader = function (\$class) use (\$mappedClass) {
            if (\$class === \$mappedClass) {
                throw new \\DomainException('This exception should be caught by the warmer.');
            }
        }, true, true);

        \$warmer->warmUp('foo');

        spl_autoload_unregister(\$classLoader);
    }

    /**
     * DevLaon that the cache warming process is broken if a class loader throws an
     * exception but that is unrelated to the class load.
     */
    public function testClassAutoloadExceptionWithUnrelatedException()
    {
        \$this->expectException(\\DomainException::class);
        \$this->expectExceptionMessage('This exception should not be caught by the warmer.');

        if (!class_exists(CacheClassMetadataFactory::class) || !method_exists(XmlFileLoader::class, 'getMappedClasses') || !method_exists(YamlFileLoader::class, 'getMappedClasses')) {
            \$this->markTestSkipped('The Serializer default cache warmer has been introduced in the Serializer Component version 3.2.');
        }

        \$this->assertFalse(class_exists(\$mappedClass = 'AClassThatDoesNotExist_FWB_CacheWarmer_SerializerCacheWarmerTest', false));

        \$warmer = new SerializerCacheWarmer([new YamlFileLoader(__DIR__.'/../Fixtures/Serialization/Resources/does_not_exist.yaml')], tempnam(sys_get_temp_dir(), __FUNCTION__));

        spl_autoload_register(\$classLoader = function (\$class) use (\$mappedClass) {
            if (\$class === \$mappedClass) {
                eval('class '.\$mappedClass.'{}');
                throw new \\DomainException('This exception should not be caught by the warmer.');
            }
        }, true, true);

        \$warmer->warmUp('foo');

        spl_autoload_unregister(\$classLoader);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/CacheWarmer/SerializerCacheWarmerTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\CacheWarmer;

use Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\SerializerCacheWarmer;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\Cache\\Adapter\\NullAdapter;
use Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\CacheClassMetadataFactory;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\XmlFileLoader;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\YamlFileLoader;

class SerializerCacheWarmerTest extends TestCase
{
    public function testWarmUp()
    {
        if (!class_exists(CacheClassMetadataFactory::class) || !method_exists(XmlFileLoader::class, 'getMappedClasses') || !method_exists(YamlFileLoader::class, 'getMappedClasses')) {
            \$this->markTestSkipped('The Serializer default cache warmer has been introduced in the Serializer Component version 3.2.');
        }

        \$loaders = [
            new XmlFileLoader(__DIR__.'/../Fixtures/Serialization/Resources/person.xml'),
            new YamlFileLoader(__DIR__.'/../Fixtures/Serialization/Resources/author.yml'),
        ];

        \$file = sys_get_temp_dir().'/cache-serializer.php';
        @unlink(\$file);

        \$warmer = new SerializerCacheWarmer(\$loaders, \$file);
        \$warmer->warmUp(\\dirname(\$file));

        \$this->assertFileExists(\$file);

        \$arrayPool = new PhpArrayAdapter(\$file, new NullAdapter());

        \$this->assertTrue(\$arrayPool->getItem('Symfony_Bundle_FrameworkBundle_Tests_Fixtures_Serialization_Person')->isHit());
        \$this->assertTrue(\$arrayPool->getItem('Symfony_Bundle_FrameworkBundle_Tests_Fixtures_Serialization_Author')->isHit());
    }

    public function testWarmUpWithoutLoader()
    {
        if (!class_exists(CacheClassMetadataFactory::class) || !method_exists(XmlFileLoader::class, 'getMappedClasses') || !method_exists(YamlFileLoader::class, 'getMappedClasses')) {
            \$this->markTestSkipped('The Serializer default cache warmer has been introduced in the Serializer Component version 3.2.');
        }

        \$file = sys_get_temp_dir().'/cache-serializer-without-loader.php';
        @unlink(\$file);

        \$warmer = new SerializerCacheWarmer([], \$file);
        \$warmer->warmUp(\\dirname(\$file));

        \$this->assertFileExists(\$file);
    }

    /**
     * DevLaon that the cache warming process is not broken if a class loader
     * throws an exception (on class / file not found for example).
     */
    public function testClassAutoloadException()
    {
        if (!class_exists(CacheClassMetadataFactory::class) || !method_exists(XmlFileLoader::class, 'getMappedClasses') || !method_exists(YamlFileLoader::class, 'getMappedClasses')) {
            \$this->markTestSkipped('The Serializer default cache warmer has been introduced in the Serializer Component version 3.2.');
        }

        \$this->assertFalse(class_exists(\$mappedClass = 'AClassThatDoesNotExist_FWB_CacheWarmer_SerializerCacheWarmerTest', false));

        \$warmer = new SerializerCacheWarmer([new YamlFileLoader(__DIR__.'/../Fixtures/Serialization/Resources/does_not_exist.yaml')], tempnam(sys_get_temp_dir(), __FUNCTION__));

        spl_autoload_register(\$classLoader = function (\$class) use (\$mappedClass) {
            if (\$class === \$mappedClass) {
                throw new \\DomainException('This exception should be caught by the warmer.');
            }
        }, true, true);

        \$warmer->warmUp('foo');

        spl_autoload_unregister(\$classLoader);
    }

    /**
     * DevLaon that the cache warming process is broken if a class loader throws an
     * exception but that is unrelated to the class load.
     */
    public function testClassAutoloadExceptionWithUnrelatedException()
    {
        \$this->expectException(\\DomainException::class);
        \$this->expectExceptionMessage('This exception should not be caught by the warmer.');

        if (!class_exists(CacheClassMetadataFactory::class) || !method_exists(XmlFileLoader::class, 'getMappedClasses') || !method_exists(YamlFileLoader::class, 'getMappedClasses')) {
            \$this->markTestSkipped('The Serializer default cache warmer has been introduced in the Serializer Component version 3.2.');
        }

        \$this->assertFalse(class_exists(\$mappedClass = 'AClassThatDoesNotExist_FWB_CacheWarmer_SerializerCacheWarmerTest', false));

        \$warmer = new SerializerCacheWarmer([new YamlFileLoader(__DIR__.'/../Fixtures/Serialization/Resources/does_not_exist.yaml')], tempnam(sys_get_temp_dir(), __FUNCTION__));

        spl_autoload_register(\$classLoader = function (\$class) use (\$mappedClass) {
            if (\$class === \$mappedClass) {
                eval('class '.\$mappedClass.'{}');
                throw new \\DomainException('This exception should not be caught by the warmer.');
            }
        }, true, true);

        \$warmer->warmUp('foo');

        spl_autoload_unregister(\$classLoader);
    }
}
", "vendor/symfony/framework-bundle/Tests/CacheWarmer/SerializerCacheWarmerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/CacheWarmer/SerializerCacheWarmerTest.php");
    }
}
