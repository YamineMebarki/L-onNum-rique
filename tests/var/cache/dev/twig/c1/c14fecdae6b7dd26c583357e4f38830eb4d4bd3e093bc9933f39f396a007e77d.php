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

/* vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/messenger_multiple_buses.php */
class __TwigTemplate_b284a3ed8af3e0d65d9c86697814e5cd3f1c44e931bcc568636f166a0af55b12 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/messenger_multiple_buses.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/messenger_multiple_buses.php"));

        // line 1
        echo "<?php

\$container->loadFromExtension('framework', [
    'messenger' => [
        'default_bus' => 'messenger.bus.commands',
        'buses' => [
            'messenger.bus.commands' => null,
            'messenger.bus.events' => [
                'middleware' => [
                    ['with_factory' => ['foo', true, ['bar' => 'baz']]],
                ],
            ],
            'messenger.bus.queries' => [
                'default_middleware' => false,
                'middleware' => [
                    'send_message',
                    'handle_message',
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
        return "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/messenger_multiple_buses.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

\$container->loadFromExtension('framework', [
    'messenger' => [
        'default_bus' => 'messenger.bus.commands',
        'buses' => [
            'messenger.bus.commands' => null,
            'messenger.bus.events' => [
                'middleware' => [
                    ['with_factory' => ['foo', true, ['bar' => 'baz']]],
                ],
            ],
            'messenger.bus.queries' => [
                'default_middleware' => false,
                'middleware' => [
                    'send_message',
                    'handle_message',
                ],
            ],
        ],
    ],
]);
", "vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/messenger_multiple_buses.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/DependencyInjection/Fixtures/php/messenger_multiple_buses.php");
    }
}
