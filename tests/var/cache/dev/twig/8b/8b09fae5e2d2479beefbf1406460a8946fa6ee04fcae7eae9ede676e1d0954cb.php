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

/* vendor/symfony/cache/Tests/Simple/AbstractRedisCacheTest.php */
class __TwigTemplate_6e3c6b464d08489ccd62d219fae3c6ca7ee5eafb7c33a1b6c3ad006e71c70776 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Simple/AbstractRedisCacheTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Simple/AbstractRedisCacheTest.php"));

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

use Symfony\\Component\\Cache\\Simple\\RedisCache;

/**
 * @group legacy
 */
abstract class AbstractRedisCacheTest extends CacheTestCase
{
    protected \$skippedTests = [
        'testSetTtl' => 'Testing expiration slows down the test suite',
        'testSetMultipleTtl' => 'Testing expiration slows down the test suite',
        'testDefaultLifeTime' => 'Testing expiration slows down the test suite',
    ];

    protected static \$redis;

    public function createSimpleCache(\$defaultLifetime = 0)
    {
        return new RedisCache(self::\$redis, str_replace('\\\\', '.', __CLASS__), \$defaultLifetime);
    }

    public static function setUpBeforeClass(): void
    {
        if (!\\extension_loaded('redis')) {
            self::markTestSkipped('Extension redis required.');
        }
        if (!@((new \\Redis())->connect(getenv('REDIS_HOST')))) {
            \$e = error_get_last();
            self::markTestSkipped(\$e['message']);
        }
    }

    public static function tearDownAfterClass(): void
    {
        self::\$redis = null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Simple/AbstractRedisCacheTest.php";
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

use Symfony\\Component\\Cache\\Simple\\RedisCache;

/**
 * @group legacy
 */
abstract class AbstractRedisCacheTest extends CacheTestCase
{
    protected \$skippedTests = [
        'testSetTtl' => 'Testing expiration slows down the test suite',
        'testSetMultipleTtl' => 'Testing expiration slows down the test suite',
        'testDefaultLifeTime' => 'Testing expiration slows down the test suite',
    ];

    protected static \$redis;

    public function createSimpleCache(\$defaultLifetime = 0)
    {
        return new RedisCache(self::\$redis, str_replace('\\\\', '.', __CLASS__), \$defaultLifetime);
    }

    public static function setUpBeforeClass(): void
    {
        if (!\\extension_loaded('redis')) {
            self::markTestSkipped('Extension redis required.');
        }
        if (!@((new \\Redis())->connect(getenv('REDIS_HOST')))) {
            \$e = error_get_last();
            self::markTestSkipped(\$e['message']);
        }
    }

    public static function tearDownAfterClass(): void
    {
        self::\$redis = null;
    }
}
", "vendor/symfony/cache/Tests/Simple/AbstractRedisCacheTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Simple/AbstractRedisCacheTest.php");
    }
}
