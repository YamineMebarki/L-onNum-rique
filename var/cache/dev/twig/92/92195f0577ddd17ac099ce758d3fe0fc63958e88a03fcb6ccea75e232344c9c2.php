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

/* vendor/symfony/form/Tests/ButtonTest.php */
class __TwigTemplate_770e6c5ffaaf972a4e3280fb30aa9fac09e006353f21e540ee45d0c57ccca2cd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/ButtonTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/ButtonTest.php"));

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

namespace Symfony\\Component\\Form\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\ButtonBuilder;
use Symfony\\Component\\Form\\FormBuilder;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ButtonTest extends TestCase
{
    private \$dispatcher;

    private \$factory;

    protected function setUp(): void
    {
        \$this->dispatcher = \$this->getMockBuilder('Symfony\\Component\\EventDispatcher\\EventDispatcherInterface')->getMock();
        \$this->factory = \$this->getMockBuilder('Symfony\\Component\\Form\\FormFactoryInterface')->getMock();
    }

    public function testSetParentOnSubmittedButton()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\AlreadySubmittedException');
        \$button = \$this->getButtonBuilder('button')
            ->getForm()
        ;

        \$button->submit('');

        \$button->setParent(\$this->getFormBuilder()->getForm());
    }

    /**
     * @dataProvider getDisabledStates
     */
    public function testDisabledIfParentIsDisabled(\$parentDisabled, \$buttonDisabled, \$result)
    {
        \$form = \$this->getFormBuilder()
            ->setDisabled(\$parentDisabled)
            ->getForm()
        ;

        \$button = \$this->getButtonBuilder('button')
            ->setDisabled(\$buttonDisabled)
            ->getForm()
        ;

        \$button->setParent(\$form);

        \$this->assertSame(\$result, \$button->isDisabled());
    }

    public function getDisabledStates()
    {
        return [
            // parent, button, result
            [true, true, true],
            [true, false, true],
            [false, true, true],
            [false, false, false],
        ];
    }

    private function getButtonBuilder(\$name)
    {
        return new ButtonBuilder(\$name);
    }

    private function getFormBuilder()
    {
        return new FormBuilder('form', null, \$this->dispatcher, \$this->factory);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/ButtonTest.php";
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

namespace Symfony\\Component\\Form\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\ButtonBuilder;
use Symfony\\Component\\Form\\FormBuilder;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ButtonTest extends TestCase
{
    private \$dispatcher;

    private \$factory;

    protected function setUp(): void
    {
        \$this->dispatcher = \$this->getMockBuilder('Symfony\\Component\\EventDispatcher\\EventDispatcherInterface')->getMock();
        \$this->factory = \$this->getMockBuilder('Symfony\\Component\\Form\\FormFactoryInterface')->getMock();
    }

    public function testSetParentOnSubmittedButton()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\AlreadySubmittedException');
        \$button = \$this->getButtonBuilder('button')
            ->getForm()
        ;

        \$button->submit('');

        \$button->setParent(\$this->getFormBuilder()->getForm());
    }

    /**
     * @dataProvider getDisabledStates
     */
    public function testDisabledIfParentIsDisabled(\$parentDisabled, \$buttonDisabled, \$result)
    {
        \$form = \$this->getFormBuilder()
            ->setDisabled(\$parentDisabled)
            ->getForm()
        ;

        \$button = \$this->getButtonBuilder('button')
            ->setDisabled(\$buttonDisabled)
            ->getForm()
        ;

        \$button->setParent(\$form);

        \$this->assertSame(\$result, \$button->isDisabled());
    }

    public function getDisabledStates()
    {
        return [
            // parent, button, result
            [true, true, true],
            [true, false, true],
            [false, true, true],
            [false, false, false],
        ];
    }

    private function getButtonBuilder(\$name)
    {
        return new ButtonBuilder(\$name);
    }

    private function getFormBuilder()
    {
        return new FormBuilder('form', null, \$this->dispatcher, \$this->factory);
    }
}
", "vendor/symfony/form/Tests/ButtonTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/ButtonTest.php");
    }
}
