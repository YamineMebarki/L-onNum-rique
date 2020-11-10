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

/* vendor/symfony/security-http/Firewall/ChannelListener.php */
class __TwigTemplate_332e871bae222dbf2a49d7f3ccfb37daa0340bb105234a3781250f669f405ae8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/ChannelListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Firewall/ChannelListener.php"));

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

namespace Symfony\\Component\\Security\\Http\\Firewall;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Http\\AccessMapInterface;
use Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface;

/**
 * ChannelListener switches the HTTP protocol based on the access control
 * configuration.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class ChannelListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$map;
    private \$authenticationEntryPoint;
    private \$logger;

    public function __construct(AccessMapInterface \$map, AuthenticationEntryPointInterface \$authenticationEntryPoint, LoggerInterface \$logger = null)
    {
        \$this->map = \$map;
        \$this->authenticationEntryPoint = \$authenticationEntryPoint;
        \$this->logger = \$logger;
    }

    /**
     * Handles channel management.
     */
    public function __invoke(RequestEvent \$event)
    {
        \$request = \$event->getRequest();

        list(, \$channel) = \$this->map->getPatterns(\$request);

        if ('https' === \$channel && !\$request->isSecure()) {
            if (null !== \$this->logger) {
                if ('https' === \$request->headers->get('X-Forwarded-Proto')) {
                    \$this->logger->info('Redirecting to HTTPS. (\"X-Forwarded-Proto\" header is set to \"https\" - did you set \"trusted_proxies\" correctly?)');
                } elseif (false !== strpos(\$request->headers->get('Forwarded'), 'proto=https')) {
                    \$this->logger->info('Redirecting to HTTPS. (\"Forwarded\" header is set to \"proto=https\" - did you set \"trusted_proxies\" correctly?)');
                } else {
                    \$this->logger->info('Redirecting to HTTPS.');
                }
            }

            \$response = \$this->authenticationEntryPoint->start(\$request);

            \$event->setResponse(\$response);

            return;
        }

        if ('http' === \$channel && \$request->isSecure()) {
            if (null !== \$this->logger) {
                \$this->logger->info('Redirecting to HTTP.');
            }

            \$response = \$this->authenticationEntryPoint->start(\$request);

            \$event->setResponse(\$response);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Firewall/ChannelListener.php";
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

namespace Symfony\\Component\\Security\\Http\\Firewall;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpKernel\\Event\\RequestEvent;
use Symfony\\Component\\Security\\Http\\AccessMapInterface;
use Symfony\\Component\\Security\\Http\\EntryPoint\\AuthenticationEntryPointInterface;

/**
 * ChannelListener switches the HTTP protocol based on the access control
 * configuration.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final since Symfony 4.3
 */
class ChannelListener implements ListenerInterface
{
    use LegacyListenerTrait;

    private \$map;
    private \$authenticationEntryPoint;
    private \$logger;

    public function __construct(AccessMapInterface \$map, AuthenticationEntryPointInterface \$authenticationEntryPoint, LoggerInterface \$logger = null)
    {
        \$this->map = \$map;
        \$this->authenticationEntryPoint = \$authenticationEntryPoint;
        \$this->logger = \$logger;
    }

    /**
     * Handles channel management.
     */
    public function __invoke(RequestEvent \$event)
    {
        \$request = \$event->getRequest();

        list(, \$channel) = \$this->map->getPatterns(\$request);

        if ('https' === \$channel && !\$request->isSecure()) {
            if (null !== \$this->logger) {
                if ('https' === \$request->headers->get('X-Forwarded-Proto')) {
                    \$this->logger->info('Redirecting to HTTPS. (\"X-Forwarded-Proto\" header is set to \"https\" - did you set \"trusted_proxies\" correctly?)');
                } elseif (false !== strpos(\$request->headers->get('Forwarded'), 'proto=https')) {
                    \$this->logger->info('Redirecting to HTTPS. (\"Forwarded\" header is set to \"proto=https\" - did you set \"trusted_proxies\" correctly?)');
                } else {
                    \$this->logger->info('Redirecting to HTTPS.');
                }
            }

            \$response = \$this->authenticationEntryPoint->start(\$request);

            \$event->setResponse(\$response);

            return;
        }

        if ('http' === \$channel && \$request->isSecure()) {
            if (null !== \$this->logger) {
                \$this->logger->info('Redirecting to HTTP.');
            }

            \$response = \$this->authenticationEntryPoint->start(\$request);

            \$event->setResponse(\$response);
        }
    }
}
", "vendor/symfony/security-http/Firewall/ChannelListener.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Firewall/ChannelListener.php");
    }
}
