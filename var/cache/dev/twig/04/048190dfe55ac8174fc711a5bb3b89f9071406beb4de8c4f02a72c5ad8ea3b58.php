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

/* vendor/symfony/validator/Tests/Mapping/Loader/AnnotationLoaderTest.php */
class __TwigTemplate_d1cee260ca5af5c0ba104b71fd7f0adde2264c913ddfc16a352d3bc6eebfa7e8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/Loader/AnnotationLoaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/Loader/AnnotationLoaderTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Mapping\\Loader;

use Doctrine\\Common\\Annotations\\AnnotationReader;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraints\\All;
use Symfony\\Component\\Validator\\Constraints\\Callback;
use Symfony\\Component\\Validator\\Constraints\\Choice;
use Symfony\\Component\\Validator\\Constraints\\Collection;
use Symfony\\Component\\Validator\\Constraints\\IsTrue;
use Symfony\\Component\\Validator\\Constraints\\NotNull;
use Symfony\\Component\\Validator\\Constraints\\Range;
use Symfony\\Component\\Validator\\Constraints\\Valid;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA;

class AnnotationLoaderTest extends TestCase
{
    public function testLoadClassMetadataReturnsTrueIfSuccessful()
    {
        \$reader = new AnnotationReader();
        \$loader = new AnnotationLoader(\$reader);
        \$metadata = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity');

        \$this->assertTrue(\$loader->loadClassMetadata(\$metadata));
    }

    public function testLoadClassMetadataReturnsFalseIfNotSuccessful()
    {
        \$loader = new AnnotationLoader(new AnnotationReader());
        \$metadata = new ClassMetadata('\\stdClass');

        \$this->assertFalse(\$loader->loadClassMetadata(\$metadata));
    }

    public function testLoadClassMetadata()
    {
        \$loader = new AnnotationLoader(new AnnotationReader());
        \$metadata = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity');

        \$loader->loadClassMetadata(\$metadata);

        \$expected = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity');
        \$expected->setGroupSequence(['Foo', 'Entity']);
        \$expected->addConstraint(new ConstraintA());
        \$expected->addConstraint(new Callback(['Symfony\\Component\\Validator\\Tests\\Fixtures\\CallbackClass', 'callback']));
        \$expected->addConstraint(new Callback(['callback' => 'validateMe', 'payload' => 'foo']));
        \$expected->addConstraint(new Callback('validateMeStatic'));
        \$expected->addPropertyConstraint('firstName', new NotNull());
        \$expected->addPropertyConstraint('firstName', new Range(['min' => 3]));
        \$expected->addPropertyConstraint('firstName', new All([new NotNull(), new Range(['min' => 3])]));
        \$expected->addPropertyConstraint('firstName', new All(['constraints' => [new NotNull(), new Range(['min' => 3])]]));
        \$expected->addPropertyConstraint('firstName', new Collection(['fields' => [
            'foo' => [new NotNull(), new Range(['min' => 3])],
            'bar' => new Range(['min' => 5]),
        ]]));
        \$expected->addPropertyConstraint('firstName', new Choice([
            'message' => 'Must be one of %choices%',
            'choices' => ['A', 'B'],
        ]));
        \$expected->addPropertyConstraint('childA', new Valid());
        \$expected->addPropertyConstraint('childB', new Valid());
        \$expected->addGetterConstraint('lastName', new NotNull());
        \$expected->addGetterMethodConstraint('valid', 'isValid', new IsTrue());
        \$expected->addGetterConstraint('permissions', new IsTrue());

        // load reflection class so that the comparison passes
        \$expected->getReflectionClass();

        \$this->assertEquals(\$expected, \$metadata);
    }

    /**
     * DevLaon MetaData merge with parent annotation.
     */
    public function testLoadParentClassMetadata()
    {
        \$loader = new AnnotationLoader(new AnnotationReader());

        // Load Parent MetaData
        \$parent_metadata = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityParent');
        \$loader->loadClassMetadata(\$parent_metadata);

        \$expected_parent = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityParent');
        \$expected_parent->addPropertyConstraint('other', new NotNull());
        \$expected_parent->getReflectionClass();

        \$this->assertEquals(\$expected_parent, \$parent_metadata);
    }

