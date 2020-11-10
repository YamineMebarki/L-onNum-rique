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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/http_client_full_default_options.yml */
class __TwigTemplate_f39858b7f6d89f90dfca28f4c5446d26fcf97cc521909c6439a763042220a99f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/http_client_full_default_options.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/http_client_full_default_options.yml"));

        // line 1
        echo "framework:
    http_client:
        default_options:
            headers:
                X-powered: PHP
            max_redirects: 2
            http_version: 2.0
            resolve: {'localhost': '127.0.0.1'}
            proxy: proxy.org
            timeout: 3.5
            bindto: 127.0.0.1
            verify_peer: true
            verify_host: true
            cafile: /etc/ssl/cafile
            capath: /etc/ssl
            local_cert: /etc/ssl/cert.pem
            local_pk: /etc/ssl/private_key.pem
            passphrase: password123456
            ciphers: 'RC4-SHA:TLS13-AES-128-GCM-SHA256'
            peer_fingerprint:
                pin-sha256: ['14s5erg62v1v8471g2revg48r7==', 'jsda84hjtyd4821bgfesd215bsfg5412=']
                md5: 'sdhtb481248721thbr='
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/http_client_full_default_options.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("framework:
    http_client:
        default_options:
            headers:
                X-powered: PHP
            max_redirects: 2
            http_version: 2.0
            resolve: {'localhost': '127.0.0.1'}
            proxy: proxy.org
            timeout: 3.5
            bindto: 127.0.0.1
            verify_peer: true
            verify_host: true
            cafile: /etc/ssl/cafile
            capath: /etc/ssl
            local_cert: /etc/ssl/cert.pem
            local_pk: /etc/ssl/private_key.pem
            passphrase: password123456
            ciphers: 'RC4-SHA:TLS13-AES-128-GCM-SHA256'
            peer_fingerprint:
                pin-sha256: ['14s5erg62v1v8471g2revg48r7==', 'jsda84hjtyd4821bgfesd215bsfg5412=']
                md5: 'sdhtb481248721thbr='
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/http_client_full_default_options.yml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/http_client_full_default_options.yml");
    }
}
