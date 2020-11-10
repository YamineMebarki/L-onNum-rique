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

/* vendor/symfony/monolog-bridge/Handler/FingersCrossed/HttpCodeActivationStrategy.php */
class __TwigTemplate_02ced2db3e063274cab04f213ae87cb24b620f2d862461a511e1b83b38415c82 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Handler/FingersCrossed/HttpCodeActivationStrategy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Handler/FingersCrossed/HttpCodeActivationStrategy.php"));

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

namespace Symfony\\Bridge\\Monolog\\Handler\\FingersCrossed;

use Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;

/**
 * Activation strategy that ignores certain HTTP codes.
 *
 * @author Shaun Simmons <shaun@envysphere.com>
 */
class HttpCodeActivationStrategy extends ErrorLevelActivationStrategy
{
    private \$exclusions;
    private \$requestStack;

    /**
     * @param array \$exclusions each exclusion must have a \"code\" and \"urls\" keys
     */
    public function __construct(RequestStack \$requestStack, array \$exclusions, \$actionLevel)
    {
        foreach (\$exclusions as \$exclusion) {
            if (!\\array_key_exists('code', \$exclusion)) {
                throw new \\LogicException(sprintf('An exclusion must have a \"code\" key'));
            }
            if (!\\array_key_exists('urls', \$exclusion)) {
                throw new \\LogicException(sprintf('An exclusion must have a \"urls\" key'));
            }
        }

        parent::__construct(\$actionLevel);

        \$this->requestStack = \$requestStack;
        \$this->exclusions = \$exclusions;
    }

    public function isHandlerActivated(array \$record)
    {
        \$isActivated = parent::isHandlerActivated(\$record);

        if (
            \$isActivated
            && isset(\$record['context']['exception'])
            && \$record['context']['exception'] instanceof HttpException
            && (\$request = \$this->requestStack->getMasterRequest())
        ) {
            foreach (\$this->exclusions as \$exclusion) {
                if (\$record['context']['exception']->getStatusCode() !== \$exclusion['code']) {
                    continue;
                }

                if (\\count(\$exclusion['urls'])) {
                    return !preg_match('{('.implode('|', \$exclusion['urls']).')}i', \$request->getPathInfo());
                }

                return false;
            }
        }

        return \$isActivated;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/monolog-bridge/Handler/FingersCrossed/HttpCodeActivationStrategy.php";
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

namespace Symfony\\Bridge\\Monolog\\Handler\\FingersCrossed;

use Monolog\\Handler\\FingersCrossed\\ErrorLevelActivationStrategy;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpKernel\\Exception\\HttpException;

/**
 * Activation strategy that ignores certain HTTP codes.
 *
 * @author Shaun Simmons <shaun@envysphere.com>
 */
class HttpCodeActivationStrategy extends ErrorLevelActivationStrategy
{
    private \$exclusions;
    private \$requestStack;

    /**
     * @param array \$exclusions each exclusion must have a \"code\" and \"urls\" keys
     */
    public function __construct(RequestStack \$requestStack, array \$exclusions, \$actionLevel)
    {
        foreach (\$exclusions as \$exclusion) {
            if (!\\array_key_exists('code', \$exclusion)) {
                throw new \\LogicException(sprintf('An exclusion must have a \"code\" key'));
            }
            if (!\\array_key_exists('urls', \$exclusion)) {
                throw new \\LogicException(sprintf('An exclusion must have a \"urls\" key'));
            }
        }

        parent::__construct(\$actionLevel);

        \$this->requestStack = \$requestStack;
        \$this->exclusions = \$exclusions;
    }

    public function isHandlerActivated(array \$record)
    {
        \$isActivated = parent::isHandlerActivated(\$record);

        if (
            \$isActivated
            && isset(\$record['context']['exception'])
            && \$record['context']['exception'] instanceof HttpException
            && (\$request = \$this->requestStack->getMasterRequest())
        ) {
            foreach (\$this->exclusions as \$exclusion) {
                if (\$record['context']['exception']->getStatusCode() !== \$exclusion['code']) {
                    continue;
                }

                if (\\count(\$exclusion['urls'])) {
                    return !preg_match('{('.implode('|', \$exclusion['urls']).')}i', \$request->getPathInfo());
                }

                return false;
            }
        }

        return \$isActivated;
    }
}
", "vendor/symfony/monolog-bridge/Handler/FingersCrossed/HttpCodeActivationStrategy.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Handler/FingersCrossed/HttpCodeActivationStrategy.php");
    }
}
