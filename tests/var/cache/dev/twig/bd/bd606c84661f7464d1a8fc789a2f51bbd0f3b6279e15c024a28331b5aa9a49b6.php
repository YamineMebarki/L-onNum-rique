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

/* public/index.php */
class __TwigTemplate_8873b6ffe012ebdcba9b672da545f8f70ba6253586ed1879f560078eb278e306 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/index.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/index.php"));

        // line 1
        echo "<?php

use App\\Kernel;
use Symfony\\Component\\Debug\\Debug;
use Symfony\\Component\\HttpFoundation\\Request;

require dirname(__DIR__).'/config/bootstrap.php';

if (\$_SERVER['APP_DEBUG']) {
    umask(0000);

    Debug::enable();
}

if (\$trustedProxies = \$_SERVER['TRUSTED_PROXIES'] ?? \$_ENV['TRUSTED_PROXIES'] ?? false) {
    Request::setTrustedProxies(explode(',', \$trustedProxies), Request::HEADER_X_FORWARDED_ALL ^ Request::HEADER_X_FORWARDED_HOST);
}

if (\$trustedHosts = \$_SERVER['TRUSTED_HOSTS'] ?? \$_ENV['TRUSTED_HOSTS'] ?? false) {
    Request::setTrustedHosts([\$trustedHosts]);
}

\$kernel = new Kernel(\$_SERVER['APP_ENV'], (bool) \$_SERVER['APP_DEBUG']);
\$request = Request::createFromGlobals();
\$response = \$kernel->handle(\$request);
\$response->send();
\$kernel->terminate(\$request, \$response);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "public/index.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use App\\Kernel;
use Symfony\\Component\\Debug\\Debug;
use Symfony\\Component\\HttpFoundation\\Request;

require dirname(__DIR__).'/config/bootstrap.php';

if (\$_SERVER['APP_DEBUG']) {
    umask(0000);

    Debug::enable();
}

if (\$trustedProxies = \$_SERVER['TRUSTED_PROXIES'] ?? \$_ENV['TRUSTED_PROXIES'] ?? false) {
    Request::setTrustedProxies(explode(',', \$trustedProxies), Request::HEADER_X_FORWARDED_ALL ^ Request::HEADER_X_FORWARDED_HOST);
}

if (\$trustedHosts = \$_SERVER['TRUSTED_HOSTS'] ?? \$_ENV['TRUSTED_HOSTS'] ?? false) {
    Request::setTrustedHosts([\$trustedHosts]);
}

\$kernel = new Kernel(\$_SERVER['APP_ENV'], (bool) \$_SERVER['APP_DEBUG']);
\$request = Request::createFromGlobals();
\$response = \$kernel->handle(\$request);
\$response->send();
\$kernel->terminate(\$request, \$response);
", "public/index.php", "/var/www/public/DevLaon/templates/public/index.php");
    }
}
