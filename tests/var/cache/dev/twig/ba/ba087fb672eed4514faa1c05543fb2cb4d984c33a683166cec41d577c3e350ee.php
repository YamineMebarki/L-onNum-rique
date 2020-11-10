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

/* vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/yml/many_mailers.yml */
class __TwigTemplate_e8d615c10d04c6796308b2f0fc515fe165bb2fdd9f8ab5cbc7516d8cb9edc848 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/yml/many_mailers.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/yml/many_mailers.yml"));

        // line 1
        echo "swiftmailer:
    default_mailer: secondary_mailer
    mailers:
        first_mailer:
            transport:        smtp
            username:         user_first
            password:         pass_first
            host:             example.org
            port:             12345
            encryption:       tls
            auth-mode:        login
            timeout:          1000
            source_ip:        127.0.0.1
            local_domain:     first.example.org
            logging:          true
            sender_address:   first-sender@example.org
            delivery_addresses: [first@example.org]
            delivery_whitelist:
                - /firstfoo@.*/
                - /.*@firstbar.com\$/
        secondary_mailer:
            transport:        smtp
            username:         user_secondary
            password:         pass_secondary
            host:             example.org
            port:             54321
            encryption:       tls
            auth-mode:        login
            timeout:          1000
            source_ip:        127.0.0.1
            local_domain:     second.example.org
            logging:          true
            spool:
                type: memory
            delivery_addresses: [secondary@example.org]
            delivery_whitelist:
                - /secondaryfoo@.*/
                - /.*@secondarybar.com\$/
        third_mailer:
            transport:        smtp
            username:         user_third
            password:         pass_third
            host:             example.org
            port:             12345
            encryption:       tls
            auth-mode:        login
            timeout:          1000
            source_ip:        127.0.0.1
            local_domain:     third.example.org
            logging:          true
            spool:
                type: file
            sender_address:   third-sender@example.org
            delivery_addresses: [third@example.org]
            delivery_whitelist:
                - /thirdfoo@.*/
                - /.*@thirdbar.com\$/
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/yml/many_mailers.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("swiftmailer:
    default_mailer: secondary_mailer
    mailers:
        first_mailer:
            transport:        smtp
            username:         user_first
            password:         pass_first
            host:             example.org
            port:             12345
            encryption:       tls
            auth-mode:        login
            timeout:          1000
            source_ip:        127.0.0.1
            local_domain:     first.example.org
            logging:          true
            sender_address:   first-sender@example.org
            delivery_addresses: [first@example.org]
            delivery_whitelist:
                - /firstfoo@.*/
                - /.*@firstbar.com\$/
        secondary_mailer:
            transport:        smtp
            username:         user_secondary
            password:         pass_secondary
            host:             example.org
            port:             54321
            encryption:       tls
            auth-mode:        login
            timeout:          1000
            source_ip:        127.0.0.1
            local_domain:     second.example.org
            logging:          true
            spool:
                type: memory
            delivery_addresses: [secondary@example.org]
            delivery_whitelist:
                - /secondaryfoo@.*/
                - /.*@secondarybar.com\$/
        third_mailer:
            transport:        smtp
            username:         user_third
            password:         pass_third
            host:             example.org
            port:             12345
            encryption:       tls
            auth-mode:        login
            timeout:          1000
            source_ip:        127.0.0.1
            local_domain:     third.example.org
            logging:          true
            spool:
                type: file
            sender_address:   third-sender@example.org
            delivery_addresses: [third@example.org]
            delivery_whitelist:
                - /thirdfoo@.*/
                - /.*@thirdbar.com\$/
", "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/yml/many_mailers.yml", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/yml/many_mailers.yml");
    }
}
