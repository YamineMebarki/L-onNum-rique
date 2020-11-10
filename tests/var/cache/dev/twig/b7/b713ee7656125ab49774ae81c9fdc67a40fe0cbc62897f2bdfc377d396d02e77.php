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

/* vendor/monolog/monolog/src/Monolog/Formatter/FlowdockFormatter.php */
class __TwigTemplate_8f69705109fde16c489df7093b11900b44c20beb095c2871de9af92e32614588 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/FlowdockFormatter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/FlowdockFormatter.php"));

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
 * formats the record to be used in the FlowdockHandler
 *
 * @author Dominik Liebler <liebler.dominik@gmail.com>
 */
class FlowdockFormatter implements FormatterInterface
{
    /**
     * @var string
     */
    private \$source;

    /**
     * @var string
     */
    private \$sourceEmail;

    /**
     * @param string \$source
     * @param string \$sourceEmail
     */
    public function __construct(\$source, \$sourceEmail)
    {
        \$this->source = \$source;
        \$this->sourceEmail = \$sourceEmail;
    }

    /**
     * {@inheritdoc}
     */
    public function format(array \$record)
    {
        \$tags = array(
            '#log',
            '#' . strtolower(\$record['level_name']),
            '#' . \$record['channel'],
        );

        foreach (\$record['extra'] as \$value) {
            \$tags[] = '#' . \$value;
        }

        \$subject = sprintf(
            'in %s: %s - %s',
            \$this->source,
            \$record['level_name'],
            \$this->getShortMessage(\$record['message'])
        );

        \$record['flowdock'] = array(
            'source' => \$this->source,
            'from_address' => \$this->sourceEmail,
            'subject' => \$subject,
            'content' => \$record['message'],
            'tags' => \$tags,
            'project' => \$this->source,
        );

        return \$record;
    }

    /**
     * {@inheritdoc}
     */
    public function formatBatch(array \$records)
    {
        \$formatted = array();

        foreach (\$records as \$record) {
            \$formatted[] = \$this->format(\$record);
        }

        return \$formatted;
    }

    /**
     * @param string \$message
     *
     * @return string
     */
    public function getShortMessage(\$message)
    {
        static \$hasMbString;

        if (null === \$hasMbString) {
            \$hasMbString = function_exists('mb_strlen');
        }

        \$maxLength = 45;

        if (\$hasMbString) {
            if (mb_strlen(\$message, 'UTF-8') > \$maxLength) {
                \$message = mb_substr(\$message, 0, \$maxLength - 4, 'UTF-8') . ' ...';
            }
        } else {
            if (strlen(\$message) > \$maxLength) {
                \$message = substr(\$message, 0, \$maxLength - 4) . ' ...';
            }
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
        return "vendor/monolog/monolog/src/Monolog/Formatter/FlowdockFormatter.php";
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
 * formats the record to be used in the FlowdockHandler
 *
 * @author Dominik Liebler <liebler.dominik@gmail.com>
 */
class FlowdockFormatter implements FormatterInterface
{
    /**
     * @var string
     */
    private \$source;

    /**
     * @var string
     */
    private \$sourceEmail;

    /**
     * @param string \$source
     * @param string \$sourceEmail
     */
    public function __construct(\$source, \$sourceEmail)
    {
        \$this->source = \$source;
        \$this->sourceEmail = \$sourceEmail;
    }

    /**
     * {@inheritdoc}
     */
    public function format(array \$record)
    {
        \$tags = array(
            '#log',
            '#' . strtolower(\$record['level_name']),
            '#' . \$record['channel'],
        );

        foreach (\$record['extra'] as \$value) {
            \$tags[] = '#' . \$value;
        }

        \$subject = sprintf(
            'in %s: %s - %s',
            \$this->source,
            \$record['level_name'],
            \$this->getShortMessage(\$record['message'])
        );

        \$record['flowdock'] = array(
            'source' => \$this->source,
            'from_address' => \$this->sourceEmail,
            'subject' => \$subject,
            'content' => \$record['message'],
            'tags' => \$tags,
            'project' => \$this->source,
        );

        return \$record;
    }

    /**
     * {@inheritdoc}
     */
    public function formatBatch(array \$records)
    {
        \$formatted = array();

        foreach (\$records as \$record) {
            \$formatted[] = \$this->format(\$record);
        }

        return \$formatted;
    }

    /**
     * @param string \$message
     *
     * @return string
     */
    public function getShortMessage(\$message)
    {
        static \$hasMbString;

        if (null === \$hasMbString) {
            \$hasMbString = function_exists('mb_strlen');
        }

        \$maxLength = 45;

        if (\$hasMbString) {
            if (mb_strlen(\$message, 'UTF-8') > \$maxLength) {
                \$message = mb_substr(\$message, 0, \$maxLength - 4, 'UTF-8') . ' ...';
            }
        } else {
            if (strlen(\$message) > \$maxLength) {
                \$message = substr(\$message, 0, \$maxLength - 4) . ' ...';
            }
        }

        return \$message;
    }
}
", "vendor/monolog/monolog/src/Monolog/Formatter/FlowdockFormatter.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Formatter/FlowdockFormatter.php");
    }
}
