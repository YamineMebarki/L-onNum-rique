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

/* vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/php/access_decision_manager_service_and_strategy.php */
class __TwigTemplate_3a288a4a98b5be00f7f1cb5c11764b755015f5f345ca2d724d35c266eed4d758 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/php/access_decision_manager_service_and_strategy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/php/access_decision_manager_service_and_strategy.php"));

        // line 1
        echo "<?php

\$container->loadFromExtension('security', [
    'access_decision_manager' => [
        'service' => 'app.access_decision_manager',
        'strategy' => 'affirmative',
    ],
    'providers' => [
        'default' => [
            'memory' => [
                'users' => [
                    'foo' => ['password' => 'foo', 'roles' => 'ROLE_USER'],
                ],
            ],
        ],
    ],
    'firewalls' => [
        'simple' => ['pattern' => '/login', 'security' => false],
    ],
]);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/php/access_decision_manager_service_and_strategy.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

\$container->loadFromExtension('security', [
    'access_decision_manager' => [
        'service' => 'app.access_decision_manager',
        'strategy' => 'affirmative',
    ],
    'providers' => [
        'default' => [
            'memory' => [
                'users' => [
                    'foo' => ['password' => 'foo', 'roles' => 'ROLE_USER'],
                ],
            ],
        ],
    ],
    'firewalls' => [
        'simple' => ['pattern' => '/login', 'security' => false],
    ],
]);
", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/php/access_decision_manager_service_and_strategy.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/php/access_decision_manager_service_and_strategy.php");
    }
}
