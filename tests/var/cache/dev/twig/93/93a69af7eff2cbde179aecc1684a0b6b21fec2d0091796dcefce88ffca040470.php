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

/* vendor/symfony/framework-bundle/Tests/CacheWarmer/AnnotationsCacheWarmerTest.php */
class __TwigTemplate_7b0df5421007b67d977b0776a0b4cff8d21dc4e2aa3b92b272687cf5c91545cc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/CacheWarmer/AnnotationsCacheWarmerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/CacheWarmer/AnnotationsCacheWarmerTest.php"));

        // line 1
        echo "<?php

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\CacheWarmer;

use Doctrine\\Common\\Annotations\\AnnotationReader;
use Doctrine\\Common\\Annotations\\CachedReader;
use Doctrine\\Common\\Annotations\\Reader;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\AnnotationsCacheWarmer;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\Cache\\Adapter\\NullAdapter;
use Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter;
use Symfony\\Component\\Cache\\DoctrineProvider;
use Symfony\\Component\\Filesystem\\Filesystem;

class AnnotationsCacheWarmerTest extends TestCase
{
    private \$cacheDir;

    protected function setUp(): void
    {
        \$this->cacheDir = sys_get_temp_dir().'/'.uniqid();
        \$fs = new Filesystem();
        \$fs->mkdir(\$this->cacheDir);
        parent::setUp();
    }

    protected function tearDown(): void
    {
        \$fs = new Filesystem();
        \$fs->remove(\$this->cacheDir);
        parent::tearDown();
    }

    public function testAnnotationsCacheWarmerWithDebugDisabled()
    {
        file_put_contents(\$this->cacheDir.'/annotations.map', sprintf('<?php return %s;', var_export([__CLASS__], true)));
        \$cacheFile = tempnam(\$this->cacheDir, __FUNCTION__);
        \$reader = new AnnotationReader();
        \$warmer = new AnnotationsCacheWarmer(\$reader, \$cacheFile);
        \$warmer->warmUp(\$this->cacheDir);
        \$this->assertFileExists(\$cacheFile);

        // Assert cache is valid
        \$reader = new CachedReader(
            \$this->getReadOnlyReader(),
            new DoctrineProvider(new PhpArrayAdapter(\$cacheFile, new NullAdapter()))
        );
        \$refClass = new \\ReflectionClass(\$this);
        \$reader->getClassAnnotations(\$refClass);
        \$reader->getMethodAnnotations(\$refClass->getMethod(__FUNCTION__));
        \$reader->getPropertyAnnotations(\$refClass->getProperty('cacheDir'));
    }

    public function testAnnotationsCacheWarmerWithDebugEnabled()
    {
        file_put_contents(\$this->cacheDir.'/annotations.map', sprintf('<?php return %s;', var_export([__CLASS__], true)));
        \$cacheFile = tempnam(\$this->cacheDir, __FUNCTION__);
        \$reader = new AnnotationReader();
        \$warmer = new AnnotationsCacheWarmer(\$reader, \$cacheFile, null, true);
        \$warmer->warmUp(\$this->cacheDir);
        \$this->assertFileExists(\$cacheFile);
        // Assert cache is valid
        \$reader = new CachedReader(
            \$this->getReadOnlyReader(),
            new DoctrineProvider(new PhpArrayAdapter(\$cacheFile, new NullAdapter())),
            true
        );
        \$refClass = new \\ReflectionClass(\$this);
        \$reader->getClassAnnotations(\$refClass);
        \$reader->getMethodAnnotations(\$refClass->getMethod(__FUNCTION__));
        \$reader->getPropertyAnnotations(\$refClass->getProperty('cacheDir'));
    }

