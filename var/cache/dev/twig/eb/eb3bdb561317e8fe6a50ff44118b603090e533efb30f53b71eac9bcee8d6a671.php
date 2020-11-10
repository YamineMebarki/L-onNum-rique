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

/* vendor/symfony/cache/Tests/Adapter/MaxIdLengthAdapterTest.php */
class __TwigTemplate_fb7c9b7e88a9b50bf0a10447099003080e568e34b473a8894d36ba1b433de30e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/MaxIdLengthAdapterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/MaxIdLengthAdapterTest.php"));

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

namespace Symfony\\Component\\Cache\\Tests\\Adapter;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Cache\\Adapter\\AbstractAdapter;

class MaxIdLengthAdapterTest extends TestCase
{
    public function testLongKey()
    {
        \$cache = \$this->getMockBuilder(MaxIdLengthAdapter::class)
            ->setConstructorArgs([str_repeat('-', 10)])
            ->setMethods(['doHave', 'doFetch', 'doDelete', 'doSave', 'doClear'])
            ->getMock();

        \$cache->expects(\$this->exactly(2))
            ->method('doHave')
            ->withConsecutive(
                [\$this->equalTo('----------:nWfzGiCgLczv3SSUzXL3kg:')],
                [\$this->equalTo('----------:---------------------------------------')]
            );

        \$cache->hasItem(str_repeat('-', 40));
        \$cache->hasItem(str_repeat('-', 39));
    }

    public function testLongKeyVersioning()
    {
        \$cache = \$this->getMockBuilder(MaxIdLengthAdapter::class)
            ->setConstructorArgs([str_repeat('-', 26)])
            ->getMock();

        \$cache
            ->method('doFetch')
            ->willReturn(['2:']);

        \$reflectionClass = new \\ReflectionClass(AbstractAdapter::class);

        \$reflectionMethod = \$reflectionClass->getMethod('getId');
        \$reflectionMethod->setAccessible(true);

        // No versioning enabled
        \$this->assertEquals('--------------------------:------------', \$reflectionMethod->invokeArgs(\$cache, [str_repeat('-', 12)]));
        \$this->assertLessThanOrEqual(50, \\strlen(\$reflectionMethod->invokeArgs(\$cache, [str_repeat('-', 12)])));
        \$this->assertLessThanOrEqual(50, \\strlen(\$reflectionMethod->invokeArgs(\$cache, [str_repeat('-', 23)])));
        \$this->assertLessThanOrEqual(50, \\strlen(\$reflectionMethod->invokeArgs(\$cache, [str_repeat('-', 40)])));

        \$reflectionProperty = \$reflectionClass->getProperty('versioningIsEnabled');
        \$reflectionProperty->setAccessible(true);
        \$reflectionProperty->setValue(\$cache, true);

        // Versioning enabled
        \$this->assertEquals('--------------------------:2:------------', \$reflectionMethod->invokeArgs(\$cache, [str_repeat('-', 12)]));
        \$this->assertLessThanOrEqual(50, \\strlen(\$reflectionMethod->invokeArgs(\$cache, [str_repeat('-', 12)])));
        \$this->assertLessThanOrEqual(50, \\strlen(\$reflectionMethod->invokeArgs(\$cache, [str_repeat('-', 23)])));
        \$this->assertLessThanOrEqual(50, \\strlen(\$reflectionMethod->invokeArgs(\$cache, [str_repeat('-', 40)])));
    }

    public function testTooLongNamespace()
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Namespace must be 26 chars max, 40 given (\"----------------------------------------\")');
        \$cache = \$this->getMockBuilder(MaxIdLengthAdapter::class)
            ->setConstructorArgs([str_repeat('-', 40)])
            ->getMock();
    }
}

abstract class MaxIdLengthAdapter extends AbstractAdapter
{
    protected \$maxIdLength = 50;

    public function __construct(\$ns)
    {
        parent::__construct(\$ns);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Adapter/MaxIdLengthAdapterTest.php";
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

namespace Symfony\\Component\\Cache\\Tests\\Adapter;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Cache\\Adapter\\AbstractAdapter;

class MaxIdLengthAdapterTest extends TestCase
{
    public function testLongKey()
    {
        \$cache = \$this->getMockBuilder(MaxIdLengthAdapter::class)
            ->setConstructorArgs([str_repeat('-', 10)])
            ->setMethods(['doHave', 'doFetch', 'doDelete', 'doSave', 'doClear'])
            ->getMock();

        \$cache->expects(\$this->exactly(2))
            ->method('doHave')
            ->withConsecutive(
                [\$this->equalTo('----------:nWfzGiCgLczv3SSUzXL3kg:')],
                [\$this->equalTo('----------:---------------------------------------')]
            );

        \$cache->hasItem(str_repeat('-', 40));
        \$cache->hasItem(str_repeat('-', 39));
    }

    public function testLongKeyVersioning()
    {
        \$cache = \$this->getMockBuilder(MaxIdLengthAdapter::class)
            ->setConstructorArgs([str_repeat('-', 26)])
            ->getMock();

        \$cache
            ->method('doFetch')
            ->willReturn(['2:']);

        \$reflectionClass = new \\ReflectionClass(AbstractAdapter::class);

        \$reflectionMethod = \$reflectionClass->getMethod('getId');
        \$reflectionMethod->setAccessible(true);

        // No versioning enabled
        \$this->assertEquals('--------------------------:------------', \$reflectionMethod->invokeArgs(\$cache, [str_repeat('-', 12)]));
        \$this->assertLessThanOrEqual(50, \\strlen(\$reflectionMethod->invokeArgs(\$cache, [str_repeat('-', 12)])));
        \$this->assertLessThanOrEqual(50, \\strlen(\$reflectionMethod->invokeArgs(\$cache, [str_repeat('-', 23)])));
        \$this->assertLessThanOrEqual(50, \\strlen(\$reflectionMethod->invokeArgs(\$cache, [str_repeat('-', 40)])));

        \$reflectionProperty = \$reflectionClass->getProperty('versioningIsEnabled');
        \$reflectionProperty->setAccessible(true);
        \$reflectionProperty->setValue(\$cache, true);

        // Versioning enabled
        \$this->assertEquals('--------------------------:2:------------', \$reflectionMethod->invokeArgs(\$cache, [str_repeat('-', 12)]));
        \$this->assertLessThanOrEqual(50, \\strlen(\$reflectionMethod->invokeArgs(\$cache, [str_repeat('-', 12)])));
        \$this->assertLessThanOrEqual(50, \\strlen(\$reflectionMethod->invokeArgs(\$cache, [str_repeat('-', 23)])));
        \$this->assertLessThanOrEqual(50, \\strlen(\$reflectionMethod->invokeArgs(\$cache, [str_repeat('-', 40)])));
    }

    public function testTooLongNamespace()
    {
        \$this->expectException('Symfony\\Component\\Cache\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Namespace must be 26 chars max, 40 given (\"----------------------------------------\")');
        \$cache = \$this->getMockBuilder(MaxIdLengthAdapter::class)
            ->setConstructorArgs([str_repeat('-', 40)])
            ->getMock();
    }
}

abstract class MaxIdLengthAdapter extends AbstractAdapter
{
    protected \$maxIdLength = 50;

    public function __construct(\$ns)
    {
        parent::__construct(\$ns);
    }
}
", "vendor/symfony/cache/Tests/Adapter/MaxIdLengthAdapterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Adapter/MaxIdLengthAdapterTest.php");
    }
}
