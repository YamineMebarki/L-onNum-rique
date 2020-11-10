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

/* vendor/symfony/validator/Mapping/Cache/Psr6Cache.php */
class __TwigTemplate_94ddd9988aaf1477a87d0d217675fadedff2cc25f32cc682447a0b545839341b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Cache/Psr6Cache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Cache/Psr6Cache.php"));

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

namespace Symfony\\Component\\Validator\\Mapping\\Cache;

use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * PSR-6 adapter.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Psr6Cache implements CacheInterface
{
    private \$cacheItemPool;

    public function __construct(CacheItemPoolInterface \$cacheItemPool)
    {
        \$this->cacheItemPool = \$cacheItemPool;
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$class)
    {
        return \$this->cacheItemPool->hasItem(\$this->escapeClassName(\$class));
    }

    /**
     * {@inheritdoc}
     */
    public function read(\$class)
    {
        \$item = \$this->cacheItemPool->getItem(\$this->escapeClassName(\$class));

        if (!\$item->isHit()) {
            return false;
        }

        return \$item->get();
    }

    /**
     * {@inheritdoc}
     */
    public function write(ClassMetadata \$metadata)
    {
        \$item = \$this->cacheItemPool->getItem(\$this->escapeClassName(\$metadata->getClassName()));
        \$item->set(\$metadata);

        \$this->cacheItemPool->save(\$item);
    }

    /**
     * Replaces backslashes by dots in a class name.
     */
    private function escapeClassName(string \$class): string
    {
        if (false !== strpos(\$class, '@')) {
            // anonymous class: replace all PSR6-reserved characters
            return str_replace([\"\\0\", '\\\\', '/', '@', ':', '{', '}', '(', ')'], '.', \$class);
        }

        return str_replace('\\\\', '.', \$class);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Mapping/Cache/Psr6Cache.php";
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

namespace Symfony\\Component\\Validator\\Mapping\\Cache;

use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * PSR-6 adapter.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Psr6Cache implements CacheInterface
{
    private \$cacheItemPool;

    public function __construct(CacheItemPoolInterface \$cacheItemPool)
    {
        \$this->cacheItemPool = \$cacheItemPool;
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$class)
    {
        return \$this->cacheItemPool->hasItem(\$this->escapeClassName(\$class));
    }

    /**
     * {@inheritdoc}
     */
    public function read(\$class)
    {
        \$item = \$this->cacheItemPool->getItem(\$this->escapeClassName(\$class));

        if (!\$item->isHit()) {
            return false;
        }

        return \$item->get();
    }

    /**
     * {@inheritdoc}
     */
    public function write(ClassMetadata \$metadata)
    {
        \$item = \$this->cacheItemPool->getItem(\$this->escapeClassName(\$metadata->getClassName()));
        \$item->set(\$metadata);

        \$this->cacheItemPool->save(\$item);
    }

    /**
     * Replaces backslashes by dots in a class name.
     */
    private function escapeClassName(string \$class): string
    {
        if (false !== strpos(\$class, '@')) {
            // anonymous class: replace all PSR6-reserved characters
            return str_replace([\"\\0\", '\\\\', '/', '@', ':', '{', '}', '(', ')'], '.', \$class);
        }

        return str_replace('\\\\', '.', \$class);
    }
}
", "vendor/symfony/validator/Mapping/Cache/Psr6Cache.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/Cache/Psr6Cache.php");
    }
}
