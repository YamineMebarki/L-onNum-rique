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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php */
class __TwigTemplate_6c53600094ee5bcc1e315d321b86c3927e0fb99f70d628ed3306f678c243d213 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php"));

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

require_once __DIR__.'/../Annotation.php';
require_once __DIR__.'/../Entity.php';
require_once __DIR__.'/../Embeddable.php';
require_once __DIR__.'/../Embedded.php';
require_once __DIR__.'/../MappedSuperclass.php';
require_once __DIR__.'/../InheritanceType.php';
require_once __DIR__.'/../DiscriminatorColumn.php';
require_once __DIR__.'/../DiscriminatorMap.php';
require_once __DIR__.'/../Id.php';
require_once __DIR__.'/../GeneratedValue.php';
require_once __DIR__.'/../Version.php';
require_once __DIR__.'/../JoinColumn.php';
require_once __DIR__.'/../JoinColumns.php';
require_once __DIR__.'/../Column.php';
require_once __DIR__.'/../OneToOne.php';
require_once __DIR__.'/../OneToMany.php';
require_once __DIR__.'/../ManyToOne.php';
require_once __DIR__.'/../ManyToMany.php';
require_once __DIR__.'/../Table.php';
require_once __DIR__.'/../UniqueConstraint.php';
require_once __DIR__.'/../Index.php';
require_once __DIR__.'/../JoinTable.php';
require_once __DIR__.'/../SequenceGenerator.php';
require_once __DIR__.'/../CustomIdGenerator.php';
require_once __DIR__.'/../ChangeTrackingPolicy.php';
require_once __DIR__.'/../OrderBy.php';
require_once __DIR__.'/../NamedQueries.php';
require_once __DIR__.'/../NamedQuery.php';
require_once __DIR__.'/../HasLifecycleCallbacks.php';
require_once __DIR__.'/../PrePersist.php';
require_once __DIR__.'/../PostPersist.php';
require_once __DIR__.'/../PreUpdate.php';
require_once __DIR__.'/../PostUpdate.php';
require_once __DIR__.'/../PreRemove.php';
require_once __DIR__.'/../PostRemove.php';
require_once __DIR__.'/../PostLoad.php';
require_once __DIR__.'/../PreFlush.php';
require_once __DIR__.'/../FieldResult.php';
require_once __DIR__.'/../ColumnResult.php';
require_once __DIR__.'/../EntityResult.php';
require_once __DIR__.'/../NamedNativeQuery.php';
require_once __DIR__.'/../NamedNativeQueries.php';
require_once __DIR__.'/../SqlResultSetMapping.php';
require_once __DIR__.'/../SqlResultSetMappings.php';
require_once __DIR__.'/../AssociationOverride.php';
require_once __DIR__.'/../AssociationOverrides.php';
require_once __DIR__.'/../AttributeOverride.php';
require_once __DIR__.'/../AttributeOverrides.php';
require_once __DIR__.'/../EntityListeners.php';
require_once __DIR__.'/../Cache.php';
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php";
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

require_once __DIR__.'/../Annotation.php';
require_once __DIR__.'/../Entity.php';
require_once __DIR__.'/../Embeddable.php';
require_once __DIR__.'/../Embedded.php';
require_once __DIR__.'/../MappedSuperclass.php';
require_once __DIR__.'/../InheritanceType.php';
require_once __DIR__.'/../DiscriminatorColumn.php';
require_once __DIR__.'/../DiscriminatorMap.php';
require_once __DIR__.'/../Id.php';
require_once __DIR__.'/../GeneratedValue.php';
require_once __DIR__.'/../Version.php';
require_once __DIR__.'/../JoinColumn.php';
require_once __DIR__.'/../JoinColumns.php';
require_once __DIR__.'/../Column.php';
require_once __DIR__.'/../OneToOne.php';
require_once __DIR__.'/../OneToMany.php';
require_once __DIR__.'/../ManyToOne.php';
require_once __DIR__.'/../ManyToMany.php';
require_once __DIR__.'/../Table.php';
require_once __DIR__.'/../UniqueConstraint.php';
require_once __DIR__.'/../Index.php';
require_once __DIR__.'/../JoinTable.php';
require_once __DIR__.'/../SequenceGenerator.php';
require_once __DIR__.'/../CustomIdGenerator.php';
require_once __DIR__.'/../ChangeTrackingPolicy.php';
require_once __DIR__.'/../OrderBy.php';
require_once __DIR__.'/../NamedQueries.php';
require_once __DIR__.'/../NamedQuery.php';
require_once __DIR__.'/../HasLifecycleCallbacks.php';
require_once __DIR__.'/../PrePersist.php';
require_once __DIR__.'/../PostPersist.php';
require_once __DIR__.'/../PreUpdate.php';
require_once __DIR__.'/../PostUpdate.php';
require_once __DIR__.'/../PreRemove.php';
require_once __DIR__.'/../PostRemove.php';
require_once __DIR__.'/../PostLoad.php';
require_once __DIR__.'/../PreFlush.php';
require_once __DIR__.'/../FieldResult.php';
require_once __DIR__.'/../ColumnResult.php';
require_once __DIR__.'/../EntityResult.php';
require_once __DIR__.'/../NamedNativeQuery.php';
require_once __DIR__.'/../NamedNativeQueries.php';
require_once __DIR__.'/../SqlResultSetMapping.php';
require_once __DIR__.'/../SqlResultSetMappings.php';
require_once __DIR__.'/../AssociationOverride.php';
require_once __DIR__.'/../AssociationOverrides.php';
require_once __DIR__.'/../AttributeOverride.php';
require_once __DIR__.'/../AttributeOverrides.php';
require_once __DIR__.'/../EntityListeners.php';
require_once __DIR__.'/../Cache.php';
", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php");
    }
}
