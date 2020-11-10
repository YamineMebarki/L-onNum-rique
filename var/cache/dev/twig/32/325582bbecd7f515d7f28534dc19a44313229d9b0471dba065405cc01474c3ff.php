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

/* vendor/symfony/security-csrf/Tests/TokenGenerator/UriSafeTokenGeneratorTest.php */
class __TwigTemplate_933d45816c0cfab22cff5923eea65ec10536c62261ab197d06ae98c5dffd1a55 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/Tests/TokenGenerator/UriSafeTokenGeneratorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/Tests/TokenGenerator/UriSafeTokenGeneratorTest.php"));

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

namespace Symfony\\Component\\Security\\Csrf\\Tests\\TokenGenerator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class UriSafeTokenGeneratorTest extends TestCase
{
    const ENTROPY = 1000;

    /**
     * A non alpha-numeric byte string.
     *
     * @var string
     */
    private static \$bytes;

    /**
     * @var UriSafeTokenGenerator
     */
    private \$generator;

    public static function setUpBeforeClass(): void
    {
        self::\$bytes = base64_decode('aMf+Tct/RLn2WQ==');
    }

    protected function setUp(): void
    {
        \$this->generator = new UriSafeTokenGenerator(self::ENTROPY);
    }

    protected function tearDown(): void
    {
        \$this->generator = null;
    }

    public function testGenerateToken()
    {
        \$token = \$this->generator->generateToken();

        \$this->assertTrue(ctype_print(\$token), 'is printable');
        \$this->assertStringNotMatchesFormat('%S+%S', \$token, 'is URI safe');
        \$this->assertStringNotMatchesFormat('%S/%S', \$token, 'is URI safe');
        \$this->assertStringNotMatchesFormat('%S=%S', \$token, 'is URI safe');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-csrf/Tests/TokenGenerator/UriSafeTokenGeneratorTest.php";
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

namespace Symfony\\Component\\Security\\Csrf\\Tests\\TokenGenerator;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Csrf\\TokenGenerator\\UriSafeTokenGenerator;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class UriSafeTokenGeneratorTest extends TestCase
{
    const ENTROPY = 1000;

    /**
     * A non alpha-numeric byte string.
     *
     * @var string
     */
    private static \$bytes;

    /**
     * @var UriSafeTokenGenerator
     */
    private \$generator;

    public static function setUpBeforeClass(): void
    {
        self::\$bytes = base64_decode('aMf+Tct/RLn2WQ==');
    }

    protected function setUp(): void
    {
        \$this->generator = new UriSafeTokenGenerator(self::ENTROPY);
    }

    protected function tearDown(): void
    {
        \$this->generator = null;
    }

    public function testGenerateToken()
    {
        \$token = \$this->generator->generateToken();

        \$this->assertTrue(ctype_print(\$token), 'is printable');
        \$this->assertStringNotMatchesFormat('%S+%S', \$token, 'is URI safe');
        \$this->assertStringNotMatchesFormat('%S/%S', \$token, 'is URI safe');
        \$this->assertStringNotMatchesFormat('%S=%S', \$token, 'is URI safe');
    }
}
", "vendor/symfony/security-csrf/Tests/TokenGenerator/UriSafeTokenGeneratorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-csrf/Tests/TokenGenerator/UriSafeTokenGeneratorTest.php");
    }
}
