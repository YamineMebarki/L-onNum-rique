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

/* vendor/symfony/cache-contracts/TagAwareCacheInterface.php */
class __TwigTemplate_4473c26c7c1353346bd414bd6e145d820f310d1f0c139d5d1281c13565f9018f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache-contracts/TagAwareCacheInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache-contracts/TagAwareCacheInterface.php"));

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

namespace Symfony\\Contracts\\Cache;

use Psr\\Cache\\InvalidArgumentException;

/**
 * Allows invalidating cached items using tags.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface TagAwareCacheInterface extends CacheInterface
{
    /**
     * Invalidates cached items using tags.
     *
     * When implemented on a PSR-6 pool, invalidation should not apply
     * to deferred items. Instead, they should be committed as usual.
     * This allows replacing old tagged values by new ones without
     * race conditions.
     *
     * @param string[] \$tags An array of tags to invalidate
     *
     * @return bool True on success
     *
     * @throws InvalidArgumentException When \$tags is not valid
     */
    public function invalidateTags(array \$tags);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache-contracts/TagAwareCacheInterface.php";
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

namespace Symfony\\Contracts\\Cache;

use Psr\\Cache\\InvalidArgumentException;

/**
 * Allows invalidating cached items using tags.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface TagAwareCacheInterface extends CacheInterface
{
    /**
     * Invalidates cached items using tags.
     *
     * When implemented on a PSR-6 pool, invalidation should not apply
     * to deferred items. Instead, they should be committed as usual.
     * This allows replacing old tagged values by new ones without
     * race conditions.
     *
     * @param string[] \$tags An array of tags to invalidate
     *
     * @return bool True on success
     *
     * @throws InvalidArgumentException When \$tags is not valid
     */
    public function invalidateTags(array \$tags);
}
", "vendor/symfony/cache-contracts/TagAwareCacheInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache-contracts/TagAwareCacheInterface.php");
    }
}
