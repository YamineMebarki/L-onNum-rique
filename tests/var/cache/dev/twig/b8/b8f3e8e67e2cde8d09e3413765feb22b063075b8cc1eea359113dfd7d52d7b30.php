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

/* vendor/symfony/cache/Traits/DoctrineTrait.php */
class __TwigTemplate_3c4443065f09a3e81e7b8e99fefdaccb2d418b8c494deccf28bf6e3dfbcff7cf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Traits/DoctrineTrait.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Traits/DoctrineTrait.php"));

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
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
trait DoctrineTrait
{
    private \$provider;

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        parent::reset();
        \$this->provider->setNamespace(\$this->provider->getNamespace());
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(array \$ids)
    {
        \$unserializeCallbackHandler = ini_set('unserialize_callback_func', parent::class.'::handleUnserializeCallback');
        try {
            return \$this->provider->fetchMultiple(\$ids);
        } catch (\\Error \$e) {
            \$trace = \$e->getTrace();

            if (isset(\$trace[0]['function']) && !isset(\$trace[0]['class'])) {
                switch (\$trace[0]['function']) {
                    case 'unserialize':
                    case 'apcu_fetch':
                    case 'apc_fetch':
                        throw new \\ErrorException(\$e->getMessage(), \$e->getCode(), E_ERROR, \$e->getFile(), \$e->getLine());
                }
            }

            throw \$e;
        } finally {
            ini_set('unserialize_callback_func', \$unserializeCallbackHandler);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doHave(\$id)
    {
        return \$this->provider->contains(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doClear(\$namespace)
    {
        \$namespace = \$this->provider->getNamespace();

        return isset(\$namespace[0])
            ? \$this->provider->deleteAll()
            : \$this->provider->flushAll();
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(array \$ids)
    {
        \$ok = true;
        foreach (\$ids as \$id) {
            \$ok = \$this->provider->delete(\$id) && \$ok;
        }

        return \$ok;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array \$values, \$lifetime)
    {
        return \$this->provider->saveMultiple(\$values, \$lifetime);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Traits/DoctrineTrait.php";
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
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
trait DoctrineTrait
{
    private \$provider;

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        parent::reset();
        \$this->provider->setNamespace(\$this->provider->getNamespace());
    }

    /**
     * {@inheritdoc}
     */
    protected function doFetch(array \$ids)
    {
        \$unserializeCallbackHandler = ini_set('unserialize_callback_func', parent::class.'::handleUnserializeCallback');
        try {
            return \$this->provider->fetchMultiple(\$ids);
        } catch (\\Error \$e) {
            \$trace = \$e->getTrace();

            if (isset(\$trace[0]['function']) && !isset(\$trace[0]['class'])) {
                switch (\$trace[0]['function']) {
                    case 'unserialize':
                    case 'apcu_fetch':
                    case 'apc_fetch':
                        throw new \\ErrorException(\$e->getMessage(), \$e->getCode(), E_ERROR, \$e->getFile(), \$e->getLine());
                }
            }

            throw \$e;
        } finally {
            ini_set('unserialize_callback_func', \$unserializeCallbackHandler);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doHave(\$id)
    {
        return \$this->provider->contains(\$id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doClear(\$namespace)
    {
        \$namespace = \$this->provider->getNamespace();

        return isset(\$namespace[0])
            ? \$this->provider->deleteAll()
            : \$this->provider->flushAll();
    }

    /**
     * {@inheritdoc}
     */
    protected function doDelete(array \$ids)
    {
        \$ok = true;
        foreach (\$ids as \$id) {
            \$ok = \$this->provider->delete(\$id) && \$ok;
        }

        return \$ok;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array \$values, \$lifetime)
    {
        return \$this->provider->saveMultiple(\$values, \$lifetime);
    }
}
", "vendor/symfony/cache/Traits/DoctrineTrait.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Traits/DoctrineTrait.php");
    }
}
