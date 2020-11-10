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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php */
class __TwigTemplate_9c35715d9e8b2355e76a5fa4a0d9e2571f9e7553d00bcd0484f86b5699de5509 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php"));

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

namespace Doctrine\\ORM\\Tools;

use Doctrine\\ORM\\Event\\LoadClassMetadataEventArgs;

/**
 * Mechanism to programmatically attach entity listeners.
 *
 * @author Fabio B. SIlva <fabio.bat.silva@gmail.com>
 *
 * @since 2.5
 */
class AttachEntityListenersListener
{
    /**
     * @var array[]
     */
    private \$entityListeners = [];

    /**
     * Adds a entity listener for a specific entity.
     *
     * @param string      \$entityClass      The entity to attach the listener.
     * @param string      \$listenerClass    The listener class.
     * @param string      \$eventName        The entity lifecycle event.
     * @param string|null \$listenerCallback The listener callback method or NULL to use \$eventName.
     *
     * @return void
     */
    public function addEntityListener(\$entityClass, \$listenerClass, \$eventName, \$listenerCallback = null)
    {
        \$this->entityListeners[ltrim(\$entityClass, '\\\\')][] = [
            'event'  => \$eventName,
            'class'  => \$listenerClass,
            'method' => \$listenerCallback ?: \$eventName
        ];
    }

    /**
     * Processes event and attach the entity listener.
     *
     * @param \\Doctrine\\ORM\\Event\\LoadClassMetadataEventArgs \$event
     *
     * @return void
     */
    public function loadClassMetadata(LoadClassMetadataEventArgs \$event)
    {
        /** @var \$metadata \\Doctrine\\ORM\\Mapping\\ClassMetadata */
        \$metadata = \$event->getClassMetadata();

        if ( ! isset(\$this->entityListeners[\$metadata->name])) {
            return;
        }

        foreach (\$this->entityListeners[\$metadata->name] as \$listener) {
            \$metadata->addEntityListener(\$listener['event'], \$listener['class'], \$listener['method']);
        }

        unset(\$this->entityListeners[\$metadata->name]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php";
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

namespace Doctrine\\ORM\\Tools;

use Doctrine\\ORM\\Event\\LoadClassMetadataEventArgs;

/**
 * Mechanism to programmatically attach entity listeners.
 *
 * @author Fabio B. SIlva <fabio.bat.silva@gmail.com>
 *
 * @since 2.5
 */
class AttachEntityListenersListener
{
    /**
     * @var array[]
     */
    private \$entityListeners = [];

    /**
     * Adds a entity listener for a specific entity.
     *
     * @param string      \$entityClass      The entity to attach the listener.
     * @param string      \$listenerClass    The listener class.
     * @param string      \$eventName        The entity lifecycle event.
     * @param string|null \$listenerCallback The listener callback method or NULL to use \$eventName.
     *
     * @return void
     */
    public function addEntityListener(\$entityClass, \$listenerClass, \$eventName, \$listenerCallback = null)
    {
        \$this->entityListeners[ltrim(\$entityClass, '\\\\')][] = [
            'event'  => \$eventName,
            'class'  => \$listenerClass,
            'method' => \$listenerCallback ?: \$eventName
        ];
    }

    /**
     * Processes event and attach the entity listener.
     *
     * @param \\Doctrine\\ORM\\Event\\LoadClassMetadataEventArgs \$event
     *
     * @return void
     */
    public function loadClassMetadata(LoadClassMetadataEventArgs \$event)
    {
        /** @var \$metadata \\Doctrine\\ORM\\Mapping\\ClassMetadata */
        \$metadata = \$event->getClassMetadata();

        if ( ! isset(\$this->entityListeners[\$metadata->name])) {
            return;
        }

        foreach (\$this->entityListeners[\$metadata->name] as \$listener) {
            \$metadata->addEntityListener(\$listener['event'], \$listener['class'], \$listener['method']);
        }

        unset(\$this->entityListeners[\$metadata->name]);
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/AttachEntityListenersListener.php");
    }
}
