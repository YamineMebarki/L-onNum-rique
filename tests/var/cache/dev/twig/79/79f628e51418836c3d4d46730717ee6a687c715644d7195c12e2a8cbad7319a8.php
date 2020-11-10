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

/* vendor/symfony/form/Test/TypeTestCase.php */
class __TwigTemplate_1a00932a79c6037d1d05de10efb7cc80c5994f8c76998b50d98889ae0de43fdd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Test/TypeTestCase.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Test/TypeTestCase.php"));

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

namespace Symfony\\Component\\Form\\Test;

use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormBuilder;
use Symfony\\Component\\Form\\Test\\Traits\\ValidatorExtensionTrait;

abstract class TypeTestCase extends FormIntegrationTestCase
{
    use ForwardCompatTestTrait;

    /**
     * @var FormBuilder
     */
    protected \$builder;

    /**
     * @var EventDispatcherInterface
     */
    protected \$dispatcher;

    private function doSetUp()
    {
        parent::setUp();

        \$this->dispatcher = \$this->getMockBuilder(EventDispatcherInterface::class)->getMock();
        \$this->builder = new FormBuilder('', null, \$this->dispatcher, \$this->factory);
    }

    private function doTearDown()
    {
        if (\\in_array(ValidatorExtensionTrait::class, class_uses(\$this))) {
            \$this->validator = null;
        }
    }

    protected function getExtensions()
    {
        \$extensions = [];

        if (\\in_array(ValidatorExtensionTrait::class, class_uses(\$this))) {
            \$extensions[] = \$this->getValidatorExtension();
        }

        return \$extensions;
    }

    public static function assertDateTimeEquals(\\DateTime \$expected, \\DateTime \$actual)
    {
        self::assertEquals(\$expected->format('c'), \$actual->format('c'));
    }

    public static function assertDateIntervalEquals(\\DateInterval \$expected, \\DateInterval \$actual)
    {
        self::assertEquals(\$expected->format('%RP%yY%mM%dDT%hH%iM%sS'), \$actual->format('%RP%yY%mM%dDT%hH%iM%sS'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Test/TypeTestCase.php";
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

namespace Symfony\\Component\\Form\\Test;

use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormBuilder;
use Symfony\\Component\\Form\\Test\\Traits\\ValidatorExtensionTrait;

abstract class TypeTestCase extends FormIntegrationTestCase
{
    use ForwardCompatTestTrait;

    /**
     * @var FormBuilder
     */
    protected \$builder;

    /**
     * @var EventDispatcherInterface
     */
    protected \$dispatcher;

    private function doSetUp()
    {
        parent::setUp();

        \$this->dispatcher = \$this->getMockBuilder(EventDispatcherInterface::class)->getMock();
        \$this->builder = new FormBuilder('', null, \$this->dispatcher, \$this->factory);
    }

    private function doTearDown()
    {
        if (\\in_array(ValidatorExtensionTrait::class, class_uses(\$this))) {
            \$this->validator = null;
        }
    }

    protected function getExtensions()
    {
        \$extensions = [];

        if (\\in_array(ValidatorExtensionTrait::class, class_uses(\$this))) {
            \$extensions[] = \$this->getValidatorExtension();
        }

        return \$extensions;
    }

    public static function assertDateTimeEquals(\\DateTime \$expected, \\DateTime \$actual)
    {
        self::assertEquals(\$expected->format('c'), \$actual->format('c'));
    }

    public static function assertDateIntervalEquals(\\DateInterval \$expected, \\DateInterval \$actual)
    {
        self::assertEquals(\$expected->format('%RP%yY%mM%dDT%hH%iM%sS'), \$actual->format('%RP%yY%mM%dDT%hH%iM%sS'));
    }
}
", "vendor/symfony/form/Test/TypeTestCase.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Test/TypeTestCase.php");
    }
}
