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

/* vendor/symfony/validator/Tests/Mapping/MemberMetadataTest.php */
class __TwigTemplate_f4a20f1cfd1fa77d1e5cbaa3bd6cdc431393bbbacb71a5f2c49a4b17028b3dbd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/MemberMetadataTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Mapping/MemberMetadataTest.php"));

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
use Symfony\\Component\\Validator\\Constraints\\Valid;
use Symfony\\Component\\Validator\\Mapping\\MemberMetadata;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ClassConstraint;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintB;

class MemberMetadataTest extends TestCase
{
    protected \$metadata;

    protected function setUp(): void
    {
        \$this->metadata = new TestMemberMetadata(
            'Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity',
            'getLastName',
            'lastName'
        );
    }

    protected function tearDown(): void
    {
        \$this->metadata = null;
    }

    public function testAddConstraintRequiresClassConstraints()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');

        \$this->metadata->addConstraint(new ClassConstraint());
    }

    public function testSerialize()
    {
        \$this->metadata->addConstraint(new ConstraintA(['property1' => 'A']));
        \$this->metadata->addConstraint(new ConstraintB(['groups' => 'TestGroup']));

        \$metadata = unserialize(serialize(\$this->metadata));

        \$this->assertEquals(\$this->metadata, \$metadata);
    }

    public function testSerializeCollectionCascaded()
    {
        \$this->metadata->addConstraint(new Valid(['traverse' => true]));

        \$metadata = unserialize(serialize(\$this->metadata));

        \$this->assertEquals(\$this->metadata, \$metadata);
    }

    public function testSerializeCollectionNotCascaded()
    {
        \$this->metadata->addConstraint(new Valid(['traverse' => false]));

        \$metadata = unserialize(serialize(\$this->metadata));

        \$this->assertEquals(\$this->metadata, \$metadata);
    }
}

class TestMemberMetadata extends MemberMetadata
{
    public function getPropertyValue(\$object)
    {
    }

    protected function newReflectionMember(\$object)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Mapping/MemberMetadataTest.php";
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
use Symfony\\Component\\Validator\\Constraints\\Valid;
use Symfony\\Component\\Validator\\Mapping\\MemberMetadata;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ClassConstraint;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA;
use Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintB;

class MemberMetadataTest extends TestCase
{
    protected \$metadata;

    protected function setUp(): void
    {
        \$this->metadata = new TestMemberMetadata(
            'Symfony\\Component\\Validator\\Tests\\Fixtures\\Entity',
            'getLastName',
            'lastName'
        );
    }

    protected function tearDown(): void
    {
        \$this->metadata = null;
    }

    public function testAddConstraintRequiresClassConstraints()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');

        \$this->metadata->addConstraint(new ClassConstraint());
    }

    public function testSerialize()
    {
        \$this->metadata->addConstraint(new ConstraintA(['property1' => 'A']));
        \$this->metadata->addConstraint(new ConstraintB(['groups' => 'TestGroup']));

        \$metadata = unserialize(serialize(\$this->metadata));

        \$this->assertEquals(\$this->metadata, \$metadata);
    }

    public function testSerializeCollectionCascaded()
    {
        \$this->metadata->addConstraint(new Valid(['traverse' => true]));

        \$metadata = unserialize(serialize(\$this->metadata));

        \$this->assertEquals(\$this->metadata, \$metadata);
    }

    public function testSerializeCollectionNotCascaded()
    {
        \$this->metadata->addConstraint(new Valid(['traverse' => false]));

        \$metadata = unserialize(serialize(\$this->metadata));

        \$this->assertEquals(\$this->metadata, \$metadata);
    }
}

class TestMemberMetadata extends MemberMetadata
{
    public function getPropertyValue(\$object)
    {
    }

    protected function newReflectionMember(\$object)
    {
    }
}
", "vendor/symfony/validator/Tests/Mapping/MemberMetadataTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Mapping/MemberMetadataTest.php");
    }
}
