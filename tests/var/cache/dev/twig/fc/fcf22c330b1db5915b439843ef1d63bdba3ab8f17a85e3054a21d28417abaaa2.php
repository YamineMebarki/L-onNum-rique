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

/* vendor/symfony/console/Tests/Descriptor/TextDescriptorTest.php */
class __TwigTemplate_5dac4402c82b6b3b157768af132c8b8f8550d3c8eddb1bd49920f3a5dc214f9b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Descriptor/TextDescriptorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Descriptor/TextDescriptorTest.php"));

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

namespace Symfony\\Component\\Console\\Tests\\Descriptor;

use Symfony\\Component\\Console\\Descriptor\\TextDescriptor;
use Symfony\\Component\\Console\\Tests\\Fixtures\\DescriptorApplication2;
use Symfony\\Component\\Console\\Tests\\Fixtures\\DescriptorApplicationMbString;
use Symfony\\Component\\Console\\Tests\\Fixtures\\DescriptorCommandMbString;

class TextDescriptorTest extends AbstractDescriptorTest
{
    public function getDescribeCommandTestData()
    {
        return \$this->getDescriptionTestData(array_merge(
            ObjectsProvider::getCommands(),
            ['command_mbstring' => new DescriptorCommandMbString()]
        ));
    }

    public function getDescribeApplicationTestData()
    {
        return \$this->getDescriptionTestData(array_merge(
            ObjectsProvider::getApplications(),
            ['application_mbstring' => new DescriptorApplicationMbString()]
        ));
    }

    public function testDescribeApplicationWithFilteredNamespace()
    {
        \$application = new DescriptorApplication2();

        \$this->assertDescription(file_get_contents(__DIR__.'/../Fixtures/application_filtered_namespace.txt'), \$application, ['namespace' => 'command4']);
    }

    protected function getDescriptor()
    {
        return new TextDescriptor();
    }

    protected function getFormat()
    {
        return 'txt';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Descriptor/TextDescriptorTest.php";
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

namespace Symfony\\Component\\Console\\Tests\\Descriptor;

use Symfony\\Component\\Console\\Descriptor\\TextDescriptor;
use Symfony\\Component\\Console\\Tests\\Fixtures\\DescriptorApplication2;
use Symfony\\Component\\Console\\Tests\\Fixtures\\DescriptorApplicationMbString;
use Symfony\\Component\\Console\\Tests\\Fixtures\\DescriptorCommandMbString;

class TextDescriptorTest extends AbstractDescriptorTest
{
    public function getDescribeCommandTestData()
    {
        return \$this->getDescriptionTestData(array_merge(
            ObjectsProvider::getCommands(),
            ['command_mbstring' => new DescriptorCommandMbString()]
        ));
    }

    public function getDescribeApplicationTestData()
    {
        return \$this->getDescriptionTestData(array_merge(
            ObjectsProvider::getApplications(),
            ['application_mbstring' => new DescriptorApplicationMbString()]
        ));
    }

    public function testDescribeApplicationWithFilteredNamespace()
    {
        \$application = new DescriptorApplication2();

        \$this->assertDescription(file_get_contents(__DIR__.'/../Fixtures/application_filtered_namespace.txt'), \$application, ['namespace' => 'command4']);
    }

    protected function getDescriptor()
    {
        return new TextDescriptor();
    }

    protected function getFormat()
    {
        return 'txt';
    }
}
", "vendor/symfony/console/Tests/Descriptor/TextDescriptorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Descriptor/TextDescriptorTest.php");
    }
}
