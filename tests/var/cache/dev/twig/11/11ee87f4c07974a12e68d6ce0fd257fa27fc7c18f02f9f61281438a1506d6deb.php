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

/* vendor/symfony/security-bundle/DependencyInjection/Compiler/AddSessionDomainConstraintPass.php */
class __TwigTemplate_a7afae84da11454066b56c64ff7849875deff5bc17544d6e4f1c7cfcfcf1408e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Compiler/AddSessionDomainConstraintPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/DependencyInjection/Compiler/AddSessionDomainConstraintPass.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Uses the session domain to restrict allowed redirection targets.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class AddSessionDomainConstraintPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasParameter('session.storage.options') || !\$container->has('security.http_utils')) {
            return;
        }

        \$sessionOptions = \$container->getParameter('session.storage.options');
        \$domainRegexp = empty(\$sessionOptions['cookie_domain']) ? '%s' : sprintf('(?:%%s|(?:.+\\.)?%s)', preg_quote(trim(\$sessionOptions['cookie_domain'], '.')));

        if ('auto' === (\$sessionOptions['cookie_secure'] ?? null)) {
            \$secureDomainRegexp = sprintf('{^https://%s\$}i', \$domainRegexp);
            \$domainRegexp = 'https?://'.\$domainRegexp;
        } else {
            \$secureDomainRegexp = null;
            \$domainRegexp = (empty(\$sessionOptions['cookie_secure']) ? 'https?://' : 'https://').\$domainRegexp;
        }

        \$container->findDefinition('security.http_utils')
            ->addArgument(sprintf('{^%s\$}i', \$domainRegexp))
            ->addArgument(\$secureDomainRegexp);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/DependencyInjection/Compiler/AddSessionDomainConstraintPass.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Uses the session domain to restrict allowed redirection targets.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class AddSessionDomainConstraintPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasParameter('session.storage.options') || !\$container->has('security.http_utils')) {
            return;
        }

        \$sessionOptions = \$container->getParameter('session.storage.options');
        \$domainRegexp = empty(\$sessionOptions['cookie_domain']) ? '%s' : sprintf('(?:%%s|(?:.+\\.)?%s)', preg_quote(trim(\$sessionOptions['cookie_domain'], '.')));

        if ('auto' === (\$sessionOptions['cookie_secure'] ?? null)) {
            \$secureDomainRegexp = sprintf('{^https://%s\$}i', \$domainRegexp);
            \$domainRegexp = 'https?://'.\$domainRegexp;
        } else {
            \$secureDomainRegexp = null;
            \$domainRegexp = (empty(\$sessionOptions['cookie_secure']) ? 'https?://' : 'https://').\$domainRegexp;
        }

        \$container->findDefinition('security.http_utils')
            ->addArgument(sprintf('{^%s\$}i', \$domainRegexp))
            ->addArgument(\$secureDomainRegexp);
    }
}
", "vendor/symfony/security-bundle/DependencyInjection/Compiler/AddSessionDomainConstraintPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/DependencyInjection/Compiler/AddSessionDomainConstraintPass.php");
    }
}
