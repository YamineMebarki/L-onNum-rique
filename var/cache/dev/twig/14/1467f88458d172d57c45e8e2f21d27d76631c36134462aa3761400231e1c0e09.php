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

/* vendor/symfony/http-foundation/Tests/Session/Storage/MetadataBagTest.php */
class __TwigTemplate_8d925078b959f75701610d484dbacf70d9fe9ad3fcdff2e8e6c4b7336a114a09 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/MetadataBagTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/MetadataBagTest.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Session\\Storage;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag;

/**
 * DevLaon class for MetadataBag.
 *
 * @group time-sensitive
 */
class MetadataBagTest extends TestCase
{
    /**
     * @var MetadataBag
     */
    protected \$bag;

    protected \$array = [];

    protected function setUp(): void
    {
        parent::setUp();
        \$this->bag = new MetadataBag();
        \$this->array = [MetadataBag::CREATED => 1234567, MetadataBag::UPDATED => 12345678, MetadataBag::LIFETIME => 0];
        \$this->bag->initialize(\$this->array);
    }

    protected function tearDown(): void
    {
        \$this->array = [];
        \$this->bag = null;
        parent::tearDown();
    }

    public function testInitialize()
    {
        \$sessionMetadata = [];

        \$bag1 = new MetadataBag();
        \$bag1->initialize(\$sessionMetadata);
        \$this->assertGreaterThanOrEqual(time(), \$bag1->getCreated());
        \$this->assertEquals(\$bag1->getCreated(), \$bag1->getLastUsed());

        sleep(1);
        \$bag2 = new MetadataBag();
        \$bag2->initialize(\$sessionMetadata);
        \$this->assertEquals(\$bag1->getCreated(), \$bag2->getCreated());
        \$this->assertEquals(\$bag1->getLastUsed(), \$bag2->getLastUsed());
        \$this->assertEquals(\$bag2->getCreated(), \$bag2->getLastUsed());

        sleep(1);
        \$bag3 = new MetadataBag();
        \$bag3->initialize(\$sessionMetadata);
        \$this->assertEquals(\$bag1->getCreated(), \$bag3->getCreated());
        \$this->assertGreaterThan(\$bag2->getLastUsed(), \$bag3->getLastUsed());
        \$this->assertNotEquals(\$bag3->getCreated(), \$bag3->getLastUsed());
    }

    public function testGetSetName()
    {
        \$this->assertEquals('__metadata', \$this->bag->getName());
        \$this->bag->setName('foo');
        \$this->assertEquals('foo', \$this->bag->getName());
    }

    public function testGetStorageKey()
    {
        \$this->assertEquals('_sf2_meta', \$this->bag->getStorageKey());
    }

    public function testGetLifetime()
    {
        \$bag = new MetadataBag();
        \$array = [MetadataBag::CREATED => 1234567, MetadataBag::UPDATED => 12345678, MetadataBag::LIFETIME => 1000];
        \$bag->initialize(\$array);
        \$this->assertEquals(1000, \$bag->getLifetime());
    }

    public function testGetCreated()
    {
        \$this->assertEquals(1234567, \$this->bag->getCreated());
    }

    public function testGetLastUsed()
    {
        \$this->assertLessThanOrEqual(time(), \$this->bag->getLastUsed());
    }

    public function testClear()
    {
        \$this->bag->clear();

        // the clear method has no side effects, we just want to ensure it doesn't trigger any exceptions
        \$this->addToAssertionCount(1);
    }

    public function testSkipLastUsedUpdate()
    {
        \$bag = new MetadataBag('', 30);
        \$timeStamp = time();

        \$created = \$timeStamp - 15;
        \$sessionMetadata = [
            MetadataBag::CREATED => \$created,
            MetadataBag::UPDATED => \$created,
            MetadataBag::LIFETIME => 1000,
        ];
        \$bag->initialize(\$sessionMetadata);

        \$this->assertEquals(\$created, \$sessionMetadata[MetadataBag::UPDATED]);
    }

