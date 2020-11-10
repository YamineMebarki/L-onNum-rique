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

/* vendor/symfony/maker-bundle/src/Resources/skeleton/doctrine/Entity.tpl.php */
class __TwigTemplate_76a1991cf35bd14ddff7119d488a7338dbebacca62af7059d03413fc6760b233 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/skeleton/doctrine/Entity.tpl.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/skeleton/doctrine/Entity.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace ?>;

<?php if (\$api_resource): ?>use ApiPlatform\\Core\\Annotation\\ApiResource;
<?php endif ?>
use Doctrine\\ORM\\Mapping as ORM;

/**
<?php if (\$api_resource): ?> * @ApiResource()
<?php endif ?>
 * @ORM\\Entity(repositoryClass=\"<?= \$repository_full_class_name ?>\")
 */
class <?= \$class_name.\"\\n\" ?>
{
    /**
     * @ORM\\Id()
     * @ORM\\GeneratedValue()
     * @ORM\\Column(type=\"integer\")
     */
    private \$id;

    public function getId(): ?int
    {
        return \$this->id;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Resources/skeleton/doctrine/Entity.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace ?>;

<?php if (\$api_resource): ?>use ApiPlatform\\Core\\Annotation\\ApiResource;
<?php endif ?>
use Doctrine\\ORM\\Mapping as ORM;

/**
<?php if (\$api_resource): ?> * @ApiResource()
<?php endif ?>
 * @ORM\\Entity(repositoryClass=\"<?= \$repository_full_class_name ?>\")
 */
class <?= \$class_name.\"\\n\" ?>
{
    /**
     * @ORM\\Id()
     * @ORM\\GeneratedValue()
     * @ORM\\Column(type=\"integer\")
     */
    private \$id;

    public function getId(): ?int
    {
        return \$this->id;
    }
}
", "vendor/symfony/maker-bundle/src/Resources/skeleton/doctrine/Entity.tpl.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Resources/skeleton/doctrine/Entity.tpl.php");
    }
}
