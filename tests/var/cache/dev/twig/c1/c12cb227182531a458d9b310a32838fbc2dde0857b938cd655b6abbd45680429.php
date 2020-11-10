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

/* vendor/symfony/http-kernel/CacheWarmer/CacheWarmer.php */
class __TwigTemplate_e4093b94d95783c8a0baf2dec00d6e597a758614cb4776a7e39a2524095d87ae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/CacheWarmer/CacheWarmer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/CacheWarmer/CacheWarmer.php"));

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

namespace Symfony\\Component\\HttpKernel\\CacheWarmer;

/**
 * Abstract cache warmer that knows how to write a file to the cache.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class CacheWarmer implements CacheWarmerInterface
{
    protected function writeCacheFile(\$file, \$content)
    {
        \$tmpFile = @tempnam(\\dirname(\$file), basename(\$file));
        if (false !== @file_put_contents(\$tmpFile, \$content) && @rename(\$tmpFile, \$file)) {
            @chmod(\$file, 0666 & ~umask());

            return;
        }

        throw new \\RuntimeException(sprintf('Failed to write cache file \"%s\".', \$file));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/CacheWarmer/CacheWarmer.php";
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

namespace Symfony\\Component\\HttpKernel\\CacheWarmer;

/**
 * Abstract cache warmer that knows how to write a file to the cache.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class CacheWarmer implements CacheWarmerInterface
{
    protected function writeCacheFile(\$file, \$content)
    {
        \$tmpFile = @tempnam(\\dirname(\$file), basename(\$file));
        if (false !== @file_put_contents(\$tmpFile, \$content) && @rename(\$tmpFile, \$file)) {
            @chmod(\$file, 0666 & ~umask());

            return;
        }

        throw new \\RuntimeException(sprintf('Failed to write cache file \"%s\".', \$file));
    }
}
", "vendor/symfony/http-kernel/CacheWarmer/CacheWarmer.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/CacheWarmer/CacheWarmer.php");
    }
}
