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

/* vendor/symfony/form/Tests/AbstractFormTest.php */
class __TwigTemplate_b720b4f3c1412a7f15c93692a927be31ccd1b2f1d6f164f0cc5122e2e0b40d72 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/AbstractFormTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/AbstractFormTest.php"));

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

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormBuilder;

abstract class AbstractFormTest extends TestCase
{
    /**
     * @var EventDispatcherInterface
     */
    protected \$dispatcher;

    /**
     * @var \\Symfony\\Component\\Form\\FormFactoryInterface
     */
    protected \$factory;

    /**
     * @var \\Symfony\\Component\\Form\\FormInterface
     */
    protected \$form;

    protected function setUp(): void
    {
        \$this->dispatcher = new EventDispatcher();
        \$this->factory = \$this->getMockBuilder('Symfony\\Component\\Form\\FormFactoryInterface')->getMock();
        \$this->form = \$this->createForm();
    }

    protected function tearDown(): void
    {
        \$this->dispatcher = null;
        \$this->factory = null;
        \$this->form = null;
    }

    /**
     * @return \\Symfony\\Component\\Form\\FormInterface
     */
    abstract protected function createForm();

    /**
     * @param string                   \$name
     * @param EventDispatcherInterface \$dispatcher
     * @param string|null              \$dataClass
     *
     * @return FormBuilder
     */
    protected function getBuilder(\$name = 'name', EventDispatcherInterface \$dispatcher = null, \$dataClass = null, array \$options = [])
    {
        return new FormBuilder(\$name, \$dataClass, \$dispatcher ?: \$this->dispatcher, \$this->factory, \$options);
    }

    /**
     * @return MockObject
     */
    protected function getDataMapper()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Form\\DataMapperInterface')->getMock();
    }

    /**
     * @return MockObject
     */
    protected function getDataTransformer()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Form\\DataTransformerInterface')->getMock();
    }

    /**
     * @return MockObject
     */
    protected function getFormValidator()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Form\\FormValidatorInterface')->getMock();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/AbstractFormTest.php";
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

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\EventDispatcher\\EventDispatcher;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormBuilder;

abstract class AbstractFormTest extends TestCase
{
    /**
     * @var EventDispatcherInterface
     */
    protected \$dispatcher;

    /**
     * @var \\Symfony\\Component\\Form\\FormFactoryInterface
     */
    protected \$factory;

    /**
     * @var \\Symfony\\Component\\Form\\FormInterface
     */
    protected \$form;

    protected function setUp(): void
    {
        \$this->dispatcher = new EventDispatcher();
        \$this->factory = \$this->getMockBuilder('Symfony\\Component\\Form\\FormFactoryInterface')->getMock();
        \$this->form = \$this->createForm();
    }

    protected function tearDown(): void
    {
        \$this->dispatcher = null;
        \$this->factory = null;
        \$this->form = null;
    }

    /**
     * @return \\Symfony\\Component\\Form\\FormInterface
     */
    abstract protected function createForm();

    /**
     * @param string                   \$name
     * @param EventDispatcherInterface \$dispatcher
     * @param string|null              \$dataClass
     *
     * @return FormBuilder
     */
    protected function getBuilder(\$name = 'name', EventDispatcherInterface \$dispatcher = null, \$dataClass = null, array \$options = [])
    {
        return new FormBuilder(\$name, \$dataClass, \$dispatcher ?: \$this->dispatcher, \$this->factory, \$options);
    }

    /**
     * @return MockObject
     */
    protected function getDataMapper()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Form\\DataMapperInterface')->getMock();
    }

    /**
     * @return MockObject
     */
    protected function getDataTransformer()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Form\\DataTransformerInterface')->getMock();
    }

    /**
     * @return MockObject
     */
    protected function getFormValidator()
    {
        return \$this->getMockBuilder('Symfony\\Component\\Form\\FormValidatorInterface')->getMock();
    }
}
", "vendor/symfony/form/Tests/AbstractFormTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/AbstractFormTest.php");
    }
}
