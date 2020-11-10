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

/* vendor/symfony/validator/Tests/Mapping/Cache/AbstractCacheTest.php */
class __TwigTemplate_368975340ba3b0929b1417f926fbee6eaa708584659a841d3ff35cdedf7ae62a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/Cache/AbstractCacheTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/Cache/AbstractCacheTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Mapping\\Cache;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Mapping\\Cache\\CacheInterface;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

abstract class AbstractCacheTest extends TestCase
{
    /**
     * @var CacheInterface
     */
    protected \$cache;

    public function testWrite()
    {
        \$meta = \$this->getMockBuilder(ClassMetadata::class)
            ->disableOriginalConstructor()
            ->setMethods(['getClassName'])
            ->getMock();

        \$meta->expects(\$this->once())
            ->method('getClassName')
            ->willReturn('Foo\\\\Bar');

        \$this->cache->write(\$meta);

        \$this->assertInstanceOf(
            ClassMetadata::class,
            \$this->cache->read('Foo\\\\Bar'),
            'write() stores metadata'
        );
    }

    public function testHas()
    {
        \$meta = \$this->getMockBuilder(ClassMetadata::class)
            ->disableOriginalConstructor()
            ->setMethods(['getClassName'])
            ->getMock();

        \$meta->expects(\$this->once())
            ->method('getClassName')
            ->willReturn('Foo\\\\Bar');

        \$this->assertFalse(\$this->cache->has('Foo\\\\Bar'), 'has() returns false when there is no entry');

        \$this->cache->write(\$meta);
        \$this->assertTrue(\$this->cache->has('Foo\\\\Bar'), 'has() returns true when the is an entry');
    }

    public function testRead()
    {
        \$meta = \$this->getMockBuilder(ClassMetadata::class)
            ->disableOriginalConstructor()
            ->setMethods(['getClassName'])
            ->getMock();

        \$meta->expects(\$this->once())
            ->method('getClassName')
            ->willReturn('Foo\\\\Bar');

        \$this->assertFalse(\$this->cache->read('Foo\\\\Bar'), 'read() returns false when there is no entry');

        \$this->cache->write(\$meta);

        \$this->assertInstanceOf(ClassMetadata::class, \$this->cache->read('Foo\\\\Bar'), 'read() returns metadata');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Mapping/Cache/AbstractCacheTest.php";
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

namespace Symfony\\Component\\Validator\\Tests\\Mapping\\Cache;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Mapping\\Cache\\CacheInterface;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

abstract class AbstractCacheTest extends TestCase
{
    /**
     * @var CacheInterface
     */
    protected \$cache;

    public function testWrite()
    {
        \$meta = \$this->getMockBuilder(ClassMetadata::class)
            ->disableOriginalConstructor()
            ->setMethods(['getClassName'])
            ->getMock();

        \$meta->expects(\$this->once())
            ->method('getClassName')
            ->willReturn('Foo\\\\Bar');

        \$this->cache->write(\$meta);

        \$this->assertInstanceOf(
            ClassMetadata::class,
            \$this->cache->read('Foo\\\\Bar'),
            'write() stores metadata'
        );
    }

    public function testHas()
    {
        \$meta = \$this->getMockBuilder(ClassMetadata::class)
            ->disableOriginalConstructor()
            ->setMethods(['getClassName'])
            ->getMock();

        \$meta->expects(\$this->once())
            ->method('getClassName')
            ->willReturn('Foo\\\\Bar');

        \$this->assertFalse(\$this->cache->has('Foo\\\\Bar'), 'has() returns false when there is no entry');

        \$this->cache->write(\$meta);
        \$this->assertTrue(\$this->cache->has('Foo\\\\Bar'), 'has() returns true when the is an entry');
    }

    public function testRead()
    {
        \$meta = \$this->getMockBuilder(ClassMetadata::class)
            ->disableOriginalConstructor()
            ->setMethods(['getClassName'])
            ->getMock();

        \$meta->expects(\$this->once())
            ->method('getClassName')
            ->willReturn('Foo\\\\Bar');

        \$this->assertFalse(\$this->cache->read('Foo\\\\Bar'), 'read() returns false when there is no entry');

        \$this->cache->write(\$meta);

        \$this->assertInstanceOf(ClassMetadata::class, \$this->cache->read('Foo\\\\Bar'), 'read() returns metadata');
    }
}
", "vendor/symfony/validator/Tests/Mapping/Cache/AbstractCacheTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Mapping/Cache/AbstractCacheTest.php");
    }
}
