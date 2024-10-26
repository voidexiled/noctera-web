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

/* account.create.html.twig */
class __TwigTemplate_b68af5f282bcfdfb30117142d42f68f2 extends \Twig\Template
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
        echo twig_escape_filter($this->env, $this->env->getFunction('hook')->getCallable()($context, "HOOK_ACCOUNT_CREATE_BEFORE_FORM"), "html", null, true);
        echo "
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getFunction('getLink')->getCallable()("account/create"), "html", null, true);
        echo "\" method=\"post\" id=\"createaccount\">
\t<div class=\"TableContainer\" >
\t\t<table class=\"Table5\" cellpadding=\"0\" cellspacing=\"0\" >
\t\t\t<div class=\"CaptionContainer\" >
\t\t\t\t<div class=\"CaptionInnerContainer\" >
\t\t\t\t\t<span class=\"CaptionEdgeLeftTop\" style=\"background-image:url(";
        // line 7
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionEdgeRightTop\" style=\"background-image:url(";
        // line 8
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionBorderTop\" style=\"background-image:url(";
        // line 9
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>
\t\t\t\t\t<span class=\"CaptionVerticalLeft\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t\t<div class=\"Text\" >Create ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "lua", [], "any", false, false, false, 11), "serverName", [], "any", false, false, false, 11), "html", null, true);
        echo " Account</div>
\t\t\t\t\t<span class=\"CaptionVerticalRight\" style=\"background-image:url(";
        // line 12
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-vertical.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionBorderBottom\" style=\"background-image:url(";
        // line 13
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/table-headline-border.gif);\" ></span>
\t\t\t\t\t<span class=\"CaptionEdgeLeftBottom\" style=\"background-image:url(";
        // line 14
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t\t<span class=\"CaptionEdgeRightBottom\" style=\"background-image:url(";
        // line 15
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/content/box-frame-edge.gif);\" /></span>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<div class=\"InnerTableContainer\" >
\t\t\t\t\t\t<table style=\"width:100%;\" >
\t\t\t\t\t\t\t";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getFunction('hook')->getCallable()($context, "HOOK_ACCOUNT_CREATE_BEFORE_BOXES"), "html", null, true);
        echo "
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\"> <div class=\"TableShadowRightTop\" style=\"background-image:url(";
        // line 25
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-rt.gif);\"></div></div>
\t\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
        // line 26
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-rm.gif);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getFunction('hook')->getCallable()($context, "HOOK_ACCOUNT_CREATE_BEFORE_ACCOUNT"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "account_login_by_email", [], "any", false, false, false, 33)) {
            // line 34
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
            // line 36
            if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "account", [], "any", true, true, false, 36)) {
                echo " class=\"red\"";
            }
            echo ">Account ";
            if (twig_constant("USE_ACCOUNT_NAME")) {
                echo "Name";
            } else {
                echo "Number";
            }
            echo ":</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"account\" id=\"account_input\" size=\"30\" maxlength=\"";
            // line 39
            if (twig_constant("USE_ACCOUNT_NAME")) {
                echo "30";
            } else {
                echo "10";
            }
            echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"account_indicator\" src=\"images/global/general/";
            // line 40
            if (( !($context["save"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "account", [], "any", true, true, false, 40))) {
                echo "n";
            }
            echo "ok.gif\" style=\"display: none;\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 41
            if (twig_constant("USE_ACCOUNT_NAME")) {
                // line 42
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"SuggestAccountNumber\">[<a href=\"#\">suggest number</a>]</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 44
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 47
        echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr><td></td><td><span id=\"account_error\" class=\"FormFieldError\">";
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "account", [], "any", true, true, false, 47)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "account", [], "any", false, false, false, 47), "html", null, true);
        }
        echo "</span></td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getFunction('hook')->getCallable()($context, "HOOK_ACCOUNT_CREATE_AFTER_ACCOUNT"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
        // line 51
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", true, true, false, 51)) {
            echo " class=\"red\"";
        }
        echo ">Email Address:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"email\" id=\"email\" size=\"30\" maxlength=\"50\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"email_indicator\" src=\"images/global/general/";
        // line 55
        if (( !($context["save"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", true, true, false, 55))) {
            echo "n";
        }
        echo "ok.gif\" style=\"display: none;\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td><td><span id=\"email_error\" class=\"FormFieldError\">";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", true, true, false, 59)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "email", [], "any", false, false, false, 59), "html", null, true);
        }
        echo "</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 62
        if ((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "mail_enabled", [], "any", false, false, false, 62) && twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "account_mail_verify", [], "any", false, false, false, 62))) {
            // line 63
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr><td></td><td><span><strong>Please use real address!<br/>We will send a link to validate your Email.</strong></span></td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 65
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getFunction('hook')->getCallable()($context, "HOOK_ACCOUNT_CREATE_AFTER_EMAIL"), "html", null, true);
        echo "

                                                ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "account_country", [], "any", false, false, false, 68)) {
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
            // line 71
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "country", [], "any", false, true, false, 71), 0, [], "array", true, true, false, 71)) {
                echo " class=\"red\"";
            }
            echo ">Country:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select name=\"country\" id=\"account_country\">
                                                                ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["country_"]) {
                // line 76
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\"";
                if (((array_key_exists("country", $context) && (($context["country"] ?? null) == $context["code"])) || ((null === ($context["country"] ?? null)) && (($context["country_recognized"] ?? null) == $context["code"])))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["country_"], "html", null, true);
                echo "</option>
                                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['country_'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"\" id=\"account_country_img\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                                    ";
            // line 82
            if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "country", [], "any", true, true, false, 82)) {
                // line 83
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr><td></td><td><span class=\"FormFieldError\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "country", [], "any", false, false, false, 83), "html", null, true);
                echo "</span></td></tr>
                                                    ";
            }
            // line 85
            echo "                                                ";
        }
        // line 86
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getFunction('hook')->getCallable()($context, "HOOK_ACCOUNT_CREATE_AFTER_COUNTRY"), "html", null, true);
        echo "

