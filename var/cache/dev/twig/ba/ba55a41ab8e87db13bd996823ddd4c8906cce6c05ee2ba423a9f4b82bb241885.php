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

/* config/bundles.php */
class __TwigTemplate_873cfcb847012ee9bf63c173cd6fdd822dcbc6437f7ac37aaaea59046d7448da extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "config/bundles.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "config/bundles.php"));

        // line 1
        echo "<?php

return [
    Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle::class => ['all' => true],
    Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle::class => ['all' => true],
    Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle::class => ['all' => true],
    Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle::class => ['all' => true],
    Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle::class => ['all' => true],
    Symfony\\Bundle\\SecurityBundle\\SecurityBundle::class => ['all' => true],
    Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle::class => ['all' => true],
    Symfony\\Bundle\\TwigBundle\\TwigBundle::class => ['all' => true],
    Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    Symfony\\Bundle\\MonologBundle\\MonologBundle::class => ['all' => true],
    Symfony\\Bundle\\DebugBundle\\DebugBundle::class => ['dev' => true, 'test' => true],
    Symfony\\Bundle\\MakerBundle\\MakerBundle::class => ['dev' => true],
    Symfony\\Bundle\\WebServerBundle\\WebServerBundle::class => ['dev' => true],
    Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle::class => ['dev' => true, 'test' => true],
];
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "config/bundles.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

return [
    Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle::class => ['all' => true],
    Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle::class => ['all' => true],
    Doctrine\\Bundle\\DoctrineCacheBundle\\DoctrineCacheBundle::class => ['all' => true],
    Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle::class => ['all' => true],
    Doctrine\\Bundle\\MigrationsBundle\\DoctrineMigrationsBundle::class => ['all' => true],
    Symfony\\Bundle\\SecurityBundle\\SecurityBundle::class => ['all' => true],
    Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle::class => ['all' => true],
    Symfony\\Bundle\\TwigBundle\\TwigBundle::class => ['all' => true],
    Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    Symfony\\Bundle\\MonologBundle\\MonologBundle::class => ['all' => true],
    Symfony\\Bundle\\DebugBundle\\DebugBundle::class => ['dev' => true, 'test' => true],
    Symfony\\Bundle\\MakerBundle\\MakerBundle::class => ['dev' => true],
    Symfony\\Bundle\\WebServerBundle\\WebServerBundle::class => ['dev' => true],
    Doctrine\\Bundle\\FixturesBundle\\DoctrineFixturesBundle::class => ['dev' => true, 'test' => true],
];
", "config/bundles.php", "/var/www/public/DevLaon/templates/config/bundles.php");
    }
}
