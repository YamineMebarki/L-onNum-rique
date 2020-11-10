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

/* vendor/symfony/monolog-bridge/Handler/FingersCrossed/NotFoundActivationStrategy.php */
class __TwigTemplate_6e54b509183a1b6a30d13c962faf3858b6d59849b41923a80c92f8882a16a2a4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Handler/FingersCrossed/NotFoundActivationStrategy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/monolog-bridge/Handler/FingersCrossed/NotFoundActivationStrategy.php"));

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
 * Activation strategy that ignores 404s for certain URLs.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 * @author Fabien Potencier <fabien@symfony.com>
 */
class NotFoundActivationStrategy extends ErrorLevelActivationStrategy
{
    private \$blacklist;
    private \$requestStack;

    public function __construct(RequestStack \$requestStack, array \$excludedUrls, \$actionLevel)
    {
        parent::__construct(\$actionLevel);

        \$this->requestStack = \$requestStack;
        \$this->blacklist = '{('.implode('|', \$excludedUrls).')}i';
    }

    public function isHandlerActivated(array \$record)
    {
        \$isActivated = parent::isHandlerActivated(\$record);

        if (
            \$isActivated
            && isset(\$record['context']['exception'])
            && \$record['context']['exception'] instanceof HttpException
            && 404 == \$record['context']['exception']->getStatusCode()
            && (\$request = \$this->requestStack->getMasterRequest())
        ) {
            return !preg_match(\$this->blacklist, \$request->getPathInfo());
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
        return "vendor/symfony/monolog-bridge/Handler/FingersCrossed/NotFoundActivationStrategy.php";
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
 * Activation strategy that ignores 404s for certain URLs.
 *
 * @author Jordi Boggiano <j.boggiano@seld.be>
 * @author Fabien Potencier <fabien@symfony.com>
 */
class NotFoundActivationStrategy extends ErrorLevelActivationStrategy
{
    private \$blacklist;
    private \$requestStack;

    public function __construct(RequestStack \$requestStack, array \$excludedUrls, \$actionLevel)
    {
        parent::__construct(\$actionLevel);

        \$this->requestStack = \$requestStack;
        \$this->blacklist = '{('.implode('|', \$excludedUrls).')}i';
    }

    public function isHandlerActivated(array \$record)
    {
        \$isActivated = parent::isHandlerActivated(\$record);

        if (
            \$isActivated
            && isset(\$record['context']['exception'])
            && \$record['context']['exception'] instanceof HttpException
            && 404 == \$record['context']['exception']->getStatusCode()
            && (\$request = \$this->requestStack->getMasterRequest())
        ) {
            return !preg_match(\$this->blacklist, \$request->getPathInfo());
        }

        return \$isActivated;
    }
}
", "vendor/symfony/monolog-bridge/Handler/FingersCrossed/NotFoundActivationStrategy.php", "/var/www/public/DevLaon/templates/vendor/symfony/monolog-bridge/Handler/FingersCrossed/NotFoundActivationStrategy.php");
    }
}
