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

/* vendor/symfony/swiftmailer-bundle/DependencyInjection/SmtpTransportConfigurator.php */
class __TwigTemplate_50fe20ef49f30afd970839e2d4f1893e6438944ec49bd85978d0100f6085683e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/DependencyInjection/SmtpTransportConfigurator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/DependencyInjection/SmtpTransportConfigurator.php"));

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

namespace Symfony\\Bundle\\SwiftmailerBundle\\DependencyInjection;

use Symfony\\Component\\Routing\\RequestContext;

class SmtpTransportConfigurator
{
    private \$localDomain;
    private \$requestContext;

    public function __construct(\$localDomain, RequestContext \$requestContext = null)
    {
        \$this->localDomain = \$localDomain;
        \$this->requestContext = \$requestContext;
    }

    /**
     * Sets the local domain based on the current request context.
     */
    public function configure(\\Swift_Transport_AbstractSmtpTransport \$transport)
    {
        if (\$this->localDomain) {
            \$transport->setLocalDomain(\$this->localDomain);
        } elseif (\$this->requestContext) {
            \$transport->setLocalDomain(\$this->requestContext->getHost());
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/DependencyInjection/SmtpTransportConfigurator.php";
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

namespace Symfony\\Bundle\\SwiftmailerBundle\\DependencyInjection;

use Symfony\\Component\\Routing\\RequestContext;

class SmtpTransportConfigurator
{
    private \$localDomain;
    private \$requestContext;

    public function __construct(\$localDomain, RequestContext \$requestContext = null)
    {
        \$this->localDomain = \$localDomain;
        \$this->requestContext = \$requestContext;
    }

    /**
     * Sets the local domain based on the current request context.
     */
    public function configure(\\Swift_Transport_AbstractSmtpTransport \$transport)
    {
        if (\$this->localDomain) {
            \$transport->setLocalDomain(\$this->localDomain);
        } elseif (\$this->requestContext) {
            \$transport->setLocalDomain(\$this->requestContext->getHost());
        }
    }
}
", "vendor/symfony/swiftmailer-bundle/DependencyInjection/SmtpTransportConfigurator.php", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/DependencyInjection/SmtpTransportConfigurator.php");
    }
}
