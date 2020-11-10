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

/* vendor/monolog/monolog/src/Monolog/Formatter/LogglyFormatter.php */
class __TwigTemplate_b179935005c1b49018a8af0c84e6d758954bcc83b9f79a815a30d08503287234 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/LogglyFormatter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Formatter/LogglyFormatter.php"));

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
 * Encodes message information into JSON in a format compatible with Loggly.
 *
 * @author Adam Pancutt <adam@pancutt.com>
 */
class LogglyFormatter extends JsonFormatter
{
    /**
     * Overrides the default batch mode to new lines for compatibility with the
     * Loggly bulk API.
     *
     * @param int \$batchMode
     */
    public function __construct(\$batchMode = self::BATCH_MODE_NEWLINES, \$appendNewline = false)
    {
        parent::__construct(\$batchMode, \$appendNewline);
    }

    /**
     * Appends the 'timestamp' parameter for indexing by Loggly.
     *
     * @see https://www.loggly.com/docs/automated-parsing/#json
     * @see \\Monolog\\Formatter\\JsonFormatter::format()
     */
    public function format(array \$record)
    {
        if (isset(\$record[\"datetime\"]) && (\$record[\"datetime\"] instanceof \\DateTime)) {
            \$record[\"timestamp\"] = \$record[\"datetime\"]->format(\"Y-m-d\\TH:i:s.uO\");
            // Todo 2.0 unset the 'datetime' parameter, retained for BC
        }

        return parent::format(\$record);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Formatter/LogglyFormatter.php";
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
 * Encodes message information into JSON in a format compatible with Loggly.
 *
 * @author Adam Pancutt <adam@pancutt.com>
 */
class LogglyFormatter extends JsonFormatter
{
    /**
     * Overrides the default batch mode to new lines for compatibility with the
     * Loggly bulk API.
     *
     * @param int \$batchMode
     */
    public function __construct(\$batchMode = self::BATCH_MODE_NEWLINES, \$appendNewline = false)
    {
        parent::__construct(\$batchMode, \$appendNewline);
    }

    /**
     * Appends the 'timestamp' parameter for indexing by Loggly.
     *
     * @see https://www.loggly.com/docs/automated-parsing/#json
     * @see \\Monolog\\Formatter\\JsonFormatter::format()
     */
    public function format(array \$record)
    {
        if (isset(\$record[\"datetime\"]) && (\$record[\"datetime\"] instanceof \\DateTime)) {
            \$record[\"timestamp\"] = \$record[\"datetime\"]->format(\"Y-m-d\\TH:i:s.uO\");
            // Todo 2.0 unset the 'datetime' parameter, retained for BC
        }

        return parent::format(\$record);
    }
}
", "vendor/monolog/monolog/src/Monolog/Formatter/LogglyFormatter.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Formatter/LogglyFormatter.php");
    }
}
