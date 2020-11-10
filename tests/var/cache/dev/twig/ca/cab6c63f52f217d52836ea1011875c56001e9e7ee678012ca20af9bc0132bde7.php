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

/* vendor/symfony/security-csrf/Tests/CsrfTokenManagerTest.php */
class __TwigTemplate_f15fde08dd155870287976f296cf950e0f7f8a4461635875b0509b6f227b627b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/Tests/CsrfTokenManagerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/Tests/CsrfTokenManagerTest.php"));

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

namespace Symfony\\Component\\Security\\Csrf\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Security\\Csrf\\CsrfToken;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManager;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CsrfTokenManagerTest extends TestCase
{
    /**
     * @dataProvider getManagerGeneratorAndStorage
     */
    public function testGetNonExistingToken(\$namespace, \$manager, \$storage, \$generator)
    {
        \$storage->expects(\$this->once())
            ->method('hasToken')
            ->with(\$namespace.'token_id')
            ->willReturn(false);

        \$generator->expects(\$this->once())
            ->method('generateToken')
            ->willReturn('TOKEN');

        \$storage->expects(\$this->once())
            ->method('setToken')
            ->with(\$namespace.'token_id', 'TOKEN');

        \$token = \$manager->getToken('token_id');

        \$this->assertInstanceOf('Symfony\\Component\\Security\\Csrf\\CsrfToken', \$token);
        \$this->assertSame('token_id', \$token->getId());
        \$this->assertSame('TOKEN', \$token->getValue());
    }

    /**
     * @dataProvider getManagerGeneratorAndStorage
     */
    public function testUseExistingTokenIfAvailable(\$namespace, \$manager, \$storage)
    {
        \$storage->expects(\$this->once())
            ->method('hasToken')
            ->with(\$namespace.'token_id')
            ->willReturn(true);

        \$storage->expects(\$this->once())
            ->method('getToken')
            ->with(\$namespace.'token_id')
            ->willReturn('TOKEN');

        \$token = \$manager->getToken('token_id');

        \$this->assertInstanceOf('Symfony\\Component\\Security\\Csrf\\CsrfToken', \$token);
        \$this->assertSame('token_id', \$token->getId());
        \$this->assertSame('TOKEN', \$token->getValue());
    }

    /**
     * @dataProvider getManagerGeneratorAndStorage
     */
    public function testRefreshTokenAlwaysReturnsNewToken(\$namespace, \$manager, \$storage, \$generator)
    {
        \$storage->expects(\$this->never())
            ->method('hasToken');

        \$generator->expects(\$this->once())
            ->method('generateToken')
            ->willReturn('TOKEN');

        \$storage->expects(\$this->once())
            ->method('setToken')
            ->with(\$namespace.'token_id', 'TOKEN');

        \$token = \$manager->refreshToken('token_id');

        \$this->assertInstanceOf('Symfony\\Component\\Security\\Csrf\\CsrfToken', \$token);
        \$this->assertSame('token_id', \$token->getId());
        \$this->assertSame('TOKEN', \$token->getValue());
    }

    /**
     * @dataProvider getManagerGeneratorAndStorage
     */
    public function testMatchingTokenIsValid(\$namespace, \$manager, \$storage)
    {
        \$storage->expects(\$this->once())
            ->method('hasToken')
            ->with(\$namespace.'token_id')
            ->willReturn(true);

        \$storage->expects(\$this->once())
            ->method('getToken')
            ->with(\$namespace.'token_id')
            ->willReturn('TOKEN');

        \$this->assertTrue(\$manager->isTokenValid(new CsrfToken('token_id', 'TOKEN')));
    }

    /**
     * @dataProvider getManagerGeneratorAndStorage
     */
    public function testNonMatchingTokenIsNotValid(\$namespace, \$manager, \$storage)
    {
        \$storage->expects(\$this->once())
            ->method('hasToken')
            ->with(\$namespace.'token_id')
            ->willReturn(true);

        \$storage->expects(\$this->once())
            ->method('getToken')
            ->with(\$namespace.'token_id')
            ->willReturn('TOKEN');

        \$this->assertFalse(\$manager->isTokenValid(new CsrfToken('token_id', 'FOOBAR')));
    }

    /**
     * @dataProvider getManagerGeneratorAndStorage
     */
    public function testNonExistingTokenIsNotValid(\$namespace, \$manager, \$storage)
    {
        \$storage->expects(\$this->once())
            ->method('hasToken')
            ->with(\$namespace.'token_id')
            ->willReturn(false);

        \$storage->expects(\$this->never())
            ->method('getToken');

        \$this->assertFalse(\$manager->isTokenValid(new CsrfToken('token_id', 'FOOBAR')));
    }

    /**
     * @dataProvider getManagerGeneratorAndStorage
     */
    public function testRemoveToken(\$namespace, \$manager, \$storage)
    {
        \$storage->expects(\$this->once())
            ->method('removeToken')
            ->with(\$namespace.'token_id')
            ->willReturn('REMOVED_TOKEN');

        \$this->assertSame('REMOVED_TOKEN', \$manager->removeToken('token_id'));
    }

