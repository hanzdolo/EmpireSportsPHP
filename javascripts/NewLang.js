function text(inner){
    document.write(inner);
}

function tag(tagName, attributes, callback){
    var allAttributes = '';

    for (var attribute in attributes) {
        if (attributes.hasOwnProperty(attribute)) {
            allAttributes += attribute + " = \"" + attributes[attribute] + "\"";
        }
    }
    document.write("<" + tagName + " " + allAttributes + ">");
    callback();
    document.write("</" + tagName + ">");
}

function abbr(attributes, callback) {

    tag('abbr', attributes, callback);

}

function acronym(attributes, callback) {

    tag('acronym', attributes, callback);

}

function abbr(attributes, callback) {

    tag('abbr', attributes, callback);

}

function address(attributes, callback) {

    tag('address', attributes, callback);

}

function applet(attributes, callback) {

    tag('applet', attributes, callback);

}

function embed(attributes, callback) {

    tag('embed', attributes, callback);

}

function object(attributes, callback) {

    tag('object', attributes, callback);

}

function area(attributes, callback) {

    tag('area', attributes, callback);

}

function article(attributes, callback) {

    tag('article', attributes, callback);

}

function aside(attributes, callback) {

    tag('aside', attributes, callback);

}
function anchor(attributes, callback) {

    tag('a', attributes, callback);

}

function audio(attributes, callback) {

    tag('audio', attributes, callback);

}

function base(attributes, callback) {

    tag('base', attributes, callback);

}

function basefont(attributes, callback) {

    tag('basefont', attributes, callback);

}

function bdi(attributes, callback) {

    tag('bdi', attributes, callback);

}

function bdo(attributes, callback) {

    tag('bdo', attributes, callback);

}

function big(attributes, callback) {

    tag('big', attributes, callback);

}

function blockquote(attributes, callback) {

    tag('blockquote', attributes, callback);

}

function body(attributes, callback) {

    tag('body', attributes, callback);

}

function br(times = 1){
    for(var i = 1; i <= times; i++){
        document.write('<br/>');
    }
}

function button(attributes, callback) {

    tag('button', attributes, callback);

}

function canvas(attributes, callback) {

    tag('canvas', attributes, callback);

}

function caption(attributes, callback) {

    tag('caption', attributes, callback);

}

function center(attributes, callback) {

    tag('center', attributes, callback);

}

function cite(attributes, callback) {

    tag('cite', attributes, callback);

}

function code(attributes, callback) {

    tag('code', attributes, callback);

}

function col(attributes, callback) {

    tag('col', attributes, callback);

}

function colgroup(attributes, callback) {

    tag('colgroup', attributes, callback);

}

function colgroup(attributes, callback) {

    tag('colgroup', attributes, callback);

}

function datalist(attributes, callback) {

    tag('datalist', attributes, callback);

}

function dd(attributes, callback) {

    tag('dd', attributes, callback);

}

function del(attributes, callback) {

    tag('del', attributes, callback);

}

function details(attributes, callback) {

    tag('details', attributes, callback);

}

function dfn(attributes, callback) {

    tag('dfn', attributes, callback);

}

function dialog(attributes, callback) {

    tag('dialog', attributes, callback);

}

function dir(attributes, callback) {

    tag('dir', attributes, callback);

}

function ul(attributes, callback) {

    tag('ul', attributes, callback);

}

function div(attributes, callback) {

    tag('div', attributes, callback);

}

function dl(attributes, callback) {

    tag('dl', attributes, callback);

}

function dt(attributes, callback) {

    tag('dt', attributes, callback);

}

function em(attributes, callback) {

    tag('em', attributes, callback);

}

function embed(attributes, callback) {

    tag('embed', attributes, callback);

}

function fieldset(attributes, callback) {

    tag('fieldset', attributes, callback);

}

function figcaption(attributes, callback) {

    tag('figcaption', attributes, callback);

}

function figure(attributes, callback) {

    tag('figure', attributes, callback);

}

function figure(attributes, callback) {

    tag('figure', attributes, callback);

}

function font(attributes, callback) {

    tag('font', attributes, callback);

}

function footer(attributes, callback) {

    tag('footer', attributes, callback);

}

function form(attributes, callback) {

    tag('form', attributes, callback);

}

function frame(attributes, callback) {

    tag('frame', attributes, callback);

}

function frameset(attributes, callback) {

    tag('frameset', attributes, callback);

}

function h1(attributes, callback) {

    tag('h1', attributes, callback);

}

function h6(attributes, callback) {

    tag('h6', attributes, callback);

}

function head(attributes, callback) {

    tag('head', attributes, callback);

}

function header(attributes, callback) {

    tag('header', attributes, callback);

}

function hr(times = 1) {

   for(i = 1; i <= times; i++){
       document.write('<hr/>');
   }

}

function html(attributes, callback) {

    tag('html', attributes, callback);

}

function iframe(attributes, callback) {

    tag('iframe', attributes, callback);

}

