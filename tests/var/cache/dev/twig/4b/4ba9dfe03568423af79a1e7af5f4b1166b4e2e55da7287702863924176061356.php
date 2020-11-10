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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_IN/Address.php */
class __TwigTemplate_e3ffb658872f9ae9c99b61f4caf550466962d6b16496c813ab0bbbc0e1559d89 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_IN/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_IN/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_IN;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$city = array(
        'Agra','Ahmedabad','Ajmer','Alwar',
        'Bengaluru','Bhubhaneshwar','Bhopal','Bikaner',
        'Chennai','Chandigarh',
        'Darjeeling','Dehra Dun','Delhi',
        'Faridabad',
        'Gandhinagar','Guwahati','Gangtok','Gurgaon',
        'Hyderabad','Hisar',
        'Indore',
        'Jaipur','Jodhpur','Jammu','Jamnagar','Jabalpur',
        'Kolkata','Kanpur','Kota','Kochi',
        'Ludhiana','Lucknow',
        'Mumbai','Meerut','Mysore',
        'Nagpur','Nashik','Noida','New Delhi',
        'Pune','Patna','Panaji','Pilani','Pondicherry',
        'Ratlam','Raipur','Ranchi','Rajkot',
        'Surat','Simla','Srinagar',
        'Thiruvananthapuram','Trichy',
        'Udaipur',
        'Vishakhapattanam','Vadodara',
        'Warangal',
    );

    protected static \$state = array(
        
        // States
        'Andhra Pradesh', 'Arunachal Pradesh', 'Assam',
        'Bihar',
        'Chhattisgarh',
        'Goa', 'Gujarat',
        'Haryana', 'Himachal Pradesh',
        'Jammu and Kashmir',
        'Jharkhand',
        'Karnataka', 'Kerala',
        'Madhya Pradesh', 'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram',
        'Nagaland',
        'Odisha',
        'Punjab',
        'Rajasthan',
        'Sikkim',
        'Tamil Nadu', 'Telangana', 'Tripura',
        'Uttar Pradesh', 'Uttarakhand',
        'West Bengal',
        
        // Union Territories
        'Andaman and Nicobar Islands',
        'Chandigarh',
        'Dadra and Nagar Haveli', 'Daman and Diu', 'Delhi',
        'Lakshadweep',
        'Puducherry'
    );

    protected static \$stateAbbr = array(
       'AP', 'AR', 'AS', 'BR', 'CG', 'GA', 'GJ', 'HR', 'HP', 'JK', 'JH', 'KA', 'KL', 'MP', 'MH', 'MN', 'ML', 'MZ', 'NL', 'OD', 'PB', 'RJ', 'SK', 'TN', 'TS', 'TR', 'UP', 'UK', 'WB', 'AN', 'CH', 'DN', 'DD', 'DL', 'LD', 'PY'
    );

    protected static \$country = array(
        'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antarctica (the territory South of 60 deg S)', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Bouvet Island (Bouvetoya)', 'Brazil', 'British Indian Ocean Territory (Chagos Archipelago)', 'British Virgin Islands', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi',
        'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo', 'Congo', 'Cook Islands', 'Costa Rica', 'Cote d\\'Ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic',
        'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic',
        'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia',
        'Faroe Islands', 'Falkland Islands (Malvinas)', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'French Southern Territories',
        'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard Island and McDonald Islands', 'Holy See (Vatican City State)', 'Honduras', 'Hong Kong', 'Hungary',
        'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy',
        'Jamaica', 'Japan', 'Jersey', 'Jordan',
        'Kazakhstan', 'Kenya', 'Kiribati', 'Korea', 'Korea', 'Kuwait', 'Kyrgyz Republic',
        'Lao People\\'s Democratic Republic', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lithuania', 'Luxembourg',
        'Macao', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Netherlands Antilles', 'Netherlands', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway',
        'Oman',
        'Pakistan', 'Palau', 'Palestinian Territories', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn Islands', 'Poland', 'Portugal', 'Puerto Rico',
        'Qatar',
        'Reunion', 'Romania', 'Russian Federation', 'Rwanda',
        'Saint Barthelemy', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Martin', 'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia (Slovak Republic)', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Georgia and the South Sandwich Islands', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard & Jan Mayen Islands', 'Swaziland', 'Sweden', 'Switzerland', 'Syrian Arab Republic',
        'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu',
        'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America', 'United States Minor Outlying Islands', 'United States Virgin Islands', 'Uruguay', 'Uzbekistan',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Wallis and Futuna', 'Western Sahara',
        'Yemen',
        'Zambia', 'Zimbabwe'
    );
    protected static \$localityName = array(
        'Aundh','Andheri',
        'Borivali','Bandra',
        'Chinchwad','Chandpole','Churchgate','Cyber City',
        'Dadar','Deccan Gymkhana',
        'Goregaon',
        'Hadapsar','Harmada','Hinjewadi',
        'Kormangala','Kharadi',
        'Marathahalli','Model Town','Mansarovar','Malad',
        'Sodala',
        'Virar','Vikhroli',
        'Yerwada','Yeshwanthpura',
    );
    protected static \$areaSuffix = array(
        ' Nagar','Pur','Garh','Gunj',' Chowk',
    );
    protected static \$postcode = array(
        '1#####','2#####','3#####','4#####','5#####',
    );
    protected static \$localityFormats = array(
        '";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 110, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["areaSuffix"]) || array_key_exists("areaSuffix", $context) ? $context["areaSuffix"] : (function () { throw new RuntimeError('Variable "areaSuffix" does not exist.', 110, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["localityName"]) || array_key_exists("localityName", $context) ? $context["localityName"] : (function () { throw new RuntimeError('Variable "localityName" does not exist.', 111, $this->source); })()), "html", null, true);
        echo "'
    );
    protected static \$addressFormats = array(
        '";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 114, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 114, $this->source); })()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 114, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$societySuffix = array(
        'Society','Apartments','Heights','Villas',
    );
    protected static \$societyNameFormat = array(
        '";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 120, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["societySuffix"]) || array_key_exists("societySuffix", $context) ? $context["societySuffix"] : (function () { throw new RuntimeError('Variable "societySuffix" does not exist.', 120, $this->source); })()), "html", null, true);
        echo "'
    );
    protected static \$streetAddressFormats = array(
        
        '";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 124, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["locality"]) || array_key_exists("locality", $context) ? $context["locality"] : (function () { throw new RuntimeError('Variable "locality" does not exist.', 124, $this->source); })()), "html", null, true);
        echo ",',
        '";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 125, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["societyName"]) || array_key_exists("societyName", $context) ? $context["societyName"] : (function () { throw new RuntimeError('Variable "societyName" does not exist.', 125, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["locality"]) || array_key_exists("locality", $context) ? $context["locality"] : (function () { throw new RuntimeError('Variable "locality" does not exist.', 125, $this->source); })()), "html", null, true);
        echo "',
    );
    public function societySuffix()
    {
        return static::randomElement(static::\$societySuffix);
    }
    /**
     * @example Shanti Apartments
     */
    public function societyName()
    {
        return \$this->generator->parse(static::randomElement(static::\$societyNameFormat));
    }
    /**
     * @example Mumbai
     */
    public function city()
    {
        return static::randomElement(static::\$city);
    }
    /**
     * @example Vaishali Nagar
     */
    public function locality()
    {
        return \$this->generator->parse(static::randomElement(static::\$localityFormats));
    }
    /*
     * @example Kharadi
     */
    public function localityName()
    {
        return \$this->generator->parse(static::randomElement(static::\$localityName));
    }
    /**
     * @example Nagar
     */
    public function areaSuffix()
    {
        return static::randomElement(static::\$areaSuffix);
    }

    /**
     * @example 'Delhi'
     */
    public static function state()
    {
        return static::randomElement(static::\$state);
    }

    /**
     * @example 'DL'
     */
    public static function stateAbbr()
    {
        return static::randomElement(static::\$stateAbbr);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_IN/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 125,  187 => 124,  178 => 120,  165 => 114,  159 => 111,  154 => 110,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_IN;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$city = array(
        'Agra','Ahmedabad','Ajmer','Alwar',
        'Bengaluru','Bhubhaneshwar','Bhopal','Bikaner',
        'Chennai','Chandigarh',
        'Darjeeling','Dehra Dun','Delhi',
        'Faridabad',
        'Gandhinagar','Guwahati','Gangtok','Gurgaon',
        'Hyderabad','Hisar',
        'Indore',
        'Jaipur','Jodhpur','Jammu','Jamnagar','Jabalpur',
        'Kolkata','Kanpur','Kota','Kochi',
        'Ludhiana','Lucknow',
        'Mumbai','Meerut','Mysore',
        'Nagpur','Nashik','Noida','New Delhi',
        'Pune','Patna','Panaji','Pilani','Pondicherry',
        'Ratlam','Raipur','Ranchi','Rajkot',
        'Surat','Simla','Srinagar',
        'Thiruvananthapuram','Trichy',
        'Udaipur',
        'Vishakhapattanam','Vadodara',
        'Warangal',
    );

    protected static \$state = array(
        
        // States
        'Andhra Pradesh', 'Arunachal Pradesh', 'Assam',
        'Bihar',
        'Chhattisgarh',
        'Goa', 'Gujarat',
        'Haryana', 'Himachal Pradesh',
        'Jammu and Kashmir',
        'Jharkhand',
        'Karnataka', 'Kerala',
        'Madhya Pradesh', 'Maharashtra', 'Manipur', 'Meghalaya', 'Mizoram',
        'Nagaland',
        'Odisha',
        'Punjab',
        'Rajasthan',
        'Sikkim',
        'Tamil Nadu', 'Telangana', 'Tripura',
        'Uttar Pradesh', 'Uttarakhand',
        'West Bengal',
        
        // Union Territories
        'Andaman and Nicobar Islands',
        'Chandigarh',
        'Dadra and Nagar Haveli', 'Daman and Diu', 'Delhi',
        'Lakshadweep',
        'Puducherry'
    );

    protected static \$stateAbbr = array(
       'AP', 'AR', 'AS', 'BR', 'CG', 'GA', 'GJ', 'HR', 'HP', 'JK', 'JH', 'KA', 'KL', 'MP', 'MH', 'MN', 'ML', 'MZ', 'NL', 'OD', 'PB', 'RJ', 'SK', 'TN', 'TS', 'TR', 'UP', 'UK', 'WB', 'AN', 'CH', 'DN', 'DD', 'DL', 'LD', 'PY'
    );

    protected static \$country = array(
        'Afghanistan', 'Albania', 'Algeria', 'American Samoa', 'Andorra', 'Angola', 'Anguilla', 'Antarctica (the territory South of 60 deg S)', 'Antigua and Barbuda', 'Argentina', 'Armenia', 'Aruba', 'Australia', 'Austria', 'Azerbaijan',
        'Bahamas', 'Bahrain', 'Bangladesh', 'Barbados', 'Belarus', 'Belgium', 'Belize', 'Benin', 'Bermuda', 'Bhutan', 'Bolivia', 'Bosnia and Herzegovina', 'Botswana', 'Bouvet Island (Bouvetoya)', 'Brazil', 'British Indian Ocean Territory (Chagos Archipelago)', 'British Virgin Islands', 'Brunei Darussalam', 'Bulgaria', 'Burkina Faso', 'Burundi',
        'Cambodia', 'Cameroon', 'Canada', 'Cape Verde', 'Cayman Islands', 'Central African Republic', 'Chad', 'Chile', 'China', 'Christmas Island', 'Cocos (Keeling) Islands', 'Colombia', 'Comoros', 'Congo', 'Congo', 'Cook Islands', 'Costa Rica', 'Cote d\\'Ivoire', 'Croatia', 'Cuba', 'Cyprus', 'Czech Republic',
        'Denmark', 'Djibouti', 'Dominica', 'Dominican Republic',
        'Ecuador', 'Egypt', 'El Salvador', 'Equatorial Guinea', 'Eritrea', 'Estonia', 'Ethiopia',
        'Faroe Islands', 'Falkland Islands (Malvinas)', 'Fiji', 'Finland', 'France', 'French Guiana', 'French Polynesia', 'French Southern Territories',
        'Gabon', 'Gambia', 'Georgia', 'Germany', 'Ghana', 'Gibraltar', 'Greece', 'Greenland', 'Grenada', 'Guadeloupe', 'Guam', 'Guatemala', 'Guernsey', 'Guinea', 'Guinea-Bissau', 'Guyana',
        'Haiti', 'Heard Island and McDonald Islands', 'Holy See (Vatican City State)', 'Honduras', 'Hong Kong', 'Hungary',
        'Iceland', 'India', 'Indonesia', 'Iran', 'Iraq', 'Ireland', 'Isle of Man', 'Israel', 'Italy',
        'Jamaica', 'Japan', 'Jersey', 'Jordan',
        'Kazakhstan', 'Kenya', 'Kiribati', 'Korea', 'Korea', 'Kuwait', 'Kyrgyz Republic',
        'Lao People\\'s Democratic Republic', 'Latvia', 'Lebanon', 'Lesotho', 'Liberia', 'Libyan Arab Jamahiriya', 'Liechtenstein', 'Lithuania', 'Luxembourg',
        'Macao', 'Macedonia', 'Madagascar', 'Malawi', 'Malaysia', 'Maldives', 'Mali', 'Malta', 'Marshall Islands', 'Martinique', 'Mauritania', 'Mauritius', 'Mayotte', 'Mexico', 'Micronesia', 'Moldova', 'Monaco', 'Mongolia', 'Montenegro', 'Montserrat', 'Morocco', 'Mozambique', 'Myanmar',
        'Namibia', 'Nauru', 'Nepal', 'Netherlands Antilles', 'Netherlands', 'New Caledonia', 'New Zealand', 'Nicaragua', 'Niger', 'Nigeria', 'Niue', 'Norfolk Island', 'Northern Mariana Islands', 'Norway',
        'Oman',
        'Pakistan', 'Palau', 'Palestinian Territories', 'Panama', 'Papua New Guinea', 'Paraguay', 'Peru', 'Philippines', 'Pitcairn Islands', 'Poland', 'Portugal', 'Puerto Rico',
        'Qatar',
        'Reunion', 'Romania', 'Russian Federation', 'Rwanda',
        'Saint Barthelemy', 'Saint Helena', 'Saint Kitts and Nevis', 'Saint Lucia', 'Saint Martin', 'Saint Pierre and Miquelon', 'Saint Vincent and the Grenadines', 'Samoa', 'San Marino', 'Sao Tome and Principe', 'Saudi Arabia', 'Senegal', 'Serbia', 'Seychelles', 'Sierra Leone', 'Singapore', 'Slovakia (Slovak Republic)', 'Slovenia', 'Solomon Islands', 'Somalia', 'South Africa', 'South Georgia and the South Sandwich Islands', 'Spain', 'Sri Lanka', 'Sudan', 'Suriname', 'Svalbard & Jan Mayen Islands', 'Swaziland', 'Sweden', 'Switzerland', 'Syrian Arab Republic',
        'Taiwan', 'Tajikistan', 'Tanzania', 'Thailand', 'Timor-Leste', 'Togo', 'Tokelau', 'Tonga', 'Trinidad and Tobago', 'Tunisia', 'Turkey', 'Turkmenistan', 'Turks and Caicos Islands', 'Tuvalu',
        'Uganda', 'Ukraine', 'United Arab Emirates', 'United Kingdom', 'United States of America', 'United States Minor Outlying Islands', 'United States Virgin Islands', 'Uruguay', 'Uzbekistan',
        'Vanuatu', 'Venezuela', 'Vietnam',
        'Wallis and Futuna', 'Western Sahara',
        'Yemen',
        'Zambia', 'Zimbabwe'
    );
    protected static \$localityName = array(
        'Aundh','Andheri',
        'Borivali','Bandra',
        'Chinchwad','Chandpole','Churchgate','Cyber City',
        'Dadar','Deccan Gymkhana',
        'Goregaon',
        'Hadapsar','Harmada','Hinjewadi',
        'Kormangala','Kharadi',
        'Marathahalli','Model Town','Mansarovar','Malad',
        'Sodala',
        'Virar','Vikhroli',
        'Yerwada','Yeshwanthpura',
    );
    protected static \$areaSuffix = array(
        ' Nagar','Pur','Garh','Gunj',' Chowk',
    );
    protected static \$postcode = array(
        '1#####','2#####','3#####','4#####','5#####',
    );
    protected static \$localityFormats = array(
        '{{firstName}}{{areaSuffix}}',
        '{{localityName}}'
    );
    protected static \$addressFormats = array(
        '{{streetAddress}} {{city}} - {{postcode}}',
    );
    protected static \$societySuffix = array(
        'Society','Apartments','Heights','Villas',
    );
    protected static \$societyNameFormat = array(
        '{{firstName}} {{societySuffix}}'
    );
    protected static \$streetAddressFormats = array(
        
        '{{buildingNumber}}, {{locality}},',
        '{{buildingNumber}}, {{societyName}}, {{locality}}',
    );
    public function societySuffix()
    {
        return static::randomElement(static::\$societySuffix);
    }
    /**
     * @example Shanti Apartments
     */
    public function societyName()
    {
        return \$this->generator->parse(static::randomElement(static::\$societyNameFormat));
    }
    /**
     * @example Mumbai
     */
    public function city()
    {
        return static::randomElement(static::\$city);
    }
    /**
     * @example Vaishali Nagar
     */
    public function locality()
    {
        return \$this->generator->parse(static::randomElement(static::\$localityFormats));
    }
    /*
     * @example Kharadi
     */
    public function localityName()
    {
        return \$this->generator->parse(static::randomElement(static::\$localityName));
    }
    /**
     * @example Nagar
     */
    public function areaSuffix()
    {
        return static::randomElement(static::\$areaSuffix);
    }

    /**
     * @example 'Delhi'
     */
    public static function state()
    {
        return static::randomElement(static::\$state);
    }

    /**
     * @example 'DL'
     */
    public static function stateAbbr()
    {
        return static::randomElement(static::\$stateAbbr);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_IN/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_IN/Address.php");
    }
}
