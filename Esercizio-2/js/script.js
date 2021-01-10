const app = new Vue ({
  el: '#root',
  data:{
    albums: [],
  },
  mounted: function () {
    axios.get('http://localhost/php-ajax-dischi/Esercizio-2/database/database.php')
    .then((result) => {
      this.albums = result.data.response;
    })
  },
})
