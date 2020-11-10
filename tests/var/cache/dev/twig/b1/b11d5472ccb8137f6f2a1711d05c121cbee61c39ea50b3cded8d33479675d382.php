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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/full.yml */
class __TwigTemplate_d0b7f533fe04f0239142cec9938c2ca1f57a6e66c1c06ca7fb03a26c268db5da extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/full.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/full.yml"));

        // line 1
        echo "framework:
    secret: s3cr3t
    default_locale: fr
    csrf_protection: true
    form:
        csrf_protection:
            field_name: _csrf
    http_method_override: false
    esi:
        enabled: true
    ssi:
        enabled: true
    profiler:
        only_exceptions: true
        enabled: false
    router:
        resource:     '%kernel.project_dir%/config/routing.xml'
        type:         xml
    session:
        storage_id:      session.storage.native
        handler_id:      session.handler.native_file
        name:            _SYMFONY
        cookie_lifetime:  86400
        cookie_path:      /
        cookie_domain:    example.com
        cookie_secure:    true
        cookie_httponly:  false
        use_cookies:      true
        gc_probability:  1
        gc_divisor:      108
        gc_maxlifetime:  90000
        sid_length:      22
        sid_bits_per_character: 4
        save_path:       /path/to/sessions
    assets:
        version: v1
    translator:
        enabled:  true
        fallback: fr
        default_path: '%kernel.project_dir%/translations'
        paths: ['%kernel.project_dir%/Fixtures/translations']
    validation:
        enabled: true
    annotations:
        cache:   file
        debug:   true
        file_cache_dir: '%kernel.cache_dir%/annotations'
    serializer:
         enabled:                    true
         enable_annotations:         true
         name_converter:             serializer.name_converter.camel_case_to_snake_case
         circular_reference_handler: my.circular.reference.handler
         max_depth_handler:          my.max.depth.handler
    property_info: ~
    ide: file%%link%%format
    request:
        formats:
            csv: ['text/csv', 'text/plain']
            pdf: 'application/pdf'
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/full.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("framework:
    secret: s3cr3t
    default_locale: fr
    csrf_protection: true
    form:
        csrf_protection:
            field_name: _csrf
    http_method_override: false
    esi:
        enabled: true
    ssi:
        enabled: true
    profiler:
        only_exceptions: true
        enabled: false
    router:
        resource:     '%kernel.project_dir%/config/routing.xml'
        type:         xml
    session:
        storage_id:      session.storage.native
        handler_id:      session.handler.native_file
        name:            _SYMFONY
        cookie_lifetime:  86400
        cookie_path:      /
        cookie_domain:    example.com
        cookie_secure:    true
        cookie_httponly:  false
        use_cookies:      true
        gc_probability:  1
        gc_divisor:      108
        gc_maxlifetime:  90000
        sid_length:      22
        sid_bits_per_character: 4
        save_path:       /path/to/sessions
    assets:
        version: v1
    translator:
        enabled:  true
        fallback: fr
        default_path: '%kernel.project_dir%/translations'
        paths: ['%kernel.project_dir%/Fixtures/translations']
    validation:
        enabled: true
    annotations:
        cache:   file
        debug:   true
        file_cache_dir: '%kernel.cache_dir%/annotations'
    serializer:
         enabled:                    true
         enable_annotations:         true
         name_converter:             serializer.name_converter.camel_case_to_snake_case
         circular_reference_handler: my.circular.reference.handler
         max_depth_handler:          my.max.depth.handler
    property_info: ~
    ide: file%%link%%format
    request:
        formats:
            csv: ['text/csv', 'text/plain']
            pdf: 'application/pdf'
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/full.yml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/yml/full.yml");
    }
}
