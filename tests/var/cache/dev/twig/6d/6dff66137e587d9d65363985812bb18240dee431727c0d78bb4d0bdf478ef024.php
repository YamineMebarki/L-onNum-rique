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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Event/PreUpdateEventArgs.php */
class __TwigTemplate_0d5455896ce1638e425c28740120c9980b648c0f526ed19ae96f0dec24e66799 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Event/PreUpdateEventArgs.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Event/PreUpdateEventArgs.php"));

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

use Doctrine\\ORM\\EntityManagerInterface;

/**
 * Class that holds event arguments for a preInsert/preUpdate event.
 *
 * @author Guilherme Blanco <guilehrmeblanco@hotmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @since  2.0
 */
class PreUpdateEventArgs extends LifecycleEventArgs
{
    /**
     * @var array
     */
    private \$entityChangeSet;

    /**
     * Constructor.
     *
     * @param object                 \$entity
     * @param EntityManagerInterface \$em
     * @param array                  \$changeSet
     */
    public function __construct(\$entity, EntityManagerInterface \$em, array &\$changeSet)
    {
        parent::__construct(\$entity, \$em);

        \$this->entityChangeSet = &\$changeSet;
    }

    /**
     * Retrieves entity changeset.
     *
     * @return array
     */
    public function getEntityChangeSet()
    {
        return \$this->entityChangeSet;
    }

    /**
     * Checks if field has a changeset.
     *
     * @param string \$field
     *
     * @return boolean
     */
    public function hasChangedField(\$field)
    {
        return isset(\$this->entityChangeSet[\$field]);
    }

    /**
     * Gets the old value of the changeset of the changed field.
     *
     * @param string \$field
     *
     * @return mixed
     */
    public function getOldValue(\$field)
    {
        \$this->assertValidField(\$field);

        return \$this->entityChangeSet[\$field][0];
    }

    /**
     * Gets the new value of the changeset of the changed field.
     *
     * @param string \$field
     *
     * @return mixed
     */
    public function getNewValue(\$field)
    {
        \$this->assertValidField(\$field);

        return \$this->entityChangeSet[\$field][1];
    }

    /**
     * Sets the new value of this field.
     *
     * @param string \$field
     * @param mixed  \$value
     *
     * @return void
     */
    public function setNewValue(\$field, \$value)
    {
        \$this->assertValidField(\$field);

        \$this->entityChangeSet[\$field][1] = \$value;
    }

    /**
     * Asserts the field exists in changeset.
     *
     * @param string \$field
     *
     * @return void
     *
     * @throws \\InvalidArgumentException
     */
    private function assertValidField(\$field)
    {
        if ( ! isset(\$this->entityChangeSet[\$field])) {
            throw new \\InvalidArgumentException(sprintf(
                'Field \"%s\" is not a valid field of the entity \"%s\" in PreUpdateEventArgs.',
                \$field,
                get_class(\$this->getEntity())
            ));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Event/PreUpdateEventArgs.php";
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

use Doctrine\\ORM\\EntityManagerInterface;

/**
 * Class that holds event arguments for a preInsert/preUpdate event.
 *
 * @author Guilherme Blanco <guilehrmeblanco@hotmail.com>
 * @author Roman Borschel <roman@code-factory.org>
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @since  2.0
 */
class PreUpdateEventArgs extends LifecycleEventArgs
{
    /**
     * @var array
     */
    private \$entityChangeSet;

    /**
     * Constructor.
     *
     * @param object                 \$entity
     * @param EntityManagerInterface \$em
     * @param array                  \$changeSet
     */
    public function __construct(\$entity, EntityManagerInterface \$em, array &\$changeSet)
    {
        parent::__construct(\$entity, \$em);

        \$this->entityChangeSet = &\$changeSet;
    }

    /**
     * Retrieves entity changeset.
     *
     * @return array
     */
    public function getEntityChangeSet()
    {
        return \$this->entityChangeSet;
    }

    /**
     * Checks if field has a changeset.
     *
     * @param string \$field
     *
     * @return boolean
     */
    public function hasChangedField(\$field)
    {
        return isset(\$this->entityChangeSet[\$field]);
    }

    /**
     * Gets the old value of the changeset of the changed field.
     *
     * @param string \$field
     *
     * @return mixed
     */
    public function getOldValue(\$field)
    {
        \$this->assertValidField(\$field);

        return \$this->entityChangeSet[\$field][0];
    }

    /**
     * Gets the new value of the changeset of the changed field.
     *
     * @param string \$field
     *
     * @return mixed
     */
    public function getNewValue(\$field)
    {
        \$this->assertValidField(\$field);

        return \$this->entityChangeSet[\$field][1];
    }

    /**
     * Sets the new value of this field.
     *
     * @param string \$field
     * @param mixed  \$value
     *
     * @return void
     */
    public function setNewValue(\$field, \$value)
    {
        \$this->assertValidField(\$field);

        \$this->entityChangeSet[\$field][1] = \$value;
    }

    /**
     * Asserts the field exists in changeset.
     *
     * @param string \$field
     *
     * @return void
     *
     * @throws \\InvalidArgumentException
     */
    private function assertValidField(\$field)
    {
        if ( ! isset(\$this->entityChangeSet[\$field])) {
            throw new \\InvalidArgumentException(sprintf(
                'Field \"%s\" is not a valid field of the entity \"%s\" in PreUpdateEventArgs.',
                \$field,
                get_class(\$this->getEntity())
            ));
        }
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Event/PreUpdateEventArgs.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Event/PreUpdateEventArgs.php");
    }
}
