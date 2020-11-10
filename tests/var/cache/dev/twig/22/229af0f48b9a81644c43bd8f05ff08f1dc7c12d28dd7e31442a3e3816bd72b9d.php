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

/* vendor/symfony/routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php */
class __TwigTemplate_7f2592e9bd74404b1782aec810baddd7dee11db8c287eca8e166d491148afa5c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php"));

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

namespace Symfony\\Component\\Routing\\Tests\\Generator\\Dumper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * @group legacy
 */
class PhpGeneratorDumperTest extends TestCase
{
    /**
     * @var RouteCollection
     */
    private \$routeCollection;

    /**
     * @var PhpGeneratorDumper
     */
    private \$generatorDumper;

    /**
     * @var string
     */
    private \$testTmpFilepath;

    /**
     * @var string
     */
    private \$largeTestTmpFilepath;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->routeCollection = new RouteCollection();
        \$this->generatorDumper = new PhpGeneratorDumper(\$this->routeCollection);
        \$this->testTmpFilepath = sys_get_temp_dir().\\DIRECTORY_SEPARATOR.'php_generator.'.\$this->getName().'.php';
        \$this->largeTestTmpFilepath = sys_get_temp_dir().\\DIRECTORY_SEPARATOR.'php_generator.'.\$this->getName().'.large.php';
        @unlink(\$this->testTmpFilepath);
        @unlink(\$this->largeTestTmpFilepath);
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        @unlink(\$this->testTmpFilepath);

