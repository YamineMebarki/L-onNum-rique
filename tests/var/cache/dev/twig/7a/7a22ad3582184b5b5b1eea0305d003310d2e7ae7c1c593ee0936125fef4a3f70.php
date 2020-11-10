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

/* vendor/symfony/debug-bundle/Command/ServerDumpPlaceholderCommand.php */
class __TwigTemplate_85b00fa66229d0a0e2ece8671c603c02a0e1c6041e15f6118f06ca78b5070171 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug-bundle/Command/ServerDumpPlaceholderCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/debug-bundle/Command/ServerDumpPlaceholderCommand.php"));

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

namespace Symfony\\Bundle\\DebugBundle\\Command;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand;
use Symfony\\Component\\VarDumper\\Server\\DumpServer;

/**
 * A placeholder command easing VarDumper server discovery.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 *
 * @internal
 */
class ServerDumpPlaceholderCommand extends Command
{
    private \$replacedCommand;

    public function __construct(DumpServer \$server = null, array \$descriptors = [])
    {
        \$this->replacedCommand = new ServerDumpCommand((new \\ReflectionClass(DumpServer::class))->newInstanceWithoutConstructor(), \$descriptors);

        parent::__construct();
    }

    protected function configure()
    {
        \$this->setDefinition(\$this->replacedCommand->getDefinition());
        \$this->setHelp(\$this->replacedCommand->getHelp());
        \$this->setDescription(\$this->replacedCommand->getDescription());
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        (new SymfonyStyle(\$input, \$output))->getErrorStyle()->warning('In order to use the VarDumper server, set the \"debug.dump_destination\" config option to \"tcp://%env(VAR_DUMPER_SERVER)%\"');

        return 8;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/debug-bundle/Command/ServerDumpPlaceholderCommand.php";
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

namespace Symfony\\Bundle\\DebugBundle\\Command;

use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Input\\InputInterface;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\VarDumper\\Command\\ServerDumpCommand;
use Symfony\\Component\\VarDumper\\Server\\DumpServer;

/**
 * A placeholder command easing VarDumper server discovery.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 *
 * @internal
 */
class ServerDumpPlaceholderCommand extends Command
{
    private \$replacedCommand;

    public function __construct(DumpServer \$server = null, array \$descriptors = [])
    {
        \$this->replacedCommand = new ServerDumpCommand((new \\ReflectionClass(DumpServer::class))->newInstanceWithoutConstructor(), \$descriptors);

        parent::__construct();
    }

    protected function configure()
    {
        \$this->setDefinition(\$this->replacedCommand->getDefinition());
        \$this->setHelp(\$this->replacedCommand->getHelp());
        \$this->setDescription(\$this->replacedCommand->getDescription());
    }

    protected function execute(InputInterface \$input, OutputInterface \$output)
    {
        (new SymfonyStyle(\$input, \$output))->getErrorStyle()->warning('In order to use the VarDumper server, set the \"debug.dump_destination\" config option to \"tcp://%env(VAR_DUMPER_SERVER)%\"');

        return 8;
    }
}
", "vendor/symfony/debug-bundle/Command/ServerDumpPlaceholderCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/debug-bundle/Command/ServerDumpPlaceholderCommand.php");
    }
}
