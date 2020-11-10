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

/* vendor/symfony/http-foundation/Tests/ResponseFunctionalTest.php */
class __TwigTemplate_df868078eae083e0f79cd1c773f512a7fa870cec5054abf71315a19ec003303b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/ResponseFunctionalTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/ResponseFunctionalTest.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Tests;

use PHPUnit\\Framework\\TestCase;

/**
 * @requires PHP 7.0
 */
class ResponseFunctionalTest extends TestCase
{
    private static \$server;

    public static function setUpBeforeClass(): void
    {
        \$spec = [
            1 => ['file', '/dev/null', 'w'],
            2 => ['file', '/dev/null', 'w'],
        ];
        if (!self::\$server = @proc_open('exec php -S localhost:8054', \$spec, \$pipes, __DIR__.'/Fixtures/response-functional')) {
            self::markTestSkipped('PHP server unable to start.');
        }
        sleep(1);
    }

    public static function tearDownAfterClass(): void
    {
        if (self::\$server) {
            proc_terminate(self::\$server);
            proc_close(self::\$server);
        }
    }

    /**
     * @dataProvider provideCookie
     */
    public function testCookie(\$fixture)
    {
        \$result = file_get_contents(sprintf('http://localhost:8054/%s.php', \$fixture));
        \$this->assertStringMatchesFormatFile(__DIR__.sprintf('/Fixtures/response-functional/%s.expected', \$fixture), \$result);
    }

    public function provideCookie()
    {
        foreach (glob(__DIR__.'/Fixtures/response-functional/*.php') as \$file) {
            yield [pathinfo(\$file, PATHINFO_FILENAME)];
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/ResponseFunctionalTest.php";
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

namespace Symfony\\Component\\HttpFoundation\\Tests;

use PHPUnit\\Framework\\TestCase;

/**
 * @requires PHP 7.0
 */
class ResponseFunctionalTest extends TestCase
{
    private static \$server;

    public static function setUpBeforeClass(): void
    {
        \$spec = [
            1 => ['file', '/dev/null', 'w'],
            2 => ['file', '/dev/null', 'w'],
        ];
        if (!self::\$server = @proc_open('exec php -S localhost:8054', \$spec, \$pipes, __DIR__.'/Fixtures/response-functional')) {
            self::markTestSkipped('PHP server unable to start.');
        }
        sleep(1);
    }

    public static function tearDownAfterClass(): void
    {
        if (self::\$server) {
            proc_terminate(self::\$server);
            proc_close(self::\$server);
        }
    }

    /**
     * @dataProvider provideCookie
     */
    public function testCookie(\$fixture)
    {
        \$result = file_get_contents(sprintf('http://localhost:8054/%s.php', \$fixture));
        \$this->assertStringMatchesFormatFile(__DIR__.sprintf('/Fixtures/response-functional/%s.expected', \$fixture), \$result);
    }

    public function provideCookie()
    {
        foreach (glob(__DIR__.'/Fixtures/response-functional/*.php') as \$file) {
            yield [pathinfo(\$file, PATHINFO_FILENAME)];
        }
    }
}
", "vendor/symfony/http-foundation/Tests/ResponseFunctionalTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/ResponseFunctionalTest.php");
    }
}