    /**
     * DevLaon MetaData merge with parent annotation.
     */
    public function testLoadClassMetadataAndMerge()
    {
        \$loader = new AnnotationLoader(new AnnotationReader());

        // Load Parent MetaData
        \$parent_metadata = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityParent');
        \$loader->loadClassMetadata(\$parent_metadata);

        \$metadata = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity');

        // Merge parent metaData.
        \$metadata->mergeConstraints(\$parent_metadata);

        \$loader->loadClassMetadata(\$metadata);

        \$expected_parent = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityParent');
        \$expected_parent->addPropertyConstraint('other', new NotNull());
        \$expected_parent->getReflectionClass();

        \$expected = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity');
        \$expected->mergeConstraints(\$expected_parent);

        \$expected->setGroupSequence(['Foo', 'Entity']);
        \$expected->addConstraint(new ConstraintA());
        \$expected->addConstraint(new Callback(['Symfony\\Component\\Validator\\Tests\\Fixtures\\CallbackClass', 'callback']));
        \$expected->addConstraint(new Callback(['callback' => 'validateMe', 'payload' => 'foo']));
        \$expected->addConstraint(new Callback('validateMeStatic'));
        \$expected->addPropertyConstraint('firstName', new NotNull());
        \$expected->addPropertyConstraint('firstName', new Range(['min' => 3]));
        \$expected->addPropertyConstraint('firstName', new All([new NotNull(), new Range(['min' => 3])]));
        \$expected->addPropertyConstraint('firstName', new All(['constraints' => [new NotNull(), new Range(['min' => 3])]]));
        \$expected->addPropertyConstraint('firstName', new Collection(['fields' => [
            'foo' => [new NotNull(), new Range(['min' => 3])],
            'bar' => new Range(['min' => 5]),
        ]]));
        \$expected->addPropertyConstraint('firstName', new Choice([
            'message' => 'Must be one of %choices%',
            'choices' => ['A', 'B'],
        ]));
        \$expected->addPropertyConstraint('childA', new Valid());
        \$expected->addPropertyConstraint('childB', new Valid());
        \$expected->addGetterConstraint('lastName', new NotNull());
        \$expected->addGetterMethodConstraint('valid', 'isValid', new IsTrue());
        \$expected->addGetterConstraint('permissions', new IsTrue());

        // load reflection class so that the comparison passes
        \$expected->getReflectionClass();

        \$this->assertEquals(\$expected, \$metadata);
    }

