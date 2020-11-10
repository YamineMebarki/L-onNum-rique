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

/* vendor/symfony/form/Extension/Validator/Type/FormTypeValidatorExtension.php */
class __TwigTemplate_92a6368c6c4e205ad5843122982c47654660e98ed1c503ff38642826c4cac285 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Validator/Type/FormTypeValidatorExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Validator/Type/FormTypeValidatorExtension.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Form\\Extension\\Validator\\Type;

use Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType;
use Symfony\\Component\\Form\\Extension\\Validator\\EventListener\\ValidationListener;
use Symfony\\Component\\Form\\Extension\\Validator\\ViolationMapper\\ViolationMapper;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormTypeValidatorExtension extends BaseValidatorExtension
{
    private \$validator;
    private \$violationMapper;

    public function __construct(ValidatorInterface \$validator)
    {
        \$this->validator = \$validator;
        \$this->violationMapper = new ViolationMapper();
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->addEventSubscriber(new ValidationListener(\$this->validator, \$this->violationMapper));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        parent::configureOptions(\$resolver);

        // Constraint should always be converted to an array
        \$constraintsNormalizer = function (Options \$options, \$constraints) {
            return \\is_object(\$constraints) ? [\$constraints] : (array) \$constraints;
        };

        \$resolver->setDefaults([
            'error_mapping' => [],
            'constraints' => [],
            'invalid_message' => 'This value is not valid.',
            'invalid_message_parameters' => [],
            'allow_extra_fields' => false,
            'extra_fields_message' => 'This form should not contain extra fields.',
        ]);

        \$resolver->setNormalizer('constraints', \$constraintsNormalizer);
    }

    /**
     * {@inheritdoc}
     */
    public static function getExtendedTypes(): iterable
    {
        return [FormType::class];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Validator/Type/FormTypeValidatorExtension.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Form\\Extension\\Validator\\Type;

use Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType;
use Symfony\\Component\\Form\\Extension\\Validator\\EventListener\\ValidationListener;
use Symfony\\Component\\Form\\Extension\\Validator\\ViolationMapper\\ViolationMapper;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Validator\\ValidatorInterface;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormTypeValidatorExtension extends BaseValidatorExtension
{
    private \$validator;
    private \$violationMapper;

    public function __construct(ValidatorInterface \$validator)
    {
        \$this->validator = \$validator;
        \$this->violationMapper = new ViolationMapper();
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder->addEventSubscriber(new ValidationListener(\$this->validator, \$this->violationMapper));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver \$resolver)
    {
        parent::configureOptions(\$resolver);

        // Constraint should always be converted to an array
        \$constraintsNormalizer = function (Options \$options, \$constraints) {
            return \\is_object(\$constraints) ? [\$constraints] : (array) \$constraints;
        };

        \$resolver->setDefaults([
            'error_mapping' => [],
            'constraints' => [],
            'invalid_message' => 'This value is not valid.',
            'invalid_message_parameters' => [],
            'allow_extra_fields' => false,
            'extra_fields_message' => 'This form should not contain extra fields.',
        ]);

        \$resolver->setNormalizer('constraints', \$constraintsNormalizer);
    }

    /**
     * {@inheritdoc}
     */
    public static function getExtendedTypes(): iterable
    {
        return [FormType::class];
    }
}
", "vendor/symfony/form/Extension/Validator/Type/FormTypeValidatorExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Validator/Type/FormTypeValidatorExtension.php");
    }
}
