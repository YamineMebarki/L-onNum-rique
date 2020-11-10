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

/* vendor/symfony/framework-bundle/Tests/Controller/ControllerNameParserTest.php */
class __TwigTemplate_380e7e12a6334c68d17bbc327dcff68405c1e654abb56344a554f389b4b18e8c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Controller/ControllerNameParserTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Controller/ControllerNameParserTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller;

use Composer\\Autoload\\ClassLoader;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\HttpKernel\\Kernel;

/**
 * @group legacy
 */
class ControllerNameParserTest extends TestCase
{
    protected \$loader;

    protected function setUp(): void
    {
        \$this->loader = new ClassLoader();
        \$this->loader->add('TestBundle', __DIR__.'/../Fixtures');
        \$this->loader->add('TestApplication', __DIR__.'/../Fixtures');
        \$this->loader->register();
    }

    protected function tearDown(): void
    {
        \$this->loader->unregister();
        \$this->loader = null;
    }

    public function testParse()
    {
        \$parser = \$this->createParser();

        \$this->assertEquals('TestBundle\\FooBundle\\Controller\\DefaultController::indexAction', \$parser->parse('FooBundle:Default:index'), '->parse() converts a short a:b:c notation string to a class::method string');
        \$this->assertEquals('TestBundle\\FooBundle\\Controller\\Sub\\DefaultController::indexAction', \$parser->parse('FooBundle:Sub\\Default:index'), '->parse() converts a short a:b:c notation string to a class::method string');
        \$this->assertEquals('TestBundle\\Sensio\\Cms\\FooBundle\\Controller\\DefaultController::indexAction', \$parser->parse('SensioCmsFooBundle:Default:index'), '->parse() converts a short a:b:c notation string to a class::method string');
        \$this->assertEquals('TestBundle\\FooBundle\\Controller\\Test\\DefaultController::indexAction', \$parser->parse('FooBundle:DevLaon\\\\Default:index'), '->parse() converts a short a:b:c notation string to a class::method string');
        \$this->assertEquals('TestBundle\\FooBundle\\Controller\\Test\\DefaultController::indexAction', \$parser->parse('FooBundle:DevLaon/Default:index'), '->parse() converts a short a:b:c notation string to a class::method string');

        try {
            \$parser->parse('foo:');
            \$this->fail('->parse() throws an \\InvalidArgumentException if the controller is not an a:b:c string');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\InvalidArgumentException', \$e, '->parse() throws an \\InvalidArgumentException if the controller is not an a:b:c string');
        }
    }

    public function testBuild()
    {
        \$parser = \$this->createParser();

        \$this->assertEquals('FoooooBundle:Default:index', \$parser->build('TestBundle\\FooBundle\\Controller\\DefaultController::indexAction'), '->parse() converts a class::method string to a short a:b:c notation string');
        \$this->assertEquals('FoooooBundle:Sub\\Default:index', \$parser->build('TestBundle\\FooBundle\\Controller\\Sub\\DefaultController::indexAction'), '->parse() converts a class::method string to a short a:b:c notation string');

        try {
            \$parser->build('TestBundle\\FooBundle\\Controller\\DefaultController::index');
            \$this->fail('->parse() throws an \\InvalidArgumentException if the controller is not an aController::cAction string');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\InvalidArgumentException', \$e, '->parse() throws an \\InvalidArgumentException if the controller is not an aController::cAction string');
        }

        try {
            \$parser->build('TestBundle\\FooBundle\\Controller\\Default::indexAction');
            \$this->fail('->parse() throws an \\InvalidArgumentException if the controller is not an aController::cAction string');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\InvalidArgumentException', \$e, '->parse() throws an \\InvalidArgumentException if the controller is not an aController::cAction string');
        }

        try {
            \$parser->build('Foo\\Controller\\DefaultController::indexAction');
            \$this->fail('->parse() throws an \\InvalidArgumentException if the controller is not an aController::cAction string');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\InvalidArgumentException', \$e, '->parse() throws an \\InvalidArgumentException if the controller is not an aController::cAction string');
        }
    }

    /**
     * @dataProvider getMissingControllersTest
     */
    public function testMissingControllers(\$name)
    {
        \$parser = \$this->createParser();

        try {
            \$parser->parse(\$name);
            \$this->fail('->parse() throws a \\InvalidArgumentException if the class is found but does not exist');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\InvalidArgumentException', \$e, '->parse() throws a \\InvalidArgumentException if the class is found but does not exist');
        }
    }

    public function getMissingControllersTest()
    {
        // a normal bundle
        \$bundles = [
            ['FooBundle:Fake:index'],
        ];

        // a bundle with children
        if (Kernel::VERSION_ID < 40000) {
            \$bundles[] = ['SensioFooBundle:Fake:index'];
        }

        return \$bundles;
    }

