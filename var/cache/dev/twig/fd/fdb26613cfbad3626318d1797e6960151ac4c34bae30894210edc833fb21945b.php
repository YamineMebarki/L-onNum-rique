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

/* vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/DeprecationTest.php */
class __TwigTemplate_76cb8572922c8df0337e9993f9319179d90a7e78dba21f4c9ae6046030d28b11 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/DeprecationTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/DeprecationTest.php"));

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

namespace Symfony\\Bridge\\PhpUnit\\Tests\\DeprecationErrorHandler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\PhpUnit\\DeprecationErrorHandler;
use Symfony\\Bridge\\PhpUnit\\DeprecationErrorHandler\\Deprecation;

class DeprecationTest extends TestCase
{
    public function testItCanDetermineTheClassWhereTheDeprecationHappened()
    {
        \$deprecation = new Deprecation('💩', \$this->debugBacktrace(), __FILE__);
        \$this->assertTrue(\$deprecation->originatesFromAnObject());
        \$this->assertSame(self::class, \$deprecation->originatingClass());
        \$this->assertSame(__FUNCTION__, \$deprecation->originatingMethod());
    }

    public function testItCanTellWhetherItIsInternal()
    {
        \$r = new \\ReflectionClass(Deprecation::class);

        if (\\dirname(\\dirname(\$r->getFileName())) !== \\dirname(\\dirname(__DIR__))) {
            \$this->markTestSkipped('DevLaon case is not compatible with having the bridge in vendor/');
        }

        \$deprecation = new Deprecation('💩', \$this->debugBacktrace(), __FILE__);
        \$this->assertSame(Deprecation::TYPE_SELF, \$deprecation->getType());
    }

    public function testLegacyTestMethodIsDetectedAsSuch()
    {
        \$deprecation = new Deprecation('💩', \$this->debugBacktrace(), __FILE__);
        \$this->assertTrue(\$deprecation->isLegacy('whatever'));
    }

    public function testItCanBeConvertedToAString()
    {
        \$deprecation = new Deprecation('💩', \$this->debugBacktrace(), __FILE__);
        \$this->assertStringContainsString('💩', \$deprecation->toString());
        \$this->assertStringContainsString(__FUNCTION__, \$deprecation->toString());
    }

    public function testItRulesOutFilesOutsideVendorsAsIndirect()
    {
        \$deprecation = new Deprecation('💩', \$this->debugBacktrace(), __FILE__);
        \$this->assertNotSame(Deprecation::TYPE_INDIRECT, \$deprecation->getType());
    }

    /**
     * @dataProvider mutedProvider
     */
    public function testItMutesOnlySpecificErrorMessagesWhenTheCallingCodeIsInPhpunit(\$muted, \$callingClass, \$message)
    {
        \$trace = \$this->debugBacktrace();
        array_unshift(\$trace, ['class' => \$callingClass]);
        array_unshift(\$trace, ['class' => DeprecationErrorHandler::class]);
        \$deprecation = new Deprecation(\$message, \$trace, 'should_not_matter.php');
        \$this->assertSame(\$muted, \$deprecation->isMuted());
    }

    public function mutedProvider()
    {
        yield 'not from phpunit, and not a whitelisted message' => [
            false,
            \\My\\Source\\Code::class,
            'Self deprecating humor is deprecated by itself'
        ];
        yield 'from phpunit, but not a whitelisted message' => [
            false,
            \\PHPUnit\\Random\\Piece\\Of\\Code::class,
            'Self deprecating humor is deprecated by itself'
        ];
        yield 'whitelisted message, but not from phpunit' => [
            false,
            \\My\\Source\\Code::class,
            'Function ReflectionType::__toString() is deprecated',
        ];
        yield 'from phpunit and whitelisted message' => [
            true,
            \\PHPUnit\\Random\\Piece\\Of\\Code::class,
            'Function ReflectionType::__toString() is deprecated',
        ];
    }

    public function testNotMutedIfNotCalledFromAClassButARandomFile()
    {
        \$deprecation = new Deprecation(
            'Function ReflectionType::__toString() is deprecated',
            [
                ['file' => 'should_not_matter.php'],
                ['file' => 'should_not_matter_either.php'],
            ],
            'my-procedural-controller.php'
        );
        \$this->assertFalse(\$deprecation->isMuted());
    }

    public function testItTakesMutesDeprecationFromPhpUnitFiles()
    {
        \$deprecation = new Deprecation(
            'Function ReflectionType::__toString() is deprecated',
            [
                ['file' => 'should_not_matter.php'],
                ['file' => 'should_not_matter_either.php'],
            ],
            'random_path' . \\DIRECTORY_SEPARATOR . 'vendor' . \\DIRECTORY_SEPARATOR . 'phpunit' . \\DIRECTORY_SEPARATOR . 'whatever.php'
        );
        \$this->assertTrue(\$deprecation->isMuted());
    }

