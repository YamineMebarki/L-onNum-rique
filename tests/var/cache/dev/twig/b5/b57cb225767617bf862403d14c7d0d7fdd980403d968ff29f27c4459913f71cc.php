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

/* vendor/symfony/translation/Tests/Dumper/JsonFileDumperTest.php */
class __TwigTemplate_4161ed5603e2907b614b4130dcf9bfaf28a13ae43dec1669e7218ea81a6e9d62 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Dumper/JsonFileDumperTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Tests/Dumper/JsonFileDumperTest.php"));

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
use Symfony\\Component\\Translation\\Dumper\\JsonFileDumper;
use Symfony\\Component\\Translation\\MessageCatalogue;

class JsonFileDumperTest extends TestCase
{
    public function testFormatCatalogue()
    {
        \$catalogue = new MessageCatalogue('en');
        \$catalogue->add(['foo' => 'bar']);

        \$dumper = new JsonFileDumper();

        \$this->assertStringEqualsFile(__DIR__.'/../fixtures/resources.json', \$dumper->formatCatalogue(\$catalogue, 'messages'));
    }

    public function testDumpWithCustomEncoding()
    {
        \$catalogue = new MessageCatalogue('en');
        \$catalogue->add(['foo' => '\"bar\"']);

        \$dumper = new JsonFileDumper();

        \$this->assertStringEqualsFile(__DIR__.'/../fixtures/resources.dump.json', \$dumper->formatCatalogue(\$catalogue, 'messages', ['json_encoding' => JSON_HEX_QUOT]));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Tests/Dumper/JsonFileDumperTest.php";
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
use Symfony\\Component\\Translation\\Dumper\\JsonFileDumper;
use Symfony\\Component\\Translation\\MessageCatalogue;

class JsonFileDumperTest extends TestCase
{
    public function testFormatCatalogue()
    {
        \$catalogue = new MessageCatalogue('en');
        \$catalogue->add(['foo' => 'bar']);

        \$dumper = new JsonFileDumper();

        \$this->assertStringEqualsFile(__DIR__.'/../fixtures/resources.json', \$dumper->formatCatalogue(\$catalogue, 'messages'));
    }

    public function testDumpWithCustomEncoding()
    {
        \$catalogue = new MessageCatalogue('en');
        \$catalogue->add(['foo' => '\"bar\"']);

        \$dumper = new JsonFileDumper();

        \$this->assertStringEqualsFile(__DIR__.'/../fixtures/resources.dump.json', \$dumper->formatCatalogue(\$catalogue, 'messages', ['json_encoding' => JSON_HEX_QUOT]));
    }
}
", "vendor/symfony/translation/Tests/Dumper/JsonFileDumperTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Tests/Dumper/JsonFileDumperTest.php");
    }
}
