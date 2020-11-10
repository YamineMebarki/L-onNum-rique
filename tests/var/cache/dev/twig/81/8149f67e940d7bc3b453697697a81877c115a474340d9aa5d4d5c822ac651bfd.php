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

/* vendor/symfony/http-foundation/Session/Storage/Handler/MigratingSessionHandler.php */
class __TwigTemplate_71677bcd818cabfaee7ab59a6890aae74e4b46fa3c092aacf20192d16f76b45a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/Handler/MigratingSessionHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/Handler/MigratingSessionHandler.php"));

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
 * Migrating session handler for migrating from one handler to another. It reads
 * from the current handler and writes both the current and new ones.
 *
 * It ignores errors from the new handler.
 *
 * @author Ross Motley <ross.motley@amara.com>
 * @author Oliver Radwell <oliver.radwell@amara.com>
 */
class MigratingSessionHandler implements \\SessionHandlerInterface, \\SessionUpdateTimestampHandlerInterface
{
    private \$currentHandler;
    private \$writeOnlyHandler;

    public function __construct(\\SessionHandlerInterface \$currentHandler, \\SessionHandlerInterface \$writeOnlyHandler)
    {
        if (!\$currentHandler instanceof \\SessionUpdateTimestampHandlerInterface) {
            \$currentHandler = new StrictSessionHandler(\$currentHandler);
        }
        if (!\$writeOnlyHandler instanceof \\SessionUpdateTimestampHandlerInterface) {
            \$writeOnlyHandler = new StrictSessionHandler(\$writeOnlyHandler);
        }

        \$this->currentHandler = \$currentHandler;
        \$this->writeOnlyHandler = \$writeOnlyHandler;
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        \$result = \$this->currentHandler->close();
        \$this->writeOnlyHandler->close();

        return \$result;
    }

    /**
     * {@inheritdoc}
     */
    public function destroy(\$sessionId)
    {
        \$result = \$this->currentHandler->destroy(\$sessionId);
        \$this->writeOnlyHandler->destroy(\$sessionId);

        return \$result;
    }

    /**
     * @return bool
     */
    public function gc(\$maxlifetime)
    {
        \$result = \$this->currentHandler->gc(\$maxlifetime);
        \$this->writeOnlyHandler->gc(\$maxlifetime);

        return \$result;
    }

    /**
     * {@inheritdoc}
     */
    public function open(\$savePath, \$sessionName)
    {
        \$result = \$this->currentHandler->open(\$savePath, \$sessionName);
        \$this->writeOnlyHandler->open(\$savePath, \$sessionName);

        return \$result;
    }

    /**
     * {@inheritdoc}
     */
    public function read(\$sessionId)
    {
        // No reading from new handler until switch-over
        return \$this->currentHandler->read(\$sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function write(\$sessionId, \$sessionData)
    {
        \$result = \$this->currentHandler->write(\$sessionId, \$sessionData);
        \$this->writeOnlyHandler->write(\$sessionId, \$sessionData);

        return \$result;
    }

    /**
     * {@inheritdoc}
     */
    public function validateId(\$sessionId)
    {
        // No reading from new handler until switch-over
        return \$this->currentHandler->validateId(\$sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function updateTimestamp(\$sessionId, \$sessionData)
    {
        \$result = \$this->currentHandler->updateTimestamp(\$sessionId, \$sessionData);
        \$this->writeOnlyHandler->updateTimestamp(\$sessionId, \$sessionData);

        return \$result;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Session/Storage/Handler/MigratingSessionHandler.php";
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
 * Migrating session handler for migrating from one handler to another. It reads
 * from the current handler and writes both the current and new ones.
 *
 * It ignores errors from the new handler.
 *
 * @author Ross Motley <ross.motley@amara.com>
 * @author Oliver Radwell <oliver.radwell@amara.com>
 */
class MigratingSessionHandler implements \\SessionHandlerInterface, \\SessionUpdateTimestampHandlerInterface
{
    private \$currentHandler;
    private \$writeOnlyHandler;

    public function __construct(\\SessionHandlerInterface \$currentHandler, \\SessionHandlerInterface \$writeOnlyHandler)
    {
        if (!\$currentHandler instanceof \\SessionUpdateTimestampHandlerInterface) {
            \$currentHandler = new StrictSessionHandler(\$currentHandler);
        }
        if (!\$writeOnlyHandler instanceof \\SessionUpdateTimestampHandlerInterface) {
            \$writeOnlyHandler = new StrictSessionHandler(\$writeOnlyHandler);
        }

        \$this->currentHandler = \$currentHandler;
        \$this->writeOnlyHandler = \$writeOnlyHandler;
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        \$result = \$this->currentHandler->close();
        \$this->writeOnlyHandler->close();

        return \$result;
    }

    /**
     * {@inheritdoc}
     */
    public function destroy(\$sessionId)
    {
        \$result = \$this->currentHandler->destroy(\$sessionId);
        \$this->writeOnlyHandler->destroy(\$sessionId);

        return \$result;
    }

    /**
     * @return bool
     */
    public function gc(\$maxlifetime)
    {
        \$result = \$this->currentHandler->gc(\$maxlifetime);
        \$this->writeOnlyHandler->gc(\$maxlifetime);

        return \$result;
    }

    /**
     * {@inheritdoc}
     */
    public function open(\$savePath, \$sessionName)
    {
        \$result = \$this->currentHandler->open(\$savePath, \$sessionName);
        \$this->writeOnlyHandler->open(\$savePath, \$sessionName);

        return \$result;
    }

    /**
     * {@inheritdoc}
     */
    public function read(\$sessionId)
    {
        // No reading from new handler until switch-over
        return \$this->currentHandler->read(\$sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function write(\$sessionId, \$sessionData)
    {
        \$result = \$this->currentHandler->write(\$sessionId, \$sessionData);
        \$this->writeOnlyHandler->write(\$sessionId, \$sessionData);

        return \$result;
    }

    /**
     * {@inheritdoc}
     */
    public function validateId(\$sessionId)
    {
        // No reading from new handler until switch-over
        return \$this->currentHandler->validateId(\$sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function updateTimestamp(\$sessionId, \$sessionData)
    {
        \$result = \$this->currentHandler->updateTimestamp(\$sessionId, \$sessionData);
        \$this->writeOnlyHandler->updateTimestamp(\$sessionId, \$sessionData);

        return \$result;
    }
}
", "vendor/symfony/http-foundation/Session/Storage/Handler/MigratingSessionHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Session/Storage/Handler/MigratingSessionHandler.php");
    }
}
