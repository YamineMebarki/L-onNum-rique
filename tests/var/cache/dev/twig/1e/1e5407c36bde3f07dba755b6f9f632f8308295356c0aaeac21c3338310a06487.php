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

/* vendor/symfony/security-core/Security.php */
class __TwigTemplate_55027e87a1193606e020d9fcad8f3f4b128d7e9439770e6d10e2f421e7513dcd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Security.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Security.php"));

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

namespace Symfony\\Component\\Security\\Core;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * Helper class for commonly-needed security tasks.
 *
 * @final
 */
class Security
{
    const ACCESS_DENIED_ERROR = '_security.403_error';
    const AUTHENTICATION_ERROR = '_security.last_error';
    const LAST_USERNAME = '_security.last_username';
    const MAX_USERNAME_LENGTH = 4096;

    private \$container;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * @return UserInterface|null
     */
    public function getUser()
    {
        if (!\$token = \$this->getToken()) {
            return null;
        }

        \$user = \$token->getUser();
        if (!\\is_object(\$user)) {
            return null;
        }

        if (!\$user instanceof UserInterface) {
            @trigger_error(sprintf('Accessing the user object \"%s\" that is not an instance of \"%s\" from \"%s()\" is deprecated since Symfony 4.2, use \"getToken()->getUser()\" instead.', \\get_class(\$user), UserInterface::class, __METHOD__), E_USER_DEPRECATED);
            //return null; // 5.0 behavior
        }

        return \$user;
    }

    /**
     * Checks if the attributes are granted against the current authentication token and optionally supplied subject.
     *
     * @param mixed \$attributes
     * @param mixed \$subject
     *
     * @return bool
     */
    public function isGranted(\$attributes, \$subject = null)
    {
        return \$this->container->get('security.authorization_checker')
            ->isGranted(\$attributes, \$subject);
    }

    /**
     * @return TokenInterface|null
     */
    public function getToken()
    {
        return \$this->container->get('security.token_storage')->getToken();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Security.php";
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

namespace Symfony\\Component\\Security\\Core;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * Helper class for commonly-needed security tasks.
 *
 * @final
 */
class Security
{
    const ACCESS_DENIED_ERROR = '_security.403_error';
    const AUTHENTICATION_ERROR = '_security.last_error';
    const LAST_USERNAME = '_security.last_username';
    const MAX_USERNAME_LENGTH = 4096;

    private \$container;

    public function __construct(ContainerInterface \$container)
    {
        \$this->container = \$container;
    }

    /**
     * @return UserInterface|null
     */
    public function getUser()
    {
        if (!\$token = \$this->getToken()) {
            return null;
        }

        \$user = \$token->getUser();
        if (!\\is_object(\$user)) {
            return null;
        }

        if (!\$user instanceof UserInterface) {
            @trigger_error(sprintf('Accessing the user object \"%s\" that is not an instance of \"%s\" from \"%s()\" is deprecated since Symfony 4.2, use \"getToken()->getUser()\" instead.', \\get_class(\$user), UserInterface::class, __METHOD__), E_USER_DEPRECATED);
            //return null; // 5.0 behavior
        }

        return \$user;
    }

    /**
     * Checks if the attributes are granted against the current authentication token and optionally supplied subject.
     *
     * @param mixed \$attributes
     * @param mixed \$subject
     *
     * @return bool
     */
    public function isGranted(\$attributes, \$subject = null)
    {
        return \$this->container->get('security.authorization_checker')
            ->isGranted(\$attributes, \$subject);
    }

    /**
     * @return TokenInterface|null
     */
    public function getToken()
    {
        return \$this->container->get('security.token_storage')->getToken();
    }
}
", "vendor/symfony/security-core/Security.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Security.php");
    }
}
