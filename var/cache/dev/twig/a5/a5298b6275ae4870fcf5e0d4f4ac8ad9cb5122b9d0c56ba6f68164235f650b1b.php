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

/* vendor/symfony/doctrine-bridge/Tests/Form/ChoiceList/ORMQueryBuilderLoaderTest.php */
class __TwigTemplate_61e20ddcea44551842f059688f6b457e6b76259cf34aa41fd81040b575d20023 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Form/ChoiceList/ORMQueryBuilderLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Form/ChoiceList/ORMQueryBuilderLoaderTest.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Form\\ChoiceList;

use Doctrine\\DBAL\\Connection;
use Doctrine\\ORM\\Version;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\Form\\ChoiceList\\ORMQueryBuilderLoader;
use Symfony\\Bridge\\Doctrine\\Test\\DoctrineTestHelper;

class ORMQueryBuilderLoaderTest extends TestCase
{
    public function testIdentifierTypeIsStringArray()
    {
        \$this->checkIdentifierType('Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\SingleStringIdEntity', Connection::PARAM_STR_ARRAY);
    }

    public function testIdentifierTypeIsIntegerArray()
    {
        \$this->checkIdentifierType('Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\SingleIntIdEntity', Connection::PARAM_INT_ARRAY);
    }

    protected function checkIdentifierType(\$classname, \$expectedType)
    {
        \$em = DoctrineTestHelper::createTestEntityManager();

        \$query = \$this->getMockBuilder('QueryMock')
            ->setMethods(['setParameter', 'getResult', 'getSql', '_doExecute'])
            ->getMock();

        \$query
            ->method('getResult')
            ->willReturn([]);

        \$query->expects(\$this->once())
            ->method('setParameter')
            ->with('ORMQueryBuilderLoader_getEntitiesByIds_id', [1, 2], \$expectedType)
            ->willReturn(\$query);

        \$qb = \$this->getMockBuilder('Doctrine\\ORM\\QueryBuilder')
            ->setConstructorArgs([\$em])
            ->setMethods(['getQuery'])
            ->getMock();

        \$qb->expects(\$this->once())
            ->method('getQuery')
            ->willReturn(\$query);

        \$qb->select('e')
            ->from(\$classname, 'e');

        \$loader = new ORMQueryBuilderLoader(\$qb);
        \$loader->getEntitiesByIds('id', [1, 2]);
    }

    public function testFilterNonIntegerValues()
    {
        \$em = DoctrineTestHelper::createTestEntityManager();

        \$query = \$this->getMockBuilder('QueryMock')
            ->setMethods(['setParameter', 'getResult', 'getSql', '_doExecute'])
            ->getMock();

        \$query
            ->method('getResult')
            ->willReturn([]);

        \$query->expects(\$this->once())
            ->method('setParameter')
            ->with('ORMQueryBuilderLoader_getEntitiesByIds_id', [1, 2, 3, '9223372036854775808'], Connection::PARAM_INT_ARRAY)
            ->willReturn(\$query);

        \$qb = \$this->getMockBuilder('Doctrine\\ORM\\QueryBuilder')
            ->setConstructorArgs([\$em])
            ->setMethods(['getQuery'])
            ->getMock();

        \$qb->expects(\$this->once())
            ->method('getQuery')
            ->willReturn(\$query);

        \$qb->select('e')
            ->from('Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\SingleIntIdEntity', 'e');

        \$loader = new ORMQueryBuilderLoader(\$qb);
        \$loader->getEntitiesByIds('id', [1, '', 2, 3, 'foo', '9223372036854775808']);
    }

