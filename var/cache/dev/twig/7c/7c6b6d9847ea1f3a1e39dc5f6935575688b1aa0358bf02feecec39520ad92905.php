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

/* vendor/symfony/framework-bundle/Tests/Functional/AutowiringTypesTest.php */
class __TwigTemplate_14c076df86c99b6c9c525e99569a1efdfb37198593db8896e01c6369e6eb01a4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/AutowiringTypesTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Functional/AutowiringTypesTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional;

use Doctrine\\Common\\Annotations\\AnnotationReader;
use Doctrine\\Common\\Annotations\\CachedReader;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\EngineInterface as FrameworkBundleEngineInterface;
use Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher;
use Symfony\\Component\\Templating\\EngineInterface as ComponentEngineInterface;

class AutowiringTypesTest extends AbstractWebTestCase
{
    public function testAnnotationReaderAutowiring()
    {
        static::bootKernel(['root_config' => 'no_annotations_cache.yml', 'environment' => 'no_annotations_cache']);

        \$annotationReader = static::\$container->get('test.autowiring_types.autowired_services')->getAnnotationReader();
        \$this->assertInstanceOf(AnnotationReader::class, \$annotationReader);
    }

    public function testCachedAnnotationReaderAutowiring()
    {
        static::bootKernel();

        \$annotationReader = static::\$container->get('test.autowiring_types.autowired_services')->getAnnotationReader();
        \$this->assertInstanceOf(CachedReader::class, \$annotationReader);
    }

    /**
     * @group legacy
     */
    public function testTemplatingAutowiring()
    {
        static::bootKernel(['root_config' => 'templating.yml', 'environment' => 'templating']);

        \$autowiredServices = static::\$container->get('test.autowiring_types.autowired_services');
        \$this->assertInstanceOf(FrameworkBundleEngineInterface::class, \$autowiredServices->getFrameworkBundleEngine());
        \$this->assertInstanceOf(ComponentEngineInterface::class, \$autowiredServices->getEngine());
    }

    public function testEventDispatcherAutowiring()
    {
        static::bootKernel(['debug' => false]);

        \$autowiredServices = static::\$container->get('test.autowiring_types.autowired_services');
        \$this->assertInstanceOf(EventDispatcher::class, \$autowiredServices->getDispatcher(), 'The event_dispatcher service should be injected if the debug is not enabled');

        static::bootKernel(['debug' => true]);

        \$autowiredServices = static::\$container->get('test.autowiring_types.autowired_services');
        \$this->assertInstanceOf(TraceableEventDispatcher::class, \$autowiredServices->getDispatcher(), 'The debug.event_dispatcher service should be injected if the debug is enabled');
    }

    public function testCacheAutowiring()
    {
        static::bootKernel();

        \$autowiredServices = static::\$container->get('test.autowiring_types.autowired_services');
        \$this->assertInstanceOf(FilesystemAdapter::class, \$autowiredServices->getCachePool());
    }

    protected static function createKernel(array \$options = [])
    {
        return parent::createKernel(['test_case' => 'AutowiringTypes'] + \$options);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Functional/AutowiringTypesTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Functional;

use Doctrine\\Common\\Annotations\\AnnotationReader;
use Doctrine\\Common\\Annotations\\CachedReader;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\EngineInterface as FrameworkBundleEngineInterface;
use Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\HttpKernel\\Debug\\TraceableEventDispatcher;
use Symfony\\Component\\Templating\\EngineInterface as ComponentEngineInterface;

class AutowiringTypesTest extends AbstractWebTestCase
{
    public function testAnnotationReaderAutowiring()
    {
        static::bootKernel(['root_config' => 'no_annotations_cache.yml', 'environment' => 'no_annotations_cache']);

        \$annotationReader = static::\$container->get('test.autowiring_types.autowired_services')->getAnnotationReader();
        \$this->assertInstanceOf(AnnotationReader::class, \$annotationReader);
    }

    public function testCachedAnnotationReaderAutowiring()
    {
        static::bootKernel();

        \$annotationReader = static::\$container->get('test.autowiring_types.autowired_services')->getAnnotationReader();
        \$this->assertInstanceOf(CachedReader::class, \$annotationReader);
    }

    /**
     * @group legacy
     */
    public function testTemplatingAutowiring()
    {
        static::bootKernel(['root_config' => 'templating.yml', 'environment' => 'templating']);

        \$autowiredServices = static::\$container->get('test.autowiring_types.autowired_services');
        \$this->assertInstanceOf(FrameworkBundleEngineInterface::class, \$autowiredServices->getFrameworkBundleEngine());
        \$this->assertInstanceOf(ComponentEngineInterface::class, \$autowiredServices->getEngine());
    }

    public function testEventDispatcherAutowiring()
    {
        static::bootKernel(['debug' => false]);

        \$autowiredServices = static::\$container->get('test.autowiring_types.autowired_services');
        \$this->assertInstanceOf(EventDispatcher::class, \$autowiredServices->getDispatcher(), 'The event_dispatcher service should be injected if the debug is not enabled');

        static::bootKernel(['debug' => true]);

        \$autowiredServices = static::\$container->get('test.autowiring_types.autowired_services');
        \$this->assertInstanceOf(TraceableEventDispatcher::class, \$autowiredServices->getDispatcher(), 'The debug.event_dispatcher service should be injected if the debug is enabled');
    }

    public function testCacheAutowiring()
    {
        static::bootKernel();

        \$autowiredServices = static::\$container->get('test.autowiring_types.autowired_services');
        \$this->assertInstanceOf(FilesystemAdapter::class, \$autowiredServices->getCachePool());
    }

    protected static function createKernel(array \$options = [])
    {
        return parent::createKernel(['test_case' => 'AutowiringTypes'] + \$options);
    }
}
", "vendor/symfony/framework-bundle/Tests/Functional/AutowiringTypesTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Functional/AutowiringTypesTest.php");
    }
}
