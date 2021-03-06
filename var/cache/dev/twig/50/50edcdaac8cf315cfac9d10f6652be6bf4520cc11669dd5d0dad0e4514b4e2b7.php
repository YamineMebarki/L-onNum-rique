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

/* vendor/symfony/phpunit-bridge/Tests/ClassExistsMockTest.php */
class __TwigTemplate_dd7de79ba823a9b2a203406457f8157a0a0e1b1157797a89fd3e165ac44dda40 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/ClassExistsMockTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/ClassExistsMockTest.php"));

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

namespace Symfony\\Bridge\\PhpUnit\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\PhpUnit\\ClassExistsMock;

class ClassExistsMockTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        ClassExistsMock::register(__CLASS__);
    }

    protected function setUp(): void
    {
        ClassExistsMock::withMockedClasses([
            ExistingClass::class => false,
            'NonExistingClass' => true,
            ExistingInterface::class => false,
            'NonExistingInterface' => true,
            ExistingTrait::class => false,
            'NonExistingTrait' => true,
        ]);
    }

    public function testClassExists()
    {
        \$this->assertFalse(class_exists(ExistingClass::class));
        \$this->assertFalse(class_exists(ExistingClass::class, false));
        \$this->assertFalse(class_exists('\\\\'.ExistingClass::class));
        \$this->assertFalse(class_exists('\\\\'.ExistingClass::class, false));
        \$this->assertTrue(class_exists('NonExistingClass'));
        \$this->assertTrue(class_exists('NonExistingClass', false));
        \$this->assertTrue(class_exists('\\\\NonExistingClass'));
        \$this->assertTrue(class_exists('\\\\NonExistingClass', false));
        \$this->assertTrue(class_exists(ExistingClassReal::class));
        \$this->assertTrue(class_exists(ExistingClassReal::class, false));
        \$this->assertTrue(class_exists('\\\\'.ExistingClassReal::class));
        \$this->assertTrue(class_exists('\\\\'.ExistingClassReal::class, false));
        \$this->assertFalse(class_exists('NonExistingClassReal'));
        \$this->assertFalse(class_exists('NonExistingClassReal', false));
        \$this->assertFalse(class_exists('\\\\NonExistingClassReal'));
        \$this->assertFalse(class_exists('\\\\NonExistingClassReal', false));
    }

    public function testInterfaceExists()
    {
        \$this->assertFalse(interface_exists(ExistingInterface::class));
        \$this->assertFalse(interface_exists(ExistingInterface::class, false));
        \$this->assertFalse(interface_exists('\\\\'.ExistingInterface::class));
        \$this->assertFalse(interface_exists('\\\\'.ExistingInterface::class, false));
        \$this->assertTrue(interface_exists('NonExistingInterface'));
        \$this->assertTrue(interface_exists('NonExistingInterface', false));
        \$this->assertTrue(interface_exists('\\\\NonExistingInterface'));
        \$this->assertTrue(interface_exists('\\\\NonExistingInterface', false));
        \$this->assertTrue(interface_exists(ExistingInterfaceReal::class));
        \$this->assertTrue(interface_exists(ExistingInterfaceReal::class, false));
        \$this->assertTrue(interface_exists('\\\\'.ExistingInterfaceReal::class));
        \$this->assertTrue(interface_exists('\\\\'.ExistingInterfaceReal::class, false));
        \$this->assertFalse(interface_exists('NonExistingClassReal'));
        \$this->assertFalse(interface_exists('NonExistingClassReal', false));
        \$this->assertFalse(interface_exists('\\\\NonExistingInterfaceReal'));
        \$this->assertFalse(interface_exists('\\\\NonExistingInterfaceReal', false));
    }

    public function testTraitExists()
    {
        \$this->assertFalse(trait_exists(ExistingTrait::class));
        \$this->assertFalse(trait_exists(ExistingTrait::class, false));
        \$this->assertFalse(trait_exists('\\\\'.ExistingTrait::class));
        \$this->assertFalse(trait_exists('\\\\'.ExistingTrait::class, false));
        \$this->assertTrue(trait_exists('NonExistingTrait'));
        \$this->assertTrue(trait_exists('NonExistingTrait', false));
        \$this->assertTrue(trait_exists('\\\\NonExistingTrait'));
        \$this->assertTrue(trait_exists('\\\\NonExistingTrait', false));
        \$this->assertTrue(trait_exists(ExistingTraitReal::class));
        \$this->assertTrue(trait_exists(ExistingTraitReal::class, false));
        \$this->assertTrue(trait_exists('\\\\'.ExistingTraitReal::class));
        \$this->assertTrue(trait_exists('\\\\'.ExistingTraitReal::class, false));
        \$this->assertFalse(trait_exists('NonExistingClassReal'));
        \$this->assertFalse(trait_exists('NonExistingClassReal', false));
        \$this->assertFalse(trait_exists('\\\\NonExistingTraitReal'));
        \$this->assertFalse(trait_exists('\\\\NonExistingTraitReal', false));
    }
}

class ExistingClass
{
}

