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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Utility/IdentifierFlattener.php */
class __TwigTemplate_957eb294b19102d7eefbb9e997ddcaa93d5eec2644f2c96d59d0803d67c58bb3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Utility/IdentifierFlattener.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Utility/IdentifierFlattener.php"));

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

namespace Doctrine\\ORM\\Utility;

use Doctrine\\ORM\\UnitOfWork;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadataFactory;

/**
 * The IdentifierFlattener utility now houses some of the identifier manipulation logic from unit of work, so that it
 * can be re-used elsewhere.
 *
 * @since       2.5
 * @author      Rob Caiger <rob@clocal.co.uk>
 */
final class IdentifierFlattener
{
    /**
     * The UnitOfWork used to coordinate object-level transactions.
     *
     * @var UnitOfWork
     */
    private \$unitOfWork;

    /**
     * The metadata factory, used to retrieve the ORM metadata of entity classes.
     *
     * @var ClassMetadataFactory
     */
    private \$metadataFactory;

    /**
     * Initializes a new IdentifierFlattener instance, bound to the given EntityManager.
     *
     * @param UnitOfWork           \$unitOfWork
     * @param ClassMetadataFactory \$metadataFactory
     */
    public function __construct(UnitOfWork \$unitOfWork, ClassMetadataFactory \$metadataFactory)
    {
        \$this->unitOfWork = \$unitOfWork;
        \$this->metadataFactory = \$metadataFactory;
    }

    /**
     * convert foreign identifiers into scalar foreign key values to avoid object to string conversion failures.
     *
     * @param ClassMetadata \$class
     * @param array         \$id
     *
     * @return array
     */
    public function flattenIdentifier(ClassMetadata \$class, array \$id)
    {
        \$flatId = [];

        foreach (\$class->identifier as \$field) {
            if (isset(\$class->associationMappings[\$field]) && isset(\$id[\$field]) && is_object(\$id[\$field])) {
                /* @var \$targetClassMetadata ClassMetadata */
                \$targetClassMetadata = \$this->metadataFactory->getMetadataFor(
                    \$class->associationMappings[\$field]['targetEntity']
                );

                if (\$this->unitOfWork->isInIdentityMap(\$id[\$field])) {
                    \$associatedId = \$this->flattenIdentifier(\$targetClassMetadata, \$this->unitOfWork->getEntityIdentifier(\$id[\$field]));
                } else {
                    \$associatedId = \$this->flattenIdentifier(\$targetClassMetadata, \$targetClassMetadata->getIdentifierValues(\$id[\$field]));
                }

                \$flatId[\$field] = implode(' ', \$associatedId);
            } elseif (isset(\$class->associationMappings[\$field])) {
                \$associatedId = [];

                foreach (\$class->associationMappings[\$field]['joinColumns'] as \$joinColumn) {
                    \$associatedId[] = \$id[\$joinColumn['name']];
                }

                \$flatId[\$field] = implode(' ', \$associatedId);
            } else {
                \$flatId[\$field] = \$id[\$field];
            }
        }

        return \$flatId;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Utility/IdentifierFlattener.php";
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

namespace Doctrine\\ORM\\Utility;

use Doctrine\\ORM\\UnitOfWork;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\Common\\Persistence\\Mapping\\ClassMetadataFactory;

/**
 * The IdentifierFlattener utility now houses some of the identifier manipulation logic from unit of work, so that it
 * can be re-used elsewhere.
 *
 * @since       2.5
 * @author      Rob Caiger <rob@clocal.co.uk>
 */
final class IdentifierFlattener
{
    /**
     * The UnitOfWork used to coordinate object-level transactions.
     *
     * @var UnitOfWork
     */
    private \$unitOfWork;

    /**
     * The metadata factory, used to retrieve the ORM metadata of entity classes.
     *
     * @var ClassMetadataFactory
     */
    private \$metadataFactory;

    /**
     * Initializes a new IdentifierFlattener instance, bound to the given EntityManager.
     *
     * @param UnitOfWork           \$unitOfWork
     * @param ClassMetadataFactory \$metadataFactory
     */
    public function __construct(UnitOfWork \$unitOfWork, ClassMetadataFactory \$metadataFactory)
    {
        \$this->unitOfWork = \$unitOfWork;
        \$this->metadataFactory = \$metadataFactory;
    }

    /**
     * convert foreign identifiers into scalar foreign key values to avoid object to string conversion failures.
     *
     * @param ClassMetadata \$class
     * @param array         \$id
     *
     * @return array
     */
    public function flattenIdentifier(ClassMetadata \$class, array \$id)
    {
        \$flatId = [];

        foreach (\$class->identifier as \$field) {
            if (isset(\$class->associationMappings[\$field]) && isset(\$id[\$field]) && is_object(\$id[\$field])) {
                /* @var \$targetClassMetadata ClassMetadata */
                \$targetClassMetadata = \$this->metadataFactory->getMetadataFor(
                    \$class->associationMappings[\$field]['targetEntity']
                );

                if (\$this->unitOfWork->isInIdentityMap(\$id[\$field])) {
                    \$associatedId = \$this->flattenIdentifier(\$targetClassMetadata, \$this->unitOfWork->getEntityIdentifier(\$id[\$field]));
                } else {
                    \$associatedId = \$this->flattenIdentifier(\$targetClassMetadata, \$targetClassMetadata->getIdentifierValues(\$id[\$field]));
                }

                \$flatId[\$field] = implode(' ', \$associatedId);
            } elseif (isset(\$class->associationMappings[\$field])) {
                \$associatedId = [];

                foreach (\$class->associationMappings[\$field]['joinColumns'] as \$joinColumn) {
                    \$associatedId[] = \$id[\$joinColumn['name']];
                }

                \$flatId[\$field] = implode(' ', \$associatedId);
            } else {
                \$flatId[\$field] = \$id[\$field];
            }
        }

        return \$flatId;
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Utility/IdentifierFlattener.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Utility/IdentifierFlattener.php");
    }
}
