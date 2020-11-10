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

/* vendor/monolog/monolog/src/Monolog/Handler/GelfHandler.php */
class __TwigTemplate_7c23033910df9e30efd5e81b19bb7fea3926a32e66a0655f1c28534248d430f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/GelfHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/GelfHandler.php"));

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

use Gelf\\IMessagePublisher;
use Gelf\\PublisherInterface;
use Gelf\\Publisher;
use InvalidArgumentException;
use Monolog\\Logger;
use Monolog\\Formatter\\GelfMessageFormatter;

/**
 * Handler to send messages to a Graylog2 (http://www.graylog2.org) server
 *
 * @author Matt Lehner <mlehner@gmail.com>
 * @author Benjamin Zikarsky <benjamin@zikarsky.de>
 */
class GelfHandler extends AbstractProcessingHandler
{
    /**
     * @var Publisher the publisher object that sends the message to the server
     */
    protected \$publisher;

    /**
     * @param PublisherInterface|IMessagePublisher|Publisher \$publisher a publisher object
     * @param int                                            \$level     The minimum logging level at which this handler will be triggered
     * @param bool                                           \$bubble    Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\$publisher, \$level = Logger::DEBUG, \$bubble = true)
    {
        parent::__construct(\$level, \$bubble);

        if (!\$publisher instanceof Publisher && !\$publisher instanceof IMessagePublisher && !\$publisher instanceof PublisherInterface) {
            throw new InvalidArgumentException('Invalid publisher, expected a Gelf\\Publisher, Gelf\\IMessagePublisher or Gelf\\PublisherInterface instance');
        }

        \$this->publisher = \$publisher;
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        \$this->publisher->publish(\$record['formatted']);
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new GelfMessageFormatter();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/GelfHandler.php";
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

use Gelf\\IMessagePublisher;
use Gelf\\PublisherInterface;
use Gelf\\Publisher;
use InvalidArgumentException;
use Monolog\\Logger;
use Monolog\\Formatter\\GelfMessageFormatter;

/**
 * Handler to send messages to a Graylog2 (http://www.graylog2.org) server
 *
 * @author Matt Lehner <mlehner@gmail.com>
 * @author Benjamin Zikarsky <benjamin@zikarsky.de>
 */
class GelfHandler extends AbstractProcessingHandler
{
    /**
     * @var Publisher the publisher object that sends the message to the server
     */
    protected \$publisher;

    /**
     * @param PublisherInterface|IMessagePublisher|Publisher \$publisher a publisher object
     * @param int                                            \$level     The minimum logging level at which this handler will be triggered
     * @param bool                                           \$bubble    Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\$publisher, \$level = Logger::DEBUG, \$bubble = true)
    {
        parent::__construct(\$level, \$bubble);

        if (!\$publisher instanceof Publisher && !\$publisher instanceof IMessagePublisher && !\$publisher instanceof PublisherInterface) {
            throw new InvalidArgumentException('Invalid publisher, expected a Gelf\\Publisher, Gelf\\IMessagePublisher or Gelf\\PublisherInterface instance');
        }

        \$this->publisher = \$publisher;
    }

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        \$this->publisher->publish(\$record['formatted']);
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new GelfMessageFormatter();
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/GelfHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/GelfHandler.php");
    }
}
