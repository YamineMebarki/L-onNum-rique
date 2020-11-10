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

/* vendor/symfony/http-kernel/Tests/CacheWarmer/CacheWarmerAggregateTest.php */
class __TwigTemplate_4d66495d2105640f2cff4bf69e059e6ffaf65526d054076f01b2e093f0a0bb22 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/CacheWarmer/CacheWarmerAggregateTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/CacheWarmer/CacheWarmerAggregateTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\CacheWarmer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate;

class CacheWarmerAggregateTest extends TestCase
{
    protected static \$cacheDir;

    public static function setUpBeforeClass(): void
    {
        self::\$cacheDir = tempnam(sys_get_temp_dir(), 'sf_cache_warmer_dir');
    }

    public static function tearDownAfterClass(): void
    {
        @unlink(self::\$cacheDir);
    }

    public function testInjectWarmersUsingConstructor()
    {
        \$warmer = \$this->getCacheWarmerMock();
        \$warmer
            ->expects(\$this->once())
            ->method('warmUp');
        \$aggregate = new CacheWarmerAggregate([\$warmer]);
        \$aggregate->warmUp(self::\$cacheDir);
    }

    public function testWarmupDoesCallWarmupOnOptionalWarmersWhenEnableOptionalWarmersIsEnabled()
    {
        \$warmer = \$this->getCacheWarmerMock();
        \$warmer
            ->expects(\$this->never())
            ->method('isOptional');
        \$warmer
            ->expects(\$this->once())
            ->method('warmUp');

        \$aggregate = new CacheWarmerAggregate([\$warmer]);
        \$aggregate->enableOptionalWarmers();
        \$aggregate->warmUp(self::\$cacheDir);
    }

    public function testWarmupDoesNotCallWarmupOnOptionalWarmersWhenEnableOptionalWarmersIsNotEnabled()
    {
        \$warmer = \$this->getCacheWarmerMock();
        \$warmer
            ->expects(\$this->once())
            ->method('isOptional')
            ->willReturn(true);
        \$warmer
            ->expects(\$this->never())
            ->method('warmUp');

        \$aggregate = new CacheWarmerAggregate([\$warmer]);
        \$aggregate->warmUp(self::\$cacheDir);
    }

    protected function getCacheWarmerMock()
    {
        \$warmer = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface')
            ->disableOriginalConstructor()
            ->getMock();

        return \$warmer;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/CacheWarmer/CacheWarmerAggregateTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\CacheWarmer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerAggregate;

class CacheWarmerAggregateTest extends TestCase
{
    protected static \$cacheDir;

    public static function setUpBeforeClass(): void
    {
        self::\$cacheDir = tempnam(sys_get_temp_dir(), 'sf_cache_warmer_dir');
    }

    public static function tearDownAfterClass(): void
    {
        @unlink(self::\$cacheDir);
    }

    public function testInjectWarmersUsingConstructor()
    {
        \$warmer = \$this->getCacheWarmerMock();
        \$warmer
            ->expects(\$this->once())
            ->method('warmUp');
        \$aggregate = new CacheWarmerAggregate([\$warmer]);
        \$aggregate->warmUp(self::\$cacheDir);
    }

    public function testWarmupDoesCallWarmupOnOptionalWarmersWhenEnableOptionalWarmersIsEnabled()
    {
        \$warmer = \$this->getCacheWarmerMock();
        \$warmer
            ->expects(\$this->never())
            ->method('isOptional');
        \$warmer
            ->expects(\$this->once())
            ->method('warmUp');

        \$aggregate = new CacheWarmerAggregate([\$warmer]);
        \$aggregate->enableOptionalWarmers();
        \$aggregate->warmUp(self::\$cacheDir);
    }

    public function testWarmupDoesNotCallWarmupOnOptionalWarmersWhenEnableOptionalWarmersIsNotEnabled()
    {
        \$warmer = \$this->getCacheWarmerMock();
        \$warmer
            ->expects(\$this->once())
            ->method('isOptional')
            ->willReturn(true);
        \$warmer
            ->expects(\$this->never())
            ->method('warmUp');

        \$aggregate = new CacheWarmerAggregate([\$warmer]);
        \$aggregate->warmUp(self::\$cacheDir);
    }

    protected function getCacheWarmerMock()
    {
        \$warmer = \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface')
            ->disableOriginalConstructor()
            ->getMock();

        return \$warmer;
    }
}
", "vendor/symfony/http-kernel/Tests/CacheWarmer/CacheWarmerAggregateTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/CacheWarmer/CacheWarmerAggregateTest.php");
    }
}
