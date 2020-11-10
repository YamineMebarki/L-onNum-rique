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

/* vendor/symfony/form/Tests/Extension/Core/DataTransformer/BaseDateTimeTransformerTest.php */
class __TwigTemplate_a61e76da3156ad78b3fcb0422691310359c3ce2fad761fbf69a98d145e9d10ca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/BaseDateTimeTransformerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/BaseDateTimeTransformerTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\DataTransformer;

use PHPUnit\\Framework\\TestCase;

class BaseDateTimeTransformerTest extends TestCase
{
    public function testConstructFailsIfInputTimezoneIsInvalid()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('this_timezone_does_not_exist');
        \$this->getMockBuilder('Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\BaseDateTimeTransformer')->setConstructorArgs(['this_timezone_does_not_exist'])->getMock();
    }

    public function testConstructFailsIfOutputTimezoneIsInvalid()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('that_timezone_does_not_exist');
        \$this->getMockBuilder('Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\BaseDateTimeTransformer')->setConstructorArgs([null, 'that_timezone_does_not_exist'])->getMock();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/DataTransformer/BaseDateTimeTransformerTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\DataTransformer;

use PHPUnit\\Framework\\TestCase;

class BaseDateTimeTransformerTest extends TestCase
{
    public function testConstructFailsIfInputTimezoneIsInvalid()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('this_timezone_does_not_exist');
        \$this->getMockBuilder('Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\BaseDateTimeTransformer')->setConstructorArgs(['this_timezone_does_not_exist'])->getMock();
    }

    public function testConstructFailsIfOutputTimezoneIsInvalid()
    {
        \$this->expectException('Symfony\\Component\\Form\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('that_timezone_does_not_exist');
        \$this->getMockBuilder('Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\BaseDateTimeTransformer')->setConstructorArgs([null, 'that_timezone_does_not_exist'])->getMock();
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/BaseDateTimeTransformerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataTransformer/BaseDateTimeTransformerTest.php");
    }
}
