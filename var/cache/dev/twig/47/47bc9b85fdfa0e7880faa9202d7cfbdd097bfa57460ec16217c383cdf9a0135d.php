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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/template_and_fragments.php */
class __TwigTemplate_62c4ae8414271db61a51ac27302592f7cc186949742127f822345ff6b98235c3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/template_and_fragments.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/template_and_fragments.php"));

        // line 1
        echo "<?php

\$container->loadFromExtension('framework', [
    'templating' => [
        'cache' => '/path/to/cache',
        'engines' => ['php', 'twig'],
        'loader' => ['loader.foo', 'loader.bar'],
        'form' => [
            'resources' => ['theme1', 'theme2'],
        ],
        'hinclude_default_template' => 'global_hinclude_template',
    ],
    'assets' => null,
    'fragments' => [
        'enabled' => true,
        'hinclude_default_template' => 'global_hinclude_template',
    ],
]);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/template_and_fragments.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

\$container->loadFromExtension('framework', [
    'templating' => [
        'cache' => '/path/to/cache',
        'engines' => ['php', 'twig'],
        'loader' => ['loader.foo', 'loader.bar'],
        'form' => [
            'resources' => ['theme1', 'theme2'],
        ],
        'hinclude_default_template' => 'global_hinclude_template',
    ],
    'assets' => null,
    'fragments' => [
        'enabled' => true,
        'hinclude_default_template' => 'global_hinclude_template',
    ],
]);
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/template_and_fragments.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/template_and_fragments.php");
    }
}
