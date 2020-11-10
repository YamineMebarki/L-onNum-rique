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

/* vendor/symfony/cache/Tests/Simple/PhpArrayCacheWithFallbackTest.php */
class __TwigTemplate_da46aab92b0444719aa1a69f83dfda3c85b1296e8a10a1f8297d7cddbc5eb432 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Simple/PhpArrayCacheWithFallbackTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Simple/PhpArrayCacheWithFallbackTest.php"));

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

namespace Symfony\\Component\\Cache\\Tests\\Simple;

use Symfony\\Component\\Cache\\Simple\\FilesystemCache;
use Symfony\\Component\\Cache\\Simple\\PhpArrayCache;
use Symfony\\Component\\Cache\\Tests\\Adapter\\FilesystemAdapterTest;

/**
 * @group time-sensitive
 * @group legacy
 */
class PhpArrayCacheWithFallbackTest extends CacheTestCase
{
    protected \$skippedTests = [
        'testGetInvalidKeys' => 'PhpArrayCache does no validation',
        'testGetMultipleInvalidKeys' => 'PhpArrayCache does no validation',
        'testDeleteInvalidKeys' => 'PhpArrayCache does no validation',
        'testDeleteMultipleInvalidKeys' => 'PhpArrayCache does no validation',
        //'testSetValidData' => 'PhpArrayCache does no validation',
        'testSetInvalidKeys' => 'PhpArrayCache does no validation',
        'testSetInvalidTtl' => 'PhpArrayCache does no validation',
        'testSetMultipleInvalidKeys' => 'PhpArrayCache does no validation',
        'testSetMultipleInvalidTtl' => 'PhpArrayCache does no validation',
        'testHasInvalidKeys' => 'PhpArrayCache does no validation',
        'testPrune' => 'PhpArrayCache just proxies',
    ];

    protected static \$file;

    public static function setUpBeforeClass(): void
    {
        self::\$file = sys_get_temp_dir().'/symfony-cache/php-array-adapter-test.php';
    }

    protected function tearDown(): void
    {
        if (file_exists(sys_get_temp_dir().'/symfony-cache')) {
            FilesystemAdapterTest::rmdir(sys_get_temp_dir().'/symfony-cache');
        }
    }

    public function createSimpleCache(\$defaultLifetime = 0)
    {
        return new PhpArrayCache(self::\$file, new FilesystemCache('php-array-fallback', \$defaultLifetime));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Simple/PhpArrayCacheWithFallbackTest.php";
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

namespace Symfony\\Component\\Cache\\Tests\\Simple;

use Symfony\\Component\\Cache\\Simple\\FilesystemCache;
use Symfony\\Component\\Cache\\Simple\\PhpArrayCache;
use Symfony\\Component\\Cache\\Tests\\Adapter\\FilesystemAdapterTest;

/**
 * @group time-sensitive
 * @group legacy
 */
class PhpArrayCacheWithFallbackTest extends CacheTestCase
{
    protected \$skippedTests = [
        'testGetInvalidKeys' => 'PhpArrayCache does no validation',
        'testGetMultipleInvalidKeys' => 'PhpArrayCache does no validation',
        'testDeleteInvalidKeys' => 'PhpArrayCache does no validation',
        'testDeleteMultipleInvalidKeys' => 'PhpArrayCache does no validation',
        //'testSetValidData' => 'PhpArrayCache does no validation',
        'testSetInvalidKeys' => 'PhpArrayCache does no validation',
        'testSetInvalidTtl' => 'PhpArrayCache does no validation',
        'testSetMultipleInvalidKeys' => 'PhpArrayCache does no validation',
        'testSetMultipleInvalidTtl' => 'PhpArrayCache does no validation',
        'testHasInvalidKeys' => 'PhpArrayCache does no validation',
        'testPrune' => 'PhpArrayCache just proxies',
    ];

    protected static \$file;

    public static function setUpBeforeClass(): void
    {
        self::\$file = sys_get_temp_dir().'/symfony-cache/php-array-adapter-test.php';
    }

    protected function tearDown(): void
    {
        if (file_exists(sys_get_temp_dir().'/symfony-cache')) {
            FilesystemAdapterTest::rmdir(sys_get_temp_dir().'/symfony-cache');
        }
    }

    public function createSimpleCache(\$defaultLifetime = 0)
    {
        return new PhpArrayCache(self::\$file, new FilesystemCache('php-array-fallback', \$defaultLifetime));
    }
}
", "vendor/symfony/cache/Tests/Simple/PhpArrayCacheWithFallbackTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Simple/PhpArrayCacheWithFallbackTest.php");
    }
}
