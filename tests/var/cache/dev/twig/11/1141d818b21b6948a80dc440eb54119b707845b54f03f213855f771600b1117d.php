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

/* vendor/symfony/phpunit-bridge/Legacy/CommandForV6.php */
class __TwigTemplate_cd9d9f500c9f51fcac033cdefd9c0fea825b2ce77e81e458baf5190ecb422a60 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Legacy/CommandForV6.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/phpunit-bridge/Legacy/CommandForV6.php"));

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

namespace Symfony\\Bridge\\PhpUnit\\Legacy;

use PHPUnit\\TextUI\\Command as BaseCommand;
use PHPUnit\\TextUI\\TestRunner as BaseRunner;
use PHPUnit\\Util\\Configuration;
use Symfony\\Bridge\\PhpUnit\\SymfonyTestsListener;

/**
 * {@inheritdoc}
 *
 * @internal
 */
class CommandForV6 extends BaseCommand
{
    /**
     * {@inheritdoc}
     */
    protected function createRunner(): BaseRunner
    {
        \$this->arguments['listeners'] = isset(\$this->arguments['listeners']) ? \$this->arguments['listeners'] : [];

        \$registeredLocally = false;

        foreach (\$this->arguments['listeners'] as \$registeredListener) {
            if (\$registeredListener instanceof SymfonyTestsListener) {
                \$registeredListener->globalListenerDisabled();
                \$registeredLocally = true;
                break;
            }
        }

        if (isset(\$this->arguments['configuration'])) {
            \$configuration = \$this->arguments['configuration'];
            if (!\$configuration instanceof Configuration) {
                \$configuration = Configuration::getInstance(\$this->arguments['configuration']);
            }
            foreach (\$configuration->getListenerConfiguration() as \$registeredListener) {
                if ('Symfony\\Bridge\\PhpUnit\\SymfonyTestsListener' === ltrim(\$registeredListener['class'], '\\\\')) {
                    \$registeredLocally = true;
                    break;
                }
            }
        }

        if (!\$registeredLocally) {
            \$this->arguments['listeners'][] = new SymfonyTestsListener();
        }

        return parent::createRunner();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/phpunit-bridge/Legacy/CommandForV6.php";
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

namespace Symfony\\Bridge\\PhpUnit\\Legacy;

use PHPUnit\\TextUI\\Command as BaseCommand;
use PHPUnit\\TextUI\\TestRunner as BaseRunner;
use PHPUnit\\Util\\Configuration;
use Symfony\\Bridge\\PhpUnit\\SymfonyTestsListener;

/**
 * {@inheritdoc}
 *
 * @internal
 */
class CommandForV6 extends BaseCommand
{
    /**
     * {@inheritdoc}
     */
    protected function createRunner(): BaseRunner
    {
        \$this->arguments['listeners'] = isset(\$this->arguments['listeners']) ? \$this->arguments['listeners'] : [];

        \$registeredLocally = false;

        foreach (\$this->arguments['listeners'] as \$registeredListener) {
            if (\$registeredListener instanceof SymfonyTestsListener) {
                \$registeredListener->globalListenerDisabled();
                \$registeredLocally = true;
                break;
            }
        }

        if (isset(\$this->arguments['configuration'])) {
            \$configuration = \$this->arguments['configuration'];
            if (!\$configuration instanceof Configuration) {
                \$configuration = Configuration::getInstance(\$this->arguments['configuration']);
            }
            foreach (\$configuration->getListenerConfiguration() as \$registeredListener) {
                if ('Symfony\\Bridge\\PhpUnit\\SymfonyTestsListener' === ltrim(\$registeredListener['class'], '\\\\')) {
                    \$registeredLocally = true;
                    break;
                }
            }
        }

        if (!\$registeredLocally) {
            \$this->arguments['listeners'][] = new SymfonyTestsListener();
        }

        return parent::createRunner();
    }
}
", "vendor/symfony/phpunit-bridge/Legacy/CommandForV6.php", "/var/www/public/DevLaon/templates/vendor/symfony/phpunit-bridge/Legacy/CommandForV6.php");
    }
}
