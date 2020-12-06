const $ = window.jQuery;
const $window = window.$window || $(window);

export const remove_trailing_slash = (str) => {
    if (str.substr(-1) === '/') {
        return str.substr(0, str.length - 1);
    }
    return str;
};

export const trailing_slash_it = (str) => {
    return remove_trailing_slash(str) + '/';
};