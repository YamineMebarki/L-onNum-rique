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

/* vendor/symfony/form/Tests/Extension/DataCollector/Type/DataCollectorTypeExtensionTest.php */
class __TwigTemplate_c91f25bca2ba37c5234ecb18557c136e4647ae7e54b07a34b98c89d5a9c9456d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/DataCollector/Type/DataCollectorTypeExtensionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/DataCollector/Type/DataCollectorTypeExtensionTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\DataCollector\\Type;

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension;

class DataCollectorTypeExtensionTest extends TestCase
{
    /**
     * @var DataCollectorTypeExtension
     */
    private \$extension;

    /**
     * @var MockObject
     */
    private \$dataCollector;

    protected function setUp(): void
    {
        \$this->dataCollector = \$this->getMockBuilder('Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataCollectorInterface')->getMock();
        \$this->extension = new DataCollectorTypeExtension(\$this->dataCollector);
    }

    /**
     * @group legacy
     */
    public function testGetExtendedType()
    {
        \$this->assertEquals('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', \$this->extension->getExtendedType());
    }

    public function testBuildForm()
    {
        \$builder = \$this->getMockBuilder('Symfony\\Component\\Form\\Test\\FormBuilderInterface')->getMock();
        \$builder->expects(\$this->atLeastOnce())
            ->method('addEventSubscriber')
            ->with(\$this->isInstanceOf('Symfony\\Component\\Form\\Extension\\DataCollector\\EventListener\\DataCollectorListener'));

        \$this->extension->buildForm(\$builder, []);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/DataCollector/Type/DataCollectorTypeExtensionTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\DataCollector\\Type;

use PHPUnit\\Framework\\MockObject\\MockObject;
use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension;

class DataCollectorTypeExtensionTest extends TestCase
{
    /**
     * @var DataCollectorTypeExtension
     */
    private \$extension;

    /**
     * @var MockObject
     */
    private \$dataCollector;

    protected function setUp(): void
    {
        \$this->dataCollector = \$this->getMockBuilder('Symfony\\Component\\Form\\Extension\\DataCollector\\FormDataCollectorInterface')->getMock();
        \$this->extension = new DataCollectorTypeExtension(\$this->dataCollector);
    }

    /**
     * @group legacy
     */
    public function testGetExtendedType()
    {
        \$this->assertEquals('Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', \$this->extension->getExtendedType());
    }

    public function testBuildForm()
    {
        \$builder = \$this->getMockBuilder('Symfony\\Component\\Form\\Test\\FormBuilderInterface')->getMock();
        \$builder->expects(\$this->atLeastOnce())
            ->method('addEventSubscriber')
            ->with(\$this->isInstanceOf('Symfony\\Component\\Form\\Extension\\DataCollector\\EventListener\\DataCollectorListener'));

        \$this->extension->buildForm(\$builder, []);
    }
}
", "vendor/symfony/form/Tests/Extension/DataCollector/Type/DataCollectorTypeExtensionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/DataCollector/Type/DataCollectorTypeExtensionTest.php");
    }
}
