Vue.component('tvshow-info', {
  template: '#tvshow-info-template',
  props: ['name', 'rating', 'desc']
});

var vm = new Vue({
  el: '#tvshow-info',

  data: {
    name: 'tvshow name',
    rating: 0,
    desc: 'description'
  },

  methods: {
    changeShow: function(name, rating, desc) {
      this.name = name;
      this.rating = rating;
      this.desc = desc;
    }
  }
});
