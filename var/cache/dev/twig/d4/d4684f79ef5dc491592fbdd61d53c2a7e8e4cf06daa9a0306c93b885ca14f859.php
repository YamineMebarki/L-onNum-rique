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

/* vendor/symfony/property-access/Tests/Fixtures/TestClass.php */
class __TwigTemplate_ef102a4aaa27248b1be6a1ead4364e690248935e5461d7187c164f4b0e7d612e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Tests/Fixtures/TestClass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/property-access/Tests/Fixtures/TestClass.php"));

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

namespace Symfony\\Component\\PropertyAccess\\Tests\\Fixtures;

class TestClass
{
    public \$publicProperty;
    protected \$protectedProperty;
    private \$privateProperty;

    private \$publicAccessor;
    private \$publicMethodAccessor;
    private \$publicGetSetter;
    private \$publicAccessorWithDefaultValue;
    private \$publicAccessorWithRequiredAndDefaultValue;
    private \$publicAccessorWithMoreRequiredParameters;
    private \$publicIsAccessor;
    private \$publicHasAccessor;
    private \$publicCanAccessor;
    private \$publicGetter;
    private \$date;

    public function __construct(\$value)
    {
        \$this->publicProperty = \$value;
        \$this->publicAccessor = \$value;
        \$this->publicMethodAccessor = \$value;
        \$this->publicGetSetter = \$value;
        \$this->publicAccessorWithDefaultValue = \$value;
        \$this->publicAccessorWithRequiredAndDefaultValue = \$value;
        \$this->publicAccessorWithMoreRequiredParameters = \$value;
        \$this->publicIsAccessor = \$value;
        \$this->publicHasAccessor = \$value;
        \$this->publicCanAccessor = \$value;
        \$this->publicGetter = \$value;
    }

    public function setPublicAccessor(\$value)
    {
        \$this->publicAccessor = \$value;
    }

    public function setPublicAccessorWithDefaultValue(\$value = null)
    {
        \$this->publicAccessorWithDefaultValue = \$value;
    }

    public function setPublicAccessorWithRequiredAndDefaultValue(\$value, \$optional = null)
    {
        \$this->publicAccessorWithRequiredAndDefaultValue = \$value;
    }

    public function setPublicAccessorWithMoreRequiredParameters(\$value, \$needed)
    {
        \$this->publicAccessorWithMoreRequiredParameters = \$value;
    }

    public function getPublicAccessor()
    {
        return \$this->publicAccessor;
    }

    public function getPublicAccessorWithDefaultValue()
    {
        return \$this->publicAccessorWithDefaultValue;
    }

    public function getPublicAccessorWithRequiredAndDefaultValue()
    {
        return \$this->publicAccessorWithRequiredAndDefaultValue;
    }

    public function getPublicAccessorWithMoreRequiredParameters()
    {
        return \$this->publicAccessorWithMoreRequiredParameters;
    }

    public function setPublicIsAccessor(\$value)
    {
        \$this->publicIsAccessor = \$value;
    }

    public function isPublicIsAccessor()
    {
        return \$this->publicIsAccessor;
    }

    public function setPublicHasAccessor(\$value)
    {
        \$this->publicHasAccessor = \$value;
    }

    public function hasPublicHasAccessor()
    {
        return \$this->publicHasAccessor;
    }

    public function setPublicCanAccessor(\$value)
    {
        \$this->publicCanAccessor = \$value;
    }

    public function canPublicCanAccessor()
    {
        return \$this->publicCanAccessor;
    }

    public function publicGetSetter(\$value = null)
    {
        if (null !== \$value) {
            \$this->publicGetSetter = \$value;
        }

        return \$this->publicGetSetter;
    }

    public function getPublicMethodMutator()
    {
        return \$this->publicGetSetter;
    }

    protected function setProtectedAccessor(\$value)
    {
    }

    protected function getProtectedAccessor()
    {
        return 'foobar';
    }

    protected function setProtectedIsAccessor(\$value)
    {
    }

    protected function isProtectedIsAccessor()
    {
        return 'foobar';
    }

    protected function setProtectedHasAccessor(\$value)
    {
    }

    protected function hasProtectedHasAccessor()
    {
        return 'foobar';
    }

    private function setPrivateAccessor(\$value)
    {
    }

    private function getPrivateAccessor()
    {
        return 'foobar';
    }

    private function setPrivateIsAccessor(\$value)
    {
    }

    private function isPrivateIsAccessor()
    {
        return 'foobar';
    }

    private function setPrivateHasAccessor(\$value)
    {
    }

    private function hasPrivateHasAccessor()
    {
        return 'foobar';
    }

    public function getPublicGetter()
    {
        return \$this->publicGetter;
    }

