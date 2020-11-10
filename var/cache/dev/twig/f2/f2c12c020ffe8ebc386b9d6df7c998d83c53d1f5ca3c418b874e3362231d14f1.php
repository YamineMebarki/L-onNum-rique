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

/* vendor/symfony/framework-bundle/Tests/Templating/GlobalVariablesTest.php */
class __TwigTemplate_154b1b6f1c815a1164ca1315d398321130df9c7515d18cc3d7afb2ef914fb9ef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/GlobalVariablesTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Templating/GlobalVariablesTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating;

use Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\DependencyInjection\\Container;

/**
 * @group legacy
 */
class GlobalVariablesTest extends TestCase
{
    private \$container;
    private \$globals;

    protected function setUp(): void
    {
        \$this->container = new Container();
        \$this->globals = new GlobalVariables(\$this->container);
    }

    public function testGetTokenNoTokenStorage()
    {
        \$this->assertNull(\$this->globals->getToken());
    }

    public function testGetTokenNoToken()
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$this->container->set('security.token_storage', \$tokenStorage);
        \$this->assertNull(\$this->globals->getToken());
    }

    public function testGetToken()
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();

        \$this->container->set('security.token_storage', \$tokenStorage);

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn('token');

        \$this->assertSame('token', \$this->globals->getToken());
    }

    public function testGetUserNoTokenStorage()
    {
        \$this->assertNull(\$this->globals->getUser());
    }

    public function testGetUserNoToken()
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$this->container->set('security.token_storage', \$tokenStorage);
        \$this->assertNull(\$this->globals->getUser());
    }

    /**
     * @dataProvider getUserProvider
     */
    public function testGetUser(\$user, \$expectedUser)
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();

        \$this->container->set('security.token_storage', \$tokenStorage);

        \$token
            ->expects(\$this->once())
            ->method('getUser')
            ->willReturn(\$user);

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(\$token);

        \$this->assertSame(\$expectedUser, \$this->globals->getUser());
    }

    public function getUserProvider()
    {
        \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$std = new \\stdClass();
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();

        return [
            [\$user, \$user],
            [\$std, \$std],
            [\$token, \$token],
            ['Anon.', null],
            [null, null],
            [10, null],
            [true, null],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Templating/GlobalVariablesTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Templating;

use Symfony\\Bundle\\FrameworkBundle\\Templating\\GlobalVariables;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;
use Symfony\\Component\\DependencyInjection\\Container;

/**
 * @group legacy
 */
class GlobalVariablesTest extends TestCase
{
    private \$container;
    private \$globals;

    protected function setUp(): void
    {
        \$this->container = new Container();
        \$this->globals = new GlobalVariables(\$this->container);
    }

    public function testGetTokenNoTokenStorage()
    {
        \$this->assertNull(\$this->globals->getToken());
    }

    public function testGetTokenNoToken()
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$this->container->set('security.token_storage', \$tokenStorage);
        \$this->assertNull(\$this->globals->getToken());
    }

    public function testGetToken()
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();

        \$this->container->set('security.token_storage', \$tokenStorage);

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn('token');

        \$this->assertSame('token', \$this->globals->getToken());
    }

    public function testGetUserNoTokenStorage()
    {
        \$this->assertNull(\$this->globals->getUser());
    }

    public function testGetUserNoToken()
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$this->container->set('security.token_storage', \$tokenStorage);
        \$this->assertNull(\$this->globals->getUser());
    }

    /**
     * @dataProvider getUserProvider
     */
    public function testGetUser(\$user, \$expectedUser)
    {
        \$tokenStorage = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface')->getMock();
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();

        \$this->container->set('security.token_storage', \$tokenStorage);

        \$token
            ->expects(\$this->once())
            ->method('getUser')
            ->willReturn(\$user);

        \$tokenStorage
            ->expects(\$this->once())
            ->method('getToken')
            ->willReturn(\$token);

        \$this->assertSame(\$expectedUser, \$this->globals->getUser());
    }

    public function getUserProvider()
    {
        \$user = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\User\\UserInterface')->getMock();
        \$std = new \\stdClass();
        \$token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();

        return [
            [\$user, \$user],
            [\$std, \$std],
            [\$token, \$token],
            ['Anon.', null],
            [null, null],
            [10, null],
            [true, null],
        ];
    }
}
", "vendor/symfony/framework-bundle/Tests/Templating/GlobalVariablesTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Templating/GlobalVariablesTest.php");
    }
}
