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

/* vendor/symfony/cache/Traits/RedisClusterProxy.php */
class __TwigTemplate_7ebc71af8c5e645f4eabccdfa2a0b4a907e41852519b38b7faaacaab16cf1cae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Traits/RedisClusterProxy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Traits/RedisClusterProxy.php"));

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

namespace Symfony\\Component\\Cache\\Traits;

/**
 * @author Alessandro Chitolina <alekitto@gmail.com>
 *
 * @internal
 */
class RedisClusterProxy
{
    private \$redis;
    private \$initializer;

    public function __construct(\\Closure \$initializer)
    {
        \$this->initializer = \$initializer;
    }

    public function __call(\$method, array \$args)
    {
        \$this->redis ?: \$this->redis = \$this->initializer->__invoke();

        return \$this->redis->{\$method}(...\$args);
    }

    public function hscan(\$strKey, &\$iIterator, \$strPattern = null, \$iCount = null)
    {
        \$this->redis ?: \$this->redis = \$this->initializer->__invoke();

        return \$this->redis->hscan(\$strKey, \$iIterator, \$strPattern, \$iCount);
    }

    public function scan(&\$iIterator, \$strPattern = null, \$iCount = null)
    {
        \$this->redis ?: \$this->redis = \$this->initializer->__invoke();

        return \$this->redis->scan(\$iIterator, \$strPattern, \$iCount);
    }

    public function sscan(\$strKey, &\$iIterator, \$strPattern = null, \$iCount = null)
    {
        \$this->redis ?: \$this->redis = \$this->initializer->__invoke();

        return \$this->redis->sscan(\$strKey, \$iIterator, \$strPattern, \$iCount);
    }

    public function zscan(\$strKey, &\$iIterator, \$strPattern = null, \$iCount = null)
    {
        \$this->redis ?: \$this->redis = \$this->initializer->__invoke();

        return \$this->redis->zscan(\$strKey, \$iIterator, \$strPattern, \$iCount);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Traits/RedisClusterProxy.php";
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

namespace Symfony\\Component\\Cache\\Traits;

/**
 * @author Alessandro Chitolina <alekitto@gmail.com>
 *
 * @internal
 */
class RedisClusterProxy
{
    private \$redis;
    private \$initializer;

    public function __construct(\\Closure \$initializer)
    {
        \$this->initializer = \$initializer;
    }

    public function __call(\$method, array \$args)
    {
        \$this->redis ?: \$this->redis = \$this->initializer->__invoke();

        return \$this->redis->{\$method}(...\$args);
    }

    public function hscan(\$strKey, &\$iIterator, \$strPattern = null, \$iCount = null)
    {
        \$this->redis ?: \$this->redis = \$this->initializer->__invoke();

        return \$this->redis->hscan(\$strKey, \$iIterator, \$strPattern, \$iCount);
    }

    public function scan(&\$iIterator, \$strPattern = null, \$iCount = null)
    {
        \$this->redis ?: \$this->redis = \$this->initializer->__invoke();

        return \$this->redis->scan(\$iIterator, \$strPattern, \$iCount);
    }

    public function sscan(\$strKey, &\$iIterator, \$strPattern = null, \$iCount = null)
    {
        \$this->redis ?: \$this->redis = \$this->initializer->__invoke();

        return \$this->redis->sscan(\$strKey, \$iIterator, \$strPattern, \$iCount);
    }

    public function zscan(\$strKey, &\$iIterator, \$strPattern = null, \$iCount = null)
    {
        \$this->redis ?: \$this->redis = \$this->initializer->__invoke();

        return \$this->redis->zscan(\$strKey, \$iIterator, \$strPattern, \$iCount);
    }
}
", "vendor/symfony/cache/Traits/RedisClusterProxy.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Traits/RedisClusterProxy.php");
    }
}
