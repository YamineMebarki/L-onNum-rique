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

/* vendor/twig/twig/src/Loader/ChainLoader.php */
class __TwigTemplate_3faaf03b2dac1c5a9e9888cc209d53e9bb74d700af06546e65a43e6e3a9d2415 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Loader/ChainLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/twig/twig/src/Loader/ChainLoader.php"));

        // line 1
        echo "<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Loader;

use Twig\\Error\\LoaderError;

/**
 * Loads templates from other loaders.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class ChainLoader implements LoaderInterface, ExistsLoaderInterface, SourceContextLoaderInterface
{
    private \$hasSourceCache = [];
    private \$loaders = [];

    /**
     * @param LoaderInterface[] \$loaders
     */
    public function __construct(array \$loaders = [])
    {
        foreach (\$loaders as \$loader) {
            \$this->addLoader(\$loader);
        }
    }

    public function addLoader(LoaderInterface \$loader)
    {
        \$this->loaders[] = \$loader;
        \$this->hasSourceCache = [];
    }

    /**
     * @return LoaderInterface[]
     */
    public function getLoaders()
    {
        return \$this->loaders;
    }

    public function getSourceContext(\$name)
    {
        \$exceptions = [];
        foreach (\$this->loaders as \$loader) {
            if (!\$loader->exists(\$name)) {
                continue;
            }

            try {
                return \$loader->getSourceContext(\$name);
            } catch (LoaderError \$e) {
                \$exceptions[] = \$e->getMessage();
            }
        }

        throw new LoaderError(sprintf('Template \"%s\" is not defined%s.', \$name, \$exceptions ? ' ('.implode(', ', \$exceptions).')' : ''));
    }

    public function exists(\$name)
    {
        if (isset(\$this->hasSourceCache[\$name])) {
            return \$this->hasSourceCache[\$name];
        }

        foreach (\$this->loaders as \$loader) {
            if (\$loader->exists(\$name)) {
                return \$this->hasSourceCache[\$name] = true;
            }
        }

        return \$this->hasSourceCache[\$name] = false;
    }

    public function getCacheKey(\$name)
    {
        \$exceptions = [];
        foreach (\$this->loaders as \$loader) {
            if (!\$loader->exists(\$name)) {
                continue;
            }

            try {
                return \$loader->getCacheKey(\$name);
            } catch (LoaderError \$e) {
                \$exceptions[] = \\get_class(\$loader).': '.\$e->getMessage();
            }
        }

        throw new LoaderError(sprintf('Template \"%s\" is not defined%s.', \$name, \$exceptions ? ' ('.implode(', ', \$exceptions).')' : ''));
    }

    public function isFresh(\$name, \$time)
    {
        \$exceptions = [];
        foreach (\$this->loaders as \$loader) {
            if (!\$loader->exists(\$name)) {
                continue;
            }

            try {
                return \$loader->isFresh(\$name, \$time);
            } catch (LoaderError \$e) {
                \$exceptions[] = \\get_class(\$loader).': '.\$e->getMessage();
            }
        }

        throw new LoaderError(sprintf('Template \"%s\" is not defined%s.', \$name, \$exceptions ? ' ('.implode(', ', \$exceptions).')' : ''));
    }
}

class_alias('Twig\\Loader\\ChainLoader', 'Twig_Loader_Chain');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/twig/twig/src/Loader/ChainLoader.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\\Loader;

use Twig\\Error\\LoaderError;

/**
 * Loads templates from other loaders.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class ChainLoader implements LoaderInterface, ExistsLoaderInterface, SourceContextLoaderInterface
{
    private \$hasSourceCache = [];
    private \$loaders = [];

    /**
     * @param LoaderInterface[] \$loaders
     */
    public function __construct(array \$loaders = [])
    {
        foreach (\$loaders as \$loader) {
            \$this->addLoader(\$loader);
        }
    }

    public function addLoader(LoaderInterface \$loader)
    {
        \$this->loaders[] = \$loader;
        \$this->hasSourceCache = [];
    }

    /**
     * @return LoaderInterface[]
     */
    public function getLoaders()
    {
        return \$this->loaders;
    }

    public function getSourceContext(\$name)
    {
        \$exceptions = [];
        foreach (\$this->loaders as \$loader) {
            if (!\$loader->exists(\$name)) {
                continue;
            }

            try {
                return \$loader->getSourceContext(\$name);
            } catch (LoaderError \$e) {
                \$exceptions[] = \$e->getMessage();
            }
        }

        throw new LoaderError(sprintf('Template \"%s\" is not defined%s.', \$name, \$exceptions ? ' ('.implode(', ', \$exceptions).')' : ''));
    }

    public function exists(\$name)
    {
        if (isset(\$this->hasSourceCache[\$name])) {
            return \$this->hasSourceCache[\$name];
        }

        foreach (\$this->loaders as \$loader) {
            if (\$loader->exists(\$name)) {
                return \$this->hasSourceCache[\$name] = true;
            }
        }

        return \$this->hasSourceCache[\$name] = false;
    }

    public function getCacheKey(\$name)
    {
        \$exceptions = [];
        foreach (\$this->loaders as \$loader) {
            if (!\$loader->exists(\$name)) {
                continue;
            }

            try {
                return \$loader->getCacheKey(\$name);
            } catch (LoaderError \$e) {
                \$exceptions[] = \\get_class(\$loader).': '.\$e->getMessage();
            }
        }

        throw new LoaderError(sprintf('Template \"%s\" is not defined%s.', \$name, \$exceptions ? ' ('.implode(', ', \$exceptions).')' : ''));
    }

    public function isFresh(\$name, \$time)
    {
        \$exceptions = [];
        foreach (\$this->loaders as \$loader) {
            if (!\$loader->exists(\$name)) {
                continue;
            }

            try {
                return \$loader->isFresh(\$name, \$time);
            } catch (LoaderError \$e) {
                \$exceptions[] = \\get_class(\$loader).': '.\$e->getMessage();
            }
        }

        throw new LoaderError(sprintf('Template \"%s\" is not defined%s.', \$name, \$exceptions ? ' ('.implode(', ', \$exceptions).')' : ''));
    }
}

class_alias('Twig\\Loader\\ChainLoader', 'Twig_Loader_Chain');
", "vendor/twig/twig/src/Loader/ChainLoader.php", "/var/www/public/DevLaon/templates/vendor/twig/twig/src/Loader/ChainLoader.php");
    }
}