    public function testLoadGroupSequenceProviderAnnotation()
    {
        \$loader = new AnnotationLoader(new AnnotationReader());

        \$metadata = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\GroupSequenceProviderEntity');
        \$loader->loadClassMetadata(\$metadata);

        \$expected = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\GroupSequenceProviderEntity');
        \$expected->setGroupSequenceProvider(true);
        \$expected->getReflectionClass();

        \$this->assertEquals(\$expected, \$metadata);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Mapping/Loader/AnnotationLoaderTest.php";
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

namespace Symfony\\Component\\Validator\\Tests\\Mapping\\Loader;

use Doctrine\\Common\\Annotations\\AnnotationReader;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraints\\All;
use Symfony\\Component\\Validator\\Constraints\\Callback;
use Symfony\\Component\\Validator\\Constraints\\Choice;
use Symfony\\Component\\Validator\\Constraints\\Collection;
use Symfony\\Component\\Validator\\Constraints\\IsTrue;
use Symfony\\Component\\Validator\\Constraints\\NotNull;
use Symfony\\Component\\Validator\\Constraints\\Range;
use Symfony\\Component\\Validator\\Constraints\\Valid;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;
use Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA;

class AnnotationLoaderTest extends TestCase
{
    public function testLoadClassMetadataReturnsTrueIfSuccessful()
    {
        \$reader = new AnnotationReader();
        \$loader = new AnnotationLoader(\$reader);
        \$metadata = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity');

        \$this->assertTrue(\$loader->loadClassMetadata(\$metadata));
    }

    public function testLoadClassMetadataReturnsFalseIfNotSuccessful()
    {
        \$loader = new AnnotationLoader(new AnnotationReader());
        \$metadata = new ClassMetadata('\\stdClass');

        \$this->assertFalse(\$loader->loadClassMetadata(\$metadata));
    }

    public function testLoadClassMetadata()
    {
        \$loader = new AnnotationLoader(new AnnotationReader());
        \$metadata = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity');

        \$loader->loadClassMetadata(\$metadata);

        \$expected = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity');
        \$expected->setGroupSequence(['Foo', 'Entity']);
        \$expected->addConstraint(new ConstraintA());
        \$expected->addConstraint(new Callback(['Symfony\\Component\\Validator\\Tests\\Fixtures\\CallbackClass', 'callback']));
        \$expected->addConstraint(new Callback(['callback' => 'validateMe', 'payload' => 'foo']));
        \$expected->addConstraint(new Callback('validateMeStatic'));
        \$expected->addPropertyConstraint('firstName', new NotNull());
        \$expected->addPropertyConstraint('firstName', new Range(['min' => 3]));
        \$expected->addPropertyConstraint('firstName', new All([new NotNull(), new Range(['min' => 3])]));
        \$expected->addPropertyConstraint('firstName', new All(['constraints' => [new NotNull(), new Range(['min' => 3])]]));
        \$expected->addPropertyConstraint('firstName', new Collection(['fields' => [
            'foo' => [new NotNull(), new Range(['min' => 3])],
            'bar' => new Range(['min' => 5]),
        ]]));
        \$expected->addPropertyConstraint('firstName', new Choice([
            'message' => 'Must be one of %choices%',
            'choices' => ['A', 'B'],
        ]));
        \$expected->addPropertyConstraint('childA', new Valid());
        \$expected->addPropertyConstraint('childB', new Valid());
        \$expected->addGetterConstraint('lastName', new NotNull());
        \$expected->addGetterMethodConstraint('valid', 'isValid', new IsTrue());
        \$expected->addGetterConstraint('permissions', new IsTrue());

        // load reflection class so that the comparison passes
        \$expected->getReflectionClass();

        \$this->assertEquals(\$expected, \$metadata);
    }

    /**
     * DevLaon MetaData merge with parent annotation.
     */
    public function testLoadParentClassMetadata()
    {
        \$loader = new AnnotationLoader(new AnnotationReader());

        // Load Parent MetaData
        \$parent_metadata = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityParent');
        \$loader->loadClassMetadata(\$parent_metadata);

        \$expected_parent = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityParent');
        \$expected_parent->addPropertyConstraint('other', new NotNull());
        \$expected_parent->getReflectionClass();

        \$this->assertEquals(\$expected_parent, \$parent_metadata);
    }

    /**
     * DevLaon MetaData merge with parent annotation.
     */
    public function testLoadClassMetadataAndMerge()
    {
        \$loader = new AnnotationLoader(new AnnotationReader());

        // Load Parent MetaData
        \$parent_metadata = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityParent');
        \$loader->loadClassMetadata(\$parent_metadata);

        \$metadata = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity');

        // Merge parent metaData.
        \$metadata->mergeConstraints(\$parent_metadata);

        \$loader->loadClassMetadata(\$metadata);

        \$expected_parent = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\EntityParent');
        \$expected_parent->addPropertyConstraint('other', new NotNull());
        \$expected_parent->getReflectionClass();

        \$expected = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity');
        \$expected->mergeConstraints(\$expected_parent);

        \$expected->setGroupSequence(['Foo', 'Entity']);
        \$expected->addConstraint(new ConstraintA());
        \$expected->addConstraint(new Callback(['Symfony\\Component\\Validator\\Tests\\Fixtures\\CallbackClass', 'callback']));
        \$expected->addConstraint(new Callback(['callback' => 'validateMe', 'payload' => 'foo']));
        \$expected->addConstraint(new Callback('validateMeStatic'));
        \$expected->addPropertyConstraint('firstName', new NotNull());
        \$expected->addPropertyConstraint('firstName', new Range(['min' => 3]));
        \$expected->addPropertyConstraint('firstName', new All([new NotNull(), new Range(['min' => 3])]));
        \$expected->addPropertyConstraint('firstName', new All(['constraints' => [new NotNull(), new Range(['min' => 3])]]));
        \$expected->addPropertyConstraint('firstName', new Collection(['fields' => [
            'foo' => [new NotNull(), new Range(['min' => 3])],
            'bar' => new Range(['min' => 5]),
        ]]));
        \$expected->addPropertyConstraint('firstName', new Choice([
            'message' => 'Must be one of %choices%',
            'choices' => ['A', 'B'],
        ]));
        \$expected->addPropertyConstraint('childA', new Valid());
        \$expected->addPropertyConstraint('childB', new Valid());
        \$expected->addGetterConstraint('lastName', new NotNull());
        \$expected->addGetterMethodConstraint('valid', 'isValid', new IsTrue());
        \$expected->addGetterConstraint('permissions', new IsTrue());

        // load reflection class so that the comparison passes
        \$expected->getReflectionClass();

        \$this->assertEquals(\$expected, \$metadata);
    }

    public function testLoadGroupSequenceProviderAnnotation()
    {
        \$loader = new AnnotationLoader(new AnnotationReader());

        \$metadata = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\GroupSequenceProviderEntity');
        \$loader->loadClassMetadata(\$metadata);

        \$expected = new ClassMetadata('Symfony\\Component\\Validator\\Tests\\Fixtures\\GroupSequenceProviderEntity');
        \$expected->setGroupSequenceProvider(true);
        \$expected->getReflectionClass();

        \$this->assertEquals(\$expected, \$metadata);
    }
}
", "vendor/symfony/validator/Tests/Mapping/Loader/AnnotationLoaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Mapping/Loader/AnnotationLoaderTest.php");
    }
}
