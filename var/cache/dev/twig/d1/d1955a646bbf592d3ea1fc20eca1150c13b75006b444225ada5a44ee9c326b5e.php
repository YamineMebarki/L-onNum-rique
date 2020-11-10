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

/* vendor/symfony/asset/Tests/VersionStrategy/JsonManifestVersionStrategyTest.php */
class __TwigTemplate_931fe45bac4844d2b3c9807347c39a83fd615b8e905e63c2b623fe2e096d9821 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/Tests/VersionStrategy/JsonManifestVersionStrategyTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/asset/Tests/VersionStrategy/JsonManifestVersionStrategyTest.php"));

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

namespace Symfony\\Component\\Asset\\Tests\\VersionStrategy;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Asset\\VersionStrategy\\JsonManifestVersionStrategy;

class JsonManifestVersionStrategyTest extends TestCase
{
    public function testGetVersion()
    {
        \$strategy = \$this->createStrategy('manifest-valid.json');

        \$this->assertEquals('main.123abc.js', \$strategy->getVersion('main.js'));
    }

    public function testApplyVersion()
    {
        \$strategy = \$this->createStrategy('manifest-valid.json');

        \$this->assertEquals('css/styles.555def.css', \$strategy->getVersion('css/styles.css'));
    }

    public function testApplyVersionWhenKeyDoesNotExistInManifest()
    {
        \$strategy = \$this->createStrategy('manifest-valid.json');

        \$this->assertEquals('css/other.css', \$strategy->getVersion('css/other.css'));
    }

    public function testMissingManifestFileThrowsException()
    {
        \$this->expectException('RuntimeException');
        \$strategy = \$this->createStrategy('non-existent-file.json');
        \$strategy->getVersion('main.js');
    }

    public function testManifestFileWithBadJSONThrowsException()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('Error parsing JSON');
        \$strategy = \$this->createStrategy('manifest-invalid.json');
        \$strategy->getVersion('main.js');
    }

    private function createStrategy(\$manifestFilename)
    {
        return new JsonManifestVersionStrategy(__DIR__.'/../fixtures/'.\$manifestFilename);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/asset/Tests/VersionStrategy/JsonManifestVersionStrategyTest.php";
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

namespace Symfony\\Component\\Asset\\Tests\\VersionStrategy;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Asset\\VersionStrategy\\JsonManifestVersionStrategy;

class JsonManifestVersionStrategyTest extends TestCase
{
    public function testGetVersion()
    {
        \$strategy = \$this->createStrategy('manifest-valid.json');

        \$this->assertEquals('main.123abc.js', \$strategy->getVersion('main.js'));
    }

    public function testApplyVersion()
    {
        \$strategy = \$this->createStrategy('manifest-valid.json');

        \$this->assertEquals('css/styles.555def.css', \$strategy->getVersion('css/styles.css'));
    }

    public function testApplyVersionWhenKeyDoesNotExistInManifest()
    {
        \$strategy = \$this->createStrategy('manifest-valid.json');

        \$this->assertEquals('css/other.css', \$strategy->getVersion('css/other.css'));
    }

    public function testMissingManifestFileThrowsException()
    {
        \$this->expectException('RuntimeException');
        \$strategy = \$this->createStrategy('non-existent-file.json');
        \$strategy->getVersion('main.js');
    }

    public function testManifestFileWithBadJSONThrowsException()
    {
        \$this->expectException('RuntimeException');
        \$this->expectExceptionMessage('Error parsing JSON');
        \$strategy = \$this->createStrategy('manifest-invalid.json');
        \$strategy->getVersion('main.js');
    }

    private function createStrategy(\$manifestFilename)
    {
        return new JsonManifestVersionStrategy(__DIR__.'/../fixtures/'.\$manifestFilename);
    }
}
", "vendor/symfony/asset/Tests/VersionStrategy/JsonManifestVersionStrategyTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/asset/Tests/VersionStrategy/JsonManifestVersionStrategyTest.php");
    }
}