function img(attributes, callback) {

    tag('img', attributes, callback);

}

function input(attributes, callback) {

    tag('input', attributes, callback);

}

function ins(attributes, callback) {

    tag('ins', attributes, callback);

}

function kbd(attributes, callback) {

    tag('kbd', attributes, callback);

}

function keygen(attributes, callback) {

    tag('keygen', attributes, callback);

}

function label(attributes, callback) {

    tag('label', attributes, callback);

}

function input(attributes, callback) {

    tag('input', attributes, callback);

}

function legend(attributes, callback) {

    tag('legend', attributes, callback);

}

function fieldset(attributes, callback) {

    tag('fieldset', attributes, callback);

}

function li(attributes, callback) {

    tag('li', attributes, callback);

}

function link(attributes, callback) {

    tag('link', attributes, callback);

}

function main(attributes, callback) {

    tag('main', attributes, callback);

}

function map(attributes, callback) {

    tag('map', attributes, callback);

}

function mark(attributes, callback) {

    tag('mark', attributes, callback);

}

function menu(attributes, callback) {

    tag('menu', attributes, callback);

}

function menuitem(attributes, callback) {

    tag('menuitem', attributes, callback);

}

function meta(attributes, callback) {

    tag('meta', attributes, callback);

}

function meter(attributes, callback) {

    tag('meter', attributes, callback);

}

function nav(attributes, callback) {

    tag('nav', attributes, callback);

}

function noframes(attributes, callback) {

    tag('noframes', attributes, callback);

}

function noscript(attributes, callback) {

    tag('noscript', attributes, callback);

}

function object(attributes, callback) {

    tag('object', attributes, callback);

}

function ol(attributes, callback) {

    tag('ol', attributes, callback);

}

function optgroup(attributes, callback) {

    tag('optgroup', attributes, callback);

}

function option(attributes, callback) {

    tag('option', attributes, callback);

}

function output(attributes, callback) {

    tag('output', attributes, callback);

}
function parag(attributes, callback) {

    tag('parag', attributes, callback);

}

function param(attributes, callback) {

    tag('param', attributes, callback);

}

function pre(attributes, callback) {

    tag('pre', attributes, callback);

}

function progress(attributes, callback) {

    tag('progress', attributes, callback);

}

function rp(attributes, callback) {

    tag('rp', attributes, callback);

}

function rt(attributes, callback) {

    tag('rt', attributes, callback);

}

function ruby(attributes, callback) {

    tag('ruby', attributes, callback);

}

function samp(attributes, callback) {

    tag('samp', attributes, callback);

}

function script(attributes, callback) {

    tag('script', attributes, callback);

}

function section(attributes, callback) {

    tag('section', attributes, callback);

}

function select(attributes, callback) {

    tag('select', attributes, callback);

}

function small(attributes, callback) {

    tag('small', attributes, callback);

}

function source(attributes, callback) {

    tag('source', attributes, callback);

}

function video(attributes, callback) {

    tag('video', attributes, callback);

}

function audio(attributes, callback) {

    tag('audio', attributes, callback);

}

function span(attributes, callback) {

    tag('span', attributes, callback);

}

function strike(attributes, callback) {

    tag('strike', attributes, callback);

}

function del(attributes, callback) {

    tag('del', attributes, callback);

}

function strong(attributes, callback) {

    tag('strong', attributes, callback);

}

function style(attributes, callback) {

    tag('style', attributes, callback);

}

function sub(attributes, callback) {

    tag('sub', attributes, callback);

}

function summary(attributes, callback) {

    tag('summary', attributes, callback);

}

function details(attributes, callback) {

    tag('details', attributes, callback);

}

function sup(attributes, callback) {

    tag('sup', attributes, callback);

}

function table(attributes, callback) {

    tag('table', attributes, callback);

}

function tbody(attributes, callback) {

    tag('tbody', attributes, callback);

}

function td(attributes, callback) {

    tag('td', attributes, callback);

}

function textarea(attributes, callback) {

    tag('textarea', attributes, callback);

}

function tfoot(attributes, callback) {

    tag('tfoot', attributes, callback);

}

function th(attributes, callback) {

    tag('th', attributes, callback);

}

function thead(attributes, callback) {

    tag('thead', attributes, callback);

}

function time(attributes, callback) {

    tag('time', attributes, callback);

}

function title(attributes, callback) {

    tag('title', attributes, callback);

}

function tr(attributes, callback) {

    tag('tr', attributes, callback);

}

function track(attributes, callback) {

    tag('track', attributes, callback);

}

function video(attributes, callback) {

    tag('video', attributes, callback);

}

function audio(attributes, callback) {

    tag('audio', attributes, callback);

}

function tt(attributes, callback) {

    tag('tt', attributes, callback);

}

function ul(attributes, callback) {

    tag('ul', attributes, callback);

}

function video(attributes, callback) {

    tag('video', attributes, callback);

}

function wbr(attributes, callback) {

    tag('wbr', attributes, callback);

}


