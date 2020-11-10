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

/* vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ReflectionEmbeddedProperty.php */
class __TwigTemplate_c5c6b3bc295765e98f5657a38070b1a88c6e0191260a30d0209bc644cba390f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ReflectionEmbeddedProperty.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ReflectionEmbeddedProperty.php"));

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

namespace Doctrine\\ORM\\Mapping;

use Doctrine\\Instantiator\\Instantiator;
use ReflectionProperty;

/**
 * Acts as a proxy to a nested Property structure, making it look like
 * just a single scalar property.
 *
 * This way value objects \"just work\" without UnitOfWork, Persisters or Hydrators
 * needing any changes.
 *
 * Todo: Move this class into Common\\Reflection
 */
class ReflectionEmbeddedProperty extends ReflectionProperty
{
    /**
     * @var ReflectionProperty reflection property of the class where the embedded object has to be put
     */
    private \$parentProperty;

    /**
     * @var ReflectionProperty reflection property of the embedded object
     */
    private \$childProperty;

    /**
     * @var string name of the embedded class to be eventually instantiated
     */
    private \$embeddedClass;

    /**
     * @var Instantiator|null
     */
    private \$instantiator;

    /**
     * @param ReflectionProperty \$parentProperty
     * @param ReflectionProperty \$childProperty
     * @param string             \$embeddedClass
     */
    public function __construct(ReflectionProperty \$parentProperty, ReflectionProperty \$childProperty, \$embeddedClass)
    {
        \$this->parentProperty  = \$parentProperty;
        \$this->childProperty   = \$childProperty;
        \$this->embeddedClass   = (string) \$embeddedClass;

        parent::__construct(\$childProperty->getDeclaringClass()->getName(), \$childProperty->getName());
    }

    /**
     * {@inheritDoc}
     */
    public function getValue(\$object = null)
    {
        \$embeddedObject = \$this->parentProperty->getValue(\$object);

        if (null === \$embeddedObject) {
            return null;
        }

        return \$this->childProperty->getValue(\$embeddedObject);
    }

    /**
     * {@inheritDoc}
     */
    public function setValue(\$object, \$value = null)
    {
        \$embeddedObject = \$this->parentProperty->getValue(\$object);

        if (null === \$embeddedObject) {
            \$this->instantiator = \$this->instantiator ?: new Instantiator();

            \$embeddedObject = \$this->instantiator->instantiate(\$this->embeddedClass);

            \$this->parentProperty->setValue(\$object, \$embeddedObject);
        }

        \$this->childProperty->setValue(\$embeddedObject, \$value);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ReflectionEmbeddedProperty.php";
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

namespace Doctrine\\ORM\\Mapping;

use Doctrine\\Instantiator\\Instantiator;
use ReflectionProperty;

/**
 * Acts as a proxy to a nested Property structure, making it look like
 * just a single scalar property.
 *
 * This way value objects \"just work\" without UnitOfWork, Persisters or Hydrators
 * needing any changes.
 *
 * Todo: Move this class into Common\\Reflection
 */
class ReflectionEmbeddedProperty extends ReflectionProperty
{
    /**
     * @var ReflectionProperty reflection property of the class where the embedded object has to be put
     */
    private \$parentProperty;

    /**
     * @var ReflectionProperty reflection property of the embedded object
     */
    private \$childProperty;

    /**
     * @var string name of the embedded class to be eventually instantiated
     */
    private \$embeddedClass;

    /**
     * @var Instantiator|null
     */
    private \$instantiator;

    /**
     * @param ReflectionProperty \$parentProperty
     * @param ReflectionProperty \$childProperty
     * @param string             \$embeddedClass
     */
    public function __construct(ReflectionProperty \$parentProperty, ReflectionProperty \$childProperty, \$embeddedClass)
    {
        \$this->parentProperty  = \$parentProperty;
        \$this->childProperty   = \$childProperty;
        \$this->embeddedClass   = (string) \$embeddedClass;

        parent::__construct(\$childProperty->getDeclaringClass()->getName(), \$childProperty->getName());
    }

    /**
     * {@inheritDoc}
     */
    public function getValue(\$object = null)
    {
        \$embeddedObject = \$this->parentProperty->getValue(\$object);

        if (null === \$embeddedObject) {
            return null;
        }

        return \$this->childProperty->getValue(\$embeddedObject);
    }

    /**
     * {@inheritDoc}
     */
    public function setValue(\$object, \$value = null)
    {
        \$embeddedObject = \$this->parentProperty->getValue(\$object);

        if (null === \$embeddedObject) {
            \$this->instantiator = \$this->instantiator ?: new Instantiator();

            \$embeddedObject = \$this->instantiator->instantiate(\$this->embeddedClass);

            \$this->parentProperty->setValue(\$object, \$embeddedObject);
        }

        \$this->childProperty->setValue(\$embeddedObject, \$value);
    }
}
", "vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ReflectionEmbeddedProperty.php", "/var/www/public/DevLaon/templates/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/ReflectionEmbeddedProperty.php");
    }
}
