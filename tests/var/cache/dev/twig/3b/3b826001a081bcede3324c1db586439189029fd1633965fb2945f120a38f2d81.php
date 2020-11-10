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

/* vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php */
class __TwigTemplate_6714e8d74f508a72549da4376ec8b4f99d4ff44755278f863c1f3f15bb6414df extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php"));

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

namespace Symfony\\Component\\Security\\Core\\Authentication;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * The default implementation of the authentication trust resolver.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class AuthenticationTrustResolver implements AuthenticationTrustResolverInterface
{
    private \$anonymousClass;
    private \$rememberMeClass;

    public function __construct(string \$anonymousClass = null, string \$rememberMeClass = null)
    {
        \$this->anonymousClass = \$anonymousClass;
        \$this->rememberMeClass = \$rememberMeClass;

        if (null !== \$anonymousClass && !is_a(\$anonymousClass, AnonymousToken::class, true)) {
            @trigger_error(sprintf('Configuring a custom anonymous token class is deprecated since Symfony 4.2; have the \"%s\" class extend the \"%s\" class instead, and remove the \"%s\" constructor argument.', \$anonymousClass, AnonymousToken::class, self::class), E_USER_DEPRECATED);
        }

        if (null !== \$rememberMeClass && !is_a(\$rememberMeClass, RememberMeToken::class, true)) {
            @trigger_error(sprintf('Configuring a custom remember me token class is deprecated since Symfony 4.2; have the \"%s\" class extend the \"%s\" class instead, and remove the \"%s\" constructor argument.', \$rememberMeClass, RememberMeToken::class, self::class), E_USER_DEPRECATED);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isAnonymous(TokenInterface \$token = null)
    {
        if (null === \$token) {
            return false;
        }

        if (null !== \$this->anonymousClass) {
            return \$token instanceof \$this->anonymousClass;
        }

        return \$token instanceof AnonymousToken;
    }

    /**
     * {@inheritdoc}
     */
    public function isRememberMe(TokenInterface \$token = null)
    {
        if (null === \$token) {
            return false;
        }

        if (null !== \$this->rememberMeClass) {
            return \$token instanceof \$this->rememberMeClass;
        }

        return \$token instanceof RememberMeToken;
    }

    /**
     * {@inheritdoc}
     */
    public function isFullFledged(TokenInterface \$token = null)
    {
        if (null === \$token) {
            return false;
        }

        return !\$this->isAnonymous(\$token) && !\$this->isRememberMe(\$token);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php";
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

namespace Symfony\\Component\\Security\\Core\\Authentication;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * The default implementation of the authentication trust resolver.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class AuthenticationTrustResolver implements AuthenticationTrustResolverInterface
{
    private \$anonymousClass;
    private \$rememberMeClass;

    public function __construct(string \$anonymousClass = null, string \$rememberMeClass = null)
    {
        \$this->anonymousClass = \$anonymousClass;
        \$this->rememberMeClass = \$rememberMeClass;

        if (null !== \$anonymousClass && !is_a(\$anonymousClass, AnonymousToken::class, true)) {
            @trigger_error(sprintf('Configuring a custom anonymous token class is deprecated since Symfony 4.2; have the \"%s\" class extend the \"%s\" class instead, and remove the \"%s\" constructor argument.', \$anonymousClass, AnonymousToken::class, self::class), E_USER_DEPRECATED);
        }

        if (null !== \$rememberMeClass && !is_a(\$rememberMeClass, RememberMeToken::class, true)) {
            @trigger_error(sprintf('Configuring a custom remember me token class is deprecated since Symfony 4.2; have the \"%s\" class extend the \"%s\" class instead, and remove the \"%s\" constructor argument.', \$rememberMeClass, RememberMeToken::class, self::class), E_USER_DEPRECATED);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isAnonymous(TokenInterface \$token = null)
    {
        if (null === \$token) {
            return false;
        }

        if (null !== \$this->anonymousClass) {
            return \$token instanceof \$this->anonymousClass;
        }

        return \$token instanceof AnonymousToken;
    }

    /**
     * {@inheritdoc}
     */
    public function isRememberMe(TokenInterface \$token = null)
    {
        if (null === \$token) {
            return false;
        }

        if (null !== \$this->rememberMeClass) {
            return \$token instanceof \$this->rememberMeClass;
        }

        return \$token instanceof RememberMeToken;
    }

    /**
     * {@inheritdoc}
     */
    public function isFullFledged(TokenInterface \$token = null)
    {
        if (null === \$token) {
            return false;
        }

        return !\$this->isAnonymous(\$token) && !\$this->isRememberMe(\$token);
    }
}
", "vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authentication/AuthenticationTrustResolver.php");
    }
}
