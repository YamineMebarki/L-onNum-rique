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

/* vendor/symfony/validator/Tests/Constraints/UuidTest.php */
class __TwigTemplate_02bd231b3be5f98944e06a4da25353c177d64f41bf0e51ebb8d21c05ea613836 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/UuidTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/UuidTest.php"));

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
use Symfony\\Component\\Validator\\Constraints\\Uuid;

/**
 * @author Renan Taranto <renantaranto@gmail.com>
 */
class UuidTest extends TestCase
{
    public function testNormalizerCanBeSet()
    {
        \$uuid = new Uuid(['normalizer' => 'trim']);

        \$this->assertEquals('trim', \$uuid->normalizer);
    }

    public function testInvalidNormalizerThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"normalizer\" option must be a valid callable (\"string\" given).');
        new Uuid(['normalizer' => 'Unknown Callable']);
    }

    public function testInvalidNormalizerObjectThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"normalizer\" option must be a valid callable (\"stdClass\" given).');
        new Uuid(['normalizer' => new \\stdClass()]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/UuidTest.php";
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
use Symfony\\Component\\Validator\\Constraints\\Uuid;

/**
 * @author Renan Taranto <renantaranto@gmail.com>
 */
class UuidTest extends TestCase
{
    public function testNormalizerCanBeSet()
    {
        \$uuid = new Uuid(['normalizer' => 'trim']);

        \$this->assertEquals('trim', \$uuid->normalizer);
    }

    public function testInvalidNormalizerThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"normalizer\" option must be a valid callable (\"string\" given).');
        new Uuid(['normalizer' => 'Unknown Callable']);
    }

    public function testInvalidNormalizerObjectThrowsException()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('The \"normalizer\" option must be a valid callable (\"stdClass\" given).');
        new Uuid(['normalizer' => new \\stdClass()]);
    }
}
", "vendor/symfony/validator/Tests/Constraints/UuidTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/UuidTest.php");
    }
}
