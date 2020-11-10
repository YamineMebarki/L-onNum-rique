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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CollectionCacheKey.php */
class __TwigTemplate_89ca30d5adffaab49acf5082ab18b6ba2cc9f03aa9b12d7aa3829b3a63fbb840 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CollectionCacheKey.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CollectionCacheKey.php"));

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

/**
 * Defines entity collection roles to be stored in the cache region.
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class CollectionCacheKey extends CacheKey
{
    /**
     * READ-ONLY: Public only for performance reasons, it should be considered immutable.
     *
     * @var array The owner entity identifier
     */
    public \$ownerIdentifier;

    /**
     * READ-ONLY: Public only for performance reasons, it should be considered immutable.
     *
     * @var string The owner entity class
     */
    public \$entityClass;

    /**
     * READ-ONLY: Public only for performance reasons, it should be considered immutable.
     *
     * @var string The association name
     */
    public \$association;

    /**
     * @param string \$entityClass     The entity class.
     * @param string \$association     The field name that represents the association.
     * @param array  \$ownerIdentifier The identifier of the owning entity.
     */
    public function __construct(\$entityClass, \$association, array \$ownerIdentifier)
    {
        ksort(\$ownerIdentifier);

        \$this->ownerIdentifier  = \$ownerIdentifier;
        \$this->entityClass      = (string) \$entityClass;
        \$this->association      = (string) \$association;
        \$this->hash             = str_replace('\\\\', '.', strtolower(\$entityClass)) . '_' . implode(' ', \$ownerIdentifier) . '__' .  \$association;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CollectionCacheKey.php";
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

/**
 * Defines entity collection roles to be stored in the cache region.
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
class CollectionCacheKey extends CacheKey
{
    /**
     * READ-ONLY: Public only for performance reasons, it should be considered immutable.
     *
     * @var array The owner entity identifier
     */
    public \$ownerIdentifier;

    /**
     * READ-ONLY: Public only for performance reasons, it should be considered immutable.
     *
     * @var string The owner entity class
     */
    public \$entityClass;

    /**
     * READ-ONLY: Public only for performance reasons, it should be considered immutable.
     *
     * @var string The association name
     */
    public \$association;

    /**
     * @param string \$entityClass     The entity class.
     * @param string \$association     The field name that represents the association.
     * @param array  \$ownerIdentifier The identifier of the owning entity.
     */
    public function __construct(\$entityClass, \$association, array \$ownerIdentifier)
    {
        ksort(\$ownerIdentifier);

        \$this->ownerIdentifier  = \$ownerIdentifier;
        \$this->entityClass      = (string) \$entityClass;
        \$this->association      = (string) \$association;
        \$this->hash             = str_replace('\\\\', '.', strtolower(\$entityClass)) . '_' . implode(' ', \$ownerIdentifier) . '__' .  \$association;
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CollectionCacheKey.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/CollectionCacheKey.php");
    }
}
