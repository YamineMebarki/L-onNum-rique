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

/* vendor/symfony/var-dumper/Tests/Dumper/ServerDumperTest.php */
class __TwigTemplate_be94dfe9ca7f613d7e48f1ec49cf086aefc32dfcca5ec8e8be308645220be7a1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Dumper/ServerDumperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Dumper/ServerDumperTest.php"));

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

namespace Symfony\\Component\\VarDumper\\Tests\\Dumper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Process\\PhpProcess;
use Symfony\\Component\\Process\\Process;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\ContextProviderInterface;
use Symfony\\Component\\VarDumper\\Dumper\\DataDumperInterface;
use Symfony\\Component\\VarDumper\\Dumper\\ServerDumper;

class ServerDumperTest extends TestCase
{
    private const VAR_DUMPER_SERVER = 'tcp://127.0.0.1:9913';

    public function testDumpForwardsToWrappedDumperWhenServerIsUnavailable()
    {
        \$wrappedDumper = \$this->getMockBuilder(DataDumperInterface::class)->getMock();

        \$dumper = new ServerDumper(self::VAR_DUMPER_SERVER, \$wrappedDumper);

        \$cloner = new VarCloner();
        \$data = \$cloner->cloneVar('foo');

        \$wrappedDumper->expects(\$this->once())->method('dump')->with(\$data);

        \$dumper->dump(\$data);
    }

    public function testDump()
    {
        \$wrappedDumper = \$this->getMockBuilder(DataDumperInterface::class)->getMock();
        \$wrappedDumper->expects(\$this->never())->method('dump'); // test wrapped dumper is not used

        \$cloner = new VarCloner();
        \$data = \$cloner->cloneVar('foo');
        \$dumper = new ServerDumper(self::VAR_DUMPER_SERVER, \$wrappedDumper, [
            'foo_provider' => new class() implements ContextProviderInterface {
                public function getContext(): ?array
                {
                    return ['foo'];
                }
            },
        ]);

        \$dumped = null;
        \$process = \$this->getServerProcess();
        \$process->start(function (\$type, \$buffer) use (\$process, &\$dumped, \$dumper, \$data) {
            if (Process::ERR === \$type) {
                \$process->stop();
                \$this->fail();
            } elseif (\"READY\\n\" === \$buffer) {
                \$dumper->dump(\$data);
            } else {
                \$dumped .= \$buffer;
            }
        });

        \$process->wait();

        \$this->assertTrue(\$process->isSuccessful());
        \$this->assertStringMatchesFormat(<<<'DUMP'
(3) \"foo\"
[
  \"timestamp\" => %d.%d
  \"foo_provider\" => [
    (3) \"foo\"
  ]
]
%d
DUMP
        , \$dumped);
    }

    private function getServerProcess(): Process
    {
        \$process = new PhpProcess(file_get_contents(__DIR__.'/../Fixtures/dump_server.php'), null, [
            'COMPONENT_ROOT' => __DIR__.'/../../',
            'VAR_DUMPER_SERVER' => self::VAR_DUMPER_SERVER,
        ]);
        \$process->inheritEnvironmentVariables(true);

        return \$process->setTimeout(9);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Tests/Dumper/ServerDumperTest.php";
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

namespace Symfony\\Component\\VarDumper\\Tests\\Dumper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Process\\PhpProcess;
use Symfony\\Component\\Process\\Process;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\ContextProviderInterface;
use Symfony\\Component\\VarDumper\\Dumper\\DataDumperInterface;
use Symfony\\Component\\VarDumper\\Dumper\\ServerDumper;

class ServerDumperTest extends TestCase
{
    private const VAR_DUMPER_SERVER = 'tcp://127.0.0.1:9913';

    public function testDumpForwardsToWrappedDumperWhenServerIsUnavailable()
    {
        \$wrappedDumper = \$this->getMockBuilder(DataDumperInterface::class)->getMock();

        \$dumper = new ServerDumper(self::VAR_DUMPER_SERVER, \$wrappedDumper);

        \$cloner = new VarCloner();
        \$data = \$cloner->cloneVar('foo');

        \$wrappedDumper->expects(\$this->once())->method('dump')->with(\$data);

        \$dumper->dump(\$data);
    }

    public function testDump()
    {
        \$wrappedDumper = \$this->getMockBuilder(DataDumperInterface::class)->getMock();
        \$wrappedDumper->expects(\$this->never())->method('dump'); // test wrapped dumper is not used

        \$cloner = new VarCloner();
        \$data = \$cloner->cloneVar('foo');
        \$dumper = new ServerDumper(self::VAR_DUMPER_SERVER, \$wrappedDumper, [
            'foo_provider' => new class() implements ContextProviderInterface {
                public function getContext(): ?array
                {
                    return ['foo'];
                }
            },
        ]);

        \$dumped = null;
        \$process = \$this->getServerProcess();
        \$process->start(function (\$type, \$buffer) use (\$process, &\$dumped, \$dumper, \$data) {
            if (Process::ERR === \$type) {
                \$process->stop();
                \$this->fail();
            } elseif (\"READY\\n\" === \$buffer) {
                \$dumper->dump(\$data);
            } else {
                \$dumped .= \$buffer;
            }
        });

        \$process->wait();

        \$this->assertTrue(\$process->isSuccessful());
        \$this->assertStringMatchesFormat(<<<'DUMP'
(3) \"foo\"
[
  \"timestamp\" => %d.%d
  \"foo_provider\" => [
    (3) \"foo\"
  ]
]
%d
DUMP
        , \$dumped);
    }

    private function getServerProcess(): Process
    {
        \$process = new PhpProcess(file_get_contents(__DIR__.'/../Fixtures/dump_server.php'), null, [
            'COMPONENT_ROOT' => __DIR__.'/../../',
            'VAR_DUMPER_SERVER' => self::VAR_DUMPER_SERVER,
        ]);
        \$process->inheritEnvironmentVariables(true);

        return \$process->setTimeout(9);
    }
}
", "vendor/symfony/var-dumper/Tests/Dumper/ServerDumperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Tests/Dumper/ServerDumperTest.php");
    }
}
