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

/* vendor/symfony/cache/Adapter/PhpFilesAdapter.php */
class __TwigTemplate_ba030439e185388835a183fd0a2c80d9cfa792def459ef497d2229d76244a15a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/PhpFilesAdapter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Adapter/PhpFilesAdapter.php"));

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

namespace Symfony\\Component\\Cache\\Adapter;

use Symfony\\Component\\Cache\\Exception\\CacheException;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\Traits\\PhpFilesTrait;

class PhpFilesAdapter extends AbstractAdapter implements PruneableInterface
{
    use PhpFilesTrait;

    /**
     * @param \$appendOnly Set to `true` to gain extra performance when the items stored in this pool never expire.
     *                    Doing so is encouraged because it fits perfectly OPcache's memory model.
     *
     * @throws CacheException if OPcache is not enabled
     */
    public function __construct(string \$namespace = '', int \$defaultLifetime = 0, string \$directory = null, bool \$appendOnly = false)
    {
        \$this->appendOnly = \$appendOnly;
        self::\$startTime = self::\$startTime ?? \$_SERVER['REQUEST_TIME'] ?? time();
        parent::__construct('', \$defaultLifetime);
        \$this->init(\$namespace, \$directory);
        \$this->includeHandler = static function (\$type, \$msg, \$file, \$line) {
            throw new \\ErrorException(\$msg, 0, \$type, \$file, \$line);
        };
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Adapter/PhpFilesAdapter.php";
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

namespace Symfony\\Component\\Cache\\Adapter;

use Symfony\\Component\\Cache\\Exception\\CacheException;
use Symfony\\Component\\Cache\\PruneableInterface;
use Symfony\\Component\\Cache\\Traits\\PhpFilesTrait;

class PhpFilesAdapter extends AbstractAdapter implements PruneableInterface
{
    use PhpFilesTrait;

    /**
     * @param \$appendOnly Set to `true` to gain extra performance when the items stored in this pool never expire.
     *                    Doing so is encouraged because it fits perfectly OPcache's memory model.
     *
     * @throws CacheException if OPcache is not enabled
     */
    public function __construct(string \$namespace = '', int \$defaultLifetime = 0, string \$directory = null, bool \$appendOnly = false)
    {
        \$this->appendOnly = \$appendOnly;
        self::\$startTime = self::\$startTime ?? \$_SERVER['REQUEST_TIME'] ?? time();
        parent::__construct('', \$defaultLifetime);
        \$this->init(\$namespace, \$directory);
        \$this->includeHandler = static function (\$type, \$msg, \$file, \$line) {
            throw new \\ErrorException(\$msg, 0, \$type, \$file, \$line);
        };
    }
}
", "vendor/symfony/cache/Adapter/PhpFilesAdapter.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Adapter/PhpFilesAdapter.php");
    }
}
