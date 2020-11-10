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

/* vendor/symfony/config/Tests/ResourceCheckerConfigCacheTest.php */
class __TwigTemplate_48217bd4e9fd4ff0c524cd04d85227775d2a6126f995a9b19983b57a6fe062d1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/ResourceCheckerConfigCacheTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/ResourceCheckerConfigCacheTest.php"));

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
use Symfony\\Component\\Config\\Resource\\FileResource;
use Symfony\\Component\\Config\\ResourceCheckerConfigCache;
use Symfony\\Component\\Config\\Tests\\Resource\\ResourceStub;

class ResourceCheckerConfigCacheTest extends TestCase
{
    private \$cacheFile = null;

    protected function setUp(): void
    {
        \$this->cacheFile = tempnam(sys_get_temp_dir(), 'config_');
    }

    protected function tearDown(): void
    {
        \$files = [\$this->cacheFile, \"{\$this->cacheFile}.meta\"];

        foreach (\$files as \$file) {
            if (file_exists(\$file)) {
                unlink(\$file);
            }
        }
    }

    public function testGetPath()
    {
        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile);

        \$this->assertSame(\$this->cacheFile, \$cache->getPath());
    }

    public function testCacheIsNotFreshIfEmpty()
    {
        \$checker = \$this->getMockBuilder('\\Symfony\\Component\\Config\\ResourceCheckerInterface')->getMock()
            ->expects(\$this->never())->method('supports');

        /* If there is nothing in the cache, it needs to be filled (and thus it's not fresh).
            It does not matter if you provide checkers or not. */

        unlink(\$this->cacheFile); // remove tempnam() side effect
        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile, [\$checker]);

        \$this->assertFalse(\$cache->isFresh());
    }

    public function testCacheIsFreshIfNoCheckerProvided()
    {
        /* For example in prod mode, you may choose not to run any checkers
           at all. In that case, the cache should always be considered fresh. */
        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile);
        \$this->assertTrue(\$cache->isFresh());
    }

    public function testCacheIsFreshIfEmptyCheckerIteratorProvided()
    {
        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile, new \\ArrayIterator([]));
        \$this->assertTrue(\$cache->isFresh());
    }

    public function testResourcesWithoutcheckersAreIgnoredAndConsideredFresh()
    {
        /* As in the previous test, but this time we have a resource. */
        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile);
        \$cache->write('', [new ResourceStub()]);

        \$this->assertTrue(\$cache->isFresh()); // no (matching) ResourceChecker passed
    }

    public function testIsFreshWithchecker()
    {
        \$checker = \$this->getMockBuilder('\\Symfony\\Component\\Config\\ResourceCheckerInterface')->getMock();

        \$checker->expects(\$this->once())
                  ->method('supports')
                  ->willReturn(true);

        \$checker->expects(\$this->once())
                  ->method('isFresh')
                  ->willReturn(true);

        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile, [\$checker]);
        \$cache->write('', [new ResourceStub()]);

        \$this->assertTrue(\$cache->isFresh());
    }

    public function testIsNotFreshWithchecker()
    {
        \$checker = \$this->getMockBuilder('\\Symfony\\Component\\Config\\ResourceCheckerInterface')->getMock();

        \$checker->expects(\$this->once())
                  ->method('supports')
                  ->willReturn(true);

        \$checker->expects(\$this->once())
                  ->method('isFresh')
                  ->willReturn(false);

        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile, [\$checker]);
        \$cache->write('', [new ResourceStub()]);

        \$this->assertFalse(\$cache->isFresh());
    }

    public function testCacheIsNotFreshWhenUnserializeFails()
    {
        \$checker = \$this->getMockBuilder('\\Symfony\\Component\\Config\\ResourceCheckerInterface')->getMock();
        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile, [\$checker]);
        \$cache->write('foo', [new FileResource(__FILE__)]);

        \$metaFile = \"{\$this->cacheFile}.meta\";
        file_put_contents(\$metaFile, str_replace('FileResource', 'ClassNotHere', file_get_contents(\$metaFile)));

        \$this->assertFalse(\$cache->isFresh());
    }

    public function testCacheKeepsContent()
    {
        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile);
        \$cache->write('FOOBAR');

        \$this->assertSame('FOOBAR', file_get_contents(\$cache->getPath()));
    }

    public function testCacheIsNotFreshIfNotExistsMetaFile()
    {
        \$checker = \$this->getMockBuilder('\\Symfony\\Component\\Config\\ResourceCheckerInterface')->getMock();
        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile, [\$checker]);
        \$cache->write('foo', [new FileResource(__FILE__)]);

        \$metaFile = \"{\$this->cacheFile}.meta\";
        unlink(\$metaFile);

        \$this->assertFalse(\$cache->isFresh());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/ResourceCheckerConfigCacheTest.php";
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
use Symfony\\Component\\Config\\Resource\\FileResource;
use Symfony\\Component\\Config\\ResourceCheckerConfigCache;
use Symfony\\Component\\Config\\Tests\\Resource\\ResourceStub;

