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

/* vendor/symfony/config/Tests/ConfigCacheTest.php */
class __TwigTemplate_d5df341bcaa42b84f8a32b6534f4bbcb456848123dbf742b903cba626cf6a7b5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/ConfigCacheTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/ConfigCacheTest.php"));

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

namespace Symfony\\Component\\Config\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\ConfigCache;
use Symfony\\Component\\Config\\Tests\\Resource\\ResourceStub;

class ConfigCacheTest extends TestCase
{
    private \$cacheFile = null;

    protected function setUp(): void
    {
        \$this->cacheFile = tempnam(sys_get_temp_dir(), 'config_');
    }

    protected function tearDown(): void
    {
        \$files = [\$this->cacheFile, \$this->cacheFile.'.meta'];

        foreach (\$files as \$file) {
            if (file_exists(\$file)) {
                unlink(\$file);
            }
        }
    }

    /**
     * @dataProvider debugModes
     */
    public function testCacheIsNotValidIfNothingHasBeenCached(\$debug)
    {
        unlink(\$this->cacheFile); // remove tempnam() side effect
        \$cache = new ConfigCache(\$this->cacheFile, \$debug);

        \$this->assertFalse(\$cache->isFresh());
    }

    public function testIsAlwaysFreshInProduction()
    {
        \$staleResource = new ResourceStub();
        \$staleResource->setFresh(false);

        \$cache = new ConfigCache(\$this->cacheFile, false);
        \$cache->write('', [\$staleResource]);

        \$this->assertTrue(\$cache->isFresh());
    }

    /**
     * @dataProvider debugModes
     */
    public function testIsFreshWhenNoResourceProvided(\$debug)
    {
        \$cache = new ConfigCache(\$this->cacheFile, \$debug);
        \$cache->write('', []);
        \$this->assertTrue(\$cache->isFresh());
    }

    public function testFreshResourceInDebug()
    {
        \$freshResource = new ResourceStub();
        \$freshResource->setFresh(true);

        \$cache = new ConfigCache(\$this->cacheFile, true);
        \$cache->write('', [\$freshResource]);

        \$this->assertTrue(\$cache->isFresh());
    }

    public function testStaleResourceInDebug()
    {
        \$staleResource = new ResourceStub();
        \$staleResource->setFresh(false);

        \$cache = new ConfigCache(\$this->cacheFile, true);
        \$cache->write('', [\$staleResource]);

        \$this->assertFalse(\$cache->isFresh());
    }

    public function debugModes()
    {
        return [
            [true],
            [false],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/ConfigCacheTest.php";
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

namespace Symfony\\Component\\Config\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\ConfigCache;
use Symfony\\Component\\Config\\Tests\\Resource\\ResourceStub;

class ConfigCacheTest extends TestCase
{
    private \$cacheFile = null;

    protected function setUp(): void
    {
        \$this->cacheFile = tempnam(sys_get_temp_dir(), 'config_');
    }

    protected function tearDown(): void
    {
        \$files = [\$this->cacheFile, \$this->cacheFile.'.meta'];

        foreach (\$files as \$file) {
            if (file_exists(\$file)) {
                unlink(\$file);
            }
        }
    }

    /**
     * @dataProvider debugModes
     */
    public function testCacheIsNotValidIfNothingHasBeenCached(\$debug)
    {
        unlink(\$this->cacheFile); // remove tempnam() side effect
        \$cache = new ConfigCache(\$this->cacheFile, \$debug);

        \$this->assertFalse(\$cache->isFresh());
    }

    public function testIsAlwaysFreshInProduction()
    {
        \$staleResource = new ResourceStub();
        \$staleResource->setFresh(false);

        \$cache = new ConfigCache(\$this->cacheFile, false);
        \$cache->write('', [\$staleResource]);

        \$this->assertTrue(\$cache->isFresh());
    }

    /**
     * @dataProvider debugModes
     */
    public function testIsFreshWhenNoResourceProvided(\$debug)
    {
        \$cache = new ConfigCache(\$this->cacheFile, \$debug);
        \$cache->write('', []);
        \$this->assertTrue(\$cache->isFresh());
    }

    public function testFreshResourceInDebug()
    {
        \$freshResource = new ResourceStub();
        \$freshResource->setFresh(true);

        \$cache = new ConfigCache(\$this->cacheFile, true);
        \$cache->write('', [\$freshResource]);

        \$this->assertTrue(\$cache->isFresh());
    }

    public function testStaleResourceInDebug()
    {
        \$staleResource = new ResourceStub();
        \$staleResource->setFresh(false);

        \$cache = new ConfigCache(\$this->cacheFile, true);
        \$cache->write('', [\$staleResource]);

        \$this->assertFalse(\$cache->isFresh());
    }

    public function debugModes()
    {
        return [
            [true],
            [false],
        ];
    }
}
", "vendor/symfony/config/Tests/ConfigCacheTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/ConfigCacheTest.php");
    }
}
