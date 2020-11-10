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

/* vendor/symfony/service-contracts/ServiceSubscriberInterface.php */
class __TwigTemplate_9e85349201f2ea811680c26e62b7fcabdda1faa22700b32e8b6c2182484d6a74 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/service-contracts/ServiceSubscriberInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/service-contracts/ServiceSubscriberInterface.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Contracts\\Service;

/**
 * A ServiceSubscriber exposes its dependencies via the static {@link getSubscribedServices} method.
 *
 * The getSubscribedServices method returns an array of service types required by such instances,
 * optionally keyed by the service names used internally. Service types that start with an interrogation
 * mark \"?\" are optional, while the other ones are mandatory service dependencies.
 *
 * The injected service locators SHOULD NOT allow access to any other services not specified by the method.
 *
 * It is expected that ServiceSubscriber instances consume PSR-11-based service locators internally.
 * This interface does not dictate any injection method for these service locators, although constructor
 * injection is recommended.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface ServiceSubscriberInterface
{
    /**
     * Returns an array of service types required by such instances, optionally keyed by the service names used internally.
     *
     * For mandatory dependencies:
     *
     *  * ['logger' => 'Psr\\Log\\LoggerInterface'] means the objects use the \"logger\" name
     *    internally to fetch a service which must implement Psr\\Log\\LoggerInterface.
     *  * ['loggers' => 'Psr\\Log\\LoggerInterface[]'] means the objects use the \"loggers\" name
     *    internally to fetch an iterable of Psr\\Log\\LoggerInterface instances.
     *  * ['Psr\\Log\\LoggerInterface'] is a shortcut for
     *  * ['Psr\\Log\\LoggerInterface' => 'Psr\\Log\\LoggerInterface']
     *
     * otherwise:
     *
     *  * ['logger' => '?Psr\\Log\\LoggerInterface'] denotes an optional dependency
     *  * ['loggers' => '?Psr\\Log\\LoggerInterface[]'] denotes an optional iterable dependency
     *  * ['?Psr\\Log\\LoggerInterface'] is a shortcut for
     *  * ['Psr\\Log\\LoggerInterface' => '?Psr\\Log\\LoggerInterface']
     *
     * @return array The required service types, optionally keyed by service names
     */
    public static function getSubscribedServices();
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/service-contracts/ServiceSubscriberInterface.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Contracts\\Service;

/**
 * A ServiceSubscriber exposes its dependencies via the static {@link getSubscribedServices} method.
 *
 * The getSubscribedServices method returns an array of service types required by such instances,
 * optionally keyed by the service names used internally. Service types that start with an interrogation
 * mark \"?\" are optional, while the other ones are mandatory service dependencies.
 *
 * The injected service locators SHOULD NOT allow access to any other services not specified by the method.
 *
 * It is expected that ServiceSubscriber instances consume PSR-11-based service locators internally.
 * This interface does not dictate any injection method for these service locators, although constructor
 * injection is recommended.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface ServiceSubscriberInterface
{
    /**
     * Returns an array of service types required by such instances, optionally keyed by the service names used internally.
     *
     * For mandatory dependencies:
     *
     *  * ['logger' => 'Psr\\Log\\LoggerInterface'] means the objects use the \"logger\" name
     *    internally to fetch a service which must implement Psr\\Log\\LoggerInterface.
     *  * ['loggers' => 'Psr\\Log\\LoggerInterface[]'] means the objects use the \"loggers\" name
     *    internally to fetch an iterable of Psr\\Log\\LoggerInterface instances.
     *  * ['Psr\\Log\\LoggerInterface'] is a shortcut for
     *  * ['Psr\\Log\\LoggerInterface' => 'Psr\\Log\\LoggerInterface']
     *
     * otherwise:
     *
     *  * ['logger' => '?Psr\\Log\\LoggerInterface'] denotes an optional dependency
     *  * ['loggers' => '?Psr\\Log\\LoggerInterface[]'] denotes an optional iterable dependency
     *  * ['?Psr\\Log\\LoggerInterface'] is a shortcut for
     *  * ['Psr\\Log\\LoggerInterface' => '?Psr\\Log\\LoggerInterface']
     *
     * @return array The required service types, optionally keyed by service names
     */
    public static function getSubscribedServices();
}
", "vendor/symfony/service-contracts/ServiceSubscriberInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/service-contracts/ServiceSubscriberInterface.php");
    }
}
