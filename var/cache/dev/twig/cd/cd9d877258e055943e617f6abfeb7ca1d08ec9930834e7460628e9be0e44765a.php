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

/* vendor/symfony/monolog-bridge/Processor/ConsoleCommandProcessor.php */
class __TwigTemplate_5eba55ea111de1ca0741b50b1ba6a8a0932d48c3d8c45a65d202dfa50994c63d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Processor/ConsoleCommandProcessor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Processor/ConsoleCommandProcessor.php"));

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

namespace Symfony\\Bridge\\Monolog\\Processor;

use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\Console\\Event\\ConsoleEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * Adds the current console command information to the log entry.
 *
 * @author Piotr Stankowski <git@trakos.pl>
 */
class ConsoleCommandProcessor implements EventSubscriberInterface, ResetInterface
{
    private \$commandData;
    private \$includeArguments;
    private \$includeOptions;

    public function __construct(bool \$includeArguments = true, bool \$includeOptions = false)
    {
        \$this->includeArguments = \$includeArguments;
        \$this->includeOptions = \$includeOptions;
    }

    public function __invoke(array \$records)
    {
        if (null !== \$this->commandData && !isset(\$records['extra']['command'])) {
            \$records['extra']['command'] = \$this->commandData;
        }

        return \$records;
    }

    public function reset()
    {
        \$this->commandData = null;
    }

    public function addCommandData(ConsoleEvent \$event)
    {
        \$this->commandData = [
            'name' => \$event->getCommand()->getName(),
        ];
        if (\$this->includeArguments) {
            \$this->commandData['arguments'] = \$event->getInput()->getArguments();
        }
        if (\$this->includeOptions) {
            \$this->commandData['options'] = \$event->getInput()->getOptions();
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            ConsoleEvents::COMMAND => ['addCommandData', 1],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bridge/Processor/ConsoleCommandProcessor.php";
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

namespace Symfony\\Bridge\\Monolog\\Processor;

use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\Console\\Event\\ConsoleEvent;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Contracts\\Service\\ResetInterface;

/**
 * Adds the current console command information to the log entry.
 *
 * @author Piotr Stankowski <git@trakos.pl>
 */
class ConsoleCommandProcessor implements EventSubscriberInterface, ResetInterface
{
    private \$commandData;
    private \$includeArguments;
    private \$includeOptions;

    public function __construct(bool \$includeArguments = true, bool \$includeOptions = false)
    {
        \$this->includeArguments = \$includeArguments;
        \$this->includeOptions = \$includeOptions;
    }

    public function __invoke(array \$records)
    {
        if (null !== \$this->commandData && !isset(\$records['extra']['command'])) {
            \$records['extra']['command'] = \$this->commandData;
        }

        return \$records;
    }

    public function reset()
    {
        \$this->commandData = null;
    }

    public function addCommandData(ConsoleEvent \$event)
    {
        \$this->commandData = [
            'name' => \$event->getCommand()->getName(),
        ];
        if (\$this->includeArguments) {
            \$this->commandData['arguments'] = \$event->getInput()->getArguments();
        }
        if (\$this->includeOptions) {
            \$this->commandData['options'] = \$event->getInput()->getOptions();
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            ConsoleEvents::COMMAND => ['addCommandData', 1],
        ];
    }
}
", "vendor/symfony/monolog-bridge/Processor/ConsoleCommandProcessor.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Processor/ConsoleCommandProcessor.php");
    }
}
