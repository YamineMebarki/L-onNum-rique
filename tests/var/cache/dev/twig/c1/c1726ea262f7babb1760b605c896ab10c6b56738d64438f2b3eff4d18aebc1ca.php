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

/* vendor/symfony/dependency-injection/Tests/Fixtures/yaml/integration/defaults_instanceof_importance/expected.yml */
class __TwigTemplate_e392861a4207ddc245bec929548661dec2aeb07c9b86cf57a25934d2475ad004 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/integration/defaults_instanceof_importance/expected.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/integration/defaults_instanceof_importance/expected.yml"));

        // line 1
        echo "services:
    # main_service should look like this in the end
    main_service_expected:
        class: Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\IntegrationTestStub
        # _instanceof overrides _defaults
        autowire: false
        # inherited from _defaults
        autoconfigure: true
        # from _instanceof
        shared: false
        # service definition overrides _instanceof
        public: true

        tags:
            - { name: foo_tag, tag_option: from_service }
            # these 2 are from instanceof
            - { name: foo_tag, tag_option: from_instanceof }
            - { name: bar_tag }
            - { name: from_defaults }
        # calls from instanceof are kept, but this comes later
        calls:
            # first call is from instanceof
            - [setSunshine, [bright]]
            #
            - [enableSummer, [true]]
            - [setSunshine, [warm]]
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/integration/defaults_instanceof_importance/expected.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("services:
    # main_service should look like this in the end
    main_service_expected:
        class: Symfony\\Component\\DependencyInjection\\Tests\\Compiler\\IntegrationTestStub
        # _instanceof overrides _defaults
        autowire: false
        # inherited from _defaults
        autoconfigure: true
        # from _instanceof
        shared: false
        # service definition overrides _instanceof
        public: true

        tags:
            - { name: foo_tag, tag_option: from_service }
            # these 2 are from instanceof
            - { name: foo_tag, tag_option: from_instanceof }
            - { name: bar_tag }
            - { name: from_defaults }
        # calls from instanceof are kept, but this comes later
        calls:
            # first call is from instanceof
            - [setSunshine, [bright]]
            #
            - [enableSummer, [true]]
            - [setSunshine, [warm]]
", "vendor/symfony/dependency-injection/Tests/Fixtures/yaml/integration/defaults_instanceof_importance/expected.yml", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Tests/Fixtures/yaml/integration/defaults_instanceof_importance/expected.yml");
    }
}
