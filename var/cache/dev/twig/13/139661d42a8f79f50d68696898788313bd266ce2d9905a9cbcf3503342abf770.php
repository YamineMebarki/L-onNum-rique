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

/* vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php */
class __TwigTemplate_9801bc7037fee15767549d473ac0309357e261c7355e4c27c4b6dff13b1a99b4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php"));

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

namespace Symfony\\Component\\Security\\Http\\Authentication;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Http\\HttpUtils;
use Symfony\\Component\\Security\\Http\\ParameterBagUtils;

/**
 * Class with the default authentication failure handling logic.
 *
 * Can be optionally be extended from by the developer to alter the behavior
 * while keeping the default behavior.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Alexander <iam.asm89@gmail.com>
 */
class DefaultAuthenticationFailureHandler implements AuthenticationFailureHandlerInterface
{
    protected \$httpKernel;
    protected \$httpUtils;
    protected \$logger;
    protected \$options;
    protected \$defaultOptions = [
        'failure_path' => null,
        'failure_forward' => false,
        'login_path' => '/login',
        'failure_path_parameter' => '_failure_path',
    ];

    public function __construct(HttpKernelInterface \$httpKernel, HttpUtils \$httpUtils, array \$options = [], LoggerInterface \$logger = null)
    {
        \$this->httpKernel = \$httpKernel;
        \$this->httpUtils = \$httpUtils;
        \$this->logger = \$logger;
        \$this->setOptions(\$options);
    }

    /**
     * Gets the options.
     *
     * @return array An array of options
     */
    public function getOptions()
    {
        return \$this->options;
    }

    public function setOptions(array \$options)
    {
        \$this->options = array_merge(\$this->defaultOptions, \$options);
    }

    /**
     * {@inheritdoc}
     */
    public function onAuthenticationFailure(Request \$request, AuthenticationException \$exception)
    {
        if (\$failureUrl = ParameterBagUtils::getRequestParameterValue(\$request, \$this->options['failure_path_parameter'])) {
            \$this->options['failure_path'] = \$failureUrl;
        }

        if (null === \$this->options['failure_path']) {
            \$this->options['failure_path'] = \$this->options['login_path'];
        }

        if (\$this->options['failure_forward']) {
            if (null !== \$this->logger) {
                \$this->logger->debug('Authentication failure, forward triggered.', ['failure_path' => \$this->options['failure_path']]);
            }

            \$subRequest = \$this->httpUtils->createRequest(\$request, \$this->options['failure_path']);
            \$subRequest->attributes->set(Security::AUTHENTICATION_ERROR, \$exception);

            return \$this->httpKernel->handle(\$subRequest, HttpKernelInterface::SUB_REQUEST);
        }

        if (null !== \$this->logger) {
            \$this->logger->debug('Authentication failure, redirect triggered.', ['failure_path' => \$this->options['failure_path']]);
        }

        \$request->getSession()->set(Security::AUTHENTICATION_ERROR, \$exception);

        return \$this->httpUtils->createRedirectResponse(\$request, \$this->options['failure_path']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php";
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

namespace Symfony\\Component\\Security\\Http\\Authentication;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\HttpKernelInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Security;
use Symfony\\Component\\Security\\Http\\HttpUtils;
use Symfony\\Component\\Security\\Http\\ParameterBagUtils;

/**
 * Class with the default authentication failure handling logic.
 *
 * Can be optionally be extended from by the developer to alter the behavior
 * while keeping the default behavior.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Alexander <iam.asm89@gmail.com>
 */
class DefaultAuthenticationFailureHandler implements AuthenticationFailureHandlerInterface
{
    protected \$httpKernel;
    protected \$httpUtils;
    protected \$logger;
    protected \$options;
    protected \$defaultOptions = [
        'failure_path' => null,
        'failure_forward' => false,
        'login_path' => '/login',
        'failure_path_parameter' => '_failure_path',
    ];

    public function __construct(HttpKernelInterface \$httpKernel, HttpUtils \$httpUtils, array \$options = [], LoggerInterface \$logger = null)
    {
        \$this->httpKernel = \$httpKernel;
        \$this->httpUtils = \$httpUtils;
        \$this->logger = \$logger;
        \$this->setOptions(\$options);
    }

    /**
     * Gets the options.
     *
     * @return array An array of options
     */
    public function getOptions()
    {
        return \$this->options;
    }

    public function setOptions(array \$options)
    {
        \$this->options = array_merge(\$this->defaultOptions, \$options);
    }

    /**
     * {@inheritdoc}
     */
    public function onAuthenticationFailure(Request \$request, AuthenticationException \$exception)
    {
        if (\$failureUrl = ParameterBagUtils::getRequestParameterValue(\$request, \$this->options['failure_path_parameter'])) {
            \$this->options['failure_path'] = \$failureUrl;
        }

        if (null === \$this->options['failure_path']) {
            \$this->options['failure_path'] = \$this->options['login_path'];
        }

        if (\$this->options['failure_forward']) {
            if (null !== \$this->logger) {
                \$this->logger->debug('Authentication failure, forward triggered.', ['failure_path' => \$this->options['failure_path']]);
            }

            \$subRequest = \$this->httpUtils->createRequest(\$request, \$this->options['failure_path']);
            \$subRequest->attributes->set(Security::AUTHENTICATION_ERROR, \$exception);

            return \$this->httpKernel->handle(\$subRequest, HttpKernelInterface::SUB_REQUEST);
        }

        if (null !== \$this->logger) {
            \$this->logger->debug('Authentication failure, redirect triggered.', ['failure_path' => \$this->options['failure_path']]);
        }

        \$request->getSession()->set(Security::AUTHENTICATION_ERROR, \$exception);

        return \$this->httpUtils->createRedirectResponse(\$request, \$this->options['failure_path']);
    }
}
", "vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Authentication/DefaultAuthenticationFailureHandler.php");
    }
}
