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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Utility/PersisterHelper.php */
class __TwigTemplate_4d233085d93b85da06056f14fdb0cf9e18eae93d137739d5042415d3d0ec95a6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Utility/PersisterHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Utility/PersisterHelper.php"));

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

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Query\\QueryException;

/**
 * The PersisterHelper contains logic to infer binding types which is used in
 * several persisters.
 *
 * @link   www.doctrine-project.org
 * @since  2.5
 * @author Jasper N. Brouwer <jasper@nerdsweide.nl>
 */
class PersisterHelper
{
    /**
     * @param string                 \$fieldName
     * @param ClassMetadata          \$class
     * @param EntityManagerInterface \$em
     *
     * @return array<int, string>
     *
     * @throws QueryException
     */
    public static function getTypeOfField(\$fieldName, ClassMetadata \$class, EntityManagerInterface \$em)
    {
        if (isset(\$class->fieldMappings[\$fieldName])) {
            return [\$class->fieldMappings[\$fieldName]['type']];
        }

        if ( ! isset(\$class->associationMappings[\$fieldName])) {
            return [];
        }

        \$assoc = \$class->associationMappings[\$fieldName];

        if (! \$assoc['isOwningSide']) {
            return self::getTypeOfField(\$assoc['mappedBy'], \$em->getClassMetadata(\$assoc['targetEntity']), \$em);
        }

        if (\$assoc['type'] & ClassMetadata::MANY_TO_MANY) {
            \$joinData = \$assoc['joinTable'];
        } else {
            \$joinData = \$assoc;
        }

        \$types       = [];
        \$targetClass = \$em->getClassMetadata(\$assoc['targetEntity']);

        foreach (\$joinData['joinColumns'] as \$joinColumn) {
            \$types[] = self::getTypeOfColumn(\$joinColumn['referencedColumnName'], \$targetClass, \$em);
        }

        return \$types;
    }

