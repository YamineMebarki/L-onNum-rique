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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardChoser/ShardChoser.php */
class __TwigTemplate_5f1fefbbadfb8d02ee2eb547a3ab9b99956a22e4e50fb7e1ff99ff65c281eb07 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardChoser/ShardChoser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardChoser/ShardChoser.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Sharding\\ShardChoser;

use Doctrine\\DBAL\\Sharding\\PoolingShardConnection;

/**
 * Given a distribution value this shard-choser strategy will pick the shard to
 * connect to for retrieving rows with the distribution value.
 */
interface ShardChoser
{
    /**
     * Picks a shard for the given distribution value.
     *
     * @param string|int \$distributionValue
     *
     * @return string|int
     */
    public function pickShard(\$distributionValue, PoolingShardConnection \$conn);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardChoser/ShardChoser.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Sharding\\ShardChoser;

use Doctrine\\DBAL\\Sharding\\PoolingShardConnection;

/**
 * Given a distribution value this shard-choser strategy will pick the shard to
 * connect to for retrieving rows with the distribution value.
 */
interface ShardChoser
{
    /**
     * Picks a shard for the given distribution value.
     *
     * @param string|int \$distributionValue
     *
     * @return string|int
     */
    public function pickShard(\$distributionValue, PoolingShardConnection \$conn);
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardChoser/ShardChoser.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Sharding/ShardChoser/ShardChoser.php");
    }
}
