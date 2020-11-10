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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Event/ListenersInvoker.php */
class __TwigTemplate_78921db27b5d5e8dbd1ba42bd73e1fd006d54a914cf36924d31b869a68092422 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Event/ListenersInvoker.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Event/ListenersInvoker.php"));

        // line 1
        echo "<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Event;

use Doctrine\\Common\\EventArgs;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\ClassMetadata;

/**
 * A method invoker based on entity lifecycle.
 *
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 * @since   2.4
 */
class ListenersInvoker
{
    const INVOKE_NONE       = 0;
    const INVOKE_LISTENERS  = 1;
    const INVOKE_CALLBACKS  = 2;
    const INVOKE_MANAGER    = 4;

    /**
     * @var \\Doctrine\\ORM\\Mapping\\EntityListenerResolver The Entity listener resolver.
     */
    private \$resolver;

    /**
     * The EventManager used for dispatching events.
     *
     * @var \\Doctrine\\Common\\EventManager
     */
    private \$eventManager;

    /**
     * Initializes a new ListenersInvoker instance.
     *
     * @param EntityManagerInterface \$em
     */
    public function __construct(EntityManagerInterface \$em)
    {
        \$this->eventManager = \$em->getEventManager();
        \$this->resolver     = \$em->getConfiguration()->getEntityListenerResolver();
    }

    /**
     * Get the subscribed event systems
     *
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata \$metadata  The entity metadata.
     * @param string                              \$eventName The entity lifecycle event.
     *
     * @return integer Bitmask of subscribed event systems.
     */
    public function getSubscribedSystems(ClassMetadata \$metadata, \$eventName)
    {
        \$invoke = self::INVOKE_NONE;

        if (isset(\$metadata->lifecycleCallbacks[\$eventName])) {
            \$invoke |= self::INVOKE_CALLBACKS;
        }

        if (isset(\$metadata->entityListeners[\$eventName])) {
            \$invoke |= self::INVOKE_LISTENERS;
        }

        if (\$this->eventManager->hasListeners(\$eventName)) {
            \$invoke |= self::INVOKE_MANAGER;
        }

        return \$invoke;
    }

    /**
     * Dispatches the lifecycle event of the given entity.
     *
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata \$metadata  The entity metadata.
     * @param string                              \$eventName The entity lifecycle event.
     * @param object                              \$entity    The Entity on which the event occurred.
     * @param \\Doctrine\\Common\\EventArgs          \$event     The Event args.
     * @param integer                             \$invoke    Bitmask to invoke listeners.
     */
    public function invoke(ClassMetadata \$metadata, \$eventName, \$entity, EventArgs \$event, \$invoke)
    {
        if (\$invoke & self::INVOKE_CALLBACKS) {
            foreach (\$metadata->lifecycleCallbacks[\$eventName] as \$callback) {
                \$entity->\$callback(\$event);
            }
        }

        if (\$invoke & self::INVOKE_LISTENERS) {
            foreach (\$metadata->entityListeners[\$eventName] as \$listener) {
                \$class      = \$listener['class'];
                \$method     = \$listener['method'];
                \$instance   = \$this->resolver->resolve(\$class);

                \$instance->\$method(\$entity, \$event);
            }
        }

        if (\$invoke & self::INVOKE_MANAGER) {
            \$this->eventManager->dispatchEvent(\$eventName, \$event);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Event/ListenersInvoker.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\\ORM\\Event;

use Doctrine\\Common\\EventArgs;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\ClassMetadata;

/**
 * A method invoker based on entity lifecycle.
 *
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 * @since   2.4
 */
class ListenersInvoker
{
    const INVOKE_NONE       = 0;
    const INVOKE_LISTENERS  = 1;
    const INVOKE_CALLBACKS  = 2;
    const INVOKE_MANAGER    = 4;

    /**
     * @var \\Doctrine\\ORM\\Mapping\\EntityListenerResolver The Entity listener resolver.
     */
    private \$resolver;

    /**
     * The EventManager used for dispatching events.
     *
     * @var \\Doctrine\\Common\\EventManager
     */
    private \$eventManager;

    /**
     * Initializes a new ListenersInvoker instance.
     *
     * @param EntityManagerInterface \$em
     */
    public function __construct(EntityManagerInterface \$em)
    {
        \$this->eventManager = \$em->getEventManager();
        \$this->resolver     = \$em->getConfiguration()->getEntityListenerResolver();
    }

    /**
     * Get the subscribed event systems
     *
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata \$metadata  The entity metadata.
     * @param string                              \$eventName The entity lifecycle event.
     *
     * @return integer Bitmask of subscribed event systems.
     */
    public function getSubscribedSystems(ClassMetadata \$metadata, \$eventName)
    {
        \$invoke = self::INVOKE_NONE;

        if (isset(\$metadata->lifecycleCallbacks[\$eventName])) {
            \$invoke |= self::INVOKE_CALLBACKS;
        }

        if (isset(\$metadata->entityListeners[\$eventName])) {
            \$invoke |= self::INVOKE_LISTENERS;
        }

        if (\$this->eventManager->hasListeners(\$eventName)) {
            \$invoke |= self::INVOKE_MANAGER;
        }

        return \$invoke;
    }

    /**
     * Dispatches the lifecycle event of the given entity.
     *
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadata \$metadata  The entity metadata.
     * @param string                              \$eventName The entity lifecycle event.
     * @param object                              \$entity    The Entity on which the event occurred.
     * @param \\Doctrine\\Common\\EventArgs          \$event     The Event args.
     * @param integer                             \$invoke    Bitmask to invoke listeners.
     */
    public function invoke(ClassMetadata \$metadata, \$eventName, \$entity, EventArgs \$event, \$invoke)
    {
        if (\$invoke & self::INVOKE_CALLBACKS) {
            foreach (\$metadata->lifecycleCallbacks[\$eventName] as \$callback) {
                \$entity->\$callback(\$event);
            }
        }

        if (\$invoke & self::INVOKE_LISTENERS) {
            foreach (\$metadata->entityListeners[\$eventName] as \$listener) {
                \$class      = \$listener['class'];
                \$method     = \$listener['method'];
                \$instance   = \$this->resolver->resolve(\$class);

                \$instance->\$method(\$entity, \$event);
            }
        }

        if (\$invoke & self::INVOKE_MANAGER) {
            \$this->eventManager->dispatchEvent(\$eventName, \$event);
        }
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Event/ListenersInvoker.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Event/ListenersInvoker.php");
    }
}
