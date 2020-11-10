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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/MetadataFilter.php */
class __TwigTemplate_d87ed5047a96b126ac6a4e245a8aece017b1f161203e4799af59d28bc7a6af55 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/MetadataFilter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/MetadataFilter.php"));

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

namespace Doctrine\\ORM\\Tools\\Console;

/**
 * Used by CLI Tools to restrict entity-based commands to given patterns.
 *
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        www.doctrine-project.com
 * @since       1.0
 * @author      Benjamin Eberlei <kontakt@beberlei.de>
 * @author      Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author      Jonathan Wage <jonwage@gmail.com>
 * @author      Roman Borschel <roman@code-factory.org>
 */
class MetadataFilter extends \\FilterIterator implements \\Countable
{
    /**
     * @var array
     */
    private \$filter = [];

    /**
     * Filter Metadatas by one or more filter options.
     *
     * @param array        \$metadatas
     * @param array|string \$filter
     *
     * @return array
     */
    static public function filter(array \$metadatas, \$filter)
    {
        \$metadatas = new MetadataFilter(new \\ArrayIterator(\$metadatas), \$filter);

        return iterator_to_array(\$metadatas);
    }

    /**
     * @param \\ArrayIterator \$metadata
     * @param array|string   \$filter
     */
    public function __construct(\\ArrayIterator \$metadata, \$filter)
    {
        \$this->filter = (array) \$filter;

        parent::__construct(\$metadata);
    }

    /**
     * @return bool
     */
    public function accept()
    {
        if (count(\$this->filter) == 0) {
            return true;
        }

        \$it = \$this->getInnerIterator();
        \$metadata = \$it->current();

        foreach (\$this->filter as \$filter) {
            \$pregResult = preg_match(\"/\$filter/\", \$metadata->name);

            if (\$pregResult === false) {
                throw new \\RuntimeException(
                    sprintf(\"Error while evaluating regex '/%s/'.\", \$filter)
                );
            }

            if (\$pregResult) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return int
     */
    public function count()
    {
        return count(\$this->getInnerIterator());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/MetadataFilter.php";
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

namespace Doctrine\\ORM\\Tools\\Console;

/**
 * Used by CLI Tools to restrict entity-based commands to given patterns.
 *
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        www.doctrine-project.com
 * @since       1.0
 * @author      Benjamin Eberlei <kontakt@beberlei.de>
 * @author      Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author      Jonathan Wage <jonwage@gmail.com>
 * @author      Roman Borschel <roman@code-factory.org>
 */
class MetadataFilter extends \\FilterIterator implements \\Countable
{
    /**
     * @var array
     */
    private \$filter = [];

    /**
     * Filter Metadatas by one or more filter options.
     *
     * @param array        \$metadatas
     * @param array|string \$filter
     *
     * @return array
     */
    static public function filter(array \$metadatas, \$filter)
    {
        \$metadatas = new MetadataFilter(new \\ArrayIterator(\$metadatas), \$filter);

        return iterator_to_array(\$metadatas);
    }

    /**
     * @param \\ArrayIterator \$metadata
     * @param array|string   \$filter
     */
    public function __construct(\\ArrayIterator \$metadata, \$filter)
    {
        \$this->filter = (array) \$filter;

        parent::__construct(\$metadata);
    }

    /**
     * @return bool
     */
    public function accept()
    {
        if (count(\$this->filter) == 0) {
            return true;
        }

        \$it = \$this->getInnerIterator();
        \$metadata = \$it->current();

        foreach (\$this->filter as \$filter) {
            \$pregResult = preg_match(\"/\$filter/\", \$metadata->name);

            if (\$pregResult === false) {
                throw new \\RuntimeException(
                    sprintf(\"Error while evaluating regex '/%s/'.\", \$filter)
                );
            }

            if (\$pregResult) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return int
     */
    public function count()
    {
        return count(\$this->getInnerIterator());
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/MetadataFilter.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Tools/Console/MetadataFilter.php");
    }
}
