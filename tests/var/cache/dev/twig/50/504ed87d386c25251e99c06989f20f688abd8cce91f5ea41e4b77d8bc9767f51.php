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

/* vendor/symfony/http-foundation/Session/Storage/Proxy/SessionHandlerProxy.php */
class __TwigTemplate_a91bd9ff00882287197c1afdeb05775a4d0704babda97651b6fff9b53614347e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/Proxy/SessionHandlerProxy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/Proxy/SessionHandlerProxy.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy;

/**
 * @author Drak <drak@zikula.org>
 */
class SessionHandlerProxy extends AbstractProxy implements \\SessionHandlerInterface, \\SessionUpdateTimestampHandlerInterface
{
    protected \$handler;

    public function __construct(\\SessionHandlerInterface \$handler)
    {
        \$this->handler = \$handler;
        \$this->wrapper = (\$handler instanceof \\SessionHandler);
        \$this->saveHandlerName = \$this->wrapper ? ini_get('session.save_handler') : 'user';
    }

    /**
     * @return \\SessionHandlerInterface
     */
    public function getHandler()
    {
        return \$this->handler;
    }

    // \\SessionHandlerInterface

    /**
     * {@inheritdoc}
     */
    public function open(\$savePath, \$sessionName)
    {
        return (bool) \$this->handler->open(\$savePath, \$sessionName);
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        return (bool) \$this->handler->close();
    }

    /**
     * {@inheritdoc}
     */
    public function read(\$sessionId)
    {
        return (string) \$this->handler->read(\$sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function write(\$sessionId, \$data)
    {
        return (bool) \$this->handler->write(\$sessionId, \$data);
    }

    /**
     * {@inheritdoc}
     */
    public function destroy(\$sessionId)
    {
        return (bool) \$this->handler->destroy(\$sessionId);
    }

    /**
     * @return bool
     */
    public function gc(\$maxlifetime)
    {
        return (bool) \$this->handler->gc(\$maxlifetime);
    }

    /**
     * {@inheritdoc}
     */
    public function validateId(\$sessionId)
    {
        return !\$this->handler instanceof \\SessionUpdateTimestampHandlerInterface || \$this->handler->validateId(\$sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function updateTimestamp(\$sessionId, \$data)
    {
        return \$this->handler instanceof \\SessionUpdateTimestampHandlerInterface ? \$this->handler->updateTimestamp(\$sessionId, \$data) : \$this->write(\$sessionId, \$data);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Session/Storage/Proxy/SessionHandlerProxy.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy;

/**
 * @author Drak <drak@zikula.org>
 */
class SessionHandlerProxy extends AbstractProxy implements \\SessionHandlerInterface, \\SessionUpdateTimestampHandlerInterface
{
    protected \$handler;

    public function __construct(\\SessionHandlerInterface \$handler)
    {
        \$this->handler = \$handler;
        \$this->wrapper = (\$handler instanceof \\SessionHandler);
        \$this->saveHandlerName = \$this->wrapper ? ini_get('session.save_handler') : 'user';
    }

    /**
     * @return \\SessionHandlerInterface
     */
    public function getHandler()
    {
        return \$this->handler;
    }

    // \\SessionHandlerInterface

    /**
     * {@inheritdoc}
     */
    public function open(\$savePath, \$sessionName)
    {
        return (bool) \$this->handler->open(\$savePath, \$sessionName);
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        return (bool) \$this->handler->close();
    }

    /**
     * {@inheritdoc}
     */
    public function read(\$sessionId)
    {
        return (string) \$this->handler->read(\$sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function write(\$sessionId, \$data)
    {
        return (bool) \$this->handler->write(\$sessionId, \$data);
    }

    /**
     * {@inheritdoc}
     */
    public function destroy(\$sessionId)
    {
        return (bool) \$this->handler->destroy(\$sessionId);
    }

    /**
     * @return bool
     */
    public function gc(\$maxlifetime)
    {
        return (bool) \$this->handler->gc(\$maxlifetime);
    }

    /**
     * {@inheritdoc}
     */
    public function validateId(\$sessionId)
    {
        return !\$this->handler instanceof \\SessionUpdateTimestampHandlerInterface || \$this->handler->validateId(\$sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function updateTimestamp(\$sessionId, \$data)
    {
        return \$this->handler instanceof \\SessionUpdateTimestampHandlerInterface ? \$this->handler->updateTimestamp(\$sessionId, \$data) : \$this->write(\$sessionId, \$data);
    }
}
", "vendor/symfony/http-foundation/Session/Storage/Proxy/SessionHandlerProxy.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Session/Storage/Proxy/SessionHandlerProxy.php");
    }
}
