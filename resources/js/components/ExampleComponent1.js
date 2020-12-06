const $ = window.jQuery;
const $window = window.$window || $(window);

const ExampleComponent1 = {

    init () {
        var $module = $('.ExampleComponent1');
        if (!$module.length)
            return;

        $module.each((index, element) => {
            this.each(element);
        });
    },

    each (element) {

        let $item = $(element);

        // do something here
        //alert('Example 1 is working...');

    }

};

export default ExampleComponent1;