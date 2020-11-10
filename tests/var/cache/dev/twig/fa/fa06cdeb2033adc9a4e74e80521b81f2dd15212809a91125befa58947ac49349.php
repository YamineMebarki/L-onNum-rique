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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Internal/HydrationCompleteHandler.php */
class __TwigTemplate_665cda126529e3ee3cf0628d0c02885f38478f8058dcab5743b5ff5859d32755 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Internal/HydrationCompleteHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Internal/HydrationCompleteHandler.php"));

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

namespace Doctrine\\ORM\\Internal;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Event\\LifecycleEventArgs;
use Doctrine\\ORM\\Event\\ListenersInvoker;
use Doctrine\\ORM\\Events;
use Doctrine\\ORM\\Mapping\\ClassMetadata;

/**
 * Class, which can handle completion of hydration cycle and produce some of tasks.
 * In current implementation triggers deferred postLoad event.
 *
 * @author Artur Eshenbrener <strate@yandex.ru>
 * @since 2.5
 */
final class HydrationCompleteHandler
{
    /**
     * @var ListenersInvoker
     */
    private \$listenersInvoker;

    /**
     * @var EntityManagerInterface
     */
    private \$em;

    /**
     * @var array[]
     */
    private \$deferredPostLoadInvocations = [];

    /**
     * Constructor for this object
     *
     * @param ListenersInvoker \$listenersInvoker
     * @param EntityManagerInterface \$em
     */
    public function __construct(ListenersInvoker \$listenersInvoker, EntityManagerInterface \$em)
    {
        \$this->listenersInvoker = \$listenersInvoker;
        \$this->em               = \$em;
    }

    /**
     * Method schedules invoking of postLoad entity to the very end of current hydration cycle.
     *
     * @param ClassMetadata \$class
     * @param object        \$entity
     */
    public function deferPostLoadInvoking(ClassMetadata \$class, \$entity)
    {
        \$invoke = \$this->listenersInvoker->getSubscribedSystems(\$class, Events::postLoad);

        if (\$invoke === ListenersInvoker::INVOKE_NONE) {
            return;
        }

        \$this->deferredPostLoadInvocations[] = [\$class, \$invoke, \$entity];
    }

    /**
     * This method should me called after any hydration cycle completed.
     *
     * Method fires all deferred invocations of postLoad events
     */
    public function hydrationComplete()
    {
        \$toInvoke                          = \$this->deferredPostLoadInvocations;
        \$this->deferredPostLoadInvocations = [];

        foreach (\$toInvoke as \$classAndEntity) {
            list(\$class, \$invoke, \$entity) = \$classAndEntity;

            \$this->listenersInvoker->invoke(
                \$class,
                Events::postLoad,
                \$entity,
                new LifecycleEventArgs(\$entity, \$this->em),
                \$invoke
            );
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Internal/HydrationCompleteHandler.php";
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

namespace Doctrine\\ORM\\Internal;

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Event\\LifecycleEventArgs;
use Doctrine\\ORM\\Event\\ListenersInvoker;
use Doctrine\\ORM\\Events;
use Doctrine\\ORM\\Mapping\\ClassMetadata;

/**
 * Class, which can handle completion of hydration cycle and produce some of tasks.
 * In current implementation triggers deferred postLoad event.
 *
 * @author Artur Eshenbrener <strate@yandex.ru>
 * @since 2.5
 */
final class HydrationCompleteHandler
{
    /**
     * @var ListenersInvoker
     */
    private \$listenersInvoker;

    /**
     * @var EntityManagerInterface
     */
    private \$em;

    /**
     * @var array[]
     */
    private \$deferredPostLoadInvocations = [];

    /**
     * Constructor for this object
     *
     * @param ListenersInvoker \$listenersInvoker
     * @param EntityManagerInterface \$em
     */
    public function __construct(ListenersInvoker \$listenersInvoker, EntityManagerInterface \$em)
    {
        \$this->listenersInvoker = \$listenersInvoker;
        \$this->em               = \$em;
    }

    /**
     * Method schedules invoking of postLoad entity to the very end of current hydration cycle.
     *
     * @param ClassMetadata \$class
     * @param object        \$entity
     */
    public function deferPostLoadInvoking(ClassMetadata \$class, \$entity)
    {
        \$invoke = \$this->listenersInvoker->getSubscribedSystems(\$class, Events::postLoad);

        if (\$invoke === ListenersInvoker::INVOKE_NONE) {
            return;
        }

        \$this->deferredPostLoadInvocations[] = [\$class, \$invoke, \$entity];
    }

    /**
     * This method should me called after any hydration cycle completed.
     *
     * Method fires all deferred invocations of postLoad events
     */
    public function hydrationComplete()
    {
        \$toInvoke                          = \$this->deferredPostLoadInvocations;
        \$this->deferredPostLoadInvocations = [];

        foreach (\$toInvoke as \$classAndEntity) {
            list(\$class, \$invoke, \$entity) = \$classAndEntity;

            \$this->listenersInvoker->invoke(
                \$class,
                Events::postLoad,
                \$entity,
                new LifecycleEventArgs(\$entity, \$this->em),
                \$invoke
            );
        }
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Internal/HydrationCompleteHandler.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Internal/HydrationCompleteHandler.php");
    }
}
