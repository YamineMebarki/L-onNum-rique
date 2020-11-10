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

/* vendor/doctrine/dbal/lib/Doctrine/DBAL/Version.php */
class __TwigTemplate_8ca0835c64445c5bd0d7e8de1b8f4643b0f8c68eb0c0c27edb30f407acea6ddf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Version.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Version.php"));

        // line 1
        echo "<?php

namespace Doctrine\\DBAL;

use function str_replace;
use function strtolower;
use function version_compare;

/**
 * Class to store and retrieve the version of Doctrine.
 */
class Version
{
    /**
     * Current Doctrine Version.
     */
    public const VERSION = '2.9.2';

    /**
     * Compares a Doctrine version with the current one.
     *
     * @param string \$version The Doctrine version to compare to.
     *
     * @return int -1 if older, 0 if it is the same, 1 if version passed as argument is newer.
     */
    public static function compare(\$version)
    {
        \$currentVersion = str_replace(' ', '', strtolower(self::VERSION));
        \$version        = str_replace(' ', '', \$version);

        return version_compare(\$version, \$currentVersion);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/lib/Doctrine/DBAL/Version.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\DBAL;

use function str_replace;
use function strtolower;
use function version_compare;

/**
 * Class to store and retrieve the version of Doctrine.
 */
class Version
{
    /**
     * Current Doctrine Version.
     */
    public const VERSION = '2.9.2';

    /**
     * Compares a Doctrine version with the current one.
     *
     * @param string \$version The Doctrine version to compare to.
     *
     * @return int -1 if older, 0 if it is the same, 1 if version passed as argument is newer.
     */
    public static function compare(\$version)
    {
        \$currentVersion = str_replace(' ', '', strtolower(self::VERSION));
        \$version        = str_replace(' ', '', \$version);

        return version_compare(\$version, \$currentVersion);
    }
}
", "vendor/doctrine/dbal/lib/Doctrine/DBAL/Version.php", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/lib/Doctrine/DBAL/Version.php");
    }
}
