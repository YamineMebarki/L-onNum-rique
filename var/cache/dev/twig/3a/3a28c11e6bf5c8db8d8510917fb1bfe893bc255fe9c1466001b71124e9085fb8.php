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

/* vendor/symfony/property-info/Tests/Fixtures/Dummy.php */
class __TwigTemplate_a3893ad135422489489cd1d473ba4b681adf26c7a1191e2a32e6a614fa257043 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Tests/Fixtures/Dummy.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-info/Tests/Fixtures/Dummy.php"));

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

namespace Symfony\\Component\\PropertyInfo\\Tests\\Fixtures;

use Symfony\\Component\\Serializer\\Annotation\\Groups;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Dummy extends ParentDummy
{
    /**
     * @var string This is bar
     */
    private \$bar;

    /**
     * Should be used.
     *
     * @var int Should be ignored
     */
    protected \$baz;

    /**
     * @var \\DateTime
     */
    public \$bal;

    /**
     * @var ParentDummy
     */
    public \$parent;

    /**
     * @var \\DateTime[]
     * @Groups({\"a\", \"b\"})
     */
    public \$collection;

    /**
     * @var string[][]
     */
    public \$nestedCollection;

    /**
     * @var mixed[]
     */
    public \$mixedCollection;

    /**
     * @var ParentDummy
     */
    public \$B;

    /**
     * @var int
     */
    protected \$Id;

    /**
     * @var string
     */
    public \$Guid;

    /**
     * Nullable array.
     *
     * @var array|null
     */
    public \$g;

    /**
     * @var ?string
     */
    public \$h;

    /**
     * @var ?string|int
     */
    public \$i;

    /**
     * @var ?\\DateTime
     */
    public \$j;

    /**
     * This should not be removed.
     *
     * @var
     */
    public \$emptyVar;

    /**
     * @var \\Iterator<string>
     */
    public \$iteratorCollection;

    /**
     * @var \\Iterator<integer,string>
     */
    public \$iteratorCollectionWithKey;

    /**
     * @var \\Iterator<integer,\\Iterator<integer,string>>
     */
    public \$nestedIterators;

    public static function getStatic()
    {
    }

    /**
     * @return string
     */
    public static function staticGetter()
    {
    }

    public static function staticSetter(\\DateTime \$d)
    {
    }

    /**
     * A.
     *
     * @return int
     */
    public function getA()
    {
    }

    /**
     * B.
     *
     * @param ParentDummy|null \$parent
     */
    public function setB(ParentDummy \$parent = null)
    {
    }

    /**
     * Date of Birth.
     *
     * @return \\DateTime
     */
    public function getDOB()
    {
    }

    /**
     * @return int
     */
    public function getId()
    {
    }

    public function get123()
    {
    }

    /**
     * @param self \$self
     */
    public function setSelf(self \$self)
    {
    }

    /**
     * @param parent \$realParent
     */
    public function setRealParent(parent \$realParent)
    {
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-info/Tests/Fixtures/Dummy.php";
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

namespace Symfony\\Component\\PropertyInfo\\Tests\\Fixtures;

use Symfony\\Component\\Serializer\\Annotation\\Groups;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Dummy extends ParentDummy
{
    /**
     * @var string This is bar
     */
    private \$bar;

    /**
     * Should be used.
     *
     * @var int Should be ignored
     */
    protected \$baz;

    /**
     * @var \\DateTime
     */
    public \$bal;

    /**
     * @var ParentDummy
     */
    public \$parent;

    /**
     * @var \\DateTime[]
     * @Groups({\"a\", \"b\"})
     */
    public \$collection;

    /**
     * @var string[][]
     */
    public \$nestedCollection;

    /**
     * @var mixed[]
     */
    public \$mixedCollection;

    /**
     * @var ParentDummy
     */
    public \$B;

    /**
     * @var int
     */
    protected \$Id;

    /**
     * @var string
     */
    public \$Guid;

    /**
     * Nullable array.
     *
     * @var array|null
     */
    public \$g;

    /**
     * @var ?string
     */
    public \$h;

    /**
     * @var ?string|int
     */
    public \$i;

    /**
     * @var ?\\DateTime
     */
    public \$j;

    /**
     * This should not be removed.
     *
     * @var
     */
    public \$emptyVar;

    /**
     * @var \\Iterator<string>
     */
    public \$iteratorCollection;

    /**
     * @var \\Iterator<integer,string>
     */
    public \$iteratorCollectionWithKey;

    /**
     * @var \\Iterator<integer,\\Iterator<integer,string>>
     */
    public \$nestedIterators;

    public static function getStatic()
    {
    }

    /**
     * @return string
     */
    public static function staticGetter()
    {
    }

    public static function staticSetter(\\DateTime \$d)
    {
    }

    /**
     * A.
     *
     * @return int
     */
    public function getA()
    {
    }

    /**
     * B.
     *
     * @param ParentDummy|null \$parent
     */
    public function setB(ParentDummy \$parent = null)
    {
    }

    /**
     * Date of Birth.
     *
     * @return \\DateTime
     */
    public function getDOB()
    {
    }

    /**
     * @return int
     */
    public function getId()
    {
    }

    public function get123()
    {
    }

    /**
     * @param self \$self
     */
    public function setSelf(self \$self)
    {
    }

    /**
     * @param parent \$realParent
     */
    public function setRealParent(parent \$realParent)
    {
    }
}
", "vendor/symfony/property-info/Tests/Fixtures/Dummy.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-info/Tests/Fixtures/Dummy.php");
    }
}