        \$this->routeCollection = null;
        \$this->generatorDumper = null;
        \$this->testTmpFilepath = null;
    }

    public function testDumpWithRoutes()
    {
        \$this->routeCollection->add('DevLaon', new Route('/testing/{foo}'));
        \$this->routeCollection->add('Test2', new Route('/testing2'));

        file_put_contents(\$this->testTmpFilepath, \$this->generatorDumper->dump());
        include \$this->testTmpFilepath;

        \$projectUrlGenerator = new \\ProjectUrlGenerator(new RequestContext('/app.php'));

        \$absoluteUrlWithParameter = \$projectUrlGenerator->generate('DevLaon', ['foo' => 'bar'], UrlGeneratorInterface::ABSOLUTE_URL);
        \$absoluteUrlWithoutParameter = \$projectUrlGenerator->generate('Test2', [], UrlGeneratorInterface::ABSOLUTE_URL);
        \$relativeUrlWithParameter = \$projectUrlGenerator->generate('DevLaon', ['foo' => 'bar'], UrlGeneratorInterface::ABSOLUTE_PATH);
        \$relativeUrlWithoutParameter = \$projectUrlGenerator->generate('Test2', [], UrlGeneratorInterface::ABSOLUTE_PATH);

        \$this->assertEquals('http://localhost/app.php/testing/bar', \$absoluteUrlWithParameter);
        \$this->assertEquals('http://localhost/app.php/testing2', \$absoluteUrlWithoutParameter);
        \$this->assertEquals('/app.php/testing/bar', \$relativeUrlWithParameter);
        \$this->assertEquals('/app.php/testing2', \$relativeUrlWithoutParameter);
    }

    public function testDumpWithSimpleLocalizedRoutes()
    {
        \$this->routeCollection->add('test', (new Route('/foo')));
        \$this->routeCollection->add('test.en', (new Route('/testing/is/fun'))->setDefault('_locale', 'en')->setDefault('_canonical_route', 'test'));
        \$this->routeCollection->add('test.nl', (new Route('/testen/is/leuk'))->setDefault('_locale', 'nl')->setDefault('_canonical_route', 'test'));

        \$code = \$this->generatorDumper->dump([
            'class' => 'SimpleLocalizedProjectUrlGenerator',
        ]);
        file_put_contents(\$this->testTmpFilepath, \$code);
        include \$this->testTmpFilepath;

        \$context = new RequestContext('/app.php');
        \$projectUrlGenerator = new \\SimpleLocalizedProjectUrlGenerator(\$context, null, 'en');

        \$urlWithDefaultLocale = \$projectUrlGenerator->generate('test');
        \$urlWithSpecifiedLocale = \$projectUrlGenerator->generate('test', ['_locale' => 'nl']);
        \$context->setParameter('_locale', 'en');
        \$urlWithEnglishContext = \$projectUrlGenerator->generate('test');
        \$context->setParameter('_locale', 'nl');
        \$urlWithDutchContext = \$projectUrlGenerator->generate('test');

        \$this->assertEquals('/app.php/testing/is/fun', \$urlWithDefaultLocale);
        \$this->assertEquals('/app.php/testen/is/leuk', \$urlWithSpecifiedLocale);
        \$this->assertEquals('/app.php/testing/is/fun', \$urlWithEnglishContext);
        \$this->assertEquals('/app.php/testen/is/leuk', \$urlWithDutchContext);

        // test with full route name
        \$this->assertEquals('/app.php/testing/is/fun', \$projectUrlGenerator->generate('test.en'));

        \$context->setParameter('_locale', 'de_DE');
        // test that it fall backs to another route when there is no matching localized route
        \$this->assertEquals('/app.php/foo', \$projectUrlGenerator->generate('test'));
    }

    public function testDumpWithRouteNotFoundLocalizedRoutes()
    {
        \$this->expectException('Symfony\\Component\\Routing\\Exception\\RouteNotFoundException');
        \$this->expectExceptionMessage('Unable to generate a URL for the named route \"test\" as such route does not exist.');
        \$this->routeCollection->add('test.en', (new Route('/testing/is/fun'))->setDefault('_locale', 'en')->setDefault('_canonical_route', 'test'));

        \$code = \$this->generatorDumper->dump([
            'class' => 'RouteNotFoundLocalizedProjectUrlGenerator',
        ]);
        file_put_contents(\$this->testTmpFilepath, \$code);
        include \$this->testTmpFilepath;

        \$projectUrlGenerator = new \\RouteNotFoundLocalizedProjectUrlGenerator(new RequestContext('/app.php'), null, 'pl_PL');
        \$projectUrlGenerator->generate('test');
    }

    public function testDumpWithFallbackLocaleLocalizedRoutes()
    {
        \$this->routeCollection->add('test.en', (new Route('/testing/is/fun'))->setDefault('_canonical_route', 'test'));
        \$this->routeCollection->add('test.nl', (new Route('/testen/is/leuk'))->setDefault('_canonical_route', 'test'));
        \$this->routeCollection->add('test.fr', (new Route('/tester/est/amusant'))->setDefault('_canonical_route', 'test'));

        \$code = \$this->generatorDumper->dump([
            'class' => 'FallbackLocaleLocalizedProjectUrlGenerator',
        ]);
        file_put_contents(\$this->testTmpFilepath, \$code);
        include \$this->testTmpFilepath;

        \$context = new RequestContext('/app.php');
        \$context->setParameter('_locale', 'en_GB');
        \$projectUrlGenerator = new \\FallbackLocaleLocalizedProjectUrlGenerator(\$context, null, null);

        // test with context _locale
        \$this->assertEquals('/app.php/testing/is/fun', \$projectUrlGenerator->generate('test'));
        // test with parameters _locale
        \$this->assertEquals('/app.php/testen/is/leuk', \$projectUrlGenerator->generate('test', ['_locale' => 'nl_BE']));

        \$projectUrlGenerator = new \\FallbackLocaleLocalizedProjectUrlGenerator(new RequestContext('/app.php'), null, 'fr_CA');
        // test with default locale
        \$this->assertEquals('/app.php/tester/est/amusant', \$projectUrlGenerator->generate('test'));
    }

    public function testDumpWithTooManyRoutes()
    {
        \$this->routeCollection->add('DevLaon', new Route('/testing/{foo}'));
        for (\$i = 0; \$i < 32769; ++\$i) {
            \$this->routeCollection->add('route_'.\$i, new Route('/route_'.\$i));
        }
        \$this->routeCollection->add('Test2', new Route('/testing2'));

        file_put_contents(\$this->largeTestTmpFilepath, \$this->generatorDumper->dump([
            'class' => 'ProjectLargeUrlGenerator',
        ]));
        \$this->routeCollection = \$this->generatorDumper = null;
        include \$this->largeTestTmpFilepath;

        \$projectUrlGenerator = new \\ProjectLargeUrlGenerator(new RequestContext('/app.php'));

        \$absoluteUrlWithParameter = \$projectUrlGenerator->generate('DevLaon', ['foo' => 'bar'], UrlGeneratorInterface::ABSOLUTE_URL);
        \$absoluteUrlWithoutParameter = \$projectUrlGenerator->generate('Test2', [], UrlGeneratorInterface::ABSOLUTE_URL);
        \$relativeUrlWithParameter = \$projectUrlGenerator->generate('DevLaon', ['foo' => 'bar'], UrlGeneratorInterface::ABSOLUTE_PATH);
        \$relativeUrlWithoutParameter = \$projectUrlGenerator->generate('Test2', [], UrlGeneratorInterface::ABSOLUTE_PATH);

        \$this->assertEquals('http://localhost/app.php/testing/bar', \$absoluteUrlWithParameter);
        \$this->assertEquals('http://localhost/app.php/testing2', \$absoluteUrlWithoutParameter);
        \$this->assertEquals('/app.php/testing/bar', \$relativeUrlWithParameter);
        \$this->assertEquals('/app.php/testing2', \$relativeUrlWithoutParameter);
    }

    public function testDumpWithoutRoutes()
    {
        \$this->expectException('InvalidArgumentException');
        file_put_contents(\$this->testTmpFilepath, \$this->generatorDumper->dump(['class' => 'WithoutRoutesUrlGenerator']));
        include \$this->testTmpFilepath;

        \$projectUrlGenerator = new \\WithoutRoutesUrlGenerator(new RequestContext('/app.php'));

        \$projectUrlGenerator->generate('DevLaon', []);
    }

    public function testGenerateNonExistingRoute()
    {
        \$this->expectException('Symfony\\Component\\Routing\\Exception\\RouteNotFoundException');
        \$this->routeCollection->add('DevLaon', new Route('/test'));

        file_put_contents(\$this->testTmpFilepath, \$this->generatorDumper->dump(['class' => 'NonExistingRoutesUrlGenerator']));
        include \$this->testTmpFilepath;

        \$projectUrlGenerator = new \\NonExistingRoutesUrlGenerator(new RequestContext());
        \$url = \$projectUrlGenerator->generate('NonExisting', []);
    }

    public function testDumpForRouteWithDefaults()
    {
        \$this->routeCollection->add('DevLaon', new Route('/testing/{foo}', ['foo' => 'bar']));

        file_put_contents(\$this->testTmpFilepath, \$this->generatorDumper->dump(['class' => 'DefaultRoutesUrlGenerator']));
        include \$this->testTmpFilepath;

        \$projectUrlGenerator = new \\DefaultRoutesUrlGenerator(new RequestContext());
        \$url = \$projectUrlGenerator->generate('DevLaon', []);

        \$this->assertEquals('/testing', \$url);
    }

    public function testDumpWithSchemeRequirement()
    {
        \$this->routeCollection->add('Test1', new Route('/testing', [], [], [], '', ['ftp', 'https']));

        file_put_contents(\$this->testTmpFilepath, \$this->generatorDumper->dump(['class' => 'SchemeUrlGenerator']));
        include \$this->testTmpFilepath;

        \$projectUrlGenerator = new \\SchemeUrlGenerator(new RequestContext('/app.php'));

        \$absoluteUrl = \$projectUrlGenerator->generate('Test1', [], UrlGeneratorInterface::ABSOLUTE_URL);
        \$relativeUrl = \$projectUrlGenerator->generate('Test1', [], UrlGeneratorInterface::ABSOLUTE_PATH);

        \$this->assertEquals('ftp://localhost/app.php/testing', \$absoluteUrl);
        \$this->assertEquals('ftp://localhost/app.php/testing', \$relativeUrl);

        \$projectUrlGenerator = new \\SchemeUrlGenerator(new RequestContext('/app.php', 'GET', 'localhost', 'https'));

        \$absoluteUrl = \$projectUrlGenerator->generate('Test1', [], UrlGeneratorInterface::ABSOLUTE_URL);
        \$relativeUrl = \$projectUrlGenerator->generate('Test1', [], UrlGeneratorInterface::ABSOLUTE_PATH);

        \$this->assertEquals('https://localhost/app.php/testing', \$absoluteUrl);
        \$this->assertEquals('/app.php/testing', \$relativeUrl);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php";
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

namespace Symfony\\Component\\Routing\\Tests\\Generator\\Dumper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Component\\Routing\\RequestContext;
use Symfony\\Component\\Routing\\Route;
use Symfony\\Component\\Routing\\RouteCollection;

/**
 * @group legacy
 */
class PhpGeneratorDumperTest extends TestCase
{
    /**
     * @var RouteCollection
     */
    private \$routeCollection;

    /**
     * @var PhpGeneratorDumper
     */
    private \$generatorDumper;

    /**
     * @var string
     */
    private \$testTmpFilepath;

    /**
     * @var string
     */
    private \$largeTestTmpFilepath;

    protected function setUp(): void
    {
        parent::setUp();

        \$this->routeCollection = new RouteCollection();
        \$this->generatorDumper = new PhpGeneratorDumper(\$this->routeCollection);
        \$this->testTmpFilepath = sys_get_temp_dir().\\DIRECTORY_SEPARATOR.'php_generator.'.\$this->getName().'.php';
        \$this->largeTestTmpFilepath = sys_get_temp_dir().\\DIRECTORY_SEPARATOR.'php_generator.'.\$this->getName().'.large.php';
        @unlink(\$this->testTmpFilepath);
        @unlink(\$this->largeTestTmpFilepath);
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        @unlink(\$this->testTmpFilepath);

        \$this->routeCollection = null;
        \$this->generatorDumper = null;
        \$this->testTmpFilepath = null;
    }

    public function testDumpWithRoutes()
    {
        \$this->routeCollection->add('DevLaon', new Route('/testing/{foo}'));
        \$this->routeCollection->add('Test2', new Route('/testing2'));

        file_put_contents(\$this->testTmpFilepath, \$this->generatorDumper->dump());
        include \$this->testTmpFilepath;

        \$projectUrlGenerator = new \\ProjectUrlGenerator(new RequestContext('/app.php'));

        \$absoluteUrlWithParameter = \$projectUrlGenerator->generate('DevLaon', ['foo' => 'bar'], UrlGeneratorInterface::ABSOLUTE_URL);
        \$absoluteUrlWithoutParameter = \$projectUrlGenerator->generate('Test2', [], UrlGeneratorInterface::ABSOLUTE_URL);
        \$relativeUrlWithParameter = \$projectUrlGenerator->generate('DevLaon', ['foo' => 'bar'], UrlGeneratorInterface::ABSOLUTE_PATH);
        \$relativeUrlWithoutParameter = \$projectUrlGenerator->generate('Test2', [], UrlGeneratorInterface::ABSOLUTE_PATH);

        \$this->assertEquals('http://localhost/app.php/testing/bar', \$absoluteUrlWithParameter);
        \$this->assertEquals('http://localhost/app.php/testing2', \$absoluteUrlWithoutParameter);
        \$this->assertEquals('/app.php/testing/bar', \$relativeUrlWithParameter);
        \$this->assertEquals('/app.php/testing2', \$relativeUrlWithoutParameter);
    }

    public function testDumpWithSimpleLocalizedRoutes()
    {
        \$this->routeCollection->add('test', (new Route('/foo')));
        \$this->routeCollection->add('test.en', (new Route('/testing/is/fun'))->setDefault('_locale', 'en')->setDefault('_canonical_route', 'test'));
        \$this->routeCollection->add('test.nl', (new Route('/testen/is/leuk'))->setDefault('_locale', 'nl')->setDefault('_canonical_route', 'test'));

        \$code = \$this->generatorDumper->dump([
            'class' => 'SimpleLocalizedProjectUrlGenerator',
        ]);
        file_put_contents(\$this->testTmpFilepath, \$code);
        include \$this->testTmpFilepath;

        \$context = new RequestContext('/app.php');
        \$projectUrlGenerator = new \\SimpleLocalizedProjectUrlGenerator(\$context, null, 'en');

        \$urlWithDefaultLocale = \$projectUrlGenerator->generate('test');
        \$urlWithSpecifiedLocale = \$projectUrlGenerator->generate('test', ['_locale' => 'nl']);
        \$context->setParameter('_locale', 'en');
        \$urlWithEnglishContext = \$projectUrlGenerator->generate('test');
        \$context->setParameter('_locale', 'nl');
        \$urlWithDutchContext = \$projectUrlGenerator->generate('test');

        \$this->assertEquals('/app.php/testing/is/fun', \$urlWithDefaultLocale);
        \$this->assertEquals('/app.php/testen/is/leuk', \$urlWithSpecifiedLocale);
        \$this->assertEquals('/app.php/testing/is/fun', \$urlWithEnglishContext);
        \$this->assertEquals('/app.php/testen/is/leuk', \$urlWithDutchContext);

        // test with full route name
        \$this->assertEquals('/app.php/testing/is/fun', \$projectUrlGenerator->generate('test.en'));

        \$context->setParameter('_locale', 'de_DE');
        // test that it fall backs to another route when there is no matching localized route
        \$this->assertEquals('/app.php/foo', \$projectUrlGenerator->generate('test'));
    }

    public function testDumpWithRouteNotFoundLocalizedRoutes()
    {
        \$this->expectException('Symfony\\Component\\Routing\\Exception\\RouteNotFoundException');
        \$this->expectExceptionMessage('Unable to generate a URL for the named route \"test\" as such route does not exist.');
        \$this->routeCollection->add('test.en', (new Route('/testing/is/fun'))->setDefault('_locale', 'en')->setDefault('_canonical_route', 'test'));

        \$code = \$this->generatorDumper->dump([
            'class' => 'RouteNotFoundLocalizedProjectUrlGenerator',
        ]);
        file_put_contents(\$this->testTmpFilepath, \$code);
        include \$this->testTmpFilepath;

        \$projectUrlGenerator = new \\RouteNotFoundLocalizedProjectUrlGenerator(new RequestContext('/app.php'), null, 'pl_PL');
        \$projectUrlGenerator->generate('test');
    }

    public function testDumpWithFallbackLocaleLocalizedRoutes()
    {
        \$this->routeCollection->add('test.en', (new Route('/testing/is/fun'))->setDefault('_canonical_route', 'test'));
        \$this->routeCollection->add('test.nl', (new Route('/testen/is/leuk'))->setDefault('_canonical_route', 'test'));
        \$this->routeCollection->add('test.fr', (new Route('/tester/est/amusant'))->setDefault('_canonical_route', 'test'));

        \$code = \$this->generatorDumper->dump([
            'class' => 'FallbackLocaleLocalizedProjectUrlGenerator',
        ]);
        file_put_contents(\$this->testTmpFilepath, \$code);
        include \$this->testTmpFilepath;

        \$context = new RequestContext('/app.php');
        \$context->setParameter('_locale', 'en_GB');
        \$projectUrlGenerator = new \\FallbackLocaleLocalizedProjectUrlGenerator(\$context, null, null);

        // test with context _locale
        \$this->assertEquals('/app.php/testing/is/fun', \$projectUrlGenerator->generate('test'));
        // test with parameters _locale
        \$this->assertEquals('/app.php/testen/is/leuk', \$projectUrlGenerator->generate('test', ['_locale' => 'nl_BE']));

        \$projectUrlGenerator = new \\FallbackLocaleLocalizedProjectUrlGenerator(new RequestContext('/app.php'), null, 'fr_CA');
        // test with default locale
        \$this->assertEquals('/app.php/tester/est/amusant', \$projectUrlGenerator->generate('test'));
    }

    public function testDumpWithTooManyRoutes()
    {
        \$this->routeCollection->add('DevLaon', new Route('/testing/{foo}'));
        for (\$i = 0; \$i < 32769; ++\$i) {
            \$this->routeCollection->add('route_'.\$i, new Route('/route_'.\$i));
        }
        \$this->routeCollection->add('Test2', new Route('/testing2'));

        file_put_contents(\$this->largeTestTmpFilepath, \$this->generatorDumper->dump([
            'class' => 'ProjectLargeUrlGenerator',
        ]));
        \$this->routeCollection = \$this->generatorDumper = null;
        include \$this->largeTestTmpFilepath;

        \$projectUrlGenerator = new \\ProjectLargeUrlGenerator(new RequestContext('/app.php'));

        \$absoluteUrlWithParameter = \$projectUrlGenerator->generate('DevLaon', ['foo' => 'bar'], UrlGeneratorInterface::ABSOLUTE_URL);
        \$absoluteUrlWithoutParameter = \$projectUrlGenerator->generate('Test2', [], UrlGeneratorInterface::ABSOLUTE_URL);
        \$relativeUrlWithParameter = \$projectUrlGenerator->generate('DevLaon', ['foo' => 'bar'], UrlGeneratorInterface::ABSOLUTE_PATH);
        \$relativeUrlWithoutParameter = \$projectUrlGenerator->generate('Test2', [], UrlGeneratorInterface::ABSOLUTE_PATH);

        \$this->assertEquals('http://localhost/app.php/testing/bar', \$absoluteUrlWithParameter);
        \$this->assertEquals('http://localhost/app.php/testing2', \$absoluteUrlWithoutParameter);
        \$this->assertEquals('/app.php/testing/bar', \$relativeUrlWithParameter);
        \$this->assertEquals('/app.php/testing2', \$relativeUrlWithoutParameter);
    }

    public function testDumpWithoutRoutes()
    {
        \$this->expectException('InvalidArgumentException');
        file_put_contents(\$this->testTmpFilepath, \$this->generatorDumper->dump(['class' => 'WithoutRoutesUrlGenerator']));
        include \$this->testTmpFilepath;

        \$projectUrlGenerator = new \\WithoutRoutesUrlGenerator(new RequestContext('/app.php'));

        \$projectUrlGenerator->generate('DevLaon', []);
    }

    public function testGenerateNonExistingRoute()
    {
        \$this->expectException('Symfony\\Component\\Routing\\Exception\\RouteNotFoundException');
        \$this->routeCollection->add('DevLaon', new Route('/test'));

        file_put_contents(\$this->testTmpFilepath, \$this->generatorDumper->dump(['class' => 'NonExistingRoutesUrlGenerator']));
        include \$this->testTmpFilepath;

        \$projectUrlGenerator = new \\NonExistingRoutesUrlGenerator(new RequestContext());
        \$url = \$projectUrlGenerator->generate('NonExisting', []);
    }

    public function testDumpForRouteWithDefaults()
    {
        \$this->routeCollection->add('DevLaon', new Route('/testing/{foo}', ['foo' => 'bar']));

        file_put_contents(\$this->testTmpFilepath, \$this->generatorDumper->dump(['class' => 'DefaultRoutesUrlGenerator']));
        include \$this->testTmpFilepath;

        \$projectUrlGenerator = new \\DefaultRoutesUrlGenerator(new RequestContext());
        \$url = \$projectUrlGenerator->generate('DevLaon', []);

        \$this->assertEquals('/testing', \$url);
    }

    public function testDumpWithSchemeRequirement()
    {
        \$this->routeCollection->add('Test1', new Route('/testing', [], [], [], '', ['ftp', 'https']));

        file_put_contents(\$this->testTmpFilepath, \$this->generatorDumper->dump(['class' => 'SchemeUrlGenerator']));
        include \$this->testTmpFilepath;

        \$projectUrlGenerator = new \\SchemeUrlGenerator(new RequestContext('/app.php'));

        \$absoluteUrl = \$projectUrlGenerator->generate('Test1', [], UrlGeneratorInterface::ABSOLUTE_URL);
        \$relativeUrl = \$projectUrlGenerator->generate('Test1', [], UrlGeneratorInterface::ABSOLUTE_PATH);

        \$this->assertEquals('ftp://localhost/app.php/testing', \$absoluteUrl);
        \$this->assertEquals('ftp://localhost/app.php/testing', \$relativeUrl);

        \$projectUrlGenerator = new \\SchemeUrlGenerator(new RequestContext('/app.php', 'GET', 'localhost', 'https'));

        \$absoluteUrl = \$projectUrlGenerator->generate('Test1', [], UrlGeneratorInterface::ABSOLUTE_URL);
        \$relativeUrl = \$projectUrlGenerator->generate('Test1', [], UrlGeneratorInterface::ABSOLUTE_PATH);

        \$this->assertEquals('https://localhost/app.php/testing', \$absoluteUrl);
        \$this->assertEquals('/app.php/testing', \$relativeUrl);
    }
}
", "vendor/symfony/routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/routing/Tests/Generator/Dumper/PhpGeneratorDumperTest.php");
    }
}
