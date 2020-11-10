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

/* vendor/symfony/http-client/Tests/HttpClientTraitTest.php */
class __TwigTemplate_061784e8879393dcd3d35e520a6025c348c81fac11642e54412fd52b85f31477 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Tests/HttpClientTraitTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-client/Tests/HttpClientTraitTest.php"));

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

namespace Symfony\\Component\\HttpClient\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpClient\\HttpClientTrait;
use Symfony\\Contracts\\HttpClient\\HttpClientInterface;

class HttpClientTraitTest extends TestCase
{
    use HttpClientTrait;

    private const RFC3986_BASE = 'http://a/b/c/d;p?q';

    /**
     * @dataProvider providePrepareRequestUrl
     */
    public function testPrepareRequestUrl(\$expected, \$url, \$query = [])
    {
        \$defaults = [
            'base_uri' => 'http://example.com?c=c',
            'query' => ['a' => 1, 'b' => 'b'],
        ];
        [, \$defaults] = self::prepareRequest(null, null, \$defaults);

        [\$url] = self::prepareRequest(null, \$url, ['query' => \$query], \$defaults);
        \$this->assertSame(\$expected, implode('', \$url));
    }

    public function providePrepareRequestUrl()
    {
        yield ['http://example.com/', 'http://example.com/'];
        yield ['http://example.com/?a=1&b=b', '.'];
        yield ['http://example.com/?a=2&b=b', '.?a=2'];
        yield ['http://example.com/?a=3&b=b', '.', ['a' => 3]];
        yield ['http://example.com/?a=3&b=b', '.?a=0', ['a' => 3]];
    }

    /**
     * @dataProvider provideResolveUrl
     */
    public function testResolveUrl(\$base, \$url, \$expected)
    {
        \$this->assertSame(\$expected, implode('', self::resolveUrl(self::parseUrl(\$url), self::parseUrl(\$base))));
    }

    /**
     * From https://github.com/guzzle/psr7/blob/master/tests/UriResoverTest.php.
     */
    public function provideResolveUrl()
    {
        return [
            [self::RFC3986_BASE, 'http:h',        'http:h'],
            [self::RFC3986_BASE, 'g',             'http://a/b/c/g'],
            [self::RFC3986_BASE, './g',           'http://a/b/c/g'],
            [self::RFC3986_BASE, 'g/',            'http://a/b/c/g/'],
            [self::RFC3986_BASE, '/g',            'http://a/g'],
            [self::RFC3986_BASE, '//g',           'http://g/'],
            [self::RFC3986_BASE, '?y',            'http://a/b/c/d;p?y'],
            [self::RFC3986_BASE, 'g?y',           'http://a/b/c/g?y'],
            [self::RFC3986_BASE, '#s',            'http://a/b/c/d;p?q#s'],
            [self::RFC3986_BASE, 'g#s',           'http://a/b/c/g#s'],
            [self::RFC3986_BASE, 'g?y#s',         'http://a/b/c/g?y#s'],
            [self::RFC3986_BASE, ';x',            'http://a/b/c/;x'],
            [self::RFC3986_BASE, 'g;x',           'http://a/b/c/g;x'],
            [self::RFC3986_BASE, 'g;x?y#s',       'http://a/b/c/g;x?y#s'],
            [self::RFC3986_BASE, '',              self::RFC3986_BASE],
            [self::RFC3986_BASE, '.',             'http://a/b/c/'],
            [self::RFC3986_BASE, './',            'http://a/b/c/'],
            [self::RFC3986_BASE, '..',            'http://a/b/'],
            [self::RFC3986_BASE, '../',           'http://a/b/'],
            [self::RFC3986_BASE, '../g',          'http://a/b/g'],
            [self::RFC3986_BASE, '../..',         'http://a/'],
            [self::RFC3986_BASE, '../../',        'http://a/'],
            [self::RFC3986_BASE, '../../g',       'http://a/g'],
            [self::RFC3986_BASE, '../../../g',    'http://a/g'],
            [self::RFC3986_BASE, '../../../../g', 'http://a/g'],
            [self::RFC3986_BASE, '/./g',          'http://a/g'],
            [self::RFC3986_BASE, '/../g',         'http://a/g'],
            [self::RFC3986_BASE, 'g.',            'http://a/b/c/g.'],
            [self::RFC3986_BASE, '.g',            'http://a/b/c/.g'],
            [self::RFC3986_BASE, 'g..',           'http://a/b/c/g..'],
            [self::RFC3986_BASE, '..g',           'http://a/b/c/..g'],
            [self::RFC3986_BASE, './../g',        'http://a/b/g'],
            [self::RFC3986_BASE, 'foo////g',      'http://a/b/c/foo////g'],
            [self::RFC3986_BASE, './g/.',         'http://a/b/c/g/'],
            [self::RFC3986_BASE, 'g/./h',         'http://a/b/c/g/h'],
            [self::RFC3986_BASE, 'g/../h',        'http://a/b/c/h'],
            [self::RFC3986_BASE, 'g;x=1/./y',     'http://a/b/c/g;x=1/y'],
            [self::RFC3986_BASE, 'g;x=1/../y',    'http://a/b/c/y'],
            // dot-segments in the query or fragment
            [self::RFC3986_BASE, 'g?y/./x',       'http://a/b/c/g?y/./x'],
            [self::RFC3986_BASE, 'g?y/../x',      'http://a/b/c/g?y/../x'],
            [self::RFC3986_BASE, 'g#s/./x',       'http://a/b/c/g#s/./x'],
            [self::RFC3986_BASE, 'g#s/../x',      'http://a/b/c/g#s/../x'],
            [self::RFC3986_BASE, 'g#s/../x',      'http://a/b/c/g#s/../x'],
            [self::RFC3986_BASE, '?y#s',          'http://a/b/c/d;p?y#s'],
            // base with fragment
            ['http://a/b/c?q#s', '?y',            'http://a/b/c?y'],
            // base with user info
            ['http://u@a/b/c/d;p?q', '.',         'http://u@a/b/c/'],
            ['http://u:p@a/b/c/d;p?q', '.',       'http://u:p@a/b/c/'],
            // path ending with slash or no slash at all
            ['http://a/b/c/d/',  'e',             'http://a/b/c/d/e'],
            ['http:no-slash',     'e',            'http:e'],
            // falsey relative parts
            [self::RFC3986_BASE, '//0',           'http://0/'],
            [self::RFC3986_BASE, '0',             'http://a/b/c/0'],
            [self::RFC3986_BASE, '?0',            'http://a/b/c/d;p?0'],
            [self::RFC3986_BASE, '#0',            'http://a/b/c/d;p?q#0'],
        ];
    }

