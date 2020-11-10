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

/* vendor/composer/autoload_classmap.php */
class __TwigTemplate_3f3869d0ed5a905540ce61e081b1a4de5d89c71aa92e92415a988f03b5ded5ca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/composer/autoload_classmap.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/composer/autoload_classmap.php"));

        // line 1
        echo "<?php

// autoload_classmap.php @generated by Composer

\$vendorDir = dirname(dirname(__FILE__));
\$baseDir = dirname(\$vendorDir);

return array(
    'Collator' => \$vendorDir . '/symfony/intl/Resources/stubs/Collator.php',
    'IntlDateFormatter' => \$vendorDir . '/symfony/intl/Resources/stubs/IntlDateFormatter.php',
    'JsonException' => \$vendorDir . '/symfony/polyfill-php73/Resources/stubs/JsonException.php',
    'Locale' => \$vendorDir . '/symfony/intl/Resources/stubs/Locale.php',
    'NumberFormatter' => \$vendorDir . '/symfony/intl/Resources/stubs/NumberFormatter.php',
    'SqlFormatter' => \$vendorDir . '/jdorn/sql-formatter/lib/SqlFormatter.php',
);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/composer/autoload_classmap.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

// autoload_classmap.php @generated by Composer

\$vendorDir = dirname(dirname(__FILE__));
\$baseDir = dirname(\$vendorDir);

return array(
    'Collator' => \$vendorDir . '/symfony/intl/Resources/stubs/Collator.php',
    'IntlDateFormatter' => \$vendorDir . '/symfony/intl/Resources/stubs/IntlDateFormatter.php',
    'JsonException' => \$vendorDir . '/symfony/polyfill-php73/Resources/stubs/JsonException.php',
    'Locale' => \$vendorDir . '/symfony/intl/Resources/stubs/Locale.php',
    'NumberFormatter' => \$vendorDir . '/symfony/intl/Resources/stubs/NumberFormatter.php',
    'SqlFormatter' => \$vendorDir . '/jdorn/sql-formatter/lib/SqlFormatter.php',
);
", "vendor/composer/autoload_classmap.php", "/var/www/public/DevLaon/templates/vendor/composer/autoload_classmap.php");
    }
}