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

/* vendor/symfony/flex/tests/SymfonyBundleTest.php */
class __TwigTemplate_2bbcc886760d4bfbaee4555e26cd9a102fc6061e8eb316cba397aad236109a48 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/tests/SymfonyBundleTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/flex/tests/SymfonyBundleTest.php"));

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

namespace Symfony\\Flex\\Tests;

use Composer\\Package\\Package;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Flex\\SymfonyBundle;

class SymfonyBundleTest extends TestCase
{
    /**
     * @dataProvider getNamespaces
     */
    public function testGetClassNamesForInstall(\$package, \$autoload, \$classes, \$type = null)
    {
        \$config = \$this->getMockBuilder('Composer\\Config')->getMock();
        \$config->expects(\$this->any())->method('get')->willReturn(__DIR__.'/Fixtures/vendor');
        \$composer = \$this->getMockBuilder('Composer\\Composer')->getMock();
        \$composer->expects(\$this->once())->method('getConfig')->willReturn(\$config);
        \$package = new Package(\$package, '1.0', '1.0');
        \$package->setAutoload(\$autoload);
        if (\$type) {
            \$package->setType(\$type);
        }

        \$bundle = new SymfonyBundle(\$composer, \$package, 'install');
        \$this->assertSame(\$classes, \$bundle->getClassNames());
    }

