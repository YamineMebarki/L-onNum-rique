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

/* vendor/symfony/security-core/Authorization/Voter/AuthenticatedVoter.php */
class __TwigTemplate_42e4b709f508d1ea5b93b06fba1fe3053f7dd5758ae3ac858b78d5e58fc247f6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/Voter/AuthenticatedVoter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Authorization/Voter/AuthenticatedVoter.php"));

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

namespace Symfony\\Component\\Security\\Core\\Authorization\\Voter;

use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * AuthenticatedVoter votes if an attribute like IS_AUTHENTICATED_FULLY,
 * IS_AUTHENTICATED_REMEMBERED, or IS_AUTHENTICATED_ANONYMOUSLY is present.
 *
 * This list is most restrictive to least restrictive checking.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class AuthenticatedVoter implements VoterInterface
{
    const IS_AUTHENTICATED_FULLY = 'IS_AUTHENTICATED_FULLY';
    const IS_AUTHENTICATED_REMEMBERED = 'IS_AUTHENTICATED_REMEMBERED';
    const IS_AUTHENTICATED_ANONYMOUSLY = 'IS_AUTHENTICATED_ANONYMOUSLY';

    private \$authenticationTrustResolver;

    public function __construct(AuthenticationTrustResolverInterface \$authenticationTrustResolver)
    {
        \$this->authenticationTrustResolver = \$authenticationTrustResolver;
    }

    /**
     * {@inheritdoc}
     */
    public function vote(TokenInterface \$token, \$subject, array \$attributes)
    {
        \$result = VoterInterface::ACCESS_ABSTAIN;
        foreach (\$attributes as \$attribute) {
            if (null === \$attribute || (self::IS_AUTHENTICATED_FULLY !== \$attribute
                    && self::IS_AUTHENTICATED_REMEMBERED !== \$attribute
                    && self::IS_AUTHENTICATED_ANONYMOUSLY !== \$attribute)) {
                continue;
            }

            \$result = VoterInterface::ACCESS_DENIED;

            if (self::IS_AUTHENTICATED_FULLY === \$attribute
                && \$this->authenticationTrustResolver->isFullFledged(\$token)) {
                return VoterInterface::ACCESS_GRANTED;
            }

            if (self::IS_AUTHENTICATED_REMEMBERED === \$attribute
                && (\$this->authenticationTrustResolver->isRememberMe(\$token)
                    || \$this->authenticationTrustResolver->isFullFledged(\$token))) {
                return VoterInterface::ACCESS_GRANTED;
            }

            if (self::IS_AUTHENTICATED_ANONYMOUSLY === \$attribute
                && (\$this->authenticationTrustResolver->isAnonymous(\$token)
                    || \$this->authenticationTrustResolver->isRememberMe(\$token)
                    || \$this->authenticationTrustResolver->isFullFledged(\$token))) {
                return VoterInterface::ACCESS_GRANTED;
            }
        }

        return \$result;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Authorization/Voter/AuthenticatedVoter.php";
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

namespace Symfony\\Component\\Security\\Core\\Authorization\\Voter;

use Symfony\\Component\\Security\\Core\\Authentication\\AuthenticationTrustResolverInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * AuthenticatedVoter votes if an attribute like IS_AUTHENTICATED_FULLY,
 * IS_AUTHENTICATED_REMEMBERED, or IS_AUTHENTICATED_ANONYMOUSLY is present.
 *
 * This list is most restrictive to least restrictive checking.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class AuthenticatedVoter implements VoterInterface
{
    const IS_AUTHENTICATED_FULLY = 'IS_AUTHENTICATED_FULLY';
    const IS_AUTHENTICATED_REMEMBERED = 'IS_AUTHENTICATED_REMEMBERED';
    const IS_AUTHENTICATED_ANONYMOUSLY = 'IS_AUTHENTICATED_ANONYMOUSLY';

    private \$authenticationTrustResolver;

    public function __construct(AuthenticationTrustResolverInterface \$authenticationTrustResolver)
    {
        \$this->authenticationTrustResolver = \$authenticationTrustResolver;
    }

    /**
     * {@inheritdoc}
     */
    public function vote(TokenInterface \$token, \$subject, array \$attributes)
    {
        \$result = VoterInterface::ACCESS_ABSTAIN;
        foreach (\$attributes as \$attribute) {
            if (null === \$attribute || (self::IS_AUTHENTICATED_FULLY !== \$attribute
                    && self::IS_AUTHENTICATED_REMEMBERED !== \$attribute
                    && self::IS_AUTHENTICATED_ANONYMOUSLY !== \$attribute)) {
                continue;
            }

            \$result = VoterInterface::ACCESS_DENIED;

            if (self::IS_AUTHENTICATED_FULLY === \$attribute
                && \$this->authenticationTrustResolver->isFullFledged(\$token)) {
                return VoterInterface::ACCESS_GRANTED;
            }

            if (self::IS_AUTHENTICATED_REMEMBERED === \$attribute
                && (\$this->authenticationTrustResolver->isRememberMe(\$token)
                    || \$this->authenticationTrustResolver->isFullFledged(\$token))) {
                return VoterInterface::ACCESS_GRANTED;
            }

            if (self::IS_AUTHENTICATED_ANONYMOUSLY === \$attribute
                && (\$this->authenticationTrustResolver->isAnonymous(\$token)
                    || \$this->authenticationTrustResolver->isRememberMe(\$token)
                    || \$this->authenticationTrustResolver->isFullFledged(\$token))) {
                return VoterInterface::ACCESS_GRANTED;
            }
        }

        return \$result;
    }
}
", "vendor/symfony/security-core/Authorization/Voter/AuthenticatedVoter.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Authorization/Voter/AuthenticatedVoter.php");
    }
}
