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

/* vendor/symfony/validator/Tests/Mapping/ClassMetadataTest.php */
class __TwigTemplate_72b64a87d2bc342e86521c142b7ae95e6c579a27db055b0b7901c3b7726b9dda extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/ClassMetadataTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/ClassMetadataTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Mapping;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Constraints\\Valid;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintB;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\PropertyConstraint;

class ClassMetadataTest extends TestCase
{
    const CLASSNAME = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity';
    const PARENTCLASS = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityParent';
    const PROVIDERCLASS = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\GroupSequenceProviderEntity';
    const PROVIDERCHILDCLASS = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\GroupSequenceProviderChildEntity';

    protected \$metadata;

    protected function setUp(): void
    {
        \$this->metadata = new ClassMetadata(self::CLASSNAME);
    }

    protected function tearDown(): void
    {
        \$this->metadata = null;
    }

    public function testAddConstraintDoesNotAcceptValid()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');

        \$this->metadata->addConstraint(new Valid());
    }

    public function testAddConstraintRequiresClassConstraints()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');

        \$this->metadata->addConstraint(new PropertyConstraint());
    }

    public function testAddPropertyConstraints()
    {
        \$this->metadata->addPropertyConstraint('firstName', new ConstraintA());
        \$this->metadata->addPropertyConstraint('lastName', new ConstraintB());

        \$this->assertEquals(['firstName', 'lastName'], \$this->metadata->getConstrainedProperties());
    }

    public function testAddMultiplePropertyConstraints()
    {
        \$this->metadata->addPropertyConstraints('lastName', [new ConstraintA(), new ConstraintB()]);

        \$constraints = [
            new ConstraintA(['groups' => ['Default', 'Entity']]),
            new ConstraintB(['groups' => ['Default', 'Entity']]),
        ];

        \$properties = \$this->metadata->getPropertyMetadata('lastName');

        \$this->assertCount(1, \$properties);
        \$this->assertEquals('lastName', \$properties[0]->getName());
        \$this->assertEquals(\$constraints, \$properties[0]->getConstraints());
    }

    public function testAddGetterConstraints()
    {
        \$this->metadata->addGetterConstraint('lastName', new ConstraintA());
        \$this->metadata->addGetterConstraint('lastName', new ConstraintB());

        \$constraints = [
            new ConstraintA(['groups' => ['Default', 'Entity']]),
            new ConstraintB(['groups' => ['Default', 'Entity']]),
        ];

        \$properties = \$this->metadata->getPropertyMetadata('lastName');

        \$this->assertCount(1, \$properties);
        \$this->assertEquals('getLastName', \$properties[0]->getName());
        \$this->assertEquals(\$constraints, \$properties[0]->getConstraints());
    }

    public function testAddMultipleGetterConstraints()
    {
        \$this->metadata->addGetterConstraints('lastName', [new ConstraintA(), new ConstraintB()]);

        \$constraints = [
            new ConstraintA(['groups' => ['Default', 'Entity']]),
            new ConstraintB(['groups' => ['Default', 'Entity']]),
        ];

        \$properties = \$this->metadata->getPropertyMetadata('lastName');

        \$this->assertCount(1, \$properties);
        \$this->assertEquals('getLastName', \$properties[0]->getName());
        \$this->assertEquals(\$constraints, \$properties[0]->getConstraints());
    }

    public function testMergeConstraintsMergesClassConstraints()
    {
        \$parent = new ClassMetadata(self::PARENTCLASS);
        \$parent->addConstraint(new ConstraintA());

        \$this->metadata->mergeConstraints(\$parent);
        \$this->metadata->addConstraint(new ConstraintA());

        \$constraints = [
            new ConstraintA(['groups' => [
                'Default',
                'EntityParent',
                'Entity',
            ]]),
            new ConstraintA(['groups' => [
                'Default',
                'Entity',
            ]]),
        ];

        \$this->assertEquals(\$constraints, \$this->metadata->getConstraints());
    }

    public function testMergeConstraintsMergesMemberConstraints()
    {
        \$parent = new ClassMetadata(self::PARENTCLASS);
        \$parent->addPropertyConstraint('firstName', new ConstraintA());
        \$parent->addPropertyConstraint('firstName', new ConstraintB(['groups' => 'foo']));

        \$this->metadata->mergeConstraints(\$parent);
        \$this->metadata->addPropertyConstraint('firstName', new ConstraintA());

        \$constraintA1 = new ConstraintA(['groups' => [
            'Default',
            'EntityParent',
            'Entity',
        ]]);
        \$constraintA2 = new ConstraintA(['groups' => [
            'Default',
            'Entity',
        ]]);
        \$constraintB = new ConstraintB([
            'groups' => ['foo'],
        ]);

        \$constraints = [
            \$constraintA1,
            \$constraintB,
            \$constraintA2,
        ];

        \$constraintsByGroup = [
            'Default' => [
                \$constraintA1,
                \$constraintA2,
            ],
            'EntityParent' => [
                \$constraintA1,
            ],
            'Entity' => [
                \$constraintA1,
                \$constraintA2,
            ],
            'foo' => [
                \$constraintB,
            ],
        ];

        \$members = \$this->metadata->getPropertyMetadata('firstName');

        \$this->assertCount(1, \$members);
        \$this->assertEquals(self::PARENTCLASS, \$members[0]->getClassName());
        \$this->assertEquals(\$constraints, \$members[0]->getConstraints());
        \$this->assertEquals(\$constraintsByGroup, \$members[0]->constraintsByGroup);
    }

    public function testMemberMetadatas()
    {
        \$this->metadata->addPropertyConstraint('firstName', new ConstraintA());

        \$this->assertTrue(\$this->metadata->hasPropertyMetadata('firstName'));
        \$this->assertFalse(\$this->metadata->hasPropertyMetadata('non_existent_field'));
    }

    public function testMergeConstraintsKeepsPrivateMembersSeparate()
    {
        \$parent = new ClassMetadata(self::PARENTCLASS);
        \$parent->addPropertyConstraint('internal', new ConstraintA());

        \$this->metadata->mergeConstraints(\$parent);
        \$this->metadata->addPropertyConstraint('internal', new ConstraintA());

        \$parentConstraints = [
            new ConstraintA(['groups' => [
                'Default',
                'EntityParent',
                'Entity',
            ]]),
        ];
        \$constraints = [
            new ConstraintA(['groups' => [
                'Default',
                'Entity',
            ]]),
        ];

        \$members = \$this->metadata->getPropertyMetadata('internal');

        \$this->assertCount(2, \$members);
        \$this->assertEquals(self::PARENTCLASS, \$members[0]->getClassName());
        \$this->assertEquals(\$parentConstraints, \$members[0]->getConstraints());
        \$this->assertEquals(self::CLASSNAME, \$members[1]->getClassName());
        \$this->assertEquals(\$constraints, \$members[1]->getConstraints());
    }

    public function testGetReflectionClass()
    {
        \$reflClass = new \\ReflectionClass(self::CLASSNAME);

        \$this->assertEquals(\$reflClass, \$this->metadata->getReflectionClass());
    }

    public function testSerialize()
    {
        \$this->metadata->addConstraint(new ConstraintA(['property1' => 'A']));
        \$this->metadata->addConstraint(new ConstraintB(['groups' => 'TestGroup']));
        \$this->metadata->addPropertyConstraint('firstName', new ConstraintA());
        \$this->metadata->addGetterConstraint('lastName', new ConstraintB());

        \$metadata = unserialize(serialize(\$this->metadata));

        \$this->assertEquals(\$this->metadata, \$metadata);
    }

    public function testGroupSequencesWorkIfContainingDefaultGroup()
    {
        \$this->metadata->setGroupSequence(['Foo', \$this->metadata->getDefaultGroup()]);

        \$this->assertInstanceOf('Symfony\\Component\\Validator\\Constraints\\GroupSequence', \$this->metadata->getGroupSequence());
    }

    public function testGroupSequencesFailIfNotContainingDefaultGroup()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\GroupDefinitionException');
        \$this->metadata->setGroupSequence(['Foo', 'Bar']);
    }

    public function testGroupSequencesFailIfContainingDefault()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\GroupDefinitionException');
        \$this->metadata->setGroupSequence(['Foo', \$this->metadata->getDefaultGroup(), Constraint::DEFAULT_GROUP]);
    }

    public function testGroupSequenceFailsIfGroupSequenceProviderIsSet()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\GroupDefinitionException');
        \$metadata = new ClassMetadata(self::PROVIDERCLASS);
        \$metadata->setGroupSequenceProvider(true);
        \$metadata->setGroupSequence(['GroupSequenceProviderEntity', 'Foo']);
    }

    public function testGroupSequenceProviderFailsIfGroupSequenceIsSet()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\GroupDefinitionException');
        \$metadata = new ClassMetadata(self::PROVIDERCLASS);
        \$metadata->setGroupSequence(['GroupSequenceProviderEntity', 'Foo']);
        \$metadata->setGroupSequenceProvider(true);
    }

    public function testGroupSequenceProviderFailsIfDomainClassIsInvalid()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\GroupDefinitionException');
        \$metadata = new ClassMetadata('stdClass');
        \$metadata->setGroupSequenceProvider(true);
    }

    public function testGroupSequenceProvider()
    {
        \$metadata = new ClassMetadata(self::PROVIDERCLASS);
        \$metadata->setGroupSequenceProvider(true);
        \$this->assertTrue(\$metadata->isGroupSequenceProvider());
    }

    public function testMergeConstraintsMergesGroupSequenceProvider()
    {
        \$parent = new ClassMetadata(self::PROVIDERCLASS);
        \$parent->setGroupSequenceProvider(true);

        \$metadata = new ClassMetadata(self::PROVIDERCHILDCLASS);
        \$metadata->mergeConstraints(\$parent);

        \$this->assertTrue(\$metadata->isGroupSequenceProvider());
    }

    /**
     * https://github.com/symfony/symfony/issues/11604.
     */
    public function testGetPropertyMetadataReturnsEmptyArrayWithoutConfiguredMetadata()
    {
        \$this->assertCount(0, \$this->metadata->getPropertyMetadata('foo'), '->getPropertyMetadata() returns an empty collection if no metadata is configured for the given property');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Mapping/ClassMetadataTest.php";
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

namespace Symfony\\Component\\Validator\\Tests\\Mapping;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Constraints\\Valid;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintB;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\PropertyConstraint;

class ClassMetadataTest extends TestCase
{
    const CLASSNAME = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity';
    const PARENTCLASS = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityParent';
    const PROVIDERCLASS = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\GroupSequenceProviderEntity';
    const PROVIDERCHILDCLASS = 'Symfony\\Component\\Validator\\Tests\\Fixtures\\GroupSequenceProviderChildEntity';

    protected \$metadata;

    protected function setUp(): void
    {
        \$this->metadata = new ClassMetadata(self::CLASSNAME);
    }

    protected function tearDown(): void
    {
        \$this->metadata = null;
    }

    public function testAddConstraintDoesNotAcceptValid()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');

        \$this->metadata->addConstraint(new Valid());
    }

    public function testAddConstraintRequiresClassConstraints()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');

        \$this->metadata->addConstraint(new PropertyConstraint());
    }

    public function testAddPropertyConstraints()
    {
        \$this->metadata->addPropertyConstraint('firstName', new ConstraintA());
        \$this->metadata->addPropertyConstraint('lastName', new ConstraintB());

        \$this->assertEquals(['firstName', 'lastName'], \$this->metadata->getConstrainedProperties());
    }

    public function testAddMultiplePropertyConstraints()
    {
        \$this->metadata->addPropertyConstraints('lastName', [new ConstraintA(), new ConstraintB()]);

        \$constraints = [
            new ConstraintA(['groups' => ['Default', 'Entity']]),
            new ConstraintB(['groups' => ['Default', 'Entity']]),
        ];

        \$properties = \$this->metadata->getPropertyMetadata('lastName');

        \$this->assertCount(1, \$properties);
        \$this->assertEquals('lastName', \$properties[0]->getName());
        \$this->assertEquals(\$constraints, \$properties[0]->getConstraints());
    }

    public function testAddGetterConstraints()
    {
        \$this->metadata->addGetterConstraint('lastName', new ConstraintA());
        \$this->metadata->addGetterConstraint('lastName', new ConstraintB());

        \$constraints = [
            new ConstraintA(['groups' => ['Default', 'Entity']]),
            new ConstraintB(['groups' => ['Default', 'Entity']]),
        ];

        \$properties = \$this->metadata->getPropertyMetadata('lastName');

        \$this->assertCount(1, \$properties);
        \$this->assertEquals('getLastName', \$properties[0]->getName());
        \$this->assertEquals(\$constraints, \$properties[0]->getConstraints());
    }

    public function testAddMultipleGetterConstraints()
    {
        \$this->metadata->addGetterConstraints('lastName', [new ConstraintA(), new ConstraintB()]);

        \$constraints = [
            new ConstraintA(['groups' => ['Default', 'Entity']]),
            new ConstraintB(['groups' => ['Default', 'Entity']]),
        ];

        \$properties = \$this->metadata->getPropertyMetadata('lastName');

        \$this->assertCount(1, \$properties);
        \$this->assertEquals('getLastName', \$properties[0]->getName());
        \$this->assertEquals(\$constraints, \$properties[0]->getConstraints());
    }

    public function testMergeConstraintsMergesClassConstraints()
    {
        \$parent = new ClassMetadata(self::PARENTCLASS);
        \$parent->addConstraint(new ConstraintA());

        \$this->metadata->mergeConstraints(\$parent);
        \$this->metadata->addConstraint(new ConstraintA());

        \$constraints = [
            new ConstraintA(['groups' => [
                'Default',
                'EntityParent',
                'Entity',
            ]]),
            new ConstraintA(['groups' => [
                'Default',
                'Entity',
            ]]),
        ];

        \$this->assertEquals(\$constraints, \$this->metadata->getConstraints());
    }

    public function testMergeConstraintsMergesMemberConstraints()
    {
        \$parent = new ClassMetadata(self::PARENTCLASS);
        \$parent->addPropertyConstraint('firstName', new ConstraintA());
        \$parent->addPropertyConstraint('firstName', new ConstraintB(['groups' => 'foo']));

        \$this->metadata->mergeConstraints(\$parent);
        \$this->metadata->addPropertyConstraint('firstName', new ConstraintA());

        \$constraintA1 = new ConstraintA(['groups' => [
            'Default',
            'EntityParent',
            'Entity',
        ]]);
        \$constraintA2 = new ConstraintA(['groups' => [
            'Default',
            'Entity',
        ]]);
        \$constraintB = new ConstraintB([
            'groups' => ['foo'],
        ]);

        \$constraints = [
            \$constraintA1,
            \$constraintB,
            \$constraintA2,
        ];

        \$constraintsByGroup = [
            'Default' => [
                \$constraintA1,
                \$constraintA2,
            ],
            'EntityParent' => [
                \$constraintA1,
            ],
            'Entity' => [
                \$constraintA1,
                \$constraintA2,
            ],
            'foo' => [
                \$constraintB,
            ],
        ];

        \$members = \$this->metadata->getPropertyMetadata('firstName');

        \$this->assertCount(1, \$members);
        \$this->assertEquals(self::PARENTCLASS, \$members[0]->getClassName());
        \$this->assertEquals(\$constraints, \$members[0]->getConstraints());
        \$this->assertEquals(\$constraintsByGroup, \$members[0]->constraintsByGroup);
    }

    public function testMemberMetadatas()
    {
        \$this->metadata->addPropertyConstraint('firstName', new ConstraintA());

        \$this->assertTrue(\$this->metadata->hasPropertyMetadata('firstName'));
        \$this->assertFalse(\$this->metadata->hasPropertyMetadata('non_existent_field'));
    }

    public function testMergeConstraintsKeepsPrivateMembersSeparate()
    {
        \$parent = new ClassMetadata(self::PARENTCLASS);
        \$parent->addPropertyConstraint('internal', new ConstraintA());

        \$this->metadata->mergeConstraints(\$parent);
        \$this->metadata->addPropertyConstraint('internal', new ConstraintA());

        \$parentConstraints = [
            new ConstraintA(['groups' => [
                'Default',
                'EntityParent',
                'Entity',
            ]]),
        ];
        \$constraints = [
            new ConstraintA(['groups' => [
                'Default',
                'Entity',
            ]]),
        ];

        \$members = \$this->metadata->getPropertyMetadata('internal');

        \$this->assertCount(2, \$members);
        \$this->assertEquals(self::PARENTCLASS, \$members[0]->getClassName());
        \$this->assertEquals(\$parentConstraints, \$members[0]->getConstraints());
        \$this->assertEquals(self::CLASSNAME, \$members[1]->getClassName());
        \$this->assertEquals(\$constraints, \$members[1]->getConstraints());
    }

    public function testGetReflectionClass()
    {
        \$reflClass = new \\ReflectionClass(self::CLASSNAME);

        \$this->assertEquals(\$reflClass, \$this->metadata->getReflectionClass());
    }

    public function testSerialize()
    {
        \$this->metadata->addConstraint(new ConstraintA(['property1' => 'A']));
        \$this->metadata->addConstraint(new ConstraintB(['groups' => 'TestGroup']));
        \$this->metadata->addPropertyConstraint('firstName', new ConstraintA());
        \$this->metadata->addGetterConstraint('lastName', new ConstraintB());

        \$metadata = unserialize(serialize(\$this->metadata));

        \$this->assertEquals(\$this->metadata, \$metadata);
    }

    public function testGroupSequencesWorkIfContainingDefaultGroup()
    {
        \$this->metadata->setGroupSequence(['Foo', \$this->metadata->getDefaultGroup()]);

        \$this->assertInstanceOf('Symfony\\Component\\Validator\\Constraints\\GroupSequence', \$this->metadata->getGroupSequence());
    }

    public function testGroupSequencesFailIfNotContainingDefaultGroup()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\GroupDefinitionException');
        \$this->metadata->setGroupSequence(['Foo', 'Bar']);
    }

    public function testGroupSequencesFailIfContainingDefault()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\GroupDefinitionException');
        \$this->metadata->setGroupSequence(['Foo', \$this->metadata->getDefaultGroup(), Constraint::DEFAULT_GROUP]);
    }

    public function testGroupSequenceFailsIfGroupSequenceProviderIsSet()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\GroupDefinitionException');
        \$metadata = new ClassMetadata(self::PROVIDERCLASS);
        \$metadata->setGroupSequenceProvider(true);
        \$metadata->setGroupSequence(['GroupSequenceProviderEntity', 'Foo']);
    }

    public function testGroupSequenceProviderFailsIfGroupSequenceIsSet()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\GroupDefinitionException');
        \$metadata = new ClassMetadata(self::PROVIDERCLASS);
        \$metadata->setGroupSequence(['GroupSequenceProviderEntity', 'Foo']);
        \$metadata->setGroupSequenceProvider(true);
    }

    public function testGroupSequenceProviderFailsIfDomainClassIsInvalid()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\GroupDefinitionException');
        \$metadata = new ClassMetadata('stdClass');
        \$metadata->setGroupSequenceProvider(true);
    }

    public function testGroupSequenceProvider()
    {
        \$metadata = new ClassMetadata(self::PROVIDERCLASS);
        \$metadata->setGroupSequenceProvider(true);
        \$this->assertTrue(\$metadata->isGroupSequenceProvider());
    }

    public function testMergeConstraintsMergesGroupSequenceProvider()
    {
        \$parent = new ClassMetadata(self::PROVIDERCLASS);
        \$parent->setGroupSequenceProvider(true);

        \$metadata = new ClassMetadata(self::PROVIDERCHILDCLASS);
        \$metadata->mergeConstraints(\$parent);

        \$this->assertTrue(\$metadata->isGroupSequenceProvider());
    }

    /**
     * https://github.com/symfony/symfony/issues/11604.
     */
    public function testGetPropertyMetadataReturnsEmptyArrayWithoutConfiguredMetadata()
    {
        \$this->assertCount(0, \$this->metadata->getPropertyMetadata('foo'), '->getPropertyMetadata() returns an empty collection if no metadata is configured for the given property');
    }
}
", "vendor/symfony/validator/Tests/Mapping/ClassMetadataTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Mapping/ClassMetadataTest.php");
    }
}
