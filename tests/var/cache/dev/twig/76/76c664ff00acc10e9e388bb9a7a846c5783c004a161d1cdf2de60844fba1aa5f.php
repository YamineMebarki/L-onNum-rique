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

/* vendor/symfony/cache/Tests/Adapter/ChainAdapterTest.php */
class __TwigTemplate_134118bb2dee1ae14a2b6ff67ed1514084aa3831f4600802da50be535bae852e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/ChainAdapterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/ChainAdapterTest.php"));

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

namespace Symfony\\Component\\Cache\\Tests\\Adapter;

use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Cache\\Adapter\\AdapterInterface;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Cache\\Adapter\\ChainAdapter;
use Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\Tests\\Fixtures\\ExternalAdapter;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @group time-sensitive
 */
class ChainAdapterTest extends AdapterTestCase
{
    public function createCachePool(\$defaultLifetime = 0, \$testMethod = null)
    {
        if ('testGetMetadata' === \$testMethod) {
            return new ChainAdapter([new FilesystemAdapter('', \$defaultLifetime)], \$defaultLifetime);
        }

        return new ChainAdapter([new ArrayAdapter(\$defaultLifetime), new ExternalAdapter(), new FilesystemAdapter('', \$defaultLifetime)], \$defaultLifetime);
    }

    public function testEmptyAdaptersException()
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('At least one adapter must be specified.');
        new ChainAdapter([]);
    }

    public function testInvalidAdapterException()
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The class \"stdClass\" does not implement');
        new ChainAdapter([new \\stdClass()]);
    }

    public function testPrune()
    {
        if (isset(\$this->skippedTests[__FUNCTION__])) {
            \$this->markTestSkipped(\$this->skippedTests[__FUNCTION__]);
        }

        \$cache = new ChainAdapter([
            \$this->getPruneableMock(),
            \$this->getNonPruneableMock(),
            \$this->getPruneableMock(),
        ]);
        \$this->assertTrue(\$cache->prune());

        \$cache = new ChainAdapter([
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
     * @return MockObject|AdapterInterface
     */
    private function getNonPruneableMock()
    {
        return \$this
            ->getMockBuilder(AdapterInterface::class)
            ->getMock();
    }
}

interface PruneableCacheInterface extends PruneableInterface, AdapterInterface
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Adapter/ChainAdapterTest.php";
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

namespace Symfony\\Component\\Cache\\Tests\\Adapter;

use PHPUnit\\Framework\\MockObject\\MockObject;
use Symfony\\Component\\Cache\\Adapter\\AdapterInterface;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Cache\\Adapter\\ChainAdapter;
use Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\Tests\\Fixtures\\ExternalAdapter;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @group time-sensitive
 */
class ChainAdapterTest extends AdapterTestCase
{
    public function createCachePool(\$defaultLifetime = 0, \$testMethod = null)
    {
        if ('testGetMetadata' === \$testMethod) {
            return new ChainAdapter([new FilesystemAdapter('', \$defaultLifetime)], \$defaultLifetime);
        }

        return new ChainAdapter([new ArrayAdapter(\$defaultLifetime), new ExternalAdapter(), new FilesystemAdapter('', \$defaultLifetime)], \$defaultLifetime);
    }

    public function testEmptyAdaptersException()
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('At least one adapter must be specified.');
        new ChainAdapter([]);
    }

    public function testInvalidAdapterException()
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The class \"stdClass\" does not implement');
        new ChainAdapter([new \\stdClass()]);
    }

    public function testPrune()
    {
        if (isset(\$this->skippedTests[__FUNCTION__])) {
            \$this->markTestSkipped(\$this->skippedTests[__FUNCTION__]);
        }

        \$cache = new ChainAdapter([
            \$this->getPruneableMock(),
            \$this->getNonPruneableMock(),
            \$this->getPruneableMock(),
        ]);
        \$this->assertTrue(\$cache->prune());

        \$cache = new ChainAdapter([
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
     * @return MockObject|AdapterInterface
     */
    private function getNonPruneableMock()
    {
        return \$this
            ->getMockBuilder(AdapterInterface::class)
            ->getMock();
    }
}

interface PruneableCacheInterface extends PruneableInterface, AdapterInterface
{
}
", "vendor/symfony/cache/Tests/Adapter/ChainAdapterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Adapter/ChainAdapterTest.php");
    }
}
