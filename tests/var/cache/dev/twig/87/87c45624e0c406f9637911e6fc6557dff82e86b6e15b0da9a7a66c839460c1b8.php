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

/* vendor/fzaninotto/faker/test/test.php */
class __TwigTemplate_1049fa2681e561852437d7f65c2c3d266d28860c352b6e804bb8fd190a95c479 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/test.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/test.php"));

        // line 1
        echo "<?php
require __DIR__ .'/../vendor/autoload.php';
\$faker = Faker\\Factory::create();
\$faker->seed(5);

echo '<?xml version=\"1.0\" encoding=\"UTF-8\"?>';
?>
<contacts>
<?php for (\$i=0; \$i < 10; \$i++): ?>
  <contact firstName=\"<?php echo \$faker->firstName ?>\" lastName=\"<?php echo \$faker->lastName ?>\" email=\"<?php echo \$faker->email ?>\" >
    <phone number=\"<?php echo \$faker->phoneNumber ?>\"/>
<?php if (\$faker->boolean(25)): ?>
    <birth date=\"<?php echo \$faker->dateTimeThisCentury->format('Y-m-d') ?>\" place=\"<?php echo \$faker->city ?>\"/>
<?php endif; ?>
    <address>
      <street><?php echo \$faker->streetAddress ?></street>
      <city><?php echo \$faker->city ?></city>
      <postcode><?php echo \$faker->postcode ?></postcode>
      <state><?php echo \$faker->state ?></state>
    </address>
    <company name=\"<?php echo \$faker->company ?>\" catchPhrase=\"<?php echo \$faker->catchPhrase ?>\">
<?php if (\$faker->boolean(33)): ?>
      <offer><?php echo \$faker->bs ?></offer>
<?php endif; ?>
<?php if (\$faker->boolean(33)): ?>
      <director name=\"<?php echo \$faker->name ?>\" />
<?php endif; ?>
    </company>
<?php if (\$faker->boolean(15)): ?>
    <details>
<![CDATA[
<?php echo \$faker->text(400) ?>
]]>
    </details>
<?php endif; ?>
  </contact>
<?php endfor; ?>
</contacts>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/test.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
require __DIR__ .'/../vendor/autoload.php';
\$faker = Faker\\Factory::create();
\$faker->seed(5);

echo '<?xml version=\"1.0\" encoding=\"UTF-8\"?>';
?>
<contacts>
<?php for (\$i=0; \$i < 10; \$i++): ?>
  <contact firstName=\"<?php echo \$faker->firstName ?>\" lastName=\"<?php echo \$faker->lastName ?>\" email=\"<?php echo \$faker->email ?>\" >
    <phone number=\"<?php echo \$faker->phoneNumber ?>\"/>
<?php if (\$faker->boolean(25)): ?>
    <birth date=\"<?php echo \$faker->dateTimeThisCentury->format('Y-m-d') ?>\" place=\"<?php echo \$faker->city ?>\"/>
<?php endif; ?>
    <address>
      <street><?php echo \$faker->streetAddress ?></street>
      <city><?php echo \$faker->city ?></city>
      <postcode><?php echo \$faker->postcode ?></postcode>
      <state><?php echo \$faker->state ?></state>
    </address>
    <company name=\"<?php echo \$faker->company ?>\" catchPhrase=\"<?php echo \$faker->catchPhrase ?>\">
<?php if (\$faker->boolean(33)): ?>
      <offer><?php echo \$faker->bs ?></offer>
<?php endif; ?>
<?php if (\$faker->boolean(33)): ?>
      <director name=\"<?php echo \$faker->name ?>\" />
<?php endif; ?>
    </company>
<?php if (\$faker->boolean(15)): ?>
    <details>
<![CDATA[
<?php echo \$faker->text(400) ?>
]]>
    </details>
<?php endif; ?>
  </contact>
<?php endfor; ?>
</contacts>
", "vendor/fzaninotto/faker/test/test.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/test.php");
    }
}
