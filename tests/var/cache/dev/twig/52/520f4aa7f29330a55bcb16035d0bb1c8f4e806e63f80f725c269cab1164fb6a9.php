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

/* vendor/monolog/monolog/src/Monolog/Handler/LogglyHandler.php */
class __TwigTemplate_63f0a504d989f393eeee1f4bfb7c1f1e47f41556afd6b137e5793f550dfffa37 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/LogglyHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/LogglyHandler.php"));

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
use Monolog\\Formatter\\LogglyFormatter;

/**
 * Sends errors to Loggly.
 *
 * @author Przemek Sobstel <przemek@sobstel.org>
 * @author Adam Pancutt <adam@pancutt.com>
 * @author Gregory Barchard <gregory@barchard.net>
 */
class LogglyHandler extends AbstractProcessingHandler
{
    const HOST = 'log-01.loggly.com';
    const ENDPOINT_SINGLE = 'inputs';
    const ENDPOINT_BATCH = 'bulk';

    protected \$token;

    protected \$tag = array();

    public function __construct(\$token, \$level = Logger::DEBUG, \$bubble = true)
    {
        if (!extension_loaded('curl')) {
            throw new \\LogicException('The curl extension is needed to use the LogglyHandler');
        }

        \$this->token = \$token;

        parent::__construct(\$level, \$bubble);
    }

    public function setTag(\$tag)
    {
        \$tag = !empty(\$tag) ? \$tag : array();
        \$this->tag = is_array(\$tag) ? \$tag : array(\$tag);
    }

    public function addTag(\$tag)
    {
        if (!empty(\$tag)) {
            \$tag = is_array(\$tag) ? \$tag : array(\$tag);
            \$this->tag = array_unique(array_merge(\$this->tag, \$tag));
        }
    }

    protected function write(array \$record)
    {
        \$this->send(\$record[\"formatted\"], self::ENDPOINT_SINGLE);
    }

    public function handleBatch(array \$records)
    {
        \$level = \$this->level;

        \$records = array_filter(\$records, function (\$record) use (\$level) {
            return (\$record['level'] >= \$level);
        });

        if (\$records) {
            \$this->send(\$this->getFormatter()->formatBatch(\$records), self::ENDPOINT_BATCH);
        }
    }

    protected function send(\$data, \$endpoint)
    {
        \$url = sprintf(\"https://%s/%s/%s/\", self::HOST, \$endpoint, \$this->token);

        \$headers = array('Content-Type: application/json');

        if (!empty(\$this->tag)) {
            \$headers[] = 'X-LOGGLY-TAG: '.implode(',', \$this->tag);
        }

        \$ch = curl_init();

        curl_setopt(\$ch, CURLOPT_URL, \$url);
        curl_setopt(\$ch, CURLOPT_POST, true);
        curl_setopt(\$ch, CURLOPT_POSTFIELDS, \$data);
        curl_setopt(\$ch, CURLOPT_HTTPHEADER, \$headers);
        curl_setopt(\$ch, CURLOPT_RETURNTRANSFER, true);

        Curl\\Util::execute(\$ch);
    }

    protected function getDefaultFormatter()
    {
        return new LogglyFormatter();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/LogglyHandler.php";
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
use Monolog\\Formatter\\LogglyFormatter;

/**
 * Sends errors to Loggly.
 *
 * @author Przemek Sobstel <przemek@sobstel.org>
 * @author Adam Pancutt <adam@pancutt.com>
 * @author Gregory Barchard <gregory@barchard.net>
 */
class LogglyHandler extends AbstractProcessingHandler
{
    const HOST = 'log-01.loggly.com';
    const ENDPOINT_SINGLE = 'inputs';
    const ENDPOINT_BATCH = 'bulk';

    protected \$token;

    protected \$tag = array();

    public function __construct(\$token, \$level = Logger::DEBUG, \$bubble = true)
    {
        if (!extension_loaded('curl')) {
            throw new \\LogicException('The curl extension is needed to use the LogglyHandler');
        }

        \$this->token = \$token;

        parent::__construct(\$level, \$bubble);
    }

    public function setTag(\$tag)
    {
        \$tag = !empty(\$tag) ? \$tag : array();
        \$this->tag = is_array(\$tag) ? \$tag : array(\$tag);
    }

    public function addTag(\$tag)
    {
        if (!empty(\$tag)) {
            \$tag = is_array(\$tag) ? \$tag : array(\$tag);
            \$this->tag = array_unique(array_merge(\$this->tag, \$tag));
        }
    }

    protected function write(array \$record)
    {
        \$this->send(\$record[\"formatted\"], self::ENDPOINT_SINGLE);
    }

    public function handleBatch(array \$records)
    {
        \$level = \$this->level;

        \$records = array_filter(\$records, function (\$record) use (\$level) {
            return (\$record['level'] >= \$level);
        });

        if (\$records) {
            \$this->send(\$this->getFormatter()->formatBatch(\$records), self::ENDPOINT_BATCH);
        }
    }

    protected function send(\$data, \$endpoint)
    {
        \$url = sprintf(\"https://%s/%s/%s/\", self::HOST, \$endpoint, \$this->token);

        \$headers = array('Content-Type: application/json');

        if (!empty(\$this->tag)) {
            \$headers[] = 'X-LOGGLY-TAG: '.implode(',', \$this->tag);
        }

        \$ch = curl_init();

        curl_setopt(\$ch, CURLOPT_URL, \$url);
        curl_setopt(\$ch, CURLOPT_POST, true);
        curl_setopt(\$ch, CURLOPT_POSTFIELDS, \$data);
        curl_setopt(\$ch, CURLOPT_HTTPHEADER, \$headers);
        curl_setopt(\$ch, CURLOPT_RETURNTRANSFER, true);

        Curl\\Util::execute(\$ch);
    }

    protected function getDefaultFormatter()
    {
        return new LogglyFormatter();
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/LogglyHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/LogglyHandler.php");
    }
}
