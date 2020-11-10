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

/* vendor/symfony/security-bundle/Tests/Functional/MissingUserProviderTest.php */
class __TwigTemplate_c93af88851bc11c40a3119b76dbfcfd305531b0fdb34aa3e4a325df96fa4b250 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/MissingUserProviderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-bundle/Tests/Functional/MissingUserProviderTest.php"));

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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Functional;

class MissingUserProviderTest extends AbstractWebTestCase
{
    public function testUserProviderIsNeeded()
    {
        \$client = \$this->createClient(['test_case' => 'MissingUserProvider', 'root_config' => 'config.yml', 'debug' => true]);

        \$client->request('GET', '/', [], [], [
            'PHP_AUTH_USER' => 'username',
            'PHP_AUTH_PW' => 'pa\$\$word',
        ]);

        \$response = \$client->getResponse();
        \$this->assertSame(500, \$response->getStatusCode());
        \$this->stringContains('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException', \$response->getContent());
        \$this->stringContains('\"default\" firewall requires a user provider but none was defined.', \$response->getContent());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-bundle/Tests/Functional/MissingUserProviderTest.php";
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

namespace Symfony\\Bundle\\SecurityBundle\\Tests\\Functional;

class MissingUserProviderTest extends AbstractWebTestCase
{
    public function testUserProviderIsNeeded()
    {
        \$client = \$this->createClient(['test_case' => 'MissingUserProvider', 'root_config' => 'config.yml', 'debug' => true]);

        \$client->request('GET', '/', [], [], [
            'PHP_AUTH_USER' => 'username',
            'PHP_AUTH_PW' => 'pa\$\$word',
        ]);

        \$response = \$client->getResponse();
        \$this->assertSame(500, \$response->getStatusCode());
        \$this->stringContains('Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException', \$response->getContent());
        \$this->stringContains('\"default\" firewall requires a user provider but none was defined.', \$response->getContent());
    }
}
", "vendor/symfony/security-bundle/Tests/Functional/MissingUserProviderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-bundle/Tests/Functional/MissingUserProviderTest.php");
    }
}
