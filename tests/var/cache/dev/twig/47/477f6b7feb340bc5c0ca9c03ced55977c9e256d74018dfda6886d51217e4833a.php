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

/* vendor/monolog/monolog/src/Monolog/Processor/WebProcessor.php */
class __TwigTemplate_15514b9fd51b830c0fc7f6b0048086b4665a9b5125290ad1188c036dad834f52 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Processor/WebProcessor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Processor/WebProcessor.php"));

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

/**
 * Injects url/method and remote IP of the current web request in all records
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class WebProcessor implements ProcessorInterface
{
    /**
     * @var array|\\ArrayAccess
     */
    protected \$serverData;

    /**
     * Default fields
     *
     * Array is structured as [key in record.extra => key in \$serverData]
     *
     * @var array
     */
    protected \$extraFields = array(
        'url'         => 'REQUEST_URI',
        'ip'          => 'REMOTE_ADDR',
        'http_method' => 'REQUEST_METHOD',
        'server'      => 'SERVER_NAME',
        'referrer'    => 'HTTP_REFERER',
    );

    /**
     * @param array|\\ArrayAccess \$serverData  Array or object w/ ArrayAccess that provides access to the \$_SERVER data
     * @param array|null         \$extraFields Field names and the related key inside \$serverData to be added. If not provided it defaults to: url, ip, http_method, server, referrer
     */
    public function __construct(\$serverData = null, array \$extraFields = null)
    {
        if (null === \$serverData) {
            \$this->serverData = &\$_SERVER;
        } elseif (is_array(\$serverData) || \$serverData instanceof \\ArrayAccess) {
            \$this->serverData = \$serverData;
        } else {
            throw new \\UnexpectedValueException('\$serverData must be an array or object implementing ArrayAccess.');
        }

        if (null !== \$extraFields) {
            if (isset(\$extraFields[0])) {
                foreach (array_keys(\$this->extraFields) as \$fieldName) {
                    if (!in_array(\$fieldName, \$extraFields)) {
                        unset(\$this->extraFields[\$fieldName]);
                    }
                }
            } else {
                \$this->extraFields = \$extraFields;
            }
        }
    }

    /**
     * @param  array \$record
     * @return array
     */
    public function __invoke(array \$record)
    {
        // skip processing if for some reason request data
        // is not present (CLI or wonky SAPIs)
        if (!isset(\$this->serverData['REQUEST_URI'])) {
            return \$record;
        }

        \$record['extra'] = \$this->appendExtraFields(\$record['extra']);

        return \$record;
    }

    /**
     * @param  string \$extraName
     * @param  string \$serverName
     * @return \$this
     */
    public function addExtraField(\$extraName, \$serverName)
    {
        \$this->extraFields[\$extraName] = \$serverName;

        return \$this;
    }

    /**
     * @param  array \$extra
     * @return array
     */
    private function appendExtraFields(array \$extra)
    {
        foreach (\$this->extraFields as \$extraName => \$serverName) {
            \$extra[\$extraName] = isset(\$this->serverData[\$serverName]) ? \$this->serverData[\$serverName] : null;
        }

        if (isset(\$this->serverData['UNIQUE_ID'])) {
            \$extra['unique_id'] = \$this->serverData['UNIQUE_ID'];
        }

        return \$extra;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Processor/WebProcessor.php";
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

/**
 * Injects url/method and remote IP of the current web request in all records
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 */
class WebProcessor implements ProcessorInterface
{
    /**
     * @var array|\\ArrayAccess
     */
    protected \$serverData;

    /**
     * Default fields
     *
     * Array is structured as [key in record.extra => key in \$serverData]
     *
     * @var array
     */
    protected \$extraFields = array(
        'url'         => 'REQUEST_URI',
        'ip'          => 'REMOTE_ADDR',
        'http_method' => 'REQUEST_METHOD',
        'server'      => 'SERVER_NAME',
        'referrer'    => 'HTTP_REFERER',
    );

    /**
     * @param array|\\ArrayAccess \$serverData  Array or object w/ ArrayAccess that provides access to the \$_SERVER data
     * @param array|null         \$extraFields Field names and the related key inside \$serverData to be added. If not provided it defaults to: url, ip, http_method, server, referrer
     */
    public function __construct(\$serverData = null, array \$extraFields = null)
    {
        if (null === \$serverData) {
            \$this->serverData = &\$_SERVER;
        } elseif (is_array(\$serverData) || \$serverData instanceof \\ArrayAccess) {
            \$this->serverData = \$serverData;
        } else {
            throw new \\UnexpectedValueException('\$serverData must be an array or object implementing ArrayAccess.');
        }

        if (null !== \$extraFields) {
            if (isset(\$extraFields[0])) {
                foreach (array_keys(\$this->extraFields) as \$fieldName) {
                    if (!in_array(\$fieldName, \$extraFields)) {
                        unset(\$this->extraFields[\$fieldName]);
                    }
                }
            } else {
                \$this->extraFields = \$extraFields;
            }
        }
    }

    /**
     * @param  array \$record
     * @return array
     */
    public function __invoke(array \$record)
    {
        // skip processing if for some reason request data
        // is not present (CLI or wonky SAPIs)
        if (!isset(\$this->serverData['REQUEST_URI'])) {
            return \$record;
        }

        \$record['extra'] = \$this->appendExtraFields(\$record['extra']);

        return \$record;
    }

    /**
     * @param  string \$extraName
     * @param  string \$serverName
     * @return \$this
     */
    public function addExtraField(\$extraName, \$serverName)
    {
        \$this->extraFields[\$extraName] = \$serverName;

        return \$this;
    }

    /**
     * @param  array \$extra
     * @return array
     */
    private function appendExtraFields(array \$extra)
    {
        foreach (\$this->extraFields as \$extraName => \$serverName) {
            \$extra[\$extraName] = isset(\$this->serverData[\$serverName]) ? \$this->serverData[\$serverName] : null;
        }

        if (isset(\$this->serverData['UNIQUE_ID'])) {
            \$extra['unique_id'] = \$this->serverData['UNIQUE_ID'];
        }

        return \$extra;
    }
}
", "vendor/monolog/monolog/src/Monolog/Processor/WebProcessor.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Processor/WebProcessor.php");
    }
}