    /**
     * @dataProvider getInvalidBundleNameTests
     */
    public function testInvalidBundleName(\$bundleName, \$suggestedBundleName)
    {
        \$parser = \$this->createParser();

        try {
            \$parser->parse(\$bundleName);
            \$this->fail('->parse() throws a \\InvalidArgumentException if the bundle does not exist');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\InvalidArgumentException', \$e, '->parse() throws a \\InvalidArgumentException if the bundle does not exist');

            if (false === \$suggestedBundleName) {
                // make sure we don't have a suggestion
                \$this->assertStringNotContainsString('Did you mean', \$e->getMessage());
            } else {
                \$this->assertStringContainsString(sprintf('Did you mean \"%s\"', \$suggestedBundleName), \$e->getMessage());
            }
        }
    }

    public function getInvalidBundleNameTests()
    {
        return [
            'Alternative will be found using levenshtein' => ['FoodBundle:Default:index', 'FooBundle:Default:index'],
            'Bundle does not exist at all' => ['CrazyBundle:Default:index', false],
        ];
    }

    private function createParser()
    {
        \$bundles = [
            'SensioCmsFooBundle' => \$this->getBundle('TestBundle\\Sensio\\Cms\\FooBundle', 'SensioCmsFooBundle'),
            'FooBundle' => \$this->getBundle('TestBundle\\FooBundle', 'FooBundle'),
        ];

        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\KernelInterface')->getMock();
        \$kernel
            ->expects(\$this->any())
            ->method('getBundle')
            ->willReturnCallback(function (\$bundle) use (\$bundles) {
                if (!isset(\$bundles[\$bundle])) {
                    throw new \\InvalidArgumentException(sprintf('Invalid bundle name \"%s\"', \$bundle));
                }

                return \$bundles[\$bundle];
            })
        ;

        \$bundles = [
            'SensioCmsFooBundle' => \$this->getBundle('TestBundle\\Sensio\\Cms\\FooBundle', 'SensioCmsFooBundle'),
            'FoooooBundle' => \$this->getBundle('TestBundle\\FooBundle', 'FoooooBundle'),
            'FooBundle' => \$this->getBundle('TestBundle\\FooBundle', 'FooBundle'),
        ];
        \$kernel
            ->expects(\$this->any())
            ->method('getBundles')
            ->willReturn(\$bundles)
        ;

        return new ControllerNameParser(\$kernel);
    }