    /**
     * @dataProvider provideGuidEntityClasses
     */
    public function testFilterEmptyUuids(\$entityClass)
    {
        \$em = DoctrineTestHelper::createTestEntityManager();

        \$query = \$this->getMockBuilder('QueryMock')
            ->setMethods(['setParameter', 'getResult', 'getSql', '_doExecute'])
            ->getMock();

        \$query
            ->method('getResult')
            ->willReturn([]);

        \$query->expects(\$this->once())
            ->method('setParameter')
            ->with('ORMQueryBuilderLoader_getEntitiesByIds_id', ['71c5fd46-3f16-4abb-bad7-90ac1e654a2d', 'b98e8e11-2897-44df-ad24-d2627eb7f499'], Connection::PARAM_STR_ARRAY)
            ->willReturn(\$query);

        \$qb = \$this->getMockBuilder('Doctrine\\ORM\\QueryBuilder')
            ->setConstructorArgs([\$em])
            ->setMethods(['getQuery'])
            ->getMock();

        \$qb->expects(\$this->once())
            ->method('getQuery')
            ->willReturn(\$query);

        \$qb->select('e')
            ->from(\$entityClass, 'e');

        \$loader = new ORMQueryBuilderLoader(\$qb);
        \$loader->getEntitiesByIds('id', ['71c5fd46-3f16-4abb-bad7-90ac1e654a2d', '', 'b98e8e11-2897-44df-ad24-d2627eb7f499']);
    }

    public function testEmbeddedIdentifierName()
    {
        if (Version::compare('2.5.0') > 0) {
            \$this->markTestSkipped('Applicable only for Doctrine >= 2.5.0');

            return;
        }

        \$em = DoctrineTestHelper::createTestEntityManager();

        \$query = \$this->getMockBuilder('QueryMock')
            ->setMethods(['setParameter', 'getResult', 'getSql', '_doExecute'])
            ->getMock();

        \$query
            ->method('getResult')
            ->willReturn([]);

        \$query->expects(\$this->once())
            ->method('setParameter')
            ->with('ORMQueryBuilderLoader_getEntitiesByIds_id_value', [1, 2, 3], Connection::PARAM_INT_ARRAY)
            ->willReturn(\$query);

        \$qb = \$this->getMockBuilder('Doctrine\\ORM\\QueryBuilder')
            ->setConstructorArgs([\$em])
            ->setMethods(['getQuery'])
            ->getMock();
        \$qb->expects(\$this->once())
            ->method('getQuery')
            ->willReturn(\$query);

        \$qb->select('e')
            ->from('Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\EmbeddedIdentifierEntity', 'e');

        \$loader = new ORMQueryBuilderLoader(\$qb);
        \$loader->getEntitiesByIds('id.value', [1, '', 2, 3, 'foo']);
    }

