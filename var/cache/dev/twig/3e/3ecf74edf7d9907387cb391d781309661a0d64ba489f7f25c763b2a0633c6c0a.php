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

/* vendor/symfony/translation/Tests/Dumper/YamlFileDumperTest.php */
class __TwigTemplate_efb8f20213440aa9aedf1703041b153ec6fc12697753e0d70299e692293b9349 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Dumper/YamlFileDumperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Dumper/YamlFileDumperTest.php"));

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

namespace Symfony\\Component\\Translation\\Tests\\Dumper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\Dumper\\YamlFileDumper;
use Symfony\\Component\\Translation\\MessageCatalogue;

class YamlFileDumperTest extends TestCase
{
    public function testTreeFormatCatalogue()
    {
        \$catalogue = new MessageCatalogue('en');
        \$catalogue->add([
            'foo.bar1' => 'value1',
            'foo.bar2' => 'value2',
        ]);

        \$dumper = new YamlFileDumper();

        \$this->assertStringEqualsFile(__DIR__.'/../fixtures/messages.yml', \$dumper->formatCatalogue(\$catalogue, 'messages', ['as_tree' => true, 'inline' => 999]));
    }

    public function testLinearFormatCatalogue()
    {
        \$catalogue = new MessageCatalogue('en');
        \$catalogue->add([
            'foo.bar1' => 'value1',
            'foo.bar2' => 'value2',
        ]);

        \$dumper = new YamlFileDumper();

        \$this->assertStringEqualsFile(__DIR__.'/../fixtures/messages_linear.yml', \$dumper->formatCatalogue(\$catalogue, 'messages'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/Dumper/YamlFileDumperTest.php";
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

namespace Symfony\\Component\\Translation\\Tests\\Dumper;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Translation\\Dumper\\YamlFileDumper;
use Symfony\\Component\\Translation\\MessageCatalogue;

class YamlFileDumperTest extends TestCase
{
    public function testTreeFormatCatalogue()
    {
        \$catalogue = new MessageCatalogue('en');
        \$catalogue->add([
            'foo.bar1' => 'value1',
            'foo.bar2' => 'value2',
        ]);

        \$dumper = new YamlFileDumper();

        \$this->assertStringEqualsFile(__DIR__.'/../fixtures/messages.yml', \$dumper->formatCatalogue(\$catalogue, 'messages', ['as_tree' => true, 'inline' => 999]));
    }

    public function testLinearFormatCatalogue()
    {
        \$catalogue = new MessageCatalogue('en');
        \$catalogue->add([
            'foo.bar1' => 'value1',
            'foo.bar2' => 'value2',
        ]);

        \$dumper = new YamlFileDumper();

        \$this->assertStringEqualsFile(__DIR__.'/../fixtures/messages_linear.yml', \$dumper->formatCatalogue(\$catalogue, 'messages'));
    }
}
", "vendor/symfony/translation/Tests/Dumper/YamlFileDumperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/Dumper/YamlFileDumperTest.php");
    }
}