class ResourceCheckerConfigCacheTest extends TestCase
{
    private \$cacheFile = null;

    protected function setUp(): void
    {
        \$this->cacheFile = tempnam(sys_get_temp_dir(), 'config_');
    }

    protected function tearDown(): void
    {
        \$files = [\$this->cacheFile, \"{\$this->cacheFile}.meta\"];

        foreach (\$files as \$file) {
            if (file_exists(\$file)) {
                unlink(\$file);
            }
        }
    }

    public function testGetPath()
    {
        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile);

        \$this->assertSame(\$this->cacheFile, \$cache->getPath());
    }

    public function testCacheIsNotFreshIfEmpty()
    {
        \$checker = \$this->getMockBuilder('\\Symfony\\Component\\Config\\ResourceCheckerInterface')->getMock()
            ->expects(\$this->never())->method('supports');

        /* If there is nothing in the cache, it needs to be filled (and thus it's not fresh).
            It does not matter if you provide checkers or not. */

        unlink(\$this->cacheFile); // remove tempnam() side effect
        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile, [\$checker]);

        \$this->assertFalse(\$cache->isFresh());
    }

    public function testCacheIsFreshIfNoCheckerProvided()
    {
        /* For example in prod mode, you may choose not to run any checkers
           at all. In that case, the cache should always be considered fresh. */
        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile);
        \$this->assertTrue(\$cache->isFresh());
    }

    public function testCacheIsFreshIfEmptyCheckerIteratorProvided()
    {
        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile, new \\ArrayIterator([]));
        \$this->assertTrue(\$cache->isFresh());
    }

    public function testResourcesWithoutcheckersAreIgnoredAndConsideredFresh()
    {
        /* As in the previous test, but this time we have a resource. */
        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile);
        \$cache->write('', [new ResourceStub()]);

        \$this->assertTrue(\$cache->isFresh()); // no (matching) ResourceChecker passed
    }

    public function testIsFreshWithchecker()
    {
        \$checker = \$this->getMockBuilder('\\Symfony\\Component\\Config\\ResourceCheckerInterface')->getMock();

        \$checker->expects(\$this->once())
                  ->method('supports')
                  ->willReturn(true);

        \$checker->expects(\$this->once())
                  ->method('isFresh')
                  ->willReturn(true);

        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile, [\$checker]);
        \$cache->write('', [new ResourceStub()]);

        \$this->assertTrue(\$cache->isFresh());
    }

    public function testIsNotFreshWithchecker()
    {
        \$checker = \$this->getMockBuilder('\\Symfony\\Component\\Config\\ResourceCheckerInterface')->getMock();

        \$checker->expects(\$this->once())
                  ->method('supports')
                  ->willReturn(true);

        \$checker->expects(\$this->once())
                  ->method('isFresh')
                  ->willReturn(false);

        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile, [\$checker]);
        \$cache->write('', [new ResourceStub()]);

        \$this->assertFalse(\$cache->isFresh());
    }

    public function testCacheIsNotFreshWhenUnserializeFails()
    {
        \$checker = \$this->getMockBuilder('\\Symfony\\Component\\Config\\ResourceCheckerInterface')->getMock();
        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile, [\$checker]);
        \$cache->write('foo', [new FileResource(__FILE__)]);

        \$metaFile = \"{\$this->cacheFile}.meta\";
        file_put_contents(\$metaFile, str_replace('FileResource', 'ClassNotHere', file_get_contents(\$metaFile)));

        \$this->assertFalse(\$cache->isFresh());
    }

    public function testCacheKeepsContent()
    {
        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile);
        \$cache->write('FOOBAR');

        \$this->assertSame('FOOBAR', file_get_contents(\$cache->getPath()));
    }

    public function testCacheIsNotFreshIfNotExistsMetaFile()
    {
        \$checker = \$this->getMockBuilder('\\Symfony\\Component\\Config\\ResourceCheckerInterface')->getMock();
        \$cache = new ResourceCheckerConfigCache(\$this->cacheFile, [\$checker]);
        \$cache->write('foo', [new FileResource(__FILE__)]);

        \$metaFile = \"{\$this->cacheFile}.meta\";
        unlink(\$metaFile);

        \$this->assertFalse(\$cache->isFresh());
    }
}
", "vendor/symfony/config/Tests/ResourceCheckerConfigCacheTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/ResourceCheckerConfigCacheTest.php");
    }
}
