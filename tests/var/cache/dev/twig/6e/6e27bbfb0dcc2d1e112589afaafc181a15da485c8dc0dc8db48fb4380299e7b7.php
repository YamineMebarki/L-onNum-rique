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

/* vendor/symfony/var-dumper/Tests/Server/ConnectionTest.php */
class __TwigTemplate_36c07d98691e2414906f566b85d096c3e5770f4b744cbb5abaa36f75119d7e60 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Server/ConnectionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Server/ConnectionTest.php"));

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

namespace Symfony\\Component\\VarDumper\\Tests\\Server;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Process\\PhpProcess;
use Symfony\\Component\\Process\\Process;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\ContextProviderInterface;
use Symfony\\Component\\VarDumper\\Server\\Connection;

class ConnectionTest extends TestCase
{
    private const VAR_DUMPER_SERVER = 'tcp://127.0.0.1:9913';

    public function testDump()
    {
        \$cloner = new VarCloner();
        \$data = \$cloner->cloneVar('foo');
        \$connection = new Connection(self::VAR_DUMPER_SERVER, [
            'foo_provider' => new class() implements ContextProviderInterface {
                public function getContext(): ?array
                {
                    return ['foo'];
                }
            },
        ]);

        \$dumped = null;
        \$process = \$this->getServerProcess();
        \$process->start(function (\$type, \$buffer) use (\$process, &\$dumped, \$connection, \$data) {
            if (Process::ERR === \$type) {
                \$process->stop();
                \$this->fail();
            } elseif (\"READY\\n\" === \$buffer) {
                \$connection->write(\$data);
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

    public function testNoServer()
    {
        \$cloner = new VarCloner();
        \$data = \$cloner->cloneVar('foo');
        \$connection = new Connection(self::VAR_DUMPER_SERVER);
        \$start = microtime(true);
        \$this->assertFalse(\$connection->write(\$data));
        \$this->assertLessThan(1, microtime(true) - \$start);
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
        return "vendor/symfony/var-dumper/Tests/Server/ConnectionTest.php";
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

namespace Symfony\\Component\\VarDumper\\Tests\\Server;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Process\\PhpProcess;
use Symfony\\Component\\Process\\Process;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Dumper\\ContextProvider\\ContextProviderInterface;
use Symfony\\Component\\VarDumper\\Server\\Connection;

class ConnectionTest extends TestCase
{
    private const VAR_DUMPER_SERVER = 'tcp://127.0.0.1:9913';

    public function testDump()
    {
        \$cloner = new VarCloner();
        \$data = \$cloner->cloneVar('foo');
        \$connection = new Connection(self::VAR_DUMPER_SERVER, [
            'foo_provider' => new class() implements ContextProviderInterface {
                public function getContext(): ?array
                {
                    return ['foo'];
                }
            },
        ]);

        \$dumped = null;
        \$process = \$this->getServerProcess();
        \$process->start(function (\$type, \$buffer) use (\$process, &\$dumped, \$connection, \$data) {
            if (Process::ERR === \$type) {
                \$process->stop();
                \$this->fail();
            } elseif (\"READY\\n\" === \$buffer) {
                \$connection->write(\$data);
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

    public function testNoServer()
    {
        \$cloner = new VarCloner();
        \$data = \$cloner->cloneVar('foo');
        \$connection = new Connection(self::VAR_DUMPER_SERVER);
        \$start = microtime(true);
        \$this->assertFalse(\$connection->write(\$data));
        \$this->assertLessThan(1, microtime(true) - \$start);
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
", "vendor/symfony/var-dumper/Tests/Server/ConnectionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Tests/Server/ConnectionTest.php");
    }
}
