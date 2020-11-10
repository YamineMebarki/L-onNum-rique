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

/* vendor/symfony/form/Tests/Extension/Validator/ViolationMapper/ViolationPathTest.php */
class __TwigTemplate_ed3975766ca6ab533d24beccf5f4324fe052bb8d7a401d535dc4606bf94817cc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Validator/ViolationMapper/ViolationPathTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Validator/ViolationMapper/ViolationPathTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Validator\\ViolationMapper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Validator\\ViolationMapper\\ViolationPath;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ViolationPathTest extends TestCase
{
    public function providePaths()
    {
        return [
            ['children[address]', [
                ['address', true, true],
            ]],
            ['children[address].children[street]', [
                ['address', true, true],
                ['street', true, true],
            ]],
            ['children[address][street]', [
                ['address', true, true],
                ['street', true, true],
            ], 'children[address].children[street]'],
            ['children[address].data', [
                ['address', true, true],
            ], 'children[address]'],
            ['children[address].data.street', [
                ['address', true, true],
                ['street', false, false],
            ]],
            ['children[address].data[street]', [
                ['address', true, true],
                ['street', false, true],
            ]],
            ['children[address].children[street].data.name', [
                ['address', true, true],
                ['street', true, true],
                ['name', false, false],
            ]],
            ['children[address].children[street].data[name]', [
                ['address', true, true],
                ['street', true, true],
                ['name', false, true],
            ]],
            ['data.address', [
                ['address', false, false],
            ]],
            ['data[address]', [
                ['address', false, true],
            ]],
            ['data.address.street', [
                ['address', false, false],
                ['street', false, false],
            ]],
            ['data[address].street', [
                ['address', false, true],
                ['street', false, false],
            ]],
            ['data.address[street]', [
                ['address', false, false],
                ['street', false, true],
            ]],
            ['data[address][street]', [
                ['address', false, true],
                ['street', false, true],
            ]],
            // A few invalid examples
            ['data', [], ''],
            ['children', [], ''],
            ['children.address', [], ''],
            ['children.address[street]', [], ''],
        ];
    }

    /**
     * @dataProvider providePaths
     */
    public function testCreatePath(\$string, \$entries, \$slicedPath = null)
    {
        if (null === \$slicedPath) {
            \$slicedPath = \$string;
        }

        \$path = new ViolationPath(\$string);

        \$this->assertSame(\$slicedPath, \$path->__toString());
        \$this->assertCount(\\count(\$entries), \$path->getElements());
        \$this->assertSame(\\count(\$entries), \$path->getLength());

        foreach (\$entries as \$index => \$entry) {
            \$this->assertEquals(\$entry[0], \$path->getElement(\$index));
            \$this->assertSame(\$entry[1], \$path->mapsForm(\$index));
            \$this->assertSame(\$entry[2], \$path->isIndex(\$index));
            \$this->assertSame(!\$entry[2], \$path->isProperty(\$index));
        }
    }

    public function provideParents()
    {
        return [
            ['children[address]', null],
            ['children[address].children[street]', 'children[address]'],
            ['children[address].data.street', 'children[address]'],
            ['children[address].data[street]', 'children[address]'],
            ['data.address', null],
            ['data.address.street', 'data.address'],
            ['data.address[street]', 'data.address'],
            ['data[address].street', 'data[address]'],
            ['data[address][street]', 'data[address]'],
        ];
    }

    /**
     * @dataProvider provideParents
     */
    public function testGetParent(\$violationPath, \$parentPath)
    {
        \$path = new ViolationPath(\$violationPath);
        \$parent = null === \$parentPath ? null : new ViolationPath(\$parentPath);

        \$this->assertEquals(\$parent, \$path->getParent());
    }

    public function testGetElement()
    {
        \$path = new ViolationPath('children[address].data[street].name');

        \$this->assertEquals('street', \$path->getElement(1));
    }

    public function testGetElementDoesNotAcceptInvalidIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$path = new ViolationPath('children[address].data[street].name');

