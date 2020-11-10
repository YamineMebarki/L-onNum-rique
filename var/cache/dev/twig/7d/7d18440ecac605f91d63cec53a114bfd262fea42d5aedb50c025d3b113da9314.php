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

/* vendor/monolog/monolog/src/Monolog/Handler/IFTTTHandler.php */
class __TwigTemplate_508c8a7d37ea6cd11fcbe1f21bfa344e456752275a3975e55d6bd5a3abf4d7da extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/IFTTTHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/IFTTTHandler.php"));

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

/**
 * IFTTTHandler uses cURL to trigger IFTTT Maker actions
 *
 * Register a secret key and trigger/event name at https://ifttt.com/maker
 *
 * value1 will be the channel from monolog's Logger constructor,
 * value2 will be the level name (ERROR, WARNING, ..)
 * value3 will be the log record's message
 *
 * @author Nehal Patel <nehal@nehalpatel.me>
 */
class IFTTTHandler extends AbstractProcessingHandler
{
    private \$eventName;
    private \$secretKey;

    /**
     * @param string \$eventName The name of the IFTTT Maker event that should be triggered
     * @param string \$secretKey A valid IFTTT secret key
     * @param int    \$level     The minimum logging level at which this handler will be triggered
     * @param bool   \$bubble    Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\$eventName, \$secretKey, \$level = Logger::ERROR, \$bubble = true)
    {
        \$this->eventName = \$eventName;
        \$this->secretKey = \$secretKey;

        parent::__construct(\$level, \$bubble);
    }

    /**
     * {@inheritdoc}
     */
    public function write(array \$record)
    {
        \$postData = array(
            \"value1\" => \$record[\"channel\"],
            \"value2\" => \$record[\"level_name\"],
            \"value3\" => \$record[\"message\"],
        );
        \$postString = json_encode(\$postData);

        \$ch = curl_init();
        curl_setopt(\$ch, CURLOPT_URL, \"https://maker.ifttt.com/trigger/\" . \$this->eventName . \"/with/key/\" . \$this->secretKey);
        curl_setopt(\$ch, CURLOPT_POST, true);
        curl_setopt(\$ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(\$ch, CURLOPT_POSTFIELDS, \$postString);
        curl_setopt(\$ch, CURLOPT_HTTPHEADER, array(
            \"Content-Type: application/json\",
        ));

        Curl\\Util::execute(\$ch);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/IFTTTHandler.php";
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

/**
 * IFTTTHandler uses cURL to trigger IFTTT Maker actions
 *
 * Register a secret key and trigger/event name at https://ifttt.com/maker
 *
 * value1 will be the channel from monolog's Logger constructor,
 * value2 will be the level name (ERROR, WARNING, ..)
 * value3 will be the log record's message
 *
 * @author Nehal Patel <nehal@nehalpatel.me>
 */
class IFTTTHandler extends AbstractProcessingHandler
{
    private \$eventName;
    private \$secretKey;

    /**
     * @param string \$eventName The name of the IFTTT Maker event that should be triggered
     * @param string \$secretKey A valid IFTTT secret key
     * @param int    \$level     The minimum logging level at which this handler will be triggered
     * @param bool   \$bubble    Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\$eventName, \$secretKey, \$level = Logger::ERROR, \$bubble = true)
    {
        \$this->eventName = \$eventName;
        \$this->secretKey = \$secretKey;

        parent::__construct(\$level, \$bubble);
    }

    /**
     * {@inheritdoc}
     */
    public function write(array \$record)
    {
        \$postData = array(
            \"value1\" => \$record[\"channel\"],
            \"value2\" => \$record[\"level_name\"],
            \"value3\" => \$record[\"message\"],
        );
        \$postString = json_encode(\$postData);

        \$ch = curl_init();
        curl_setopt(\$ch, CURLOPT_URL, \"https://maker.ifttt.com/trigger/\" . \$this->eventName . \"/with/key/\" . \$this->secretKey);
        curl_setopt(\$ch, CURLOPT_POST, true);
        curl_setopt(\$ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(\$ch, CURLOPT_POSTFIELDS, \$postString);
        curl_setopt(\$ch, CURLOPT_HTTPHEADER, array(
            \"Content-Type: application/json\",
        ));

        Curl\\Util::execute(\$ch);
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/IFTTTHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/IFTTTHandler.php");
    }
}
