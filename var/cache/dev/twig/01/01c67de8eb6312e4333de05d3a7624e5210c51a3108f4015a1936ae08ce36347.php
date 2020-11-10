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

/* vendor/symfony/security-core/Tests/Encoder/BCryptPasswordEncoderTest.php */
class __TwigTemplate_e93decba8623ffa5d5d9eed0b6b87fd22a110def7006f52db19fad61285c87c9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Encoder/BCryptPasswordEncoderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Encoder/BCryptPasswordEncoderTest.php"));

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

namespace Symfony\\Component\\Security\\Core\\Tests\\Encoder;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder;

/**
 * @author Elnur Abdurrakhimov <elnur@elnur.pro>
 *
 * @group legacy
 */
class BCryptPasswordEncoderTest extends TestCase
{
    const PASSWORD = 'password';
    const VALID_COST = '04';

    public function testCostBelowRange()
    {
        \$this->expectException('InvalidArgumentException');
        new BCryptPasswordEncoder(3);
    }

    public function testCostAboveRange()
    {
        \$this->expectException('InvalidArgumentException');
        new BCryptPasswordEncoder(32);
    }

    /**
     * @dataProvider validRangeData
     */
    public function testCostInRange(\$cost)
    {
        \$this->assertInstanceOf('Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder', new BCryptPasswordEncoder(\$cost));
    }

    public function validRangeData()
    {
        \$costs = range(4, 31);
        array_walk(\$costs, function (&\$cost) { \$cost = [\$cost]; });

        return \$costs;
    }

    public function testResultLength()
    {
        \$encoder = new BCryptPasswordEncoder(self::VALID_COST);
        \$result = \$encoder->encodePassword(self::PASSWORD, null);
        \$this->assertEquals(60, \\strlen(\$result));
    }

    public function testValidation()
    {
        \$encoder = new BCryptPasswordEncoder(self::VALID_COST);
        \$result = \$encoder->encodePassword(self::PASSWORD, null);
        \$this->assertTrue(\$encoder->isPasswordValid(\$result, self::PASSWORD, null));
        \$this->assertFalse(\$encoder->isPasswordValid(\$result, 'anotherPassword', null));
    }

    public function testEncodePasswordLength()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$encoder = new BCryptPasswordEncoder(self::VALID_COST);

        \$encoder->encodePassword(str_repeat('a', 73), 'salt');
    }

    public function testCheckPasswordLength()
    {
        \$encoder = new BCryptPasswordEncoder(self::VALID_COST);
        \$result = \$encoder->encodePassword(str_repeat('a', 72), null);

        \$this->assertFalse(\$encoder->isPasswordValid(\$result, str_repeat('a', 73), 'salt'));
        \$this->assertTrue(\$encoder->isPasswordValid(\$result, str_repeat('a', 72), 'salt'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Encoder/BCryptPasswordEncoderTest.php";
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

namespace Symfony\\Component\\Security\\Core\\Tests\\Encoder;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder;

/**
 * @author Elnur Abdurrakhimov <elnur@elnur.pro>
 *
 * @group legacy
 */
class BCryptPasswordEncoderTest extends TestCase
{
    const PASSWORD = 'password';
    const VALID_COST = '04';

    public function testCostBelowRange()
    {
        \$this->expectException('InvalidArgumentException');
        new BCryptPasswordEncoder(3);
    }

    public function testCostAboveRange()
    {
        \$this->expectException('InvalidArgumentException');
        new BCryptPasswordEncoder(32);
    }

    /**
     * @dataProvider validRangeData
     */
    public function testCostInRange(\$cost)
    {
        \$this->assertInstanceOf('Symfony\\Component\\Security\\Core\\Encoder\\BCryptPasswordEncoder', new BCryptPasswordEncoder(\$cost));
    }

    public function validRangeData()
    {
        \$costs = range(4, 31);
        array_walk(\$costs, function (&\$cost) { \$cost = [\$cost]; });

        return \$costs;
    }

    public function testResultLength()
    {
        \$encoder = new BCryptPasswordEncoder(self::VALID_COST);
        \$result = \$encoder->encodePassword(self::PASSWORD, null);
        \$this->assertEquals(60, \\strlen(\$result));
    }

    public function testValidation()
    {
        \$encoder = new BCryptPasswordEncoder(self::VALID_COST);
        \$result = \$encoder->encodePassword(self::PASSWORD, null);
        \$this->assertTrue(\$encoder->isPasswordValid(\$result, self::PASSWORD, null));
        \$this->assertFalse(\$encoder->isPasswordValid(\$result, 'anotherPassword', null));
    }

    public function testEncodePasswordLength()
    {
        \$this->expectException('Symfony\\Component\\Security\\Core\\Exception\\BadCredentialsException');
        \$encoder = new BCryptPasswordEncoder(self::VALID_COST);

        \$encoder->encodePassword(str_repeat('a', 73), 'salt');
    }

    public function testCheckPasswordLength()
    {
        \$encoder = new BCryptPasswordEncoder(self::VALID_COST);
        \$result = \$encoder->encodePassword(str_repeat('a', 72), null);

        \$this->assertFalse(\$encoder->isPasswordValid(\$result, str_repeat('a', 73), 'salt'));
        \$this->assertTrue(\$encoder->isPasswordValid(\$result, str_repeat('a', 72), 'salt'));
    }
}
", "vendor/symfony/security-core/Tests/Encoder/BCryptPasswordEncoderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Encoder/BCryptPasswordEncoderTest.php");
    }
}