    public function testNamespaced()
    {
        \$generator = \$this->getMockBuilder('Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface')->getMock();
        \$storage = \$this->getMockBuilder('Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface')->getMock();

        \$requestStack = new RequestStack();
        \$requestStack->push(new Request([], [], [], [], [], ['HTTPS' => 'on']));

        \$manager = new CsrfTokenManager(\$generator, \$storage);

        \$token = \$manager->getToken('foo');
        \$this->assertSame('foo', \$token->getId());
    }

    public function getManagerGeneratorAndStorage()
    {
        \$data = [];

        list(\$generator, \$storage) = \$this->getGeneratorAndStorage();
        \$data[] = ['', new CsrfTokenManager(\$generator, \$storage, ''), \$storage, \$generator];

        list(\$generator, \$storage) = \$this->getGeneratorAndStorage();
        \$data[] = ['https-', new CsrfTokenManager(\$generator, \$storage), \$storage, \$generator];

        list(\$generator, \$storage) = \$this->getGeneratorAndStorage();
        \$data[] = ['aNamespace-', new CsrfTokenManager(\$generator, \$storage, 'aNamespace-'), \$storage, \$generator];

        \$requestStack = new RequestStack();
        \$requestStack->push(new Request([], [], [], [], [], ['HTTPS' => 'on']));
        list(\$generator, \$storage) = \$this->getGeneratorAndStorage();
        \$data[] = ['https-', new CsrfTokenManager(\$generator, \$storage, \$requestStack), \$storage, \$generator];

        list(\$generator, \$storage) = \$this->getGeneratorAndStorage();
        \$data[] = ['generated-', new CsrfTokenManager(\$generator, \$storage, function () {
            return 'generated-';
        }), \$storage, \$generator];

        \$requestStack = new RequestStack();
        \$requestStack->push(new Request());
        list(\$generator, \$storage) = \$this->getGeneratorAndStorage();
        \$data[] = ['', new CsrfTokenManager(\$generator, \$storage, \$requestStack), \$storage, \$generator];

        return \$data;
    }

    private function getGeneratorAndStorage()
    {
        return [
            \$this->getMockBuilder('Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface')->getMock(),
            \$this->getMockBuilder('Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface')->getMock(),
        ];
    }

