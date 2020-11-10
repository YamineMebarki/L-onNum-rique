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

/* vendor/symfony/cache/Tests/Simple/PhpArrayCacheWrapper.php */
class __TwigTemplate_6cff2b5b4d8b8d8787b25841de7c358a1aa15ff50a29642b394873160f8c9129 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Simple/PhpArrayCacheWrapper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Simple/PhpArrayCacheWrapper.php"));

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

use Symfony\\Component\\Cache\\Simple\\PhpArrayCache;

class PhpArrayCacheWrapper extends PhpArrayCache
{
    protected \$data = [];

    public function set(\$key, \$value, \$ttl = null)
    {
        (\\Closure::bind(function () use (\$key, \$value) {
            \$this->data[\$key] = \$value;
            \$this->warmUp(\$this->data);
            list(\$this->keys, \$this->values) = eval(substr(file_get_contents(\$this->file), 6));
        }, \$this, PhpArrayCache::class))();

        return true;
    }

    public function setMultiple(\$values, \$ttl = null)
    {
        if (!\\is_array(\$values) && !\$values instanceof \\Traversable) {
            return parent::setMultiple(\$values, \$ttl);
        }
        (\\Closure::bind(function () use (\$values) {
            foreach (\$values as \$key => \$value) {
                \$this->data[\$key] = \$value;
            }
            \$this->warmUp(\$this->data);
            list(\$this->keys, \$this->values) = eval(substr(file_get_contents(\$this->file), 6));
        }, \$this, PhpArrayCache::class))();

        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Simple/PhpArrayCacheWrapper.php";
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

use Symfony\\Component\\Cache\\Simple\\PhpArrayCache;

class PhpArrayCacheWrapper extends PhpArrayCache
{
    protected \$data = [];

    public function set(\$key, \$value, \$ttl = null)
    {
        (\\Closure::bind(function () use (\$key, \$value) {
            \$this->data[\$key] = \$value;
            \$this->warmUp(\$this->data);
            list(\$this->keys, \$this->values) = eval(substr(file_get_contents(\$this->file), 6));
        }, \$this, PhpArrayCache::class))();

        return true;
    }

    public function setMultiple(\$values, \$ttl = null)
    {
        if (!\\is_array(\$values) && !\$values instanceof \\Traversable) {
            return parent::setMultiple(\$values, \$ttl);
        }
        (\\Closure::bind(function () use (\$values) {
            foreach (\$values as \$key => \$value) {
                \$this->data[\$key] = \$value;
            }
            \$this->warmUp(\$this->data);
            list(\$this->keys, \$this->values) = eval(substr(file_get_contents(\$this->file), 6));
        }, \$this, PhpArrayCache::class))();

        return true;
    }
}
", "vendor/symfony/cache/Tests/Simple/PhpArrayCacheWrapper.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Simple/PhpArrayCacheWrapper.php");
    }
}
