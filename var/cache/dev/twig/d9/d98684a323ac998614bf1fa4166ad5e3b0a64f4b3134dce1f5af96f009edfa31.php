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

/* vendor/symfony/http-kernel/Tests/DataCollector/ConfigDataCollectorTest.php */
class __TwigTemplate_af06d2b6312f16664260b9c1fdd5af7c2a902e0d61a1601036245af3c3f04a16 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DataCollector/ConfigDataCollectorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DataCollector/ConfigDataCollectorTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\DataCollector;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector;
use Symfony\\Component\\HttpKernel\\Kernel;

class ConfigDataCollectorTest extends TestCase
{
    public function testCollect()
    {
        \$kernel = new KernelForTest('test', true);
        \$c = new ConfigDataCollector();
        \$c->setKernel(\$kernel);
        \$c->collect(new Request(), new Response());

        \$this->assertSame('test', \$c->getEnv());
        \$this->assertTrue(\$c->isDebug());
        \$this->assertSame('config', \$c->getName());
        \$this->assertRegExp('~^'.preg_quote(\$c->getPhpVersion(), '~').'~', PHP_VERSION);
        \$this->assertRegExp('~'.preg_quote((string) \$c->getPhpVersionExtra(), '~').'\$~', PHP_VERSION);
        \$this->assertSame(PHP_INT_SIZE * 8, \$c->getPhpArchitecture());
        \$this->assertSame(class_exists('Locale', false) && \\Locale::getDefault() ? \\Locale::getDefault() : 'n/a', \$c->getPhpIntlLocale());
        \$this->assertSame(date_default_timezone_get(), \$c->getPhpTimezone());
        \$this->assertSame(Kernel::VERSION, \$c->getSymfonyVersion());
        \$this->assertNull(\$c->getToken());
        \$this->assertSame(\\extension_loaded('xdebug'), \$c->hasXDebug());
        \$this->assertSame(\\extension_loaded('Zend OPcache') && filter_var(ini_get('opcache.enable'), FILTER_VALIDATE_BOOLEAN), \$c->hasZendOpcache());
        \$this->assertSame(\\extension_loaded('apcu') && filter_var(ini_get('apc.enabled'), FILTER_VALIDATE_BOOLEAN), \$c->hasApcu());
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"\$name\" argument in method \"Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector::__construct()\" is deprecated since Symfony 4.2.
     * @expectedDeprecation The \"\$version\" argument in method \"Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector::__construct()\" is deprecated since Symfony 4.2.
     * @expectedDeprecation The method \"Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector::getApplicationName()\" is deprecated since Symfony 4.2.
     * @expectedDeprecation The method \"Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector::getApplicationVersion()\" is deprecated since Symfony 4.2.
     */
    public function testLegacy()
    {
        \$c = new ConfigDataCollector('name', null);
        \$c->collect(new Request(), new Response());

        \$this->assertSame('name', \$c->getApplicationName());
        \$this->assertNull(\$c->getApplicationVersion());
    }
}

class KernelForTest extends Kernel
{
    public function registerBundles()
    {
    }

    public function getBundles()
    {
        return [];
    }

    public function registerContainerConfiguration(LoaderInterface \$loader)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/DataCollector/ConfigDataCollectorTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\DataCollector;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Loader\\LoaderInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector;
use Symfony\\Component\\HttpKernel\\Kernel;

class ConfigDataCollectorTest extends TestCase
{
    public function testCollect()
    {
        \$kernel = new KernelForTest('test', true);
        \$c = new ConfigDataCollector();
        \$c->setKernel(\$kernel);
        \$c->collect(new Request(), new Response());

        \$this->assertSame('test', \$c->getEnv());
        \$this->assertTrue(\$c->isDebug());
        \$this->assertSame('config', \$c->getName());
        \$this->assertRegExp('~^'.preg_quote(\$c->getPhpVersion(), '~').'~', PHP_VERSION);
        \$this->assertRegExp('~'.preg_quote((string) \$c->getPhpVersionExtra(), '~').'\$~', PHP_VERSION);
        \$this->assertSame(PHP_INT_SIZE * 8, \$c->getPhpArchitecture());
        \$this->assertSame(class_exists('Locale', false) && \\Locale::getDefault() ? \\Locale::getDefault() : 'n/a', \$c->getPhpIntlLocale());
        \$this->assertSame(date_default_timezone_get(), \$c->getPhpTimezone());
        \$this->assertSame(Kernel::VERSION, \$c->getSymfonyVersion());
        \$this->assertNull(\$c->getToken());
        \$this->assertSame(\\extension_loaded('xdebug'), \$c->hasXDebug());
        \$this->assertSame(\\extension_loaded('Zend OPcache') && filter_var(ini_get('opcache.enable'), FILTER_VALIDATE_BOOLEAN), \$c->hasZendOpcache());
        \$this->assertSame(\\extension_loaded('apcu') && filter_var(ini_get('apc.enabled'), FILTER_VALIDATE_BOOLEAN), \$c->hasApcu());
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"\$name\" argument in method \"Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector::__construct()\" is deprecated since Symfony 4.2.
     * @expectedDeprecation The \"\$version\" argument in method \"Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector::__construct()\" is deprecated since Symfony 4.2.
     * @expectedDeprecation The method \"Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector::getApplicationName()\" is deprecated since Symfony 4.2.
     * @expectedDeprecation The method \"Symfony\\Component\\HttpKernel\\DataCollector\\ConfigDataCollector::getApplicationVersion()\" is deprecated since Symfony 4.2.
     */
    public function testLegacy()
    {
        \$c = new ConfigDataCollector('name', null);
        \$c->collect(new Request(), new Response());

        \$this->assertSame('name', \$c->getApplicationName());
        \$this->assertNull(\$c->getApplicationVersion());
    }
}

class KernelForTest extends Kernel
{
    public function registerBundles()
    {
    }

    public function getBundles()
    {
        return [];
    }

    public function registerContainerConfiguration(LoaderInterface \$loader)
    {
    }
}
", "vendor/symfony/http-kernel/Tests/DataCollector/ConfigDataCollectorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/DataCollector/ConfigDataCollectorTest.php");
    }
}
