const $ = window.jQuery;
const $window = window.$window || $(window);

/**
 * Intercept clicks on any anchor tag and if the anchor is linking to an on page ID, animate the scroll to the targeted
 * element.
 *
 * This only works if the href contains a value beginning with '#'. e.g; #about-section. You can modify this behaviour
 * by changing the this.link_is_targeting_on_page_anchor() method.
 *
 * If the clicked element has a `data-toggle=xxx` attribute, it won't be handled. You can modify this behaviour by
 * changing the this.is_excluded() method.
 */
const AnimateOnPageLinks = {

    duration: 800,
    offset: -100,

    init () {

        $('a').on('click', (e) => {

            let $link = $(e.target);

            if (this.is_excluded($link)) {
                return;
            }

            let href = $link.attr('href');

            if (this.link_is_targeting_on_page_anchor(href)) {

                let $target_element = $(href);
                if (!$target_element.length) {
                    return;
                }

                e.preventDefault();

                let offset = ($target_element.data('scroll-to-offset') === undefined)
                    ? this.offset
                    : $target_element.data('scroll-to-offset');

                let scroll_top = $target_element.offset().top + offset;

                // subtract any additional height considerations to scroll_top (e.g; height of sticky header)
                //scroll_top -= $('.sticky-page-header').outerHeight();

                $('html, body').animate({scrollTop: scroll_top}, this.duration, 'swing', () => $target_element.trigger('scrolled_to'));
            }

        });

    },

    is_excluded ($selector) {
        return !!$selector.data('toggle');
    },

    link_is_targeting_on_page_anchor (link) {
        return /^#/.test(link);
    }

};

export default AnimateOnPageLinks;