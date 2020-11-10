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

/* vendor/symfony/config/Tests/FileLocatorTest.php */
class __TwigTemplate_1814a0482ff8a173f0c56c1ee2a4808a40ee9d8fa26b79e53f6c5780c984dc21 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/FileLocatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/FileLocatorTest.php"));

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

namespace Symfony\\Component\\Config\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\FileLocator;

class FileLocatorTest extends TestCase
{
    /**
     * @dataProvider getIsAbsolutePathTests
     */
    public function testIsAbsolutePath(\$path)
    {
        \$loader = new FileLocator([]);
        \$r = new \\ReflectionObject(\$loader);
        \$m = \$r->getMethod('isAbsolutePath');
        \$m->setAccessible(true);

        \$this->assertTrue(\$m->invoke(\$loader, \$path), '->isAbsolutePath() returns true for an absolute path');
    }

    public function getIsAbsolutePathTests()
    {
        return [
            ['/foo.xml'],
            ['c:\\\\\\\\foo.xml'],
            ['c:/foo.xml'],
            ['\\\\server\\\\foo.xml'],
            ['https://server/foo.xml'],
            ['phar://server/foo.xml'],
        ];
    }

    public function testLocate()
    {
        \$loader = new FileLocator(__DIR__.'/Fixtures');

        \$this->assertEquals(
            __DIR__.\\DIRECTORY_SEPARATOR.'FileLocatorTest.php',
            \$loader->locate('FileLocatorTest.php', __DIR__),
            '->locate() returns the absolute filename if the file exists in the given path'
        );

        \$this->assertEquals(
            __DIR__.'/Fixtures'.\\DIRECTORY_SEPARATOR.'foo.xml',
            \$loader->locate('foo.xml', __DIR__),
            '->locate() returns the absolute filename if the file exists in one of the paths given in the constructor'
        );

        \$this->assertEquals(
            __DIR__.'/Fixtures'.\\DIRECTORY_SEPARATOR.'foo.xml',
            \$loader->locate(__DIR__.'/Fixtures'.\\DIRECTORY_SEPARATOR.'foo.xml', __DIR__),
            '->locate() returns the absolute filename if the file exists in one of the paths given in the constructor'
        );

        \$loader = new FileLocator([__DIR__.'/Fixtures', __DIR__.'/Fixtures/Again']);

        \$this->assertEquals(
            [__DIR__.'/Fixtures'.\\DIRECTORY_SEPARATOR.'foo.xml', __DIR__.'/Fixtures/Again'.\\DIRECTORY_SEPARATOR.'foo.xml'],
            \$loader->locate('foo.xml', __DIR__, false),
            '->locate() returns an array of absolute filenames'
        );

        \$this->assertEquals(
            [__DIR__.'/Fixtures'.\\DIRECTORY_SEPARATOR.'foo.xml', __DIR__.'/Fixtures/Again'.\\DIRECTORY_SEPARATOR.'foo.xml'],
            \$loader->locate('foo.xml', __DIR__.'/Fixtures', false),
            '->locate() returns an array of absolute filenames'
        );

        \$loader = new FileLocator(__DIR__.'/Fixtures/Again');

        \$this->assertEquals(
            [__DIR__.'/Fixtures'.\\DIRECTORY_SEPARATOR.'foo.xml', __DIR__.'/Fixtures/Again'.\\DIRECTORY_SEPARATOR.'foo.xml'],
            \$loader->locate('foo.xml', __DIR__.'/Fixtures', false),
            '->locate() returns an array of absolute filenames'
        );
    }

    public function testLocateThrowsAnExceptionIfTheFileDoesNotExists()
    {
        \$this->expectException('Symfony\\Component\\Config\\Exception\\FileLocatorFileNotFoundException');
        \$this->expectExceptionMessage('The file \"foobar.xml\" does not exist');
        \$loader = new FileLocator([__DIR__.'/Fixtures']);

        \$loader->locate('foobar.xml', __DIR__);
    }

    public function testLocateThrowsAnExceptionIfTheFileDoesNotExistsInAbsolutePath()
    {
        \$this->expectException('Symfony\\Component\\Config\\Exception\\FileLocatorFileNotFoundException');
        \$loader = new FileLocator([__DIR__.'/Fixtures']);

        \$loader->locate(__DIR__.'/Fixtures/foobar.xml', __DIR__);
    }

    public function testLocateEmpty()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('An empty file name is not valid to be located.');
        \$loader = new FileLocator([__DIR__.'/Fixtures']);

