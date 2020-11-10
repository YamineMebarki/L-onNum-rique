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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Cache/ConcurrentRegion.php */
class __TwigTemplate_0f6109d8e8806b4541cc21fe0d76180ddee984ef7aeeb8807f0f1b57353495df extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/ConcurrentRegion.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/ConcurrentRegion.php"));

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
 * Defines contract for concurrently managed data region.
 * It should be able to lock an specific cache entry in an atomic operation.
 *
 * When a entry is locked another process should not be able to read or write the entry.
 * All evict operation should not consider locks, even though an entry is locked evict should be able to delete the entry and its lock.
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
interface ConcurrentRegion extends Region
{
    /**
     * Attempts to read lock the mapping for the given key.
     *
     * @param \\Doctrine\\ORM\\Cache\\CacheKey \$key The key of the item to lock.
     *
     * @return \\Doctrine\\ORM\\Cache\\Lock A lock instance or NULL if the lock already exists.
     *
     * @throws \\Doctrine\\ORM\\Cache\\LockException Indicates a problem accessing the region.
     */
    public function lock(CacheKey \$key);

    /**
     * Attempts to read unlock the mapping for the given key.
     *
     * @param \\Doctrine\\ORM\\Cache\\CacheKey \$key  The key of the item to unlock.
     * @param \\Doctrine\\ORM\\Cache\\Lock     \$lock The lock previously obtained from {@link readLock}
     *
     * @return void
     *
     * @throws \\Doctrine\\ORM\\Cache\\LockException Indicates a problem accessing the region.
     */
    public function unlock(CacheKey \$key, Lock \$lock);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/ConcurrentRegion.php";
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
 * Defines contract for concurrently managed data region.
 * It should be able to lock an specific cache entry in an atomic operation.
 *
 * When a entry is locked another process should not be able to read or write the entry.
 * All evict operation should not consider locks, even though an entry is locked evict should be able to delete the entry and its lock.
 *
 * @since   2.5
 * @author  Fabio B. Silva <fabio.bat.silva@gmail.com>
 */
interface ConcurrentRegion extends Region
{
    /**
     * Attempts to read lock the mapping for the given key.
     *
     * @param \\Doctrine\\ORM\\Cache\\CacheKey \$key The key of the item to lock.
     *
     * @return \\Doctrine\\ORM\\Cache\\Lock A lock instance or NULL if the lock already exists.
     *
     * @throws \\Doctrine\\ORM\\Cache\\LockException Indicates a problem accessing the region.
     */
    public function lock(CacheKey \$key);

    /**
     * Attempts to read unlock the mapping for the given key.
     *
     * @param \\Doctrine\\ORM\\Cache\\CacheKey \$key  The key of the item to unlock.
     * @param \\Doctrine\\ORM\\Cache\\Lock     \$lock The lock previously obtained from {@link readLock}
     *
     * @return void
     *
     * @throws \\Doctrine\\ORM\\Cache\\LockException Indicates a problem accessing the region.
     */
    public function unlock(CacheKey \$key, Lock \$lock);
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Cache/ConcurrentRegion.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Cache/ConcurrentRegion.php");
    }
}
