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

/* vendor/symfony/http-kernel/Tests/CacheClearer/ChainCacheClearerTest.php */
class __TwigTemplate_1d4b35ade75d01c24a9cce5c5330c18d3afbed33098ea4cbed1422e1ecbcd01c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/CacheClearer/ChainCacheClearerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Tests/CacheClearer/ChainCacheClearerTest.php"));

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

namespace Symfony\\Component\\HttpKernel\\Tests\\CacheClearer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer;

class ChainCacheClearerTest extends TestCase
{
    protected static \$cacheDir;

    public static function setUpBeforeClass(): void
    {
        self::\$cacheDir = tempnam(sys_get_temp_dir(), 'sf_cache_clearer_dir');
    }

    public static function tearDownAfterClass(): void
    {
        @unlink(self::\$cacheDir);
    }

    public function testInjectClearersInConstructor()
    {
        \$clearer = \$this->getMockClearer();
        \$clearer
            ->expects(\$this->once())
            ->method('clear');

        \$chainClearer = new ChainCacheClearer([\$clearer]);
        \$chainClearer->clear(self::\$cacheDir);
    }

    protected function getMockClearer()
    {
        return \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\CacheClearer\\CacheClearerInterface')->getMock();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Tests/CacheClearer/ChainCacheClearerTest.php";
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

namespace Symfony\\Component\\HttpKernel\\Tests\\CacheClearer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpKernel\\CacheClearer\\ChainCacheClearer;

class ChainCacheClearerTest extends TestCase
{
    protected static \$cacheDir;

    public static function setUpBeforeClass(): void
    {
        self::\$cacheDir = tempnam(sys_get_temp_dir(), 'sf_cache_clearer_dir');
    }

    public static function tearDownAfterClass(): void
    {
        @unlink(self::\$cacheDir);
    }

    public function testInjectClearersInConstructor()
    {
        \$clearer = \$this->getMockClearer();
        \$clearer
            ->expects(\$this->once())
            ->method('clear');

        \$chainClearer = new ChainCacheClearer([\$clearer]);
        \$chainClearer->clear(self::\$cacheDir);
    }

    protected function getMockClearer()
    {
        return \$this->getMockBuilder('Symfony\\Component\\HttpKernel\\CacheClearer\\CacheClearerInterface')->getMock();
    }
}
", "vendor/symfony/http-kernel/Tests/CacheClearer/ChainCacheClearerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Tests/CacheClearer/ChainCacheClearerTest.php");
    }
}
