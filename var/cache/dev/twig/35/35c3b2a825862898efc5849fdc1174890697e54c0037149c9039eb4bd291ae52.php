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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php */
class __TwigTemplate_634c24ed4100cc0a6dad18ac213f21b2752a8d0251ae3aab5ab09474b0077cc6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php"));

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

namespace Doctrine\\ORM\\Mapping;

/**
 * Naming strategy implementing the underscore naming convention.
 * Converts 'MyEntity' to 'my_entity' or 'MY_ENTITY'.
 *
 * 
 * @link    www.doctrine-project.org
 * @since   2.3
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class UnderscoreNamingStrategy implements NamingStrategy
{
    /**
     * @var integer
     */
    private \$case;

    /**
     * Underscore naming strategy construct.
     *
     * @param integer \$case CASE_LOWER | CASE_UPPER
     */
    public function __construct(\$case = CASE_LOWER)
    {
        \$this->case = \$case;
    }

    /**
     * @return integer CASE_LOWER | CASE_UPPER
     */
    public function getCase()
    {
        return \$this->case;
    }

    /**
     * Sets string case CASE_LOWER | CASE_UPPER.
     * Alphabetic characters converted to lowercase or uppercase.
     * 
     * @param integer \$case
     *
     * @return void
     */
    public function setCase(\$case)
    {
        \$this->case = \$case;
    }

    /**
     * {@inheritdoc}
     */
    public function classToTableName(\$className)
    {
        if (strpos(\$className, '\\\\') !== false) {
            \$className = substr(\$className, strrpos(\$className, '\\\\') + 1);
        }

        return \$this->underscore(\$className);
    }

    /**
     * {@inheritdoc}
     */
    public function propertyToColumnName(\$propertyName, \$className = null)
    {
        return \$this->underscore(\$propertyName);
    }

    /**
     * {@inheritdoc}
     */
    public function embeddedFieldToColumnName(\$propertyName, \$embeddedColumnName, \$className = null, \$embeddedClassName = null)
    {
        return \$this->underscore(\$propertyName).'_'.\$embeddedColumnName;
    }

    /**
     * {@inheritdoc}
     */
    public function referenceColumnName()
    {
        return \$this->case === CASE_UPPER ?  'ID' : 'id';
    }

    /**
     * {@inheritdoc}
     */
    public function joinColumnName(\$propertyName, \$className = null)
    {
        return \$this->underscore(\$propertyName) . '_' . \$this->referenceColumnName();
    }

    /**
     * {@inheritdoc}
     */
    public function joinTableName(\$sourceEntity, \$targetEntity, \$propertyName = null)
    {
        return \$this->classToTableName(\$sourceEntity) . '_' . \$this->classToTableName(\$targetEntity);
    }
    
    /**
     * {@inheritdoc}
     */
    public function joinKeyColumnName(\$entityName, \$referencedColumnName = null)
    {
        return \$this->classToTableName(\$entityName) . '_' .
                (\$referencedColumnName ?: \$this->referenceColumnName());
    }
    
    /**
     * @param string \$string
     *
     * @return string
     */
    private function underscore(\$string)
    {
        \$string = preg_replace('/(?<=[a-z])([A-Z])/', '_\$1', \$string);

        if (\$this->case === CASE_UPPER) {
            return strtoupper(\$string);
        }

        return strtolower(\$string);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php";
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

namespace Doctrine\\ORM\\Mapping;

/**
 * Naming strategy implementing the underscore naming convention.
 * Converts 'MyEntity' to 'my_entity' or 'MY_ENTITY'.
 *
 * 
 * @link    www.doctrine-project.org
 * @since   2.3
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class UnderscoreNamingStrategy implements NamingStrategy
{
    /**
     * @var integer
     */
    private \$case;

    /**
     * Underscore naming strategy construct.
     *
     * @param integer \$case CASE_LOWER | CASE_UPPER
     */
    public function __construct(\$case = CASE_LOWER)
    {
        \$this->case = \$case;
    }

    /**
     * @return integer CASE_LOWER | CASE_UPPER
     */
    public function getCase()
    {
        return \$this->case;
    }

    /**
     * Sets string case CASE_LOWER | CASE_UPPER.
     * Alphabetic characters converted to lowercase or uppercase.
     * 
     * @param integer \$case
     *
     * @return void
     */
    public function setCase(\$case)
    {
        \$this->case = \$case;
    }

    /**
     * {@inheritdoc}
     */
    public function classToTableName(\$className)
    {
        if (strpos(\$className, '\\\\') !== false) {
            \$className = substr(\$className, strrpos(\$className, '\\\\') + 1);
        }

        return \$this->underscore(\$className);
    }

    /**
     * {@inheritdoc}
     */
    public function propertyToColumnName(\$propertyName, \$className = null)
    {
        return \$this->underscore(\$propertyName);
    }

    /**
     * {@inheritdoc}
     */
    public function embeddedFieldToColumnName(\$propertyName, \$embeddedColumnName, \$className = null, \$embeddedClassName = null)
    {
        return \$this->underscore(\$propertyName).'_'.\$embeddedColumnName;
    }

    /**
     * {@inheritdoc}
     */
    public function referenceColumnName()
    {
        return \$this->case === CASE_UPPER ?  'ID' : 'id';
    }

    /**
     * {@inheritdoc}
     */
    public function joinColumnName(\$propertyName, \$className = null)
    {
        return \$this->underscore(\$propertyName) . '_' . \$this->referenceColumnName();
    }

    /**
     * {@inheritdoc}
     */
    public function joinTableName(\$sourceEntity, \$targetEntity, \$propertyName = null)
    {
        return \$this->classToTableName(\$sourceEntity) . '_' . \$this->classToTableName(\$targetEntity);
    }
    
    /**
     * {@inheritdoc}
     */
    public function joinKeyColumnName(\$entityName, \$referencedColumnName = null)
    {
        return \$this->classToTableName(\$entityName) . '_' .
                (\$referencedColumnName ?: \$this->referenceColumnName());
    }
    
    /**
     * @param string \$string
     *
     * @return string
     */
    private function underscore(\$string)
    {
        \$string = preg_replace('/(?<=[a-z])([A-Z])/', '_\$1', \$string);

        if (\$this->case === CASE_UPPER) {
            return strtoupper(\$string);
        }

        return strtolower(\$string);
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php");
    }
}
