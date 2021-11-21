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

/* encoding/kanji_encoding_form.twig */
class __TwigTemplate_f37485ccac90cef39c9a13d6bea4786715a92591b5bb583ef4b68ade9f484a70 extends \Twig\Template
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
        // line 1
        echo "<ul>
    <li>
        <input type=\"radio\" name=\"knjenc\" value=\"\" checked=\"checked\" id=\"kj-none\">
        <label for=\"kj-none\">
            ";
        // line 6
        echo "            ";
        echo _pgettext(        "None encoding conversion", "None");
        // line 7
        echo "        </label>
        <input type=\"radio\" name=\"knjenc\" value=\"EUC-JP\" id=\"kj-euc\">
        <label for=\"kj-euc\">EUC</label>
        <input type=\"radio\" name=\"knjenc\" value=\"SJIS\" id=\"kj-sjis\">
        <label for=\"kj-sjis\">SJIS</label>
    </li>
    <li>
        <input type=\"checkbox\" name=\"xkana\" value=\"kana\" id=\"kj-kana\">
        <label for=\"kj-kana\">
            ";
        // line 17
        echo "            ";
        echo _gettext("Convert to Kana");
        // line 18
        echo "        </label>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "encoding/kanji_encoding_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  57 => 17,  46 => 7,  43 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "encoding/kanji_encoding_form.twig", "/var/www/html/public/phpmyadmin/templates/encoding/kanji_encoding_form.twig");
    }
}
