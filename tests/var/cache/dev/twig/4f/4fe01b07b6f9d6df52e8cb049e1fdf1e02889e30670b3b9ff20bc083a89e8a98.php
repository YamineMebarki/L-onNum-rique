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

/* vendor/symfony/validator/Tests/Constraints/EmailTest.php */
class __TwigTemplate_0b2e3e7b2fbd971f6e2df67fc94dbe17da51b3517f5184564dd4980fd414b6c0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/EmailTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/EmailTest.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraints\\Email;

class EmailTest extends TestCase
{
    /**
     * @expectedDeprecation The \"strict\" property is deprecated since Symfony 4.1. Use \"mode\"=>\"strict\" instead.
     * @group legacy
     */
    public function testLegacyConstructorStrict()
    {
        \$subject = new Email(['strict' => true]);

        \$this->assertTrue(\$subject->strict);
    }

    public function testConstructorStrict()
    {
        \$subject = new Email(['mode' => Email::VALIDATION_MODE_STRICT]);

        \$this->assertEquals(Email::VALIDATION_MODE_STRICT, \$subject->mode);
    }

    public function testUnknownModesTriggerException()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"mode\" parameter value is not valid.');
        new Email(['mode' => 'Unknown Mode']);
    }

    public function testNormalizerCanBeSet()
    {
        \$email = new Email(['normalizer' => 'trim']);

        \$this->assertEquals('trim', \$email->normalizer);
    }

    public function testInvalidNormalizerThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"normalizer\" option must be a valid callable (\"string\" given).');
        new Email(['normalizer' => 'Unknown Callable']);
    }

    public function testInvalidNormalizerObjectThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"normalizer\" option must be a valid callable (\"stdClass\" given).');
        new Email(['normalizer' => new \\stdClass()]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/EmailTest.php";
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

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Validator\\Constraints\\Email;

class EmailTest extends TestCase
{
    /**
     * @expectedDeprecation The \"strict\" property is deprecated since Symfony 4.1. Use \"mode\"=>\"strict\" instead.
     * @group legacy
     */
    public function testLegacyConstructorStrict()
    {
        \$subject = new Email(['strict' => true]);

        \$this->assertTrue(\$subject->strict);
    }

    public function testConstructorStrict()
    {
        \$subject = new Email(['mode' => Email::VALIDATION_MODE_STRICT]);

        \$this->assertEquals(Email::VALIDATION_MODE_STRICT, \$subject->mode);
    }

    public function testUnknownModesTriggerException()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"mode\" parameter value is not valid.');
        new Email(['mode' => 'Unknown Mode']);
    }

    public function testNormalizerCanBeSet()
    {
        \$email = new Email(['normalizer' => 'trim']);

        \$this->assertEquals('trim', \$email->normalizer);
    }

    public function testInvalidNormalizerThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"normalizer\" option must be a valid callable (\"string\" given).');
        new Email(['normalizer' => 'Unknown Callable']);
    }

    public function testInvalidNormalizerObjectThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"normalizer\" option must be a valid callable (\"stdClass\" given).');
        new Email(['normalizer' => new \\stdClass()]);
    }
}
", "vendor/symfony/validator/Tests/Constraints/EmailTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/EmailTest.php");
    }
}
