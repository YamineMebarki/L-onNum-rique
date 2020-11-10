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

/* vendor/symfony/process/Tests/ProcessFailedExceptionTest.php */
class __TwigTemplate_b3ce1c6dd44920ccabed181d776e7e640e8679d29c7f15e3c72c1b295b8341c5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Tests/ProcessFailedExceptionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Tests/ProcessFailedExceptionTest.php"));

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
use Symfony\\Component\\Process\\Exception\\ProcessFailedException;

/**
 * @author Sebastian Marek <proofek@gmail.com>
 */
class ProcessFailedExceptionTest extends TestCase
{
    /**
     * tests ProcessFailedException throws exception if the process was successful.
     */
    public function testProcessFailedExceptionThrowsException()
    {
        \$process = \$this->getMockBuilder('Symfony\\Component\\Process\\Process')->setMethods(['isSuccessful'])->setConstructorArgs([['php']])->getMock();
        \$process->expects(\$this->once())
            ->method('isSuccessful')
            ->willReturn(true);

        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectExceptionMessage('Expected a failed process, but the given process was successful.');

        new ProcessFailedException(\$process);
    }

    /**
     * tests ProcessFailedException uses information from process output
     * to generate exception message.
     */
    public function testProcessFailedExceptionPopulatesInformationFromProcessOutput()
    {
        \$cmd = 'php';
        \$exitCode = 1;
        \$exitText = 'General error';
        \$output = 'Command output';
        \$errorOutput = 'FATAL: Unexpected error';
        \$workingDirectory = getcwd();

        \$process = \$this->getMockBuilder('Symfony\\Component\\Process\\Process')->setMethods(['isSuccessful', 'getOutput', 'getErrorOutput', 'getExitCode', 'getExitCodeText', 'isOutputDisabled', 'getWorkingDirectory'])->setConstructorArgs([[\$cmd]])->getMock();
        \$process->expects(\$this->once())
            ->method('isSuccessful')
            ->willReturn(false);

        \$process->expects(\$this->once())
            ->method('getOutput')
            ->willReturn(\$output);

        \$process->expects(\$this->once())
            ->method('getErrorOutput')
            ->willReturn(\$errorOutput);

        \$process->expects(\$this->once())
            ->method('getExitCode')
            ->willReturn(\$exitCode);

        \$process->expects(\$this->once())
            ->method('getExitCodeText')
            ->willReturn(\$exitText);

        \$process->expects(\$this->once())
            ->method('isOutputDisabled')
            ->willReturn(false);

        \$process->expects(\$this->once())
            ->method('getWorkingDirectory')
            ->willReturn(\$workingDirectory);

        \$exception = new ProcessFailedException(\$process);

        \$this->assertEquals(
            \"The command \\\"\$cmd\\\" failed.\\n\\nExit Code: \$exitCode(\$exitText)\\n\\nWorking directory: {\$workingDirectory}\\n\\nOutput:\\n================\\n{\$output}\\n\\nError Output:\\n================\\n{\$errorOutput}\",
            str_replace(\"'php'\", 'php', \$exception->getMessage())
        );
    }

    /**
     * Tests that ProcessFailedException does not extract information from
     * process output if it was previously disabled.
     */
    public function testDisabledOutputInFailedExceptionDoesNotPopulateOutput()
    {
        \$cmd = 'php';
        \$exitCode = 1;
        \$exitText = 'General error';
        \$workingDirectory = getcwd();

        \$process = \$this->getMockBuilder('Symfony\\Component\\Process\\Process')->setMethods(['isSuccessful', 'isOutputDisabled', 'getExitCode', 'getExitCodeText', 'getOutput', 'getErrorOutput', 'getWorkingDirectory'])->setConstructorArgs([[\$cmd]])->getMock();
        \$process->expects(\$this->once())
            ->method('isSuccessful')
            ->willReturn(false);

        \$process->expects(\$this->never())
            ->method('getOutput');

        \$process->expects(\$this->never())
            ->method('getErrorOutput');

        \$process->expects(\$this->once())
            ->method('getExitCode')
            ->willReturn(\$exitCode);

        \$process->expects(\$this->once())
            ->method('getExitCodeText')
            ->willReturn(\$exitText);

        \$process->expects(\$this->once())
            ->method('isOutputDisabled')
            ->willReturn(true);

        \$process->expects(\$this->once())
            ->method('getWorkingDirectory')
            ->willReturn(\$workingDirectory);

        \$exception = new ProcessFailedException(\$process);

        \$this->assertEquals(
            \"The command \\\"\$cmd\\\" failed.\\n\\nExit Code: \$exitCode(\$exitText)\\n\\nWorking directory: {\$workingDirectory}\",
            str_replace(\"'php'\", 'php', \$exception->getMessage())
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/process/Tests/ProcessFailedExceptionTest.php";
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
use Symfony\\Component\\Process\\Exception\\ProcessFailedException;

/**
 * @author Sebastian Marek <proofek@gmail.com>
 */
class ProcessFailedExceptionTest extends TestCase
{
    /**
     * tests ProcessFailedException throws exception if the process was successful.
     */
    public function testProcessFailedExceptionThrowsException()
    {
        \$process = \$this->getMockBuilder('Symfony\\Component\\Process\\Process')->setMethods(['isSuccessful'])->setConstructorArgs([['php']])->getMock();
        \$process->expects(\$this->once())
            ->method('isSuccessful')
            ->willReturn(true);

        \$this->expectException(\\InvalidArgumentException::class);
        \$this->expectExceptionMessage('Expected a failed process, but the given process was successful.');

        new ProcessFailedException(\$process);
    }

    /**
     * tests ProcessFailedException uses information from process output
     * to generate exception message.
     */
    public function testProcessFailedExceptionPopulatesInformationFromProcessOutput()
    {
        \$cmd = 'php';
        \$exitCode = 1;
        \$exitText = 'General error';
        \$output = 'Command output';
        \$errorOutput = 'FATAL: Unexpected error';
        \$workingDirectory = getcwd();

        \$process = \$this->getMockBuilder('Symfony\\Component\\Process\\Process')->setMethods(['isSuccessful', 'getOutput', 'getErrorOutput', 'getExitCode', 'getExitCodeText', 'isOutputDisabled', 'getWorkingDirectory'])->setConstructorArgs([[\$cmd]])->getMock();
        \$process->expects(\$this->once())
            ->method('isSuccessful')
            ->willReturn(false);

        \$process->expects(\$this->once())
            ->method('getOutput')
            ->willReturn(\$output);

        \$process->expects(\$this->once())
            ->method('getErrorOutput')
            ->willReturn(\$errorOutput);

        \$process->expects(\$this->once())
            ->method('getExitCode')
            ->willReturn(\$exitCode);

        \$process->expects(\$this->once())
            ->method('getExitCodeText')
            ->willReturn(\$exitText);

        \$process->expects(\$this->once())
            ->method('isOutputDisabled')
            ->willReturn(false);

        \$process->expects(\$this->once())
            ->method('getWorkingDirectory')
            ->willReturn(\$workingDirectory);

        \$exception = new ProcessFailedException(\$process);

        \$this->assertEquals(
            \"The command \\\"\$cmd\\\" failed.\\n\\nExit Code: \$exitCode(\$exitText)\\n\\nWorking directory: {\$workingDirectory}\\n\\nOutput:\\n================\\n{\$output}\\n\\nError Output:\\n================\\n{\$errorOutput}\",
            str_replace(\"'php'\", 'php', \$exception->getMessage())
        );
    }

    /**
     * Tests that ProcessFailedException does not extract information from
     * process output if it was previously disabled.
     */
    public function testDisabledOutputInFailedExceptionDoesNotPopulateOutput()
    {
        \$cmd = 'php';
        \$exitCode = 1;
        \$exitText = 'General error';
        \$workingDirectory = getcwd();

        \$process = \$this->getMockBuilder('Symfony\\Component\\Process\\Process')->setMethods(['isSuccessful', 'isOutputDisabled', 'getExitCode', 'getExitCodeText', 'getOutput', 'getErrorOutput', 'getWorkingDirectory'])->setConstructorArgs([[\$cmd]])->getMock();
        \$process->expects(\$this->once())
            ->method('isSuccessful')
            ->willReturn(false);

        \$process->expects(\$this->never())
            ->method('getOutput');

        \$process->expects(\$this->never())
            ->method('getErrorOutput');

        \$process->expects(\$this->once())
            ->method('getExitCode')
            ->willReturn(\$exitCode);

        \$process->expects(\$this->once())
            ->method('getExitCodeText')
            ->willReturn(\$exitText);

        \$process->expects(\$this->once())
            ->method('isOutputDisabled')
            ->willReturn(true);

        \$process->expects(\$this->once())
            ->method('getWorkingDirectory')
            ->willReturn(\$workingDirectory);

        \$exception = new ProcessFailedException(\$process);

        \$this->assertEquals(
            \"The command \\\"\$cmd\\\" failed.\\n\\nExit Code: \$exitCode(\$exitText)\\n\\nWorking directory: {\$workingDirectory}\",
            str_replace(\"'php'\", 'php', \$exception->getMessage())
        );
    }
}
", "vendor/symfony/process/Tests/ProcessFailedExceptionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/process/Tests/ProcessFailedExceptionTest.php");
    }
}
