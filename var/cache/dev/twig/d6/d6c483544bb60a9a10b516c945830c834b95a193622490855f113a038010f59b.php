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

/* vendor/symfony/console/Tests/Helper/ProcessHelperTest.php */
class __TwigTemplate_6104689f3d0538356ab61b52e8a3d58e3e49a72456bbfcf5afa94ff8fe445f2f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Helper/ProcessHelperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Helper/ProcessHelperTest.php"));

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

namespace Symfony\\Component\\Console\\Tests\\Helper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Helper\\DebugFormatterHelper;
use Symfony\\Component\\Console\\Helper\\HelperSet;
use Symfony\\Component\\Console\\Helper\\ProcessHelper;
use Symfony\\Component\\Console\\Output\\StreamOutput;
use Symfony\\Component\\Process\\Process;

class ProcessHelperTest extends TestCase
{
    /**
     * @dataProvider provideCommandsAndOutput
     */
    public function testVariousProcessRuns(\$expected, \$cmd, \$verbosity, \$error)
    {
        if (\\is_string(\$cmd)) {
            \$cmd = method_exists(Process::class, 'fromShellCommandline') ? Process::fromShellCommandline(\$cmd) : new Process(\$cmd);
        }

        \$helper = new ProcessHelper();
        \$helper->setHelperSet(new HelperSet([new DebugFormatterHelper()]));
        \$output = \$this->getOutputStream(\$verbosity);
        \$helper->run(\$output, \$cmd, \$error);
        \$this->assertEquals(\$expected, \$this->getOutput(\$output));
    }

    public function testPassedCallbackIsExecuted()
    {
        \$helper = new ProcessHelper();
        \$helper->setHelperSet(new HelperSet([new DebugFormatterHelper()]));
        \$output = \$this->getOutputStream(StreamOutput::VERBOSITY_NORMAL);

        \$executed = false;
        \$callback = function () use (&\$executed) { \$executed = true; };

        \$helper->run(\$output, ['php', '-r', 'echo 42;'], null, \$callback);
        \$this->assertTrue(\$executed);
    }

