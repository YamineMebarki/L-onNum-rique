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

/* vendor/symfony/security-http/Authentication/DefaultAuthenticationSuccessHandler.php */
class __TwigTemplate_8b22454d009834794f594eaf889243f23d2cd39461c19c4b11dae36cddf12032 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Authentication/DefaultAuthenticationSuccessHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Authentication/DefaultAuthenticationSuccessHandler.php"));

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

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Http\\HttpUtils;
use Symfony\\Component\\Security\\Http\\ParameterBagUtils;
use Symfony\\Component\\Security\\Http\\Util\\TargetPathTrait;

/**
 * Class with the default authentication success handling logic.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Alexander <iam.asm89@gmail.com>
 */
class DefaultAuthenticationSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    use TargetPathTrait;

    protected \$httpUtils;
    protected \$options;
    protected \$providerKey;
    protected \$defaultOptions = [
        'always_use_default_target_path' => false,
        'default_target_path' => '/',
        'login_path' => '/login',
        'target_path_parameter' => '_target_path',
        'use_referer' => false,
    ];

    /**
     * @param array \$options Options for processing a successful authentication attempt
     */
    public function __construct(HttpUtils \$httpUtils, array \$options = [])
    {
        \$this->httpUtils = \$httpUtils;
        \$this->setOptions(\$options);
    }

    /**
     * {@inheritdoc}
     */
    public function onAuthenticationSuccess(Request \$request, TokenInterface \$token)
    {
        return \$this->httpUtils->createRedirectResponse(\$request, \$this->determineTargetUrl(\$request));
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
     * Get the provider key.
     *
     * @return string
     */
    public function getProviderKey()
    {
        return \$this->providerKey;
    }

    /**
     * Set the provider key.
     *
     * @param string \$providerKey
     */
    public function setProviderKey(\$providerKey)
    {
        \$this->providerKey = \$providerKey;
    }

    /**
     * Builds the target URL according to the defined options.
     *
     * @return string
     */
    protected function determineTargetUrl(Request \$request)
    {
        if (\$this->options['always_use_default_target_path']) {
            return \$this->options['default_target_path'];
        }

        if (\$targetUrl = ParameterBagUtils::getRequestParameterValue(\$request, \$this->options['target_path_parameter'])) {
            return \$targetUrl;
        }

        if (null !== \$this->providerKey && \$targetUrl = \$this->getTargetPath(\$request->getSession(), \$this->providerKey)) {
            \$this->removeTargetPath(\$request->getSession(), \$this->providerKey);

            return \$targetUrl;
        }

        if (\$this->options['use_referer'] && \$targetUrl = \$request->headers->get('Referer')) {
            if (false !== \$pos = strpos(\$targetUrl, '?')) {
                \$targetUrl = substr(\$targetUrl, 0, \$pos);
            }
            if (\$targetUrl && \$targetUrl !== \$this->httpUtils->generateUri(\$request, \$this->options['login_path'])) {
                return \$targetUrl;
            }
        }

        return \$this->options['default_target_path'];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Authentication/DefaultAuthenticationSuccessHandler.php";
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

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Http\\HttpUtils;
use Symfony\\Component\\Security\\Http\\ParameterBagUtils;
use Symfony\\Component\\Security\\Http\\Util\\TargetPathTrait;

/**
 * Class with the default authentication success handling logic.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 * @author Alexander <iam.asm89@gmail.com>
 */
class DefaultAuthenticationSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    use TargetPathTrait;

    protected \$httpUtils;
    protected \$options;
    protected \$providerKey;
    protected \$defaultOptions = [
        'always_use_default_target_path' => false,
        'default_target_path' => '/',
        'login_path' => '/login',
        'target_path_parameter' => '_target_path',
        'use_referer' => false,
    ];

    /**
     * @param array \$options Options for processing a successful authentication attempt
     */
    public function __construct(HttpUtils \$httpUtils, array \$options = [])
    {
        \$this->httpUtils = \$httpUtils;
        \$this->setOptions(\$options);
    }

    /**
     * {@inheritdoc}
     */
    public function onAuthenticationSuccess(Request \$request, TokenInterface \$token)
    {
        return \$this->httpUtils->createRedirectResponse(\$request, \$this->determineTargetUrl(\$request));
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
     * Get the provider key.
     *
     * @return string
     */
    public function getProviderKey()
    {
        return \$this->providerKey;
    }

    /**
     * Set the provider key.
     *
     * @param string \$providerKey
     */
    public function setProviderKey(\$providerKey)
    {
        \$this->providerKey = \$providerKey;
    }

    /**
     * Builds the target URL according to the defined options.
     *
     * @return string
     */
    protected function determineTargetUrl(Request \$request)
    {
        if (\$this->options['always_use_default_target_path']) {
            return \$this->options['default_target_path'];
        }

        if (\$targetUrl = ParameterBagUtils::getRequestParameterValue(\$request, \$this->options['target_path_parameter'])) {
            return \$targetUrl;
        }

        if (null !== \$this->providerKey && \$targetUrl = \$this->getTargetPath(\$request->getSession(), \$this->providerKey)) {
            \$this->removeTargetPath(\$request->getSession(), \$this->providerKey);

            return \$targetUrl;
        }

        if (\$this->options['use_referer'] && \$targetUrl = \$request->headers->get('Referer')) {
            if (false !== \$pos = strpos(\$targetUrl, '?')) {
                \$targetUrl = substr(\$targetUrl, 0, \$pos);
            }
            if (\$targetUrl && \$targetUrl !== \$this->httpUtils->generateUri(\$request, \$this->options['login_path'])) {
                return \$targetUrl;
            }
        }

        return \$this->options['default_target_path'];
    }
}
", "vendor/symfony/security-http/Authentication/DefaultAuthenticationSuccessHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Authentication/DefaultAuthenticationSuccessHandler.php");
    }
}
