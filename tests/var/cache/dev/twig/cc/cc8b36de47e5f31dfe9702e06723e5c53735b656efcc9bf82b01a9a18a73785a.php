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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/ByteStream/TemporaryFileByteStream.php */
class __TwigTemplate_c364987cc9c7030424268aaa278f55a672e524a9836dfc2756228273ba4b3017 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/ByteStream/TemporaryFileByteStream.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/ByteStream/TemporaryFileByteStream.php"));

        // line 1
        echo "<?php

/*
* This file is part of SwiftMailer.
* (c) 2004-2009 Chris Corbyn
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

/**
 * @author Romain-Geissler
 */
class Swift_ByteStream_TemporaryFileByteStream extends Swift_ByteStream_FileByteStream
{
    public function __construct()
    {
        \$filePath = tempnam(sys_get_temp_dir(), 'FileByteStream');

        if (false === \$filePath) {
            throw new Swift_IoException('Failed to retrieve temporary file name.');
        }

        parent::__construct(\$filePath, true);
    }

    public function getContent()
    {
        if (false === (\$content = file_get_contents(\$this->getPath()))) {
            throw new Swift_IoException('Failed to get temporary file content.');
        }

        return \$content;
    }

    public function __destruct()
    {
        if (file_exists(\$this->getPath())) {
            @unlink(\$this->getPath());
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/ByteStream/TemporaryFileByteStream.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
* This file is part of SwiftMailer.
* (c) 2004-2009 Chris Corbyn
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

/**
 * @author Romain-Geissler
 */
class Swift_ByteStream_TemporaryFileByteStream extends Swift_ByteStream_FileByteStream
{
    public function __construct()
    {
        \$filePath = tempnam(sys_get_temp_dir(), 'FileByteStream');

        if (false === \$filePath) {
            throw new Swift_IoException('Failed to retrieve temporary file name.');
        }

        parent::__construct(\$filePath, true);
    }

    public function getContent()
    {
        if (false === (\$content = file_get_contents(\$this->getPath()))) {
            throw new Swift_IoException('Failed to get temporary file content.');
        }

        return \$content;
    }

    public function __destruct()
    {
        if (file_exists(\$this->getPath())) {
            @unlink(\$this->getPath());
        }
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/ByteStream/TemporaryFileByteStream.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/ByteStream/TemporaryFileByteStream.php");
    }
}