\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
        // line 91
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", true, true, false, 91)) {
            echo " class=\"red\"";
        }
        echo ">Password:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"password\" value=\"\" size=\"30\" maxlength=\"29\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"password_indicator\" src=\"images/global/general/";
        // line 95
        if (( !($context["save"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", true, true, false, 95))) {
            echo "n";
        }
        echo "ok.gif\" style=\"display: none;\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr><td></td><td><span id=\"password_error\" class=\"FormFieldError\">";
        // line 98
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", true, true, false, 98)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 98), "html", null, true);
        }
        echo "</span></td></tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
        // line 101
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", true, true, false, 101)) {
            echo " class=\"red\"";
        }
        echo ">Repeat password:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password2\" id=\"password2\" value=\"\" size=\"30\" maxlength=\"29\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"password2_indicator\" src=\"images/global/general/";
        // line 105
        if (( !($context["save"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", true, true, false, 105))) {
            echo "n";
        }
        echo "ok.gif\" style=\"display: none;\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr><td></td><td><span id=\"password2_error\" class=\"FormFieldError\">";
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", true, true, false, 108)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "password", [], "any", false, false, false, 108), "html", null, true);
        }
        echo "</span></td></tr>

\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getFunction('hook')->getCallable()($context, "HOOK_ACCOUNT_CREATE_AFTER_PASSWORDS"), "html", null, true);
        echo "

                                                ";
        // line 112
        if (twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "recaptcha_enabled", [], "any", false, false, false, 112)) {
            // line 113
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
            // line 115
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "verification", [], "any", false, true, false, 115), 0, [], "array", true, true, false, 115)) {
                echo " class=\"red\"";
            }
            echo ">Verification:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "recaptcha_site_key", [], "any", false, false, false, 118), "html", null, true);
            echo "\" data-theme=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "recaptcha_theme", [], "any", false, false, false, 118), "html", null, true);
            echo "\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                                    ";
            // line 121
            if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "verification", [], "any", true, true, false, 121)) {
                // line 122
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr><td></td><td><span class=\"FormFieldError\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "verification", [], "any", false, false, false, 122), "html", null, true);
                echo "</span></td></tr>
                                                    ";
            }
            // line 124
            echo "                                                ";
        }
        // line 125
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getFunction('hook')->getCallable()($context, "HOOK_ACCOUNT_CREATE_AFTER_RECAPTCHA"), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(";
        // line 132
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-bm.gif);\"> <div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-bl.gif);\"></div> <div class=\"TableBottomRightShadow\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-br.gif);\"></div> </div></div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getFunction('hook')->getCallable()($context, "HOOK_ACCOUNT_CREATE_BETWEEN_BOXES_1"), "html", null, true);
        echo "