    /**
     * @dataProvider provideParseUrl
     */
    public function testParseUrl(\$expected, \$url, \$query = [])
    {
        \$expected = array_combine(['scheme', 'authority', 'path', 'query', 'fragment'], \$expected);

        \$this->assertSame(\$expected, self::parseUrl(\$url, \$query));
    }

    public function provideParseUrl()
    {
        yield [['http:', '//example.com', null, null, null], 'http://Example.coM:80'];
        yield [['https:', '//xn--dj-kia8a.example.com:8000', '/', null, null], 'https://DÉjà.Example.com:8000/'];
        yield [[null, null, '/f%20o.o', '?a=b', '#c'], '/f o%2Eo?a=b#c'];
        yield [[null, '//a:b@foo', '/bar', null, null], '//a:b@foo/bar'];
        yield [['http:', null, null, null, null], 'http:'];
        yield [['http:', null, 'bar', null, null], 'http:bar'];
        yield [[null, null, 'bar', '?a=1&c=c', null], 'bar?a=a&b=b', ['b' => null, 'c' => 'c', 'a' => 1]];
        yield [[null, null, 'bar', '?a=b+c&b=b', null], 'bar?a=b+c', ['b' => 'b']];
        yield [[null, null, 'bar', '?a=b%2B%20c', null], 'bar?a=b+c', ['a' => 'b+ c']];
        yield [[null, null, 'bar', '?a%5Bb%5D=c', null], 'bar', ['a' => ['b' => 'c']]];
        yield [[null, null, 'bar', '?a%5Bb%5Bc%5D=d', null], 'bar?a[b[c]=d', []];
        yield [[null, null, 'bar', '?a%5Bb%5D%5Bc%5D=dd', null], 'bar?a[b][c]=d&e[f]=g', ['a' => ['b' => ['c' => 'dd']], 'e[f]' => null]];
        yield [[null, null, 'bar', '?a=b&a%5Bb%20c%5D=d&e%3Df=%E2%9C%93', null], 'bar?a=b', ['a' => ['b c' => 'd'], 'e=f' => '✓']];
    }

    /**
     * @dataProvider provideRemoveDotSegments
     */
    public function testRemoveDotSegments(\$expected, \$url)
    {
        \$this->assertSame(\$expected, self::removeDotSegments(\$url));
    }

