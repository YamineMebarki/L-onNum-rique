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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/workflow_legacy_with_type_and_service.php */
class __TwigTemplate_ae7eff2920574441e3c397e4d5566fa646a2a7fc6c86162a34a0c05d78231c17 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/workflow_legacy_with_type_and_service.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/workflow_legacy_with_type_and_service.php"));

        // line 1
        echo "<?php

use Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\FrameworkExtensionTest;

\$container->loadFromExtension('framework', [
    'workflows' => [
        'my_workflow' => [
            'marking_store' => [
                'type' => 'method',
                'service' => 'workflow_service',
            ],
            'supports' => [
                FrameworkExtensionTest::class,
            ],
            'places' => [
                'first',
                'last',
            ],
            'transitions' => [
                'go' => [
                    'from' => [
                        'first',
                    ],
                    'to' => [
                        'last',
                    ],
                ],
            ],
        ],
    ],
]);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/workflow_legacy_with_type_and_service.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Bundle\\FrameworkBundle\\Tests\\DependencyInjection\\FrameworkExtensionTest;

\$container->loadFromExtension('framework', [
    'workflows' => [
        'my_workflow' => [
            'marking_store' => [
                'type' => 'method',
                'service' => 'workflow_service',
            ],
            'supports' => [
                FrameworkExtensionTest::class,
            ],
            'places' => [
                'first',
                'last',
            ],
            'transitions' => [
                'go' => [
                    'from' => [
                        'first',
                    ],
                    'to' => [
                        'last',
                    ],
                ],
            ],
        ],
    ],
]);
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/workflow_legacy_with_type_and_service.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/workflow_legacy_with_type_and_service.php");
    }
}
