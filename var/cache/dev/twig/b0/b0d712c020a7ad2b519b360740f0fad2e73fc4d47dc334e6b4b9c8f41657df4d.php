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

/* vendor/symfony/property-access/Tests/PropertyPathBuilderTest.php */
class __TwigTemplate_9270ad3000c5f6d4d5da365e831f1c555a57607651b51739b7305a0ac9460114 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Tests/PropertyPathBuilderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Tests/PropertyPathBuilderTest.php"));

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

namespace Symfony\\Component\\PropertyAccess\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\PropertyAccess\\PropertyPath;
use Symfony\\Component\\PropertyAccess\\PropertyPathBuilder;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class PropertyPathBuilderTest extends TestCase
{
    const PREFIX = 'old1[old2].old3[old4][old5].old6';

    /**
     * @var PropertyPathBuilder
     */
    private \$builder;

    protected function setUp(): void
    {
        \$this->builder = new PropertyPathBuilder(new PropertyPath(self::PREFIX));
    }

    public function testCreateEmpty()
    {
        \$builder = new PropertyPathBuilder();

        \$this->assertNull(\$builder->getPropertyPath());
    }

    public function testCreateCopyPath()
    {
        \$this->assertEquals(new PropertyPath(self::PREFIX), \$this->builder->getPropertyPath());
    }

    public function testAppendIndex()
    {
        \$this->builder->appendIndex('new1');

        \$path = new PropertyPath(self::PREFIX.'[new1]');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testAppendProperty()
    {
        \$this->builder->appendProperty('new1');

        \$path = new PropertyPath(self::PREFIX.'.new1');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testAppend()
    {
        \$this->builder->append(new PropertyPath('new1[new2]'));

        \$path = new PropertyPath(self::PREFIX.'.new1[new2]');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testAppendUsingString()
    {
        \$this->builder->append('new1[new2]');

        \$path = new PropertyPath(self::PREFIX.'.new1[new2]');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testAppendWithOffset()
    {
        \$this->builder->append(new PropertyPath('new1[new2].new3'), 1);

        \$path = new PropertyPath(self::PREFIX.'[new2].new3');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testAppendWithOffsetAndLength()
    {
        \$this->builder->append(new PropertyPath('new1[new2].new3'), 1, 1);

        \$path = new PropertyPath(self::PREFIX.'[new2]');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testReplaceByIndex()
    {
        \$this->builder->replaceByIndex(1, 'new1');

        \$path = new PropertyPath('old1[new1].old3[old4][old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testReplaceByIndexWithoutName()
    {
        \$this->builder->replaceByIndex(0);

        \$path = new PropertyPath('[old1][old2].old3[old4][old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testReplaceByIndexDoesNotAllowInvalidOffsets()
    {
        \$this->expectException('OutOfBoundsException');
        \$this->builder->replaceByIndex(6, 'new1');
    }

    public function testReplaceByIndexDoesNotAllowNegativeOffsets()
    {
        \$this->expectException('OutOfBoundsException');
        \$this->builder->replaceByIndex(-1, 'new1');
    }

    public function testReplaceByProperty()
    {
        \$this->builder->replaceByProperty(1, 'new1');

        \$path = new PropertyPath('old1.new1.old3[old4][old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testReplaceByPropertyWithoutName()
    {
        \$this->builder->replaceByProperty(1);

        \$path = new PropertyPath('old1.old2.old3[old4][old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testReplaceByPropertyDoesNotAllowInvalidOffsets()
    {
        \$this->expectException('OutOfBoundsException');
        \$this->builder->replaceByProperty(6, 'new1');
    }

    public function testReplaceByPropertyDoesNotAllowNegativeOffsets()
    {
        \$this->expectException('OutOfBoundsException');
        \$this->builder->replaceByProperty(-1, 'new1');
    }

    public function testReplace()
    {
        \$this->builder->replace(1, 1, new PropertyPath('new1[new2].new3'));

        \$path = new PropertyPath('old1.new1[new2].new3.old3[old4][old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testReplaceUsingString()
    {
        \$this->builder->replace(1, 1, 'new1[new2].new3');

        \$path = new PropertyPath('old1.new1[new2].new3.old3[old4][old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testReplaceNegative()
    {
        \$this->builder->replace(-1, 1, new PropertyPath('new1[new2].new3'));

        \$path = new PropertyPath('old1[old2].old3[old4][old5].new1[new2].new3');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    /**
     * @dataProvider provideInvalidOffsets
     */
    public function testReplaceDoesNotAllowInvalidOffsets(\$offset)
    {
        \$this->expectException('OutOfBoundsException');
        \$this->builder->replace(\$offset, 1, new PropertyPath('new1[new2].new3'));
    }

    public function provideInvalidOffsets()
    {
        return [
            [6],
            [-7],
        ];
    }

    public function testReplaceWithLengthGreaterOne()
    {
        \$this->builder->replace(0, 2, new PropertyPath('new1[new2].new3'));

        \$path = new PropertyPath('new1[new2].new3.old3[old4][old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testReplaceSubstring()
    {
        \$this->builder->replace(1, 1, new PropertyPath('new1[new2].new3.new4[new5]'), 1, 3);

        \$path = new PropertyPath('old1[new2].new3.new4.old3[old4][old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testReplaceSubstringWithLengthGreaterOne()
    {
        \$this->builder->replace(1, 2, new PropertyPath('new1[new2].new3.new4[new5]'), 1, 3);

        \$path = new PropertyPath('old1[new2].new3.new4[old4][old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    // https://github.com/symfony/symfony/issues/5605
    public function testReplaceWithLongerPath()
    {
        // error occurs when path contains at least two more elements
        // than the builder
        \$path = new PropertyPath('new1.new2.new3');

        \$builder = new PropertyPathBuilder(new PropertyPath('old1'));
        \$builder->replace(0, 1, \$path);

        \$this->assertEquals(\$path, \$builder->getPropertyPath());
    }

    public function testReplaceWithLongerPathKeepsOrder()
    {
        \$path = new PropertyPath('new1.new2.new3');
        \$expected = new PropertyPath('new1.new2.new3.old2');

        \$builder = new PropertyPathBuilder(new PropertyPath('old1.old2'));
        \$builder->replace(0, 1, \$path);

        \$this->assertEquals(\$expected, \$builder->getPropertyPath());
    }

    public function testRemove()
    {
        \$this->builder->remove(3);

        \$path = new PropertyPath('old1[old2].old3[old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testRemoveDoesNotAllowInvalidOffsets()
    {
        \$this->expectException('OutOfBoundsException');
        \$this->builder->remove(6);
    }

    public function testRemoveDoesNotAllowNegativeOffsets()
    {
        \$this->expectException('OutOfBoundsException');
        \$this->builder->remove(-1);
    }

    public function testRemoveAndAppendAtTheEnd()
    {
        \$this->builder->remove(\$this->builder->getLength() - 1);

        \$path = new PropertyPath('old1[old2].old3[old4][old5]');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());

        \$this->builder->appendProperty('old7');

        \$path = new PropertyPath('old1[old2].old3[old4][old5].old7');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());

        \$this->builder->remove(\$this->builder->getLength() - 1);

        \$path = new PropertyPath('old1[old2].old3[old4][old5]');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-access/Tests/PropertyPathBuilderTest.php";
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

namespace Symfony\\Component\\PropertyAccess\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\PropertyAccess\\PropertyPath;
use Symfony\\Component\\PropertyAccess\\PropertyPathBuilder;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class PropertyPathBuilderTest extends TestCase
{
    const PREFIX = 'old1[old2].old3[old4][old5].old6';

    /**
     * @var PropertyPathBuilder
     */
    private \$builder;

    protected function setUp(): void
    {
        \$this->builder = new PropertyPathBuilder(new PropertyPath(self::PREFIX));
    }

    public function testCreateEmpty()
    {
        \$builder = new PropertyPathBuilder();

        \$this->assertNull(\$builder->getPropertyPath());
    }

    public function testCreateCopyPath()
    {
        \$this->assertEquals(new PropertyPath(self::PREFIX), \$this->builder->getPropertyPath());
    }

    public function testAppendIndex()
    {
        \$this->builder->appendIndex('new1');

        \$path = new PropertyPath(self::PREFIX.'[new1]');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testAppendProperty()
    {
        \$this->builder->appendProperty('new1');

        \$path = new PropertyPath(self::PREFIX.'.new1');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testAppend()
    {
        \$this->builder->append(new PropertyPath('new1[new2]'));

        \$path = new PropertyPath(self::PREFIX.'.new1[new2]');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testAppendUsingString()
    {
        \$this->builder->append('new1[new2]');

        \$path = new PropertyPath(self::PREFIX.'.new1[new2]');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testAppendWithOffset()
    {
        \$this->builder->append(new PropertyPath('new1[new2].new3'), 1);

        \$path = new PropertyPath(self::PREFIX.'[new2].new3');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testAppendWithOffsetAndLength()
    {
        \$this->builder->append(new PropertyPath('new1[new2].new3'), 1, 1);

        \$path = new PropertyPath(self::PREFIX.'[new2]');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testReplaceByIndex()
    {
        \$this->builder->replaceByIndex(1, 'new1');

        \$path = new PropertyPath('old1[new1].old3[old4][old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testReplaceByIndexWithoutName()
    {
        \$this->builder->replaceByIndex(0);

        \$path = new PropertyPath('[old1][old2].old3[old4][old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testReplaceByIndexDoesNotAllowInvalidOffsets()
    {
        \$this->expectException('OutOfBoundsException');
        \$this->builder->replaceByIndex(6, 'new1');
    }

    public function testReplaceByIndexDoesNotAllowNegativeOffsets()
    {
        \$this->expectException('OutOfBoundsException');
        \$this->builder->replaceByIndex(-1, 'new1');
    }

    public function testReplaceByProperty()
    {
        \$this->builder->replaceByProperty(1, 'new1');

        \$path = new PropertyPath('old1.new1.old3[old4][old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testReplaceByPropertyWithoutName()
    {
        \$this->builder->replaceByProperty(1);

        \$path = new PropertyPath('old1.old2.old3[old4][old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testReplaceByPropertyDoesNotAllowInvalidOffsets()
    {
        \$this->expectException('OutOfBoundsException');
        \$this->builder->replaceByProperty(6, 'new1');
    }

    public function testReplaceByPropertyDoesNotAllowNegativeOffsets()
    {
        \$this->expectException('OutOfBoundsException');
        \$this->builder->replaceByProperty(-1, 'new1');
    }

    public function testReplace()
    {
        \$this->builder->replace(1, 1, new PropertyPath('new1[new2].new3'));

        \$path = new PropertyPath('old1.new1[new2].new3.old3[old4][old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testReplaceUsingString()
    {
        \$this->builder->replace(1, 1, 'new1[new2].new3');

        \$path = new PropertyPath('old1.new1[new2].new3.old3[old4][old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testReplaceNegative()
    {
        \$this->builder->replace(-1, 1, new PropertyPath('new1[new2].new3'));

        \$path = new PropertyPath('old1[old2].old3[old4][old5].new1[new2].new3');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    /**
     * @dataProvider provideInvalidOffsets
     */
    public function testReplaceDoesNotAllowInvalidOffsets(\$offset)
    {
        \$this->expectException('OutOfBoundsException');
        \$this->builder->replace(\$offset, 1, new PropertyPath('new1[new2].new3'));
    }

    public function provideInvalidOffsets()
    {
        return [
            [6],
            [-7],
        ];
    }

    public function testReplaceWithLengthGreaterOne()
    {
        \$this->builder->replace(0, 2, new PropertyPath('new1[new2].new3'));

        \$path = new PropertyPath('new1[new2].new3.old3[old4][old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testReplaceSubstring()
    {
        \$this->builder->replace(1, 1, new PropertyPath('new1[new2].new3.new4[new5]'), 1, 3);

        \$path = new PropertyPath('old1[new2].new3.new4.old3[old4][old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testReplaceSubstringWithLengthGreaterOne()
    {
        \$this->builder->replace(1, 2, new PropertyPath('new1[new2].new3.new4[new5]'), 1, 3);

        \$path = new PropertyPath('old1[new2].new3.new4[old4][old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    // https://github.com/symfony/symfony/issues/5605
    public function testReplaceWithLongerPath()
    {
        // error occurs when path contains at least two more elements
        // than the builder
        \$path = new PropertyPath('new1.new2.new3');

        \$builder = new PropertyPathBuilder(new PropertyPath('old1'));
        \$builder->replace(0, 1, \$path);

        \$this->assertEquals(\$path, \$builder->getPropertyPath());
    }

    public function testReplaceWithLongerPathKeepsOrder()
    {
        \$path = new PropertyPath('new1.new2.new3');
        \$expected = new PropertyPath('new1.new2.new3.old2');

        \$builder = new PropertyPathBuilder(new PropertyPath('old1.old2'));
        \$builder->replace(0, 1, \$path);

        \$this->assertEquals(\$expected, \$builder->getPropertyPath());
    }

    public function testRemove()
    {
        \$this->builder->remove(3);

        \$path = new PropertyPath('old1[old2].old3[old5].old6');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }

    public function testRemoveDoesNotAllowInvalidOffsets()
    {
        \$this->expectException('OutOfBoundsException');
        \$this->builder->remove(6);
    }

    public function testRemoveDoesNotAllowNegativeOffsets()
    {
        \$this->expectException('OutOfBoundsException');
        \$this->builder->remove(-1);
    }

    public function testRemoveAndAppendAtTheEnd()
    {
        \$this->builder->remove(\$this->builder->getLength() - 1);

        \$path = new PropertyPath('old1[old2].old3[old4][old5]');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());

        \$this->builder->appendProperty('old7');

        \$path = new PropertyPath('old1[old2].old3[old4][old5].old7');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());

        \$this->builder->remove(\$this->builder->getLength() - 1);

        \$path = new PropertyPath('old1[old2].old3[old4][old5]');

        \$this->assertEquals(\$path, \$this->builder->getPropertyPath());
    }
}
", "vendor/symfony/property-access/Tests/PropertyPathBuilderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-access/Tests/PropertyPathBuilderTest.php");
    }
}
