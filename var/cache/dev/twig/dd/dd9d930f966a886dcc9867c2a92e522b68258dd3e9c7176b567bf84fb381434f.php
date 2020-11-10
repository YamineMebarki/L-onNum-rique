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

/* vendor/symfony/process/Exception/ProcessFailedException.php */
class __TwigTemplate_fd0bc62a26b821f9bbd99e8765c29dafba992fabafff8cd94bff7e5534494fa4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Exception/ProcessFailedException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Exception/ProcessFailedException.php"));

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

namespace Symfony\\Component\\Process\\Exception;

use Symfony\\Component\\Process\\Process;

/**
 * Exception for failed processes.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ProcessFailedException extends RuntimeException
{
    private \$process;

    public function __construct(Process \$process)
    {
        if (\$process->isSuccessful()) {
            throw new InvalidArgumentException('Expected a failed process, but the given process was successful.');
        }

        \$error = sprintf('The command \"%s\" failed.'.\"\\n\\nExit Code: %s(%s)\\n\\nWorking directory: %s\",
            \$process->getCommandLine(),
            \$process->getExitCode(),
            \$process->getExitCodeText(),
            \$process->getWorkingDirectory()
        );

        if (!\$process->isOutputDisabled()) {
            \$error .= sprintf(\"\\n\\nOutput:\\n================\\n%s\\n\\nError Output:\\n================\\n%s\",
                \$process->getOutput(),
                \$process->getErrorOutput()
            );
        }

        parent::__construct(\$error);

        \$this->process = \$process;
    }

    public function getProcess()
    {
        return \$this->process;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/process/Exception/ProcessFailedException.php";
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

namespace Symfony\\Component\\Process\\Exception;

use Symfony\\Component\\Process\\Process;

/**
 * Exception for failed processes.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ProcessFailedException extends RuntimeException
{
    private \$process;

    public function __construct(Process \$process)
    {
        if (\$process->isSuccessful()) {
            throw new InvalidArgumentException('Expected a failed process, but the given process was successful.');
        }

        \$error = sprintf('The command \"%s\" failed.'.\"\\n\\nExit Code: %s(%s)\\n\\nWorking directory: %s\",
            \$process->getCommandLine(),
            \$process->getExitCode(),
            \$process->getExitCodeText(),
            \$process->getWorkingDirectory()
        );

        if (!\$process->isOutputDisabled()) {
            \$error .= sprintf(\"\\n\\nOutput:\\n================\\n%s\\n\\nError Output:\\n================\\n%s\",
                \$process->getOutput(),
                \$process->getErrorOutput()
            );
        }

        parent::__construct(\$error);

        \$this->process = \$process;
    }

    public function getProcess()
    {
        return \$this->process;
    }
}
", "vendor/symfony/process/Exception/ProcessFailedException.php", "/var/www/public/DevLaon/templates/vendor/symfony/process/Exception/ProcessFailedException.php");
    }
}
