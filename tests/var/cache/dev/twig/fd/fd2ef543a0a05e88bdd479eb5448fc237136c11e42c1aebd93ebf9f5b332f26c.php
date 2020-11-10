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

/* vendor/symfony/http-kernel/Tests/CacheWarmer/CacheWarmerTest.php */
class __TwigTemplate_b2cf374e1e61ded5795ed7bb7a7841bedc5615800b7afece01319f5dfde33087 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/CacheWarmer/CacheWarmerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/CacheWarmer/CacheWarmerTest.php"));

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
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmer;

class CacheWarmerTest extends TestCase
{
    protected static \$cacheFile;

    public static function setUpBeforeClass(): void
    {
        self::\$cacheFile = tempnam(sys_get_temp_dir(), 'sf_cache_warmer_dir');
    }

    public static function tearDownAfterClass(): void
    {
        @unlink(self::\$cacheFile);
    }

    public function testWriteCacheFileCreatesTheFile()
    {
        \$warmer = new TestCacheWarmer(self::\$cacheFile);
        \$warmer->warmUp(\\dirname(self::\$cacheFile));

        \$this->assertFileExists(self::\$cacheFile);
    }

    public function testWriteNonWritableCacheFileThrowsARuntimeException()
    {
        \$this->expectException('RuntimeException');
        \$nonWritableFile = '/this/file/is/very/probably/not/writable';
        \$warmer = new TestCacheWarmer(\$nonWritableFile);
        \$warmer->warmUp(\\dirname(\$nonWritableFile));
    }
}

class TestCacheWarmer extends CacheWarmer
{
    protected \$file;

    public function __construct(\$file)
    {
        \$this->file = \$file;
    }

    public function warmUp(\$cacheDir)
    {
        \$this->writeCacheFile(\$this->file, 'content');
    }

    public function isOptional()
    {
        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/CacheWarmer/CacheWarmerTest.php";
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
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmer;

class CacheWarmerTest extends TestCase
{
    protected static \$cacheFile;

    public static function setUpBeforeClass(): void
    {
        self::\$cacheFile = tempnam(sys_get_temp_dir(), 'sf_cache_warmer_dir');
    }

    public static function tearDownAfterClass(): void
    {
        @unlink(self::\$cacheFile);
    }

    public function testWriteCacheFileCreatesTheFile()
    {
        \$warmer = new TestCacheWarmer(self::\$cacheFile);
        \$warmer->warmUp(\\dirname(self::\$cacheFile));

        \$this->assertFileExists(self::\$cacheFile);
    }

    public function testWriteNonWritableCacheFileThrowsARuntimeException()
    {
        \$this->expectException('RuntimeException');
        \$nonWritableFile = '/this/file/is/very/probably/not/writable';
        \$warmer = new TestCacheWarmer(\$nonWritableFile);
        \$warmer->warmUp(\\dirname(\$nonWritableFile));
    }
}

class TestCacheWarmer extends CacheWarmer
{
    protected \$file;

    public function __construct(\$file)
    {
        \$this->file = \$file;
    }

    public function warmUp(\$cacheDir)
    {
        \$this->writeCacheFile(\$this->file, 'content');
    }

    public function isOptional()
    {
        return false;
    }
}
", "vendor/symfony/http-kernel/Tests/CacheWarmer/CacheWarmerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/CacheWarmer/CacheWarmerTest.php");
    }
}
