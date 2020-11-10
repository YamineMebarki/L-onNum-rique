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

/* vendor/monolog/monolog/src/Monolog/Handler/MailHandler.php */
class __TwigTemplate_0a2b212dc98fdb53941d5c8d7c6daed67c621ee5bc1b0e4534b2102a064d04df extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/MailHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/MailHandler.php"));

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

/**
 * Base class for all mail handlers
 *
 * @author Gyula Sallai
 */
abstract class MailHandler extends AbstractProcessingHandler
{
    /**
     * {@inheritdoc}
     */
    public function handleBatch(array \$records)
    {
        \$messages = array();

        foreach (\$records as \$record) {
            if (\$record['level'] < \$this->level) {
                continue;
            }
            \$messages[] = \$this->processRecord(\$record);
        }

        if (!empty(\$messages)) {
            \$this->send((string) \$this->getFormatter()->formatBatch(\$messages), \$messages);
        }
    }

    /**
     * Send a mail with the given content
     *
     * @param string \$content formatted email body to be sent
     * @param array  \$records the array of log records that formed this content
     */
    abstract protected function send(\$content, array \$records);

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        \$this->send((string) \$record['formatted'], array(\$record));
    }

    protected function getHighestRecord(array \$records)
    {
        \$highestRecord = null;
        foreach (\$records as \$record) {
            if (\$highestRecord === null || \$highestRecord['level'] < \$record['level']) {
                \$highestRecord = \$record;
            }
        }

        return \$highestRecord;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/MailHandler.php";
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

/**
 * Base class for all mail handlers
 *
 * @author Gyula Sallai
 */
abstract class MailHandler extends AbstractProcessingHandler
{
    /**
     * {@inheritdoc}
     */
    public function handleBatch(array \$records)
    {
        \$messages = array();

        foreach (\$records as \$record) {
            if (\$record['level'] < \$this->level) {
                continue;
            }
            \$messages[] = \$this->processRecord(\$record);
        }

        if (!empty(\$messages)) {
            \$this->send((string) \$this->getFormatter()->formatBatch(\$messages), \$messages);
        }
    }

    /**
     * Send a mail with the given content
     *
     * @param string \$content formatted email body to be sent
     * @param array  \$records the array of log records that formed this content
     */
    abstract protected function send(\$content, array \$records);

    /**
     * {@inheritdoc}
     */
    protected function write(array \$record)
    {
        \$this->send((string) \$record['formatted'], array(\$record));
    }

    protected function getHighestRecord(array \$records)
    {
        \$highestRecord = null;
        foreach (\$records as \$record) {
            if (\$highestRecord === null || \$highestRecord['level'] < \$record['level']) {
                \$highestRecord = \$record;
            }
        }

        return \$highestRecord;
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/MailHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/MailHandler.php");
    }
}
