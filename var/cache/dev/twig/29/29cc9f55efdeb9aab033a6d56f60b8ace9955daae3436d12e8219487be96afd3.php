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

/* vendor/symfony/process/Exception/ProcessTimedOutException.php */
class __TwigTemplate_15fd0ec401c125878f579746e72b0816153c93a0c642484740c17a363b0e6171 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Exception/ProcessTimedOutException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/process/Exception/ProcessTimedOutException.php"));

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
 * Exception that is thrown when a process times out.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ProcessTimedOutException extends RuntimeException
{
    const TYPE_GENERAL = 1;
    const TYPE_IDLE = 2;

    private \$process;
    private \$timeoutType;

    public function __construct(Process \$process, int \$timeoutType)
    {
        \$this->process = \$process;
        \$this->timeoutType = \$timeoutType;

        parent::__construct(sprintf(
            'The process \"%s\" exceeded the timeout of %s seconds.',
            \$process->getCommandLine(),
            \$this->getExceededTimeout()
        ));
    }

    public function getProcess()
    {
        return \$this->process;
    }

    public function isGeneralTimeout()
    {
        return self::TYPE_GENERAL === \$this->timeoutType;
    }

    public function isIdleTimeout()
    {
        return self::TYPE_IDLE === \$this->timeoutType;
    }

    public function getExceededTimeout()
    {
        switch (\$this->timeoutType) {
            case self::TYPE_GENERAL:
                return \$this->process->getTimeout();

            case self::TYPE_IDLE:
                return \$this->process->getIdleTimeout();

            default:
                throw new \\LogicException(sprintf('Unknown timeout type \"%d\".', \$this->timeoutType));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/process/Exception/ProcessTimedOutException.php";
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
 * Exception that is thrown when a process times out.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ProcessTimedOutException extends RuntimeException
{
    const TYPE_GENERAL = 1;
    const TYPE_IDLE = 2;

    private \$process;
    private \$timeoutType;

    public function __construct(Process \$process, int \$timeoutType)
    {
        \$this->process = \$process;
        \$this->timeoutType = \$timeoutType;

        parent::__construct(sprintf(
            'The process \"%s\" exceeded the timeout of %s seconds.',
            \$process->getCommandLine(),
            \$this->getExceededTimeout()
        ));
    }

    public function getProcess()
    {
        return \$this->process;
    }

    public function isGeneralTimeout()
    {
        return self::TYPE_GENERAL === \$this->timeoutType;
    }

    public function isIdleTimeout()
    {
        return self::TYPE_IDLE === \$this->timeoutType;
    }

    public function getExceededTimeout()
    {
        switch (\$this->timeoutType) {
            case self::TYPE_GENERAL:
                return \$this->process->getTimeout();

            case self::TYPE_IDLE:
                return \$this->process->getIdleTimeout();

            default:
                throw new \\LogicException(sprintf('Unknown timeout type \"%d\".', \$this->timeoutType));
        }
    }
}
", "vendor/symfony/process/Exception/ProcessTimedOutException.php", "/var/www/public/DevLaon/templates/vendor/symfony/process/Exception/ProcessTimedOutException.php");
    }
}
