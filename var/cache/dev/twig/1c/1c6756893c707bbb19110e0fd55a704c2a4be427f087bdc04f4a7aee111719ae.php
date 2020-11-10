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

/* vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/php/full.php */
class __TwigTemplate_a52b08e2916cf26cd25fb9e848d0568a20f8840163bcfaf579f11da734c757d6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/php/full.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/php/full.php"));

        // line 1
        echo "<?php

\$container->loadFromExtension('swiftmailer', [
    'transport' => 'smtp',
    'username' => 'user',
    'password' => 'pass',
    'host' => 'example.org',
    'port' => '12345',
    'encryption' => 'tls',
    'auth-mode' => 'login',
    'timeout' => '1000',
    'source_ip' => '127.0.0.1',
    'local_domain' => 'local.example.com',
    'logging' => true,
    'spool' => ['type' => 'memory'],
    'delivery_addresses' => ['single@host.com'],
    'delivery_whitelist' => ['/foo@.*/', '/.*@bar.com\$/'],
]);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/php/full.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

\$container->loadFromExtension('swiftmailer', [
    'transport' => 'smtp',
    'username' => 'user',
    'password' => 'pass',
    'host' => 'example.org',
    'port' => '12345',
    'encryption' => 'tls',
    'auth-mode' => 'login',
    'timeout' => '1000',
    'source_ip' => '127.0.0.1',
    'local_domain' => 'local.example.com',
    'logging' => true,
    'spool' => ['type' => 'memory'],
    'delivery_addresses' => ['single@host.com'],
    'delivery_whitelist' => ['/foo@.*/', '/.*@bar.com\$/'],
]);
", "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/php/full.php", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/php/full.php");
    }
}
