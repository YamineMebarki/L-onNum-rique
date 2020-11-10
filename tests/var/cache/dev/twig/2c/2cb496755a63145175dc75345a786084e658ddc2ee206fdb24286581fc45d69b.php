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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Query/Printer.php */
class __TwigTemplate_f856c98980b965cb8d0aed8944fd617887639108e169c3ba47f31c61aeabd863 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Printer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Printer.php"));

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

/**
 * A parse tree printer for Doctrine Query Language parser.
 *
 * @author      Janne Vanhala <jpvanhal@cc.hut.fi>
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.phpdoctrine.org
 * @since       2.0
 */
class Printer
{
    /**
     * Current indentation level
     *
     * @var int
     */
    protected \$_indent = 0;

    /**
     * Defines whether parse tree is printed (default, false) or not (true).
     *
     * @var bool
     */
    protected \$_silent;

    /**
     * Constructs a new parse tree printer.
     *
     * @param bool \$silent Parse tree will not be printed if true.
     */
    public function __construct(\$silent = false)
    {
        \$this->_silent = \$silent;
    }

    /**
     * Prints an opening parenthesis followed by production name and increases
     * indentation level by one.
     *
     * This method is called before executing a production.
     *
     * @param string \$name Production name.
     *
     * @return void
     */
    public function startProduction(\$name)
    {
        \$this->println('(' . \$name);
        \$this->_indent++;
    }

    /**
     * Decreases indentation level by one and prints a closing parenthesis.
     *
     * This method is called after executing a production.
     *
     * @return void
     */
    public function endProduction()
    {
        \$this->_indent--;
        \$this->println(')');
    }

    /**
     * Prints text indented with spaces depending on current indentation level.
     *
     * @param string \$str The text.
     *
     * @return void
     */
    public function println(\$str)
    {
        if ( ! \$this->_silent) {
            echo str_repeat('    ', \$this->_indent), \$str, \"\\n\";
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Printer.php";
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

/**
 * A parse tree printer for Doctrine Query Language parser.
 *
 * @author      Janne Vanhala <jpvanhal@cc.hut.fi>
 * @license     http://www.opensource.org/licenses/mit-license.php MIT
 * @link        http://www.phpdoctrine.org
 * @since       2.0
 */
class Printer
{
    /**
     * Current indentation level
     *
     * @var int
     */
    protected \$_indent = 0;

    /**
     * Defines whether parse tree is printed (default, false) or not (true).
     *
     * @var bool
     */
    protected \$_silent;

    /**
     * Constructs a new parse tree printer.
     *
     * @param bool \$silent Parse tree will not be printed if true.
     */
    public function __construct(\$silent = false)
    {
        \$this->_silent = \$silent;
    }

    /**
     * Prints an opening parenthesis followed by production name and increases
     * indentation level by one.
     *
     * This method is called before executing a production.
     *
     * @param string \$name Production name.
     *
     * @return void
     */
    public function startProduction(\$name)
    {
        \$this->println('(' . \$name);
        \$this->_indent++;
    }

    /**
     * Decreases indentation level by one and prints a closing parenthesis.
     *
     * This method is called after executing a production.
     *
     * @return void
     */
    public function endProduction()
    {
        \$this->_indent--;
        \$this->println(')');
    }

    /**
     * Prints text indented with spaces depending on current indentation level.
     *
     * @param string \$str The text.
     *
     * @return void
     */
    public function println(\$str)
    {
        if ( ! \$this->_silent) {
            echo str_repeat('    ', \$this->_indent), \$str, \"\\n\";
        }
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/Printer.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Query/Printer.php");
    }
}
