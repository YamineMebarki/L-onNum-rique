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

/* vendor/symfony/cache/Tests/Adapter/FilesystemAdapterTest.php */
class __TwigTemplate_b5a659b4868a077faef2332a14c6632ba9057dc7531e0c7d2d6e504857687498 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/FilesystemAdapterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Adapter/FilesystemAdapterTest.php"));

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

use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter;

/**
 * @group time-sensitive
 */
class FilesystemAdapterTest extends AdapterTestCase
{
    public function createCachePool(\$defaultLifetime = 0)
    {
        return new FilesystemAdapter('', \$defaultLifetime);
    }

    public static function tearDownAfterClass(): void
    {
        self::rmdir(sys_get_temp_dir().'/symfony-cache');
    }

    public static function rmdir(\$dir)
    {
        if (!file_exists(\$dir)) {
            return;
        }
        if (!\$dir || 0 !== strpos(\\dirname(\$dir), sys_get_temp_dir())) {
            throw new \\Exception(__METHOD__.\"() operates only on subdirs of system's temp dir\");
        }
        \$children = new \\RecursiveIteratorIterator(
            new \\RecursiveDirectoryIterator(\$dir, \\RecursiveDirectoryIterator::SKIP_DOTS),
            \\RecursiveIteratorIterator::CHILD_FIRST
        );
        foreach (\$children as \$child) {
            if (\$child->isDir()) {
                rmdir(\$child);
            } else {
                unlink(\$child);
            }
        }
        rmdir(\$dir);
    }

    protected function isPruned(CacheItemPoolInterface \$cache, \$name)
    {
        \$getFileMethod = (new \\ReflectionObject(\$cache))->getMethod('getFile');
        \$getFileMethod->setAccessible(true);

        return !file_exists(\$getFileMethod->invoke(\$cache, \$name));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Adapter/FilesystemAdapterTest.php";
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

use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\Cache\\Adapter\\FilesystemAdapter;

/**
 * @group time-sensitive
 */
class FilesystemAdapterTest extends AdapterTestCase
{
    public function createCachePool(\$defaultLifetime = 0)
    {
        return new FilesystemAdapter('', \$defaultLifetime);
    }

    public static function tearDownAfterClass(): void
    {
        self::rmdir(sys_get_temp_dir().'/symfony-cache');
    }

    public static function rmdir(\$dir)
    {
        if (!file_exists(\$dir)) {
            return;
        }
        if (!\$dir || 0 !== strpos(\\dirname(\$dir), sys_get_temp_dir())) {
            throw new \\Exception(__METHOD__.\"() operates only on subdirs of system's temp dir\");
        }
        \$children = new \\RecursiveIteratorIterator(
            new \\RecursiveDirectoryIterator(\$dir, \\RecursiveDirectoryIterator::SKIP_DOTS),
            \\RecursiveIteratorIterator::CHILD_FIRST
        );
        foreach (\$children as \$child) {
            if (\$child->isDir()) {
                rmdir(\$child);
            } else {
                unlink(\$child);
            }
        }
        rmdir(\$dir);
    }

    protected function isPruned(CacheItemPoolInterface \$cache, \$name)
    {
        \$getFileMethod = (new \\ReflectionObject(\$cache))->getMethod('getFile');
        \$getFileMethod->setAccessible(true);

        return !file_exists(\$getFileMethod->invoke(\$cache, \$name));
    }
}
", "vendor/symfony/cache/Tests/Adapter/FilesystemAdapterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Adapter/FilesystemAdapterTest.php");
    }
}
