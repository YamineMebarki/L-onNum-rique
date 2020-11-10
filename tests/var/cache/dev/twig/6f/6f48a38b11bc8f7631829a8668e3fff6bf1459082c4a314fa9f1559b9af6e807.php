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

/* config/packages/dev/easy_log_handler.yaml */
class __TwigTemplate_5f5da44d620df4a2393c215e21e2354301db3e16c6b851947f8ead85faf50f1d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "config/packages/dev/easy_log_handler.yaml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "config/packages/dev/easy_log_handler.yaml"));

        // line 1
        echo "services:
    EasyCorp\\EasyLog\\EasyLogHandler:
        public: false
        arguments: ['%kernel.logs_dir%/%kernel.environment%.log']

#// FIXME: How to add this configuration automatically without messing up with the monolog configuration?
#monolog:
#    handlers:
#        buffered:
#            type:     buffer
#            handler:  easylog
#            channels: ['!event']
#            level:    debug
#        easylog:
#            type: service
#            id:   EasyCorp\\EasyLog\\EasyLogHandler
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "config/packages/dev/easy_log_handler.yaml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("services:
    EasyCorp\\EasyLog\\EasyLogHandler:
        public: false
        arguments: ['%kernel.logs_dir%/%kernel.environment%.log']

#// FIXME: How to add this configuration automatically without messing up with the monolog configuration?
#monolog:
#    handlers:
#        buffered:
#            type:     buffer
#            handler:  easylog
#            channels: ['!event']
#            level:    debug
#        easylog:
#            type: service
#            id:   EasyCorp\\EasyLog\\EasyLogHandler
", "config/packages/dev/easy_log_handler.yaml", "/var/www/public/DevLaon/templates/config/packages/dev/easy_log_handler.yaml");
    }
}
