import Layout from "../vue/layout";
//import Pages from "../vue/pages";
//import Common from "../vue/common";

export default vue => {
    for (var property in Layout) {
        vue.component("layout-" + property.toLowerCase(), Layout[property]);
    }
    /*
    for (var property in Pages) {
        vue.component('page-' + property.toLowerCase(), Pages[property]);
    }

    for (var property in Common) {
        vue.component('common-' + property.toLowerCase(), Common[property]);
    }
    */
};
