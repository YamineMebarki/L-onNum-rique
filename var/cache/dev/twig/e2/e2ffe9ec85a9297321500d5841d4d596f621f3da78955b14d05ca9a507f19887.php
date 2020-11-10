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

/* vendor/symfony/web-profiler-bundle/Tests/Controller/ProfilerControllerTest.php */
class __TwigTemplate_f3313bebc1ce733b9909ef594241b424cde9620bb47370c537485e3754b1c29e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Tests/Controller/ProfilerControllerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Tests/Controller/ProfilerControllerTest.php"));

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

namespace Symfony\\Bundle\\WebProfilerBundle\\Tests\\Controller;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController;
use Symfony\\Bundle\\WebProfilerBundle\\Csp\\ContentSecurityPolicyHandler;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\HttpKernel\\Profiler\\Profile;

class ProfilerControllerTest extends TestCase
{
    /**
     * @dataProvider getEmptyTokenCases
     */
    public function testEmptyToken(\$token)
    {
        \$urlGenerator = \$this->getMockBuilder('Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface')->getMock();
        \$twig = \$this->getMockBuilder('Twig\\Environment')->disableOriginalConstructor()->getMock();
        \$profiler = \$this
            ->getMockBuilder('Symfony\\Component\\HttpKernel\\Profiler\\Profiler')
            ->disableOriginalConstructor()
            ->getMock();

        \$controller = new ProfilerController(\$urlGenerator, \$profiler, \$twig, []);

        \$response = \$controller->toolbarAction(Request::create('/_wdt/empty'), \$token);
        \$this->assertEquals(200, \$response->getStatusCode());
    }

    public function getEmptyTokenCases()
    {
        return [
            [null],
            // \"empty\" is also a valid empty token case, see https://github.com/symfony/symfony/issues/10806
            ['empty'],
        ];
    }

    /**
     * @dataProvider getOpenFileCases
     */
    public function testOpeningDisallowedPaths(\$path, \$isAllowed)
    {
        \$urlGenerator = \$this->getMockBuilder('Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface')->getMock();
        \$twig = \$this->getMockBuilder('Twig\\Environment')->disableOriginalConstructor()->getMock();
        \$profiler = \$this
            ->getMockBuilder('Symfony\\Component\\HttpKernel\\Profiler\\Profiler')
            ->disableOriginalConstructor()
            ->getMock();

        \$controller = new ProfilerController(\$urlGenerator, \$profiler, \$twig, [], null, __DIR__.'/../..');

        try {
            \$response = \$controller->openAction(Request::create('/_wdt/open', Request::METHOD_GET, ['file' => \$path]));
            \$this->assertEquals(200, \$response->getStatusCode());
            \$this->assertTrue(\$isAllowed);
        } catch (NotFoundHttpException \$e) {
            \$this->assertFalse(\$isAllowed);
        }
    }

    public function getOpenFileCases()
    {
        return [
            ['README.md', true],
            ['composer.json', true],
            ['Controller/ProfilerController.php', true],
            ['.gitignore', false],
            ['../TwigBundle/README.md', false],
            ['Controller/../README.md', false],
            ['Controller/./ProfilerController.php', false],
        ];
    }

    /**
     * @dataProvider provideCspVariants
     */
    public function testReturns404onTokenNotFound(\$withCsp)
    {
        \$twig = \$this->getMockBuilder('Twig\\Environment')->disableOriginalConstructor()->getMock();
        \$profiler = \$this
            ->getMockBuilder('Symfony\\Component\\HttpKernel\\Profiler\\Profiler')
            ->disableOriginalConstructor()
            ->getMock();

        \$profiler
            ->expects(\$this->exactly(2))
            ->method('loadProfile')
            ->willReturnCallback(function (\$token) {
                return 'found' == \$token ? new Profile(\$token) : null;
            })
        ;

        \$controller = \$this->createController(\$profiler, \$twig, \$withCsp);

        \$response = \$controller->toolbarAction(Request::create('/_wdt/found'), 'found');
        \$this->assertEquals(200, \$response->getStatusCode());

        \$response = \$controller->toolbarAction(Request::create('/_wdt/notFound'), 'notFound');
        \$this->assertEquals(404, \$response->getStatusCode());
    }

