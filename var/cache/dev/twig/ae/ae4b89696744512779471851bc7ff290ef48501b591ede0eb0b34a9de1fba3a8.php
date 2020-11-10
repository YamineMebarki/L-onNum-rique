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

/* vendor/symfony/cache/Tests/Simple/PhpFilesCacheTest.php */
class __TwigTemplate_4b292874d5327f096e1b7ab2d990f4d27ac366bdd10f7355fe13aea776d4bb63 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Simple/PhpFilesCacheTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Simple/PhpFilesCacheTest.php"));

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
use Symfony\\Component\\Cache\\Simple\\PhpFilesCache;

/**
 * @group time-sensitive
 * @group legacy
 */
class PhpFilesCacheTest extends CacheTestCase
{
    protected \$skippedTests = [
        'testDefaultLifeTime' => 'PhpFilesCache does not allow configuring a default lifetime.',
    ];

    public function createSimpleCache()
    {
        return new PhpFilesCache('sf-cache');
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
        return "vendor/symfony/cache/Tests/Simple/PhpFilesCacheTest.php";
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
use Symfony\\Component\\Cache\\Simple\\PhpFilesCache;

/**
 * @group time-sensitive
 * @group legacy
 */
class PhpFilesCacheTest extends CacheTestCase
{
    protected \$skippedTests = [
        'testDefaultLifeTime' => 'PhpFilesCache does not allow configuring a default lifetime.',
    ];

    public function createSimpleCache()
    {
        return new PhpFilesCache('sf-cache');
    }

    protected function isPruned(CacheInterface \$cache, \$name)
    {
        \$getFileMethod = (new \\ReflectionObject(\$cache))->getMethod('getFile');
        \$getFileMethod->setAccessible(true);

        return !file_exists(\$getFileMethod->invoke(\$cache, \$name));
    }
}
", "vendor/symfony/cache/Tests/Simple/PhpFilesCacheTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Simple/PhpFilesCacheTest.php");
    }
}
