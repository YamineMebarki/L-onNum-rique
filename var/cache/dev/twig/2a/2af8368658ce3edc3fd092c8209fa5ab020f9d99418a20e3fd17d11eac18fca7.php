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

/* vendor/symfony/config/ConfigCache.php */
class __TwigTemplate_3848c25915510a804c9dcbadeff583733d22cf68659eefc814909beeb19b57b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/ConfigCache.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/ConfigCache.php"));

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

namespace Symfony\\Component\\Config;

use Symfony\\Component\\Config\\Resource\\SelfCheckingResourceChecker;

/**
 * ConfigCache caches arbitrary content in files on disk.
 *
 * When in debug mode, those metadata resources that implement
 * \\Symfony\\Component\\Config\\Resource\\SelfCheckingResourceInterface will
 * be used to check cache freshness.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Matthias Pigulla <mp@webfactory.de>
 */
class ConfigCache extends ResourceCheckerConfigCache
{
    private \$debug;

    /**
     * @param string \$file  The absolute cache path
     * @param bool   \$debug Whether debugging is enabled or not
     */
    public function __construct(string \$file, bool \$debug)
    {
        \$this->debug = \$debug;

        \$checkers = [];
        if (true === \$this->debug) {
            \$checkers = [new SelfCheckingResourceChecker()];
        }

        parent::__construct(\$file, \$checkers);
    }

    /**
     * Checks if the cache is still fresh.
     *
     * This implementation always returns true when debug is off and the
     * cache file exists.
     *
     * @return bool true if the cache is fresh, false otherwise
     */
    public function isFresh()
    {
        if (!\$this->debug && is_file(\$this->getPath())) {
            return true;
        }

        return parent::isFresh();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/ConfigCache.php";
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

namespace Symfony\\Component\\Config;

use Symfony\\Component\\Config\\Resource\\SelfCheckingResourceChecker;

/**
 * ConfigCache caches arbitrary content in files on disk.
 *
 * When in debug mode, those metadata resources that implement
 * \\Symfony\\Component\\Config\\Resource\\SelfCheckingResourceInterface will
 * be used to check cache freshness.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Matthias Pigulla <mp@webfactory.de>
 */
class ConfigCache extends ResourceCheckerConfigCache
{
    private \$debug;

    /**
     * @param string \$file  The absolute cache path
     * @param bool   \$debug Whether debugging is enabled or not
     */
    public function __construct(string \$file, bool \$debug)
    {
        \$this->debug = \$debug;

        \$checkers = [];
        if (true === \$this->debug) {
            \$checkers = [new SelfCheckingResourceChecker()];
        }

        parent::__construct(\$file, \$checkers);
    }

    /**
     * Checks if the cache is still fresh.
     *
     * This implementation always returns true when debug is off and the
     * cache file exists.
     *
     * @return bool true if the cache is fresh, false otherwise
     */
    public function isFresh()
    {
        if (!\$this->debug && is_file(\$this->getPath())) {
            return true;
        }

        return parent::isFresh();
    }
}
", "vendor/symfony/config/ConfigCache.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/ConfigCache.php");
    }
}
