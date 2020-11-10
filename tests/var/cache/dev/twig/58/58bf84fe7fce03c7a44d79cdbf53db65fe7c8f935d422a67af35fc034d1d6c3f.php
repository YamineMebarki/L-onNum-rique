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

/* vendor/symfony/cache/Tests/Simple/ChainCacheTest.php */
class __TwigTemplate_ae8d3ffa0657701a6225d7ae853da08b8b928e8d4ff8ff86549965ba74e4eda0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Simple/ChainCacheTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Simple/ChainCacheTest.php"));

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

namespace Symfony\\Component\\Cache\\Tests\\Simple;

use PHPUnit\\Framework\\MockObject\\MockObject;
use Psr\\SimpleCache\\CacheInterface;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\Simple\\ArrayCache;
use Symfony\\Component\\Cache\\Simple\\ChainCache;
use Symfony\\Component\\Cache\\Simple\\FilesystemCache;

/**
 * @group time-sensitive
 * @group legacy
 */
class ChainCacheTest extends CacheTestCase
{
    public function createSimpleCache(\$defaultLifetime = 0)
    {
        return new ChainCache([new ArrayCache(\$defaultLifetime), new FilesystemCache('', \$defaultLifetime)], \$defaultLifetime);
    }

    public function testEmptyCachesException()
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('At least one cache must be specified.');
        new ChainCache([]);
    }

    public function testInvalidCacheException()
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The class \"stdClass\" does not implement');
        new ChainCache([new \\stdClass()]);
    }

    public function testPrune()
    {
        if (isset(\$this->skippedTests[__FUNCTION__])) {
            \$this->markTestSkipped(\$this->skippedTests[__FUNCTION__]);
        }

        \$cache = new ChainCache([
            \$this->getPruneableMock(),
            \$this->getNonPruneableMock(),
            \$this->getPruneableMock(),
        ]);
        \$this->assertTrue(\$cache->prune());

        \$cache = new ChainCache([
            \$this->getPruneableMock(),
            \$this->getFailingPruneableMock(),
            \$this->getPruneableMock(),
        ]);
        \$this->assertFalse(\$cache->prune());
    }

    /**
     * @return MockObject|PruneableCacheInterface
     */
    private function getPruneableMock()
    {
        \$pruneable = \$this
            ->getMockBuilder(PruneableCacheInterface::class)
            ->getMock();

        \$pruneable
            ->expects(\$this->atLeastOnce())
            ->method('prune')
            ->willReturn(true);

        return \$pruneable;
    }

    /**
     * @return MockObject|PruneableCacheInterface
     */
    private function getFailingPruneableMock()
    {
        \$pruneable = \$this
            ->getMockBuilder(PruneableCacheInterface::class)
            ->getMock();

        \$pruneable
            ->expects(\$this->atLeastOnce())
            ->method('prune')
            ->willReturn(false);

        return \$pruneable;
    }

    /**
     * @return MockObject|CacheInterface
     */
    private function getNonPruneableMock()
    {
        return \$this
            ->getMockBuilder(CacheInterface::class)
            ->getMock();
    }
}

interface PruneableCacheInterface extends PruneableInterface, CacheInterface
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Simple/ChainCacheTest.php";
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

namespace Symfony\\Component\\Cache\\Tests\\Simple;

use PHPUnit\\Framework\\MockObject\\MockObject;
use Psr\\SimpleCache\\CacheInterface;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\Simple\\ArrayCache;
use Symfony\\Component\\Cache\\Simple\\ChainCache;
use Symfony\\Component\\Cache\\Simple\\FilesystemCache;

/**
 * @group time-sensitive
 * @group legacy
 */
class ChainCacheTest extends CacheTestCase
{
    public function createSimpleCache(\$defaultLifetime = 0)
    {
        return new ChainCache([new ArrayCache(\$defaultLifetime), new FilesystemCache('', \$defaultLifetime)], \$defaultLifetime);
    }

    public function testEmptyCachesException()
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('At least one cache must be specified.');
        new ChainCache([]);
    }

    public function testInvalidCacheException()
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The class \"stdClass\" does not implement');
        new ChainCache([new \\stdClass()]);
    }

    public function testPrune()
    {
        if (isset(\$this->skippedTests[__FUNCTION__])) {
            \$this->markTestSkipped(\$this->skippedTests[__FUNCTION__]);
        }

        \$cache = new ChainCache([
            \$this->getPruneableMock(),
            \$this->getNonPruneableMock(),
            \$this->getPruneableMock(),
        ]);
        \$this->assertTrue(\$cache->prune());

        \$cache = new ChainCache([
            \$this->getPruneableMock(),
            \$this->getFailingPruneableMock(),
            \$this->getPruneableMock(),
        ]);
        \$this->assertFalse(\$cache->prune());
    }

    /**
     * @return MockObject|PruneableCacheInterface
     */
    private function getPruneableMock()
    {
        \$pruneable = \$this
            ->getMockBuilder(PruneableCacheInterface::class)
            ->getMock();

        \$pruneable
            ->expects(\$this->atLeastOnce())
            ->method('prune')
            ->willReturn(true);

        return \$pruneable;
    }

    /**
     * @return MockObject|PruneableCacheInterface
     */
    private function getFailingPruneableMock()
    {
        \$pruneable = \$this
            ->getMockBuilder(PruneableCacheInterface::class)
            ->getMock();

        \$pruneable
            ->expects(\$this->atLeastOnce())
            ->method('prune')
            ->willReturn(false);

        return \$pruneable;
    }

    /**
     * @return MockObject|CacheInterface
     */
    private function getNonPruneableMock()
    {
        return \$this
            ->getMockBuilder(CacheInterface::class)
            ->getMock();
    }
}

interface PruneableCacheInterface extends PruneableInterface, CacheInterface
{
}
", "vendor/symfony/cache/Tests/Simple/ChainCacheTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Simple/ChainCacheTest.php");
    }
}
