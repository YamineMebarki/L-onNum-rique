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

/* vendor/symfony/console/Descriptor/ApplicationDescription.php */
class __TwigTemplate_ad961821b40910a13837bb93c082c1a53694fcd9ac9451b6f3733b4b6f657d48 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Descriptor/ApplicationDescription.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Descriptor/ApplicationDescription.php"));

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

namespace Symfony\\Component\\Console\\Descriptor;

use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\CommandNotFoundException;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class ApplicationDescription
{
    const GLOBAL_NAMESPACE = '_global';

    private \$application;
    private \$namespace;
    private \$showHidden;

    /**
     * @var array
     */
    private \$namespaces;

    /**
     * @var Command[]
     */
    private \$commands;

    /**
     * @var Command[]
     */
    private \$aliases;

    public function __construct(Application \$application, string \$namespace = null, bool \$showHidden = false)
    {
        \$this->application = \$application;
        \$this->namespace = \$namespace;
        \$this->showHidden = \$showHidden;
    }

    /**
     * @return array
     */
    public function getNamespaces()
    {
        if (null === \$this->namespaces) {
            \$this->inspectApplication();
        }

        return \$this->namespaces;
    }

    /**
     * @return Command[]
     */
    public function getCommands()
    {
        if (null === \$this->commands) {
            \$this->inspectApplication();
        }

        return \$this->commands;
    }

    /**
     * @param string \$name
     *
     * @return Command
     *
     * @throws CommandNotFoundException
     */
    public function getCommand(\$name)
    {
        if (!isset(\$this->commands[\$name]) && !isset(\$this->aliases[\$name])) {
            throw new CommandNotFoundException(sprintf('Command %s does not exist.', \$name));
        }

        return isset(\$this->commands[\$name]) ? \$this->commands[\$name] : \$this->aliases[\$name];
    }

    private function inspectApplication()
    {
        \$this->commands = [];
        \$this->namespaces = [];

        \$all = \$this->application->all(\$this->namespace ? \$this->application->findNamespace(\$this->namespace) : null);
        foreach (\$this->sortCommands(\$all) as \$namespace => \$commands) {
            \$names = [];

            /** @var Command \$command */
            foreach (\$commands as \$name => \$command) {
                if (!\$command->getName() || (!\$this->showHidden && \$command->isHidden())) {
                    continue;
                }

                if (\$command->getName() === \$name) {
                    \$this->commands[\$name] = \$command;
                } else {
                    \$this->aliases[\$name] = \$command;
                }

                \$names[] = \$name;
            }

            \$this->namespaces[\$namespace] = ['id' => \$namespace, 'commands' => \$names];
        }
    }

    private function sortCommands(array \$commands): array
    {
        \$namespacedCommands = [];
        \$globalCommands = [];
        foreach (\$commands as \$name => \$command) {
            \$key = \$this->application->extractNamespace(\$name, 1);
            if (!\$key) {
                \$globalCommands['_global'][\$name] = \$command;
            } else {
                \$namespacedCommands[\$key][\$name] = \$command;
            }
        }
        ksort(\$namespacedCommands);
        \$namespacedCommands = array_merge(\$globalCommands, \$namespacedCommands);

        foreach (\$namespacedCommands as &\$commandsSet) {
            ksort(\$commandsSet);
        }
        // unset reference to keep scope clear
        unset(\$commandsSet);

        return \$namespacedCommands;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Descriptor/ApplicationDescription.php";
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

namespace Symfony\\Component\\Console\\Descriptor;

use Symfony\\Component\\Console\\Application;
use Symfony\\Component\\Console\\Command\\Command;
use Symfony\\Component\\Console\\Exception\\CommandNotFoundException;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class ApplicationDescription
{
    const GLOBAL_NAMESPACE = '_global';

    private \$application;
    private \$namespace;
    private \$showHidden;

    /**
     * @var array
     */
    private \$namespaces;

    /**
     * @var Command[]
     */
    private \$commands;

    /**
     * @var Command[]
     */
    private \$aliases;

    public function __construct(Application \$application, string \$namespace = null, bool \$showHidden = false)
    {
        \$this->application = \$application;
        \$this->namespace = \$namespace;
        \$this->showHidden = \$showHidden;
    }

    /**
     * @return array
     */
    public function getNamespaces()
    {
        if (null === \$this->namespaces) {
            \$this->inspectApplication();
        }

        return \$this->namespaces;
    }

    /**
     * @return Command[]
     */
    public function getCommands()
    {
        if (null === \$this->commands) {
            \$this->inspectApplication();
        }

        return \$this->commands;
    }

    /**
     * @param string \$name
     *
     * @return Command
     *
     * @throws CommandNotFoundException
     */
    public function getCommand(\$name)
    {
        if (!isset(\$this->commands[\$name]) && !isset(\$this->aliases[\$name])) {
            throw new CommandNotFoundException(sprintf('Command %s does not exist.', \$name));
        }

        return isset(\$this->commands[\$name]) ? \$this->commands[\$name] : \$this->aliases[\$name];
    }

    private function inspectApplication()
    {
        \$this->commands = [];
        \$this->namespaces = [];

        \$all = \$this->application->all(\$this->namespace ? \$this->application->findNamespace(\$this->namespace) : null);
        foreach (\$this->sortCommands(\$all) as \$namespace => \$commands) {
            \$names = [];

            /** @var Command \$command */
            foreach (\$commands as \$name => \$command) {
                if (!\$command->getName() || (!\$this->showHidden && \$command->isHidden())) {
                    continue;
                }

                if (\$command->getName() === \$name) {
                    \$this->commands[\$name] = \$command;
                } else {
                    \$this->aliases[\$name] = \$command;
                }

                \$names[] = \$name;
            }

            \$this->namespaces[\$namespace] = ['id' => \$namespace, 'commands' => \$names];
        }
    }

    private function sortCommands(array \$commands): array
    {
        \$namespacedCommands = [];
        \$globalCommands = [];
        foreach (\$commands as \$name => \$command) {
            \$key = \$this->application->extractNamespace(\$name, 1);
            if (!\$key) {
                \$globalCommands['_global'][\$name] = \$command;
            } else {
                \$namespacedCommands[\$key][\$name] = \$command;
            }
        }
        ksort(\$namespacedCommands);
        \$namespacedCommands = array_merge(\$globalCommands, \$namespacedCommands);

        foreach (\$namespacedCommands as &\$commandsSet) {
            ksort(\$commandsSet);
        }
        // unset reference to keep scope clear
        unset(\$commandsSet);

        return \$namespacedCommands;
    }
}
", "vendor/symfony/console/Descriptor/ApplicationDescription.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Descriptor/ApplicationDescription.php");
    }
}
