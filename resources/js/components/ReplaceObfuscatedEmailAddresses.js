const $ = window.jQuery;
const $window = window.$window || $(window);

/**
 * Replaces elements with the defined class with an anchor tag containing a mailto: protocol href.
 *
 * If the targeted element has the data-email attribute containing an email address in the format of
 * example[at]domain[dot]com, the inner text will be preserved and the obfuscated address in the data attribute will be
 * used in the link.
 *
 * If not data attribute is present, the inner text of the element is assumed to have the obfuscated address.
 *
 * `class` and `id` attributes are preserved.
 */
const ReplaceObfuscatedEmailAddresses = {

    class_name: 'ObfuscatedEml',

    init () {

        const elements = document.getElementsByClassName(this.class_name);

        if (elements.length) {
            [].forEach.call(elements, (element) => {
                let email, text;

                if (element.hasAttribute('data-email')) {
                    email = this.deobfuscate(element.getAttribute('data-email'));
                    text = element.innerHTML;

                } else {
                    email = this.deobfuscate(element.innerHTML);
                    text = email;
                }

                let link = document.createElement('a');
                link.innerHTML = text;
                link.setAttribute('id', element.getAttribute('id'));
                link.setAttribute('class', element.getAttribute('class'));
                link.setAttribute('href', 'mailto:' + email + '?subject=Website%20Enquiry');
                element.parentNode.replaceChild(link, element);
            });
        }

    },

    deobfuscate (text) {
        return text.replace(/\[(at|dot)]/g, function (match) {
            if (match === '[at]')
                return '@';
            if (match === '[dot]')
                return '.';
            return match;
        });
    }

};

export default ReplaceObfuscatedEmailAddresses;