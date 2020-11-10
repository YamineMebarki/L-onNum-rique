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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Query/FilterCollection.php */
class __TwigTemplate_0d96ba16d92b8673179c6f750de500e0853319e0905e9024d77ba7a07f093b21 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/FilterCollection.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/FilterCollection.php"));

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

namespace Doctrine\\ORM\\Query;

use Doctrine\\ORM\\EntityManagerInterface;

/**
 * Collection class for all the query filters.
 *
 * @author Alexander <iam.asm89@gmail.com>
 */
class FilterCollection
{
    /* Filter STATES */

    /**
     * A filter object is in CLEAN state when it has no changed parameters.
     */
    const FILTERS_STATE_CLEAN  = 1;

    /**
     * A filter object is in DIRTY state when it has changed parameters.
     */
    const FILTERS_STATE_DIRTY = 2;

    /**
     * The used Configuration.
     *
     * @var \\Doctrine\\ORM\\Configuration
     */
    private \$config;

    /**
     * The EntityManager that \"owns\" this FilterCollection instance.
     *
     * @var \\Doctrine\\ORM\\EntityManager
     */
    private \$em;

    /**
     * Instances of enabled filters.
     *
     * @var \\Doctrine\\ORM\\Query\\Filter\\SQLFilter[]
     */
    private \$enabledFilters = [];

    /**
     * @var string The filter hash from the last time the query was parsed.
     */
    private \$filterHash;

    /**
     * @var integer The current state of this filter.
     */
    private \$filtersState = self::FILTERS_STATE_CLEAN;

    /**
     * Constructor.
     *
     * @param EntityManagerInterface \$em
     */
    public function __construct(EntityManagerInterface \$em)
    {
        \$this->em = \$em;
        \$this->config = \$em->getConfiguration();
    }

    /**
     * Gets all the enabled filters.
     *
     * @return \\Doctrine\\ORM\\Query\\Filter\\SQLFilter[] The enabled filters.
     */
    public function getEnabledFilters()
    {
        return \$this->enabledFilters;
    }

