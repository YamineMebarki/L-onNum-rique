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

/* vendor/composer/autoload_files.php */
class __TwigTemplate_791706b16d67adbbc56fb7ebda6bb27bf5ed97744bf71ae5ce53eb16f8b0b2ab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/composer/autoload_files.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/composer/autoload_files.php"));

        // line 1
        echo "<?php

// autoload_files.php @generated by Composer

\$vendorDir = dirname(dirname(__FILE__));
\$baseDir = dirname(\$vendorDir);

return array(
    '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => \$vendorDir . '/symfony/polyfill-mbstring/bootstrap.php',
    '0d59ee240a4cd96ddbb4ff164fccea4d' => \$vendorDir . '/symfony/polyfill-php73/bootstrap.php',
    '92c8763cd6170fce6fcfe7e26b4e8c10' => \$vendorDir . '/symfony/phpunit-bridge/bootstrap.php',
    '25072dd6e2470089de65ae7bf11d3109' => \$vendorDir . '/symfony/polyfill-php72/bootstrap.php',
    '667aeda72477189d0494fecd327c3641' => \$vendorDir . '/symfony/var-dumper/Resources/functions/dump.php',
    'f598d06aa772fa33d905e87be6398fb1' => \$vendorDir . '/symfony/polyfill-intl-idn/bootstrap.php',
    '6a47392539ca2329373e0d33e1dba053' => \$vendorDir . '/symfony/polyfill-intl-icu/bootstrap.php',
    '2c102faa651ef8ea5874edb585946bce' => \$vendorDir . '/swiftmailer/swiftmailer/lib/swift_required.php',
);
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/composer/autoload_files.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

// autoload_files.php @generated by Composer

\$vendorDir = dirname(dirname(__FILE__));
\$baseDir = dirname(\$vendorDir);

return array(
    '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => \$vendorDir . '/symfony/polyfill-mbstring/bootstrap.php',
    '0d59ee240a4cd96ddbb4ff164fccea4d' => \$vendorDir . '/symfony/polyfill-php73/bootstrap.php',
    '92c8763cd6170fce6fcfe7e26b4e8c10' => \$vendorDir . '/symfony/phpunit-bridge/bootstrap.php',
    '25072dd6e2470089de65ae7bf11d3109' => \$vendorDir . '/symfony/polyfill-php72/bootstrap.php',
    '667aeda72477189d0494fecd327c3641' => \$vendorDir . '/symfony/var-dumper/Resources/functions/dump.php',
    'f598d06aa772fa33d905e87be6398fb1' => \$vendorDir . '/symfony/polyfill-intl-idn/bootstrap.php',
    '6a47392539ca2329373e0d33e1dba053' => \$vendorDir . '/symfony/polyfill-intl-icu/bootstrap.php',
    '2c102faa651ef8ea5874edb585946bce' => \$vendorDir . '/swiftmailer/swiftmailer/lib/swift_required.php',
);
", "vendor/composer/autoload_files.php", "/var/www/public/DevLaon/templates/vendor/composer/autoload_files.php");
    }
}