    /**
     * DevLaon that the cache warming process is not broken if a class loader
     * throws an exception (on class / file not found for example).
     */
    public function testClassAutoloadException()
    {
        \$this->assertFalse(class_exists(\$annotatedClass = 'C\\C\\C', false));

        file_put_contents(\$this->cacheDir.'/annotations.map', sprintf('<?php return %s;', var_export([\$annotatedClass], true)));
        \$warmer = new AnnotationsCacheWarmer(new AnnotationReader(), tempnam(\$this->cacheDir, __FUNCTION__));

        spl_autoload_register(\$classLoader = function (\$class) use (\$annotatedClass) {
            if (\$class === \$annotatedClass) {
                throw new \\DomainException('This exception should be caught by the warmer.');
            }
        }, true, true);

        \$warmer->warmUp(\$this->cacheDir);

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

        \$this->assertFalse(class_exists(\$annotatedClass = 'AClassThatDoesNotExist_FWB_CacheWarmer_AnnotationsCacheWarmerTest', false));

        file_put_contents(\$this->cacheDir.'/annotations.map', sprintf('<?php return %s;', var_export([\$annotatedClass], true)));
        \$warmer = new AnnotationsCacheWarmer(new AnnotationReader(), tempnam(\$this->cacheDir, __FUNCTION__));

        spl_autoload_register(\$classLoader = function (\$class) use (\$annotatedClass) {
            if (\$class === \$annotatedClass) {
                eval('class '.\$annotatedClass.'{}');
                throw new \\DomainException('This exception should not be caught by the warmer.');
            }
        }, true, true);

        \$warmer->warmUp(\$this->cacheDir);

        spl_autoload_unregister(\$classLoader);
    }

