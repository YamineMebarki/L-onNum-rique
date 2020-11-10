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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/PathExpression.php */
class __TwigTemplate_7226048c6f72e4e891ddb56abbeb2e16fec93726af8b8d550c6bc8c5a2f8afbf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/PathExpression.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/PathExpression.php"));

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

namespace Doctrine\\ORM\\Query\\AST;

/**
 * AssociationPathExpression ::= CollectionValuedPathExpression | SingleValuedAssociationPathExpression
 * SingleValuedPathExpression ::= StateFieldPathExpression | SingleValuedAssociationPathExpression
 * StateFieldPathExpression ::= SimpleStateFieldPathExpression | SimpleStateFieldAssociationPathExpression
 * SingleValuedAssociationPathExpression ::= IdentificationVariable \".\" SingleValuedAssociationField
 * CollectionValuedPathExpression ::= IdentificationVariable \".\" CollectionValuedAssociationField
 * StateField ::= {EmbeddedClassStateField \".\"}* SimpleStateField
 * SimpleStateFieldPathExpression ::= IdentificationVariable \".\" StateField
 *
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class PathExpression extends Node
{
    const TYPE_COLLECTION_VALUED_ASSOCIATION = 2;
    const TYPE_SINGLE_VALUED_ASSOCIATION = 4;
    const TYPE_STATE_FIELD = 8;

    /**
     * @var int
     */
    public \$type;

    /**
     * @var int
     */
    public \$expectedType;

    /**
     * @var string
     */
    public \$identificationVariable;

    /**
     * @var string|null
     */
    public \$field;

    /**
     * @param int         \$expectedType
     * @param string      \$identificationVariable
     * @param string|null \$field
     */
    public function __construct(\$expectedType, \$identificationVariable, \$field = null)
    {
        \$this->expectedType = \$expectedType;
        \$this->identificationVariable = \$identificationVariable;
        \$this->field = \$field;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\$walker)
    {
        return \$walker->walkPathExpression(\$this);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/PathExpression.php";
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

namespace Doctrine\\ORM\\Query\\AST;

/**
 * AssociationPathExpression ::= CollectionValuedPathExpression | SingleValuedAssociationPathExpression
 * SingleValuedPathExpression ::= StateFieldPathExpression | SingleValuedAssociationPathExpression
 * StateFieldPathExpression ::= SimpleStateFieldPathExpression | SimpleStateFieldAssociationPathExpression
 * SingleValuedAssociationPathExpression ::= IdentificationVariable \".\" SingleValuedAssociationField
 * CollectionValuedPathExpression ::= IdentificationVariable \".\" CollectionValuedAssociationField
 * StateField ::= {EmbeddedClassStateField \".\"}* SimpleStateField
 * SimpleStateFieldPathExpression ::= IdentificationVariable \".\" StateField
 *
 * @since   2.0
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class PathExpression extends Node
{
    const TYPE_COLLECTION_VALUED_ASSOCIATION = 2;
    const TYPE_SINGLE_VALUED_ASSOCIATION = 4;
    const TYPE_STATE_FIELD = 8;

    /**
     * @var int
     */
    public \$type;

    /**
     * @var int
     */
    public \$expectedType;

    /**
     * @var string
     */
    public \$identificationVariable;

    /**
     * @var string|null
     */
    public \$field;

    /**
     * @param int         \$expectedType
     * @param string      \$identificationVariable
     * @param string|null \$field
     */
    public function __construct(\$expectedType, \$identificationVariable, \$field = null)
    {
        \$this->expectedType = \$expectedType;
        \$this->identificationVariable = \$identificationVariable;
        \$this->field = \$field;
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\$walker)
    {
        return \$walker->walkPathExpression(\$this);
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/PathExpression.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Query/AST/PathExpression.php");
    }
}
