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

/* vendor/monolog/monolog/src/Monolog/Handler/FingersCrossed/ChannelLevelActivationStrategy.php */
class __TwigTemplate_6cf34aab51e4d42342d4c7db8f8bbd8b663a5d03ff6824f3c82758a2129d7b59 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/FingersCrossed/ChannelLevelActivationStrategy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/monolog/monolog/src/Monolog/Handler/FingersCrossed/ChannelLevelActivationStrategy.php"));

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

namespace Monolog\\Handler\\FingersCrossed;

use Monolog\\Logger;

/**
 * Channel and Error level based monolog activation strategy. Allows to trigger activation
 * based on level per channel. e.g. trigger activation on level 'ERROR' by default, except
 * for records of the 'sql' channel; those should trigger activation on level 'WARN'.
 *
 * Example:
 *
 * <code>
 *   \$activationStrategy = new ChannelLevelActivationStrategy(
 *       Logger::CRITICAL,
 *       array(
 *           'request' => Logger::ALERT,
 *           'sensitive' => Logger::ERROR,
 *       )
 *   );
 *   \$handler = new FingersCrossedHandler(new StreamHandler('php://stderr'), \$activationStrategy);
 * </code>
 *
 * @author Mike Meessen <netmikey@gmail.com>
 */
class ChannelLevelActivationStrategy implements ActivationStrategyInterface
{
    private \$defaultActionLevel;
    private \$channelToActionLevel;

    /**
     * @param int   \$defaultActionLevel   The default action level to be used if the record's category doesn't match any
     * @param array \$channelToActionLevel An array that maps channel names to action levels.
     */
    public function __construct(\$defaultActionLevel, \$channelToActionLevel = array())
    {
        \$this->defaultActionLevel = Logger::toMonologLevel(\$defaultActionLevel);
        \$this->channelToActionLevel = array_map('Monolog\\Logger::toMonologLevel', \$channelToActionLevel);
    }

    public function isHandlerActivated(array \$record)
    {
        if (isset(\$this->channelToActionLevel[\$record['channel']])) {
            return \$record['level'] >= \$this->channelToActionLevel[\$record['channel']];
        }

        return \$record['level'] >= \$this->defaultActionLevel;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/monolog/monolog/src/Monolog/Handler/FingersCrossed/ChannelLevelActivationStrategy.php";
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

namespace Monolog\\Handler\\FingersCrossed;

use Monolog\\Logger;

/**
 * Channel and Error level based monolog activation strategy. Allows to trigger activation
 * based on level per channel. e.g. trigger activation on level 'ERROR' by default, except
 * for records of the 'sql' channel; those should trigger activation on level 'WARN'.
 *
 * Example:
 *
 * <code>
 *   \$activationStrategy = new ChannelLevelActivationStrategy(
 *       Logger::CRITICAL,
 *       array(
 *           'request' => Logger::ALERT,
 *           'sensitive' => Logger::ERROR,
 *       )
 *   );
 *   \$handler = new FingersCrossedHandler(new StreamHandler('php://stderr'), \$activationStrategy);
 * </code>
 *
 * @author Mike Meessen <netmikey@gmail.com>
 */
class ChannelLevelActivationStrategy implements ActivationStrategyInterface
{
    private \$defaultActionLevel;
    private \$channelToActionLevel;

    /**
     * @param int   \$defaultActionLevel   The default action level to be used if the record's category doesn't match any
     * @param array \$channelToActionLevel An array that maps channel names to action levels.
     */
    public function __construct(\$defaultActionLevel, \$channelToActionLevel = array())
    {
        \$this->defaultActionLevel = Logger::toMonologLevel(\$defaultActionLevel);
        \$this->channelToActionLevel = array_map('Monolog\\Logger::toMonologLevel', \$channelToActionLevel);
    }

    public function isHandlerActivated(array \$record)
    {
        if (isset(\$this->channelToActionLevel[\$record['channel']])) {
            return \$record['level'] >= \$this->channelToActionLevel[\$record['channel']];
        }

        return \$record['level'] >= \$this->defaultActionLevel;
    }
}
", "vendor/monolog/monolog/src/Monolog/Handler/FingersCrossed/ChannelLevelActivationStrategy.php", "/var/www/public/DevLaon/templates/vendor/monolog/monolog/src/Monolog/Handler/FingersCrossed/ChannelLevelActivationStrategy.php");
    }
}
