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

/* vendor/symfony/framework-bundle/Tests/CacheWarmer/ValidatorCacheWarmerTest.php */
class __TwigTemplate_7207902f235a18f2ee111cb0150474097b47d9e09fd53bbada46833ae6cd0572 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/CacheWarmer/ValidatorCacheWarmerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/CacheWarmer/ValidatorCacheWarmerTest.php"));

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

use Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\ValidatorCacheWarmer;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\Cache\\Adapter\\NullAdapter;
use Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\ValidatorBuilder;

class ValidatorCacheWarmerTest extends TestCase
{
    public function testWarmUp()
    {
        \$validatorBuilder = new ValidatorBuilder();
        \$validatorBuilder->addXmlMapping(__DIR__.'/../Fixtures/Validation/Resources/person.xml');
        \$validatorBuilder->addYamlMapping(__DIR__.'/../Fixtures/Validation/Resources/author.yml');
        \$validatorBuilder->addMethodMapping('loadValidatorMetadata');
        \$validatorBuilder->enableAnnotationMapping();

        \$file = sys_get_temp_dir().'/cache-validator.php';
        @unlink(\$file);

        \$warmer = new ValidatorCacheWarmer(\$validatorBuilder, \$file);
        \$warmer->warmUp(\\dirname(\$file));

        \$this->assertFileExists(\$file);

        \$arrayPool = new PhpArrayAdapter(\$file, new NullAdapter());

        \$this->assertTrue(\$arrayPool->getItem('Symfony.Bundle.FrameworkBundle.Tests.Fixtures.Validation.Person')->isHit());
        \$this->assertTrue(\$arrayPool->getItem('Symfony.Bundle.FrameworkBundle.Tests.Fixtures.Validation.Author')->isHit());
    }

    public function testWarmUpWithAnnotations()
    {
        \$validatorBuilder = new ValidatorBuilder();
        \$validatorBuilder->addYamlMapping(__DIR__.'/../Fixtures/Validation/Resources/categories.yml');
        \$validatorBuilder->enableAnnotationMapping();

        \$file = sys_get_temp_dir().'/cache-validator-with-annotations.php';
        @unlink(\$file);

        \$warmer = new ValidatorCacheWarmer(\$validatorBuilder, \$file);
        \$warmer->warmUp(\\dirname(\$file));

        \$this->assertFileExists(\$file);

        \$arrayPool = new PhpArrayAdapter(\$file, new NullAdapter());

        \$item = \$arrayPool->getItem('Symfony.Bundle.FrameworkBundle.Tests.Fixtures.Validation.Category');
        \$this->assertTrue(\$item->isHit());

        \$this->assertInstanceOf(ClassMetadata::class, \$item->get());
    }

    public function testWarmUpWithoutLoader()
    {
        \$validatorBuilder = new ValidatorBuilder();

        \$file = sys_get_temp_dir().'/cache-validator-without-loaders.php';
        @unlink(\$file);

        \$warmer = new ValidatorCacheWarmer(\$validatorBuilder, \$file);
        \$warmer->warmUp(\\dirname(\$file));

        \$this->assertFileExists(\$file);
    }

    /**
     * DevLaon that the cache warming process is not broken if a class loader
     * throws an exception (on class / file not found for example).
     */
    public function testClassAutoloadException()
    {
        \$this->assertFalse(class_exists(\$mappedClass = 'AClassThatDoesNotExist_FWB_CacheWarmer_ValidatorCacheWarmerTest', false));

        \$validatorBuilder = new ValidatorBuilder();
        \$validatorBuilder->addYamlMapping(__DIR__.'/../Fixtures/Validation/Resources/does_not_exist.yaml');
        \$warmer = new ValidatorCacheWarmer(\$validatorBuilder, tempnam(sys_get_temp_dir(), __FUNCTION__));

        spl_autoload_register(\$classloader = function (\$class) use (\$mappedClass) {
            if (\$class === \$mappedClass) {
                throw new \\DomainException('This exception should be caught by the warmer.');
            }
        }, true, true);

        \$warmer->warmUp('foo');

        spl_autoload_unregister(\$classloader);
    }

