<?php
/**
 * Code compleation for CakePHP Helpers in Eclipse PDT
 *
 * @author   nojimage (http://php-tips.com/)
 * @original Mark Story | http://mark-story.com/posts/view/code-completion-for-cakephp-in-eclipse
 * @link     https://gist.github.com/532923
 */
// stop page loading
exit;

if (false) {
    // reference helpers so Eclipse provides code completion
    // -- Deprecated Helper
    $ajax       = new AjaxHelper();
    $javascript = new JavascriptHelper();

    // -- Core Helpers
    $cache     = new CacheHelper();
    $form      = new FormHelper();
    $html      = new HtmlHelper();
    $js        = new JsHelper();
    $number    = new NumberHelper();
    $paginator = new PaginatorHelper();
    $rss       = new RssHelper();
    $session   = new SessionHelper();
    $text      = new TextHelper();
    $time      = new TimeHelper();
    $xml       = new XmlHelper();

    // -- Plugin Helpers
    #$custom = new CustomHelper();

    // -- View
    // If you want code hint can't write each view files. comment out this.
    #$this = new CodeCompletionView();

    /**
     * for Eclipse code completion class
     */
    class CodeCompletionView extends ThemeView {

        /**
         * @var AjaxHelper
         * @deprecated
         */
        var $Ajax;

        /**
         * @var JavascriptHelper
         * @deprecated
         */
        var $Javascript;

        /**
         * @var CacheHelper
         */
        var $Cache;

        /**
         * @var FormHelper
         */
        var $Form;

        /**
         * @var HtmlHelper
         */
        var $Html;

        /**
         * @var JsHelper
         */
        var $Js;

        /**
         * @var NumberHelper
         */
        var $Number;

        /**
         * @var PaginatorHelper
         */
        var $Paginator;

        /**
         * @var RssHelper
         */
        var $Rss;

        /**
         * @var SessionHelper
         */
        var $Session;

        /**
         * @var TextHelper
         */
        var $Text;

        /**
         * @var TimeHelper
         */
        var $Time;

        /**
         * @var XmlHelper
         */
        var $Xml;

        // == Plugin Helpers

        /**
         * @var CustomHelper
         */
        #var $Custom;
    }
}
