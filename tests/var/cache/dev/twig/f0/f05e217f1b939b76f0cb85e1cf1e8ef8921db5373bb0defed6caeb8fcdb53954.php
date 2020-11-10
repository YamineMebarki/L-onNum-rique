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

/* vendor/symfony/form/Tests/Extension/Validator/Type/BaseValidatorExtensionTest.php */
class __TwigTemplate_5e8e059fe48009645a3affc2354ab9d254f0a14e7274fd994e695b1a96f61071 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Validator/Type/BaseValidatorExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Validator/Type/BaseValidatorExtensionTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Validator\\Type;

use Symfony\\Component\\Form\\Test\\FormInterface;
use Symfony\\Component\\Form\\Test\\TypeTestCase;
use Symfony\\Component\\Validator\\Constraints\\GroupSequence;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class BaseValidatorExtensionTest extends TypeTestCase
{
    public function testValidationGroupNullByDefault()
    {
        \$form = \$this->createForm();

        \$this->assertNull(\$form->getConfig()->getOption('validation_groups'));
    }

    public function testValidationGroupsTransformedToArray()
    {
        \$form = \$this->createForm([
            'validation_groups' => 'group',
        ]);

        \$this->assertEquals(['group'], \$form->getConfig()->getOption('validation_groups'));
    }

    public function testValidationGroupsCanBeSetToArray()
    {
        \$form = \$this->createForm([
            'validation_groups' => ['group1', 'group2'],
        ]);

        \$this->assertEquals(['group1', 'group2'], \$form->getConfig()->getOption('validation_groups'));
    }

    public function testValidationGroupsCanBeSetToFalse()
    {
        \$form = \$this->createForm([
            'validation_groups' => false,
        ]);

        \$this->assertEquals([], \$form->getConfig()->getOption('validation_groups'));
    }

    public function testValidationGroupsCanBeSetToCallback()
    {
        \$form = \$this->createForm([
            'validation_groups' => [\$this, 'testValidationGroupsCanBeSetToCallback'],
        ]);

        \$this->assertIsCallable(\$form->getConfig()->getOption('validation_groups'));
    }

    public function testValidationGroupsCanBeSetToClosure()
    {
        \$form = \$this->createForm([
            'validation_groups' => function (FormInterface \$form) { },
        ]);

        \$this->assertIsCallable(\$form->getConfig()->getOption('validation_groups'));
    }

    public function testValidationGroupsCanBeSetToGroupSequence()
    {
        \$form = \$this->createForm([
            'validation_groups' => new GroupSequence(['group1', 'group2']),
        ]);

        \$this->assertInstanceOf('Symfony\\Component\\Validator\\Constraints\\GroupSequence', \$form->getConfig()->getOption('validation_groups'));
    }

    abstract protected function createForm(array \$options = []);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Validator/Type/BaseValidatorExtensionTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Validator\\Type;

use Symfony\\Component\\Form\\Test\\FormInterface;
use Symfony\\Component\\Form\\Test\\TypeTestCase;
use Symfony\\Component\\Validator\\Constraints\\GroupSequence;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class BaseValidatorExtensionTest extends TypeTestCase
{
    public function testValidationGroupNullByDefault()
    {
        \$form = \$this->createForm();

        \$this->assertNull(\$form->getConfig()->getOption('validation_groups'));
    }

    public function testValidationGroupsTransformedToArray()
    {
        \$form = \$this->createForm([
            'validation_groups' => 'group',
        ]);

        \$this->assertEquals(['group'], \$form->getConfig()->getOption('validation_groups'));
    }

    public function testValidationGroupsCanBeSetToArray()
    {
        \$form = \$this->createForm([
            'validation_groups' => ['group1', 'group2'],
        ]);

        \$this->assertEquals(['group1', 'group2'], \$form->getConfig()->getOption('validation_groups'));
    }

    public function testValidationGroupsCanBeSetToFalse()
    {
        \$form = \$this->createForm([
            'validation_groups' => false,
        ]);

        \$this->assertEquals([], \$form->getConfig()->getOption('validation_groups'));
    }

    public function testValidationGroupsCanBeSetToCallback()
    {
        \$form = \$this->createForm([
            'validation_groups' => [\$this, 'testValidationGroupsCanBeSetToCallback'],
        ]);

        \$this->assertIsCallable(\$form->getConfig()->getOption('validation_groups'));
    }

    public function testValidationGroupsCanBeSetToClosure()
    {
        \$form = \$this->createForm([
            'validation_groups' => function (FormInterface \$form) { },
        ]);

        \$this->assertIsCallable(\$form->getConfig()->getOption('validation_groups'));
    }

    public function testValidationGroupsCanBeSetToGroupSequence()
    {
        \$form = \$this->createForm([
            'validation_groups' => new GroupSequence(['group1', 'group2']),
        ]);

        \$this->assertInstanceOf('Symfony\\Component\\Validator\\Constraints\\GroupSequence', \$form->getConfig()->getOption('validation_groups'));
    }

    abstract protected function createForm(array \$options = []);
}
", "vendor/symfony/form/Tests/Extension/Validator/Type/BaseValidatorExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Validator/Type/BaseValidatorExtensionTest.php");
    }
}
