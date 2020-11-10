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

/* vendor/symfony/var-dumper/Tests/Cloner/DataTest.php */
class __TwigTemplate_b5c6048d6137494a0242dd863614595c349cea2632c58b8ee4a5db626a860135 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Cloner/DataTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Cloner/DataTest.php"));

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

namespace Symfony\\Component\\VarDumper\\Tests\\Cloner;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\VarDumper\\Caster\\Caster;
use Symfony\\Component\\VarDumper\\Caster\\ClassStub;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;

class DataTest extends TestCase
{
    public function testBasicData()
    {
        \$values = [1 => 123, 4.5, 'abc', null, false];
        \$data = \$this->cloneVar(\$values);
        \$clonedValues = [];

        \$this->assertInstanceOf(Data::class, \$data);
        \$this->assertCount(\\count(\$values), \$data);
        \$this->assertFalse(isset(\$data->{0}));
        \$this->assertFalse(isset(\$data[0]));

        foreach (\$data as \$k => \$v) {
            \$this->assertTrue(isset(\$data->{\$k}));
            \$this->assertTrue(isset(\$data[\$k]));
            \$this->assertSame(\\gettype(\$values[\$k]), \$data->seek(\$k)->getType());
            \$this->assertSame(\$values[\$k], \$data->seek(\$k)->getValue());
            \$this->assertSame(\$values[\$k], \$data->{\$k});
            \$this->assertSame(\$values[\$k], \$data[\$k]);
            \$this->assertSame((string) \$values[\$k], (string) \$data->seek(\$k));

            \$clonedValues[\$k] = \$v->getValue();
        }

        \$this->assertSame(\$values, \$clonedValues);
    }

    public function testObject()
    {
        \$data = \$this->cloneVar(new \\Exception('foo'));

        \$this->assertSame('Exception', \$data->getType());

        \$this->assertSame('foo', \$data->message);
        \$this->assertSame('foo', \$data->{Caster::PREFIX_PROTECTED.'message'});

        \$this->assertSame('foo', \$data['message']);
        \$this->assertSame('foo', \$data[Caster::PREFIX_PROTECTED.'message']);

        \$this->assertStringMatchesFormat('Exception (count=%d)', (string) \$data);
    }

    public function testArray()
    {
        \$values = [[], [123]];
        \$data = \$this->cloneVar(\$values);

        \$this->assertSame(\$values, \$data->getValue(true));

        \$children = \$data->getValue();

        \$this->assertIsArray(\$children);

        \$this->assertInstanceOf(Data::class, \$children[0]);
        \$this->assertInstanceOf(Data::class, \$children[1]);

        \$this->assertEquals(\$children[0], \$data[0]);
        \$this->assertEquals(\$children[1], \$data[1]);

        \$this->assertSame(\$values[0], \$children[0]->getValue(true));
        \$this->assertSame(\$values[1], \$children[1]->getValue(true));
    }

    public function testStub()
    {
        \$data = \$this->cloneVar([new ClassStub('stdClass')]);
        \$data = \$data[0];

        \$this->assertSame('string', \$data->getType());
        \$this->assertSame('stdClass', \$data->getValue());
        \$this->assertSame('stdClass', (string) \$data);
    }

    public function testHardRefs()
    {
        \$values = [[]];
        \$values[1] = &\$values[0];
        \$values[2][0] = &\$values[2];

        \$data = \$this->cloneVar(\$values);

        \$this->assertSame([], \$data[0]->getValue());
        \$this->assertSame([], \$data[1]->getValue());
        \$this->assertEquals([\$data[2]->getValue()], \$data[2]->getValue(true));

        \$this->assertSame('array (count=3)', (string) \$data);
    }

    private function cloneVar(\$value)
    {
        \$cloner = new VarCloner();

        return \$cloner->cloneVar(\$value);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Tests/Cloner/DataTest.php";
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

namespace Symfony\\Component\\VarDumper\\Tests\\Cloner;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\VarDumper\\Caster\\Caster;
use Symfony\\Component\\VarDumper\\Caster\\ClassStub;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;

class DataTest extends TestCase
{
    public function testBasicData()
    {
        \$values = [1 => 123, 4.5, 'abc', null, false];
        \$data = \$this->cloneVar(\$values);
        \$clonedValues = [];

        \$this->assertInstanceOf(Data::class, \$data);
        \$this->assertCount(\\count(\$values), \$data);
        \$this->assertFalse(isset(\$data->{0}));
        \$this->assertFalse(isset(\$data[0]));

        foreach (\$data as \$k => \$v) {
            \$this->assertTrue(isset(\$data->{\$k}));
            \$this->assertTrue(isset(\$data[\$k]));
            \$this->assertSame(\\gettype(\$values[\$k]), \$data->seek(\$k)->getType());
            \$this->assertSame(\$values[\$k], \$data->seek(\$k)->getValue());
            \$this->assertSame(\$values[\$k], \$data->{\$k});
            \$this->assertSame(\$values[\$k], \$data[\$k]);
            \$this->assertSame((string) \$values[\$k], (string) \$data->seek(\$k));

            \$clonedValues[\$k] = \$v->getValue();
        }

        \$this->assertSame(\$values, \$clonedValues);
    }

    public function testObject()
    {
        \$data = \$this->cloneVar(new \\Exception('foo'));

        \$this->assertSame('Exception', \$data->getType());

        \$this->assertSame('foo', \$data->message);
        \$this->assertSame('foo', \$data->{Caster::PREFIX_PROTECTED.'message'});

        \$this->assertSame('foo', \$data['message']);
        \$this->assertSame('foo', \$data[Caster::PREFIX_PROTECTED.'message']);

        \$this->assertStringMatchesFormat('Exception (count=%d)', (string) \$data);
    }

    public function testArray()
    {
        \$values = [[], [123]];
        \$data = \$this->cloneVar(\$values);

        \$this->assertSame(\$values, \$data->getValue(true));

        \$children = \$data->getValue();

        \$this->assertIsArray(\$children);

        \$this->assertInstanceOf(Data::class, \$children[0]);
        \$this->assertInstanceOf(Data::class, \$children[1]);

        \$this->assertEquals(\$children[0], \$data[0]);
        \$this->assertEquals(\$children[1], \$data[1]);

        \$this->assertSame(\$values[0], \$children[0]->getValue(true));
        \$this->assertSame(\$values[1], \$children[1]->getValue(true));
    }

    public function testStub()
    {
        \$data = \$this->cloneVar([new ClassStub('stdClass')]);
        \$data = \$data[0];

        \$this->assertSame('string', \$data->getType());
        \$this->assertSame('stdClass', \$data->getValue());
        \$this->assertSame('stdClass', (string) \$data);
    }

    public function testHardRefs()
    {
        \$values = [[]];
        \$values[1] = &\$values[0];
        \$values[2][0] = &\$values[2];

        \$data = \$this->cloneVar(\$values);

        \$this->assertSame([], \$data[0]->getValue());
        \$this->assertSame([], \$data[1]->getValue());
        \$this->assertEquals([\$data[2]->getValue()], \$data[2]->getValue(true));

        \$this->assertSame('array (count=3)', (string) \$data);
    }

    private function cloneVar(\$value)
    {
        \$cloner = new VarCloner();

        return \$cloner->cloneVar(\$value);
    }
}
", "vendor/symfony/var-dumper/Tests/Cloner/DataTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Tests/Cloner/DataTest.php");
    }
}