    /**
     * @return MockObject|Reader
     */
    private function getReadOnlyReader()
    {
        \$readerMock = \$this->getMockBuilder('Doctrine\\Common\\Annotations\\Reader')->getMock();
        \$readerMock->expects(\$this->exactly(0))->method('getClassAnnotations');
        \$readerMock->expects(\$this->exactly(0))->method('getClassAnnotation');
        \$readerMock->expects(\$this->exactly(0))->method('getMethodAnnotations');
        \$readerMock->expects(\$this->exactly(0))->method('getMethodAnnotation');
        \$readerMock->expects(\$this->exactly(0))->method('getPropertyAnnotations');
        \$readerMock->expects(\$this->exactly(0))->method('getPropertyAnnotation');

        return \$readerMock;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/CacheWarmer/AnnotationsCacheWarmerTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\CacheWarmer;

use Doctrine\\Common\\Annotations\\AnnotationReader;
use Doctrine\\Common\\Annotations\\CachedReader;
use Doctrine\\Common\\Annotations\\Reader;
use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\AnnotationsCacheWarmer;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\Cache\\Adapter\\NullAdapter;
use Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter;
use Symfony\\Component\\Cache\\DoctrineProvider;
use Symfony\\Component\\Filesystem\\Filesystem;

class AnnotationsCacheWarmerTest extends TestCase
{
    private \$cacheDir;

    protected function setUp(): void
    {
        \$this->cacheDir = sys_get_temp_dir().'/'.uniqid();
        \$fs = new Filesystem();
        \$fs->mkdir(\$this->cacheDir);
        parent::setUp();
    }

    protected function tearDown(): void
    {
        \$fs = new Filesystem();
        \$fs->remove(\$this->cacheDir);
        parent::tearDown();
    }

    public function testAnnotationsCacheWarmerWithDebugDisabled()
    {
        file_put_contents(\$this->cacheDir.'/annotations.map', sprintf('<?php return %s;', var_export([__CLASS__], true)));
        \$cacheFile = tempnam(\$this->cacheDir, __FUNCTION__);
        \$reader = new AnnotationReader();
        \$warmer = new AnnotationsCacheWarmer(\$reader, \$cacheFile);
        \$warmer->warmUp(\$this->cacheDir);
        \$this->assertFileExists(\$cacheFile);

        // Assert cache is valid
        \$reader = new CachedReader(
            \$this->getReadOnlyReader(),
            new DoctrineProvider(new PhpArrayAdapter(\$cacheFile, new NullAdapter()))
        );
        \$refClass = new \\ReflectionClass(\$this);
        \$reader->getClassAnnotations(\$refClass);
        \$reader->getMethodAnnotations(\$refClass->getMethod(__FUNCTION__));
        \$reader->getPropertyAnnotations(\$refClass->getProperty('cacheDir'));
    }

    public function testAnnotationsCacheWarmerWithDebugEnabled()
    {
        file_put_contents(\$this->cacheDir.'/annotations.map', sprintf('<?php return %s;', var_export([__CLASS__], true)));
        \$cacheFile = tempnam(\$this->cacheDir, __FUNCTION__);
        \$reader = new AnnotationReader();
        \$warmer = new AnnotationsCacheWarmer(\$reader, \$cacheFile, null, true);
        \$warmer->warmUp(\$this->cacheDir);
        \$this->assertFileExists(\$cacheFile);
        // Assert cache is valid
        \$reader = new CachedReader(
            \$this->getReadOnlyReader(),
            new DoctrineProvider(new PhpArrayAdapter(\$cacheFile, new NullAdapter())),
            true
        );
        \$refClass = new \\ReflectionClass(\$this);
        \$reader->getClassAnnotations(\$refClass);
        \$reader->getMethodAnnotations(\$refClass->getMethod(__FUNCTION__));
        \$reader->getPropertyAnnotations(\$refClass->getProperty('cacheDir'));
    }

    /**
     * DevLaon that the cache warming process is not broken if a class loader
     * throws an exception (on class / file not found for example).
     */
    public function testClassAutoloadException()
    {
        \$this->assertFalse(class_exists(\$annotatedClass = 'C\\C\\C', false));

        file_put_contents(\$this->cacheDir.'/annotations.map', sprintf('<?php return %s;', var_export([\$annotatedClass], true)));
        \$warmer = new AnnotationsCacheWarmer(new AnnotationReader(), tempnam(\$this->cacheDir, __FUNCTION__));

        spl_autoload_register(\$classLoader = function (\$class) use (\$annotatedClass) {
            if (\$class === \$annotatedClass) {
                throw new \\DomainException('This exception should be caught by the warmer.');
            }
        }, true, true);

        \$warmer->warmUp(\$this->cacheDir);

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

        \$this->assertFalse(class_exists(\$annotatedClass = 'AClassThatDoesNotExist_FWB_CacheWarmer_AnnotationsCacheWarmerTest', false));

        file_put_contents(\$this->cacheDir.'/annotations.map', sprintf('<?php return %s;', var_export([\$annotatedClass], true)));
        \$warmer = new AnnotationsCacheWarmer(new AnnotationReader(), tempnam(\$this->cacheDir, __FUNCTION__));

        spl_autoload_register(\$classLoader = function (\$class) use (\$annotatedClass) {
            if (\$class === \$annotatedClass) {
                eval('class '.\$annotatedClass.'{}');
                throw new \\DomainException('This exception should not be caught by the warmer.');
            }
        }, true, true);

        \$warmer->warmUp(\$this->cacheDir);

        spl_autoload_unregister(\$classLoader);
    }

    /**
     * @return MockObject|Reader
     */
    private function getReadOnlyReader()
    {
        \$readerMock = \$this->getMockBuilder('Doctrine\\Common\\Annotations\\Reader')->getMock();
        \$readerMock->expects(\$this->exactly(0))->method('getClassAnnotations');
        \$readerMock->expects(\$this->exactly(0))->method('getClassAnnotation');
        \$readerMock->expects(\$this->exactly(0))->method('getMethodAnnotations');
        \$readerMock->expects(\$this->exactly(0))->method('getMethodAnnotation');
        \$readerMock->expects(\$this->exactly(0))->method('getPropertyAnnotations');
        \$readerMock->expects(\$this->exactly(0))->method('getPropertyAnnotation');

        return \$readerMock;
    }
}
", "vendor/symfony/framework-bundle/Tests/CacheWarmer/AnnotationsCacheWarmerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/CacheWarmer/AnnotationsCacheWarmerTest.php");
    }
}
