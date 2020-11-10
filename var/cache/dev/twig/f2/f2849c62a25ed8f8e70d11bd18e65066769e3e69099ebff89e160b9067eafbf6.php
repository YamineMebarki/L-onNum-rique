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

/* vendor/symfony/process/Tests/ExecutableFinderTest.php */
class __TwigTemplate_3b87b8cd5d9c678b67e8cbed7eb36e8db77fea670d4bd1433da861ef6d6926f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Tests/ExecutableFinderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Tests/ExecutableFinderTest.php"));

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

namespace Symfony\\Component\\Process\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Process\\ExecutableFinder;

/**
 * @author Chris Smith <chris@cs278.org>
 */
class ExecutableFinderTest extends TestCase
{
    private \$path;

    protected function tearDown(): void
    {
        if (\$this->path) {
            // Restore path if it was changed.
            putenv('PATH='.\$this->path);
        }
    }

    private function setPath(\$path)
    {
        \$this->path = getenv('PATH');
        putenv('PATH='.\$path);
    }

    public function testFind()
    {
        if (ini_get('open_basedir')) {
            \$this->markTestSkipped('Cannot test when open_basedir is set');
        }

        \$this->setPath(\\dirname(PHP_BINARY));

        \$finder = new ExecutableFinder();
        \$result = \$finder->find(\$this->getPhpBinaryName());

        \$this->assertSamePath(PHP_BINARY, \$result);
    }

    public function testFindWithDefault()
    {
        if (ini_get('open_basedir')) {
            \$this->markTestSkipped('Cannot test when open_basedir is set');
        }

        \$expected = 'defaultValue';

        \$this->setPath('');

        \$finder = new ExecutableFinder();
        \$result = \$finder->find('foo', \$expected);

        \$this->assertEquals(\$expected, \$result);
    }

    public function testFindWithNullAsDefault()
    {
        if (ini_get('open_basedir')) {
            \$this->markTestSkipped('Cannot test when open_basedir is set');
        }

        \$this->setPath('');

        \$finder = new ExecutableFinder();

        \$result = \$finder->find('foo');

        \$this->assertNull(\$result);
    }

    public function testFindWithExtraDirs()
    {
        if (ini_get('open_basedir')) {
            \$this->markTestSkipped('Cannot test when open_basedir is set');
        }

        \$this->setPath('');

        \$extraDirs = [\\dirname(PHP_BINARY)];

        \$finder = new ExecutableFinder();
        \$result = \$finder->find(\$this->getPhpBinaryName(), null, \$extraDirs);

        \$this->assertSamePath(PHP_BINARY, \$result);
    }

    public function testFindWithOpenBaseDir()
    {
        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            \$this->markTestSkipped('Cannot run test on windows');
        }

        if (ini_get('open_basedir')) {
            \$this->markTestSkipped('Cannot test when open_basedir is set');
        }

        \$this->iniSet('open_basedir', \\dirname(PHP_BINARY).PATH_SEPARATOR.'/');

        \$finder = new ExecutableFinder();
        \$result = \$finder->find(\$this->getPhpBinaryName());

