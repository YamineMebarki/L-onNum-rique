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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Tools/ResolveTargetEntityListener.php */
class __TwigTemplate_546acb4d5db4e104e41155497e44b423673aaeb490b80609ab44868b541d7268 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/ResolveTargetEntityListener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/ResolveTargetEntityListener.php"));

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
use Doctrine\\ORM\\Event\\OnClassMetadataNotFoundEventArgs;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\Common\\EventSubscriber;
use Doctrine\\ORM\\Events;

/**
 * ResolveTargetEntityListener
 *
 * Mechanism to overwrite interfaces or classes specified as association
 * targets.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @since 2.2
 */
class ResolveTargetEntityListener implements EventSubscriber
{
    /**
     * @var array[] indexed by original entity name
     */
    private \$resolveTargetEntities = [];

    /**
     * {@inheritDoc}
     */
    public function getSubscribedEvents()
    {
        return [
            Events::loadClassMetadata,
            Events::onClassMetadataNotFound
        ];
    }

    /**
     * Adds a target-entity class name to resolve to a new class name.
     *
     * @param string \$originalEntity
     * @param string \$newEntity
     * @param array  \$mapping
     *
     * @return void
     */
    public function addResolveTargetEntity(\$originalEntity, \$newEntity, array \$mapping)
    {
        \$mapping['targetEntity']                                   = ltrim(\$newEntity, \"\\\\\");
        \$this->resolveTargetEntities[ltrim(\$originalEntity, \"\\\\\")] = \$mapping;
    }

    /**
     * @param OnClassMetadataNotFoundEventArgs \$args
     *
     * @internal this is an event callback, and should not be called directly
     *
     * @return void
     */
    public function onClassMetadataNotFound(OnClassMetadataNotFoundEventArgs \$args)
    {
        if (array_key_exists(\$args->getClassName(), \$this->resolveTargetEntities)) {
            \$args->setFoundMetadata(
                \$args
                    ->getObjectManager()
                    ->getClassMetadata(\$this->resolveTargetEntities[\$args->getClassName()]['targetEntity'])
            );
        }
    }

    /**
     * Processes event and resolves new target entity names.
     *
     * @param LoadClassMetadataEventArgs \$args
     *
     * @return void
     *
     * @internal this is an event callback, and should not be called directly
     */
    public function loadClassMetadata(LoadClassMetadataEventArgs \$args)
    {
        /* @var \$cm \\Doctrine\\ORM\\Mapping\\ClassMetadata */
        \$cm = \$args->getClassMetadata();

        foreach (\$cm->associationMappings as \$mapping) {
            if (isset(\$this->resolveTargetEntities[\$mapping['targetEntity']])) {
                \$this->remapAssociation(\$cm, \$mapping);
            }
        }

        foreach (\$this->resolveTargetEntities as \$interface => \$data) {
            if (\$data['targetEntity'] == \$cm->getName()) {
                \$args->getEntityManager()->getMetadataFactory()->setMetadataFor(\$interface, \$cm);
            }
        }
    }

    /**
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadataInfo \$classMetadata
     * @param array                                   \$mapping
     *
     * @return void
     */
    private function remapAssociation(\$classMetadata, \$mapping)
    {
        \$newMapping = \$this->resolveTargetEntities[\$mapping['targetEntity']];
        \$newMapping = array_replace_recursive(\$mapping, \$newMapping);
        \$newMapping['fieldName'] = \$mapping['fieldName'];

        unset(\$classMetadata->associationMappings[\$mapping['fieldName']]);

        switch (\$mapping['type']) {
            case ClassMetadata::MANY_TO_MANY:
                \$classMetadata->mapManyToMany(\$newMapping);
                break;
            case ClassMetadata::MANY_TO_ONE:
                \$classMetadata->mapManyToOne(\$newMapping);
                break;
            case ClassMetadata::ONE_TO_MANY:
                \$classMetadata->mapOneToMany(\$newMapping);
                break;
            case ClassMetadata::ONE_TO_ONE:
                \$classMetadata->mapOneToOne(\$newMapping);
                break;
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/ResolveTargetEntityListener.php";
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
use Doctrine\\ORM\\Event\\OnClassMetadataNotFoundEventArgs;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\Common\\EventSubscriber;
use Doctrine\\ORM\\Events;

/**
 * ResolveTargetEntityListener
 *
 * Mechanism to overwrite interfaces or classes specified as association
 * targets.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @since 2.2
 */
class ResolveTargetEntityListener implements EventSubscriber
{
    /**
     * @var array[] indexed by original entity name
     */
    private \$resolveTargetEntities = [];

    /**
     * {@inheritDoc}
     */
    public function getSubscribedEvents()
    {
        return [
            Events::loadClassMetadata,
            Events::onClassMetadataNotFound
        ];
    }

    /**
     * Adds a target-entity class name to resolve to a new class name.
     *
     * @param string \$originalEntity
     * @param string \$newEntity
     * @param array  \$mapping
     *
     * @return void
     */
    public function addResolveTargetEntity(\$originalEntity, \$newEntity, array \$mapping)
    {
        \$mapping['targetEntity']                                   = ltrim(\$newEntity, \"\\\\\");
        \$this->resolveTargetEntities[ltrim(\$originalEntity, \"\\\\\")] = \$mapping;
    }

    /**
     * @param OnClassMetadataNotFoundEventArgs \$args
     *
     * @internal this is an event callback, and should not be called directly
     *
     * @return void
     */
    public function onClassMetadataNotFound(OnClassMetadataNotFoundEventArgs \$args)
    {
        if (array_key_exists(\$args->getClassName(), \$this->resolveTargetEntities)) {
            \$args->setFoundMetadata(
                \$args
                    ->getObjectManager()
                    ->getClassMetadata(\$this->resolveTargetEntities[\$args->getClassName()]['targetEntity'])
            );
        }
    }

    /**
     * Processes event and resolves new target entity names.
     *
     * @param LoadClassMetadataEventArgs \$args
     *
     * @return void
     *
     * @internal this is an event callback, and should not be called directly
     */
    public function loadClassMetadata(LoadClassMetadataEventArgs \$args)
    {
        /* @var \$cm \\Doctrine\\ORM\\Mapping\\ClassMetadata */
        \$cm = \$args->getClassMetadata();

        foreach (\$cm->associationMappings as \$mapping) {
            if (isset(\$this->resolveTargetEntities[\$mapping['targetEntity']])) {
                \$this->remapAssociation(\$cm, \$mapping);
            }
        }

        foreach (\$this->resolveTargetEntities as \$interface => \$data) {
            if (\$data['targetEntity'] == \$cm->getName()) {
                \$args->getEntityManager()->getMetadataFactory()->setMetadataFor(\$interface, \$cm);
            }
        }
    }

    /**
     * @param \\Doctrine\\ORM\\Mapping\\ClassMetadataInfo \$classMetadata
     * @param array                                   \$mapping
     *
     * @return void
     */
    private function remapAssociation(\$classMetadata, \$mapping)
    {
        \$newMapping = \$this->resolveTargetEntities[\$mapping['targetEntity']];
        \$newMapping = array_replace_recursive(\$mapping, \$newMapping);
        \$newMapping['fieldName'] = \$mapping['fieldName'];

        unset(\$classMetadata->associationMappings[\$mapping['fieldName']]);

        switch (\$mapping['type']) {
            case ClassMetadata::MANY_TO_MANY:
                \$classMetadata->mapManyToMany(\$newMapping);
                break;
            case ClassMetadata::MANY_TO_ONE:
                \$classMetadata->mapManyToOne(\$newMapping);
                break;
            case ClassMetadata::ONE_TO_MANY:
                \$classMetadata->mapOneToMany(\$newMapping);
                break;
            case ClassMetadata::ONE_TO_ONE:
                \$classMetadata->mapOneToOne(\$newMapping);
                break;
        }
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/ResolveTargetEntityListener.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/ResolveTargetEntityListener.php");
    }
}
