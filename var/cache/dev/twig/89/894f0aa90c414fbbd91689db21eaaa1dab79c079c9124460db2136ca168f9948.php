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

/* vendor/symfony/security-core/Authentication/Provider/AnonymousAuthenticationProvider.php */
class __TwigTemplate_bbbbea7c82ba3204591b1e99d6b814f459a7d5e9c40cc6536c087942b5fa529d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Provider/AnonymousAuthenticationProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authentication/Provider/AnonymousAuthenticationProvider.php"));

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

namespace Symfony\\Component\\Security\\Core\\Authentication\\Provider;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;

/**
 * AnonymousAuthenticationProvider validates AnonymousToken instances.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AnonymousAuthenticationProvider implements AuthenticationProviderInterface
{
    /**
     * Used to determine if the token is created by the application
     * instead of a malicious client.
     *
     * @var string
     */
    private \$secret;

    /**
     * @param string \$secret The secret shared with the AnonymousToken
     */
    public function __construct(string \$secret)
    {
        \$this->secret = \$secret;
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(TokenInterface \$token)
    {
        if (!\$this->supports(\$token)) {
            throw new AuthenticationException('The token is not supported by this authentication provider.');
        }

        if (\$this->secret !== \$token->getSecret()) {
            throw new BadCredentialsException('The Token does not contain the expected key.');
        }

        return \$token;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(TokenInterface \$token)
    {
        return \$token instanceof AnonymousToken;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authentication/Provider/AnonymousAuthenticationProvider.php";
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

namespace Symfony\\Component\\Security\\Core\\Authentication\\Provider;

use Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;
use Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException;

/**
 * AnonymousAuthenticationProvider validates AnonymousToken instances.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AnonymousAuthenticationProvider implements AuthenticationProviderInterface
{
    /**
     * Used to determine if the token is created by the application
     * instead of a malicious client.
     *
     * @var string
     */
    private \$secret;

    /**
     * @param string \$secret The secret shared with the AnonymousToken
     */
    public function __construct(string \$secret)
    {
        \$this->secret = \$secret;
    }

    /**
     * {@inheritdoc}
     */
    public function authenticate(TokenInterface \$token)
    {
        if (!\$this->supports(\$token)) {
            throw new AuthenticationException('The token is not supported by this authentication provider.');
        }

        if (\$this->secret !== \$token->getSecret()) {
            throw new BadCredentialsException('The Token does not contain the expected key.');
        }

        return \$token;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(TokenInterface \$token)
    {
        return \$token instanceof AnonymousToken;
    }
}
", "vendor/symfony/security-core/Authentication/Provider/AnonymousAuthenticationProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authentication/Provider/AnonymousAuthenticationProvider.php");
    }
}
