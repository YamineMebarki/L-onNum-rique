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

/* vendor/symfony/var-exporter/Tests/Fixtures/final-error.php */
class __TwigTemplate_0f4d98de99d04c8fd2925eb314f52bcb82908bd4b52aa6b503c96dbf40ae92b1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-exporter/Tests/Fixtures/final-error.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-exporter/Tests/Fixtures/final-error.php"));

        // line 1
        echo "<?php

return \\Symfony\\Component\\VarExporter\\Internal\\Hydrator::hydrate(
    \$o = [
        (\\Symfony\\Component\\VarExporter\\Internal\\Registry::\$factories['Symfony\\\\Component\\\\VarExporter\\\\Tests\\\\FinalError'] ?? \\Symfony\\Component\\VarExporter\\Internal\\Registry::f('Symfony\\\\Component\\\\VarExporter\\\\Tests\\\\FinalError'))(),
    ],
    null,
    [
        'TypeError' => [
            'file' => [
                \\dirname(__DIR__).\\DIRECTORY_SEPARATOR.'VarExporterTest.php',
            ],
            'line' => [
                123,
            ],
        ],
        'Error' => [
            'trace' => [
                [],
            ],
        ],
    ],
    \$o[0],
    [
        1 => 0,
    ]
);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-exporter/Tests/Fixtures/final-error.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

return \\Symfony\\Component\\VarExporter\\Internal\\Hydrator::hydrate(
    \$o = [
        (\\Symfony\\Component\\VarExporter\\Internal\\Registry::\$factories['Symfony\\\\Component\\\\VarExporter\\\\Tests\\\\FinalError'] ?? \\Symfony\\Component\\VarExporter\\Internal\\Registry::f('Symfony\\\\Component\\\\VarExporter\\\\Tests\\\\FinalError'))(),
    ],
    null,
    [
        'TypeError' => [
            'file' => [
                \\dirname(__DIR__).\\DIRECTORY_SEPARATOR.'VarExporterTest.php',
            ],
            'line' => [
                123,
            ],
        ],
        'Error' => [
            'trace' => [
                [],
            ],
        ],
    ],
    \$o[0],
    [
        1 => 0,
    ]
);
", "vendor/symfony/var-exporter/Tests/Fixtures/final-error.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-exporter/Tests/Fixtures/final-error.php");
    }
}
