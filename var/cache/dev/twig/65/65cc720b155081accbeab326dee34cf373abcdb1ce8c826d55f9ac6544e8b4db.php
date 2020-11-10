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

/* vendor/symfony/mime/Part/DataPart.php */
class __TwigTemplate_f1b05c0661c7bb9eb7a9364f5695fc836c82e75919414e01b185511903b8d0a6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Part/DataPart.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Part/DataPart.php"));

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

namespace Symfony\\Component\\Mime\\Part;

use Symfony\\Component\\Mime\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Mime\\Header\\Headers;
use Symfony\\Component\\Mime\\MimeTypes;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
class DataPart extends TextPart
{
    private static \$mimeTypes;

    private \$filename;
    private \$mediaType;
    private \$cid;
    private \$handle;

    /**
     * @param resource|string \$body
     */
    public function __construct(\$body, string \$filename = null, string \$contentType = null, string \$encoding = null)
    {
        if (null === \$contentType) {
            \$contentType = 'application/octet-stream';
        }
        list(\$this->mediaType, \$subtype) = explode('/', \$contentType);

        parent::__construct(\$body, null, \$subtype, \$encoding);

        \$this->filename = \$filename;
        \$this->setName(\$filename);
        \$this->setDisposition('attachment');
    }

    public static function fromPath(string \$path, string \$name = null, string \$contentType = null): self
    {
        // FIXME: if file is not readable, exception?

        if (null === \$contentType) {
            \$ext = strtolower(substr(\$path, strrpos(\$path, '.') + 1));
            if (null === self::\$mimeTypes) {
                self::\$mimeTypes = new MimeTypes();
            }
            \$contentType = self::\$mimeTypes->getMimeTypes(\$ext)[0] ?? 'application/octet-stream';
        }

        if (false === \$handle = @fopen(\$path, 'r', false)) {
            throw new InvalidArgumentException(sprintf('Unable to open path \"%s\"', \$path));
        }
        \$p = new self(\$handle, \$name ?: basename(\$path), \$contentType);
        \$p->handle = \$handle;

        return \$p;
    }

    /**
     * @return \$this
     */
    public function asInline()
    {
        return \$this->setDisposition('inline');
    }

    public function getContentId(): string
    {
        return \$this->cid ?: \$this->cid = \$this->generateContentId();
    }

    public function hasContentId(): bool
    {
        return null !== \$this->cid;
    }

    public function getMediaType(): string
    {
        return \$this->mediaType;
    }

    public function getPreparedHeaders(): Headers
    {
        \$headers = parent::getPreparedHeaders();

        if (null !== \$this->cid) {
            \$headers->setHeaderBody('Id', 'Content-ID', \$this->cid);
        }

        if (null !== \$this->filename) {
            \$headers->setHeaderParameter('Content-Disposition', 'filename', \$this->filename);
        }

        return \$headers;
    }

    private function generateContentId(): string
    {
        return bin2hex(random_bytes(16)).'@symfony';
    }

    public function __destruct()
    {
        if (null !== \$this->handle && \\is_resource(\$this->handle)) {
            fclose(\$this->handle);
        }
    }

    public function __sleep()
    {
        // converts the body to a string
        parent::__sleep();

        \$this->_parent = [];
        foreach (['body', 'charset', 'subtype', 'disposition', 'name', 'encoding'] as \$name) {
            \$r = new \\ReflectionProperty(TextPart::class, \$name);
            \$r->setAccessible(true);
            \$this->_parent[\$name] = \$r->getValue(\$this);
        }
        \$this->_headers = \$this->getHeaders();

        return ['_headers', '_parent', 'filename', 'mediaType'];
    }

