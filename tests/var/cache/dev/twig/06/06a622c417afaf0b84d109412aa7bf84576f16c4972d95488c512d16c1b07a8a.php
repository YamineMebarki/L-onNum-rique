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

/* vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/php/firewall_provider.php */
class __TwigTemplate_b24d519ff0c4777f106bdd075e3d6dea090099c85d502bc78555d502644785b9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/php/firewall_provider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/php/firewall_provider.php"));

        // line 1
        echo "<?php

\$container->loadFromExtension('security', [
    'providers' => [
        'default' => [
            'memory' => \$memory = [
                'users' => ['foo' => ['password' => 'foo', 'roles' => 'ROLE_USER']],
            ],
        ],
        'with-dash' => [
            'memory' => \$memory,
        ],
    ],
    'firewalls' => [
        'main' => [
            'provider' => 'default',
            'form_login' => true,
        ],
        'other' => [
            'provider' => 'with-dash',
            'form_login' => true,
        ],
    ],
]);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/php/firewall_provider.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

\$container->loadFromExtension('security', [
    'providers' => [
        'default' => [
            'memory' => \$memory = [
                'users' => ['foo' => ['password' => 'foo', 'roles' => 'ROLE_USER']],
            ],
        ],
        'with-dash' => [
            'memory' => \$memory,
        ],
    ],
    'firewalls' => [
        'main' => [
            'provider' => 'default',
            'form_login' => true,
        ],
        'other' => [
            'provider' => 'with-dash',
            'form_login' => true,
        ],
    ],
]);
", "vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/php/firewall_provider.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/DependencyInjection/Fixtures/php/firewall_provider.php");
    }
}
