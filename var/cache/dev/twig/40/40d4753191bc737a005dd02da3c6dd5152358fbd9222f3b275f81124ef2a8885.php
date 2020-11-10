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

/* vendor/symfony/http-client/Response/NativeResponse.php */
class __TwigTemplate_6fd5abd9a7e4d66344f528d737756f949c553eacf932185084854725868cf206 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Response/NativeResponse.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Response/NativeResponse.php"));

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

namespace Symfony\\Component\\HttpClient\\Response;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpClient\\Chunk\\FirstChunk;
use Symfony\\Component\\HttpClient\\Exception\\TransportException;
use Symfony\\Component\\HttpClient\\Internal\\NativeClientState;
use Symfony\\Contracts\\HttpClient\\ResponseInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
final class NativeResponse implements ResponseInterface
{
    use ResponseTrait;

    private \$context;
    private \$url;
    private \$resolveRedirect;
    private \$onProgress;
    private \$remaining;
    private \$buffer;
    private \$inflate;
    private \$multi;
    private \$debugBuffer;

    /**
     * @internal
     */
    public function __construct(NativeClientState \$multi, \$context, string \$url, \$options, bool \$gzipEnabled, array &\$info, callable \$resolveRedirect, ?callable \$onProgress, ?LoggerInterface \$logger)
    {
        \$this->multi = \$multi;
        \$this->id = (int) \$context;
        \$this->context = \$context;
        \$this->url = \$url;
        \$this->logger = \$logger;
        \$this->timeout = \$options['timeout'];
        \$this->info = &\$info;
        \$this->resolveRedirect = \$resolveRedirect;
        \$this->onProgress = \$onProgress;
        \$this->content = \$options['buffer'] ? fopen('php://temp', 'w+') : null;

        // Temporary resources to dechunk/inflate the response stream
        \$this->buffer = fopen('php://temp', 'w+');
        \$this->inflate = \$gzipEnabled ? inflate_init(ZLIB_ENCODING_GZIP) : null;

        \$info['user_data'] = \$options['user_data'];
        ++\$multi->responseCount;

        \$this->initializer = static function (self \$response) {
            if (null !== \$response->info['error']) {
                throw new TransportException(\$response->info['error']);
            }

            if (null === \$response->remaining) {
                foreach (self::stream([\$response]) as \$chunk) {
                    if (\$chunk->isFirst()) {
                        break;
                    }
                }
            }
        };
    }

    /**
     * {@inheritdoc}
     */
    public function getInfo(string \$type = null)
    {
        if (!\$info = \$this->finalInfo) {
            self::perform(\$this->multi);

            \$info = \$this->info;
            \$info['url'] = implode('', \$info['url']);
            unset(\$info['size_body'], \$info['request_header']);

            if (null === \$this->buffer) {
                \$this->finalInfo = \$info;
            }
        }

        return null !== \$type ? \$info[\$type] ?? null : \$info;
    }

    public function __destruct()
    {
        try {
            \$this->doDestruct();
        } finally {
            \$this->close();

            // Clear the DNS cache when all requests completed
            if (0 >= --\$this->multi->responseCount) {
                \$this->multi->responseCount = 0;
                \$this->multi->dnsCache = [];
            }
        }
    }