class ExistingClassReal
{
}

interface ExistingInterface
{
}

interface ExistingInterfaceReal
{
}

trait ExistingTrait
{
}

trait ExistingTraitReal
{
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/Tests/ClassExistsMockTest.php";
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

namespace Symfony\\Bridge\\PhpUnit\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\PhpUnit\\ClassExistsMock;

class ClassExistsMockTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        ClassExistsMock::register(__CLASS__);
    }

    protected function setUp(): void
    {
        ClassExistsMock::withMockedClasses([
            ExistingClass::class => false,
            'NonExistingClass' => true,
            ExistingInterface::class => false,
            'NonExistingInterface' => true,
            ExistingTrait::class => false,
            'NonExistingTrait' => true,
        ]);
    }

    public function testClassExists()
    {
        \$this->assertFalse(class_exists(ExistingClass::class));
        \$this->assertFalse(class_exists(ExistingClass::class, false));
        \$this->assertFalse(class_exists('\\\\'.ExistingClass::class));
        \$this->assertFalse(class_exists('\\\\'.ExistingClass::class, false));
        \$this->assertTrue(class_exists('NonExistingClass'));
        \$this->assertTrue(class_exists('NonExistingClass', false));
        \$this->assertTrue(class_exists('\\\\NonExistingClass'));
        \$this->assertTrue(class_exists('\\\\NonExistingClass', false));
        \$this->assertTrue(class_exists(ExistingClassReal::class));
        \$this->assertTrue(class_exists(ExistingClassReal::class, false));
        \$this->assertTrue(class_exists('\\\\'.ExistingClassReal::class));
        \$this->assertTrue(class_exists('\\\\'.ExistingClassReal::class, false));
        \$this->assertFalse(class_exists('NonExistingClassReal'));
        \$this->assertFalse(class_exists('NonExistingClassReal', false));
        \$this->assertFalse(class_exists('\\\\NonExistingClassReal'));
        \$this->assertFalse(class_exists('\\\\NonExistingClassReal', false));
    }

    public function testInterfaceExists()
    {
        \$this->assertFalse(interface_exists(ExistingInterface::class));
        \$this->assertFalse(interface_exists(ExistingInterface::class, false));
        \$this->assertFalse(interface_exists('\\\\'.ExistingInterface::class));
        \$this->assertFalse(interface_exists('\\\\'.ExistingInterface::class, false));
        \$this->assertTrue(interface_exists('NonExistingInterface'));
        \$this->assertTrue(interface_exists('NonExistingInterface', false));
        \$this->assertTrue(interface_exists('\\\\NonExistingInterface'));
        \$this->assertTrue(interface_exists('\\\\NonExistingInterface', false));
        \$this->assertTrue(interface_exists(ExistingInterfaceReal::class));
        \$this->assertTrue(interface_exists(ExistingInterfaceReal::class, false));
        \$this->assertTrue(interface_exists('\\\\'.ExistingInterfaceReal::class));
        \$this->assertTrue(interface_exists('\\\\'.ExistingInterfaceReal::class, false));
        \$this->assertFalse(interface_exists('NonExistingClassReal'));
        \$this->assertFalse(interface_exists('NonExistingClassReal', false));
        \$this->assertFalse(interface_exists('\\\\NonExistingInterfaceReal'));
        \$this->assertFalse(interface_exists('\\\\NonExistingInterfaceReal', false));
    }

    public function testTraitExists()
    {
        \$this->assertFalse(trait_exists(ExistingTrait::class));
        \$this->assertFalse(trait_exists(ExistingTrait::class, false));
        \$this->assertFalse(trait_exists('\\\\'.ExistingTrait::class));
        \$this->assertFalse(trait_exists('\\\\'.ExistingTrait::class, false));
        \$this->assertTrue(trait_exists('NonExistingTrait'));
        \$this->assertTrue(trait_exists('NonExistingTrait', false));
        \$this->assertTrue(trait_exists('\\\\NonExistingTrait'));
        \$this->assertTrue(trait_exists('\\\\NonExistingTrait', false));
        \$this->assertTrue(trait_exists(ExistingTraitReal::class));
        \$this->assertTrue(trait_exists(ExistingTraitReal::class, false));
        \$this->assertTrue(trait_exists('\\\\'.ExistingTraitReal::class));
        \$this->assertTrue(trait_exists('\\\\'.ExistingTraitReal::class, false));
        \$this->assertFalse(trait_exists('NonExistingClassReal'));
        \$this->assertFalse(trait_exists('NonExistingClassReal', false));
        \$this->assertFalse(trait_exists('\\\\NonExistingTraitReal'));
        \$this->assertFalse(trait_exists('\\\\NonExistingTraitReal', false));
    }
}

class ExistingClass
{
}

class ExistingClassReal
{
}

interface ExistingInterface
{
}

interface ExistingInterfaceReal
{
}

trait ExistingTrait
{
}

trait ExistingTraitReal
{
}
", "vendor/symfony/phpunit-bridge/Tests/ClassExistsMockTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/Tests/ClassExistsMockTest.php");
    }
}