        \$loader->locate(null, __DIR__);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/FileLocatorTest.php";
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

namespace Symfony\\Component\\Config\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\FileLocator;

class FileLocatorTest extends TestCase
{
    /**
     * @dataProvider getIsAbsolutePathTests
     */
    public function testIsAbsolutePath(\$path)
    {
        \$loader = new FileLocator([]);
        \$r = new \\ReflectionObject(\$loader);
        \$m = \$r->getMethod('isAbsolutePath');
        \$m->setAccessible(true);

        \$this->assertTrue(\$m->invoke(\$loader, \$path), '->isAbsolutePath() returns true for an absolute path');
    }

    public function getIsAbsolutePathTests()
    {
        return [
            ['/foo.xml'],
            ['c:\\\\\\\\foo.xml'],
            ['c:/foo.xml'],
            ['\\\\server\\\\foo.xml'],
            ['https://server/foo.xml'],
            ['phar://server/foo.xml'],
        ];
    }

    public function testLocate()
    {
        \$loader = new FileLocator(__DIR__.'/Fixtures');

        \$this->assertEquals(
            __DIR__.\\DIRECTORY_SEPARATOR.'FileLocatorTest.php',
            \$loader->locate('FileLocatorTest.php', __DIR__),
            '->locate() returns the absolute filename if the file exists in the given path'
        );

        \$this->assertEquals(
            __DIR__.'/Fixtures'.\\DIRECTORY_SEPARATOR.'foo.xml',
            \$loader->locate('foo.xml', __DIR__),
            '->locate() returns the absolute filename if the file exists in one of the paths given in the constructor'
        );

        \$this->assertEquals(
            __DIR__.'/Fixtures'.\\DIRECTORY_SEPARATOR.'foo.xml',
            \$loader->locate(__DIR__.'/Fixtures'.\\DIRECTORY_SEPARATOR.'foo.xml', __DIR__),
            '->locate() returns the absolute filename if the file exists in one of the paths given in the constructor'
        );

        \$loader = new FileLocator([__DIR__.'/Fixtures', __DIR__.'/Fixtures/Again']);

        \$this->assertEquals(
            [__DIR__.'/Fixtures'.\\DIRECTORY_SEPARATOR.'foo.xml', __DIR__.'/Fixtures/Again'.\\DIRECTORY_SEPARATOR.'foo.xml'],
            \$loader->locate('foo.xml', __DIR__, false),
            '->locate() returns an array of absolute filenames'
        );

        \$this->assertEquals(
            [__DIR__.'/Fixtures'.\\DIRECTORY_SEPARATOR.'foo.xml', __DIR__.'/Fixtures/Again'.\\DIRECTORY_SEPARATOR.'foo.xml'],
            \$loader->locate('foo.xml', __DIR__.'/Fixtures', false),
            '->locate() returns an array of absolute filenames'
        );

        \$loader = new FileLocator(__DIR__.'/Fixtures/Again');

        \$this->assertEquals(
            [__DIR__.'/Fixtures'.\\DIRECTORY_SEPARATOR.'foo.xml', __DIR__.'/Fixtures/Again'.\\DIRECTORY_SEPARATOR.'foo.xml'],
            \$loader->locate('foo.xml', __DIR__.'/Fixtures', false),
            '->locate() returns an array of absolute filenames'
        );
    }

    public function testLocateThrowsAnExceptionIfTheFileDoesNotExists()
    {
        \$this->expectException('Symfony\\Component\\Config\\Exception\\FileLocatorFileNotFoundException');
        \$this->expectExceptionMessage('The file \"foobar.xml\" does not exist');
        \$loader = new FileLocator([__DIR__.'/Fixtures']);

        \$loader->locate('foobar.xml', __DIR__);
    }

    public function testLocateThrowsAnExceptionIfTheFileDoesNotExistsInAbsolutePath()
    {
        \$this->expectException('Symfony\\Component\\Config\\Exception\\FileLocatorFileNotFoundException');
        \$loader = new FileLocator([__DIR__.'/Fixtures']);

        \$loader->locate(__DIR__.'/Fixtures/foobar.xml', __DIR__);
    }

    public function testLocateEmpty()
    {
        \$this->expectException('InvalidArgumentException');
        \$this->expectExceptionMessage('An empty file name is not valid to be located.');
        \$loader = new FileLocator([__DIR__.'/Fixtures']);

        \$loader->locate(null, __DIR__);
    }
}
", "vendor/symfony/config/Tests/FileLocatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/FileLocatorTest.php");
    }
}
