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

/* vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php */
class __TwigTemplate_866b9cef3d07ab6e336cc82cae6b57c3854d8cd1fd90fb2fef2722c4110877ef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php"));

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

namespace Symfony\\Component\\Security\\Http\\Session;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * The default session strategy implementation.
 *
 * Supports the following strategies:
 * NONE: the session is not changed
 * MIGRATE: the session id is updated, attributes are kept
 * INVALIDATE: the session id is updated, attributes are lost
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class SessionAuthenticationStrategy implements SessionAuthenticationStrategyInterface
{
    const NONE = 'none';
    const MIGRATE = 'migrate';
    const INVALIDATE = 'invalidate';

    private \$strategy;

    public function __construct(string \$strategy)
    {
        \$this->strategy = \$strategy;
    }

    /**
     * {@inheritdoc}
     */
    public function onAuthentication(Request \$request, TokenInterface \$token)
    {
        switch (\$this->strategy) {
            case self::NONE:
                return;

            case self::MIGRATE:
                // Note: this logic is duplicated in several authentication listeners
                // until Symfony 5.0 due to a security fix with BC compat
                \$request->getSession()->migrate(true);

                return;

            case self::INVALIDATE:
                \$request->getSession()->invalidate();

                return;

            default:
                throw new \\RuntimeException(sprintf('Invalid session authentication strategy \"%s\"', \$this->strategy));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php";
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

namespace Symfony\\Component\\Security\\Http\\Session;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;

/**
 * The default session strategy implementation.
 *
 * Supports the following strategies:
 * NONE: the session is not changed
 * MIGRATE: the session id is updated, attributes are kept
 * INVALIDATE: the session id is updated, attributes are lost
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class SessionAuthenticationStrategy implements SessionAuthenticationStrategyInterface
{
    const NONE = 'none';
    const MIGRATE = 'migrate';
    const INVALIDATE = 'invalidate';

    private \$strategy;

    public function __construct(string \$strategy)
    {
        \$this->strategy = \$strategy;
    }

    /**
     * {@inheritdoc}
     */
    public function onAuthentication(Request \$request, TokenInterface \$token)
    {
        switch (\$this->strategy) {
            case self::NONE:
                return;

            case self::MIGRATE:
                // Note: this logic is duplicated in several authentication listeners
                // until Symfony 5.0 due to a security fix with BC compat
                \$request->getSession()->migrate(true);

                return;

            case self::INVALIDATE:
                \$request->getSession()->invalidate();

                return;

            default:
                throw new \\RuntimeException(sprintf('Invalid session authentication strategy \"%s\"', \$this->strategy));
        }
    }
}
", "vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/Session/SessionAuthenticationStrategy.php");
    }
}
