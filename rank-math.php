<?php
/**
 * Rank Math customisations.
 *
 * Place this file in the root of the theme, following Rank Math guidance,
 * to keep Rank Math related filters/actions organised in one place.
 */

namespace MPX\RankMath;

if (!defined('ABSPATH')) exit;

if (!class_exists(__NAMESPACE__ . '\\RankMathMods', false)) {
    /**
     * A class to manage hooks into RankMath
     *
     * @todo: ideally, all RankMath related hooks should be in here rather that the theme or custom plugins.
     *
     * Filters:
     *  'rank_math/sitemap/remove_credit'
     *
     * @see: https://rankmath.com/kb/filters-hooks-api-developer/#how-to-add-code-snippets-to-rank-math-php
     */
    class RankMathMods
    {
        public function __construct()
        {
            // drop simple return filters here
            // remove RankMath references on public-facing sitemaps
            add_filter('rank_math/sitemap/remove_credit', '__return_true');

            // call methods
        }
    }

    // let's go!
    add_action('init', function () {
        static $instance = null;

        null === $instance ? $instance = new RankMathMods() : null;
    });
}