\t\t\t\t\t\t\t";
        // line 138
        if ((( !twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "mail_enabled", [], "any", false, false, false, 138) ||  !twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "account_mail_verify", [], "any", false, false, false, 138)) && twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "account_create_character_create", [], "any", false, false, false, 138))) {
            // line 139
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(";
            // line 142
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-shadow-rt.gif);\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
            // line 144
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-shadow-rm.gif);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 149
            echo twig_escape_filter($this->env, $this->env->getFunction('hook')->getCallable()($context, "HOOK_ACCOUNT_CREATE_BEFORE_CHARACTER_NAME"), "html", null, true);
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
            // line 153
            if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", true, true, false, 153)) {
                echo " class=\"red\"";
            }
            echo ">Character Name:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input id=\"character_name\" name=\"name\" size=\"";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "character_name_max_length", [], "any", false, false, false, 156), "html", null, true);
            echo "\" maxlength=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "character_name_max_length", [], "any", false, false, false, 156), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img id=\"character_indicator\" src=\"images/global/general/";
            // line 157
            if (( !($context["save"] ?? null) || twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", true, true, false, 157))) {
                echo "n";
            }
            echo "ok.gif\" style=\"display: none;\" />\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"character_error\" class=\"FormFieldError\">";
            // line 163
            if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", true, true, false, 163)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "name", [], "any", false, false, false, 163), "html", null, true);
            }
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 167
            echo twig_escape_filter($this->env, $this->env->getFunction('hook')->getCallable()($context, "HOOK_ACCOUNT_CREATE_AFTER_CHARACTER_NAME"), "html", null, true);
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
            // line 171
            if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "sex", [], "any", true, true, false, 171)) {
                echo " class=\"red\"";
            }
            echo ">Sex:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
                                                                    ";
            // line 178
            $context["i"] = 0;
            // line 179
            echo "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "genders", [], "any", false, false, false, 179), true));
            foreach ($context['_seq'] as $context["id"] => $context["gender"]) {
                // line 180
                echo "                                                                        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 181
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-right:15px;\" class=\"OptionContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"sex\" id=\"sex";
                // line 182
                echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "\"";
                if (( !(null === ($context["sex"] ?? null)) && (($context["sex"] ?? null) == $context["id"]))) {
                    echo " checked=\"checked\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"sex";
                // line 183
                echo twig_escape_filter($this->env, ($context["i"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["gender"]), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['gender'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 186
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"sex_error\" class=\"FormFieldError\">";
            // line 197
            if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "sex", [], "any", true, true, false, 197)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "sex", [], "any", false, false, false, 197), "html", null, true);
            }
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 201
            echo twig_escape_filter($this->env, $this->env->getFunction('hook')->getCallable()($context, "HOOK_ACCOUNT_CREATE_AFTER_SEX"), "html", null, true);
            echo "

                                                ";
            // line 203
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "character_samples", [], "any", false, false, false, 203)) > 1)) {
                // line 204
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
                // line 206
                if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "vocation", [], "any", true, true, false, 206)) {
                    echo " class=\"red\"";
                }
                echo ">Vocation:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
                                                           \t\t";
                // line 213
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "character_samples", [], "any", false, false, false, 213));
                foreach ($context['_seq'] as $context["key"] => $context["sample_char"]) {
                    // line 214
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-right:15px;\" class=\"OptionContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"vocation\" id=\"vocation";
                    // line 215
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"
                                                                                ";
                    // line 216
                    if (( !(null === ($context["vocation"] ?? null)) && (($context["vocation"] ?? null) == $context["key"]))) {
                        echo " checked=\"checked\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"vocation";
                    // line 217
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($__internal_compile_0 = (($__internal_compile_1 = ($context["config"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["vocations"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["key"]] ?? null) : null), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                            \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['sample_char'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 220
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span id=\"vocation_error\" class=\"FormFieldError\">";
                // line 229
                if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "vocation", [], "any", true, true, false, 229)) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "vocation", [], "any", false, false, false, 229), "html", null, true);
                }
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 233
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 234
            echo twig_escape_filter($this->env, $this->env->getFunction('hook')->getCallable()($context, "HOOK_ACCOUNT_CREATE_AFTER_VOCATION"), "html", null, true);
            echo "

                                                ";
            // line 236
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "character_towns", [], "any", false, false, false, 236)) > 1)) {
                // line 237
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"LabelV\" style=\"width: 150px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span";
                // line 239
                if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "town", [], "any", true, true, false, 239)) {
                    echo " class=\"red\"";
                }
                echo ">Select your town:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table width=\"100%\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 246
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "character_towns", [], "any", false, false, false, 246));
                foreach ($context['_seq'] as $context["_key"] => $context["town_id"]) {
                    // line 247
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span style=\"margin-right:15px;\" class=\"OptionContainer\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"town\" id=\"town";
                    // line 248
                    echo twig_escape_filter($this->env, $context["town_id"], "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["town_id"], "html", null, true);
                    echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 249
                    if (( !(null === ($context["town"] ?? null)) && (($context["town"] ?? null) == $context["town_id"]))) {
                        echo " checked=\"checked\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label for=\"town";
                    // line 250
                    echo twig_escape_filter($this->env, $context["town_id"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "towns", [], "any", false, false, false, 250)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["town_id"]] ?? null) : null), "html", null, true);
                    echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['town_id'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 253
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                                ";
            }
            // line 260
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 261
            echo twig_escape_filter($this->env, $this->env->getFunction('hook')->getCallable()($context, "HOOK_ACCOUNT_CREATE_AFTER_TOWNS"), "html", null, true);
            echo "