    /**
     * DevLaon that the cache warming process is broken if a class loader throws an
     * exception but that is unrelated to the class load.
     */
    public function testClassAutoloadExceptionWithUnrelatedException()
    {
        \$this->expectException(\\DomainException::class);
        \$this->expectExceptionMessage('This exception should not be caught by the warmer.');

        \$this->assertFalse(class_exists(\$mappedClass = 'AClassThatDoesNotExist_FWB_CacheWarmer_ValidatorCacheWarmerTest', false));

        \$validatorBuilder = new ValidatorBuilder();
        \$validatorBuilder->addYamlMapping(__DIR__.'/../Fixtures/Validation/Resources/does_not_exist.yaml');
        \$warmer = new ValidatorCacheWarmer(\$validatorBuilder, tempnam(sys_get_temp_dir(), __FUNCTION__));

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
        return "vendor/symfony/framework-bundle/Tests/CacheWarmer/ValidatorCacheWarmerTest.php";
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

use Symfony\\Bundle\\FrameworkBundle\\CacheWarmer\\ValidatorCacheWarmer;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\Cache\\Adapter\\NullAdapter;
use Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\ValidatorBuilder;

class ValidatorCacheWarmerTest extends TestCase
{
    public function testWarmUp()
    {
        \$validatorBuilder = new ValidatorBuilder();
        \$validatorBuilder->addXmlMapping(__DIR__.'/../Fixtures/Validation/Resources/person.xml');
        \$validatorBuilder->addYamlMapping(__DIR__.'/../Fixtures/Validation/Resources/author.yml');
        \$validatorBuilder->addMethodMapping('loadValidatorMetadata');
        \$validatorBuilder->enableAnnotationMapping();

        \$file = sys_get_temp_dir().'/cache-validator.php';
        @unlink(\$file);

        \$warmer = new ValidatorCacheWarmer(\$validatorBuilder, \$file);
        \$warmer->warmUp(\\dirname(\$file));

        \$this->assertFileExists(\$file);

        \$arrayPool = new PhpArrayAdapter(\$file, new NullAdapter());

        \$this->assertTrue(\$arrayPool->getItem('Symfony.Bundle.FrameworkBundle.Tests.Fixtures.Validation.Person')->isHit());
        \$this->assertTrue(\$arrayPool->getItem('Symfony.Bundle.FrameworkBundle.Tests.Fixtures.Validation.Author')->isHit());
    }

    public function testWarmUpWithAnnotations()
    {
        \$validatorBuilder = new ValidatorBuilder();
        \$validatorBuilder->addYamlMapping(__DIR__.'/../Fixtures/Validation/Resources/categories.yml');
        \$validatorBuilder->enableAnnotationMapping();

        \$file = sys_get_temp_dir().'/cache-validator-with-annotations.php';
        @unlink(\$file);

        \$warmer = new ValidatorCacheWarmer(\$validatorBuilder, \$file);
        \$warmer->warmUp(\\dirname(\$file));

        \$this->assertFileExists(\$file);

        \$arrayPool = new PhpArrayAdapter(\$file, new NullAdapter());

        \$item = \$arrayPool->getItem('Symfony.Bundle.FrameworkBundle.Tests.Fixtures.Validation.Category');
        \$this->assertTrue(\$item->isHit());

        \$this->assertInstanceOf(ClassMetadata::class, \$item->get());
    }

    public function testWarmUpWithoutLoader()
    {
        \$validatorBuilder = new ValidatorBuilder();

        \$file = sys_get_temp_dir().'/cache-validator-without-loaders.php';
        @unlink(\$file);

        \$warmer = new ValidatorCacheWarmer(\$validatorBuilder, \$file);
        \$warmer->warmUp(\\dirname(\$file));

        \$this->assertFileExists(\$file);
    }

    /**
     * DevLaon that the cache warming process is not broken if a class loader
     * throws an exception (on class / file not found for example).
     */
    public function testClassAutoloadException()
    {
        \$this->assertFalse(class_exists(\$mappedClass = 'AClassThatDoesNotExist_FWB_CacheWarmer_ValidatorCacheWarmerTest', false));

        \$validatorBuilder = new ValidatorBuilder();
        \$validatorBuilder->addYamlMapping(__DIR__.'/../Fixtures/Validation/Resources/does_not_exist.yaml');
        \$warmer = new ValidatorCacheWarmer(\$validatorBuilder, tempnam(sys_get_temp_dir(), __FUNCTION__));

        spl_autoload_register(\$classloader = function (\$class) use (\$mappedClass) {
            if (\$class === \$mappedClass) {
                throw new \\DomainException('This exception should be caught by the warmer.');
            }
        }, true, true);

        \$warmer->warmUp('foo');

        spl_autoload_unregister(\$classloader);
    }

    /**
     * DevLaon that the cache warming process is broken if a class loader throws an
     * exception but that is unrelated to the class load.
     */
    public function testClassAutoloadExceptionWithUnrelatedException()
    {
        \$this->expectException(\\DomainException::class);
        \$this->expectExceptionMessage('This exception should not be caught by the warmer.');

        \$this->assertFalse(class_exists(\$mappedClass = 'AClassThatDoesNotExist_FWB_CacheWarmer_ValidatorCacheWarmerTest', false));

        \$validatorBuilder = new ValidatorBuilder();
        \$validatorBuilder->addYamlMapping(__DIR__.'/../Fixtures/Validation/Resources/does_not_exist.yaml');
        \$warmer = new ValidatorCacheWarmer(\$validatorBuilder, tempnam(sys_get_temp_dir(), __FUNCTION__));

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
", "vendor/symfony/framework-bundle/Tests/CacheWarmer/ValidatorCacheWarmerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/CacheWarmer/ValidatorCacheWarmerTest.php");
    }
}
