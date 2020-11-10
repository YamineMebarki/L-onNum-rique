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

/* vendor/symfony/security-http/EntryPoint/BasicAuthenticationEntryPoint.php */
class __TwigTemplate_2dbc84ba6716b6c22163d28aab95ccbc10437a88db50cc6c3820aa9f76c26598 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/EntryPoint/BasicAuthenticationEntryPoint.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-http/EntryPoint/BasicAuthenticationEntryPoint.php"));

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

namespace Symfony\\Component\\Security\\Http\\EntryPoint;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;

/**
 * BasicAuthenticationEntryPoint starts an HTTP Basic authentication.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class BasicAuthenticationEntryPoint implements AuthenticationEntryPointInterface
{
    private \$realmName;

    public function __construct(string \$realmName)
    {
        \$this->realmName = \$realmName;
    }

    /**
     * {@inheritdoc}
     */
    public function start(Request \$request, AuthenticationException \$authException = null)
    {
        \$response = new Response();
        \$response->headers->set('WWW-Authenticate', sprintf('Basic realm=\"%s\"', \$this->realmName));
        \$response->setStatusCode(401);

        return \$response;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-http/EntryPoint/BasicAuthenticationEntryPoint.php";
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

namespace Symfony\\Component\\Security\\Http\\EntryPoint;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException;

/**
 * BasicAuthenticationEntryPoint starts an HTTP Basic authentication.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class BasicAuthenticationEntryPoint implements AuthenticationEntryPointInterface
{
    private \$realmName;

    public function __construct(string \$realmName)
    {
        \$this->realmName = \$realmName;
    }

    /**
     * {@inheritdoc}
     */
    public function start(Request \$request, AuthenticationException \$authException = null)
    {
        \$response = new Response();
        \$response->headers->set('WWW-Authenticate', sprintf('Basic realm=\"%s\"', \$this->realmName));
        \$response->setStatusCode(401);

        return \$response;
    }
}
", "vendor/symfony/security-http/EntryPoint/BasicAuthenticationEntryPoint.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-http/EntryPoint/BasicAuthenticationEntryPoint.php");
    }
}
