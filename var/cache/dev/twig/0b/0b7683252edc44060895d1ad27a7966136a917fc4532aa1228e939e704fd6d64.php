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

/* vendor/symfony/security-bundle/SecurityUserValueResolver.php */
class __TwigTemplate_b262b7c9490623e5c131474e9cd797a796521e99b1e270627f21204b4a73bb1e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/SecurityUserValueResolver.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/SecurityUserValueResolver.php"));

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

namespace Symfony\\Bundle\\SecurityBundle;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentValueResolverInterface;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Http\\Controller\\UserValueResolver;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.1, use \"%s\" instead.', SecurityUserValueResolver::class, UserValueResolver::class), E_USER_DEPRECATED);

/**
 * Supports the argument type of {@see UserInterface}.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 *
 * @deprecated since Symfony 4.1, use {@link UserValueResolver} instead
 */
final class SecurityUserValueResolver implements ArgumentValueResolverInterface
{
    private \$tokenStorage;

    public function __construct(TokenStorageInterface \$tokenStorage)
    {
        \$this->tokenStorage = \$tokenStorage;
    }

    public function supports(Request \$request, ArgumentMetadata \$argument)
    {
        // only security user implementations are supported
        if (UserInterface::class !== \$argument->getType()) {
            return false;
        }

        \$token = \$this->tokenStorage->getToken();
        if (!\$token instanceof TokenInterface) {
            return false;
        }

        \$user = \$token->getUser();

        // in case it's not an object we cannot do anything with it; E.g. \"anon.\"
        return \$user instanceof UserInterface;
    }

    public function resolve(Request \$request, ArgumentMetadata \$argument)
    {
        yield \$this->tokenStorage->getToken()->getUser();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/SecurityUserValueResolver.php";
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

namespace Symfony\\Bundle\\SecurityBundle;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Controller\\ArgumentValueResolverInterface;
use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadata;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;
use Symfony\\Component\\Security\\Http\\Controller\\UserValueResolver;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.1, use \"%s\" instead.', SecurityUserValueResolver::class, UserValueResolver::class), E_USER_DEPRECATED);

/**
 * Supports the argument type of {@see UserInterface}.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 *
 * @deprecated since Symfony 4.1, use {@link UserValueResolver} instead
 */
final class SecurityUserValueResolver implements ArgumentValueResolverInterface
{
    private \$tokenStorage;

    public function __construct(TokenStorageInterface \$tokenStorage)
    {
        \$this->tokenStorage = \$tokenStorage;
    }

    public function supports(Request \$request, ArgumentMetadata \$argument)
    {
        // only security user implementations are supported
        if (UserInterface::class !== \$argument->getType()) {
            return false;
        }

        \$token = \$this->tokenStorage->getToken();
        if (!\$token instanceof TokenInterface) {
            return false;
        }

        \$user = \$token->getUser();

        // in case it's not an object we cannot do anything with it; E.g. \"anon.\"
        return \$user instanceof UserInterface;
    }

    public function resolve(Request \$request, ArgumentMetadata \$argument)
    {
        yield \$this->tokenStorage->getToken()->getUser();
    }
}
", "vendor/symfony/security-bundle/SecurityUserValueResolver.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/SecurityUserValueResolver.php");
    }
}
