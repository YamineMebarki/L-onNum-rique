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

/* vendor/symfony/cache/Tests/Fixtures/ExternalAdapter.php */
class __TwigTemplate_fa0f79552bbdb54504f6f798819d3fc365634acac756cdee807b40eeddf6d0d0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Fixtures/ExternalAdapter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Fixtures/ExternalAdapter.php"));

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

namespace Symfony\\Component\\Cache\\Tests\\Fixtures;

use Psr\\Cache\\CacheItemInterface;
use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;

/**
 * Adapter not implementing the {@see \\Symfony\\Component\\Cache\\Adapter\\AdapterInterface}.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ExternalAdapter implements CacheItemPoolInterface
{
    private \$cache;

    public function __construct(int \$defaultLifetime = 0)
    {
        \$this->cache = new ArrayAdapter(\$defaultLifetime);
    }

    public function getItem(\$key)
    {
        return \$this->cache->getItem(\$key);
    }

    public function getItems(array \$keys = [])
    {
        return \$this->cache->getItems(\$keys);
    }

    public function hasItem(\$key)
    {
        return \$this->cache->hasItem(\$key);
    }

    public function clear()
    {
        return \$this->cache->clear();
    }

    public function deleteItem(\$key)
    {
        return \$this->cache->deleteItem(\$key);
    }

    public function deleteItems(array \$keys)
    {
        return \$this->cache->deleteItems(\$keys);
    }

    public function save(CacheItemInterface \$item)
    {
        return \$this->cache->save(\$item);
    }

    public function saveDeferred(CacheItemInterface \$item)
    {
        return \$this->cache->saveDeferred(\$item);
    }

    public function commit()
    {
        return \$this->cache->commit();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Fixtures/ExternalAdapter.php";
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

namespace Symfony\\Component\\Cache\\Tests\\Fixtures;

use Psr\\Cache\\CacheItemInterface;
use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;

/**
 * Adapter not implementing the {@see \\Symfony\\Component\\Cache\\Adapter\\AdapterInterface}.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ExternalAdapter implements CacheItemPoolInterface
{
    private \$cache;

    public function __construct(int \$defaultLifetime = 0)
    {
        \$this->cache = new ArrayAdapter(\$defaultLifetime);
    }

    public function getItem(\$key)
    {
        return \$this->cache->getItem(\$key);
    }

    public function getItems(array \$keys = [])
    {
        return \$this->cache->getItems(\$keys);
    }

    public function hasItem(\$key)
    {
        return \$this->cache->hasItem(\$key);
    }

    public function clear()
    {
        return \$this->cache->clear();
    }

    public function deleteItem(\$key)
    {
        return \$this->cache->deleteItem(\$key);
    }

    public function deleteItems(array \$keys)
    {
        return \$this->cache->deleteItems(\$keys);
    }

    public function save(CacheItemInterface \$item)
    {
        return \$this->cache->save(\$item);
    }

    public function saveDeferred(CacheItemInterface \$item)
    {
        return \$this->cache->saveDeferred(\$item);
    }

    public function commit()
    {
        return \$this->cache->commit();
    }
}
", "vendor/symfony/cache/Tests/Fixtures/ExternalAdapter.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Fixtures/ExternalAdapter.php");
    }
}
