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

/* library/darkfaun.html.twig */
class __TwigTemplate_7552778aa1c1f50c9ea992b353bf476f extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\"> <a style=\"float: right;\" href=\"?subtopic=creatures&race=darkmagician\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a> <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=carnisylvandark\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a> <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\"> <h2 style=\"float: right;\">Dark Fauns</h2> <img src=\"images/library/darkfaun.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\"> <p>Dark Fauns are stronger and more aggressive than common <a href=\"?subtopic=creatures&race=faun\">Fauns</a>.</p> <p>Dark Fauns have 1100 hitpoints. They are strong against death, earth and physical damage. On the other hand, they are weak against energy, fire and holy damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p> <p>Dark Fauns yield 900 experience points. They carry fairy wings, gold coins, shimmering beetles, strong health potions and sometimes other items with them.</p> </div></div>";
    }

    public function getTemplateName()
    {
        return "library/darkfaun.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/darkfaun.html.twig", "/var/www/html/system/templates/library/darkfaun.html.twig");
    }
}
