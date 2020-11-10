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

/* vendor/symfony/http-foundation/BinaryFileResponse.php */
class __TwigTemplate_0cb38be96406fc922d6ae0fb939458034777db744b4115bbaf64bce930a78e7d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/BinaryFileResponse.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/BinaryFileResponse.php"));

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

namespace Symfony\\Component\\HttpFoundation;

use Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException;
use Symfony\\Component\\HttpFoundation\\File\\File;

/**
 * BinaryFileResponse represents an HTTP response delivering a file.
 *
 * @author Niklas Fiekas <niklas.fiekas@tu-clausthal.de>
 * @author stealth35 <stealth35-php@live.fr>
 * @author Igor Wiedler <igor@wiedler.ch>
 * @author Jordan Alliot <jordan.alliot@gmail.com>
 * @author Sergey Linnik <linniksa@gmail.com>
 */
class BinaryFileResponse extends Response
{
    protected static \$trustXSendfileTypeHeader = false;

    /**
     * @var File
     */
    protected \$file;
    protected \$offset = 0;
    protected \$maxlen = -1;
    protected \$deleteFileAfterSend = false;

    /**
     * @param \\SplFileInfo|string \$file               The file to stream
     * @param int                 \$status             The response status code
     * @param array               \$headers            An array of response headers
     * @param bool                \$public             Files are public by default
     * @param string|null         \$contentDisposition The type of Content-Disposition to set automatically with the filename
     * @param bool                \$autoEtag           Whether the ETag header should be automatically set
     * @param bool                \$autoLastModified   Whether the Last-Modified header should be automatically set
     */
    public function __construct(\$file, int \$status = 200, array \$headers = [], bool \$public = true, string \$contentDisposition = null, bool \$autoEtag = false, bool \$autoLastModified = true)
    {
        parent::__construct(null, \$status, \$headers);

        \$this->setFile(\$file, \$contentDisposition, \$autoEtag, \$autoLastModified);

        if (\$public) {
            \$this->setPublic();
        }
    }

    /**
     * @param \\SplFileInfo|string \$file               The file to stream
     * @param int                 \$status             The response status code
     * @param array               \$headers            An array of response headers
     * @param bool                \$public             Files are public by default
     * @param string|null         \$contentDisposition The type of Content-Disposition to set automatically with the filename
     * @param bool                \$autoEtag           Whether the ETag header should be automatically set
     * @param bool                \$autoLastModified   Whether the Last-Modified header should be automatically set
     *
     * @return static
     */
    public static function create(\$file = null, \$status = 200, \$headers = [], \$public = true, \$contentDisposition = null, \$autoEtag = false, \$autoLastModified = true)
    {
        return new static(\$file, \$status, \$headers, \$public, \$contentDisposition, \$autoEtag, \$autoLastModified);
    }

    /**
     * Sets the file to stream.
     *
     * @param \\SplFileInfo|string \$file               The file to stream
     * @param string              \$contentDisposition
     * @param bool                \$autoEtag
     * @param bool                \$autoLastModified
     *
     * @return \$this
     *
     * @throws FileException
     */
    public function setFile(\$file, \$contentDisposition = null, \$autoEtag = false, \$autoLastModified = true)
    {
        if (!\$file instanceof File) {
            if (\$file instanceof \\SplFileInfo) {
                \$file = new File(\$file->getPathname());
            } else {
                \$file = new File((string) \$file);
            }
        }

        if (!\$file->isReadable()) {
            throw new FileException('File must be readable.');
        }

        \$this->file = \$file;

        if (\$autoEtag) {
            \$this->setAutoEtag();
        }

        if (\$autoLastModified) {
            \$this->setAutoLastModified();
        }

        if (\$contentDisposition) {
            \$this->setContentDisposition(\$contentDisposition);
        }

        return \$this;
    }

    /**
     * Gets the file.
     *
     * @return File The file to stream
     */
    public function getFile()
    {
        return \$this->file;
    }

    /**
     * Automatically sets the Last-Modified header according the file modification date.
     */
    public function setAutoLastModified()
    {
        \$this->setLastModified(\\DateTime::createFromFormat('U', \$this->file->getMTime()));

        return \$this;
    }

    /**
     * Automatically sets the ETag header according to the checksum of the file.
     */
    public function setAutoEtag()
    {
        \$this->setEtag(base64_encode(hash_file('sha256', \$this->file->getPathname(), true)));

        return \$this;
    }

