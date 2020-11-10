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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheException.php */
class __TwigTemplate_65663aaac5533bdb9882b9d4a843dde6e1da7412cbd3ca78bfcc3f05af5cc9ab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheException.php"));

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

namespace Doctrine\\ORM\\Cache;

use Doctrine\\ORM\\ORMException;

/**
 * Exception for cache.
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class CacheException extends ORMException
{
    /**
     * @param string \$sourceEntity
     * @param string \$fieldName
     *
     * @return \\Doctrine\\ORM\\Cache\\CacheException
     */
    public static function updateReadOnlyCollection(\$sourceEntity, \$fieldName)
    {
        return new self(sprintf('Cannot update a readonly collection \"%s#%s\"', \$sourceEntity, \$fieldName));
    }

    /**
     * @param string \$entityName
     *
     * @return \\Doctrine\\ORM\\Cache\\CacheException
     */
    public static function updateReadOnlyEntity(\$entityName)
    {
        return new self(sprintf('Cannot update a readonly entity \"%s\"', \$entityName));
    }

    /**
     * @param string \$entityName
     *
     * @return \\Doctrine\\ORM\\Cache\\CacheException
     */
    public static function nonCacheableEntity(\$entityName)
    {
        return new self(sprintf('Entity \"%s\" not configured as part of the second-level cache.', \$entityName));
    }

    /**
     * @param string \$entityName
     * @param string \$field
     *
     * @return CacheException
     */
    public static function nonCacheableEntityAssociation(\$entityName, \$field)
    {
        return new self(sprintf('Entity association field \"%s#%s\" not configured as part of the second-level cache.', \$entityName, \$field));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheException.php";
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

namespace Doctrine\\ORM\\Cache;

use Doctrine\\ORM\\ORMException;

/**
 * Exception for cache.
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class CacheException extends ORMException
{
    /**
     * @param string \$sourceEntity
     * @param string \$fieldName
     *
     * @return \\Doctrine\\ORM\\Cache\\CacheException
     */
    public static function updateReadOnlyCollection(\$sourceEntity, \$fieldName)
    {
        return new self(sprintf('Cannot update a readonly collection \"%s#%s\"', \$sourceEntity, \$fieldName));
    }

    /**
     * @param string \$entityName
     *
     * @return \\Doctrine\\ORM\\Cache\\CacheException
     */
    public static function updateReadOnlyEntity(\$entityName)
    {
        return new self(sprintf('Cannot update a readonly entity \"%s\"', \$entityName));
    }

    /**
     * @param string \$entityName
     *
     * @return \\Doctrine\\ORM\\Cache\\CacheException
     */
    public static function nonCacheableEntity(\$entityName)
    {
        return new self(sprintf('Entity \"%s\" not configured as part of the second-level cache.', \$entityName));
    }

    /**
     * @param string \$entityName
     * @param string \$field
     *
     * @return CacheException
     */
    public static function nonCacheableEntityAssociation(\$entityName, \$field)
    {
        return new self(sprintf('Entity association field \"%s#%s\" not configured as part of the second-level cache.', \$entityName, \$field));
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheException.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CacheException.php");
    }
}
