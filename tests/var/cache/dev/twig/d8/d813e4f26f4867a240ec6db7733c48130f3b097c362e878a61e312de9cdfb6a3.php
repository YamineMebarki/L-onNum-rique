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

/* vendor/symfony/validator/Tests/Constraints/CollectionTest.php */
class __TwigTemplate_1856519d685a66b407cc6df9b5884c78a37cf516adfa80cf0253e74fb416ffad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/CollectionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/CollectionTest.php"));

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
use Symfony\\Component\\Validator\\Constraints\\Collection;
use Symfony\\Component\\Validator\\Constraints\\Email;
use Symfony\\Component\\Validator\\Constraints\\Optional;
use Symfony\\Component\\Validator\\Constraints\\Required;
use Symfony\\Component\\Validator\\Constraints\\Valid;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CollectionTest extends TestCase
{
    public function testRejectInvalidFieldsOption()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new Collection([
            'fields' => 'foo',
        ]);
    }

    public function testRejectNonConstraints()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new Collection([
            'foo' => 'bar',
        ]);
    }

    public function testRejectValidConstraint()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new Collection([
            'foo' => new Valid(),
        ]);
    }

    public function testRejectValidConstraintWithinOptional()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new Collection([
            'foo' => new Optional(new Valid()),
        ]);
    }

    public function testRejectValidConstraintWithinRequired()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new Collection([
            'foo' => new Required(new Valid()),
        ]);
    }

    public function testAcceptOptionalConstraintAsOneElementArray()
    {
        \$collection1 = new Collection([
            'fields' => [
                'alternate_email' => [
                    new Optional(new Email()),
                ],
            ],
        ]);

        \$collection2 = new Collection([
            'fields' => [
                'alternate_email' => new Optional(new Email()),
            ],
        ]);

        \$this->assertEquals(\$collection1, \$collection2);
    }

    public function testAcceptRequiredConstraintAsOneElementArray()
    {
        \$collection1 = new Collection([
            'fields' => [
                'alternate_email' => [
                    new Required(new Email()),
                ],
            ],
        ]);

        \$collection2 = new Collection([
            'fields' => [
                'alternate_email' => new Required(new Email()),
            ],
        ]);

        \$this->assertEquals(\$collection1, \$collection2);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/CollectionTest.php";
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
use Symfony\\Component\\Validator\\Constraints\\Collection;
use Symfony\\Component\\Validator\\Constraints\\Email;
use Symfony\\Component\\Validator\\Constraints\\Optional;
use Symfony\\Component\\Validator\\Constraints\\Required;
use Symfony\\Component\\Validator\\Constraints\\Valid;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CollectionTest extends TestCase
{
    public function testRejectInvalidFieldsOption()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new Collection([
            'fields' => 'foo',
        ]);
    }

    public function testRejectNonConstraints()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new Collection([
            'foo' => 'bar',
        ]);
    }

    public function testRejectValidConstraint()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new Collection([
            'foo' => new Valid(),
        ]);
    }

    public function testRejectValidConstraintWithinOptional()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new Collection([
            'foo' => new Optional(new Valid()),
        ]);
    }

    public function testRejectValidConstraintWithinRequired()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException');
        new Collection([
            'foo' => new Required(new Valid()),
        ]);
    }

    public function testAcceptOptionalConstraintAsOneElementArray()
    {
        \$collection1 = new Collection([
            'fields' => [
                'alternate_email' => [
                    new Optional(new Email()),
                ],
            ],
        ]);

        \$collection2 = new Collection([
            'fields' => [
                'alternate_email' => new Optional(new Email()),
            ],
        ]);

        \$this->assertEquals(\$collection1, \$collection2);
    }

    public function testAcceptRequiredConstraintAsOneElementArray()
    {
        \$collection1 = new Collection([
            'fields' => [
                'alternate_email' => [
                    new Required(new Email()),
                ],
            ],
        ]);

        \$collection2 = new Collection([
            'fields' => [
                'alternate_email' => new Required(new Email()),
            ],
        ]);

        \$this->assertEquals(\$collection1, \$collection2);
    }
}
", "vendor/symfony/validator/Tests/Constraints/CollectionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/CollectionTest.php");
    }
}
