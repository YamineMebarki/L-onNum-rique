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

/* vendor/symfony/cache/Tests/Simple/FilesystemCacheTest.php */
class __TwigTemplate_709d9d3cafd58dd4f332a8f79bc427bf39c3bbde34c3f9711bca672609a2aefe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Simple/FilesystemCacheTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Simple/FilesystemCacheTest.php"));

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

use Psr\\SimpleCache\\CacheInterface;
use Symfony\\Component\\Cache\\Simple\\FilesystemCache;

/**
 * @group time-sensitive
 * @group legacy
 */
class FilesystemCacheTest extends CacheTestCase
{
    public function createSimpleCache(\$defaultLifetime = 0)
    {
        return new FilesystemCache('', \$defaultLifetime);
    }

    protected function isPruned(CacheInterface \$cache, \$name)
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
        return "vendor/symfony/cache/Tests/Simple/FilesystemCacheTest.php";
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

use Psr\\SimpleCache\\CacheInterface;
use Symfony\\Component\\Cache\\Simple\\FilesystemCache;

/**
 * @group time-sensitive
 * @group legacy
 */
class FilesystemCacheTest extends CacheTestCase
{
    public function createSimpleCache(\$defaultLifetime = 0)
    {
        return new FilesystemCache('', \$defaultLifetime);
    }

    protected function isPruned(CacheInterface \$cache, \$name)
    {
        \$getFileMethod = (new \\ReflectionObject(\$cache))->getMethod('getFile');
        \$getFileMethod->setAccessible(true);

        return !file_exists(\$getFileMethod->invoke(\$cache, \$name));
    }
}
", "vendor/symfony/cache/Tests/Simple/FilesystemCacheTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Simple/FilesystemCacheTest.php");
    }
}