        \$path->getElement(3);
    }

    public function testGetElementDoesNotAcceptNegativeIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$path = new ViolationPath('children[address].data[street].name');

        \$path->getElement(-1);
    }

    public function testIsProperty()
    {
        \$path = new ViolationPath('children[address].data[street].name');

        \$this->assertFalse(\$path->isProperty(1));
        \$this->assertTrue(\$path->isProperty(2));
    }

    public function testIsPropertyDoesNotAcceptInvalidIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$path = new ViolationPath('children[address].data[street].name');

        \$path->isProperty(3);
    }

    public function testIsPropertyDoesNotAcceptNegativeIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$path = new ViolationPath('children[address].data[street].name');

        \$path->isProperty(-1);
    }

    public function testIsIndex()
    {
        \$path = new ViolationPath('children[address].data[street].name');

        \$this->assertTrue(\$path->isIndex(1));
        \$this->assertFalse(\$path->isIndex(2));
    }

    public function testIsIndexDoesNotAcceptInvalidIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$path = new ViolationPath('children[address].data[street].name');

        \$path->isIndex(3);
    }

    public function testIsIndexDoesNotAcceptNegativeIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$path = new ViolationPath('children[address].data[street].name');

        \$path->isIndex(-1);
    }

    public function testMapsForm()
    {
        \$path = new ViolationPath('children[address].data[street].name');

        \$this->assertTrue(\$path->mapsForm(0));
        \$this->assertFalse(\$path->mapsForm(1));
        \$this->assertFalse(\$path->mapsForm(2));
    }

    public function testMapsFormDoesNotAcceptInvalidIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$path = new ViolationPath('children[address].data[street].name');

        \$path->mapsForm(3);
    }

    public function testMapsFormDoesNotAcceptNegativeIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$path = new ViolationPath('children[address].data[street].name');

        \$path->mapsForm(-1);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Validator/ViolationMapper/ViolationPathTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Validator\\ViolationMapper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Validator\\ViolationMapper\\ViolationPath;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ViolationPathTest extends TestCase
{
    public function providePaths()
    {
        return [
            ['children[address]', [
                ['address', true, true],
            ]],
            ['children[address].children[street]', [
                ['address', true, true],
                ['street', true, true],
            ]],
            ['children[address][street]', [
                ['address', true, true],
                ['street', true, true],
            ], 'children[address].children[street]'],
            ['children[address].data', [
                ['address', true, true],
            ], 'children[address]'],
            ['children[address].data.street', [
                ['address', true, true],
                ['street', false, false],
            ]],
            ['children[address].data[street]', [
                ['address', true, true],
                ['street', false, true],
            ]],
            ['children[address].children[street].data.name', [
                ['address', true, true],
                ['street', true, true],
                ['name', false, false],
            ]],
            ['children[address].children[street].data[name]', [
                ['address', true, true],
                ['street', true, true],
                ['name', false, true],
            ]],
            ['data.address', [
                ['address', false, false],
            ]],
            ['data[address]', [
                ['address', false, true],
            ]],
            ['data.address.street', [
                ['address', false, false],
                ['street', false, false],
            ]],
            ['data[address].street', [
                ['address', false, true],
                ['street', false, false],
            ]],
            ['data.address[street]', [
                ['address', false, false],
                ['street', false, true],
            ]],
            ['data[address][street]', [
                ['address', false, true],
                ['street', false, true],
            ]],
            // A few invalid examples
            ['data', [], ''],
            ['children', [], ''],
            ['children.address', [], ''],
            ['children.address[street]', [], ''],
        ];
    }

    /**
     * @dataProvider providePaths
     */
    public function testCreatePath(\$string, \$entries, \$slicedPath = null)
    {
        if (null === \$slicedPath) {
            \$slicedPath = \$string;
        }

        \$path = new ViolationPath(\$string);

        \$this->assertSame(\$slicedPath, \$path->__toString());
        \$this->assertCount(\\count(\$entries), \$path->getElements());
        \$this->assertSame(\\count(\$entries), \$path->getLength());

        foreach (\$entries as \$index => \$entry) {
            \$this->assertEquals(\$entry[0], \$path->getElement(\$index));
            \$this->assertSame(\$entry[1], \$path->mapsForm(\$index));
            \$this->assertSame(\$entry[2], \$path->isIndex(\$index));
            \$this->assertSame(!\$entry[2], \$path->isProperty(\$index));
        }
    }

    public function provideParents()
    {
        return [
            ['children[address]', null],
            ['children[address].children[street]', 'children[address]'],
            ['children[address].data.street', 'children[address]'],
            ['children[address].data[street]', 'children[address]'],
            ['data.address', null],
            ['data.address.street', 'data.address'],
            ['data.address[street]', 'data.address'],
            ['data[address].street', 'data[address]'],
            ['data[address][street]', 'data[address]'],
        ];
    }

    /**
     * @dataProvider provideParents
     */
    public function testGetParent(\$violationPath, \$parentPath)
    {
        \$path = new ViolationPath(\$violationPath);
        \$parent = null === \$parentPath ? null : new ViolationPath(\$parentPath);

        \$this->assertEquals(\$parent, \$path->getParent());
    }

    public function testGetElement()
    {
        \$path = new ViolationPath('children[address].data[street].name');

        \$this->assertEquals('street', \$path->getElement(1));
    }

    public function testGetElementDoesNotAcceptInvalidIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$path = new ViolationPath('children[address].data[street].name');

        \$path->getElement(3);
    }

    public function testGetElementDoesNotAcceptNegativeIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$path = new ViolationPath('children[address].data[street].name');

        \$path->getElement(-1);
    }

    public function testIsProperty()
    {
        \$path = new ViolationPath('children[address].data[street].name');

        \$this->assertFalse(\$path->isProperty(1));
        \$this->assertTrue(\$path->isProperty(2));
    }

    public function testIsPropertyDoesNotAcceptInvalidIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$path = new ViolationPath('children[address].data[street].name');

        \$path->isProperty(3);
    }

    public function testIsPropertyDoesNotAcceptNegativeIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$path = new ViolationPath('children[address].data[street].name');

        \$path->isProperty(-1);
    }

    public function testIsIndex()
    {
        \$path = new ViolationPath('children[address].data[street].name');

        \$this->assertTrue(\$path->isIndex(1));
        \$this->assertFalse(\$path->isIndex(2));
    }

    public function testIsIndexDoesNotAcceptInvalidIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$path = new ViolationPath('children[address].data[street].name');

        \$path->isIndex(3);
    }

    public function testIsIndexDoesNotAcceptNegativeIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$path = new ViolationPath('children[address].data[street].name');

        \$path->isIndex(-1);
    }

    public function testMapsForm()
    {
        \$path = new ViolationPath('children[address].data[street].name');

        \$this->assertTrue(\$path->mapsForm(0));
        \$this->assertFalse(\$path->mapsForm(1));
        \$this->assertFalse(\$path->mapsForm(2));
    }

    public function testMapsFormDoesNotAcceptInvalidIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$path = new ViolationPath('children[address].data[street].name');

        \$path->mapsForm(3);
    }

    public function testMapsFormDoesNotAcceptNegativeIndices()
    {
        \$this->expectException('OutOfBoundsException');
        \$path = new ViolationPath('children[address].data[street].name');

        \$path->mapsForm(-1);
    }
}
", "vendor/symfony/form/Tests/Extension/Validator/ViolationMapper/ViolationPathTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Validator/ViolationMapper/ViolationPathTest.php");
    }
}
