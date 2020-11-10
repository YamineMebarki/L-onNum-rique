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

/* vendor/symfony/security-core/Tests/Authentication/RememberMe/InMemoryTokenProviderTest.php */
class __TwigTemplate_aa71032ea546a6d1d13ad464b7a4d59590e21d9250a047311e8f5d6cb5a4a365 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authentication/RememberMe/InMemoryTokenProviderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authentication/RememberMe/InMemoryTokenProviderTest.php"));

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

namespace Symfony\\Component\\Security\\Core\\Tests\\Authentication\\RememberMe;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider;
use Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\PersistentToken;

class InMemoryTokenProviderTest extends TestCase
{
    public function testCreateNewToken()
    {
        \$provider = new InMemoryTokenProvider();

        \$token = new PersistentToken('foo', 'foo', 'foo', 'foo', new \\DateTime());
        \$provider->createNewToken(\$token);

        \$this->assertSame(\$provider->loadTokenBySeries('foo'), \$token);
    }

    public function testLoadTokenBySeriesThrowsNotFoundException()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\TokenNotFoundException');
        \$provider = new InMemoryTokenProvider();
        \$provider->loadTokenBySeries('foo');
    }

    public function testUpdateToken()
    {
        \$provider = new InMemoryTokenProvider();

        \$token = new PersistentToken('foo', 'foo', 'foo', 'foo', new \\DateTime());
        \$provider->createNewToken(\$token);
        \$provider->updateToken('foo', 'newFoo', \$lastUsed = new \\DateTime());
        \$token = \$provider->loadTokenBySeries('foo');

        \$this->assertEquals('newFoo', \$token->getTokenValue());
        \$this->assertSame(\$token->getLastUsed(), \$lastUsed);
    }

    public function testDeleteToken()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\TokenNotFoundException');
        \$provider = new InMemoryTokenProvider();

        \$token = new PersistentToken('foo', 'foo', 'foo', 'foo', new \\DateTime());
        \$provider->createNewToken(\$token);
        \$provider->deleteTokenBySeries('foo');
        \$provider->loadTokenBySeries('foo');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Authentication/RememberMe/InMemoryTokenProviderTest.php";
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

namespace Symfony\\Component\\Security\\Core\\Tests\\Authentication\\RememberMe;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\InMemoryTokenProvider;
use Symfony\\Component\\Security\\Core\\Authentication\\RememberMe\\PersistentToken;

class InMemoryTokenProviderTest extends TestCase
{
    public function testCreateNewToken()
    {
        \$provider = new InMemoryTokenProvider();

        \$token = new PersistentToken('foo', 'foo', 'foo', 'foo', new \\DateTime());
        \$provider->createNewToken(\$token);

        \$this->assertSame(\$provider->loadTokenBySeries('foo'), \$token);
    }

    public function testLoadTokenBySeriesThrowsNotFoundException()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\TokenNotFoundException');
        \$provider = new InMemoryTokenProvider();
        \$provider->loadTokenBySeries('foo');
    }

    public function testUpdateToken()
    {
        \$provider = new InMemoryTokenProvider();

        \$token = new PersistentToken('foo', 'foo', 'foo', 'foo', new \\DateTime());
        \$provider->createNewToken(\$token);
        \$provider->updateToken('foo', 'newFoo', \$lastUsed = new \\DateTime());
        \$token = \$provider->loadTokenBySeries('foo');

        \$this->assertEquals('newFoo', \$token->getTokenValue());
        \$this->assertSame(\$token->getLastUsed(), \$lastUsed);
    }

    public function testDeleteToken()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\TokenNotFoundException');
        \$provider = new InMemoryTokenProvider();

        \$token = new PersistentToken('foo', 'foo', 'foo', 'foo', new \\DateTime());
        \$provider->createNewToken(\$token);
        \$provider->deleteTokenBySeries('foo');
        \$provider->loadTokenBySeries('foo');
    }
}
", "vendor/symfony/security-core/Tests/Authentication/RememberMe/InMemoryTokenProviderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Authentication/RememberMe/InMemoryTokenProviderTest.php");
    }
}
