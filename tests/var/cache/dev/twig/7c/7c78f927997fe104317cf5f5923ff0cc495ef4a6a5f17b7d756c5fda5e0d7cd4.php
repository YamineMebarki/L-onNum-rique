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

/* vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php */
class __TwigTemplate_a8d3db30c1739e163dcba7f2cbb95fb796ab4069cb700131b6294ebab8afac56 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php"));

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

namespace Monolog\\Processor;

use Monolog\\Utils;

/**
 * Processes a record's message according to PSR-3 rules
 *
 * It replaces {foo} with the value from \$context['foo']
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class PsrLogMessageProcessor implements ProcessorInterface
{
    /**
     * @param  array \$record
     * @return array
     */
    public function __invoke(array \$record)
    {
        if (false === strpos(\$record['message'], '{')) {
            return \$record;
        }

        \$replacements = array();
        foreach (\$record['context'] as \$key => \$val) {
            if (is_null(\$val) || is_scalar(\$val) || (is_object(\$val) && method_exists(\$val, \"__toString\"))) {
                \$replacements['{'.\$key.'}'] = \$val;
            } elseif (is_object(\$val)) {
                \$replacements['{'.\$key.'}'] = '[object '.Utils::getClass(\$val).']';
            } else {
                \$replacements['{'.\$key.'}'] = '['.gettype(\$val).']';
            }
        }

        \$record['message'] = strtr(\$record['message'], \$replacements);

        return \$record;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php";
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

namespace Monolog\\Processor;

use Monolog\\Utils;

/**
 * Processes a record's message according to PSR-3 rules
 *
 * It replaces {foo} with the value from \$context['foo']
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class PsrLogMessageProcessor implements ProcessorInterface
{
    /**
     * @param  array \$record
     * @return array
     */
    public function __invoke(array \$record)
    {
        if (false === strpos(\$record['message'], '{')) {
            return \$record;
        }

        \$replacements = array();
        foreach (\$record['context'] as \$key => \$val) {
            if (is_null(\$val) || is_scalar(\$val) || (is_object(\$val) && method_exists(\$val, \"__toString\"))) {
                \$replacements['{'.\$key.'}'] = \$val;
            } elseif (is_object(\$val)) {
                \$replacements['{'.\$key.'}'] = '[object '.Utils::getClass(\$val).']';
            } else {
                \$replacements['{'.\$key.'}'] = '['.gettype(\$val).']';
            }
        }

        \$record['message'] = strtr(\$record['message'], \$replacements);

        return \$record;
    }
}
", "vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php");
    }
}
