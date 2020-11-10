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

/* vendor/symfony/http-foundation/Tests/Session/Storage/Handler/NativeFileSessionHandlerTest.php */
class __TwigTemplate_10d01d39a7580c1a0d1278f9c4cecd51845f46c4e15d3e2cb1f1f03693c72de8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/NativeFileSessionHandlerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/NativeFileSessionHandlerTest.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Session\\Storage\\Handler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage;

/**
 * DevLaon class for NativeFileSessionHandler.
 *
 * @author Drak <drak@zikula.org>
 *
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
class NativeFileSessionHandlerTest extends TestCase
{
    public function testConstruct()
    {
        \$storage = new NativeSessionStorage(['name' => 'TESTING'], new NativeFileSessionHandler(sys_get_temp_dir()));

        \$this->assertEquals('user', ini_get('session.save_handler'));

        \$this->assertEquals(sys_get_temp_dir(), ini_get('session.save_path'));
        \$this->assertEquals('TESTING', ini_get('session.name'));
    }

    /**
     * @dataProvider savePathDataProvider
     */
    public function testConstructSavePath(\$savePath, \$expectedSavePath, \$path)
    {
        \$handler = new NativeFileSessionHandler(\$savePath);
        \$this->assertEquals(\$expectedSavePath, ini_get('session.save_path'));
        \$this->assertDirectoryExists(realpath(\$path));

        rmdir(\$path);
    }

    public function savePathDataProvider()
    {
        \$base = sys_get_temp_dir();

        return [
            [\"\$base/foo\", \"\$base/foo\", \"\$base/foo\"],
            [\"5;\$base/foo\", \"5;\$base/foo\", \"\$base/foo\"],
            [\"5;0600;\$base/foo\", \"5;0600;\$base/foo\", \"\$base/foo\"],
        ];
    }

    public function testConstructException()
    {
        \$this->expectException('InvalidArgumentException');
        \$handler = new NativeFileSessionHandler('something;invalid;with;too-many-args');
    }

    public function testConstructDefault()
    {
        \$path = ini_get('session.save_path');
        \$storage = new NativeSessionStorage(['name' => 'TESTING'], new NativeFileSessionHandler());

        \$this->assertEquals(\$path, ini_get('session.save_path'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/NativeFileSessionHandlerTest.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests\\Session\\Storage\\Handler;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler;
use Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage;

/**
 * DevLaon class for NativeFileSessionHandler.
 *
 * @author Drak <drak@zikula.org>
 *
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
class NativeFileSessionHandlerTest extends TestCase
{
    public function testConstruct()
    {
        \$storage = new NativeSessionStorage(['name' => 'TESTING'], new NativeFileSessionHandler(sys_get_temp_dir()));

        \$this->assertEquals('user', ini_get('session.save_handler'));

        \$this->assertEquals(sys_get_temp_dir(), ini_get('session.save_path'));
        \$this->assertEquals('TESTING', ini_get('session.name'));
    }

    /**
     * @dataProvider savePathDataProvider
     */
    public function testConstructSavePath(\$savePath, \$expectedSavePath, \$path)
    {
        \$handler = new NativeFileSessionHandler(\$savePath);
        \$this->assertEquals(\$expectedSavePath, ini_get('session.save_path'));
        \$this->assertDirectoryExists(realpath(\$path));

        rmdir(\$path);
    }

    public function savePathDataProvider()
    {
        \$base = sys_get_temp_dir();

        return [
            [\"\$base/foo\", \"\$base/foo\", \"\$base/foo\"],
            [\"5;\$base/foo\", \"5;\$base/foo\", \"\$base/foo\"],
            [\"5;0600;\$base/foo\", \"5;0600;\$base/foo\", \"\$base/foo\"],
        ];
    }

    public function testConstructException()
    {
        \$this->expectException('InvalidArgumentException');
        \$handler = new NativeFileSessionHandler('something;invalid;with;too-many-args');
    }

    public function testConstructDefault()
    {
        \$path = ini_get('session.save_path');
        \$storage = new NativeSessionStorage(['name' => 'TESTING'], new NativeFileSessionHandler());

        \$this->assertEquals(\$path, ini_get('session.save_path'));
    }
}
", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/NativeFileSessionHandlerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Session/Storage/Handler/NativeFileSessionHandlerTest.php");
    }
}