    public function provideCommandsAndOutput()
    {
        \$successOutputVerbose = <<<'EOT'
  RUN  php -r \"echo 42;\"
  RES  Command ran successfully

EOT;
        \$successOutputDebug = <<<'EOT'
  RUN  php -r \"echo 42;\"
  OUT  42
  RES  Command ran successfully

EOT;
        \$successOutputDebugWithTags = <<<'EOT'
  RUN  php -r \"echo '<info>42</info>';\"
  OUT  <info>42</info>
  RES  Command ran successfully

EOT;
        \$successOutputProcessDebug = <<<'EOT'
  RUN  'php' '-r' 'echo 42;'
  OUT  42
  RES  Command ran successfully

EOT;
        \$syntaxErrorOutputVerbose = <<<'EOT'
  RUN  php -r \"fwrite(STDERR, 'error message');usleep(50000);fwrite(STDOUT, 'out message');exit(252);\"
  RES  252 Command did not run successfully

EOT;
        \$syntaxErrorOutputDebug = <<<'EOT'
  RUN  php -r \"fwrite(STDERR, 'error message');usleep(500000);fwrite(STDOUT, 'out message');exit(252);\"
  ERR  error message
  OUT  out message
  RES  252 Command did not run successfully

EOT;

        \$PHP = '\\\\' === \\DIRECTORY_SEPARATOR ? '\"!PHP!\"' : '\"\$PHP\"';
        \$successOutputPhp = <<<EOT
  RUN  php -r \$PHP
  OUT  42
  RES  Command ran successfully

EOT;

        \$errorMessage = 'An error occurred';
        \$args = new Process(['php', '-r', 'echo 42;']);
        \$args = \$args->getCommandLine();
        \$successOutputProcessDebug = str_replace(\"'php' '-r' 'echo 42;'\", \$args, \$successOutputProcessDebug);
        \$fromShellCommandline = method_exists(Process::class, 'fromShellCommandline') ? [Process::class, 'fromShellCommandline'] : function (\$cmd) { return new Process(\$cmd); };

        return [
            ['', 'php -r \"echo 42;\"', StreamOutput::VERBOSITY_VERBOSE, null],
            [\$successOutputVerbose, 'php -r \"echo 42;\"', StreamOutput::VERBOSITY_VERY_VERBOSE, null],
            [\$successOutputDebug, 'php -r \"echo 42;\"', StreamOutput::VERBOSITY_DEBUG, null],
            [\$successOutputDebugWithTags, 'php -r \"echo \\'<info>42</info>\\';\"', StreamOutput::VERBOSITY_DEBUG, null],
            ['', 'php -r \"syntax error\"', StreamOutput::VERBOSITY_VERBOSE, null],
            [\$syntaxErrorOutputVerbose, 'php -r \"fwrite(STDERR, \\'error message\\');usleep(50000);fwrite(STDOUT, \\'out message\\');exit(252);\"', StreamOutput::VERBOSITY_VERY_VERBOSE, null],
            [\$syntaxErrorOutputDebug, 'php -r \"fwrite(STDERR, \\'error message\\');usleep(500000);fwrite(STDOUT, \\'out message\\');exit(252);\"', StreamOutput::VERBOSITY_DEBUG, null],
            [\$errorMessage.PHP_EOL, 'php -r \"fwrite(STDERR, \\'error message\\');usleep(50000);fwrite(STDOUT, \\'out message\\');exit(252);\"', StreamOutput::VERBOSITY_VERBOSE, \$errorMessage],
            [\$syntaxErrorOutputVerbose.\$errorMessage.PHP_EOL, 'php -r \"fwrite(STDERR, \\'error message\\');usleep(50000);fwrite(STDOUT, \\'out message\\');exit(252);\"', StreamOutput::VERBOSITY_VERY_VERBOSE, \$errorMessage],
            [\$syntaxErrorOutputDebug.\$errorMessage.PHP_EOL, 'php -r \"fwrite(STDERR, \\'error message\\');usleep(500000);fwrite(STDOUT, \\'out message\\');exit(252);\"', StreamOutput::VERBOSITY_DEBUG, \$errorMessage],
            [\$successOutputProcessDebug, ['php', '-r', 'echo 42;'], StreamOutput::VERBOSITY_DEBUG, null],
            [\$successOutputDebug, \$fromShellCommandline('php -r \"echo 42;\"'), StreamOutput::VERBOSITY_DEBUG, null],
            [\$successOutputProcessDebug, [new Process(['php', '-r', 'echo 42;'])], StreamOutput::VERBOSITY_DEBUG, null],
            [\$successOutputPhp, [\$fromShellCommandline('php -r '.\$PHP), 'PHP' => 'echo 42;'], StreamOutput::VERBOSITY_DEBUG, null],
        ];
    }

    private function getOutputStream(\$verbosity)
    {
        return new StreamOutput(fopen('php://memory', 'r+', false), \$verbosity, false);
    }

    private function getOutput(StreamOutput \$output)
    {
        rewind(\$output->getStream());

        return stream_get_contents(\$output->getStream());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Helper/ProcessHelperTest.php";
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

namespace Symfony\\Component\\Console\\Tests\\Helper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Helper\\DebugFormatterHelper;
use Symfony\\Component\\Console\\Helper\\HelperSet;
use Symfony\\Component\\Console\\Helper\\ProcessHelper;
use Symfony\\Component\\Console\\Output\\StreamOutput;
use Symfony\\Component\\Process\\Process;

class ProcessHelperTest extends TestCase
{
    /**
     * @dataProvider provideCommandsAndOutput
     */
    public function testVariousProcessRuns(\$expected, \$cmd, \$verbosity, \$error)
    {
        if (\\is_string(\$cmd)) {
            \$cmd = method_exists(Process::class, 'fromShellCommandline') ? Process::fromShellCommandline(\$cmd) : new Process(\$cmd);
        }

        \$helper = new ProcessHelper();
        \$helper->setHelperSet(new HelperSet([new DebugFormatterHelper()]));
        \$output = \$this->getOutputStream(\$verbosity);
        \$helper->run(\$output, \$cmd, \$error);
        \$this->assertEquals(\$expected, \$this->getOutput(\$output));
    }

    public function testPassedCallbackIsExecuted()
    {
        \$helper = new ProcessHelper();
        \$helper->setHelperSet(new HelperSet([new DebugFormatterHelper()]));
        \$output = \$this->getOutputStream(StreamOutput::VERBOSITY_NORMAL);

        \$executed = false;
        \$callback = function () use (&\$executed) { \$executed = true; };

        \$helper->run(\$output, ['php', '-r', 'echo 42;'], null, \$callback);
        \$this->assertTrue(\$executed);
    }

    public function provideCommandsAndOutput()
    {
        \$successOutputVerbose = <<<'EOT'
  RUN  php -r \"echo 42;\"
  RES  Command ran successfully

EOT;
        \$successOutputDebug = <<<'EOT'
  RUN  php -r \"echo 42;\"
  OUT  42
  RES  Command ran successfully

EOT;
        \$successOutputDebugWithTags = <<<'EOT'
  RUN  php -r \"echo '<info>42</info>';\"
  OUT  <info>42</info>
  RES  Command ran successfully

EOT;
        \$successOutputProcessDebug = <<<'EOT'
  RUN  'php' '-r' 'echo 42;'
  OUT  42
  RES  Command ran successfully

EOT;
        \$syntaxErrorOutputVerbose = <<<'EOT'
  RUN  php -r \"fwrite(STDERR, 'error message');usleep(50000);fwrite(STDOUT, 'out message');exit(252);\"
  RES  252 Command did not run successfully

EOT;
        \$syntaxErrorOutputDebug = <<<'EOT'
  RUN  php -r \"fwrite(STDERR, 'error message');usleep(500000);fwrite(STDOUT, 'out message');exit(252);\"
  ERR  error message
  OUT  out message
  RES  252 Command did not run successfully

EOT;

        \$PHP = '\\\\' === \\DIRECTORY_SEPARATOR ? '\"!PHP!\"' : '\"\$PHP\"';
        \$successOutputPhp = <<<EOT
  RUN  php -r \$PHP
  OUT  42
  RES  Command ran successfully

EOT;

        \$errorMessage = 'An error occurred';
        \$args = new Process(['php', '-r', 'echo 42;']);
        \$args = \$args->getCommandLine();
        \$successOutputProcessDebug = str_replace(\"'php' '-r' 'echo 42;'\", \$args, \$successOutputProcessDebug);
        \$fromShellCommandline = method_exists(Process::class, 'fromShellCommandline') ? [Process::class, 'fromShellCommandline'] : function (\$cmd) { return new Process(\$cmd); };

        return [
            ['', 'php -r \"echo 42;\"', StreamOutput::VERBOSITY_VERBOSE, null],
            [\$successOutputVerbose, 'php -r \"echo 42;\"', StreamOutput::VERBOSITY_VERY_VERBOSE, null],
            [\$successOutputDebug, 'php -r \"echo 42;\"', StreamOutput::VERBOSITY_DEBUG, null],
            [\$successOutputDebugWithTags, 'php -r \"echo \\'<info>42</info>\\';\"', StreamOutput::VERBOSITY_DEBUG, null],
            ['', 'php -r \"syntax error\"', StreamOutput::VERBOSITY_VERBOSE, null],
            [\$syntaxErrorOutputVerbose, 'php -r \"fwrite(STDERR, \\'error message\\');usleep(50000);fwrite(STDOUT, \\'out message\\');exit(252);\"', StreamOutput::VERBOSITY_VERY_VERBOSE, null],
            [\$syntaxErrorOutputDebug, 'php -r \"fwrite(STDERR, \\'error message\\');usleep(500000);fwrite(STDOUT, \\'out message\\');exit(252);\"', StreamOutput::VERBOSITY_DEBUG, null],
            [\$errorMessage.PHP_EOL, 'php -r \"fwrite(STDERR, \\'error message\\');usleep(50000);fwrite(STDOUT, \\'out message\\');exit(252);\"', StreamOutput::VERBOSITY_VERBOSE, \$errorMessage],
            [\$syntaxErrorOutputVerbose.\$errorMessage.PHP_EOL, 'php -r \"fwrite(STDERR, \\'error message\\');usleep(50000);fwrite(STDOUT, \\'out message\\');exit(252);\"', StreamOutput::VERBOSITY_VERY_VERBOSE, \$errorMessage],
            [\$syntaxErrorOutputDebug.\$errorMessage.PHP_EOL, 'php -r \"fwrite(STDERR, \\'error message\\');usleep(500000);fwrite(STDOUT, \\'out message\\');exit(252);\"', StreamOutput::VERBOSITY_DEBUG, \$errorMessage],
            [\$successOutputProcessDebug, ['php', '-r', 'echo 42;'], StreamOutput::VERBOSITY_DEBUG, null],
            [\$successOutputDebug, \$fromShellCommandline('php -r \"echo 42;\"'), StreamOutput::VERBOSITY_DEBUG, null],
            [\$successOutputProcessDebug, [new Process(['php', '-r', 'echo 42;'])], StreamOutput::VERBOSITY_DEBUG, null],
            [\$successOutputPhp, [\$fromShellCommandline('php -r '.\$PHP), 'PHP' => 'echo 42;'], StreamOutput::VERBOSITY_DEBUG, null],
        ];
    }

    private function getOutputStream(\$verbosity)
    {
        return new StreamOutput(fopen('php://memory', 'r+', false), \$verbosity, false);
    }

    private function getOutput(StreamOutput \$output)
    {
        rewind(\$output->getStream());

        return stream_get_contents(\$output->getStream());
    }
}
", "vendor/symfony/console/Tests/Helper/ProcessHelperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Helper/ProcessHelperTest.php");
    }
}