    /**
     * Enables a filter from the collection.
     *
     * @param string \$name Name of the filter.
     *
     * @return \\Doctrine\\ORM\\Query\\Filter\\SQLFilter The enabled filter.
     *
     * @throws \\InvalidArgumentException If the filter does not exist.
     */
    public function enable(\$name)
    {
        if ( ! \$this->has(\$name)) {
            throw new \\InvalidArgumentException(\"Filter '\" . \$name . \"' does not exist.\");
        }

        if ( ! \$this->isEnabled(\$name)) {
            \$filterClass = \$this->config->getFilterClassName(\$name);

            \$this->enabledFilters[\$name] = new \$filterClass(\$this->em);

            // Keep the enabled filters sorted for the hash
            ksort(\$this->enabledFilters);

            // Now the filter collection is dirty
            \$this->filtersState = self::FILTERS_STATE_DIRTY;
        }

        return \$this->enabledFilters[\$name];
    }

    /**
     * Disables a filter.
     *
     * @param string \$name Name of the filter.
     *
     * @return \\Doctrine\\ORM\\Query\\Filter\\SQLFilter The disabled filter.
     *
     * @throws \\InvalidArgumentException If the filter does not exist.
     */
    public function disable(\$name)
    {
        // Get the filter to return it
        \$filter = \$this->getFilter(\$name);

        unset(\$this->enabledFilters[\$name]);

        // Now the filter collection is dirty
        \$this->filtersState = self::FILTERS_STATE_DIRTY;

        return \$filter;
    }

    /**
     * Gets an enabled filter from the collection.
     *
     * @param string \$name Name of the filter.
     *
     * @return \\Doctrine\\ORM\\Query\\Filter\\SQLFilter The filter.
     *
     * @throws \\InvalidArgumentException If the filter is not enabled.
     */
    public function getFilter(\$name)
    {
        if ( ! \$this->isEnabled(\$name)) {
            throw new \\InvalidArgumentException(\"Filter '\" . \$name . \"' is not enabled.\");
        }

        return \$this->enabledFilters[\$name];
    }

    /**
     * Checks whether filter with given name is defined.
     *
     * @param string \$name Name of the filter.
     *
     * @return bool true if the filter exists, false if not.
     */
    public function has(\$name)
    {
        return null !== \$this->config->getFilterClassName(\$name);
    }

    /**
     * Checks if a filter is enabled.
     *
     * @param string \$name Name of the filter.
     *
     * @return boolean True if the filter is enabled, false otherwise.
     */
    public function isEnabled(\$name)
    {
        return isset(\$this->enabledFilters[\$name]);
    }

    /**
     * @return boolean True, if the filter collection is clean.
     */
    public function isClean()
    {
        return self::FILTERS_STATE_CLEAN === \$this->filtersState;
    }

    /**
     * Generates a string of currently enabled filters to use for the cache id.
     *
     * @return string
     */
    public function getHash()
    {
        // If there are only clean filters, the previous hash can be returned
        if (self::FILTERS_STATE_CLEAN === \$this->filtersState) {
            return \$this->filterHash;
        }

        \$filterHash = '';

        foreach (\$this->enabledFilters as \$name => \$filter) {
            \$filterHash .= \$name . \$filter;
        }

        return \$filterHash;
    }

    /**
     * Sets the filter state to dirty.
     */
    public function setFiltersStateDirty()
    {
        \$this->filtersState = self::FILTERS_STATE_DIRTY;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Query/FilterCollection.php";
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

namespace Doctrine\\ORM\\Query;

use Doctrine\\ORM\\EntityManagerInterface;

/**
 * Collection class for all the query filters.
 *
 * @author Alexander <iam.asm89@gmail.com>
 */
class FilterCollection
{
    /* Filter STATES */

    /**
     * A filter object is in CLEAN state when it has no changed parameters.
     */
    const FILTERS_STATE_CLEAN  = 1;

    /**
     * A filter object is in DIRTY state when it has changed parameters.
     */
    const FILTERS_STATE_DIRTY = 2;

    /**
     * The used Configuration.
     *
     * @var \\Doctrine\\ORM\\Configuration
     */
    private \$config;

    /**
     * The EntityManager that \"owns\" this FilterCollection instance.
     *
     * @var \\Doctrine\\ORM\\EntityManager
     */
    private \$em;

    /**
     * Instances of enabled filters.
     *
     * @var \\Doctrine\\ORM\\Query\\Filter\\SQLFilter[]
     */
    private \$enabledFilters = [];

    /**
     * @var string The filter hash from the last time the query was parsed.
     */
    private \$filterHash;

    /**
     * @var integer The current state of this filter.
     */
    private \$filtersState = self::FILTERS_STATE_CLEAN;

    /**
     * Constructor.
     *
     * @param EntityManagerInterface \$em
     */
    public function __construct(EntityManagerInterface \$em)
    {
        \$this->em = \$em;
        \$this->config = \$em->getConfiguration();
    }

    /**
     * Gets all the enabled filters.
     *
     * @return \\Doctrine\\ORM\\Query\\Filter\\SQLFilter[] The enabled filters.
     */
    public function getEnabledFilters()
    {
        return \$this->enabledFilters;
    }

    /**
     * Enables a filter from the collection.
     *
     * @param string \$name Name of the filter.
     *
     * @return \\Doctrine\\ORM\\Query\\Filter\\SQLFilter The enabled filter.
     *
     * @throws \\InvalidArgumentException If the filter does not exist.
     */
    public function enable(\$name)
    {
        if ( ! \$this->has(\$name)) {
            throw new \\InvalidArgumentException(\"Filter '\" . \$name . \"' does not exist.\");
        }

        if ( ! \$this->isEnabled(\$name)) {
            \$filterClass = \$this->config->getFilterClassName(\$name);

            \$this->enabledFilters[\$name] = new \$filterClass(\$this->em);

            // Keep the enabled filters sorted for the hash
            ksort(\$this->enabledFilters);

            // Now the filter collection is dirty
            \$this->filtersState = self::FILTERS_STATE_DIRTY;
        }

        return \$this->enabledFilters[\$name];
    }

    /**
     * Disables a filter.
     *
     * @param string \$name Name of the filter.
     *
     * @return \\Doctrine\\ORM\\Query\\Filter\\SQLFilter The disabled filter.
     *
     * @throws \\InvalidArgumentException If the filter does not exist.
     */
    public function disable(\$name)
    {
        // Get the filter to return it
        \$filter = \$this->getFilter(\$name);

        unset(\$this->enabledFilters[\$name]);

        // Now the filter collection is dirty
        \$this->filtersState = self::FILTERS_STATE_DIRTY;

        return \$filter;
    }

    /**
     * Gets an enabled filter from the collection.
     *
     * @param string \$name Name of the filter.
     *
     * @return \\Doctrine\\ORM\\Query\\Filter\\SQLFilter The filter.
     *
     * @throws \\InvalidArgumentException If the filter is not enabled.
     */
    public function getFilter(\$name)
    {
        if ( ! \$this->isEnabled(\$name)) {
            throw new \\InvalidArgumentException(\"Filter '\" . \$name . \"' is not enabled.\");
        }

        return \$this->enabledFilters[\$name];
    }

    /**
     * Checks whether filter with given name is defined.
     *
     * @param string \$name Name of the filter.
     *
     * @return bool true if the filter exists, false if not.
     */
    public function has(\$name)
    {
        return null !== \$this->config->getFilterClassName(\$name);
    }

    /**
     * Checks if a filter is enabled.
     *
     * @param string \$name Name of the filter.
     *
     * @return boolean True if the filter is enabled, false otherwise.
     */
    public function isEnabled(\$name)
    {
        return isset(\$this->enabledFilters[\$name]);
    }

    /**
     * @return boolean True, if the filter collection is clean.
     */
    public function isClean()
    {
        return self::FILTERS_STATE_CLEAN === \$this->filtersState;
    }

    /**
     * Generates a string of currently enabled filters to use for the cache id.
     *
     * @return string
     */
    public function getHash()
    {
        // If there are only clean filters, the previous hash can be returned
        if (self::FILTERS_STATE_CLEAN === \$this->filtersState) {
            return \$this->filterHash;
        }

        \$filterHash = '';

        foreach (\$this->enabledFilters as \$name => \$filter) {
            \$filterHash .= \$name . \$filter;
        }

        return \$filterHash;
    }

    /**
     * Sets the filter state to dirty.
     */
    public function setFiltersStateDirty()
    {
        \$this->filtersState = self::FILTERS_STATE_DIRTY;
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/FilterCollection.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Query/FilterCollection.php");
    }
}
