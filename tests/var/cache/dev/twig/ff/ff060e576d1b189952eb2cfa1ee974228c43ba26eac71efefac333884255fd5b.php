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

/* vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/php/url_with_empty_options.php */
class __TwigTemplate_44db1ae1e5fbe2d7abfab6c2c9677944a9cd86fc4603b6832db550fb90c4d96e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/php/url_with_empty_options.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/php/url_with_empty_options.php"));

        // line 1
        echo "<?php

\$container->loadFromExtension('swiftmailer', [
    'default_mailer' => 'smtp_mailer',
    'mailers' => [
        'smtp_mailer' => [
            'url' => 'smtp://example.com:12345?username=&password=&encryption=&auth_mode=',
        ],
    ],
]);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/php/url_with_empty_options.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

\$container->loadFromExtension('swiftmailer', [
    'default_mailer' => 'smtp_mailer',
    'mailers' => [
        'smtp_mailer' => [
            'url' => 'smtp://example.com:12345?username=&password=&encryption=&auth_mode=',
        ],
    ],
]);
", "vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/php/url_with_empty_options.php", "/var/www/public/DevLaon/templates/vendor/symfony/swiftmailer-bundle/Tests/DependencyInjection/Fixtures/config/php/url_with_empty_options.php");
    }
}
