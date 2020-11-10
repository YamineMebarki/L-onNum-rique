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

/* vendor/symfony/validator/Tests/Fixtures/Entity.php */
class __TwigTemplate_67076431e4450ffc657b79e2b3db5f4c72c93cfc913cb48ba9c6965843a0bc6a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Fixtures/Entity.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Fixtures/Entity.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Validator\\Tests\\Fixtures;

use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;

/**
 * @Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA
 * @Assert\\GroupSequence({\"Foo\", \"Entity\"})
 * @Assert\\Callback({\"Symfony\\Component\\Validator\\Tests\\Fixtures\\CallbackClass\", \"callback\"})
 */
class Entity extends EntityParent implements EntityInterfaceB
{
    /**
     * @Assert\\NotNull
     * @Assert\\Range(min=3)
     * @Assert\\All({@Assert\\NotNull, @Assert\\Range(min=3)}),
     * @Assert\\All(constraints={@Assert\\NotNull, @Assert\\Range(min=3)})
     * @Assert\\Collection(fields={
     *   \"foo\" = {@Assert\\NotNull, @Assert\\Range(min=3)},
     *   \"bar\" = @Assert\\Range(min=5)
     * })
     * @Assert\\Choice(choices={\"A\", \"B\"}, message=\"Must be one of %choices%\")
     */
    public \$firstName;
    /**
     * @Assert\\Valid
     */
    public \$childA;
    /**
     * @Assert\\Valid
     */
    public \$childB;
    protected \$lastName;
    public \$reference;
    public \$reference2;
    private \$internal;
    public \$data = 'Overridden data';
    public \$initialized = false;

    public function __construct(\$internal = null)
    {
        \$this->internal = \$internal;
    }

    public function getInternal()
    {
        return \$this->internal.' from getter';
    }

    public function setLastName(\$lastName)
    {
        \$this->lastName = \$lastName;
    }

    /**
     * @Assert\\NotNull
     */
    public function getLastName()
    {
        return \$this->lastName;
    }

    public function getValid()
    {
    }

    /**
     * @Assert\\IsTrue
     */
    public function isValid()
    {
        return 'valid';
    }

    /**
     * @Assert\\IsTrue
     */
    public function hasPermissions()
    {
        return 'permissions';
    }

    public function getData()
    {
        return 'Overridden data';
    }

    /**
     * @Assert\\Callback(payload=\"foo\")
     */
    public function validateMe(ExecutionContextInterface \$context)
    {
    }

    /**
     * @Assert\\Callback
     */
    public static function validateMeStatic(\$object, ExecutionContextInterface \$context)
    {
    }

    /**
     * @return mixed
     */
    public function getChildA()
    {
        return \$this->childA;
    }

    /**
     * @param mixed \$childA
     */
    public function setChildA(\$childA)
    {
        \$this->childA = \$childA;
    }

    /**
     * @return mixed
     */
    public function getChildB()
    {
        return \$this->childB;
    }

    /**
     * @param mixed \$childB
     */
    public function setChildB(\$childB)
    {
        \$this->childB = \$childB;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Fixtures/Entity.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Validator\\Tests\\Fixtures;

use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\Context\\ExecutionContextInterface;

/**
 * @Symfony\\Component\\Validator\\Tests\\Fixtures\\ConstraintA
 * @Assert\\GroupSequence({\"Foo\", \"Entity\"})
 * @Assert\\Callback({\"Symfony\\Component\\Validator\\Tests\\Fixtures\\CallbackClass\", \"callback\"})
 */
class Entity extends EntityParent implements EntityInterfaceB
{
    /**
     * @Assert\\NotNull
     * @Assert\\Range(min=3)
     * @Assert\\All({@Assert\\NotNull, @Assert\\Range(min=3)}),
     * @Assert\\All(constraints={@Assert\\NotNull, @Assert\\Range(min=3)})
     * @Assert\\Collection(fields={
     *   \"foo\" = {@Assert\\NotNull, @Assert\\Range(min=3)},
     *   \"bar\" = @Assert\\Range(min=5)
     * })
     * @Assert\\Choice(choices={\"A\", \"B\"}, message=\"Must be one of %choices%\")
     */
    public \$firstName;
    /**
     * @Assert\\Valid
     */
    public \$childA;
    /**
     * @Assert\\Valid
     */
    public \$childB;
    protected \$lastName;
    public \$reference;
    public \$reference2;
    private \$internal;
    public \$data = 'Overridden data';
    public \$initialized = false;

    public function __construct(\$internal = null)
    {
        \$this->internal = \$internal;
    }

    public function getInternal()
    {
        return \$this->internal.' from getter';
    }

    public function setLastName(\$lastName)
    {
        \$this->lastName = \$lastName;
    }

    /**
     * @Assert\\NotNull
     */
    public function getLastName()
    {
        return \$this->lastName;
    }

    public function getValid()
    {
    }

    /**
     * @Assert\\IsTrue
     */
    public function isValid()
    {
        return 'valid';
    }

    /**
     * @Assert\\IsTrue
     */
    public function hasPermissions()
    {
        return 'permissions';
    }

    public function getData()
    {
        return 'Overridden data';
    }

    /**
     * @Assert\\Callback(payload=\"foo\")
     */
    public function validateMe(ExecutionContextInterface \$context)
    {
    }

    /**
     * @Assert\\Callback
     */
    public static function validateMeStatic(\$object, ExecutionContextInterface \$context)
    {
    }

    /**
     * @return mixed
     */
    public function getChildA()
    {
        return \$this->childA;
    }

    /**
     * @param mixed \$childA
     */
    public function setChildA(\$childA)
    {
        \$this->childA = \$childA;
    }

    /**
     * @return mixed
     */
    public function getChildB()
    {
        return \$this->childB;
    }

    /**
     * @param mixed \$childB
     */
    public function setChildB(\$childB)
    {
        \$this->childB = \$childB;
    }
}
", "vendor/symfony/validator/Tests/Fixtures/Entity.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Fixtures/Entity.php");
    }
}
