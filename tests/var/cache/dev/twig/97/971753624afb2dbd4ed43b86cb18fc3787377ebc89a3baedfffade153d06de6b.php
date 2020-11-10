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

/* config/packages/dev/monolog.yaml */
class __TwigTemplate_e5dfbb764fa36fa6a8b9d5350b203f844f4d29f4aea6cf5da1bd1004ade1ca90 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "config/packages/dev/monolog.yaml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "config/packages/dev/monolog.yaml"));

        // line 1
        echo "monolog:
    handlers:
        main:
            type: stream
            path: \"%kernel.logs_dir%/%kernel.environment%.log\"
            level: debug
            channels: [\"!event\"]
        # uncomment to get logging in your browser
        # you may have to allow bigger header sizes in your Web server configuration
        #firephp:
        #    type: firephp
        #    level: info
        #chromephp:
        #    type: chromephp
        #    level: info
        console:
            type: console
            process_psr_3_messages: false
            channels: [\"!event\", \"!doctrine\", \"!console\"]
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "config/packages/dev/monolog.yaml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("monolog:
    handlers:
        main:
            type: stream
            path: \"%kernel.logs_dir%/%kernel.environment%.log\"
            level: debug
            channels: [\"!event\"]
        # uncomment to get logging in your browser
        # you may have to allow bigger header sizes in your Web server configuration
        #firephp:
        #    type: firephp
        #    level: info
        #chromephp:
        #    type: chromephp
        #    level: info
        console:
            type: console
            process_psr_3_messages: false
            channels: [\"!event\", \"!doctrine\", \"!console\"]
", "config/packages/dev/monolog.yaml", "/var/www/public/DevLaon/templates/config/packages/dev/monolog.yaml");
    }
}
