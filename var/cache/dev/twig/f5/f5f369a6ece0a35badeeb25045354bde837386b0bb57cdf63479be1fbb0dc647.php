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

/* vendor/symfony/yaml/Tests/Fixtures/YtsSpecificationExamples.yml */
class __TwigTemplate_a13dc52443c8a244fc808d471593b14848fd6ddf6536da3e1ddcec02abbbfede extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsSpecificationExamples.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsSpecificationExamples.yml"));

        // line 1
        echo "--- %YAML:1.0
test: Sequence of scalars
spec: 2.1
yaml: |
  - Mark McGwire
  - Sammy Sosa
  - Ken Griffey
php: |
  ['Mark McGwire', 'Sammy Sosa', 'Ken Griffey']
---
test: Mapping of scalars to scalars
spec: 2.2
yaml: |
  hr:  65
  avg: 0.278
  rbi: 147
php: |
  ['hr' => 65, 'avg' => 0.278, 'rbi' => 147]
---
test: Mapping of scalars to sequences
spec: 2.3
yaml: |
    american:
       - Boston Red Sox
       - Detroit Tigers
       - New York Yankees
    national:
       - New York Mets
       - Chicago Cubs
       - Atlanta Braves
php: |
    ['american' =>
        [ 'Boston Red Sox', 'Detroit Tigers',
          'New York Yankees' ],
      'national' =>
        [ 'New York Mets', 'Chicago Cubs',
          'Atlanta Braves' ]
    ]
---
test: Sequence of mappings
spec: 2.4
yaml: |
    -
      name: Mark McGwire
      hr:   65
      avg:  0.278
    -
      name: Sammy Sosa
      hr:   63
      avg:  0.288
php: |
    [
      ['name' => 'Mark McGwire', 'hr' => 65, 'avg' => 0.278],
      ['name' => 'Sammy Sosa', 'hr' => 63, 'avg' => 0.288]
    ]
---
test: Legacy A5
todo: true
spec: legacy_A5
yaml: |
    ?
        - New York Yankees
        - Atlanta Braves
    :
      - 2001-07-02
      - 2001-08-12
      - 2001-08-14
    ?
        - Detroit Tigers
        - Chicago Cubs
    :
      - 2001-07-23
perl-busted: >
    YAML.pm will be able to emulate this behavior soon. In this regard
    it may be somewhat more correct than Python's native behavior which
    can only use tuples as mapping keys. PyYAML will also need to figure
    out some clever way to roundtrip structured keys.
python: |
    [
    {
        ('New York Yankees', 'Atlanta Braves'):
            [yaml.timestamp('2001-07-02'),
             yaml.timestamp('2001-08-12'),
             yaml.timestamp('2001-08-14')],
        ('Detroit Tigers', 'Chicago Cubs'):
        [yaml.timestamp('2001-07-23')]
    }
    ]
ruby: |
    {
      [ 'New York Yankees', 'Atlanta Braves' ] =>
        [ Date.new( 2001, 7, 2 ), Date.new( 2001, 8, 12 ), Date.new( 2001, 8, 14 ) ],
      [ 'Detroit Tigers', 'Chicago Cubs' ] =>
        [ Date.new( 2001, 7, 23 ) ]
    }
