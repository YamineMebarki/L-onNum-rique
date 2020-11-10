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

/* vendor/symfony/security-http/Authentication/CustomAuthenticationSuccessHandler.php */
class __TwigTemplate_8674285972834195d91308bc70ef2d653d2e9413f8f7974609353b25c9b5fc34 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Authentication/CustomAuthenticationSuccessHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Authentication/CustomAuthenticationSuccessHandler.php"));

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

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class CustomAuthenticationSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    private \$handler;

    /**
     * @param AuthenticationSuccessHandlerInterface \$handler     An AuthenticationSuccessHandlerInterface instance
     * @param array                                 \$options     Options for processing a successful authentication attempt
     * @param string                                \$providerKey The provider key
     */
    public function __construct(AuthenticationSuccessHandlerInterface \$handler, array \$options, string \$providerKey)
    {
        \$this->handler = \$handler;
        if (method_exists(\$handler, 'setOptions')) {
            \$this->handler->setOptions(\$options);
        }
        if (method_exists(\$handler, 'setProviderKey')) {
            \$this->handler->setProviderKey(\$providerKey);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function onAuthenticationSuccess(Request \$request, TokenInterface \$token)
    {
        return \$this->handler->onAuthenticationSuccess(\$request, \$token);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Authentication/CustomAuthenticationSuccessHandler.php";
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

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class CustomAuthenticationSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    private \$handler;

    /**
     * @param AuthenticationSuccessHandlerInterface \$handler     An AuthenticationSuccessHandlerInterface instance
     * @param array                                 \$options     Options for processing a successful authentication attempt
     * @param string                                \$providerKey The provider key
     */
    public function __construct(AuthenticationSuccessHandlerInterface \$handler, array \$options, string \$providerKey)
    {
        \$this->handler = \$handler;
        if (method_exists(\$handler, 'setOptions')) {
            \$this->handler->setOptions(\$options);
        }
        if (method_exists(\$handler, 'setProviderKey')) {
            \$this->handler->setProviderKey(\$providerKey);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function onAuthenticationSuccess(Request \$request, TokenInterface \$token)
    {
        return \$this->handler->onAuthenticationSuccess(\$request, \$token);
    }
}
", "vendor/symfony/security-http/Authentication/CustomAuthenticationSuccessHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Authentication/CustomAuthenticationSuccessHandler.php");
    }
}
