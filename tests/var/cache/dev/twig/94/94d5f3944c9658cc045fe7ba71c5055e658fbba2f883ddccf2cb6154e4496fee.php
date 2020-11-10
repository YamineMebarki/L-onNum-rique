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

/* vendor/monolog/monolog/src/Monolog/Handler/PsrHandler.php */
class __TwigTemplate_52c409e2a5745aba75b0629f4e715e1739486c0bfb39be58abdd19b3c56f70c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/PsrHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/PsrHandler.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Handler;

use Monolog\\Logger;
use Psr\\Log\\LoggerInterface;

/**
 * Proxies log messages to an existing PSR-3 compliant logger.
 *
 * @author Michael Moussa <michael.moussa@gmail.com>
 */
class PsrHandler extends AbstractHandler
{
    /**
     * PSR-3 compliant logger
     *
     * @var LoggerInterface
     */
    protected \$logger;

    /**
     * @param LoggerInterface \$logger The underlying PSR-3 compliant logger to which messages will be proxied
     * @param int             \$level  The minimum logging level at which this handler will be triggered
     * @param bool            \$bubble Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(LoggerInterface \$logger, \$level = Logger::DEBUG, \$bubble = true)
    {
        parent::__construct(\$level, \$bubble);

        \$this->logger = \$logger;
    }

    /**
     * {@inheritDoc}
     */
    public function handle(array \$record)
    {
        if (!\$this->isHandling(\$record)) {
            return false;
        }

        \$this->logger->log(strtolower(\$record['level_name']), \$record['message'], \$record['context']);

        return false === \$this->bubble;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/PsrHandler.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\\Handler;

use Monolog\\Logger;
use Psr\\Log\\LoggerInterface;

/**
 * Proxies log messages to an existing PSR-3 compliant logger.
 *
 * @author Michael Moussa <michael.moussa@gmail.com>
 */
class PsrHandler extends AbstractHandler
{
    /**
     * PSR-3 compliant logger
     *
     * @var LoggerInterface
     */
    protected \$logger;

    /**
     * @param LoggerInterface \$logger The underlying PSR-3 compliant logger to which messages will be proxied
     * @param int             \$level  The minimum logging level at which this handler will be triggered
     * @param bool            \$bubble Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(LoggerInterface \$logger, \$level = Logger::DEBUG, \$bubble = true)
    {
        parent::__construct(\$level, \$bubble);

        \$this->logger = \$logger;
    }

    /**
     * {@inheritDoc}
     */
    public function handle(array \$record)
    {
        if (!\$this->isHandling(\$record)) {
            return false;
        }

        \$this->logger->log(strtolower(\$record['level_name']), \$record['message'], \$record['context']);

        return false === \$this->bubble;
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/PsrHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/PsrHandler.php");
    }
}