\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(";
            // line 268
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-shadow-bm.gif);\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
            // line 269
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-shadow-bl.gif);\"></div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomRightShadow\" style=\"background-image:url(";
            // line 270
            echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
            echo "/images/global/content/table-shadow-br.gif);\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
        }
        // line 276
        echo "
\t\t\t\t\t\t\t";
        // line 277
        echo twig_escape_filter($this->env, $this->env->getFunction('hook')->getCallable()($context, "HOOK_ACCOUNT_CREATE_BETWEEN_BOXES_2"), "html", null, true);
        echo "

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainerRightTop\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableShadowRightTop\" style=\"background-image:url(";
        // line 282
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-rt.gif);\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"TableContentAndRightShadow\" style=\"background-image:url(";
        // line 284
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-rm.gif);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableContentContainer\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"TableContent\" width=\"100%\" style=\"border:1px solid #faf0d7;\">
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\" ><b>Please select the following check box:</b></td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span><input type=\"checkbox\" id=\"accept_rules\" name=\"accept_rules\" value=\"true\"";
        // line 293
        if (($context["accept_rules"] ?? null)) {
            echo "checked";
        }
        echo "/> <label for=\"accept_rules\">I agree to the <a href=\"?subtopic=rules\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "lua", [], "any", false, false, false, 293), "serverName", [], "any", false, false, false, 293), "html", null, true);
        echo " Rules</a>.</label></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                                ";
        // line 296
        if (twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "accept_rules", [], "any", true, true, false, 296)) {
            // line 297
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"FormFieldError\">";
            // line 299
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["errors"] ?? null), "accept_rules", [], "any", false, false, false, 299), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
                                                ";
        }
        // line 303
        echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"TableShadowContainer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"TableBottomShadow\" style=\"background-image:url(";
        // line 308
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-bm.gif);\"> <div class=\"TableBottomLeftShadow\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-bl.gif);\"></div> <div class=\"TableBottomRightShadow\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, ($context["template_path"] ?? null), "html", null, true);
        echo "/images/global/content/table-shadow-br.gif);\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getFunction('hook')->getCallable()($context, "HOOK_ACCOUNT_CREATE_AFTER_BOXES"), "html", null, true);
        echo "

