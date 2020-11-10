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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/full.xml */
class __TwigTemplate_e38f6cdff5ed537a1dc5e3b12e7ff898f39413cafd97a17a55f39e0eac5324d4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/full.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/full.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:framework=\"http://symfony.com/schema/dic/symfony\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/symfony https://symfony.com/schema/dic/symfony/symfony-1.0.xsd\">

    <framework:config secret=\"s3cr3t\" ide=\"file%%link%%format\" default-locale=\"fr\" http-method-override=\"false\">
        <framework:csrf-protection />
        <framework:form>
            <framework:csrf-protection field-name=\"_csrf\"/>
        </framework:form>
        <framework:esi enabled=\"true\" />
        <framework:ssi enabled=\"true\" />
        <framework:profiler only-exceptions=\"true\" enabled=\"false\" />
        <framework:router resource=\"%kernel.project_dir%/config/routing.xml\" type=\"xml\" />
        <framework:session gc-maxlifetime=\"90000\" gc-probability=\"1\" gc-divisor=\"108\" storage-id=\"session.storage.native\" handler-id=\"session.handler.native_file\" name=\"_SYMFONY\" cookie-lifetime=\"86400\" cookie-path=\"/\" cookie-domain=\"example.com\" cookie-secure=\"true\" cookie-httponly=\"false\" use-cookies=\"true\" save-path=\"/path/to/sessions\" sid-length=\"22\" sid-bits-per-character=\"4\" />
        <framework:request>
            <framework:format name=\"csv\">
                <framework:mime-type>text/csv</framework:mime-type>
                <framework:mime-type>text/plain</framework:mime-type>
            </framework:format>
            <framework:format name=\"pdf\">
                <framework:mime-type>application/pdf</framework:mime-type>
            </framework:format>
        </framework:request>
        <framework:assets version=\"v1\" />
        <framework:translator enabled=\"true\" fallback=\"fr\" logging=\"true\">
            <framework:path>%kernel.project_dir%/Fixtures/translations</framework:path>
        </framework:translator>
        <framework:validation enabled=\"true\" />
        <framework:annotations cache=\"file\" debug=\"true\" file-cache-dir=\"%kernel.cache_dir%/annotations\" />
        <framework:serializer enabled=\"true\" enable-annotations=\"true\" name-converter=\"serializer.name_converter.camel_case_to_snake_case\" circular-reference-handler=\"my.circular.reference.handler\" max-depth-handler=\"my.max.depth.handler\" />
        <framework:property-info />
    </framework:config>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/full.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xmlns:framework=\"http://symfony.com/schema/dic/symfony\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services https://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/symfony https://symfony.com/schema/dic/symfony/symfony-1.0.xsd\">

    <framework:config secret=\"s3cr3t\" ide=\"file%%link%%format\" default-locale=\"fr\" http-method-override=\"false\">
        <framework:csrf-protection />
        <framework:form>
            <framework:csrf-protection field-name=\"_csrf\"/>
        </framework:form>
        <framework:esi enabled=\"true\" />
        <framework:ssi enabled=\"true\" />
        <framework:profiler only-exceptions=\"true\" enabled=\"false\" />
        <framework:router resource=\"%kernel.project_dir%/config/routing.xml\" type=\"xml\" />
        <framework:session gc-maxlifetime=\"90000\" gc-probability=\"1\" gc-divisor=\"108\" storage-id=\"session.storage.native\" handler-id=\"session.handler.native_file\" name=\"_SYMFONY\" cookie-lifetime=\"86400\" cookie-path=\"/\" cookie-domain=\"example.com\" cookie-secure=\"true\" cookie-httponly=\"false\" use-cookies=\"true\" save-path=\"/path/to/sessions\" sid-length=\"22\" sid-bits-per-character=\"4\" />
        <framework:request>
            <framework:format name=\"csv\">
                <framework:mime-type>text/csv</framework:mime-type>
                <framework:mime-type>text/plain</framework:mime-type>
            </framework:format>
            <framework:format name=\"pdf\">
                <framework:mime-type>application/pdf</framework:mime-type>
            </framework:format>
        </framework:request>
        <framework:assets version=\"v1\" />
        <framework:translator enabled=\"true\" fallback=\"fr\" logging=\"true\">
            <framework:path>%kernel.project_dir%/Fixtures/translations</framework:path>
        </framework:translator>
        <framework:validation enabled=\"true\" />
        <framework:annotations cache=\"file\" debug=\"true\" file-cache-dir=\"%kernel.cache_dir%/annotations\" />
        <framework:serializer enabled=\"true\" enable-annotations=\"true\" name-converter=\"serializer.name_converter.camel_case_to_snake_case\" circular-reference-handler=\"my.circular.reference.handler\" max-depth-handler=\"my.max.depth.handler\" />
        <framework:property-info />
    </framework:config>
</container>
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/full.xml", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/xml/full.xml");
    }
}
