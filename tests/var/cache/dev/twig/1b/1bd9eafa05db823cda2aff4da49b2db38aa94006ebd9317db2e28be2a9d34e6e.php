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

/* vendor/symfony/form/Tests/Console/Descriptor/AbstractDescriptorTest.php */
class __TwigTemplate_318385a221134a19cb0786ede35528e24b1cbd4323438c6be65e25c27dff539f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Console/Descriptor/AbstractDescriptorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Console/Descriptor/AbstractDescriptorTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Console\\Descriptor;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Output\\BufferedOutput;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType;
use Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\ResolvedFormType;
use Symfony\\Component\\Form\\ResolvedFormTypeInterface;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManager;

abstract class AbstractDescriptorTest extends TestCase
{
    /** @dataProvider getDescribeDefaultsTestData */
    public function testDescribeDefaults(\$object, array \$options, \$fixtureName)
    {
        \$describedObject = \$this->getObjectDescription(\$object, \$options);
        \$expectedDescription = \$this->getExpectedDescription(\$fixtureName);

        if ('json' === \$this->getFormat()) {
            \$this->assertEquals(json_encode(json_decode(\$expectedDescription), JSON_PRETTY_PRINT), json_encode(json_decode(\$describedObject), JSON_PRETTY_PRINT));
        } else {
            \$this->assertEquals(trim(\$expectedDescription), trim(str_replace(PHP_EOL, \"\\n\", \$describedObject)));
        }
    }

    /** @dataProvider getDescribeResolvedFormTypeTestData */
    public function testDescribeResolvedFormType(ResolvedFormTypeInterface \$type, array \$options, \$fixtureName)
    {
        \$describedObject = \$this->getObjectDescription(\$type, \$options);
        \$expectedDescription = \$this->getExpectedDescription(\$fixtureName);

        if ('json' === \$this->getFormat()) {
            \$this->assertEquals(json_encode(json_decode(\$expectedDescription), JSON_PRETTY_PRINT), json_encode(json_decode(\$describedObject), JSON_PRETTY_PRINT));
        } else {
            \$this->assertEquals(trim(\$expectedDescription), trim(str_replace(PHP_EOL, \"\\n\", \$describedObject)));
        }
    }

    /** @dataProvider getDescribeOptionTestData */
    public function testDescribeOption(OptionsResolver \$optionsResolver, array \$options, \$fixtureName)
    {
        \$describedObject = \$this->getObjectDescription(\$optionsResolver, \$options);
        \$expectedDescription = \$this->getExpectedDescription(\$fixtureName);

        if ('json' === \$this->getFormat()) {
            \$this->assertEquals(json_encode(json_decode(\$expectedDescription), JSON_PRETTY_PRINT), json_encode(json_decode(\$describedObject), JSON_PRETTY_PRINT));
        } else {
            \$this->assertStringMatchesFormat(trim(\$expectedDescription), trim(str_replace(PHP_EOL, \"\\n\", \$describedObject)));
        }
    }

    public function getDescribeDefaultsTestData()
    {
        \$options['core_types'] = ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType'];
        \$options['service_types'] = ['Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'];
        \$options['extensions'] = ['Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension'];
        \$options['guessers'] = ['Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser'];
        \$options['decorated'] = false;
        \$options['show_deprecated'] = false;
        yield [null, \$options, 'defaults_1'];

        \$options['core_types'] = [];
        \$options['service_types'] = [FooType::class];
        \$options['show_deprecated'] = true;
        yield [null, \$options, 'types_with_deprecated_options'];
    }

    public function getDescribeResolvedFormTypeTestData()
    {
        \$typeExtensions = [new FormTypeCsrfExtension(new CsrfTokenManager())];
        \$parent = new ResolvedFormType(new FormType(), \$typeExtensions);

        yield [new ResolvedFormType(new ChoiceType(), [], \$parent), ['decorated' => false, 'show_deprecated' => false], 'resolved_form_type_1'];
        yield [new ResolvedFormType(new FormType()), ['decorated' => false, 'show_deprecated' => false], 'resolved_form_type_2'];
        yield [new ResolvedFormType(new FooType(), [], \$parent), ['decorated' => false, 'show_deprecated' => true], 'deprecated_options_of_type'];
    }

    public function getDescribeOptionTestData()
    {
        \$parent = new ResolvedFormType(new FormType());
        \$options['decorated'] = false;
        \$options['show_deprecated'] = false;

        \$resolvedType = new ResolvedFormType(new ChoiceType(), [], \$parent);
        \$options['type'] = \$resolvedType->getInnerType();
        \$options['option'] = 'choice_translation_domain';
        yield [\$resolvedType->getOptionsResolver(), \$options, 'default_option_with_normalizer'];

        \$resolvedType = new ResolvedFormType(new FooType(), [], \$parent);
        \$options['type'] = \$resolvedType->getInnerType();
        \$options['option'] = 'foo';
        yield [\$resolvedType->getOptionsResolver(), \$options, 'required_option_with_allowed_values'];

        \$options['option'] = 'empty_data';
        yield [\$resolvedType->getOptionsResolver(), \$options, 'overridden_option_with_default_closures'];

        \$resolvedType = new ResolvedFormType(new FooType(), [], \$parent);
        \$options['type'] = \$resolvedType->getInnerType();
        \$options['option'] = 'bar';
        \$options['show_deprecated'] = true;
        yield [\$resolvedType->getOptionsResolver(), \$options, 'deprecated_option'];
    }

    abstract protected function getDescriptor();

    abstract protected function getFormat();

    private function getObjectDescription(\$object, array \$options)
    {
        \$output = new BufferedOutput(BufferedOutput::VERBOSITY_NORMAL, \$options['decorated']);
        \$io = new SymfonyStyle(new ArrayInput([]), \$output);

        \$this->getDescriptor()->describe(\$io, \$object, \$options);

        return \$output->fetch();
    }

    private function getExpectedDescription(\$name)
    {
        return file_get_contents(\$this->getFixtureFilename(\$name));
    }

    private function getFixtureFilename(\$name)
    {
        return sprintf('%s/../../Fixtures/Descriptor/%s.%s', __DIR__, \$name, \$this->getFormat());
    }
}

class FooType extends AbstractType
{
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setRequired('foo');
        \$resolver->setDefined('bar');
        \$resolver->setDeprecated('bar');
        \$resolver->setDefault('empty_data', function (Options \$options, \$value) {
            \$foo = \$options['foo'];

            return function (FormInterface \$form) use (\$foo) {
                return \$form->getConfig()->getCompound() ? [\$foo] : \$foo;
            };
        });
        \$resolver->setAllowedTypes('foo', 'string');
        \$resolver->setAllowedValues('foo', ['bar', 'baz']);
        \$resolver->setNormalizer('foo', function (Options \$options, \$value) {
            return (string) \$value;
        });
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Console/Descriptor/AbstractDescriptorTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Console\\Descriptor;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Input\\ArrayInput;
use Symfony\\Component\\Console\\Output\\BufferedOutput;
use Symfony\\Component\\Console\\Style\\SymfonyStyle;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType;
use Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\ResolvedFormType;
use Symfony\\Component\\Form\\ResolvedFormTypeInterface;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Security\\Csrf\\CsrfTokenManager;

abstract class AbstractDescriptorTest extends TestCase
{
    /** @dataProvider getDescribeDefaultsTestData */
    public function testDescribeDefaults(\$object, array \$options, \$fixtureName)
    {
        \$describedObject = \$this->getObjectDescription(\$object, \$options);
        \$expectedDescription = \$this->getExpectedDescription(\$fixtureName);

        if ('json' === \$this->getFormat()) {
            \$this->assertEquals(json_encode(json_decode(\$expectedDescription), JSON_PRETTY_PRINT), json_encode(json_decode(\$describedObject), JSON_PRETTY_PRINT));
        } else {
            \$this->assertEquals(trim(\$expectedDescription), trim(str_replace(PHP_EOL, \"\\n\", \$describedObject)));
        }
    }

    /** @dataProvider getDescribeResolvedFormTypeTestData */
    public function testDescribeResolvedFormType(ResolvedFormTypeInterface \$type, array \$options, \$fixtureName)
    {
        \$describedObject = \$this->getObjectDescription(\$type, \$options);
        \$expectedDescription = \$this->getExpectedDescription(\$fixtureName);

        if ('json' === \$this->getFormat()) {
            \$this->assertEquals(json_encode(json_decode(\$expectedDescription), JSON_PRETTY_PRINT), json_encode(json_decode(\$describedObject), JSON_PRETTY_PRINT));
        } else {
            \$this->assertEquals(trim(\$expectedDescription), trim(str_replace(PHP_EOL, \"\\n\", \$describedObject)));
        }
    }

    /** @dataProvider getDescribeOptionTestData */
    public function testDescribeOption(OptionsResolver \$optionsResolver, array \$options, \$fixtureName)
    {
        \$describedObject = \$this->getObjectDescription(\$optionsResolver, \$options);
        \$expectedDescription = \$this->getExpectedDescription(\$fixtureName);

        if ('json' === \$this->getFormat()) {
            \$this->assertEquals(json_encode(json_decode(\$expectedDescription), JSON_PRETTY_PRINT), json_encode(json_decode(\$describedObject), JSON_PRETTY_PRINT));
        } else {
            \$this->assertStringMatchesFormat(trim(\$expectedDescription), trim(str_replace(PHP_EOL, \"\\n\", \$describedObject)));
        }
    }

    public function getDescribeDefaultsTestData()
    {
        \$options['core_types'] = ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType'];
        \$options['service_types'] = ['Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'];
        \$options['extensions'] = ['Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension'];
        \$options['guessers'] = ['Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser'];
        \$options['decorated'] = false;
        \$options['show_deprecated'] = false;
        yield [null, \$options, 'defaults_1'];

        \$options['core_types'] = [];
        \$options['service_types'] = [FooType::class];
        \$options['show_deprecated'] = true;
        yield [null, \$options, 'types_with_deprecated_options'];
    }

    public function getDescribeResolvedFormTypeTestData()
    {
        \$typeExtensions = [new FormTypeCsrfExtension(new CsrfTokenManager())];
        \$parent = new ResolvedFormType(new FormType(), \$typeExtensions);

        yield [new ResolvedFormType(new ChoiceType(), [], \$parent), ['decorated' => false, 'show_deprecated' => false], 'resolved_form_type_1'];
        yield [new ResolvedFormType(new FormType()), ['decorated' => false, 'show_deprecated' => false], 'resolved_form_type_2'];
        yield [new ResolvedFormType(new FooType(), [], \$parent), ['decorated' => false, 'show_deprecated' => true], 'deprecated_options_of_type'];
    }

    public function getDescribeOptionTestData()
    {
        \$parent = new ResolvedFormType(new FormType());
        \$options['decorated'] = false;
        \$options['show_deprecated'] = false;

        \$resolvedType = new ResolvedFormType(new ChoiceType(), [], \$parent);
        \$options['type'] = \$resolvedType->getInnerType();
        \$options['option'] = 'choice_translation_domain';
        yield [\$resolvedType->getOptionsResolver(), \$options, 'default_option_with_normalizer'];

        \$resolvedType = new ResolvedFormType(new FooType(), [], \$parent);
        \$options['type'] = \$resolvedType->getInnerType();
        \$options['option'] = 'foo';
        yield [\$resolvedType->getOptionsResolver(), \$options, 'required_option_with_allowed_values'];

        \$options['option'] = 'empty_data';
        yield [\$resolvedType->getOptionsResolver(), \$options, 'overridden_option_with_default_closures'];

        \$resolvedType = new ResolvedFormType(new FooType(), [], \$parent);
        \$options['type'] = \$resolvedType->getInnerType();
        \$options['option'] = 'bar';
        \$options['show_deprecated'] = true;
        yield [\$resolvedType->getOptionsResolver(), \$options, 'deprecated_option'];
    }

    abstract protected function getDescriptor();

    abstract protected function getFormat();

    private function getObjectDescription(\$object, array \$options)
    {
        \$output = new BufferedOutput(BufferedOutput::VERBOSITY_NORMAL, \$options['decorated']);
        \$io = new SymfonyStyle(new ArrayInput([]), \$output);

        \$this->getDescriptor()->describe(\$io, \$object, \$options);

        return \$output->fetch();
    }

    private function getExpectedDescription(\$name)
    {
        return file_get_contents(\$this->getFixtureFilename(\$name));
    }

    private function getFixtureFilename(\$name)
    {
        return sprintf('%s/../../Fixtures/Descriptor/%s.%s', __DIR__, \$name, \$this->getFormat());
    }
}

class FooType extends AbstractType
{
    public function configureOptions(OptionsResolver \$resolver)
    {
        \$resolver->setRequired('foo');
        \$resolver->setDefined('bar');
        \$resolver->setDeprecated('bar');
        \$resolver->setDefault('empty_data', function (Options \$options, \$value) {
            \$foo = \$options['foo'];

            return function (FormInterface \$form) use (\$foo) {
                return \$form->getConfig()->getCompound() ? [\$foo] : \$foo;
            };
        });
        \$resolver->setAllowedTypes('foo', 'string');
        \$resolver->setAllowedValues('foo', ['bar', 'baz']);
        \$resolver->setNormalizer('foo', function (Options \$options, \$value) {
            return (string) \$value;
        });
    }
}
", "vendor/symfony/form/Tests/Console/Descriptor/AbstractDescriptorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Console/Descriptor/AbstractDescriptorTest.php");
    }
}