    private function open(): void
    {
        set_error_handler(function (\$type, \$msg) { throw new TransportException(\$msg); });

        try {
            \$this->info['start_time'] = microtime(true);
            \$url = \$this->url;

            while (true) {
                \$context = stream_context_get_options(\$this->context);

                if (\$proxy = \$context['http']['proxy'] ?? null) {
                    \$this->info['debug'] .= \"* Establish HTTP proxy tunnel to {\$proxy}\\n\";
                    \$this->info['request_header'] = \$url;
                } else {
                    \$this->info['debug'] .= \"*   Trying {\$this->info['primary_ip']}...\\n\";
                    \$this->info['request_header'] = \$this->info['url']['path'].\$this->info['url']['query'];
                }

                \$this->info['request_header'] = sprintf(\"> %s %s HTTP/%s \\r\\n\", \$context['http']['method'], \$this->info['request_header'], \$context['http']['protocol_version']);
                \$this->info['request_header'] .= implode(\"\\r\\n\", \$context['http']['header']).\"\\r\\n\\r\\n\";

                // Send request and follow redirects when needed
                \$this->handle = \$h = fopen(\$url, 'r', false, \$this->context);
                self::addResponseHeaders(\$http_response_header, \$this->info, \$this->headers, \$this->info['debug']);
                \$url = (\$this->resolveRedirect)(\$this->multi, \$this->headers['location'][0] ?? null, \$this->context);

                if (null === \$url) {
                    break;
                }

                \$this->logger && \$this->logger->info(sprintf('Redirecting: \"%s %s\"', \$this->info['http_code'], \$url ?? \$this->url));
            }
        } catch (\\Throwable \$e) {
            \$this->close();
            \$this->multi->handlesActivity[\$this->id][] = null;
            \$this->multi->handlesActivity[\$this->id][] = \$e;

            return;
        } finally {
            \$this->info['pretransfer_time'] = \$this->info['total_time'] = microtime(true) - \$this->info['start_time'];
            restore_error_handler();
        }

        stream_set_blocking(\$h, false);
        \$this->context = \$this->resolveRedirect = null;

        if (isset(\$context['ssl']['peer_certificate_chain'])) {
            \$this->info['peer_certificate_chain'] = \$context['ssl']['peer_certificate_chain'];
        }

        // Create dechunk and inflate buffers
        if (isset(\$this->headers['content-length'])) {
            \$this->remaining = (int) \$this->headers['content-length'][0];
        } elseif ('chunked' === (\$this->headers['transfer-encoding'][0] ?? null)) {
            stream_filter_append(\$this->buffer, 'dechunk', STREAM_FILTER_WRITE);
            \$this->remaining = -1;
        } else {
            \$this->remaining = -2;
        }

        if (\$this->inflate && 'gzip' !== (\$this->headers['content-encoding'][0] ?? null)) {
            \$this->inflate = null;
        }

        \$this->multi->openHandles[\$this->id] = [\$h, \$this->buffer, \$this->inflate, \$this->content, \$this->onProgress, &\$this->remaining, &\$this->info];
        \$this->multi->handlesActivity[\$this->id] = [new FirstChunk()];
    }

    /**
     * {@inheritdoc}
     */
    private function close(): void
    {
        unset(\$this->multi->openHandles[\$this->id], \$this->multi->handlesActivity[\$this->id]);
        \$this->handle = \$this->buffer = \$this->inflate = \$this->onProgress = null;
    }

    /**
     * {@inheritdoc}
     */
    private static function schedule(self \$response, array &\$runningResponses): void
    {
        if (!isset(\$runningResponses[\$i = \$response->multi->id])) {
            \$runningResponses[\$i] = [\$response->multi, []];
        }

        if (null === \$response->remaining) {
            \$response->multi->pendingResponses[] = \$response;
        } else {
            \$runningResponses[\$i][1][\$response->id] = \$response;
        }

        if (null === \$response->buffer) {
            // Response already completed
            \$response->multi->handlesActivity[\$response->id][] = null;
            \$response->multi->handlesActivity[\$response->id][] = null !== \$response->info['error'] ? new TransportException(\$response->info['error']) : null;
        }
    }

    /**
     * {@inheritdoc}
     */
    private static function perform(NativeClientState \$multi, array &\$responses = null): void
    {
        // List of native handles for stream_select()
        if (null !== \$responses) {
            \$multi->handles = [];
        }

        foreach (\$multi->openHandles as \$i => [\$h, \$buffer, \$inflate, \$content, \$onProgress]) {
            \$hasActivity = false;
            \$remaining = &\$multi->openHandles[\$i][5];
            \$info = &\$multi->openHandles[\$i][6];
            \$e = null;

            // Read incoming buffer and write it to the dechunk one
            try {
                while (\$remaining && '' !== \$data = (string) fread(\$h, 0 > \$remaining ? 16372 : \$remaining)) {
                    fwrite(\$buffer, \$data);
                    \$hasActivity = true;
                    \$multi->sleep = false;

                    if (-1 !== \$remaining) {
                        \$remaining -= \\strlen(\$data);
                    }
                }
            } catch (\\Throwable \$e) {
                \$hasActivity = \$onProgress = false;
            }

            if (!\$hasActivity) {
                if (\$onProgress) {
                    try {
                        // Notify the progress callback so that it can e.g. cancel
                        // the request if the stream is inactive for too long
                        \$info['total_time'] = microtime(true) - \$info['start_time'];
                        \$onProgress();
                    } catch (\\Throwable \$e) {
                        // no-op
                    }
                }
            } elseif ('' !== \$data = stream_get_contents(\$buffer, -1, 0)) {
                rewind(\$buffer);
                ftruncate(\$buffer, 0);

                if (null !== \$inflate && false === \$data = @inflate_add(\$inflate, \$data)) {
                    \$e = new TransportException('Error while processing content unencoding.');
                }

                if ('' !== \$data && null === \$e) {
                    \$multi->handlesActivity[\$i][] = \$data;

                    if (null !== \$content && \\strlen(\$data) !== fwrite(\$content, \$data)) {
                        \$e = new TransportException(sprintf('Failed writing %d bytes to the response buffer.', \\strlen(\$data)));
                    }
                }
            }

            if (null !== \$e || !\$remaining || feof(\$h)) {
                // Stream completed
                \$info['total_time'] = microtime(true) - \$info['start_time'];
                \$info['starttransfer_time'] = \$info['starttransfer_time'] ?: \$info['total_time'];

                if (\$onProgress) {
                    try {
                        \$onProgress(-1);
                    } catch (\\Throwable \$e) {
                        // no-op
                    }
                }

                if (null === \$e) {
                    if (0 < \$remaining) {
                        \$e = new TransportException(sprintf('Transfer closed with %s bytes remaining to read.', \$remaining));
                    } elseif (-1 === \$remaining && fwrite(\$buffer, '-') && '' !== stream_get_contents(\$buffer, -1, 0)) {
                        \$e = new TransportException('Transfer closed with outstanding data remaining from chunked response.');
                    }
                }

                \$multi->handlesActivity[\$i][] = null;
                \$multi->handlesActivity[\$i][] = \$e;
                unset(\$multi->openHandles[\$i]);
                \$multi->sleep = false;
            } elseif (null !== \$responses) {
                \$multi->handles[] = \$h;
            }
        }

        if (null === \$responses) {
            return;
        }

        if (\$multi->pendingResponses && \\count(\$multi->handles) < \$multi->maxHostConnections) {
            // Open the next pending request - this is a blocking operation so we do only one of them
            /** @var self \$response */
            \$response = array_shift(\$multi->pendingResponses);
            \$response->open();
            \$responses[\$response->id] = \$response;
            \$multi->sleep = false;
            self::perform(\$response->multi);

            if (null !== \$response->handle) {
                \$multi->handles[] = \$response->handle;
            }
        }

        if (\$multi->pendingResponses) {
            // Create empty activity list to tell ResponseTrait::stream() we still have pending requests
            \$response = \$multi->pendingResponses[0];
            \$responses[\$response->id] = \$response;
            \$multi->handlesActivity[\$response->id] = [];
        }
    }

    /**
     * {@inheritdoc}
     */
    private static function select(NativeClientState \$multi, float \$timeout): int
    {
        \$_ = [];

        return (!\$multi->sleep = !\$multi->sleep) ? -1 : stream_select(\$multi->handles, \$_, \$_, (int) \$timeout, (int) (1E6 * (\$timeout - (int) \$timeout)));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-client/Response/NativeResponse.php";
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

namespace Symfony\\Component\\HttpClient\\Response;

use Psr\\Log\\LoggerInterface;
use Symfony\\Component\\HttpClient\\Chunk\\FirstChunk;
use Symfony\\Component\\HttpClient\\Exception\\TransportException;
use Symfony\\Component\\HttpClient\\Internal\\NativeClientState;
use Symfony\\Contracts\\HttpClient\\ResponseInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
final class NativeResponse implements ResponseInterface
{
    use ResponseTrait;

    private \$context;
    private \$url;
    private \$resolveRedirect;
    private \$onProgress;
    private \$remaining;
    private \$buffer;
    private \$inflate;
    private \$multi;
    private \$debugBuffer;

    /**
     * @internal
     */
    public function __construct(NativeClientState \$multi, \$context, string \$url, \$options, bool \$gzipEnabled, array &\$info, callable \$resolveRedirect, ?callable \$onProgress, ?LoggerInterface \$logger)
    {
        \$this->multi = \$multi;
        \$this->id = (int) \$context;
        \$this->context = \$context;
        \$this->url = \$url;
        \$this->logger = \$logger;
        \$this->timeout = \$options['timeout'];
        \$this->info = &\$info;
        \$this->resolveRedirect = \$resolveRedirect;
        \$this->onProgress = \$onProgress;
        \$this->content = \$options['buffer'] ? fopen('php://temp', 'w+') : null;

        // Temporary resources to dechunk/inflate the response stream
        \$this->buffer = fopen('php://temp', 'w+');
        \$this->inflate = \$gzipEnabled ? inflate_init(ZLIB_ENCODING_GZIP) : null;

        \$info['user_data'] = \$options['user_data'];
        ++\$multi->responseCount;

        \$this->initializer = static function (self \$response) {
            if (null !== \$response->info['error']) {
                throw new TransportException(\$response->info['error']);
            }

            if (null === \$response->remaining) {
                foreach (self::stream([\$response]) as \$chunk) {
                    if (\$chunk->isFirst()) {
                        break;
                    }
                }
            }
        };
    }

    /**
     * {@inheritdoc}
     */
    public function getInfo(string \$type = null)
    {
        if (!\$info = \$this->finalInfo) {
            self::perform(\$this->multi);

            \$info = \$this->info;
            \$info['url'] = implode('', \$info['url']);
            unset(\$info['size_body'], \$info['request_header']);

            if (null === \$this->buffer) {
                \$this->finalInfo = \$info;
            }
        }

        return null !== \$type ? \$info[\$type] ?? null : \$info;
    }

    public function __destruct()
    {
        try {
            \$this->doDestruct();
        } finally {
            \$this->close();

            // Clear the DNS cache when all requests completed
            if (0 >= --\$this->multi->responseCount) {
                \$this->multi->responseCount = 0;
                \$this->multi->dnsCache = [];
            }
        }
    }

    private function open(): void
    {
        set_error_handler(function (\$type, \$msg) { throw new TransportException(\$msg); });

        try {
            \$this->info['start_time'] = microtime(true);
            \$url = \$this->url;

            while (true) {
                \$context = stream_context_get_options(\$this->context);

                if (\$proxy = \$context['http']['proxy'] ?? null) {
                    \$this->info['debug'] .= \"* Establish HTTP proxy tunnel to {\$proxy}\\n\";
                    \$this->info['request_header'] = \$url;
                } else {
                    \$this->info['debug'] .= \"*   Trying {\$this->info['primary_ip']}...\\n\";
                    \$this->info['request_header'] = \$this->info['url']['path'].\$this->info['url']['query'];
                }

                \$this->info['request_header'] = sprintf(\"> %s %s HTTP/%s \\r\\n\", \$context['http']['method'], \$this->info['request_header'], \$context['http']['protocol_version']);
                \$this->info['request_header'] .= implode(\"\\r\\n\", \$context['http']['header']).\"\\r\\n\\r\\n\";

                // Send request and follow redirects when needed
                \$this->handle = \$h = fopen(\$url, 'r', false, \$this->context);
                self::addResponseHeaders(\$http_response_header, \$this->info, \$this->headers, \$this->info['debug']);
                \$url = (\$this->resolveRedirect)(\$this->multi, \$this->headers['location'][0] ?? null, \$this->context);

                if (null === \$url) {
                    break;
                }

                \$this->logger && \$this->logger->info(sprintf('Redirecting: \"%s %s\"', \$this->info['http_code'], \$url ?? \$this->url));
            }
        } catch (\\Throwable \$e) {
            \$this->close();
            \$this->multi->handlesActivity[\$this->id][] = null;
            \$this->multi->handlesActivity[\$this->id][] = \$e;

            return;
        } finally {
            \$this->info['pretransfer_time'] = \$this->info['total_time'] = microtime(true) - \$this->info['start_time'];
            restore_error_handler();
        }

        stream_set_blocking(\$h, false);
        \$this->context = \$this->resolveRedirect = null;

        if (isset(\$context['ssl']['peer_certificate_chain'])) {
            \$this->info['peer_certificate_chain'] = \$context['ssl']['peer_certificate_chain'];
        }

        // Create dechunk and inflate buffers
        if (isset(\$this->headers['content-length'])) {
            \$this->remaining = (int) \$this->headers['content-length'][0];
        } elseif ('chunked' === (\$this->headers['transfer-encoding'][0] ?? null)) {
            stream_filter_append(\$this->buffer, 'dechunk', STREAM_FILTER_WRITE);
            \$this->remaining = -1;
        } else {
            \$this->remaining = -2;
        }

        if (\$this->inflate && 'gzip' !== (\$this->headers['content-encoding'][0] ?? null)) {
            \$this->inflate = null;
        }

        \$this->multi->openHandles[\$this->id] = [\$h, \$this->buffer, \$this->inflate, \$this->content, \$this->onProgress, &\$this->remaining, &\$this->info];
        \$this->multi->handlesActivity[\$this->id] = [new FirstChunk()];
    }

    /**
     * {@inheritdoc}
     */
    private function close(): void
    {
        unset(\$this->multi->openHandles[\$this->id], \$this->multi->handlesActivity[\$this->id]);
        \$this->handle = \$this->buffer = \$this->inflate = \$this->onProgress = null;
    }

    /**
     * {@inheritdoc}
     */
    private static function schedule(self \$response, array &\$runningResponses): void
    {
        if (!isset(\$runningResponses[\$i = \$response->multi->id])) {
            \$runningResponses[\$i] = [\$response->multi, []];
        }

        if (null === \$response->remaining) {
            \$response->multi->pendingResponses[] = \$response;
        } else {
            \$runningResponses[\$i][1][\$response->id] = \$response;
        }

        if (null === \$response->buffer) {
            // Response already completed
            \$response->multi->handlesActivity[\$response->id][] = null;
            \$response->multi->handlesActivity[\$response->id][] = null !== \$response->info['error'] ? new TransportException(\$response->info['error']) : null;
        }
    }

    /**
     * {@inheritdoc}
     */
    private static function perform(NativeClientState \$multi, array &\$responses = null): void
    {
        // List of native handles for stream_select()
        if (null !== \$responses) {
            \$multi->handles = [];
        }

        foreach (\$multi->openHandles as \$i => [\$h, \$buffer, \$inflate, \$content, \$onProgress]) {
            \$hasActivity = false;
            \$remaining = &\$multi->openHandles[\$i][5];
            \$info = &\$multi->openHandles[\$i][6];
            \$e = null;

            // Read incoming buffer and write it to the dechunk one
            try {
                while (\$remaining && '' !== \$data = (string) fread(\$h, 0 > \$remaining ? 16372 : \$remaining)) {
                    fwrite(\$buffer, \$data);
                    \$hasActivity = true;
                    \$multi->sleep = false;

                    if (-1 !== \$remaining) {
                        \$remaining -= \\strlen(\$data);
                    }
                }
            } catch (\\Throwable \$e) {
                \$hasActivity = \$onProgress = false;
            }

            if (!\$hasActivity) {
                if (\$onProgress) {
                    try {
                        // Notify the progress callback so that it can e.g. cancel
                        // the request if the stream is inactive for too long
                        \$info['total_time'] = microtime(true) - \$info['start_time'];
                        \$onProgress();
                    } catch (\\Throwable \$e) {
                        // no-op
                    }
                }
            } elseif ('' !== \$data = stream_get_contents(\$buffer, -1, 0)) {
                rewind(\$buffer);
                ftruncate(\$buffer, 0);

                if (null !== \$inflate && false === \$data = @inflate_add(\$inflate, \$data)) {
                    \$e = new TransportException('Error while processing content unencoding.');
                }

                if ('' !== \$data && null === \$e) {
                    \$multi->handlesActivity[\$i][] = \$data;

                    if (null !== \$content && \\strlen(\$data) !== fwrite(\$content, \$data)) {
                        \$e = new TransportException(sprintf('Failed writing %d bytes to the response buffer.', \\strlen(\$data)));
                    }
                }
            }

            if (null !== \$e || !\$remaining || feof(\$h)) {
                // Stream completed
                \$info['total_time'] = microtime(true) - \$info['start_time'];
                \$info['starttransfer_time'] = \$info['starttransfer_time'] ?: \$info['total_time'];

                if (\$onProgress) {
                    try {
                        \$onProgress(-1);
                    } catch (\\Throwable \$e) {
                        // no-op
                    }
                }

                if (null === \$e) {
                    if (0 < \$remaining) {
                        \$e = new TransportException(sprintf('Transfer closed with %s bytes remaining to read.', \$remaining));
                    } elseif (-1 === \$remaining && fwrite(\$buffer, '-') && '' !== stream_get_contents(\$buffer, -1, 0)) {
                        \$e = new TransportException('Transfer closed with outstanding data remaining from chunked response.');
                    }
                }

                \$multi->handlesActivity[\$i][] = null;
                \$multi->handlesActivity[\$i][] = \$e;
                unset(\$multi->openHandles[\$i]);
                \$multi->sleep = false;
            } elseif (null !== \$responses) {
                \$multi->handles[] = \$h;
            }
        }

        if (null === \$responses) {
            return;
        }

        if (\$multi->pendingResponses && \\count(\$multi->handles) < \$multi->maxHostConnections) {
            // Open the next pending request - this is a blocking operation so we do only one of them
            /** @var self \$response */
            \$response = array_shift(\$multi->pendingResponses);
            \$response->open();
            \$responses[\$response->id] = \$response;
            \$multi->sleep = false;
            self::perform(\$response->multi);

            if (null !== \$response->handle) {
                \$multi->handles[] = \$response->handle;
            }
        }

        if (\$multi->pendingResponses) {
            // Create empty activity list to tell ResponseTrait::stream() we still have pending requests
            \$response = \$multi->pendingResponses[0];
            \$responses[\$response->id] = \$response;
            \$multi->handlesActivity[\$response->id] = [];
        }
    }

    /**
     * {@inheritdoc}
     */
    private static function select(NativeClientState \$multi, float \$timeout): int
    {
        \$_ = [];

        return (!\$multi->sleep = !\$multi->sleep) ? -1 : stream_select(\$multi->handles, \$_, \$_, (int) \$timeout, (int) (1E6 * (\$timeout - (int) \$timeout)));
    }
}
", "vendor/symfony/http-client/Response/NativeResponse.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-client/Response/NativeResponse.php");
    }
}
