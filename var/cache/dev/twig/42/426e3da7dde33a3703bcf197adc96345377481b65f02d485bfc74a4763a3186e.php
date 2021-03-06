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

/* var/cache/dev/ContainerEObV2MS/getSwiftmailer_TransportService.php */
class __TwigTemplate_eed673b7565cde87a69c31bb667ee7c36afa4fab7131b27d11c96d8eb770f127 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerEObV2MS/getSwiftmailer_TransportService.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/ContainerEObV2MS/getSwiftmailer_TransportService.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'swiftmailer.transport' shared service.

include_once \$this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport.php';
include_once \$this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/SpoolTransport.php';
include_once \$this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Spool.php';
include_once \$this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/MemorySpool.php';
include_once \$this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php';
include_once \$this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php';
include_once \$this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventListener.php';
include_once \$this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SendListener.php';
include_once \$this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/MessageLogger.php';

\$this->services['swiftmailer.transport'] = \$instance = new \\Swift_Transport_SpoolTransport((\$this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? (\$this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \\Swift_Events_SimpleEventDispatcher())), new \\Swift_MemorySpool());

\$instance->registerPlugin((\$this->services['swiftmailer.mailer.default.plugin.messagelogger'] ?? (\$this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \\Swift_Plugins_MessageLogger())));

return \$instance;
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/ContainerEObV2MS/getSwiftmailer_TransportService.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\DependencyInjection\\Argument\\RewindableGenerator;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'swiftmailer.transport' shared service.

include_once \$this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport.php';
include_once \$this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Transport/SpoolTransport.php';
include_once \$this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Spool.php';
include_once \$this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/MemorySpool.php';
include_once \$this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventDispatcher.php';
include_once \$this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SimpleEventDispatcher.php';
include_once \$this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/EventListener.php';
include_once \$this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Events/SendListener.php';
include_once \$this->targetDirs[3].'/vendor/swiftmailer/swiftmailer/lib/classes/Swift/Plugins/MessageLogger.php';

\$this->services['swiftmailer.transport'] = \$instance = new \\Swift_Transport_SpoolTransport((\$this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] ?? (\$this->privates['swiftmailer.mailer.default.transport.eventdispatcher'] = new \\Swift_Events_SimpleEventDispatcher())), new \\Swift_MemorySpool());

\$instance->registerPlugin((\$this->services['swiftmailer.mailer.default.plugin.messagelogger'] ?? (\$this->services['swiftmailer.mailer.default.plugin.messagelogger'] = new \\Swift_Plugins_MessageLogger())));

return \$instance;
", "var/cache/dev/ContainerEObV2MS/getSwiftmailer_TransportService.php", "/var/www/public/DevLaon/templates/var/cache/dev/ContainerEObV2MS/getSwiftmailer_TransportService.php");
    }
}
