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

/* vendor/symfony/maker-bundle/src/Resources/skeleton/controller/Controller.tpl.php */
class __TwigTemplate_8b4d13b799aa363ef7b11e8cfc2684ceff061b4b74c5fed8e8476aa6de5fb6cb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/skeleton/controller/Controller.tpl.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/skeleton/controller/Controller.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use Symfony\\Bundle\\FrameworkBundle\\Controller\\<?= \$parent_class_name; ?>;
use Symfony\\Component\\Routing\\Annotation\\Route;

class <?= \$class_name; ?> extends <?= \$parent_class_name; ?><?= \"\\n\" ?>
{
    /**
     * @Route(\"<?= \$route_path ?>\", name=\"<?= \$route_name ?>\")
     */
    public function index()
    {
<?php if (\$with_template) { ?>
        return \$this->render('<?= \$template_name ?>', [
            'controller_name' => '<?= \$class_name ?>',
        ]);
<?php } else { ?>
        return \$this->json([
            'message' => 'Welcome to your new controller!',
            'path' => '<?= \$relative_path; ?>',
        ]);
<?php } ?>
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Resources/skeleton/controller/Controller.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace; ?>;

use Symfony\\Bundle\\FrameworkBundle\\Controller\\<?= \$parent_class_name; ?>;
use Symfony\\Component\\Routing\\Annotation\\Route;

class <?= \$class_name; ?> extends <?= \$parent_class_name; ?><?= \"\\n\" ?>
{
    /**
     * @Route(\"<?= \$route_path ?>\", name=\"<?= \$route_name ?>\")
     */
    public function index()
    {
<?php if (\$with_template) { ?>
        return \$this->render('<?= \$template_name ?>', [
            'controller_name' => '<?= \$class_name ?>',
        ]);
<?php } else { ?>
        return \$this->json([
            'message' => 'Welcome to your new controller!',
            'path' => '<?= \$relative_path; ?>',
        ]);
<?php } ?>
    }
}
", "vendor/symfony/maker-bundle/src/Resources/skeleton/controller/Controller.tpl.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Resources/skeleton/controller/Controller.tpl.php");
    }
}
