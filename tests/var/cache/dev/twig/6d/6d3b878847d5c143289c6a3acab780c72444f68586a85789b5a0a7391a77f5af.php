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

/* vendor/symfony/console/Tests/Helper/HelperSetTest.php */
class __TwigTemplate_54b02c2a13221e503efb0e53dc5833cb64b6035f45e84a6ed7c10f4963a509bb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Helper/HelperSetTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Helper/HelperSetTest.php"));

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

namespace Symfony\\Component\\Console\\Tests\\Helper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Helper\\HelperSet;

class HelperSetTest extends TestCase
{
    public function testConstructor()
    {
        \$mock_helper = \$this->getGenericMockHelper('fake_helper');
        \$helperset = new HelperSet(['fake_helper_alias' => \$mock_helper]);

        \$this->assertEquals(\$mock_helper, \$helperset->get('fake_helper_alias'), '__construct sets given helper to helpers');
        \$this->assertTrue(\$helperset->has('fake_helper_alias'), '__construct sets helper alias for given helper');
    }

    public function testSet()
    {
        \$helperset = new HelperSet();
        \$helperset->set(\$this->getGenericMockHelper('fake_helper', \$helperset));
        \$this->assertTrue(\$helperset->has('fake_helper'), '->set() adds helper to helpers');

        \$helperset = new HelperSet();
        \$helperset->set(\$this->getGenericMockHelper('fake_helper_01', \$helperset));
        \$helperset->set(\$this->getGenericMockHelper('fake_helper_02', \$helperset));
        \$this->assertTrue(\$helperset->has('fake_helper_01'), '->set() will set multiple helpers on consecutive calls');
        \$this->assertTrue(\$helperset->has('fake_helper_02'), '->set() will set multiple helpers on consecutive calls');

        \$helperset = new HelperSet();
        \$helperset->set(\$this->getGenericMockHelper('fake_helper', \$helperset), 'fake_helper_alias');
        \$this->assertTrue(\$helperset->has('fake_helper'), '->set() adds helper alias when set');
        \$this->assertTrue(\$helperset->has('fake_helper_alias'), '->set() adds helper alias when set');
    }

    public function testHas()
    {
        \$helperset = new HelperSet(['fake_helper_alias' => \$this->getGenericMockHelper('fake_helper')]);
        \$this->assertTrue(\$helperset->has('fake_helper'), '->has() finds set helper');
        \$this->assertTrue(\$helperset->has('fake_helper_alias'), '->has() finds set helper by alias');
    }

    public function testGet()
    {
        \$helper_01 = \$this->getGenericMockHelper('fake_helper_01');
        \$helper_02 = \$this->getGenericMockHelper('fake_helper_02');
        \$helperset = new HelperSet(['fake_helper_01_alias' => \$helper_01, 'fake_helper_02_alias' => \$helper_02]);
        \$this->assertEquals(\$helper_01, \$helperset->get('fake_helper_01'), '->get() returns correct helper by name');
        \$this->assertEquals(\$helper_01, \$helperset->get('fake_helper_01_alias'), '->get() returns correct helper by alias');
        \$this->assertEquals(\$helper_02, \$helperset->get('fake_helper_02'), '->get() returns correct helper by name');
        \$this->assertEquals(\$helper_02, \$helperset->get('fake_helper_02_alias'), '->get() returns correct helper by alias');

        \$helperset = new HelperSet();
        try {
            \$helperset->get('foo');
            \$this->fail('->get() throws InvalidArgumentException when helper not found');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\InvalidArgumentException', \$e, '->get() throws InvalidArgumentException when helper not found');
            \$this->assertInstanceOf('Symfony\\Component\\Console\\Exception\\ExceptionInterface', \$e, '->get() throws domain specific exception when helper not found');
            \$this->assertStringContainsString('The helper \"foo\" is not defined.', \$e->getMessage(), '->get() throws InvalidArgumentException when helper not found');
        }
    }

    public function testSetCommand()
    {
        \$cmd_01 = new Command('foo');
        \$cmd_02 = new Command('bar');

        \$helperset = new HelperSet();
        \$helperset->setCommand(\$cmd_01);
        \$this->assertEquals(\$cmd_01, \$helperset->getCommand(), '->setCommand() stores given command');

        \$helperset = new HelperSet();
        \$helperset->setCommand(\$cmd_01);
        \$helperset->setCommand(\$cmd_02);
        \$this->assertEquals(\$cmd_02, \$helperset->getCommand(), '->setCommand() overwrites stored command with consecutive calls');
    }

    public function testGetCommand()
    {
        \$cmd = new Command('foo');
        \$helperset = new HelperSet();
        \$helperset->setCommand(\$cmd);
        \$this->assertEquals(\$cmd, \$helperset->getCommand(), '->getCommand() retrieves stored command');
    }

    public function testIteration()
    {
        \$helperset = new HelperSet();
        \$helperset->set(\$this->getGenericMockHelper('fake_helper_01', \$helperset));
        \$helperset->set(\$this->getGenericMockHelper('fake_helper_02', \$helperset));

        \$helpers = ['fake_helper_01', 'fake_helper_02'];
        \$i = 0;

        foreach (\$helperset as \$helper) {
            \$this->assertEquals(\$helpers[\$i++], \$helper->getName());
        }
    }

