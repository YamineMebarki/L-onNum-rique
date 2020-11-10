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

/* vendor/symfony/mime/Tests/Header/DateHeaderTest.php */
class __TwigTemplate_d75f4a63e2ba6708aed98fe357a8f79f18a9f22bf70e0024a74071a4e4896306 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Header/DateHeaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Header/DateHeaderTest.php"));

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

namespace Symfony\\Component\\Mime\\Tests\\Header;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Header\\DateHeader;

class DateHeaderTest extends TestCase
{
    /* --
    The following tests refer to RFC 2822, section 3.6.1 and 3.3.
    */

    public function testGetDateTime()
    {
        \$header = new DateHeader('Date', \$dateTime = new \\DateTimeImmutable());
        \$this->assertSame(\$dateTime, \$header->getDateTime());
    }

    public function testDateTimeCanBeSetBySetter()
    {
        \$header = new DateHeader('Date', new \\DateTimeImmutable());
        \$header->setDateTime(\$dateTime = new \\DateTimeImmutable());
        \$this->assertSame(\$dateTime, \$header->getDateTime());
    }

    public function testDateTimeIsConvertedToImmutable()
    {
        \$dateTime = new \\DateTime();
        \$header = new DateHeader('Date', \$dateTime);
        \$this->assertInstanceOf('DateTimeImmutable', \$header->getDateTime());
        \$this->assertEquals(\$dateTime->getTimestamp(), \$header->getDateTime()->getTimestamp());
        \$this->assertEquals(\$dateTime->getTimezone(), \$header->getDateTime()->getTimezone());
    }

    public function testDateTimeIsImmutable()
    {
        \$header = new DateHeader('Date', \$dateTime = new \\DateTime('2000-01-01 12:00:00 Europe/Berlin'));
        \$dateTime->setDate(2002, 2, 2);
        \$this->assertEquals('Sat, 01 Jan 2000 12:00:00 +0100', \$header->getDateTime()->format('r'));
        \$this->assertEquals('Sat, 01 Jan 2000 12:00:00 +0100', \$header->getBodyAsString());
    }

    public function testDateTimeIsConvertedToRfc2822Date()
    {
        \$header = new DateHeader('Date', \$dateTime = new \\DateTimeImmutable('2000-01-01 12:00:00 Europe/Berlin'));
        \$header->setDateTime(\$dateTime);
        \$this->assertEquals('Sat, 01 Jan 2000 12:00:00 +0100', \$header->getBodyAsString());
    }

    public function testSetBody()
    {
        \$header = new DateHeader('Date', \$dateTime = new \\DateTimeImmutable());
        \$header->setBody(\$dateTime);
        \$this->assertEquals(\$dateTime->format('r'), \$header->getBodyAsString());
    }

    public function testGetBody()
    {
        \$header = new DateHeader('Date', \$dateTime = new \\DateTimeImmutable());
        \$header->setDateTime(\$dateTime);
        \$this->assertEquals(\$dateTime, \$header->getBody());
    }

    public function testToString()
    {
        \$header = new DateHeader('Date', \$dateTime = new \\DateTimeImmutable('2000-01-01 12:00:00 Europe/Berlin'));
        \$header->setDateTime(\$dateTime);
        \$this->assertEquals('Date: Sat, 01 Jan 2000 12:00:00 +0100', \$header->toString());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Tests/Header/DateHeaderTest.php";
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

namespace Symfony\\Component\\Mime\\Tests\\Header;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Header\\DateHeader;

class DateHeaderTest extends TestCase
{
    /* --
    The following tests refer to RFC 2822, section 3.6.1 and 3.3.
    */

    public function testGetDateTime()
    {
        \$header = new DateHeader('Date', \$dateTime = new \\DateTimeImmutable());
        \$this->assertSame(\$dateTime, \$header->getDateTime());
    }

    public function testDateTimeCanBeSetBySetter()
    {
        \$header = new DateHeader('Date', new \\DateTimeImmutable());
        \$header->setDateTime(\$dateTime = new \\DateTimeImmutable());
        \$this->assertSame(\$dateTime, \$header->getDateTime());
    }

    public function testDateTimeIsConvertedToImmutable()
    {
        \$dateTime = new \\DateTime();
        \$header = new DateHeader('Date', \$dateTime);
        \$this->assertInstanceOf('DateTimeImmutable', \$header->getDateTime());
        \$this->assertEquals(\$dateTime->getTimestamp(), \$header->getDateTime()->getTimestamp());
        \$this->assertEquals(\$dateTime->getTimezone(), \$header->getDateTime()->getTimezone());
    }

    public function testDateTimeIsImmutable()
    {
        \$header = new DateHeader('Date', \$dateTime = new \\DateTime('2000-01-01 12:00:00 Europe/Berlin'));
        \$dateTime->setDate(2002, 2, 2);
        \$this->assertEquals('Sat, 01 Jan 2000 12:00:00 +0100', \$header->getDateTime()->format('r'));
        \$this->assertEquals('Sat, 01 Jan 2000 12:00:00 +0100', \$header->getBodyAsString());
    }

    public function testDateTimeIsConvertedToRfc2822Date()
    {
        \$header = new DateHeader('Date', \$dateTime = new \\DateTimeImmutable('2000-01-01 12:00:00 Europe/Berlin'));
        \$header->setDateTime(\$dateTime);
        \$this->assertEquals('Sat, 01 Jan 2000 12:00:00 +0100', \$header->getBodyAsString());
    }

    public function testSetBody()
    {
        \$header = new DateHeader('Date', \$dateTime = new \\DateTimeImmutable());
        \$header->setBody(\$dateTime);
        \$this->assertEquals(\$dateTime->format('r'), \$header->getBodyAsString());
    }

    public function testGetBody()
    {
        \$header = new DateHeader('Date', \$dateTime = new \\DateTimeImmutable());
        \$header->setDateTime(\$dateTime);
        \$this->assertEquals(\$dateTime, \$header->getBody());
    }

    public function testToString()
    {
        \$header = new DateHeader('Date', \$dateTime = new \\DateTimeImmutable('2000-01-01 12:00:00 Europe/Berlin'));
        \$header->setDateTime(\$dateTime);
        \$this->assertEquals('Date: Sat, 01 Jan 2000 12:00:00 +0100', \$header->toString());
    }
}
", "vendor/symfony/mime/Tests/Header/DateHeaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/Header/DateHeaderTest.php");
    }
}