    public function getNamespaces()
    {
        return [
            [
                'symfony/debug-bundle',
                ['psr-4' => ['Symfony\\\\Bundle\\\\DebugBundle\\\\' => '']],
                ['Symfony\\\\Bundle\\\\DebugBundle\\\\DebugBundle'],
            ],
            [
                'symfony/dummy',
                ['psr-4' => ['Symfony\\\\Bundle\\\\FirstDummyBundle\\\\' => 'FirstDummyBundle/', 'Symfony\\\\Bundle\\\\SecondDummyBundle\\\\' => 'SecondDummyBundle/']],
                ['Symfony\\\\Bundle\\\\FirstDummyBundle\\\\FirstDummyBundle', 'Symfony\\\\Bundle\\\\SecondDummyBundle\\\\SecondDummyBundle'],
            ],
            [
                'doctrine/doctrine-cache-bundle',
                ['psr-4' => ['Doctrine\\\\Bundle\\\\DoctrineCacheBundle\\\\' => '']],
                ['Doctrine\\\\Bundle\\\\DoctrineCacheBundle\\\\DoctrineCacheBundle'],
            ],
            [
                'eightpoints/guzzle-bundle',
                ['psr-0' => ['EightPoints\\\\Bundle\\\\GuzzleBundle' => '']],
                ['EightPoints\\\\Bundle\\\\GuzzleBundle\\\\GuzzleBundle'],
            ],
            [
                'easycorp/easy-security-bundle',
                ['psr-4' => ['EasyCorp\\\\Bundle\\\\EasySecurityBundle\\\\' => '']],
                ['EasyCorp\\\\Bundle\\\\EasySecurityBundle\\\\EasySecurityBundle'],
            ],
            [
                'symfony-cmf/routing-bundle',
                ['psr-4' => ['Symfony\\\\Cmf\\\\Bundle\\\\RoutingBundle\\\\' => '']],
                ['Symfony\\\\Cmf\\\\Bundle\\\\RoutingBundle\\\\CmfRoutingBundle'],
            ],
            [
                'easycorp/easy-deploy-bundle',
                ['psr-4' => ['EasyCorp\\\\Bundle\\\\EasyDeployBundle\\\\' => 'src/']],
                ['EasyCorp\\\\Bundle\\\\EasyDeployBundle\\\\EasyDeployBundle'],
            ],
            [
                'easycorp/easy-deploy-bundle',
                ['psr-4' => ['EasyCorp\\\\Bundle\\\\EasyDeployBundle\\\\' => ['src', 'tests']]],
                ['EasyCorp\\\\Bundle\\\\EasyDeployBundle\\\\EasyDeployBundle'],
            ],
            [
                'web-token/jwt-bundle',
                ['psr-4' => ['Jose\\\\Bundle\\\\JoseFramework\\\\' => ['']]],
                ['Jose\\\\Bundle\\\\JoseFramework\\\\JoseFrameworkBundle'],
            ],
            [
                'sylius/shop-api-plugin',
                ['psr-4' => ['Sylius\\\\ShopApiPlugin\\\\' => 'src/']],
                ['Sylius\\\\ShopApiPlugin\\\\ShopApiPlugin'],
                'sylius-plugin',
            ],
            [
                'dunglas/sylius-acme-plugin',
                ['psr-4' => ['Dunglas\\\\SyliusAcmePlugin\\\\' => 'src/']],
                ['Dunglas\\\\SyliusAcmePlugin\\\\DunglasSyliusAcmePlugin'],
                'sylius-plugin',
            ],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/flex/tests/SymfonyBundleTest.php";
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

namespace Symfony\\Flex\\Tests;

use Composer\\Package\\Package;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Flex\\SymfonyBundle;

class SymfonyBundleTest extends TestCase
{
    /**
     * @dataProvider getNamespaces
     */
    public function testGetClassNamesForInstall(\$package, \$autoload, \$classes, \$type = null)
    {
        \$config = \$this->getMockBuilder('Composer\\Config')->getMock();
        \$config->expects(\$this->any())->method('get')->willReturn(__DIR__.'/Fixtures/vendor');
        \$composer = \$this->getMockBuilder('Composer\\Composer')->getMock();
        \$composer->expects(\$this->once())->method('getConfig')->willReturn(\$config);
        \$package = new Package(\$package, '1.0', '1.0');
        \$package->setAutoload(\$autoload);
        if (\$type) {
            \$package->setType(\$type);
        }

        \$bundle = new SymfonyBundle(\$composer, \$package, 'install');
        \$this->assertSame(\$classes, \$bundle->getClassNames());
    }

    public function getNamespaces()
    {
        return [
            [
                'symfony/debug-bundle',
                ['psr-4' => ['Symfony\\\\Bundle\\\\DebugBundle\\\\' => '']],
                ['Symfony\\\\Bundle\\\\DebugBundle\\\\DebugBundle'],
            ],
            [
                'symfony/dummy',
                ['psr-4' => ['Symfony\\\\Bundle\\\\FirstDummyBundle\\\\' => 'FirstDummyBundle/', 'Symfony\\\\Bundle\\\\SecondDummyBundle\\\\' => 'SecondDummyBundle/']],
                ['Symfony\\\\Bundle\\\\FirstDummyBundle\\\\FirstDummyBundle', 'Symfony\\\\Bundle\\\\SecondDummyBundle\\\\SecondDummyBundle'],
            ],
            [
                'doctrine/doctrine-cache-bundle',
                ['psr-4' => ['Doctrine\\\\Bundle\\\\DoctrineCacheBundle\\\\' => '']],
                ['Doctrine\\\\Bundle\\\\DoctrineCacheBundle\\\\DoctrineCacheBundle'],
            ],
            [
                'eightpoints/guzzle-bundle',
                ['psr-0' => ['EightPoints\\\\Bundle\\\\GuzzleBundle' => '']],
                ['EightPoints\\\\Bundle\\\\GuzzleBundle\\\\GuzzleBundle'],
            ],
            [
                'easycorp/easy-security-bundle',
                ['psr-4' => ['EasyCorp\\\\Bundle\\\\EasySecurityBundle\\\\' => '']],
                ['EasyCorp\\\\Bundle\\\\EasySecurityBundle\\\\EasySecurityBundle'],
            ],
            [
                'symfony-cmf/routing-bundle',
                ['psr-4' => ['Symfony\\\\Cmf\\\\Bundle\\\\RoutingBundle\\\\' => '']],
                ['Symfony\\\\Cmf\\\\Bundle\\\\RoutingBundle\\\\CmfRoutingBundle'],
            ],
            [
                'easycorp/easy-deploy-bundle',
                ['psr-4' => ['EasyCorp\\\\Bundle\\\\EasyDeployBundle\\\\' => 'src/']],
                ['EasyCorp\\\\Bundle\\\\EasyDeployBundle\\\\EasyDeployBundle'],
            ],
            [
                'easycorp/easy-deploy-bundle',
                ['psr-4' => ['EasyCorp\\\\Bundle\\\\EasyDeployBundle\\\\' => ['src', 'tests']]],
                ['EasyCorp\\\\Bundle\\\\EasyDeployBundle\\\\EasyDeployBundle'],
            ],
            [
                'web-token/jwt-bundle',
                ['psr-4' => ['Jose\\\\Bundle\\\\JoseFramework\\\\' => ['']]],
                ['Jose\\\\Bundle\\\\JoseFramework\\\\JoseFrameworkBundle'],
            ],
            [
                'sylius/shop-api-plugin',
                ['psr-4' => ['Sylius\\\\ShopApiPlugin\\\\' => 'src/']],
                ['Sylius\\\\ShopApiPlugin\\\\ShopApiPlugin'],
                'sylius-plugin',
            ],
            [
                'dunglas/sylius-acme-plugin',
                ['psr-4' => ['Dunglas\\\\SyliusAcmePlugin\\\\' => 'src/']],
                ['Dunglas\\\\SyliusAcmePlugin\\\\DunglasSyliusAcmePlugin'],
                'sylius-plugin',
            ],
        ];
    }
}
", "vendor/symfony/flex/tests/SymfonyBundleTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/flex/tests/SymfonyBundleTest.php");
    }
}