    public function testDoesNotSkipLastUsedUpdate()
    {
        \$bag = new MetadataBag('', 30);
        \$timeStamp = time();

        \$created = \$timeStamp - 45;
        \$sessionMetadata = [
            MetadataBag::CREATED => \$created,
            MetadataBag::UPDATED => \$created,
            MetadataBag::LIFETIME => 1000,
        ];
        \$bag->initialize(\$sessionMetadata);

        \$this->assertEquals(\$timeStamp, \$sessionMetadata[MetadataBag::UPDATED]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Session/Storage/MetadataBagTest.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Session\\Storage;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag;

/**
 * DevLaon class for MetadataBag.
 *
 * @group time-sensitive
 */
class MetadataBagTest extends TestCase
{
    /**
     * @var MetadataBag
     */
    protected \$bag;

    protected \$array = [];

    protected function setUp(): void
    {
        parent::setUp();
        \$this->bag = new MetadataBag();
        \$this->array = [MetadataBag::CREATED => 1234567, MetadataBag::UPDATED => 12345678, MetadataBag::LIFETIME => 0];
        \$this->bag->initialize(\$this->array);
    }

    protected function tearDown(): void
    {
        \$this->array = [];
        \$this->bag = null;
        parent::tearDown();
    }

    public function testInitialize()
    {
        \$sessionMetadata = [];

        \$bag1 = new MetadataBag();
        \$bag1->initialize(\$sessionMetadata);
        \$this->assertGreaterThanOrEqual(time(), \$bag1->getCreated());
        \$this->assertEquals(\$bag1->getCreated(), \$bag1->getLastUsed());

        sleep(1);
        \$bag2 = new MetadataBag();
        \$bag2->initialize(\$sessionMetadata);
        \$this->assertEquals(\$bag1->getCreated(), \$bag2->getCreated());
        \$this->assertEquals(\$bag1->getLastUsed(), \$bag2->getLastUsed());
        \$this->assertEquals(\$bag2->getCreated(), \$bag2->getLastUsed());

        sleep(1);
        \$bag3 = new MetadataBag();
        \$bag3->initialize(\$sessionMetadata);
        \$this->assertEquals(\$bag1->getCreated(), \$bag3->getCreated());
        \$this->assertGreaterThan(\$bag2->getLastUsed(), \$bag3->getLastUsed());
        \$this->assertNotEquals(\$bag3->getCreated(), \$bag3->getLastUsed());
    }

    public function testGetSetName()
    {
        \$this->assertEquals('__metadata', \$this->bag->getName());
        \$this->bag->setName('foo');
        \$this->assertEquals('foo', \$this->bag->getName());
    }

    public function testGetStorageKey()
    {
        \$this->assertEquals('_sf2_meta', \$this->bag->getStorageKey());
    }

    public function testGetLifetime()
    {
        \$bag = new MetadataBag();
        \$array = [MetadataBag::CREATED => 1234567, MetadataBag::UPDATED => 12345678, MetadataBag::LIFETIME => 1000];
        \$bag->initialize(\$array);
        \$this->assertEquals(1000, \$bag->getLifetime());
    }

    public function testGetCreated()
    {
        \$this->assertEquals(1234567, \$this->bag->getCreated());
    }

    public function testGetLastUsed()
    {
        \$this->assertLessThanOrEqual(time(), \$this->bag->getLastUsed());
    }

    public function testClear()
    {
        \$this->bag->clear();

        // the clear method has no side effects, we just want to ensure it doesn't trigger any exceptions
        \$this->addToAssertionCount(1);
    }

    public function testSkipLastUsedUpdate()
    {
        \$bag = new MetadataBag('', 30);
        \$timeStamp = time();

        \$created = \$timeStamp - 15;
        \$sessionMetadata = [
            MetadataBag::CREATED => \$created,
            MetadataBag::UPDATED => \$created,
            MetadataBag::LIFETIME => 1000,
        ];
        \$bag->initialize(\$sessionMetadata);

        \$this->assertEquals(\$created, \$sessionMetadata[MetadataBag::UPDATED]);
    }

    public function testDoesNotSkipLastUsedUpdate()
    {
        \$bag = new MetadataBag('', 30);
        \$timeStamp = time();

        \$created = \$timeStamp - 45;
        \$sessionMetadata = [
            MetadataBag::CREATED => \$created,
            MetadataBag::UPDATED => \$created,
            MetadataBag::LIFETIME => 1000,
        ];
        \$bag->initialize(\$sessionMetadata);

        \$this->assertEquals(\$timeStamp, \$sessionMetadata[MetadataBag::UPDATED]);
    }
}
", "vendor/symfony/http-foundation/Tests/Session/Storage/MetadataBagTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Session/Storage/MetadataBagTest.php");
    }
}