    /**
     * Sets the Content-Disposition header with the given filename.
     *
     * @param string \$disposition      ResponseHeaderBag::DISPOSITION_INLINE or ResponseHeaderBag::DISPOSITION_ATTACHMENT
     * @param string \$filename         Optionally use this UTF-8 encoded filename instead of the real name of the file
     * @param string \$filenameFallback A fallback filename, containing only ASCII characters. Defaults to an automatically encoded filename
     *
     * @return \$this
     */
    public function setContentDisposition(\$disposition, \$filename = '', \$filenameFallback = '')
    {
        if ('' === \$filename) {
            \$filename = \$this->file->getFilename();
        }

        if ('' === \$filenameFallback && (!preg_match('/^[\\x20-\\x7e]*\$/', \$filename) || false !== strpos(\$filename, '%'))) {
            \$encoding = mb_detect_encoding(\$filename, null, true) ?: '8bit';

            for (\$i = 0, \$filenameLength = mb_strlen(\$filename, \$encoding); \$i < \$filenameLength; ++\$i) {
                \$char = mb_substr(\$filename, \$i, 1, \$encoding);

                if ('%' === \$char || \\ord(\$char) < 32 || \\ord(\$char) > 126) {
                    \$filenameFallback .= '_';
                } else {
                    \$filenameFallback .= \$char;
                }
            }
        }

        \$dispositionHeader = \$this->headers->makeDisposition(\$disposition, \$filename, \$filenameFallback);
        \$this->headers->set('Content-Disposition', \$dispositionHeader);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function prepare(Request \$request)
    {
        if (!\$this->headers->has('Content-Type')) {
            \$this->headers->set('Content-Type', \$this->file->getMimeType() ?: 'application/octet-stream');
        }

        if ('HTTP/1.0' !== \$request->server->get('SERVER_PROTOCOL')) {
            \$this->setProtocolVersion('1.1');
        }

        \$this->ensureIEOverSSLCompatibility(\$request);

        \$this->offset = 0;
        \$this->maxlen = -1;

        if (false === \$fileSize = \$this->file->getSize()) {
            return \$this;
        }
        \$this->headers->set('Content-Length', \$fileSize);

        if (!\$this->headers->has('Accept-Ranges')) {
            // Only accept ranges on safe HTTP methods
            \$this->headers->set('Accept-Ranges', \$request->isMethodSafe(false) ? 'bytes' : 'none');
        }

        if (self::\$trustXSendfileTypeHeader && \$request->headers->has('X-Sendfile-Type')) {
            // Use X-Sendfile, do not send any content.
            \$type = \$request->headers->get('X-Sendfile-Type');
            \$path = \$this->file->getRealPath();
            // Fall back to scheme://path for stream wrapped locations.
            if (false === \$path) {
                \$path = \$this->file->getPathname();
            }
            if ('x-accel-redirect' === strtolower(\$type)) {
                // Do X-Accel-Mapping substitutions.
                // @link http://wiki.nginx.org/X-accel#X-Accel-Redirect
                \$parts = HeaderUtils::split(\$request->headers->get('X-Accel-Mapping', ''), ',=');
                foreach (\$parts as \$part) {
                    list(\$pathPrefix, \$location) = \$part;
                    if (substr(\$path, 0, \\strlen(\$pathPrefix)) === \$pathPrefix) {
                        \$path = \$location.substr(\$path, \\strlen(\$pathPrefix));
                        // Only set X-Accel-Redirect header if a valid URI can be produced
                        // as nginx does not serve arbitrary file paths.
                        \$this->headers->set(\$type, \$path);
                        \$this->maxlen = 0;
                        break;
                    }
                }
            } else {
                \$this->headers->set(\$type, \$path);
                \$this->maxlen = 0;
            }
        } elseif (\$request->headers->has('Range')) {
            // Process the range headers.
            if (!\$request->headers->has('If-Range') || \$this->hasValidIfRangeHeader(\$request->headers->get('If-Range'))) {
                \$range = \$request->headers->get('Range');

                list(\$start, \$end) = explode('-', substr(\$range, 6), 2) + [0];

                \$end = ('' === \$end) ? \$fileSize - 1 : (int) \$end;

                if ('' === \$start) {
                    \$start = \$fileSize - \$end;
                    \$end = \$fileSize - 1;
                } else {
                    \$start = (int) \$start;
                }

                if (\$start <= \$end) {
                    if (\$start < 0 || \$end > \$fileSize - 1) {
                        \$this->setStatusCode(416);
                        \$this->headers->set('Content-Range', sprintf('bytes */%s', \$fileSize));
                    } elseif (0 !== \$start || \$end !== \$fileSize - 1) {
                        \$this->maxlen = \$end < \$fileSize ? \$end - \$start + 1 : -1;
                        \$this->offset = \$start;

                        \$this->setStatusCode(206);
                        \$this->headers->set('Content-Range', sprintf('bytes %s-%s/%s', \$start, \$end, \$fileSize));
                        \$this->headers->set('Content-Length', \$end - \$start + 1);
                    }
                }
            }
        }

        return \$this;
    }

    private function hasValidIfRangeHeader(\$header)
    {
        if (\$this->getEtag() === \$header) {
            return true;
        }

        if (null === \$lastModified = \$this->getLastModified()) {
            return false;
        }

        return \$lastModified->format('D, d M Y H:i:s').' GMT' === \$header;
    }

    /**
     * Sends the file.
     *
     * {@inheritdoc}
     */
    public function sendContent()
    {
        if (!\$this->isSuccessful()) {
            return parent::sendContent();
        }

        if (0 === \$this->maxlen) {
            return \$this;
        }

        \$out = fopen('php://output', 'wb');
        \$file = fopen(\$this->file->getPathname(), 'rb');

        stream_copy_to_stream(\$file, \$out, \$this->maxlen, \$this->offset);

        fclose(\$out);
        fclose(\$file);

        if (\$this->deleteFileAfterSend && file_exists(\$this->file->getPathname())) {
            unlink(\$this->file->getPathname());
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \\LogicException when the content is not null
     */
    public function setContent(\$content)
    {
        if (null !== \$content) {
            throw new \\LogicException('The content cannot be set on a BinaryFileResponse instance.');
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        return false;
    }

    /**
     * Trust X-Sendfile-Type header.
     */
    public static function trustXSendfileTypeHeader()
    {
        self::\$trustXSendfileTypeHeader = true;
    }

    /**
     * If this is set to true, the file will be unlinked after the request is send
     * Note: If the X-Sendfile header is used, the deleteFileAfterSend setting will not be used.
     *
     * @param bool \$shouldDelete
     *
     * @return \$this
     */
    public function deleteFileAfterSend(\$shouldDelete = true)
    {
        \$this->deleteFileAfterSend = \$shouldDelete;

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/BinaryFileResponse.php";
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

namespace Symfony\\Component\\HttpFoundation;

use Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException;
use Symfony\\Component\\HttpFoundation\\File\\File;

/**
 * BinaryFileResponse represents an HTTP response delivering a file.
 *
 * @author Niklas Fiekas <niklas.fiekas@tu-clausthal.de>
 * @author stealth35 <stealth35-php@live.fr>
 * @author Igor Wiedler <igor@wiedler.ch>
 * @author Jordan Alliot <jordan.alliot@gmail.com>
 * @author Sergey Linnik <linniksa@gmail.com>
 */
class BinaryFileResponse extends Response
{
    protected static \$trustXSendfileTypeHeader = false;

    /**
     * @var File
     */
    protected \$file;
    protected \$offset = 0;
    protected \$maxlen = -1;
    protected \$deleteFileAfterSend = false;

    /**
     * @param \\SplFileInfo|string \$file               The file to stream
     * @param int                 \$status             The response status code
     * @param array               \$headers            An array of response headers
     * @param bool                \$public             Files are public by default
     * @param string|null         \$contentDisposition The type of Content-Disposition to set automatically with the filename
     * @param bool                \$autoEtag           Whether the ETag header should be automatically set
     * @param bool                \$autoLastModified   Whether the Last-Modified header should be automatically set
     */
    public function __construct(\$file, int \$status = 200, array \$headers = [], bool \$public = true, string \$contentDisposition = null, bool \$autoEtag = false, bool \$autoLastModified = true)
    {
        parent::__construct(null, \$status, \$headers);

        \$this->setFile(\$file, \$contentDisposition, \$autoEtag, \$autoLastModified);

        if (\$public) {
            \$this->setPublic();
        }
    }

    /**
     * @param \\SplFileInfo|string \$file               The file to stream
     * @param int                 \$status             The response status code
     * @param array               \$headers            An array of response headers
     * @param bool                \$public             Files are public by default
     * @param string|null         \$contentDisposition The type of Content-Disposition to set automatically with the filename
     * @param bool                \$autoEtag           Whether the ETag header should be automatically set
     * @param bool                \$autoLastModified   Whether the Last-Modified header should be automatically set
     *
     * @return static
     */
    public static function create(\$file = null, \$status = 200, \$headers = [], \$public = true, \$contentDisposition = null, \$autoEtag = false, \$autoLastModified = true)
    {
        return new static(\$file, \$status, \$headers, \$public, \$contentDisposition, \$autoEtag, \$autoLastModified);
    }

    /**
     * Sets the file to stream.
     *
     * @param \\SplFileInfo|string \$file               The file to stream
     * @param string              \$contentDisposition
     * @param bool                \$autoEtag
     * @param bool                \$autoLastModified
     *
     * @return \$this
     *
     * @throws FileException
     */
    public function setFile(\$file, \$contentDisposition = null, \$autoEtag = false, \$autoLastModified = true)
    {
        if (!\$file instanceof File) {
            if (\$file instanceof \\SplFileInfo) {
                \$file = new File(\$file->getPathname());
            } else {
                \$file = new File((string) \$file);
            }
        }

        if (!\$file->isReadable()) {
            throw new FileException('File must be readable.');
        }

        \$this->file = \$file;

        if (\$autoEtag) {
            \$this->setAutoEtag();
        }

        if (\$autoLastModified) {
            \$this->setAutoLastModified();
        }

        if (\$contentDisposition) {
            \$this->setContentDisposition(\$contentDisposition);
        }

        return \$this;
    }

    /**
     * Gets the file.
     *
     * @return File The file to stream
     */
    public function getFile()
    {
        return \$this->file;
    }

    /**
     * Automatically sets the Last-Modified header according the file modification date.
     */
    public function setAutoLastModified()
    {
        \$this->setLastModified(\\DateTime::createFromFormat('U', \$this->file->getMTime()));

        return \$this;
    }

    /**
     * Automatically sets the ETag header according to the checksum of the file.
     */
    public function setAutoEtag()
    {
        \$this->setEtag(base64_encode(hash_file('sha256', \$this->file->getPathname(), true)));

        return \$this;
    }

    /**
     * Sets the Content-Disposition header with the given filename.
     *
     * @param string \$disposition      ResponseHeaderBag::DISPOSITION_INLINE or ResponseHeaderBag::DISPOSITION_ATTACHMENT
     * @param string \$filename         Optionally use this UTF-8 encoded filename instead of the real name of the file
     * @param string \$filenameFallback A fallback filename, containing only ASCII characters. Defaults to an automatically encoded filename
     *
     * @return \$this
     */
    public function setContentDisposition(\$disposition, \$filename = '', \$filenameFallback = '')
    {
        if ('' === \$filename) {
            \$filename = \$this->file->getFilename();
        }

        if ('' === \$filenameFallback && (!preg_match('/^[\\x20-\\x7e]*\$/', \$filename) || false !== strpos(\$filename, '%'))) {
            \$encoding = mb_detect_encoding(\$filename, null, true) ?: '8bit';

            for (\$i = 0, \$filenameLength = mb_strlen(\$filename, \$encoding); \$i < \$filenameLength; ++\$i) {
                \$char = mb_substr(\$filename, \$i, 1, \$encoding);

                if ('%' === \$char || \\ord(\$char) < 32 || \\ord(\$char) > 126) {
                    \$filenameFallback .= '_';
                } else {
                    \$filenameFallback .= \$char;
                }
            }
        }

        \$dispositionHeader = \$this->headers->makeDisposition(\$disposition, \$filename, \$filenameFallback);
        \$this->headers->set('Content-Disposition', \$dispositionHeader);

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function prepare(Request \$request)
    {
        if (!\$this->headers->has('Content-Type')) {
            \$this->headers->set('Content-Type', \$this->file->getMimeType() ?: 'application/octet-stream');
        }

        if ('HTTP/1.0' !== \$request->server->get('SERVER_PROTOCOL')) {
            \$this->setProtocolVersion('1.1');
        }

        \$this->ensureIEOverSSLCompatibility(\$request);

        \$this->offset = 0;
        \$this->maxlen = -1;

        if (false === \$fileSize = \$this->file->getSize()) {
            return \$this;
        }
        \$this->headers->set('Content-Length', \$fileSize);

        if (!\$this->headers->has('Accept-Ranges')) {
            // Only accept ranges on safe HTTP methods
            \$this->headers->set('Accept-Ranges', \$request->isMethodSafe(false) ? 'bytes' : 'none');
        }

        if (self::\$trustXSendfileTypeHeader && \$request->headers->has('X-Sendfile-Type')) {
            // Use X-Sendfile, do not send any content.
            \$type = \$request->headers->get('X-Sendfile-Type');
            \$path = \$this->file->getRealPath();
            // Fall back to scheme://path for stream wrapped locations.
            if (false === \$path) {
                \$path = \$this->file->getPathname();
            }
            if ('x-accel-redirect' === strtolower(\$type)) {
                // Do X-Accel-Mapping substitutions.
                // @link http://wiki.nginx.org/X-accel#X-Accel-Redirect
                \$parts = HeaderUtils::split(\$request->headers->get('X-Accel-Mapping', ''), ',=');
                foreach (\$parts as \$part) {
                    list(\$pathPrefix, \$location) = \$part;
                    if (substr(\$path, 0, \\strlen(\$pathPrefix)) === \$pathPrefix) {
                        \$path = \$location.substr(\$path, \\strlen(\$pathPrefix));
                        // Only set X-Accel-Redirect header if a valid URI can be produced
                        // as nginx does not serve arbitrary file paths.
                        \$this->headers->set(\$type, \$path);
                        \$this->maxlen = 0;
                        break;
                    }
                }
            } else {
                \$this->headers->set(\$type, \$path);
                \$this->maxlen = 0;
            }
        } elseif (\$request->headers->has('Range')) {
            // Process the range headers.
            if (!\$request->headers->has('If-Range') || \$this->hasValidIfRangeHeader(\$request->headers->get('If-Range'))) {
                \$range = \$request->headers->get('Range');

                list(\$start, \$end) = explode('-', substr(\$range, 6), 2) + [0];

                \$end = ('' === \$end) ? \$fileSize - 1 : (int) \$end;

                if ('' === \$start) {
                    \$start = \$fileSize - \$end;
                    \$end = \$fileSize - 1;
                } else {
                    \$start = (int) \$start;
                }

                if (\$start <= \$end) {
                    if (\$start < 0 || \$end > \$fileSize - 1) {
                        \$this->setStatusCode(416);
                        \$this->headers->set('Content-Range', sprintf('bytes */%s', \$fileSize));
                    } elseif (0 !== \$start || \$end !== \$fileSize - 1) {
                        \$this->maxlen = \$end < \$fileSize ? \$end - \$start + 1 : -1;
                        \$this->offset = \$start;

                        \$this->setStatusCode(206);
                        \$this->headers->set('Content-Range', sprintf('bytes %s-%s/%s', \$start, \$end, \$fileSize));
                        \$this->headers->set('Content-Length', \$end - \$start + 1);
                    }
                }
            }
        }

        return \$this;
    }

    private function hasValidIfRangeHeader(\$header)
    {
        if (\$this->getEtag() === \$header) {
            return true;
        }

        if (null === \$lastModified = \$this->getLastModified()) {
            return false;
        }

        return \$lastModified->format('D, d M Y H:i:s').' GMT' === \$header;
    }

    /**
     * Sends the file.
     *
     * {@inheritdoc}
     */
    public function sendContent()
    {
        if (!\$this->isSuccessful()) {
            return parent::sendContent();
        }

        if (0 === \$this->maxlen) {
            return \$this;
        }

        \$out = fopen('php://output', 'wb');
        \$file = fopen(\$this->file->getPathname(), 'rb');

        stream_copy_to_stream(\$file, \$out, \$this->maxlen, \$this->offset);

        fclose(\$out);
        fclose(\$file);

        if (\$this->deleteFileAfterSend && file_exists(\$this->file->getPathname())) {
            unlink(\$this->file->getPathname());
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     *
     * @throws \\LogicException when the content is not null
     */
    public function setContent(\$content)
    {
        if (null !== \$content) {
            throw new \\LogicException('The content cannot be set on a BinaryFileResponse instance.');
        }

        return \$this;
    }

    /**
     * {@inheritdoc}
     */
    public function getContent()
    {
        return false;
    }

    /**
     * Trust X-Sendfile-Type header.
     */
    public static function trustXSendfileTypeHeader()
    {
        self::\$trustXSendfileTypeHeader = true;
    }

    /**
     * If this is set to true, the file will be unlinked after the request is send
     * Note: If the X-Sendfile header is used, the deleteFileAfterSend setting will not be used.
     *
     * @param bool \$shouldDelete
     *
     * @return \$this
     */
    public function deleteFileAfterSend(\$shouldDelete = true)
    {
        \$this->deleteFileAfterSend = \$shouldDelete;

        return \$this;
    }
}
", "vendor/symfony/http-foundation/BinaryFileResponse.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/BinaryFileResponse.php");
    }
}