syck: |
  struct test_node seq1[] = {
      { T_STR, 0, \"New York Yankees\" },
      { T_STR, 0, \"Atlanta Braves\" },
      end_node
  };
  struct test_node seq2[] = {
      { T_STR, 0, \"2001-07-02\" },
      { T_STR, 0, \"2001-08-12\" },
      { T_STR, 0, \"2001-08-14\" },
      end_node
  };
  struct test_node seq3[] = {
      { T_STR, 0, \"Detroit Tigers\" },
      { T_STR, 0, \"Chicago Cubs\" },
      end_node
  };
  struct test_node seq4[] = {
      { T_STR, 0, \"2001-07-23\" },
      end_node
  };
  struct test_node map[] = {
      { T_SEQ, 0, 0, seq1 },
      { T_SEQ, 0, 0, seq2 },
      { T_SEQ, 0, 0, seq3 },
      { T_SEQ, 0, 0, seq4 },
      end_node
  };
  struct test_node stream[] = {
      { T_MAP, 0, 0, map },
      end_node
  };

---
test: Sequence of sequences
spec: 2.5
yaml: |
  - [ name         , hr , avg   ]
  - [ Mark McGwire , 65 , 0.278 ]
  - [ Sammy Sosa   , 63 , 0.288 ]
php: |
  [
    [ 'name', 'hr', 'avg' ],
    [ 'Mark McGwire', 65, 0.278 ],
    [ 'Sammy Sosa', 63, 0.288 ]
  ]
---
test: Mapping of mappings
todo: true
spec: 2.6
yaml: |
  Mark McGwire: {hr: 65, avg: 0.278}
  Sammy Sosa: {
      hr: 63,
      avg: 0.288
    }
php: |
  [
    'Mark McGwire' =>
      [ 'hr' => 65, 'avg' => 0.278 ],
    'Sammy Sosa' =>
      [ 'hr' => 63, 'avg' => 0.288 ]
  ]
---
test: Two documents in a stream each with a leading comment
todo: true
spec: 2.7
yaml: |
  # Ranking of 1998 home runs
  ---
  - Mark McGwire
  - Sammy Sosa
  - Ken Griffey

  # Team ranking
  ---
  - Chicago Cubs
  - St Louis Cardinals
ruby: |
  y = YAML::Stream.new
  y.add( [ 'Mark McGwire', 'Sammy Sosa', 'Ken Griffey' ] )
  y.add( [ 'Chicago Cubs', 'St Louis Cardinals' ] )
documents: 2

---
test: Play by play feed from a game
todo: true
spec: 2.8
yaml: |
  ---
  time: 20:03:20
  player: Sammy Sosa
  action: strike (miss)
  ...
  ---
  time: 20:03:47
  player: Sammy Sosa
  action: grand slam
  ...
perl: |
  [ 'Mark McGwire', 'Sammy Sosa', 'Ken Griffey' ]
documents: 2

---
test: Single document with two comments
spec: 2.9
yaml: |
  hr: # 1998 hr ranking
    - Mark McGwire
    - Sammy Sosa
  rbi:
    # 1998 rbi ranking
    - Sammy Sosa
    - Ken Griffey
php: |
  [
    'hr' => [ 'Mark McGwire', 'Sammy Sosa' ],
    'rbi' => [ 'Sammy Sosa', 'Ken Griffey' ]
  ]
---
test: Node for Sammy Sosa appears twice in this document
spec: 2.10
yaml: |
   ---
   hr:
      - Mark McGwire
      # Following node labeled SS
      - &SS Sammy Sosa
   rbi:
      - *SS # Subsequent occurrence
      - Ken Griffey
php: |
   [
      'hr' =>
         ['Mark McGwire', 'Sammy Sosa'],
      'rbi' =>
         ['Sammy Sosa', 'Ken Griffey']
    ]
---
test: Mapping between sequences
todo: true
spec: 2.11
yaml: |
   ? # PLAY SCHEDULE
     - Detroit Tigers
     - Chicago Cubs
   :
     - 2001-07-23

   ? [ New York Yankees,
       Atlanta Braves ]
   : [ 2001-07-02, 2001-08-12,
       2001-08-14 ]
ruby: |
   {
      [ 'Detroit Tigers', 'Chicago Cubs' ] => [ Date.new( 2001, 7, 23 ) ],
      [ 'New York Yankees', 'Atlanta Braves' ] => [ Date.new( 2001, 7, 2 ), Date.new( 2001, 8, 12 ), Date.new( 2001, 8, 14 ) ]
   }
syck: |
  struct test_node seq1[] = {
      { T_STR, 0, \"New York Yankees\" },
      { T_STR, 0, \"Atlanta Braves\" },
      end_node
  };
  struct test_node seq2[] = {
      { T_STR, 0, \"2001-07-02\" },
      { T_STR, 0, \"2001-08-12\" },
      { T_STR, 0, \"2001-08-14\" },
      end_node
  };
  struct test_node seq3[] = {
      { T_STR, 0, \"Detroit Tigers\" },
      { T_STR, 0, \"Chicago Cubs\" },
      end_node
  };
  struct test_node seq4[] = {
      { T_STR, 0, \"2001-07-23\" },
      end_node
  };
  struct test_node map[] = {
      { T_SEQ, 0, 0, seq3 },
      { T_SEQ, 0, 0, seq4 },
      { T_SEQ, 0, 0, seq1 },
      { T_SEQ, 0, 0, seq2 },
      end_node
  };
  struct test_node stream[] = {
      { T_MAP, 0, 0, map },
      end_node
  };

---
test: Sequence key shortcut
spec: 2.12
yaml: |
  ---
  # products purchased
  - item    : Super Hoop
    quantity: 1
  - item    : Basketball
    quantity: 4
  - item    : Big Shoes
    quantity: 1
php: |
  [
    [
      'item' => 'Super Hoop',
      'quantity' => 1,
    ],
    [
      'item' => 'Basketball',
      'quantity' => 4,
    ],
    [
      'item' => 'Big Shoes',
      'quantity' => 1,
    ]
  ]
perl: |
  [
     { item => 'Super Hoop', quantity => 1 },
     { item => 'Basketball', quantity => 4 },
     { item => 'Big Shoes',  quantity => 1 }
  ]

ruby: |
  [
     { 'item' => 'Super Hoop', 'quantity' => 1 },
     { 'item' => 'Basketball', 'quantity' => 4 },
     { 'item' => 'Big Shoes', 'quantity' => 1 }
  ]
python: |
  [
       { 'item': 'Super Hoop', 'quantity': 1 },
       { 'item': 'Basketball', 'quantity': 4 },
       { 'item': 'Big Shoes',  'quantity': 1 }
  ]
syck: |
  struct test_node map1[] = {
      { T_STR, 0, \"item\" },
          { T_STR, 0, \"Super Hoop\" },
      { T_STR, 0, \"quantity\" },
          { T_STR, 0, \"1\" },
      end_node
  };
  struct test_node map2[] = {
      { T_STR, 0, \"item\" },
          { T_STR, 0, \"Basketball\" },
      { T_STR, 0, \"quantity\" },
          { T_STR, 0, \"4\" },
      end_node
  };
  struct test_node map3[] = {
      { T_STR, 0, \"item\" },
          { T_STR, 0, \"Big Shoes\" },
      { T_STR, 0, \"quantity\" },
          { T_STR, 0, \"1\" },
      end_node
  };
  struct test_node seq[] = {
      { T_MAP, 0, 0, map1 },
      { T_MAP, 0, 0, map2 },
      { T_MAP, 0, 0, map3 },
      end_node
  };
  struct test_node stream[] = {
      { T_SEQ, 0, 0, seq },
      end_node
  };


---
test: Literal perserves newlines
todo: true
spec: 2.13
yaml: |
  # ASCII Art
  --- |
    \\//||\\/||
    // ||  ||_
perl: |
  \"\\\\//||\\\\/||\\n// ||  ||_\\n\"
ruby: |
  \"\\\\//||\\\\/||\\n// ||  ||_\\n\"
python: |
    [
        flushLeft(
        \"\"\"
        \\//||\\/||
        // ||  ||_
        \"\"\"
        )
    ]
syck: |
  struct test_node stream[] = {
      { T_STR, 0, \"\\\\//||\\\\/||\\n// ||  ||_\\n\" },
      end_node
  };

---
test: Folded treats newlines as a space
todo: true
spec: 2.14
yaml: |
  ---
    Mark McGwire's
    year was crippled
    by a knee injury.
perl: |
  \"Mark McGwire's year was crippled by a knee injury.\"
ruby: |
  \"Mark McGwire's year was crippled by a knee injury.\"
python: |
    [ \"Mark McGwire's year was crippled by a knee injury.\" ]
syck: |
  struct test_node stream[] = {
      { T_STR, 0, \"Mark McGwire's year was crippled by a knee injury.\" },
      end_node
  };

---
test: Newlines preserved for indented and blank lines
todo: true
spec: 2.15
yaml: |
  --- >
   Sammy Sosa completed another
   fine season with great stats.

     63 Home Runs
     0.288 Batting Average

   What a year!
perl: |
  \"Sammy Sosa completed another fine season with great stats.\\n\\n  63 Home Runs\\n  0.288 Batting Average\\n\\nWhat a year!\\n\"
ruby: |
  \"Sammy Sosa completed another fine season with great stats.\\n\\n  63 Home Runs\\n  0.288 Batting Average\\n\\nWhat a year!\\n\"
python: |
    [
        flushLeft(
        \"\"\"
        Sammy Sosa completed another fine season with great stats.

          63 Home Runs
          0.288 Batting Average

        What a year!
        \"\"\"
        )
    ]
syck: |
  struct test_node stream[] = {
      { T_STR, 0, \"Sammy Sosa completed another fine season with great stats.\\n\\n  63 Home Runs\\n  0.288 Batting Average\\n\\nWhat a year!\\n\" },
      end_node
  };


---
test: Indentation determines scope
spec: 2.16
yaml: |
  name: Mark McGwire
  accomplishment: >
     Mark set a major league
     home run record in 1998.
  stats: |
     65 Home Runs
     0.278 Batting Average
php: |
  [
    'name' => 'Mark McGwire',
    'accomplishment' => \"Mark set a major league home run record in 1998.\\n\",
    'stats' => \"65 Home Runs\\n0.278 Batting Average\\n\"
  ]
---
test: Quoted scalars
todo: true
spec: 2.17
yaml: |
  unicode: \"Sosa did fine.\\u263A\"
  control: \"\\b1998\\t1999\\t2000\\n\"
  hexesc:  \"\\x0D\\x0A is \\r\\n\"

  single: '\"Howdy!\" he cried.'
  quoted: ' # not a ''comment''.'
  tie-fighter: '|\\-*-/|'
ruby: |
  {
    \"tie-fighter\" => \"|\\\\-*-/|\",
    \"control\"=>\"\\0101998\\t1999\\t2000\\n\",
    \"unicode\"=>\"Sosa did fine.\" + [\"263A\".hex ].pack('U*'),
    \"quoted\"=>\" # not a 'comment'.\",
    \"single\"=>\"\\\"Howdy!\\\" he cried.\",
    \"hexesc\"=>\"\\r\\n is \\r\\n\"
  }
---
test: Multiline flow scalars
todo: true
spec: 2.18
yaml: |
  plain:
    This unquoted scalar
    spans many lines.

  quoted: \"So does this
    quoted scalar.\\n\"
ruby: |
  {
    'plain' => 'This unquoted scalar spans many lines.',
    'quoted' => \"So does this quoted scalar.\\n\"
  }
---
test: Integers
spec: 2.19
yaml: |
  canonical: 12345
  octal: 014
  hexadecimal: 0xC
php: |
  [
    'canonical' => 12345,
    'octal' => 014,
    'hexadecimal' => 0xC
  ]
---
# FIX: spec shows parens around -inf and NaN
test: Floating point
spec: 2.20
yaml: |
  canonical: 1.23015e+3
  exponential: 12.3015e+02
  negative infinity: -.inf
  not a number: .NaN
  float as whole number: !!float 1
php: |
  [
    'canonical' => 1230.15,
    'exponential' => 1230.15,
    'negative infinity' => log(0),
    'not a number' => -log(0),
    'float as whole number' => (float) 1
  ]
---
test: Timestamps
todo: true
spec: 2.22
yaml: |
  canonical: 2001-12-15T02:59:43.1Z
  iso8601:  2001-12-14t21:59:43.10-05:00
  spaced:  2001-12-14 21:59:43.10 -05:00
  date:   2002-12-14 # Time is noon UTC
php: |
  [
    'canonical' => YAML::mktime( 2001, 12, 15, 2, 59, 43, 0.10 ),
    'iso8601' => YAML::mktime( 2001, 12, 14, 21, 59, 43, 0.10, \"-05:00\" ),
    'spaced' => YAML::mktime( 2001, 12, 14, 21, 59, 43, 0.10, \"-05:00\" ),
    'date' => Date.new( 2002, 12, 14 )
  ]
---
test: legacy Timestamps test
todo: true
spec: legacy D4
yaml: |
    canonical: 2001-12-15T02:59:43.00Z
    iso8601:  2001-02-28t21:59:43.00-05:00
    spaced:  2001-12-14 21:59:43.00 -05:00
    date:   2002-12-14
php: |
   [
     'canonical' => Time::utc( 2001, 12, 15, 2, 59, 43, 0 ),
     'iso8601' => YAML::mktime( 2001, 2, 28, 21, 59, 43, 0, \"-05:00\" ),
     'spaced' => YAML::mktime( 2001, 12, 14, 21, 59, 43, 0, \"-05:00\" ),
     'date' => Date.new( 2002, 12, 14 )
   ]
---
test: Various explicit families
todo: true
spec: 2.23
yaml: |
  not-date: !!str 2002-04-28
  picture: !binary |
   R0lGODlhDAAMAIQAAP//9/X
   17unp5WZmZgAAAOfn515eXv
   Pz7Y6OjuDg4J+fn5OTk6enp
   56enmleECcgggoBADs=

  application specific tag: !!something |
   The semantics of the tag
   above may be different for
   different documents.

ruby-setup: |
  YAML.add_private_type( \"something\" ) do |type, val|
    \"SOMETHING: #{val}\"
  end
ruby: |
  {
    'not-date' => '2002-04-28',
    'picture' => \"GIF89a\\f\\000\\f\\000\\204\\000\\000\\377\\377\\367\\365\\365\\356\\351\\351\\345fff\\000\\000\\000\\347\\347\\347^^^\\363\\363\\355\\216\\216\\216\\340\\340\\340\\237\\237\\237\\223\\223\\223\\247\\247\\247\\236\\236\\236i^\\020' \\202\\n\\001\\000;\",
    'application specific tag' => \"SOMETHING: The semantics of the tag\\nabove may be different for\\ndifferent documents.\\n\"
  }
---
test: Application specific family
todo: true
spec: 2.24
yaml: |
  # Establish a tag prefix
  --- !clarkevans.com,2002/graph/^shape
    # Use the prefix: shorthand for
    # !clarkevans.com,2002/graph/circle
  - !^circle
    center: &ORIGIN {x: 73, 'y': 129}
    radius: 7
  - !^line # !clarkevans.com,2002/graph/line
    start: *ORIGIN
    finish: { x: 89, 'y': 102 }
  - !^label
    start: *ORIGIN
    color: 0xFFEEBB
    value: Pretty vector drawing.
ruby-setup: |
  YAML.add_domain_type( \"clarkevans.com,2002\", 'graph/shape' ) { |type, val|
    if Array === val
      val << \"Shape Container\"
      val
    else
      raise YAML::Error, \"Invalid graph of class #{ val.class }: \" + val.inspect
    end
  }
  one_shape_proc = Proc.new { |type, val|
    scheme, domain, type = type.split( /:/, 3 )
    if val.is_a? ::Hash
      val['TYPE'] = \"Shape: #{type}\"
      val
    else
      raise YAML::Error, \"Invalid graph of class #{ val.class }: \" + val.inspect
    end
  }
  YAML.add_domain_type( \"clarkevans.com,2002\", 'graph/circle', &one_shape_proc )
  YAML.add_domain_type( \"clarkevans.com,2002\", 'graph/line', &one_shape_proc )
  YAML.add_domain_type( \"clarkevans.com,2002\", 'graph/label', &one_shape_proc )
ruby: |
  [
    {
      \"radius\" => 7,
      \"center\"=>
      {
        \"x\" => 73,
        \"y\" => 129
      },
      \"TYPE\" => \"Shape: graph/circle\"
    }, {
      \"finish\" =>
      {
        \"x\" => 89,
        \"y\" => 102
      },
      \"TYPE\" => \"Shape: graph/line\",
      \"start\" =>
      {
        \"x\" => 73,
        \"y\" => 129
      }
    }, {
      \"TYPE\" => \"Shape: graph/label\",
      \"value\" => \"Pretty vector drawing.\",
      \"start\" =>
      {
        \"x\" => 73,
        \"y\" => 129
      },
      \"color\" => 16772795
    },
    \"Shape Container\"
  ]
# ---
# test: Unordered set
# spec: 2.25
# yaml: |
#   # sets are represented as a
#   # mapping where each key is
#   # associated with the empty string
#   --- !set
#   ? Mark McGwire
#   ? Sammy Sosa
#   ? Ken Griff
---
test: Ordered mappings
todo: true
spec: 2.26
yaml: |
  # ordered maps are represented as
  # a sequence of mappings, with
  # each mapping having one key
  --- !omap
  - Mark McGwire: 65
  - Sammy Sosa: 63
  - Ken Griffy: 58
ruby: |
  YAML::Omap[
    'Mark McGwire', 65,
    'Sammy Sosa', 63,
    'Ken Griffy', 58
  ]
---
test: Invoice
dump_skip: true
spec: 2.27
yaml: |
  --- !clarkevans.com,2002/^invoice
  invoice: 34843
  date   : 2001-01-23
  bill-to: &id001
      given  : Chris
      family : Dumars
      address:
          lines: |
              458 Walkman Dr.
              Suite #292
          city    : Royal Oak
          state   : MI
          postal  : 48046
  ship-to: *id001
  product:
      -
        sku         : BL394D
        quantity    : 4
        description : Basketball
        price       : 450.00
      -
        sku         : BL4438H
        quantity    : 1
        description : Super Hoop
        price       : 2392.00
  tax  : 251.42
  total: 4443.52
  comments: >
    Late afternoon is best.
    Backup contact is Nancy
    Billsmer @ 338-4338.
php: |
  [
     'invoice' => 34843, 'date' => gmmktime(0, 0, 0, 1, 23, 2001),
     'bill-to' =>
      [ 'given' => 'Chris', 'family' => 'Dumars', 'address' => [ 'lines' => \"458 Walkman Dr.\\nSuite #292\\n\", 'city' => 'Royal Oak', 'state' => 'MI', 'postal' => 48046 ]]
     , 'ship-to' =>
      [ 'given' => 'Chris', 'family' => 'Dumars', 'address' => [ 'lines' => \"458 Walkman Dr.\\nSuite #292\\n\", 'city' => 'Royal Oak', 'state' => 'MI', 'postal' => 48046 ]]
     , 'product' =>
       [
        [ 'sku' => 'BL394D', 'quantity' => 4, 'description' => 'Basketball', 'price' => 450.00 ],
        [ 'sku' => 'BL4438H', 'quantity' => 1, 'description' => 'Super Hoop', 'price' => 2392.00 ]
      ],
     'tax' => 251.42, 'total' => 4443.52,
     'comments' => \"Late afternoon is best. Backup contact is Nancy Billsmer @ 338-4338.\\n\"
  ]
---
test: Log file
todo: true
spec: 2.28
yaml: |
  ---
  Time: 2001-11-23 15:01:42 -05:00
  User: ed
  Warning: >
    This is an error message
    for the log file
  ---
  Time: 2001-11-23 15:02:31 -05:00
  User: ed
  Warning: >
    A slightly different error
    message.
  ---
  Date: 2001-11-23 15:03:17 -05:00
  User: ed
  Fatal: >
    Unknown variable \"bar\"
  Stack:
    - file: TopClass.py
      line: 23
      code: |
        x = MoreObject(\"345\\n\")
    - file: MoreClass.py
      line: 58
      code: |-
        foo = bar
ruby: |
  y = YAML::Stream.new
  y.add( { 'Time' => YAML::mktime( 2001, 11, 23, 15, 01, 42, 00, \"-05:00\" ),
           'User' => 'ed', 'Warning' => \"This is an error message for the log file\\n\" } )
  y.add( { 'Time' => YAML::mktime( 2001, 11, 23, 15, 02, 31, 00, \"-05:00\" ),
           'User' => 'ed', 'Warning' => \"A slightly different error message.\\n\" } )
  y.add( { 'Date' => YAML::mktime( 2001, 11, 23, 15, 03, 17, 00, \"-05:00\" ),
           'User' => 'ed', 'Fatal' => \"Unknown variable \\\"bar\\\"\\n\",
           'Stack' => [
           { 'file' => 'TopClass.py', 'line' => 23, 'code' => \"x = MoreObject(\\\"345\\\\n\\\")\\n\" },
           { 'file' => 'MoreClass.py', 'line' => 58, 'code' => \"foo = bar\" } ] } )
documents: 3

---
test: Throwaway comments
yaml: |
   ### These are four throwaway comment  ###

   ### lines (the second line is empty). ###
   this: |   # Comments may trail lines.
      contains three lines of text.
      The third one starts with a
      # character. This isn't a comment.

   # These are three throwaway comment
   # lines (the first line is empty).
php: |
   [
     'this' => \"contains three lines of text.\\nThe third one starts with a\\n# character. This isn't a comment.\\n\"
   ]
---
test: Document with a single value
todo: true
yaml: |
   --- >
   This YAML stream contains a single text value.
   The next stream is a log file - a sequence of
   log entries. Adding an entry to the log is a
   simple matter of appending it at the end.
ruby: |
   \"This YAML stream contains a single text value. The next stream is a log file - a sequence of log entries. Adding an entry to the log is a simple matter of appending it at the end.\\n\"
---
test: Document stream
todo: true
yaml: |
   ---
   at: 2001-08-12 09:25:00.00 Z
   type: GET
   HTTP: '1.0'
   url: '/site.html'
   ---
   at: 2001-08-12 09:25:10.00 Z
   type: GET
   HTTP: '1.0'
   url: '/toc.html'
ruby: |
   y = YAML::Stream.new
   y.add( {
      'at' => Time::utc( 2001, 8, 12, 9, 25, 00 ),
      'type' => 'GET',
      'HTTP' => '1.0',
      'url' => '/site.html'
   } )
   y.add( {
      'at' => Time::utc( 2001, 8, 12, 9, 25, 10 ),
      'type' => 'GET',
      'HTTP' => '1.0',
      'url' => '/toc.html'
   } )
documents: 2

---
test: Top level mapping
yaml: |
   # This stream is an example of a top-level mapping.
   invoice : 34843
   date    : 2001-01-23
   total   : 4443.52
php: |
   [
      'invoice' => 34843,
      'date' => gmmktime(0, 0, 0, 1, 23, 2001),
      'total' => 4443.52
   ]
---
test: Single-line documents
todo: true
yaml: |
  # The following is a sequence of three documents.
  # The first contains an empty mapping, the second
  # an empty sequence, and the last an empty string.
  --- {}
  --- [ ]
  --- ''
ruby: |
  y = YAML::Stream.new
  y.add( {} )
  y.add( [] )
  y.add( '' )
documents: 3

---
test: Document with pause
todo: true
yaml: |
  # A communication channel based on a YAML stream.
  ---
  sent at: 2002-06-06 11:46:25.10 Z
  payload: Whatever
  # Receiver can process this as soon as the following is sent:
  ...
  # Even if the next message is sent long after:
  ---
  sent at: 2002-06-06 12:05:53.47 Z
  payload: Whatever
  ...
ruby: |
  y = YAML::Stream.new
  y.add(
    { 'sent at' => YAML::mktime( 2002, 6, 6, 11, 46, 25, 0.10 ),
      'payload' => 'Whatever' }
  )
  y.add(
    { \"payload\" => \"Whatever\", \"sent at\" => YAML::mktime( 2002, 6, 6, 12, 5, 53, 0.47 ) }
  )
documents: 2

---
test: Explicit typing
yaml: |
   integer: 12
   no int: ! 12
   string: !!str 12
php: |
   [ 'integer' => 12, 'no int' => '12', 'string' => '12' ]
---
test: Private types
todo: true
yaml: |
  # Both examples below make use of the 'x-private:ball'
  # type family URI, but with different semantics.
  ---
  pool: !!ball
    number: 8
    color: black
  ---
  bearing: !!ball
    material: steel
ruby: |
  y = YAML::Stream.new
  y.add( { 'pool' =>
    YAML::PrivateType.new( 'ball',
      { 'number' => 8, 'color' => 'black' } ) }
  )
  y.add( { 'bearing' =>
    YAML::PrivateType.new( 'ball',
      { 'material' => 'steel' } ) }
  )
documents: 2

---
test: Type family under yaml.org
yaml: |
  # The URI is 'tag:yaml.org,2002:str'
  - !!str a Unicode string
php: |
  [ 'a Unicode string' ]
---
test: Type family under perl.yaml.org
todo: true
yaml: |
  # The URI is 'tag:perl.yaml.org,2002:Text::Tabs'
  - !perl/Text::Tabs {}
ruby: |
  [ YAML::DomainType.new( 'perl.yaml.org,2002', 'Text::Tabs', {} ) ]
---
test: Type family under clarkevans.com
todo: true
yaml: |
  # The URI is 'tag:clarkevans.com,2003-02:timesheet'
  - !clarkevans.com,2003-02/timesheet {}
ruby: |
  [ YAML::DomainType.new( 'clarkevans.com,2003-02', 'timesheet', {} ) ]
---
test: URI Escaping
todo: true
yaml: |
  same:
    - !domain.tld,2002/type\\x30 value
    - !domain.tld,2002/type0 value
  different: # As far as the YAML parser is concerned
    - !domain.tld,2002/type%30 value
    - !domain.tld,2002/type0 value
ruby-setup: |
  YAML.add_domain_type( \"domain.tld,2002\", \"type0\" ) { |type, val|
    \"ONE: #{val}\"
  }
  YAML.add_domain_type( \"domain.tld,2002\", \"type%30\" ) { |type, val|
    \"TWO: #{val}\"
  }
ruby: |
  { 'same' => [ 'ONE: value', 'ONE: value' ], 'different' => [ 'TWO: value', 'ONE: value' ] }
---
test: URI Prefixing
todo: true
yaml: |
  # 'tag:domain.tld,2002:invoice' is some type family.
  invoice: !domain.tld,2002/^invoice
    # 'seq' is shorthand for 'tag:yaml.org,2002:seq'.
    # This does not effect '^customer' below
    # because it is does not specify a prefix.
    customers: !seq
      # '^customer' is shorthand for the full
      # notation 'tag:domain.tld,2002:customer'.
      - !^customer
        given : Chris
        family : Dumars
ruby-setup: |
  YAML.add_domain_type( \"domain.tld,2002\", /(invoice|customer)/ ) { |type, val|
    if val.is_a? ::Hash
      scheme, domain, type = type.split( /:/, 3 )
      val['type'] = \"domain #{type}\"
      val
    else
      raise YAML::Error, \"Not a Hash in domain.tld/invoice: \" + val.inspect
    end
  }
ruby: |
  { \"invoice\"=> { \"customers\"=> [ { \"given\"=>\"Chris\", \"type\"=>\"domain customer\", \"family\"=>\"Dumars\" } ], \"type\"=>\"domain invoice\" } }

---
test: Overriding anchors
yaml: |
  anchor : &A001 This scalar has an anchor.
  override : &A001 >
   The alias node below is a
   repeated use of this value.
  alias : *A001
php: |
  [ 'anchor' => 'This scalar has an anchor.',
    'override' => \"The alias node below is a repeated use of this value.\\n\",
    'alias' => \"The alias node below is a repeated use of this value.\\n\" ]
---
test: Flow and block formatting
todo: true
yaml: |
  empty: []
  flow: [ one, two, three # May span lines,
           , four,           # indentation is
             five ]          # mostly ignored.
  block:
   - First item in top sequence
   -
    - Subordinate sequence entry
   - >
     A folded sequence entry
   - Sixth item in top sequence
ruby: |
  { 'empty' => [], 'flow' => [ 'one', 'two', 'three', 'four', 'five' ],
    'block' => [ 'First item in top sequence', [ 'Subordinate sequence entry' ],
    \"A folded sequence entry\\n\", 'Sixth item in top sequence' ] }
---
test: Complete mapping test
todo: true
yaml: |
 empty: {}
 flow: { one: 1, two: 2 }
 spanning: { one: 1,
    two: 2 }
 block:
  first : First entry
  second:
   key: Subordinate mapping
  third:
   - Subordinate sequence
   - { }
   - Previous mapping is empty.
   - A key: value pair in a sequence.
     A second: key:value pair.
   - The previous entry is equal to the following one.
   -
     A key: value pair in a sequence.
     A second: key:value pair.
  !float 12 : This key is a float.
  ? >
   ?
  : This key had to be protected.
  \"\\a\" : This key had to be escaped.
  ? >
   This is a
   multi-line
   folded key
  : Whose value is
    also multi-line.
  ? this also works as a key
  : with a value at the next line.
  ?
   - This key
   - is a sequence
  :
   - With a sequence value.
  ?
   This: key
   is a: mapping
  :
   with a: mapping value.
ruby: |
  { 'empty' => {}, 'flow' => { 'one' => 1, 'two' => 2 },
    'spanning' => { 'one' => 1, 'two' => 2 },
    'block' => { 'first' => 'First entry', 'second' =>
    { 'key' => 'Subordinate mapping' }, 'third' =>
      [ 'Subordinate sequence', {}, 'Previous mapping is empty.',
        { 'A key' => 'value pair in a sequence.', 'A second' => 'key:value pair.' },
        'The previous entry is equal to the following one.',
        { 'A key' => 'value pair in a sequence.', 'A second' => 'key:value pair.' } ],
    12.0 => 'This key is a float.', \"?\\n\" => 'This key had to be protected.',
    \"\\a\" => 'This key had to be escaped.',
    \"This is a multi-line folded key\\n\" => \"Whose value is also multi-line.\",
    'this also works as a key' => 'with a value at the next line.',
    [ 'This key', 'is a sequence' ] => [ 'With a sequence value.' ] } }
  # Couldn't recreate map exactly, so we'll do a detailed check to be sure it's entact
  obj_y['block'].keys.each { |k|
    if Hash === k
      v = obj_y['block'][k]
      if k['This'] == 'key' and k['is a'] == 'mapping' and v['with a'] == 'mapping value.'
         obj_r['block'][k] = v
      end
    end
  }
---
test: Literal explicit indentation
yaml: |
   # Explicit indentation must
   # be given in all the three
   # following cases.
   leading spaces: |2
         This value starts with four spaces.

   leading line break: |2

     This value starts with a line break.

   leading comment indicator: |2
     # first line starts with a
     # character.

   # Explicit indentation may
   # also be given when it is
   # not required.
   redundant: |2
     This value is indented 2 spaces.
php: |
   [
      'leading spaces' => \"    This value starts with four spaces.\\n\",
      'leading line break' => \"\\nThis value starts with a line break.\\n\",
      'leading comment indicator' => \"# first line starts with a\\n# character.\\n\",
      'redundant' => \"This value is indented 2 spaces.\\n\"
   ]
---
test: Chomping and keep modifiers
yaml: |
    clipped: |
        This has one newline.

    same as \"clipped\" above: \"This has one newline.\\n\"

    stripped: |-
        This has no newline.

    same as \"stripped\" above: \"This has no newline.\"

    kept: |+
        This has two newlines.

    same as \"kept\" above: \"This has two newlines.\\n\\n\"
php: |
    [
      'clipped' => \"This has one newline.\\n\",
      'same as \"clipped\" above' => \"This has one newline.\\n\",
      'stripped' => 'This has no newline.',
      'same as \"stripped\" above' => 'This has no newline.',
      'kept' => \"This has two newlines.\\n\\n\",
      'same as \"kept\" above' => \"This has two newlines.\\n\\n\"
    ]
---
test: Literal combinations
todo: true
yaml: |
   empty: |

   literal: |
    The \\ ' \" characters may be
    freely used. Leading white
       space is significant.

    Line breaks are significant.
    Thus this value contains one
    empty line and ends with a
    single line break, but does
    not start with one.

   is equal to: \"The \\\\ ' \\\" characters may \\
    be\\nfreely used. Leading white\\n   space \\
    is significant.\\n\\nLine breaks are \\
    significant.\\nThus this value contains \\
    one\\nempty line and ends with a\\nsingle \\
    line break, but does\\nnot start with one.\\n\"

   # Comments may follow a block
   # scalar value. They must be
   # less indented.

   # Modifiers may be combined in any order.
   indented and chomped: |2-
       This has no newline.

   also written as: |-2
       This has no newline.

   both are equal to: \"  This has no newline.\"
php: |
   [
     'empty' => '',
     'literal' => \"The \\\\ ' \\\" characters may be\\nfreely used. Leading white\\n   space \" +
       \"is significant.\\n\\nLine breaks are significant.\\nThus this value contains one\\n\" +
       \"empty line and ends with a\\nsingle line break, but does\\nnot start with one.\\n\",
     'is equal to' => \"The \\\\ ' \\\" characters may be\\nfreely used. Leading white\\n   space \" +
       \"is significant.\\n\\nLine breaks are significant.\\nThus this value contains one\\n\" +
       \"empty line and ends with a\\nsingle line break, but does\\nnot start with one.\\n\",
     'indented and chomped' => '  This has no newline.',
     'also written as' => '  This has no newline.',
     'both are equal to' => '  This has no newline.'
   ]
---
test: Folded combinations
todo: true
yaml: |
   empty: >

   one paragraph: >
    Line feeds are converted
    to spaces, so this value
    contains no line breaks
    except for the final one.

   multiple paragraphs: >2

     An empty line, either
     at the start or in
     the value:

     Is interpreted as a
     line break. Thus this
     value contains three
     line breaks.

   indented text: >
       This is a folded
       paragraph followed
       by a list:
        * first entry
        * second entry
       Followed by another
       folded paragraph,
       another list:

        * first entry

        * second entry

       And a final folded
       paragraph.

   above is equal to: |
       This is a folded paragraph followed by a list:
        * first entry
        * second entry
       Followed by another folded paragraph, another list:

        * first entry

        * second entry

       And a final folded paragraph.

   # Explicit comments may follow
   # but must be less indented.
php: |
   [
     'empty' => '',
     'one paragraph' => 'Line feeds are converted to spaces, so this value'.
       \" contains no line breaks except for the final one.\\n\",
     'multiple paragraphs' => \"\\nAn empty line, either at the start or in the value:\\n\".
       \"Is interpreted as a line break. Thus this value contains three line breaks.\\n\",
     'indented text' => \"This is a folded paragraph followed by a list:\\n\".
       \" * first entry\\n * second entry\\nFollowed by another folded paragraph, \".
       \"another list:\\n\\n * first entry\\n\\n * second entry\\n\\nAnd a final folded paragraph.\\n\",
     'above is equal to' => \"This is a folded paragraph followed by a list:\\n\".
       \" * first entry\\n * second entry\\nFollowed by another folded paragraph, \".
       \"another list:\\n\\n * first entry\\n\\n * second entry\\n\\nAnd a final folded paragraph.\\n\"
   ]
---
test: Single quotes
todo: true
yaml: |
   empty: ''
   second: '! : \\ etc. can be used freely.'
   third: 'a single quote '' must be escaped.'
   span: 'this contains
         six spaces

         and one
         line break'
   is same as: \"this contains six spaces\\nand one line break\"
php: |
   [
     'empty' => '',
     'second' => '! : \\\\ etc. can be used freely.',
     'third' => \"a single quote ' must be escaped.\",
     'span' => \"this contains six spaces\\nand one line break\",
     'is same as' => \"this contains six spaces\\nand one line break\"
   ]
---
test: Double quotes
todo: true
yaml: |
   empty: \"\"
   second: \"! : etc. can be used freely.\"
   third: \"a \\\" or a \\\\ must be escaped.\"
   fourth: \"this value ends with an LF.\\n\"
   span: \"this contains
     four  \\
         spaces\"
   is equal to: \"this contains four  spaces\"
php: |
   [
     'empty' => '',
     'second' => '! : etc. can be used freely.',
     'third' => 'a \" or a \\\\ must be escaped.',
     'fourth' => \"this value ends with an LF.\\n\",
     'span' => \"this contains four  spaces\",
     'is equal to' => \"this contains four  spaces\"
   ]
---
test: Unquoted strings
todo: true
yaml: |
   first: There is no unquoted empty string.

   second: 12          ## This is an integer.

   third: !!str 12      ## This is a string.

   span: this contains
         six spaces

         and one
         line break

   indicators: this has no comments.
               #:foo and bar# are
               both text.

   flow: [ can span
              lines, # comment
              like
              this ]

   note: { one-line keys: but multi-line values }

php: |
   [
     'first' => 'There is no unquoted empty string.',
     'second' => 12,
     'third' => '12',
     'span' => \"this contains six spaces\\nand one line break\",
     'indicators' => \"this has no comments. #:foo and bar# are both text.\",
     'flow' => [ 'can span lines', 'like this' ],
     'note' => { 'one-line keys' => 'but multi-line values' }
   ]
---
test: Spanning sequences
todo: true
yaml: |
   # The following are equal seqs
   # with different identities.
   flow: [ one, two ]
   spanning: [ one,
        two ]
   block:
     - one
     - two
php: |
   [
     'flow' => [ 'one', 'two' ],
     'spanning' => [ 'one', 'two' ],
     'block' => [ 'one', 'two' ]
   ]
---
test: Flow mappings
yaml: |
   # The following are equal maps
   # with different identities.
   flow: { one: 1, two: 2 }
   block:
       one: 1
       two: 2
php: |
   [
     'flow' => [ 'one' => 1, 'two' => 2 ],
     'block' => [ 'one' => 1, 'two' => 2 ]
    ]
---
test: Representations of 12
todo: true
yaml: |
   - 12 # An integer
   # The following scalars
   # are loaded to the
   # string value '1' '2'.
   - !!str 12
   - '12'
   - \"12\"
   - \"\\
     1\\
     2\\
     \"
   # Strings containing paths and regexps can be unquoted:
   - /foo/bar
   - d:/foo/bar
   - foo/bar
   - /a.*b/
php: |
   [ 12, '12', '12', '12', '12', '/foo/bar', 'd:/foo/bar', 'foo/bar', '/a.*b/' ]
---
test: \"Null\"
todo: true
yaml: |
   canonical: ~

   english: null

   # This sequence has five
   # entries, two with values.
   sparse:
     - ~
     - 2nd entry
     - Null
     - 4th entry
     -

   four: This mapping has five keys,
         only two with values.

php: |
   [
     'canonical' => null,
     'english' => null,
     'sparse' => [ null, '2nd entry', null, '4th entry', null ]],
     'four' => 'This mapping has five keys, only two with values.'
      ]
---
test: Omap
todo: true
yaml: |
   # Explicitly typed dictionary.
   Bestiary: !omap
     - aardvark: African pig-like ant eater. Ugly.
     - anteater: South-American ant eater. Two species.
     - anaconda: South-American constrictor snake. Scary.
     # Etc.
ruby: |
   {
     'Bestiary' => YAML::Omap[
       'aardvark', 'African pig-like ant eater. Ugly.',
       'anteater', 'South-American ant eater. Two species.',
       'anaconda', 'South-American constrictor snake. Scary.'
     ]
   }

---
test: Pairs
todo: true
yaml: |
  # Explicitly typed pairs.
  tasks: !pairs
    - meeting: with team.
    - meeting: with boss.
    - break: lunch.
    - meeting: with client.
ruby: |
  {
    'tasks' => YAML::Pairs[
      'meeting', 'with team.',
      'meeting', 'with boss.',
      'break', 'lunch.',
      'meeting', 'with client.'
    ]
  }

---
test: Set
todo: true
yaml: |
  # Explicitly typed set.
  baseball players: !set
    Mark McGwire:
    Sammy Sosa:
    Ken Griffey:
ruby: |
  {
    'baseball players' => YAML::Set[
      'Mark McGwire', nil,
      'Sammy Sosa', nil,
      'Ken Griffey', nil
    ]
  }

---
test: Integer
yaml: |
   canonical: 12345
   octal: 014
   hexadecimal: 0xC
php: |
   [
     'canonical' => 12345,
     'octal' => 12,
     'hexadecimal' => 12
   ]
---
test: Float
yaml: |
   canonical: 1.23015e+3
   exponential: 12.3015e+02
   negative infinity: -.inf
   not a number: .NaN
php: |
  [
    'canonical' => 1230.15,
    'exponential' => 1230.15,
    'negative infinity' => log(0),
    'not a number' => -log(0)
  ]
---
test: Timestamp
todo: true
yaml: |
   canonical:       2001-12-15T02:59:43.1Z
   valid iso8601:   2001-12-14t21:59:43.10-05:00
   space separated: 2001-12-14 21:59:43.10 -05:00
   date (noon UTC): 2002-12-14
ruby: |
   [
     'canonical' => YAML::mktime( 2001, 12, 15, 2, 59, 43, 0.10 ),
     'valid iso8601' => YAML::mktime( 2001, 12, 14, 21, 59, 43, 0.10, \"-05:00\" ),
     'space separated' => YAML::mktime( 2001, 12, 14, 21, 59, 43, 0.10, \"-05:00\" ),
     'date (noon UTC)' => Date.new( 2002, 12, 14 )
   ]
---
test: Binary
todo: true
yaml: |
   canonical: !binary \"\\
    R0lGODlhDAAMAIQAAP//9/X17unp5WZmZgAAAOfn515eXvPz7Y6OjuDg4J+fn5\\
    OTk6enp56enmlpaWNjY6Ojo4SEhP/++f/++f/++f/++f/++f/++f/++f/++f/+\\
    +f/++f/++f/++f/++f/++SH+Dk1hZGUgd2l0aCBHSU1QACwAAAAADAAMAAAFLC\\
    AgjoEwnuNAFOhpEMTRiggcz4BNJHrv/zCFcLiwMWYNG84BwwEeECcgggoBADs=\"
   base64: !binary |
    R0lGODlhDAAMAIQAAP//9/X17unp5WZmZgAAAOfn515eXvPz7Y6OjuDg4J+fn5
    OTk6enp56enmlpaWNjY6Ojo4SEhP/++f/++f/++f/++f/++f/++f/++f/++f/+
    +f/++f/++f/++f/++f/++SH+Dk1hZGUgd2l0aCBHSU1QACwAAAAADAAMAAAFLC
    AgjoEwnuNAFOhpEMTRiggcz4BNJHrv/zCFcLiwMWYNG84BwwEeECcgggoBADs=
   description: >
    The binary value above is a tiny arrow
    encoded as a gif image.
ruby-setup: |
   arrow_gif = \"GIF89a\\f\\000\\f\\000\\204\\000\\000\\377\\377\\367\\365\\365\\356\\351\\351\\345fff\\000\\000\\000\\347\\347\\347^^^\\363\\363\\355\\216\\216\\216\\340\\340\\340\\237\\237\\237\\223\\223\\223\\247\\247\\247\\236\\236\\236iiiccc\\243\\243\\243\\204\\204\\204\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371!\\376\\016Made with GIMP\\000,\\000\\000\\000\\000\\f\\000\\f\\000\\000\\005,  \\216\\2010\\236\\343@\\024\\350i\\020\\304\\321\\212\\010\\034\\317\\200M\$z\\357\\3770\\205p\\270\\2601f\\r\\e\\316\\001\\303\\001\\036\\020' \\202\\n\\001\\000;\"
ruby: |
   {
     'canonical' => arrow_gif,
     'base64' => arrow_gif,
     'description' => \"The binary value above is a tiny arrow encoded as a gif image.\\n\"
   }

---
test: Merge key
todo: true
yaml: |
  ---
  - &CENTER { x: 1, y: 2 }
  - &LEFT { x: 0, y: 2 }
  - &BIG { r: 10 }
  - &SMALL { r: 1 }

  # All the following maps are equal:

  - # Explicit keys
    x: 1
    y: 2
    r: 10
    label: center/big

  - # Merge one map
    << : *CENTER
    r: 10
    label: center/big

  - # Merge multiple maps
    << : [ *CENTER, *BIG ]
    label: center/big

  - # Override
    << : [ *BIG, *LEFT, *SMALL ]
    x: 1
    label: center/big

ruby-setup: |
  center = { 'x' => 1, 'y' => 2 }
  left = { 'x' => 0, 'y' => 2 }
  big = { 'r' => 10 }
  small = { 'r' => 1 }
  node1 = { 'x' => 1, 'y' => 2, 'r' => 10, 'label' => 'center/big' }
  node2 = center.dup
  node2.update( { 'r' => 10, 'label' => 'center/big' } )
  node3 = big.dup
  node3.update( center )
  node3.update( { 'label' => 'center/big' } )
  node4 = small.dup
  node4.update( left )
  node4.update( big )
  node4.update( { 'x' => 1, 'label' => 'center/big' } )

ruby: |
  [
    center, left, big, small, node1, node2, node3, node4
  ]

---
test: Default key
todo: true
yaml: |
   ---     # Old schema
   link with:
     - library1.dll
     - library2.dll
   ---     # New schema
   link with:
     - = : library1.dll
       version: 1.2
     - = : library2.dll
       version: 2.3
ruby: |
   y = YAML::Stream.new
   y.add( { 'link with' => [ 'library1.dll', 'library2.dll' ] } )
   obj_h = Hash[ 'version' => 1.2 ]
   obj_h.default = 'library1.dll'
   obj_h2 = Hash[ 'version' => 2.3 ]
   obj_h2.default = 'library2.dll'
   y.add( { 'link with' => [ obj_h, obj_h2 ] } )
documents: 2

---
test: Special keys
todo: true
yaml: |
   \"!\": These three keys
   \"&\": had to be quoted
   \"=\": and are normal strings.
   # NOTE: the following node should NOT be serialized this way.
   encoded node :
    !special '!' : '!type'
    !special|canonical '&' : 12
    = : value
   # The proper way to serialize the above node is as follows:
   node : !!type &12 value
ruby: |
   { '!' => 'These three keys', '&' => 'had to be quoted',
     '=' => 'and are normal strings.',
     'encoded node' => YAML::PrivateType.new( 'type', 'value' ),
     'node' => YAML::PrivateType.new( 'type', 'value' ) }
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Fixtures/YtsSpecificationExamples.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("--- %YAML:1.0
test: Sequence of scalars
spec: 2.1
yaml: |
  - Mark McGwire
  - Sammy Sosa
  - Ken Griffey
php: |
  ['Mark McGwire', 'Sammy Sosa', 'Ken Griffey']
---
test: Mapping of scalars to scalars
spec: 2.2
yaml: |
  hr:  65
  avg: 0.278
  rbi: 147
php: |
  ['hr' => 65, 'avg' => 0.278, 'rbi' => 147]
---
test: Mapping of scalars to sequences
spec: 2.3
yaml: |
    american:
       - Boston Red Sox
       - Detroit Tigers
       - New York Yankees
    national:
       - New York Mets
       - Chicago Cubs
       - Atlanta Braves
php: |
    ['american' =>
        [ 'Boston Red Sox', 'Detroit Tigers',
          'New York Yankees' ],
      'national' =>
        [ 'New York Mets', 'Chicago Cubs',
          'Atlanta Braves' ]
    ]
---
test: Sequence of mappings
spec: 2.4
yaml: |
    -
      name: Mark McGwire
      hr:   65
      avg:  0.278
    -
      name: Sammy Sosa
      hr:   63
      avg:  0.288
php: |
    [
      ['name' => 'Mark McGwire', 'hr' => 65, 'avg' => 0.278],
      ['name' => 'Sammy Sosa', 'hr' => 63, 'avg' => 0.288]
    ]
---
test: Legacy A5
todo: true
spec: legacy_A5
yaml: |
    ?
        - New York Yankees
        - Atlanta Braves
    :
      - 2001-07-02
      - 2001-08-12
      - 2001-08-14
    ?
        - Detroit Tigers
        - Chicago Cubs
    :
      - 2001-07-23
perl-busted: >
    YAML.pm will be able to emulate this behavior soon. In this regard
    it may be somewhat more correct than Python's native behavior which
    can only use tuples as mapping keys. PyYAML will also need to figure
    out some clever way to roundtrip structured keys.
python: |
    [
    {
        ('New York Yankees', 'Atlanta Braves'):
            [yaml.timestamp('2001-07-02'),
             yaml.timestamp('2001-08-12'),
             yaml.timestamp('2001-08-14')],
        ('Detroit Tigers', 'Chicago Cubs'):
        [yaml.timestamp('2001-07-23')]
    }
    ]
ruby: |
    {
      [ 'New York Yankees', 'Atlanta Braves' ] =>
        [ Date.new( 2001, 7, 2 ), Date.new( 2001, 8, 12 ), Date.new( 2001, 8, 14 ) ],
      [ 'Detroit Tigers', 'Chicago Cubs' ] =>
        [ Date.new( 2001, 7, 23 ) ]
    }
syck: |
  struct test_node seq1[] = {
      { T_STR, 0, \"New York Yankees\" },
      { T_STR, 0, \"Atlanta Braves\" },
      end_node
  };
  struct test_node seq2[] = {
      { T_STR, 0, \"2001-07-02\" },
      { T_STR, 0, \"2001-08-12\" },
      { T_STR, 0, \"2001-08-14\" },
      end_node
  };
  struct test_node seq3[] = {
      { T_STR, 0, \"Detroit Tigers\" },
      { T_STR, 0, \"Chicago Cubs\" },
      end_node
  };
  struct test_node seq4[] = {
      { T_STR, 0, \"2001-07-23\" },
      end_node
  };
  struct test_node map[] = {
      { T_SEQ, 0, 0, seq1 },
      { T_SEQ, 0, 0, seq2 },
      { T_SEQ, 0, 0, seq3 },
      { T_SEQ, 0, 0, seq4 },
      end_node
  };
  struct test_node stream[] = {
      { T_MAP, 0, 0, map },
      end_node
  };

---
test: Sequence of sequences
spec: 2.5
yaml: |
  - [ name         , hr , avg   ]
  - [ Mark McGwire , 65 , 0.278 ]
  - [ Sammy Sosa   , 63 , 0.288 ]
php: |
  [
    [ 'name', 'hr', 'avg' ],
    [ 'Mark McGwire', 65, 0.278 ],
    [ 'Sammy Sosa', 63, 0.288 ]
  ]
---
test: Mapping of mappings
todo: true
spec: 2.6
yaml: |
  Mark McGwire: {hr: 65, avg: 0.278}
  Sammy Sosa: {
      hr: 63,
      avg: 0.288
    }
php: |
  [
    'Mark McGwire' =>
      [ 'hr' => 65, 'avg' => 0.278 ],
    'Sammy Sosa' =>
      [ 'hr' => 63, 'avg' => 0.288 ]
  ]
---
test: Two documents in a stream each with a leading comment
todo: true
spec: 2.7
yaml: |
  # Ranking of 1998 home runs
  ---
  - Mark McGwire
  - Sammy Sosa
  - Ken Griffey

  # Team ranking
  ---
  - Chicago Cubs
  - St Louis Cardinals
ruby: |
  y = YAML::Stream.new
  y.add( [ 'Mark McGwire', 'Sammy Sosa', 'Ken Griffey' ] )
  y.add( [ 'Chicago Cubs', 'St Louis Cardinals' ] )
documents: 2

---
test: Play by play feed from a game
todo: true
spec: 2.8
yaml: |
  ---
  time: 20:03:20
  player: Sammy Sosa
  action: strike (miss)
  ...
  ---
  time: 20:03:47
  player: Sammy Sosa
  action: grand slam
  ...
perl: |
  [ 'Mark McGwire', 'Sammy Sosa', 'Ken Griffey' ]
documents: 2

---
test: Single document with two comments
spec: 2.9
yaml: |
  hr: # 1998 hr ranking
    - Mark McGwire
    - Sammy Sosa
  rbi:
    # 1998 rbi ranking
    - Sammy Sosa
    - Ken Griffey
php: |
  [
    'hr' => [ 'Mark McGwire', 'Sammy Sosa' ],
    'rbi' => [ 'Sammy Sosa', 'Ken Griffey' ]
  ]
---
test: Node for Sammy Sosa appears twice in this document
spec: 2.10
yaml: |
   ---
   hr:
      - Mark McGwire
      # Following node labeled SS
      - &SS Sammy Sosa
   rbi:
      - *SS # Subsequent occurrence
      - Ken Griffey
php: |
   [
      'hr' =>
         ['Mark McGwire', 'Sammy Sosa'],
      'rbi' =>
         ['Sammy Sosa', 'Ken Griffey']
    ]
---
test: Mapping between sequences
todo: true
spec: 2.11
yaml: |
   ? # PLAY SCHEDULE
     - Detroit Tigers
     - Chicago Cubs
   :
     - 2001-07-23

   ? [ New York Yankees,
       Atlanta Braves ]
   : [ 2001-07-02, 2001-08-12,
       2001-08-14 ]
ruby: |
   {
      [ 'Detroit Tigers', 'Chicago Cubs' ] => [ Date.new( 2001, 7, 23 ) ],
      [ 'New York Yankees', 'Atlanta Braves' ] => [ Date.new( 2001, 7, 2 ), Date.new( 2001, 8, 12 ), Date.new( 2001, 8, 14 ) ]
   }
syck: |
  struct test_node seq1[] = {
      { T_STR, 0, \"New York Yankees\" },
      { T_STR, 0, \"Atlanta Braves\" },
      end_node
  };
  struct test_node seq2[] = {
      { T_STR, 0, \"2001-07-02\" },
      { T_STR, 0, \"2001-08-12\" },
      { T_STR, 0, \"2001-08-14\" },
      end_node
  };
  struct test_node seq3[] = {
      { T_STR, 0, \"Detroit Tigers\" },
      { T_STR, 0, \"Chicago Cubs\" },
      end_node
  };
  struct test_node seq4[] = {
      { T_STR, 0, \"2001-07-23\" },
      end_node
  };
  struct test_node map[] = {
      { T_SEQ, 0, 0, seq3 },
      { T_SEQ, 0, 0, seq4 },
      { T_SEQ, 0, 0, seq1 },
      { T_SEQ, 0, 0, seq2 },
      end_node
  };
  struct test_node stream[] = {
      { T_MAP, 0, 0, map },
      end_node
  };

---
test: Sequence key shortcut
spec: 2.12
yaml: |
  ---
  # products purchased
  - item    : Super Hoop
    quantity: 1
  - item    : Basketball
    quantity: 4
  - item    : Big Shoes
    quantity: 1
php: |
  [
    [
      'item' => 'Super Hoop',
      'quantity' => 1,
    ],
    [
      'item' => 'Basketball',
      'quantity' => 4,
    ],
    [
      'item' => 'Big Shoes',
      'quantity' => 1,
    ]
  ]
perl: |
  [
     { item => 'Super Hoop', quantity => 1 },
     { item => 'Basketball', quantity => 4 },
     { item => 'Big Shoes',  quantity => 1 }
  ]

ruby: |
  [
     { 'item' => 'Super Hoop', 'quantity' => 1 },
     { 'item' => 'Basketball', 'quantity' => 4 },
     { 'item' => 'Big Shoes', 'quantity' => 1 }
  ]
python: |
  [
       { 'item': 'Super Hoop', 'quantity': 1 },
       { 'item': 'Basketball', 'quantity': 4 },
       { 'item': 'Big Shoes',  'quantity': 1 }
  ]
syck: |
  struct test_node map1[] = {
      { T_STR, 0, \"item\" },
          { T_STR, 0, \"Super Hoop\" },
      { T_STR, 0, \"quantity\" },
          { T_STR, 0, \"1\" },
      end_node
  };
  struct test_node map2[] = {
      { T_STR, 0, \"item\" },
          { T_STR, 0, \"Basketball\" },
      { T_STR, 0, \"quantity\" },
          { T_STR, 0, \"4\" },
      end_node
  };
  struct test_node map3[] = {
      { T_STR, 0, \"item\" },
          { T_STR, 0, \"Big Shoes\" },
      { T_STR, 0, \"quantity\" },
          { T_STR, 0, \"1\" },
      end_node
  };
  struct test_node seq[] = {
      { T_MAP, 0, 0, map1 },
      { T_MAP, 0, 0, map2 },
      { T_MAP, 0, 0, map3 },
      end_node
  };
  struct test_node stream[] = {
      { T_SEQ, 0, 0, seq },
      end_node
  };


---
test: Literal perserves newlines
todo: true
spec: 2.13
yaml: |
  # ASCII Art
  --- |
    \\//||\\/||
    // ||  ||_
perl: |
  \"\\\\//||\\\\/||\\n// ||  ||_\\n\"
ruby: |
  \"\\\\//||\\\\/||\\n// ||  ||_\\n\"
python: |
    [
        flushLeft(
        \"\"\"
        \\//||\\/||
        // ||  ||_
        \"\"\"
        )
    ]
syck: |
  struct test_node stream[] = {
      { T_STR, 0, \"\\\\//||\\\\/||\\n// ||  ||_\\n\" },
      end_node
  };

---
test: Folded treats newlines as a space
todo: true
spec: 2.14
yaml: |
  ---
    Mark McGwire's
    year was crippled
    by a knee injury.
perl: |
  \"Mark McGwire's year was crippled by a knee injury.\"
ruby: |
  \"Mark McGwire's year was crippled by a knee injury.\"
python: |
    [ \"Mark McGwire's year was crippled by a knee injury.\" ]
syck: |
  struct test_node stream[] = {
      { T_STR, 0, \"Mark McGwire's year was crippled by a knee injury.\" },
      end_node
  };

---
test: Newlines preserved for indented and blank lines
todo: true
spec: 2.15
yaml: |
  --- >
   Sammy Sosa completed another
   fine season with great stats.

     63 Home Runs
     0.288 Batting Average

   What a year!
perl: |
  \"Sammy Sosa completed another fine season with great stats.\\n\\n  63 Home Runs\\n  0.288 Batting Average\\n\\nWhat a year!\\n\"
ruby: |
  \"Sammy Sosa completed another fine season with great stats.\\n\\n  63 Home Runs\\n  0.288 Batting Average\\n\\nWhat a year!\\n\"
python: |
    [
        flushLeft(
        \"\"\"
        Sammy Sosa completed another fine season with great stats.

          63 Home Runs
          0.288 Batting Average

        What a year!
        \"\"\"
        )
    ]
syck: |
  struct test_node stream[] = {
      { T_STR, 0, \"Sammy Sosa completed another fine season with great stats.\\n\\n  63 Home Runs\\n  0.288 Batting Average\\n\\nWhat a year!\\n\" },
      end_node
  };


---
test: Indentation determines scope
spec: 2.16
yaml: |
  name: Mark McGwire
  accomplishment: >
     Mark set a major league
     home run record in 1998.
  stats: |
     65 Home Runs
     0.278 Batting Average
php: |
  [
    'name' => 'Mark McGwire',
    'accomplishment' => \"Mark set a major league home run record in 1998.\\n\",
    'stats' => \"65 Home Runs\\n0.278 Batting Average\\n\"
  ]
---
test: Quoted scalars
todo: true
spec: 2.17
yaml: |
  unicode: \"Sosa did fine.\\u263A\"
  control: \"\\b1998\\t1999\\t2000\\n\"
  hexesc:  \"\\x0D\\x0A is \\r\\n\"

  single: '\"Howdy!\" he cried.'
  quoted: ' # not a ''comment''.'
  tie-fighter: '|\\-*-/|'
ruby: |
  {
    \"tie-fighter\" => \"|\\\\-*-/|\",
    \"control\"=>\"\\0101998\\t1999\\t2000\\n\",
    \"unicode\"=>\"Sosa did fine.\" + [\"263A\".hex ].pack('U*'),
    \"quoted\"=>\" # not a 'comment'.\",
    \"single\"=>\"\\\"Howdy!\\\" he cried.\",
    \"hexesc\"=>\"\\r\\n is \\r\\n\"
  }
---
test: Multiline flow scalars
todo: true
spec: 2.18
yaml: |
  plain:
    This unquoted scalar
    spans many lines.

  quoted: \"So does this
    quoted scalar.\\n\"
ruby: |
  {
    'plain' => 'This unquoted scalar spans many lines.',
    'quoted' => \"So does this quoted scalar.\\n\"
  }
---
test: Integers
spec: 2.19
yaml: |
  canonical: 12345
  octal: 014
  hexadecimal: 0xC
php: |
  [
    'canonical' => 12345,
    'octal' => 014,
    'hexadecimal' => 0xC
  ]
---
# FIX: spec shows parens around -inf and NaN
test: Floating point
spec: 2.20
yaml: |
  canonical: 1.23015e+3
  exponential: 12.3015e+02
  negative infinity: -.inf
  not a number: .NaN
  float as whole number: !!float 1
php: |
  [
    'canonical' => 1230.15,
    'exponential' => 1230.15,
    'negative infinity' => log(0),
    'not a number' => -log(0),
    'float as whole number' => (float) 1
  ]
---
test: Timestamps
todo: true
spec: 2.22
yaml: |
  canonical: 2001-12-15T02:59:43.1Z
  iso8601:  2001-12-14t21:59:43.10-05:00
  spaced:  2001-12-14 21:59:43.10 -05:00
  date:   2002-12-14 # Time is noon UTC
php: |
  [
    'canonical' => YAML::mktime( 2001, 12, 15, 2, 59, 43, 0.10 ),
    'iso8601' => YAML::mktime( 2001, 12, 14, 21, 59, 43, 0.10, \"-05:00\" ),
    'spaced' => YAML::mktime( 2001, 12, 14, 21, 59, 43, 0.10, \"-05:00\" ),
    'date' => Date.new( 2002, 12, 14 )
  ]
---
test: legacy Timestamps test
todo: true
spec: legacy D4
yaml: |
    canonical: 2001-12-15T02:59:43.00Z
    iso8601:  2001-02-28t21:59:43.00-05:00
    spaced:  2001-12-14 21:59:43.00 -05:00
    date:   2002-12-14
php: |
   [
     'canonical' => Time::utc( 2001, 12, 15, 2, 59, 43, 0 ),
     'iso8601' => YAML::mktime( 2001, 2, 28, 21, 59, 43, 0, \"-05:00\" ),
     'spaced' => YAML::mktime( 2001, 12, 14, 21, 59, 43, 0, \"-05:00\" ),
     'date' => Date.new( 2002, 12, 14 )
   ]
---
test: Various explicit families
todo: true
spec: 2.23
yaml: |
  not-date: !!str 2002-04-28
  picture: !binary |
   R0lGODlhDAAMAIQAAP//9/X
   17unp5WZmZgAAAOfn515eXv
   Pz7Y6OjuDg4J+fn5OTk6enp
   56enmleECcgggoBADs=

  application specific tag: !!something |
   The semantics of the tag
   above may be different for
   different documents.

ruby-setup: |
  YAML.add_private_type( \"something\" ) do |type, val|
    \"SOMETHING: #{val}\"
  end
ruby: |
  {
    'not-date' => '2002-04-28',
    'picture' => \"GIF89a\\f\\000\\f\\000\\204\\000\\000\\377\\377\\367\\365\\365\\356\\351\\351\\345fff\\000\\000\\000\\347\\347\\347^^^\\363\\363\\355\\216\\216\\216\\340\\340\\340\\237\\237\\237\\223\\223\\223\\247\\247\\247\\236\\236\\236i^\\020' \\202\\n\\001\\000;\",
    'application specific tag' => \"SOMETHING: The semantics of the tag\\nabove may be different for\\ndifferent documents.\\n\"
  }
---
test: Application specific family
todo: true
spec: 2.24
yaml: |
  # Establish a tag prefix
  --- !clarkevans.com,2002/graph/^shape
    # Use the prefix: shorthand for
    # !clarkevans.com,2002/graph/circle
  - !^circle
    center: &ORIGIN {x: 73, 'y': 129}
    radius: 7
  - !^line # !clarkevans.com,2002/graph/line
    start: *ORIGIN
    finish: { x: 89, 'y': 102 }
  - !^label
    start: *ORIGIN
    color: 0xFFEEBB
    value: Pretty vector drawing.
ruby-setup: |
  YAML.add_domain_type( \"clarkevans.com,2002\", 'graph/shape' ) { |type, val|
    if Array === val
      val << \"Shape Container\"
      val
    else
      raise YAML::Error, \"Invalid graph of class #{ val.class }: \" + val.inspect
    end
  }
  one_shape_proc = Proc.new { |type, val|
    scheme, domain, type = type.split( /:/, 3 )
    if val.is_a? ::Hash
      val['TYPE'] = \"Shape: #{type}\"
      val
    else
      raise YAML::Error, \"Invalid graph of class #{ val.class }: \" + val.inspect
    end
  }
  YAML.add_domain_type( \"clarkevans.com,2002\", 'graph/circle', &one_shape_proc )
  YAML.add_domain_type( \"clarkevans.com,2002\", 'graph/line', &one_shape_proc )
  YAML.add_domain_type( \"clarkevans.com,2002\", 'graph/label', &one_shape_proc )
ruby: |
  [
    {
      \"radius\" => 7,
      \"center\"=>
      {
        \"x\" => 73,
        \"y\" => 129
      },
      \"TYPE\" => \"Shape: graph/circle\"
    }, {
      \"finish\" =>
      {
        \"x\" => 89,
        \"y\" => 102
      },
      \"TYPE\" => \"Shape: graph/line\",
      \"start\" =>
      {
        \"x\" => 73,
        \"y\" => 129
      }
    }, {
      \"TYPE\" => \"Shape: graph/label\",
      \"value\" => \"Pretty vector drawing.\",
      \"start\" =>
      {
        \"x\" => 73,
        \"y\" => 129
      },
      \"color\" => 16772795
    },
    \"Shape Container\"
  ]
# ---
# test: Unordered set
# spec: 2.25
# yaml: |
#   # sets are represented as a
#   # mapping where each key is
#   # associated with the empty string
#   --- !set
#   ? Mark McGwire
#   ? Sammy Sosa
#   ? Ken Griff
---
test: Ordered mappings
todo: true
spec: 2.26
yaml: |
  # ordered maps are represented as
  # a sequence of mappings, with
  # each mapping having one key
  --- !omap
  - Mark McGwire: 65
  - Sammy Sosa: 63
  - Ken Griffy: 58
ruby: |
  YAML::Omap[
    'Mark McGwire', 65,
    'Sammy Sosa', 63,
    'Ken Griffy', 58
  ]
---
test: Invoice
dump_skip: true
spec: 2.27
yaml: |
  --- !clarkevans.com,2002/^invoice
  invoice: 34843
  date   : 2001-01-23
  bill-to: &id001
      given  : Chris
      family : Dumars
      address:
          lines: |
              458 Walkman Dr.
              Suite #292
          city    : Royal Oak
          state   : MI
          postal  : 48046
  ship-to: *id001
  product:
      -
        sku         : BL394D
        quantity    : 4
        description : Basketball
        price       : 450.00
      -
        sku         : BL4438H
        quantity    : 1
        description : Super Hoop
        price       : 2392.00
  tax  : 251.42
  total: 4443.52
  comments: >
    Late afternoon is best.
    Backup contact is Nancy
    Billsmer @ 338-4338.
php: |
  [
     'invoice' => 34843, 'date' => gmmktime(0, 0, 0, 1, 23, 2001),
     'bill-to' =>
      [ 'given' => 'Chris', 'family' => 'Dumars', 'address' => [ 'lines' => \"458 Walkman Dr.\\nSuite #292\\n\", 'city' => 'Royal Oak', 'state' => 'MI', 'postal' => 48046 ]]
     , 'ship-to' =>
      [ 'given' => 'Chris', 'family' => 'Dumars', 'address' => [ 'lines' => \"458 Walkman Dr.\\nSuite #292\\n\", 'city' => 'Royal Oak', 'state' => 'MI', 'postal' => 48046 ]]
     , 'product' =>
       [
        [ 'sku' => 'BL394D', 'quantity' => 4, 'description' => 'Basketball', 'price' => 450.00 ],
        [ 'sku' => 'BL4438H', 'quantity' => 1, 'description' => 'Super Hoop', 'price' => 2392.00 ]
      ],
     'tax' => 251.42, 'total' => 4443.52,
     'comments' => \"Late afternoon is best. Backup contact is Nancy Billsmer @ 338-4338.\\n\"
  ]
---
test: Log file
todo: true
spec: 2.28
yaml: |
  ---
  Time: 2001-11-23 15:01:42 -05:00
  User: ed
  Warning: >
    This is an error message
    for the log file
  ---
  Time: 2001-11-23 15:02:31 -05:00
  User: ed
  Warning: >
    A slightly different error
    message.
  ---
  Date: 2001-11-23 15:03:17 -05:00
  User: ed
  Fatal: >
    Unknown variable \"bar\"
  Stack:
    - file: TopClass.py
      line: 23
      code: |
        x = MoreObject(\"345\\n\")
    - file: MoreClass.py
      line: 58
      code: |-
        foo = bar
ruby: |
  y = YAML::Stream.new
  y.add( { 'Time' => YAML::mktime( 2001, 11, 23, 15, 01, 42, 00, \"-05:00\" ),
           'User' => 'ed', 'Warning' => \"This is an error message for the log file\\n\" } )
  y.add( { 'Time' => YAML::mktime( 2001, 11, 23, 15, 02, 31, 00, \"-05:00\" ),
           'User' => 'ed', 'Warning' => \"A slightly different error message.\\n\" } )
  y.add( { 'Date' => YAML::mktime( 2001, 11, 23, 15, 03, 17, 00, \"-05:00\" ),
           'User' => 'ed', 'Fatal' => \"Unknown variable \\\"bar\\\"\\n\",
           'Stack' => [
           { 'file' => 'TopClass.py', 'line' => 23, 'code' => \"x = MoreObject(\\\"345\\\\n\\\")\\n\" },
           { 'file' => 'MoreClass.py', 'line' => 58, 'code' => \"foo = bar\" } ] } )
documents: 3

---
test: Throwaway comments
yaml: |
   ### These are four throwaway comment  ###

   ### lines (the second line is empty). ###
   this: |   # Comments may trail lines.
      contains three lines of text.
      The third one starts with a
      # character. This isn't a comment.

   # These are three throwaway comment
   # lines (the first line is empty).
php: |
   [
     'this' => \"contains three lines of text.\\nThe third one starts with a\\n# character. This isn't a comment.\\n\"
   ]
---
test: Document with a single value
todo: true
yaml: |
   --- >
   This YAML stream contains a single text value.
   The next stream is a log file - a sequence of
   log entries. Adding an entry to the log is a
   simple matter of appending it at the end.
ruby: |
   \"This YAML stream contains a single text value. The next stream is a log file - a sequence of log entries. Adding an entry to the log is a simple matter of appending it at the end.\\n\"
---
test: Document stream
todo: true
yaml: |
   ---
   at: 2001-08-12 09:25:00.00 Z
   type: GET
   HTTP: '1.0'
   url: '/site.html'
   ---
   at: 2001-08-12 09:25:10.00 Z
   type: GET
   HTTP: '1.0'
   url: '/toc.html'
ruby: |
   y = YAML::Stream.new
   y.add( {
      'at' => Time::utc( 2001, 8, 12, 9, 25, 00 ),
      'type' => 'GET',
      'HTTP' => '1.0',
      'url' => '/site.html'
   } )
   y.add( {
      'at' => Time::utc( 2001, 8, 12, 9, 25, 10 ),
      'type' => 'GET',
      'HTTP' => '1.0',
      'url' => '/toc.html'
   } )
documents: 2

---
test: Top level mapping
yaml: |
   # This stream is an example of a top-level mapping.
   invoice : 34843
   date    : 2001-01-23
   total   : 4443.52
php: |
   [
      'invoice' => 34843,
      'date' => gmmktime(0, 0, 0, 1, 23, 2001),
      'total' => 4443.52
   ]
---
test: Single-line documents
todo: true
yaml: |
  # The following is a sequence of three documents.
  # The first contains an empty mapping, the second
  # an empty sequence, and the last an empty string.
  --- {}
  --- [ ]
  --- ''
ruby: |
  y = YAML::Stream.new
  y.add( {} )
  y.add( [] )
  y.add( '' )
documents: 3

---
test: Document with pause
todo: true
yaml: |
  # A communication channel based on a YAML stream.
  ---
  sent at: 2002-06-06 11:46:25.10 Z
  payload: Whatever
  # Receiver can process this as soon as the following is sent:
  ...
  # Even if the next message is sent long after:
  ---
  sent at: 2002-06-06 12:05:53.47 Z
  payload: Whatever
  ...
ruby: |
  y = YAML::Stream.new
  y.add(
    { 'sent at' => YAML::mktime( 2002, 6, 6, 11, 46, 25, 0.10 ),
      'payload' => 'Whatever' }
  )
  y.add(
    { \"payload\" => \"Whatever\", \"sent at\" => YAML::mktime( 2002, 6, 6, 12, 5, 53, 0.47 ) }
  )
documents: 2

---
test: Explicit typing
yaml: |
   integer: 12
   no int: ! 12
   string: !!str 12
php: |
   [ 'integer' => 12, 'no int' => '12', 'string' => '12' ]
---
test: Private types
todo: true
yaml: |
  # Both examples below make use of the 'x-private:ball'
  # type family URI, but with different semantics.
  ---
  pool: !!ball
    number: 8
    color: black
  ---
  bearing: !!ball
    material: steel
ruby: |
  y = YAML::Stream.new
  y.add( { 'pool' =>
    YAML::PrivateType.new( 'ball',
      { 'number' => 8, 'color' => 'black' } ) }
  )
  y.add( { 'bearing' =>
    YAML::PrivateType.new( 'ball',
      { 'material' => 'steel' } ) }
  )
documents: 2

---
test: Type family under yaml.org
yaml: |
  # The URI is 'tag:yaml.org,2002:str'
  - !!str a Unicode string
php: |
  [ 'a Unicode string' ]
---
test: Type family under perl.yaml.org
todo: true
yaml: |
  # The URI is 'tag:perl.yaml.org,2002:Text::Tabs'
  - !perl/Text::Tabs {}
ruby: |
  [ YAML::DomainType.new( 'perl.yaml.org,2002', 'Text::Tabs', {} ) ]
---
test: Type family under clarkevans.com
todo: true
yaml: |
  # The URI is 'tag:clarkevans.com,2003-02:timesheet'
  - !clarkevans.com,2003-02/timesheet {}
ruby: |
  [ YAML::DomainType.new( 'clarkevans.com,2003-02', 'timesheet', {} ) ]
---
test: URI Escaping
todo: true
yaml: |
  same:
    - !domain.tld,2002/type\\x30 value
    - !domain.tld,2002/type0 value
  different: # As far as the YAML parser is concerned
    - !domain.tld,2002/type%30 value
    - !domain.tld,2002/type0 value
ruby-setup: |
  YAML.add_domain_type( \"domain.tld,2002\", \"type0\" ) { |type, val|
    \"ONE: #{val}\"
  }
  YAML.add_domain_type( \"domain.tld,2002\", \"type%30\" ) { |type, val|
    \"TWO: #{val}\"
  }
ruby: |
  { 'same' => [ 'ONE: value', 'ONE: value' ], 'different' => [ 'TWO: value', 'ONE: value' ] }
---
test: URI Prefixing
todo: true
yaml: |
  # 'tag:domain.tld,2002:invoice' is some type family.
  invoice: !domain.tld,2002/^invoice
    # 'seq' is shorthand for 'tag:yaml.org,2002:seq'.
    # This does not effect '^customer' below
    # because it is does not specify a prefix.
    customers: !seq
      # '^customer' is shorthand for the full
      # notation 'tag:domain.tld,2002:customer'.
      - !^customer
        given : Chris
        family : Dumars
ruby-setup: |
  YAML.add_domain_type( \"domain.tld,2002\", /(invoice|customer)/ ) { |type, val|
    if val.is_a? ::Hash
      scheme, domain, type = type.split( /:/, 3 )
      val['type'] = \"domain #{type}\"
      val
    else
      raise YAML::Error, \"Not a Hash in domain.tld/invoice: \" + val.inspect
    end
  }
ruby: |
  { \"invoice\"=> { \"customers\"=> [ { \"given\"=>\"Chris\", \"type\"=>\"domain customer\", \"family\"=>\"Dumars\" } ], \"type\"=>\"domain invoice\" } }

---
test: Overriding anchors
yaml: |
  anchor : &A001 This scalar has an anchor.
  override : &A001 >
   The alias node below is a
   repeated use of this value.
  alias : *A001
php: |
  [ 'anchor' => 'This scalar has an anchor.',
    'override' => \"The alias node below is a repeated use of this value.\\n\",
    'alias' => \"The alias node below is a repeated use of this value.\\n\" ]
---
test: Flow and block formatting
todo: true
yaml: |
  empty: []
  flow: [ one, two, three # May span lines,
           , four,           # indentation is
             five ]          # mostly ignored.
  block:
   - First item in top sequence
   -
    - Subordinate sequence entry
   - >
     A folded sequence entry
   - Sixth item in top sequence
ruby: |
  { 'empty' => [], 'flow' => [ 'one', 'two', 'three', 'four', 'five' ],
    'block' => [ 'First item in top sequence', [ 'Subordinate sequence entry' ],
    \"A folded sequence entry\\n\", 'Sixth item in top sequence' ] }
---
test: Complete mapping test
todo: true
yaml: |
 empty: {}
 flow: { one: 1, two: 2 }
 spanning: { one: 1,
    two: 2 }
 block:
  first : First entry
  second:
   key: Subordinate mapping
  third:
   - Subordinate sequence
   - { }
   - Previous mapping is empty.
   - A key: value pair in a sequence.
     A second: key:value pair.
   - The previous entry is equal to the following one.
   -
     A key: value pair in a sequence.
     A second: key:value pair.
  !float 12 : This key is a float.
  ? >
   ?
  : This key had to be protected.
  \"\\a\" : This key had to be escaped.
  ? >
   This is a
   multi-line
   folded key
  : Whose value is
    also multi-line.
  ? this also works as a key
  : with a value at the next line.
  ?
   - This key
   - is a sequence
  :
   - With a sequence value.
  ?
   This: key
   is a: mapping
  :
   with a: mapping value.
ruby: |
  { 'empty' => {}, 'flow' => { 'one' => 1, 'two' => 2 },
    'spanning' => { 'one' => 1, 'two' => 2 },
    'block' => { 'first' => 'First entry', 'second' =>
    { 'key' => 'Subordinate mapping' }, 'third' =>
      [ 'Subordinate sequence', {}, 'Previous mapping is empty.',
        { 'A key' => 'value pair in a sequence.', 'A second' => 'key:value pair.' },
        'The previous entry is equal to the following one.',
        { 'A key' => 'value pair in a sequence.', 'A second' => 'key:value pair.' } ],
    12.0 => 'This key is a float.', \"?\\n\" => 'This key had to be protected.',
    \"\\a\" => 'This key had to be escaped.',
    \"This is a multi-line folded key\\n\" => \"Whose value is also multi-line.\",
    'this also works as a key' => 'with a value at the next line.',
    [ 'This key', 'is a sequence' ] => [ 'With a sequence value.' ] } }
  # Couldn't recreate map exactly, so we'll do a detailed check to be sure it's entact
  obj_y['block'].keys.each { |k|
    if Hash === k
      v = obj_y['block'][k]
      if k['This'] == 'key' and k['is a'] == 'mapping' and v['with a'] == 'mapping value.'
         obj_r['block'][k] = v
      end
    end
  }
---
test: Literal explicit indentation
yaml: |
   # Explicit indentation must
   # be given in all the three
   # following cases.
   leading spaces: |2
         This value starts with four spaces.

   leading line break: |2

     This value starts with a line break.

   leading comment indicator: |2
     # first line starts with a
     # character.

   # Explicit indentation may
   # also be given when it is
   # not required.
   redundant: |2
     This value is indented 2 spaces.
php: |
   [
      'leading spaces' => \"    This value starts with four spaces.\\n\",
      'leading line break' => \"\\nThis value starts with a line break.\\n\",
      'leading comment indicator' => \"# first line starts with a\\n# character.\\n\",
      'redundant' => \"This value is indented 2 spaces.\\n\"
   ]
---
test: Chomping and keep modifiers
yaml: |
    clipped: |
        This has one newline.

    same as \"clipped\" above: \"This has one newline.\\n\"

    stripped: |-
        This has no newline.

    same as \"stripped\" above: \"This has no newline.\"

    kept: |+
        This has two newlines.

    same as \"kept\" above: \"This has two newlines.\\n\\n\"
php: |
    [
      'clipped' => \"This has one newline.\\n\",
      'same as \"clipped\" above' => \"This has one newline.\\n\",
      'stripped' => 'This has no newline.',
      'same as \"stripped\" above' => 'This has no newline.',
      'kept' => \"This has two newlines.\\n\\n\",
      'same as \"kept\" above' => \"This has two newlines.\\n\\n\"
    ]
---
test: Literal combinations
todo: true
yaml: |
   empty: |

   literal: |
    The \\ ' \" characters may be
    freely used. Leading white
       space is significant.

    Line breaks are significant.
    Thus this value contains one
    empty line and ends with a
    single line break, but does
    not start with one.

   is equal to: \"The \\\\ ' \\\" characters may \\
    be\\nfreely used. Leading white\\n   space \\
    is significant.\\n\\nLine breaks are \\
    significant.\\nThus this value contains \\
    one\\nempty line and ends with a\\nsingle \\
    line break, but does\\nnot start with one.\\n\"

   # Comments may follow a block
   # scalar value. They must be
   # less indented.

   # Modifiers may be combined in any order.
   indented and chomped: |2-
       This has no newline.

   also written as: |-2
       This has no newline.

   both are equal to: \"  This has no newline.\"
php: |
   [
     'empty' => '',
     'literal' => \"The \\\\ ' \\\" characters may be\\nfreely used. Leading white\\n   space \" +
       \"is significant.\\n\\nLine breaks are significant.\\nThus this value contains one\\n\" +
       \"empty line and ends with a\\nsingle line break, but does\\nnot start with one.\\n\",
     'is equal to' => \"The \\\\ ' \\\" characters may be\\nfreely used. Leading white\\n   space \" +
       \"is significant.\\n\\nLine breaks are significant.\\nThus this value contains one\\n\" +
       \"empty line and ends with a\\nsingle line break, but does\\nnot start with one.\\n\",
     'indented and chomped' => '  This has no newline.',
     'also written as' => '  This has no newline.',
     'both are equal to' => '  This has no newline.'
   ]
---
test: Folded combinations
todo: true
yaml: |
   empty: >

   one paragraph: >
    Line feeds are converted
    to spaces, so this value
    contains no line breaks
    except for the final one.

   multiple paragraphs: >2

     An empty line, either
     at the start or in
     the value:

     Is interpreted as a
     line break. Thus this
     value contains three
     line breaks.

   indented text: >
       This is a folded
       paragraph followed
       by a list:
        * first entry
        * second entry
       Followed by another
       folded paragraph,
       another list:

        * first entry

        * second entry

       And a final folded
       paragraph.

   above is equal to: |
       This is a folded paragraph followed by a list:
        * first entry
        * second entry
       Followed by another folded paragraph, another list:

        * first entry

        * second entry

       And a final folded paragraph.

   # Explicit comments may follow
   # but must be less indented.
php: |
   [
     'empty' => '',
     'one paragraph' => 'Line feeds are converted to spaces, so this value'.
       \" contains no line breaks except for the final one.\\n\",
     'multiple paragraphs' => \"\\nAn empty line, either at the start or in the value:\\n\".
       \"Is interpreted as a line break. Thus this value contains three line breaks.\\n\",
     'indented text' => \"This is a folded paragraph followed by a list:\\n\".
       \" * first entry\\n * second entry\\nFollowed by another folded paragraph, \".
       \"another list:\\n\\n * first entry\\n\\n * second entry\\n\\nAnd a final folded paragraph.\\n\",
     'above is equal to' => \"This is a folded paragraph followed by a list:\\n\".
       \" * first entry\\n * second entry\\nFollowed by another folded paragraph, \".
       \"another list:\\n\\n * first entry\\n\\n * second entry\\n\\nAnd a final folded paragraph.\\n\"
   ]
---
test: Single quotes
todo: true
yaml: |
   empty: ''
   second: '! : \\ etc. can be used freely.'
   third: 'a single quote '' must be escaped.'
   span: 'this contains
         six spaces

         and one
         line break'
   is same as: \"this contains six spaces\\nand one line break\"
php: |
   [
     'empty' => '',
     'second' => '! : \\\\ etc. can be used freely.',
     'third' => \"a single quote ' must be escaped.\",
     'span' => \"this contains six spaces\\nand one line break\",
     'is same as' => \"this contains six spaces\\nand one line break\"
   ]
---
test: Double quotes
todo: true
yaml: |
   empty: \"\"
   second: \"! : etc. can be used freely.\"
   third: \"a \\\" or a \\\\ must be escaped.\"
   fourth: \"this value ends with an LF.\\n\"
   span: \"this contains
     four  \\
         spaces\"
   is equal to: \"this contains four  spaces\"
php: |
   [
     'empty' => '',
     'second' => '! : etc. can be used freely.',
     'third' => 'a \" or a \\\\ must be escaped.',
     'fourth' => \"this value ends with an LF.\\n\",
     'span' => \"this contains four  spaces\",
     'is equal to' => \"this contains four  spaces\"
   ]
---
test: Unquoted strings
todo: true
yaml: |
   first: There is no unquoted empty string.

   second: 12          ## This is an integer.

   third: !!str 12      ## This is a string.

   span: this contains
         six spaces

         and one
         line break

   indicators: this has no comments.
               #:foo and bar# are
               both text.

   flow: [ can span
              lines, # comment
              like
              this ]

   note: { one-line keys: but multi-line values }

php: |
   [
     'first' => 'There is no unquoted empty string.',
     'second' => 12,
     'third' => '12',
     'span' => \"this contains six spaces\\nand one line break\",
     'indicators' => \"this has no comments. #:foo and bar# are both text.\",
     'flow' => [ 'can span lines', 'like this' ],
     'note' => { 'one-line keys' => 'but multi-line values' }
   ]
---
test: Spanning sequences
todo: true
yaml: |
   # The following are equal seqs
   # with different identities.
   flow: [ one, two ]
   spanning: [ one,
        two ]
   block:
     - one
     - two
php: |
   [
     'flow' => [ 'one', 'two' ],
     'spanning' => [ 'one', 'two' ],
     'block' => [ 'one', 'two' ]
   ]
---
test: Flow mappings
yaml: |
   # The following are equal maps
   # with different identities.
   flow: { one: 1, two: 2 }
   block:
       one: 1
       two: 2
php: |
   [
     'flow' => [ 'one' => 1, 'two' => 2 ],
     'block' => [ 'one' => 1, 'two' => 2 ]
    ]
---
test: Representations of 12
todo: true
yaml: |
   - 12 # An integer
   # The following scalars
   # are loaded to the
   # string value '1' '2'.
   - !!str 12
   - '12'
   - \"12\"
   - \"\\
     1\\
     2\\
     \"
   # Strings containing paths and regexps can be unquoted:
   - /foo/bar
   - d:/foo/bar
   - foo/bar
   - /a.*b/
php: |
   [ 12, '12', '12', '12', '12', '/foo/bar', 'd:/foo/bar', 'foo/bar', '/a.*b/' ]
---
test: \"Null\"
todo: true
yaml: |
   canonical: ~

   english: null

   # This sequence has five
   # entries, two with values.
   sparse:
     - ~
     - 2nd entry
     - Null
     - 4th entry
     -

   four: This mapping has five keys,
         only two with values.

php: |
   [
     'canonical' => null,
     'english' => null,
     'sparse' => [ null, '2nd entry', null, '4th entry', null ]],
     'four' => 'This mapping has five keys, only two with values.'
      ]
---
test: Omap
todo: true
yaml: |
   # Explicitly typed dictionary.
   Bestiary: !omap
     - aardvark: African pig-like ant eater. Ugly.
     - anteater: South-American ant eater. Two species.
     - anaconda: South-American constrictor snake. Scary.
     # Etc.
ruby: |
   {
     'Bestiary' => YAML::Omap[
       'aardvark', 'African pig-like ant eater. Ugly.',
       'anteater', 'South-American ant eater. Two species.',
       'anaconda', 'South-American constrictor snake. Scary.'
     ]
   }

---
test: Pairs
todo: true
yaml: |
  # Explicitly typed pairs.
  tasks: !pairs
    - meeting: with team.
    - meeting: with boss.
    - break: lunch.
    - meeting: with client.
ruby: |
  {
    'tasks' => YAML::Pairs[
      'meeting', 'with team.',
      'meeting', 'with boss.',
      'break', 'lunch.',
      'meeting', 'with client.'
    ]
  }

---
test: Set
todo: true
yaml: |
  # Explicitly typed set.
  baseball players: !set
    Mark McGwire:
    Sammy Sosa:
    Ken Griffey:
ruby: |
  {
    'baseball players' => YAML::Set[
      'Mark McGwire', nil,
      'Sammy Sosa', nil,
      'Ken Griffey', nil
    ]
  }

---
test: Integer
yaml: |
   canonical: 12345
   octal: 014
   hexadecimal: 0xC
php: |
   [
     'canonical' => 12345,
     'octal' => 12,
     'hexadecimal' => 12
   ]
---
test: Float
yaml: |
   canonical: 1.23015e+3
   exponential: 12.3015e+02
   negative infinity: -.inf
   not a number: .NaN
php: |
  [
    'canonical' => 1230.15,
    'exponential' => 1230.15,
    'negative infinity' => log(0),
    'not a number' => -log(0)
  ]
---
test: Timestamp
todo: true
yaml: |
   canonical:       2001-12-15T02:59:43.1Z
   valid iso8601:   2001-12-14t21:59:43.10-05:00
   space separated: 2001-12-14 21:59:43.10 -05:00
   date (noon UTC): 2002-12-14
ruby: |
   [
     'canonical' => YAML::mktime( 2001, 12, 15, 2, 59, 43, 0.10 ),
     'valid iso8601' => YAML::mktime( 2001, 12, 14, 21, 59, 43, 0.10, \"-05:00\" ),
     'space separated' => YAML::mktime( 2001, 12, 14, 21, 59, 43, 0.10, \"-05:00\" ),
     'date (noon UTC)' => Date.new( 2002, 12, 14 )
   ]
---
test: Binary
todo: true
yaml: |
   canonical: !binary \"\\
    R0lGODlhDAAMAIQAAP//9/X17unp5WZmZgAAAOfn515eXvPz7Y6OjuDg4J+fn5\\
    OTk6enp56enmlpaWNjY6Ojo4SEhP/++f/++f/++f/++f/++f/++f/++f/++f/+\\
    +f/++f/++f/++f/++f/++SH+Dk1hZGUgd2l0aCBHSU1QACwAAAAADAAMAAAFLC\\
    AgjoEwnuNAFOhpEMTRiggcz4BNJHrv/zCFcLiwMWYNG84BwwEeECcgggoBADs=\"
   base64: !binary |
    R0lGODlhDAAMAIQAAP//9/X17unp5WZmZgAAAOfn515eXvPz7Y6OjuDg4J+fn5
    OTk6enp56enmlpaWNjY6Ojo4SEhP/++f/++f/++f/++f/++f/++f/++f/++f/+
    +f/++f/++f/++f/++f/++SH+Dk1hZGUgd2l0aCBHSU1QACwAAAAADAAMAAAFLC
    AgjoEwnuNAFOhpEMTRiggcz4BNJHrv/zCFcLiwMWYNG84BwwEeECcgggoBADs=
   description: >
    The binary value above is a tiny arrow
    encoded as a gif image.
ruby-setup: |
   arrow_gif = \"GIF89a\\f\\000\\f\\000\\204\\000\\000\\377\\377\\367\\365\\365\\356\\351\\351\\345fff\\000\\000\\000\\347\\347\\347^^^\\363\\363\\355\\216\\216\\216\\340\\340\\340\\237\\237\\237\\223\\223\\223\\247\\247\\247\\236\\236\\236iiiccc\\243\\243\\243\\204\\204\\204\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371\\377\\376\\371!\\376\\016Made with GIMP\\000,\\000\\000\\000\\000\\f\\000\\f\\000\\000\\005,  \\216\\2010\\236\\343@\\024\\350i\\020\\304\\321\\212\\010\\034\\317\\200M\$z\\357\\3770\\205p\\270\\2601f\\r\\e\\316\\001\\303\\001\\036\\020' \\202\\n\\001\\000;\"
ruby: |
   {
     'canonical' => arrow_gif,
     'base64' => arrow_gif,
     'description' => \"The binary value above is a tiny arrow encoded as a gif image.\\n\"
   }

---
test: Merge key
todo: true
yaml: |
  ---
  - &CENTER { x: 1, y: 2 }
  - &LEFT { x: 0, y: 2 }
  - &BIG { r: 10 }
  - &SMALL { r: 1 }

  # All the following maps are equal:

  - # Explicit keys
    x: 1
    y: 2
    r: 10
    label: center/big

  - # Merge one map
    << : *CENTER
    r: 10
    label: center/big

  - # Merge multiple maps
    << : [ *CENTER, *BIG ]
    label: center/big

  - # Override
    << : [ *BIG, *LEFT, *SMALL ]
    x: 1
    label: center/big

ruby-setup: |
  center = { 'x' => 1, 'y' => 2 }
  left = { 'x' => 0, 'y' => 2 }
  big = { 'r' => 10 }
  small = { 'r' => 1 }
  node1 = { 'x' => 1, 'y' => 2, 'r' => 10, 'label' => 'center/big' }
  node2 = center.dup
  node2.update( { 'r' => 10, 'label' => 'center/big' } )
  node3 = big.dup
  node3.update( center )
  node3.update( { 'label' => 'center/big' } )
  node4 = small.dup
  node4.update( left )
  node4.update( big )
  node4.update( { 'x' => 1, 'label' => 'center/big' } )

ruby: |
  [
    center, left, big, small, node1, node2, node3, node4
  ]

---
test: Default key
todo: true
yaml: |
   ---     # Old schema
   link with:
     - library1.dll
     - library2.dll
   ---     # New schema
   link with:
     - = : library1.dll
       version: 1.2
     - = : library2.dll
       version: 2.3
ruby: |
   y = YAML::Stream.new
   y.add( { 'link with' => [ 'library1.dll', 'library2.dll' ] } )
   obj_h = Hash[ 'version' => 1.2 ]
   obj_h.default = 'library1.dll'
   obj_h2 = Hash[ 'version' => 2.3 ]
   obj_h2.default = 'library2.dll'
   y.add( { 'link with' => [ obj_h, obj_h2 ] } )
documents: 2

---
test: Special keys
todo: true
yaml: |
   \"!\": These three keys
   \"&\": had to be quoted
   \"=\": and are normal strings.
   # NOTE: the following node should NOT be serialized this way.
   encoded node :
    !special '!' : '!type'
    !special|canonical '&' : 12
    = : value
   # The proper way to serialize the above node is as follows:
   node : !!type &12 value
ruby: |
   { '!' => 'These three keys', '&' => 'had to be quoted',
     '=' => 'and are normal strings.',
     'encoded node' => YAML::PrivateType.new( 'type', 'value' ),
     'node' => YAML::PrivateType.new( 'type', 'value' ) }
", "vendor/symfony/yaml/Tests/Fixtures/YtsSpecificationExamples.yml", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Fixtures/YtsSpecificationExamples.yml");
    }
}
