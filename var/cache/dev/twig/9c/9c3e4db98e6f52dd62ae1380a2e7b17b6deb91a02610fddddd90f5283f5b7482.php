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

/* vendor/symfony/doctrine-bridge/Tests/Validator/DoctrineLoaderTest.php */
class __TwigTemplate_ec2af6120a6bea47d72e71edab1b4177f3076c2bb73eadca7443e5ce50ba314b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Validator/DoctrineLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Validator/DoctrineLoaderTest.php"));

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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Validator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\Test\\DoctrineTestHelper;
use Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\BaseUser;
use Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\DoctrineLoaderEmbed;
use Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\DoctrineLoaderEntity;
use Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\DoctrineLoaderNestedEmbed;
use Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\DoctrineLoaderParentEntity;
use Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity;
use Symfony\\Bridge\\Doctrine\\Validator\\DoctrineLoader;
use Symfony\\Component\\Validator\\Constraints\\Length;
use Symfony\\Component\\Validator\\Mapping\\CascadingStrategy;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Mapping\\TraversalStrategy;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity;
use Symfony\\Component\\Validator\\Validation;
use Symfony\\Component\\Validator\\ValidatorBuilder;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DoctrineLoaderTest extends TestCase
{
    public function testLoadClassMetadata()
    {
        if (!method_exists(ValidatorBuilder::class, 'addLoader')) {
            \$this->markTestSkipped('Auto-mapping requires symfony/validation 4.2+');
        }

        \$validator = Validation::createValidatorBuilder()
            ->enableAnnotationMapping()
            ->addLoader(new DoctrineLoader(DoctrineTestHelper::createTestEntityManager(), '{^Symfony\\\\\\\\Bridge\\\\\\\\Doctrine\\\\\\\\Tests\\\\\\\\Fixtures\\\\\\\\DoctrineLoader}'))
            ->getValidator()
        ;

        \$classMetadata = \$validator->getMetadataFor(new DoctrineLoaderEntity());

        \$classConstraints = \$classMetadata->getConstraints();
        \$this->assertCount(2, \$classConstraints);
        \$this->assertInstanceOf(UniqueEntity::class, \$classConstraints[0]);
        \$this->assertInstanceOf(UniqueEntity::class, \$classConstraints[1]);
        \$this->assertSame(['alreadyMappedUnique'], \$classConstraints[0]->fields);
        \$this->assertSame('unique', \$classConstraints[1]->fields);

        \$maxLengthMetadata = \$classMetadata->getPropertyMetadata('maxLength');
        \$this->assertCount(1, \$maxLengthMetadata);
        \$maxLengthConstraints = \$maxLengthMetadata[0]->getConstraints();
        \$this->assertCount(1, \$maxLengthConstraints);
        \$this->assertInstanceOf(Length::class, \$maxLengthConstraints[0]);
        \$this->assertSame(20, \$maxLengthConstraints[0]->max);

        \$mergedMaxLengthMetadata = \$classMetadata->getPropertyMetadata('mergedMaxLength');
        \$this->assertCount(1, \$mergedMaxLengthMetadata);
        \$mergedMaxLengthConstraints = \$mergedMaxLengthMetadata[0]->getConstraints();
        \$this->assertCount(1, \$mergedMaxLengthConstraints);
        \$this->assertInstanceOf(Length::class, \$mergedMaxLengthConstraints[0]);
        \$this->assertSame(20, \$mergedMaxLengthConstraints[0]->max);
        \$this->assertSame(5, \$mergedMaxLengthConstraints[0]->min);

        \$alreadyMappedMaxLengthMetadata = \$classMetadata->getPropertyMetadata('alreadyMappedMaxLength');
        \$this->assertCount(1, \$alreadyMappedMaxLengthMetadata);
        \$alreadyMappedMaxLengthConstraints = \$alreadyMappedMaxLengthMetadata[0]->getConstraints();
        \$this->assertCount(1, \$alreadyMappedMaxLengthConstraints);
        \$this->assertInstanceOf(Length::class, \$alreadyMappedMaxLengthConstraints[0]);
        \$this->assertSame(10, \$alreadyMappedMaxLengthConstraints[0]->max);
        \$this->assertSame(1, \$alreadyMappedMaxLengthConstraints[0]->min);

        \$publicParentMaxLengthMetadata = \$classMetadata->getPropertyMetadata('publicParentMaxLength');
        \$this->assertCount(1, \$publicParentMaxLengthMetadata);
        \$publicParentMaxLengthConstraints = \$publicParentMaxLengthMetadata[0]->getConstraints();
        \$this->assertCount(1, \$publicParentMaxLengthConstraints);
        \$this->assertInstanceOf(Length::class, \$publicParentMaxLengthConstraints[0]);
        \$this->assertSame(35, \$publicParentMaxLengthConstraints[0]->max);

        \$embeddedMetadata = \$classMetadata->getPropertyMetadata('embedded');
        \$this->assertCount(1, \$embeddedMetadata);
        \$this->assertSame(CascadingStrategy::CASCADE, \$embeddedMetadata[0]->getCascadingStrategy());
        \$this->assertSame(TraversalStrategy::IMPLICIT, \$embeddedMetadata[0]->getTraversalStrategy());

        \$parentClassMetadata = \$validator->getMetadataFor(new DoctrineLoaderParentEntity());

        \$publicParentMaxLengthMetadata = \$parentClassMetadata->getPropertyMetadata('publicParentMaxLength');
        \$this->assertCount(0, \$publicParentMaxLengthMetadata);

        \$privateParentMaxLengthMetadata = \$parentClassMetadata->getPropertyMetadata('privateParentMaxLength');
        \$this->assertCount(1, \$privateParentMaxLengthMetadata);
        \$privateParentMaxLengthConstraints = \$privateParentMaxLengthMetadata[0]->getConstraints();
        \$this->assertCount(1, \$privateParentMaxLengthConstraints);
        \$this->assertInstanceOf(Length::class, \$privateParentMaxLengthConstraints[0]);
        \$this->assertSame(30, \$privateParentMaxLengthConstraints[0]->max);

        \$embeddedClassMetadata = \$validator->getMetadataFor(new DoctrineLoaderEmbed());

        \$embeddedMaxLengthMetadata = \$embeddedClassMetadata->getPropertyMetadata('embeddedMaxLength');
        \$this->assertCount(1, \$embeddedMaxLengthMetadata);
        \$embeddedMaxLengthConstraints = \$embeddedMaxLengthMetadata[0]->getConstraints();
        \$this->assertCount(1, \$embeddedMaxLengthConstraints);
        \$this->assertInstanceOf(Length::class, \$embeddedMaxLengthConstraints[0]);
        \$this->assertSame(25, \$embeddedMaxLengthConstraints[0]->max);

        \$nestedEmbeddedMetadata = \$embeddedClassMetadata->getPropertyMetadata('nestedEmbedded');
        \$this->assertCount(1, \$nestedEmbeddedMetadata);
        \$this->assertSame(CascadingStrategy::CASCADE, \$nestedEmbeddedMetadata[0]->getCascadingStrategy());
        \$this->assertSame(TraversalStrategy::IMPLICIT, \$nestedEmbeddedMetadata[0]->getTraversalStrategy());

        \$nestedEmbeddedClassMetadata = \$validator->getMetadataFor(new DoctrineLoaderNestedEmbed());

        \$nestedEmbeddedMaxLengthMetadata = \$nestedEmbeddedClassMetadata->getPropertyMetadata('nestedEmbeddedMaxLength');
        \$this->assertCount(1, \$nestedEmbeddedMaxLengthMetadata);
        \$nestedEmbeddedMaxLengthConstraints = \$nestedEmbeddedMaxLengthMetadata[0]->getConstraints();
        \$this->assertCount(1, \$nestedEmbeddedMaxLengthConstraints);
        \$this->assertInstanceOf(Length::class, \$nestedEmbeddedMaxLengthConstraints[0]);
        \$this->assertSame(27, \$nestedEmbeddedMaxLengthConstraints[0]->max);

        \$this->assertCount(0, \$classMetadata->getPropertyMetadata('guidField'));
        \$this->assertCount(0, \$classMetadata->getPropertyMetadata('simpleArrayField'));

        \$textFieldMetadata = \$classMetadata->getPropertyMetadata('textField');
        \$this->assertCount(1, \$textFieldMetadata);
        \$textFieldConstraints = \$textFieldMetadata[0]->getConstraints();
        \$this->assertCount(1, \$textFieldConstraints);
        \$this->assertInstanceOf(Length::class, \$textFieldConstraints[0]);
        \$this->assertSame(1000, \$textFieldConstraints[0]->max);
    }

    public function testFieldMappingsConfiguration()
    {
        if (!method_exists(ValidatorBuilder::class, 'addLoader')) {
            \$this->markTestSkipped('Auto-mapping requires symfony/validation 4.2+');
        }

        \$validator = Validation::createValidatorBuilder()
            ->enableAnnotationMapping()
            ->addXmlMappings([__DIR__.'/../Resources/validator/BaseUser.xml'])
            ->addLoader(
                new DoctrineLoader(
                    DoctrineTestHelper::createTestEntityManager(
                        DoctrineTestHelper::createTestConfigurationWithXmlLoader()
                    ), '{}'
                )
            )
            ->getValidator();

        \$classMetadata = \$validator->getMetadataFor(new BaseUser(1, 'DemoUser'));

        \$constraints = \$classMetadata->getConstraints();
        \$this->assertCount(0, \$constraints);
    }

    /**
     * @dataProvider regexpProvider
     */
    public function testClassValidator(bool \$expected, string \$classValidatorRegexp = null)
    {
        \$doctrineLoader = new DoctrineLoader(DoctrineTestHelper::createTestEntityManager(), \$classValidatorRegexp);

        \$classMetadata = new ClassMetadata(DoctrineLoaderEntity::class);
        \$this->assertSame(\$expected, \$doctrineLoader->loadClassMetadata(\$classMetadata));
    }

    public function regexpProvider()
    {
        return [
            [false, null],
            [true, '{^'.preg_quote(DoctrineLoaderEntity::class).'\$|^'.preg_quote(Entity::class).'\$}'],
            [false, '{^'.preg_quote(Entity::class).'\$}'],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/Validator/DoctrineLoaderTest.php";
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

namespace Symfony\\Bridge\\Doctrine\\Tests\\Validator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Bridge\\Doctrine\\Test\\DoctrineTestHelper;
use Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\BaseUser;
use Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\DoctrineLoaderEmbed;
use Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\DoctrineLoaderEntity;
use Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\DoctrineLoaderNestedEmbed;
use Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\DoctrineLoaderParentEntity;
use Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity;
use Symfony\\Bridge\\Doctrine\\Validator\\DoctrineLoader;
use Symfony\\Component\\Validator\\Constraints\\Length;
use Symfony\\Component\\Validator\\Mapping\\CascadingStrategy;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Mapping\\TraversalStrategy;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity;
use Symfony\\Component\\Validator\\Validation;
use Symfony\\Component\\Validator\\ValidatorBuilder;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DoctrineLoaderTest extends TestCase
{
    public function testLoadClassMetadata()
    {
        if (!method_exists(ValidatorBuilder::class, 'addLoader')) {
            \$this->markTestSkipped('Auto-mapping requires symfony/validation 4.2+');
        }

        \$validator = Validation::createValidatorBuilder()
            ->enableAnnotationMapping()
            ->addLoader(new DoctrineLoader(DoctrineTestHelper::createTestEntityManager(), '{^Symfony\\\\\\\\Bridge\\\\\\\\Doctrine\\\\\\\\Tests\\\\\\\\Fixtures\\\\\\\\DoctrineLoader}'))
            ->getValidator()
        ;

        \$classMetadata = \$validator->getMetadataFor(new DoctrineLoaderEntity());

        \$classConstraints = \$classMetadata->getConstraints();
        \$this->assertCount(2, \$classConstraints);
        \$this->assertInstanceOf(UniqueEntity::class, \$classConstraints[0]);
        \$this->assertInstanceOf(UniqueEntity::class, \$classConstraints[1]);
        \$this->assertSame(['alreadyMappedUnique'], \$classConstraints[0]->fields);
        \$this->assertSame('unique', \$classConstraints[1]->fields);

        \$maxLengthMetadata = \$classMetadata->getPropertyMetadata('maxLength');
        \$this->assertCount(1, \$maxLengthMetadata);
        \$maxLengthConstraints = \$maxLengthMetadata[0]->getConstraints();
        \$this->assertCount(1, \$maxLengthConstraints);
        \$this->assertInstanceOf(Length::class, \$maxLengthConstraints[0]);
        \$this->assertSame(20, \$maxLengthConstraints[0]->max);

        \$mergedMaxLengthMetadata = \$classMetadata->getPropertyMetadata('mergedMaxLength');
        \$this->assertCount(1, \$mergedMaxLengthMetadata);
        \$mergedMaxLengthConstraints = \$mergedMaxLengthMetadata[0]->getConstraints();
        \$this->assertCount(1, \$mergedMaxLengthConstraints);
        \$this->assertInstanceOf(Length::class, \$mergedMaxLengthConstraints[0]);
        \$this->assertSame(20, \$mergedMaxLengthConstraints[0]->max);
        \$this->assertSame(5, \$mergedMaxLengthConstraints[0]->min);

        \$alreadyMappedMaxLengthMetadata = \$classMetadata->getPropertyMetadata('alreadyMappedMaxLength');
        \$this->assertCount(1, \$alreadyMappedMaxLengthMetadata);
        \$alreadyMappedMaxLengthConstraints = \$alreadyMappedMaxLengthMetadata[0]->getConstraints();
        \$this->assertCount(1, \$alreadyMappedMaxLengthConstraints);
        \$this->assertInstanceOf(Length::class, \$alreadyMappedMaxLengthConstraints[0]);
        \$this->assertSame(10, \$alreadyMappedMaxLengthConstraints[0]->max);
        \$this->assertSame(1, \$alreadyMappedMaxLengthConstraints[0]->min);

        \$publicParentMaxLengthMetadata = \$classMetadata->getPropertyMetadata('publicParentMaxLength');
        \$this->assertCount(1, \$publicParentMaxLengthMetadata);
        \$publicParentMaxLengthConstraints = \$publicParentMaxLengthMetadata[0]->getConstraints();
        \$this->assertCount(1, \$publicParentMaxLengthConstraints);
        \$this->assertInstanceOf(Length::class, \$publicParentMaxLengthConstraints[0]);
        \$this->assertSame(35, \$publicParentMaxLengthConstraints[0]->max);

        \$embeddedMetadata = \$classMetadata->getPropertyMetadata('embedded');
        \$this->assertCount(1, \$embeddedMetadata);
        \$this->assertSame(CascadingStrategy::CASCADE, \$embeddedMetadata[0]->getCascadingStrategy());
        \$this->assertSame(TraversalStrategy::IMPLICIT, \$embeddedMetadata[0]->getTraversalStrategy());

        \$parentClassMetadata = \$validator->getMetadataFor(new DoctrineLoaderParentEntity());

        \$publicParentMaxLengthMetadata = \$parentClassMetadata->getPropertyMetadata('publicParentMaxLength');
        \$this->assertCount(0, \$publicParentMaxLengthMetadata);

        \$privateParentMaxLengthMetadata = \$parentClassMetadata->getPropertyMetadata('privateParentMaxLength');
        \$this->assertCount(1, \$privateParentMaxLengthMetadata);
        \$privateParentMaxLengthConstraints = \$privateParentMaxLengthMetadata[0]->getConstraints();
        \$this->assertCount(1, \$privateParentMaxLengthConstraints);
        \$this->assertInstanceOf(Length::class, \$privateParentMaxLengthConstraints[0]);
        \$this->assertSame(30, \$privateParentMaxLengthConstraints[0]->max);

        \$embeddedClassMetadata = \$validator->getMetadataFor(new DoctrineLoaderEmbed());

        \$embeddedMaxLengthMetadata = \$embeddedClassMetadata->getPropertyMetadata('embeddedMaxLength');
        \$this->assertCount(1, \$embeddedMaxLengthMetadata);
        \$embeddedMaxLengthConstraints = \$embeddedMaxLengthMetadata[0]->getConstraints();
        \$this->assertCount(1, \$embeddedMaxLengthConstraints);
        \$this->assertInstanceOf(Length::class, \$embeddedMaxLengthConstraints[0]);
        \$this->assertSame(25, \$embeddedMaxLengthConstraints[0]->max);

        \$nestedEmbeddedMetadata = \$embeddedClassMetadata->getPropertyMetadata('nestedEmbedded');
        \$this->assertCount(1, \$nestedEmbeddedMetadata);
        \$this->assertSame(CascadingStrategy::CASCADE, \$nestedEmbeddedMetadata[0]->getCascadingStrategy());
        \$this->assertSame(TraversalStrategy::IMPLICIT, \$nestedEmbeddedMetadata[0]->getTraversalStrategy());

        \$nestedEmbeddedClassMetadata = \$validator->getMetadataFor(new DoctrineLoaderNestedEmbed());

        \$nestedEmbeddedMaxLengthMetadata = \$nestedEmbeddedClassMetadata->getPropertyMetadata('nestedEmbeddedMaxLength');
        \$this->assertCount(1, \$nestedEmbeddedMaxLengthMetadata);
        \$nestedEmbeddedMaxLengthConstraints = \$nestedEmbeddedMaxLengthMetadata[0]->getConstraints();
        \$this->assertCount(1, \$nestedEmbeddedMaxLengthConstraints);
        \$this->assertInstanceOf(Length::class, \$nestedEmbeddedMaxLengthConstraints[0]);
        \$this->assertSame(27, \$nestedEmbeddedMaxLengthConstraints[0]->max);

        \$this->assertCount(0, \$classMetadata->getPropertyMetadata('guidField'));
        \$this->assertCount(0, \$classMetadata->getPropertyMetadata('simpleArrayField'));

        \$textFieldMetadata = \$classMetadata->getPropertyMetadata('textField');
        \$this->assertCount(1, \$textFieldMetadata);
        \$textFieldConstraints = \$textFieldMetadata[0]->getConstraints();
        \$this->assertCount(1, \$textFieldConstraints);
        \$this->assertInstanceOf(Length::class, \$textFieldConstraints[0]);
        \$this->assertSame(1000, \$textFieldConstraints[0]->max);
    }

    public function testFieldMappingsConfiguration()
    {
        if (!method_exists(ValidatorBuilder::class, 'addLoader')) {
            \$this->markTestSkipped('Auto-mapping requires symfony/validation 4.2+');
        }

        \$validator = Validation::createValidatorBuilder()
            ->enableAnnotationMapping()
            ->addXmlMappings([__DIR__.'/../Resources/validator/BaseUser.xml'])
            ->addLoader(
                new DoctrineLoader(
                    DoctrineTestHelper::createTestEntityManager(
                        DoctrineTestHelper::createTestConfigurationWithXmlLoader()
                    ), '{}'
                )
            )
            ->getValidator();

        \$classMetadata = \$validator->getMetadataFor(new BaseUser(1, 'DemoUser'));

        \$constraints = \$classMetadata->getConstraints();
        \$this->assertCount(0, \$constraints);
    }

    /**
     * @dataProvider regexpProvider
     */
    public function testClassValidator(bool \$expected, string \$classValidatorRegexp = null)
    {
        \$doctrineLoader = new DoctrineLoader(DoctrineTestHelper::createTestEntityManager(), \$classValidatorRegexp);

        \$classMetadata = new ClassMetadata(DoctrineLoaderEntity::class);
        \$this->assertSame(\$expected, \$doctrineLoader->loadClassMetadata(\$classMetadata));
    }

    public function regexpProvider()
    {
        return [
            [false, null],
            [true, '{^'.preg_quote(DoctrineLoaderEntity::class).'\$|^'.preg_quote(Entity::class).'\$}'],
            [false, '{^'.preg_quote(Entity::class).'\$}'],
        ];
    }
}
", "vendor/symfony/doctrine-bridge/Tests/Validator/DoctrineLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/Validator/DoctrineLoaderTest.php");
    }
}
