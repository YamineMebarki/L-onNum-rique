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

/* vendor/symfony/console/Tests/Input/InputArgumentTest.php */
class __TwigTemplate_1407603895732aa2eb36ec5c1ac13ce7a541583612d1fa9e8332140c09497fee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Input/InputArgumentTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Input/InputArgumentTest.php"));

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

namespace Symfony\\Component\\Console\\Tests\\Input;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Input\\InputArgument;

class InputArgumentTest extends TestCase
{
    public function testConstructor()
    {
        \$argument = new InputArgument('foo');
        \$this->assertEquals('foo', \$argument->getName(), '__construct() takes a name as its first argument');
    }

    public function testModes()
    {
        \$argument = new InputArgument('foo');
        \$this->assertFalse(\$argument->isRequired(), '__construct() gives a \"InputArgument::OPTIONAL\" mode by default');

        \$argument = new InputArgument('foo', null);
        \$this->assertFalse(\$argument->isRequired(), '__construct() can take \"InputArgument::OPTIONAL\" as its mode');

        \$argument = new InputArgument('foo', InputArgument::OPTIONAL);
        \$this->assertFalse(\$argument->isRequired(), '__construct() can take \"InputArgument::OPTIONAL\" as its mode');

        \$argument = new InputArgument('foo', InputArgument::REQUIRED);
        \$this->assertTrue(\$argument->isRequired(), '__construct() can take \"InputArgument::REQUIRED\" as its mode');
    }

    public function testInvalidModes()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Argument mode \"-1\" is not valid.');

        new InputArgument('foo', '-1');
    }

    public function testIsArray()
    {
        \$argument = new InputArgument('foo', InputArgument::IS_ARRAY);
        \$this->assertTrue(\$argument->isArray(), '->isArray() returns true if the argument can be an array');
        \$argument = new InputArgument('foo', InputArgument::OPTIONAL | InputArgument::IS_ARRAY);
        \$this->assertTrue(\$argument->isArray(), '->isArray() returns true if the argument can be an array');
        \$argument = new InputArgument('foo', InputArgument::OPTIONAL);
        \$this->assertFalse(\$argument->isArray(), '->isArray() returns false if the argument can not be an array');
    }

    public function testGetDescription()
    {
        \$argument = new InputArgument('foo', null, 'Some description');
        \$this->assertEquals('Some description', \$argument->getDescription(), '->getDescription() return the message description');
    }

    public function testGetDefault()
    {
        \$argument = new InputArgument('foo', InputArgument::OPTIONAL, '', 'default');
        \$this->assertEquals('default', \$argument->getDefault(), '->getDefault() return the default value');
    }

    public function testSetDefault()
    {
        \$argument = new InputArgument('foo', InputArgument::OPTIONAL, '', 'default');
        \$argument->setDefault(null);
        \$this->assertNull(\$argument->getDefault(), '->setDefault() can reset the default value by passing null');
        \$argument->setDefault('another');
        \$this->assertEquals('another', \$argument->getDefault(), '->setDefault() changes the default value');

        \$argument = new InputArgument('foo', InputArgument::OPTIONAL | InputArgument::IS_ARRAY);
        \$argument->setDefault([1, 2]);
        \$this->assertEquals([1, 2], \$argument->getDefault(), '->setDefault() changes the default value');
    }

    public function testSetDefaultWithRequiredArgument()
    {
        \$this->expectException('LogicException');
        \$this->expectExceptionMessage('Cannot set a default value except for InputArgument::OPTIONAL mode.');
        \$argument = new InputArgument('foo', InputArgument::REQUIRED);
        \$argument->setDefault('default');
    }

    public function testSetDefaultWithArrayArgument()
    {
        \$this->expectException('LogicException');
        \$this->expectExceptionMessage('A default value for an array argument must be an array.');
        \$argument = new InputArgument('foo', InputArgument::IS_ARRAY);
        \$argument->setDefault('default');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Input/InputArgumentTest.php";
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

namespace Symfony\\Component\\Console\\Tests\\Input;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Input\\InputArgument;

class InputArgumentTest extends TestCase
{
    public function testConstructor()
    {
        \$argument = new InputArgument('foo');
        \$this->assertEquals('foo', \$argument->getName(), '__construct() takes a name as its first argument');
    }

    public function testModes()
    {
        \$argument = new InputArgument('foo');
        \$this->assertFalse(\$argument->isRequired(), '__construct() gives a \"InputArgument::OPTIONAL\" mode by default');

        \$argument = new InputArgument('foo', null);
        \$this->assertFalse(\$argument->isRequired(), '__construct() can take \"InputArgument::OPTIONAL\" as its mode');

        \$argument = new InputArgument('foo', InputArgument::OPTIONAL);
        \$this->assertFalse(\$argument->isRequired(), '__construct() can take \"InputArgument::OPTIONAL\" as its mode');

        \$argument = new InputArgument('foo', InputArgument::REQUIRED);
        \$this->assertTrue(\$argument->isRequired(), '__construct() can take \"InputArgument::REQUIRED\" as its mode');
    }

    public function testInvalidModes()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('Argument mode \"-1\" is not valid.');

        new InputArgument('foo', '-1');
    }

    public function testIsArray()
    {
        \$argument = new InputArgument('foo', InputArgument::IS_ARRAY);
        \$this->assertTrue(\$argument->isArray(), '->isArray() returns true if the argument can be an array');
        \$argument = new InputArgument('foo', InputArgument::OPTIONAL | InputArgument::IS_ARRAY);
        \$this->assertTrue(\$argument->isArray(), '->isArray() returns true if the argument can be an array');
        \$argument = new InputArgument('foo', InputArgument::OPTIONAL);
        \$this->assertFalse(\$argument->isArray(), '->isArray() returns false if the argument can not be an array');
    }

    public function testGetDescription()
    {
        \$argument = new InputArgument('foo', null, 'Some description');
        \$this->assertEquals('Some description', \$argument->getDescription(), '->getDescription() return the message description');
    }

    public function testGetDefault()
    {
        \$argument = new InputArgument('foo', InputArgument::OPTIONAL, '', 'default');
        \$this->assertEquals('default', \$argument->getDefault(), '->getDefault() return the default value');
    }

    public function testSetDefault()
    {
        \$argument = new InputArgument('foo', InputArgument::OPTIONAL, '', 'default');
        \$argument->setDefault(null);
        \$this->assertNull(\$argument->getDefault(), '->setDefault() can reset the default value by passing null');
        \$argument->setDefault('another');
        \$this->assertEquals('another', \$argument->getDefault(), '->setDefault() changes the default value');

        \$argument = new InputArgument('foo', InputArgument::OPTIONAL | InputArgument::IS_ARRAY);
        \$argument->setDefault([1, 2]);
        \$this->assertEquals([1, 2], \$argument->getDefault(), '->setDefault() changes the default value');
    }

    public function testSetDefaultWithRequiredArgument()
    {
        \$this->expectException('LogicException');
        \$this->expectExceptionMessage('Cannot set a default value except for InputArgument::OPTIONAL mode.');
        \$argument = new InputArgument('foo', InputArgument::REQUIRED);
        \$argument->setDefault('default');
    }

    public function testSetDefaultWithArrayArgument()
    {
        \$this->expectException('LogicException');
        \$this->expectExceptionMessage('A default value for an array argument must be an array.');
        \$argument = new InputArgument('foo', InputArgument::IS_ARRAY);
        \$argument->setDefault('default');
    }
}
", "vendor/symfony/console/Tests/Input/InputArgumentTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Input/InputArgumentTest.php");
    }
}
