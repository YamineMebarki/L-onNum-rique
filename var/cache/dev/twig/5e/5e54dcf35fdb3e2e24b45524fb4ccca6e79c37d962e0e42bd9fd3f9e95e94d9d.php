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

/* vendor/monolog/monolog/src/Monolog/Formatter/FluentdFormatter.php */
class __TwigTemplate_a3a57f0cd3a3591ea1c6db9dc800441c949fb39ce16e7c04ea57ee7af681ba57 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/FluentdFormatter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/FluentdFormatter.php"));

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

namespace Monolog\\Formatter;

/**
 * Class FluentdFormatter
 *
 * Serializes a log message to Fluentd unix socket protocol
 *
 * Fluentd config:
 *
 * <source>
 *  type unix
 *  path /var/run/td-agent/td-agent.sock
 * </source>
 *
 * Monolog setup:
 *
 * \$logger = new Monolog\\Logger('fluent.tag');
 * \$fluentHandler = new Monolog\\Handler\\SocketHandler('unix:///var/run/td-agent/td-agent.sock');
 * \$fluentHandler->setFormatter(new Monolog\\Formatter\\FluentdFormatter());
 * \$logger->pushHandler(\$fluentHandler);
 *
 * @author Andrius Putna <fordnox@gmail.com>
 */
class FluentdFormatter implements FormatterInterface
{
    /**
     * @var bool \$levelTag should message level be a part of the fluentd tag
     */
    protected \$levelTag = false;

    public function __construct(\$levelTag = false)
    {
        if (!function_exists('json_encode')) {
            throw new \\RuntimeException('PHP\\'s json extension is required to use Monolog\\'s FluentdUnixFormatter');
        }

        \$this->levelTag = (bool) \$levelTag;
    }

    public function isUsingLevelsInTag()
    {
        return \$this->levelTag;
    }

    public function format(array \$record)
    {
        \$tag = \$record['channel'];
        if (\$this->levelTag) {
            \$tag .= '.' . strtolower(\$record['level_name']);
        }

        \$message = array(
            'message' => \$record['message'],
            'context' => \$record['context'],
            'extra' => \$record['extra'],
        );

        if (!\$this->levelTag) {
            \$message['level'] = \$record['level'];
            \$message['level_name'] = \$record['level_name'];
        }

        return json_encode(array(\$tag, \$record['datetime']->getTimestamp(), \$message));
    }

    public function formatBatch(array \$records)
    {
        \$message = '';
        foreach (\$records as \$record) {
            \$message .= \$this->format(\$record);
        }

        return \$message;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Formatter/FluentdFormatter.php";
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

namespace Monolog\\Formatter;

/**
 * Class FluentdFormatter
 *
 * Serializes a log message to Fluentd unix socket protocol
 *
 * Fluentd config:
 *
 * <source>
 *  type unix
 *  path /var/run/td-agent/td-agent.sock
 * </source>
 *
 * Monolog setup:
 *
 * \$logger = new Monolog\\Logger('fluent.tag');
 * \$fluentHandler = new Monolog\\Handler\\SocketHandler('unix:///var/run/td-agent/td-agent.sock');
 * \$fluentHandler->setFormatter(new Monolog\\Formatter\\FluentdFormatter());
 * \$logger->pushHandler(\$fluentHandler);
 *
 * @author Andrius Putna <fordnox@gmail.com>
 */
class FluentdFormatter implements FormatterInterface
{
    /**
     * @var bool \$levelTag should message level be a part of the fluentd tag
     */
    protected \$levelTag = false;

    public function __construct(\$levelTag = false)
    {
        if (!function_exists('json_encode')) {
            throw new \\RuntimeException('PHP\\'s json extension is required to use Monolog\\'s FluentdUnixFormatter');
        }

        \$this->levelTag = (bool) \$levelTag;
    }

    public function isUsingLevelsInTag()
    {
        return \$this->levelTag;
    }

    public function format(array \$record)
    {
        \$tag = \$record['channel'];
        if (\$this->levelTag) {
            \$tag .= '.' . strtolower(\$record['level_name']);
        }

        \$message = array(
            'message' => \$record['message'],
            'context' => \$record['context'],
            'extra' => \$record['extra'],
        );

        if (!\$this->levelTag) {
            \$message['level'] = \$record['level'];
            \$message['level_name'] = \$record['level_name'];
        }

        return json_encode(array(\$tag, \$record['datetime']->getTimestamp(), \$message));
    }

    public function formatBatch(array \$records)
    {
        \$message = '';
        foreach (\$records as \$record) {
            \$message .= \$this->format(\$record);
        }

        return \$message;
    }
}
", "vendor/monolog/monolog/src/Monolog/Formatter/FluentdFormatter.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Formatter/FluentdFormatter.php");
    }
}
