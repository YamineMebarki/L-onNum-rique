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

/* vendor/symfony/var-exporter/Tests/Fixtures/spl-object-storage.php */
class __TwigTemplate_b15da08bb7dd6c1ec8a6efbcd8e6ba5dbc6a260f8a825a166b5bd82afeb7c174 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-exporter/Tests/Fixtures/spl-object-storage.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-exporter/Tests/Fixtures/spl-object-storage.php"));

        // line 1
        echo "<?php

return \\Symfony\\Component\\VarExporter\\Internal\\Hydrator::hydrate(
    \$o = [
        clone ((\$p = &\\Symfony\\Component\\VarExporter\\Internal\\Registry::\$prototypes)['SplObjectStorage'] ?? \\Symfony\\Component\\VarExporter\\Internal\\Registry::p('SplObjectStorage')),
        clone (\$p['stdClass'] ?? \\Symfony\\Component\\VarExporter\\Internal\\Registry::p('stdClass')),
    ],
    null,
    [],
    \$o[0],
    [
        [
            [
                \$o[1],
                345,
            ],
            [],
        ],
    ]
);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-exporter/Tests/Fixtures/spl-object-storage.php";
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
        clone ((\$p = &\\Symfony\\Component\\VarExporter\\Internal\\Registry::\$prototypes)['SplObjectStorage'] ?? \\Symfony\\Component\\VarExporter\\Internal\\Registry::p('SplObjectStorage')),
        clone (\$p['stdClass'] ?? \\Symfony\\Component\\VarExporter\\Internal\\Registry::p('stdClass')),
    ],
    null,
    [],
    \$o[0],
    [
        [
            [
                \$o[1],
                345,
            ],
            [],
        ],
    ]
);
", "vendor/symfony/var-exporter/Tests/Fixtures/spl-object-storage.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-exporter/Tests/Fixtures/spl-object-storage.php");
    }
}