    /**
     * This method is here to simulate the extra level from the piece of code
     * triggering an error to the error handler
     */
    public function debugBacktrace(): array
    {
        return debug_backtrace();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/DeprecationTest.php";
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

namespace Symfony\\Bridge\\PhpUnit\\Tests\\DeprecationErrorHandler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\PhpUnit\\DeprecationErrorHandler;
use Symfony\\Bridge\\PhpUnit\\DeprecationErrorHandler\\Deprecation;

class DeprecationTest extends TestCase
{
    public function testItCanDetermineTheClassWhereTheDeprecationHappened()
    {
        \$deprecation = new Deprecation('💩', \$this->debugBacktrace(), __FILE__);
        \$this->assertTrue(\$deprecation->originatesFromAnObject());
        \$this->assertSame(self::class, \$deprecation->originatingClass());
        \$this->assertSame(__FUNCTION__, \$deprecation->originatingMethod());
    }

    public function testItCanTellWhetherItIsInternal()
    {
        \$r = new \\ReflectionClass(Deprecation::class);

        if (\\dirname(\\dirname(\$r->getFileName())) !== \\dirname(\\dirname(__DIR__))) {
            \$this->markTestSkipped('DevLaon case is not compatible with having the bridge in vendor/');
        }

        \$deprecation = new Deprecation('💩', \$this->debugBacktrace(), __FILE__);
        \$this->assertSame(Deprecation::TYPE_SELF, \$deprecation->getType());
    }

    public function testLegacyTestMethodIsDetectedAsSuch()
    {
        \$deprecation = new Deprecation('💩', \$this->debugBacktrace(), __FILE__);
        \$this->assertTrue(\$deprecation->isLegacy('whatever'));
    }

    public function testItCanBeConvertedToAString()
    {
        \$deprecation = new Deprecation('💩', \$this->debugBacktrace(), __FILE__);
        \$this->assertStringContainsString('💩', \$deprecation->toString());
        \$this->assertStringContainsString(__FUNCTION__, \$deprecation->toString());
    }

    public function testItRulesOutFilesOutsideVendorsAsIndirect()
    {
        \$deprecation = new Deprecation('💩', \$this->debugBacktrace(), __FILE__);
        \$this->assertNotSame(Deprecation::TYPE_INDIRECT, \$deprecation->getType());
    }

    /**
     * @dataProvider mutedProvider
     */
    public function testItMutesOnlySpecificErrorMessagesWhenTheCallingCodeIsInPhpunit(\$muted, \$callingClass, \$message)
    {
        \$trace = \$this->debugBacktrace();
        array_unshift(\$trace, ['class' => \$callingClass]);
        array_unshift(\$trace, ['class' => DeprecationErrorHandler::class]);
        \$deprecation = new Deprecation(\$message, \$trace, 'should_not_matter.php');
        \$this->assertSame(\$muted, \$deprecation->isMuted());
    }

    public function mutedProvider()
    {
        yield 'not from phpunit, and not a whitelisted message' => [
            false,
            \\My\\Source\\Code::class,
            'Self deprecating humor is deprecated by itself'
        ];
        yield 'from phpunit, but not a whitelisted message' => [
            false,
            \\PHPUnit\\Random\\Piece\\Of\\Code::class,
            'Self deprecating humor is deprecated by itself'
        ];
        yield 'whitelisted message, but not from phpunit' => [
            false,
            \\My\\Source\\Code::class,
            'Function ReflectionType::__toString() is deprecated',
        ];
        yield 'from phpunit and whitelisted message' => [
            true,
            \\PHPUnit\\Random\\Piece\\Of\\Code::class,
            'Function ReflectionType::__toString() is deprecated',
        ];
    }

    public function testNotMutedIfNotCalledFromAClassButARandomFile()
    {
        \$deprecation = new Deprecation(
            'Function ReflectionType::__toString() is deprecated',
            [
                ['file' => 'should_not_matter.php'],
                ['file' => 'should_not_matter_either.php'],
            ],
            'my-procedural-controller.php'
        );
        \$this->assertFalse(\$deprecation->isMuted());
    }

    public function testItTakesMutesDeprecationFromPhpUnitFiles()
    {
        \$deprecation = new Deprecation(
            'Function ReflectionType::__toString() is deprecated',
            [
                ['file' => 'should_not_matter.php'],
                ['file' => 'should_not_matter_either.php'],
            ],
            'random_path' . \\DIRECTORY_SEPARATOR . 'vendor' . \\DIRECTORY_SEPARATOR . 'phpunit' . \\DIRECTORY_SEPARATOR . 'whatever.php'
        );
        \$this->assertTrue(\$deprecation->isMuted());
    }

    /**
     * This method is here to simulate the extra level from the piece of code
     * triggering an error to the error handler
     */
    public function debugBacktrace(): array
    {
        return debug_backtrace();
    }
}
", "vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/DeprecationTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/Tests/DeprecationErrorHandler/DeprecationTest.php");
    }
}
