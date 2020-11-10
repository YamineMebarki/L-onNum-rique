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

/* vendor/monolog/monolog/src/Monolog/Handler/SlackbotHandler.php */
class __TwigTemplate_db747a8b01d610cad127857a150f6761ca6448b2ad6bcde07edb277c322fa9c4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/SlackbotHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/SlackbotHandler.php"));

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
 * Sends notifications through Slack's Slackbot
 *
 * @author     Haralan Dobrev <hkdobrev@gmail.com>
 * @see        https://slack.com/apps/A0F81R8ET-slackbot
 * @deprecated According to Slack the API used on this handler it is deprecated.
 *             Therefore this handler will be removed on 2.x
 *             Slack suggests to use webhooks instead. Please contact slack for more information.
 */
class SlackbotHandler extends AbstractProcessingHandler
{
    /**
     * The slug of the Slack team
     * @var string
     */
    private \$slackTeam;

    /**
     * Slackbot token
     * @var string
     */
    private \$token;

    /**
     * Slack channel name
     * @var string
     */
    private \$channel;

    /**
     * @param  string \$slackTeam Slack team slug
     * @param  string \$token     Slackbot token
     * @param  string \$channel   Slack channel (encoded ID or name)
     * @param  int    \$level     The minimum logging level at which this handler will be triggered
     * @param  bool   \$bubble    Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\$slackTeam, \$token, \$channel, \$level = Logger::CRITICAL, \$bubble = true)
    {
        @trigger_error('SlackbotHandler is deprecated and will be removed on 2.x', E_USER_DEPRECATED);
        parent::__construct(\$level, \$bubble);

        \$this->slackTeam = \$slackTeam;
        \$this->token = \$token;
        \$this->channel = \$channel;
    }

    /**
     * {@inheritdoc}
     *
     * @param array \$record
     */
    protected function write(array \$record)
    {
        \$slackbotUrl = sprintf(
            'https://%s.slack.com/services/hooks/slackbot?token=%s&channel=%s',
            \$this->slackTeam,
            \$this->token,
            \$this->channel
        );

        \$ch = curl_init();
        curl_setopt(\$ch, CURLOPT_URL, \$slackbotUrl);
        curl_setopt(\$ch, CURLOPT_POST, true);
        curl_setopt(\$ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(\$ch, CURLOPT_POSTFIELDS, \$record['message']);

        Curl\\Util::execute(\$ch);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/SlackbotHandler.php";
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
 * Sends notifications through Slack's Slackbot
 *
 * @author     Haralan Dobrev <hkdobrev@gmail.com>
 * @see        https://slack.com/apps/A0F81R8ET-slackbot
 * @deprecated According to Slack the API used on this handler it is deprecated.
 *             Therefore this handler will be removed on 2.x
 *             Slack suggests to use webhooks instead. Please contact slack for more information.
 */
class SlackbotHandler extends AbstractProcessingHandler
{
    /**
     * The slug of the Slack team
     * @var string
     */
    private \$slackTeam;

    /**
     * Slackbot token
     * @var string
     */
    private \$token;

    /**
     * Slack channel name
     * @var string
     */
    private \$channel;

    /**
     * @param  string \$slackTeam Slack team slug
     * @param  string \$token     Slackbot token
     * @param  string \$channel   Slack channel (encoded ID or name)
     * @param  int    \$level     The minimum logging level at which this handler will be triggered
     * @param  bool   \$bubble    Whether the messages that are handled can bubble up the stack or not
     */
    public function __construct(\$slackTeam, \$token, \$channel, \$level = Logger::CRITICAL, \$bubble = true)
    {
        @trigger_error('SlackbotHandler is deprecated and will be removed on 2.x', E_USER_DEPRECATED);
        parent::__construct(\$level, \$bubble);

        \$this->slackTeam = \$slackTeam;
        \$this->token = \$token;
        \$this->channel = \$channel;
    }

    /**
     * {@inheritdoc}
     *
     * @param array \$record
     */
    protected function write(array \$record)
    {
        \$slackbotUrl = sprintf(
            'https://%s.slack.com/services/hooks/slackbot?token=%s&channel=%s',
            \$this->slackTeam,
            \$this->token,
            \$this->channel
        );

        \$ch = curl_init();
        curl_setopt(\$ch, CURLOPT_URL, \$slackbotUrl);
        curl_setopt(\$ch, CURLOPT_POST, true);
        curl_setopt(\$ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(\$ch, CURLOPT_POSTFIELDS, \$record['message']);

        Curl\\Util::execute(\$ch);
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/SlackbotHandler.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/SlackbotHandler.php");
    }
}
