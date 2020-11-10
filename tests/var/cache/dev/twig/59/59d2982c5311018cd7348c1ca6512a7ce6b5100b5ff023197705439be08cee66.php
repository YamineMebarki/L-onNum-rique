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

/* vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Person.php */
class __TwigTemplate_bc78c68085fcb49c390ca1bba5e16cda2de59e5c968aea1cc1a866644613fe45 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\vi_VN;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["titleMale"]) || array_key_exists("titleMale", $context) ? $context["titleMale"] : (function () { throw new RuntimeError('Variable "titleMale" does not exist.', 9, $this->source); })()), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleNameMale"]) || array_key_exists("middleNameMale", $context) ? $context["middleNameMale"] : (function () { throw new RuntimeError('Variable "middleNameMale" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["titleMale"]) || array_key_exists("titleMale", $context) ? $context["titleMale"] : (function () { throw new RuntimeError('Variable "titleMale" does not exist.', 11, $this->source); })()), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleNameMale"]) || array_key_exists("middleNameMale", $context) ? $context["middleNameMale"] : (function () { throw new RuntimeError('Variable "middleNameMale" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$femaleNameFormats = array(
        '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["titleFemale"]) || array_key_exists("titleFemale", $context) ? $context["titleFemale"] : (function () { throw new RuntimeError('Variable "titleFemale" does not exist.', 16, $this->source); })()), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleNameFemale"]) || array_key_exists("middleNameFemale", $context) ? $context["middleNameFemale"] : (function () { throw new RuntimeError('Variable "middleNameFemale" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["titleFemale"]) || array_key_exists("titleFemale", $context) ? $context["titleFemale"] : (function () { throw new RuntimeError('Variable "titleFemale" does not exist.', 18, $this->source); })()), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["middleNameFemale"]) || array_key_exists("middleNameFemale", $context) ? $context["middleNameFemale"] : (function () { throw new RuntimeError('Variable "middleNameFemale" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$middleNameFormat = array(
      '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "',
      '";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * @link http://www.dattenhay.vn/1001-ten-cho-be-trai.htm
     */
    protected static \$firstNameMale = array(
        'An', 'Anh',
        'Bào', 'Bình', 'Bạch', 'Bảo', 'Bắc', 'Bằng', 'Bổng', 'Bửu',
        'Ca', 'Canh', 'Chiến', 'Chiểu', 'Châu', 'Chính', 'Chương', 'Chưởng', 'Chấn', 'Công', 'Cơ', 'Cương', 'Cường', 'Cảnh', 'Cần', 'Cẩn',
        'Danh', 'Di', 'Dinh', 'Diệp', 'Diệu', 'Du', 'Duy', 'Duệ', 'Dân', 'Dũng', 'Dương', 'Dụng',
        'Giang', 'Giác', 'Giáp',
        'Hiên', 'Hiếu', 'Hiền', 'Hiển', 'Hiệp', 'Hoa', 'Hoài', 'Hoàn', 'Hoàng', 'Hoán', 'Huy', 'Huynh', 'Huấn', 'Huỳnh', 'Hà', 'Hành', 'Hào', 'Hòa', 'Hùng', 'Hưng', 'Hạnh', 'Hải', 'Hảo', 'Hậu', 'Học', 'Hồng', 'Hội', 'Hợp', 'Hữu', 'Hỷ',
        'Kha', 'Khang', 'Khanh', 'Khiêm', 'Khiếu', 'Khoa', 'Khoát', 'Khánh', 'Khôi', 'Khương', 'Khải', 'Kim', 'Kiên', 'Kiếm', 'Kiện', 'Kiệt', 'Kính', 'Kỳ', 'Kỷ',
        'Lai', 'Lam', 'Linh', 'Liêm', 'Long', 'Luận', 'Luật', 'Lâm', 'Lân', 'Lý', 'Lĩnh', 'Lương', 'Lạc', 'Lập', 'Lễ', 'Lộ', 'Lộc', 'Lực',
        'Minh', 'Mạnh', 'Mẫn', 'Mỹ',
        'Nam', 'Nghiêm', 'Nghiệp', 'Nghĩa', 'Nghị', 'Nguyên', 'Ngân', 'Ngôn', 'Ngạn', 'Ngọc', 'Nhiên', 'Nhu', 'Nhuận', 'Nhân', 'Nhã', 'Nhượng', 'Nhạn', 'Nhật', 'Ninh',
        'Phi', 'Phong', 'Pháp', 'Phát', 'Phú', 'Phúc', 'Phương', 'Phước', 'Phụng',
        'Quang', 'Quyết', 'Quyền', 'Quân', 'Quý', 'Quảng', 'Quế', 'Quốc', 'Quỳnh',
        'Sang', 'Sinh', 'Siêu', 'Sáng', 'Sâm', 'Sĩ', 'Sơn', 'Sử', 'Sỹ',
        'Thanh', 'Thiên', 'Thiện', 'Thuận', 'Thành', 'Thái', 'Thông', 'Thúc', 'Thạc', 'Thạch', 'Thắng', 'Thể', 'Thịnh', 'Thọ', 'Thống', 'Thời', 'Thụy', 'Thủy', 'Thực', 'Tiến', 'Tiếp', 'Tiền', 'Tiển', 'Toàn', 'Toại', 'Toản', 'Trang', 'Triết', 'Triều', 'Triệu', 'Trung', 'Trác', 'Tráng', 'Trân', 'Trình', 'Trí', 'Trúc', 'Trường', 'Trưởng', 'Trạch', 'Trọng', 'Trụ', 'Trực', 'Tuyền', 'Tuấn', 'Tuệ', 'Tài', 'Tâm', 'Tân', 'Tín', 'Tùng', 'Tú', 'Tường', 'Tấn', 'Tụ', 'Từ',
        'Uy',
        'Vinh', 'Viên', 'Việt', 'Vu', 'Võ', 'Văn', 'Vĩ', 'Vĩnh', 'Vũ', 'Vương', 'Vượng', 'Vịnh', 'Vỹ',
        'Xuân',
        'Yên',
        'Án', 'Ân',
        'Đan', 'Điền', 'Điệp', 'Đoàn', 'Đình', 'Đôn', 'Đăng', 'Đại', 'Đạo', 'Đạt', 'Định', 'Đồng', 'Độ', 'Đức', 'Đức',
        'Ẩn',
    );

    /**
     * @link http://www.dattenhay.vn/1001-ten-cho-be-trai.htm
     */
    protected static \$middleNameMale = array(
        'An', 'Anh',
        'Bá', 'Bách', 'Bình', 'Bích', 'Bảo', 'Bằng', 'Bửu', 'Bữu',
        'Cao', 'Chiêu', 'Chiến', 'Chung', 'Chuẩn', 'Chánh', 'Chí', 'Chính', 'Chấn', 'Chế', 'Cát', 'Công', 'Cương', 'Cường', 'Cảnh',
        'Danh', 'Duy', 'Dân', 'Dũng', 'Dương',
        'Gia', 'Giang',
        'Hiếu', 'Hiền', 'Hiểu', 'Hiệp', 'Hoài', 'Hoàn', 'Hoàng', 'Huy', 'Huân', 'Hà', 'Hào', 'Hán', 'Hòa', 'Hùng', 'Hưng', 'Hướng', 'Hạnh', 'Hạo', 'Hải', 'Hồ', 'Hồng', 'Hữu',
        'Khai', 'Khang', 'Khoa', 'Khuyến', 'Khánh', 'Khôi', 'Khương', 'Khải', 'Khắc', 'Khởi', 'Kim', 'Kiên', 'Kiến', 'Kiệt', 'Kỳ',
        'Lam', 'Liên', 'Long', 'Lâm', 'Lương', 'Lạc', 'Lập',
        'Minh', 'Mạnh', 'Mộng',
        'Nam', 'Nghĩa', 'Nghị', 'Nguyên', 'Nguyễn', 'Ngọc', 'Nhân', 'Như', 'Nhất', 'Nhật', 'Niệm',
        'Phi', 'Phong', 'Phú', 'Phúc', 'Phương', 'Phước', 'Phượng', 'Phục', 'Phụng',
        'Quang', 'Quyết', 'Quân', 'Quý', 'Quảng', 'Quốc',
        'Song', 'Sĩ', 'Sơn', 'Sỹ',
        'Tài', 'Tạ',
        'Ân',
        'Đan', 'Đinh', 'Đoàn', 'Đình', 'Đông', 'Đăng', 'Đại', 'Đạt', 'Đắc', 'Định', 'Đồng', 'Đức', 'Đăng', 'Đức',
    );

    /**
     * @link http://www.dattenhay.vn/1001-ten-cho-be-gai.htm
     */
    protected static \$firstNameFemale = array(
        'An', 'Anh',
        'Bình', 'Bích', 'Băng', 'Bạch', 'Bảo',
        'Ca', 'Chi', 'Chinh', 'Chiêu', 'Chung', 'Châu', 'Cát', 'Cúc', 'Cương', 'Cầm',
        'Dao', 'Di', 'Diễm', 'Diệp', 'Diệu', 'Du', 'Dung', 'Duyên', 'Dân', 'Dương',
        'Giang', 'Giao',
        'Hiếu', 'Hiền', 'Hiệp', 'Hoa', 'Hoan', 'Hoài', 'Hoàn', 'Huyền', 'Huệ', 'Hà', 'Hân', 'Hòa', 'Hương', 'Hường', 'Hạ', 'Hạnh', 'Hải', 'Hảo', 'Hậu', 'Hằng', 'Hồng', 'Hợp',
        'Khai', 'Khanh', 'Khuyên', 'Khuê', 'Khánh', 'Khê', 'Khôi', 'Kim', 'Kiều',
        'Lam', 'Lan', 'Linh', 'Liên', 'Liễu', 'Loan', 'Ly', 'Lâm', 'Lý', 'Lễ', 'Lệ', 'Lộc', 'Lợi',
        'Mai', 'Mi', 'Minh', 'Miên', 'My', 'Mẫn', 'Mỹ',
        'Nga', 'Nghi', 'Nguyên', 'Nguyệt', 'Ngà', 'Ngân', 'Ngôn', 'Ngọc', 'Nhi', 'Nhiên', 'Nhung', 'Nhàn', 'Nhân', 'Nhã', 'Như', 'Nương', 'Nữ',
        'Oanh',
        'Phi',
        'Phong', 'Phúc', 'Phương', 'Phước', 'Phượng', 'Phụng',
        'Quyên', 'Quân', 'Quế', 'Quỳnh',
        'Sa', 'San', 'Sinh', 'Sương',
        'Thanh', 'Thảo', 'Thi', 'Thiên', 'Thiện', 'Thoa', 'Thoại', 'Thu', 'Thuần', 'Thuận', 'Thy', 'Thêu', 'Thùy', 'Thúy', 'Thơ', 'Thư', 'Thương', 'Thường', 'Thảo', 'Thắm', 'Thục', 'Thủy', 'Tiên', 'Trang', 'Trinh', 'Trung', 'Trà', 'Trâm', 'Trân', 'Trúc', 'Trầm', 'Tuyến', 'Tuyết', 'Tuyền', 'Tuệ', 'Ty', 'Tâm', 'Tú',
        'Uyên', 'Uyển',
        'Vi', 'Việt',
        'Vy', 'Vân', 'Vũ', 'Vọng', 'Vỹ',
        'Xuyến', 'Xuân',
        'Yên', 'Yến',
        'Ái', 'Ánh', 'Ân',
        'Đan', 'Điệp', 'Đoan', 'Đài', 'Đàn', 'Đào', 'Đình', 'Đường', 'Đan',
        'Ý',
    );

    /**
     * @link http://www.dattenhay.vn/1001-ten-cho-be-gai.htm
     */
    protected static \$middleNameFemale = array(
        'An', 'Anh',
        'Ban', 'Bích', 'Băng', 'Bạch', 'Bảo', 'Bội',
        'Cam', 'Chi', 'Chiêu', 'Cát', 'Cẩm',
        'Di', 'Diên', 'Diễm', 'Diệp', 'Diệu', 'Duy', 'Duyên', 'Dã', 'Dạ',
        'Gia', 'Giang', 'Giao', 'Giáng',
        'Hiếu', 'Hiền', 'Hiểu', 'Hoa', 'Hoài', 'Hoàn', 'Hoàng', 'Huyền', 'Huệ', 'Huỳnh', 'Hà', 'Hàm', 'Hương', 'Hạ', 'Hạc', 'Hạnh', 'Hải', 'Hảo', 'Hằng', 'Họa', 'Hồ', 'Hồng',
        'Khiết', 'Khuê', 'Khánh', 'Khúc', 'Khả', 'Khải', 'Kim', 'Kiết', 'Kiều', 'Kỳ',
        'Lam', 'Lan', 'Linh', 'Liên', 'Liễu', 'Loan', 'Ly', 'Lâm', 'Lê', 'Lưu', 'Lệ', 'Lộc', 'Lục',
        'Mai', 'Minh', 'Mậu', 'Mộc', 'Mộng', 'Mỹ',
        'Nghi', 'Nguyên', 'Nguyết', 'Nguyệt', 'Ngân', 'Ngọc', 'Nhan', 'Nhã', 'Như', 'Nhất', 'Nhật',
        'Oanh',
        'Phi', 'Phong', 'Phương', 'Phước', 'Phượng', 'Phụng',
        'Quế', 'Quỳnh',
        'Sao', 'Song', 'Sông', 'Sơn', 'Sương',
        'Thanh', 'Thi', 'Thiên', 'Thiếu', 'Thiều', 'Thiện', 'Thu', 'Thuần', 'Thy', 'Thái', 'Thùy', 'Thúy', 'Thơ', 'Thư', 'Thương', 'Thạch', 'Thảo', 'Thục', 'Thụy', 'Thủy', 'Tiên', 'Tiểu', 'Trang', 'Triều', 'Triệu', 'Trà', 'Trâm', 'Trân', 'Trúc', 'Trầm', 'Tuyết', 'Tuệ', 'Tâm', 'Tùng', 'Tùy', 'Tú', 'Túy', 'Tường', 'Tịnh', 'Tố', 'Từ',
        'Uyên', 'Uyển',
        'Vi', 'Việt', 'Vy', 'Vàng', 'Vành', 'Vân', 'Vũ',
        'Xuyến', 'Xuân',
        'Yên', 'Yến',
        'Ái', 'Ánh',
        'Đan', 'Đinh', 'Đoan', 'Đài', 'Đông', 'Đồng', 'Đan', 'Đoan',
        'Ý',
    );

    /**
     * @link http://vi.wikipedia.org/wiki/H%E1%BB%8D_ng%C6%B0%E1%BB%9Di_Vi%E1%BB%87t_Nam
     */
    protected static \$lastName = array(
        'An', 'Ánh',
        'Ân', 'Âu', 'Ấu',
        'Biện', 'Bàng', 'Bành', 'Bá', 'Bì', 'Bình', 'Bùi', 'Bạc', 'Bạch', 'Bảo', 'Bế', 'Bồ', 'Bửu',
        'Ca', 'Cam', 'Cao', 'Chiêm', 'Chu', 'Chung', 'Châu', 'Chương', 'Chế', 'Chử', 'Cung', 'Cái', 'Cát', 'Cù', 'Cấn', 'Cầm', 'Cổ', 'Cự',
        'Danh', 'Diêm', 'Diệp', 'Doãn', 'Dã', 'Dư', 'Dương',
        'Đan', 'Đàm', 'Đào', 'Đái', 'Đặng', 'Đậu', 'Đinh', 'Điền', 'Đoàn', 'Đôn', 'Đồng', 'Đổng', 'Đỗ', 'Đới', 'Đường',
        'Giang', 'Giao', 'Giáp', 'Giả',
        'Hoa', 'Hoàng', 'Huỳnh', 'Hy', 'Hà', 'Hàn', 'Hàng', 'Hán', 'Hình', 'Hùng', 'Hạ', 'Hồ', 'Hồng', 'Hứa',
        'Kha', 'Khoa', 'Khu', 'Khuất', 'Khâu', 'Khúc', 'Khưu', 'Khương', 'Khổng', 'Kim', 'Kiều',
        'La', 'Liễu', 'Lâm', 'Lã', 'Lê', 'Lò', 'Lô', 'Lý', 'Lư', 'Lưu', 'Lương', 'Lạc', 'Lại', 'Lều', 'Lỡ', 'Lục', 'Lữ', 'Lỳ',
        'Ma', 'Mai', 'Mang', 'Mâu', 'Mã', 'Mạc', 'Mạch', 'Mẫn', 'Mộc',
        'Nghiêm', 'Nghị', 'Nguyễn', 'Ngân', 'Ngô', 'Ngụy', 'Nhiệm', 'Nhâm', 'Nhậm', 'Nhữ', 'Ninh', 'Nông',
        'Ong',
        'Ông',
        'Phan', 'Phi', 'Phí', 'Phó', 'Phùng', 'Phương', 'Phạm',
        'Quách', 'Quản',
        'Sơn', 'Sử',
        'Thi', 'Thiều', 'Thào', 'Thái', 'Thân', 'Thôi', 'Thạch', 'Thập', 'Thịnh', 'Tiêu', 'Tiếp', 'Trang', 'Triệu', 'Trà', 'Trác', 'Trình', 'Trưng', 'Trương', 'Trần', 'Trịnh', 'Ty', 'Tào', 'Tòng', 'Tô', 'Tôn', 'Tông', 'Tăng', 'Tạ', 'Tống', 'Từ',
        'Ung', 'Uông',
        'Vi', 'Viên', 'Võ', 'Văn', 'Vũ', 'Vương', 'Vừ', 'Xa',
        'Yên',
    );

    protected static \$titleMale = array('Cụ', 'Ông', 'Bác', 'Chú', 'Anh', 'Em');

    protected static \$titleFemale = array('Cụ', 'Bà', 'Bác', 'Cô', 'Chị', 'Em');

    public function middleName(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            return static::middleNameMale();
        } elseif (\$gender === static::GENDER_FEMALE) {
            return static::middleNameFemale();
        }

        return \$this->generator->parse(static::randomElement(static::\$middleNameFormat));
    }

    public static function middleNameMale()
    {
        return static::randomElement(static::\$middleNameMale);
    }

    public static function middleNameFemale()
    {
        return static::randomElement(static::\$middleNameFemale);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 23,  122 => 22,  109 => 18,  101 => 17,  93 => 16,  87 => 15,  74 => 11,  66 => 10,  58 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\vi_VN;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '{{lastName}} {{firstNameMale}}',
        '{{titleMale}}. {{lastName}} {{firstNameMale}}',
        '{{lastName}} {{middleNameMale}} {{firstNameMale}}',
        '{{titleMale}}. {{lastName}} {{middleNameMale}} {{firstNameMale}}',
    );

    protected static \$femaleNameFormats = array(
        '{{lastName}} {{firstNameFemale}}',
        '{{titleFemale}}. {{lastName}} {{firstNameFemale}}',
        '{{lastName}} {{middleNameFemale}} {{firstNameFemale}}',
        '{{titleFemale}}. {{lastName}} {{middleNameFemale}} {{firstNameFemale}}',
    );

    protected static \$middleNameFormat = array(
      '{{firstNameMale}}',
      '{{firstNameFemale}}',
    );

    /**
     * @link http://www.dattenhay.vn/1001-ten-cho-be-trai.htm
     */
    protected static \$firstNameMale = array(
        'An', 'Anh',
        'Bào', 'Bình', 'Bạch', 'Bảo', 'Bắc', 'Bằng', 'Bổng', 'Bửu',
        'Ca', 'Canh', 'Chiến', 'Chiểu', 'Châu', 'Chính', 'Chương', 'Chưởng', 'Chấn', 'Công', 'Cơ', 'Cương', 'Cường', 'Cảnh', 'Cần', 'Cẩn',
        'Danh', 'Di', 'Dinh', 'Diệp', 'Diệu', 'Du', 'Duy', 'Duệ', 'Dân', 'Dũng', 'Dương', 'Dụng',
        'Giang', 'Giác', 'Giáp',
        'Hiên', 'Hiếu', 'Hiền', 'Hiển', 'Hiệp', 'Hoa', 'Hoài', 'Hoàn', 'Hoàng', 'Hoán', 'Huy', 'Huynh', 'Huấn', 'Huỳnh', 'Hà', 'Hành', 'Hào', 'Hòa', 'Hùng', 'Hưng', 'Hạnh', 'Hải', 'Hảo', 'Hậu', 'Học', 'Hồng', 'Hội', 'Hợp', 'Hữu', 'Hỷ',
        'Kha', 'Khang', 'Khanh', 'Khiêm', 'Khiếu', 'Khoa', 'Khoát', 'Khánh', 'Khôi', 'Khương', 'Khải', 'Kim', 'Kiên', 'Kiếm', 'Kiện', 'Kiệt', 'Kính', 'Kỳ', 'Kỷ',
        'Lai', 'Lam', 'Linh', 'Liêm', 'Long', 'Luận', 'Luật', 'Lâm', 'Lân', 'Lý', 'Lĩnh', 'Lương', 'Lạc', 'Lập', 'Lễ', 'Lộ', 'Lộc', 'Lực',
        'Minh', 'Mạnh', 'Mẫn', 'Mỹ',
        'Nam', 'Nghiêm', 'Nghiệp', 'Nghĩa', 'Nghị', 'Nguyên', 'Ngân', 'Ngôn', 'Ngạn', 'Ngọc', 'Nhiên', 'Nhu', 'Nhuận', 'Nhân', 'Nhã', 'Nhượng', 'Nhạn', 'Nhật', 'Ninh',
        'Phi', 'Phong', 'Pháp', 'Phát', 'Phú', 'Phúc', 'Phương', 'Phước', 'Phụng',
        'Quang', 'Quyết', 'Quyền', 'Quân', 'Quý', 'Quảng', 'Quế', 'Quốc', 'Quỳnh',
        'Sang', 'Sinh', 'Siêu', 'Sáng', 'Sâm', 'Sĩ', 'Sơn', 'Sử', 'Sỹ',
        'Thanh', 'Thiên', 'Thiện', 'Thuận', 'Thành', 'Thái', 'Thông', 'Thúc', 'Thạc', 'Thạch', 'Thắng', 'Thể', 'Thịnh', 'Thọ', 'Thống', 'Thời', 'Thụy', 'Thủy', 'Thực', 'Tiến', 'Tiếp', 'Tiền', 'Tiển', 'Toàn', 'Toại', 'Toản', 'Trang', 'Triết', 'Triều', 'Triệu', 'Trung', 'Trác', 'Tráng', 'Trân', 'Trình', 'Trí', 'Trúc', 'Trường', 'Trưởng', 'Trạch', 'Trọng', 'Trụ', 'Trực', 'Tuyền', 'Tuấn', 'Tuệ', 'Tài', 'Tâm', 'Tân', 'Tín', 'Tùng', 'Tú', 'Tường', 'Tấn', 'Tụ', 'Từ',
        'Uy',
        'Vinh', 'Viên', 'Việt', 'Vu', 'Võ', 'Văn', 'Vĩ', 'Vĩnh', 'Vũ', 'Vương', 'Vượng', 'Vịnh', 'Vỹ',
        'Xuân',
        'Yên',
        'Án', 'Ân',
        'Đan', 'Điền', 'Điệp', 'Đoàn', 'Đình', 'Đôn', 'Đăng', 'Đại', 'Đạo', 'Đạt', 'Định', 'Đồng', 'Độ', 'Đức', 'Đức',
        'Ẩn',
    );

    /**
     * @link http://www.dattenhay.vn/1001-ten-cho-be-trai.htm
     */
    protected static \$middleNameMale = array(
        'An', 'Anh',
        'Bá', 'Bách', 'Bình', 'Bích', 'Bảo', 'Bằng', 'Bửu', 'Bữu',
        'Cao', 'Chiêu', 'Chiến', 'Chung', 'Chuẩn', 'Chánh', 'Chí', 'Chính', 'Chấn', 'Chế', 'Cát', 'Công', 'Cương', 'Cường', 'Cảnh',
        'Danh', 'Duy', 'Dân', 'Dũng', 'Dương',
        'Gia', 'Giang',
        'Hiếu', 'Hiền', 'Hiểu', 'Hiệp', 'Hoài', 'Hoàn', 'Hoàng', 'Huy', 'Huân', 'Hà', 'Hào', 'Hán', 'Hòa', 'Hùng', 'Hưng', 'Hướng', 'Hạnh', 'Hạo', 'Hải', 'Hồ', 'Hồng', 'Hữu',
        'Khai', 'Khang', 'Khoa', 'Khuyến', 'Khánh', 'Khôi', 'Khương', 'Khải', 'Khắc', 'Khởi', 'Kim', 'Kiên', 'Kiến', 'Kiệt', 'Kỳ',
        'Lam', 'Liên', 'Long', 'Lâm', 'Lương', 'Lạc', 'Lập',
        'Minh', 'Mạnh', 'Mộng',
        'Nam', 'Nghĩa', 'Nghị', 'Nguyên', 'Nguyễn', 'Ngọc', 'Nhân', 'Như', 'Nhất', 'Nhật', 'Niệm',
        'Phi', 'Phong', 'Phú', 'Phúc', 'Phương', 'Phước', 'Phượng', 'Phục', 'Phụng',
        'Quang', 'Quyết', 'Quân', 'Quý', 'Quảng', 'Quốc',
        'Song', 'Sĩ', 'Sơn', 'Sỹ',
        'Tài', 'Tạ',
        'Ân',
        'Đan', 'Đinh', 'Đoàn', 'Đình', 'Đông', 'Đăng', 'Đại', 'Đạt', 'Đắc', 'Định', 'Đồng', 'Đức', 'Đăng', 'Đức',
    );

    /**
     * @link http://www.dattenhay.vn/1001-ten-cho-be-gai.htm
     */
    protected static \$firstNameFemale = array(
        'An', 'Anh',
        'Bình', 'Bích', 'Băng', 'Bạch', 'Bảo',
        'Ca', 'Chi', 'Chinh', 'Chiêu', 'Chung', 'Châu', 'Cát', 'Cúc', 'Cương', 'Cầm',
        'Dao', 'Di', 'Diễm', 'Diệp', 'Diệu', 'Du', 'Dung', 'Duyên', 'Dân', 'Dương',
        'Giang', 'Giao',
        'Hiếu', 'Hiền', 'Hiệp', 'Hoa', 'Hoan', 'Hoài', 'Hoàn', 'Huyền', 'Huệ', 'Hà', 'Hân', 'Hòa', 'Hương', 'Hường', 'Hạ', 'Hạnh', 'Hải', 'Hảo', 'Hậu', 'Hằng', 'Hồng', 'Hợp',
        'Khai', 'Khanh', 'Khuyên', 'Khuê', 'Khánh', 'Khê', 'Khôi', 'Kim', 'Kiều',
        'Lam', 'Lan', 'Linh', 'Liên', 'Liễu', 'Loan', 'Ly', 'Lâm', 'Lý', 'Lễ', 'Lệ', 'Lộc', 'Lợi',
        'Mai', 'Mi', 'Minh', 'Miên', 'My', 'Mẫn', 'Mỹ',
        'Nga', 'Nghi', 'Nguyên', 'Nguyệt', 'Ngà', 'Ngân', 'Ngôn', 'Ngọc', 'Nhi', 'Nhiên', 'Nhung', 'Nhàn', 'Nhân', 'Nhã', 'Như', 'Nương', 'Nữ',
        'Oanh',
        'Phi',
        'Phong', 'Phúc', 'Phương', 'Phước', 'Phượng', 'Phụng',
        'Quyên', 'Quân', 'Quế', 'Quỳnh',
        'Sa', 'San', 'Sinh', 'Sương',
        'Thanh', 'Thảo', 'Thi', 'Thiên', 'Thiện', 'Thoa', 'Thoại', 'Thu', 'Thuần', 'Thuận', 'Thy', 'Thêu', 'Thùy', 'Thúy', 'Thơ', 'Thư', 'Thương', 'Thường', 'Thảo', 'Thắm', 'Thục', 'Thủy', 'Tiên', 'Trang', 'Trinh', 'Trung', 'Trà', 'Trâm', 'Trân', 'Trúc', 'Trầm', 'Tuyến', 'Tuyết', 'Tuyền', 'Tuệ', 'Ty', 'Tâm', 'Tú',
        'Uyên', 'Uyển',
        'Vi', 'Việt',
        'Vy', 'Vân', 'Vũ', 'Vọng', 'Vỹ',
        'Xuyến', 'Xuân',
        'Yên', 'Yến',
        'Ái', 'Ánh', 'Ân',
        'Đan', 'Điệp', 'Đoan', 'Đài', 'Đàn', 'Đào', 'Đình', 'Đường', 'Đan',
        'Ý',
    );

    /**
     * @link http://www.dattenhay.vn/1001-ten-cho-be-gai.htm
     */
    protected static \$middleNameFemale = array(
        'An', 'Anh',
        'Ban', 'Bích', 'Băng', 'Bạch', 'Bảo', 'Bội',
        'Cam', 'Chi', 'Chiêu', 'Cát', 'Cẩm',
        'Di', 'Diên', 'Diễm', 'Diệp', 'Diệu', 'Duy', 'Duyên', 'Dã', 'Dạ',
        'Gia', 'Giang', 'Giao', 'Giáng',
        'Hiếu', 'Hiền', 'Hiểu', 'Hoa', 'Hoài', 'Hoàn', 'Hoàng', 'Huyền', 'Huệ', 'Huỳnh', 'Hà', 'Hàm', 'Hương', 'Hạ', 'Hạc', 'Hạnh', 'Hải', 'Hảo', 'Hằng', 'Họa', 'Hồ', 'Hồng',
        'Khiết', 'Khuê', 'Khánh', 'Khúc', 'Khả', 'Khải', 'Kim', 'Kiết', 'Kiều', 'Kỳ',
        'Lam', 'Lan', 'Linh', 'Liên', 'Liễu', 'Loan', 'Ly', 'Lâm', 'Lê', 'Lưu', 'Lệ', 'Lộc', 'Lục',
        'Mai', 'Minh', 'Mậu', 'Mộc', 'Mộng', 'Mỹ',
        'Nghi', 'Nguyên', 'Nguyết', 'Nguyệt', 'Ngân', 'Ngọc', 'Nhan', 'Nhã', 'Như', 'Nhất', 'Nhật',
        'Oanh',
        'Phi', 'Phong', 'Phương', 'Phước', 'Phượng', 'Phụng',
        'Quế', 'Quỳnh',
        'Sao', 'Song', 'Sông', 'Sơn', 'Sương',
        'Thanh', 'Thi', 'Thiên', 'Thiếu', 'Thiều', 'Thiện', 'Thu', 'Thuần', 'Thy', 'Thái', 'Thùy', 'Thúy', 'Thơ', 'Thư', 'Thương', 'Thạch', 'Thảo', 'Thục', 'Thụy', 'Thủy', 'Tiên', 'Tiểu', 'Trang', 'Triều', 'Triệu', 'Trà', 'Trâm', 'Trân', 'Trúc', 'Trầm', 'Tuyết', 'Tuệ', 'Tâm', 'Tùng', 'Tùy', 'Tú', 'Túy', 'Tường', 'Tịnh', 'Tố', 'Từ',
        'Uyên', 'Uyển',
        'Vi', 'Việt', 'Vy', 'Vàng', 'Vành', 'Vân', 'Vũ',
        'Xuyến', 'Xuân',
        'Yên', 'Yến',
        'Ái', 'Ánh',
        'Đan', 'Đinh', 'Đoan', 'Đài', 'Đông', 'Đồng', 'Đan', 'Đoan',
        'Ý',
    );

    /**
     * @link http://vi.wikipedia.org/wiki/H%E1%BB%8D_ng%C6%B0%E1%BB%9Di_Vi%E1%BB%87t_Nam
     */
    protected static \$lastName = array(
        'An', 'Ánh',
        'Ân', 'Âu', 'Ấu',
        'Biện', 'Bàng', 'Bành', 'Bá', 'Bì', 'Bình', 'Bùi', 'Bạc', 'Bạch', 'Bảo', 'Bế', 'Bồ', 'Bửu',
        'Ca', 'Cam', 'Cao', 'Chiêm', 'Chu', 'Chung', 'Châu', 'Chương', 'Chế', 'Chử', 'Cung', 'Cái', 'Cát', 'Cù', 'Cấn', 'Cầm', 'Cổ', 'Cự',
        'Danh', 'Diêm', 'Diệp', 'Doãn', 'Dã', 'Dư', 'Dương',
        'Đan', 'Đàm', 'Đào', 'Đái', 'Đặng', 'Đậu', 'Đinh', 'Điền', 'Đoàn', 'Đôn', 'Đồng', 'Đổng', 'Đỗ', 'Đới', 'Đường',
        'Giang', 'Giao', 'Giáp', 'Giả',
        'Hoa', 'Hoàng', 'Huỳnh', 'Hy', 'Hà', 'Hàn', 'Hàng', 'Hán', 'Hình', 'Hùng', 'Hạ', 'Hồ', 'Hồng', 'Hứa',
        'Kha', 'Khoa', 'Khu', 'Khuất', 'Khâu', 'Khúc', 'Khưu', 'Khương', 'Khổng', 'Kim', 'Kiều',
        'La', 'Liễu', 'Lâm', 'Lã', 'Lê', 'Lò', 'Lô', 'Lý', 'Lư', 'Lưu', 'Lương', 'Lạc', 'Lại', 'Lều', 'Lỡ', 'Lục', 'Lữ', 'Lỳ',
        'Ma', 'Mai', 'Mang', 'Mâu', 'Mã', 'Mạc', 'Mạch', 'Mẫn', 'Mộc',
        'Nghiêm', 'Nghị', 'Nguyễn', 'Ngân', 'Ngô', 'Ngụy', 'Nhiệm', 'Nhâm', 'Nhậm', 'Nhữ', 'Ninh', 'Nông',
        'Ong',
        'Ông',
        'Phan', 'Phi', 'Phí', 'Phó', 'Phùng', 'Phương', 'Phạm',
        'Quách', 'Quản',
        'Sơn', 'Sử',
        'Thi', 'Thiều', 'Thào', 'Thái', 'Thân', 'Thôi', 'Thạch', 'Thập', 'Thịnh', 'Tiêu', 'Tiếp', 'Trang', 'Triệu', 'Trà', 'Trác', 'Trình', 'Trưng', 'Trương', 'Trần', 'Trịnh', 'Ty', 'Tào', 'Tòng', 'Tô', 'Tôn', 'Tông', 'Tăng', 'Tạ', 'Tống', 'Từ',
        'Ung', 'Uông',
        'Vi', 'Viên', 'Võ', 'Văn', 'Vũ', 'Vương', 'Vừ', 'Xa',
        'Yên',
    );

    protected static \$titleMale = array('Cụ', 'Ông', 'Bác', 'Chú', 'Anh', 'Em');

    protected static \$titleFemale = array('Cụ', 'Bà', 'Bác', 'Cô', 'Chị', 'Em');

    public function middleName(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            return static::middleNameMale();
        } elseif (\$gender === static::GENDER_FEMALE) {
            return static::middleNameFemale();
        }

        return \$this->generator->parse(static::randomElement(static::\$middleNameFormat));
    }

    public static function middleNameMale()
    {
        return static::randomElement(static::\$middleNameMale);
    }

    public static function middleNameFemale()
    {
        return static::randomElement(static::\$middleNameFemale);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/vi_VN/Person.php");
    }
}