    /**
     * @param string                 \$columnName
     * @param ClassMetadata          \$class
     * @param EntityManagerInterface \$em
     *
     * @return string
     *
     * @throws \\RuntimeException
     */
    public static function getTypeOfColumn(\$columnName, ClassMetadata \$class, EntityManagerInterface \$em)
    {
        if (isset(\$class->fieldNames[\$columnName])) {
            \$fieldName = \$class->fieldNames[\$columnName];

            if (isset(\$class->fieldMappings[\$fieldName])) {
                return \$class->fieldMappings[\$fieldName]['type'];
            }
        }

        // iterate over to-one association mappings
        foreach (\$class->associationMappings as \$assoc) {
            if ( ! isset(\$assoc['joinColumns'])) {
                continue;
            }

            foreach (\$assoc['joinColumns'] as \$joinColumn) {
                if (\$joinColumn['name'] == \$columnName) {
                    \$targetColumnName = \$joinColumn['referencedColumnName'];
                    \$targetClass      = \$em->getClassMetadata(\$assoc['targetEntity']);

                    return self::getTypeOfColumn(\$targetColumnName, \$targetClass, \$em);
                }
            }
        }

        // iterate over to-many association mappings
        foreach (\$class->associationMappings as \$assoc) {
            if ( ! (isset(\$assoc['joinTable']) && isset(\$assoc['joinTable']['joinColumns']))) {
                continue;
            }

            foreach (\$assoc['joinTable']['joinColumns'] as \$joinColumn) {
                if (\$joinColumn['name'] == \$columnName) {
                    \$targetColumnName = \$joinColumn['referencedColumnName'];
                    \$targetClass      = \$em->getClassMetadata(\$assoc['targetEntity']);

                    return self::getTypeOfColumn(\$targetColumnName, \$targetClass, \$em);
                }
            }
        }

        throw new \\RuntimeException(sprintf(
            'Could not resolve type of column \"%s\" of class \"%s\"',
            \$columnName,
            \$class->getName()
        ));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Utility/PersisterHelper.php";
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

use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Mapping\\ClassMetadata;
use Doctrine\\ORM\\Query\\QueryException;

/**
 * The PersisterHelper contains logic to infer binding types which is used in
 * several persisters.
 *
 * @link   www.doctrine-project.org
 * @since  2.5
 * @author Jasper N. Brouwer <jasper@nerdsweide.nl>
 */
class PersisterHelper
{
    /**
     * @param string                 \$fieldName
     * @param ClassMetadata          \$class
     * @param EntityManagerInterface \$em
     *
     * @return array<int, string>
     *
     * @throws QueryException
     */
    public static function getTypeOfField(\$fieldName, ClassMetadata \$class, EntityManagerInterface \$em)
    {
        if (isset(\$class->fieldMappings[\$fieldName])) {
            return [\$class->fieldMappings[\$fieldName]['type']];
        }

        if ( ! isset(\$class->associationMappings[\$fieldName])) {
            return [];
        }

        \$assoc = \$class->associationMappings[\$fieldName];

        if (! \$assoc['isOwningSide']) {
            return self::getTypeOfField(\$assoc['mappedBy'], \$em->getClassMetadata(\$assoc['targetEntity']), \$em);
        }

        if (\$assoc['type'] & ClassMetadata::MANY_TO_MANY) {
            \$joinData = \$assoc['joinTable'];
        } else {
            \$joinData = \$assoc;
        }

        \$types       = [];
        \$targetClass = \$em->getClassMetadata(\$assoc['targetEntity']);

        foreach (\$joinData['joinColumns'] as \$joinColumn) {
            \$types[] = self::getTypeOfColumn(\$joinColumn['referencedColumnName'], \$targetClass, \$em);
        }

        return \$types;
    }

    /**
     * @param string                 \$columnName
     * @param ClassMetadata          \$class
     * @param EntityManagerInterface \$em
     *
     * @return string
     *
     * @throws \\RuntimeException
     */
    public static function getTypeOfColumn(\$columnName, ClassMetadata \$class, EntityManagerInterface \$em)
    {
        if (isset(\$class->fieldNames[\$columnName])) {
            \$fieldName = \$class->fieldNames[\$columnName];

            if (isset(\$class->fieldMappings[\$fieldName])) {
                return \$class->fieldMappings[\$fieldName]['type'];
            }
        }

        // iterate over to-one association mappings
        foreach (\$class->associationMappings as \$assoc) {
            if ( ! isset(\$assoc['joinColumns'])) {
                continue;
            }

            foreach (\$assoc['joinColumns'] as \$joinColumn) {
                if (\$joinColumn['name'] == \$columnName) {
                    \$targetColumnName = \$joinColumn['referencedColumnName'];
                    \$targetClass      = \$em->getClassMetadata(\$assoc['targetEntity']);

                    return self::getTypeOfColumn(\$targetColumnName, \$targetClass, \$em);
                }
            }
        }

        // iterate over to-many association mappings
        foreach (\$class->associationMappings as \$assoc) {
            if ( ! (isset(\$assoc['joinTable']) && isset(\$assoc['joinTable']['joinColumns']))) {
                continue;
            }

            foreach (\$assoc['joinTable']['joinColumns'] as \$joinColumn) {
                if (\$joinColumn['name'] == \$columnName) {
                    \$targetColumnName = \$joinColumn['referencedColumnName'];
                    \$targetClass      = \$em->getClassMetadata(\$assoc['targetEntity']);

                    return self::getTypeOfColumn(\$targetColumnName, \$targetClass, \$em);
                }
            }
        }

        throw new \\RuntimeException(sprintf(
            'Could not resolve type of column \"%s\" of class \"%s\"',
            \$columnName,
            \$class->getName()
        ));
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Utility/PersisterHelper.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Utility/PersisterHelper.php");
    }
}
