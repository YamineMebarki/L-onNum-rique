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

/* vendor/symfony/options-resolver/Tests/Debug/OptionsResolverIntrospectorTest.php */
class __TwigTemplate_ad16afb5cda6c2990068bae465db34be30faf0d9d26ab9f0627d16f6a072f37d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/options-resolver/Tests/Debug/OptionsResolverIntrospectorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/options-resolver/Tests/Debug/OptionsResolverIntrospectorTest.php"));

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

namespace Symfony\\Component\\OptionsResolver\\Tests\\Debug;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\OptionsResolver\\Debug\\OptionsResolverIntrospector;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class OptionsResolverIntrospectorTest extends TestCase
{
    public function testGetDefault()
    {
        \$resolver = new OptionsResolver();
        \$resolver->setDefault(\$option = 'foo', 'bar');

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getDefault(\$option));
    }

    public function testGetDefaultNull()
    {
        \$resolver = new OptionsResolver();
        \$resolver->setDefault(\$option = 'foo', null);

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertNull(\$debug->getDefault(\$option));
    }

    public function testGetDefaultThrowsOnNoConfiguredValue()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException');
        \$this->expectExceptionMessage('No default value was set for the \"foo\" option.');
        \$resolver = new OptionsResolver();
        \$resolver->setDefined(\$option = 'foo');

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getDefault(\$option));
    }

    public function testGetDefaultThrowsOnNotDefinedOption()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException');
        \$this->expectExceptionMessage('The option \"foo\" does not exist.');
        \$resolver = new OptionsResolver();

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getDefault('foo'));
    }

    public function testGetLazyClosures()
    {
        \$resolver = new OptionsResolver();
        \$closures = [];
        \$resolver->setDefault(\$option = 'foo', \$closures[] = function (Options \$options) {});

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame(\$closures, \$debug->getLazyClosures(\$option));
    }

    public function testGetLazyClosuresThrowsOnNoConfiguredValue()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException');
        \$this->expectExceptionMessage('No lazy closures were set for the \"foo\" option.');
        \$resolver = new OptionsResolver();
        \$resolver->setDefined(\$option = 'foo');

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getLazyClosures(\$option));
    }

    public function testGetLazyClosuresThrowsOnNotDefinedOption()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException');
        \$this->expectExceptionMessage('The option \"foo\" does not exist.');
        \$resolver = new OptionsResolver();

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getLazyClosures('foo'));
    }

    public function testGetAllowedTypes()
    {
        \$resolver = new OptionsResolver();
        \$resolver->setDefined(\$option = 'foo');
        \$resolver->setAllowedTypes(\$option = 'foo', \$allowedTypes = ['string', 'bool']);

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame(\$allowedTypes, \$debug->getAllowedTypes(\$option));
    }

    public function testGetAllowedTypesThrowsOnNoConfiguredValue()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException');
        \$this->expectExceptionMessage('No allowed types were set for the \"foo\" option.');
        \$resolver = new OptionsResolver();
        \$resolver->setDefined(\$option = 'foo');

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getAllowedTypes(\$option));
    }

    public function testGetAllowedTypesThrowsOnNotDefinedOption()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException');
        \$this->expectExceptionMessage('The option \"foo\" does not exist.');
        \$resolver = new OptionsResolver();

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getAllowedTypes('foo'));
    }

    public function testGetAllowedValues()
    {
        \$resolver = new OptionsResolver();
        \$resolver->setDefined(\$option = 'foo');
        \$resolver->setAllowedValues(\$option = 'foo', \$allowedValues = ['bar', 'baz']);

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame(\$allowedValues, \$debug->getAllowedValues(\$option));
    }

    public function testGetAllowedValuesThrowsOnNoConfiguredValue()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException');
        \$this->expectExceptionMessage('No allowed values were set for the \"foo\" option.');
        \$resolver = new OptionsResolver();
        \$resolver->setDefined(\$option = 'foo');

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getAllowedValues(\$option));
    }

    public function testGetAllowedValuesThrowsOnNotDefinedOption()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException');
        \$this->expectExceptionMessage('The option \"foo\" does not exist.');
        \$resolver = new OptionsResolver();

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getAllowedValues('foo'));
    }

    public function testGetNormalizer()
    {
        \$resolver = new OptionsResolver();
        \$resolver->setDefined(\$option = 'foo');
        \$resolver->setNormalizer(\$option = 'foo', \$normalizer = function () {});

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame(\$normalizer, \$debug->getNormalizer(\$option));
    }

    public function testGetNormalizerThrowsOnNoConfiguredValue()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException');
        \$this->expectExceptionMessage('No normalizer was set for the \"foo\" option.');
        \$resolver = new OptionsResolver();
        \$resolver->setDefined(\$option = 'foo');

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getNormalizer(\$option));
    }

    public function testGetNormalizerThrowsOnNotDefinedOption()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException');
        \$this->expectExceptionMessage('The option \"foo\" does not exist.');
        \$resolver = new OptionsResolver();

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getNormalizer('foo'));
    }

    public function testGetNormalizers()
    {
        \$resolver = new OptionsResolver();
        \$resolver->setDefined('foo');
        \$resolver->addNormalizer('foo', \$normalizer1 = function () {});
        \$resolver->addNormalizer('foo', \$normalizer2 = function () {});

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame([\$normalizer1, \$normalizer2], \$debug->getNormalizers('foo'));
    }

    public function testGetNormalizersThrowsOnNoConfiguredValue()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException');
        \$this->expectExceptionMessage('No normalizer was set for the \"foo\" option.');
        \$resolver = new OptionsResolver();
        \$resolver->setDefined('foo');

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$debug->getNormalizers('foo');
    }

    public function testGetNormalizersThrowsOnNotDefinedOption()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException');
        \$this->expectExceptionMessage('The option \"foo\" does not exist.');
        \$resolver = new OptionsResolver();

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$debug->getNormalizers('foo');
    }

    public function testGetDeprecationMessage()
    {
        \$resolver = new OptionsResolver();
        \$resolver->setDefined('foo');
        \$resolver->setDeprecated('foo', 'The option \"foo\" is deprecated.');

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('The option \"foo\" is deprecated.', \$debug->getDeprecationMessage('foo'));
    }

    public function testGetClosureDeprecationMessage()
    {
        \$resolver = new OptionsResolver();
        \$resolver->setDefined('foo');
        \$resolver->setDeprecated('foo', \$closure = function (Options \$options, \$value) {});

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame(\$closure, \$debug->getDeprecationMessage('foo'));
    }

    public function testGetDeprecationMessageThrowsOnNoConfiguredValue()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException');
        \$this->expectExceptionMessage('No deprecation was set for the \"foo\" option.');
        \$resolver = new OptionsResolver();
        \$resolver->setDefined('foo');

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getDeprecationMessage('foo'));
    }

    public function testGetDeprecationMessageThrowsOnNotDefinedOption()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException');
        \$this->expectExceptionMessage('The option \"foo\" does not exist.');
        \$resolver = new OptionsResolver();

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getDeprecationMessage('foo'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/options-resolver/Tests/Debug/OptionsResolverIntrospectorTest.php";
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

namespace Symfony\\Component\\OptionsResolver\\Tests\\Debug;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\OptionsResolver\\Debug\\OptionsResolverIntrospector;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

class OptionsResolverIntrospectorTest extends TestCase
{
    public function testGetDefault()
    {
        \$resolver = new OptionsResolver();
        \$resolver->setDefault(\$option = 'foo', 'bar');

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getDefault(\$option));
    }

    public function testGetDefaultNull()
    {
        \$resolver = new OptionsResolver();
        \$resolver->setDefault(\$option = 'foo', null);

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertNull(\$debug->getDefault(\$option));
    }

    public function testGetDefaultThrowsOnNoConfiguredValue()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException');
        \$this->expectExceptionMessage('No default value was set for the \"foo\" option.');
        \$resolver = new OptionsResolver();
        \$resolver->setDefined(\$option = 'foo');

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getDefault(\$option));
    }

    public function testGetDefaultThrowsOnNotDefinedOption()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException');
        \$this->expectExceptionMessage('The option \"foo\" does not exist.');
        \$resolver = new OptionsResolver();

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getDefault('foo'));
    }

    public function testGetLazyClosures()
    {
        \$resolver = new OptionsResolver();
        \$closures = [];
        \$resolver->setDefault(\$option = 'foo', \$closures[] = function (Options \$options) {});

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame(\$closures, \$debug->getLazyClosures(\$option));
    }

    public function testGetLazyClosuresThrowsOnNoConfiguredValue()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException');
        \$this->expectExceptionMessage('No lazy closures were set for the \"foo\" option.');
        \$resolver = new OptionsResolver();
        \$resolver->setDefined(\$option = 'foo');

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getLazyClosures(\$option));
    }

    public function testGetLazyClosuresThrowsOnNotDefinedOption()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException');
        \$this->expectExceptionMessage('The option \"foo\" does not exist.');
        \$resolver = new OptionsResolver();

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getLazyClosures('foo'));
    }

    public function testGetAllowedTypes()
    {
        \$resolver = new OptionsResolver();
        \$resolver->setDefined(\$option = 'foo');
        \$resolver->setAllowedTypes(\$option = 'foo', \$allowedTypes = ['string', 'bool']);

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame(\$allowedTypes, \$debug->getAllowedTypes(\$option));
    }

    public function testGetAllowedTypesThrowsOnNoConfiguredValue()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException');
        \$this->expectExceptionMessage('No allowed types were set for the \"foo\" option.');
        \$resolver = new OptionsResolver();
        \$resolver->setDefined(\$option = 'foo');

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getAllowedTypes(\$option));
    }

    public function testGetAllowedTypesThrowsOnNotDefinedOption()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException');
        \$this->expectExceptionMessage('The option \"foo\" does not exist.');
        \$resolver = new OptionsResolver();

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getAllowedTypes('foo'));
    }

    public function testGetAllowedValues()
    {
        \$resolver = new OptionsResolver();
        \$resolver->setDefined(\$option = 'foo');
        \$resolver->setAllowedValues(\$option = 'foo', \$allowedValues = ['bar', 'baz']);

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame(\$allowedValues, \$debug->getAllowedValues(\$option));
    }

    public function testGetAllowedValuesThrowsOnNoConfiguredValue()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException');
        \$this->expectExceptionMessage('No allowed values were set for the \"foo\" option.');
        \$resolver = new OptionsResolver();
        \$resolver->setDefined(\$option = 'foo');

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getAllowedValues(\$option));
    }

    public function testGetAllowedValuesThrowsOnNotDefinedOption()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException');
        \$this->expectExceptionMessage('The option \"foo\" does not exist.');
        \$resolver = new OptionsResolver();

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getAllowedValues('foo'));
    }

    public function testGetNormalizer()
    {
        \$resolver = new OptionsResolver();
        \$resolver->setDefined(\$option = 'foo');
        \$resolver->setNormalizer(\$option = 'foo', \$normalizer = function () {});

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame(\$normalizer, \$debug->getNormalizer(\$option));
    }

    public function testGetNormalizerThrowsOnNoConfiguredValue()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException');
        \$this->expectExceptionMessage('No normalizer was set for the \"foo\" option.');
        \$resolver = new OptionsResolver();
        \$resolver->setDefined(\$option = 'foo');

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getNormalizer(\$option));
    }

    public function testGetNormalizerThrowsOnNotDefinedOption()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException');
        \$this->expectExceptionMessage('The option \"foo\" does not exist.');
        \$resolver = new OptionsResolver();

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getNormalizer('foo'));
    }

    public function testGetNormalizers()
    {
        \$resolver = new OptionsResolver();
        \$resolver->setDefined('foo');
        \$resolver->addNormalizer('foo', \$normalizer1 = function () {});
        \$resolver->addNormalizer('foo', \$normalizer2 = function () {});

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame([\$normalizer1, \$normalizer2], \$debug->getNormalizers('foo'));
    }

    public function testGetNormalizersThrowsOnNoConfiguredValue()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException');
        \$this->expectExceptionMessage('No normalizer was set for the \"foo\" option.');
        \$resolver = new OptionsResolver();
        \$resolver->setDefined('foo');

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$debug->getNormalizers('foo');
    }

    public function testGetNormalizersThrowsOnNotDefinedOption()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException');
        \$this->expectExceptionMessage('The option \"foo\" does not exist.');
        \$resolver = new OptionsResolver();

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$debug->getNormalizers('foo');
    }

    public function testGetDeprecationMessage()
    {
        \$resolver = new OptionsResolver();
        \$resolver->setDefined('foo');
        \$resolver->setDeprecated('foo', 'The option \"foo\" is deprecated.');

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('The option \"foo\" is deprecated.', \$debug->getDeprecationMessage('foo'));
    }

    public function testGetClosureDeprecationMessage()
    {
        \$resolver = new OptionsResolver();
        \$resolver->setDefined('foo');
        \$resolver->setDeprecated('foo', \$closure = function (Options \$options, \$value) {});

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame(\$closure, \$debug->getDeprecationMessage('foo'));
    }

    public function testGetDeprecationMessageThrowsOnNoConfiguredValue()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\NoConfigurationException');
        \$this->expectExceptionMessage('No deprecation was set for the \"foo\" option.');
        \$resolver = new OptionsResolver();
        \$resolver->setDefined('foo');

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getDeprecationMessage('foo'));
    }

    public function testGetDeprecationMessageThrowsOnNotDefinedOption()
    {
        \$this->expectException('Symfony\\Component\\OptionsResolver\\Exception\\UndefinedOptionsException');
        \$this->expectExceptionMessage('The option \"foo\" does not exist.');
        \$resolver = new OptionsResolver();

        \$debug = new OptionsResolverIntrospector(\$resolver);
        \$this->assertSame('bar', \$debug->getDeprecationMessage('foo'));
    }
}
", "vendor/symfony/options-resolver/Tests/Debug/OptionsResolverIntrospectorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/options-resolver/Tests/Debug/OptionsResolverIntrospectorTest.php");
    }
}
