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

/* vendor/monolog/monolog/src/Monolog/Handler/CouchDBHandler.php */
class __TwigTemplate_b04b643674815e812c2edc17afee36b69d48d47ab39f8daaf8e7873946c85098 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/CouchDBHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/CouchDBHandler.php"));

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

use Monolog\\Formatter\\JsonFormatter;
use Monolog\\Logger;

/**
 * CouchDB handler
 *
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 */
class CouchDBHandler extends AbstractProcessingHandler
{
    private \$options;

    public function __construct(array \$options = array(), \$level = Logger::DEBUG, \$bubble = true)
    {
        \$this->options = array_merge(array(
            'host'     => 'localhost',
            'port'     => 5984,
            'dbname'   => 'logger',
            'username' => null,
            'password' => null,
        ), \$options);

        parent::__construct(\$level, \$bubble);
    }

    /**
     * {@inheritDoc}
     */
    protected function write(array \$record)
    {
        \$basicAuth = null;
        if (\$this->options['username']) {
            \$basicAuth = sprintf('%s:%s@', \$this->options['username'], \$this->options['password']);
        }

        \$url = 'http://'.\$basicAuth.\$this->options['host'].':'.\$this->options['port'].'/'.\$this->options['dbname'];
        \$context = stream_context_create(array(
            'http' => array(
                'method'        => 'POST',
                'content'       => \$record['formatted'],
                'ignore_errors' => true,
                'max_redirects' => 0,
                'header'        => 'Content-type: application/json',
            ),
        ));

        if (false === @file_get_contents(\$url, null, \$context)) {
            throw new \\RuntimeException(sprintf('Could not connect to %s', \$url));
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new JsonFormatter(JsonFormatter::BATCH_MODE_JSON, false);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/CouchDBHandler.php";
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

use Monolog\\Formatter\\JsonFormatter;
use Monolog\\Logger;

/**
 * CouchDB handler
 *
 * @author Markus Bachmann <markus.bachmann@bachi.biz>
 */
class CouchDBHandler extends AbstractProcessingHandler
{
    private \$options;

    public function __construct(array \$options = array(), \$level = Logger::DEBUG, \$bubble = true)
    {
        \$this->options = array_merge(array(
            'host'     => 'localhost',
            'port'     => 5984,
            'dbname'   => 'logger',
            'username' => null,
            'password' => null,
        ), \$options);

        parent::__construct(\$level, \$bubble);
    }

    /**
     * {@inheritDoc}
     */
    protected function write(array \$record)
    {
        \$basicAuth = null;
        if (\$this->options['username']) {
            \$basicAuth = sprintf('%s:%s@', \$this->options['username'], \$this->options['password']);
        }

        \$url = 'http://'.\$basicAuth.\$this->options['host'].':'.\$this->options['port'].'/'.\$this->options['dbname'];
        \$context = stream_context_create(array(
            'http' => array(
                'method'        => 'POST',
                'content'       => \$record['formatted'],
                'ignore_errors' => true,
                'max_redirects' => 0,
                'header'        => 'Content-type: application/json',
            ),
        ));

        if (false === @file_get_contents(\$url, null, \$context)) {
            throw new \\RuntimeException(sprintf('Could not connect to %s', \$url));
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function getDefaultFormatter()
    {
        return new JsonFormatter(JsonFormatter::BATCH_MODE_JSON, false);
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/CouchDBHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/CouchDBHandler.php");
    }
}
