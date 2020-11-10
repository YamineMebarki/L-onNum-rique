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

/* vendor/symfony/maker-bundle/src/Event/ConsoleErrorSubscriber.php */
class __TwigTemplate_2a2b94d30c743da0e167228c272925342138d955fc0e1c43adecb2602b8dd821 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Event/ConsoleErrorSubscriber.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Event/ConsoleErrorSubscriber.php"));

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

namespace Symfony\\Bundle\\MakerBundle\\Event;

use Symfony\\Bundle\\MakerBundle\\Exception\\RuntimeCommandException;
use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\Console\\Event\\ConsoleErrorEvent;
use Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

/**
 * Prints certain exceptions in a pretty way and silences normal exception handling.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
final class ConsoleErrorSubscriber implements EventSubscriberInterface
{
    private \$setExitCode = false;

    public function onConsoleError(ConsoleErrorEvent \$event)
    {
        if (!\$event->getError() instanceof RuntimeCommandException) {
            return;
        }

        // prevent any visual logging from appearing
        \$event->stopPropagation();
        // prevent the exception from actually being thrown
        \$event->setExitCode(0);
        \$this->setExitCode = true;

        \$io = new SymfonyStyle(\$event->getInput(), \$event->getOutput());
        \$io->error(\$event->getError()->getMessage());
    }

    public function onConsoleTerminate(ConsoleTerminateEvent \$event)
    {
        if (!\$this->setExitCode) {
            return;
        }

        // finally set a non-zero exit code
        \$event->setExitCode(1);
    }

    public static function getSubscribedEvents()
    {
        return [
            ConsoleEvents::ERROR => 'onConsoleError',
            ConsoleEvents::TERMINATE => 'onConsoleTerminate',
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Event/ConsoleErrorSubscriber.php";
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

namespace Symfony\\Bundle\\MakerBundle\\Event;

use Symfony\\Bundle\\MakerBundle\\Exception\\RuntimeCommandException;
use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\Console\\Event\\ConsoleErrorEvent;
use Symfony\\Component\\Console\\Event\\ConsoleTerminateEvent;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

/**
 * Prints certain exceptions in a pretty way and silences normal exception handling.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
final class ConsoleErrorSubscriber implements EventSubscriberInterface
{
    private \$setExitCode = false;

    public function onConsoleError(ConsoleErrorEvent \$event)
    {
        if (!\$event->getError() instanceof RuntimeCommandException) {
            return;
        }

        // prevent any visual logging from appearing
        \$event->stopPropagation();
        // prevent the exception from actually being thrown
        \$event->setExitCode(0);
        \$this->setExitCode = true;

        \$io = new SymfonyStyle(\$event->getInput(), \$event->getOutput());
        \$io->error(\$event->getError()->getMessage());
    }

    public function onConsoleTerminate(ConsoleTerminateEvent \$event)
    {
        if (!\$this->setExitCode) {
            return;
        }

        // finally set a non-zero exit code
        \$event->setExitCode(1);
    }

    public static function getSubscribedEvents()
    {
        return [
            ConsoleEvents::ERROR => 'onConsoleError',
            ConsoleEvents::TERMINATE => 'onConsoleTerminate',
        ];
    }
}
", "vendor/symfony/maker-bundle/src/Event/ConsoleErrorSubscriber.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Event/ConsoleErrorSubscriber.php");
    }
}
