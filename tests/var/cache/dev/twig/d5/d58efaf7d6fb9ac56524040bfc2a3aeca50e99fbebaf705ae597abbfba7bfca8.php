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

/* vendor/symfony/doctrine-bridge/Tests/DataCollector/DoctrineDataCollectorTest.php */
class __TwigTemplate_aacdf47d5a453020212cc551348dc415df1952de0b82a855d25d4992eec647cd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/DataCollector/DoctrineDataCollectorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/DataCollector/DoctrineDataCollectorTest.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Tests\\DataCollector;

use Doctrine\\DBAL\\Platforms\\MySqlPlatform;
use Doctrine\\DBAL\\Version;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\DataCollector\\DoctrineDataCollector;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class DoctrineDataCollectorTest extends TestCase
{
    public function testCollectConnections()
    {
        \$c = \$this->createCollector([]);
        \$c->collect(new Request(), new Response());
        \$this->assertEquals(['default' => 'doctrine.dbal.default_connection'], \$c->getConnections());
    }

    public function testCollectManagers()
    {
        \$c = \$this->createCollector([]);
        \$c->collect(new Request(), new Response());
        \$this->assertEquals(['default' => 'doctrine.orm.default_entity_manager'], \$c->getManagers());
    }

    public function testCollectQueryCount()
    {
        \$c = \$this->createCollector([]);
        \$c->collect(new Request(), new Response());
        \$this->assertEquals(0, \$c->getQueryCount());

        \$queries = [
            ['sql' => 'SELECT * FROM table1', 'params' => [], 'types' => [], 'executionMS' => 0],
        ];
        \$c = \$this->createCollector(\$queries);
        \$c->collect(new Request(), new Response());
        \$this->assertEquals(1, \$c->getQueryCount());
    }

    public function testCollectTime()
    {
        \$c = \$this->createCollector([]);
        \$c->collect(new Request(), new Response());
        \$this->assertEquals(0, \$c->getTime());

        \$queries = [
            ['sql' => 'SELECT * FROM table1', 'params' => [], 'types' => [], 'executionMS' => 1],
        ];
        \$c = \$this->createCollector(\$queries);
        \$c->collect(new Request(), new Response());
        \$this->assertEquals(1, \$c->getTime());

        \$queries = [
            ['sql' => 'SELECT * FROM table1', 'params' => [], 'types' => [], 'executionMS' => 1],
            ['sql' => 'SELECT * FROM table2', 'params' => [], 'types' => [], 'executionMS' => 2],
        ];
        \$c = \$this->createCollector(\$queries);
        \$c->collect(new Request(), new Response());
        \$this->assertEquals(3, \$c->getTime());
    }

    /**
     * @dataProvider paramProvider
     */
    public function testCollectQueries(\$param, \$types, \$expected, \$explainable)
    {
        \$queries = [
            ['sql' => 'SELECT * FROM table1 WHERE field1 = ?1', 'params' => [\$param], 'types' => \$types, 'executionMS' => 1],
        ];
        \$c = \$this->createCollector(\$queries);
        \$c->collect(new Request(), new Response());

        \$collectedQueries = \$c->getQueries();
        \$this->assertEquals(\$expected, \$collectedQueries['default'][0]['params'][0]);
        \$this->assertEquals(\$explainable, \$collectedQueries['default'][0]['explainable']);
    }

    public function testCollectQueryWithNoParams()
    {
        \$queries = [
            ['sql' => 'SELECT * FROM table1', 'params' => [], 'types' => [], 'executionMS' => 1],
            ['sql' => 'SELECT * FROM table1', 'params' => null, 'types' => null, 'executionMS' => 1],
        ];
        \$c = \$this->createCollector(\$queries);
        \$c->collect(new Request(), new Response());

        \$collectedQueries = \$c->getQueries();
        \$this->assertEquals([], \$collectedQueries['default'][0]['params']);
        \$this->assertTrue(\$collectedQueries['default'][0]['explainable']);
        \$this->assertEquals([], \$collectedQueries['default'][1]['params']);
        \$this->assertTrue(\$collectedQueries['default'][1]['explainable']);
    }

    public function testCollectQueryWithNoTypes()
    {
        \$queries = [
            ['sql' => 'SET sql_mode=(SELECT REPLACE(@@sql_mode, \\'ONLY_FULL_GROUP_BY\\', \\'\\'))', 'params' => [], 'types' => null, 'executionMS' => 1],
        ];
        \$c = \$this->createCollector(\$queries);
        \$c->collect(new Request(), new Response());

        \$collectedQueries = \$c->getQueries();
        \$this->assertSame([], \$collectedQueries['default'][0]['types']);
    }

    public function testReset()
    {
        \$queries = [
            ['sql' => 'SELECT * FROM table1', 'params' => [], 'types' => [], 'executionMS' => 1],
        ];
        \$c = \$this->createCollector(\$queries);
        \$c->collect(new Request(), new Response());

        \$c->reset();
        \$c->collect(new Request(), new Response());

        \$this->assertEquals(['default' => []], \$c->getQueries());
    }

    /**
     * @dataProvider paramProvider
     */
    public function testSerialization(\$param, \$types, \$expected, \$explainable)
    {
        \$queries = [
            ['sql' => 'SELECT * FROM table1 WHERE field1 = ?1', 'params' => [\$param], 'types' => \$types, 'executionMS' => 1],
        ];
        \$c = \$this->createCollector(\$queries);
        \$c->collect(new Request(), new Response());
        \$c = unserialize(serialize(\$c));

        \$collectedQueries = \$c->getQueries();
        \$this->assertEquals(\$expected, \$collectedQueries['default'][0]['params'][0]);
        \$this->assertEquals(\$explainable, \$collectedQueries['default'][0]['explainable']);
    }

    public function paramProvider()
    {
        \$tests = [
            ['some value', [], 'some value', true],
            [1, [], 1, true],
            [true, [], true, true],
            [null, [], null, true],
            [new \\DateTime('2011-09-11'), ['date'], '2011-09-11', true],
            [fopen(__FILE__, 'r'), [], '/* Resource(stream) */', false],
            [new \\stdClass(), [], '/* Object(stdClass) */', false],
            [
                new StringRepresentableClass(),
                [],
                '/* Object(Symfony\\Bridge\\Doctrine\\Tests\\DataCollector\\StringRepresentableClass): */\"string representation\"',
                false,
            ],
        ];

        if (version_compare(Version::VERSION, '2.6', '>=')) {
            \$tests[] = ['this is not a date', ['date'], 'this is not a date', false];
            \$tests[] = [new \\stdClass(), ['date'], '/* Object(stdClass) */', false];
        }

        return \$tests;
    }

    private function createCollector(\$queries)
    {
        \$connection = \$this->getMockBuilder('Doctrine\\DBAL\\Connection')
            ->disableOriginalConstructor()
            ->getMock();
        \$connection->expects(\$this->any())
            ->method('getDatabasePlatform')
            ->willReturn(new MySqlPlatform());

        \$registry = \$this->getMockBuilder('Doctrine\\Common\\Persistence\\ManagerRegistry')->getMock();
        \$registry
            ->expects(\$this->any())
            ->method('getConnectionNames')
            ->willReturn(['default' => 'doctrine.dbal.default_connection']);
        \$registry
            ->expects(\$this->any())
            ->method('getManagerNames')
            ->willReturn(['default' => 'doctrine.orm.default_entity_manager']);
        \$registry->expects(\$this->any())
            ->method('getConnection')
            ->willReturn(\$connection);

        \$logger = \$this->getMockBuilder('Doctrine\\DBAL\\Logging\\DebugStack')->getMock();
        \$logger->queries = \$queries;

        \$collector = new DoctrineDataCollector(\$registry);
        \$collector->addLogger('default', \$logger);

        return \$collector;
    }
}

