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

/* vendor/sensio/framework-extra-bundle/src/Resources/config/routing.xml */
class __TwigTemplate_7ea2bfc3e511ea1655389dc7636431d514e3eac2caaba186d514311ab563bfef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Resources/config/routing.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Resources/config/routing.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
    xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"sensio_framework_extra.routing.loader.annot_class\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader\" public=\"false\">
            <tag name=\"routing.loader\" />
            <argument type=\"service\" id=\"annotation_reader\" />
            <deprecated>The \"%service_id%\" service is deprecated since version 5.2</deprecated>
        </service>

        <service id=\"sensio_framework_extra.routing.loader.annot_dir\" class=\"Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader\" public=\"false\">
            <tag name=\"routing.loader\" />
            <argument type=\"service\" id=\"file_locator\" />
            <argument type=\"service\" id=\"sensio_framework_extra.routing.loader.annot_class\" />
            <deprecated>The \"%service_id%\" service is deprecated since version 5.2</deprecated>
        </service>

        <service id=\"sensio_framework_extra.routing.loader.annot_file\" class=\"Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader\" public=\"false\">
            <tag name=\"routing.loader\" />
            <argument type=\"service\" id=\"file_locator\" />
            <argument type=\"service\" id=\"sensio_framework_extra.routing.loader.annot_class\" />
            <deprecated>The \"%service_id%\" service is deprecated since version 5.2</deprecated>
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/Resources/config/routing.xml";
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
    xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">

    <services>
        <service id=\"sensio_framework_extra.routing.loader.annot_class\" class=\"Sensio\\Bundle\\FrameworkExtraBundle\\Routing\\AnnotatedRouteControllerLoader\" public=\"false\">
            <tag name=\"routing.loader\" />
            <argument type=\"service\" id=\"annotation_reader\" />
            <deprecated>The \"%service_id%\" service is deprecated since version 5.2</deprecated>
        </service>

        <service id=\"sensio_framework_extra.routing.loader.annot_dir\" class=\"Symfony\\Component\\Routing\\Loader\\AnnotationDirectoryLoader\" public=\"false\">
            <tag name=\"routing.loader\" />
            <argument type=\"service\" id=\"file_locator\" />
            <argument type=\"service\" id=\"sensio_framework_extra.routing.loader.annot_class\" />
            <deprecated>The \"%service_id%\" service is deprecated since version 5.2</deprecated>
        </service>

        <service id=\"sensio_framework_extra.routing.loader.annot_file\" class=\"Symfony\\Component\\Routing\\Loader\\AnnotationFileLoader\" public=\"false\">
            <tag name=\"routing.loader\" />
            <argument type=\"service\" id=\"file_locator\" />
            <argument type=\"service\" id=\"sensio_framework_extra.routing.loader.annot_class\" />
            <deprecated>The \"%service_id%\" service is deprecated since version 5.2</deprecated>
        </service>
    </services>
</container>
", "vendor/sensio/framework-extra-bundle/src/Resources/config/routing.xml", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/Resources/config/routing.xml");
    }
}