        \$this->assertSamePath(PHP_BINARY, \$result);
    }

    public function testFindProcessInOpenBasedir()
    {
        if (ini_get('open_basedir')) {
            \$this->markTestSkipped('Cannot test when open_basedir is set');
        }
        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            \$this->markTestSkipped('Cannot run test on windows');
        }

        \$this->setPath('');
        \$this->iniSet('open_basedir', PHP_BINARY.PATH_SEPARATOR.'/');

        \$finder = new ExecutableFinder();
        \$result = \$finder->find(\$this->getPhpBinaryName(), false);

        \$this->assertSamePath(PHP_BINARY, \$result);
    }

    /**
     * @requires PHP 5.4
     */
    public function testFindBatchExecutableOnWindows()
    {
        if (ini_get('open_basedir')) {
            \$this->markTestSkipped('Cannot test when open_basedir is set');
        }
        if ('\\\\' !== \\DIRECTORY_SEPARATOR) {
            \$this->markTestSkipped('Can be only tested on windows');
        }

        \$target = tempnam(sys_get_temp_dir(), 'example-windows-executable');

        touch(\$target);
        touch(\$target.'.BAT');

        \$this->assertFalse(is_executable(\$target));

        \$this->setPath(sys_get_temp_dir());

        \$finder = new ExecutableFinder();
        \$result = \$finder->find(basename(\$target), false);

        unlink(\$target);
        unlink(\$target.'.BAT');

        \$this->assertSamePath(\$target.'.BAT', \$result);
    }

    private function assertSamePath(\$expected, \$tested)
    {
        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            \$this->assertEquals(strtolower(\$expected), strtolower(\$tested));
        } else {
            \$this->assertEquals(\$expected, \$tested);
        }
    }

    private function getPhpBinaryName()
    {
        return basename(PHP_BINARY, '\\\\' === \\DIRECTORY_SEPARATOR ? '.exe' : '');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/process/Tests/ExecutableFinderTest.php";
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

namespace Symfony\\Component\\Process\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Process\\ExecutableFinder;

/**
 * @author Chris Smith <chris@cs278.org>
 */
class ExecutableFinderTest extends TestCase
{
    private \$path;

    protected function tearDown(): void
    {
        if (\$this->path) {
            // Restore path if it was changed.
            putenv('PATH='.\$this->path);
        }
    }

    private function setPath(\$path)
    {
        \$this->path = getenv('PATH');
        putenv('PATH='.\$path);
    }

    public function testFind()
    {
        if (ini_get('open_basedir')) {
            \$this->markTestSkipped('Cannot test when open_basedir is set');
        }

        \$this->setPath(\\dirname(PHP_BINARY));

        \$finder = new ExecutableFinder();
        \$result = \$finder->find(\$this->getPhpBinaryName());

        \$this->assertSamePath(PHP_BINARY, \$result);
    }

    public function testFindWithDefault()
    {
        if (ini_get('open_basedir')) {
            \$this->markTestSkipped('Cannot test when open_basedir is set');
        }

        \$expected = 'defaultValue';

        \$this->setPath('');

        \$finder = new ExecutableFinder();
        \$result = \$finder->find('foo', \$expected);

        \$this->assertEquals(\$expected, \$result);
    }

    public function testFindWithNullAsDefault()
    {
        if (ini_get('open_basedir')) {
            \$this->markTestSkipped('Cannot test when open_basedir is set');
        }

        \$this->setPath('');

        \$finder = new ExecutableFinder();

        \$result = \$finder->find('foo');

        \$this->assertNull(\$result);
    }

    public function testFindWithExtraDirs()
    {
        if (ini_get('open_basedir')) {
            \$this->markTestSkipped('Cannot test when open_basedir is set');
        }

        \$this->setPath('');

        \$extraDirs = [\\dirname(PHP_BINARY)];

        \$finder = new ExecutableFinder();
        \$result = \$finder->find(\$this->getPhpBinaryName(), null, \$extraDirs);

        \$this->assertSamePath(PHP_BINARY, \$result);
    }

    public function testFindWithOpenBaseDir()
    {
        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            \$this->markTestSkipped('Cannot run test on windows');
        }

        if (ini_get('open_basedir')) {
            \$this->markTestSkipped('Cannot test when open_basedir is set');
        }

        \$this->iniSet('open_basedir', \\dirname(PHP_BINARY).PATH_SEPARATOR.'/');

        \$finder = new ExecutableFinder();
        \$result = \$finder->find(\$this->getPhpBinaryName());

        \$this->assertSamePath(PHP_BINARY, \$result);
    }

    public function testFindProcessInOpenBasedir()
    {
        if (ini_get('open_basedir')) {
            \$this->markTestSkipped('Cannot test when open_basedir is set');
        }
        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            \$this->markTestSkipped('Cannot run test on windows');
        }

        \$this->setPath('');
        \$this->iniSet('open_basedir', PHP_BINARY.PATH_SEPARATOR.'/');

        \$finder = new ExecutableFinder();
        \$result = \$finder->find(\$this->getPhpBinaryName(), false);

        \$this->assertSamePath(PHP_BINARY, \$result);
    }

    /**
     * @requires PHP 5.4
     */
    public function testFindBatchExecutableOnWindows()
    {
        if (ini_get('open_basedir')) {
            \$this->markTestSkipped('Cannot test when open_basedir is set');
        }
        if ('\\\\' !== \\DIRECTORY_SEPARATOR) {
            \$this->markTestSkipped('Can be only tested on windows');
        }

        \$target = tempnam(sys_get_temp_dir(), 'example-windows-executable');

        touch(\$target);
        touch(\$target.'.BAT');

        \$this->assertFalse(is_executable(\$target));

        \$this->setPath(sys_get_temp_dir());

        \$finder = new ExecutableFinder();
        \$result = \$finder->find(basename(\$target), false);

        unlink(\$target);
        unlink(\$target.'.BAT');

        \$this->assertSamePath(\$target.'.BAT', \$result);
    }

    private function assertSamePath(\$expected, \$tested)
    {
        if ('\\\\' === \\DIRECTORY_SEPARATOR) {
            \$this->assertEquals(strtolower(\$expected), strtolower(\$tested));
        } else {
            \$this->assertEquals(\$expected, \$tested);
        }
    }

    private function getPhpBinaryName()
    {
        return basename(PHP_BINARY, '\\\\' === \\DIRECTORY_SEPARATOR ? '.exe' : '');
    }
}
", "vendor/symfony/process/Tests/ExecutableFinderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/process/Tests/ExecutableFinderTest.php");
    }
}
