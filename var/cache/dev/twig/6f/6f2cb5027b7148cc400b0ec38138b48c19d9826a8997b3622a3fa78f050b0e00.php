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

/* vendor/symfony/framework-bundle/HttpCache/HttpCache.php */
class __TwigTemplate_f586ecaeb99720b1f6ef8daf67ba3e9bfc1f72fcd5c90179358a10ff02930323 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/HttpCache/HttpCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/HttpCache/HttpCache.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\HttpCache;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\HttpCache\\Esi;
use Symfony\\Component\\HttpKernel\\HttpCache\\HttpCache as BaseHttpCache;
use Symfony\\Component\\HttpKernel\\HttpCache\\Store;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * Manages HTTP cache objects in a Container.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HttpCache extends BaseHttpCache
{
    protected \$cacheDir;
    protected \$kernel;

    /**
     * @param KernelInterface \$kernel   A KernelInterface instance
     * @param string          \$cacheDir The cache directory (default used if null)
     */
    public function __construct(KernelInterface \$kernel, string \$cacheDir = null)
    {
        \$this->kernel = \$kernel;
        \$this->cacheDir = \$cacheDir;

        parent::__construct(\$kernel, \$this->createStore(), \$this->createSurrogate(), array_merge(['debug' => \$kernel->isDebug()], \$this->getOptions()));
    }

    /**
     * Forwards the Request to the backend and returns the Response.
     *
     * @param Request  \$request A Request instance
     * @param bool     \$raw     Whether to catch exceptions or not
     * @param Response \$entry   A Response instance (the stale entry if present, null otherwise)
     *
     * @return Response A Response instance
     */
    protected function forward(Request \$request, \$raw = false, Response \$entry = null)
    {
        \$this->getKernel()->boot();
        \$this->getKernel()->getContainer()->set('cache', \$this);

        return parent::forward(\$request, \$raw, \$entry);
    }

    /**
     * Returns an array of options to customize the Cache configuration.
     *
     * @return array An array of options
     */
    protected function getOptions()
    {
        return [];
    }

    protected function createSurrogate()
    {
        return new Esi();
    }

    protected function createStore()
    {
        return new Store(\$this->cacheDir ?: \$this->kernel->getCacheDir().'/http_cache');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/HttpCache/HttpCache.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\HttpCache;

use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\HttpKernel\\HttpCache\\Esi;
use Symfony\\Component\\HttpKernel\\HttpCache\\HttpCache as BaseHttpCache;
use Symfony\\Component\\HttpKernel\\HttpCache\\Store;
use Symfony\\Component\\HttpKernel\\KernelInterface;

/**
 * Manages HTTP cache objects in a Container.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class HttpCache extends BaseHttpCache
{
    protected \$cacheDir;
    protected \$kernel;

    /**
     * @param KernelInterface \$kernel   A KernelInterface instance
     * @param string          \$cacheDir The cache directory (default used if null)
     */
    public function __construct(KernelInterface \$kernel, string \$cacheDir = null)
    {
        \$this->kernel = \$kernel;
        \$this->cacheDir = \$cacheDir;

        parent::__construct(\$kernel, \$this->createStore(), \$this->createSurrogate(), array_merge(['debug' => \$kernel->isDebug()], \$this->getOptions()));
    }

    /**
     * Forwards the Request to the backend and returns the Response.
     *
     * @param Request  \$request A Request instance
     * @param bool     \$raw     Whether to catch exceptions or not
     * @param Response \$entry   A Response instance (the stale entry if present, null otherwise)
     *
     * @return Response A Response instance
     */
    protected function forward(Request \$request, \$raw = false, Response \$entry = null)
    {
        \$this->getKernel()->boot();
        \$this->getKernel()->getContainer()->set('cache', \$this);

        return parent::forward(\$request, \$raw, \$entry);
    }

    /**
     * Returns an array of options to customize the Cache configuration.
     *
     * @return array An array of options
     */
    protected function getOptions()
    {
        return [];
    }

    protected function createSurrogate()
    {
        return new Esi();
    }

    protected function createStore()
    {
        return new Store(\$this->cacheDir ?: \$this->kernel->getCacheDir().'/http_cache');
    }
}
", "vendor/symfony/framework-bundle/HttpCache/HttpCache.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/HttpCache/HttpCache.php");
    }
}