    public function provideRemoveDotSegments()
    {
        yield ['', ''];
        yield ['', '.'];
        yield ['', '..'];
        yield ['a', './a'];
        yield ['a', '../a'];
        yield ['/a/b', '/a/./b'];
        yield ['/b/', '/a/../b/.'];
        yield ['/a//b/', '/a///../b/.'];
        yield ['/a/', '/a/b/..'];
        yield ['/a///b', '/a///b'];
    }

    public function testAuthBearerOption()
    {
        [, \$options] = self::prepareRequest('POST', 'http://example.com', ['auth_bearer' => 'foobar'], HttpClientInterface::OPTIONS_DEFAULTS);
        \$this->assertSame(['Accept: *', 'Authorization: Bearer foobar'], \$options['headers']);
        \$this->assertSame(['Authorization: Bearer foobar'], \$options['normalized_headers']['authorization']);
    }

    public function testInvalidAuthBearerOption()
    {
        \$this->expectException('Symfony\\Component\\HttpClient\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Option \"auth_bearer\" must be a string containing only characters from the base 64 alphabet, object given.');
        self::prepareRequest('POST', 'http://example.com', ['auth_bearer' => new \\stdClass()], HttpClientInterface::OPTIONS_DEFAULTS);
    }

    public function testInvalidAuthBearerValue()
    {
        \$this->expectException('Symfony\\Component\\HttpClient\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Option \"auth_bearer\" must be a string containing only characters from the base 64 alphabet, invalid string given.');
        self::prepareRequest('POST', 'http://example.com', ['auth_bearer' => \"a\\nb\"], HttpClientInterface::OPTIONS_DEFAULTS);
    }

    public function testSetAuthBasicAndBearerOptions()
    {
        \$this->expectException('Symfony\\Component\\HttpClient\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Define either the \"auth_basic\" or the \"auth_bearer\" option, setting both is not supported.');
        self::prepareRequest('POST', 'http://example.com', ['auth_bearer' => 'foo', 'auth_basic' => 'foo:bar'], HttpClientInterface::OPTIONS_DEFAULTS);
    }

    public function testSetJSONAndBodyOptions()
    {
        \$this->expectException('Symfony\\Component\\HttpClient\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Define either the \"json\" or the \"body\" option, setting both is not supported');
        self::prepareRequest('POST', 'http://example.com', ['json' => ['foo' => 'bar'], 'body' => '<html/>'], HttpClientInterface::OPTIONS_DEFAULTS);
    }

    public function providePrepareAuthBasic()
    {
        yield ['foo:bar', 'Zm9vOmJhcg=='];
        yield [['foo', 'bar'], 'Zm9vOmJhcg=='];
        yield ['foo', 'Zm9v'];
        yield [['foo'], 'Zm9v'];
    }

    /**
     * @dataProvider providePrepareAuthBasic
     */
    public function testPrepareAuthBasic(\$arg, \$result)
    {
        [, \$options] = \$this->prepareRequest('POST', 'http://example.com', ['auth_basic' => \$arg], HttpClientInterface::OPTIONS_DEFAULTS);
        \$this->assertSame('Authorization: Basic '.\$result, \$options['normalized_headers']['authorization'][0]);
    }

    public function provideFingerprints()
    {
        foreach (['md5', 'sha1', 'sha256'] as \$algo) {
            \$hash = hash(\$algo, \$algo);
            yield [\$hash, [\$algo => \$hash]];
        }

        yield ['AAAA:BBBB:CCCC:DDDD:EEEE:FFFF:GGGG:HHHH:IIII:JJJJ:KKKK', ['pin-sha256' => ['AAAABBBBCCCCDDDDEEEEFFFFGGGGHHHHIIIIJJJJKKKK']]];
    }

    /**
     * @dataProvider provideFingerprints
     */
    public function testNormalizePeerFingerprint(\$fingerprint, \$expected)
    {
        self::assertSame(\$expected, \$this->normalizePeerFingerprint(\$fingerprint));
    }

    public function testNormalizePeerFingerprintException()
    {
        \$this->expectException('Symfony\\Component\\HttpClient\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Cannot auto-detect fingerprint algorithm for \"foo\".');
        \$this->normalizePeerFingerprint('foo');
    }

    public function testNormalizePeerFingerprintTypeException()
    {
        \$this->expectException('Symfony\\Component\\HttpClient\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Option \"peer_fingerprint\" must be string or array, object given.');
        \$fingerprint = new \\stdClass();

        \$this->normalizePeerFingerprint(\$fingerprint);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-client/Tests/HttpClientTraitTest.php";
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

namespace Symfony\\Component\\HttpClient\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\HttpClient\\HttpClientTrait;
use Symfony\\Contracts\\HttpClient\\HttpClientInterface;

class HttpClientTraitTest extends TestCase
{
    use HttpClientTrait;

    private const RFC3986_BASE = 'http://a/b/c/d;p?q';

    /**
     * @dataProvider providePrepareRequestUrl
     */
    public function testPrepareRequestUrl(\$expected, \$url, \$query = [])
    {
        \$defaults = [
            'base_uri' => 'http://example.com?c=c',
            'query' => ['a' => 1, 'b' => 'b'],
        ];
        [, \$defaults] = self::prepareRequest(null, null, \$defaults);

        [\$url] = self::prepareRequest(null, \$url, ['query' => \$query], \$defaults);
        \$this->assertSame(\$expected, implode('', \$url));
    }

    public function providePrepareRequestUrl()
    {
        yield ['http://example.com/', 'http://example.com/'];
        yield ['http://example.com/?a=1&b=b', '.'];
        yield ['http://example.com/?a=2&b=b', '.?a=2'];
        yield ['http://example.com/?a=3&b=b', '.', ['a' => 3]];
        yield ['http://example.com/?a=3&b=b', '.?a=0', ['a' => 3]];
    }

    /**
     * @dataProvider provideResolveUrl
     */
    public function testResolveUrl(\$base, \$url, \$expected)
    {
        \$this->assertSame(\$expected, implode('', self::resolveUrl(self::parseUrl(\$url), self::parseUrl(\$base))));
    }

    /**
     * From https://github.com/guzzle/psr7/blob/master/tests/UriResoverTest.php.
     */
    public function provideResolveUrl()
    {
        return [
            [self::RFC3986_BASE, 'http:h',        'http:h'],
            [self::RFC3986_BASE, 'g',             'http://a/b/c/g'],
            [self::RFC3986_BASE, './g',           'http://a/b/c/g'],
            [self::RFC3986_BASE, 'g/',            'http://a/b/c/g/'],
            [self::RFC3986_BASE, '/g',            'http://a/g'],
            [self::RFC3986_BASE, '//g',           'http://g/'],
            [self::RFC3986_BASE, '?y',            'http://a/b/c/d;p?y'],
            [self::RFC3986_BASE, 'g?y',           'http://a/b/c/g?y'],
            [self::RFC3986_BASE, '#s',            'http://a/b/c/d;p?q#s'],
            [self::RFC3986_BASE, 'g#s',           'http://a/b/c/g#s'],
            [self::RFC3986_BASE, 'g?y#s',         'http://a/b/c/g?y#s'],
            [self::RFC3986_BASE, ';x',            'http://a/b/c/;x'],
            [self::RFC3986_BASE, 'g;x',           'http://a/b/c/g;x'],
            [self::RFC3986_BASE, 'g;x?y#s',       'http://a/b/c/g;x?y#s'],
            [self::RFC3986_BASE, '',              self::RFC3986_BASE],
            [self::RFC3986_BASE, '.',             'http://a/b/c/'],
            [self::RFC3986_BASE, './',            'http://a/b/c/'],
            [self::RFC3986_BASE, '..',            'http://a/b/'],
            [self::RFC3986_BASE, '../',           'http://a/b/'],
            [self::RFC3986_BASE, '../g',          'http://a/b/g'],
            [self::RFC3986_BASE, '../..',         'http://a/'],
            [self::RFC3986_BASE, '../../',        'http://a/'],
            [self::RFC3986_BASE, '../../g',       'http://a/g'],
            [self::RFC3986_BASE, '../../../g',    'http://a/g'],
            [self::RFC3986_BASE, '../../../../g', 'http://a/g'],
            [self::RFC3986_BASE, '/./g',          'http://a/g'],
            [self::RFC3986_BASE, '/../g',         'http://a/g'],
            [self::RFC3986_BASE, 'g.',            'http://a/b/c/g.'],
            [self::RFC3986_BASE, '.g',            'http://a/b/c/.g'],
            [self::RFC3986_BASE, 'g..',           'http://a/b/c/g..'],
            [self::RFC3986_BASE, '..g',           'http://a/b/c/..g'],
            [self::RFC3986_BASE, './../g',        'http://a/b/g'],
            [self::RFC3986_BASE, 'foo////g',      'http://a/b/c/foo////g'],
            [self::RFC3986_BASE, './g/.',         'http://a/b/c/g/'],
            [self::RFC3986_BASE, 'g/./h',         'http://a/b/c/g/h'],
            [self::RFC3986_BASE, 'g/../h',        'http://a/b/c/h'],
            [self::RFC3986_BASE, 'g;x=1/./y',     'http://a/b/c/g;x=1/y'],
            [self::RFC3986_BASE, 'g;x=1/../y',    'http://a/b/c/y'],
            // dot-segments in the query or fragment
            [self::RFC3986_BASE, 'g?y/./x',       'http://a/b/c/g?y/./x'],
            [self::RFC3986_BASE, 'g?y/../x',      'http://a/b/c/g?y/../x'],
            [self::RFC3986_BASE, 'g#s/./x',       'http://a/b/c/g#s/./x'],
            [self::RFC3986_BASE, 'g#s/../x',      'http://a/b/c/g#s/../x'],
            [self::RFC3986_BASE, 'g#s/../x',      'http://a/b/c/g#s/../x'],
            [self::RFC3986_BASE, '?y#s',          'http://a/b/c/d;p?y#s'],
            // base with fragment
            ['http://a/b/c?q#s', '?y',            'http://a/b/c?y'],
            // base with user info
            ['http://u@a/b/c/d;p?q', '.',         'http://u@a/b/c/'],
            ['http://u:p@a/b/c/d;p?q', '.',       'http://u:p@a/b/c/'],
            // path ending with slash or no slash at all
            ['http://a/b/c/d/',  'e',             'http://a/b/c/d/e'],
            ['http:no-slash',     'e',            'http:e'],
            // falsey relative parts
            [self::RFC3986_BASE, '//0',           'http://0/'],
            [self::RFC3986_BASE, '0',             'http://a/b/c/0'],
            [self::RFC3986_BASE, '?0',            'http://a/b/c/d;p?0'],
            [self::RFC3986_BASE, '#0',            'http://a/b/c/d;p?q#0'],
        ];
    }

    /**
     * @dataProvider provideParseUrl
     */
    public function testParseUrl(\$expected, \$url, \$query = [])
    {
        \$expected = array_combine(['scheme', 'authority', 'path', 'query', 'fragment'], \$expected);

        \$this->assertSame(\$expected, self::parseUrl(\$url, \$query));
    }

    public function provideParseUrl()
    {
        yield [['http:', '//example.com', null, null, null], 'http://Example.coM:80'];
        yield [['https:', '//xn--dj-kia8a.example.com:8000', '/', null, null], 'https://DÉjà.Example.com:8000/'];
        yield [[null, null, '/f%20o.o', '?a=b', '#c'], '/f o%2Eo?a=b#c'];
        yield [[null, '//a:b@foo', '/bar', null, null], '//a:b@foo/bar'];
        yield [['http:', null, null, null, null], 'http:'];
        yield [['http:', null, 'bar', null, null], 'http:bar'];
        yield [[null, null, 'bar', '?a=1&c=c', null], 'bar?a=a&b=b', ['b' => null, 'c' => 'c', 'a' => 1]];
        yield [[null, null, 'bar', '?a=b+c&b=b', null], 'bar?a=b+c', ['b' => 'b']];
        yield [[null, null, 'bar', '?a=b%2B%20c', null], 'bar?a=b+c', ['a' => 'b+ c']];
        yield [[null, null, 'bar', '?a%5Bb%5D=c', null], 'bar', ['a' => ['b' => 'c']]];
        yield [[null, null, 'bar', '?a%5Bb%5Bc%5D=d', null], 'bar?a[b[c]=d', []];
        yield [[null, null, 'bar', '?a%5Bb%5D%5Bc%5D=dd', null], 'bar?a[b][c]=d&e[f]=g', ['a' => ['b' => ['c' => 'dd']], 'e[f]' => null]];
        yield [[null, null, 'bar', '?a=b&a%5Bb%20c%5D=d&e%3Df=%E2%9C%93', null], 'bar?a=b', ['a' => ['b c' => 'd'], 'e=f' => '✓']];
    }

    /**
     * @dataProvider provideRemoveDotSegments
     */
    public function testRemoveDotSegments(\$expected, \$url)
    {
        \$this->assertSame(\$expected, self::removeDotSegments(\$url));
    }

    public function provideRemoveDotSegments()
    {
        yield ['', ''];
        yield ['', '.'];
        yield ['', '..'];
        yield ['a', './a'];
        yield ['a', '../a'];
        yield ['/a/b', '/a/./b'];
        yield ['/b/', '/a/../b/.'];
        yield ['/a//b/', '/a///../b/.'];
        yield ['/a/', '/a/b/..'];
        yield ['/a///b', '/a///b'];
    }

    public function testAuthBearerOption()
    {
        [, \$options] = self::prepareRequest('POST', 'http://example.com', ['auth_bearer' => 'foobar'], HttpClientInterface::OPTIONS_DEFAULTS);
        \$this->assertSame(['Accept: *', 'Authorization: Bearer foobar'], \$options['headers']);
        \$this->assertSame(['Authorization: Bearer foobar'], \$options['normalized_headers']['authorization']);
    }

    public function testInvalidAuthBearerOption()
    {
        \$this->expectException('Symfony\\Component\\HttpClient\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Option \"auth_bearer\" must be a string containing only characters from the base 64 alphabet, object given.');
        self::prepareRequest('POST', 'http://example.com', ['auth_bearer' => new \\stdClass()], HttpClientInterface::OPTIONS_DEFAULTS);
    }

    public function testInvalidAuthBearerValue()
    {
        \$this->expectException('Symfony\\Component\\HttpClient\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Option \"auth_bearer\" must be a string containing only characters from the base 64 alphabet, invalid string given.');
        self::prepareRequest('POST', 'http://example.com', ['auth_bearer' => \"a\\nb\"], HttpClientInterface::OPTIONS_DEFAULTS);
    }

    public function testSetAuthBasicAndBearerOptions()
    {
        \$this->expectException('Symfony\\Component\\HttpClient\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Define either the \"auth_basic\" or the \"auth_bearer\" option, setting both is not supported.');
        self::prepareRequest('POST', 'http://example.com', ['auth_bearer' => 'foo', 'auth_basic' => 'foo:bar'], HttpClientInterface::OPTIONS_DEFAULTS);
    }

    public function testSetJSONAndBodyOptions()
    {
        \$this->expectException('Symfony\\Component\\HttpClient\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Define either the \"json\" or the \"body\" option, setting both is not supported');
        self::prepareRequest('POST', 'http://example.com', ['json' => ['foo' => 'bar'], 'body' => '<html/>'], HttpClientInterface::OPTIONS_DEFAULTS);
    }

    public function providePrepareAuthBasic()
    {
        yield ['foo:bar', 'Zm9vOmJhcg=='];
        yield [['foo', 'bar'], 'Zm9vOmJhcg=='];
        yield ['foo', 'Zm9v'];
        yield [['foo'], 'Zm9v'];
    }

    /**
     * @dataProvider providePrepareAuthBasic
     */
    public function testPrepareAuthBasic(\$arg, \$result)
    {
        [, \$options] = \$this->prepareRequest('POST', 'http://example.com', ['auth_basic' => \$arg], HttpClientInterface::OPTIONS_DEFAULTS);
        \$this->assertSame('Authorization: Basic '.\$result, \$options['normalized_headers']['authorization'][0]);
    }

    public function provideFingerprints()
    {
        foreach (['md5', 'sha1', 'sha256'] as \$algo) {
            \$hash = hash(\$algo, \$algo);
            yield [\$hash, [\$algo => \$hash]];
        }

        yield ['AAAA:BBBB:CCCC:DDDD:EEEE:FFFF:GGGG:HHHH:IIII:JJJJ:KKKK', ['pin-sha256' => ['AAAABBBBCCCCDDDDEEEEFFFFGGGGHHHHIIIIJJJJKKKK']]];
    }

    /**
     * @dataProvider provideFingerprints
     */
    public function testNormalizePeerFingerprint(\$fingerprint, \$expected)
    {
        self::assertSame(\$expected, \$this->normalizePeerFingerprint(\$fingerprint));
    }

    public function testNormalizePeerFingerprintException()
    {
        \$this->expectException('Symfony\\Component\\HttpClient\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Cannot auto-detect fingerprint algorithm for \"foo\".');
        \$this->normalizePeerFingerprint('foo');
    }

    public function testNormalizePeerFingerprintTypeException()
    {
        \$this->expectException('Symfony\\Component\\HttpClient\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Option \"peer_fingerprint\" must be string or array, object given.');
        \$fingerprint = new \\stdClass();

        \$this->normalizePeerFingerprint(\$fingerprint);
    }
}
", "vendor/symfony/http-client/Tests/HttpClientTraitTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-client/Tests/HttpClientTraitTest.php");
    }
}