    public function setDate(\\DateTimeInterface \$date)
    {
        \$this->date = \$date;
    }

    public function getDate()
    {
        return \$this->date;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/property-access/Tests/Fixtures/TestClass.php";
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

namespace Symfony\\Component\\PropertyAccess\\Tests\\Fixtures;

class TestClass
{
    public \$publicProperty;
    protected \$protectedProperty;
    private \$privateProperty;

    private \$publicAccessor;
    private \$publicMethodAccessor;
    private \$publicGetSetter;
    private \$publicAccessorWithDefaultValue;
    private \$publicAccessorWithRequiredAndDefaultValue;
    private \$publicAccessorWithMoreRequiredParameters;
    private \$publicIsAccessor;
    private \$publicHasAccessor;
    private \$publicCanAccessor;
    private \$publicGetter;
    private \$date;

    public function __construct(\$value)
    {
        \$this->publicProperty = \$value;
        \$this->publicAccessor = \$value;
        \$this->publicMethodAccessor = \$value;
        \$this->publicGetSetter = \$value;
        \$this->publicAccessorWithDefaultValue = \$value;
        \$this->publicAccessorWithRequiredAndDefaultValue = \$value;
        \$this->publicAccessorWithMoreRequiredParameters = \$value;
        \$this->publicIsAccessor = \$value;
        \$this->publicHasAccessor = \$value;
        \$this->publicCanAccessor = \$value;
        \$this->publicGetter = \$value;
    }

    public function setPublicAccessor(\$value)
    {
        \$this->publicAccessor = \$value;
    }

    public function setPublicAccessorWithDefaultValue(\$value = null)
    {
        \$this->publicAccessorWithDefaultValue = \$value;
    }

    public function setPublicAccessorWithRequiredAndDefaultValue(\$value, \$optional = null)
    {
        \$this->publicAccessorWithRequiredAndDefaultValue = \$value;
    }

    public function setPublicAccessorWithMoreRequiredParameters(\$value, \$needed)
    {
        \$this->publicAccessorWithMoreRequiredParameters = \$value;
    }

    public function getPublicAccessor()
    {
        return \$this->publicAccessor;
    }

    public function getPublicAccessorWithDefaultValue()
    {
        return \$this->publicAccessorWithDefaultValue;
    }

    public function getPublicAccessorWithRequiredAndDefaultValue()
    {
        return \$this->publicAccessorWithRequiredAndDefaultValue;
    }

    public function getPublicAccessorWithMoreRequiredParameters()
    {
        return \$this->publicAccessorWithMoreRequiredParameters;
    }

    public function setPublicIsAccessor(\$value)
    {
        \$this->publicIsAccessor = \$value;
    }

    public function isPublicIsAccessor()
    {
        return \$this->publicIsAccessor;
    }

    public function setPublicHasAccessor(\$value)
    {
        \$this->publicHasAccessor = \$value;
    }

    public function hasPublicHasAccessor()
    {
        return \$this->publicHasAccessor;
    }

    public function setPublicCanAccessor(\$value)
    {
        \$this->publicCanAccessor = \$value;
    }

    public function canPublicCanAccessor()
    {
        return \$this->publicCanAccessor;
    }

    public function publicGetSetter(\$value = null)
    {
        if (null !== \$value) {
            \$this->publicGetSetter = \$value;
        }

        return \$this->publicGetSetter;
    }

    public function getPublicMethodMutator()
    {
        return \$this->publicGetSetter;
    }

    protected function setProtectedAccessor(\$value)
    {
    }

    protected function getProtectedAccessor()
    {
        return 'foobar';
    }

    protected function setProtectedIsAccessor(\$value)
    {
    }

    protected function isProtectedIsAccessor()
    {
        return 'foobar';
    }

    protected function setProtectedHasAccessor(\$value)
    {
    }

    protected function hasProtectedHasAccessor()
    {
        return 'foobar';
    }

    private function setPrivateAccessor(\$value)
    {
    }

    private function getPrivateAccessor()
    {
        return 'foobar';
    }

    private function setPrivateIsAccessor(\$value)
    {
    }

    private function isPrivateIsAccessor()
    {
        return 'foobar';
    }

    private function setPrivateHasAccessor(\$value)
    {
    }

    private function hasPrivateHasAccessor()
    {
        return 'foobar';
    }

    public function getPublicGetter()
    {
        return \$this->publicGetter;
    }

    public function setDate(\\DateTimeInterface \$date)
    {
        \$this->date = \$date;
    }

    public function getDate()
    {
        return \$this->date;
    }
}
", "vendor/symfony/property-access/Tests/Fixtures/TestClass.php", "/var/www/public/DevLaon/templates/vendor/symfony/property-access/Tests/Fixtures/TestClass.php");
    }
}
