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

/* vendor/symfony/cache/Simple/NullCache.php */
class __TwigTemplate_bbc5e92db63142ce1a7f5dc585b62f85afc44dd2005b7074b59f61f39b85faae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Simple/NullCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Simple/NullCache.php"));

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

namespace Symfony\\Component\\Cache\\Simple;

use Psr\\SimpleCache\\CacheInterface as Psr16CacheInterface;
use Symfony\\Component\\Cache\\Adapter\\NullAdapter;
use Symfony\\Contracts\\Cache\\CacheInterface;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" and type-hint for \"%s\" instead.', NullCache::class, NullAdapter::class, CacheInterface::class), E_USER_DEPRECATED);

/**
 * @deprecated since Symfony 4.3, use NullAdapter and type-hint for CacheInterface instead.
 */
class NullCache implements Psr16CacheInterface
{
    /**
     * {@inheritdoc}
     */
    public function get(\$key, \$default = null)
    {
        return \$default;
    }

    /**
     * {@inheritdoc}
     */
    public function getMultiple(\$keys, \$default = null)
    {
        foreach (\$keys as \$key) {
            yield \$key => \$default;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$key)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\$key)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteMultiple(\$keys)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$key, \$value, \$ttl = null)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function setMultiple(\$values, \$ttl = null)
    {
        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Simple/NullCache.php";
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

namespace Symfony\\Component\\Cache\\Simple;

use Psr\\SimpleCache\\CacheInterface as Psr16CacheInterface;
use Symfony\\Component\\Cache\\Adapter\\NullAdapter;
use Symfony\\Contracts\\Cache\\CacheInterface;

@trigger_error(sprintf('The \"%s\" class is deprecated since Symfony 4.3, use \"%s\" and type-hint for \"%s\" instead.', NullCache::class, NullAdapter::class, CacheInterface::class), E_USER_DEPRECATED);

/**
 * @deprecated since Symfony 4.3, use NullAdapter and type-hint for CacheInterface instead.
 */
class NullCache implements Psr16CacheInterface
{
    /**
     * {@inheritdoc}
     */
    public function get(\$key, \$default = null)
    {
        return \$default;
    }

    /**
     * {@inheritdoc}
     */
    public function getMultiple(\$keys, \$default = null)
    {
        foreach (\$keys as \$key) {
            yield \$key => \$default;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$key)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\$key)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteMultiple(\$keys)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$key, \$value, \$ttl = null)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function setMultiple(\$values, \$ttl = null)
    {
        return false;
    }
}
", "vendor/symfony/cache/Simple/NullCache.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Simple/NullCache.php");
    }
}
