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

/* vendor/symfony/web-profiler-bundle/Tests/Resources/IconTest.php */
class __TwigTemplate_f6d6b30ad657ac9771b4738e75b5b0a77028e30bb84ee4b27d71ff88c7276716 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Tests/Resources/IconTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/web-profiler-bundle/Tests/Resources/IconTest.php"));

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

namespace Symfony\\Bundle\\WebProfilerBundle\\Tests\\Resources;

use PHPUnit\\Framework\\TestCase;

class IconTest extends TestCase
{
    /**
     * @dataProvider provideIconFilePaths
     */
    public function testIconFileContents(\$iconFilePath)
    {
        \$this->assertRegExp('~<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"\\d+\" height=\"\\d+\" viewBox=\"0 0 \\d+ \\d+\">.*</svg>~s', file_get_contents(\$iconFilePath), sprintf('The SVG metadata of the %s icon is different than expected (use the same as the other icons).', \$iconFilePath));
    }

    public function provideIconFilePaths()
    {
        return array_map(function (\$filePath) { return (array) \$filePath; }, glob(__DIR__.'/../../Resources/views/Icon/*.svg'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/web-profiler-bundle/Tests/Resources/IconTest.php";
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

namespace Symfony\\Bundle\\WebProfilerBundle\\Tests\\Resources;

use PHPUnit\\Framework\\TestCase;

class IconTest extends TestCase
{
    /**
     * @dataProvider provideIconFilePaths
     */
    public function testIconFileContents(\$iconFilePath)
    {
        \$this->assertRegExp('~<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"\\d+\" height=\"\\d+\" viewBox=\"0 0 \\d+ \\d+\">.*</svg>~s', file_get_contents(\$iconFilePath), sprintf('The SVG metadata of the %s icon is different than expected (use the same as the other icons).', \$iconFilePath));
    }

    public function provideIconFilePaths()
    {
        return array_map(function (\$filePath) { return (array) \$filePath; }, glob(__DIR__.'/../../Resources/views/Icon/*.svg'));
    }
}
", "vendor/symfony/web-profiler-bundle/Tests/Resources/IconTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/web-profiler-bundle/Tests/Resources/IconTest.php");
    }
}
