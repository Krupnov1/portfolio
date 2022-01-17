"use strict";

const vueHeaderFilter = {
    name: 'vue-header-filter', 
    data() {
        return {
            userSearch: '',
        }
    },

    template: `
        <form action="#" class="formHead" @submit.prevent="$parent.$refs.view.filter(userSearch)">
            <div class="formBrowse">
                <span>Browse</span>
                <i class="fas fa-caret-down"></i>
            </div>
            <input type="text" placeholder="Search for Item..." v-model="userSearch">
            <button>
                <i class="fas fa-search"></i>
            </button>
        </form>`
};

export default vueHeaderFilter;