    public function __wakeup()
    {
        \$r = new \\ReflectionProperty(AbstractPart::class, 'headers');
        \$r->setAccessible(true);
        \$r->setValue(\$this, \$this->_headers);
        unset(\$this->_headers);

        foreach (['body', 'charset', 'subtype', 'disposition', 'name', 'encoding'] as \$name) {
            \$r = new \\ReflectionProperty(TextPart::class, \$name);
            \$r->setAccessible(true);
            \$r->setValue(\$this, \$this->_parent[\$name]);
        }
        unset(\$this->_parent);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Part/DataPart.php";
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

namespace Symfony\\Component\\Mime\\Part;

use Symfony\\Component\\Mime\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Mime\\Header\\Headers;
use Symfony\\Component\\Mime\\MimeTypes;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
class DataPart extends TextPart
{
    private static \$mimeTypes;

    private \$filename;
    private \$mediaType;
    private \$cid;
    private \$handle;

    /**
     * @param resource|string \$body
     */
    public function __construct(\$body, string \$filename = null, string \$contentType = null, string \$encoding = null)
    {
        if (null === \$contentType) {
            \$contentType = 'application/octet-stream';
        }
        list(\$this->mediaType, \$subtype) = explode('/', \$contentType);

        parent::__construct(\$body, null, \$subtype, \$encoding);

        \$this->filename = \$filename;
        \$this->setName(\$filename);
        \$this->setDisposition('attachment');
    }

    public static function fromPath(string \$path, string \$name = null, string \$contentType = null): self
    {
        // FIXME: if file is not readable, exception?

        if (null === \$contentType) {
            \$ext = strtolower(substr(\$path, strrpos(\$path, '.') + 1));
            if (null === self::\$mimeTypes) {
                self::\$mimeTypes = new MimeTypes();
            }
            \$contentType = self::\$mimeTypes->getMimeTypes(\$ext)[0] ?? 'application/octet-stream';
        }

        if (false === \$handle = @fopen(\$path, 'r', false)) {
            throw new InvalidArgumentException(sprintf('Unable to open path \"%s\"', \$path));
        }
        \$p = new self(\$handle, \$name ?: basename(\$path), \$contentType);
        \$p->handle = \$handle;

        return \$p;
    }

    /**
     * @return \$this
     */
    public function asInline()
    {
        return \$this->setDisposition('inline');
    }

    public function getContentId(): string
    {
        return \$this->cid ?: \$this->cid = \$this->generateContentId();
    }

    public function hasContentId(): bool
    {
        return null !== \$this->cid;
    }

    public function getMediaType(): string
    {
        return \$this->mediaType;
    }

    public function getPreparedHeaders(): Headers
    {
        \$headers = parent::getPreparedHeaders();

        if (null !== \$this->cid) {
            \$headers->setHeaderBody('Id', 'Content-ID', \$this->cid);
        }

        if (null !== \$this->filename) {
            \$headers->setHeaderParameter('Content-Disposition', 'filename', \$this->filename);
        }

        return \$headers;
    }

    private function generateContentId(): string
    {
        return bin2hex(random_bytes(16)).'@symfony';
    }

    public function __destruct()
    {
        if (null !== \$this->handle && \\is_resource(\$this->handle)) {
            fclose(\$this->handle);
        }
    }

    public function __sleep()
    {
        // converts the body to a string
        parent::__sleep();

        \$this->_parent = [];
        foreach (['body', 'charset', 'subtype', 'disposition', 'name', 'encoding'] as \$name) {
            \$r = new \\ReflectionProperty(TextPart::class, \$name);
            \$r->setAccessible(true);
            \$this->_parent[\$name] = \$r->getValue(\$this);
        }
        \$this->_headers = \$this->getHeaders();

        return ['_headers', '_parent', 'filename', 'mediaType'];
    }

    public function __wakeup()
    {
        \$r = new \\ReflectionProperty(AbstractPart::class, 'headers');
        \$r->setAccessible(true);
        \$r->setValue(\$this, \$this->_headers);
        unset(\$this->_headers);

        foreach (['body', 'charset', 'subtype', 'disposition', 'name', 'encoding'] as \$name) {
            \$r = new \\ReflectionProperty(TextPart::class, \$name);
            \$r->setAccessible(true);
            \$r->setValue(\$this, \$this->_parent[\$name]);
        }
        unset(\$this->_parent);
    }
}
", "vendor/symfony/mime/Part/DataPart.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Part/DataPart.php");
    }
}
