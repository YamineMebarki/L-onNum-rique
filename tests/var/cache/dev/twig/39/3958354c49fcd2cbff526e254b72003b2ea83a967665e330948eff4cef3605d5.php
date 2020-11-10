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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere12Keywords.php */
class __TwigTemplate_65e995382764d2d150651aba584715e21d7ed9cb79ed7bb673f8c3a526da1cf9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere12Keywords.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere12Keywords.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

use function array_diff;
use function array_merge;

/**
 * SAP Sybase SQL Anywhere 12 reserved keywords list.
 */
class SQLAnywhere12Keywords extends SQLAnywhere11Keywords
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'SQLAnywhere12';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://dcx.sybase.com/1200/en/dbreference/alhakeywords.html
     */
    protected function getKeywords()
    {
        return array_merge(
            array_diff(
                parent::getKeywords(),
                [
                    'INDEX_LPAREN',
                    'SYNTAX_ERROR',
                    'WITH_CUBE',
                    'WITH_LPAREN',
                    'WITH_ROLLUP',
                ]
            ),
            [
                'DATETIMEOFFSET',
                'LIMIT',
                'OPENXML',
                'SPATIAL',
                'TREAT',
            ]
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere12Keywords.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL\\Platforms\\Keywords;

use function array_diff;
use function array_merge;

/**
 * SAP Sybase SQL Anywhere 12 reserved keywords list.
 */
class SQLAnywhere12Keywords extends SQLAnywhere11Keywords
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'SQLAnywhere12';
    }

    /**
     * {@inheritdoc}
     *
     * @link http://dcx.sybase.com/1200/en/dbreference/alhakeywords.html
     */
    protected function getKeywords()
    {
        return array_merge(
            array_diff(
                parent::getKeywords(),
                [
                    'INDEX_LPAREN',
                    'SYNTAX_ERROR',
                    'WITH_CUBE',
                    'WITH_LPAREN',
                    'WITH_ROLLUP',
                ]
            ),
            [
                'DATETIMEOFFSET',
                'LIMIT',
                'OPENXML',
                'SPATIAL',
                'TREAT',
            ]
        );
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere12Keywords.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Platforms/Keywords/SQLAnywhere12Keywords.php");
    }
}
