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

/* vendor/symfony/maker-bundle/src/Resources/skeleton/form/Type.tpl.php */
class __TwigTemplate_ff6247e26c95f84c3a73e4d62fb75e5e756c302e30e4d28ec99a7857643dcb6a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/skeleton/form/Type.tpl.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Resources/skeleton/form/Type.tpl.php"));

        // line 1
        echo "<?= \"<?php\\n\" ?>

namespace <?= \$namespace ?>;

<?php if (\$bounded_full_class_name): ?>
use <?= \$bounded_full_class_name ?>;
<?php endif ?>
use Symfony\\Component\\Form\\AbstractType;
<?php foreach (\$field_type_use_statements as \$className): ?>
use <?= \$className ?>;
<?php endforeach; ?>
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
<?php foreach (\$constraint_use_statements as \$className): ?>
use <?= \$className ?>;
<?php endforeach; ?>

class <?= \$class_name ?> extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
<?php foreach (\$form_fields as \$form_field => \$typeOptions): ?>
<?php if (null === \$typeOptions['type'] && !\$typeOptions['options_code']): ?>
            ->add('<?= \$form_field ?>')
<?php elseif (null !== \$typeOptions['type'] && !\$typeOptions['options_code']): ?>
            ->add('<?= \$form_field ?>', <?= \$typeOptions['type'] ?>::class)
<?php else: ?>
            ->add('<?= \$form_field ?>', <?= \$typeOptions['type'] ? (\$typeOptions['type'].'::class') : 'null' ?>, [
<?= \$typeOptions['options_code'].\"\\n\" ?>
            ])
<?php endif; ?>
<?php endforeach; ?>
        ;
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
<?php if (\$bounded_full_class_name): ?>
            'data_class' => <?= \$bounded_class_name ?>::class,
<?php else: ?>
            // Configure your form options here
<?php endif ?>
        ]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Resources/skeleton/form/Type.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?= \"<?php\\n\" ?>

namespace <?= \$namespace ?>;

<?php if (\$bounded_full_class_name): ?>
use <?= \$bounded_full_class_name ?>;
<?php endif ?>
use Symfony\\Component\\Form\\AbstractType;
<?php foreach (\$field_type_use_statements as \$className): ?>
use <?= \$className ?>;
<?php endforeach; ?>
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
<?php foreach (\$constraint_use_statements as \$className): ?>
use <?= \$className ?>;
<?php endforeach; ?>

class <?= \$class_name ?> extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
<?php foreach (\$form_fields as \$form_field => \$typeOptions): ?>
<?php if (null === \$typeOptions['type'] && !\$typeOptions['options_code']): ?>
            ->add('<?= \$form_field ?>')
<?php elseif (null !== \$typeOptions['type'] && !\$typeOptions['options_code']): ?>
            ->add('<?= \$form_field ?>', <?= \$typeOptions['type'] ?>::class)
<?php else: ?>
            ->add('<?= \$form_field ?>', <?= \$typeOptions['type'] ? (\$typeOptions['type'].'::class') : 'null' ?>, [
<?= \$typeOptions['options_code'].\"\\n\" ?>
            ])
<?php endif; ?>
<?php endforeach; ?>
        ;
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefaults([
<?php if (\$bounded_full_class_name): ?>
            'data_class' => <?= \$bounded_class_name ?>::class,
<?php else: ?>
            // Configure your form options here
<?php endif ?>
        ]);
    }
}
", "vendor/symfony/maker-bundle/src/Resources/skeleton/form/Type.tpl.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Resources/skeleton/form/Type.tpl.php");
    }
}