    /**
     * @dataProvider provideCspVariants
     */
    public function testSearchResult(\$withCsp)
    {
        \$twig = \$this->getMockBuilder('Twig\\Environment')->disableOriginalConstructor()->getMock();
        \$profiler = \$this
            ->getMockBuilder('Symfony\\Component\\HttpKernel\\Profiler\\Profiler')
            ->disableOriginalConstructor()
            ->getMock();

        \$controller = \$this->createController(\$profiler, \$twig, \$withCsp);

        \$tokens = [
            [
                'token' => 'token1',
                'ip' => '127.0.0.1',
                'method' => 'GET',
                'url' => 'http://example.com/',
                'time' => 0,
                'parent' => null,
                'status_code' => 200,
            ],
            [
                'token' => 'token2',
                'ip' => '127.0.0.1',
                'method' => 'GET',
                'url' => 'http://example.com/not_found',
                'time' => 0,
                'parent' => null,
                'status_code' => 404,
            ],
        ];
        \$profiler
            ->expects(\$this->once())
            ->method('find')
            ->willReturn(\$tokens);

        \$request = Request::create('/_profiler/empty/search/results', 'GET', [
            'limit' => 2,
            'ip' => '127.0.0.1',
            'method' => 'GET',
            'url' => 'http://example.com/',
        ]);

        \$twig->expects(\$this->once())
            ->method('render')
            ->with(\$this->stringEndsWith('results.html.twig'), \$this->equalTo([
                'token' => 'empty',
                'profile' => null,
                'tokens' => \$tokens,
                'ip' => '127.0.0.1',
                'method' => 'GET',
                'status_code' => null,
                'url' => 'http://example.com/',
                'start' => null,
                'end' => null,
                'limit' => 2,
                'panel' => null,
                'request' => \$request,
            ]));

        \$response = \$controller->searchResultsAction(\$request, 'empty');
        \$this->assertEquals(200, \$response->getStatusCode());
    }

    public function provideCspVariants()
    {
        return [
            [true],
            [false],
        ];
    }

