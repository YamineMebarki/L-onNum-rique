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

/* vendor/symfony/form/Forms.php */
class __TwigTemplate_b8ae8a4ca585dbbff3ba3ebf6ba1cfa4b81ade11497ee4ce88f527e7713b3160 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Forms.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Forms.php"));

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

namespace Symfony\\Component\\Form;

/**
 * Entry point of the Form component.
 *
 * Use this class to conveniently create new form factories:
 *
 *     use Symfony\\Component\\Form\\Forms;
 *
 *     \$formFactory = Forms::createFormFactory();
 *
 *     \$form = \$formFactory->createBuilder()
 *         ->add('firstName', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType')
 *         ->add('lastName', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType')
 *         ->add('age', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType')
 *         ->add('color', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', [
 *             'choices' => ['Red' => 'r', 'Blue' => 'b'],
 *         ])
 *         ->getForm();
 *
 * You can also add custom extensions to the form factory:
 *
 *     \$formFactory = Forms::createFormFactoryBuilder()
 *         ->addExtension(new AcmeExtension())
 *         ->getFormFactory();
 *
 * If you create custom form types or type extensions, it is
 * generally recommended to create your own extensions that lazily
 * load these types and type extensions. In projects where performance
 * does not matter that much, you can also pass them directly to the
 * form factory:
 *
 *     \$formFactory = Forms::createFormFactoryBuilder()
 *         ->addType(new PersonType())
 *         ->addType(new PhoneNumberType())
 *         ->addTypeExtension(new FormTypeHelpTextExtension())
 *         ->getFormFactory();
 *
 * Support for the Validator component is provided by ValidatorExtension.
 * This extension needs a validator object to function properly:
 *
 *     use Symfony\\Component\\Validator\\Validation;
 *     use Symfony\\Component\\Form\\Extension\\Validator\\ValidatorExtension;
 *
 *     \$validator = Validation::createValidator();
 *     \$formFactory = Forms::createFormFactoryBuilder()
 *         ->addExtension(new ValidatorExtension(\$validator))
 *         ->getFormFactory();
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
final class Forms
{
    /**
     * Creates a form factory with the default configuration.
     *
     * @return FormFactoryInterface The form factory
     */
    public static function createFormFactory(): FormFactoryInterface
    {
        return self::createFormFactoryBuilder()->getFormFactory();
    }

    /**
     * Creates a form factory builder with the default configuration.
     *
     * @return FormFactoryBuilderInterface The form factory builder
     */
    public static function createFormFactoryBuilder(): FormFactoryBuilderInterface
    {
        return new FormFactoryBuilder(true);
    }

    /**
     * This class cannot be instantiated.
     */
    private function __construct()
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Forms.php";
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

namespace Symfony\\Component\\Form;

/**
 * Entry point of the Form component.
 *
 * Use this class to conveniently create new form factories:
 *
 *     use Symfony\\Component\\Form\\Forms;
 *
 *     \$formFactory = Forms::createFormFactory();
 *
 *     \$form = \$formFactory->createBuilder()
 *         ->add('firstName', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType')
 *         ->add('lastName', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType')
 *         ->add('age', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\IntegerType')
 *         ->add('color', 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', [
 *             'choices' => ['Red' => 'r', 'Blue' => 'b'],
 *         ])
 *         ->getForm();
 *
 * You can also add custom extensions to the form factory:
 *
 *     \$formFactory = Forms::createFormFactoryBuilder()
 *         ->addExtension(new AcmeExtension())
 *         ->getFormFactory();
 *
 * If you create custom form types or type extensions, it is
 * generally recommended to create your own extensions that lazily
 * load these types and type extensions. In projects where performance
 * does not matter that much, you can also pass them directly to the
 * form factory:
 *
 *     \$formFactory = Forms::createFormFactoryBuilder()
 *         ->addType(new PersonType())
 *         ->addType(new PhoneNumberType())
 *         ->addTypeExtension(new FormTypeHelpTextExtension())
 *         ->getFormFactory();
 *
 * Support for the Validator component is provided by ValidatorExtension.
 * This extension needs a validator object to function properly:
 *
 *     use Symfony\\Component\\Validator\\Validation;
 *     use Symfony\\Component\\Form\\Extension\\Validator\\ValidatorExtension;
 *
 *     \$validator = Validation::createValidator();
 *     \$formFactory = Forms::createFormFactoryBuilder()
 *         ->addExtension(new ValidatorExtension(\$validator))
 *         ->getFormFactory();
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
final class Forms
{
    /**
     * Creates a form factory with the default configuration.
     *
     * @return FormFactoryInterface The form factory
     */
    public static function createFormFactory(): FormFactoryInterface
    {
        return self::createFormFactoryBuilder()->getFormFactory();
    }

    /**
     * Creates a form factory builder with the default configuration.
     *
     * @return FormFactoryBuilderInterface The form factory builder
     */
    public static function createFormFactoryBuilder(): FormFactoryBuilderInterface
    {
        return new FormFactoryBuilder(true);
    }

    /**
     * This class cannot be instantiated.
     */
    private function __construct()
    {
    }
}
", "vendor/symfony/form/Forms.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Forms.php");
    }
}
