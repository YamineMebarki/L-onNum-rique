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

/* vendor/symfony/http-foundation/Tests/Session/Storage/Handler/Fixtures/common.inc */
class __TwigTemplate_f704b4dcce0c4ce11837e009fe65194d8b4db3b090aca147755419faa13c1a87 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/Fixtures/common.inc"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/Fixtures/common.inc"));

        // line 1
        echo "<?php

use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\AbstractSessionHandler;

\$parent = __DIR__;
while (!@file_exists(\$parent.'/vendor/autoload.php')) {
    if (!@file_exists(\$parent)) {
        // open_basedir restriction in effect
        break;
    }
    if (\$parent === dirname(\$parent)) {
        echo \"vendor/autoload.php not found\\n\";
        exit(1);
    }

    \$parent = dirname(\$parent);
}

require \$parent.'/vendor/autoload.php';

error_reporting(-1);
ini_set('html_errors', 0);
ini_set('display_errors', 1);
ini_set('session.gc_probability', 0);
ini_set('session.serialize_handler', 'php');
ini_set('session.cookie_lifetime', 0);
ini_set('session.cookie_domain', '');
ini_set('session.cookie_secure', '');
ini_set('session.cookie_httponly', '');
ini_set('session.use_cookies', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.cache_expire', 180);
ini_set('session.cookie_path', '/');
ini_set('session.cookie_domain', '');
ini_set('session.cookie_secure', 1);
ini_set('session.cookie_httponly', 1);
ini_set('session.use_strict_mode', 1);
ini_set('session.lazy_write', 1);
ini_set('session.name', 'sid');
ini_set('session.save_path', __DIR__);
ini_set('session.cache_limiter', '');

header_remove('X-Powered-By');
header('Content-Type: text/plain; charset=utf-8');

register_shutdown_function(function () {
    echo \"\\n\";
    session_write_close();
    print_r(headers_list());
    echo \"shutdown\\n\";
});
ob_start();

class TestSessionHandler extends AbstractSessionHandler
{
    private \$data;

    public function __construct(\$data = '')
    {
        \$this->data = \$data;
    }

    public function open(\$path, \$name): bool
    {
        echo __FUNCTION__, \"\\n\";

        return parent::open(\$path, \$name);
    }

    public function validateId(\$sessionId): bool
    {
        echo __FUNCTION__, \"\\n\";

        return parent::validateId(\$sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function read(\$sessionId): string
    {
        echo __FUNCTION__, \"\\n\";

        return parent::read(\$sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function updateTimestamp(\$sessionId, \$data): bool
    {
        echo __FUNCTION__, \"\\n\";

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function write(\$sessionId, \$data): bool
    {
        echo __FUNCTION__, \"\\n\";

        return parent::write(\$sessionId, \$data);
    }

    /**
     * {@inheritdoc}
     */
    public function destroy(\$sessionId): bool
    {
        echo __FUNCTION__, \"\\n\";

        return parent::destroy(\$sessionId);
    }

    public function close(): bool
    {
        echo __FUNCTION__, \"\\n\";

        return true;
    }

    public function gc(\$maxLifetime): bool
    {
        echo __FUNCTION__, \"\\n\";

        return true;
    }

    protected function doRead(\$sessionId): string
    {
        echo __FUNCTION__.': ', \$this->data, \"\\n\";

        return \$this->data;
    }

    protected function doWrite(\$sessionId, \$data): bool
    {
        echo __FUNCTION__.': ', \$data, \"\\n\";

        return true;
    }

    protected function doDestroy(\$sessionId): bool
    {
        echo __FUNCTION__, \"\\n\";

        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/Fixtures/common.inc";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\AbstractSessionHandler;

\$parent = __DIR__;
while (!@file_exists(\$parent.'/vendor/autoload.php')) {
    if (!@file_exists(\$parent)) {
        // open_basedir restriction in effect
        break;
    }
    if (\$parent === dirname(\$parent)) {
        echo \"vendor/autoload.php not found\\n\";
        exit(1);
    }

    \$parent = dirname(\$parent);
}

require \$parent.'/vendor/autoload.php';

error_reporting(-1);
ini_set('html_errors', 0);
ini_set('display_errors', 1);
ini_set('session.gc_probability', 0);
ini_set('session.serialize_handler', 'php');
ini_set('session.cookie_lifetime', 0);
ini_set('session.cookie_domain', '');
ini_set('session.cookie_secure', '');
ini_set('session.cookie_httponly', '');
ini_set('session.use_cookies', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.cache_expire', 180);
ini_set('session.cookie_path', '/');
ini_set('session.cookie_domain', '');
ini_set('session.cookie_secure', 1);
ini_set('session.cookie_httponly', 1);
ini_set('session.use_strict_mode', 1);
ini_set('session.lazy_write', 1);
ini_set('session.name', 'sid');
ini_set('session.save_path', __DIR__);
ini_set('session.cache_limiter', '');

header_remove('X-Powered-By');
header('Content-Type: text/plain; charset=utf-8');

register_shutdown_function(function () {
    echo \"\\n\";
    session_write_close();
    print_r(headers_list());
    echo \"shutdown\\n\";
});
ob_start();

class TestSessionHandler extends AbstractSessionHandler
{
    private \$data;

    public function __construct(\$data = '')
    {
        \$this->data = \$data;
    }

    public function open(\$path, \$name): bool
    {
        echo __FUNCTION__, \"\\n\";

        return parent::open(\$path, \$name);
    }

    public function validateId(\$sessionId): bool
    {
        echo __FUNCTION__, \"\\n\";

        return parent::validateId(\$sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function read(\$sessionId): string
    {
        echo __FUNCTION__, \"\\n\";

        return parent::read(\$sessionId);
    }

    /**
     * {@inheritdoc}
     */
    public function updateTimestamp(\$sessionId, \$data): bool
    {
        echo __FUNCTION__, \"\\n\";

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function write(\$sessionId, \$data): bool
    {
        echo __FUNCTION__, \"\\n\";

        return parent::write(\$sessionId, \$data);
    }

    /**
     * {@inheritdoc}
     */
    public function destroy(\$sessionId): bool
    {
        echo __FUNCTION__, \"\\n\";

        return parent::destroy(\$sessionId);
    }

    public function close(): bool
    {
        echo __FUNCTION__, \"\\n\";

        return true;
    }

    public function gc(\$maxLifetime): bool
    {
        echo __FUNCTION__, \"\\n\";

        return true;
    }

    protected function doRead(\$sessionId): string
    {
        echo __FUNCTION__.': ', \$this->data, \"\\n\";

        return \$this->data;
    }

    protected function doWrite(\$sessionId, \$data): bool
    {
        echo __FUNCTION__.': ', \$data, \"\\n\";

        return true;
    }

    protected function doDestroy(\$sessionId): bool
    {
        echo __FUNCTION__, \"\\n\";

        return true;
    }
}
", "vendor/symfony/http-foundation/Tests/Session/Storage/Handler/Fixtures/common.inc", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Tests/Session/Storage/Handler/Fixtures/common.inc");
    }
}
