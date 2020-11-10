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

/* vendor/monolog/monolog/src/Monolog/Handler/ErrorLogHandler.php */
class __TwigTemplate_e4a92ab34a7abfab9ddb0dad36d5cc1a471d9f3c4aa8e2a84d705556465cb6c0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/ErrorLogHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/ErrorLogHandler.php"));

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

use Monolog\\Formatter\\LineFormatter;
use Monolog\\Logger;

/**
 * Stores to PHP error_log() handler.
 *
 * @author Elan Ruusamäe <glen@delfi.ee>
 */
class ErrorLogHandler extends AbstractProcessingHandler
{
    const OPERATING_SYSTEM = 0;
    const SAPI = 4;

    protected \$messageType;
    protected \$expandNewlines;

    /**
     * @param int  \$messageType    Says where the error should go.
     * @param int  \$level          The minimum logging level at which this handler will be triggered
     * @param bool \$bubble         Whether the messages that are handled can bubble up the stack or not
     * @param bool \$expandNewlines If set to true, newlines in the message will be expanded to be take multiple log entries
     */
    public function __construct(\$messageType = self::OPERATING_SYSTEM, \$level = Logger::DEBUG, \$bubble = true, \$expandNewlines = false)
    {
        parent::__construct(\$level, \$bubble);

        if (false === in_array(\$messageType, self::getAvailableTypes())) {
            \$message = sprintf('The given message type \"%s\" is not supported', print_r(\$messageType, true));
            throw new \\InvalidArgumentException(\$message);
        }

        \$this->messageType = \$messageType;
        \$this->expandNewlines = \$expandNewlines;
    }

    /**
     * @return array With all available types
     */
    public static function getAvailableTypes()
    {
        return array(
            self::OPERATING_SYSTEM,
            self::SAPI,
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new LineFormatter('[%datetime%] %channel%.%level_name%: %message% %context% %extra%');
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        if (\$this->expandNewlines) {
            \$lines = preg_split('{[\\r\\n]+}', (string) \$record['formatted']);
            foreach (\$lines as \$line) {
                error_log(\$line, \$this->messageType);
            }
        } else {
            error_log((string) \$record['formatted'], \$this->messageType);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/ErrorLogHandler.php";
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

use Monolog\\Formatter\\LineFormatter;
use Monolog\\Logger;

/**
 * Stores to PHP error_log() handler.
 *
 * @author Elan Ruusamäe <glen@delfi.ee>
 */
class ErrorLogHandler extends AbstractProcessingHandler
{
    const OPERATING_SYSTEM = 0;
    const SAPI = 4;

    protected \$messageType;
    protected \$expandNewlines;

    /**
     * @param int  \$messageType    Says where the error should go.
     * @param int  \$level          The minimum logging level at which this handler will be triggered
     * @param bool \$bubble         Whether the messages that are handled can bubble up the stack or not
     * @param bool \$expandNewlines If set to true, newlines in the message will be expanded to be take multiple log entries
     */
    public function __construct(\$messageType = self::OPERATING_SYSTEM, \$level = Logger::DEBUG, \$bubble = true, \$expandNewlines = false)
    {
        parent::__construct(\$level, \$bubble);

        if (false === in_array(\$messageType, self::getAvailableTypes())) {
            \$message = sprintf('The given message type \"%s\" is not supported', print_r(\$messageType, true));
            throw new \\InvalidArgumentException(\$message);
        }

        \$this->messageType = \$messageType;
        \$this->expandNewlines = \$expandNewlines;
    }

    /**
     * @return array With all available types
     */
    public static function getAvailableTypes()
    {
        return array(
            self::OPERATING_SYSTEM,
            self::SAPI,
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new LineFormatter('[%datetime%] %channel%.%level_name%: %message% %context% %extra%');
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        if (\$this->expandNewlines) {
            \$lines = preg_split('{[\\r\\n]+}', (string) \$record['formatted']);
            foreach (\$lines as \$line) {
                error_log(\$line, \$this->messageType);
            }
        } else {
            error_log((string) \$record['formatted'], \$this->messageType);
        }
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/ErrorLogHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/ErrorLogHandler.php");
    }
}
