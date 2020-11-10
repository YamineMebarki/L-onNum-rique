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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/assets.php */
class __TwigTemplate_0fd60b9c79bd7f992c23d3736960d31c09eb78ea2a86b780b4130bdb8eac0c3a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/assets.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/assets.php"));

        // line 1
        echo "<?php

\$container->loadFromExtension('framework', [
    'assets' => [
        'version' => 'SomeVersionScheme',
        'base_urls' => 'http://cdn.example.com',
        'version_format' => '%%s?version=%%s',
        'packages' => [
            'images_path' => [
                'base_path' => '/foo',
            ],
            'images' => [
                'version' => '1.0.0',
                'base_urls' => ['http://images1.example.com', 'http://images2.example.com'],
            ],
            'foo' => [
                'version' => '1.0.0',
                'version_format' => '%%s-%%s',
            ],
            'bar' => [
                'base_urls' => ['https://bar2.example.com'],
            ],
            'bar_version_strategy' => [
                'base_urls' => ['https://bar2.example.com'],
                'version_strategy' => 'assets.custom_version_strategy',
            ],
            'json_manifest_strategy' => [
                'json_manifest_path' => '/path/to/manifest.json',
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
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/assets.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

\$container->loadFromExtension('framework', [
    'assets' => [
        'version' => 'SomeVersionScheme',
        'base_urls' => 'http://cdn.example.com',
        'version_format' => '%%s?version=%%s',
        'packages' => [
            'images_path' => [
                'base_path' => '/foo',
            ],
            'images' => [
                'version' => '1.0.0',
                'base_urls' => ['http://images1.example.com', 'http://images2.example.com'],
            ],
            'foo' => [
                'version' => '1.0.0',
                'version_format' => '%%s-%%s',
            ],
            'bar' => [
                'base_urls' => ['https://bar2.example.com'],
            ],
            'bar_version_strategy' => [
                'base_urls' => ['https://bar2.example.com'],
                'version_strategy' => 'assets.custom_version_strategy',
            ],
            'json_manifest_strategy' => [
                'json_manifest_path' => '/path/to/manifest.json',
            ],
        ],
    ],
]);
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/assets.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/assets.php");
    }
}
