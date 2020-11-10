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

/* vendor/doctrine/doctrine-bundle/Dbal/RegexSchemaAssetFilter.php */
class __TwigTemplate_847f7cea81f8faa111246e8e4cafb507851613d56dce5724f6c1f2269a9b8181 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Dbal/RegexSchemaAssetFilter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Dbal/RegexSchemaAssetFilter.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Dbal;

use Doctrine\\DBAL\\Schema\\AbstractAsset;

class RegexSchemaAssetFilter
{
    /** @var string */
    private \$filterExpression;

    public function __construct(string \$filterExpression)
    {
        \$this->filterExpression = \$filterExpression;
    }

    public function __invoke(\$assetName) : bool
    {
        if (\$assetName instanceof AbstractAsset) {
            \$assetName = \$assetName->getName();
        }

        return preg_match(\$this->filterExpression, \$assetName);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/Dbal/RegexSchemaAssetFilter.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\Dbal;

use Doctrine\\DBAL\\Schema\\AbstractAsset;

class RegexSchemaAssetFilter
{
    /** @var string */
    private \$filterExpression;

    public function __construct(string \$filterExpression)
    {
        \$this->filterExpression = \$filterExpression;
    }

    public function __invoke(\$assetName) : bool
    {
        if (\$assetName instanceof AbstractAsset) {
            \$assetName = \$assetName->getName();
        }

        return preg_match(\$this->filterExpression, \$assetName);
    }
}
", "vendor/doctrine/doctrine-bundle/Dbal/RegexSchemaAssetFilter.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/Dbal/RegexSchemaAssetFilter.php");
    }
}
