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

/* vendor/monolog/monolog/src/Monolog/Handler/MandrillHandler.php */
class __TwigTemplate_baa2760724c7087199f6388e64fcfe14656f64d4db9d476eaa5739664fb50c6b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/MandrillHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/MandrillHandler.php"));

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
 * MandrillHandler uses cURL to send the emails to the Mandrill API
 *
 * @author Adam Nicholson <adamnicholson10@gmail.com>
 */
class MandrillHandler extends MailHandler
{
    protected \$message;
    protected \$apiKey;

    /**
     * @param string                  \$apiKey  A valid Mandrill API key
     * @param callable|\\Swift_Message \$message An example message for real messages, only the body will be replaced
     * @param int                     \$level   The minimum logging level at which this handler will be triggered
     * @param bool                    \$bubble  Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\$apiKey, \$message, \$level = Logger::ERROR, \$bubble = true)
    {
        parent::__construct(\$level, \$bubble);

        if (!\$message instanceof \\Swift_Message && is_callable(\$message)) {
            \$message = call_user_func(\$message);
        }
        if (!\$message instanceof \\Swift_Message) {
            throw new \\InvalidArgumentException('You must provide either a Swift_Message instance or a callable returning it');
        }
        \$this->message = \$message;
        \$this->apiKey = \$apiKey;
    }

    /**
     * {@inheritdoc}
     */
    protected function send(\$content, array \$records)
    {
        \$message = clone \$this->message;
        \$message->setBody(\$content);
        \$message->setDate(time());

        \$ch = curl_init();

        curl_setopt(\$ch, CURLOPT_URL, 'https://mandrillapp.com/api/1.0/messages/send-raw.json');
        curl_setopt(\$ch, CURLOPT_POST, 1);
        curl_setopt(\$ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt(\$ch, CURLOPT_POSTFIELDS, http_build_query(array(
            'key' => \$this->apiKey,
            'raw_message' => (string) \$message,
            'async' => false,
        )));

        Curl\\Util::execute(\$ch);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/MandrillHandler.php";
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
 * MandrillHandler uses cURL to send the emails to the Mandrill API
 *
 * @author Adam Nicholson <adamnicholson10@gmail.com>
 */
class MandrillHandler extends MailHandler
{
    protected \$message;
    protected \$apiKey;

    /**
     * @param string                  \$apiKey  A valid Mandrill API key
     * @param callable|\\Swift_Message \$message An example message for real messages, only the body will be replaced
     * @param int                     \$level   The minimum logging level at which this handler will be triggered
     * @param bool                    \$bubble  Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\$apiKey, \$message, \$level = Logger::ERROR, \$bubble = true)
    {
        parent::__construct(\$level, \$bubble);

        if (!\$message instanceof \\Swift_Message && is_callable(\$message)) {
            \$message = call_user_func(\$message);
        }
        if (!\$message instanceof \\Swift_Message) {
            throw new \\InvalidArgumentException('You must provide either a Swift_Message instance or a callable returning it');
        }
        \$this->message = \$message;
        \$this->apiKey = \$apiKey;
    }

    /**
     * {@inheritdoc}
     */
    protected function send(\$content, array \$records)
    {
        \$message = clone \$this->message;
        \$message->setBody(\$content);
        \$message->setDate(time());

        \$ch = curl_init();

        curl_setopt(\$ch, CURLOPT_URL, 'https://mandrillapp.com/api/1.0/messages/send-raw.json');
        curl_setopt(\$ch, CURLOPT_POST, 1);
        curl_setopt(\$ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt(\$ch, CURLOPT_POSTFIELDS, http_build_query(array(
            'key' => \$this->apiKey,
            'raw_message' => (string) \$message,
            'async' => false,
        )));

        Curl\\Util::execute(\$ch);
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/MandrillHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/MandrillHandler.php");
    }
}