class StringRepresentableClass
{
    public function __toString()
    {
        return 'string representation';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/DataCollector/DoctrineDataCollectorTest.php";
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

namespace Symfony\\Bridge\\Doctrine\\Tests\\DataCollector;

use Doctrine\\DBAL\\Platforms\\MySqlPlatform;
use Doctrine\\DBAL\\Version;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\DataCollector\\DoctrineDataCollector;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;

class DoctrineDataCollectorTest extends TestCase
{
    public function testCollectConnections()
    {
        \$c = \$this->createCollector([]);
        \$c->collect(new Request(), new Response());
        \$this->assertEquals(['default' => 'doctrine.dbal.default_connection'], \$c->getConnections());
    }

    public function testCollectManagers()
    {
        \$c = \$this->createCollector([]);
        \$c->collect(new Request(), new Response());
        \$this->assertEquals(['default' => 'doctrine.orm.default_entity_manager'], \$c->getManagers());
    }

    public function testCollectQueryCount()
    {
        \$c = \$this->createCollector([]);
        \$c->collect(new Request(), new Response());
        \$this->assertEquals(0, \$c->getQueryCount());

        \$queries = [
            ['sql' => 'SELECT * FROM table1', 'params' => [], 'types' => [], 'executionMS' => 0],
        ];
        \$c = \$this->createCollector(\$queries);
        \$c->collect(new Request(), new Response());
        \$this->assertEquals(1, \$c->getQueryCount());
    }

    public function testCollectTime()
    {
        \$c = \$this->createCollector([]);
        \$c->collect(new Request(), new Response());
        \$this->assertEquals(0, \$c->getTime());

        \$queries = [
            ['sql' => 'SELECT * FROM table1', 'params' => [], 'types' => [], 'executionMS' => 1],
        ];
        \$c = \$this->createCollector(\$queries);
        \$c->collect(new Request(), new Response());
        \$this->assertEquals(1, \$c->getTime());

        \$queries = [
            ['sql' => 'SELECT * FROM table1', 'params' => [], 'types' => [], 'executionMS' => 1],
            ['sql' => 'SELECT * FROM table2', 'params' => [], 'types' => [], 'executionMS' => 2],
        ];
        \$c = \$this->createCollector(\$queries);
        \$c->collect(new Request(), new Response());
        \$this->assertEquals(3, \$c->getTime());
    }

    /**
     * @dataProvider paramProvider
     */
    public function testCollectQueries(\$param, \$types, \$expected, \$explainable)
    {
        \$queries = [
            ['sql' => 'SELECT * FROM table1 WHERE field1 = ?1', 'params' => [\$param], 'types' => \$types, 'executionMS' => 1],
        ];
        \$c = \$this->createCollector(\$queries);
        \$c->collect(new Request(), new Response());

        \$collectedQueries = \$c->getQueries();
        \$this->assertEquals(\$expected, \$collectedQueries['default'][0]['params'][0]);
        \$this->assertEquals(\$explainable, \$collectedQueries['default'][0]['explainable']);
    }

    public function testCollectQueryWithNoParams()
    {
        \$queries = [
            ['sql' => 'SELECT * FROM table1', 'params' => [], 'types' => [], 'executionMS' => 1],
            ['sql' => 'SELECT * FROM table1', 'params' => null, 'types' => null, 'executionMS' => 1],
        ];
        \$c = \$this->createCollector(\$queries);
        \$c->collect(new Request(), new Response());

        \$collectedQueries = \$c->getQueries();
        \$this->assertEquals([], \$collectedQueries['default'][0]['params']);
        \$this->assertTrue(\$collectedQueries['default'][0]['explainable']);
        \$this->assertEquals([], \$collectedQueries['default'][1]['params']);
        \$this->assertTrue(\$collectedQueries['default'][1]['explainable']);
    }

    public function testCollectQueryWithNoTypes()
    {
        \$queries = [
            ['sql' => 'SET sql_mode=(SELECT REPLACE(@@sql_mode, \\'ONLY_FULL_GROUP_BY\\', \\'\\'))', 'params' => [], 'types' => null, 'executionMS' => 1],
        ];
        \$c = \$this->createCollector(\$queries);
        \$c->collect(new Request(), new Response());

        \$collectedQueries = \$c->getQueries();
        \$this->assertSame([], \$collectedQueries['default'][0]['types']);
    }

    public function testReset()
    {
        \$queries = [
            ['sql' => 'SELECT * FROM table1', 'params' => [], 'types' => [], 'executionMS' => 1],
        ];
        \$c = \$this->createCollector(\$queries);
        \$c->collect(new Request(), new Response());

        \$c->reset();
        \$c->collect(new Request(), new Response());

        \$this->assertEquals(['default' => []], \$c->getQueries());
    }

    /**
     * @dataProvider paramProvider
     */
    public function testSerialization(\$param, \$types, \$expected, \$explainable)
    {
        \$queries = [
            ['sql' => 'SELECT * FROM table1 WHERE field1 = ?1', 'params' => [\$param], 'types' => \$types, 'executionMS' => 1],
        ];
        \$c = \$this->createCollector(\$queries);
        \$c->collect(new Request(), new Response());
        \$c = unserialize(serialize(\$c));

        \$collectedQueries = \$c->getQueries();
        \$this->assertEquals(\$expected, \$collectedQueries['default'][0]['params'][0]);
        \$this->assertEquals(\$explainable, \$collectedQueries['default'][0]['explainable']);
    }

    public function paramProvider()
    {
        \$tests = [
            ['some value', [], 'some value', true],
            [1, [], 1, true],
            [true, [], true, true],
            [null, [], null, true],
            [new \\DateTime('2011-09-11'), ['date'], '2011-09-11', true],
            [fopen(__FILE__, 'r'), [], '/* Resource(stream) */', false],
            [new \\stdClass(), [], '/* Object(stdClass) */', false],
            [
                new StringRepresentableClass(),
                [],
                '/* Object(Symfony\\Bridge\\Doctrine\\Tests\\DataCollector\\StringRepresentableClass): */\"string representation\"',
                false,
            ],
        ];

        if (version_compare(Version::VERSION, '2.6', '>=')) {
            \$tests[] = ['this is not a date', ['date'], 'this is not a date', false];
            \$tests[] = [new \\stdClass(), ['date'], '/* Object(stdClass) */', false];
        }

        return \$tests;
    }

    private function createCollector(\$queries)
    {
        \$connection = \$this->getMockBuilder('Doctrine\\DBAL\\Connection')
            ->disableOriginalConstructor()
            ->getMock();
        \$connection->expects(\$this->any())
            ->method('getDatabasePlatform')
            ->willReturn(new MySqlPlatform());

        \$registry = \$this->getMockBuilder('Doctrine\\Common\\Persistence\\ManagerRegistry')->getMock();
        \$registry
            ->expects(\$this->any())
            ->method('getConnectionNames')
            ->willReturn(['default' => 'doctrine.dbal.default_connection']);
        \$registry
            ->expects(\$this->any())
            ->method('getManagerNames')
            ->willReturn(['default' => 'doctrine.orm.default_entity_manager']);
        \$registry->expects(\$this->any())
            ->method('getConnection')
            ->willReturn(\$connection);

        \$logger = \$this->getMockBuilder('Doctrine\\DBAL\\Logging\\DebugStack')->getMock();
        \$logger->queries = \$queries;

        \$collector = new DoctrineDataCollector(\$registry);
        \$collector->addLogger('default', \$logger);

        return \$collector;
    }
}

class StringRepresentableClass
{
    public function __toString()
    {
        return 'string representation';
    }
}
", "vendor/symfony/doctrine-bridge/Tests/DataCollector/DoctrineDataCollectorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/DataCollector/DoctrineDataCollectorTest.php");
    }
}
