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

/* vendor/symfony/console/Tests/Helper/AbstractQuestionHelperTest.php */
class __TwigTemplate_b297be6d9fc69e6c3370638052bd7182dfbf1ff098dbe5a835f1f1a695747816 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Helper/AbstractQuestionHelperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Helper/AbstractQuestionHelperTest.php"));

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

namespace Symfony\\Component\\Console\\Tests\\Helper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Input\\StreamableInputInterface;

abstract class AbstractQuestionHelperTest extends TestCase
{
    protected function createStreamableInputInterfaceMock(\$stream = null, \$interactive = true)
    {
        \$mock = \$this->getMockBuilder(StreamableInputInterface::class)->getMock();
        \$mock->expects(\$this->any())
            ->method('isInteractive')
            ->willReturn(\$interactive);

        if (\$stream) {
            \$mock->expects(\$this->any())
                ->method('getStream')
                ->willReturn(\$stream);
        }

        return \$mock;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Helper/AbstractQuestionHelperTest.php";
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

namespace Symfony\\Component\\Console\\Tests\\Helper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Console\\Input\\StreamableInputInterface;

abstract class AbstractQuestionHelperTest extends TestCase
{
    protected function createStreamableInputInterfaceMock(\$stream = null, \$interactive = true)
    {
        \$mock = \$this->getMockBuilder(StreamableInputInterface::class)->getMock();
        \$mock->expects(\$this->any())
            ->method('isInteractive')
            ->willReturn(\$interactive);

        if (\$stream) {
            \$mock->expects(\$this->any())
                ->method('getStream')
                ->willReturn(\$stream);
        }

        return \$mock;
    }
}
", "vendor/symfony/console/Tests/Helper/AbstractQuestionHelperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Helper/AbstractQuestionHelperTest.php");
    }
}
