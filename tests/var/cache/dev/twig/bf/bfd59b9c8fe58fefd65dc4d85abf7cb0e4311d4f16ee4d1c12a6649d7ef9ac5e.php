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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServer2012Keywords.php */
class __TwigTemplate_7a3936e5b8facc221c42d754153f1f4dd006ebfb36053b09b8ec889672382166 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServer2012Keywords.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServer2012Keywords.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

use function array_merge;

/**
 * Microsoft SQL Server 2012 reserved keyword dictionary.
 *
 * @link    www.doctrine-project.com
 */
class SQLServer2012Keywords extends SQLServer2008Keywords
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'SQLServer2012';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://msdn.microsoft.com/en-us/library/ms189822.aspx
     */
    protected function getKeywords()
    {
        return array_merge(parent::getKeywords(), [
            'SEMANTICKEYPHRASETABLE',
            'SEMANTICSIMILARITYDETAILSTABLE',
            'SEMANTICSIMILARITYTABLE',
            'TRY_CONVERT',
            'WITHIN GROUP',
        ]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServer2012Keywords.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

use function array_merge;

/**
 * Microsoft SQL Server 2012 reserved keyword dictionary.
 *
 * @link    www.doctrine-project.com
 */
class SQLServer2012Keywords extends SQLServer2008Keywords
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'SQLServer2012';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://msdn.microsoft.com/en-us/library/ms189822.aspx
     */
    protected function getKeywords()
    {
        return array_merge(parent::getKeywords(), [
            'SEMANTICKEYPHRASETABLE',
            'SEMANTICSIMILARITYDETAILSTABLE',
            'SEMANTICSIMILARITYTABLE',
            'TRY_CONVERT',
            'WITHIN GROUP',
        ]);
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServer2012Keywords.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLServer2012Keywords.php");
    }
}
