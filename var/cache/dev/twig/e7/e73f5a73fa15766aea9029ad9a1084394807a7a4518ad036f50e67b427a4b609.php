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

/* vendor/symfony/security-bundle/Tests/SecurityUserValueResolverTest.php */
class __TwigTemplate_680507453bb8b551686e2601787a8708d522c83a84ff24dd6e37a5dafa8a3ea9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/SecurityUserValueResolverTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/SecurityUserValueResolverTest.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\SecurityBundle\\SecurityUserValueResolver;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\DefaultValueResolver;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorage;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * @group legacy
 */
class SecurityUserValueResolverTest extends TestCase
{
    public function testResolveNoToken()
    {
        \$tokenStorage = new TokenStorage();
        \$resolver = new SecurityUserValueResolver(\$tokenStorage);
        \$metadata = new ArgumentMetadata('foo', UserInterface::class, false, false, null);

        \$this->assertFalse(\$resolver->supports(Request::create('/'), \$metadata));
    }

    public function testResolveNoUser()
    {
        \$mock = \$this->getMockBuilder(UserInterface::class)->getMock();
        \$token = \$this->getMockBuilder(TokenInterface::class)->getMock();
        \$tokenStorage = new TokenStorage();
        \$tokenStorage->setToken(\$token);

        \$resolver = new SecurityUserValueResolver(\$tokenStorage);
        \$metadata = new ArgumentMetadata('foo', \\get_class(\$mock), false, false, null);

        \$this->assertFalse(\$resolver->supports(Request::create('/'), \$metadata));
    }

    public function testResolveWrongType()
    {
        \$tokenStorage = new TokenStorage();
        \$resolver = new SecurityUserValueResolver(\$tokenStorage);
        \$metadata = new ArgumentMetadata('foo', null, false, false, null);

        \$this->assertFalse(\$resolver->supports(Request::create('/'), \$metadata));
    }

    public function testResolve()
    {
        \$user = \$this->getMockBuilder(UserInterface::class)->getMock();
        \$token = \$this->getMockBuilder(TokenInterface::class)->getMock();
        \$token->expects(\$this->any())->method('getUser')->willReturn(\$user);
        \$tokenStorage = new TokenStorage();
        \$tokenStorage->setToken(\$token);

        \$resolver = new SecurityUserValueResolver(\$tokenStorage);
        \$metadata = new ArgumentMetadata('foo', UserInterface::class, false, false, null);

        \$this->assertTrue(\$resolver->supports(Request::create('/'), \$metadata));
        \$this->assertSame([\$user], iterator_to_array(\$resolver->resolve(Request::create('/'), \$metadata)));
    }

    public function testIntegration()
    {
        \$user = \$this->getMockBuilder(UserInterface::class)->getMock();
        \$token = \$this->getMockBuilder(TokenInterface::class)->getMock();
        \$token->expects(\$this->any())->method('getUser')->willReturn(\$user);
        \$tokenStorage = new TokenStorage();
        \$tokenStorage->setToken(\$token);

        \$argumentResolver = new ArgumentResolver(null, [new SecurityUserValueResolver(\$tokenStorage)]);
        \$this->assertSame([\$user], \$argumentResolver->getArguments(Request::create('/'), function (UserInterface \$user) {}));
    }

    public function testIntegrationNoUser()
    {
        \$token = \$this->getMockBuilder(TokenInterface::class)->getMock();
        \$tokenStorage = new TokenStorage();
        \$tokenStorage->setToken(\$token);

        \$argumentResolver = new ArgumentResolver(null, [new SecurityUserValueResolver(\$tokenStorage), new DefaultValueResolver()]);
        \$this->assertSame([null], \$argumentResolver->getArguments(Request::create('/'), function (UserInterface \$user = null) {}));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/SecurityUserValueResolverTest.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bundle\\SecurityBundle\\SecurityUserValueResolver;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentResolver\\DefaultValueResolver;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorage;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * @group legacy
 */
class SecurityUserValueResolverTest extends TestCase
{
    public function testResolveNoToken()
    {
        \$tokenStorage = new TokenStorage();
        \$resolver = new SecurityUserValueResolver(\$tokenStorage);
        \$metadata = new ArgumentMetadata('foo', UserInterface::class, false, false, null);

        \$this->assertFalse(\$resolver->supports(Request::create('/'), \$metadata));
    }

    public function testResolveNoUser()
    {
        \$mock = \$this->getMockBuilder(UserInterface::class)->getMock();
        \$token = \$this->getMockBuilder(TokenInterface::class)->getMock();
        \$tokenStorage = new TokenStorage();
        \$tokenStorage->setToken(\$token);

        \$resolver = new SecurityUserValueResolver(\$tokenStorage);
        \$metadata = new ArgumentMetadata('foo', \\get_class(\$mock), false, false, null);

        \$this->assertFalse(\$resolver->supports(Request::create('/'), \$metadata));
    }

    public function testResolveWrongType()
    {
        \$tokenStorage = new TokenStorage();
        \$resolver = new SecurityUserValueResolver(\$tokenStorage);
        \$metadata = new ArgumentMetadata('foo', null, false, false, null);

        \$this->assertFalse(\$resolver->supports(Request::create('/'), \$metadata));
    }

    public function testResolve()
    {
        \$user = \$this->getMockBuilder(UserInterface::class)->getMock();
        \$token = \$this->getMockBuilder(TokenInterface::class)->getMock();
        \$token->expects(\$this->any())->method('getUser')->willReturn(\$user);
        \$tokenStorage = new TokenStorage();
        \$tokenStorage->setToken(\$token);

        \$resolver = new SecurityUserValueResolver(\$tokenStorage);
        \$metadata = new ArgumentMetadata('foo', UserInterface::class, false, false, null);

        \$this->assertTrue(\$resolver->supports(Request::create('/'), \$metadata));
        \$this->assertSame([\$user], iterator_to_array(\$resolver->resolve(Request::create('/'), \$metadata)));
    }

    public function testIntegration()
    {
        \$user = \$this->getMockBuilder(UserInterface::class)->getMock();
        \$token = \$this->getMockBuilder(TokenInterface::class)->getMock();
        \$token->expects(\$this->any())->method('getUser')->willReturn(\$user);
        \$tokenStorage = new TokenStorage();
        \$tokenStorage->setToken(\$token);

        \$argumentResolver = new ArgumentResolver(null, [new SecurityUserValueResolver(\$tokenStorage)]);
        \$this->assertSame([\$user], \$argumentResolver->getArguments(Request::create('/'), function (UserInterface \$user) {}));
    }

    public function testIntegrationNoUser()
    {
        \$token = \$this->getMockBuilder(TokenInterface::class)->getMock();
        \$tokenStorage = new TokenStorage();
        \$tokenStorage->setToken(\$token);

        \$argumentResolver = new ArgumentResolver(null, [new SecurityUserValueResolver(\$tokenStorage), new DefaultValueResolver()]);
        \$this->assertSame([null], \$argumentResolver->getArguments(Request::create('/'), function (UserInterface \$user = null) {}));
    }
}
", "vendor/symfony/security-bundle/Tests/SecurityUserValueResolverTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/SecurityUserValueResolverTest.php");
    }
}
