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

/* vendor/symfony/form/Tests/Extension/Validator/ValidatorExtensionTest.php */
class __TwigTemplate_162dacffa4c666684491fed045426df5d9dbb3ecc67c4ea7a5df3c5dfcc932bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Validator/ValidatorExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Validator/ValidatorExtensionTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Validator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form as FormConstraint;
use Symfony\\Component\\Form\\Extension\\Validator\\ValidatorExtension;
use Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormFactoryBuilder;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Mapping\\CascadingStrategy;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Mapping\\Factory\\LazyLoadingMetadataFactory;
use Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader;
use Symfony\\Component\\Validator\\Mapping\\TraversalStrategy;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\FakeMetadataFactory;
use Symfony\\Component\\Validator\\Validation;

class ValidatorExtensionTest extends TestCase
{
    public function test2Dot5ValidationApi()
    {
        \$metadata = new ClassMetadata(Form::class);

        \$metadataFactory = new FakeMetadataFactory();
        \$metadataFactory->addMetadata(\$metadata);

        \$validator = Validation::createValidatorBuilder()
            ->setMetadataFactory(\$metadataFactory)
            ->getValidator();

        \$extension = new ValidatorExtension(\$validator);

        \$this->assertInstanceOf(ValidatorTypeGuesser::class, \$extension->loadTypeGuesser());

        \$this->assertCount(1, \$metadata->getConstraints());
        \$this->assertInstanceOf(FormConstraint::class, \$metadata->getConstraints()[0]);

        \$this->assertSame(CascadingStrategy::CASCADE, \$metadata->getPropertyMetadata('children')[0]->cascadingStrategy);
        \$this->assertSame(TraversalStrategy::IMPLICIT, \$metadata->getPropertyMetadata('children')[0]->traversalStrategy);
    }

    public function testDataConstraintsInvalidateFormEvenIfFieldIsNotSubmitted()
    {
        \$form = \$this->createForm(FooType::class);
        \$form->submit(['baz' => 'foobar'], false);

        \$this->assertTrue(\$form->isSubmitted());
        \$this->assertFalse(\$form->isValid());
        \$this->assertFalse(\$form->get('bar')->isSubmitted());
        \$this->assertCount(1, \$form->get('bar')->getErrors());
    }

    public function testFieldConstraintsDoNotInvalidateFormIfFieldIsNotSubmitted()
    {
        \$form = \$this->createForm(FooType::class);
        \$form->submit(['bar' => 'foobar'], false);

        \$this->assertTrue(\$form->isSubmitted());
        \$this->assertTrue(\$form->isValid());
    }

    public function testFieldConstraintsInvalidateFormIfFieldIsSubmitted()
    {
        \$form = \$this->createForm(FooType::class);
        \$form->submit(['bar' => 'foobar', 'baz' => ''], false);

        \$this->assertTrue(\$form->isSubmitted());
        \$this->assertFalse(\$form->isValid());
        \$this->assertTrue(\$form->get('bar')->isSubmitted());
        \$this->assertTrue(\$form->get('bar')->isValid());
        \$this->assertTrue(\$form->get('baz')->isSubmitted());
        \$this->assertFalse(\$form->get('baz')->isValid());
    }

    private function createForm(\$type)
    {
        \$validator = Validation::createValidatorBuilder()
            ->setMetadataFactory(new LazyLoadingMetadataFactory(new StaticMethodLoader()))
            ->getValidator();
        \$formFactoryBuilder = new FormFactoryBuilder();
        \$formFactoryBuilder->addExtension(new ValidatorExtension(\$validator));
        \$formFactory = \$formFactoryBuilder->getFormFactory();

        return \$formFactory->create(\$type);
    }
}

class Foo
{
    public \$bar;
    public \$baz;

    public static function loadValidatorMetadata(ClassMetadata \$metadata)
    {
        \$metadata->addPropertyConstraint('bar', new NotBlank());
    }
}

