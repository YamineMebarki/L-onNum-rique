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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Region/DefaultMultiGetRegion.php */
class __TwigTemplate_a8762ca6aecb1a751f5d95cd10b389d3c158e870c1ac66b64410ecbcbeb60ce1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Region/DefaultMultiGetRegion.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Region/DefaultMultiGetRegion.php"));

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

namespace Doctrine\\ORM\\Cache\\Region;

use Doctrine\\Common\\Cache\\MultiGetCache;
use Doctrine\\ORM\\Cache\\CacheEntry;
use Doctrine\\ORM\\Cache\\CollectionCacheEntry;

/**
 * A cache region that enables the retrieval of multiple elements with one call
 *
 * @since   2.5
 * @author  Asmir Mustafic <goetas@gmail.com>
 */
class DefaultMultiGetRegion extends DefaultRegion
{
    /**
     * Note that the multiple type is due to doctrine/cache not integrating the MultiGetCache interface
     * in its signature due to BC in 1.x
     *
     * @var MultiGetCache|\\Doctrine\\Common\\Cache\\Cache
     */
    protected \$cache;

    /**
     * {@inheritDoc}
     *
     * @param MultiGetCache \$cache
     */
    public function __construct(\$name, MultiGetCache \$cache, \$lifetime = 0)
    {
        /* @var \$cache \\Doctrine\\Common\\Cache\\Cache */
        parent::__construct(\$name, \$cache, \$lifetime);
    }

    /**
     * {@inheritdoc}
     */
    public function getMultiple(CollectionCacheEntry \$collection)
    {
        \$keysToRetrieve = [];

        foreach (\$collection->identifiers as \$index => \$key) {
            \$keysToRetrieve[\$index] = \$this->getCacheEntryKey(\$key);
        }

        \$items = \$this->cache->fetchMultiple(\$keysToRetrieve);
        if (count(\$items) !== count(\$keysToRetrieve)) {
            return null;
        }

        \$returnableItems = [];

        foreach (\$keysToRetrieve as \$index => \$key) {
            if (! \$items[\$key] instanceof CacheEntry) {
                return null;
            }

            \$returnableItems[\$index] = \$items[\$key];
        }

        return \$returnableItems;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Region/DefaultMultiGetRegion.php";
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

namespace Doctrine\\ORM\\Cache\\Region;

use Doctrine\\Common\\Cache\\MultiGetCache;
use Doctrine\\ORM\\Cache\\CacheEntry;
use Doctrine\\ORM\\Cache\\CollectionCacheEntry;

/**
 * A cache region that enables the retrieval of multiple elements with one call
 *
 * @since   2.5
 * @author  Asmir Mustafic <goetas@gmail.com>
 */
class DefaultMultiGetRegion extends DefaultRegion
{
    /**
     * Note that the multiple type is due to doctrine/cache not integrating the MultiGetCache interface
     * in its signature due to BC in 1.x
     *
     * @var MultiGetCache|\\Doctrine\\Common\\Cache\\Cache
     */
    protected \$cache;

    /**
     * {@inheritDoc}
     *
     * @param MultiGetCache \$cache
     */
    public function __construct(\$name, MultiGetCache \$cache, \$lifetime = 0)
    {
        /* @var \$cache \\Doctrine\\Common\\Cache\\Cache */
        parent::__construct(\$name, \$cache, \$lifetime);
    }

    /**
     * {@inheritdoc}
     */
    public function getMultiple(CollectionCacheEntry \$collection)
    {
        \$keysToRetrieve = [];

        foreach (\$collection->identifiers as \$index => \$key) {
            \$keysToRetrieve[\$index] = \$this->getCacheEntryKey(\$key);
        }

        \$items = \$this->cache->fetchMultiple(\$keysToRetrieve);
        if (count(\$items) !== count(\$keysToRetrieve)) {
            return null;
        }

        \$returnableItems = [];

        foreach (\$keysToRetrieve as \$index => \$key) {
            if (! \$items[\$key] instanceof CacheEntry) {
                return null;
            }

            \$returnableItems[\$index] = \$items[\$key];
        }

        return \$returnableItems;
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Region/DefaultMultiGetRegion.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/Region/DefaultMultiGetRegion.php");
    }
}