\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</table>
\t</div>
\t<br/>
\t";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getFunction('hook')->getCallable()($context, "HOOK_ACCOUNT_CREATE_BEFORE_SUBMIT_BUTTON"), "html", null, true);
        echo "
\t<table width=\"100%\">
\t\t<tr align=\"center\">
\t\t\t<td>
\t\t\t\t<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"border:0px;\" >
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"save\" value=\"1\" >
\t\t\t\t\t\t\t";
        // line 331
        echo twig_include($this->env, $context, "buttons.submit.html.twig");
        echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</td>
\t\t</tr>
\t</table>
</form>
";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getFunction('hook')->getCallable()($context, "HOOK_ACCOUNT_CREATE_AFTER_FORM"), "html", null, true);
        echo "
<script type=\"text/javascript\" src=\"tools/check_name.js\"></script>
<style>
\t#SuggestAccountNumber {
\t\tfont-size: 7pt;
\t}
\t#SuggestCharacterName {
\t\tfont-size: 7pt;
\t}
</style>";
    }

    public function getTemplateName()
    {
        return "account.create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  802 => 339,  791 => 331,  780 => 323,  768 => 314,  755 => 308,  748 => 303,  741 => 299,  737 => 297,  735 => 296,  725 => 293,  713 => 284,  708 => 282,  700 => 277,  697 => 276,  688 => 270,  684 => 269,  680 => 268,  670 => 261,  667 => 260,  658 => 253,  647 => 250,  641 => 249,  635 => 248,  632 => 247,  628 => 246,  616 => 239,  612 => 237,  610 => 236,  605 => 234,  602 => 233,  593 => 229,  582 => 220,  571 => 217,  565 => 216,  559 => 215,  556 => 214,  552 => 213,  540 => 206,  536 => 204,  534 => 203,  529 => 201,  520 => 197,  507 => 186,  496 => 183,  486 => 182,  483 => 181,  480 => 180,  475 => 179,  473 => 178,  461 => 171,  454 => 167,  445 => 163,  434 => 157,  426 => 156,  418 => 153,  411 => 149,  403 => 144,  398 => 142,  393 => 139,  391 => 138,  386 => 136,  375 => 132,  366 => 126,  363 => 125,  360 => 124,  354 => 122,  352 => 121,  344 => 118,  336 => 115,  332 => 113,  330 => 112,  325 => 110,  318 => 108,  310 => 105,  301 => 101,  293 => 98,  285 => 95,  276 => 91,  269 => 87,  266 => 86,  263 => 85,  257 => 83,  255 => 82,  249 => 78,  234 => 76,  230 => 75,  221 => 71,  217 => 69,  215 => 68,  210 => 66,  207 => 65,  203 => 63,  201 => 62,  193 => 59,  184 => 55,  180 => 54,  172 => 51,  166 => 48,  159 => 47,  154 => 44,  150 => 42,  148 => 41,  142 => 40,  134 => 39,  120 => 36,  116 => 34,  114 => 33,  109 => 31,  101 => 26,  97 => 25,  91 => 22,  81 => 15,  77 => 14,  73 => 13,  69 => 12,  65 => 11,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "account.create.html.twig", "/var/www/html/system/templates/account.create.html.twig");
    }
}
