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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/http_client_full_default_options.xml */
class __TwigTemplate_ebe140f476178d7af5e8593da6b64fce787c4f8635248d02ff9d82d5027ad3c9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/http_client_full_default_options.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/http_client_full_default_options.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"utf-8\" ?>
<container xmlns=\"http://symfony.com/schema/dic/services\"
           xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
           xmlns:framework=\"http://symfony.com/schema/dic/symfony\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd
        http://symfony.com/schema/dic/symfony http://symfony.com/schema/dic/symfony/symfony-1.0.xsd\">

    <framework:config>
        <framework:http-client>
            <framework:default-options
                    proxy=\"proxy.org\"
                    bindto=\"127.0.0.1\"
                    timeout=\"3.5\"
                    verify-peer=\"true\"
                    max-redirects=\"2\"
                    http-version=\"2.0\"
                    verify-host=\"true\"
                    cafile=\"/etc/ssl/cafile\"
                    capath=\"/etc/ssl\"
                    local-cert=\"/etc/ssl/cert.pem\"
                    local-pk=\"/etc/ssl/private_key.pem\"
                    passphrase=\"password123456\"
                    ciphers=\"RC4-SHA:TLS13-AES-128-GCM-SHA256\"
            >
                <framework:header name=\"X-powered\">PHP</framework:header>
                <framework:resolve host=\"localhost\">127.0.0.1</framework:resolve>
                <framework:peer-fingerprint>
                    <framework:pin-sha256>14s5erg62v1v8471g2revg48r7==</framework:pin-sha256>
                    <framework:pin-sha256>jsda84hjtyd4821bgfesd215bsfg5412=</framework:pin-sha256>
                    <framework:md5>sdhtb481248721thbr=</framework:md5>
                </framework:peer-fingerprint>
            </framework:default-options>
        </framework:http-client>
    </framework:config>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/http_client_full_default_options.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"utf-8\" ?>
<container xmlns=\"http://symfony.com/schema/dic/services\"
           xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
           xmlns:framework=\"http://symfony.com/schema/dic/symfony\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd
        http://symfony.com/schema/dic/symfony http://symfony.com/schema/dic/symfony/symfony-1.0.xsd\">

    <framework:config>
        <framework:http-client>
            <framework:default-options
                    proxy=\"proxy.org\"
                    bindto=\"127.0.0.1\"
                    timeout=\"3.5\"
                    verify-peer=\"true\"
                    max-redirects=\"2\"
                    http-version=\"2.0\"
                    verify-host=\"true\"
                    cafile=\"/etc/ssl/cafile\"
                    capath=\"/etc/ssl\"
                    local-cert=\"/etc/ssl/cert.pem\"
                    local-pk=\"/etc/ssl/private_key.pem\"
                    passphrase=\"password123456\"
                    ciphers=\"RC4-SHA:TLS13-AES-128-GCM-SHA256\"
            >
                <framework:header name=\"X-powered\">PHP</framework:header>
                <framework:resolve host=\"localhost\">127.0.0.1</framework:resolve>
                <framework:peer-fingerprint>
                    <framework:pin-sha256>14s5erg62v1v8471g2revg48r7==</framework:pin-sha256>
                    <framework:pin-sha256>jsda84hjtyd4821bgfesd215bsfg5412=</framework:pin-sha256>
                    <framework:md5>sdhtb481248721thbr=</framework:md5>
                </framework:peer-fingerprint>
            </framework:default-options>
        </framework:http-client>
    </framework:config>
</container>
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/http_client_full_default_options.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/http_client_full_default_options.xml");
    }
}