    private function getGenericMockHelper(\$name, HelperSet \$helperset = null)
    {
        \$mock_helper = \$this->getMockBuilder('\\Symfony\\Component\\Console\\Helper\\HelperInterface')->getMock();
        \$mock_helper->expects(\$this->any())
            ->method('getName')
            ->willReturn(\$name);

        if (\$helperset) {
            \$mock_helper->expects(\$this->any())
                ->method('setHelperSet')
                ->with(\$this->equalTo(\$helperset));
        }

        return \$mock_helper;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Helper/HelperSetTest.php";
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

namespace Symfony\\Component\\Console\\Tests\\Helper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Helper\\HelperSet;

class HelperSetTest extends TestCase
{
    public function testConstructor()
    {
        \$mock_helper = \$this->getGenericMockHelper('fake_helper');
        \$helperset = new HelperSet(['fake_helper_alias' => \$mock_helper]);

        \$this->assertEquals(\$mock_helper, \$helperset->get('fake_helper_alias'), '__construct sets given helper to helpers');
        \$this->assertTrue(\$helperset->has('fake_helper_alias'), '__construct sets helper alias for given helper');
    }

    public function testSet()
    {
        \$helperset = new HelperSet();
        \$helperset->set(\$this->getGenericMockHelper('fake_helper', \$helperset));
        \$this->assertTrue(\$helperset->has('fake_helper'), '->set() adds helper to helpers');

        \$helperset = new HelperSet();
        \$helperset->set(\$this->getGenericMockHelper('fake_helper_01', \$helperset));
        \$helperset->set(\$this->getGenericMockHelper('fake_helper_02', \$helperset));
        \$this->assertTrue(\$helperset->has('fake_helper_01'), '->set() will set multiple helpers on consecutive calls');
        \$this->assertTrue(\$helperset->has('fake_helper_02'), '->set() will set multiple helpers on consecutive calls');

        \$helperset = new HelperSet();
        \$helperset->set(\$this->getGenericMockHelper('fake_helper', \$helperset), 'fake_helper_alias');
        \$this->assertTrue(\$helperset->has('fake_helper'), '->set() adds helper alias when set');
        \$this->assertTrue(\$helperset->has('fake_helper_alias'), '->set() adds helper alias when set');
    }

    public function testHas()
    {
        \$helperset = new HelperSet(['fake_helper_alias' => \$this->getGenericMockHelper('fake_helper')]);
        \$this->assertTrue(\$helperset->has('fake_helper'), '->has() finds set helper');
        \$this->assertTrue(\$helperset->has('fake_helper_alias'), '->has() finds set helper by alias');
    }

    public function testGet()
    {
        \$helper_01 = \$this->getGenericMockHelper('fake_helper_01');
        \$helper_02 = \$this->getGenericMockHelper('fake_helper_02');
        \$helperset = new HelperSet(['fake_helper_01_alias' => \$helper_01, 'fake_helper_02_alias' => \$helper_02]);
        \$this->assertEquals(\$helper_01, \$helperset->get('fake_helper_01'), '->get() returns correct helper by name');
        \$this->assertEquals(\$helper_01, \$helperset->get('fake_helper_01_alias'), '->get() returns correct helper by alias');
        \$this->assertEquals(\$helper_02, \$helperset->get('fake_helper_02'), '->get() returns correct helper by name');
        \$this->assertEquals(\$helper_02, \$helperset->get('fake_helper_02_alias'), '->get() returns correct helper by alias');

        \$helperset = new HelperSet();
        try {
            \$helperset->get('foo');
            \$this->fail('->get() throws InvalidArgumentException when helper not found');
        } catch (\\Exception \$e) {
            \$this->assertInstanceOf('\\InvalidArgumentException', \$e, '->get() throws InvalidArgumentException when helper not found');
            \$this->assertInstanceOf('Symfony\\Component\\Console\\Exception\\ExceptionInterface', \$e, '->get() throws domain specific exception when helper not found');
            \$this->assertStringContainsString('The helper \"foo\" is not defined.', \$e->getMessage(), '->get() throws InvalidArgumentException when helper not found');
        }
    }

    public function testSetCommand()
    {
        \$cmd_01 = new Command('foo');
        \$cmd_02 = new Command('bar');

        \$helperset = new HelperSet();
        \$helperset->setCommand(\$cmd_01);
        \$this->assertEquals(\$cmd_01, \$helperset->getCommand(), '->setCommand() stores given command');

        \$helperset = new HelperSet();
        \$helperset->setCommand(\$cmd_01);
        \$helperset->setCommand(\$cmd_02);
        \$this->assertEquals(\$cmd_02, \$helperset->getCommand(), '->setCommand() overwrites stored command with consecutive calls');
    }

    public function testGetCommand()
    {
        \$cmd = new Command('foo');
        \$helperset = new HelperSet();
        \$helperset->setCommand(\$cmd);
        \$this->assertEquals(\$cmd, \$helperset->getCommand(), '->getCommand() retrieves stored command');
    }

    public function testIteration()
    {
        \$helperset = new HelperSet();
        \$helperset->set(\$this->getGenericMockHelper('fake_helper_01', \$helperset));
        \$helperset->set(\$this->getGenericMockHelper('fake_helper_02', \$helperset));

        \$helpers = ['fake_helper_01', 'fake_helper_02'];
        \$i = 0;

        foreach (\$helperset as \$helper) {
            \$this->assertEquals(\$helpers[\$i++], \$helper->getName());
        }
    }

    private function getGenericMockHelper(\$name, HelperSet \$helperset = null)
    {
        \$mock_helper = \$this->getMockBuilder('\\Symfony\\Component\\Console\\Helper\\HelperInterface')->getMock();
        \$mock_helper->expects(\$this->any())
            ->method('getName')
            ->willReturn(\$name);

        if (\$helperset) {
            \$mock_helper->expects(\$this->any())
                ->method('setHelperSet')
                ->with(\$this->equalTo(\$helperset));
        }

        return \$mock_helper;
    }
}
", "vendor/symfony/console/Tests/Helper/HelperSetTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Helper/HelperSetTest.php");
    }
}
