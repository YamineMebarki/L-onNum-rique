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

/* vendor/fzaninotto/faker/test/documentor.php */
class __TwigTemplate_0f4b71f6338faa62b3a0ee3ad0d18d9b1860bba2f93c3a6554ba42c7f4369b37 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/documentor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/documentor.php"));

        // line 1
        echo "<?php
require_once __DIR__ . '/../vendor/autoload.php';

\$generator = Faker\\Factory::create();
\$generator->seed(1);
\$documentor = new Faker\\Documentor(\$generator);
?>
<?php foreach (\$documentor->getFormatters() as \$provider => \$formatters): ?>

### `<?php echo \$provider ?>`

<?php foreach (\$formatters as \$formatter => \$example): ?>
    <?php echo str_pad(\$formatter, 23) ?><?php if (\$example): ?> // <?php echo \$example ?> <?php endif; ?>

<?php endforeach; ?>
<?php endforeach;
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/documentor.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
require_once __DIR__ . '/../vendor/autoload.php';

\$generator = Faker\\Factory::create();
\$generator->seed(1);
\$documentor = new Faker\\Documentor(\$generator);
?>
<?php foreach (\$documentor->getFormatters() as \$provider => \$formatters): ?>

### `<?php echo \$provider ?>`

<?php foreach (\$formatters as \$formatter => \$example): ?>
    <?php echo str_pad(\$formatter, 23) ?><?php if (\$example): ?> // <?php echo \$example ?> <?php endif; ?>

<?php endforeach; ?>
<?php endforeach;
", "vendor/fzaninotto/faker/test/documentor.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/documentor.php");
    }
}