    private function getBundle(\$namespace, \$name)
    {
        \$bundle = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface')->getMock();
        \$bundle->expects(\$this->any())->method('getName')->willReturn(\$name);
        \$bundle->expects(\$this->any())->method('getNamespace')->willReturn(\$namespace);

        return \$bundle;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Controller/ControllerNameParserTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller;

use Composer\\Autoload\\ClassLoader;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\ControllerNameParser;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\HttpKernel\\Kernel;

/**
 * @group legacy
 */
class ControllerNameParserTest extends TestCase
{
    protected \$loader;

    protected function setUp(): void
    {
        \$this->loader = new ClassLoader();
        \$this->loader->add('TestBundle', __DIR__.'/../Fixtures');
        \$this->loader->add('TestApplication', __DIR__.'/../Fixtures');
        \$this->loader->register();
    }

    protected function tearDown(): void
    {
        \$this->loader->unregister();
        \$this->loader = null;
    }

    public function testParse()
    {
        \$parser = \$this->createParser();

        \$this->assertEquals('TestBundle\\FooBundle\\Controller\\DefaultController::indexAction', \$parser->parse('FooBundle:Default:index'), '->parse() converts a short a:b:c notation string to a class::method string');
        \$this->assertEquals('TestBundle\\FooBundle\\Controller\\Sub\\DefaultController::indexAction', \$parser->parse('FooBundle:Sub\\Default:index'), '->parse() converts a short a:b:c notation string to a class::method string');
        \$this->assertEquals('TestBundle\\Sensio\\Cms\\FooBundle\\Controller\\DefaultController::indexAction', \$parser->parse('SensioCmsFooBundle:Default:index'), '->parse() converts a short a:b:c notation string to a class::method string');
        \$this->assertEquals('TestBundle\\FooBundle\\Controller\\Test\\DefaultController::indexAction', \$parser->parse('FooBundle:DevLaon\\\\Default:index'), '->parse() converts a short a:b:c notation string to a class::method string');
        \$this->assertEquals('TestBundle\\FooBundle\\Controller\\Test\\DefaultController::indexAction', \$parser->parse('FooBundle:DevLaon/Default:index'), '->parse() converts a short a:b:c notation string to a class::method string');

        try {
            \$parser->parse('foo:');
            \$this->fail('->parse() throws an \\InvalidArgumentException if the controller is not an a:b:c string');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\InvalidArgumentException', \$e, '->parse() throws an \\InvalidArgumentException if the controller is not an a:b:c string');
        }
    }

    public function testBuild()
    {
        \$parser = \$this->createParser();

        \$this->assertEquals('FoooooBundle:Default:index', \$parser->build('TestBundle\\FooBundle\\Controller\\DefaultController::indexAction'), '->parse() converts a class::method string to a short a:b:c notation string');
        \$this->assertEquals('FoooooBundle:Sub\\Default:index', \$parser->build('TestBundle\\FooBundle\\Controller\\Sub\\DefaultController::indexAction'), '->parse() converts a class::method string to a short a:b:c notation string');

        try {
            \$parser->build('TestBundle\\FooBundle\\Controller\\DefaultController::index');
            \$this->fail('->parse() throws an \\InvalidArgumentException if the controller is not an aController::cAction string');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\InvalidArgumentException', \$e, '->parse() throws an \\InvalidArgumentException if the controller is not an aController::cAction string');
        }

        try {
            \$parser->build('TestBundle\\FooBundle\\Controller\\Default::indexAction');
            \$this->fail('->parse() throws an \\InvalidArgumentException if the controller is not an aController::cAction string');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\InvalidArgumentException', \$e, '->parse() throws an \\InvalidArgumentException if the controller is not an aController::cAction string');
        }

        try {
            \$parser->build('Foo\\Controller\\DefaultController::indexAction');
            \$this->fail('->parse() throws an \\InvalidArgumentException if the controller is not an aController::cAction string');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\InvalidArgumentException', \$e, '->parse() throws an \\InvalidArgumentException if the controller is not an aController::cAction string');
        }
    }

    /**
     * @dataProvider getMissingControllersTest
     */
    public function testMissingControllers(\$name)
    {
        \$parser = \$this->createParser();

        try {
            \$parser->parse(\$name);
            \$this->fail('->parse() throws a \\InvalidArgumentException if the class is found but does not exist');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\InvalidArgumentException', \$e, '->parse() throws a \\InvalidArgumentException if the class is found but does not exist');
        }
    }

    public function getMissingControllersTest()
    {
        // a normal bundle
        \$bundles = [
            ['FooBundle:Fake:index'],
        ];

        // a bundle with children
        if (Kernel::VERSION_ID < 40000) {
            \$bundles[] = ['SensioFooBundle:Fake:index'];
        }

        return \$bundles;
    }

    /**
     * @dataProvider getInvalidBundleNameTests
     */
    public function testInvalidBundleName(\$bundleName, \$suggestedBundleName)
    {
        \$parser = \$this->createParser();

        try {
            \$parser->parse(\$bundleName);
            \$this->fail('->parse() throws a \\InvalidArgumentException if the bundle does not exist');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\InvalidArgumentException', \$e, '->parse() throws a \\InvalidArgumentException if the bundle does not exist');

            if (false === \$suggestedBundleName) {
                // make sure we don't have a suggestion
                \$this->assertStringNotContainsString('Did you mean', \$e->getMessage());
            } else {
                \$this->assertStringContainsString(sprintf('Did you mean \"%s\"', \$suggestedBundleName), \$e->getMessage());
            }
        }
    }

    public function getInvalidBundleNameTests()
    {
        return [
            'Alternative will be found using levenshtein' => ['FoodBundle:Default:index', 'FooBundle:Default:index'],
            'Bundle does not exist at all' => ['CrazyBundle:Default:index', false],
        ];
    }

    private function createParser()
    {
        \$bundles = [
            'SensioCmsFooBundle' => \$this->getBundle('TestBundle\\Sensio\\Cms\\FooBundle', 'SensioCmsFooBundle'),
            'FooBundle' => \$this->getBundle('TestBundle\\FooBundle', 'FooBundle'),
        ];

        \$kernel = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\KernelInterface')->getMock();
        \$kernel
            ->expects(\$this->any())
            ->method('getBundle')
            ->willReturnCallback(function (\$bundle) use (\$bundles) {
                if (!isset(\$bundles[\$bundle])) {
                    throw new \\InvalidArgumentException(sprintf('Invalid bundle name \"%s\"', \$bundle));
                }

                return \$bundles[\$bundle];
            })
        ;

        \$bundles = [
            'SensioCmsFooBundle' => \$this->getBundle('TestBundle\\Sensio\\Cms\\FooBundle', 'SensioCmsFooBundle'),
            'FoooooBundle' => \$this->getBundle('TestBundle\\FooBundle', 'FoooooBundle'),
            'FooBundle' => \$this->getBundle('TestBundle\\FooBundle', 'FooBundle'),
        ];
        \$kernel
            ->expects(\$this->any())
            ->method('getBundles')
            ->willReturn(\$bundles)
        ;

        return new ControllerNameParser(\$kernel);
    }

    private function getBundle(\$namespace, \$name)
    {
        \$bundle = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface')->getMock();
        \$bundle->expects(\$this->any())->method('getName')->willReturn(\$name);
        \$bundle->expects(\$this->any())->method('getNamespace')->willReturn(\$namespace);

        return \$bundle;
    }
}
", "vendor/symfony/framework-bundle/Tests/Controller/ControllerNameParserTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Controller/ControllerNameParserTest.php");
    }
}
