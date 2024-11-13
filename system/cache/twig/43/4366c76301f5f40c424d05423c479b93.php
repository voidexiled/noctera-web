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

/* library/lionmonk.html.twig */
class __TwigTemplate_bade8e3426a4d20ac25e9d586b64a46a extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\"> <a style=\"float: right;\" href=\"?subtopic=creatures&race=moohtahwarrior\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a> <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=monk\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a> <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\"> <h2 style=\"float: right;\">Monks Of The Order</h2> <img src=\"images/library/lionmonk.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\"> <p>The monks of the Order of the Lion are dedicated to their cause. Their main focus being helping and supporting the good citizens of Bounac, their life is comprised of hard labour and deprivations. But also the joy and laughter of the people.</p> <p>Monks Of The Order have 240 hitpoints. They are strong against death and holy damage. On the other hand, they are weak against physical damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p> <p>Monks Of The Order yield 200 experience points. They carry breads, gold coins and sometimes other items with them.</p> </div></div>";
    }

    public function getTemplateName()
    {
        return "library/lionmonk.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/lionmonk.html.twig", "/var/www/html/system/templates/library/lionmonk.html.twig");
    }
}
