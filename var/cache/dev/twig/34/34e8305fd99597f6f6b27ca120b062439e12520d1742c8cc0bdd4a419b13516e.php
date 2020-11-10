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

/* vendor/symfony/http-kernel/EventListener/DumpListener.php */
class __TwigTemplate_307c803a7e2aa662aeb9423d8347277aa650314fde3c6ced84c1bb54ebe5ee3e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/DumpListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/EventListener/DumpListener.php"));

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

namespace Symfony\\Component\\HttpKernel\\EventListener;

use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface;
use Symfony\\Component\\VarDumper\\Dumper\\DataDumperInterface;
use Symfony\\Component\\VarDumper\\Server\\Connection;
use Symfony\\Component\\VarDumper\\VarDumper;

/**
 * Configures dump() handler.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DumpListener implements EventSubscriberInterface
{
    private \$cloner;
    private \$dumper;
    private \$connection;

    public function __construct(ClonerInterface \$cloner, DataDumperInterface \$dumper, Connection \$connection = null)
    {
        \$this->cloner = \$cloner;
        \$this->dumper = \$dumper;
        \$this->connection = \$connection;
    }

    public function configure()
    {
        \$cloner = \$this->cloner;
        \$dumper = \$this->dumper;
        \$connection = \$this->connection;

        VarDumper::setHandler(static function (\$var) use (\$cloner, \$dumper, \$connection) {
            \$data = \$cloner->cloneVar(\$var);

            if (!\$connection || !\$connection->write(\$data)) {
                \$dumper->dump(\$data);
            }
        });
    }

    public static function getSubscribedEvents()
    {
        if (!class_exists(ConsoleEvents::class)) {
            return [];
        }

        // Register early to have a working dump() as early as possible
        return [ConsoleEvents::COMMAND => ['configure', 1024]];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/EventListener/DumpListener.php";
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

namespace Symfony\\Component\\HttpKernel\\EventListener;

use Symfony\\Component\\Console\\ConsoleEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Component\\VarDumper\\Cloner\\ClonerInterface;
use Symfony\\Component\\VarDumper\\Dumper\\DataDumperInterface;
use Symfony\\Component\\VarDumper\\Server\\Connection;
use Symfony\\Component\\VarDumper\\VarDumper;

/**
 * Configures dump() handler.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DumpListener implements EventSubscriberInterface
{
    private \$cloner;
    private \$dumper;
    private \$connection;

    public function __construct(ClonerInterface \$cloner, DataDumperInterface \$dumper, Connection \$connection = null)
    {
        \$this->cloner = \$cloner;
        \$this->dumper = \$dumper;
        \$this->connection = \$connection;
    }

    public function configure()
    {
        \$cloner = \$this->cloner;
        \$dumper = \$this->dumper;
        \$connection = \$this->connection;

        VarDumper::setHandler(static function (\$var) use (\$cloner, \$dumper, \$connection) {
            \$data = \$cloner->cloneVar(\$var);

            if (!\$connection || !\$connection->write(\$data)) {
                \$dumper->dump(\$data);
            }
        });
    }

    public static function getSubscribedEvents()
    {
        if (!class_exists(ConsoleEvents::class)) {
            return [];
        }

        // Register early to have a working dump() as early as possible
        return [ConsoleEvents::COMMAND => ['configure', 1024]];
    }
}
", "vendor/symfony/http-kernel/EventListener/DumpListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/EventListener/DumpListener.php");
    }
}
