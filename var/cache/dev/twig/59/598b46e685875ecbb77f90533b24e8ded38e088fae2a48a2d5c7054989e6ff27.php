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

/* vendor/symfony/monolog-bridge/Handler/SwiftMailerHandler.php */
class __TwigTemplate_32bf9b72746d5b6eb05c1f5e3df5f3bb6783a161875e40bf21261ec4d4accd7f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Handler/SwiftMailerHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Handler/SwiftMailerHandler.php"));

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

namespace Symfony\\Bridge\\Monolog\\Handler;

use Monolog\\Handler\\SwiftMailerHandler as BaseSwiftMailerHandler;
use Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent;
use Symfony\\Component\\HttpKernel\\Event\\PostResponseEvent;

/**
 * Extended SwiftMailerHandler that flushes mail queue if necessary.
 *
 * @author Philipp Kräutli <pkraeutli@astina.ch>
 *
 * @final since Symfony 4.3
 */
class SwiftMailerHandler extends BaseSwiftMailerHandler
{
    protected \$transport;

    protected \$instantFlush = false;

    public function setTransport(\\Swift_Transport \$transport)
    {
        \$this->transport = \$transport;
    }

    /**
     * After the kernel has been terminated we will always flush messages.
     */
    public function onKernelTerminate(PostResponseEvent \$event)
    {
        \$this->instantFlush = true;
    }

    /**
     * After the CLI application has been terminated we will always flush messages.
     */
    public function onCliTerminate(ConsoleTerminateEvent \$event)
    {
        \$this->instantFlush = true;
    }

    /**
     * {@inheritdoc}
     */
    protected function send(\$content, array \$records)
    {
        parent::send(\$content, \$records);

        if (\$this->instantFlush) {
            \$this->flushMemorySpool();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->flushMemorySpool();
    }

    /**
     * Flushes the mail queue if a memory spool is used.
     */
    private function flushMemorySpool()
    {
        \$mailerTransport = \$this->mailer->getTransport();
        if (!\$mailerTransport instanceof \\Swift_Transport_SpoolTransport) {
            return;
        }

        \$spool = \$mailerTransport->getSpool();
        if (!\$spool instanceof \\Swift_MemorySpool) {
            return;
        }

        if (null === \$this->transport) {
            throw new \\Exception('No transport available to flush mail queue');
        }

        \$spool->flushQueue(\$this->transport);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bridge/Handler/SwiftMailerHandler.php";
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

namespace Symfony\\Bridge\\Monolog\\Handler;

use Monolog\\Handler\\SwiftMailerHandler as BaseSwiftMailerHandler;
use Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent;
use Symfony\\Component\\HttpKernel\\Event\\PostResponseEvent;

/**
 * Extended SwiftMailerHandler that flushes mail queue if necessary.
 *
 * @author Philipp Kräutli <pkraeutli@astina.ch>
 *
 * @final since Symfony 4.3
 */
class SwiftMailerHandler extends BaseSwiftMailerHandler
{
    protected \$transport;

    protected \$instantFlush = false;

    public function setTransport(\\Swift_Transport \$transport)
    {
        \$this->transport = \$transport;
    }

    /**
     * After the kernel has been terminated we will always flush messages.
     */
    public function onKernelTerminate(PostResponseEvent \$event)
    {
        \$this->instantFlush = true;
    }

    /**
     * After the CLI application has been terminated we will always flush messages.
     */
    public function onCliTerminate(ConsoleTerminateEvent \$event)
    {
        \$this->instantFlush = true;
    }

    /**
     * {@inheritdoc}
     */
    protected function send(\$content, array \$records)
    {
        parent::send(\$content, \$records);

        if (\$this->instantFlush) {
            \$this->flushMemorySpool();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        \$this->flushMemorySpool();
    }

    /**
     * Flushes the mail queue if a memory spool is used.
     */
    private function flushMemorySpool()
    {
        \$mailerTransport = \$this->mailer->getTransport();
        if (!\$mailerTransport instanceof \\Swift_Transport_SpoolTransport) {
            return;
        }

        \$spool = \$mailerTransport->getSpool();
        if (!\$spool instanceof \\Swift_MemorySpool) {
            return;
        }

        if (null === \$this->transport) {
            throw new \\Exception('No transport available to flush mail queue');
        }

        \$spool->flushQueue(\$this->transport);
    }
}
", "vendor/symfony/monolog-bridge/Handler/SwiftMailerHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Handler/SwiftMailerHandler.php");
    }
}