class FooType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('bar')
            ->add('baz', null, [
                'constraints' => [new NotBlank()],
            ])
        ;
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefault('data_class', Foo::class);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Validator/ValidatorExtensionTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Validator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Validator\\Constraints\\Form as FormConstraint;
use Symfony\\Component\\Form\\Extension\\Validator\\ValidatorExtension;
use Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser;
use Symfony\\Component\\Form\\Form;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormFactoryBuilder;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Mapping\\CascadingStrategy;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Mapping\\Factory\\LazyLoadingMetadataFactory;
use Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader;
use Symfony\\Component\\Validator\\Mapping\\TraversalStrategy;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\FakeMetadataFactory;
use Symfony\\Component\\Validator\\Validation;

class ValidatorExtensionTest extends TestCase
{
    public function test2Dot5ValidationApi()
    {
        \$metadata = new ClassMetadata(Form::class);

        \$metadataFactory = new FakeMetadataFactory();
        \$metadataFactory->addMetadata(\$metadata);

        \$validator = Validation::createValidatorBuilder()
            ->setMetadataFactory(\$metadataFactory)
            ->getValidator();

        \$extension = new ValidatorExtension(\$validator);

        \$this->assertInstanceOf(ValidatorTypeGuesser::class, \$extension->loadTypeGuesser());

        \$this->assertCount(1, \$metadata->getConstraints());
        \$this->assertInstanceOf(FormConstraint::class, \$metadata->getConstraints()[0]);

        \$this->assertSame(CascadingStrategy::CASCADE, \$metadata->getPropertyMetadata('children')[0]->cascadingStrategy);
        \$this->assertSame(TraversalStrategy::IMPLICIT, \$metadata->getPropertyMetadata('children')[0]->traversalStrategy);
    }

    public function testDataConstraintsInvalidateFormEvenIfFieldIsNotSubmitted()
    {
        \$form = \$this->createForm(FooType::class);
        \$form->submit(['baz' => 'foobar'], false);

        \$this->assertTrue(\$form->isSubmitted());
        \$this->assertFalse(\$form->isValid());
        \$this->assertFalse(\$form->get('bar')->isSubmitted());
        \$this->assertCount(1, \$form->get('bar')->getErrors());
    }

    public function testFieldConstraintsDoNotInvalidateFormIfFieldIsNotSubmitted()
    {
        \$form = \$this->createForm(FooType::class);
        \$form->submit(['bar' => 'foobar'], false);

        \$this->assertTrue(\$form->isSubmitted());
        \$this->assertTrue(\$form->isValid());
    }

    public function testFieldConstraintsInvalidateFormIfFieldIsSubmitted()
    {
        \$form = \$this->createForm(FooType::class);
        \$form->submit(['bar' => 'foobar', 'baz' => ''], false);

        \$this->assertTrue(\$form->isSubmitted());
        \$this->assertFalse(\$form->isValid());
        \$this->assertTrue(\$form->get('bar')->isSubmitted());
        \$this->assertTrue(\$form->get('bar')->isValid());
        \$this->assertTrue(\$form->get('baz')->isSubmitted());
        \$this->assertFalse(\$form->get('baz')->isValid());
    }

    private function createForm(\$type)
    {
        \$validator = Validation::createValidatorBuilder()
            ->setMetadataFactory(new LazyLoadingMetadataFactory(new StaticMethodLoader()))
            ->getValidator();
        \$formFactoryBuilder = new FormFactoryBuilder();
        \$formFactoryBuilder->addExtension(new ValidatorExtension(\$validator));
        \$formFactory = \$formFactoryBuilder->getFormFactory();

        return \$formFactory->create(\$type);
    }
}

class Foo
{
    public \$bar;
    public \$baz;

    public static function loadValidatorMetadata(ClassMetadata \$metadata)
    {
        \$metadata->addPropertyConstraint('bar', new NotBlank());
    }
}

class FooType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options)
    {
        \$builder
            ->add('bar')
            ->add('baz', null, [
                'constraints' => [new NotBlank()],
            ])
        ;
    }

    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setDefault('data_class', Foo::class);
    }
}
", "vendor/symfony/form/Tests/Extension/Validator/ValidatorExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Validator/ValidatorExtensionTest.php");
    }
}
