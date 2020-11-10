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

/* var/cache/dev/pools/+NAqFLA1FH/S/O/bKgZXiqMHbmvv0j+HNDw */
class __TwigTemplate_7d10e61d86eec5b454bbfe36e2867453a9457fc3e26af118fc97d7a22ca63acd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/pools/+NAqFLA1FH/S/O/bKgZXiqMHbmvv0j+HNDw"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/pools/+NAqFLA1FH/S/O/bKgZXiqMHbmvv0j+HNDw"));

        // line 1
        echo "<?php

namespace Symfony\\Component\\VarExporter\\Internal;

return \$getExpiry ? PHP_INT_MAX : Hydrator::hydrate(
    \$o = [
        clone (Registry::\$prototypes['Symfony\\\\Component\\\\Routing\\\\Annotation\\\\Route'] ?? Registry::p('Symfony\\\\Component\\\\Routing\\\\Annotation\\\\Route')),
    ],
    null,
    [
        'Symfony\\\\Component\\\\Routing\\\\Annotation\\\\Route' => [
            'path' => [
                '/login',
            ],
            'name' => [
                'security_login',
            ],
        ],
    ],
    [
        \$o[0],
    ],
    []
);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/pools/+NAqFLA1FH/S/O/bKgZXiqMHbmvv0j+HNDw";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Symfony\\Component\\VarExporter\\Internal;

return \$getExpiry ? PHP_INT_MAX : Hydrator::hydrate(
    \$o = [
        clone (Registry::\$prototypes['Symfony\\\\Component\\\\Routing\\\\Annotation\\\\Route'] ?? Registry::p('Symfony\\\\Component\\\\Routing\\\\Annotation\\\\Route')),
    ],
    null,
    [
        'Symfony\\\\Component\\\\Routing\\\\Annotation\\\\Route' => [
            'path' => [
                '/login',
            ],
            'name' => [
                'security_login',
            ],
        ],
    ],
    [
        \$o[0],
    ],
    []
);
", "var/cache/dev/pools/+NAqFLA1FH/S/O/bKgZXiqMHbmvv0j+HNDw", "/var/www/public/DevLaon/templates/var/cache/dev/pools/+NAqFLA1FH/S/O/bKgZXiqMHbmvv0j+HNDw");
    }
}
