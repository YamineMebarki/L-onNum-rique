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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/cache.php */
class __TwigTemplate_b6ec0eeb7d67768fa2ef7d5a6fd6f577c1fc84a0e515e3c6239f087f3f1500c2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/cache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/cache.php"));

        // line 1
        echo "<?php

\$container->loadFromExtension('framework', [
    'cache' => [
        'pools' => [
            'cache.foo' => [
                'adapter' => 'cache.adapter.apcu',
                'default_lifetime' => 30,
            ],
            'cache.bar' => [
                'adapter' => 'cache.adapter.doctrine',
                'default_lifetime' => 5,
                'provider' => 'app.doctrine_cache_provider',
            ],
            'cache.baz' => [
                'adapter' => 'cache.adapter.filesystem',
                'default_lifetime' => 7,
            ],
            'cache.foobar' => [
                'adapter' => 'cache.adapter.psr6',
                'default_lifetime' => 10,
                'provider' => 'app.cache_pool',
            ],
            'cache.def' => [
                'default_lifetime' => 11,
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
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/cache.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

\$container->loadFromExtension('framework', [
    'cache' => [
        'pools' => [
            'cache.foo' => [
                'adapter' => 'cache.adapter.apcu',
                'default_lifetime' => 30,
            ],
            'cache.bar' => [
                'adapter' => 'cache.adapter.doctrine',
                'default_lifetime' => 5,
                'provider' => 'app.doctrine_cache_provider',
            ],
            'cache.baz' => [
                'adapter' => 'cache.adapter.filesystem',
                'default_lifetime' => 7,
            ],
            'cache.foobar' => [
                'adapter' => 'cache.adapter.psr6',
                'default_lifetime' => 10,
                'provider' => 'app.cache_pool',
            ],
            'cache.def' => [
                'default_lifetime' => 11,
            ],
        ],
    ],
]);
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/cache.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/cache.php");
    }
}
