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

/* vendor/symfony/validator/Mapping/Cache/DoctrineCache.php */
class __TwigTemplate_708799531c1f43a0450f5f079f4d03e1580827615dbbad062ad7fccdc8a9f33d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Cache/DoctrineCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Cache/DoctrineCache.php"));

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

use Doctrine\\Common\\Cache\\Cache;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * Adapts a Doctrine cache to a CacheInterface.
 *
 * @author Florian Voutzinos <florian@voutzinos.com>
 */
final class DoctrineCache implements CacheInterface
{
    private \$cache;

    public function __construct(Cache \$cache)
    {
        \$this->cache = \$cache;
    }

    public function setCache(Cache \$cache)
    {
        \$this->cache = \$cache;
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$class)
    {
        return \$this->cache->contains(\$class);
    }

    /**
     * {@inheritdoc}
     */
    public function read(\$class)
    {
        return \$this->cache->fetch(\$class);
    }

    /**
     * {@inheritdoc}
     */
    public function write(ClassMetadata \$metadata)
    {
        \$this->cache->save(\$metadata->getClassName(), \$metadata);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Mapping/Cache/DoctrineCache.php";
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

use Doctrine\\Common\\Cache\\Cache;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * Adapts a Doctrine cache to a CacheInterface.
 *
 * @author Florian Voutzinos <florian@voutzinos.com>
 */
final class DoctrineCache implements CacheInterface
{
    private \$cache;

    public function __construct(Cache \$cache)
    {
        \$this->cache = \$cache;
    }

    public function setCache(Cache \$cache)
    {
        \$this->cache = \$cache;
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$class)
    {
        return \$this->cache->contains(\$class);
    }

    /**
     * {@inheritdoc}
     */
    public function read(\$class)
    {
        return \$this->cache->fetch(\$class);
    }

    /**
     * {@inheritdoc}
     */
    public function write(ClassMetadata \$metadata)
    {
        \$this->cache->save(\$metadata->getClassName(), \$metadata);
    }
}
", "vendor/symfony/validator/Mapping/Cache/DoctrineCache.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/Cache/DoctrineCache.php");
    }
}
