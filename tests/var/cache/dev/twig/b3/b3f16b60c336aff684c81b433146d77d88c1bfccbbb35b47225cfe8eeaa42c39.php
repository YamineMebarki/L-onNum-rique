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

/* vendor/fzaninotto/faker/test/Faker/Provider/InternetTest.php */
class __TwigTemplate_c57fe4f58cd6da578323e2ec9a148515056f51482219c1e4120e5e0392ba4396 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/InternetTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/test/Faker/Provider/InternetTest.php"));

        // line 1
        echo "<?php

namespace Faker\\Test\\Provider;

use Faker\\Generator;
use Faker\\Provider\\Company;
use Faker\\Provider\\Internet;
use Faker\\Provider\\Lorem;
use Faker\\Provider\\Person;
use PHPUnit\\Framework\\TestCase;

class InternetTest extends TestCase
{
    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Lorem(\$faker));
        \$faker->addProvider(new Person(\$faker));
        \$faker->addProvider(new Internet(\$faker));
        \$faker->addProvider(new Company(\$faker));
        \$this->faker = \$faker;
    }

    public function localeDataProvider()
    {
        \$providerPath = realpath(__DIR__ . '/../../../src/Faker/Provider');
        \$localePaths = array_filter(glob(\$providerPath . '/*', GLOB_ONLYDIR));
        foreach (\$localePaths as \$path) {
            \$parts = explode('/', \$path);
            \$locales[] = array(\$parts[count(\$parts) - 1]);
        }

        return \$locales;
    }

    /**
     * @link http://stackoverflow.com/questions/12026842/how-to-validate-an-email-address-in-php
     *
     * @dataProvider localeDataProvider
     */
    public function testEmailIsValid(\$locale)
    {
        if (\$locale !== 'en_US' && !class_exists('Transliterator')) {
            \$this->markTestSkipped('Transliterator class not available (intl extension)');
        }

        \$this->loadLocalProviders(\$locale);
        \$pattern = '/^(?!(?:(?:\\\\x22?\\\\x5C[\\\\x00-\\\\x7E]\\\\x22?)|(?:\\\\x22?[^\\\\x5C\\\\x22]\\\\x22?)){255,})(?!(?:(?:\\\\x22?\\\\x5C[\\\\x00-\\\\x7E]\\\\x22?)|(?:\\\\x22?[^\\\\x5C\\\\x22]\\\\x22?)){65,}@)(?:(?:[\\\\x21\\\\x23-\\\\x27\\\\x2A\\\\x2B\\\\x2D\\\\x2F-\\\\x39\\\\x3D\\\\x3F\\\\x5E-\\\\x7E]+)|(?:\\\\x22(?:[\\\\x01-\\\\x08\\\\x0B\\\\x0C\\\\x0E-\\\\x1F\\\\x21\\\\x23-\\\\x5B\\\\x5D-\\\\x7F]|(?:\\\\x5C[\\\\x00-\\\\x7F]))*\\\\x22))(?:\\\\.(?:(?:[\\\\x21\\\\x23-\\\\x27\\\\x2A\\\\x2B\\\\x2D\\\\x2F-\\\\x39\\\\x3D\\\\x3F\\\\x5E-\\\\x7E]+)|(?:\\\\x22(?:[\\\\x01-\\\\x08\\\\x0B\\\\x0C\\\\x0E-\\\\x1F\\\\x21\\\\x23-\\\\x5B\\\\x5D-\\\\x7F]|(?:\\\\x5C[\\\\x00-\\\\x7F]))*\\\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\\\]))\$/iD';
        \$emailAddress = \$this->faker->email();
        \$this->assertRegExp(\$pattern, \$emailAddress);
    }

    /**
     * @dataProvider localeDataProvider
     */
    public function testUsernameIsValid(\$locale)
    {
        if (\$locale !== 'en_US' && !class_exists('Transliterator')) {
            \$this->markTestSkipped('Transliterator class not available (intl extension)');
        }

        \$this->loadLocalProviders(\$locale);
        \$pattern = '/^[A-Za-z0-9]+([._][A-Za-z0-9]+)*\$/';
        \$username = \$this->faker->username();
        \$this->assertRegExp(\$pattern, \$username);
    }

    /**
     * @dataProvider localeDataProvider
     */
    public function testDomainnameIsValid(\$locale)
    {
        if (\$locale !== 'en_US' && !class_exists('Transliterator')) {
            \$this->markTestSkipped('Transliterator class not available (intl extension)');
        }

        \$this->loadLocalProviders(\$locale);
        \$pattern = '/^[a-z]+(\\.[a-z]+)+\$/';
        \$domainName = \$this->faker->domainName();
        \$this->assertRegExp(\$pattern, \$domainName);
    }

    /**
     * @dataProvider localeDataProvider
     */
    public function testDomainwordIsValid(\$locale)
    {
        if (\$locale !== 'en_US' && !class_exists('Transliterator')) {
            \$this->markTestSkipped('Transliterator class not available (intl extension)');
        }

        \$this->loadLocalProviders(\$locale);
        \$pattern = '/^[a-z]+\$/';
        \$domainWord = \$this->faker->domainWord();
        \$this->assertRegExp(\$pattern, \$domainWord);
    }

    public function loadLocalProviders(\$locale)
    {
        \$providerPath = realpath(__DIR__ . '/../../../src/Faker/Provider');
        if (file_exists(\$providerPath.'/'.\$locale.'/Internet.php')) {
            \$internet = \"\\\\Faker\\\\Provider\\\\\$locale\\\\Internet\";
            \$this->faker->addProvider(new \$internet(\$this->faker));
        }
        if (file_exists(\$providerPath.'/'.\$locale.'/Person.php')) {
            \$person = \"\\\\Faker\\\\Provider\\\\\$locale\\\\Person\";
            \$this->faker->addProvider(new \$person(\$this->faker));
        }
        if (file_exists(\$providerPath.'/'.\$locale.'/Company.php')) {
            \$company = \"\\\\Faker\\\\Provider\\\\\$locale\\\\Company\";
            \$this->faker->addProvider(new \$company(\$this->faker));
        }
    }

    public function testPasswordIsValid()
    {
        \$this->assertRegexp('/^.{6}\$/', \$this->faker->password(6, 6));
    }

    public function testSlugIsValid()
    {
        \$pattern = '/^[a-z0-9-]+\$/';
        \$slug = \$this->faker->slug();
        \$this->assertSame(preg_match(\$pattern, \$slug), 1);
    }

    public function testUrlIsValid()
    {
        \$url = \$this->faker->url();
        \$this->assertNotFalse(filter_var(\$url, FILTER_VALIDATE_URL));
    }

    public function testLocalIpv4()
    {
        \$this->assertNotFalse(filter_var(Internet::localIpv4(), FILTER_VALIDATE_IP, FILTER_FLAG_IPV4));
    }

    public function testIpv4()
    {
        \$this->assertNotFalse(filter_var(\$this->faker->ipv4(), FILTER_VALIDATE_IP, FILTER_FLAG_IPV4));
    }

    public function testIpv4NotLocalNetwork()
    {
        \$this->assertNotRegExp('/\\A0\\./', \$this->faker->ipv4());
    }

    public function testIpv4NotBroadcast()
    {
        \$this->assertNotEquals('255.255.255.255', \$this->faker->ipv4());
    }

    public function testIpv6()
    {
        \$this->assertNotFalse(filter_var(\$this->faker->ipv6(), FILTER_VALIDATE_IP, FILTER_FLAG_IPV6));
    }

    public function testMacAddress()
    {
        \$this->assertRegExp('/^([0-9A-F]{2}[:]){5}([0-9A-F]{2})\$/i', Internet::macAddress());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/test/Faker/Provider/InternetTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Test\\Provider;

use Faker\\Generator;
use Faker\\Provider\\Company;
use Faker\\Provider\\Internet;
use Faker\\Provider\\Lorem;
use Faker\\Provider\\Person;
use PHPUnit\\Framework\\TestCase;

class InternetTest extends TestCase
{
    /**
     * @var Generator
     */
    private \$faker;

    public function setUp()
    {
        \$faker = new Generator();
        \$faker->addProvider(new Lorem(\$faker));
        \$faker->addProvider(new Person(\$faker));
        \$faker->addProvider(new Internet(\$faker));
        \$faker->addProvider(new Company(\$faker));
        \$this->faker = \$faker;
    }

    public function localeDataProvider()
    {
        \$providerPath = realpath(__DIR__ . '/../../../src/Faker/Provider');
        \$localePaths = array_filter(glob(\$providerPath . '/*', GLOB_ONLYDIR));
        foreach (\$localePaths as \$path) {
            \$parts = explode('/', \$path);
            \$locales[] = array(\$parts[count(\$parts) - 1]);
        }

        return \$locales;
    }

    /**
     * @link http://stackoverflow.com/questions/12026842/how-to-validate-an-email-address-in-php
     *
     * @dataProvider localeDataProvider
     */
    public function testEmailIsValid(\$locale)
    {
        if (\$locale !== 'en_US' && !class_exists('Transliterator')) {
            \$this->markTestSkipped('Transliterator class not available (intl extension)');
        }

        \$this->loadLocalProviders(\$locale);
        \$pattern = '/^(?!(?:(?:\\\\x22?\\\\x5C[\\\\x00-\\\\x7E]\\\\x22?)|(?:\\\\x22?[^\\\\x5C\\\\x22]\\\\x22?)){255,})(?!(?:(?:\\\\x22?\\\\x5C[\\\\x00-\\\\x7E]\\\\x22?)|(?:\\\\x22?[^\\\\x5C\\\\x22]\\\\x22?)){65,}@)(?:(?:[\\\\x21\\\\x23-\\\\x27\\\\x2A\\\\x2B\\\\x2D\\\\x2F-\\\\x39\\\\x3D\\\\x3F\\\\x5E-\\\\x7E]+)|(?:\\\\x22(?:[\\\\x01-\\\\x08\\\\x0B\\\\x0C\\\\x0E-\\\\x1F\\\\x21\\\\x23-\\\\x5B\\\\x5D-\\\\x7F]|(?:\\\\x5C[\\\\x00-\\\\x7F]))*\\\\x22))(?:\\\\.(?:(?:[\\\\x21\\\\x23-\\\\x27\\\\x2A\\\\x2B\\\\x2D\\\\x2F-\\\\x39\\\\x3D\\\\x3F\\\\x5E-\\\\x7E]+)|(?:\\\\x22(?:[\\\\x01-\\\\x08\\\\x0B\\\\x0C\\\\x0E-\\\\x1F\\\\x21\\\\x23-\\\\x5B\\\\x5D-\\\\x7F]|(?:\\\\x5C[\\\\x00-\\\\x7F]))*\\\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\\\]))\$/iD';
        \$emailAddress = \$this->faker->email();
        \$this->assertRegExp(\$pattern, \$emailAddress);
    }

    /**
     * @dataProvider localeDataProvider
     */
    public function testUsernameIsValid(\$locale)
    {
        if (\$locale !== 'en_US' && !class_exists('Transliterator')) {
            \$this->markTestSkipped('Transliterator class not available (intl extension)');
        }

        \$this->loadLocalProviders(\$locale);
        \$pattern = '/^[A-Za-z0-9]+([._][A-Za-z0-9]+)*\$/';
        \$username = \$this->faker->username();
        \$this->assertRegExp(\$pattern, \$username);
    }

    /**
     * @dataProvider localeDataProvider
     */
    public function testDomainnameIsValid(\$locale)
    {
        if (\$locale !== 'en_US' && !class_exists('Transliterator')) {
            \$this->markTestSkipped('Transliterator class not available (intl extension)');
        }

        \$this->loadLocalProviders(\$locale);
        \$pattern = '/^[a-z]+(\\.[a-z]+)+\$/';
        \$domainName = \$this->faker->domainName();
        \$this->assertRegExp(\$pattern, \$domainName);
    }

    /**
     * @dataProvider localeDataProvider
     */
    public function testDomainwordIsValid(\$locale)
    {
        if (\$locale !== 'en_US' && !class_exists('Transliterator')) {
            \$this->markTestSkipped('Transliterator class not available (intl extension)');
        }

        \$this->loadLocalProviders(\$locale);
        \$pattern = '/^[a-z]+\$/';
        \$domainWord = \$this->faker->domainWord();
        \$this->assertRegExp(\$pattern, \$domainWord);
    }

    public function loadLocalProviders(\$locale)
    {
        \$providerPath = realpath(__DIR__ . '/../../../src/Faker/Provider');
        if (file_exists(\$providerPath.'/'.\$locale.'/Internet.php')) {
            \$internet = \"\\\\Faker\\\\Provider\\\\\$locale\\\\Internet\";
            \$this->faker->addProvider(new \$internet(\$this->faker));
        }
        if (file_exists(\$providerPath.'/'.\$locale.'/Person.php')) {
            \$person = \"\\\\Faker\\\\Provider\\\\\$locale\\\\Person\";
            \$this->faker->addProvider(new \$person(\$this->faker));
        }
        if (file_exists(\$providerPath.'/'.\$locale.'/Company.php')) {
            \$company = \"\\\\Faker\\\\Provider\\\\\$locale\\\\Company\";
            \$this->faker->addProvider(new \$company(\$this->faker));
        }
    }

    public function testPasswordIsValid()
    {
        \$this->assertRegexp('/^.{6}\$/', \$this->faker->password(6, 6));
    }

    public function testSlugIsValid()
    {
        \$pattern = '/^[a-z0-9-]+\$/';
        \$slug = \$this->faker->slug();
        \$this->assertSame(preg_match(\$pattern, \$slug), 1);
    }

    public function testUrlIsValid()
    {
        \$url = \$this->faker->url();
        \$this->assertNotFalse(filter_var(\$url, FILTER_VALIDATE_URL));
    }

    public function testLocalIpv4()
    {
        \$this->assertNotFalse(filter_var(Internet::localIpv4(), FILTER_VALIDATE_IP, FILTER_FLAG_IPV4));
    }

    public function testIpv4()
    {
        \$this->assertNotFalse(filter_var(\$this->faker->ipv4(), FILTER_VALIDATE_IP, FILTER_FLAG_IPV4));
    }

    public function testIpv4NotLocalNetwork()
    {
        \$this->assertNotRegExp('/\\A0\\./', \$this->faker->ipv4());
    }

    public function testIpv4NotBroadcast()
    {
        \$this->assertNotEquals('255.255.255.255', \$this->faker->ipv4());
    }

    public function testIpv6()
    {
        \$this->assertNotFalse(filter_var(\$this->faker->ipv6(), FILTER_VALIDATE_IP, FILTER_FLAG_IPV6));
    }

    public function testMacAddress()
    {
        \$this->assertRegExp('/^([0-9A-F]{2}[:]){5}([0-9A-F]{2})\$/i', Internet::macAddress());
    }
}
", "vendor/fzaninotto/faker/test/Faker/Provider/InternetTest.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/test/Faker/Provider/InternetTest.php");
    }
}
