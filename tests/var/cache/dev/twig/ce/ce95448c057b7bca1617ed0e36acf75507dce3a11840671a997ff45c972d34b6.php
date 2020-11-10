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

/* vendor/symfony/http-foundation/Session/Storage/Handler/StrictSessionHandler.php */
class __TwigTemplate_63292c02e7c1493d8f22e7a43933317263ff981f9727f2a2400a404ce1b48b67 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/Handler/StrictSessionHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/Handler/StrictSessionHandler.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler;

/**
 * Adds basic `SessionUpdateTimestampHandlerInterface` behaviors to another `SessionHandlerInterface`.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class StrictSessionHandler extends AbstractSessionHandler
{
    private \$handler;
    private \$doDestroy;

    public function __construct(\\SessionHandlerInterface \$handler)
    {
        if (\$handler instanceof \\SessionUpdateTimestampHandlerInterface) {
            throw new \\LogicException(sprintf('\"%s\" is already an instance of \"SessionUpdateTimestampHandlerInterface\", you cannot wrap it with \"%s\".', \\get_class(\$handler), self::class));
        }

        \$this->handler = \$handler;
    }

    /**
     * {@inheritdoc}
     */
    public function open(\$savePath, \$sessionName)
    {
        parent::open(\$savePath, \$sessionName);

        return \$this->handler->open(\$savePath, \$sessionName);
    }

    /**
     * {@inheritdoc}
     */
    protected function doRead(\$sessionId)
    {
        return \$this->handler->read(\$sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function updateTimestamp(\$sessionId, \$data)
    {
        return \$this->write(\$sessionId, \$data);
    }

    /**
     * {@inheritdoc}
     */
    protected function doWrite(\$sessionId, \$data)
    {
        return \$this->handler->write(\$sessionId, \$data);
    }

    /**
     * {@inheritdoc}
     */
    public function destroy(\$sessionId)
    {
        \$this->doDestroy = true;
        \$destroyed = parent::destroy(\$sessionId);

        return \$this->doDestroy ? \$this->doDestroy(\$sessionId) : \$destroyed;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDestroy(\$sessionId)
    {
        \$this->doDestroy = false;

        return \$this->handler->destroy(\$sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        return \$this->handler->close();
    }

    /**
     * @return bool
     */
    public function gc(\$maxlifetime)
    {
        return \$this->handler->gc(\$maxlifetime);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Session/Storage/Handler/StrictSessionHandler.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler;

/**
 * Adds basic `SessionUpdateTimestampHandlerInterface` behaviors to another `SessionHandlerInterface`.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class StrictSessionHandler extends AbstractSessionHandler
{
    private \$handler;
    private \$doDestroy;

    public function __construct(\\SessionHandlerInterface \$handler)
    {
        if (\$handler instanceof \\SessionUpdateTimestampHandlerInterface) {
            throw new \\LogicException(sprintf('\"%s\" is already an instance of \"SessionUpdateTimestampHandlerInterface\", you cannot wrap it with \"%s\".', \\get_class(\$handler), self::class));
        }

        \$this->handler = \$handler;
    }

    /**
     * {@inheritdoc}
     */
    public function open(\$savePath, \$sessionName)
    {
        parent::open(\$savePath, \$sessionName);

        return \$this->handler->open(\$savePath, \$sessionName);
    }

    /**
     * {@inheritdoc}
     */
    protected function doRead(\$sessionId)
    {
        return \$this->handler->read(\$sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function updateTimestamp(\$sessionId, \$data)
    {
        return \$this->write(\$sessionId, \$data);
    }

    /**
     * {@inheritdoc}
     */
    protected function doWrite(\$sessionId, \$data)
    {
        return \$this->handler->write(\$sessionId, \$data);
    }

    /**
     * {@inheritdoc}
     */
    public function destroy(\$sessionId)
    {
        \$this->doDestroy = true;
        \$destroyed = parent::destroy(\$sessionId);

        return \$this->doDestroy ? \$this->doDestroy(\$sessionId) : \$destroyed;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDestroy(\$sessionId)
    {
        \$this->doDestroy = false;

        return \$this->handler->destroy(\$sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        return \$this->handler->close();
    }

    /**
     * @return bool
     */
    public function gc(\$maxlifetime)
    {
        return \$this->handler->gc(\$maxlifetime);
    }
}
", "vendor/symfony/http-foundation/Session/Storage/Handler/StrictSessionHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Session/Storage/Handler/StrictSessionHandler.php");
    }
}