    private function createController(\$profiler, \$twig, \$withCSP)
    {
        \$urlGenerator = \$this->getMockBuilder('Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface')->getMock();

        if (\$withCSP) {
            \$nonceGenerator = \$this->getMockBuilder('Symfony\\Bundle\\WebProfilerBundle\\Csp\\NonceGenerator')->getMock();

            return new ProfilerController(\$urlGenerator, \$profiler, \$twig, [], new ContentSecurityPolicyHandler(\$nonceGenerator));
        }

        return new ProfilerController(\$urlGenerator, \$profiler, \$twig, []);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-profiler-bundle/Tests/Controller/ProfilerControllerTest.php";
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

namespace Symfony\\Bundle\\WebProfilerBundle\\Tests\\Controller;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController;
use Symfony\\Bundle\\WebProfilerBundle\\Csp\\ContentSecurityPolicyHandler;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;
use Symfony\\Component\\HttpKernel\\Profiler\\Profile;

class ProfilerControllerTest extends TestCase
{
    /**
     * @dataProvider getEmptyTokenCases
     */
    public function testEmptyToken(\$token)
    {
        \$urlGenerator = \$this->getMockBuilder('Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface')->getMock();
        \$twig = \$this->getMockBuilder('Twig\\Environment')->disableOriginalConstructor()->getMock();
        \$profiler = \$this
            ->getMockBuilder('Symfony\\Component\\HttpKernel\\Profiler\\Profiler')
            ->disableOriginalConstructor()
            ->getMock();

        \$controller = new ProfilerController(\$urlGenerator, \$profiler, \$twig, []);

        \$response = \$controller->toolbarAction(Request::create('/_wdt/empty'), \$token);
        \$this->assertEquals(200, \$response->getStatusCode());
    }

    public function getEmptyTokenCases()
    {
        return [
            [null],
            // \"empty\" is also a valid empty token case, see https://github.com/symfony/symfony/issues/10806
            ['empty'],
        ];
    }

    /**
     * @dataProvider getOpenFileCases
     */
    public function testOpeningDisallowedPaths(\$path, \$isAllowed)
    {
        \$urlGenerator = \$this->getMockBuilder('Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface')->getMock();
        \$twig = \$this->getMockBuilder('Twig\\Environment')->disableOriginalConstructor()->getMock();
        \$profiler = \$this
            ->getMockBuilder('Symfony\\Component\\HttpKernel\\Profiler\\Profiler')
            ->disableOriginalConstructor()
            ->getMock();

        \$controller = new ProfilerController(\$urlGenerator, \$profiler, \$twig, [], null, __DIR__.'/../..');

        try {
            \$response = \$controller->openAction(Request::create('/_wdt/open', Request::METHOD_GET, ['file' => \$path]));
            \$this->assertEquals(200, \$response->getStatusCode());
            \$this->assertTrue(\$isAllowed);
        } catch (NotFoundHttpException \$e) {
            \$this->assertFalse(\$isAllowed);
        }
    }

    public function getOpenFileCases()
    {
        return [
            ['README.md', true],
            ['composer.json', true],
            ['Controller/ProfilerController.php', true],
            ['.gitignore', false],
            ['../TwigBundle/README.md', false],
            ['Controller/../README.md', false],
            ['Controller/./ProfilerController.php', false],
        ];
    }

    /**
     * @dataProvider provideCspVariants
     */
    public function testReturns404onTokenNotFound(\$withCsp)
    {
        \$twig = \$this->getMockBuilder('Twig\\Environment')->disableOriginalConstructor()->getMock();
        \$profiler = \$this
            ->getMockBuilder('Symfony\\Component\\HttpKernel\\Profiler\\Profiler')
            ->disableOriginalConstructor()
            ->getMock();

        \$profiler
            ->expects(\$this->exactly(2))
            ->method('loadProfile')
            ->willReturnCallback(function (\$token) {
                return 'found' == \$token ? new Profile(\$token) : null;
            })
        ;

        \$controller = \$this->createController(\$profiler, \$twig, \$withCsp);

        \$response = \$controller->toolbarAction(Request::create('/_wdt/found'), 'found');
        \$this->assertEquals(200, \$response->getStatusCode());

        \$response = \$controller->toolbarAction(Request::create('/_wdt/notFound'), 'notFound');
        \$this->assertEquals(404, \$response->getStatusCode());
    }

    /**
     * @dataProvider provideCspVariants
     */
    public function testSearchResult(\$withCsp)
    {
        \$twig = \$this->getMockBuilder('Twig\\Environment')->disableOriginalConstructor()->getMock();
        \$profiler = \$this
            ->getMockBuilder('Symfony\\Component\\HttpKernel\\Profiler\\Profiler')
            ->disableOriginalConstructor()
            ->getMock();

        \$controller = \$this->createController(\$profiler, \$twig, \$withCsp);

        \$tokens = [
            [
                'token' => 'token1',
                'ip' => '127.0.0.1',
                'method' => 'GET',
                'url' => 'http://example.com/',
                'time' => 0,
                'parent' => null,
                'status_code' => 200,
            ],
            [
                'token' => 'token2',
                'ip' => '127.0.0.1',
                'method' => 'GET',
                'url' => 'http://example.com/not_found',
                'time' => 0,
                'parent' => null,
                'status_code' => 404,
            ],
        ];
        \$profiler
            ->expects(\$this->once())
            ->method('find')
            ->willReturn(\$tokens);

        \$request = Request::create('/_profiler/empty/search/results', 'GET', [
            'limit' => 2,
            'ip' => '127.0.0.1',
            'method' => 'GET',
            'url' => 'http://example.com/',
        ]);

        \$twig->expects(\$this->once())
            ->method('render')
            ->with(\$this->stringEndsWith('results.html.twig'), \$this->equalTo([
                'token' => 'empty',
                'profile' => null,
                'tokens' => \$tokens,
                'ip' => '127.0.0.1',
                'method' => 'GET',
                'status_code' => null,
                'url' => 'http://example.com/',
                'start' => null,
                'end' => null,
                'limit' => 2,
                'panel' => null,
                'request' => \$request,
            ]));

        \$response = \$controller->searchResultsAction(\$request, 'empty');
        \$this->assertEquals(200, \$response->getStatusCode());
    }

    public function provideCspVariants()
    {
        return [
            [true],
            [false],
        ];
    }

    private function createController(\$profiler, \$twig, \$withCSP)
    {
        \$urlGenerator = \$this->getMockBuilder('Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface')->getMock();

        if (\$withCSP) {
            \$nonceGenerator = \$this->getMockBuilder('Symfony\\Bundle\\WebProfilerBundle\\Csp\\NonceGenerator')->getMock();

            return new ProfilerController(\$urlGenerator, \$profiler, \$twig, [], new ContentSecurityPolicyHandler(\$nonceGenerator));
        }

        return new ProfilerController(\$urlGenerator, \$profiler, \$twig, []);
    }
}
", "vendor/symfony/web-profiler-bundle/Tests/Controller/ProfilerControllerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-profiler-bundle/Tests/Controller/ProfilerControllerTest.php");
    }
}
