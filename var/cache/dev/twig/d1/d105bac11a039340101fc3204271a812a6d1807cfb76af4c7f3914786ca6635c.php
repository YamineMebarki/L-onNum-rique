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

/* vendor/symfony/http-kernel/Tests/DataCollector/DumpDataCollectorTest.php */
class __TwigTemplate_3e3860c36eab0007ce276f3b8385cac483a0f8348cacb8c27603eec31adf0902 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DataCollector/DumpDataCollectorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/DataCollector/DumpDataCollectorTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\DataCollector;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\DumpDataCollector;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;
use Symfony\\Component\\VarDumper\\Server\\Connection;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DumpDataCollectorTest extends TestCase
{
    public function testDump()
    {
        \$data = new Data([[123]]);

        \$collector = new DumpDataCollector();

        \$this->assertSame('dump', \$collector->getName());

        \$collector->dump(\$data);
        \$line = __LINE__ - 1;
        \$this->assertSame(1, \$collector->getDumpsCount());

        \$dump = \$collector->getDumps('html');
        \$this->assertArrayHasKey('data', \$dump[0]);
        \$dump[0]['data'] = preg_replace('/^.*?<pre/', '<pre', \$dump[0]['data']);
        \$dump[0]['data'] = preg_replace('/sf-dump-\\d+/', 'sf-dump', \$dump[0]['data']);

        \$xDump = [
            [
                'data' => \"<pre class=sf-dump id=sf-dump data-indent-pad=\\\"  \\\"><span class=sf-dump-num>123</span>\\n</pre><script>Sfdump(\\\"sf-dump\\\")</script>\\n\",
                'name' => 'DumpDataCollectorTest.php',
                'file' => __FILE__,
                'line' => \$line,
                'fileExcerpt' => false,
            ],
        ];
        \$this->assertEquals(\$xDump, \$dump);

        \$this->assertStringMatchesFormat('%a;a:%d:{i:0;a:5:{s:4:\"data\";%c:39:\"Symfony\\Component\\VarDumper\\Cloner\\Data\":%a', serialize(\$collector));
        \$this->assertSame(0, \$collector->getDumpsCount());
        \$this->assertSame(\"O:60:\\\"Symfony\\Component\\HttpKernel\\DataCollector\\DumpDataCollector\\\":1:{s:7:\\\"\\0*\\0data\\\";a:2:{i:0;b:0;i:1;s:5:\\\"UTF-8\\\";}}\", serialize(\$collector));
    }

    public function testDumpWithServerConnection()
    {
        \$data = new Data([[123]]);

        // Server is up, server dumper is used
        \$serverDumper = \$this->getMockBuilder(Connection::class)->disableOriginalConstructor()->getMock();
        \$serverDumper->expects(\$this->once())->method('write')->willReturn(true);

        \$collector = new DumpDataCollector(null, null, null, null, \$serverDumper);
        \$collector->dump(\$data);

        // Collect doesn't re-trigger dump
        ob_start();
        \$collector->collect(new Request(), new Response());
        \$this->assertEmpty(ob_get_clean());
        \$this->assertStringMatchesFormat('%a;a:%d:{i:0;a:5:{s:4:\"data\";%c:39:\"Symfony\\Component\\VarDumper\\Cloner\\Data\":%a', serialize(\$collector));
    }

    public function testCollectDefault()
    {
        \$data = new Data([[123]]);

        \$collector = new DumpDataCollector();

        \$collector->dump(\$data);
        \$line = __LINE__ - 1;

        ob_start();
        \$collector->collect(new Request(), new Response());
        \$output = preg_replace(\"/\\033\\[[^m]*m/\", '', ob_get_clean());

        \$this->assertSame(\"DumpDataCollectorTest.php on line {\$line}:\\n123\\n\", \$output);
        \$this->assertSame(1, \$collector->getDumpsCount());
        serialize(\$collector);
    }

    public function testCollectHtml()
    {
        \$data = new Data([[123]]);

        \$collector = new DumpDataCollector(null, 'test://%f:%l');

        \$collector->dump(\$data);
        \$line = __LINE__ - 1;
        \$file = __FILE__;
        \$xOutput = <<<EOTXT
<pre class=sf-dump id=sf-dump data-indent-pad=\"  \"><a href=\"test://{\$file}:{\$line}\" title=\"{\$file}\"><span class=sf-dump-meta>DumpDataCollectorTest.php</span></a> on line <span class=sf-dump-meta>{\$line}</span>:
<span class=sf-dump-num>123</span>
</pre>
EOTXT;

        ob_start();
        \$response = new Response();
        \$response->headers->set('Content-Type', 'text/html');
        \$collector->collect(new Request(), \$response);
        \$output = ob_get_clean();
        \$output = preg_replace('#<(script|style).*?</\\1>#s', '', \$output);
        \$output = preg_replace('/sf-dump-\\d+/', 'sf-dump', \$output);

        \$this->assertSame(\$xOutput, trim(\$output));
        \$this->assertSame(1, \$collector->getDumpsCount());
        serialize(\$collector);
    }

    public function testFlush()
    {
        \$data = new Data([[456]]);
        \$collector = new DumpDataCollector();
        \$collector->dump(\$data);
        \$line = __LINE__ - 1;

        ob_start();
        \$collector->__destruct();
        \$output = preg_replace(\"/\\033\\[[^m]*m/\", '', ob_get_clean());
        \$this->assertSame(\"DumpDataCollectorTest.php on line {\$line}:\\n456\\n\", \$output);
    }

    public function testFlushNothingWhenDataDumperIsProvided()
    {
        \$data = new Data([[456]]);
        \$dumper = new CliDumper('php://output');
        \$collector = new DumpDataCollector(null, null, null, null, \$dumper);

        ob_start();
        \$collector->dump(\$data);
        \$line = __LINE__ - 1;
        \$output = preg_replace(\"/\\033\\[[^m]*m/\", '', ob_get_clean());

        \$this->assertSame(\"DumpDataCollectorTest.php on line {\$line}:\\n456\\n\", \$output);

        ob_start();
        \$collector->__destruct();
        \$this->assertEmpty(ob_get_clean());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/DataCollector/DumpDataCollectorTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\DataCollector;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\DataCollector\\DumpDataCollector;
use Symfony\\Component\\VarDumper\\Cloner\\Data;
use Symfony\\Component\\VarDumper\\Dumper\\CliDumper;
use Symfony\\Component\\VarDumper\\Server\\Connection;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DumpDataCollectorTest extends TestCase
{
    public function testDump()
    {
        \$data = new Data([[123]]);

        \$collector = new DumpDataCollector();

        \$this->assertSame('dump', \$collector->getName());

        \$collector->dump(\$data);
        \$line = __LINE__ - 1;
        \$this->assertSame(1, \$collector->getDumpsCount());

        \$dump = \$collector->getDumps('html');
        \$this->assertArrayHasKey('data', \$dump[0]);
        \$dump[0]['data'] = preg_replace('/^.*?<pre/', '<pre', \$dump[0]['data']);
        \$dump[0]['data'] = preg_replace('/sf-dump-\\d+/', 'sf-dump', \$dump[0]['data']);

        \$xDump = [
            [
                'data' => \"<pre class=sf-dump id=sf-dump data-indent-pad=\\\"  \\\"><span class=sf-dump-num>123</span>\\n</pre><script>Sfdump(\\\"sf-dump\\\")</script>\\n\",
                'name' => 'DumpDataCollectorTest.php',
                'file' => __FILE__,
                'line' => \$line,
                'fileExcerpt' => false,
            ],
        ];
        \$this->assertEquals(\$xDump, \$dump);

        \$this->assertStringMatchesFormat('%a;a:%d:{i:0;a:5:{s:4:\"data\";%c:39:\"Symfony\\Component\\VarDumper\\Cloner\\Data\":%a', serialize(\$collector));
        \$this->assertSame(0, \$collector->getDumpsCount());
        \$this->assertSame(\"O:60:\\\"Symfony\\Component\\HttpKernel\\DataCollector\\DumpDataCollector\\\":1:{s:7:\\\"\\0*\\0data\\\";a:2:{i:0;b:0;i:1;s:5:\\\"UTF-8\\\";}}\", serialize(\$collector));
    }

    public function testDumpWithServerConnection()
    {
        \$data = new Data([[123]]);

        // Server is up, server dumper is used
        \$serverDumper = \$this->getMockBuilder(Connection::class)->disableOriginalConstructor()->getMock();
        \$serverDumper->expects(\$this->once())->method('write')->willReturn(true);

        \$collector = new DumpDataCollector(null, null, null, null, \$serverDumper);
        \$collector->dump(\$data);

        // Collect doesn't re-trigger dump
        ob_start();
        \$collector->collect(new Request(), new Response());
        \$this->assertEmpty(ob_get_clean());
        \$this->assertStringMatchesFormat('%a;a:%d:{i:0;a:5:{s:4:\"data\";%c:39:\"Symfony\\Component\\VarDumper\\Cloner\\Data\":%a', serialize(\$collector));
    }

    public function testCollectDefault()
    {
        \$data = new Data([[123]]);

        \$collector = new DumpDataCollector();

        \$collector->dump(\$data);
        \$line = __LINE__ - 1;

        ob_start();
        \$collector->collect(new Request(), new Response());
        \$output = preg_replace(\"/\\033\\[[^m]*m/\", '', ob_get_clean());

        \$this->assertSame(\"DumpDataCollectorTest.php on line {\$line}:\\n123\\n\", \$output);
        \$this->assertSame(1, \$collector->getDumpsCount());
        serialize(\$collector);
    }

    public function testCollectHtml()
    {
        \$data = new Data([[123]]);

        \$collector = new DumpDataCollector(null, 'test://%f:%l');

        \$collector->dump(\$data);
        \$line = __LINE__ - 1;
        \$file = __FILE__;
        \$xOutput = <<<EOTXT
<pre class=sf-dump id=sf-dump data-indent-pad=\"  \"><a href=\"test://{\$file}:{\$line}\" title=\"{\$file}\"><span class=sf-dump-meta>DumpDataCollectorTest.php</span></a> on line <span class=sf-dump-meta>{\$line}</span>:
<span class=sf-dump-num>123</span>
</pre>
EOTXT;

        ob_start();
        \$response = new Response();
        \$response->headers->set('Content-Type', 'text/html');
        \$collector->collect(new Request(), \$response);
        \$output = ob_get_clean();
        \$output = preg_replace('#<(script|style).*?</\\1>#s', '', \$output);
        \$output = preg_replace('/sf-dump-\\d+/', 'sf-dump', \$output);

        \$this->assertSame(\$xOutput, trim(\$output));
        \$this->assertSame(1, \$collector->getDumpsCount());
        serialize(\$collector);
    }

    public function testFlush()
    {
        \$data = new Data([[456]]);
        \$collector = new DumpDataCollector();
        \$collector->dump(\$data);
        \$line = __LINE__ - 1;

        ob_start();
        \$collector->__destruct();
        \$output = preg_replace(\"/\\033\\[[^m]*m/\", '', ob_get_clean());
        \$this->assertSame(\"DumpDataCollectorTest.php on line {\$line}:\\n456\\n\", \$output);
    }

    public function testFlushNothingWhenDataDumperIsProvided()
    {
        \$data = new Data([[456]]);
        \$dumper = new CliDumper('php://output');
        \$collector = new DumpDataCollector(null, null, null, null, \$dumper);

        ob_start();
        \$collector->dump(\$data);
        \$line = __LINE__ - 1;
        \$output = preg_replace(\"/\\033\\[[^m]*m/\", '', ob_get_clean());

        \$this->assertSame(\"DumpDataCollectorTest.php on line {\$line}:\\n456\\n\", \$output);

        ob_start();
        \$collector->__destruct();
        \$this->assertEmpty(ob_get_clean());
    }
}
", "vendor/symfony/http-kernel/Tests/DataCollector/DumpDataCollectorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/DataCollector/DumpDataCollectorTest.php");
    }
}
