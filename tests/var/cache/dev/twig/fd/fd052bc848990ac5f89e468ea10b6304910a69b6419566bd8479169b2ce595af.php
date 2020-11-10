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

/* vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Target.php */
class __TwigTemplate_e10a460fbc0b247a681d27eef88cebf9d8402b3a92bee75b0fec8c4bf19ea35f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Target.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Target.php"));

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

namespace Doctrine\\Common\\Annotations\\Annotation;

/**
 * Annotation that can be used to signal to the parser
 * to check the annotation target during the parsing process.
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 *
 * @Annotation
 */
final class Target
{
    const TARGET_CLASS              = 1;
    const TARGET_METHOD             = 2;
    const TARGET_PROPERTY           = 4;
    const TARGET_ANNOTATION         = 8;
    const TARGET_ALL                = 15;

    /**
     * @var array
     */
    private static \$map = [
        'ALL'        => self::TARGET_ALL,
        'CLASS'      => self::TARGET_CLASS,
        'METHOD'     => self::TARGET_METHOD,
        'PROPERTY'   => self::TARGET_PROPERTY,
        'ANNOTATION' => self::TARGET_ANNOTATION,
    ];

    /**
     * @var array
     */
    public \$value;

    /**
     * Targets as bitmask.
     *
     * @var integer
     */
    public \$targets;

    /**
     * Literal target declaration.
     *
     * @var integer
     */
    public \$literal;

    /**
     * Annotation constructor.
     *
     * @param array \$values
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(array \$values)
    {
        if (!isset(\$values['value'])){
            \$values['value'] = null;
        }
        if (is_string(\$values['value'])){
            \$values['value'] = [\$values['value']];
        }
        if (!is_array(\$values['value'])){
            throw new \\InvalidArgumentException(
                sprintf('@Target expects either a string value, or an array of strings, \"%s\" given.',
                    is_object(\$values['value']) ? get_class(\$values['value']) : gettype(\$values['value'])
                )
            );
        }

        \$bitmask = 0;
        foreach (\$values['value'] as \$literal) {
            if(!isset(self::\$map[\$literal])){
                throw new \\InvalidArgumentException(
                    sprintf('Invalid Target \"%s\". Available targets: [%s]',
                            \$literal,  implode(', ', array_keys(self::\$map)))
                );
            }
            \$bitmask |= self::\$map[\$literal];
        }

        \$this->targets  = \$bitmask;
        \$this->value    = \$values['value'];
        \$this->literal  = implode(', ', \$this->value);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Target.php";
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

namespace Doctrine\\Common\\Annotations\\Annotation;

/**
 * Annotation that can be used to signal to the parser
 * to check the annotation target during the parsing process.
 *
 * @author Fabio B. Silva <fabio.bat.silva@gmail.com>
 *
 * @Annotation
 */
final class Target
{
    const TARGET_CLASS              = 1;
    const TARGET_METHOD             = 2;
    const TARGET_PROPERTY           = 4;
    const TARGET_ANNOTATION         = 8;
    const TARGET_ALL                = 15;

    /**
     * @var array
     */
    private static \$map = [
        'ALL'        => self::TARGET_ALL,
        'CLASS'      => self::TARGET_CLASS,
        'METHOD'     => self::TARGET_METHOD,
        'PROPERTY'   => self::TARGET_PROPERTY,
        'ANNOTATION' => self::TARGET_ANNOTATION,
    ];

    /**
     * @var array
     */
    public \$value;

    /**
     * Targets as bitmask.
     *
     * @var integer
     */
    public \$targets;

    /**
     * Literal target declaration.
     *
     * @var integer
     */
    public \$literal;

    /**
     * Annotation constructor.
     *
     * @param array \$values
     *
     * @throws \\InvalidArgumentException
     */
    public function __construct(array \$values)
    {
        if (!isset(\$values['value'])){
            \$values['value'] = null;
        }
        if (is_string(\$values['value'])){
            \$values['value'] = [\$values['value']];
        }
        if (!is_array(\$values['value'])){
            throw new \\InvalidArgumentException(
                sprintf('@Target expects either a string value, or an array of strings, \"%s\" given.',
                    is_object(\$values['value']) ? get_class(\$values['value']) : gettype(\$values['value'])
                )
            );
        }

        \$bitmask = 0;
        foreach (\$values['value'] as \$literal) {
            if(!isset(self::\$map[\$literal])){
                throw new \\InvalidArgumentException(
                    sprintf('Invalid Target \"%s\". Available targets: [%s]',
                            \$literal,  implode(', ', array_keys(self::\$map)))
                );
            }
            \$bitmask |= self::\$map[\$literal];
        }

        \$this->targets  = \$bitmask;
        \$this->value    = \$values['value'];
        \$this->literal  = implode(', ', \$this->value);
    }
}
", "vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Target.php", "/var/www/public/DevLaon/templates/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Annotation/Target.php");
    }
}
