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

/* vendor/symfony/maker-bundle/src/Test/MakerTestProcess.php */
class __TwigTemplate_b95576783f8f83422c3945f9f2312df0d4390eeea180c95aa68de86171fc32f3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Test/MakerTestProcess.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Test/MakerTestProcess.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Test;

use Symfony\\Component\\Process\\Process;

/**
 * @author Sadicov Vladimir <sadikoff@gmail.com>
 *
 * @internal
 */
final class MakerTestProcess
{
    private \$process;

    private function __construct(\$commandLine, \$cwd, array \$envVars, \$timeout)
    {
        \$this->process = method_exists(Process::class, 'fromShellCommandline')
            ? Process::fromShellCommandline(\$commandLine, \$cwd, null, null, \$timeout)
            : new Process(\$commandLine, \$cwd, null, null, \$timeout);

        \$this->process->setEnv(\$envVars);
    }

    public static function create(\$commandLine, \$cwd, array \$envVars = [], \$timeout = null): self
    {
        return new self(\$commandLine, \$cwd, \$envVars, \$timeout);
    }

    public function setInput(\$input): self
    {
        \$this->process->setInput(\$input);

        return \$this;
    }

    public function run(\$allowToFail = false, array \$envVars = []): self
    {
        \$this->process->run(null, \$envVars);

        if (!\$allowToFail && !\$this->process->isSuccessful()) {
            throw new \\Exception(sprintf(
                'Error running command: \"%s\". Output: \"%s\". Error: \"%s\"',
                \$this->process->getCommandLine(),
                \$this->process->getOutput(),
                \$this->process->getErrorOutput()
            ));
        }

        return \$this;
    }

    public function isSuccessful()
    {
        return \$this->process->isSuccessful();
    }

    public function getOutput()
    {
        return \$this->process->getOutput();
    }

    public function getErrorOutput()
    {
        return \$this->process->getErrorOutput();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Test/MakerTestProcess.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Test;

use Symfony\\Component\\Process\\Process;

/**
 * @author Sadicov Vladimir <sadikoff@gmail.com>
 *
 * @internal
 */
final class MakerTestProcess
{
    private \$process;

    private function __construct(\$commandLine, \$cwd, array \$envVars, \$timeout)
    {
        \$this->process = method_exists(Process::class, 'fromShellCommandline')
            ? Process::fromShellCommandline(\$commandLine, \$cwd, null, null, \$timeout)
            : new Process(\$commandLine, \$cwd, null, null, \$timeout);

        \$this->process->setEnv(\$envVars);
    }

    public static function create(\$commandLine, \$cwd, array \$envVars = [], \$timeout = null): self
    {
        return new self(\$commandLine, \$cwd, \$envVars, \$timeout);
    }

    public function setInput(\$input): self
    {
        \$this->process->setInput(\$input);

        return \$this;
    }

    public function run(\$allowToFail = false, array \$envVars = []): self
    {
        \$this->process->run(null, \$envVars);

        if (!\$allowToFail && !\$this->process->isSuccessful()) {
            throw new \\Exception(sprintf(
                'Error running command: \"%s\". Output: \"%s\". Error: \"%s\"',
                \$this->process->getCommandLine(),
                \$this->process->getOutput(),
                \$this->process->getErrorOutput()
            ));
        }

        return \$this;
    }

    public function isSuccessful()
    {
        return \$this->process->isSuccessful();
    }

    public function getOutput()
    {
        return \$this->process->getOutput();
    }

    public function getErrorOutput()
    {
        return \$this->process->getErrorOutput();
    }
}
", "vendor/symfony/maker-bundle/src/Test/MakerTestProcess.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Test/MakerTestProcess.php");
    }
}
