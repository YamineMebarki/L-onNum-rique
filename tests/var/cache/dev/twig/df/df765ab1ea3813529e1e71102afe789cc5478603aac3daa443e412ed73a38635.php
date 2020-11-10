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

/* vendor/symfony/validator/Tests/Constraints/CompositeTest.php */
class __TwigTemplate_e9cdb342b88b17fb31633a912f7a3d280ff69c5d594e9ce8afb9d3d3d3551ecb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/CompositeTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/CompositeTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraints\\Composite;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Constraints\\NotNull;
use Symfony\\Component\\Validator\\Constraints\\Valid;

class ConcreteComposite extends Composite
{
    public \$constraints;

    protected function getCompositeOption()
    {
        return 'constraints';
    }

    public function getDefaultOption()
    {
        return 'constraints';
    }
}

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CompositeTest extends TestCase
{
    public function testMergeNestedGroupsIfNoExplicitParentGroup()
    {
        \$constraint = new ConcreteComposite([
            new NotNull(['groups' => 'Default']),
            new NotBlank(['groups' => ['Default', 'Strict']]),
        ]);

        \$this->assertEquals(['Default', 'Strict'], \$constraint->groups);
        \$this->assertEquals(['Default'], \$constraint->constraints[0]->groups);
        \$this->assertEquals(['Default', 'Strict'], \$constraint->constraints[1]->groups);
    }

    public function testSetImplicitNestedGroupsIfExplicitParentGroup()
    {
        \$constraint = new ConcreteComposite([
            'constraints' => [
                new NotNull(),
                new NotBlank(),
            ],
            'groups' => ['Default', 'Strict'],
        ]);

        \$this->assertEquals(['Default', 'Strict'], \$constraint->groups);
        \$this->assertEquals(['Default', 'Strict'], \$constraint->constraints[0]->groups);
        \$this->assertEquals(['Default', 'Strict'], \$constraint->constraints[1]->groups);
    }

    public function testExplicitNestedGroupsMustBeSubsetOfExplicitParentGroups()
    {
        \$constraint = new ConcreteComposite([
            'constraints' => [
                new NotNull(['groups' => 'Default']),
                new NotBlank(['groups' => 'Strict']),
            ],
            'groups' => ['Default', 'Strict'],
        ]);

        \$this->assertEquals(['Default', 'Strict'], \$constraint->groups);
        \$this->assertEquals(['Default'], \$constraint->constraints[0]->groups);
        \$this->assertEquals(['Strict'], \$constraint->constraints[1]->groups);
    }

    public function testFailIfExplicitNestedGroupsNotSubsetOfExplicitParentGroups()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new ConcreteComposite([
            'constraints' => [
                new NotNull(['groups' => ['Default', 'Foobar']]),
            ],
            'groups' => ['Default', 'Strict'],
        ]);
    }

    public function testImplicitGroupNamesAreForwarded()
    {
        \$constraint = new ConcreteComposite([
            new NotNull(['groups' => 'Default']),
            new NotBlank(['groups' => 'Strict']),
        ]);

        \$constraint->addImplicitGroupName('ImplicitGroup');

        \$this->assertEquals(['Default', 'Strict', 'ImplicitGroup'], \$constraint->groups);
        \$this->assertEquals(['Default', 'ImplicitGroup'], \$constraint->constraints[0]->groups);
        \$this->assertEquals(['Strict'], \$constraint->constraints[1]->groups);
    }

    public function testSingleConstraintsAccepted()
    {
        \$nestedConstraint = new NotNull();
        \$constraint = new ConcreteComposite(\$nestedConstraint);

        \$this->assertEquals([\$nestedConstraint], \$constraint->constraints);
    }

    public function testFailIfNoConstraint()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new ConcreteComposite([
            new NotNull(['groups' => 'Default']),
            'NotBlank',
        ]);
    }

    public function testFailIfNoConstraintObject()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new ConcreteComposite([
            new NotNull(['groups' => 'Default']),
            new \\ArrayObject(),
        ]);
    }

    public function testValidCantBeNested()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new ConcreteComposite([
            new Valid(),
        ]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/CompositeTest.php";
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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraints\\Composite;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;
use Symfony\\Component\\Validator\\Constraints\\NotNull;
use Symfony\\Component\\Validator\\Constraints\\Valid;

class ConcreteComposite extends Composite
{
    public \$constraints;

    protected function getCompositeOption()
    {
        return 'constraints';
    }

    public function getDefaultOption()
    {
        return 'constraints';
    }
}

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CompositeTest extends TestCase
{
    public function testMergeNestedGroupsIfNoExplicitParentGroup()
    {
        \$constraint = new ConcreteComposite([
            new NotNull(['groups' => 'Default']),
            new NotBlank(['groups' => ['Default', 'Strict']]),
        ]);

        \$this->assertEquals(['Default', 'Strict'], \$constraint->groups);
        \$this->assertEquals(['Default'], \$constraint->constraints[0]->groups);
        \$this->assertEquals(['Default', 'Strict'], \$constraint->constraints[1]->groups);
    }

    public function testSetImplicitNestedGroupsIfExplicitParentGroup()
    {
        \$constraint = new ConcreteComposite([
            'constraints' => [
                new NotNull(),
                new NotBlank(),
            ],
            'groups' => ['Default', 'Strict'],
        ]);

        \$this->assertEquals(['Default', 'Strict'], \$constraint->groups);
        \$this->assertEquals(['Default', 'Strict'], \$constraint->constraints[0]->groups);
        \$this->assertEquals(['Default', 'Strict'], \$constraint->constraints[1]->groups);
    }

    public function testExplicitNestedGroupsMustBeSubsetOfExplicitParentGroups()
    {
        \$constraint = new ConcreteComposite([
            'constraints' => [
                new NotNull(['groups' => 'Default']),
                new NotBlank(['groups' => 'Strict']),
            ],
            'groups' => ['Default', 'Strict'],
        ]);

        \$this->assertEquals(['Default', 'Strict'], \$constraint->groups);
        \$this->assertEquals(['Default'], \$constraint->constraints[0]->groups);
        \$this->assertEquals(['Strict'], \$constraint->constraints[1]->groups);
    }

    public function testFailIfExplicitNestedGroupsNotSubsetOfExplicitParentGroups()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new ConcreteComposite([
            'constraints' => [
                new NotNull(['groups' => ['Default', 'Foobar']]),
            ],
            'groups' => ['Default', 'Strict'],
        ]);
    }

    public function testImplicitGroupNamesAreForwarded()
    {
        \$constraint = new ConcreteComposite([
            new NotNull(['groups' => 'Default']),
            new NotBlank(['groups' => 'Strict']),
        ]);

        \$constraint->addImplicitGroupName('ImplicitGroup');

        \$this->assertEquals(['Default', 'Strict', 'ImplicitGroup'], \$constraint->groups);
        \$this->assertEquals(['Default', 'ImplicitGroup'], \$constraint->constraints[0]->groups);
        \$this->assertEquals(['Strict'], \$constraint->constraints[1]->groups);
    }

    public function testSingleConstraintsAccepted()
    {
        \$nestedConstraint = new NotNull();
        \$constraint = new ConcreteComposite(\$nestedConstraint);

        \$this->assertEquals([\$nestedConstraint], \$constraint->constraints);
    }

    public function testFailIfNoConstraint()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new ConcreteComposite([
            new NotNull(['groups' => 'Default']),
            'NotBlank',
        ]);
    }

    public function testFailIfNoConstraintObject()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new ConcreteComposite([
            new NotNull(['groups' => 'Default']),
            new \\ArrayObject(),
        ]);
    }

    public function testValidCantBeNested()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new ConcreteComposite([
            new Valid(),
        ]);
    }
}
", "vendor/symfony/validator/Tests/Constraints/CompositeTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/CompositeTest.php");
    }
}