    protected function setUp(): void
    {
        \$_SERVER['HTTPS'] = 'on';
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        unset(\$_SERVER['HTTPS']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-csrf/Tests/CsrfTokenManagerTest.php";
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

namespace Symfony\\Component\\Security\\Csrf\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Security\\Csrf\\CsrfToken;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManager;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CsrfTokenManagerTest extends TestCase
{
    /**
     * @dataProvider getManagerGeneratorAndStorage
     */
    public function testGetNonExistingToken(\$namespace, \$manager, \$storage, \$generator)
    {
        \$storage->expects(\$this->once())
            ->method('hasToken')
            ->with(\$namespace.'token_id')
            ->willReturn(false);

        \$generator->expects(\$this->once())
            ->method('generateToken')
            ->willReturn('TOKEN');

        \$storage->expects(\$this->once())
            ->method('setToken')
            ->with(\$namespace.'token_id', 'TOKEN');

        \$token = \$manager->getToken('token_id');

        \$this->assertInstanceOf('Symfony\\Component\\Security\\Csrf\\CsrfToken', \$token);
        \$this->assertSame('token_id', \$token->getId());
        \$this->assertSame('TOKEN', \$token->getValue());
    }

    /**
     * @dataProvider getManagerGeneratorAndStorage
     */
    public function testUseExistingTokenIfAvailable(\$namespace, \$manager, \$storage)
    {
        \$storage->expects(\$this->once())
            ->method('hasToken')
            ->with(\$namespace.'token_id')
            ->willReturn(true);

        \$storage->expects(\$this->once())
            ->method('getToken')
            ->with(\$namespace.'token_id')
            ->willReturn('TOKEN');

        \$token = \$manager->getToken('token_id');

        \$this->assertInstanceOf('Symfony\\Component\\Security\\Csrf\\CsrfToken', \$token);
        \$this->assertSame('token_id', \$token->getId());
        \$this->assertSame('TOKEN', \$token->getValue());
    }

    /**
     * @dataProvider getManagerGeneratorAndStorage
     */
    public function testRefreshTokenAlwaysReturnsNewToken(\$namespace, \$manager, \$storage, \$generator)
    {
        \$storage->expects(\$this->never())
            ->method('hasToken');

        \$generator->expects(\$this->once())
            ->method('generateToken')
            ->willReturn('TOKEN');

        \$storage->expects(\$this->once())
            ->method('setToken')
            ->with(\$namespace.'token_id', 'TOKEN');

        \$token = \$manager->refreshToken('token_id');

        \$this->assertInstanceOf('Symfony\\Component\\Security\\Csrf\\CsrfToken', \$token);
        \$this->assertSame('token_id', \$token->getId());
        \$this->assertSame('TOKEN', \$token->getValue());
    }

    /**
     * @dataProvider getManagerGeneratorAndStorage
     */
    public function testMatchingTokenIsValid(\$namespace, \$manager, \$storage)
    {
        \$storage->expects(\$this->once())
            ->method('hasToken')
            ->with(\$namespace.'token_id')
            ->willReturn(true);

        \$storage->expects(\$this->once())
            ->method('getToken')
            ->with(\$namespace.'token_id')
            ->willReturn('TOKEN');

        \$this->assertTrue(\$manager->isTokenValid(new CsrfToken('token_id', 'TOKEN')));
    }

    /**
     * @dataProvider getManagerGeneratorAndStorage
     */
    public function testNonMatchingTokenIsNotValid(\$namespace, \$manager, \$storage)
    {
        \$storage->expects(\$this->once())
            ->method('hasToken')
            ->with(\$namespace.'token_id')
            ->willReturn(true);

        \$storage->expects(\$this->once())
            ->method('getToken')
            ->with(\$namespace.'token_id')
            ->willReturn('TOKEN');

        \$this->assertFalse(\$manager->isTokenValid(new CsrfToken('token_id', 'FOOBAR')));
    }

    /**
     * @dataProvider getManagerGeneratorAndStorage
     */
    public function testNonExistingTokenIsNotValid(\$namespace, \$manager, \$storage)
    {
        \$storage->expects(\$this->once())
            ->method('hasToken')
            ->with(\$namespace.'token_id')
            ->willReturn(false);

        \$storage->expects(\$this->never())
            ->method('getToken');

        \$this->assertFalse(\$manager->isTokenValid(new CsrfToken('token_id', 'FOOBAR')));
    }

    /**
     * @dataProvider getManagerGeneratorAndStorage
     */
    public function testRemoveToken(\$namespace, \$manager, \$storage)
    {
        \$storage->expects(\$this->once())
            ->method('removeToken')
            ->with(\$namespace.'token_id')
            ->willReturn('REMOVED_TOKEN');

        \$this->assertSame('REMOVED_TOKEN', \$manager->removeToken('token_id'));
    }

    public function testNamespaced()
    {
        \$generator = \$this->getMockBuilder('Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface')->getMock();
        \$storage = \$this->getMockBuilder('Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface')->getMock();

        \$requestStack = new RequestStack();
        \$requestStack->push(new Request([], [], [], [], [], ['HTTPS' => 'on']));

        \$manager = new CsrfTokenManager(\$generator, \$storage);

        \$token = \$manager->getToken('foo');
        \$this->assertSame('foo', \$token->getId());
    }

    public function getManagerGeneratorAndStorage()
    {
        \$data = [];

        list(\$generator, \$storage) = \$this->getGeneratorAndStorage();
        \$data[] = ['', new CsrfTokenManager(\$generator, \$storage, ''), \$storage, \$generator];

        list(\$generator, \$storage) = \$this->getGeneratorAndStorage();
        \$data[] = ['https-', new CsrfTokenManager(\$generator, \$storage), \$storage, \$generator];

        list(\$generator, \$storage) = \$this->getGeneratorAndStorage();
        \$data[] = ['aNamespace-', new CsrfTokenManager(\$generator, \$storage, 'aNamespace-'), \$storage, \$generator];

        \$requestStack = new RequestStack();
        \$requestStack->push(new Request([], [], [], [], [], ['HTTPS' => 'on']));
        list(\$generator, \$storage) = \$this->getGeneratorAndStorage();
        \$data[] = ['https-', new CsrfTokenManager(\$generator, \$storage, \$requestStack), \$storage, \$generator];

        list(\$generator, \$storage) = \$this->getGeneratorAndStorage();
        \$data[] = ['generated-', new CsrfTokenManager(\$generator, \$storage, function () {
            return 'generated-';
        }), \$storage, \$generator];

        \$requestStack = new RequestStack();
        \$requestStack->push(new Request());
        list(\$generator, \$storage) = \$this->getGeneratorAndStorage();
        \$data[] = ['', new CsrfTokenManager(\$generator, \$storage, \$requestStack), \$storage, \$generator];

        return \$data;
    }

    private function getGeneratorAndStorage()
    {
        return [
            \$this->getMockBuilder('Symfony\\Component\\Security\\Csrf\\TokenGenerator\\TokenGeneratorInterface')->getMock(),
            \$this->getMockBuilder('Symfony\\Component\\Security\\Csrf\\TokenStorage\\TokenStorageInterface')->getMock(),
        ];
    }

    protected function setUp(): void
    {
        \$_SERVER['HTTPS'] = 'on';
    }

    protected function tearDown(): void
    {
        parent::tearDown();

        unset(\$_SERVER['HTTPS']);
    }
}
", "vendor/symfony/security-csrf/Tests/CsrfTokenManagerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-csrf/Tests/CsrfTokenManagerTest.php");
    }
}
