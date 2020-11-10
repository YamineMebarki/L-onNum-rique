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

/* vendor/symfony/cache/Tests/Adapter/PdoDbalAdapterTest.php */
class __TwigTemplate_c36f029e82e8cb7ae9c3baa21f3d81870226a49182c1aa259b5eca8c28408b55 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/PdoDbalAdapterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/PdoDbalAdapterTest.php"));

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

namespace Symfony\\Component\\Cache\\Tests\\Adapter;

use Doctrine\\DBAL\\DriverManager;
use Symfony\\Component\\Cache\\Adapter\\PdoAdapter;
use Symfony\\Component\\Cache\\Tests\\Traits\\PdoPruneableTrait;

/**
 * @group time-sensitive
 */
class PdoDbalAdapterTest extends AdapterTestCase
{
    use PdoPruneableTrait;

    protected static \$dbFile;

    public static function setUpBeforeClass(): void
    {
        if (!\\extension_loaded('pdo_sqlite')) {
            self::markTestSkipped('Extension pdo_sqlite required.');
        }

        self::\$dbFile = tempnam(sys_get_temp_dir(), 'sf_sqlite_cache');

        \$pool = new PdoAdapter(DriverManager::getConnection(['driver' => 'pdo_sqlite', 'path' => self::\$dbFile]));
    }

    public static function tearDownAfterClass(): void
    {
        @unlink(self::\$dbFile);
    }

    public function createCachePool(\$defaultLifetime = 0)
    {
        return new PdoAdapter(DriverManager::getConnection(['driver' => 'pdo_sqlite', 'path' => self::\$dbFile]), '', \$defaultLifetime);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Adapter/PdoDbalAdapterTest.php";
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

namespace Symfony\\Component\\Cache\\Tests\\Adapter;

use Doctrine\\DBAL\\DriverManager;
use Symfony\\Component\\Cache\\Adapter\\PdoAdapter;
use Symfony\\Component\\Cache\\Tests\\Traits\\PdoPruneableTrait;

/**
 * @group time-sensitive
 */
class PdoDbalAdapterTest extends AdapterTestCase
{
    use PdoPruneableTrait;

    protected static \$dbFile;

    public static function setUpBeforeClass(): void
    {
        if (!\\extension_loaded('pdo_sqlite')) {
            self::markTestSkipped('Extension pdo_sqlite required.');
        }

        self::\$dbFile = tempnam(sys_get_temp_dir(), 'sf_sqlite_cache');

        \$pool = new PdoAdapter(DriverManager::getConnection(['driver' => 'pdo_sqlite', 'path' => self::\$dbFile]));
    }

    public static function tearDownAfterClass(): void
    {
        @unlink(self::\$dbFile);
    }

    public function createCachePool(\$defaultLifetime = 0)
    {
        return new PdoAdapter(DriverManager::getConnection(['driver' => 'pdo_sqlite', 'path' => self::\$dbFile]), '', \$defaultLifetime);
    }
}
", "vendor/symfony/cache/Tests/Adapter/PdoDbalAdapterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Adapter/PdoDbalAdapterTest.php");
    }
}