    public function provideGuidEntityClasses()
    {
        return [
            ['Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\GuidIdEntity'],
            ['Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\UuidIdEntity'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/Form/ChoiceList/ORMQueryBuilderLoaderTest.php";
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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Form\\ChoiceList;

use Doctrine\\DBAL\\Connection;
use Doctrine\\ORM\\Version;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\Form\\ChoiceList\\ORMQueryBuilderLoader;
use Symfony\\Bridge\\Doctrine\\Test\\DoctrineTestHelper;

class ORMQueryBuilderLoaderTest extends TestCase
{
    public function testIdentifierTypeIsStringArray()
    {
        \$this->checkIdentifierType('Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\SingleStringIdEntity', Connection::PARAM_STR_ARRAY);
    }

    public function testIdentifierTypeIsIntegerArray()
    {
        \$this->checkIdentifierType('Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\SingleIntIdEntity', Connection::PARAM_INT_ARRAY);
    }

    protected function checkIdentifierType(\$classname, \$expectedType)
    {
        \$em = DoctrineTestHelper::createTestEntityManager();

        \$query = \$this->getMockBuilder('QueryMock')
            ->setMethods(['setParameter', 'getResult', 'getSql', '_doExecute'])
            ->getMock();

        \$query
            ->method('getResult')
            ->willReturn([]);

        \$query->expects(\$this->once())
            ->method('setParameter')
            ->with('ORMQueryBuilderLoader_getEntitiesByIds_id', [1, 2], \$expectedType)
            ->willReturn(\$query);

        \$qb = \$this->getMockBuilder('Doctrine\\ORM\\QueryBuilder')
            ->setConstructorArgs([\$em])
            ->setMethods(['getQuery'])
            ->getMock();

        \$qb->expects(\$this->once())
            ->method('getQuery')
            ->willReturn(\$query);

        \$qb->select('e')
            ->from(\$classname, 'e');

        \$loader = new ORMQueryBuilderLoader(\$qb);
        \$loader->getEntitiesByIds('id', [1, 2]);
    }

    public function testFilterNonIntegerValues()
    {
        \$em = DoctrineTestHelper::createTestEntityManager();

        \$query = \$this->getMockBuilder('QueryMock')
            ->setMethods(['setParameter', 'getResult', 'getSql', '_doExecute'])
            ->getMock();

        \$query
            ->method('getResult')
            ->willReturn([]);

        \$query->expects(\$this->once())
            ->method('setParameter')
            ->with('ORMQueryBuilderLoader_getEntitiesByIds_id', [1, 2, 3, '9223372036854775808'], Connection::PARAM_INT_ARRAY)
            ->willReturn(\$query);

        \$qb = \$this->getMockBuilder('Doctrine\\ORM\\QueryBuilder')
            ->setConstructorArgs([\$em])
            ->setMethods(['getQuery'])
            ->getMock();

        \$qb->expects(\$this->once())
            ->method('getQuery')
            ->willReturn(\$query);

        \$qb->select('e')
            ->from('Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\SingleIntIdEntity', 'e');

        \$loader = new ORMQueryBuilderLoader(\$qb);
        \$loader->getEntitiesByIds('id', [1, '', 2, 3, 'foo', '9223372036854775808']);
    }

    /**
     * @dataProvider provideGuidEntityClasses
     */
    public function testFilterEmptyUuids(\$entityClass)
    {
        \$em = DoctrineTestHelper::createTestEntityManager();

        \$query = \$this->getMockBuilder('QueryMock')
            ->setMethods(['setParameter', 'getResult', 'getSql', '_doExecute'])
            ->getMock();

        \$query
            ->method('getResult')
            ->willReturn([]);

        \$query->expects(\$this->once())
            ->method('setParameter')
            ->with('ORMQueryBuilderLoader_getEntitiesByIds_id', ['71c5fd46-3f16-4abb-bad7-90ac1e654a2d', 'b98e8e11-2897-44df-ad24-d2627eb7f499'], Connection::PARAM_STR_ARRAY)
            ->willReturn(\$query);

        \$qb = \$this->getMockBuilder('Doctrine\\ORM\\QueryBuilder')
            ->setConstructorArgs([\$em])
            ->setMethods(['getQuery'])
            ->getMock();

        \$qb->expects(\$this->once())
            ->method('getQuery')
            ->willReturn(\$query);

        \$qb->select('e')
            ->from(\$entityClass, 'e');

        \$loader = new ORMQueryBuilderLoader(\$qb);
        \$loader->getEntitiesByIds('id', ['71c5fd46-3f16-4abb-bad7-90ac1e654a2d', '', 'b98e8e11-2897-44df-ad24-d2627eb7f499']);
    }

    public function testEmbeddedIdentifierName()
    {
        if (Version::compare('2.5.0') > 0) {
            \$this->markTestSkipped('Applicable only for Doctrine >= 2.5.0');

            return;
        }

        \$em = DoctrineTestHelper::createTestEntityManager();

        \$query = \$this->getMockBuilder('QueryMock')
            ->setMethods(['setParameter', 'getResult', 'getSql', '_doExecute'])
            ->getMock();

        \$query
            ->method('getResult')
            ->willReturn([]);

        \$query->expects(\$this->once())
            ->method('setParameter')
            ->with('ORMQueryBuilderLoader_getEntitiesByIds_id_value', [1, 2, 3], Connection::PARAM_INT_ARRAY)
            ->willReturn(\$query);

        \$qb = \$this->getMockBuilder('Doctrine\\ORM\\QueryBuilder')
            ->setConstructorArgs([\$em])
            ->setMethods(['getQuery'])
            ->getMock();
        \$qb->expects(\$this->once())
            ->method('getQuery')
            ->willReturn(\$query);

        \$qb->select('e')
            ->from('Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\EmbeddedIdentifierEntity', 'e');

        \$loader = new ORMQueryBuilderLoader(\$qb);
        \$loader->getEntitiesByIds('id.value', [1, '', 2, 3, 'foo']);
    }

    public function provideGuidEntityClasses()
    {
        return [
            ['Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\GuidIdEntity'],
            ['Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\UuidIdEntity'],
        ];
    }
}
", "vendor/symfony/doctrine-bridge/Tests/Form/ChoiceList/ORMQueryBuilderLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/Form/ChoiceList/ORMQueryBuilderLoaderTest.php");
    }
}
