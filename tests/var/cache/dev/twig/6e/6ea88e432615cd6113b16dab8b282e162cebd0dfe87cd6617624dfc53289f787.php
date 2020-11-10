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

/* vendor/symfony/serializer/Mapping/Factory/CacheClassMetadataFactory.php */
class __TwigTemplate_cd1eff5a6067e5e1f4ed57826985892d7b3f10590574a2c41abadeafb5846653 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/Factory/CacheClassMetadataFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/Factory/CacheClassMetadataFactory.php"));

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

namespace Symfony\\Component\\Serializer\\Mapping\\Factory;

use Psr\\Cache\\CacheItemPoolInterface;

/**
 * Caches metadata using a PSR-6 implementation.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class CacheClassMetadataFactory implements ClassMetadataFactoryInterface
{
    use ClassResolverTrait;

    /**
     * @var ClassMetadataFactoryInterface
     */
    private \$decorated;

    /**
     * @var CacheItemPoolInterface
     */
    private \$cacheItemPool;

    public function __construct(ClassMetadataFactoryInterface \$decorated, CacheItemPoolInterface \$cacheItemPool)
    {
        \$this->decorated = \$decorated;
        \$this->cacheItemPool = \$cacheItemPool;
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadataFor(\$value)
    {
        \$class = \$this->getClass(\$value);
        // Key cannot contain backslashes according to PSR-6
        \$key = strtr(\$class, '\\\\', '_');

        \$item = \$this->cacheItemPool->getItem(\$key);
        if (\$item->isHit()) {
            return \$item->get();
        }

        \$metadata = \$this->decorated->getMetadataFor(\$value);
        \$this->cacheItemPool->save(\$item->set(\$metadata));

        return \$metadata;
    }

    /**
     * {@inheritdoc}
     */
    public function hasMetadataFor(\$value)
    {
        return \$this->decorated->hasMetadataFor(\$value);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Mapping/Factory/CacheClassMetadataFactory.php";
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

namespace Symfony\\Component\\Serializer\\Mapping\\Factory;

use Psr\\Cache\\CacheItemPoolInterface;

/**
 * Caches metadata using a PSR-6 implementation.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class CacheClassMetadataFactory implements ClassMetadataFactoryInterface
{
    use ClassResolverTrait;

    /**
     * @var ClassMetadataFactoryInterface
     */
    private \$decorated;

    /**
     * @var CacheItemPoolInterface
     */
    private \$cacheItemPool;

    public function __construct(ClassMetadataFactoryInterface \$decorated, CacheItemPoolInterface \$cacheItemPool)
    {
        \$this->decorated = \$decorated;
        \$this->cacheItemPool = \$cacheItemPool;
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadataFor(\$value)
    {
        \$class = \$this->getClass(\$value);
        // Key cannot contain backslashes according to PSR-6
        \$key = strtr(\$class, '\\\\', '_');

        \$item = \$this->cacheItemPool->getItem(\$key);
        if (\$item->isHit()) {
            return \$item->get();
        }

        \$metadata = \$this->decorated->getMetadataFor(\$value);
        \$this->cacheItemPool->save(\$item->set(\$metadata));

        return \$metadata;
    }

    /**
     * {@inheritdoc}
     */
    public function hasMetadataFor(\$value)
    {
        return \$this->decorated->hasMetadataFor(\$value);
    }
}
", "vendor/symfony/serializer/Mapping/Factory/CacheClassMetadataFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Mapping/Factory/CacheClassMetadataFactory.php");
    }
}
